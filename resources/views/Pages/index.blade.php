
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




{{-- SHOW VACANCIES --}}
<?php $showthree =  DB::select('select * from jobs where interviewdate IS NULL order by id desc limit 4'); ?>
{{-- SHOW interview Sched --}}
<?php $i_s = DB::select('select * from jobs where interviewdate IS NOT NULL  order by interviewdate desc limit 4 ');  ?>
{{-- SHOW All Positions --}}
<?php $positionlist = DB::select('select DISTINCT  position from jobs ');  ?>
{{-- SHOW ALL JOBS DETAILS --}}
<?php   $modalsjobdetails =  DB::select('select * from jobs'); ?>
{{-- SHOW ALL CLIENTS --}}
<?php   $allClients =  DB::select('select * from clients'); ?>



@extends('layouts.main')

@section('content')
@if(Auth::user())
<input type="hidden" id="Dbarcode" value="<?php echo $eoms_barcode ?>">
@endif
<h1>WELCOME</h1>


<div class="slidy">
    <div class=" container slide-container">
     
        <div class="slidy-wrapper" >
   
          <div class="row">
            <div class="col-lg-6">
                <h1>Creating Positive Future</h1>
             
              
              {{-- <a  class="btn1" href="/register">Create Resume</a> --}}
             <a  href="{{URL('applicant/register')}}" type="color: white !important" class="btn btn-dark">Create Resume</a>
            </div>

            <div class="col-lg-6">
               <img src="img/nurse.png" alt="" height="350">
            </div> 
          </div>
        </div>

        <div class="slidy-wrapper" >
   
          <div class="row">
            <div class="col-lg-6">
               
              <h1>We Are Driven By Quality, Excel In Delivery, Act With Integrity And Responsibility</h1>
            </div>

            <div class="col-lg-6">
                <img src="img/engineer.png" alt="" height="350">
            </div> 
          </div>
        </div>

        <div class="slidy-wrapper" >
   
            <div class="row">
              <div class="col-lg-6">
                
                <h1>We Create Beautiful Experiences 
                    That Drive Successful Employment.</h1>
              </div>
  
              <div class="col-lg-6">
                  <img src="img/chef.png" alt="" height="350">
              </div> 
            </div>
          </div>

          <div class="slidy-wrapper" >
   
              <div class="row">
                <div class="col-lg-6">
                   
                  <h1>We Create Beautiful Experiences 
                      That Drive Successful Employment.</h1>
                </div>
    
                <div class="col-lg-6">
                    <img src="img/waiter.png" alt="" height="350">
                </div> 
              </div>
            </div>     
    </div>

   
</div>



<div class="search-box">
    <h2>SEARCH JOB OPENINGS</h2>
<small>(Search: eg. accountant, engineer, computer, technician, or location)</small><br><br>
<div class="example" style="margin:auto;max-width:300px">
   {{ csrf_field() }}
  <input type="text"  class="search" list="mylist" placeholder="Search.." name="search2">
        <datalist id="mylist">
          @foreach($positionlist as $pl)
              <option value="{{$pl->position}}">{{$pl->position}}</option>
            @endforeach
        </datalist>
  <button  class="btn-search" ><i class="fa fa-search "></i></button>
      </div><br><br>


</div>


<section class="search---result">
  <div class="container">
    <div class="row" id="results">
      

      
    
    </div>
  </div>
</section>




@if(Auth::guest())
  <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" id="notlogin">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">NEW MEMBER</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          
          <div class="modal-body" id="bodynotlogin">
            
            
        
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
            <button type="submit" class="btn btn-primary" id="btnIdnotlogin">Submit</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
@else
<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" id="notlogin">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title"> REGISTERED MEMBER</h5>
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
                  <div class="card-text">{{$workex->position}}/{{$workex->company}}</div>
                  @endforeach

                  @foreach($thisEducation as $educ)
                    <div class="card-text">{{$educ->school_name}},{{$educ->course}} </div>
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




{{-- APPLY  MODAL--}}








































