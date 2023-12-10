<table>
    <thead>
    <tr>
        <th>Тема</th>
        <th>Всего вопросов</th>
        <th>Правильные </th>
        <th>Неправильные </th>
    </tr>
    </thead>
    <tbody>

    @foreach ($presentTicket as $topicData)
        <tr>
            <td>{{ $topicData['topic'] }}</td>
            <td>{{ $topicData['count'] }}</td>
            <td>{{ $topicData['right_answer'] }}</td>
            <td>{{ $topicData['miss_answer'] }}</td>
            <td>
                <div class="progress-bar" style="width: {{ ($topicData['right_answer'] / $topicData['count']) * 100 }}%; background-color: #4CAF50;height: 20px;display: inline-block;border-radius: 4px; margin-right: 2px;"></div>
                <div class="progress-bar" style="width: {{ ($topicData['miss_answer'] / $topicData['count']) * 100 }}%; background-color: #FF5733; height: 20px;display: inline-block;border-radius: 4px; margin-right: 2px;"></div>
                <div class="progress-bar" style="width: {{ ((($topicData['count'] - $topicData['right_answer'] - $topicData['miss_answer']) / $topicData['count']) * 100) }}%; background-color: #A9A9A9; height: 20px;display: inline-block;border-radius: 4px; margin-right: 2px;"></div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
