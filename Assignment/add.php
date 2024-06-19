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

  <div class="container my-5">
      <div class="row">
        <div class="col-md-6">
          <form action="inc/addYogaClass.php" method="POST">
            <div class="mb-3">
              <label for="ClassName" class="form-label">Class Name</label>
              <input type="text" class="form-control" id="ClassName" aria-describedby="ClassName" placeholder="Class Name Here" name="className">
            </div>
            <div class="mb-3">
              <label for="ClassType" class="form-label">Class Level</label>
              <input type="text" class="form-control" id="ClassType" placeholder="Class Type Here (Primary, Middle, High)" name="classType">
            </div>
            <div class="mb-3">
              <label for="phone" class="form-label">Phone</label>
              <input type="text" class="form-control" id="phone" placeholder="Phone (xxx-xxx-xxxx)" name="phone">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" placeholder="Email (H3P0H@example.com)" name="email">
            </div>
            <button type="submit" class="btn btn-primary">Add Class</button>
          </form>
        </div>
      </div>
  </div>


</body>
</html>