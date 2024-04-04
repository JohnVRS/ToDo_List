<!-- resources/views/create.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Criar Nova Tarefa</title>
</head>
<body>
    <h1>Criar Nova Tarefa</h1>
    <form method="POST" action="{{ route('task.create') }}">
        @csrf
        <label for="title">Título:</label><br>
        <input type="text" id="title" name="title"><br>
        <label for="description">Descrição:</label><br>
        <textarea id="description" name="description"></textarea><br>
        <label for="dataTask">Data da Tarefa:</label><br>
        <input type="date" id="dataTask" name="dataTask"><br>
        <button type="submit">Criar Tarefa</button>
    </form>
</body>
</html>
