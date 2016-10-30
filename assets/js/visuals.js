var main = function() {
    $('.close2').click(function() {
        $('.modal2').fadeOut(300);
    }); 

    $('#close_search').click(function() {
        $('.search_modal').fadeOut(300);
    }); 

	$('.profile_btn').click(function() {
    	$('#profile_modal').fadeToggle(300);
    }); 

    $('.search_btn').click(function() {
        $('#search_modal').fadeToggle(300);
    }); 

    $('.menu_container').click(function() {
    	$('.mobile_menu').fadeToggle(300);
    }); 
};

function myFunction(x) {
	x.classList.toggle("change");
}

$(document).ready(main);