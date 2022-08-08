<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
<form>  
    <h2>welcome custmer</h2>
<body style="background-color:powderblue;">
    @foreach (\App\Models\Custmer::get() as $custmer)
  <br>{{$custmer->id}}
        <a class='btn btn-primary' href="{{url("update/$custmer->id/edit")}}" role="button">update</a>
    @endforeach

    <a class='btn btn-primary' href="/delete" role="button">delete</a>
    
 </form>
</body>
</html>