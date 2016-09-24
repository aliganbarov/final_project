
  $('#settings .sideBar li').click(function(event) {
    $('#settings .sideBar li a').removeClass('active');
    $(this).children('a').addClass('active');
    var contentId=$(this).children('a').data('id');
    var offset=$(''+contentId+'').offset().top;
    console.log('qweqwe');
    $("html, body").animate({ scrollTop: offset }, 1000);
  });
