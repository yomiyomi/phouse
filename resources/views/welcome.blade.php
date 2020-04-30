@extends('layout.app')

{{--//here is the slide section  --}}
@section('slide')


<div class="rev_slider_wrapper">
  <div id="rev_slider_third" class="rev_slider"  data-version="5.0">
    <ul>
      <!-- SLIDE  -->
      <li data-transition="fade">
        <img src="images/home3-banner1.jpg" alt="" data-bgposition="center center" data-bgfit="cover">
        <div class="black-caption tp-caption tp-resizeme"
         data-start="1300"
          data-x="['left','left','center','center']" data-hoffset="['0','0','0','15']" 
          data-y="['center','center','center','center']" data-voffset="['0','0','0','0']" 
          data-responsive_offset="on" 
          data-transform_idle="o:1;"
          data-transform_in="x:-50px;opacity:0;s:2000;e:Power3.easeOut;" 
		  data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;">
          <div class="price">For Rent</div>
          <h2>Family House in Hudson</h2>
          <p class="bottom30">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam power 
            <br> nonummy nibh...
          </p>
          <div class="property_meta"> 
            <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span> 
            <span><i class="icon-bed"></i>3 Bedrooms</span> 
            <span><i class="icon-pool-stairs"></i>Swimming Pool</span> 
          </div>
          <div class="property_meta bottom30"> 
            <span><i class="icon-garage"></i>1 Garage</span>
            <span><i class="icon-safety-shower"></i>2 bathrooms</span>
          </div>
          <div class="bottom row">
            <div class="col-sm-6"><span> <i class="icon-icons74"></i>Bayonne, New Jersey</span></div>
            <div class="col-sm-6"><span>$8,600 Per Month -<small> Apartment</small></span></div>
          </div>
        </div>
      </li>
      <li data-transition="fade">
        <img src="images/home3-banner2.jpg" alt="" data-bgposition="center center" data-bgfit="cover">
        <div class="black-caption tp-caption tp-resizeme"
          data-x="['left','left','center','center']" data-hoffset="['0','0','0','15']" 
          data-y="['center','center','center','center']" data-voffset="['0','0','0','0']" 
          data-responsive_offset="on"
          data-start="1300"
          data-transform_idle="o:1;"
          data-transform_in="x:-50px;opacity:0;s:2000;e:Power3.easeOut;" 
		  data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" >
          <div class="price">For Rent</div>
          <h2>Family House in Hudson</h2>
          <p class="bottom30">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam power 
            <br> nonummy nibh...
          </p>
          <div class="property_meta"> 
            <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span> 
            <span><i class="icon-bed"></i>3 Bedrooms</span> 
            <span><i class="icon-pool-stairs"></i>Swimming Pool</span> 
          </div>
          <div class="property_meta bottom30"> 
            <span><i class="icon-garage"></i>1 Garage</span>
            <span><i class="icon-safety-shower"></i>2 bathrooms</span>
          </div>
          <div class="bottom row">
            <div class="col-sm-6"><span> <i class="icon-icons74"></i>Bayonne, New Jersey</span></div>
            <div class="col-sm-6"><span>$8,600 Per Month - Apartment</span></div>
          </div>
        </div>
      </li>
      <li data-transition="fade">
        <img src="images/home3-banner3.jpg" alt="" data-bgposition="center center" data-bgfit="cover">
        <div class="black-caption tp-caption tp-resizeme"
          data-x="['left','left','center','center']" data-hoffset="['0','0','0','15']" 
          data-y="['center','center','center','center']" data-voffset="['0','0','0','0']" 
          data-responsive_offset="on"
           data-start="1300"
          data-transform_idle="o:1;"
          data-transform_in="x:-50px;opacity:0;s:2000;e:Power3.easeOut;" 
		  data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" >
          <div class="price">For Rent</div>
          <h2>Family House in Hudson</h2>
          <p class="bottom30">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam power 
            <br> nonummy nibh...
          </p>
          <div class="property_meta"> 
            <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span> 
            <span><i class="icon-bed"></i>3 Bedrooms</span> 
            <span><i class="icon-pool-stairs"></i>Swimming Pool</span> 
          </div>
          <div class="property_meta bottom30"> 
            <span><i class="icon-garage"></i>1 Garage</span>
            <span><i class="icon-safety-shower"></i>2 bathrooms</span>
          </div>
          <div class="bottom row">
            <div class="col-sm-6"><span> <i class="icon-icons74"></i>Bayonne, New Jersey</span></div>
            <div class="col-sm-6"><span>$8,600 Per Month - Apartment</span></div>
          </div>
        </div>
      </li>
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
    <div class="group-button-search">
      <a data-toggle="collapse" href=".search-propertie-filters" class="more-filter">
        <i class="fa fa-plus text-1" aria-hidden="true"></i><i class="fa fa-minus text-2 hide" aria-hidden="true"></i>
        <div class="text-1">Show more search options</div>
        <div class="text-2 hide">less more search options</div>
      </a>
    </div>
    <div class="search-propertie-filters collapse">
      <div class="container-2">
        <div class="row">
          <div class="col-md-3 col-sm-3 col-xs-4">
            <div class="search-form-group white">
              <input type="checkbox" name="check-box" />
              <span>Rap music</span>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-4">
            <div class="search-form-group white">
              <input type="checkbox" name="check-box" />
              <span>Rap music</span>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-4">
            <div class="search-form-group white">
              <input type="checkbox" name="check-box" />
              <span>Rap music</span>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-4">
            <div class="search-form-group white">
              <input type="checkbox" name="check-box" />
              <span>Rap music</span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-3 col-xs-4">
            <div class="search-form-group white">
              <input type="checkbox" name="check-box" />
              <span>Rap music</span>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-4">
            <div class="search-form-group white">
              <input type="checkbox" name="check-box" />
              <span>Rap music</span>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-4">
            <div class="search-form-group white">
              <input type="checkbox" name="check-box" />
              <span>Rap music</span>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-4">
            <div class="search-form-group white">
              <input type="checkbox" name="check-box" />
              <span>Rap music</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


@endsection

@section('feature')
<section id="feature_property" class="padding">
  <div class="container feature3">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h2 class="uppercase">Featured Propertie</h2>
        <h4 class="bottom30">45 Regent Street, London, UK</h4>
        <p class="bottom30">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam power nonummy nibh tempor cum soluta nobis eleifend option congue nihil imperdiet doming Lorem ipsum dolor sit amet. consectetuer elit, sed diam power nonummy nibh We provide consumers with a content-rich tempor cum soluta nobis adipiscing eleifend option congue...</p>
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
          <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span> <span><i class="icon-bed"></i>3 Bedrooms</span> <span><i class="icon-safety-shower"></i>2 Bedrooms</span> <span><i class="icon-old-television"></i>TV Lounge</span> <span><i class="icon-garage"></i>1 Garage</span> 
        </div>
        <a href="property_detail1.html" class="uppercase btn-blue border_radius space30">view all detail</a>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="feature_main">
          <img src="images/feature-main.jpg" alt="featured" class="img-responsive">
          <div class="bottom clearfix">
            <span class="pull-left">For Rent</span>
            <h4 class="pull-right">$8,600 Per Month - <small>Family Home</small></h4>
          </div>
        </div>
      </div>
    </div>
  
          </div>
</section>
@endsection

@section('deals')
<section id="deals" class="padding bg_light">
  <div class="container">
    <div class="row">
      <div class="col-sm-10">
        <h2 class="uppercase">Best Deal Properties</h2>
        <p class="heading_space">We have Properties in these Areas View a list of Featured Properties.</p>
      </div>
    </div>
    <div class="row">
      <div class="three-item owl-carousel">
        <div class="item feature_item">
          <div class="image"><a href="#."> <img src="images/featured1.jpg" alt="Featured Property"></a> 
            <span class="price default_clr">For Rent</span>
          </div>
          <div class="proerty_content">
            <div class="proerty_text">
              <h3 class="bottom15"><a href="#.">Park Avenue Apartment</a></h3>
              <p>nonummy nibh tempor soluta consectetuer adipiscing cum eleifend…</p>
              <h4 class="top15">$8,600 Per Month - <small>Family Home</small></h4>
            </div>
            <table class="table table-responsive">
              <tbody>
                <tr>
                  <td><i class="icon-select-an-objecto-tool"></i>Total Area</td>
                  <td class="text-right">4800 sq ft</td>
                </tr>
                <tr>
                  <td><i class="icon-bed"></i>BadRooms</td>
                  <td class="text-right">5</td>
                </tr>
                <tr>
                  <td><i class="icon-safety-shower"></i>BathRooms</td>
                  <td class="text-right">5</td>
                </tr>
                <tr>
                  <td><i class="icon-garage"></i>Garage</td>
                  <td class="text-right">1</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="item feature_item">
          <div class="image"><a href="#."> <img src="images/featured2.jpg" alt="Featured Property"></a>
            <span class="price default_clr">For Sale</span> 
          </div>
          <div class="proerty_content">
            <div class="proerty_text">
              <h3 class="bottom15"><a href="#.">Park Avenue Apartment</a></h3>
              <p>nonummy nibh tempor soluta consectetuer adipiscing cum eleifend…</p>
              <h4 class="top15">$8,600 Per Month - <small>Family Home</small></h4>
            </div>
            <table class="table table-responsive">
              <tbody>
                <tr>
                  <td><i class="icon-select-an-objecto-tool"></i>Total Area</td>
                  <td class="text-right">4800 sq ft</td>
                </tr>
                <tr>
                  <td><i class="icon-bed"></i>BadRooms</td>
                  <td class="text-right">5</td>
                </tr>
                <tr>
                  <td><i class="icon-safety-shower"></i>BathRooms</td>
                  <td class="text-right">5</td>
                </tr>
                <tr>
                  <td><i class="icon-garage"></i>Garage</td>
                  <td class="text-right">1</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="item feature_item">
          <div class="image"><a href="#."> <img src="images/featured3.jpg" alt="Featured Property"></a>
            <span class="price default_clr">For Rent</span> 
          </div>
          <div class="proerty_content">
            <div class="proerty_text">
              <h3 class="bottom15"><a href="#.">Park Avenue Apartment</a></h3>
              <p>nonummy nibh tempor soluta consectetuer adipiscing cum eleifend…</p>
              <h4 class="top15">$8,600 Per Month - <small>Family Home</small></h4>
            </div>
            <table class="table table-responsive">
              <tbody>
                <tr>
                  <td><i class="icon-select-an-objecto-tool"></i>Total Area</td>
                  <td class="text-right">4800 sq ft</td>
                </tr>
                <tr>
                  <td><i class="icon-bed"></i>BadRooms</td>
                  <td class="text-right">5</td>
                </tr>
                <tr>
                  <td><i class="icon-safety-shower"></i>BathRooms</td>
                  <td class="text-right">5</td>
                </tr>
                <tr>
                  <td><i class="icon-garage"></i>Garage</td>
                  <td class="text-right">1</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="item feature_item">
          <div class="image"> <a href="#."><img src="images/featured1.jpg" alt="Featured Property"> </a>
            <span class="price default_clr">For Sale</span>
          </div>
          <div class="proerty_content">
            <div class="proerty_text">
              <h3 class="bottom15"><a href="#.">Park Avenue Apartment</a></h3>
              <p>nonummy nibh tempor soluta consectetuer adipiscing cum eleifend…</p>
              <h4 class="top15">$8,600 Per Month - <small>Family Home</small></h4>
            </div>
            <table class="table table-responsive">
              <tbody>
                <tr>
                  <td><i class="icon-select-an-objecto-tool"></i>Total Area</td>
                  <td class="text-right">4800 sq ft</td>
                </tr>
                <tr>
                  <td><i class="icon-bed"></i>BadRooms</td>
                  <td class="text-right">5</td>
                </tr>
                <tr>
                  <td><i class="icon-safety-shower"></i>BathRooms</td>
                  <td class="text-right">5</td>
                </tr>
                <tr>
                  <td><i class="icon-garage"></i>Garage</td>
                  <td class="text-right">1</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="item feature_item">
          <div class="image"><a href="#."> <img src="images/featured2.jpg" alt="Featured Property"> </a>
            <span class="price default_clr">For Rent</span>
          </div>
          <div class="proerty_content">
            <div class="proerty_text">
              <h3 class="bottom15"><a href="#.">Park Avenue Apartment</a></h3>
              <p>nonummy nibh tempor soluta consectetuer adipiscing cum eleifend…</p>
              <h4 class="top15">$8,600 Per Month - <small>Family Home</small></h4>
            </div>
            <table class="table table-responsive">
              <tbody>
                <tr>
                  <td><i class="icon-select-an-objecto-tool"></i>Total Area</td>
                  <td class="text-right">4800 sq ft</td>
                </tr>
                <tr>
                  <td><i class="icon-bed"></i>BadRooms</td>
                  <td class="text-right">5</td>
                </tr>
                <tr>
                  <td><i class="icon-safety-shower"></i>BathRooms</td>
                  <td class="text-right">5</td>
                </tr>
                <tr>
                  <td><i class="icon-garage"></i>Garage</td>
                  <td class="text-right">1</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="item feature_item">
          <div class="image"> <a href="#."><img src="images/featured3.jpg" alt="Featured Property"> </a>
            <span class="price default_clr">For Rent</span>
          </div>
          <div class="proerty_content">
            <div class="proerty_text">
              <h3 class="bottom15"><a href="#.">Park Avenue Apartment</a></h3>
              <p>nonummy nibh tempor soluta consectetuer adipiscing cum eleifend…</p>
              <h4 class="top15">$8,600 Per Month - <small>Family Home</small></h4>
            </div>
            <table class="table table-responsive">
              <tbody>
                <tr>
                  <td><i class="icon-select-an-objecto-tool"></i>Total Area</td>
                  <td class="text-right">4800 sq ft</td>
                </tr>
                <tr>
                  <td><i class="icon-bed"></i>BadRooms</td>
                  <td class="text-right">5</td>
                </tr>
                <tr>
                  <td><i class="icon-safety-shower"></i>BathRooms</td>
                  <td class="text-right">5</td>
                </tr>
                <tr>
                  <td><i class="icon-garage"></i>Garage</td>
                  <td class="text-right">1</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

@section('latest')
<section id="property" class="padding">
  <div class="container">
    <div class="row">
      <div class="col-xs-10">
        <h2 class="uppercase">latest Properties</h2>
        <p class="heading_space"> We are proud to present to you some of the best homes, apartments, offices e.g. across Australia for affordable 
          prices. 
        </p>
      </div>
    </div>
    <div class="row">
      <div id="two-col-slider" class="owl-carousel">
        <div class="item">
          <div class="property_item heading_space">
            <div class="image"> <a href="#."><img src="images/latest5.jpg" alt="latest property" class="img-responsive"></a> </div>
            <div class="price default_clr clearfix bottom20">
              <span class="tag pull-left">For Rent</span>
              <h4 class="pull-right">$8,600 Per Month - <small>Family Home</small></h4>
            </div>
            <div class="proerty_content">
              <div class="proerty_text">
                <h3 class="bottom15"> <a href="#.">Unique Villa With Private Beach</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam power nonummy nibh tempor cum soluta nobis eleifend option congue nihil imperdiet doming…</p>
              </div>
              <div class="favroute clearfix">
                <p class="pull-md-left">45 Regent Street, London, UK</p>
                <ul class="pull-right">
                  <li><a href="javascript:void(0)"><i class="icon-video-player"></i></a></li>
                  <li><a href="javascript:void(0)"><i class="icon-like"></i></a></li>
                  <li><a href="#one" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
                </ul>
              </div>
              <div class="toggle_share collapse" id="one">
                <ul>
                  <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                  <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                  <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                </ul>
              </div>
              <div class="property_meta"> <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span> <span><i class="icon-bed"></i>3 Bedrooms</span> <span><i class="icon-safety-shower"></i>2 Bedrooms</span> <span><i class="icon-old-television"></i>TV Lounge</span> <span><i class="icon-garage"></i>1 Garage</span> </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="property_item heading_space">
            <div class="image"> <a href="#."><img src="images/latest6.jpg" alt="latest property" class="img-responsive"></a> </div>
            <div class="price default_clr clearfix bottom20">
              <span class="tag pull-left">For Rent</span>
              <h4 class="pull-right">$8,600 Per Month - <small>Family Home</small></h4>
            </div>
            <div class="proerty_content">
              <div class="proerty_text">
                <h3 class="bottom15"> <a href="#.">Unique Villa With Private Beach</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam power nonummy nibh tempor cum soluta nobis eleifend option congue nihil imperdiet doming…</p>
              </div>
              <div class="favroute clearfix">
                <p class="pull-md-left">45 Regent Street, London, UK</p>
                <ul class="pull-right">
                  <li><a href="javascript:void(0)"><i class="icon-video-player"></i></a></li>
                  <li><a href="javascript:void(0)"><i class="icon-like"></i></a></li>
                  <li><a href="#two" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
                </ul>
              </div>
              <div class="toggle_share collapse" id="two">
                <ul>
                  <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                  <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                  <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                </ul>
              </div>
              <div class="property_meta"> <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span> <span><i class="icon-bed"></i>3 Bedrooms</span> <span><i class="icon-safety-shower"></i>2 Bedrooms</span> <span><i class="icon-old-television"></i>TV Lounge</span> <span><i class="icon-garage"></i>1 Garage</span> </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="property_item heading_space">
            <div class="image"> <a href="#."><img src="images/latest1.jpg" alt="latest property" class="img-responsive"></a> </div>
            <div class="price default_clr clearfix bottom20">
              <span class="tag pull-left">For Rent</span>
              <h4 class="pull-right">$8,600 Per Month - <small>Family Home</small></h4>
            </div>
            <div class="proerty_content">
              <div class="proerty_text">
                <h3 class="bottom15"> <a href="#.">Unique Villa With Private Beach</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam power nonummy nibh tempor cum soluta nobis eleifend option congue nihil imperdiet doming…</p>
              </div>
              <div class="favroute clearfix">
                <p class="pull-md-left">45 Regent Street, London, UK</p>
                <ul class="pull-right">
                  <li><a href="javascript:void(0)"><i class="icon-video-player"></i></a></li>
                  <li><a href="javascript:void(0)"><i class="icon-like"></i></a></li>
                  <li><a href="#three" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
                </ul>
              </div>
              <div class="toggle_share collapse" id="three">
                <ul>
                  <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                  <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                  <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                </ul>
              </div>
              <div class="property_meta"> <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span> <span><i class="icon-bed"></i>3 Bedrooms</span> <span><i class="icon-safety-shower"></i>2 Bedrooms</span> <span><i class="icon-old-television"></i>TV Lounge</span> <span><i class="icon-garage"></i>1 Garage</span> </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="property_item heading_space">
            <div class="image"> <a href="#."><img src="images/latest4.jpg" alt="latest property" class="img-responsive"></a> </div>
            <div class="price default_clr clearfix bottom20">
              <span class="tag pull-left">For Rent</span>
              <h4 class="pull-right">$8,600 Per Month - <small>Family Home</small></h4>
            </div>
            <div class="proerty_content">
              <div class="proerty_text">
                <h3 class="bottom15"> <a href="#.">Unique Villa With Private Beach</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam power nonummy nibh tempor cum soluta nobis eleifend option congue nihil imperdiet doming…</p>
              </div>
              <div class="favroute clearfix">
                <p class="pull-md-left">45 Regent Street, London, UK</p>
                <ul class="pull-right">
                  <li><a href="javascript:void(0)"><i class="icon-video-player"></i></a></li>
                  <li><a href="javascript:void(0)"><i class="icon-like"></i></a></li>
                  <li><a href="#four" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
                </ul>
              </div>
              <div class="toggle_share collapse" id="eight">
                <ul>
                  <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
                  <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
                  <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
                </ul>
              </div>
              <div class="property_meta"> <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span> <span><i class="icon-bed"></i>3 Bedrooms</span> <span><i class="icon-safety-shower"></i>2 Bedrooms</span> <span><i class="icon-old-television"></i>TV Lounge</span> <span><i class="icon-garage"></i>1 Garage</span> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

@section('testimony')
<section id="testinomial" class="padding">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 text-center">
        <h2 class="uppercase">Happy Customers</h2>
        <p class="heading_space">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec viverra erat Aenean elit tellus.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div id="testinomial-slider" class="owl-carousel">
          <div class="item">
            <div class="testinomial_content text-center">
              <img src="images/author.png" alt="happy client" class="bottom15">
              <h4 class="uppercase"> SAM NICHOLSON</h4>
              <span class="smmery bottom15">( NorthMarq Capital  )</span>
              <img src="images/stars.png" alt="rating" class="bottom30">
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer adipiscing. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel.</p>
            </div>
          </div>
          <div class="item">
            <div class="testinomial_content text-center">
              <img src="images/author.png" alt="happy client" class="bottom15">
              <h4 class="uppercase"> SAM NICHOLSON</h4>
              <span class="smmery bottom15">( NorthMarq Capital  )</span>
              <img src="images/stars.png" alt="rating" class="bottom30">
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer adipiscing. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xs-12 text-center">
      <a href="javascript:void(0)" class="cd-see-all btn-white border_radius margin40"><i class="fa fa-th" aria-hidden="true"></i>view all</a>
    </div>
  </div>
</section>
<div class="cd-testimonials-all">
  <div class="cd-testimonials-all-wrapper">
    <ul>
      <li class="cd-testimonials-item">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit totam saepe iste maiores neque animi molestias nihil illum nisi temporibus.</p>
        <div class="cd-author">
          <img src="images/author.png" alt="Author image">
          <ul class="cd-author-info">
            <li>SAM NICHOLSON</li>
            <li>CEO, CompanyName</li>
          </ul>
        </div>
        <!-- cd-author -->
      </li>
      <li class="cd-testimonials-item">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore nostrum nisi, doloremque error hic nam nemo doloribus porro impedit perferendis. Tempora, distinctio hic suscipit. At ullam eaque atque recusandae modi fugiat voluptatem laborum laboriosam rerum, consequatur reprehenderit omnis, enim pariatur nam, quidem, quas vel reiciendis aspernatur consequuntur. Commodi quasi enim, nisi alias fugit architecto, doloremque, eligendi quam autem exercitationem consectetur.</p>
        <div class="cd-author">
          <img src="images/author.png" alt="Author image">
          <ul class="cd-author-info">
            <li>SAM NICHOLSON</li>
            <li>CEO, CompanyName</li>
          </ul>
        </div>
        <!-- cd-author -->
      </li>
      <li class="cd-testimonials-item">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem quibusdam eveniet, molestiae laborum voluptatibus minima hic quasi accusamus ut facere, eius expedita, voluptatem? Repellat incidunt veniam quaerat, qui laboriosam dicta. Quidem ducimus laudantium dolorum enim qui at ipsum, a error.</p>
        <div class="cd-author">
          <img src="images/author.png" alt="Author image">
          <ul class="cd-author-info">
            <li>SAM NICHOLSON</li>
            <li>CEO, CompanyName</li>
          </ul>
        </div>
        <!-- cd-author -->
      </li>
      <li class="cd-testimonials-item">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero voluptates officiis tempore quae officia! Beatae quia deleniti cum corporis eos perferendis libero reiciendis nemo iusto accusamus, debitis tempora voluptas praesentium repudiandae laboriosam excepturi laborum, nisi optio repellat explicabo, incidunt ex numquam. Ullam perferendis officiis harum doloribus quae corrupti minima quia, aliquam nostrum expedita pariatur maxime repellat, voluptas sunt unde, inventore.</p>
        <div class="cd-author">
          <img src="images/author.png" alt="Author image">
          <ul class="cd-author-info">
            <li>SAM NICHOLSON</li>
            <li>CEO, CompanyName</li>
          </ul>
        </div>
        <!-- cd-author -->
      </li>
      <li class="cd-testimonials-item">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit totam saepe iste maiores neque animi molestias nihil illum nisi temporibus.</p>
        <div class="cd-author">
          <img src="images/author.png" alt="Author image">
          <ul class="cd-author-info">
            <li>SAM NICHOLSON</li>
            <li>CEO, CompanyName</li>
          </ul>
        </div>
        <!-- cd-author -->
      </li>
      <li class="cd-testimonials-item">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis quia quas, quis illo adipisci voluptate ex harum iste commodi nulla dolor. Eius ratione quod ab!</p>
        <div class="cd-author">
          <img src="images/author.png" alt="Author image">
          <ul class="cd-author-info">
            <li>SAM NICHOLSON</li>
            <li>CEO, CompanyName</li>
          </ul>
        </div>
        <!-- cd-author -->
      </li>
      <li class="cd-testimonials-item">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, dignissimos iure rem fugiat consequuntur officiis.</p>
        <div class="cd-author">
          <img src="images/author.png" alt="Author image">
          <ul class="cd-author-info">
            <li>SAM NICHOLSON</li>
            <li>CEO, CompanyName</li>
          </ul>
        </div>
        <!-- cd-author -->
      </li>
      <li class="cd-testimonials-item">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At temporibus tempora necessitatibus reiciendis provident deserunt maxime sit id. Dicta aut voluptatibus placeat quibusdam vel, dolore.</p>
        <div class="cd-author">
          <img src="images/author.png" alt="Author image">
          <ul class="cd-author-info">
            <li>SAM NICHOLSON</li>
            <li>CEO, CompanyName</li>
          </ul>
        </div>
        <!-- cd-author -->
      </li>
      <li class="cd-testimonials-item">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis iusto sapiente, excepturi velit, beatae possimus est tenetur cumque fugit tempore dolore fugiat! Recusandae, vel suscipit? Perspiciatis non similique sint suscipit officia illo, accusamus dolorum, voluptate vitae quia ea amet optio magni voluptatem nemo, natus nihil.</p>
        <div class="cd-author">
          <img src="images/author.png" alt="Author image">
          <ul class="cd-author-info">
            <li>SAM NICHOLSON</li>
            <li>CEO, CompanyName</li>
          </ul>
        </div>
        <!-- cd-author -->
      </li>
      <li class="cd-testimonials-item">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor quasi officiis pariatur, fugit minus omnis animi ut assumenda quod commodi, ad a alias maxime unde suscipit magnam, voluptas laboriosam ipsam quibusdam quidem, dolorem deleniti id.</p>
        <div class="cd-author">
          <img src="images/author.png" alt="Author image">
          <ul class="cd-author-info">
            <li>SAM NICHOLSON</li>
            <li>CEO, CompanyName</li>
          </ul>
        </div>
        <!-- cd-author -->
      </li>
      <li class="cd-testimonials-item">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At temporibus tempora necessitatibus reiciendis provident deserunt maxime sit id. Dicta aut voluptatibus placeat quibusdam vel, dolore.</p>
        <div class="cd-author">
          <img src="images/author.png" alt="Author image">
          <ul class="cd-author-info">
            <li>SAM NICHOLSON</li>
            <li>CEO, CompanyName</li>
          </ul>
        </div>
        <!-- cd-author -->
      </li>
      <li class="cd-testimonials-item">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque tempore ipsam, eos suscipit nostrum molestias reprehenderit, rerum amet cum similique a, ipsum soluta delectus explicabo nihil repellat incidunt! Minima magni possimus mollitia deserunt facere, tempore earum modi, ea ipsa dicta temporibus suscipit quidem ut quibusdam vero voluptatibus nostrum excepturi explicabo nulla harum, molestiae alias. Ab, quidem rem fugit delectus quod.</p>
        <div class="cd-author">
          <img src="images/author.png" alt="Author image">
          <ul class="cd-author-info">
            <li>SAM NICHOLSON</li>
            <li>CEO, CompanyName</li>
          </ul>
        </div>
        <!-- cd-author -->
      </li>
    </ul>
  </div>
  <!-- cd-testimonials-all-wrapper -->
  <a href="javascript:void(0)" class="close-btn">Close</a>
</div>
@endsection
@section('agent')
<section id="layouts" class="padding_top">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 margin_bottom">
        <h2 class="uppercase">Latest news</h2>
        <p class="heading_space">We have Properties in these Areas View a list of Featured Properties.</p>
        <div class="media news_media">
          <div class="media-left">
            <a href="javascript:void(0)">
            <img class="media-object border_radius" src="images/news1.jpg" alt="Latest news">
            </a>
          </div>
          <div class="media-body">
            <h3><a href="javascript:void(0)">Historic Town House</a></h3>
            <span class="bottom15"><i class="icon-clock4"></i>Feb 22, 2017</span>
            <p class="bottom15">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam power nonummy nibh 
              tempor cum soluta nobis eleifend...
            </p>
            <a href="javascript:void(0)" class="btn-more">
            <i><img src="images/arrowl.png" alt="arrow"></i>
            <span>Contact Me</span>
            <i><img src="images/arrowr.png" alt="arrow"></i>
            </a>
          </div>
        </div>
        <div class="media news_media">
          <div class="media-left">
            <a href="javascript:void(0)">
            <img class="media-object border_radius" src="images/news2.jpg" alt="Latest news">
            </a>
          </div>
          <div class="media-body">
            <h3><a href="#.">Historic Town House</a></h3>
            <span class="bottom15"><i class="icon-clock4"></i>Feb 22, 2017</span>
            <p class="bottom15">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam power nonummy nibh 
              tempor cum soluta nobis eleifend...
            </p>
            <a href="javascript:void(0)" class="btn-more">
            <i><img src="images/arrowl.png" alt="arrow"></i>
            <span>Contact Me</span>
            <i><img src="images/arrowr.png" alt="arrow"></i>
            </a>
          </div>
        </div>
        <div class="media news_media">
          <div class="media-left">
            <a href="javascript:void(0)">
            <img class="media-object border_radius" src="images/news3.jpg" alt="Latest news">
            </a>
          </div>
          <div class="media-body">
            <h3><a href="#.">Historic Town House</a></h3>
            <span class="bottom15"><i class="icon-clock4"></i>Feb 22, 2017</span>
            <p class="bottom15">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam power nonummy nibh 
              tempor cum soluta nobis eleifend...
            </p>
            <a href="javascript:void(0)" class="btn-more">
            <i><img src="images/arrowl.png" alt="arrow"></i>
            <span>Contact Me</span>
            <i><img src="images/arrowr.png" alt="arrow"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-sm-4 margin_bottom">
        <h2 class="uppercase"> Our Agents</h2>
        <p class="heading_space">We have Properties in these Areas.</p>
        <div id="agent-slider" class="owl-carousel">
          <div class="item">
            <div class="image bottom15">
              <img src="images/agent-slider1.jpg" alt="Our Agents" class="border_radius">
            </div>
            <div class="item-bottom">
              <div class="row">
                <div class="col-sm-5 bottom15">
                  <h3>Jill Warren</h3>
                  <small>sales executive</small>
                </div>
                <div class="col-sm-7 bottom15">
                  <a href="#."><i class="icon-icons142"></i> jill@realtyhomes.com</a>
                </div>
              </div>
              <p class="bottom15">orem ipsum dolor sit amet, consectetuer adipiscing tempor cum soluta nobis eleifend...</p>
              <a class="uppercase btn-blue border_radius" href="#.">Contact me</a>
            </div>
          </div>
          <div class="item">
            <div class="image bottom15">
              <img src="images/agent-slider1.jpg" alt="Our Agents" class="border_radius">
            </div>
            <div class="item-bottom">
              <div class="row">
                <div class="col-sm-5 bottom15">
                  <h3>Jill Warren</h3>
                  <small>sales executive</small>
                </div>
                <div class="col-sm-7 bottom15">
                  <a href="#."><i class="icon-icons142"></i>jill@realtyhomes.com</a>
                </div>
              </div>
              <p class="bottom15">orem ipsum dolor sit amet, consectetuer adipiscing tempor cum soluta nobis eleifend...</p>
              <a class="uppercase btn-blue border_radius" href="#.">Contact me</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div style="border-bottom:1px solid #d3d8dd;"></div>
  </div>
</section>
@endsection

@section('partners')
<section id="logos">
  <div class="container partner2 padding">
    <div class="row">
      <div class="col-sm-10">
        <h2 class="uppercase">Our Partners</h2>
        <p class="heading_space">Aliquam nec viverra erat. Aenean elit tellus mattis quis maximus.</p>
      </div>
    </div>
    <div class="row">
      <div id="partner-slider" class="owl-carousel">
        <div class="item">
          <img src="images/logo1.png" alt="Featured Partner">
        </div>
        <div class="item">
          <img src="images/logo2.png" alt="Featured Partner">
        </div>
        <div class="item">
          <img src="images/logo3.png" alt="Featured Partner">
        </div>
        <div class="item">
          <img src="images/logo4.png" alt="Featured Partner">
        </div>
        <div class="item">
          <img src="images/logo5.png" alt="Featured Partner">
        </div>
        <div class="item">
          <img src="images/logo1.png" alt="Featured Partner">
        </div>
        <div class="item">
          <img src="images/logo2.png" alt="Featured Partner">
        </div>
        <div class="item">
          <img src="images/logo3.png" alt="Featured Partner">
        </div>
        <div class="item">
          <img src="images/logo4.png" alt="Featured Partner">
        </div>
        <div class="item">
          <img src="images/logo5.png" alt="Featured Partner">
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

