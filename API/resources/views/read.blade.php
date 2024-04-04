<!-- resources/views/read.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Detalhes da Tarefa</title>
</head>
<body>
    <h1>Detalhes da Tarefa</h1>
    <p><strong>Título:</strong> {{ $task->title }}</p>
    <p><strong>Descrição:</strong> {{ $task->description }}</p>
    <p><strong>Data da Tarefa:</strong> {{ $task->dataTask }}</p>
</body>
</html>
