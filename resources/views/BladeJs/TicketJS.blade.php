<Script src="https://code.jquery.com/jquery-3.6.0.min.js"></Script>
<Script>
    $(document).ready(function() {


        const currentURL = window.location.href;

        const regex = /\/ticket\/(\d+)/;
        const match = currentURL.match(regex);

        if (match && match[1]) {
            const ticketId = match[1];
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
        }

        let questions = [];
        let currentQuestionIndex = 0;
        let correctAnswers = 0;
        let incorrectAnswers = [];
        let UserAnswer = [];
        let CountIncorrectAnswers = 0;
        function showQuestion(index) {
            const question = questions[index];
            let questionHtml = `<div class="question">
            <h3>Вопрос ${question.question_number}</h3>
           

            <img class="centerque" src="${question.image}" alt="sdf">
            <p class="questions centerque">${question.question}</p>



            <ul>`;
            question.answers.forEach(answer => {
                questionHtml += `<li class="question-var" data-answer-id="${answer.id}">${answer.answer}</li>`;
            });

            questionHtml += '</ul><div class="hint-text" id="answer-tip"></div> <button class="buttonnext" id="answer-btn">Ответить</button><button id="next-question-btn" class="buttonnext" style="display:none;">Перейти к следующему вопросу</button></div>';
            $('#question-container').empty().append(questionHtml);
        }

        $(document).on('click', '.question li', function() {
            $(this).siblings().removeClass('selected');
            $(this).addClass('selected');
        });

        $(document).on('click', '#answer-btn', function() {
            const selectedAnswer = $('.question li.selected');

            if (selectedAnswer.length > 0) {
                const answerId = selectedAnswer.data('answer-id');
                const isCorrect = questions[currentQuestionIndex].answers.find(answer => answer.id === answerId).is_correct;
                const answerTip = questions[currentQuestionIndex].answer_tip;

                selectedAnswer.removeClass('selected');

                if (isCorrect) {
                    UserAnswer.push({
                        is_correct:true,
                        question_id: questions[currentQuestionIndex].id,
                        type:"ticket"
                    });

                    selectedAnswer.addClass('correct');
                    correctAnswers++;
                } else {
                    UserAnswer.push({
                        is_correct:false,
                        question_id: questions[currentQuestionIndex].id,
                        type:"ticket",
                    });
                    CountIncorrectAnswers++;
                    selectedAnswer.addClass('incorrect');
                    const correctAnswer = questions[currentQuestionIndex].answers.find(answer => answer.is_correct).answer;
                    incorrectAnswers.push({
                        question_number: questions[currentQuestionIndex].question_number,
                        your_answer: selectedAnswer.text(),
                        correct_answer: correctAnswer,
                        question_id: questions[currentQuestionIndex].id
                    });
                }

                $('#answer-btn').hide();
                $('#next-question-btn').show();

                // Display answer tip
                $('#answer-tip').text("Пояснение к ответу: " + answerTip).show();
                $('#answer-tip').text(answerTip).show();

            }
        });

        $(document).on('click', '#next-question-btn', function() {
            currentQuestionIndex++;

            if (currentQuestionIndex < questions.length) {
                showQuestion(currentQuestionIndex);
                $('.question li').removeClass('correct incorrect');
                $('#answer-btn').show();
                $('#answer-tip').empty().hide();
                $('#next-question-btn').hide();
            } else {
                showResults();
            }
        });

        function showResults() {
            submitFormWithAnswers(UserAnswer)
            if (incorrectAnswers.length > 0) {
                const table = $('#result-table');
                table.show();
                const tbody = table.find('tbody');

                console.log("POST ОТПРАВЛЕНО");
                incorrectAnswers.forEach(item => {
                    const row = `<tr>
                    <td>${item.question_number}</td>
                    <td>${item.your_answer}</td>
                    <td>${item.correct_answer}</td>
                </tr>`;
                    tbody.append(row);
                });
            }

        }
    });

    function submitFormWithAnswers(UserAnswer) {

        const form = document.getElementById('myForm');

        let stringifiedIncorrectAnswers = JSON.stringify(UserAnswer);
        form.querySelector('input[name="correctAnswers"]').value = stringifiedIncorrectAnswers;
        form.querySelector('input[name="incorrectAnswers"]').value = UserAnswer;

        form.submit();
    }




</Script>
