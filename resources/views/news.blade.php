@extends('layout.app')
@section('slide')
<section class="page-banner padding">
   <div class="container">
      <div class="row">
      	
         <div class="col-md-12 text-center">
            <h1 class="text-uppercase">Blog classic</h1>
            <p>Serving you since 1999. Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
            <ol class="breadcrumb text-center">
               <li><a href="#.">Home</a></li>
               <li><a href="#.">Properties</a></li>
               <li class="active">Blog</li>
            </ol>
         </div>
         
      </div>
   </div>
</section>
@endsection

@section('news start')
<section id="news-section-1" class="property-details padding_top">
   <div class="container property-details">
   	
      <div class="row">
      	
         <div class="col-md-8">
         	
            <div class="row">
            	@foreach($blogs as $blog)
               <div class="news-1-box clearfix">
                  <div class="col-md-5 col-sm-5 col-xs-12">
                     <div class="image-2">
                        <a href="news_details.html"><img src="images/blog-1.jpg" alt="image" class="img-responsive"/></a>
                     </div>
                  </div>

                  <div class="col-md-7 col-sm-7 col-xs-12 padding-left-25">
                  	 
                     <h3><a href="news_details.html">{{$blog->title}}</a></h3>
                     <div class="news-details padding-b-10 margin-t-5">
                        <span><i class="icon-icons230"></i> by {{$blog->publisher}}</span>
                        <span><i class="icon-icons228"></i> {{$blog->created_at}}</span>
                     </div>
                     <p class="p-font-15">{{$blog->content}}</p>
                     <div class="pro-3-link padding-t-20">
                        <a class="btn-more" href="news_details.html">
                        <i>
                        <img alt="arrow" src="images/arrowl.png">
                        </i>
                        <span>Contact Me</span>
                        <i>
                        <img alt="arrow" src="images/arrowr.png">
                        </i>
                        </a>
                     </div>
                     
                  </div>
               </div>
               @endforeach
            </div>
            
            <div class="row margin_bottom">
               <div class="col-md-12">
                  <ul class="pager">
                     <li><a href="#.">1</a></li>
                     <li class="active"><a href="#.">2</a></li>
                     <li><a href="#.">3</a></li>
                  </ul>
               </div>
            </div>
         </div>

         <aside class="col-md-4 col-xs-12">
            <div class="row">
               <div class="col-md-12">
                  <form class="form-search bottom40" method="get" id="news-search" action="/">
                     <div class="input-append">
                        <input type="text" class="input-medium search-query" placeholder="Search Here" value="">
                        <button type="submit" class="add-on"><i class="icon-icons185"></i></button>
                     </div>
                  </form>
               </div>
               <div class="col-md-12">
                  <h3 class="bottom20">Categories</h3>
                  <ul class="pro-list bottom20">
                     <li>
                        Air Conditioning
                     </li>
                     <li>
                        Barbeque
                     </li>
                     <li>
                        Dryer
                     </li>
                     <li>
                        Laundry
                     </li>
                     <li>
                        Refrigerator
                     </li>
                     <li>
                        Swimming Pool
                     </li>
                  </ul>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <h3 class="bottom40 margin40">Featured Properties</h3>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4 col-sm-4 col-xs-12 p-image image bottom20">
                  <img src="images/f-p-1.png" alt="image"/>
               </div>
               <div class="col-md-8 col-sm-8 col-xs-12">
                  <div class="feature-p-text">
                     <h4><a href="#.">Get the best property in Town by our agent</a></h4>
                     <span>by Martin Moore</span>
                  </div>
               </div>
            </div>
            <div class="row padding-b-30 padding-t-30">
               <div class="col-md-4 col-sm-4 col-xs-12 p-image image bottom20">
                  <img src="images/f-p-1.png" alt="image"/>
               </div>
               <div class="col-md-8 col-sm-8 col-xs-12">
                  <div class="feature-p-text">
                     <h4><a href="#.">Get the best property in Town by our agent</a></h4>
                     <span>by Martin Moore</span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4 col-sm-4 col-xs-12 p-image image">
                  <img src="images/f-p-1.png" alt="image"/>
               </div>
               <div class="col-md-8 col-sm-8 col-xs-12">
                  <div class="feature-p-text">
                     <h4><a href="#.">Get the best property in Town by our agent</a></h4>
                     <span>by Martin Moore</span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <h3 class="margin40 bottom20">Featured Properties</h3>
               </div>
               <div class="col-md-12 padding-t-30">
                  <div id="agent-2-slider" class="owl-carousel">
                     <div class="item">
                        <div class="property_item heading_space">
                           <div class="image">
                              <a href="#."><img src="images/slider-list2.jpg" alt="listin" class="img-responsive"></a>
                              <div class="feature"><span class="tag-2">For Rent</span></div>
                              <div class="price clearfix"><span class="tag pull-right">$8,600 Per Month - <small>Family Home</small></span></div>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <div class="property_item heading_space">
                           <div class="image">
                              <a href="#."><img src="images/slider-list2.jpg" alt="listin" class="img-responsive"></a>
                              <div class="feature"><span class="tag-2">For Rent</span></div>
                              <div class="price clearfix"><span class="tag pull-right">$8,600 Per Month - <small>Family Home</small></span></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </aside>
      </div>
   </div>
</section>
@endsection



