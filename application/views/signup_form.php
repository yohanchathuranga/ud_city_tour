<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>UD TOURS- Login</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?=base_url()?>assets/css/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?=base_url()?>assets/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
	<link href="<?=base_url()?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
    <title>Sign up</title>
</head>
<body>
<center>
        <form action="<?php echo base_url()?>index.php/welcome/verify_email" method="post">
            <input type="text" placeholder=" Username" id="username" name="username" required >
            <input type="password" placeholder="   Password" id="password" name="password" required>
            <input type="submit" name="blank_order" id="blank_order" value="Continue" class="btn btn-primary">
        </form>
</center>
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