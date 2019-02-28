// open menu
$(function() {
    $(".menuButtonWrap").click(function(e){
        $(".menu").addClass("open");
        e.stopPropagation();
    });
});

//close menu
$(function() {
    $(".closeMenuButton").click(function(e){
        	$(".menu").removeClass("open");
    });
});
$(function() {
    $(".site").click(function(e){
    	if(!$(e.target).hasClass("menu")){
        	$(".menu").removeClass("open");
    	}
    });
});

// close our sites mobile menu when a link item is clicked
$(function() {
    $(".linkList").click(function(e){
        	$(".menu").removeClass("open");
    });
});
