<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <!-- Содержимое модального окна -->
        @foreach($topics as $topic)
            <a href="{{ route('topic', ['topicId' => $topic->id]) }}"><p>{{ $topic->topic }}</p></a>
        @endforeach
    </div>
</div>

<Script>
    let modal = document.getElementById('myModal');
    let btn = document.getElementById('openModalBtn');
    let span = document.getElementsByClassName('close')[0];

    // Открываем модальное окно при клике на кнопку
    btn.onclick = function() {
        modal.style.display = 'block';
    };

    // Закрываем модальное окно при клике на "закрыть"
    span.onclick = function() {
        modal.style.display = 'none';
    };

    // Закрываем модальное окно при клике вне модального окна
    window.onclick = function(event) {
        if (event.target === modal) {
            modal.style.display = 'none';
        }
    };
</Script>


<style>
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        /* Добавляем прокрутку к модальному окну */
        background-color: rgba(0, 0, 0, 0.5);
    }

    .modal-content {
        background-color: #fefefe;
        margin: 15% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 30%;
        height: 100rem;
        max-height: 40rem; /* Задаем максимальную высоту блока контента */
        overflow: auto; /* Добавляем прокрутку к блоку контента */
    }

    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }
</style>
