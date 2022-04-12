<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ephesians Overseas Manpower Supply, Inc.(EOMSInc)</title>
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <link rel="icon" href="{{asset('img/logo footer.png')}}" type="image/png" sizes="20x20">
 
  <link href="{{ asset('css/bootstrap4.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link href="{{ asset('css/app.css ') }}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"> -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="{{ asset('js/slick/slick/slick.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('js/slick/slick/slick-theme.css')}}"/>
  <link rel="stylesheet" href="{{asset('css/awesomplete.css')}}" /> 

  

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <link rel="stylesheet" href="{{asset('css/dropify.min.css')}}">

  {{-- LIGHTBOX  --}}
  <link rel="stylesheet" href="  https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">



  {{-- DATATABLE CSS --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css"></script>
  <script src="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css"></script>
  


  {{-- <script src="https://cdn.ckeditor.com/4.11.3/standard/ckeditor.js"></script> --}}

  @if(Auth::check())
    <script>{{ 'var logged = true;' }}  </script>
  @else
    <script>{{ 'var logged = false;' }}  </script>
  @endif
  
  
  <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }

      #preloader{
        width: 100%;
        padding: 20px;
        text-align: center !important;
      }
      .preload-box{
      
        width: 200px;
        height: 200px;
        margin: 0 auto;
      }

      .preload-box img{
        width: 100%;
        height: 100%;
        border-radius: 50%;
      }

    
    </style>

</head>
<body>
 

  @include('inc.navbar');
  @yield('content') 
  
  

     
  

<footer>
    <div class="container">
      <h2 class="title---footer">Ephesians Overseas Manpower Supply, Inc.</h2>
       <div class="row">
         <div class="col-lg-8">
           <div class="row">
  
              <div class="col-sm-5">
                <ul>
                    <li><h5>MANILA</h5></li>
                    <p>Unit 301, Avenue Square Garden Bldg PH, J. Bocobo Street, 532 United Nations Ave, Ermita, Manila, 1000</p>
                    
					{{-- <li>(028) 280 6901</li>  --}}
					{{-- <li>(027) 507 9249</li>  --}}
                    <li>0956-987-0764</li>
					<li>0960-683-4027</li>
                    <li>resume@eomsinc.com (for applicants) </li>
                    <li>operation@eomsinc.com</li>
                   
                    
                   
                    
                </ul>
                
              </div>
  
             <div class="col-sm-3">
                <ul>
                  <li><h5>QUICK LINKS</h5></li>
                    <li><a href="{{URL('/')}}">Home</a></li>
                    {{-- <li><a href="{{URL('/about')}}">About</a></li>
                    <li><a href="{{URL('/jobvacant')}}">Jobseekers</a></li>
                    <li><a href="{{URL('/contact')}}">Contact</a></li>      --}}
                  </ul>
             </div>
  
             <div class="col-sm-4">
              
                <ul>
                    <li><h5>WHERE TO FIND US</h5></li>
                    <li><a href="https://twitter.com/eomsinc/"  target="_blank">Twitter</a></li>
                    <li><a href="https://www.facebook.com/EOMSPhilippines/"  target="_blank">Facebook</a></li>
                    <li><a href="https://www.instagram.com/eomsinc/"  target="_blank">Instagram</a></li>
                    <li><a href="https://www.youtube.com/channel/UCi5mKt1uY25c3EXNjtxwJBA"  target="_blank">YouTube</a></li>
                </ul>
             </div>
             
           </div>  
          
         </div>
  
         <div class="col-lg-4">
           <h5>EOMSINC</h5>
           <p>EOMSINC is a licensed recruitment agency accredited with the POEA- Philippine Overseas Employment Administration. EOMSINC have been servicing Clients & Candidates and have filled thousands of positions worldwide across a broad range of industry.</p>
         </div>
       </div>
    </div>
    
  
    
    
    
    <hr>
    <div class="container">
    <div class="copyr">
      <div class="row">
        <div class="col-lg-6">
          <div class="imgs">
              <img src="{{asset('img/logo footer.png')}}" alt="">
          </div>
           
        </div>
        <div class="col lg-6 cop">
            EOMSINC Copyright © 2018 Ephesians Overseas Manpower Supply
        </div>
      </div>
     
     
     </div>
    </div>
  
  
  </footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
 
  

  <script type="text/javascript" src="{{ asset('js/slick/slick/slick.min.js') }}"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
 
           <script src='https://www.google.com/recaptcha/api.js'></script>     
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>          
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDlAHfEyqNIIcxvRX1pDQY3a_QfI7k-la4&callback=initMap"></script> --}}
  <script type="text/javascript" src="{{asset('js/map.js')}}"></script>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDlAHfEyqNIIcxvRX1pDQY3a_QfI7k-la4&callback=initMap"
  async defer></script>
  <script src="{{asset('js/awesomplete.js')}}"></script> 
  <script src="{{asset('js/dropify.min.js')}}"></script>

  {{-- SUMMERNOTE EDITOR --}}
  <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.js"></script>


  {{-- Datatables --}}
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

  {{-- LIGHTBOX --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
   <script src='https://www.google.com/recaptcha/api.js'></script>





  <script type="text/javascript">


  

var jq14 = jQuery.noConflict(true); 

(function ($) {

  // UNIVERSAL BARCODE
   var Dbarcode = $('#Dbarcode').val();
// alert("GLOBAL BARCODE IS - "+Dbarcode)

   var Did = $('#Did').val();

// LIGHTBOX
   $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });
  
   
   
  
  var map;
      function initMap() {
        var myLatLng = {lat: -34.397, lng: 150.644};
        map = new google.maps.Map(document.getElementById('map'), {
          center: myLatLng,
          zoom: 8,
        
        });

        var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: 'Hello World!'
      });
      }

    

  $('.slide-container').slick({
        arrows: false,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 3000,
          dots: true,
      });

      $('.center').slick({
        centerMode: true,
        arrows: false,
        dots: false,
        centerPadding: '60px',
        slidesToShow: 3,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
        {
        breakpoint: 768,
          settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '0px',
            slidesToShow: 1
          }
        },
        {
          breakpoint: 480,
            settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '0px',
            slidesToShow: 1
          }
        }
        ]
      });
      // UPLOAD IMAGE DESIGN
      $('.dropify').dropify();

      $(".cta").click(function() {
          $("form").slideDown(250);
          // if form is visible
          if ($("form").is(":visible")) 
          {
          // change .cta cursor to default
          $(".cta").css('cursor', 'default');
          }
          $("#email").focus();
      });


      $(".morelink").click(function(){
        if($(this).hasClass("less")) {
          $(this).removeClass("less");
          $(this).html(moretext);
        } else {
          $(this).addClass("less");
          $(this).html(lesstext);
        }
        $(this).parent().prev().toggle();
        $(this).prev().toggle();
        return false;
      });

    
      $('.auto___clients').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: 
        [
          {
            breakpoint: 768,
            settings: {
              arrows: false,
              centerMode: true,
              centerPadding: '0px',
              slidesToShow: 2
            }
          },
          {
            breakpoint: 480,
            settings: {
              arrows: false,
              centerMode: true,
              centerPadding: '0px',
              slidesToShow: 2
            }
          }
        ]
      });

    //UPLOAD IMAGE JS
    function readURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          var imagetitle =  $('.image-title').html(input.files[0].name).html();
          $('.image-upload-wrap').hide();
          $('.file-upload-image').attr('src', e.target.result);
          $('.file-upload-content').show();
          $('.image-title').html(input.files[0].name);
        };
        reader.readAsDataURL(input.files[0]);

      } else {
        removeUpload();
      }
    }

    function removeUpload() {
      $('.file-upload-input').replaceWith($('.file-upload-input').clone());
      $('.file-upload-content').hide();
      $('.image-upload-wrap').show();
    }

      $('.image-upload-wrap').bind('dragover', function () {
          $('.image-upload-wrap').addClass('image-dropping');
        });

      $('.image-upload-wrap').bind('dragleave', function () {
        $('.image-upload-wrap').removeClass('image-dropping');
    });


