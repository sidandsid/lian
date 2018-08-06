<?php get_header(); ?>
    <div class="banner about">
        <img class="banner__img contact" src="<?php echo get_template_directory_uri() . '/assets/images/banner-img-1.jpg'; ?>" />
        <h1 class="banner__title contact">Get in touch</h1>
        <p class="banner__subtitle contact">Contact us today</p>
    </div>

    <div class="content-wrapper contact-page">
        <div class="contact-info">
            <h2 class="contact-info__title">Office info</h2>
            <p class="contact-info__subtitle">People behind the success of our company</p>
            <p class="contact-info__item hours"><span class="contact-info__item-title">Office Hours: </span>Mon-Friday 8am - 10pm</p>
            <p class="contact-info__item address"><span class="contact-info__item-title">Address: </span>Igbalangao, Bugasong, Antique</p>
            <p class="contact-info__item tell"><span class="contact-info__item-title">Tell: </span><a class="contact-info__item-link" href="tel:123-456-7890">123-456-7890</a></p>
            <p class="contact-info__item fax"><span class="contact-info__item-title">Fax: </span> <a class="contact-info__item-link" href="tel:123-456-7890">123-456-7890</a></p>
        </div>

        <form class="contact-form">
            <input class="contact-form__input name" type="text" title="Name" placeholder="Name" required="">
            <input class="contact-form__input email" type="email" title="Email" placeholder="Email" required="">
            <textarea class="contact-form__textarea" title="message" placeholder="Message" required=""></textarea>
            <button class="contact-form__btn" type="submit">Send message</button>
        </form>

       <div class="contact-map" id="js-contact-map"></div>

        <div class="contact-values">
            <h2 class="contact-values__title">Our Values</h2>
            <p class="contact-values__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
            <div class="contact-values__items">
                <div class="contact-values__item">
                    <img class="contact-values__item-img" src="<?php echo get_template_directory_uri() . '/assets/images/contact-img-1.jpg'; ?>" />
                    <h3 class="contact-values__item-title">Who We Are</h3>
                    <p class="contact-values__item-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam.</p>
                </div>
                <div class="contact-values__item">
                    <img class="contact-values__item-img" src="<?php echo get_template_directory_uri() . '/assets/images/contact-img-2.jpg'; ?>" />
                    <h3 class="contact-values__item-title">Our Vision</h3>
                    <p class="contact-values__item-text">Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me.</p>
                </div>
                <div class="contact-values__item">
                    <img class="contact-values__item-img" src="<?php echo get_template_directory_uri() . '/assets/images/contact-img-3.jpg'; ?>" />
                    <h3 class="contact-values__item-title">Our Mission</h3>
                    <p class="contact-values__item-text">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan.</p>
                </div>
            </div>
            </div>
    </div>
<?php get_footer(); ?>