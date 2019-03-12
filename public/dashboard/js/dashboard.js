jQuery(document).ready(function($){
	$('#create_user').on("submit", function(e){
		e.preventDefault();
		var data = $(this).serialize();
		// console.log(data);

		var first_name =  $(this).find('#first_name').val();
		var last_name =  $(this).find('#last_name').val();
		var email =  $(this).find('#email').val();
		var password =  $(this).find('#password').val();
		var phone =  $(this).find('#phone').val();
		var role_id =  $(this).find('#role').val();
		var company_name =  $(this).find('#company_name').val();

		var url = '/createUser';

		$.ajax({
            url: url,
            type: "POST",
            dataType: 'json',
            data: {
                "first_name": first_name,
                "last_name": last_name,
                "email": email,
                "password": password,
                "role_id": role_id,
                "phone": phone,
                "company_name": company_name,
                '_token': $('input[name="_token"]').val()
            },
            success: function (data) {
                if(data.success == true){
                	$(".errors").html("");
                	$('#first_name').val("");
					$('#last_name').val("");
					$('#email').val("");
					$('#password').val("");
					$('#phone').val("");
					$('#role').val(role_id);
					$('#company_name').val("");
                	var tr = '<tr>'+
                			 	'<td>'+
                            		'<div class="custom-control custom-checkbox">'+
                            	    	'<input type="checkbox" class="custom-control-input" id="customControlValidation2" required>'+
                            	    	'<label class="custom-control-label" for="customControlValidation2"></label>'+
                            		'</div>'+
                            	'</td>'+
                            	'<td>'+
                            		'<a href="/profile/'+data.user.id+'"><img src="/dashboard/assets/images/users/1.jpg" alt="user" class="rounded-circle" width="30" />'+data.user.first_name+' '+ data.user.last_name +'</a>'+
                            	'</td>'+
                            	'<td>'+data.user.email+'</td>'+
                            	'<td>'+data.user.phone+'</td>'+
                            	'<td><span class="label label-danger">'+data.role.name+'</span> </td>'+
                            	'<td>'+data.user.company_name+'</td>'+
                            	'<td>'+data.user.created_at+'</td>'+
                            	'<td>'+
                            		'<button class="btn btn-sm delete_user" data-id="'+data.user.id+'"><i class="ti-close" aria-hidden="true"></i></button>'+
                            	'</td>'+
                            '</tr>';

                    $(".user_body").append(tr);
                    $(".errors").append('<p class="alert alert-success">User Created Successfully</p>');
                    // $('#createmodel').modal('toggle');
                }else {
                	$(".errors").html("");
                	$.each(data.errors, function(key, error){
                		$(".errors").append('<p class="alert alert-danger">'+error+'</p>');
                	});
                }
            },
            error: function (data) {
                alert(data);
            }
        });
	});

	$(".delete_user").on("click", function(e){
		e.preventDefault();
		var verify = confirm("Do you want to delete the user?");
		if(verify == false){
			return;
		}
		var parent = $(this).closest('td').parent();
		var id = $(this).data('id');
		var url = '/deleteUser';

		$.ajax({
            url: url,
            type: "POST",
            dataType: 'json',
            data: {
                'id' : id,
                '_token': $('input[name="_token"]').val()
            },
            success: function (data) {
            	console.log(data);
                if(data.success == true){
                	parent.remove();
                }
            },
            error: function (data) {
                alert(data);
            }
        });
	});

	$("#update_profile").on("click", function(e){
		e.preventDefault();
		var id = $('#profile_id').val();
		var first_name =  $('#profile_update_form').find('#first_name').val();
		var last_name =  $('#profile_update_form').find('#last_name').val();
		var email =  $('#profile_update_form').find('#email').val();
		var phone =  $('#profile_update_form').find('#phone').val();
		var role_id =  $('#profile_update_form').find('#role').val();
		var company_name =  $('#profile_update_form').find('#company_name').val();

		var url = '/updateUser';

		$.ajax({
            url: url,
            type: "POST",
            dataType: 'json',
            data: {
            	"id": id,
                "first_name": first_name,
                "last_name": last_name,
                "email": email,
                "role_id": role_id,
                "phone": phone,
                "company_name": company_name,
                '_token': $('input[name="_token"]').val()
            },
            success: function (data) {
            	console.log(data);
            	if(data.success == true) {
            		$(".errors").html("");
            		$(".errors").append('<p class="alert alert-success">User Created Successfully</p>');
            		$('#user_name,#profile_name').text(data.user.first_name+" "+data.user.last_name);
            		$('#user_email,profile_email').text(data.user.email);
            		$('#user_phone,profile_phone').text(data.user.phone);
            	}else if(data.errors) {
                	$(".errors").html("");
                	$.each(data.errors, function(key, error){
                		$(".errors").append('<p class="alert alert-danger">'+error+'</p>');
                	});
                }
            },
            error: function (data) {
                alert(data);
            }
        });
	});
});