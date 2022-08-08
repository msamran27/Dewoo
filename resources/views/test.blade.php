<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>test</title>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body class="antialiased container p-1" ondblclick="">
    
  
    <form action="submit"method='POST'>
        @csrf
        <input type = "text" name ='name' id ="name" placeholder ='enter the name'><br>
        <input type = "email" name ='email' id ="email"placeholder ='enter the email'><br>
        <input type = "password" name ='password'id ="password" placeholder ='enter the password'><br>
        <input type = "tel" name ='tel'id ="tel" placeholder ='enter the phone number'><br>

        <div class="form-group">
            <label for="my-select">Province</label><br>
            <select class="province" class="form-control province" name="province">
                @foreach (\App\Models\Province::get() as $Province)
                    <option value="{{ $Province->name }}"> {{ $Province->name }} </option> 
                @endforeach
              
            </select>
        
        </div>

        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
        <label for="vehicle1"> I have a bike</label><br>
        <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
        <label for="vehicle2"> I have a car</label><br>
        <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
        <label for="vehicle3"> I have a boat</label>


        
        
        {{-- <div class="form-group">
            <label for="my-select">City</label>
            <select id="tests" class="form-control tests" name="tests">
                @foreach (\App\Models\city::get() as $city)
                    <option value="{{ $city->id }}"> {{ $city->name }} </option>                    
                @endforeach
            </select>
        </div> --}}

        <div class="form-group col-md-12">
            <label for="light" class="col-sm-12 text-left p-0 control-label col-form-label">Light</label>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3 p-0">
                        <input name = "light" type="radio" class="radio-col-indigo material-inputs" id="on" value="on">
                        <label for="on" class="mb-0 mt-2">On</label>
                    </div>
                    <div class="col-md-3 p-0">
                        <input name="light" type="radio" class="radio-col-indigo material-inputs" id="off" value="off">
                        <label for="off" class="mb-0 mt-2">off</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group col-md-12">
            <label for="day" class="col-sm-12 text-left p-0 control-label col-form-label">Day</label>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3 p-0">
                        <input name="day" type="radio" class="radio-col-indigo material-inputsmorning" id="morning" value="morning">
                        <label for="morning" class="mb-0 mt-2">Morning</label>
                    </div>
                    <div class="col-md-3 p-0">
                        <input name="day" type="radio" class="radio-col-indigo material-inputstwo time" id="afternon" value="afternon">
                        <label for="afternon" class="mb-0 mt-2">Afternon</label>
                    </div>
                    <div class="col-md-3 p-0">
                        <input name="day" type="radio" class="radio-col-indigo material-inputsevining" id="evining" value="evining" checked="checked">
                        <label for="evining" class="mb-0 mt-2">Evining</label>
                    </div>
                </div>
            </div>
        </div>
        <input type="button" value="submit" onclick="message()">
        <input type="reset">
    </form>
</body>
</html>


 <script>
    function message(){
        let form_data = new FormData();

        
        let name = $('#name').val();
        form_data.append('name', name);

        let email = $('#email').val();
        form_data.append('email', email);
        
        let password = $('#password').val();
        form_data.append('password', password);

        let tel = $('#tel').val();
        form_data.append('tel', tel);

        let province = $('.province').val();
        form_data.append('province', province);

        let vehicle1 =$("input:checkbox").is(":checked") ? 1:0;
        form_data.append('vehicle1', vehicle1);

        let vehicle2 = $("input:checkbox").is(":checked") ? 1:0;
        form_data.append('vehicle2', vehicle2);

        let vehicle3 = $("input:checkbox").is(":checked") ? 1:0;
        form_data.append('vehicle3', vehicle3);

        let light = $('input[name="light"]:checked').val();
        
        form_data.append('light', light);

        let day = $('input[name="day"]:checked').val();
        form_data.append('day', day);

      // alert($('#name').val())

        $.ajax({
            type: "post",
            url: "{{ url("submit") }}",
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