// UPLOAD IMAGES
      $('#upload_form').on('submit', function(event){
      event.preventDefault();
      $.ajax({
        url:"{{ route('ajaxupload.action') }}",
        method:"POST",
        data:new FormData(this),
        dataType:'JSON',
        contentType: false,
        cache: false,
        processData: false,
        success:function(data)
        {
          console.log(data);
        $('#message').css('display', 'block');
        $('#message').html(data.message);
        $('#message').addClass(data.class_name);
        $('#uploaded_image').html(data.uploaded_image);

        // Ajax Here for Photo
        }
      })
      });





  // UPLOAD RESUME
  $('#form_resume').on('submit', function(event){
      event.preventDefault();
      $.ajax({
        url:"{{route('profile.resumeupload.store')}}",
        method:"POST",
        data:new FormData(this),
        dataType:'JSON',
        contentType: false,
        cache: false,
        processData: false,
        success:function(data)
        {
          console.log(data);
          location.reload();
        // $('#message').css('display', 'block');
        // $('#message').html(data.message);
        // $('#message').addClass(data.class_name);
        // $('#uploaded_image').html(data.uploaded_image);

        // Ajax Here for Photo
        }
      })
      });




$(document).on('click', '.btn-search', function(){
  $('#results').html('');
  var search = $('.search').val();
  var token =  $( "input[name='_token']" ).val();
  $.ajax({
    url: "/jobsearch",
    type: "POST",
     data: {
      '_token': token,
      'search' : search

      },
    success: function (data) {
           
            // console.log(data.msg)
            var dataposition  = data.msg.length;
            var output = '';
           

          for(var i = 0 ; i < data.msg.length ; i++){
      
              output +=    '<div class="col-lg-6" >';
              output += '<div class="card " >';
              output += '<div class="card-body">';
              output += '<h5 class="card-title">'+ data.msg[i].position +'</h5>';
              output += '<p class="card-text"><i class="fas fa-globe"></i> '+ data.msg[i].company +'</p>';
              output += '<p><i class="fas fa-money-bill-alt"></i> '+ data.msg[i].amount +'</p>';
              output += '<button data-country="'+ data.msg[i].country +'" data-company="'+ data.msg[i].company +'" data-position="'+ data.msg[i].position +'" data-id="'+ data.msg[i].id +'" class="btn btn-secondary iapply" data-toggle="modal" data-target="#notlogin" >Apply</button>';
              output += ' <button type="button" class="btn btn-warning sdetail"  data-id="'+ data.msg[i].id +'" data-toggle="modal" data-target="#modal-search" >Job Details</button></div></div></div>'
            
    
          }

          $('#results').append(output);
          $('.search').val('');

        }
  });


});

