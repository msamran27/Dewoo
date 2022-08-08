<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
</head>
<body>
    @csrf
    <form>
        <input type= "text" name = 'username' id='name' class ='Name' placeholder = 'enter the username'><br>
        <input type = "email"name = 'email' id = 'email' class = 'email' placeholder = 'enter the email'><br>
        <input type= "integer" name = 'password' id = 'password' class ='password' placeholder = 'enter the password'><br>
        <input type = "integer"name = 'phone' id = 'phone' class = 'phone' placeholder = 'enter the Phone'><br>
        <input type ="checkbox" value="1" name ="led" id ="check" checked ="checked" >yes<br>
        <label><input type ='radio' id ='radio' name ='radio' value ='1' >Radio<br></label>
        Gender<br><label><input type ='radio' id='gender' name ='gender' value ='Male' >Male</label><br>
        <label><input type ='radio' id='gender' name ='gender' value ='female' >female<br></label>
 
        <select id="value" class="val">
            <option value="">--option Select--</option>
            <option value="val 1">Value select 1</option>
            <option value="val 2">Value select 2</option>
            <option value="val 3">Value select 3</option>
            <option value="val 4">Value select 4</option>
            <option value="val 5">Value select 5</option>
            <option value="val 6">Value select 6</option>
          </select>

        <button type="button" onclick="message()">Submit</button>
    </form>
</body>
</html>

<script>


    function message(){
        let form_data = new FormData();

        let username = $('#name').val();
        if (username == ''){
            $('#name').next('.error').remove();
            $('#name').after('<small class="text-danger error">name is Required</small>');
            return;
        }
        else
        {
            $('#name').next('.error').remove();
            console.log(username);
            form_data.append('user', username)
        }

        let email = $('#email').val();
        if (email == '')
        {
            $('#email').next('.error').remove();
            $('#email').after('<small class="text-danger error">email is Required</small>');
        return;
        }
        else
        {
            $('#email').next('.error').remove();
            console.log(email)
            form_data.append('email',email)
        }
        
        let password = $('#password').val();
        if(password == '')
        {
            $('#password').next('.error').remove();
            $('#password').after('<small class="text-danger error">password is Required</small>');
            return;
        }
        else
        {
            $('#password').next('.error').remove();
            console.log(password)
            form_data.append('password',password)
        }
        
        let phone = $('#phone').val();
        if(phone == "")
        {
            $('#phone').next('.error').remove();
            $('#phone').after('<small class="text-danger error">phone is Required</small>');
            return;
        }
        else
        {
            $('#phone').next('.error').remove();
            console.log(phone)
            form_data.append('phone',phone)
        }
    
        let check= $( "#check" ).prop( "checked" );
        if(check=='')
        {
                $('#check').next('.error').remove();
                $('#check').after('<small class="text-danger error">plese select one </small>');
                return;
            }
        else
        {
            $('#check').next().remove('.error');
            console.log(check)
            form_data.append('check',check)
        }
    
        let radio  = $( "#radio" ).prop( "checked");
        if(radio == '')
        {
                $('#radio').next('.error').remove();
                $('#radio').after('<small class="text-danger error">plese select one radio</small>');
                return;
        }
        else
        { 
            $('#radio').next('.error').remove();
            console.log(radio)
            form_data.append('radio',radio)
        
        }

        let gender = $("input[id='gender']:checked").val();
        if(gender == ''){
            $('#gender').next('.error').remove();
            $('#gender').after('<small class="text-danger error">plese select one gender</small>');
            return;
        }
        else{
           
            $('#gender').next('.error').remove();
            console.log(gender)
            form_data.append('gender',gender)

        }
    
        let value = $( "#value option:selected" ).val();
        if(value == '')
        {
            $('#value').next('.error').remove();
            $('#value').after('<small class="text-danger error">plese select one </small>');
            return;
        }
        else
        {
            $('#value').next('.error').remove();
            console.log(value)
            form_data.append('value',value)

        }


        $.ajax({
            type: "POST",
            url: "{{ url('/flows') }}",
           

            success:function (response) {
                // $('#name').val(response.email);
                // $('#password').val(response.phone);
                console.log(response)
            }, 
            error:function(){
               console.log(error)
            }
        });

    }


  

</script>

