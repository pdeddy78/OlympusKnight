(function($){
  $(function(){

    $('.button-collapse').sideNav({
		menuWidth: 300,
		edge: 'left',
		closeOnClick: true,
	});
	$('.tooltipped').tooltip({delay: 50});
	$('.fixed-action-btn').openFAB();
	$('.fixed-action-btn').closeFAB();
	$('input#input_text, textarea#textarea1').characterCounter();

  }); // end of document ready
})(jQuery); // end of jQuery name space