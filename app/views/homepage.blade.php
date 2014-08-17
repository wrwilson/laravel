@extends('layout')

@section('content')
<!-- BEGIN SLIDER -->
    <div class="page-slider margin-bottom-35">
      <!--LayerSlider begin-->
      <div id="layerslider" style="width: 100%; height: 494px; margin: 0 auto;">
          <!--LayerSlider layer-->
         
          <!--LayerSlider layer-->
          <div class="ls-layer ls-layer2" style="slidedirection: right; transition2d: 110,111,112,113;">
            <img src="{{ URL::asset('temp/sliders/slide2/bg3.jpg') }}" class="ls-bg" alt="Slide background">
            <div class="ls-s-1 ls-title title" style=" top: 40%; left: 21%; slidedirection : fade; slideoutdirection : fade; durationin : 750; durationout : 750; easingin : easeOutQuint; easingout : easeInOutQuint; delayin : 0; delayout : 0; rotatein : 90; rotateout : -90; scalein : .5; scaleout : .5; white-space: nowrap;">
              <strong class="title">TV &amp; Broadband</strong>
              plus weekend calls
              <em class="title">Find the best deals</em>
            </div>

            <div class="ls-s-2 ls-price title" style=" top: 50%; left: 45%; slidedirection : fade; slideoutdirection : fade; durationout : 109750; easingin : easeOutQuint; delayin : 300; scalein : .8; scaleout : .8; white-space: nowrap;">
              <b>from</b>
              <strong><span>£</span>25</strong>
            </div>

            <a href="{{ URL::to('TV-and-broadband') }}" class="ls-s-1 ls-more mini-text" style=" top: 72%; left: 21%; slidedirection : fade; slideoutdirection : fade; durationin : 750; durationout : 750; easingin : easeOutQuint; easingout : easeInOutQuint; delayin : 0; delayout : 0; rotatein : 90; rotateout : -90; scalein : .5; scaleout : .5; display: inline-block; white-space: nowrap;">
              Compare prices
            </a>
          </div>
        </div>
      <!--LayerSlider end-->
    </div>
    <!-- END SLIDER -->

    <div class="main">
      <div class="container">
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40 ">
          <!-- BEGIN SIDEBAR -->
          <div class="sidebar col-md-3 col-sm-4">
            <ul class="list-group margin-bottom-25 sidebar-menu">
              <li class="list-group-item clearfix"><a href="{{ URL::to('broadband') }}"><i class="fa fa-angle-right"></i> Fibre Optic broadband</a></li>
              <li class="list-group-item clearfix"><a href="{{ URL::to('broadband') }}"><i class="fa fa-angle-right"></i> Cheapest broadband</a></li>
              <li class="list-group-item clearfix"><a href="{{ URL::to('broadband') }}"><i class="fa fa-angle-right"></i> Fastest broadband</a></li>
              <li class="list-group-item clearfix"><a href="{{ URL::to('phone-and-broadband') }}"><i class="fa fa-angle-right"></i> Broadband &amp; phone</a></li>
              <li class="list-group-item clearfix"><a href="{{ URL::to('TV-and-broadband') }}"><i class="fa fa-angle-right"></i> Broadband, TV &amp; phone</a></li>
              <li class="list-group-item clearfix"><a href="{{ URL::to('business-broadband') }}"><i class="fa fa-angle-right"></i> Business broadband</a></li>
              <li class="list-group-item clearfix"><a href="{{ URL::to('broadband') }}"><i class="fa fa-angle-right"></i> BT Infinity broadband</a></li>
              <li class="list-group-item clearfix"><a href="{{ URL::to('mobile-phone') }}"><i class="fa fa-angle-right"></i> Pay monthly mobile phone</a></li>
              <li class="list-group-item clearfix"><a href="{{ URL::to('mobile-phone') }}"><i class="fa fa-angle-right"></i> SIM-Only deals</a></li>
            </ul>
          </div>
          <!-- END SIDEBAR -->
          <!-- BEGIN CONTENT -->
          <div class="col-md-9 col-sm-8">
            <h2>Featured Products</h2>
            <div class="bxslider-wrapper">
              <ul class="bxslider" data-slides-phone="1" data-slides-tablet="2" data-slides-desktop="3" data-slide-margin="15">
                <li>
                  <div class="product-item">
                    <div class="pi-img-wrapper">
                      <img src="{{ URL::asset('temp/products/k1.jpg') }}" class="img-responsive" alt="Berry Lace Dress">             
                    </div>
                    <h3><a href="item.html">TalkTalk Broadband</a></h3>
                    <div class="pi-price">£3.50</div>
                    <a href="{{ URL::to('broadband/product/1234') }}" class="btn btn-default add2cart">Get this deal</a>
                    <div class="sticker sticker-new"></div>
                  </div>
                </li>
                <li>
                  <div class="product-item">
                    <div class="pi-img-wrapper">
                      <img src="{{ URL::asset('temp/products/k2.jpg') }}" class="img-responsive" alt="Berry Lace Dress"> 
                    </div>
                    <h3><a href="item.html">Virgin Phone &amp; Broadband</a></h3>
                    <div class="pi-price">£12</div>
                    <a href="{{ URL::to('broadband/product/1234') }}" class="btn btn-default add2cart">Get this deal</a>
                  </div>
                </li>
                <li>
                  <div class="product-item">
                    <div class="pi-img-wrapper">
                      <img src="{{ URL::asset('temp/products/k3.jpg') }}" class="img-responsive" alt="Berry Lace Dress">
                    </div>
                    <h3><a href="item.html">BT Phone, Broadband &amp; TV</a></h3>
                    <div class="pi-price">£24</div>
                    <a href="{{ URL::to('broadband/product/1234') }}" class="btn btn-default add2cart">Get this deal</a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
      </div>
    </div>

@stop