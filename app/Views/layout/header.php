<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css">
    
</head>

<body>
    <?php if (session()->get('LoggedIn')) : ?>
        <ul>
            <li><a href="/profile2">Profile</a></li>
            <li><a href="/user_data">Users</a></li>
            <li><a href="/logout">Logout</a></li>
            
        </ul>
        

    <?php else : ?>
        <ul>
        <li><a class ='active' href="/login">Login</a></li>
        <li><a href="/register">Register</a></li>
        </ul>     
    <?php endif; ?>

    <?= $this->rendersection("profile") ?>
    <?= $this->rendersection("profile2") ?>
    <?= $this->rendersection("user_data") ?>
    <?= $this->rendersection("chat") ?>
    <?= $this->rendersection("content") ?>
    <?= $this->rendersection("register") ?>


</body>

</html>