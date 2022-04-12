<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>EOMSINC | PROJECT360</title>
   </head>
   <link href="{{ asset('css/app.css ') }}" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">


   <style>
      .video-container{
      position: absolute;
      top: 25%;
      left: 45%;
      }
      .___CEnter {
      position: relative;
      top: 45%;
      left: 50%;
      margin: 0 auto; 
      float: none; 
      margin-bottom: 10px;
      transform: translate(-50%, -50%);
      }
      .carousel .carousel-item {
      height: 350px;
      }
      footer {
      background: url('https://mftgroup.com.ph/wp-content/uploads/2018/02/footer-background-image.jpg') no-repeat;
      background-size: cover;
      background-position: center;
      color: white;
      padding: 20px;
      }
      footer h5, footer h2 {
      color: goldenrod;
      }
      footer .title---footer {
      margin-bottom: 40px;
      }
      footer hr {
      border: 0;
      height: 1px;
      background-image: linear-gradient(to right, rgba(255, 255, 255, 0), rgba(255, 255, 255, 0.75), rgba(0, 0, 0, 0));
      }
      footer a {
      color: white;
      line-height: 1em;
      }
      footer a:link {
      text-decoration: none;
      }
      footer ul {
      list-style-type: none;
      font-size: 13px;
      }
      hr {
      display: block;
      height: 1px;
      border: 0;
      border-top: 1px solid #fff;
      margin: 1em 0;
      padding: 0;
      }
      .copyr .imgs {
      width: 100px;
      height: 110px;
      }
      .copyr .imgs img {
      height: 100%;
      width: 100%;
      }
      .copyr .cop {
      margin-top: 40px;
      }
      @media screen and (max-width: 768px) {
      footer {
      margin: 0 auto;
      background-size: cover;
      background-position: center;
      color: white;
      padding: 20px;
      }
      footer a:link {
      text-decoration: none;
      }
      footer ul {
      list-style-type: none;
      font-size: 13px;
      }
      hr {
      display: block;
      height: 1px;
      border: 0;
      border-top: 1px solid #fff;
      margin: 1em 0;
      padding: 0;
      }
      .copyr .imgs {
      width: 100px;
      height: 110px;
      }
      .copyr .imgs img {
      height: 100%;
      width: 100%;
      }
      .copyr .cop {
      margin-top: 40px;
      }
      }
      .affiliates {
      padding: 10px;
      margin-bottom: 50px;
      }
      .affiliates a:link {
      text-decoration: none;
      }
      .affiliates h3, .affiliates h1 {
      text-align: center;
      }
      .affiliates .lgu {
      text-align: center;
      }
      .affiliates .img-box {
      height: 120px;
      width: 130px;
      padding: 5px;
      margin: 0 auto;
      border-radius: 20%;
      }
      .affiliates .img-box img {
      height: 100%;
      width: 100%;
      }
      /*
      gallery displays in grid mode
      10 fr each row
      */
      .gallery {
      width: 100%;
      display: grid;
      grid-template-columns: repeat(10, 1fr);
      grid-auto-rows: minmax(1fr, 500px);
      grid-gap: 5px;
      }
      .photo {
      background: #777;
      }
      .photo img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      }
      .mvo{
    
        padding: 1em;
        font-size: 1.5em;
        box-shadow: 2px 11px 15px -8px rgba(0, 0, 0, 0.74);
        -webkit-box-shadow: 2px 11px 15px -8px rgba(0, 0, 0, 0.74);
        -moz-box-shadow: 2px 11px 15px -8px rgba(0, 0, 0, 0.74);
      }

      .client{

        padding: 1em;
        font-size: 1.5em;
        box-shadow: 2px 11px 15px -8px rgba(0, 0, 0, 0.74);
        -webkit-box-shadow: 2px 11px 15px -8px rgba(0, 0, 0, 0.74);
        -moz-box-shadow: 2px 11px 15px -8px rgba(0, 0, 0, 0.74);

      }

      .mvo h1{
        font-family: 'Shadows Into Light', cursive;
        font-weight: 700;
        font-size: 2em;
        color: #DAA520;

        
      }
      .imgbox img{
        height: 100px;
        width: 100px;
        margin-right: 20px;
      }

      .detail-box{
        font-size: 15px;
      }

      .wrapper1{
        margin-bottom: 3em;
      }



    .gallery-image {
    padding: 20px;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    }

    .gallery-image img {
      height: 250px;
      width: 350px;
      transform: scale(1.0);
      transition: transform 0.4s ease;
    }

    .image_box {
      box-sizing: content-box;
      margin: 10px;
      height: 250px;
      width: 350px;
      overflow: hidden;
      display: inline-block;
      color: white;
      position: relative;
      background-color: white;
    }

    .caption {
      position: absolute;
      bottom: 5px;
      left: 20px;
      opacity: 0.0;
      transition: transform 0.3s ease, opacity 0.3s ease;
    }

    .transparent-box {
      height: 250px;
      width: 350px;
      background-color:rgba(0, 0, 0, 0);
      position: absolute;
      top: 0;
      left: 0;
      transition: background-color 0.3s ease;
    }

    .image_box:hover img { 
      transform: scale(1.1);
    }

    .image_box:hover .transparent-box {
      background-color:rgba(0, 0, 0, 0.5);
    }

    .image_box:hover .caption {
      transform: translateY(-20px);
      opacity: 1.0;
    }

    .image_box:hover {
      cursor: pointer;
    }

    .caption > p:nth-child(2) {
      font-size: 0.8em;
    }

    .opacity-low {
      opacity: 0.5;
    }




 
   </style>
   <header class="header">
      <div class="the_logo_mobile">
         <img class="" src="{{asset('img/logoall.PNG')}}" alt="Logo" /></a>
      </div>
      <nav class="flexky" id="flexky">
         <div class="flexky__button" id="btn-menu"><span></span><span></span><span></span></div>
         <ul class="flexky__container" id="flexky-menu">
            <li class="flexky__item">
               <a class="flexky__link" href="/"><img class="flexky__img" src="{{asset('img/eomslogo.png')}}" alt="Logo" /></a>
            </li>
            <li class="flexky__item"><a class="flexky__link" href="#">HOME</a></li>
            <li class="flexky__item"><a class="flexky__link" href="#about">ABOUT</a></li>
            @if (Auth::guest())
            {{-- 
            <li class="flexky__item"><a class="flexky__link" href="{{ route('register') }}">REGISTER</a>
            </li>
            --}}
            <li class="flexky__item"><a class="flexky__link" href="https://project360-web.eomsinc.com/landing"  target="_blank">JOBS</a>
            </li>
            <li class="flexky__item"><a class="flexky__link" href="#">DOWNLOAD</a>
            </li>
            <li class="flexky__item"><a class="flexky__link" href="#">CONTACT US</a>
            </li>
            <li class="flexky__item"><a class="flexky__link btn btn-success btn-sm" href="https://project360-web.eomsinc.com/login" target="_blank">APPLICATION LOGIN</a></li>
            @else
            <li class="flexky__item">
               <a class="flexky__link" href="{{ route('logout') }}" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
               LOGOUT
               </a> 
            </li>
            @endif
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
               {{ csrf_field() }}
            </form>
         </ul>
      </nav>
      <div class="video-container">
         <video width="500" controls autoplay>
            <source src="{{asset('img/360.mp4')}}" type="video/mp4">
         </video>
      </div>
   </header>
   <body>
      <div class="container">
         <br><br><br>
         <div class="row">
            <div class="col-lg-4">
               <div class="card border-secondary text-center ___CEnter">
                  <img class="card-img-top" src="#" alt="">
                  <div class="card-body center_me">
                     <div>We got jobs! Apply now!</div>
                     <a href="https://project360-web.eomsinc.com/register" class="btn btn-success" target="_blank">Register Now</a>
                  </div>
               </div>
            </div>
            <div class="col-lg-8">
               <div id="carouselExampleIndicators" style="z-index: -10;" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                     <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                     <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                     <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <img class="d-block w-100" src="https://images.unsplash.com/photo-1649161803910-4fbb46479c5e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1471&q=80" alt="First slide">
                     </div>
                     <div class="carousel-item">
                        <img class="d-block w-100" src="https://images.unsplash.com/photo-1648659170064-d7f71d924fae?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=813&q=80" alt="Second slide">
                     </div>
                     <div class="carousel-item">
                        <img class="d-block w-100" src="https://images.unsplash.com/photo-1649083048149-919643cf6dd9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80" alt="Third slide">
                     </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only"></span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only"></span>
                  </a>
               </div>
            </div>
         </div>
         <hr>
         <br><br><br><br>
         <section class="client">
            <div class="container">
               <h1>NEWS</h1>
               <div class="row">
                  <div class="col-lg-4">
                     <div class="card">
                        <img class="card-img-top" src="{{asset('img/upcoming gray.PNG')}}" alt="Card image cap">
                        <div class="card-body">
                           <h5 class="card-title">NEW APP PROJECT 360 </h5>
                           <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                           <a href="#" class="btn btn-primary">Read more</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="card">
                        <img class="card-img-top" src="{{asset('img/upcoming gray.PNG')}}" alt="Card image cap">
                        <div class="card-body">
                           <h5 class="card-title">KSA is now open</h5>
                           <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                           <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="card">
                        <img class="card-img-top" src="{{asset('img/upcoming gray.PNG')}}" alt="Card image cap">
                        <div class="card-body">
                           <h5 class="card-title">New Job Opportunity in USA</h5>
                           <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                           <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <br><br><br><br>
         <section class="about" id="about">
            <div class="row">
               <div class="col-lg-6">
                  <h3 class="welcome">Welcome to EOMSINC Recruitment</h3>
                  <div class="about_ephesians">
                     We are EPHESIANS OVERSEAS MANPOWER SUPPLY INC.(EOMS INC), a duly certified by the Philippine Overseas Employment Administration (POEA) to mobilize and place Filipino workers worldwide. Our team is composed of vastly experienced recruitment and client development officers pooled to pursue positive futures for both applicants and clients.
                     <br><br>
                     Ephesians’ recruitment and operating systems are quality assured to delight both the candidates and clients. We have a premium source tool to gain quality workers and meet client’s labor needs. While we are offering a quality employment for our candidates to satisfy and seize the opportunity of working overseas.
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="img-wrapper">
                     <img src="{{asset('img/facility.jpg')}}" alt="pic">
                  </div>
               </div>
            </div>
            <hr>
            <br><br>
            <section>
               <div class="row">
                  <div class="col-lg-6">
                     <div class="img-wrapper">
                        <img src="{{asset('img/roda.jpg')}}" alt="pic">
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <h3 class="welcome">Why HIRE through EOMS Inc</h3>
                     <div class="about_ephesians">
                        <strong>EOMS Inc. will save your precious time: </strong>
                        Hiring procedure is one of the time- consuming task in a recruitment business. It cannot be done
                        overnight as it involves the tedious process of posting the jobs, sorting hundreds if not thousands of
                        CVs received, short-listing them etc. If you get professional help from our team then we can handle
                        the recruitment process for you which will save your time and effort without compromising the
                        quality of your needed talents. <br><br>
                        EOMS Inc. will let you focus on your business, and allow us to handle all the works of recruitment
                        that is first rate in the industry. In so doing, we will be able to narrow down your choices to selecting
                        the best among the nominated candidates who are worthy of your interview and consideration. Most
                        importantly, we pride ourselves to have pioneered to what we call as ‘’post deployment monitoring’’
                        a system and mobile app that allows us to have up-to-date information of our candidates and their
                        respective companies.
                     </div>
                  </div>
               </div>
            </section>

            <section class="mvo mt-3">
              <div class="row">
                <div class="col-lg-4 text-center">
                  <h1>Mission:</h1>
                  <p>To seek and provide positive opportunities that will lead to positive futures</p>
                </div>
                <div class="col-lg-4 text-center">
                  <h1>Vision:</h1>
                  <p>To create positive futures</p>
                </div>
                <div class="col-lg-4 text-center">
                  <h1>Our Offer:</h1>
                  <p>Come and let's have a hand in hand partnership in achieving positive futures</p>
                </div>
              </div>


                            <section class="">
                                <h1 class="text-center mb-3">Core Values:</h1>   
                                
                                <div class="row">
                                  <div class="col-lg-6">
                                      <div class="wrapper1" style="display: flex">
                                          <div class=" imgbox">
                                              <img src="https://eomsinc.com/img/integrity.PNG" alt="I N T E G R I T Y">
                                          </div>
                                          
                                          <div class="detail-box">
                                              <strong>QUALITY AND INTEGRITY</strong>- More than serving, they fond of delighting other people that’s why they are tagged as most hospitable. They usually excel far above the expectations because they love what they are doing resulting to quality works and unwavering integrity.
                                          </div>
                                      </div>
                                  </div>
                  
                                  <div class="col-lg-6">
                                      <div class="wrapper1" style="display: flex">
                                          <div class="imgbox">
                                              <img src="https://eomsinc.com/img/responsibility.PNG" width="100" height="100" alt="R E S P O N S I B I L I T Y">
                                          </div>
                                          
                                          <div class="detail-box">
                                              <strong>RESPONSIBILITY</strong>- It is a common reason for every Filipino why they chose to work abroad owing to the fact that they want a better paycheck for their families. Th ey always strive to be a good provider to their loved ones. In return to the paycheck they are receiving, they are being responsible with every piece of their task.
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-6">
                                      <div class="wrapper1" style="display: flex">
                                          <div class="imgbox">
                                              <img src="https://eomsinc.com/img/exellence.PNG" width="100" height="100" alt="E X C E L L E N C E">
                                          </div>
                                          
                                          <div class="detail-box">
                                              <strong>EXCELLENCE</strong>- Filipino’s adoptability and eagerness to learn usually result to excellence. They easily adjust to their environment and always willing to learn additional skills. They enjoy learning and excelling. No wonder, we got the highest percentage of workers placed abroad.
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-6">
                                      <div class="wrapper1" style="display: flex">
                                          <div class="imgbox">
                                              <img src="https://eomsinc.com/img/positivity.PNG" width="100" height="100" alt="P O S I T I V I T Y">
                                          </div>
                                          
                                          <div class="detail-box">
                                              <strong>POSITIVITY</strong>- Filipino are very adept at overcoming adversity. They know how to smile and manage to stand after the fall. They are cautious of the bright side and bite into it. They are best in wearing mask of positivity. Who doesn’t want to work with positive people?
                                          </div>
                                      </div>
                                  </div>
                              </div>
                                
                            </section>

            </section>


         </section>
   





      <br><br><br><br>
      {{-- <section class="client">
         <div class="container">
            <h1>Our Dearest Clients</h1>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis voluptatem commodi aliquid, iure veniam aperiam quam eum officia. Temporibus rem aliquam pariatur, voluptates maiores velit hic! Ad natus eveniet accusantium!
         </div>
         <div class="container">
            <section class='gallery'>
               <div class='photo'>
                  <a href="#">
                  <img src="https://girlydrop.com/wp-content/uploads/post/p7443.jpg">
                  </a>
               </div>
               <div class='photo'>
                  <a href="#">
                  <img src="https://drive.google.com/uc?export=download&id=1tjvInZOztLuop6GiiW9Na8yLnJygruUb">
                  </a>
               </div>
               <div class='photo'>
                  <a href="#">
                  <img src="https://drive.google.com/uc?export=download&id=15l9UDJYU1FevP8DVBhe3k1gfE6LkRZIu">
                  </a>
               </div>
               <div class='photo'>
                  <a href="#">
                  <img src="https://drive.google.com/uc?export=download&id=1gPeGfnA-qzuHu8NJqFKwOnIWfHzWYsaN">
                  </a>
               </div>
               <div class='photo'>
                  <a href="#">
                  <img src="https://girlydrop.com/wp-content/uploads/post/p1853.jpg">
                  </a>
               </div>
               <div class='photo'>
                  <a href="#">
                  <img src="https://girlydrop.com/wp-content/uploads/post/p4905.jpg">
                  </a>
               </div>
               <div class='photo'>
                  <a href="#">
                  <img src="https://girlydrop.com/wp-content/uploads/post/p4595.jpg">
                  </a>
               </div>
               <div class='photo'>
                  <a href="#">
                  <img src="https://girlydrop.com/wp-content/uploads/post/p7446.jpg">
                  </a>
               </div>
               <div class='photo'>
                  <a href="#">
                  <img src="https://girlydrop.com/wp-content/uploads/post/p4531.jpg">
                  </a>
               </div>
            </section>
         </div>
      </section> --}}

     

      <section class="client galery">
      
       
          <h1>Our Dearest Clients</h1>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus commodi modi consequuntur distinctio vel doloremque inventore vitae autem, ut nulla. Molestiae repellat magnam totam magni culpa, aliquid impedit nam? Porro.

     
          <div class="gallery-image">
          <div class="image_box">
            <img src="https://picsum.photos/350/250?image=444" alt="" />
            <div class="transparent-box">
              <div class="caption">
                <p>Library</p>
                <p class="opacity-low">Architect Design</p>
              </div>
            </div> 
          </div>
          <div class="image_box">
            <img src="https://picsum.photos/350/250/?image=232" alt="" />
            <div class="transparent-box">
              <div class="caption">
                <p>Night Sky</p>
                <p class="opacity-low">Cinematic</p>
              </div>
            </div>
          </div>
          <div class="image_box">
            <img src="https://picsum.photos/350/250/?image=431" alt="" />
            <div class="transparent-box">
              <div class="caption">
                <p>Tea Talk</p>
                <p class="opacity-low">Composite</p>
              </div>
            </div>
          </div>
          <div class="image_box">
            <img src="https://picsum.photos/350/250?image=474" alt="" />
            <div class="transparent-box">
              <div class="caption">
                <p>Road</p>
                <p class="opacity-low">Landscape</p>
              </div>
            </div> 
          </div>
          <div class="image_box">
            <img src="https://picsum.photos/350/250?image=344" alt="" />
            <div class="transparent-box">
              <div class="caption">
                <p>Sea</p>
                <p class="opacity-low">Cityscape</p>
              </div>
            </div> 
          </div>
          <div class="image_box">
            <img src="https://picsum.photos/350/250?image=494" alt="" />
            <div class="transparent-box">
              <div class="caption">
                <p>Vintage</p>
                <p class="opacity-low">Cinematic</p>
              </div>
            </div> 
          </div>
        </div>
          
          
       

    
      </section>



      






    </div>{{-- END OF CONTAINER --}}


      <br><br><br><br>
      <section class="affiliates">
         <div class="container">
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
      </section>

      <br><br><br><br>
      <footer>
         <div class="container">
            <h2 class="title---footer">Ephesians Overseas Manpower Supply, Inc.</h2>
            <div class="row">
               <div class="col-lg-8">
                  <div class="row">
                     <div class="col-sm-5">
                        <ul>
                           <li>
                              <h5>MANILA</h5>
                           </li>
                           <p>Unit 301, Avenue Square Garden Bldg PH, J. Bocobo Street, 532 United Nations Ave, Ermita, Manila, 1000</p>
                           <li>0956-987-0764</li>
                           <li>0960-683-4027</li>
                           <li>resume@eomsinc.com (for applicants) </li>
                           <li>operation@eomsinc.com</li>
                        </ul>
                     </div>
                     <div class="col-sm-3">
                        <ul>
                           <li>
                              <h5>QUICK LINKS</h5>
                           </li>
                           <li><a href="https://eomsinc.com">Home</a></li>
                           <li><a href="https://eomsinc.com/about">About</a></li>
                           <li><a href="https://eomsinc.com/jobvacant">Jobseekers</a></li>
                           <li><a href="https://eomsinc.com/contact">Contact</a></li>
                        </ul>
                     </div>
                     <div class="col-sm-4">
                        <ul>
                           <li>
                              <h5>WHERE TO FIND US</h5>
                           </li>
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
                        <img src="https://eomsinc.com/img/logo footer.png" alt="">
                     </div>
                  </div>
                  <div class="col lg-6 cop">
                     EOMSINC Copyright © 2022 Ephesians Overseas Manpower Supply
                  </div>
               </div>
            </div>
         </div>
      </footer>
   </body>
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   <script src="https://api.ratiborsky.cz/modules/fslightbox/fslightbox.js"></script>
   <script>
      window.addEventListener("load", () => {
      let flexky = document.getElementById("flexky"),
      open = document.getElementById("btn-menu"),
      menu = document.getElementById("flexky-menu");
      if (window.pageYOffset > 100) flexky.classList.add("flexky--scroll");
      window.addEventListener("scroll", () => {
        window.pageYOffset > 100 && window.innerWidth > 900 ? flexky.classList.add("flexky--scroll") : flexky.classList.remove("flexky--scroll");
      });
      open.addEventListener("click", () => {
        menu.classList.toggle("flexky__container--active");
      });
      });
      
      
      
      
      
      
      
      
      //Get the button
      var mybutton = $('.video-container');
      
      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function() {scrollFunction()};
      
      function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      
      mybutton.hide();
      } else {
      mybutton.show();
      }
      }
      
      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
      }
      
      
      
      
      
      
      // 10 fr in a row
      let MAX = 10;
      
      function getRandom(min, max) {
      return Math.floor(Math.random() * (max - min + 1)) + min;
      }
      
      function random_columns() {
      let photos = document.querySelectorAll(".photo");
      
      let stack = MAX;
      photos.forEach((photo, idx) => {
      if (stack <= 0) {
        stack = MAX;
      }
      
      let colSpan = 0;
      while (1) {
        colSpan = getRandom(1, stack);
      
        if (idx === 8) {
          // the final picture should fill the remaining part
          colSpan = stack;
          break;
        } else if (colSpan >= 2 || stack < 2) {
          // each photo should not be too small, so colSpan < 2 will be rejected
          // however, if the remaining part in a row (i.e. stack) is small, small photo will be allowed
          break;
        }
      }
      
      stack -= colSpan;
      photo.style.gridColumn = `span ${colSpan}`;
      });
      }
      
      random_columns();
      
      
      
      
      
      
      
      
      
      
      
      
   </script>
</html>