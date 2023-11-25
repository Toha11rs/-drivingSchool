<!-- HTML шаблон для викторины -->
<div id="quiz">
    <h2 id="question"></h2>
    <ul id="options"></ul>
    <p id="result"></p>
    <button id="next-btn" style="display: none;">Следующий вопрос</button>
</div>

<script>
    let questions = {!! $questions->toJson() !!};
    let currentQuestionIndex = 0;
    let resultText = document.getElementById('result');
    let nextButton = document.getElementById('next-btn');

    function showQuestion() {
        if (currentQuestionIndex < questions.length) {
            let currentQuestion = questions[currentQuestionIndex];
            let questionElement = document.getElementById('question');
            let optionsList = document.getElementById('options');
            questionElement.textContent = currentQuestion.question;
            optionsList.innerHTML = '';

            currentQuestion.answers.forEach(function (answer) {
                let li = document.createElement('li');
                li.textContent = answer.answer;
                li.addEventListener('click', function () {
                    checkAnswer(answer.is_correct);
                });
                optionsList.appendChild(li);
            });

            nextButton.style.display = 'none';
        } else {
            resultText.textContent = 'Тест завершен!';
            document.getElementById('quiz').innerHTML = '';
        }
    }

    function checkAnswer(isCorrect) {
        if (isCorrect) {
            resultText.textContent = 'Правильно!';
        } else {
            resultText.textContent = 'Неправильно.';
        }
        nextButton.style.display = 'block';
    }

    document.getElementById('next-btn').addEventListener('click', function () {
        currentQuestionIndex++;
        showQuestion();
        resultText.textContent = '';
    });

    // Начинаем викторину
    showQuestion();
</script>
