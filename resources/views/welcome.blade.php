<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>
    <body class="antialiased" ondblclick="">
        <h1>Hello world</h1>
        <form action="login" method="post">
            @csrf
            <input type="text" name="name" id="name" placeholder="username"><br>
            <input type="text" name="password" id="password" placeholder="password"><br>
            <input type="text" name="email" id="email" placeholder="enter email"><br>

            <input type="button" value="login" onclick="login()">
        </form>
    </body>
</html>

<script>
    function login(){
        let form_data = new FormData();

        let name = $('#name').val();
        form_data.append('name', name);

        let password = $('#password').val();
        form_data.append('password', password);

        let email = $('#email').val();
        form_data.append('email', email);

        $.ajax({
            type: "post",
            url: '{{ url('login') }}',
            headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},
            data: form_data,
            contentType: false,
            cache: false,
            processData: false,
            dataType: 'json',
            success: (response) => {
                console.log(response)
            },
            error: (error) => {
                console.log(error.responseJSON.message)
            }
        });
    }
</script>