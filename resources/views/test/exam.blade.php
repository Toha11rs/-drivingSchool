<!DOCTYPE html>
<html>
<head>
    <title>Тест ПДД</title>
    <style>
        .question {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
        }
        .selected {
            background-color: yellow;
        }
        .correct {
            background-color: green;
        }
        .incorrect {
            background-color: red;
        }
    </style>
</head>
<body>
<div id="question-container"></div>
<button id="answer-btn">Ответить</button>
<div id="answer-tip"></div>
<button id="next-question-btn" style="display:none;">Перейти к следующему вопросу</button>
<table id="result-table" style="display:none;">
    <thead>
    <tr>
        <th>Номер вопроса</th>
        <th>Ваш ответ</th>
        <th>Правильный ответ</th>
    </tr>
    </thead>
    <tbody>
    </tbody>
</table>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        let questions = [];
        let currentQuestionIndex = 0;
        let correctAnswers = 0;
        let incorrectAnswers = [];

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
            <img src="${question.image}" alt="">
            <ul>`;

            question.answers.forEach(answer => {
                questionHtml += `<li data-answer-id="${answer.id}">${answer.answer}</li>`;
            });

            questionHtml += '</ul></div>';
            $('#question-container').empty().append(questionHtml);
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

        function handleAnswer(isCorrect) {
            if (isCorrect) {
                correctAnswers++;
                $('.question li.selected').addClass('correct');
            } else {
                const correctAnswer = questions[currentQuestionIndex].answers.find(answer => answer.is_correct);
                incorrectAnswers.push({
                    question_number: questions[currentQuestionIndex].question_number,
                    your_answer: $('.question li.selected').text(),
                    correct_answer: correctAnswer.answer
                });
                $('.question li.selected').addClass('incorrect');
            }
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

        initializeQuiz();
    });

</script>
</body>
</html>
