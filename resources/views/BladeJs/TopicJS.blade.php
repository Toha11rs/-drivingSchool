<Script>
    let questions = {!! $questions->toJson() !!};
    let currentQuestionIndex = 0;
    let resultText = document.getElementById('result');
    let answerButton = document.getElementById('answer-btn');
    let nextButton = document.getElementById('next-btn');
    let selectedAnswer = null;
    let answeredQuestions = new Array(questions.length).fill(false);

    function showQuestion() {
        if (currentQuestionIndex < questions.length) {
            let currentQuestion = questions[currentQuestionIndex];
            let questionElement = document.getElementById('question');
            let optionsList = document.getElementById('options');
            let counterElement = document.getElementById('counter');

            questionElement.textContent = currentQuestion.question;
            optionsList.innerHTML = '';
            counterElement.textContent = `Вопрос ${currentQuestionIndex + 1} из ${questions.length}`;

            currentQuestion.answers.forEach(function (answer) {
                let li = document.createElement('li');
                li.textContent = answer.answer;
                li.addEventListener('click', function () {
                    if (!answeredQuestions[currentQuestionIndex]) {
                        if (selectedAnswer) {
                            selectedAnswer.classList.remove('selected');
                        }
                        selectedAnswer = li;
                        selectedAnswer.classList.add('selected');
                        answerButton.style.display = 'block';

                        // Устанавливаем свойство selected для выбранного ответа
                        currentQuestion.answers.forEach(answer => {
                            answer.selected = false;
                            if (answer.answer === li.textContent) {
                                answer.selected = true;
                            }
                        });
                    }
                });
                optionsList.appendChild(li);
            });

            nextButton.style.display = 'none';
        } else {
            resultText.textContent = 'Тест завершен!';
            document.getElementById('quiz').innerHTML = '';
        }

        updateProgress();
    }

    function checkAnswer(isCorrect) {
        let answerTip = questions[currentQuestionIndex].answer_tip; // Получаем объяснение
        let answerTipElement = document.getElementById('answer-tip');

        if (isCorrect) {
            resultText.textContent = 'Правильно!';
            selectedAnswer.classList.add('correct');
        } else {
            resultText.textContent = 'Неправильно.';
            selectedAnswer.classList.add('incorrect');
        }

        answerTipElement.textContent = answerTip; // Отображаем объяснение
        answerButton.style.display = 'none';
        nextButton.style.display = 'block';
        answeredQuestions[currentQuestionIndex] = true;
    }
    function updateProgress() {
        let progressElement = document.getElementById('progress');
        progressElement.innerHTML = '';

        answeredQuestions.forEach(function (answered, index) {
            let square = document.createElement('div');
            square.className = 'square';
            square.textContent = index + 1; // Номер вопроса

            if (answered) {
                let question = questions[index];
                let selectedAnswer = question.answers.find(answer => answer.selected);
                console.log(selectedAnswer);
                if (selectedAnswer) {
                    if (selectedAnswer.is_correct) {
                        square.classList.add('correct');
                    } else {
                        square.classList.add('incorrect');
                    }
                }
            }

            progressElement.appendChild(square);
        });
    }

    document.getElementById('answer-btn').addEventListener('click', function () {
        let isCorrect = questions[currentQuestionIndex].answers.find(function (answer) {
            return answer.answer === selectedAnswer.textContent;
        }).is_correct;

        checkAnswer(isCorrect);
        answerButton.style.display = 'none';
    });

    document.getElementById('next-btn').addEventListener('click', function () {
        currentQuestionIndex++;
        showQuestion();
        resultText.textContent = '';
    });

    showQuestion();

</Script>
