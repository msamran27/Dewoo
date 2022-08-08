<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="student_teacher-submit" method="post">
        @csrf
    <input type="integer" name='CnicNumber' placeholder="enter Cnic Number">
    <button type="submit" class="btn btn-primary">button</button>
</form>
</body>
</html>