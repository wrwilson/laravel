@extends('layout')

@section('content')

	<div class="main">
      <div class="container">
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN CONTENT -->
          <div class="col-md-12 col-sm-12">
            <div class="content-page page-500">
               <div class="number">
                  Done!
               </div>
               <div class="details">
                <h3>Thanks for subscribing!</h3>
                <p>Email address: {{ $email }}</p>
                <p>We'll send you sweet new offers as they become available</p>                
               </div>
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
      </div>
    </div>


@stop