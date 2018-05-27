<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Форма добавления клиента</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>
<body>
    <header class="navbar navbar-light bg-light">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php">Clients form</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Форма</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="clients-list.php">Список</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="container">
        <h4>Форма добавления клиента</h4>
        <form method="post" name="add-client-form" action="ClientController.php">
            <div class="form-group">
                <label for="client-name">Имя</label>
                <input type="text" class="form-control" id="client-name" name="client-name" placeholder="Имя" required>
            </div>
            <div class="form-group">
                <label for="client-phone">Телефон</label>
                <input type="tel" class="form-control" id="client-phone" name="client-phone"  placeholder="+7 (900) 123-45-67" pattern="\+7\s?[\(]{0,1}9[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}" required>
            </div>
            <div class="form-group">
                <label for="client-email">email</label>
                <input type="email" class="form-control" id="client-email" name="client-email" placeholder="name@example.com" required>
            </div>
            <button type="submit" class="btn btn-primary" name="add">Добавить</button>
        </form>
    </div>
</body>
</html>


