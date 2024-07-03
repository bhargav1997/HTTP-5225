<?php
    include('./reusable/con.php');
    include('./inc/functions.php');

    if(isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $hashPassword  = md5($password);
        $sql = 'SELECT * FROM users WHERE email = "' . $email . '" AND password = "' . $hashPassword . '" LIMIT 1';


        $result = mysqli_query($connect, $sql);
        
        if(mysqli_num_rows($result)) {
            $user = mysqli_fetch_assoc($result);
            $_SESSION['id'] = $user['id'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['name'] = $user['name'];

            set_messages('Login Successful', 'success');
            header('Location: index.php');
        } else {
          set_messages('Login Failed', 'danger');
          header('Location: ./login.php');
          die();
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ontario Public Schools</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <h3 class="mt-5 mb-5">Login</h3>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <?php get_messages(); ?>
          </div>
      </div>
      <div class="row">
        <div class="col-md-4 offset-md-4 mt-5">
          <form method="POST" action="./login.php">
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control" name="email" id="email">
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" name="password" id="password">
            </div>
            <button type="submit" class="btn btn-primary" name="login">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>