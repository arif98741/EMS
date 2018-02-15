<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <title>E.M.S</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,800">
    <link rel='stylesheet' href="./assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <link rel="stylesheet" href="./assets/css/styles.css">

  <!-- <style>
  .con{
    width: 40%;
  } -->
  </style>

</head>

<body>

  <div class="container py-5 text-center">
    <table class="table table-dark">



        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Mail</th>
            <th>Username</th>
            <th>Password</th>
            <th>Status</th>
        </tr>

        <?php foreach ($results as $r){ 
         // you need to use foreach loop for getting exact size of the array
        //you can't use echo for printing array as you   got array from db
        //always try to use print_r or var_dump function to see what you are getting from db.

         ?>
            <tr>
               <?php foreach ($r as $value) { ?>

                    <?php echo "<td>".$value."</td>"; ?>

                <?php   } ?>
              
           </tr>
        <?php } ?>

    </table>
  </div>

    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
</body>

</html>
