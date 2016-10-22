var main = function() {
    $('.close2').click(function() {
        $('.modal2').fadeToggle(300);
    }); 

	$('.profile_btn').click(function() {
    	$('.modal2').fadeToggle(300);
    }); 

    $('.add_match_btn').click(function() {
    	$('.add_match').fadeToggle(300);
    }); 
};

$(document).ready(main);