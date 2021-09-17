<!doctype html>
<html lang="en">
  <head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body class="bg-light">
  <div style="height: 100vh">
            <div class="row h-100 m-0">
                <div class="card w-25 mx-auto my-auto">
                    <div class="card-header bg-transparent border-0">
                        <h1 class="text-center">LOGIN</h1>
                    </div>
                    <div class="card-body">
                        <form action="../actions/login.php" method="post">
                            <input type="text" name="username" placeholder="USERNAME" class="form-control mb-2" required autofocus>
                            <input type="password" name="password" placeholder="PASSWORD" class="form-control mb-5">

                            <button type="submit" class="btn btn-primary w-100">Log IN</button>
                        </form>    
                            <p class="text-center mt-3 small" > <a href="register.php">Create Account</a></p>             
                    </div>
                </div>
            </div>
        </div>

      
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>