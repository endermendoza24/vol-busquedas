<!-- resources/views/search.blade.php -->

<html>
<head>
    <title>Búsqueda por palabra clave</title>
    <!-- Incluir jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Búsqueda por palabra clave</h1>

    <form id="searchForm" method="POST" action="/buscar">
        @csrf
        <label for="keyword">Palabra clave:</label><br>
        <input type="text" id="keyword" name="keyword"><br><br>
        <button type="submit">Buscar</button>
    </form>

    <div id="results">
        <!-- Aquí se mostrarán los resultados -->
    </div>

    <!-- Script de jQuery para manejar el envío del formulario y mostrar resultados -->
    <script>
        $(document).ready(function() {
            $('#searchForm').submit(function(event) {
                event.preventDefault(); // Evita que se envíe el formulario de forma estándar

                var formData = $(this).serialize(); // Obtener los datos del formulario

                // Realizar una petición AJAX POST
                $.ajax({
                    type: 'POST',
                    url: '/buscar',
                    data: formData,
                    success: function(response) {
                        $('#results').html(response); // Mostrar la respuesta en el div de resultados
                    },
                    error: function(xhr, status, error) {
                        console.error(error); // Manejar errores si ocurrieron
                    }
                });
            });
        });
    </script>
</body>
</html>
