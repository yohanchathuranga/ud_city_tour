<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>UD TOURS- Login</title>


        <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?=base_url()?>assets/css/metisMenu.min.css" rel="stylesheet">
        <link href="<?=base_url()?>assets/css/sb-admin-2.css" rel="stylesheet">
        <link href="<?=base_url()?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	


</head>

<body>
<form action="<?php echo base_url()?>index.php/welcome/add_user" class="col-lg-6" method="post" >
<div>
        <label>Name</label> &nbsp;&nbsp;
        <label class="error" id="error_name"> field is required.</label>
        <label class="error" id="error_name2"> name must be alphanumeric.</label>
        <input class="form-control" id="name" placeholder="Name" name="name" type="text" required>
</div>
<div>
        <label>Email</label> &nbsp;&nbsp;
        <label class="error" id="error_email"> field is required.</label>
        <label class="error" id="error_email2"> email has already exist.</label>
        <label class="error" id="error_email3"> invalid email adress.</label>
        <input class="form-control" id="email" placeholder="E-mail" name="email" type="email" required>
</div>
<div>
        <label>Role</label>&nbsp;&nbsp;
        <label class="error" id="error_role"> field is required.</label><br>
        <input type="radio" name="role" value="admin"> Admin<br>
        <input type="radio" name="role" value="user" checked>User<br>
        </select> 
</div>
<div>
        <button type="button" class="btn btn-default" >CANCEL</button>
        <input id="login-submit" type="submit" value="Create Account" class="btn btn-success ">
</div>

</form>

 

        <!-- <?php $this->load->view('frame/footer_view')?> -->
        <script src="<?=base_url()?>assets/js/view/user_list.js"></script>


    <!-- jQuery -->
    <script src="<?=base_url()?>assets/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?=base_url()?>assets/js/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?=base_url()?>assets/js/sb-admin-2.js"></script>

    <script>
    	window.onload = hideLoginErrors();
    	function hideLoginErrors(){
    		$("#login-empty-input").hide();
    	}

		function checkEmptyInput(){
			hideLoginErrors();
			$("#login-invalid-input").hide();
			if( $("#email").val() == '' || $("#password").val() == '' ){
				$("#login-empty-input").show();
				return false;
			}
		}
	</script>

</body>

</html>
