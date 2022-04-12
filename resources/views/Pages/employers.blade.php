@extends('layouts.main')

@section('content')

@include('inc.marginpushdown')

<section class="title---bar">
        
        <h3>Get us working for you and your business</h3>
       <h1>Employers & Businesses</h1>
</section>

 
<div class="container">

<form action="{{route('newentry')}}" method="POST">
    {{ csrf_field() }}
        <div class="form-box">
            @if (session('status'))
            <div class="alert alert-success">
            {{ session('status') }}
            </div>
            @endif


                <h1 class="text-center">Manpower Request Form</h1>
                <h3 class="text-center">For New Clients</h3>
            <div class="form-group">
              <label for="">BUSINESS NAME</label>
              <input type="text" name="businessname" id="businessname" class="form-control form-control-lg"  required >  
            </div>
        
            <div class="form-group">
                <label for="">BUSINESS ADDRESS</label>
                <input type="text" name="businessaddress" id="businessaddress" class="form-control form-control-lg"  required>  
            </div>
        
            <div class="form-group row">
                <div class="col-lg-6">
                    <label for="">TELEPHONE NUMBER</label>
                    <input type="text" name="telephonenumber" id="telephonenumber" class="form-control form-control-lg"  required>  
                </div>
                <div class="col-lg-6">
                    <label for="">FAX NUMBER (optional)</label>
                    <input type="text" name="faxnumber" id="faxnumber" class="form-control form-control-lg"  >  
                </div>
            </div>
        
            <div class="form-group row">
                <div class="col-lg-6">
                    <label for="">EMAIL ADDRESS</label>
                    <input type="email" name="email" id="emailaddress" class="form-control form-control-lg" required>  
                </div>
                <div class="col-lg-6">
                    <label for="">WEBSITE (optional)</label>
                    <input type="text" name="website" id="website" class="form-control form-control-lg" >  
                </div>
            </div>
        
            <div class="form-group">
                <label for="">CONTACT PERSON</label>
                <input type="text" name="contactperson" id="contactperson" class="form-control form-control-lg" required>  
            </div>
        
            <div class="form-group">
                <label for="">POSITION</label>
                <input type="text" name="position" id="position" class="form-control form-control-lg" required>  
            </div>
        
            <div class="form-group">
                <label for="">BUSINESS LICENSE NUMBER (optional)</label>
                <input type="text" name="businesslicensenumber" id="businesslicensenumber" class="form-control form-control-lg">  
            </div>
        
            <div class="form-group">
                <label for="">NATURE OF BUSINESS </label>
                <input type="text" name="naturebusiness" id="naturebusiness" class="form-control form-control-lg" required>  
            </div>
        
            <div class="form-group">
                <label for="">MESSAGE</label>
               <textarea name="message"  class="form-control" id="message" cols="100%" rows="10"></textarea>
            </div>
           
        
            <button type="submit" class="submitbtn">Submit Job Order</button>
        </div>{{-- END FORMBOX --}}
</form>
    



</div>{{-- END CONTAINER --}}
<br>

@endsection