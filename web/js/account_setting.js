$(document).ready(function(){


	$('.age_range').live('click', function(){
		$('.age_range').removeClass('active');
		$('#'+this.id).addClass('active');
		var id_array = this.id.split('_');
		var val = $('#'+ this.id).attr('title');
		$('#age').val(val)
		return false;
	});
});




