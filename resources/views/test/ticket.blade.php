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
        var questions = [];
        var currentQuestionIndex = 0;
        var correctAnswers = 0;
        var incorrectAnswers = [];

        $.ajax({
            url: 'http://127.0.0.1:8000/api/ticket/2',
            method: 'GET',
            success: function(response) {
                questions = response;
                showQuestion(currentQuestionIndex);
            },
            error: function(error) {
                console.log(error);
            }
        });

        function showQuestion(index) {
            var question = questions[index];
            var questionHtml = '<div class="question">' +
                '<h3>Вопрос ' + question.question_number + '</h3>' +
                '<p>' + question.question + '</p>' +
                '<img src="' + question.image + '" alt="">' +
                '<ul>';
            question.answers.forEach(function(answer) {
                questionHtml += '<li data-answer-id="' + answer.id + '">' + answer.answer + '</li>';
            });
            questionHtml += '</ul></div>';

            $('#question-container').empty().append(questionHtml);
        }

        $(document).on('click', '.question li', function() {
            $(this).siblings().removeClass('selected');
            $(this).addClass('selected');
        });

        $(document).on('click', '#answer-btn', function() {
            var selectedAnswer = $('.question li.selected');
            if (selectedAnswer.length > 0) {
                var answerId = selectedAnswer.data('answer-id');
                var isCorrect = questions[currentQuestionIndex].answers.find(function(answer) {
                    return answer.id === answerId;
                }).is_correct;

                selectedAnswer.removeClass('selected');

                if (isCorrect) {
                    selectedAnswer.addClass('correct');
                    correctAnswers++;
                } else {
                    selectedAnswer.addClass('incorrect');
                    incorrectAnswers.push({
                        question_number: questions[currentQuestionIndex].question_number,
                        your_answer: selectedAnswer.text(),
                        correct_answer: questions[currentQuestionIndex].answers.find(function(answer) {
                            return answer.is_correct;
                        }).answer
                    });
                }

                $('#answer-btn').hide();
                $('#next-question-btn').show();
            }
        });

        $(document).on('click', '#next-question-btn', function() {
            currentQuestionIndex++;
            if (currentQuestionIndex < questions.length) {
                showQuestion(currentQuestionIndex);
                $('.question li').removeClass('correct incorrect');
                $('#answer-btn').show();
                $('#answer-tip').empty();
                $('#next-question-btn').hide();
            } else {
                showResults();
            }
        });
        if (incorrectAnswers.length > 0) {
            var table = $('#result-table');
            table.show();
            var tbody = table.find('tbody');
            incorrectAnswers.forEach(function(item) {
                var row = '<tr><td>' + item.question_number + '</td><td>' + item.your_answer + '</td><td>' + item.correct_answer + '</td></tr>';
                tbody.append(row);
            });
        }
        function showResults() {
            if (incorrectAnswers.length > 0) {
                var table = $('#result-table');
                table.show();
                var tbody = table.find('tbody');
                incorrectAnswers.forEach(function(item) {
                    var row = '<tr><td>' + item.question_number + '</td><td>' + item.your_answer + '</td><td>' + item.correct_answer + '</td></tr>';
                    tbody.append(row);
                });
            }
        }

    });
</script>
</body>
</html>
