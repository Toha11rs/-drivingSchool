<table>
    <thead>
    <tr>
        <th>Тема</th>
        <th>Всего вопросов</th>
        <th>Правильные ответы</th>
        <th>Неправильные ответы</th>
    </tr>
    </thead>
    <tbody>

    @foreach ($presentTicket as $topicData)
        <tr>
            <td>{{ $topicData['topic'] }}</td>
            <td>{{ $topicData['count'] }}</td>
            <td>{{ $topicData['right_answer'] }}</td>
            <td>{{ $topicData['miss_answer'] }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
