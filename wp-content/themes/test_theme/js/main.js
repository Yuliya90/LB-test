$(document).ready(function() {
    $('.big').on("click", function() {
        $('.overlay').show();
    });
    $('.popup-close').on("click", function() {
        $('.overlay').hide();
    })



    $(".rt").click(function() {
    	var color = "rgb(255, 0, 0)";
    	if ($(this).css('background').indexOf(color)==-1){
    	$(this).css({'background': 'red', 'color': 'white', 'border': 'none'});
    	console.log();	
    	}
    	 else {
    	 	$(this).css({'background': 'white', 'color': 'black', 'border': 'none'});
    	 }
    });
 


});