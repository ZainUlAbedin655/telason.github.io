$(document).ready(function(){
	createPartNumber();	
	$('.product-variants select.form-control').on('change', function(){
		createPartNumber();
	});
    if($('#product-availability').length > 0 && $('section.part-number').length > 0){
      var availability = $('#product-availability').html();
      $('#product-availability').remove();
      $('section.part-number').append('<div id="product-availability">'+availability+'</div>');
    }
});
function createPartNumber(){
	$.each($('.product-variants select.form-control option:selected'), function(index){            
		var select_text = $(this).attr("title");
		if(select_text == 'None'){
			select_text = '';
		}
		$(".part-number input[name='partnumber["+index+"]']").val(select_text.substr(0, 2));
	});
}