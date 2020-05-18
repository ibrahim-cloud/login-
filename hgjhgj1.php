<?php 
include('server.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="header">
    <h2>login</h2>
</div>

<form method="POST" action="login.php">
<?php include ('errors.php'); ?>
<div class="input-group">
    <label>username</label>
    <input type="text" name="username">
</div>
<div class="input-group">
    <label>password</label>
    <input type="text" name="password">
</div>

<div class="input-group">
  
    <button type="submit" name="login" class="btn">login</button>
</div>
<p>
    not y amember ? <a href="register.php">sign up</a>
</p>
</form>

</body>
</html>
////////////////////////////////////////////register////////////
<?php 
include('server.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="header">
    <h2>register</h2>
</div>

<form method="POST" action="register.php">
    <?php include ('errors.php'); ?>
<div class="input-group">
    <label>username</label>
    <input type="text" name="username" value="<?php echo $username; ?>">
</div>
<div class="input-group">
    <label>Email</label>
    <input type="text" name="email"  value="<?php echo $username; ?>">
</div>
<div class="input-group">
    <label>password</label>
    <input type="text" name="password_1">
</div>
<div class="input-group">
    <label>confirmation password</label>
    <input type="text" name="password_2">
</div>
<div class="input-group">

    <button type="submit" name="register" class="btn">register</button>
</div>
<p>
    already a member ? <a href="login.php">sign in</a>
</p>
</form>

</body>
</html>
/////////////////////////////admin////////////////////////////////////////
<?php include ('server.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="header">
    <h2>login Admin</h2>
</div>

<form method="POST" action="admin.php">
<?php include ('errors.php'); ?>
<div class="input-group">
    <label>AdminName</label>
    <input type="text" name="Adminname"  >
</div>
<div class="input-group">
    <label>password</label>
    <input type="text" name="passwordAdmin"     >
</div>

<div class="input-group">
  
    <button type="submit" name="admin" class="btn">login Admin</button>
</div>
<p>
    not y amember ? <a href="register.php">sign up User</a>
</p>
</form>

</body>
</html>