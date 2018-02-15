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

  <!-- <div class="con mx-auto rounded border border-success p-5 bg-light text-center text-dark">
    <form action="#" class="px-5 mx-5" method="POST">
      <div class="form-group">
        <label for="employeeName">Username</label>
        <input class="border border-success form-control" type="text" name="uname" id="employeeName" placeholder="username" required>
      </div>

      <div class="form-group">
        <label for="Password">Password</label>
        <input type="password" name="pword" id="Password" class="border border-success form-control" required>
      </div>

      <div class="form-check-inline mt-3">
        <input type="radio" name="admin" id="Rank1" class="form-check-input">
        <label class="form-check-label" for="Rank1">Admin</label>
      </div>

      <div class="form-check-inline mt-3">
        <input type="radio" name="admin" id="Rank2" class="form-check-input">
        <label class="form-check-label" for="Rank2">Employee</label>
      </div>

      <br>

      <input type="submit" value="Enter" class="mt-4 btn btn-dark">
    </form>
  </div> -->
 


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
        <?php while ($row = $stmt->fetch()): ?>
                                                                                                 
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