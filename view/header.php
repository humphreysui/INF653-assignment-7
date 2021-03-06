<!DOCTYPE html>
<html lang="en">

<!--the head section --> 
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
      
  <title>Zippy Used Autos</title> 
  <link rel="stylesheet" type="text/css" href="css/styles.css"> 
  
</head>

<!--the body section --> 
<body> 
    <!-- register link -->
    <section class="container right-align">
      <div >
        <?php if($action != 'register' && !isset($_SESSION['userid'])){ ?>
          <p><a class="black-text" href="?action=register">Register</a></p>
        <?php }else if (isset($_SESSION['userid']) && ($action != 'register' || $action !='logout')){ ?>
          <p>Welcome <?php echo $_SESSION['userid'] ?> ! ( <a href="?action=logout">Sign Out</a> )</p>
        <?php } ?>
      </div>
    </section>
 
  <header class="container row">
    <h1 class="col l10 offset-l1 s12 center-align">Zippy Used Autos</h1> 
  </header>
  <main class="container">
