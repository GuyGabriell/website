<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP-4-Beginners</title>

  <style>

    body {

    display: grid;
    place-items: center;
    min-height: 100vh;
    margin: 0;
    font-family: sans-serif;

    }

  </style>

</head>
<body>

    <?php 

        $name = "Dark Matter";
        $read = true;
       

        if ($read) {
          $message = "You have read $name.";
        } else {
          $message = "You haven't read $name yet.";
      }

       

    ?>
  
   
    <h1>

     <?=$message; ?>

    </h1>


   

</body>
</html>