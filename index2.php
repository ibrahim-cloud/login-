
<?php include ('server.php');
// session_start();
// if ( isset($_SESSION ['Adminname'])){
// echo "none"
// }

 ?> 

<!-- :::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
      <li><a href="#">Page 2</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php  echo $_SESSION['Adminname']; ?>  </a></li>
      <li><a href ="index.php?logout='1'"><span class="glyphicon glyphicon-log-in"></span> logout</a></li>
    </ul>
  </div>
</nav>
  
<!-- <div class="container">
  <h3>Right Aligned Navbar</h3>
  <p>The .navbar-right class is used to right-align navigation bar buttons.</p>
</div> -->


<!-- <div class="content1">
    <php if (isset ($_SESSION['success'])): ?>
        <div class="error success">
            <h3>
                <php 
                echo $_SESSION['success'];
                unset($_SESSION['success']);
                ?>
                </h3>
                </div>
                <php endif ?>
                
                <php  if (isset ($_SESSION["username"])): ?>
                    <p> welcome <strong> <php echo $_SESSION['username']; ?> </strong> </p>
                    <p> <a href ="index.php?logout='1'" style="color:red;">logout </a> </p>
                    <php endif ?>
                </div>
                <div> <h1> welcome admin </h2> </div> -->

</body>
</html>