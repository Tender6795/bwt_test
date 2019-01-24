<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Форма обратной связи</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link href='http://bootstraptema.ru/snippets/form/2017/recaptcha/custom.css' rel='stylesheet' type='text/css'>
    <script src='https://www.google.com/recaptcha/api.js?render=6Ld_vYoUAAAAAK3I-dxAw0HdWtIp7JuFaD7WSv6h'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="http://bootstraptema.ru/snippets/form/2017/recaptcha/validator.js"></script>
    <script src="http://bootstraptema.ru/snippets/form/2017/recaptcha/contact.js"></script>
    <style>
        body{
            top:20px;
            left:30px;
            position: absolute;
        }
    </style>
</head>
<body>
<form action="../Controller/pagesController.php" method="post">
    <input type="hidden" value="<?= $_SESSION["id"] ?>">
    <input type="submit" value="Погода" class="btn btn-success btn-send" name="button">
    <input type="submit" value="Форма обратной связи" class="btn btn-success btn-send" name="button">
    <input type="submit" value="Список фидбеков" class="btn btn-success btn-send" name="button">
    <input type="submit" value="Выход" class="btn btn-success btn-send" name="button">
</form>
<form action="../Controller/callbackController.php" method="post">
    <div class="messages"></div>

    <div class="controls">

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_msg">Сообщение *</label>
                    <textarea id="form_msg" type="text" name="message" class="form-control textarea"
                              placeholder="Пожалуйста введите своё сообщение *" required="required"
                              data-error="Не должно быть пустым"></textarea>
                    <div class="help-block with-errors"></div>
                </div>
            </div>

        </div>


        <div class="col-md-12">
            <input type="submit" class="btn btn-success btn-send" value="Отправить">
        </div>

    </div>
</form>
</body>
</html>

