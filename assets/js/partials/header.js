//Header burger menu
var headerBurger = $('.js-header-menu__burger'),
    headerBurgerLine = $('.js-header-menu__burger-line'),
    headerMenuItems = $('.js-header-menu__items');

$(headerBurger).on('click', function(){
    var headerBurgerActive = $(this);

    $(headerBurgerLine).toggleClass('clicked');
    $(headerMenuItems).toggleClass('active');

    $(document).on('click', function(i){
        if ($(i.target).is($(headerBurgerActive)) === false){
            $(headerBurgerLine).removeClass('clicked');
            $(headerMenuItems).removeClass('active');
        }
    });

    $(document).keydown(function(e){
        if(e.keyCode == 27){
            $(headerBurgerLine).removeClass('clicked');
            $(headerMenuItems).removeClass('active');
        }
    });
});

//Header search
var headerSearchIcon = ('.js-header-search__icon'),
    headerSearchForm = ('.js-header-search__form'),
    headerSearchClose = ('.js-header-search__btn-close');

$(headerSearchIcon).on('click', function(){
    $(headerSearchForm).addClass('active');

    $(document).keydown(function(e){
        if(e.keyCode == 27){
            $(headerSearchForm).removeClass('active');
        }
    });
});

$(headerSearchClose).on('click', function(){
    $(headerSearchForm).removeClass('active');
});