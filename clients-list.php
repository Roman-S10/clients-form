<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Форма добавления клиента</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
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
        <h3>Список клиентов</h3>

        <?php
        $link = mysqli_connect('127.0.0.1', 'root', '', 'test_db');
        $sql = "SELECT * FROM clients WHERE clients.deleted != 1";
        $result = mysqli_query($link, $sql);
        mysqli_close($link);
        $row = mysqli_fetch_array($result);
        ?>

        <table id="example" class="display" style="width:100%">
            <thead>
            <tr>
                <th>Имя</th>
                <th>Телефон</th>
                <th>Email</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php
            while($row = mysqli_fetch_assoc($result)){ ?>
                <tr>
                    <td><?=$row['name'] ?></td>
                    <td><?=$row['phone'] ?></td>
                    <td><?=$row['email'] ?></td>
                    <td>
                        <form action="ClientController.php" method="post">
                            <input type="hidden" name="id" value="<?=$row['id']; ?>">
                            <button type="submit" class="btn btn-danger" name="delete">Удалить</button>
                        </form>
                    </td>
                </tr>
            <?php } ?>

            </tbody>
            <tfoot>
                <tr>
                    <th>Имя</th>
                    <th>Телефон</th>
                    <th>Email</th>
                    <th></th>
                </tr>
            </tfoot>
        </table>

        <a href="index.php" class="btn btn-primary">Добавить клиента</a>

    </div>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                "paging" : false,
                "searching": false,
                "info":     false
            });

            $('.display thead th:last-child').removeClass();
        } );
    </script>
</body>
</html>



