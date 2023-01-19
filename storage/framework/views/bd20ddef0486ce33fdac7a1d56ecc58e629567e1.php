<header id="header">
    <div id="header-wrap">
        <div class="container">
            <div class="header-row">
                <!-- Logo ============================================= -->
                <div id="logo" class="mr-lg-5">
                    <a href="<?php echo e(route('home')); ?>" class="standard-logo" data-dark-logo="<?php echo e(asset('images/logo.png')); ?>">
                        <b>SobatHewan</b>
                    </a>
                    <a href="<?php echo e(route('home')); ?>" class="retina-logo" data-dark-logo="<?php echo e(asset('images/logo.png')); ?>">
                        <img src="<?php echo e(asset('images/logo.png')); ?>" style="width:100%;" alt="<?php echo e(config('app.name')); ?>">
                    </a>
                </div>
                <!-- #logo end -->
                <div class="header-misc">
                    <!-- Top Search ============================================= -->
                    <div id="top-search" class="header-misc-icon">
                        <a href="javascript:void(0);" id="top-search-trigger"><i class="icon-line-search"></i><i class="icon-line-cross"></i></a>
                    </div>
                    <!-- #top-search end -->
                    <?php if(auth()->guard()->check()): ?>
                    <div class="dropdown mx-3 mr-lg-0">
                        <a href="javascript:void(0);" class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="icon-user"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                            <a class="dropdown-item text-left" href="<?php echo e(route('logout')); ?>">Logout <i class="icon-signout"></i></a>
                        </ul>
                    </div>
                    <?php endif; ?>
                </div>
                <div id="primary-menu-trigger">
                    <svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
                </div>
                <!-- Primary Navigation ============================================= -->
                <nav class="primary-menu mr-lg-auto">
                    <ul class="menu-container">
                        <li class="menu-item">
                            <a class="menu-link" href="<?php echo e(route('home')); ?>"><div>Home</div></a>
                        </li>
                        <li class="menu-item">
                            <?php if(Auth::user()->role == "admin"): ?>
                            <a class="menu-link" href="<?php echo e(route('pengadopsi')); ?>"><div>Daftar Adopsi</div></a>
                            <?php else: ?>
                            <a class="menu-link" href="<?php echo e(route('adopsi')); ?>"><div>Daftar Hewan</div></a>
                            <?php endif; ?>
                        </li>
                        <li class="menu-item">
                            <?php if(Auth::user()->role == "admin"): ?>
                            <a class="menu-link" href="<?php echo e(route('donasi')); ?>">
                            <?php else: ?>
                            <a class="menu-link" href="javascript:void(0);" onclick="open_modal('#ModalCreateDonasi')">
                            <?php endif; ?>
                                <div>Donasi</div>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- #primary-menu end -->
                <form id="content_filter" class="top-search-form">
                    <input type="text" id="keywords" name="keywords" class="form-control" placeholder="Type &amp; Hit Enter.." autocomplete="off">
                </form>
            </div>
        </div>
    </div>
    <div class="header-wrap-clone"></div>
</header>
<?php /**PATH C:\xampp\htdocs\source\sh FInal\resources\views/theme/header.blade.php ENDPATH**/ ?>