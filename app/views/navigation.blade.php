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
        {{ HTML::nav_link('broadband', 'Broadband') }}
        {{ HTML::nav_link('phone-and-broadband', 'Phone &amp; Broadband') }}
        {{ HTML::nav_link('TV-and-broadband', 'TV &amp; Broadband') }}
        {{ HTML::nav_link('business-broadband', 'Business Broadband') }}
        {{ HTML::nav_link('mobile-phone', 'Mobile Phone') }}    
        <!-- END TOP SEARCH -->
    </ul>
</div>
<!-- END NAVIGATION -->
@stop