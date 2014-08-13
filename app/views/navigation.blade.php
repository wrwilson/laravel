@extends('layout')

@section('navigation')

<div class="navbar-header">
    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
    <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <!-- END RESPONSIVE MENU TOGGLER -->
    <a href="{{ URL::route('/') }}" class="navbar-brand"><img src="{{ URL::asset('img/logo.png') }}" alt="Sweet Broadband UK"></a><!-- LOGO -->
</div>

<!-- BEGIN NAVIGATION -->
<div class="collapse navbar-collapse mega-menu">
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::route('broadband') }}">Broadband</a></li>
        <li><a href="{{ URL::route('phone-and-broadband') }}">Phone &amp; Broadband</a></li>
        <li><a href="{{ URL::route('TV-and-broadband') }}">TV &amp; Broadband</a></li>
        <li><a href="{{ URL::route('business') }}">Business Broadband</a></li>  
        <li><a href="{{ URL::route('mobile-phone') }}">Mobile Phone</a></li>              
        <!-- END TOP SEARCH -->
    </ul>
</div>
<!-- END NAVIGATION -->
@stop