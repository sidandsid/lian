//Header burger menu
var $headerBurger = $('.js-header-nav__burger'),
    $headerBurgerLine = $('.js-header-nav__burger-line'),
    $headerNavItems = $('.js-header-nav__items');

$headerBurger.on('click', function(){
    var $headerBurgerActive = $(this);

    //show on burger button click
    $headerBurgerLine.toggleClass('clicked');
    $headerNavItems.toggleClass('active');

    //close when clicked elsewhere
    $(document).on('click', function(i){
        if ($(i.target).is($headerBurgerActive) === false){
            $headerBurgerLine.removeClass('clicked');
            $headerNavItems.removeClass('active');
        }
    });

    //close on Esc button
    $(document).keydown(function(e){
        if(e.keyCode == 27){
            $headerBurgerLine.removeClass('clicked');
            $headerNavItems.removeClass('active');
        }
    });
});

//Header search
var headerSearchIcon = ('.js-header-search__icon'),
    headerSearchForm = ('.js-header-search__form'),
    headerSearchClose = ('.js-header-search__btn-close');

$(headerSearchIcon).on('click', function(){
    //show form on show icon click
    $(headerSearchForm).addClass('active');

    //close on Esc button
    $(document).keydown(function(e){
        if(e.keyCode == 27){
            $(headerSearchForm).removeClass('active');
        }
    });
});

//close on close icon click
$(headerSearchClose).on('click', function(){
    $(headerSearchForm).removeClass('active');
});