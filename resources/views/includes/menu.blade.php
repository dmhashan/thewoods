<div class="container"></div>

<nav class="navbar yamm" role="navigation">
<div class="container">
<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header hidden-xs">
    <a class="navbar-brand" href="{{ URL::asset('/') }}"><img src="{{ URL::asset('assets/images/content/logo.png') }}" alt="The Woods Logo"/></a>
</div>

<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse no-transition" id="bs-example-navbar-collapse-1">
<a href="#" class="showHeaderSearch hidden-xs"><i class="fa fa-fw fa-search"></i></a>
<ul class="nav navbar-nav navbar-right">


<?php
    $mainMenu = Config::get('companymenu.main');
    foreach ($mainMenu as $mainlinks) {
        if ($mainlinks['type'] === 'single') {
            ?>
                <li>
                    <a href="{{ URL::asset($mainlinks['url']) }}">
                        <?php echo $mainlinks['name']; ?>
                    </a>
                </li>
            <?php
        } else if ($mainlinks['type'] === 'dropdown') {
            ?>
            <li class="dropdown">
                <a href="{{ URL::asset($mainlinks['url']) }}" class="dropdown-toggle" data-toggle="dropdown">
                    {{ $mainlinks['name'] }}
                <i class="fa fa-fw fa-angle-down"></i></a>
                <ul class="dropdown-menu yamm-dropdown">
                    <li>
                        <div class="yamm-content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <ul class="list-unstyled">
                                        <?php
                                        foreach (Config::get('companymenu.'.$mainlinks['ref']) as $sublinks) {
                                            if ($sublinks['type'] === 'single') {
                                                ?>
                                                    <li><a href="{{ URL::asset($sublinks['url']) }}">
                                                        <i class="{{ $sublinks['icon'] }}"></i>
                                                        {{ $sublinks['name'] }}
                                                    </a></li>
                                                <?php
                                            } else if ($sublinks['type'] === 'dropdown') {
                                                ?>
                                                    <li class="dropdown-submenu">
                                                        <a href="{{ URL::asset($sublinks['url']) }}">
                                                            <i class="{{ $sublinks['icon'] }}"></i>
                                                            {{ $sublinks['name'] }}
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <?php
                                                            foreach (Config::get('companymenu.'.$sublinks['ref']) as $atomlinks) {
                                                                ?>
                                                                    <li>
                                                                        <a href="{{ URL::asset($atomlinks['url']) }}">
                                                                        <i class="{{ $atomlinks['icon'] }}"></i>
                                                                        {{ $atomlinks['name'] }}
                                                                        </a>
                                                                    </li>
                                                                <?php
                                                            }
                                                            ?>
                                                        </ul>
                                                    </li>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </ul>

                                </div>
                            </div>
                            <div class="row nav-bottom">
                                <div class="col-md-12">
                                    <span class="btm-sec">
                                        <img 
                                            src="{{ URL::asset('assets/images/content/logosmall.png') }}" 
                                            alt="{{ $mainlinks['name'] }}" 
                                            about="{{ $mainlinks['name'] }}">
                                        </span>
                                    <span class="btm-sec">{{ $mainlinks['name'] }}</span>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
            <?php
        } else if ($mainlinks['type'] === 'spandropdown') {
            ?>
            <li class="dropdown">
                <a href="{{ URL::asset($mainlinks['url']) }}" class="dropdown-toggle" data-toggle="dropdown">
                    {{ $mainlinks['name'] }}
                <i class="fa fa-fw fa-angle-down"></i></a>
                <ul class="dropdown-menu yamm-dropdown">
                    <li>
                        <div class="yamm-content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <?php
                                    foreach (Config::get('companymenu.'.$mainlinks['ref']) as $spanlinks) {
                                        ?>
                                        <span class="navbar-title">
                                            {{ $spanlinks['name'] }}
                                        </span>
                                        <?php
                                    ?>
                                    <ul class="list-unstyled">
                                        <?php
                                        foreach (Config::get('companymenu.'.$spanlinks['ref']) as $sublinks) {
                                            if ($sublinks['type'] === 'single') {
                                                ?>
                                                    <li><a href="{{ URL::asset($sublinks['url']) }}">
                                                        <i class="{{ $sublinks['icon'] }}"></i>
                                                        {{ $sublinks['name'] }}
                                                    </a></li>
                                                <?php
                                            } else if ($sublinks['type'] === 'dropdown') {
                                                ?>
                                                    <li class="dropdown-submenu">
                                                        <a href="{{ URL::asset($sublinks['url']) }}">
                                                            <i class="{{ $sublinks['icon'] }}"></i>
                                                            {{ $sublinks['name'] }}
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <?php
                                                            foreach (Config::get('companymenu.'.$sublinks['ref']) as $atomlinks) {
                                                                ?>
                                                                    <li>
                                                                        <a href="{{ URL::asset($atomlinks['url']) }}">
                                                                        <i class="{{ $atomlinks['icon'] }}"></i>
                                                                        {{ $atomlinks['name'] }}
                                                                        </a>
                                                                    </li>
                                                                <?php
                                                            }
                                                            ?>
                                                        </ul>
                                                    </li>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </ul>
                                <?php } ?>
                                </div>
                            </div>
                            <div class="row nav-bottom">
                                <div class="col-md-12">
                                    <span class="btm-sec">
                                        <img 
                                        src="{{ URL::asset('assets/images/content/logosmall.png') }}" 
                                        alt="{{ $mainlinks['name'] }}" 
                                        about="{{ $mainlinks['name'] }}">
                                    </span>
                                    <span class="btm-sec">{{ $mainlinks['name'] }}</span>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
            <?php
        } else if ($mainlinks['type'] === 'imagedropdown') {
            ?>
            <li class="dropdown">
                <a href="{{ URL::asset($mainlinks['url']) }}" class="dropdown-toggle" data-toggle="dropdown">
                    {{ $mainlinks['name'] }}
                <i class="fa fa-fw fa-angle-down"></i></a>
                <ul class="dropdown-menu yamm-dropdown">
                    <li>
                        <div class="yamm-content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="row">
                                        <?php
                                        foreach (Config::get('companymenu.'.$mainlinks['ref']) as $sublinks) {
                                            ?>
                                            <div class="col-sm-4">
                                                <span class="navbar-title">
                                                    {{ $sublinks['name'] }}
                                                </span>
                                                <ul class="list-unstyled">
                                                    <li><a href="{{ URL::asset($sublinks['url']) }}">
                                                        <img src="{{ URL::asset($sublinks['src']) }}" alt="{{ $sublinks['name'] }}"/>
                                                    </a></li>
                                                </ul>
                                            </div>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row nav-bottom">
                                <div class="col-md-12">
                                    <span class="btm-sec">
                                        <img 
                                            src="{{ URL::asset('assets/images/content/logosmall.png') }}" 
                                            alt="{{ $mainlinks['name'] }}" 
                                            about="{{ $mainlinks['name'] }}">
                                        </span>
                                    <span class="btm-sec">{{ $mainlinks['name'] }}</span>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
            <?php
        }
    }
?>


</ul>

</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>

<div class="container"></div>
<div class="header-search" style="display:none;">
    <div class="display-table">
        <div class="table-cell">
            <form class="text-center" role="form">
                <fieldset>

                    <div class="form-group">
                        <button class="header-search-icon" type="submit"><i class="fa fa-fw fa-search"></i></button>
                        <label>Please type and press “enter”</label>
                        <input type="text" class="form-control" placeholder="Type to search...">
                    </div>

                </fieldset>
                <a href="#" class="showHeaderSearch headerSearchClose"><i class="fa fa-fw fa-times"></i></a>
            </form>
        </div>
    </div>
</div>
<div class="container"></div>

<div id="wrapper">

<!-- VISIBLE COPY OF THE HEADER ONLY IN MOBILE NEEDED FOR THE SIDE MENU EFFECT -->

<div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header visible-xs">
        <a class="navbar-brand" href="{{ URL::asset('/') }}"><img src="{{ URL::asset('assets/images/content/logo.png') }}" alt="Corpress Logo"/></a>
        <button type="button" class="navbar-toggle" id="sidebar-toggle">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a href="#" class="showHeaderSearch"><i class="fa fa-fw fa-search"></i></a>
    </div>
</div>
<!-- END -->
