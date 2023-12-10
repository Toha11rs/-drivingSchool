<script>
    $(document).ready(function() {
        let questions = [];
        let currentQuestionIndex = 0;
        let correctAnswers = 0;
        let incorrectAnswers = [];
        let fakeQuestions = 20;
        let errorCount = 0;
        let UserAnswer = [];


        function initializeQuiz() {
            const ticketId = Math.floor(Math.random() * 40) + 1;
            const apiUrl = `http://127.0.0.1:8000/api/ticket/${ticketId}`;

            $.ajax({
                url: apiUrl,
                method: 'GET',
                success: function(response) {
                    questions = response;
                    showQuestion(currentQuestionIndex);
                },
                error: function(error) {
                    console.log(error);
                }
            });

            setupEventListeners();
        }
        function showQuestion(index) {
            const question = questions[index];
            let questionHtml = `<div class="question">
            <h3>Вопрос ${question.question_number}</h3>
            <p>${question.question}</p>


            <img src="${question.image}" alt="asd">
            <ul>`;
            console.log(question.image);
            question.answers.forEach(answer => {
                questionHtml += `<li data-answer-id="${answer.id}">${answer.answer}</li>`;
            });

            questionHtml += '</ul></div>';
            $('#question-container').empty().append(questionHtml);
            let counterElement = document.getElementById('counter');
            counterElement.textContent = `Вопрос ${currentQuestionIndex + 1} из ${fakeQuestions}`;
        }

        function setupEventListeners() {
            $(document).on('click', '.question li', function() {
                $(this).siblings().removeClass('selected');
                $(this).addClass('selected');
            });

            $(document).on('click', '#answer-btn', function() {
                const selectedAnswer = $('.question li.selected');

                if (selectedAnswer.length > 0) {
                    const answerId = selectedAnswer.data('answer-id');
                    const isCorrect = questions[currentQuestionIndex].answers.find(answer => answer.id === answerId).is_correct;

                    selectedAnswer.removeClass('selected');
                    handleAnswer(isCorrect);
                    currentQuestionIndex++;

                    if (currentQuestionIndex < questions.length) {
                        showQuestion(currentQuestionIndex);
                    } else {
                        showResults();
                    }
                }
            });
        }



        function showResults() {
            const table = $('#result-table');
            table.show();
            const tbody = table.find('tbody');

            incorrectAnswers.forEach(item => {
                const row = `<tr>
                <td>${item.question_number}</td>
                <td>${item.your_answer}</td>
                <td>${item.correct_answer}</td>
            </tr>`;
                tbody.append(row);
            });
        }


        function loadRandomQuestions() {
            const apiUrl = 'http://127.0.0.1:8000/api/tickets';
            $.ajax({
                url: apiUrl,
                method: 'GET',
                success: function (response) {
                    const randomQuestions = response.slice(0, 5); // Получаем 5 случайных вопросов
                    questions = [...questions, ...randomQuestions]; // Добавляем к текущим вопросам

                    // Показываем текущий вопрос после добавления новых
                    showCurrentQuestion();
                },
                error: function (error) {
                    console.log(error);
                }
            });
        }

        function handleAnswer(isCorrect) {
            if (isCorrect) {
                correctAnswers++;
                $('.question li.selected').addClass('correct');
            } else {
                errorCount++;
                const correctAnswer = questions[currentQuestionIndex].answers.find(answer => answer.is_correct);
                incorrectAnswers.push({
                    question_number: questions[currentQuestionIndex].question_number,
                    your_answer: $('.question li.selected').text(),
                    correct_answer: correctAnswer.answer
                });
                $('.question li.selected').addClass('incorrect');

                if (incorrectAnswers.length === 1) {
                    loadRandomQuestions();
                } else if (incorrectAnswers.length === 2) {
                    loadRandomQuestions();
                }
                if (currentQuestionIndex == 19 && errorCount <= 1) {

                    fakeQuestions = 25;
                }
                if (currentQuestionIndex == 19 && errorCount >= 2) {
                    fakeQuestions = 30;
                }

                else if (currentQuestionIndex === questions.length - 1) { // Если это последний вопрос
                    showFinalResult(); // Показываем итоговый результат
                }
            }
        }

        function showFinalResult() {
            let resultMessage = '';

            if (incorrectAnswers.length > 2) {
                resultMessage = 'Экзамен не сдан';
            } else {
                resultMessage = 'Экзамен сдан';
            }

            const resultContainer = $('#result-container');
            resultContainer.empty().text(resultMessage);

            if (incorrectAnswers.length > 2) {
                resultContainer.css('background-color', 'red');
            } else {
                resultContainer.css('background-color', 'green');
            }
            resultContainer.show();
        }
        initializeQuiz();

    });

</script>