// If not a member
$(".iapply").live("click", function(event){
  var jobID = $(this).attr("data-id");
  var JPosition = $(this).attr("data-position");
  var JCompany = $(this).attr("data-company");
  var Jcountry = $(this).attr("data-country");

  $('#nPosition').text(JPosition);
  $('#nCompany').text(JCompany);
  $('#nCountry').text(Jcountry);
  $('#nbid').val(jobID);

});


$('.applybtn').on('click', function(){
  var jobaID = $(this).attr("data-id");
  var dataCountry = $(this).attr("data-country");
  var dataCompany = $(this).attr("data-company");
  var dataPosition = $(this).attr("data-position");

$('#nCountry').text(dataCountry)
$('#nPosition').text(dataPosition)
$('#nCompany').text(dataCompany)
$('#nbid').val(jobaID);

});


$('#btnapplyz').live('click', function(event){

  
  var token =  $( "input[name='_token']" ).val();
  var nPosition =  $('#nPosition').text();
  var nCompany =  $('#nCompany').text();
  var nCountry =  $('#nCountry').text();

  var nbname =  $('#nbname').val();
  var nbemail =  $('#nbemail').val();
  var nbphone =  $('#nbphone').val();
  var nbmessage =  $('textarea#nbmessage').val();


if(nbname==""){
    alert("Fullname is Required");
    throw new Error("Name is Required");
   }

   if(nbemail==""){
    alert("Email is Required");
    throw new Error("Email is Required");
   }

   if(nbphone==""){
    alert("Mobile Number  is Required");
    throw new Error("Mobile Number is Required");
   }

   if($('input[type=file]')[0].files[0]){
    
   }else{
    alert("Please upload your resume in MS WORD format or PDF format");
    throw new Error("Please upload your resume in MS WORD format or PDF format");
   }

    var formData = new FormData;

    if(logged == false){
      var reg = "Unregistered";        
    }else{
      var reg = "Registered";     
    }
    formData.append('_token', token);
    formData.append('logged', reg);
    formData.append('nPosition', nPosition);
    formData.append('nCompany', nCompany);
    formData.append('nCountry', nCountry);
    formData.append('nbname', nbname);
    formData.append('nbemail', nbemail);
    formData.append('nbphone', nbphone);
    formData.append('nbmessage', nbmessage);
    formData.append('nPosition', nPosition);
    formData.append('resume', $('input[type=file]')[0].files[0]); 

    $.ajax({
      url: '{{route('profile.application.store')}}',
      data: formData,
      type: 'POST',
      contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
      processData: false, // NEEDED, DON'T OMIT THIS
        beforeSend: function(){
            $("#preloader").show();
            $("#applicationForm").hide();
        },
        complete: function(){
            $("#preloader").hide();
            $("#applicationForm").show();
        },
        success: function( data ){
          console.log(data)

              $('#apply').modal('toggle');
              swal("Good job!", "Your Resume has been submitted", "success");
              $('#nbname').val("");
              $('#nbemail').val("");
              $('#nbphone').val("");
              $('textarea#nbmessage').val("");
              $('input[type=file]').val("")
        }   
    });

});


// SUBMIT APPLICATION IF MEMBER IS NOT REGISTERED
$("#btnIdnotlogin").live('click', function(event){
    var token =  $( "input[name='_token']" ).val();
    var nPosition =  $('#nPosition').text();
    var nCompany =  $('#nCompany').text();
    var nCountry =  $('#nCountry').text();

    var nbname =  $('#nbname').val();
    var nbemail =  $('#nbemail').val();
    var nbphone =  $('#nbphone').val();
    var nbmessage =  $('textarea#nbmessage').val();
   

   if(nbname==""){
    alert("Fullname is Required");
    throw new Error("Name is Required");
   }

   if(nbemail==""){
    alert("Email is Required");
    throw new Error("Email is Required");
   }

   if(nbphone==""){
    alert("Mobile Number  is Required");
    throw new Error("Mobile Number is Required");
   }

   if($('input[type=file]')[0].files[0]){
    
   }else{
    alert("Please upload your resume in MS WORD format or PDF format");
    throw new Error("Please upload your resume in MS WORD format or PDF format");
   }

    var formData = new FormData;

    if(logged == false){
      var reg = "Unregistered";
      
    }else{
      var reg = "Registered";
    
    }
    formData.append('_token', token);
    formData.append('logged', reg);
    
    formData.append('nPosition', nPosition);
    formData.append('nCompany', nCompany);
    formData.append('nCountry', nCountry);
    formData.append('nbname', nbname);
    formData.append('nbemail', nbemail);
    formData.append('nbphone', nbphone);
    formData.append('nbmessage', nbmessage);
    formData.append('nPosition', nPosition);
    formData.append('resume', $('input[type=file]')[0].files[0]); 

    $.ajax({
      url: '{{route('profile.application.store')}}',
      data: formData,
      type: 'POST',
      contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
      processData: false, // NEEDED, DON'T OMIT THIS
      success: function (data) {
        console.log(data)
        swal("Great!", "Your Resume has been submitted", "success");
        $('#notlogin').modal('toggle');

       

        $('#nbname').val("");
        $('#nbemail').val("");
        $('#nbphone').val("");
        $('textarea#nbmessage').val("");
        $('input[type=file]').val("")
      },
     error: function(xhr, status, error){
         var errorMessage = xhr.status + ': ' + xhr.statusText
         alert('Error - ' + errorMessage);
     }
    });


});

