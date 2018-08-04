//init slider for format-gallery post
var $formatGalleryPost = jQuery('.format-gallery p:has(img)').flickity({
    cellSelector: 'img',
    cellAlign: 'left',
    initialIndex: 0,
    pageDots: false,
    wrapAround: true,
    arrowShape: 'm 24.527922,50.919344 c 0,-0.0038 0,-0.0082 0,-0.01266 0,-1.103073 0.534365,-2.102011 1.398822,-2.826483 L 55.325572,23.409078 c 0.864456,-0.727218 2.062496,-1.177449 3.386553,-1.177449 1.324056,0 2.522097,0.450231 3.386218,1.177171 l 3.35e-4,2.78e-4 c 0.866203,0.72974 1.40144,1.734173 1.40144,2.842852 0,1.108679 -0.535237,2.113109 -1.401843,2.843186 l 4.03e-4,-3.38e-4 -26.010193,21.809276 26.010193,21.809277 c 0.865933,0.729123 1.401039,1.732881 1.401039,2.840945 0,1.108063 -0.535106,2.111822 -1.401374,2.841226 h 3.35e-4 c -0.864254,0.726098 -2.061354,1.175486 -3.384269,1.175486 -1.322916,0 -2.520015,-0.449443 -3.384002,-1.175263 h -2.68e-4 L 25.93111,53.727782 c -0.860292,-0.720098 -1.394792,-1.71147 -1.403188,-2.80709 z'
});

//init masonry layout
var $blogGrid = $('.js-blog-post-wrapper').masonry({
    itemSelector: '.post',
    gutter: 30
});

$blogGrid.imagesLoaded().progress(function(){
    $blogGrid.masonry('layout');
});

$(window).resize(function(){
    $blogGrid.masonry('layout');
});