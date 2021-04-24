<!DOCTYPE html>
<html lang='en'>
<head>
    <title>Login and Registration</title>
    <link rel='stylesheet' type='text/css' href='/assets/css/reg.css'>
</head>
<body>

    <div class='wrapper'>
        <form action='log' method='post'>
        <h1>Log In</h1>
<?php   if(!empty($this->session->flashdata('login_error'))){
        echo $this->session->flashdata('login_error');
        }
?>
        <p class='red'>Email: <input type='text' name='email' placeholder='Email'/></p>
        <p>Password: <input type='password' name='password' placeholder='Password' /><br>
        <input type='submit' name-'login' value='Login'/>
        </form>
        <form action='register' method='post'>
        <h1>Register</h1>
<?php   if(!empty($this->session->flashdata('errors'))){?>
        <p class='red'><?= $this->session->flashdata('errors');?></p>
<?php } ?>

        <p>First Name: <input type='text' name='first_name' placeholder='First Name'></p>
        <p>Last Name: <input type='text' name='last_name' placeholder='Last Name'></p>
        <p>Email Address: <input type='text' name='email' placeholder='Email'></p>
        <p>Password: <input type='password' name='password' placeholder='Password'></p>
        <p>Confirm Password: <input type='password' name='password1' placeholder="Confirm Password"></p>
        <input type='submit' name='register' value='Register'/>
        </form>
</body>
</html>