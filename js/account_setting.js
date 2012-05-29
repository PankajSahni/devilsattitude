$(document).ready(function(){


	$('.age_range').live('click', function(){
		$('.age_range').removeClass('active');
		$('#'+this.id).addClass('active');
		var id_array = this.id.split('_');
		var val = $('#'+ this.id).attr('title');
		$('#age').val(val)
		return false;
	});
        	$(".popup").live("click", function() {
		$("#popupBackground-top.popUp01").html('<div id="popupBackground-bottom"><div id="popUp"><a class="bClose" title="Close">Close</a><h2>Please Wait..</h2></div></div>');
		$("#popupBackground-top.popUp01").load(this.href);
		$("#popupBackground-top.popUp01").bPopup();
		
		//alert(this.href)
		return false
	});
});




