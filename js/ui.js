
$(document).ready(function(){
  //체크박스디자인 div추가
  $('input[type=checkbox] + label').prepend('<div></div>');
  $('input[type=radio] + label').prepend('<div></div>');

  //사이드바
  $(function(){
    $(".lnb > div:not("+$(".side-icon > a.active").attr("href")+")").hide();
    $(".side-icon > a").click(function(){
      $(".side-icon > a").removeClass("active");
      $(this).addClass("active");
      $(".lnb > div").slideUp(200);
      $($(this).attr("href")).slideDown(200);
      return false;
      })
  })

  $(".sidebar-dropdown > a").click(function() {
    $(".sidebar-submenu").slideUp(200);
    if (
        $(this)
            .parent()
            .hasClass("active")
    ) {
      $(".sidebar-dropdown").removeClass("active");
      $(this)
          .parent()
          .removeClass("active");
    } else {
      $(".sidebar-dropdown").removeClass("active");
      $(this)
          .next(".sidebar-submenu")
          .slideDown(200);
      $(this)
          .parent()
          .addClass("active");
    }
  });

  $("#close-sidebar").click(function() {
    $(".page-wrapper").removeClass("toggled");
  });
  $("#show-sidebar").click(function() {
    $(".page-wrapper").addClass("toggled");
  });

  //사이드바 
  var w = $(window).width();
	if(w < 950){
		$(document).ready(function() {
			$(".page-wrapper").removeClass("toggled");
		});

	}

});