// SUBMIT APPLICATION IF MEMBER IS REGISTERED
$('#btnIdlogin').live('click', function(event){
 
  var token =  $( "input[name='_token']" ).val();
    var nPosition =  $('#nPosition').text();
    var nCompany =  $('#nCompany').text();
    var nCountry =  $('#nCountry').text();

    var nbname =  $('#nbname').text();
    var nbemail =  $('#nbemail').text();
    var nbphone =  $('#nbphone').val();
    var nbmessage =  $('textarea#nbmessage').val();
    var nResume = $('#logresume').val();
   

    if(logged == false){
      var reg = "Unregistered";
      
    }else{
      var reg = "Registered";
    
    }

   

    $.ajax({
       url: '{{route('profile.application.storei')}}',
      type: "POST",
      data: {
        '_token':token,
        'Dbarcode': Dbarcode,
        'reg': reg,
        'nPosition': nPosition,
        'nCompany': nCompany,
        'nCountry': nCountry,
        'nbname': nbname,
        'nbemail': nbemail,
        'nbphone': nbphone,
        'nbmessage': nbmessage,
        'nResume': nResume,
       
      },
        
      success: function (data) {  
        console.log(data);
        swal("Good job!", "Your Resume has been submitted", "success");
        $('#notlogin').modal('toggle');
        $('#apply').modal('toggle');
      }
  });
    
  
   
});





// MODAL DETAILS
$(document).on('click', '.sdetail', function(){
  $('#results-details').html('');
  var AuthUser = "{{{ (Auth::user()) ? Auth::user() : null }}}";


  var dataid = $(this).attr("data-id");
  var token =  $( "input[name='_token']" ).val();
  $.ajax({
    url: "/searchdetails",
    type: "POST",
     data: {
      '_token': token,
      'dataid' : dataid

      },
    success: function (data) {      
      // console.log(data.msg)

            var showdetails  = data.msg.length;
            var output = '';
           
          for(var i = 0 ; i < showdetails ; i++){
            // + data.msg[i].position +
           output += '<div class="modal-header "><div class="flexer"><div class="left" ><img src="{{asset('img/logo footer.png')}}" alt="E O M S I N C-L O G O" ></div>';
           output += '<div class="right"  >';
           output += ' <h2><strong>Position:</strong> <span class="AC">' + data.msg[i].position +'</span> </h2>';
           output += '<h2><strong>Employer:</strong> <span class="AC">' + data.msg[i].company +'</span> </h2>';
           output += '<h2><strong>Salary:</strong> <span class="AC">'+ data.msg[i].amount +'</span> </h2>';
           output += '<span class="badge badge-primary"><strong>Gender:</strong> <span class="AC">'+ data.msg[i].gender +'</span> </span>';
           output += ' <span class="badge badge-info" ><strong>Years of Exp:</strong> <span class="AC">'+ data.msg[i].exp +'</span> </span></div></div>';
           output += '<button type="button" class="close" data-dismiss="modal" aria-label="Close">';
           output += '<span aria-hidden="true">&times;</span></button></div>';
           output += '<div class="modal-body">'+ data.msg[i].jobdetails +'</div>';
           output += '<div class="modal-footer">';
           output += '<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>';
          
          
          
          }

          $('#results-details').append(output);
         

        }
  });
});









$(document).on('click', '.information---profile', function(){
  $('#pinfo').html('');
 
  var dataid = $('#didd').attr("data-id");
  var token =  $( "input[name='_token']" ).val();

  $.ajax({
    url: "profile/name",
    type: "POST",
     data: {
      '_token': token,
      'dataid' : dataid
      },
    //   complete : function(){
    //     alert(this.url)
    //     alert(this.data)
    //     alert(this.type)
       
    // },
      
    success: function (data) {  

      
     
      if(data.msg[0].lastname==null){
        var lastname = "";
      }else{
        var lastname = data.msg[0].lastname;
      }

      if(data.msg[0].firstname==null){
        var firstname = "";
      }else{
        var firstname = data.msg[0].firstname;
      }

      if(data.msg[0].middlename==null){
        var middlename = "";
      }else{
        var middlename = data.msg[0].middlename;
      }
      
      if(data.msg[0].Address==null){
        var Address = "";
      }else{
        var Address = data.msg[0].Address;
      }

      if(data.msg[0].Email1==null){
        var Email1 = "";
      }else{
        var Email1 = data.msg[0].Email1;
      }
      
      if(data.msg[0].Email2==null){
        var Email2 = "";
      }else{
        var Email2 = data.msg[0].Email2;
      }
      
      if(data.msg[0].Mobile1==null){
        var Mobile1 = "";
      }else{
        var Mobile1 = data.msg[0].Mobile1;
      }

      if(data.msg[0].Mobile2==null){
        var Mobile2 = "";
      }else{
        var Mobile2 = data.msg[0].Mobile2;
      }

      if(data.msg[0].SkypeID==null){
        var SkypeID = "";
      }else{
        var SkypeID = data.msg[0].SkypeID;
      }

        var eomsid = data.msg[0].id;
    
     

      var output = '{{-- FULLNAME --}}<div class="form-row"><div class="form-group col-lg-4"><label for="lastname">Lastname</label><input type="text" value="'+ lastname +'" class="form-control" id="lastname" name="lastname" placeholder="Ex. Dela Cruz" ></div><div class="form-group col-lg-4"><label for="firstname">Firstname</label><input type="text" value="'+ firstname +'" class="form-control" id="firstname" name="firstname" placeholder="Ex. Juan" ></div><div class="form-group col-lg-4"><label for="middlename">Middlename</label><input type="text" class="form-control" value="'+ middlename +'" id="middlename" name="middlename" placeholder="Ex. Balagtas" ><input type="hidden" name="EOMSID" id="eomsid" value="'+ eomsid +'"></div> </div> {{-- Address --}}<div class="form-group"><label for="Address">Address</label><input type="text" class="form-control" value="'+ Address +'" id="Address" name="Address" placeholder=" Ex. Unit 1010 Richer Bldg Cor. JBocobo Ermita, Manila " ></div> {{-- Mobiles --}}<div class="form-row"><div class="form-group col-lg-6"><label for="firstname">Mobile (Primary)</label><input type="text" class="form-control" value="'+ Mobile1 +'" id="mobile1" name="mobile1" placeholder="Ex. 09756462705" ></div><div class="form-group col-lg-6"><label for="firstname">Mobile (Secondary)</label><input type="text" class="form-control" value="'+ Mobile2 +'" id="mobile2" name="mobile2" placeholder="Ex. 09735482145" ></div></div>{{-- Email1 --}}<div class="input-group mb-3"><div class="input-group-prepend"><span class="input-group-text" >Email:</span></div><input type="email" class="form-control" value="'+ Email1 +'" id="email1" name="email1" placeholder="primary@gmail.com" ></div>{{-- Email2 --}}<div class="input-group mb-3"><div class="input-group-prepend"><span class="input-group-text" >Email:(Secondary)</span></div><input type="email" class="form-control" id="email2" value="'+ Email2 +'" name="email2" placeholder="secondary@gmail.com" ></div>{{-- Skype--}}<div class="input-group mb-3"><div class="input-group-prepend"><span class="input-group-text" >Skype Account</span></div><input type="text" class="form-control" value="'+ SkypeID +'" id="skype" name="skype" placeholder="secondary@gmail.com" ></div>';

      $('#pinfo').append(output);
    }
  });
});


