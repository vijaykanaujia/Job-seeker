function getstringBetweenTwoString(myStr){
    var subStr = myStr.match("job-(.*).html");
    return subStr[1];
}
window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 3000);

$(function(){

	//university search select2
	$('#university_id').select2({
      	placeholder: 'Please select Universit',
      	allowClear: true,
  		ajax: {
          	url: base_url + '/app/ajax/search-university.php',
          	processResults: function (data) {
              	return {
                  	results: JSON.parse(data)
              	};
          	}
  		}
  	});

	$('form#job_search_form').submit(function(){
		var formData = $(this).serialize();
		getJobs(formData);
	});


	$('form#sign_in_form').submit(function(){
		var formData = $(this).serializeArray();
		postSignInModal(formData);
	});

	$('form#forgot_password_form').submit(function(){
		var formData = $(this).serialize();
		postForgotPassword(formData);
	});

	$('form#sign_up_form').submit(function(){
		var formData = $(this).serialize();
		postSignUp(formData);
	});

	$('body').on('click', '.this-close', function(){
		$(this).closest('.parent-closer').remove();
	});

});

function getJobByPagination(page){
	var formData = $('form#job_search_form').serializeArray();
	formData.push({name: 'page', value: page});
	getJobs(formData);
}
function getJobs(formData){
	$.ajax({
       url: base_url + "/app/ajax/search-jobs.php",
       cache: false,   
       type: 'POST', 
       data: formData,
       success: function(response){
       		$('#search_result').html(response);
   		 	$('html,body').animate({
		        scrollTop: $("#search_result").offset().top
		    }, 'slow');
       },
       error: function(error){
         alert('Something went wrong');
       }
 	});
}

function isSearch(){
	let status = true;
	$.ajax({
        url: base_url + "/app/ajax/guestSearchRestriction.php",
        cache: false,   
        type: 'GET', 
        async:false,
        success: function(response){
         	if(response == "open"){
         		$('#guestSearchRestrictionModal').modal('show');
         		status = false;
         	}
        },
        error: function(error){
          alert('Something went wrong !');
          status = false;
        }
      });
	if (status){
		$('form#job_search_form').submit();
	}
}

function getSignInModal(){
	$('.modal').modal('hide');
	$('#login_modal').modal({
		show : true,
		keyboard: false
	});
}

function postSignInModal(formData){
	$.ajax({
       url: base_url + "/app/ajax/login.php",
       cache: false,   
       type: 'POST', 
       data: formData,
       success: function(response){
       		$data = JSON.parse(response);
       		if($data['error']){
       			$.each($data['error'],function(key, val){
       				$('#'+key).text(val);
       			});
       		}
       		if($data['msg']){
       			alert($data['msg']);
       		}

       		if($data['reload_location']){
       			window.location.href = $data['reload_location'];
       		}

       		return false;
       		
       },
       error: function(error){
         alert('Something went wrong');
       }
 	});
}

function getSignUpModal(){
	$('.modal').modal('hide');
	$('#sign_up_modal').modal('show');
}

function postSignUp(formData){
	$.ajax({
       url: base_url + "/app/ajax/registration.php",
       cache: false,   
       type: 'POST', 
       data: formData,
       success: function(response){
       		$data = JSON.parse(response);
       		if($data['error']){
       			$.each($data['error'],function(key, val){
       				$('#'+key).text(val);
       			});
       		}
       		if($data['msg']){
       			alert($data['msg']);
       		}

       		if($data['reload_location']){
       			location.reload();
       		}

       		return false;
       		
       },
       error: function(error){
         alert('Something went wrong');
       }
 	});
}

function postForgotPassword(formData){
	$.ajax({
       url: base_url + "/app/ajax/forgot-password.php",
       cache: false,   
       type: 'POST', 
       data: formData,
       success: function(response){
       		$data = JSON.parse(response);
       		if($data['error']){
       			$.each($data['error'],function(key, val){
       				$('#'+key).text(val);
       			});
       		}
       		if($data['msg']){
       			alert($data['msg']);
       		}

       		if($data['hide_form']){
       			$('#forgot_password_form').hide();
       		}

       		return false;
       		
       },
       error: function(error){
         alert('Something went wrong');
       }
 	});
}

function getSaveJobHtml(element){
	$this = $(element);
	var html = '<div class="card m-2 parent-closer">';
	html += '<div class="card-header">';
	  html += '<div class="row">';
	  	html += '<div class="col-sm-6">';
	  		html += '<i class="fa fa-star text-secondary"></i>&nbsp;&nbsp; <span class="card-title">Save this job</span>';
	  	html += '</div>';
	  	html += '<div class="col-sm-6">';
	  		html += '<button type="button" class="close this-close">';
			  html +=   '<span aria-hidden="true">&times;</span>';
		  	html += '</button>';
	  	html += '</div>';
	  html += '</div>';
  	html += '</div>';
	html += '<div class="card-body">';
	  	html += '<form action="javascript:void(0)" method="post" id="save_job_form">';
	  		html += '<input type="hidden" name="job_url" value="'+$this.data('url')+'">';
	  		html += '<p class="mb-0">Save your dream jobs and access them again easily!</p>';
	  		html += '<div class="row">';
	  			html += '<div class="col-sm-10">';
	  			html += 	'<input type="email" name="my_email" class="form-control" placeholder="Your email">';
	  			html +=      '<span class="text-danger" id="my_email_error"></span>';
	  			html += '</div>';
	  			html += '<div class="col-sm-2">';
	  			html += 	'<button type="button" onclick="postSavejob(this)" class="btn btn-sm btn-warning text-white">Save</button>';
	  			html += '</div>';
	  		html += '</div>';
	  	html += '</form>';
 html +=  '</div>';
	html += '</div>';

	$this.closest('.parent-container').find('.extra-work-with-job').html(html);
	return false;
}

