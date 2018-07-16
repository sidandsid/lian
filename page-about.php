<?php get_header(); ?>
    <div class="banner about">
        <img class="banner__img about" src="<?php echo get_template_directory_uri() . '/assets/images/banner-img-1.jpg'; ?>" />
        <h1 class="banner__title about">About the agency</h1>
        <p class="banner__subtitle about">Welcome to Lian</p>
    </div>

    <div class="content-wrapper about-page">
        <div class="about-image">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/about-img-1.jpg'; ?>" />
        </div>

        <div class="about-info">
            <div class="about-story">
                <h2 class="about-story__title">Our story</h2>
                <p class="about-story__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
                <p class="about-story__text">Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</p>
            </div>

            <div class="about-skills">
                <h2 class="about-skills__title">Our skills</h2>
                <div class="about-skills__item">
                    <span class="about-skills__item-title">Photoshop</span>
                    <span class="about-skills__item-line photoshop"></span>
                    <span class="about-skills__item-percent photoshop">90%</span>
                </div>
                <div class="about-skills__item">
                    <span class="about-skills__item-title">Branding</span>
                    <span class="about-skills__item-line branding"></span>
                    <span class="about-skills__item-percent branding">95%</span>
                </div>
                <div class="about-skills__item">
                    <span class="about-skills__item-title">Photography</span>
                    <span class="about-skills__item-line photography"></span>
                    <span class="about-skills__item-percent photography">50%</span>
                </div>
                <div class="about-skills__item">
                    <span class="about-skills__item-title">Web Design</span>
                    <span class="about-skills__item-line web-design"></span>
                    <span class="about-skills__item-percent web-design">85%</span>
                </div>
            </div>
        </div>

        <div class="about-team">
            <h2 class="about-team__title">Awesome Team</h2>
            <p class="about-team__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
            <div class="about-team__items">
                <div class="about-team__item">
                    <div class="about-team__item-img">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/about-team-img-1.png'; ?>" />
                    </div>
                    <h3 class="about-team__item-name">Lian Joy</h3>
                    <span class="about-team__item-position">CEO/Founder</span>
                    <p class="about-team__item-text">Lorem ipsum dolor sit amet, conse ctetuer adipi scing elit, sed diam nonu mmy nibh euis mod tinci </p>
                </div>
                <div class="about-team__item">
                    <div class="about-team__item-img">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/about-team-img-2.png'; ?>" />
                    </div>
                    <h3 class="about-team__item-name">Albert Thanh</h3>
                    <span class="about-team__item-position">CEO/Founder</span>
                    <p class="about-team__item-text">Lorem ipsum dolor sit amet, conse ctetuer adipi scing elit, sed diam nonu mmy nibh euis mod tinci </p>
                </div>
                <div class="about-team__item">
                   <div class="about-team__item-img">
                       <img src="<?php echo get_template_directory_uri() . '/assets/images/about-team-img-3.png'; ?>" />
                   </div>
                    <h3 class="about-team__item-name">Jenn Pereira</h3>
                    <span class="about-team__item-position">CEO/Founder</span>
                    <p class="about-team__item-text">Lorem ipsum dolor sit amet, conse ctetuer adipi scing elit, sed diam nonu mmy nibh euis mod tinci </p>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>