<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>phone Number</title>
</head>
<body>
    <form action="phone-submit" method="post">
        @csrf
    <input type="integer" name='phoneNumber' placeholder="enter phone Number">
    <button type="submit" class="btn btn-primary">button</button>
</form>
</body>
</html>