<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Yoga Studio</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <?php include 'reusable/nav.php'; ?>

  <div class="container-fluid bg-light py-5">
    <div class="container text-center">
      <div class="row">
        <div class="col">
          <h1 class="display-3 text-dark">Yoga Classes</h1>
        </div>
      </div>
    </div>
  </div>
  
  <?php 
      include('./reusable/con.php');
      $query = 'SELECT * FROM classess ORDER BY `Class Name`';  
      $classess = mysqli_query($connect, $query);
  ?>

  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <?php
          foreach($classess as $class){
            echo '<div class="col-md-4 mt-2 mb-2">
                    <div class="card ' . $class['id'] . '">
                      <div class="card-body">
                        <h5 class="card-title">' . $class['Class Name'] . '</h5>
                        <p class="card-text">' . $class['Class Level'] . '</p>
                        <span class="badge bg-secondary">' . $class['Phone'] . '</span>
                        <span class="badge bg-info">' . $class['Email'] . '</span>
                      </div>
                      <div class="card-footer">
                        <div class="row">
                          <div class="col">
                            <form action="./inc/updateYogaClass.php" method="post">
                              <input type="hidden" name="id" value="' . $class['id'] . '">
                              <input type="hidden" name="className" value="' . $class['Class Name'] . '">
                              <input type="hidden" name="classType" value="' . $class['Class Level'] . '">
                              <input type="hidden" name="phone" value="' . $class['Phone'] . '">
                              <input type="hidden" name="email" value="' . $class['Email'] . '">
                              <button type="submit" class="btn btn-sm btn-primary">Update</button>
                            </form>
                          </div>
                          <div class="col">
                            <form action="./inc/deleteYogaClass.php" method="get" name="deleteClassForm">
                              <input type="hidden" name="id" value="' . $class['id'] . '">
                              <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>';  
          }
        ?>
      </div>
    </div>
  </div>


</body>
</html>