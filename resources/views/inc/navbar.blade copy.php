<?php

$email1 = 'akosijay321@yahoo.com';
$email2 = 'operation@eomsinc.com';
$email3 = 'admin@eomsinc.com';


?>





<header>

    <section class="sec">
        <div class="container">
            {{-- Manila: (027) 507 9249 --}}
            Manila: 0956-987-0764
        </div>
    </section>


    <nav class="navbar navbar-expand-lg  navbar-dark navbar-survival101">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src=" {{asset('/img/logoall.PNG')}}" alt="E O M S I N C">

            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02"
                aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor02">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">HOME<span class="sr-only">(current)</span></a>
                    </li>





                    {{-- @if($email === $email1 or $email === $email2 or $email === $email3)
            <li class="nav-item">
              <a class="nav-link" href="/admin">ADMIN PANEL</a>
            </li>

           @endif
          --}}

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            ABOUT
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('about')}}">Our Company</a>
                            <a class="dropdown-item" href="{{route('services')}}">Our Services</a>
                            <a class="dropdown-item" href="https://eomsinc.com/eph/company_profile_2021.pdf"
                                target="_blank">Company Profile</a>

                        </div>
                    </li>



                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            JOB SEEKER
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="/jobvacant">Job Openings</a>
                            {{-- <a class="dropdown-item" href="#">Requirements</a> --}}

                        </div>
                    </li>
                    {{--  <li class="nav-item">
            <a class="nav-link" href="{{route('employer')}}">EMPLOYERS</a>
                    </li>--}}

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('announce')}}">ANNOUNCEMENT</a>
                    </li>

                    {{-- <li class="nav-item">
              <a class="nav-link" href="#">AFFILIATES</a>
          </li> --}}

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contact')}}">CONTACT US</a>
                    </li>


                    {{-- AUTH --}}
                    @if (Auth::guest())
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                    @else

                    <?php $email = Auth::user()->email; ?>

                    @if($email === $email1 or $email === $email2 or $email === $email3)
                    <li class="nav-item">
                        <a class="nav-link" href="/admin">ADMIN PANEL</a>
                    </li>

                    @endif



                    <li class="nav-item dropdown">
                        <a href="#" class=" nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-expanded="false">
                            {{ Auth::user()->firstname }} {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="{{route('home')}}">My Profile</a>
                            <a class="dropdown-item" nav-link href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            {{-- <a class="dropdown-item" href="#">Something else here</a> --}}

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </li>






                    {{-- <li class="nav-item" class="dropdown">
                  <a href="#" class=" nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li class="nav-item">
                            <a nav-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>

                    </ul>
                    </li> --}}
                    @endif



                </ul>

            </div>
        </div>

    </nav>

</header>