// SUMMARY INFORMATION

$('#si-btnUpdate').on('click', function(){
  var token =  $( "input[name='_token']" ).val();
  var lastname = $('#lastname1').val();
  var firstname = $('#firstname1').val();
  var middlename = $('#middlename1').val();
  var Address = $('#Address1').val();
  var mobile1 = $('#mobile11').val();
  var mobile2 = $('#mobile22').val();
  var email1 = $('#email1').val();
  var email2 = $('#email22').val();
  var skype = $('#skype11').val();
  var eomsid = $('#eomsid').val();
  var year = (new Date()).getFullYear();//this year 2019
  var yy = year.toString().substring(2);// Get the last 2 digit of the year: output is 19
  var letter = "F";
  var barcode = "EOMS" + yy + letter;
  var str = "" + eomsid
  var pad = "00000"
  var ans = pad.substring(0, pad.length - str.length) + str

// BARCODE
  var barcodefinal = barcode+ans;

  $.ajax({
    url: "{{route('profile.siupdate')}}",
    type: "POST",
     data: {
      '_token':token,
      'eomsid' :eomsid,
      'barcodefinal':barcodefinal,
      'lastname':lastname,
      'firstname':firstname,
      'middlename':middlename,
      'Address':Address,
      'mobile1':mobile1,
      'mobile2':mobile2,
      'email1':email1,
      'email2':email2,
      'skype':skype, 
      
     },
      
    success: function (data) {  
      var SiUpdate = data.msgSiUpdate
      console.log(data.msgSiUpdate);

      $('#si-lastname').text(SiUpdate.name);
      $('#si-firstname').text(SiUpdate.firstname);
      $('#si-middlename').text(SiUpdate.middlename);
      $('#si-address').text(SiUpdate.address);
      $('#si-mobile1').text(SiUpdate.contact_no);
      $('#si-mobile2').text(SiUpdate.contact_no2);
      $('#si-email2').text(SiUpdate.email2);
      $('#si-skype').text(SiUpdate.skype);



    }


  });

});
 


  


// SAVING CDETAILS
// $(document).on("click", "#cdetails", function(){

 
//   var token =  $( "input[name='_token']" ).val();
//   var lastname = $('#lastname').val();
//   var firstname = $('#firstname').val();
//   var middlename = $('#middlename').val();
//   var Address = $('#Address').val();
//   var mobile1 = $('#mobile1').val();
//   var mobile2 = $('#mobile2').val();
//   var email1 = $('#email1').val();
//   var email2 = $('#email2').val();
//   var SkypeID = $('#skype').val();
//   var eomsid = $('#eomsid').val();

//   var year = (new Date()).getFullYear();
//   var yy = year.toString().substring(2);
//   var barcode = "EOMS" + yy;
//   var str = "" + 1
//   var pad = "00000"
//   var ans = pad.substring(0, pad.length - str.length) + str

// // BARCODE
//   var barcodefinal = barcode+ans;

  
//   $.ajax({
//     url: "profile/save",
//     type: "POST",
//      data: {
//       '_token':token,
//       'eomsid':eomsid,
//       'barcodefinal':barcodefinal,
//       'lastname':lastname,
//       'firstname':firstname,
//       'middlename':middlename,
//       'Address':Address,
//       'mobile1':mobile1,
//       'mobile2':mobile2,
//       'email1':email1,
//       'email2':email2,
//       'SkypeID':SkypeID, 
      
//      },
      
//     success: function (data) {  
//       console.log("Success TEMYONG");
      
//       var new1 = data.msg;
      
