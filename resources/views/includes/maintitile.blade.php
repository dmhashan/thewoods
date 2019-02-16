<section 
	class="media-section darkbg animated"
    data-fx="fadeIn" 
	data-stellar-background-ratio="0.5" 
	data-height="220" 
	data-type="parallax" 
	data-image="{{ URL::asset('assets/images/content/title-background.jpg') }}" 
	data-image-mobile="{{ URL::asset('assets/images/content/title-background.jpg') }}" 
	style="
		background-image: url(&quot;{{ URL::asset('assets/images/content/title-background.jpg') }}&quot;); 
		min-height: 220px; 
		height: 220px; 
		background-attachment: fixed;">
    <div class="inner">
        <div class="container">
            <div class="display-table">
                <div class="table-cell">
                    <h2 class="uppercase no-margin">@yield('title')</h2>
                </div>
                <div class="table-cell">
                    <ol class="breadcrumb pull-right">
                        <li>
                            <a href="{{ URL::asset('/') }}">Home</a>
                        </li>
                        <?php
                            if(isset(Request::segments()[0]) && isset(Config::get('companymenu.main')[Request::segments()[0]])) {
                                $submenu1 = Config::get('companymenu.main')[Request::segments()[0]];
                                ?>
                                    <li>
                                        <a 
                                            href="{{ URL::asset($submenu1['url']) }}">
                                            {{ $submenu1['name'] }}
                                        </a>
                                    </li>
                                <?php
                            }
                            if(isset(Request::segments()[1]) && isset(Config::get('companymenu.main')[Request::segments()[1]])) {
                                $submenu1 = Config::get('companymenu.main')[Request::segments()[1]];
                                ?>
                                    <li>
                                        <a 
                                            href="{{ URL::asset($submenu1['url']) }}">
                                            {{ $submenu1['name'] }}
                                        </a>
                                    </li>
                                <?php
                            }
                        ?>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
