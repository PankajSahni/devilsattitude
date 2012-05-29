$(document).ready(function(){
	$(".popup").live("click", function() {
		$("#popupBackground-top.popUp01").html('<div id="popupBackground-bottom"><div id="popUp"><a class="bClose" title="Close">Close</a><h2>Please Wait..</h2></div></div>');
		$("#popupBackground-top.popUp01").load(this.href);
		$("#popupBackground-top.popUp01").bPopup();
		
		//alert(this.href)
		return false
	});

	$(".popup_image").live("click", function() {
		$("#popupBackground-top.popUp01").html('<div id="popupBackground-bottom"><div id="popUp"><a class="bClose" title="Close">Close</a><img src="'+this.href+'" /></div></div>');
		$("#popupBackground-top.popUp01").bPopup();
		//alert(this.href)
		return false
	});

	$(".popup-student").live("click", function() {
		$("#popupBackground-top.popUp_student").bPopup();
		return false
	});

	$('.radioButton').live('click', function(){
		var id = this.id;
		url = $('#'+id).parent('form').attr('action');
		$.ajax({
			type:'POST', 
			url: url, 
			data:$('#'+id).parent('form').serialize(), 
			success: function(response) {
				$('#tabs1').html(response);
		}});
		
	});

	$('.delete').live('click', function(){
		var url = this.href;
		if(confirm("Are you sure you want to delete your child's account?")){
			$.ajax({
				type:'GET', 
				url: url, 
				data:'', 
				success: function(response) {
					$('#tabs1').html(response);
			}});
		}
		return false;
	});

	/*$('#edit_email').live('click', function(){
		var url = this.href;
		var email = $('#email').val();
		$.ajax({
			type:'POST', 
			url: url, 
			data:{email_address:email, task:'email'}, 
			success: function(response) {
				$('#tabs1').html(response);
		}});
		return false;
	});*/

	$('#change_email').live('click', function(){
		var load_url = $('#load_url').val();
		var url = $(this).parents('form').attr('action');
		var password = $('#password').val();
		var email = $('#email').val();
		$.ajax({
			type:'POST', 
			url: url, 
			data:{password:password,email:email}, 
			success: function(response) {
				$('#popupBackground-top').html(response);
				$('#tabs1').load(load_url);
		}});
		return false;
	});

	$('#change_password').live('click', function(){
		var url = $(this).parents('form').attr('action');
		var old_password = $('#old_password').val();
		var new_password = $('#new_password').val();
		var retype_password = $('#retype_password').val();
		$.ajax({
			type:'POST', 
			url: url, 
			data:{"old_password":old_password, "new_password":new_password, "retype_password":retype_password}, 
			success: function(response) {
				$('#popupBackground-top').html(response);
		}});
		return false;
	});

	$('.checkbox').live('click', function(){
		url = $('#comm_setting').attr('action');
		
		$.ajax({
			type:'POST', 
			url: url, 
			data:$('#comm_setting').serialize(), 
			success: function(response) {
				$('#tabs1').html(response);
		}});
		
	});
	$('#add_email').live('click', function(){
		var id = this.id;
		var load_url = $('#load_url').val();
		url = $('#'+id).parent('form').attr('action');
		$.ajax({
			type:'POST', 
			url: url, 
			data:$('#'+id).parent('form').serialize(),
			success: function(response) {
				$('#popupBackground-top').html(response);
				$('#tabs1').load(load_url);
		}});
		
	});
	$('.gender').live('click', function(){
		$('.gender').removeClass('active');
		$('#'+this.id).addClass('active');
		var id_array = this.id.split('_');
		var val = id_array[1];
		$('#student_'+id_array[0]).val(val)
		return false;
	});

	$('.age_range').live('click', function(){
		$('.age_range').removeClass('active');
		$('#'+this.id).addClass('active');
		var id_array = this.id.split('_');
		var val = $('#'+ this.id).attr('title');
		$('#student_'+id_array[0]).val(val)
		return false;
	});

	$('.avatar').live('click', function(){
		$('.avatar').removeClass('active');
		$('#'+this.id).addClass('active');
		var id_array = this.id.split('_');
		var val = $('#'+ this.id).attr('title');
		$('#student_'+id_array[0]).val(val)
		return false;
	});

	$('#add_student').live('click', function(){
		if($('#student_name').val()==''){
			alert("Pleas Enter Name!");
			$('#student_name').focus();
			return false;
		}
		if($('#student_gender').val()==''){
			alert("Pleas Select Gender!");
			return false;
		}
		if($('#student_age').val()==''){
			alert("Pleas Select Age Range!");
			return false;
		}
		if($('#student_avatar').val()==''){
			alert("Pleas Select Avatar!");
			return false;
		}
		var url = $('#add_children_form').attr('action');
		var load_url = $('#load_url').val();
		$.ajax({
			type:'POST', 
			url: url, 
			data:$('#add_children_form').serialize(), 
			success: function(response) {
				$('#popupBackground-top.popUp01').html(response);
				$('#tabs1').load(load_url);
		}});
		return false;
	});
});




