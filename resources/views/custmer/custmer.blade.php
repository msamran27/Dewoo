<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>


<title> CUSTMER</title>
</head>

<body class="container">
      <h2>CUSTMER</h2>

      {{-- <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bg-danger">1</div>
          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bg-primary">2</div>
          <div class="col-lg-2 col-md-3 col-sm-3 col-xs-3 bg-dark">3</div>
          <div class="col-lg-2 col-md-3 col-sm-3 col-xs-3 bg-warning">4</div>
      </div> --}}


    <form action="submit" method="get">
          <div class="col">
            <div class="form-outline mb-4">
                <label class="form-label" for="name">name</label>
              <input type="text" name="name" class="form-control " id='name' placeholder="enter the name" />
            </div>
          </div>
          <div class="col">
            <div class="form-outline">
              <label class="form-label" for="Father_name">Father name</label>
              <input type="text" name="Father_name" class="form-control" id='Father_name' placeholder="enter the Father name"/>
            </div>
          </div>
        </div>

        <!-- Text input -->
        <div class="form-outline mb-4">
            <label class="form-label" for="CNIC">CNIC</label>
          <input type="text" name="CNIC" class="form-control" id='CNIC' placeholder="enter the CNIC" />
        </div>

        <!-- Text input -->
        <div class="form-outline mb-4">
            <label class="form-label" for="phone">phone</label>
            <input type="text" name="phone" class="form-control" id='phone' placeholder="enter the Phone number" />
          </div>

        <!-- Text input -->
        <div class="form-outline mb-4">
          <label class="form-label" for="address">Address</label>
          <input type="text" name="address" class="form-control" id='address'  placeholder="enter the address"/>
        </div>
        <!-- Email input -->

        <div class="form-outline mb-4">
            <label class="form-label" for="email">email</label>
          <input type="email" name="email" class="form-control" id='email' placeholder="enter the Email" />
        </div>


        <!-- Submit button -->
        <button class="btn btn-primary btn-block mb-4" onclick="message()">Submit</button>
      </form>

      <script>
        function message(){
          let form_data = new FormData();

              let name = $('#name').val();
              if (name == ''){
                $('#name').addClass('is-invalid');
                $('#name').next('.error').remove();
                $('#name').after('<small class="text-danger error">Field is Required</small>');
                $('#name').focus();
                return;
              }else
              {
                $('#name').next().remove();
                form_data.append('name', name);
              }

              let Father_name = $('#Father_name').val();
              if(Father_name ==''){
                $('#Father_name').addClass('is-invalid');
                $('#Father_name').next('.error').remove();
                $('#Father_name').after('<small class="text-danger error">Field is Required</small>');
                $('#Father_name').focus();
                return;
              }else{
                $('#Father_name').next().remove();
                form_data.append('Father_name', Father_name);
              }

              let cnic = $('#CNIC').val();
              if(cnic==''){
                $('#CNIC').addClass('is-invalid');
                $('#CNIC').next('.error').remove();
                $('#CNIC').after('<small class="text-danger error">Field is Required</small>');
                $('#CNIC').focus();
                return;
              }else
              {
                $('#CNIC').next().remove();
                form_data.append('CNIC', cnic);
              }

              let phone = $('#phone').val();
              if(phone==''){
                $('#phone').addClass('is-invalid');
                $('#phone').next('.error').remove();
                $('#phone').after('<small class="text-danger error">Field is Required</small>');
                $('#phone').focus();
                return;
              }else
              {
                $('#phone').next().remove();
                form_data.append('phone', phone);
              }


              let address = $('#address').val();
              if(address==''){
                $('#address').addClass('is-invalid');
                $('#address').next('.error').remove();
                $('#address').after('<small class="text-danger error">Field is Required</small>');
                $('#address').focus();
                return;
              }else
              {
                $('#address').next().remove();
                form_data.append('address', address);
              }

              let email = $('#email').val();
              if(email==''){
                $('#email').addClass('is-invalid');
                $('#email').next('.error').remove();
                $('#email').after('<small class="text-danger error">Field is Required</small>');
                $('#email').focus();
                return;
              }else
              {
                $('#email').next().remove();
                form_data.append('email', email);
              }

            $.ajax({
                type: "get",
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



</body>
</html>