<section class="upcoming-box">
    <h1> Upcoming Interview</h1>
    <p class="text-center"> see all</p>
    <div class="center slider">

      @foreach ($jobs as $job)
      <div class="box">
          <div class="card">
              <img src='img/upcoming gray.PNG' class="card-image" />
              <div class="card-title">
                {{$job->position}}
              </div>
              <div class="card-desc">
                <p><i class="fas fa-map-marker-alt"></i> <strong>{{$job->country}}</strong></p>
                <?php $date=date_create($job->interviewdate);?>
                
                <p><i class="fas fa-clock"></i> <?php echo date_format($date,"m/d/Y ") ?></p>
              </div>
              <div class="card-actions">
                <button type='button' class='card-action-readMore sdetail' data-toggle="modal" data-target="#modal-search" data-id="{{$job->id}}">VIEW DETAILS</button>
                <button data-country="{{$job->country}}" data-company="{{$job->company}}" data-position="{{$job->position}}" data-id="{{$job->id}}" class='card-action-apply iapply' data-toggle="modal" data-target="#notlogin" >Apply</button>
              </div>
            </div>
        </div>
      @endforeach

        
         

    </div>
  
</section >



<section class="vacancies">

 
    <div class="container-fluid">
      <div class="row">
  
          <div class="col-lg-4 v---gold">
              <i class="fas fa-plane"></i>
            <h1 style="margin-bottom: 40px;">Job Vacancies</h1>
          <hr>
          @foreach ($showthree as $show)
            <div class="job__vacancies__box">
                <div class="img__logo">
                  <img src="/img/logo footer.png" alt="">
                </div>
                <div class="job__content">
                  <h1>{{$show->position}}</h1>
                  <small>{{$show->country}}</small><br>
                  <small>{{$show->company}}</small>
                  <div class="v___buttons">
                      <a href="#" class="btn btn-info" id="info{{$show->id}}" data-toggle="modal" data-target="#exampleModal{{$show->id}}"  ><i class="far fa-eye"></i></a>
                      
                      <button data-country="{{$show->country}}" data-company="{{$show->company}}" data-position="{{$show->position}}" data-id="{{$show->id}}" class='btn btn-success iapply' data-toggle="modal" data-target="#notlogin" ><i class="far fa-check-square"></i></i></button>
                  </div>
                </div>
              </div>
              <hr>

        <!-- Modal Job Vacancies -->
        <div class="modal fade modal-info" id="exampleModal{{$show->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header ">
                  
                  <div class="flexer">
                      <div class="left" >
                          <img src="{{asset('img/logo footer.png')}}" alt="E O M S I N C-L O G O" >
                      </div>
                      
                      <div class="right"  >
                      
                         <h2><strong>Position:</strong> <span class="AC">{{$show->position}}</span> </h2>
                         <h2><strong>Employer:</strong> <span class="AC">{{$show->company}}</span> </h2>
                         <h2><strong>Salary:</strong> <span class="AC">{{$show->amount}}</span> </h2>
                         <span class="badge badge-primary"><strong>Gender:</strong> <span class="AC">{{$show->gender}}</span> </span>
                         <span class="badge badge-info" ><strong>Years of Exp:</strong> <span class="AC">{{$show->exp}}</span> </span>

                       </div>
                  </div>  
                 
                 
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <?php echo $show->jobdetails ?>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                 
                </div>
              </div>
            </div>
          </div>
        <!-- Modal Job Vacancies -->
          @endforeach
            
  
           
            <a href="{{route('jobvacant')}}" type="button" class="btn btn-dark">VIEW ALL JOB VACANCIES</a>
          </div>
  
          <div class="col-lg-4 v---white">
              <i class="far fa-calendar-alt"></i>
            <h1 style="color: gray; margin-bottom: 40px;">Interview Schedule</h1>
            
            @foreach ($i_s as $item)
            <div class="job__schedule__box">
              <div class="img__logo_schedule">
                <img src="/img/logo footer.png" alt="">
              </div>
              <div class="job__schedule">
                <h1>{{$item->position}}</h1>
                <small>{{$item->country}}</small><br>
                <small>{{$item->interviewdate}}</small>
                
              </div>
          </div>
          <hr>
                
            @endforeach
            
  
            
  
           
  
            
  
          
            <a href="{{route('interviewschedule')}}" class="btn btn-warning">VIEW ALL INTERVIEW SCHEDULE</a>
          </div>
  
          <div class="col-lg-4 v---gold">
              <i class="fas fa-bullhorn"></i>
            <h1 style="margin-bottom: 40px;">Announcements</h1>
  <hr>
            {{-- <div class="announce__box">
              <small>January 15, 2018</small>
              <h2>INNOLUX CORPORATION</h2>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore excepturi,
                  <span><a href="#" > READ MORE</a> </span></p>
            </div> --}}
            <hr>
            {{-- <div class="announce__box">
              <small>January 15, 2018</small>
              <h2>INNOLUX CORPORATION</h2>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore excepturi,
                  <span><a href="#" > READ MORE</a> </span></p>
            </div> --}}
            <hr>
            {{-- <div class="announce__box">
              <small>January 15, 2018</small>
              <h2>INNOLUX CORPORATION</h2>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore excepturi, 
                  <span><a href="#" > READ MORE</a> </span></p>
            </div>
   --}}
            <button type="button" class="btn btn-dark">VIEW ALL ANNOUNCEMENT</button>
          </div>
  
      </div>
    </div>
  </section>


  
