//blog feed
var $blogGrid = $('.js-blog-post-wrapper'),
    $blogPost = $('.js-blog-post-wrapper .post'),
    $blogBtn = $('.js-blog-load-btn');

//showing only 4 posts on load
$blogPost.slice(0, 4).show();

//init masonry layout for blog feed
$blogGrid.masonry({
    itemSelector: '.post',
    columnWidth: '.post',
    percentPosition: true,
    gutter: 30
});

//showing 3 posts more on Load more btn click
$blogBtn.on('click', function(e){
    var $blogPostHidden = $('.js-blog-post-wrapper .post:hidden');

    e.preventDefault();
    $blogPostHidden.slice(0, 3).show();

    if ($blogPostHidden.length == 0){
        $blogBtn.fadeOut();
    }

    $blogGrid.imagesLoaded().progress(function(){
        $blogGrid.masonry('layout');
    });
});