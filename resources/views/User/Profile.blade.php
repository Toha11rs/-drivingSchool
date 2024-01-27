<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Statistics</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<header>
    <h1>Привет, {{$user->name}} </h1>

</header>
<main>
    <section class="statistics">
        <h2>Статистика</h2>
@include("User.Components.StatisticInfo")
    </section>
</main>

</body>
</html>
<Style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        line-height: 1.6;
        background-color: #f4f4f4;
    }

    header {
        background: #333;
        color: #fff;
        text-align: center;
        padding: 1em 0;
    }

    header h1 {
        margin: 0;
    }

    main {
        padding: 20px;
    }

    footer {
        text-align: center;
        padding: 1em 0;
        background: #333;
        color: #fff;
        position: absolute;
        bottom: 0;
        width: 100%;
    }

    /* Стили для блоков статистики */
    .statistics {
        background: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .statistics h2 {
        margin-top: 0;
    }

    .stat-block {
        margin-bottom: 15px;
    }

    .stat-block p {
        margin: 0;
    }

    .stat-value {
        font-weight: bold;
        color: #1a73e8;
    }
</Style>
