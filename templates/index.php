<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

{% for v in news %}
    <a href="/news/one/?id={{ v.id }}">{{ v.title }}</a>
    <i>Автор:{{ v.author }} </i><br>
{% endfor %}


</body>
</html>