//       $('#dname').text(new1.firstname+" "+new1.middlename+" "+new1.lastname);
//        $('#daddrress').children( "span:last" ).text(new1.Address);
//       $('#dmobile1').children( "span:last" ).text(new1.Mobile1);
//       $('#dmobile2').children( "span:last" ).text(new1.Mobile2);
//       $('#demail').children( "span:last" ).text(new1.Email1);
//       $('#demail2').children( "span:last" ).text(new1.Email2);
//       $('#dskype').children( "span:last").text(new1.SkypeID);
      
//       $('.contact--details').modal('toggle');
      
//     }

// });


// });



$('#c_ob_btn').on('click', function(){
  var token =  $( "input[name='_token']" ).val();
  var summernoteData =  $('#summernote').val()
  var idsummernote  = $('#uniID').val();

  $.ajax({
      url: "{{route('profile.career')}}",
      type: "POST",
      data: {
        '_token':token,
        'idsummernote': idsummernote,
        'summernoteData': summernoteData,
      },
        
      success: function (data) {  
        console.log(data);
        location.reload();
       
      }
  });
 
});

// CKEDITOR.replace( 'Editjdesc' );
$('.summernote').summernote({
   placeholder: ' Example: A resourceful individual with a proven track record in implementing successful marketing strategies, boosting organic traffic, and improving search rankings seeks a position of Marketing Associate at ABC company to maximize brand awareness and revenue through integrated marketing communications.',
   tabsize: 2,
   height: 300
 });


// ADD
 $('#jdesc').summernote({
   tabsize: 2,
   height: 300
 });
 

 // EDIT
 $('#Editjdesc').summernote({
   tabsize: 2,
   height: 300
 });


//  SKILLS SUMMERNOTE

$('#skillstxt').summernote({
   tabsize: 2,
   height: 300
 });

 
$('#TnStxt').summernote({
   tabsize: 2,
   height: 300
 });
 
 



//  Saving Personal Information from modal 

// $('#btn_personalinfo').on('click', function(){
//   var token =  $( "input[name='_token']" ).val();
//   var person_dob = $('#person_dob').val();
//   var person_gender = $('#person_gender').val();
//   var person_status = $('#person_status').val();
//   var person_height = $('#person_height').val();
//   var person_weight = $('#person_weight').val();
//   var person_nationality = $('#person_nationality').val();
//   var person_religion = $('#person_religion').val();

//   alert(person_gender);

//   // alert(Dbarcode)

//   $.ajax({
//     url: "{{route('personal.information')}}",
//     type: "POST",
//      data: {
//       '_token':token,
//       'Dbarcode'        : Dbarcode,
//       'person_dob'      : person_dob,
//       'person_gender'   : person_gender,
//       'person_status'   : person_status,
//       'person_height'   : person_height,
//       'person_weight'   : person_weight,
//       'person_nationality'  : person_nationality,
//       'person_religion'  : person_religion,
     
      
//      },
      
//     success: function (data) {  
//       console.log(data);
      
    
//     }

// });


// });

$('.hover---blue').click(function(){

});


// $('.middle').on('click', function(){
//  var $('.hover---blue').find('[data-bcode='+ Dbarcode +']')
// });


// $('#btn_personalinfoupdatedit').on('click', function(){

//   var date = new Date($('#date-input').val());
//       day = date.getDate();
//       month = date.getMonth() + 1;
//       year = date.getFullYear();
//       // 1
//       var person_dob = ([day, month, year].join('/'));
//       // 2 
//       var optionText = $("#rapido26 option:selected").val();
//       alert(optionText)


//       var person_status  = $('#person_status').val();
//       alert(person_status)
//       var person_height  = $('#person_height').val();
//       var person_weight  = $('#person_weight').val();
//       var person_nationality  = $('#person_nationality').val();
//       var person_religion  = $('#person_religion').val();

 
//     // alert(person_gender)
//     // alert(person_status)
//     // alert(person_height)
//     // alert(person_weight)
//     // alert(person_nationality)
//     // alert(person_religion)

 
// });

// SAVING PERSONAL INFO
$('#btnpinfo_Id').on('click', function(){
var token =  $( "input[name='_token']" ).val();
var dob =  $('#person_dob').val();
var person_gender =  $('#person_gender').val();
var person_status =  $('#person_status').val();
var person_height =  $('#person_height').val();
var person_weight =  $('#person_weight').val();
var person_nationality =  $('#person_nationality').val();
var person_religion =  $('#person_religion').val();


$.ajax({
      url: "{{route('personal.information')}}",
      type: "POST",
      data: {
        '_token':token,
        'Dbarcode': Dbarcode,
        'dob' : dob,
        'person_gender':person_gender,
        'person_status' : person_status,
        'person_height' : person_height,
        'person_weight' : person_weight,
        'person_nationality' : person_nationality,
        'person_religion' : person_religion,
        
      },
        
      success: function (data) {  
        console.log(data);
        location.reload();
      }
  });

});

