<?php
session_start();

include "../classes/user.php";

$user = new User;
$user_row = $user->getUser($_GET['user_id']);
// $user_row = $user->getUser(3);
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Edit User</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
      <?php include "main-menu.php"; ?>
      <main class="container" style="padding-top: 80px">
        <div class="card w-50 mx-auto border-0">
            <div class="card-header bg-white border-0">
                <h2 class="text-center">EDIT USER</h2>
            </div>
            <div class="card-body">
                <form action="../actions/edit-user.php" method="post">
                    <input type="hidden" name="user_id" value="<?=$user_row['user_id']?>">

                    <label for="first-name">First Name</label>
                    <input type="text" name="first_name" id="first-name" class="form-control mb-2" value="<?=$user_row['first_name']?>" required autofocus>

                    <label for="last-name">Last Name</label>
                    <input type="text" name="last_name" id="last-name" class="form-control mb-2" value="<?=$user_row['last_name']?>" required>

                    <label for="username" class="fw-bold">Username</label>
                    <input type="text" name="username" id="username" class="form-control mb-5 fw-bold" maxlength="15" value="<?=$user_row['username']?>" required>

                    <div class="text-end">
                        <button type="submit" class="btn btn-warning btn-sm px-5">Save</button>
                        <a href="dashboard.php" class="btn btn-secondary btn-sm">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
      
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>