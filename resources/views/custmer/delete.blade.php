<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
          background-color: #92a8d1;
        }
        </style>
</head>
<body>
    <h2>delete Rocrd</h2>
    @foreach (\App\Models\Custmer::get() as $custmer)
    {{$custmer->id}} 

    <a class='btn btn-primary' href="{{url("delete/$custmer->id")}}" role="button">delete</a>
   
    @endforeach
</body>
</html>