<?php

// Include database file
include 'database.php';

$memberObj = new database();

// Edit member record
if(isset($_GET['editId']) && !empty($_GET['editId'])) {
  $editId = $_GET['editId'];
  $member = $memberObj->displyaRecordById($editId);
}

// Update Record in member table
if(isset($_POST['update'])) {
  $memberObj->updateRecord($_POST);
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
  <h1>Oops wanna change something?</h1>
  <section class="container">

    <div class="row">
      <div class="col-md-5 mx-auto">
        <div class="card">
          <div class="card-header bg-dark text-white">
            <h2>AJ BLOGS</h2>
          </div>

          <div class="card-body bg-light">
            <form action="edit.php" method="POST">
              <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="uname" value="<?php echo $member['name']; ?>" required="">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="uemail" value="<?php echo $member['email']; ?>" required="">
              </div>
              <div class="form-group">
                <label for="bio">Bio:</label>
                <input type="text" class="form-control" name="ubio" value="<?php echo $member['bio']; ?>" required="">
              </div>
              <div class="form-group">
                <input type="hidden" name="id" value="<?php echo $member['id']; ?>">
                <input type="submit" name="update" class="btn btn-primary" style="float:right;" value="Update">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
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
