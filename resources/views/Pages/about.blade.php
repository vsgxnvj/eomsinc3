@extends('layouts.main')

@section('content')

@include('inc.marginpushdown')


<section class="this---company mb-3">
    <div class="aboutus"> 
        <h3>ABOUT US</h3>
        <h1 class="company-----name">EOMSINC</h1>

        <div class="container">
            <div class="row">
                <div class="col-lg-4 slogan">
                <h1>Come and let's have a hand in hand partnership in achieving positive futures
                    </h1>
                </div>
            
                <div class="col-lg-8">
                    <p style="text-align: justify;">We are EPHESIANS OVERSEAS MANPOWER SUPPLY INC.(EOMS INC), a duly certified by the Philippine Overseas Employment Administration (POEA) to mobilize and place Filipino workers worldwide. Our team is composed of vastly experienced recruitment and client development officers pooled to pursue positive futures for both applicants and clients.</p>
                    <p style="text-align: justify;">Ephesians&rsquo; recruitment and operating systems are quality assured to delight both the candidates and clients. We have a premium source tool to gain quality workers and meet client&rsquo;s labor needs. While we are offering a quality employment for our candidates to satisfy and seize the opportunity of working overseas.</p>
                </div>
            </div>
        </div> 
    </div>{{-- END ABOUT US --}}


    <div class="video----trailer">
        <div class="container">
            <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/dh3bMzQS0_g?start=2" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>{{-- END video----trailer --}}
                            
    <div class="mission----vision">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="col-lg-12 mb-3 ">
                        <h1>Mission: </h1><br>
                        <h4>To seek and provide positive opportunities that will lead to positive futures </h4>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="col-lg-12 mb-3 ">
                        <h1>Vision: </h1><br>
                        <h4>To create positive futures</h4>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="col-lg-12 mb-3 ">
                        <h1>Our Offer: </i></h1><br>
                        <h4>Come and let's have a hand in hand partnership in achieving positive futures</h4>
                    </div>
                </div>
            </div><br>
            <h1 style="text-align: center">Core Values:</h1><br>
            <div class="row">
                <div class="col-lg-6">
                    <div  class="wrapper1" style="display: flex">
                        <div class=" imgbox">
                            <img src="{{asset('img/integrity.PNG')}}" alt="I N T E G R I T Y">
                        </div>
                        
                        <div class="detail-box">
                            <strong>QUALITY AND INTEGRITY</strong>- More than serving, they fond of delighting other people that’s why they are tagged as most hospitable. They usually excel far above the expectations because they love what they are doing resulting to quality works and unwavering integrity.
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div  class="wrapper1" style="display: flex">
                        <div class="imgbox">
                            <img src="{{asset('img/responsibility.PNG')}}" width="100" height="100" alt="R E S P O N S I B I L I T Y">
                        </div>
                        
                        <div class="detail-box">
                            <strong>RESPONSIBILITY</strong>- It is a common reason for every Filipino why they chose to work abroad owing to the fact that they want a better paycheck for their families. Th ey always strive to be a good provider to their loved ones. In return to the paycheck they are receiving, they are being responsible with every piece of their task.
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div  class="wrapper1" style="display: flex">
                        <div class="imgbox">
                            <img src="{{asset('img/exellence.PNG')}}" width="100" height="100" alt="E X C E L L E N C E">
                        </div>
                        
                        <div class="detail-box">
                            <strong>EXCELLENCE</strong>- Filipino’s adoptability and eagerness to learn usually result to excellence. They easily adjust to their environment and always willing to learn additional skills. They enjoy learning and excelling. No wonder, we got the highest percentage of workers placed abroad.
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div  class="wrapper1" style="display: flex">
                        <div class="imgbox">
                            <img src="{{asset('img/positivity.PNG')}}" width="100" height="100" alt="P O S I T I V I T Y">
                        </div>
                        
                        <div class="detail-box">
                            <strong>POSITIVITY</strong>- Filipino are very adept at overcoming adversity. They know how to smile and manage to stand after the fall. They are cautious of the bright side and bite into it. They are best in wearing mask of positivity. Who doesn’t want to work with positive people?
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>  
</section>


<section class="octa-box">
   <div class="text-center"><h1>Our Facilities</h1></div>
    <ul id="hexGrid">
        <li class="hex">
          <a class="hexIn" href="{{url('/assets/Applicants Holding Area.JPG')}}" data-toggle="lightbox" data-gallery="gallery">
            <img src="{{url('/assets/Applicants Holding Area.JPG')}}"  alt="" />
            <h1>Our Holding Area</h1>
            <p>...</p>
         </a>
        </li>

        <li class="hex">
            <a class="hexIn" href="{{url('/assets/Board Meeting Area.jpg')}}" data-toggle="lightbox" data-gallery="gallery">
              <img src="{{url('/assets/Board Meeting Area.jpg')}}"  alt="" />
              <h1>Our Board Meeting Area</h1>
              <p>...</p>
           </a>
        </li>


        <li class="hex">
            <a class="hexIn" href="{{url('/assets/Board Meeting Areas.jpg')}}" data-toggle="lightbox" data-gallery="gallery">
              <img src="{{url('/assets/Board Meeting Areas.jpg')}}"  alt="" />
              <h1>Our Board Meeting Area</h1>
              <p>...</p>
           </a>
        </li>

        <li class="hex">
            <a class="hexIn" href="{{url('/assets/Entrance.jpg')}}" data-toggle="lightbox" data-gallery="gallery">
              <img src="{{url('/assets/Entrance.jpg')}}"  alt="" />
              <h1>Entrance</h1>
              <p>...</p>
           </a>
        </li>

        <li class="hex">
            <a class="hexIn" href="{{url('/assets/General Managers Office.jpg')}}" data-toggle="lightbox" data-gallery="gallery">
              <img src="{{url('/assets/General Managers Office.jpg')}}"  alt="" />
              <h1>General Manager's Office</h1>
              <p>...</p>
           </a>
        </li>

        <li class="hex">
            <a class="hexIn" href="{{url('/assets/WP_20190402_001.jpg')}}" data-toggle="lightbox" data-gallery="gallery">
              <img src="{{url('/assets/WP_20190402_001.jpg')}}"  alt="" />
              <h1>Our Interview Room</h1>
              <p>...</p>
           </a>
        </li>


        <li class="hex">
            <a class="hexIn" href="{{url('/assets/WP_20190402_002.jpg')}}" data-toggle="lightbox" data-gallery="gallery">
              <img src="{{url('/assets/WP_20190402_002.jpg')}}"  alt="" />
              <h1>Interview Room</h1>
              <p>...</p>
           </a>
        </li>

        <li class="hex">
            <a class="hexIn" href="{{url('/assets/WP_20190402_003.jpg')}}" data-toggle="lightbox" data-gallery="gallery">
              <img src="{{url('/assets/WP_20190402_003.jpg')}}"  alt="" />
              <h1>Bar Area</h1>
              <p>...</p>
           </a>
        </li>

        <li class="hex">
            <a class="hexIn" href="{{url('/assets/WP_20190402_004.jpg')}}" data-toggle="lightbox" data-gallery="gallery">
              <img src="{{url('/assets/WP_20190402_004.jpg')}}"  alt="" />
              <h1>Waiting Area</h1>
              <p>...</p>
           </a>
        </li>

        
  
        
      
       
      </ul>
     
</section>




@endsection
