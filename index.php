<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dispaly data from DB</title>
<link rel="stylesheet" href="style.css">

</head>
<body>
  <?php require_once('app.php') ?>

  <div id="info1">
    <form action="" method="POST">
     <select name="filter">
       <option value="All">ALL</option>
       <option value="F">Female</option>
       <option value="M">Male</option>

     </select>
     
     <input type="submit" name="action"/>
    </form>
   </div>


</body>
</html>
