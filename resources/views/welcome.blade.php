@extends('layout.app')

{{--//here is the slide section  --}}
@section('slide')
<div class="rev_slider_wrapper">
  <div id="rev_slider_third" class="rev_slider"  data-version="5.0">
    <ul>
      @foreach($slides as $slide)
      <li data-transition="fade">
        <img src="images/{{$slide->photo}}" alt="" data-bgposition="center center" data-bgfit="cover">
        <div class="black-caption tp-caption tp-resizeme"
         data-start="1300"
          data-x="['left','left','center','center']" data-hoffset="['0','0','0','15']" 
          data-y="['center','center','center','center']" data-voffset="['0','0','0','0']" 
          data-responsive_offset="on" 
          data-transform_idle="o:1;"
          data-transform_in="x:-50px;opacity:0;s:2000;e:Power3.easeOut;" 
		  data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;">
          <div class="price">{{$slide->category}}</div>
          <h2>{{$slide->title}}</h2>
          <p class="bottom30">{{$slide->description}}
          </p>
          <div class="property_meta"> 
            <span><i class="icon-select-an-objecto-tool"></i>{{$slide->square_foot}} sq ft</span> 
            <span><i class="icon-bed"></i>{{$slide->rooms}} Bedroom's</span> 
            <span><i class="icon-pool-stairs"></i>Swimming Pool</span> 
          </div>
          <div class="property_meta bottom30"> 
            <span><i class="icon-garage"></i>{{$slide->garage}} Garage</span>
            <span><i class="icon-safety-shower"></i>{{$slide->bathroom}} bathrooms</span>
          </div>
          <div class="bottom row">
            <div class="col-sm-6"><span> <i class="icon-icons74"></i>{{$slide->address}}</span></div>
            <div class="col-sm-6"><span>&#8358;{{$slide->price}} Per Month -<small> Apartment</small></span></div>
          </div>
        </div>
      </li>
      @endforeach
    </ul>
  </div>
  <!-- END REVOLUTION SLIDER -->
</div>
@endsection

@section('search')
  <section class="property-query-area bg_light">
      <div class="container">
        <div class="row">
          <form class="callus">
            <div class="col-md-3 col-sm-6">
              <div class="single-query form-group">
                <input type="text" class="keyword-input" placeholder="Keyword (e.g. 'office')">
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="single-query form-group">
                <div class="intro">
                  <select>
                    <option selected="" value="any">Location</option>
                    <option>All areas</option>
                    <option>Bayonne </option>
                    <option>Greenville</option>
                    <option>Manhattan</option>
                    <option>Queens</option>
                    <option>The Heights</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="single-query form-group">
                <div class="intro">
                  <select>
                    <option class="active">Property Type</option>
                    <option>All areas</option>
                    <option>Bayonne </option>
                    <option>Greenville</option>
                    <option>Manhattan</option>
                    <option>Queens</option>
                    <option>The Heights</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="single-query form-group">
                <div class="intro">
                  <select>
                    <option class="active">Property Status</option>
                    <option>All areas</option>
                    <option>Bayonne </option>
                    <option>Greenville</option>
                    <option>Manhattan</option>
                    <option>Queens</option>
                    <option>The Heights</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="row search-2">
                <div class="col-md-6 col-sm-6">
                  <div class="single-query form-group">
                    <div class="intro">
                      <select>
                        <option class="active">Min Beds</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="single-query form-group">
                    <div class="intro">
                      <select>
                        <option class="active">Min Baths</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="row">
                <div class="col-sm-6">
                  <div class="single-query form-group">
                    <input type="text" class="keyword-input" placeholder="Min Area (sq ft)">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="single-query form-group">
                    <input type="text" class="keyword-input" placeholder="Max Area (sq ft)">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="row">
                <div class="col-md-8">
                  <div class="single-query-slider">
                    <label>Price Range:</label>
                    <div class="price text-right">
                      <span>$</span>
                      <div class="leftLabel"></div>
                      <span>to $</span>
                      <div class="rightLabel"></div>
                    </div>
                    <div data-range_min="0" data-range_max="1500000" data-cur_min="0" data-cur_max="1500000" class="nstSlider">
                      <div class="bar"></div>
                      <div class="leftGrip"></div>
                      <div class="rightGrip"></div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 text-right form-group">
                  <button type="submit" class="btn-blue border_radius top15">Search</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
</section>
@endsection

@section('feature')
<section id="feature_property" class="padding">
  <div class="container feature3">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h2 class="uppercase">{{$featured->title}}</h2>
        <h4 class="bottom30">{{$featured->address}}</h4>
        <p class="bottom30">{{$featured->description}}</p>
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <ul class="feature_list">
              <li>Quiet Neighbourhood</li>
              <li>Quiet Neighbourhood</li>
            </ul>
          </div>

          <div class="col-md-6 col-sm-6">
            <ul class="feature_list">
              <li>Quiet Neighbourhood</li>
              <li>Quiet Neighbourhood</li>
            </ul>
          </div>
        </div>
        <div class="property_meta">
          <span><i class="icon-select-an-objecto-tool"></i>{{$featured->square_foot}} sq ft</span> <span><i class="icon-bed"></i>{{$featured->rooms}} Bedrooms</span> <span><i class="icon-safety-shower"></i>{{$featured->bathroom}} Bathroom</span> <span><i class="icon-old-television"></i>TV Lounge</span> <span><i class="icon-garage"></i>{{$featured->garage}} Garage</span> 
        </div>
        <a href="property_detail1.html" class="uppercase btn-blue border_radius space30">view all detail</a>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="feature_main">
          <img src="images/{{$featured->photo}}" alt="featured" class="img-responsive" width="560px" height="368">
          <div class="bottom clearfix">
            <span class="pull-left">For Rent</span>
            <h4 class="pull-right">&#8358; {{$featured->price}} Per Month - <small>Family Home</small></h4>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection