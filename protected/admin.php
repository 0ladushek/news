<?php



$data = App\Models\Article::findAll();

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Админ панель</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<div class="row">
    <div class="container">
        <table class="table table-bordered">
            <tr>
                <?php foreach ($data[0] as $k => $v): ?>
                    <td> <?php echo $k ?> </td>
                <?php endforeach; ?>
            </tr>
            <?php foreach ($data as $v): ?>
                <tr>
                    <td><?php echo $v->id; ?></td>
                    <td><?php echo $v->title; ?></td>
                    <td><?php echo $v->text; ?></td>
                    <td><?php echo $v->date; ?></td>
                    <td><?php echo $v->author_id; ?></td>
                    <td><a href=""> Удалить </a></td>
                    <td><a href="">Редактировать</a></td>
                </tr>
            <?php endforeach; ?>
        </table>

    </div>
</body>
</html>
