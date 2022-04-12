<html>
<head></head>
<link href="{{ asset('css/bootstrap4.min.css') }}" rel="stylesheet">
<body>

           


        <h2 class="text-center">{{$businessname}}</h2>
        <h3 class="text-center">Contact Person: {{$contactperson}}</h3>
        <h3 class="text-center">Contact Position: {{$position}}</h3>
        <br>
        <table class="table table-hover">
                <thead>
                <tr>
                        <th>Details</th>
                        <th>Information</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                        <th scope="row"><strong>BUSINESS ADDRESS:</strong></th>
                        <td>{{$businessaddress}}</td>
                </tr>
                <tr>
                        <th scope="row"><strong>BUSINESS LICENSE NUMBER:</strong></th>
                        <td>{{$businesslicensenumber}}</td>
                </tr>
                <tr>
                        <th scope="row"><strong>NATURE OF BUSINESS:</strong></th>
                        <td>{{$naturebusiness}}</td>
                </tr>
                <tr>
                        <th scope="row"><strong>TELEPHONE NUMBER:</strong></th>
                        <td>{{$telephonenumber}}</td>
                </tr>
                <tr>
                        <th scope="row"><strong>FAX NUMBER:</strong></th>
                        <td>{{$faxnumber}}</td>
                </tr>
                <tr>
                        <th scope="row"><strong>WEBSITE:</strong></th>
                        <td>{{$website}}</td>
                </tr>
                <tr>
                        <th scope="row"><strong>EMAIL:</strong></th>
                        <td>{{$email}}</td>
                       
                </tr>
                </tbody>
        </table>
      <hr>
        <div class="card">
                        <div class="card-header">
                        Message
                        </div>
                        <div class="card-body">
                          <blockquote class="blockquote mb-0">
                                {{$msgs}}
                          </blockquote>
                        </div>
                      </div>
       
        <br>



</body>
</body>
</html>

