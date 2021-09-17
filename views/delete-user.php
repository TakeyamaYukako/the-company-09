<?php
session_start();

include "../classes/user.php";

$user = new User;
$user_row = $user->getUser($_GET['user_id']);

$full_name=$user_row['first_name'] ." ". $user_row['last_name'];
//$full_name = "John". " ". "Smith";
?>

!<!doctype html>
<html lang="en">
  <head>
    <title>Delete User</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  </head>
  <body>
      <?php include "main-menu.php"?>

      <main class="container" style="padding-top:80">
      <div class="card w-25 mx-auto border-0">
          <div class="bg-white border-0 card-header">
              <h2 class="text-center text-danger">DELETE USER</h2>
          </div>
          <div class="card-body">
              <div class="text-center mb-4">
                  <i class="fas fa-exclamation-triangle text-warning display-4 d-block mb-2"></i>
                  <p class="fw-bold mb-0">Are you sure you want to delete "<?=$full_name?>?</p>
              </div>
              <div class="row">
                  <div class="col">
                      <a href="dashboard.php" class="btn btn-secondary w-100">Cancel</a>
                  </div>
                  <div class="col">
                      <a href="../actions/delete-user.php?user_id=<?=$_GET['user_id']?>" class="btn btn-outline-danger w-100">Delete</a>
                  </div>
              </div>
          </div>
      </div>
    </main>

      
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>