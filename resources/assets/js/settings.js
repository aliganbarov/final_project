
  $('.sideBar li').click(function(event) {
    $('.sideBar li a').removeClass('active');
    $(this).children('a').addClass('active');
    var contentId=$(this).children('a').data('id');
    var offset=$(''+contentId+'').offset().top;
    // console.log(offset);
    $("html, body").animate({ scrollTop: offset }, 1000);
  });