<div class="container">
    <section class="whoweare">
          <h3>WHO WE ARE</h3>
          <h1>EOMSinc</h1>
          
             
      
          <p>We are EPHESIANS OVERSEAS MANPOWER SUPPLY INC.(EOMS INC), a duly certified by the Philippine Overseas Employment Administration (POEA) to mobilize and place Filipino workers worldwide. Our team is composed of vastly experienced recruitment and client development officers pooled to pursue positive futures for both applicants and clients.</p>
          <p>Ephesians� recruitment and operating systems are quality assured to delight both the candidates and clients. We have a premium source tool to gain quality workers and meet client�s labor needs. While we are offering a quality employment for our candidates to satisfy and seize the opportunity of working overseas.
              <span id="dots">...</span></p>
    
          <div id="more">
          <h3>Why Pursue FILIPINO WORKERS?</h3>
          <p style="text-align: justify;">We all know that foreign employers preferred Filipinos to assume various position in their companies as they believe that most Filipinos possess the ability to contribute to company&rsquo;s success. We have list some of so many qualities why to hire Filipinos.&nbsp;<br /><br /><strong>QUALITY AND INTEGRITY</strong>- More than serving, they fond of delighting other people that&rsquo;s why they are tagged as most hospitable. They usually excel far above the expectations because they love what they are doing resulting to quality works and unwavering integrity.&nbsp;<br /><br /><strong>RESPONSIBILITY</strong>- It is a common reason for every Filipino why they chose to work abroad owing to the fact that they want a better paycheck for their families. They always strive to be a good provider to their loved ones. In return to the paycheck they are receiving, they are being responsible with every piece of their task.<br /><br /><strong>EXCELLENCE</strong>- Filipino&rsquo;s adoptability and eagerness to learn usually result to excellence. They easily adjust to their environment and always willing to learn additional skills. They enjoy learning and excelling. No wonder, we got the highest percentage of workers placed abroad.<br /><br /><strong>POSITIVITY</strong>- Filipino are very adept at overcoming adversity. They know how to smile and manage to stand after the fall. They are cautious of the bright side and bite into it. They are best in wearing mask of positivity.Who doesn&rsquo;t want to work with positive people?</p>
    
        <br>
    
        <h3>Why HIRE Through EOMS Inc.?</h3>
        <p style="text-align: justify;"><strong>1. EOMS Inc. will save your precious time:</strong><br />Hiring procedure is one of the time consuming in business sense. You cannot deal with it in a day. From posting the jobs, to sorting the hundreds of CVs received, shortlisting them etc. Going through a recruitment agency will save your time and effort from sourcing up to successful onboarding of your talent needs. EOMS Inc. will let you focus on your business, let us handle the recruitment up to induction plus we care to what we called &ldquo;post-deployment monitoring&rdquo; to both candidates and the company. EOMS Inc. will do the pre-screening to narrowed down your choices and will only present you a candidate who are worthy of consideration and interview.&nbsp;<br /><br /><strong>2. EOMS Inc. will give you the best</strong><br />Job openings are usually paired to various applicants but hiring through EOMS Inc. will paired your job openings to suitable candidates. EOMS Inc. has a sorted database of candidates where they can pull out CVs of your requirements. EOMS Inc. with vast experience in recruiting has many networks &ndash; our consultant, candidate, client or collaborator has the potential to leverage our networks to help connect you to people you are looking at. EOMS Inc. as one of the agencies are the usual go-to institution of every job seekers reason why agency&rsquo;s database are built up with available candidates.<br /><br /><strong>3. Cost Efficient</strong><br />You might think that hiring through an agency is costly but actually it is one of the efficient way to get your best talent placed on your required post. Agency usually subscribed to top job boards wherewith they could advertise your demand and reach the most qualified candidates. Plus they market your brand all in one cost. They help you building up your brand to every candidates and help you deal with candidates as well.<br /><br />Not to mention the peace of mind and the relationship you could develop on hiring through us.<br /><br />Let&rsquo;s create a positive future.</p>
      

        
      </div>

        <button type="button" class="btn btn-warning"  onclick="myFunction()" id="myBtn">Read more</button>




    </section>
  
  <section class="section---clients">
      <h1>Our Dearest Clients</h1>
      <div class="auto___clients">

        @foreach($allClients as $client)
           <div class="img-box"><img src="{{asset('clientLogos/')}}{{'/'.$client->client_logo}}" alt="{{$client->client_logo}}"></div>
        @endforeach
        {{-- <div><img src="data:image/png;base64,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" alt=""></div>
        <div><img src="data:image/png;base64,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" alt=""></div>
        <div><img src="data:image/png;base64,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" alt=""></div>
        <div><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAn1BMVEX///8An+NkZWcAneIAm+Lz8/NfYWNWV1kAmOFbXV9BtOkAluGl0vHNzs5cXV97fX+8vL3o+P3h4eKz3/VSVFatrq+Ny++/5vcqrudtb3Hn5+eq2POTlJXT09RoaWvt7e2BgoTX8Pteu+uvr7DBwsJLTVChoqPg9Px2d3nZ2dpxw+2Cye+U0fGXmJqKjI3y/P4ap+bO6vlQueoAjt+b1fLYM2uBAAAJMUlEQVR4nO2cAXeiOhOGI4EEyqJUsa1U0Va02lZte/v/f9s3CUkAb8Fa9bL0m+ec3cMSljPvmZDJJBMJQRAEQRAEQRAEQRAEQRAEQRAEQRAEQRAEQRAEQRAEQRAEQRAEQf4r7q8qubtu2rhzsHNpJfZH09adg2faqcZ9b9q803nwawR26FvT9p3OXZ0LwYmfTRt4KgO3VmCnY++aNvFEOvUuBIXPTZt4Gq/2AYHQT5+aNvIUdnkfrY4Yd01beQqPpo/aNWG/xRHj3UQK+6VpWy7DGzVdtGlTLkMeKdxB07ZcBmpc+AtmLl/xYiKF3+KxpIZrM8zQx+J9p5qmTP0hHyZSuMUsMFjwKqJtY8b+hHczzNivxfvMqibqN2XtT8gjRad4e96tUWiNmrL2B3x+HSkcXifQ4mljBh+NGUdpado5ruukQLcpe4/mOY8UD4Xb/aheoNVdNmbycTyZPkpL6d/qgAthsGlJyLjKc4ri7aD+KxSwlkSMvJOW8lvudavIB5tJY1YfxZcDTRxUMhkZiS2JGBXBopqJ6cDd8MK2nYmKgF/NzAxC/LKWnYvCpO176f3UBJK2RIyKiXc1SzPaRPGFbTsPVclTNZ6JGL3LmnYujk6AQyORBxe27UwcvYiRmIiRXNayc3H0QlQ+a+3OL2zbmXj7eu5WzTaPGO2Ynh69IOwYJ7LxhW07E/mivv+9iDHMI0Y7FjTyjRl6tbuupLCDaLopWzVn9jHkm2vUreSfQo4cGCe2ZUHj4Abp/hapUchakmMc3OTe2+ZOcx+2JOofKlTYL1Xotu07PFRssj/fad3sW1BbMLRXMtS+DEqwq61VoFfFZ/MsOGrK3J9QW45Rmgm0byVD8WZX4pZmc63LLTQPf6opPhfmkaIlK4rHYvoomzVtymUoRIpp07ZchLiVkeIY8k0br2lTLkO+aeO1K1KU6IeVpK2NFGWqt57yvaeWJPcV/KL9wyp+zx5wFfHBffxh0yaeyqa2nAY6adMGnsyhepq2LF3UENY5sT1LF3UkNQrbHSk0k5raxJYs5R/i99SXIgiCIAiCIAjyA8Rip07fpmkYrtV1WqgKCbLrbAm0v38bcOb6biqyefOMeRsw0BtST390DcPujylIub8vPJld632s035FJLa453mcCbucXiSus4KXySIya9RwLSruxuJReMBSZgeLSK8vbfkiS5GCaBGTZaS2esNoYTKnB99V9agdV/8uSMd1ldhb3zfnxNT1o6v2Ik86xhkvmBdFkccWfeIwxuCaW1JO4OX7DCvmCSk9ZkX6YSmLmQWmHlProaHH+2TuqRX84nbTrauP2fh6C/zd7djKdQM7P1L8Ru0bIqs9fEnpiNyxrBgXtgQscsjS8zZw3WdybVMoVE5cc0splIJCzix5P7Is3tcK1UqFVEjUEwEvFOqBQnWCwSi8sc1+/8Du2J/mQaXwDMeo46hgQqSqlQLPm0uFViZE1BkUFZIlk8Lgicy3mcJstSlTOPQ80dVHrLBjCIZ33NuSwg6lHdVNQaEu/gffnU8hiDHLfH2ufcbFXq1QKM2U9a8lhZPM/jFLtsqbQmG2YpgphFeMRIFCsdZS+DArstEKH1z6Qe2BVthxZY8VhwHOp1DZs6d2JMwTHsrs37I9H665VAj+N/+/x0YjluRvBDcH8AkUN31vXXpHZVGxVnhjuyDySiukmRM/6Dl9WKuQzYSZZBrBRUlhKp8ETwbg96FSmEzkIKze6ESsF5dcCArtwZsUoRWKf4HoXaaQXkn9T9BK/yOF3iQRF2PG115J4UiMS3Af/vZYohQyuO3lb1wyNipXeIHCe/jzahQ+ufSZfNpZNx3Y9u2b6MSP1L21tcJ7EQ5vL6gQmtfQGZdTrhXCjCBMmBxzuRhaNozHWuE6ghFKv1HUPZdLL4RCYfVOK3y1wWcg80Mr/LTd2x3IfnJ1tJDx0D9FYr3CAFzUG4KrYq3QEhGfcWH5hIsRdyLHXeXeLYvyN47Z3kq3VPjg2y9a4Rt1zd9C4YBQevdC/esHtxQP7VN+5+aQwtCDWcCY5ApFxN/Kx8B7YhjhWYiRCqeRN0z1G2O+Vz0jFYpOuMtGF+W9G1uOPlLhK4R9+kiMwot/h4Es9oHx0Cgs7JHBUAtdNh1ls5asael1VawUm1F7ZfmZwmufPlOpEOQ8wlf2TOXhIqlQnG70n86qsBgP1/vxUDRB6B6TrxSKYjzRZVWJhWqKLGbVKyQvNs0mMtAJKXxlFOKgUfhi24/krAr35jQ9LXVoxI8s50uFm6zHRhGTcxnVNPesQwp3NFN47Xds+Zm5cqaTKdy9da7Pq1DPSydi5B9n12quVXTvFwo9PenOwrpusg4qFKdQhcJ7W026YSbwqBVmnFVhKbeImLfabjnjojqrXuGas012Fco8QjcF/KBCGD2FwjuqS1BtalcoVLnFab/BqPJDqWbKZAIYyfKzIIpMqWS84FKhZ/KpkOtWJ/JmhaaRp2KEs/A2ZYW+q5zm26DQt3Xa9+z672Tg+rlC3xUKr1R+aP9z4m/bFXP8YLPdztVcclyos5tvRSIb94xmJ28NexDz+7pputUN4WyvEvFZH8i8uYMId3+n0/vdlTiY8VE4nfFyJdy7u1c5/u/8mR8EQf6POeFkXTsO5cXfPVnn/Luke0HiFhRgTr9bvRX/+8G//1cxwogHoLDPLXDFKkmsOODRnASQP2UdcNjlKZmNmJg+TK15vI44zGqW3FrJ6S4n/RGZ9ayuA3O7v/LU+oJIHyZTskzTJenPiCPMniaQlYj2WF7MswxsOlqLWVASi369kLdA4Uo0p0NxY9GUjBo2s7VQyB2xQZOSNSgMQ2sqFEpz4QZJjELopdA86q/H+wqDLVn0g7+yz056oVYYJ+tZSlg66VYoFN/har5O1oQFyyzHMArHZBHO/85St/7MUb10PRPbZiCMOUZhqZc6kExBtrHqk1GqkrCiQnByYyqqsRLIiyLIFWGkiRe9VUzm3BqPHa2QDD0YaeYq7C29IIXmFemuVtkt+U2CwslY7NjMGlLxXYYB5IXfehL0EKs9R38Ny1QNoAeBcaWVCp1RwvuHHxNsPN7i804IgiAIgiAIgiAIgiAIgiAIgiAIgiAIgiAIgiAIgiAIgiAIgiAt5H8puLEg21+ViQAAAABJRU5ErkJggg==" alt=""></div>
        <div><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAn1BMVEX///8An+NkZWcAneIAm+Lz8/NfYWNWV1kAmOFbXV9BtOkAluGl0vHNzs5cXV97fX+8vL3o+P3h4eKz3/VSVFatrq+Ny++/5vcqrudtb3Hn5+eq2POTlJXT09RoaWvt7e2BgoTX8Pteu+uvr7DBwsJLTVChoqPg9Px2d3nZ2dpxw+2Cye+U0fGXmJqKjI3y/P4ap+bO6vlQueoAjt+b1fLYM2uBAAAJMUlEQVR4nO2cAXeiOhOGI4EEyqJUsa1U0Va02lZte/v/f9s3CUkAb8Fa9bL0m+ec3cMSljPvmZDJJBMJQRAEQRAEQRAEQRAEQRAEQRAEQRAEQRAEQRAEQRAEQRAEQRAEQf4r7q8qubtu2rhzsHNpJfZH09adg2faqcZ9b9q803nwawR26FvT9p3OXZ0LwYmfTRt4KgO3VmCnY++aNvFEOvUuBIXPTZt4Gq/2AYHQT5+aNvIUdnkfrY4Yd01beQqPpo/aNWG/xRHj3UQK+6VpWy7DGzVdtGlTLkMeKdxB07ZcBmpc+AtmLl/xYiKF3+KxpIZrM8zQx+J9p5qmTP0hHyZSuMUsMFjwKqJtY8b+hHczzNivxfvMqibqN2XtT8gjRad4e96tUWiNmrL2B3x+HSkcXifQ4mljBh+NGUdpado5ruukQLcpe4/mOY8UD4Xb/aheoNVdNmbycTyZPkpL6d/qgAthsGlJyLjKc4ri7aD+KxSwlkSMvJOW8lvudavIB5tJY1YfxZcDTRxUMhkZiS2JGBXBopqJ6cDd8MK2nYmKgF/NzAxC/LKWnYvCpO176f3UBJK2RIyKiXc1SzPaRPGFbTsPVclTNZ6JGL3LmnYujk6AQyORBxe27UwcvYiRmIiRXNayc3H0QlQ+a+3OL2zbmXj7eu5WzTaPGO2Ynh69IOwYJ7LxhW07E/mivv+9iDHMI0Y7FjTyjRl6tbuupLCDaLopWzVn9jHkm2vUreSfQo4cGCe2ZUHj4Abp/hapUchakmMc3OTe2+ZOcx+2JOofKlTYL1Xotu07PFRssj/fad3sW1BbMLRXMtS+DEqwq61VoFfFZ/MsOGrK3J9QW45Rmgm0byVD8WZX4pZmc63LLTQPf6opPhfmkaIlK4rHYvoomzVtymUoRIpp07ZchLiVkeIY8k0br2lTLkO+aeO1K1KU6IeVpK2NFGWqt57yvaeWJPcV/KL9wyp+zx5wFfHBffxh0yaeyqa2nAY6adMGnsyhepq2LF3UENY5sT1LF3UkNQrbHSk0k5raxJYs5R/i99SXIgiCIAiCIAjyA8Rip07fpmkYrtV1WqgKCbLrbAm0v38bcOb6biqyefOMeRsw0BtST390DcPujylIub8vPJld632s035FJLa453mcCbucXiSus4KXySIya9RwLSruxuJReMBSZgeLSK8vbfkiS5GCaBGTZaS2esNoYTKnB99V9agdV/8uSMd1ldhb3zfnxNT1o6v2Ik86xhkvmBdFkccWfeIwxuCaW1JO4OX7DCvmCSk9ZkX6YSmLmQWmHlProaHH+2TuqRX84nbTrauP2fh6C/zd7djKdQM7P1L8Ru0bIqs9fEnpiNyxrBgXtgQscsjS8zZw3WdybVMoVE5cc0splIJCzix5P7Is3tcK1UqFVEjUEwEvFOqBQnWCwSi8sc1+/8Du2J/mQaXwDMeo46hgQqSqlQLPm0uFViZE1BkUFZIlk8Lgicy3mcJstSlTOPQ80dVHrLBjCIZ33NuSwg6lHdVNQaEu/gffnU8hiDHLfH2ufcbFXq1QKM2U9a8lhZPM/jFLtsqbQmG2YpgphFeMRIFCsdZS+DArstEKH1z6Qe2BVthxZY8VhwHOp1DZs6d2JMwTHsrs37I9H665VAj+N/+/x0YjluRvBDcH8AkUN31vXXpHZVGxVnhjuyDySiukmRM/6Dl9WKuQzYSZZBrBRUlhKp8ETwbg96FSmEzkIKze6ESsF5dcCArtwZsUoRWKf4HoXaaQXkn9T9BK/yOF3iQRF2PG115J4UiMS3Af/vZYohQyuO3lb1wyNipXeIHCe/jzahQ+ufSZfNpZNx3Y9u2b6MSP1L21tcJ7EQ5vL6gQmtfQGZdTrhXCjCBMmBxzuRhaNozHWuE6ghFKv1HUPZdLL4RCYfVOK3y1wWcg80Mr/LTd2x3IfnJ1tJDx0D9FYr3CAFzUG4KrYq3QEhGfcWH5hIsRdyLHXeXeLYvyN47Z3kq3VPjg2y9a4Rt1zd9C4YBQevdC/esHtxQP7VN+5+aQwtCDWcCY5ApFxN/Kx8B7YhjhWYiRCqeRN0z1G2O+Vz0jFYpOuMtGF+W9G1uOPlLhK4R9+kiMwot/h4Es9oHx0Cgs7JHBUAtdNh1ls5asael1VawUm1F7ZfmZwmufPlOpEOQ8wlf2TOXhIqlQnG70n86qsBgP1/vxUDRB6B6TrxSKYjzRZVWJhWqKLGbVKyQvNs0mMtAJKXxlFOKgUfhi24/krAr35jQ9LXVoxI8s50uFm6zHRhGTcxnVNPesQwp3NFN47Xds+Zm5cqaTKdy9da7Pq1DPSydi5B9n12quVXTvFwo9PenOwrpusg4qFKdQhcJ7W026YSbwqBVmnFVhKbeImLfabjnjojqrXuGas012Fco8QjcF/KBCGD2FwjuqS1BtalcoVLnFab/BqPJDqWbKZAIYyfKzIIpMqWS84FKhZ/KpkOtWJ/JmhaaRp2KEs/A2ZYW+q5zm26DQt3Xa9+z672Tg+rlC3xUKr1R+aP9z4m/bFXP8YLPdztVcclyos5tvRSIb94xmJ28NexDz+7pputUN4WyvEvFZH8i8uYMId3+n0/vdlTiY8VE4nfFyJdy7u1c5/u/8mR8EQf6POeFkXTsO5cXfPVnn/Luke0HiFhRgTr9bvRX/+8G//1cxwogHoLDPLXDFKkmsOODRnASQP2UdcNjlKZmNmJg+TK15vI44zGqW3FrJ6S4n/RGZ9ayuA3O7v/LU+oJIHyZTskzTJenPiCPMniaQlYj2WF7MswxsOlqLWVASi369kLdA4Uo0p0NxY9GUjBo2s7VQyB2xQZOSNSgMQ2sqFEpz4QZJjELopdA86q/H+wqDLVn0g7+yz056oVYYJ+tZSlg66VYoFN/har5O1oQFyyzHMArHZBHO/85St/7MUb10PRPbZiCMOUZhqZc6kExBtrHqk1GqkrCiQnByYyqqsRLIiyLIFWGkiRe9VUzm3BqPHa2QDD0YaeYq7C29IIXmFemuVtkt+U2CwslY7NjMGlLxXYYB5IXfehL0EKs9R38Ny1QNoAeBcaWVCp1RwvuHHxNsPN7i804IgiAIgiAIgiAIgiAIgiAIgiAIgiAIgiAIgiAIgiAIgiAIgiAt5H8puLEg21+ViQAAAABJRU5ErkJggg==" alt=""></div>
        <div><img src="data:image/png;base64,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" alt=""></div>
        <div><img src="data:image/png;base64,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" alt=""></div>
        <div><img src="data:image/png;base64,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" alt=""></div> --}}
      </div>
  </section>
  
  
  <section class="affiliates">
    <h3>OUR</h3>
    <h1>Government Affiliates</h1>
    <div class="row">
      <div class="col-lg lgu">
        <div class="img-box">
          <img src="img/poea.png" alt="1">
        </div>
          <a href="http://www.poea.gov.ph/" target="_blank">Philippine Overseas Employment Administration</a>
      </div>

      <div class="col-lg lgu">
        <div class="img-box">
          <img src="img/dfa.png" alt="2">
        </div>
       <a href="https://dfa.gov.ph/" target="_blank">Department of Foreign Affairs</a> 
      </div>

      <div class="col-lg lgu">
        <div class="img-box">
          <img src="img/dole.png" alt="3">
        </div>
       <a href="https://www.dole.gov.ph" target="_blank">Department of Labor and Employment</a> 
      </div>

      <div class="col-lg lgu">
        <div class="img-box">
          <img src="img/owwa.png" alt="4">
        </div>
       <a href="https://www.owwa.gov.ph" target="_blank"> Overseas Workers Welfare Administration</a>
      </div>
    </div>
  </section>
  
</div>


<div class="img-thumbnail" style="height: 400px;">
@include('inc.map')
</div>


<!-- Modal Job Search Details -->
<div class="modal fade modal-info" id="modal-search" tabindex="-1" role="dialog" aria-labelledby="modal-search" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" id="results-details">
      {{-- GENERATE HERE --}}
    </div>
  </div>
</div>
<!-- Modal Job Search Details -->
  
  
@endsection