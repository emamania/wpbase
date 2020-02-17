<header class="header-area">
    <div class="emagrid">
        <nav class="nav">
            <a href="#" class="link nav-brand text-light">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="logo peru travel">
            </a>
            <!-- toggle menu -->
            <button class="toggle-button">
                <span class="fas fa-hamburger"></span>
            </button>

            <!-- navigation items -->
            <div class="collapse" id="toggle-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-link">
                        <a href="#" class="link text-light">Home</a>
                    </li>
                    <li class="nav-link">
                        <a href="#" class="link text-light">people</a>
                    </li>
                    <li class="nav-link">
                        <a href="#" class="link text-light">Design</a>
                    </li>
                    <li class="nav-link">
                        <a href="#" class="link text-light">Travel</a>
                    </li>
                    <li class="nav-link">
                        <a href="#" class="link text-light">About us</a>
                    </li>
                </ul>
                <div class="search">
                    <form class="form-group">
                        <input type="search" class="input-control mr-sm-2">
                        <button class="btn btn-submit" type="submit"><i class="fas fa-search"></i></button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
</header>
<section class="banner-area">
    <div class="emagrid-fluid">
        <div class="banner">
            <?php if(get_theme_mod('header_image')):?>
                <img src="<?php echo esc_url(get_theme_mod('header_image')); ?>" alt="Entrada a Machupicchu" class="fluid">
            <?php else: ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner.jpg" alt="Entrada a Machupicchu" class="fluid">
            <?php endif; ?>
        </div>
        <div class="banner-title text-center">
            <h1 class="text-lg text-light" >Tour a Machu Picchu 1 dia, Tren Inca Rail</h1>
            <span class="description text-sm text-light">The power of mapi https://www.youtube.com/watch?v=hjknCBKmdGk</span>
        </div>
    </div>
</section>