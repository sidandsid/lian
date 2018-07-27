//adding icons to post pagination links (prev/next) and show all button
var $arrowPrev = ' <svg class="post-nav__item-icon prev"> ' +
    ' <use xlink:href="#arrow-prev"></use>' +
    ' </svg> ';

var $linkPrev = $('.post-nav__item.prev a').append($arrowPrev);

var $arrowNext = ' <svg class="post-nav__item-icon next"> ' +
    ' <use xlink:href="#arrow-next"></use>' +
    ' </svg> ';

var $linkNext = $('.post-nav__item.next a').append($arrowNext);

var $showAll = ' <svg class="post-nav__item-icon all"> ' +
    ' <use xlink:href="#show-all"></use>' +
    ' </svg> ';

var $linkAll = $('.post-nav__item.all a').append($showAll);


//init Flickity slider - default options
var $portfolioSingleSlider = $('.js-portfolio-single .post p:has(img)').flickity({
    cellSelector: 'img',
    cellAlign: 'left',
    initialIndex: 0,
    wrapAround: true,
    pageDots: false,
    prevNextButtons: false
});

$portfolioSingleSlider.on('staticClick.flickity', function(event, pointer, cellElement, cellIndex){
    if (typeof cellIndex == 'number'){
        $portfolioSingleSlider.flickity('selectCell', cellIndex);
    }
});

//extending slider - workaround instead of default slider thumbnails navigation which requires additional markup of thumbnail slider
//adding container that shows full-sized image associated with the clicked slide

var $fullSlideContainer = $('<div class="post-slide"></div>');

$portfolioSingleSlider.prepend($fullSlideContainer);

var $slide = $('.js-portfolio-single .flickity-slider img');
var $firstSlide = $('.js-portfolio-single .flickity-slider img:first-child');

$firstSlide.clone().appendTo($fullSlideContainer);

$slide.on('click', function(){
    var $clickedSlide = $(this);

    $clickedSlide.clone().appendTo($fullSlideContainer).hide().fadeIn(1000);
    $clickedSlide.siblings().on('click', function(){
        $fullSlideContainer.empty();
        $(this).clone().appendTo($fullSlideContainer).hide().fadeIn(1000);
    });
});