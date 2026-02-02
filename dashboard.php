<?php 
if(!isset($_SESSION['activeUser']))
{
	header('Location:index.php');
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#">Dashboard</a>

    <div>
      <a href="logout.php" class="btn btn-outline-danger btn-sm">Logout</a>
    </div>
  </div>
</nav>


<!-- MAIN CONTAINER -->
<div class="container my-5">

  <!-- Welcome Section -->
  <div class="p-4 mb-4 bg-light rounded shadow-sm">
    <h3>Welcome, <?php echo $_SESSION['activeUser']; ?> 👋</h3>
    <p class="text-muted">This is your dashboard</p>
  </div>


  <!-- CARDS GRID -->
  <div class="row g-4">

    <div class="col-md-4">
      <div class="card h-100 shadow-sm">
        <img src="https://picsum.photos/300?1" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Profile</h5>
          <p class="card-text">Manage your account settings.</p>
          <a href="#" class="btn btn-primary w-100">Open</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card h-100 shadow-sm">
        <img src="https://picsum.photos/300?2" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Reports</h5>
          <p class="card-text">View your reports and activity.</p>
          <a href="#" class="btn btn-success w-100">Open</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card h-100 shadow-sm">
        <img src="https://picsum.photos/300?3" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Settings</h5>
          <p class="card-text">Update preferences.</p>
          <a href="#" class="btn btn-warning w-100">Open</a>
        </div>
      </div>
    </div>

  </div>


  <!-- LOGOUT SECTION -->
  <div class="text-center mt-5">
    <a href="logout.php" class="btn btn-danger px-5">Logout</a>
  </div>

</div>

    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>