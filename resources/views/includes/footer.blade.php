<div class="container"></div>

<footer class="main-footer animated" data-fx="fadeIn">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <img src="{{ URL::asset('assets/images/content/logofooter.png') }}" alt="Corpress">
                <br>
                <br>
                <p>{{ Config::get('companydetails.theme') }}</p>
                <p>
                    <?php echo Config::get('companydetails.addressinline') ?>
                    <span class="footer-contacts">
                        <i class="fa fa-fw fa-phone motive"></i>
                            {{ Config::get('companydetails.phone1') }}
                        <br>
                        <i class="fa fa-fw fa-phone motive"></i>
                            {{ Config::get('companydetails.phone2') }}
                        <br>
                        <i class="fa fa-fw fa-envelope motive"></i>
                            <a href="mailto:{{ Config::get('companydetails.email') }}">
                            {{ Config::get('companydetails.email') }}
                        </a>
                    </span>
                </p>
            </div>
            <div class="col-sm-6 col-md-3">
                <h4 class="uppercase">Useful Cases</h4>
                <div class="widget">
                    <div class="widget-inner">
                        <ul>
                            <li class="cat-item cat-item-2">
                                <a href="{{ URL::asset('/activities') }}" title="Spiritual, Wildlife, Adventure & Art">Activities</a>
                            </li>
                            <li class="cat-item cat-item-3">
                                <a href="{{ URL::asset('/conservation') }}" title="Flora & Fauna Pictorial Checklist">Conservation</a>
                            </li>
                            <li class="cat-item cat-item-4">
                                <a href="{{ URL::asset('/agriculture') }}" title="Plant Propagation Unit & Permaculture">Agriculture</a>
                            </li>
                            <li class="cat-item cat-item-1">
                                <a href="{{ URL::asset('/accommodation') }}" title="Cabana, Cottage & Bungalow">Accommodation</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="clearfix visible-sm"></div>
            <div class="col-sm-6 col-md-3">
                <div class="widget">
                    <div class="widget-inner">
                        <h4 class="uppercase">You Might Like</h4>
                        <div class="tagcloud">
                            <a href="#">Yoga</a>
                            <a href="#">Bird Watching</a>
                            <a href="#">Caving</a>
                            <a href="#">Butterfly Garden</a>
                            <a href="#">Meditation</a>
                            <a href="#">Safari & Photography</a>
                            <a href="#">Hiking</a>
                            <a href="#">Cycling</a>
                            <a href="#">Diving & Snorkeling</a>
                            <a href="#">Camping</a>
                            <a href="#">Music</a>
                            <a href="#">Painting</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <h4 class="uppercase">Recent Projects</h4>
                <div>
                    <div class="images-widget">
                        <a href="#"><img src="assets/images/content/project6-thumb.jpg" alt="Project Name"></a>
                        <a href="#"><img src="assets/images/content/project5-thumb.jpg" alt="Project Name"></a>
                        <a href="#"><img src="assets/images/content/project4-thumb.jpg" alt="Project Name"></a>
                        <a href="#"><img src="assets/images/content/project3-thumb.jpg" alt="Project Name"></a>
                        <a href="#"><img src="assets/images/content/project2-thumb.jpg" alt="Project Name"></a>
                        <a href="#"><img src="assets/images/content/project1-thumb.jpg" alt="Project Name"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <span id="backtoTop"><i class="fa fa-fw fa-angle-double-up"></i></span>
</footer>

<div class="container"></div>

<div class="post-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                Copyright 2019 © /dmhashan. All rights reserved - <a href="http://dmhashan.github.io" target="_blank">dmhashan.github.io</a>
            </div>
            <div class="col-sm-6 text-right">
                <ul class="list-inline">
                    <li><div class="text-wrapper"><a href="https://www.facebook.com/dmhashan" target="_blank" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook"><i class="fab fa-facebook"></i></a></div></li>

                    <li><div class="text-wrapper"><a href="https://plus.google.com/u/0/102264279960444111162" target="_blank" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google +"><i class="fab fa-google-plus-square"></i></a></div></li>

                    <li><div class="text-wrapper"><a href="https://www.linkedin.com/in/dmhashan/" target="_blank" data-toggle="tooltip" data-placement="top" title="" data-original-title="LinkedIn"><i class="fab fa-linkedin"></i></a></div></li>
                    
                    <li><div class="text-wrapper"><a href="https://www.instagram.com/_dmhashan/" target="_blank" data-toggle="tooltip" data-placement="top" title="" data-original-title="Instagram"><i class="fab fa-instagram"></i></a></div></li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
