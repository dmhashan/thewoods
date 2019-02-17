@extends('layouts.default')
@section('title', 'Contact Us')
@section('content')
    

   <section class="section">
       <div class="container">
           <div class="row">
               <div class="col-sm-8 text-center animated" data-time="100" data-fx="bounceInLeft">
                   <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15848.422651780456!2d80.9305286!3d6.7569679!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x543639494b923ed2!2sThe+Woods!5e0!3m2!1sen!2slk!4v1550302767252" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
               </div>
               <div class="col-sm-4 text-left" data-time="100" data-fx="bounce">
                   <ul class="icon-list list-unstyled">
                       <li>
                           <div class="display-table animated" data-time="100" data-fx="fadeInUp" style="animation-delay: 0s;">
                                       <span class="table-cell">
                                           <i class="fa fa-map-marker fa-lg"></i>
                                       </span>
                                       <span class="table-cell">
                                           {{ Config::get('companydetails.theme') }}
                                       </span>
                           </div>
                       </li>
                       <li>
                           <div class="display-table animated" data-time="100" data-fx="fadeInUp" style="animation-delay: .2s;">
                                       <span class="table-cell">
                                           <i class="fa fa-phone fa-lg"></i>
                                       </span>
                                       <span class="table-cell">
                                           {{ Config::get('companydetails.phone1') }}
                                       </span>
                           </div>
                       </li>
                       <li>
                           <div class="display-table animated" data-time="100" data-fx="fadeInUp" style="animation-delay: .2s;">
                                       <span class="table-cell">
                                           <i class="fa fa-phone fa-lg"></i>
                                       </span>
                                       <span class="table-cell">
                                           {{ Config::get('companydetails.phone2') }}
                                       </span>
                           </div>
                       </li>
                       <li>
                           <div class="display-table animated" data-time="100" data-fx="fadeInUp" style="animation-delay: .4s;">
                                       <span class="table-cell">
                                           <i class="fa fa-globe fa-lg"></i>
                                       </span>
                                       <span class="table-cell">
                                           <a href="#">www.example.com</a>
                                       </span>
                           </div>
                       </li>
                       <li>
                           <div class="display-table animated" data-time="100" data-fx="fadeInUp" style="animation-delay: .6s;">
                                       <span class="table-cell">
                                           <i class="fa fa-envelope fa-lg"></i>
                                       </span>
                                       <span class="table-cell">
                                           <a 
                                           href="mailto:{{ Config::get('companydetails.email') }}">
                                            {{ Config::get('companydetails.email') }}</a>
                                       </span>
                           </div>
                       </li>
                   </ul>
               </div>
           </div>
       </div>
   </section>





@stop
