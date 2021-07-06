<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>KGEC | Change Password</title>

    <script src="js/jquery.min.js"></script>
    <script src="js/script.js"></script>

    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" href="KgecLogo.png" type="image"><link rel="stylesheet" href="css/style3.css">


</head>
    <body style="background: url(cp.jpg);background-size: cover;">
    <div class="loginbox" style="width: 380px; height : 560px;">
    <img src="KgecLogo.png" class="avatar">
        <h1>Change Password</h1>
        <div id="my_msg" style="color: red; font-weight: bold; "></div>
        <form method="post" id="pwd" >
            <p>Username</p>
            <input type="text" id="username" name="username" placeholder="Enter Username"/>
            <p>Current Password</p>
            <input type="password" id="cpassword" name="cpassword" placeholder="Enter current password"/>
            <p>New Password</p>
            <input type="password" id="npassword" name="npassword" placeholder="Enter new password"/>
            <p>Confirm Password</p>
            <input type="password" id="rnpassword" name="rnpassword" placeholder="ReEnter password"/>
            <input type="button" value="Change Password" onclick="change()">
            <a href="login.php">Go Back </a>
        </form>   
        
</div>

    <script>
    function change()
    {
        var cpassword=$("#cpassword").val();
        var npassword=$("#npassword").val();
        var rnpassword=$("#rnpassword").val();
        var username=$("#username").val();

 $.ajax({
            url :'cng_pwd.php', //Which server-side page to move on
            type:'POST',    //Enycrption methodlogy
            data :{
            'username' : username,   
            'cpassword' : cpassword,
            'npassword' : npassword,
            'rnpassword' : rnpassword
            },
            dataType:'html',
            success  :function(data)
            {
                $('#my_msg').html(data);
                $('#pwd')[0].reset();
        	}
    	});
    }
    </script>
    </body>
</html>