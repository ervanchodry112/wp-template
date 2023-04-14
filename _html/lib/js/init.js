/*
 * GLOBALLY USED SCRIPT FOR "Sevima Web"
 * Coder : Sevima
 */
 
//GLOBAL VARIABLE
 var window_width=$(window).width();
//BAGIAN INI HARUS DI INIT DI SEMUA HALAMAN
$(document).ready(function(){
	//create_fix();
	check_ipad();
	nicescroll();
	carouHome();
	revoSlider();
	carouTeam();
	carouClient();
	fly_menu();
	MP();
	remove();
	loaderimage();
	
}),
$(window).load(function() {
            $('#status').delay(100).fadeOut('slow');
            $('#preloader').delay(500).fadeOut('slow');
            $('body').delay(500).css({'overflow':'visible'});
            setTimeout(function(){$('#logo').addClass('animated fadeInDown')},500);
            setTimeout(function(){$('#logo_header').addClass('animated fadeInDown')},600);
            setTimeout(function(){$('#page_home').addClass('animated fadeInDown')},700);
            setTimeout(function(){$('.mainmenu').addClass('animated fadeInUp')},900);
        }) 


//CEK IPAD
function check_ipad(){
	is_ipad = /ipad/i.test(navigator.userAgent.toLowerCase());
}

//TUNGGU PERUBAHAN PADA UKURAN WINDOW
var view_updater;
$(window).resize(function(){
	clearTimeout(view_updater);
	view_updater=setTimeout("view_changed()",150)
})


//TRIGGER EVENT KETIKA UKURAN WINDOW BERUBAH
function view_changed(){
	updateCarousel();
	fly_menu();
}
 
 
//CREATE FIX UNTUK BROWSER YANG TIDAK SUPPORT CSS GENERATED CONTENT
function create_fix(){
	if(!Modernizr.generatedcontent){
		$(".add_fix").append('<span class="clearfix">&nbsp;</span>')
	}
}

//niceScroll
function nicescroll(){
    
	$(document).ready(
	function() {  
		$("html").niceScroll();
		}
	);
		
}

//Caroufredsel Home
function carouHome (){
	
	$('#carouHome').carouFredSel({
		auto: true,
		pauseOnHover: true,
		
		auto: {
		pauseOnHover: 'resume',
		duration: 900, 
		timeoutDuration: 7000,
		fx : "crossfade",
		easing:"linear",
		},
		next: {
			duration: 900, 
			timeoutDuration: 7000,
			fx : "scroll",
			easing:"elastic",
		},
		responsive: true,
		width: '100%',
		scroll: 1,
		prev: '#prevCH',
		next: '#nextCH',
		mousewheel: true,
		items: {
			visible: {
				min: 1,
				max: 1
			}
		},
		swipe: {
			//onMouse: true,
			onTouch: true
		}
	});
	
}

//Caroufredsel Team
function carouTeam (){

	function random(owlSelector){
		owlSelector.children().sort(function(){
			return Math.round(Math.random()) - 0.5;
		}).each(function(){
			$(this).appendTo(owlSelector);
		});
	}
	
	$(".filterTeams").owlCarousel({
         itemsCustom : [
			[0, 1],
			[450, 1],
			[800, 3],
			[1000, 4],
			[1300, 4],
			[1600, 5],
			[1900, 6]
		],
        lazyLoad : true,
		lazyFollow : true,
    	lazyEffect : "fade",
        navigation : true,
		beforeInit : function(elemen){
			//Parameter elem pointing to $("#owl-demo")
			random(elemen);
		},
		swipe: {
			//onMouse: true,
			onTouch: true
		}		
    });
	
}
 
//Caroufredsel Client
function carouClient (){

	function random(owlSelector){
		owlSelector.children().sort(function(){
			return Math.round(Math.random()) - 0.5;
		}).each(function(){
			$(this).appendTo(owlSelector);
		});
	}
	
	$(".filterClients").owlCarousel({
         itemsCustom : [
			[0, 1],
			[450, 2],
			[800, 3],
			[1000, 4],
			[1300, 5],
			[1600, 6]
		],
        lazyLoad : true,
		lazyFollow : true,
    	lazyEffect : "fade",
        navigation : true,
		beforeInit : function(elemen){
			//Parameter elem pointing to $("#owl-demo")
			random(elemen);
		},
		swipe: {
			//onMouse: true,
			onTouch: true
		}		
    });
	
}
 
