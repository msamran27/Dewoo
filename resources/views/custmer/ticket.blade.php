<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">
    <title>Ticket</title>
    <body style="background-color:powderblue;">
</head>
<body>
    <h2>Ticket Book.com</h2>
    <form>
            @csrf
            <div class="form-group col-md-4">
                <label for="City">City</label>
                <select id="city" class="form-control id" name="city_id">
                     @foreach (\App\Models\City::get() as $City)
                        <option value="{{ $City->id }}"> {{ $City->name }} </option>
                     @endforeach
                </select>
            </div>

            <div class="form-group col-md-4 change-color">
                <label for="Custmer_id">Custmer id</label>
                <select id="Custmer" class="form-control Custmer_id" name="Custmer_id">
                     @foreach (\App\Models\Custmer::get() as $custmer_id)
                        <option value="{{ $custmer_id->id }}"> {{ $custmer_id->id }} </option>
                     @endforeach
                 </select>
            </div>

            <div class="form-group col-md-4">
                <label for="terminal_departure">Trimnal Departure</label>
                <select id="terminal_departure"  name="trimnal_Departure" class="form-control terminal_departure" placeholder="From">
                    @foreach (\App\Models\TrimnalDeparture::get() as $TrimnalDeparture)
                        <option value="{{ $TrimnalDeparture->name }}"> {{ $TrimnalDeparture->name}} </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-md-4">
                <label for="trimnal_Arrival">Trimnal Arrival</label>
                <select id="trimnal_Arrival"  name="trimnal_Arrival" class="form-control trimnal_Arrival" placeholder="To">
                    @foreach (\App\Models\TrimnalArrival::get() as $Trimnal_Arrival)
                        <option value="{{ $Trimnal_Arrival->name }}"> {{ $Trimnal_Arrival->name}} </option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-4 mb-3">
                <label for="TicketNumber">Ticket Number</label>
                <input type="integer" name="ticketNumber" class="form-control" id="ticketNumber" placeholder="Ticket Number" required>
            </div>

            <div class="col-md-4 mb-3">
                <label for="seat_no">Seat Number</label>
                <input type="integer" class="form-control" id="seat_no" placeholder="Seat Number" name="seat_no" required>
            </div>

            <div class="col-md-4 mb-3">
                <label for="price">Price</label>
                <input type="text" class="form-control Price" id="price" placeholder="Price" name="price" required>
            </div>

            <div class="col-md-4 mb-3">
                <label for="company_name">Company Name</label>
                <select id="company_name" class="form-control company_name" name="company_name">
                    @foreach (\App\Models\Buses::get() as $companyName)
                        <option value="{{ $companyName->id }}"> {{ $companyName->company_name }} </option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-4 mb-3">
                <label for="busSerial_no">BusSerial No</label>
                <input type="text" class="form-control busSerial_no" id="busSerial_no" placeholder="busSerial_no" name="busSerial_no" required>
            </div>

            <div class="col-md-4 mb-3">
                    <label for="Made_in">Made in</label>
                <input type="text" class="form-control Made_in" id="Made_in" placeholder="Made_in" name="Made_in" required>
            </div>
              <div class="container">
            </div><br>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="type" id = "type" value="Upper_business_class" checked>
                <label class="form-check-label" for="Upper_business_class"> Upper Business Class</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="type" id = "type" value="business_class" checked>
                <label class="form-check-label" for="business_class">  Business Class  </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="type" id = "type"value="Economy_class" checked>
                <label class="form-check-label" for="Economy_class"> Economy class </label>
            </div>
            <div class="container">
            </div><br>
            <div class="col-md-4 mb-3">
                <div class="form-group">
                    <label for="departure_date">Departure Date</label>
                    <div class='input-group date' id='departure_date'>
                        <input type='date' class="form-control departure_date" name="departure_date">
                    </div>
                </div>
            </div>

            <div class="container" >
                <div class="col-md-4 mb-3">
                    <label for="departure_time">Departure Time</label>
                    <input class="form-control departure_time" type="time" id="departure_time" placeholder="hh:mm" name="departure_time">
                </div>
            </div>

            <button class="btn btn-primary" onclick="message()">Confrim Ticket</button>
    </form>


    <script type="text/javascript">
        $('#departure_time').datetimepicker({
            format: 'hh:mm',
        });

        $(function () {
          var bindDatePicker = function() {
               $(".date").datetimepicker({
               format:'YYYY-MM-DD',
                   icons: {
                       time: "fa fa-clock-o",
                       date: "fa fa-calendar",
                       up: "fa fa-arrow-up",
                       down: "fa fa-arrow-down"
                   }
               }).find('input:first').on("blur",function () {
                   // check if the date is correct. We can accept dd-mm-yyyy and yyyy-mm-dd.
                   // update the format if it's yyyy-mm-dd
                   var date = parseDate($(this).val());

                   if (! isValidDate(date)) {
                       //create date based on momentjs (we have that)
                       date = moment().format('YYYY-MM-DD');
                   }

                   $(this).val(date);
               });
           }

          var isValidDate = function(value, format) {
               format = format || false;
               // lets parse the date to the best of our knowledge
               if (format) {
                   value = parseDate(value);
               }

               var timestamp = Date.parse(value);

               return isNaN(timestamp) == false;
          }

          var parseDate = function(value) {
               var m = value.match(/^(\d{1,2})(\/|-)?(\d{1,2})(\/|-)?(\d{4})$/);
               if (m)
                   value = m[5] + '-' + ("00" + m[3]).slice(-2) + '-' + ("00" + m[1]).slice(-2);

               return value;
          }

          bindDatePicker();
        });

    //company picker
        $(document).on("change","#company_name", function (){

            let company_id = $('#company_name').val();

            $.ajax({
                type: "POST",
                url: "{{url('testing')}}" + '/' + company_id,
l                 $("#busSerial_no").val(response.busSerial_no);
                $("#Made_in").val(response.Made_in);
                error: function(error){
                    console.log(error)
                }
            });
        });
    </script>
        {{-- ajax  --}}
        <script>
            function message(){
                let form_data=new FormData();

                let city = $('#city').val();
                form_data.append('city_id', city);

                let Custmer = $('#Custmer').val();
                form_data.append('Custmer_id', Custmer);

                let departure = $('#terminal_departure').val();
                form_data.append('trimnal_Departure', departure);

                let Arrival = $('#trimnal_Arrival').val();
                form_data.append('trimnal_Arrival', Arrival);

                let ticketNumber = $('#ticketNumber').val();
                form_data.append('ticketNumber', ticketNumber);

                let seat_no = $('#seat_no').val();
                form_data.append('seat_no', seat_no);

                let price = $('#price').val();
                form_data.append('price', price);

                let company_name = $('#company_name').val();
                form_data.append('company_name', company_name);

                let busSerial_no = $('#busSerial_no').val();
                form_data.append('busSerial_no', busSerial_no);

                let Made_in = $('#Made_in').val();
                form_data.append('Made_in', Made_in);

                let type = $("input[id='type']:checked").val();
                form_data.append('type', type);

                let departureDate = $("#departure_date").val($.format.date( 'dd M yy', new Date()));
                form_data.append('departure_date', departureDate);

                let departure_time = $('#departure_time').val();
                form_data.append('departure_time', departure_time);

                $.ajax({
                    type: "POST",
                    url: "{{ url('submit') }}",
                    headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},
                    data: form_data,
                    dataType: 'json',
                    contentType: false,
                    cache: false,
                    processData: false,

                    success: function (response) {
                    console.log(response)
                 },
                    error: function (request, status, error) {
                    alert(request.responseText);
                    }
                });
            }

        </script>


    </body>
</html>
