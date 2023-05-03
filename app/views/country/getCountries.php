<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3><?= $data['title']; ?></h3>


    <table border="1">
        <thead>
            <th>Id</th>
            <th>Naam</th>
        </thead>
        <tbody>
            <?= $data['rows']; ?>
        </tbody>
    </table>



    <a href='http://mvc-2209c.org/home/index'>Terug naar Home</a>

</body>
</html>