function postSavejob(element){
	$this = $(element);
	var formData = $this.closest('.extra-work-with-job').find('form#save_job_form').serializeArray();
	$.ajax({
       url: base_url + "/app/ajax/save-job.php",
       cache: false,   
       type: 'POST', 
       data: formData,
       success: function(response){
       		$data = JSON.parse(response);
       		if($data['error']){
       			$.each($data['error'],function(key, val){
       				$this.closest('.extra-work-with-job').find('#'+key).text(val);
       			});
       		}
       		if($data['msg']){
       			alert($data['msg']);
       		}

       		if($data['hide_form']){
       			$this.closest('.extra-work-with-job').find('button.this-close').trigger('click');w
       		}

       		return false;
       		
       },
       error: function(error){
         alert('Something went wrong');
       }
 	});
	return false;
}

function getShareToFriendHtml(element){
	$this = $(element);
	var job_url = $this.data('url');
	var job_id = getstringBetweenTwoString(job_url);
	var description = '';
	description += $this.closest('.parent-container').find('.job-title > a').text()+'\n';
	description += job_url;

	var htm = '';
	htm += '<div class="card  m-2 parent-closer">';
		htm += '<div class="card-header">';
		  htm += '<div class="row">';
		  	htm += '<div class="col-sm-6">';
		  		htm += '<i class="fa fa-share text-secondary"></i>&nbsp;&nbsp; <span class="card-title">Send to a friend</span>';
		  	htm += '</div>';
		  	htm += '<div class="col-sm-6">';
		  		htm += '<button type="button" class="close this-close">';
				    htm += '<span aria-hidden="true">&times;</span>';
			  	htm += '</button>';
		  	htm += '</div>';
		  htm += '</div>';
	  	htm += '</div>';
		htm += '<div class="card-body">';
		  	htm += '<form action="javascript:void(0)" method="post" id="share_to_friend_form">';
		  		htm += '<input type="hidden" name="job_url" value="'+job_url+'">';
		  		htm += '<div class="row">';
		  			htm += '<div class="col-sm-6">';
		  				htm += '<input type="email" name="friend_email" class="form-control mb-2" placeholder="Your friend\'s email">';
		  				htm += '<span class="text-danger" id="friend_email_error"></span>';
		  			htm += '</div>';
		  			htm += '<div class="col-sm-6">';
		  				htm += '<input type="text" name="your_name" class="form-control mb-2" placeholder="You full name">';
		  				htm += '<span class="text-danger" id="your_name_error"></span>';
		  			htm += '</div>';
		  		htm += '</div>';
		  		htm += '<div class="row">';
		  			htm += '<div class="col-sm-12">';
		  				htm += '<textarea rows="5" class="form-control mb-2" name="description" placeholder="Description">'+description+'</textarea>';
		  			htm += '</div>';
		  		htm += '</div>';
		  		htm += '<div class="row">';
		  			htm += '<div class="col-sm-10">';
		  				htm += '<div class="d-flex share-with" style="align-items: baseline;">share with &nbsp;: &nbsp;';
		  					htm += '<a target="_blank" href="https://www.careerjet.co.in/share/social_network.html?atag=share;job;facebookcom&job_id='+job_id+'&type=facebookcom" style="color:#3061a0"><i class="fa fa-facebook"></i></a>&nbsp;';
		  					htm += '<a target="_blank" href="https://www.careerjet.co.in/share/social_network.html?atag=share;job;linkedincom&job_id='+job_id+'&type=linkedincom" style="color:#2366b6"><i class="fa fa-linkedin"></i></a>&nbsp;';
		  					htm += '<a target="_blank" href="https://www.careerjet.co.in/share/social_network.html?atag=share;job;twittercom&job_id='+job_id+'&type=twittercom" style="color:#2db3ee"><i class="fa fa-twitter"></i></a>';
		  					htm += '</div>';
		  			htm += '</div>';
		  			htm += '<div class="col-sm-2">';
		  				htm += '<button type="button" class="btn btn-sm btn-warning text-white pull-right" onclick="postShareToFriendJob(this)">Send</button>';
		  			htm += '</div>';
		  		htm += '</div>';
		  	htm += '</form>';
	  htm += '</div>';
	htm += '</div>';

	$this.closest('.parent-container').find('.extra-work-with-job').html(htm);
	return false;
}

function postShareToFriendJob(element){
	$this = $(element);
	var formData = $this.closest('.extra-work-with-job').find('form#share_to_friend_form').serializeArray();
	$.ajax({
       url: base_url + "/app/ajax/share-to-friend-job.php",
       cache: false,   
       type: 'POST', 
       data: formData,
       success: function(response){
       		$data = JSON.parse(response);
       		if($data['error']){
       			$.each($data['error'],function(key, val){
       				$this.closest('.extra-work-with-job').find('#'+key).text(val);
       			});
       		}
       		if($data['msg']){
       			alert($data['msg']);
       		}

       		if($data['hide_form']){
       			$this.closest('.extra-work-with-job').html('button.this-close').trigger('click');
       		}

       		return false;
       		
       },
       error: function(error){
         alert('Something went wrong');
       }
 	});
	return false;
}