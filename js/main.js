jQuery(document).ready(function($){

  $('#beer .slider-beer').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay:true,
    dots: true,
    fade: true,
    cssEase: 'linear',
    arrows:false
  });



  /* tooltip bootstrap
  ---------------------------*/
  $('[data-toggle="tooltip"]').tooltip();

  /* scrollTop Animation
  ---------------------------*/
  $("#myBtn").click(function(){
    $('html,body').animate({
    	scrollTop:0
      },600);
  });

  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function() {scrollFunction()};

  function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
      } else {
          document.getElementById("myBtn").style.display = "none";
      }
  }
/*=======================================*/
/* scroll animation to section menu page
---------------------------*/
var sections =[];
var id = false;
var $menu = $(".menu-list");
$('a', $menu).each(function(){
	sections.push($($(this).attr('href')));
});

$(window).scroll(function(){
	var scrollTop = $(this).scrollTop() + ($(window).height()/2);
	for(var i in sections){
		var section = sections[i];
		if(scrollTop > section.offset().top){
			id = section.attr('id');
		}
	}
	$('a', $menu).removeClass('active');
	$('a[href="#'+id+'"]', $menu).addClass('active');
});

	$(".menu-list li a[href^='#']").click(function(e){
		var target = this.hash;
		e.preventDefault();
		$(".menu-list li").removeClass("tab-active");
		$('html,body').animate({
			scrollTop: $(this.hash).offset().top-190
		},600, function(){
				//window.location.hash=target;
		    });

		});

/*==========================================*/
// scroll change navbar bckground
var officina_scroll_pos = 0;
$(document).scroll(function(){
	officina_scroll_pos = $(this).scrollTop();
	if (officina_scroll_pos > 400) {
		$("body").addClass('is-scrolled');
	}else{
		$("body").removeClass('is-scrolled');
	}
	if (officina_scroll_pos > 500) {
		$(".navbar-inverse").addClass('navbar-fixed-top');

	}else{
	$(".navbar-inverse").removeClass('navbar-fixed-top');
	}

});
/*==========================================*/

// 	Loading Animation

	$(window).ready(function() {
		// Animate loader off screen
		setTimeout(
			  function()
			  {
				$("#load").addClass("loader-removed");
			  	$("#load-panel .panel").addClass("ready");
			  }, 800);
	});

	/*==========================================*/


/* sezione menu filter home
------------------------------*/
$(".button").click(function(e){
  e.preventDefault();
  var value = $(this).attr('data-filter');
  $(".filter").not("."+value).hide(100);
  $(".filter").filter("."+value).show(100);


    $(".menu-tabs .button").click(function(){
      e.preventDefault();
      $('.menu-tabs .button').removeClass('tab-active');
      $(this).addClass('tab-active');
    });
});

$(".list-group-item a:first").each(function(){
      $(this).addClass("active");
});



/*==========================================*/

/* Animation beer thumb on beer page
---------------------------*/
$(".beer_thumb").mouseenter(function(){
    $(this).find('.beer_filter').css('display','block');
    $(this).find('.beer_title').addClass("animated slideInUp").css('display','block');

});
$(".beer_thumb").mouseleave(function(){
    $(this).find('.beer_filter').css('display','none');
    $(this).find('.beer_title').removeClass("animated slideInUp").css('display','none');
});

//slider birre home
$('.myslider').slick({
   arrow: true,
   infinite: false,
   speed: 300,
   slidesToShow: 4,
   //autoplay:true,
   responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }

  ]
 });

 $('div.thumb').mouseenter(function(){
    $(this).find(".info").addClass("animated slideInUp");
 });

 $('div.thumb').mouseleave(function(){
   $(this).find(".info").removeClass("animated slideInUp");
 });

 /* Open end Close the overlay navigation
 ---------------------------------------------*/
$("#open").click(function(){
    $("body").css("overflow","hidden");
		$("body").addClass('is-nav-open');
  $(this).css("display","none");
  $("#myNav").css("width","100%");
});
$("#closebtn").click(function(e){
  e.preventDefault();
		$("body").removeClass('is-nav-open');
  $("#myNav").css("width","0");
$("#open").css("display","block");
  $("body").css("overflow-y","scroll");
});

  $('.overlay .nav-col li a').click(function(){
    $('#myNav').css("width","0");
    $("#open").css("display","block");
      $("body").css("overflow-y","scroll");
  });



/* scroll Animation
---------------------------*/
window.sr=ScrollReveal();
    sr.reveal('.intro-text',{
      duration:2000,
      origin:'top',
      delay:500
    });
    sr.reveal('#text-intro',{
      duration:2000,
      origin:'left',
    });
    sr.reveal('.primary-menu',{
      duration:2000,
      origin:'left',
    });

    sr.reveal('#img-intro',{
      duration:2000,
      origin:'right',
    });

sr.reveal('.menu-animation', { origin:'left', duration: 2000 }, 50);
sr.reveal('.menu-single', { duration: 2000 }, 50);
sr.reveal('#event-col', { duration: 1000, delay:500 });

});//fine jquery
