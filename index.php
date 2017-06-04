<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Books</title>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<div>
    <form action="api/books.php" method="post">
        Tytuł książki:
        <input type="text" name="name"/><br/><br/>
        Imię i nazwisko autora:
        <input type="text" name="author"/><br/><br/>
        Opis ksiązki:
        <input type="text" name="description"/><br/><br/>
        <input type="submit" value="Dodaj ksiązke"/>
    </form>
</div>
<div>
    <h2>Lista książek</h2>

    <div id="book-list"></div>
</div>

<script src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous"></script>
<script src="js/app.js"></script>

</body>
</html>