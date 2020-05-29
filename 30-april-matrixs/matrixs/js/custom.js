
// 25 April 2020 loader start code js

$(document).ready(function () {
	$(".loader").fadeOut(3000);
	// $(window).load(function() { 
	// 	alert();
	//     // $(".loader").fadeOut(1000);
	// });
}); 
// code for js counceling page hide/show
// 30-april-2020

var url      = window.location.href; 
var arr = url.split('/'); 
// if(arr[arr.length - 1] == "counseling.html"){

if(arr[arr.length - 1] == "counseling.html" || 
	arr[arr.length - 1] == "counseling.html?#depression-anxiety" ||
	arr[arr.length - 1] == "counseling.html?#couple-counseling" ||
	arr[arr.length - 1] == "counseling.html?#personal-development" ||
	arr[arr.length - 1] == "counseling.html?#stress-worry" ||
	arr[arr.length - 1] == "counseling.html?#midlife-crises" ||
	arr[arr.length - 1] == "counseling.html?#self-confidence" ||
	arr[arr.length - 1] == "counseling.html?#divorce"){

$(document).ready(function() { 
	var s = $(".clearHeader")
	var pos = s.position();					   
	$(window).scroll(function() {
		var windowpos = $(window).scrollTop();
		if ($(document).scrollTop() > 6000) {
			// s.addClass("stick");
			$('.clearHeader').fadeOut('slow');
		} else {
			$('.clearHeader').fadeIn('slow');
		}
	});
});
}
// code for js healing page hide/show

if(arr[arr.length - 1] == "healing.html"){          
	// alert();
$(document).ready(function() {
	var s = $(".clearHeader")
	var pos = s.position();					   
	$(window).scroll(function() {
		var windowpos = $(window).scrollTop();
		if ($(document).scrollTop() > 3800) {
			$('.clearHeader').fadeOut('slow');
		} else {
			// s.removeClass("stick");	
			$('.clearHeader').fadeIn('slow');
		}
	});
});
}
// code for js chakra page hide/show

if(arr[arr.length - 1] == "chakra.html"){
$(document).ready(function() {
	var s = $(".clearHeader")
	var pos = s.position();					   
	$(window).scroll(function() {
		var windowpos = $(window).scrollTop();
		if ($(document).scrollTop() > 3200) {
			$('.clearHeader').fadeOut('slow');
		} else {
			// s.removeClass("stick");	
			$('.clearHeader').fadeIn('slow');
		}
	});
});
}

// Be positive section start

$(document).ready(function() {
			  // first step
	 $(".e1").mouseenter(function () {
     $(".aqua_e1").show(); 
     $(".be_positive").hide(); 
  }); 

	 $(".e1").mouseleave(function () {
     $(".aqua_e1").hide(); 
     $(".be_positive").show(); 
  });
	 // second step

	 $(".e2").mouseenter(function () {
     $(".green_e2").show(); 
     $(".be_positive").hide(); 
  }); 

	 $(".e2").mouseleave(function () {
     $(".green_e2").hide(); 
     $(".be_positive").show(); 
  });

	 // third step

	 $(".e3").mouseenter(function () {
     $(".pink_e3").show(); 
     $(".be_positive").hide(); 
  }); 

	 $(".e3").mouseleave(function () {
     $(".pink_e3").hide(); 
     $(".be_positive").show(); 
  });

	  // fourth step

	 $(".e4").mouseenter(function () {
     $(".yellow_e4").show(); 
     $(".be_positive").hide(); 
  }); 

	 $(".e4").mouseleave(function () {
     $(".yellow_e4").hide(); 
     $(".be_positive").show(); 
  });

	 // fifth step

	 $(".e5").mouseenter(function () {
     $(".red_e5").show(); 
     $(".be_positive").hide(); 
  }); 

	 $(".e5").mouseleave(function () { 
     $(".red_e5").hide(); 
     $(".be_positive").show(); 
  });

	 // six step

	 $(".e6").mouseenter(function () {
     $(".blue_e6").show(); 
     $(".be_positive").hide(); 
  }); 

	 $(".e6").mouseleave(function () {
     $(".blue_e6").hide(); 
     $(".be_positive").show(); 
  });


});