@extends('layouts.main')

@section('content')

@include('inc.marginpushdown')

<section class="title---bar">
        <h3>OUR</h3>
        <h1>Announcements</h1>
</section>
<br><br>
<div class="container">

<div class="row">
    <div class="col-lg-8">
        <div class="card mb-3">
           
            <div class="card-body mb-3">
                <h5 class="card-title">No announcements</h5>
                {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a> --}}
            </div>
        </div>


       
    </div>

    <div class="col-lg-4">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Search Announcement</h5>
                <div class="input-group input-group-lg mb-3">
                <input type="text" class="form-control">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button"><i class="fas fa-search"></i></button>
                </div>
                </div>
            </div>
    </div>


</div>

</div>

</div>

@endsection