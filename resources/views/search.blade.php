<!-- resources/views/search.blade.php -->

<html>
<head>
    <title>Búsqueda por palabra clave</title>
</head>
<body>
    <h1>Búsqueda por palabra clave</h1>

    <form method="POST" action="/buscar">
        @csrf
        <label for="keyword">Palabra clave:</label><br>
        <input type="text" id="keyword" name="keyword"><br><br>
        <button type="submit">Buscar</button>
    </form>
</body>
</html>