// UPDATING PERSONAL INFO
$('#btnpinfo_Id_update').on('click', function(){


  var token =  $( "input[name='_token']" ).val();
  var id = $('#personId').val();
  var dob =  $('#person_dob').val();
  var person_gender =  $('#person_gender').val();
  var person_status =  $('#person_status').val();
  var person_height =  $('#person_height').val();
  var person_weight =  $('#person_weight').val();
  var person_nationality =  $('#person_nationality').val();
  var person_religion =  $('#person_religion').val();

  $.ajax({
      url: "{{route('personal.information.update')}}",
      type: "POST",
      data: {
        '_token':token,
        'id':id,
        'dob' : dob,
        'person_gender':person_gender,
        'person_status' : person_status,
        'person_height' : person_height,
        'person_weight' : person_weight,
        'person_nationality' : person_nationality,
        'person_religion' : person_religion,
        
      },
        
      success: function (data) {  
        console.log(data.msg);
        var ddata = data.msg;
       $('#pi-dob').text(ddata.dob)
       $('#pi-gender').text(ddata.gender)
       $('#pi-status').text(ddata.civil_status)
       $('#pi-height').text(ddata.height)
       $('#pi-weight').text(ddata.weight)
       $('#pi-nationality').text(ddata.nationality)
       $('#pi-religion').text(ddata.religion)
      
       $('#pinfo_update').modal('hide');
      }
  });
});



// THIS FOR POSITIONS STORE
$('#apositionbtnId').on('click', function(){
  var token =  $( "input[name='_token']" ).val();
  var position1 = $('#position1').val();
  var position2 = $('#position2').val();
  var position3 = $('#position3').val();
  
  $.ajax({
      url: "{{route('profile.position')}}",
      type: "POST",
      data: {
        '_token':token,
        'Dbarcode': Dbarcode,
        'position1' : position1,
        'position2' : position2,
        'position3' : position3,
      },
        
      success: function (data) {  
        console.log(data);
        $('#pposition1 > h2').text(data.msg.position1)
        $('#pposition2 > h2').text(data.msg.position2)
        $('#pposition3 > h2').text(data.msg.position3)
        location.reload();
      }
  });


 
});

// THIS FOR POSITIONS UPDATE
$('#apositionbtnIdUpdate').on('click', function(){
  var token =  $( "input[name='_token']" ).val();
  var position1 = $('#position1').val();
  var position2 = $('#position2').val();
  var position3 = $('#position3').val();
  

  $.ajax({
      url: "{{route('profile.updatepositions')}}",
      type: "POST",
      data: {
        '_token':token,
        'updateID':  Did,
        'Dbarcode': Dbarcode,
        'position1' : position1,
        'position2' : position2,
        'position3' : position3,
      },
        
      success: function (data) {  
        console.log(data);
        $('#pposition1 > h2').text(data.msg.position1)
        $('#pposition2 > h2').text(data.msg.position2)
        $('#pposition3 > h2').text(data.msg.position3)
        $('#apositionTargetUpdate').modal('toggle')
      }
  });
  
});

// Education Edit 
var educID
$('.sc_editorial').on('click', function(){
  var school_id = $(this).attr("data-id");
  var data_bcode = $(this).attr("data-bcode");
  var data_course = $(this).attr("data-course");
  educID = school_id;
  var data_school_name = $(this).attr("data-school_name");
  var data_school_month = $(this).attr("data-school_month");
  var data_school_year = $(this).attr("data-school_year");
  var data_status = $(this).attr("data-status");



$('#diploma_____edit').val(data_course)
$('#school_____edit').val(data_school_name)
$('#mos_____edit').val(data_school_month)
$('#syear_____edit').val(data_school_year)
$('#scStatus_____edit').val(data_status)



});



// Education Update

$('#BtneditEducation').on('click', function(){
  var token =  $( "input[name='_token']" ).val();
  var udiploma = $('#diploma_____edit').val()
  var uschool = $('#school_____edit').val()
  var umos = $('#mos_____edit').val()
  var usyear = $('#syear_____edit').val()
  var uscStatus = $('#scStatus_____edit').val()


$.ajax({
      url: "{{route('profile.educ.update')}}",
      type: "POST",
      data: {
        '_token':token,
        'educID':  educID,
        'udiploma' : udiploma,
        'uschool' : uschool,
        'umos' : umos,
        'usyear' : usyear,
        'uscStatus' : uscStatus,
      },
        
      success: function (data) {  
        console.log(data);
        location.reload();
      }
  });

});

// Education Store data
$('#BtnstoreEducation').on('click', function(){

  var token =  $( "input[name='_token']" ).val();

  var diploma = $('#diploma').val();
  var school = $('#school').val();
  var mos = $('#mos').val();
  var syear = $('#syear').val();
  var scStatus = $('#scStatus').val();

  $.ajax({
      url: "{{route('profile.educ.store')}}",
      type: "POST",
      data: {
        '_token':token,
        'Dbarcode': Dbarcode,
        'diploma' : diploma,
        'school' : school,
        'mos' : mos,
        'syear' : syear,
        'scStatus' : scStatus,
      },
        
      success: function (data) {  
        console.log(data);
        location.reload();
      }
  });
});


// Education Delete Data info
$('.sc_delete').on('click', function(){
  var SCdataID = $(this).attr("data-id");
  var token =  $( "input[name='_token']" ).val();
 
  $.ajax({
      url: "{{route('profile.educ.delete')}}",
      type: "POST",
      data: {
        '_token':token,
        'SCdataID' : SCdataID
      },
        
      success: function (data) {  
        console.log(data);
        location.reload();
      }
  });


});


// WORK EXPERIENCE


// Store Data
$('#btnstoreExperience').on('click', function(){
  var token =  $( "input[name='_token']" ).val();
  var positionExp = $('#positionExp').val();
  var CompanyExp = $('#CompanyExp').val();
  var DateExp = $('#DateExp').val();
  var jdesc = $('#jdesc').val();

  $.ajax({
      url: "{{route('profile.wrkexp.store')}}",
      type: "POST",
      data: {
        '_token':token,
        'Dbarcode': Dbarcode,
        'positionExp': positionExp,
        'CompanyExp': CompanyExp,
        'DateExp': DateExp,
        'jdesc': jdesc,
 
      },
        
      success: function (data) {  
        console.log(data);
        location.reload();
      }
  });
});

