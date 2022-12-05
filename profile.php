<?php
include 'database.php';
$memberObj = new database();
if(isset($_POST['submit'])) {
  $memberObj->insertData($_POST);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Assignment 3</title>
  <meta name="description" content="Assignment 3">
  <meta name="robots" content="noindex, nofollow">
  <!--  Add our Google fonts  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Roboto:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
  <!--  Add our Bootstrap  -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" >
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!--  Add our custom CSS  -->
  <link rel="stylesheet" href="style.css">

</head>
<body>
  <header>
    <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="profile.php">
      <img src= "Ajlogo.png" height="100px" width="200px" class="d-inline-block align-top" alt="ourlogo">
    </a>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="profile.php">Home</a>
    <a class="navbar-brand" href="#">Git Hub</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    </div>
  </nav>
  </header>
  <br>
      <h1>Welcome to AJ blogs</h1>

  <section class="container">
    <div class="row">
      <div class="col-md-5 mx-auto">
        <div class="card">
          <div class="card-header bg-dark text-white">
            <h2>AJ BLOGS</h2>
          </div>
          <div class="card-body bg-light">
            <form action="profile.php" method="POST">
              <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" placeholder="Enter name" required="">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Enter email" required="">
              </div>
              <div class="form-group">
                <label for="bio">Bio:</label>
                <input type="text" class="form-control" name="bio" placeholder="Tell us something about yourself" required="">
              </div>
              <input type="submit" name="submit" class="btn btn-primary" style="float:right;" value="Submit">
              <a href="profile.php" style="float:right;"><button class="btn btn-success">Add more profiles</button></a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <main class="container">
    <?php
      if (isset($_GET['msg1']) == "insert") {
      echo "<div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>×</button>
              Your Registration added successfully
            </div>";
      }
      if (isset($_GET['msg2']) == "update") {
        echo "<div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>×</button>
              Your Registration updated successfully
            </div>";
      }
      if (isset($_GET['msg3']) == "delete") {
       echo "<div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>×</button>
              Record deleted successfully
            </div>";
      }
    ?>

</main>
  <section>
    <h2>View Your Profile

    </h2>
    <table class="table table-hover">
      <thead>
      <tr>

        <th>Name</th>
        <th>Email</th>
        <th>Bio</th>
        <th>Action</th>
      </tr>
      </thead>
      <tbody>
      <?php
      $members = $memberObj->displayData();
      foreach ($members as $member) {
        ?>
        <tr>

          <td><?php echo $member['name'] ?></td>
          <td><?php echo $member['email'] ?></td>
          <td><?php echo $member['bio'] ?></td>
          <td>
            <button class="btn btn-primary mr-2"><a href="edit.php?editId=<?php echo $member['id'] ?>">
                <p>Edit</p></a></button>
            <button class="btn btn-danger"><a href="profile.php?deleteId=<?php echo $member['id'] ?>" onclick="confirm('Are you sure want to delete this record')">
                <p>Delete</p></i>
              </a></button>
          </td>
        </tr>
      <?php } ?>
      </tbody>
    </table>
  </section>

  <footer class="bg-dark text-center text-white">
    <div class="container p-4 pb-0">
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2022 Copyright:
      <a class="text-white" href="profile.php">AJ</a>
    </div>
  </div>
    <!-- Copyright -->
  </footer>
</body>
</html>
