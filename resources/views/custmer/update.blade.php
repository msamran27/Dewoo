<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UpdateRecord</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body style="background-color:powderblue;">
    <h2>UPDATE RECORD</h2>
    
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif


    <form action="{{ url('updated/'. $id) }}"method='get'>

            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="name"> Name</label>
                    <input type="text"  name="name"  class="form-control" id='name' placeholder="Enter the name" >
                </div>
          </div>

          <div class="col-md-4 mb-3">
            <label for="Father_name">Father name</label>
            <input type="text" name="Father_name"class="form-control "  id='Father_name' placeholder="Enter Father Name" >
          </div>

          <div class="form-row">
            <div class="col-md-4 mb-3">
              <label for="CNIC">CNIC</label>
              <input type="text" name="CNIC" class="form-control " id='CNIC'placeholder=" Enter CNIC number">
            </div>

        <div class="form-row">
          <div class="col-md-4 mb-3">
            <label for="phone">Phone</label>
            <input type="text"name="phone"  class="form-control" id='phone'  placeholder=" Enter phone number">
          </div>

          <div class="col-md-4 mb-3">
            <label for="address">Address</label>
            <input type="text" name="address" class="form-control"id='address' placeholder="Enter the address" >
          </div>
          <div class="col-md-4 mb-3">
              <label for="email">E-mail</label>
              <input type="email" name="email"class="form-control" id='email' placeholder="Enter the  email">   
           </div>

        </div>
        <div class="col-md-4 mb-3">
        <button type=button class="btn btn-primary" onclick="message()">Submit form</button>
        </div>
   
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
           
          // alert($('#name').val())
    
            $.ajax({
                type: "get",
                url: "{{ url('updated/'. $id) }}",
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




    