// Edit and Update Work Experience
var WrkexpID;

$('.exp_editorial').on('click', function(){
  var data_bcode = $(this).attr("data-bcode");
  var IndivID = $(this).attr("data-id");
  WrkexpID = IndivID;
  var dataPosition = $(this).attr("data-position");
  var dataCompany = $(this).attr("data-company");
  var dataExpdate = $(this).attr("data-expdate");
  var dataJdecs = $(this).attr("data-jdesc");
  
 



        $('#EditpositionExp').val(dataPosition);
        $('#EditCompanyExp').val(dataCompany);
        $('#EditDateExp').val(dataExpdate);
        $('#Editjdesc').summernote('code', dataJdecs);
        
     
       
});

// Update
$('#btnUpdateExperience').on('click', function(){
  var token =  $( "input[name='_token']" ).val();
  var uPosition = $('#EditpositionExp').val();
  var uCompany = $('#EditCompanyExp').val();
  var Udate = $('#EditDateExp').val();
  var JobDescription =   $('#Editjdesc').summernote('code');


 

  $.ajax({
      url: "{{route('profile.wrkexp.update')}}",
      type: "POST",
      data: {
        '_token':token,
        'WrkexpID': WrkexpID,
        'uPosition': uPosition,
        'uCompany': uCompany,
        'Udate': Udate,
        'JobDescription': JobDescription,
       
      },
        
      success: function (data) {  
        console.log(data);
        location.reload();
      }
  });
       

});



// Delete Data info
$('.exp_delete').on('click', function(){
  var expdataID = $(this).attr("data-id");
  var token =  $( "input[name='_token']" ).val();
 
  $.ajax({
      url: "{{route('profile.wrkexp.delete')}}",
      type: "POST",
      data: {
        '_token':token,
        'expdataID' : expdataID
      },
        
      success: function (data) {  
        console.log(data);
        location.reload();
      }
  });


});



// Skill Store
$('#btnIdSkills').on('click', function(){
  var token =  $( "input[name='_token']" ).val();
  var skillstxt =   $('#skillstxt').summernote('code');


  $.ajax({
      url: "{{route('profile.skills.store')}}",
      type: "POST",
      data: {
        '_token':token,
        'skillstxt' : skillstxt,
        'Dbarcode': Dbarcode,
      },
        
      success: function (data) {  
        console.log(data);
        location.reload();
      }
  });
});

// Skill update
$('#btnIdSkillsUpdate').on('click', function(){
  var skilldataID = $(this).attr("data-id");
  var token =  $( "input[name='_token']" ).val();
  var skillstxt =   $('#skillstxt').summernote('code');

 
  $.ajax({
      url: "{{route('profile.skills.update')}}",
      type: "POST",
      data: {
        '_token':token,
        'skilldataID': skilldataID,
        'skillstxt' : skillstxt,
      },
        
      success: function (data) {  
        console.log(data);
        location.reload();
      }
  });

});


// Training and Seminars Store
$('#btnIdtrainingNseminars').on('click', function(){
  var token =  $( "input[name='_token']" ).val();
  var TnStxt =   $('#TnStxt').summernote('code');

  $.ajax({
      url: "{{route('profile.trainings.store')}}",
      type: "POST",
      data: {
        '_token':token,
        'TnStxt' : TnStxt,
        'Dbarcode': Dbarcode,
      },
        
      success: function (data) {  
        console.log(data);
        location.reload();
      }
  });

});


// Update Training and Seminars

$('#btnIdtrainingNseminarsUpdate').on('click', function(){
  var TrainingdataID = $(this).attr("data-id");
  var token =  $( "input[name='_token']" ).val();
  var TnStxt =   $('#TnStxt').summernote('code');

 
  $.ajax({
      url: "{{route('profile.trainings.update')}}",
      type: "POST",
      data: {
        '_token':token,
        'TrainingdataID': TrainingdataID,
        'TnStxt' : TnStxt,
      },
        
      success: function (data) {  
        console.log(data);
        location.reload();
      }
  });
});



// DATATABLES
$(document).ready(function() {
    $('#example').DataTable();
} );


}(jq14));

// OFFICIAL
document.getElementById('get_file').onclick = function() {
    document.getElementById('select_file').click();
};

var openFile = function(event) {
    var input = event.target;

    var reader = new FileReader();
    reader.onload = function(){
      var dataURL = reader.result;
      var output = document.getElementById('output');
      output.src = dataURL;
    };
    reader.readAsDataURL(input.files[0]);
  };



function myFunction() {
  
      var dots = document.getElementById("dots");
      var moreText = document.getElementById("more");
      var btnText = document.getElementById("myBtn");

      if (dots.style.display === "none") {
          dots.style.display = "inline";
          btnText.innerHTML = "Read more"; 
          moreText.style.display = "none";
        } else {
          dots.style.display = "none";
          btnText.innerHTML = "Read less"; 
          moreText.style.display = "inline";
        }
      }



      
     






</script>





<!--Start of Tawk.to Script-->
<script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/5c9db8ca1de11b6e3b05c82e/default';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script>
  <!--End of Tawk.to Script-->





  {{-- @include('sweet::alert'); --}}
</body>
</html>