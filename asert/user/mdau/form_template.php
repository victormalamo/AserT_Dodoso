<!DOCTYPE html>
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<link rel="stylesheet" type="text/css" href="/css/resp_form.css">

<script src="jquery.min.js"></script>
<script src="bootstrap.min.js"></script>
<link rel="stylesheet" href="/bootstrap/dist/css/bootstrap.min.css" />
<script src="bootstrapvalidator.min.js"></script>

<script src="modernizr.min.js" type="text/javascript"></script>

<link rel="stylesheet" type="text/css" href="/css/mnrt-resp-main.css">


<link rel="stylesheet" type="text/css" href="/css/w3.css">

<style>
#success_message{ display: none;}
</style>
</head>

<body>


<div class="container w3-light-green" style="max-width:600px">

<form action=" " method="post"  id="contact_form">
<!--form class="well form-horizontal" action=" " method="post"  id="contact_form"-->

<!-- Form Name -->
<legend><center><h2><b>Registration Form</b></h2></center></legend><br>

<!-- Text input-->


	<div class="w3-row form-group w3-red">
	
	<div class="w3-col mrstd s12 margin-bottom-15">
	    <div class="input-group" style="width:100%"> 
          <div class="input-group-addon" style="padding:0px 10px 0px 14px"> <i class="glyphicon glyphicon-user"></i> 
          </div>
          <input  name="first_name" placeholder="First Name" class="form-control"  type="text">
        </div>
	</div>
	
	<div class="w3-col mrstd s12 pull-right">
	<div class="input-group pull-right-600" style="width:100%">
	<div class="input-group-addon" style="padding:0px 10px 0px 14px">
	Gender
	</div>
	<select name="department" class="form-control selectpicker">
      <option value="">Select Gender</option>
      <option>Male</option>
      <option>Female</option>
    </select>
	</div>
	</div>
	
	</div>
	
	
	<div class="w3-row form-group w3-red">
	
		
	<div class="w3-col mrstd s12 margin-bottom-15">
	    <div class="input-group" style="width:100%"> 
          <div class="input-group-addon" style="padding:0px 10px 0px 14px"> <i class="glyphicon glyphicon-envelope"></i> 
          </div>
          <input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
        </div>
	</div>	

	<div class="w3-col mrstd s12 pull-right">
	<div class="input-group pull-right-600" style="width:100%">
	<div class="input-group-addon" style="padding:0px 10px 0px 14px">
	<i class="glyphicon glyphicon-earphone"></i>
	</div>
	<input name="phone" placeholder="(845)" class="form-control" type="text">
	</div>
	</div>
	
	
	</div>
	
	
	<div class="w3-row form-group w3-red">
	
		
	<div class="w3-col s12 margin-bottom-15  w3-yellow">
	<div class="input-group w3-white" style="width:100%">
	<div class="input-group-addon" style="padding:0px 10px 0px 14px">
	<i class="glyphicon glyphicon-pencil"></i>
	</div>
	<textarea class="form-control" name="comment" placeholder="Project Description" maxlength="6000" rows="4"></textarea>
	</div>
	</div>
	
	
	</div>


<!-- Select Basic -->

<!-- Success message -->
<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
      <div class="col-md-4"><br>
        <button type="submit" class="btn btn-warning" >SUBMIT <span class="glyphicon glyphicon-send"></span></button>
      </div>
</div>


</form>
</div><!-- /.container -->
<script>

$(document).ready(function() {
    $('#contact_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            first_name: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: 'Please enter your First Name'
                    }
                }
            },
             last_name: {
                validators: {
                     stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: 'Please enter your Last Name'
                    }
                }
            },
			 user_name: {
                validators: {
                     stringLength: {
                        min: 8,
                    },
                    notEmpty: {
                        message: 'Please enter your Username'
                    }
                }
            },
			 user_password: {
                validators: {
                     stringLength: {
                        min: 8,
                    },
                    notEmpty: {
                        message: 'Please enter your Password'
                    }
                }
            },
			confirm_password: {
                validators: {
                     stringLength: {
                        min: 8,
                    },
                    notEmpty: {
                        message: 'Please confirm your Password'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'Please enter your Email Address'
                    },
                    emailAddress: {
                        message: 'Please enter a valid Email Address'
                    }
                }
            },
            phone: {
                validators: {
                  stringLength: {
                        min: 12, 
                        max: 12,
                    notEmpty: {
                        message: 'Please enter your phone No.'
                     }
                }
            },
			 department: {
                validators: {
                    notEmpty: {
                        message: 'Please select your Department/Office'
                    }
                }
            },
                }
            }
        })
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#contact_form').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });
});
</script>

</body>
</html>
