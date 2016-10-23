var main = function() {
    $('.close2').click(function() {
        $('.modal2').fadeToggle(300);
    }); 

	$('.profile_btn').click(function() {
    	$('.modal2').fadeToggle(300);
    }); 

    $('.menu_container').click(function() {
    	$('.mobile_menu').fadeToggle(300);
    }); 
};

function myFunction(x) {
	x.classList.toggle("change");
}

$(document).ready(main);