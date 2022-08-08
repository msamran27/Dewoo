<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>teacher</title>
</head>
<body>
    <form action="teacher-submit" method="POST">
        @csrf
    <input type="name" name='name' placeholder="enter Teacher name">
    <button type="submit" class="btn btn-primary">button</button>
</form>
</body>
</html>