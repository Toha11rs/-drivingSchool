$(document).ready(function () {
    const ticket = $("#ticket");


    ticket.click(function () {


        $.ajax({
            url: 'http://127.0.0.1:8000/api/ticket/1',
            method: 'GET',
            success: function (response) {
                var questions = response;
                questions.forEach(function (question) {
                    var questionHtml = '<div class="question">' +
                        '<h3>Вопрос ' + question.question_number + '</h3>' +
                        '<p>' + question.question + '</p>' +
                        '<img src="' + question.image + '" alt="">' +
                        '<ul>';
                    question.answers.forEach(function (answer) {
                        questionHtml += '<li>' + answer.answer + '</li>';
                    });
                    questionHtml += '</ul></div>';
                    $('#questions-container').append(questionHtml);
                });
            },
            error: function (error) {
                console.log(error);
            }
        });
    });
});
