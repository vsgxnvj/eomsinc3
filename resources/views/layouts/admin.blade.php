

<?php 
$email = Auth::user()->email;




$email1 = 'akosijay321@yahoo.com';
$email2 = 'operation@eomsinc.com';
$email3 = 'admin@eomsinc.com';


if($email === $email1 or $email === $email2 or $email === $email3){

}else{
  return Redirect::to('google.com');
}


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>Dashboard - EPHESIANS OVERSEAS MANPOWER SUPPLY INC. Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
    

    <!-- Add custom CSS here -->
    <link rel="icon" href="{{asset('img/logo footer.png')}}" type="image/png" sizes="20x20">
    <link href="{{asset('css/sb-admin.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/dropify.min.css')}}">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
     {{-- DATETIMEPICKER --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/tcal.css')}}"/>
  
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   
    
  </head>

  <body>

    <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">EPHESIANS OVERSEAS MANPOWER SUPPLY INC.(EOMS INC)</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li class="active"><a href="{{route('admin.index')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            {{-- <li><a href="charts.html"><i class="fa fa-bar-chart-o"></i> Charts</a></li>
            <li><a href="tables.html"><i class="fa fa-table"></i> Tables</a></li>
            <li><a href="forms.html"><i class="fa fa-edit"></i> Forms</a></li>
            <li><a href="typography.html"><i class="fa fa-font"></i> Typography</a></li>
            <li><a href="bootstrap-elements.html"><i class="fa fa-desktop"></i> Bootstrap Elements</a></li>
            <li><a href="bootstrap-grid.html"><i class="fa fa-wrench"></i> Bootstrap Grid</a></li> --}}
            {{-- <li><a href="blank-page.html"><i class="fa fa-file"></i> Blank Page</a></li> --}}
            {{-- <li><a href="{{route('interview.index')}}"><i class="fa fa-file"></i> Interview Schedule</a></li> --}}
            <li><a href="{{route('client.index')}}"><i class="fa fa-file"></i>  Our Dearest Clients</a></li>
            <li><a href="{{route('job.index')}}"><i class="fa fa-file"></i> Job Vacancy</a></li>
            <li><a href="{{route('user.app')}}"><i class="fa fa-file"></i> All Users</a></li>
            <li><a href="{{route('applied_applicant')}}"><i class="fa fa-file"></i> Applied applicants</a></li>

           
           
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Joblist <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="{{route('job.index')}}">View all jobs</a></li>
                <li><a href="{{route('job.create')}}">Create New Job</a></li>
                <li><a href="#">Last Item</a></li>
              </ul>
            </li>
           
          </ul>










<!-- NAVBAR -->
          <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown messages-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> Messages <span class="badge">7</span> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li class="dropdown-header">7 New Messages</li>
                <li class="message-preview">
                  <a href="#">
                    <span class="avatar"><img src="http://placehold.it/50x50"></span>
                    <span class="name">John Smith:</span>
                    <span class="message">Hey there, I wanted to ask you something...</span>
                    <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
                  </a>
                </li>
                <li class="divider"></li>
                <li class="message-preview">
                  <a href="#">
                    <span class="avatar"><img src="http://placehold.it/50x50"></span>
                    <span class="name">John Smith:</span>
                    <span class="message">Hey there, I wanted to ask you something...</span>
                    <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
                  </a>
                </li>
                <li class="divider"></li>
                <li class="message-preview">
                  <a href="#">
                    <span class="avatar"><img src="http://placehold.it/50x50"></span>
                    <span class="name">John Smith:</span>
                    <span class="message">Hey there, I wanted to ask you something...</span>
                    <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
                  </a>
                </li>
                <li class="divider"></li>
                <li><a href="#">View Inbox <span class="badge">7</span></a></li>
              </ul>
            </li>
            <li class="dropdown alerts-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> Alerts <span class="badge">3</span> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Default <span class="label label-default">Default</span></a></li>
                <li><a href="#">Primary <span class="label label-primary">Primary</span></a></li>
                <li><a href="#">Success <span class="label label-success">Success</span></a></li>
                <li><a href="#">Info <span class="label label-info">Info</span></a></li>
                <li><a href="#">Warning <span class="label label-warning">Warning</span></a></li>
                <li><a href="#">Danger <span class="label label-danger">Danger</span></a></li>
                <li class="divider"></li>
                <li><a href="#">View All</a></li>
              </ul>
            </li>
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                <li><a href="#"><i class="fa fa-envelope"></i> Inbox <span class="badge">7</span></a></li>
                <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
                <li class="divider"></li>
                <li><a href="#"><i class="fa fa-power-off"></i> Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>



  












      

      <!-- CODE HERE -->

            @yield('content')


      <!-- CODE HERE -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    {{-- <script src="{{asset('js/jquery-1.10.2.js')}}"></script> --}}
    {{-- <script src=" https://code.jquery.com/jquery-3.3.1.js"></script> --}}
    
    <script src="{{asset('js/bootstrap.js')}}"></script>

    <!-- Page Specific Plugins -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
    <script src="{{asset('js/morris/chart-data-morris.js')}}"></script>
    <script src="{{asset('js/tablesorter/jquery.tablesorter.js')}}"></script>
    <script src="{{asset('js/tablesorter/tables.js')}}"></script>
    <script src="{{asset('js/dropify.min.js')}}"></script>

    {{-- DATETIMEPICKER --}}
    <script src="{{asset('js/tcal.js')}}"></script>
    {{-- DATA TABLE --}}
    <script src=" https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>  
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
    
    {{-- SUMMERNOTE EDITOR --}}
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>    
 
 
    <script src="{{asset('js/admin.js')}}"></script>


    <script>
    var _token = $('meta[name="csrf-token"]').attr('content')
    
    $(".table_applied").on("click", ".sendIt", function(){
      var id = $(this).attr('data-id');
      var status =  $(this).text('SENT TO ENCODER');
      var filename =  $(this).attr('data-filename');
      var fullname =  $(this).attr('data-name');
      var position =  $(this).attr('data-position');
      var mobile =  $(this).attr('data-mobile');
      var msgs =  $(this).attr('data-msg');

      $.ajax({
          url: "{{route('profile.application.updatensend')}}",
          type: "POST",
          data: {
          '_token': _token,
          'id': id,
          'filename': filename,
          'fullname': fullname,
          'msgs': msgs,
          'position': position,
          'mobile': mobile,

          },
          success: function (data) {  
              console.log(data)
          }
      });
    });

    
    </script>


  </body>
</html>
