<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

    <title>BUS</title>
</head>
<body>
    <form action='submit'method='post'>
      @csrf
        <div class="form-group col-md-4">
            <label for="company_name">Company Name</label>
            <select id="company_name" class="form-control company_name"name="company_name">
                 @foreach (\App\Models\Buses::get() as $companyName)
                    <option value="{{ $companyName->id }}"> {{ $companyName->company_name }} </option> 
                 @endforeach
             </select>
                
          </div>
          <div class="form-group col-md-4">
            <label for="Upper_business_class">Upper Business Class</label>
            <select id="Upper_business_class" class="form-control">
                @foreach (\App\Models\buses::get() as $UpperBusinessclass)
                <option value="{{ $UpperBusinessclass->Upper_business_class }}"> {{ $UpperBusinessclass->Upper_business_class }} </option> 
             @endforeach
         </select>
          </div>
          <div class="form-group col-md-4">
            <label for="business_class">Business Class</label>
            <select id="business_class" class="form-control">
                @foreach (\App\Models\buses::get() as $businessClass)
                <option value="{{ $businessClass->business_class }}"> {{ $businessClass->business_class }} </option> 
             @endforeach
         </select>
          </div>
          <div class="form-group col-md-4">
            <label for="Economy_class">Economy Class</label>
            <select id="Economy_class" class="form-control">
                @foreach (\App\Models\buses::get() as $EconomyClass)
                <option value="{{ $EconomyClass->Economy_class }}"> {{ $EconomyClass->Economy_class }} </option> 
             @endforeach
         </select>
          </div>
          <div class="form-group col-md-4">
            <label for="busSerial_no">busSerial No</label>
            <select id="busSerial_no" class="form-control">
                @foreach (\App\Models\buses::get() as $busSerialNo	)
                <option value="{{ $busSerialNo->busSerial_no }}"> {{ $busSerialNo->busSerial_no }} </option> 
             @endforeach
         </select>
          </div>

          <div class="form-group col-md-4">
            <label for="Made_in">Made in</label>
            <select id="Made_in" class="form-control">
                @foreach (\App\Models\buses::get() as $Madein)
                <option value="{{ $Madein->Made_in }}"> {{ $Madein->Made_in }} </option> 
             @endforeach
         </select>
          </div>
      
        <button type="submit" class="btn btn-primary">Next</button>
      </form>
</body>
</html>