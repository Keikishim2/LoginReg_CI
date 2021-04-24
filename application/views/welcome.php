<!DOCTYPE html>
<html lang='en'>
<head>
    <title>WELCOME!</title>
    <link rel='stylesheet' type='text/css' href='/assets/css/reg.css'>
</head>
<body>

    <h1>Welcome <?= $user['first_name']; ?>!</h1>
    <a href='logout'>Log Out</a>
    <div class='wrapper'>
        <p>First Name: <?= $user['first_name']; ?></p>
        <p>last Name: <?= $user['last_name']; ?></p>
        <p>Email Address: <?= $user['email']; ?></p>
    </div>

</body>
</html>