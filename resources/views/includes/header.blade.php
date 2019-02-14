<header class="hidden-xs">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="text-wrapper"><i class="fas fa-phone"></i>
                    <?php echo Config::get('companydetails.phone'); ?>
                </div>
                <div class="text-wrapper"><i class="fas fa-envelope"></i>
                    <a href="mailto:<?php echo Config::get('companydetails.email'); ?>">
                    <?php echo Config::get('companydetails.email'); ?>
                </a></div>
            </div>
            <div class="col-md-6 text-right visible-md visible-lg">
                <ul class="list-inline list-socials">
                    <li><div class="text-wrapper">
                        <a href="<?php echo Config::get('companydetails.facebook.url'); ?>" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fab fa-facebook"></i></a>
                    </div></li>
                    <li><div class="text-wrapper">
                        <a href="<?php echo Config::get('companydetails.googleplus.url'); ?>" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Google +"><i class="fab fa-google-plus-square"></i></a>
                    </div></li>
                </ul>
            </div>
        </div>
    </div>
</header>
