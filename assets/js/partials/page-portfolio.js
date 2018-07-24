//init
var $portfolioGrid = $('.js-portfolio-post-wrapper').isotope({
    //options
    itemSelector: '.post',
    layoutMode: 'masonry',
    masonry: {
        columnWidth: '.post',
        gutter: 20,
        isFitWidth: true,
        isResizable: true
    }
});

//filter items on button click & adding active class to the clicked btn
var $portfolioFilter = $('.js-portfolio-filter').on( 'click', 'button', function(){

    var filterValue = $(this).attr('data-filter');
    $portfolioGrid.isotope({ filter: filterValue });

    var btnClicked = $(this);
    var btnClickedSibling = $(btnClicked).siblings();

    $(btnClicked).addClass('active');
    $(btnClickedSibling).removeClass('active');
});

//load more btn
var initShow = 3; //number of posts loaded initially
var add = 3;  //number of posts added with Older posts btn
var counter = add; //counter for load more button
var iso = $portfolioGrid.data('isotope'); //get Isotope instance

loadMore(initShow);//execute function onload

function loadMore(toShow){
    $portfolioGrid.find('.hidden').removeClass('hidden');

    var hiddenElems = iso.filteredItems.slice(toShow, iso.filteredItems.length).map(function(item){
        return item.element;
    });

    $(hiddenElems).addClass('hidden');
    $portfolioGrid.isotope('layout');

    //when no more to load, hide show more button
    if (hiddenElems.length == 0){
        $('.portfolio-load-btn').hide();
    } else {
        $('.portfolio-load-btn').show();
    };
}

//append load more button
$portfolioGrid.after('<button class="portfolio-load-btn" type="button">Load more</button>');

//when load more button clicked
$('.portfolio-load-btn').click(function() {
    if ($('#filters').data('clicked')) {
        //when filter button clicked, set initial value for counter
        counter = initShow;
        $('#filters').data('clicked', false);
    } else {
        add = add;
    };

    add = add + initShow;

    loadMore(add);
});