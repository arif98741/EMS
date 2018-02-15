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




<!-- How can i output all the rows here ??  -->
        <?php while($row = $results): ?>
                                                                                                 
            <tr>
                <td><?= $row[0]; ?></td>
                <td><?= $row[1]; ?></td>
                <td><?= $row[2]; ?></td>
                <td><?= $row[3]; ?></td>
                <td><?= $row[4]; ?></td>
                <td><?= $row[5]; ?></td>
                <td><?= $row[6]; ?></td>
            </tr>

        <?php endwhile; ?>

    </table>
  </div>

    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
</body>

</html>