/* Author:

*/

//Hide all aside container divs
$(document).load(function () {
	$("#signup_div, #find_div, #share_div").hide();
});

/* Swap out find, share and signup aside divs */
$(".unhide:first").click(function() {
		$("#signup_div, #share_div").hide();
		$("#find_div").fadeIn("slow");
		$("#find_div").remove("p");
		//$("#find_games_aside").removeClass('hidden');
		//$("#games_rollover").removeClass('hidden');
		
		//$(this).siblings('img').removeClass('hidden');
		//$(this).addClass('hidden');
		//$(this).siblings('h2').removeClass('hidden');
		
});

$(".unhide:nth-child(2)").click(function() {
		$("#signup_div, #find_div").hide();
		$("#share_div").fadeIn("slow");
		//$("#games_rollover").removeClass('hidden');
		
		//$(this).siblings('img').removeClass('hidden');
		//$(this).addClass('hidden');
		//$(this).siblings('h2').removeClass('hidden');
		
		
});

$(".unhide:nth-child(3)").click(function() { 
		$("#share_div, #find_div").hide();
		$("#signup_div").fadeIn("slow");
		
		//$("h2").removeClass('hidden'); 
	
});

$("#find_submit_button, #share_submit_button").bind('click',function() {
	var comingSoon = "<strong>coming soon... click sign up to find out more </strong>";
	$(this).parent().append('<p></p>');
	$("p").css({opacity:0.0}).html(comingSoon);
	$("p").animate({opacity: 1.0}, 1000);
	$(this).unbind('click');

});

/* Add text below */

/* signup dialog */



$(document).ready(function() {
    $("#accordion").accordion({
		active: false,
    collapsible: true
	});
  });
 
//ROLLOVER IMAGES JQ
$(function() {
    $('img[data-hover]').hover(function() {
        $(this).attr('tmp', $(this).attr('src')).attr('src', $(this).attr('data-hover')).attr('data-hover', $(this).attr('tmp')).removeAttr('tmp');
    }).each(function() {
        $('<img />').attr('src', $(this).attr('data-hover'));
    });;
});



