@extends('layouts.main')

@section('content')

@include('inc.marginpushdown')

<section class="title---bar">
        
        <h1>Submit your APPLICATION here</h1>
        <a href="/applicant/register" class="btn btn-warning">Click Here to Apply</a>
</section>


<div class="container">
        <h1 class="mt-3">GET IN TOUCH WITH US</h1>
        <p>Application submission will be from 9AM to 5PM MON - FRI</p>
        {{-- <p>Document Withdrawal will be from 9AM to 5:30PM FRI only</p> --}}
<div class="row">
        <div class="col-lg-8">
                <div class="img-thumbnail" style="height: 200px;">
                         @include('inc.map')  
                </div>
               
        </div>
        <div class="col-lg-4">
                <h5 style="color: #644709; "><strong>  Ephesians Overseas Manpower Supply, Inc.</strong></h5>
                <p><strong>Unit 301 Avenue Square Garden 532 United Nations Avenue corner J. Bocobo Street Ermita Manila, 1000 Philippines</strong></p>
                <ul>
                        {{-- (028) 280 6901 --}}
						 {{-- (027) 507 9249 --}}

					   <li>0956-987-0764</li>
                        <li>0960-683-4027</li>
                        <li>resume@eomsinc.com (for applicants) </li>
                        <li>operation@eomsinc.com (for client only)</li>
                </ul>
                
                
              
        </div>
</div>

</div>
<br>

@endsection