// BUAT FlY MENU 
var detect_scroll;
function fly_menu(){
    
	var add_fly_main_menu = 100;
    //var batas_fly_main_menu = 500;
   
	if(window_width>=300){
		$(window).scroll(function(){
		   detect_scroll = $(window).scrollTop();
		   if(detect_scroll>=add_fly_main_menu && detect_scroll){
				$(".bg").stop().fadeOut(200, function(){
						$(".bg-dot").fadeIn(100);
				});
				$(".logo1").stop().fadeOut(200, function(){
						$(".logo2").fadeIn(100);
						$(".menu li a").css("color","#003c8e");
						$(".menu li a.active").css("border-color","#003c8e");
						$("a.menu-mobile").css("color","#003c8e");
						$("a.menu-mobile.active").css("border-color","#003c8e");
				});
			}else if(detect_scroll<=add_fly_main_menu){
				$(".bg").stop().fadeIn(200, function(){
						$(".bg-dot").fadeOut(100);
						$(".menu li a").css("color","#fff");
						$(".menu li a.active").css("border-color","#fff");
						$("a.menu-mobile").css("color","#fff");
						$("a.menu-mobile.active").css("border-color","#fff");
				});
				$(".logo2").stop().fadeOut(200, function(){
						$(".logo1").fadeIn(100);
				});
		   }else{
				$(".bg").stop().fadeIn(200, function(){
						$(".bg-dot").fadeOut(100);
				});
				$(".logo2").stop().fadeOut(200, function(){
						$(".logo1").fadeIn(100);
						$(".menu li a").css("color","#fff");
						$(".menu li a.active").css("border-color","#fff");
						$("a.menu-mobile").css("color","#fff");
						$("a.menu-mobile.active").css("border-color","#fff");
				});
		   }
		   
		})
	}
		
}

//revoSlider
function revoSlider(){
    
	if ($.fn.cssOriginal != undefined) {
		$.fn.css = $.fn.cssOriginal;
	}

	$(document).ready(function(){
		$('.fullwidthbanner').revolution({
			delay: 7000,
			startwidth: 1180,
			startheight: 800,
			LazyLoad:"on",
			onHoverStop: "off", // Stop Banner Timet at Hover on Slide on/off
			navigationType: "none", //bullet, none
			navigationArrows: "verticalcentered", //nexttobullets, verticalcentered, none
			navigationStyle: "none", //round, square, navbar, none
			touchenabled: "on", // Enable Swipe Function : on/off
			navOffsetHorizontal: 0,
			navOffsetVertical: 20,
			stopAtSlide: -1, // Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
			stopAfterLoops: -1, // Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic
			fullWidth: "on",
		});
	});
		
}

//revoSlider
function MP(){
    
	var status=0;
	$(".menumenu").ready(function() {
		$("a.menu-mobile").click(function(e){
			e.preventDefault();
			if(status==0){
				$(".closeMP").stop().fadeIn(200, function(){
						$(".openMP").fadeOut(20);
				});
				// $(this).next(".closeMP").fadeIn(200);
				// $(this).child(".openMP").fadeOut(100);
				status=1;
			}
			else if(status==1){
				$(".openMP").stop().fadeIn(200, function(){
						$(".closeMP").fadeOut(20);
				});
				// $(this).child(".openMP").fadeIn(200);
				// $(this).child(".closeMP").fadeOut(100);
				status=0;
			}
		});
		// $('.menu li a').click(function(e){
			// e.preventDefault();
			// $('.menu').hide(300);
			// if(status==1){
				// // $('.menu').slideUp(300);
				// $(".openMP").stop().fadeIn(200, function(){
					// $(".closeMP").fadeOut(20);
				// });
				// status=0;
			// }
		// });
	});
		
}

//remove
function remove(){
    
	$('.remove li a').click(function(e){
		e.preventDefault();
		$('.remove li').removeClass('active');
		$(this).addClass('active');
	});
		
}

//remove
function loaderimage(){
    
	$('img.loaders[data-shrinkimage]').shrinkimage();
		
}

/*---------------------------------- end of file ----------------------------------*/