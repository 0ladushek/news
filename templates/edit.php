<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


    <title>Document</title>
</head>
<body>


<div class="row">
    <div class="container">
        <form action="/admin/save" method="post">

            <div class="col-md-6 col-md-offset-3">


                    <span>ID: {{ article.id }}</span>
                    <input type="hidden" name="id" value="<?=$this->article->id?>">

                    <div class="form-group">
                        <input type="text"  name="title" class="form-control" placeholder="title" value="{{ article.title }}">
                    </div>

                    <div class="form-group">
                        <textarea id="{{ article.id }}" name="text"  class="form-control" cols="30" rows="10" placeholder="text">
                            {{ article.text }}
                        </textarea>
                    </div>

                    <div class="form-group">
                        <label for="{{ article.id }}"> {{ article.date }} </label>
                        <input type="date" name="date" class="form-control" >
                    </div>

                    <input type="submit" class="btn btn-primary btn-lg">

            </div>

        </form>

    </div>
</div>


</body>
</html>