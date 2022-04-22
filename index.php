<?php session_start();
include 'php/functions/function.inc.php';
if (empty($_SESSION['code']) || time() - $_SESSION['code_time'] > 3600)
    //if there's no code, or the code has expired
    regenerate();

echo "Your code is " . $_SESSION['code'] . " it was generated on " . date('m/d/Y h:i:s a', $_SESSION['code_time']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <!-- Jquery -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <title>Welkom</title>
</head>

<body>
  <header class="navbar"></header>

    <div class=" p-1 container bg-green">
   
    <form id="form" action="">
      <div class="mb-3">
        <label for="" class="form-label">typ iets in</label>
        <input type="text" name="" class="form-control">
      </div>
      
    </form>
    </div>

<!-- Scripts -->    
<script src="js/chat.js"></script>
</body>
</html>