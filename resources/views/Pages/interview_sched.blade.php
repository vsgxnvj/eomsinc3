

<?php


if(Auth::user())
{
  $fixname = "EOMS";
  $today = date("y");
  $fixLetter = "F";
  $dbcode = str_pad(Auth::user()->id,5,'0',STR_PAD_LEFT);

  // FINAL OUTPUT :::: EOMS19F00001
  $eoms_barcode = $fixname.$today.$fixLetter.$dbcode;

  // Work Experience 
  $workexps =  DB::select('select * from work_exp_models where bcode="'.$eoms_barcode.'" order by id desc limit 2');
  // Education
  $thisEducation =  DB::select('select * from education where bcode="'.$eoms_barcode.'"');
  
  $thisUser =  DB::select('select * from users where id="'.Auth::user()->id.'"'); 
}



?>


@extends('layouts.main')

@section('content')
@include('inc.marginpushdown')

<section class="title---bar">
  <h3>Our</h3>
  <h1>Interview Schedule</h1>
</section>

@if(Auth::user())
<input type="hidden" id="Dbarcode" value="<?php echo $eoms_barcode ?>">
@endif
<div class="marginpushdown2">
  .
</div>

{{ csrf_field() }}
<div class="container">

        


        <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Position</th>
                        <th>Company</th>
                        <th>Country</th>
                        <th>Interview Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($jsched as $interviewshcd)     
                    <tr>
                       
                        <td>{{$interviewshcd->position}}</td>
                        <td>{{$interviewshcd->company}}</td>
                        <td>{{$interviewshcd->country}}</td> 
                        <td>{{$interviewshcd->interviewdate}}</td> 
                        <td>
                            <button data-company="{{$interviewshcd->company}}" data-position="{{$interviewshcd->position}}" data-country="{{$interviewshcd->country}}" data-id="{{$interviewshcd->id}}" class="btn btn-success btn-sm applybtn" data-toggle="modal" data-target="#apply" tabindex="-1">Apply</button>
                            <button class="btn btn-warning btn-sm sdetail"  data-toggle="modal" data-target="#modal-search" tabindex="-1" data-id="{{$interviewshcd->id}}">Details</button>
                        
                        </td>          
                    </tr>
                    @endforeach
                </tbody>
                
            </table>

</div>


@if(Auth::guest())

{{-- MODAL FOR APPLY --}}
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="apply">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">APPLYING</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" id="applicationForm" enctype="multipart/form-data">
          <div class="card mb-3">
              <div class="card-body">
                  <h5 class="country----country" id="nCountry">KSA</h5>
                  <h6 style="font-weight:500; line-height: 0.5em" class="position----name" id="nPosition">Web Developer</h6>
                  <h6 class="company----name" id="nCompany">Rich Dad Education</h6>
              </div>
          </div>
             
          <div class="card mb-3">
            <div class="card-body">
                <input type="hidden" id="nbid">
                <label for="name---name">Fullname</label>
                <input type="text" name="name---name" id="nbname" class="form-control">
            
            
                <label for="email---email">Email</label>
                <input type="email" name="email---email" id="nbemail" class="form-control">
          
          
                <label for="phone---phone">Phone Number</label>
                <input type="text" name="phone---phone" id="nbphone"  class="form-control">
            
            </div>
          </div>    
               
          <div class="card">
              <div class="card-body">
                  <div class="form-group">
                    <label for="phone---phone">Add your resume</label>
                    <input type="file" name="resume---resume" id="nbresume" class="form-control mb-3" accept=".doc, .docx, .pdf">
                  </div>
                 

            
                  <div>To apply with your EOMSInc Resume <a href="{{URL('applicant/login')}}">sign in</a> - No Resume? <a href="{{URL('applicant/register')}}">Create one now</a></div><br>
                  <div class="form-group">
                      <label for="phone---phone">Message (Optional)</label>
                      <textarea class="form-control" name="message---message" id="nbmessage" cols="30" rows="5"></textarea>
                  </div>
              </div>
            
            </div>
          
            
          
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="btnapplyz">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

@else

<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" id="apply">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">MEMBER</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="bodynotlogin">
          <form method="POST" id="applicationForm" enctype="multipart/form-data">
            <h5 class="country----country" id="nCountry">KSA</h5>
            <h6 style="font-weight:500; line-height: 0.5em" class="position----name" id="nPosition">Web Developer</h6>
            <h6 class="company----name" id="nCompany">Rich Dad Education</h6>

            <div class="card">
              <div class="card-body">                  
                @foreach($thisUser as $user)
                <input type="hidden" id="logresume" value="{{$user->resume}}">
                <h5 class="card-title" id="nbname">{{$user->firstname}} {{$user->middlename}} {{$user->name}} </h5>
                <div class="card-text" id="nbemail">{{$user->email}}</div>
                <div class="card-text">{{$user->contact_no}}</div>
                <div class="card-text">{{$user->address}}</div><br>
                @endforeach

                @foreach($workexps as $workex)
                <div class="card-text"><strong>{{$workex->position}}</strong> / {{$workex->company}}</div>
                @endforeach

                @foreach($thisEducation as $educ)
                  <div class="card-text"><strong>{{$educ->school_name}}</strong> / {{$educ->course}} </div>
                @endforeach
                <div class="text-right" style="width: 100%; ">
                    <a  href="applicant/profile" class="btn btn-outline-success btn-sm mb-2">Edit Resume</a><br>
                    <a  href="{{ url('applicant/profile/logout') }}" class="btn btn-outline-dark btn-sm ">Not You? Signout</a>
                </div>


               
              </div>
            </div>
            
              <input type="hidden" id="nbid">
              
            
      
        
              <div>Your full EOMSinc Resume will be submitted.</div><br>
              
            
              <label for="phone---phone">Phone Number</label>
              <input type="text" name="phone---phone" id="nbphone" value="09756462709" class="form-control">

              <div class="form-group">
                  <label for="phone---phone">Message (Optional)</label>
                  <textarea class="form-control" name="message---message" id="nbmessage" cols="30" rows="5"></textarea>
              </div>
          
        
    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="btnIdlogin">Submit</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


@endif



<div class="modal fade modal-info" id="modal-search" tabindex="-1" role="dialog" aria-labelledby="modal-search" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" id="results-details">
      {{-- GENERATE HERE --}}
    </div>
  </div>
</div>




@endsection
