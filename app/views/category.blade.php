@extends('layout')

@section('content')

    <div class="title-wrapper">
      <div class="container"><div class="container-inner">
        <h1><span>COMPARE</span> {{ $name }}</h1>
        <em>and find a totally sweet price</em>
      </div></div>
    </div>

    <div class="main">
      <div class="container">
        <ul class="breadcrumb">
            <li><a href="{{ URL::to('/') }}">Home</a></li>
            <li class="active">{{ $name }}</li>
        </ul>
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN SIDEBAR -->
          <div class="sidebar col-md-3 col-sm-5">

            <div class="sidebar-filter margin-bottom-25">
              <h2>Filter</h2>
              <h3>Broadband Line</h3>
              <div class="checkbox-list">
                <label><input type="checkbox"> BT</label>
                <label><input type="checkbox"> TalkTalk</label>
                <label><input type="checkbox"> Virgin</label>
              </div>

              <h3>Contract length</h3>
              <div class="checkbox-list">
                <label><input type="checkbox"> 12 months</label>
                <label><input type="checkbox"> 18 months</label>
                <label><input type="checkbox"> 24 months</label>
                <label><input type="checkbox"> 30-day rolling</label>
              </div>

              <h3>Price</h3>
              <p>
                <label for="amount">Range:</label>
                <input type="text" id="amount" style="border:0; color:#f6931f; font-weight:bold;">
              </p>
              <div id="slider-range"></div>
            </div>

            
          </div>
          <!-- END SIDEBAR -->
          <!-- BEGIN CONTENT -->
          <div class="col-md-9 col-sm-7">
            <div class="row list-view-sorting clearfix">
              <div class="col-md-2 col-sm-2 list-view">
                <a href="#"><i class="fa fa-th-large"></i></a>
                <a href="#"><i class="fa fa-th-list"></i></a>
              </div>
              <div class="col-md-10 col-sm-10">
                <div class="pull-right">
                  <label class="control-label">Show:</label>
                  <select class="form-control input-sm">
                    <option value="#?limit=24" selected="selected">24</option>
                    <option value="#?limit=25">25</option>
                    <option value="#?limit=50">50</option>
                    <option value="#?limit=75">75</option>
                    <option value="#?limit=100">100</option>
                  </select>
                </div>
                <div class="pull-right">
                  <label class="control-label">Sort&nbsp;By:</label>
                  <select class="form-control input-sm">
                    <option value="#?sort=p.sort_order&amp;order=ASC" selected="selected">Default</option>
                    <option value="#?sort=pd.name&amp;order=ASC">Name (A - Z)</option>
                    <option value="#?sort=pd.name&amp;order=DESC">Name (Z - A)</option>
                    <option value="#?sort=p.price&amp;order=ASC">Price (Low &gt; High)</option>
                    <option value="#?sort=p.price&amp;order=DESC">Price (High &gt; Low)</option>
                    <option value="#?sort=rating&amp;order=DESC">Rating (Highest)</option>
                    <option value="#?sort=rating&amp;order=ASC">Rating (Lowest)</option>
                    <option value="#?sort=p.model&amp;order=ASC">Model (A - Z)</option>
                    <option value="#?sort=p.model&amp;order=DESC">Model (Z - A)</option>
                  </select>
                </div>
              </div>
            </div>
            <!-- BEGIN PRODUCT LIST -->
            

                <!-- Loop goes here -->  
                <?php 
                //  foreach ($products as $product) {
                //    echo '<div class="col-md-12 result-item"> <div class="col-md-3"><img src="'.URL::asset('temp/products/k1.jpg').'"></div><div class="col-md-3"><h2>';
                //    echo $product->title;
                //    echo '</h2><p><span class="pi-price">&pound;';
                //    echo $product->headline_price;
                //    echo ' a month</span><br> +&pound;';
                //    echo $product->linerental_price;
                //    echo ' line rental</p></div><div class="col-md-3">';
                //    echo $product->summary;
                //    echo '</div><div class="col-md-2"><a href="';
                //    echo Category::find($product->category_id)->category.'/'.$product->id;
                //    echo '" class="btn btn-primary">Get this deal</a></div></div>';
                //  }
                ?>
              <div class="col-md-12 result-item"> 
                <div class="col-md-3">
                  <img src="{{ URL::asset('temp/products/k1.jpg') }}"> 
                </div>
                <div class="col-md-3">
                <h2>Sky broadband</h2>
                  <p><span class="pi-price">&pound;24.99 a month</span>
                  <br> + line rental</p>
                </div>
                <div class="col-md-3">
                  <ul>
                    <li>&pound;25 M&amp;S Voucher</li>
                    <li>Unlimited downloads</li>
                    <li>Up to 24Mbps</li>
                  </ul>
                </div>
                <div class="col-md-2">
                  <a href="{{ URL::to('broadband/product/1234') }}" class="btn btn-primary">Get this deal</a>
                </div>
            </div>

            <div class="col-md-12 result-item">               
                <div class="col-md-3">
                  <img src="{{ URL::asset('temp/products/k2.jpg') }}"> 
                </div>
                <div class="col-md-3">
                <h2>Virgin broadband</h2>
                  <p><span class="pi-price">&pound;29.99 a month</span>
                  <br> + line rental</p>
                </div>
                <div class="col-md-3">
                  <ul>
                    <li>&pound;25 M&amp;S Voucher</li>
                    <li>Unlimited downloads</li>
                    <li>Up to 24Mbps</li>
                  </ul>
                </div>
                <div class="col-md-2">
                  <a href="{{ URL::to('broadband/product/1234') }}" class="btn btn-primary">Get this deal</a>
                </div>
            </div>

            <div class="col-md-12 result-item">               
                <div class="col-md-3">
                  <img src="{{ URL::asset('temp/products/k3.jpg') }}"> 
                </div>
                <div class="col-md-3">
                <h2>BT broadband</h2>
                  <p><span class="pi-price">&pound;31.99 a month</span>
                  <br> + line rental</p>
                </div>
                <div class="col-md-3">
                  <ul>
                    <li>&pound;25 M&amp;S Voucher</li>
                    <li>Unlimited downloads</li>
                    <li>Up to 24Mbps</li>
                  </ul>
                </div>
                <div class="col-md-2">
                  <a href="{{ URL::to('broadband/product/1234') }}" class="btn btn-primary">Get this deal</a>
                </div>
            </div>
            <!-- END PRODUCT LIST -->
            
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
      </div>
    </div>



    @stop