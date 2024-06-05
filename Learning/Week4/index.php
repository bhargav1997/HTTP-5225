<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color Codes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
        <div class="p-3 mb-2 bg-primary text-white">
            <h2 class="text-center">Color Codes</h2>
        </div>
    <div class="row">
    <?php

      $connect = mysqli_connect('localhost', 'root', 'root', 'HTTP5225');

      if (!$connect) {
        echo 'Connection Failed'. mysqli_connect_error();
        exit;
      }

      //echo 'Connection Successful';

      $query = 'SELECT `Name`, `Hex` FROM colors';

      $result = mysqli_query($connect, $query);

      if (!$result) {
        echo 'Query Failed'. mysqli_error($connect);
        exit;
      }

    //   echo 'Number Of Rows: '. mysqli_num_rows($result);    

    foreach($result as $row) {
        // echo $row['Name'] . ' - ' . $row['Hex'] . '<br>';
        echo '<div class="col-md-4 p-3">
                <div class="card my-3">
                    <div class="card-header">
                        <h5 class="card-title text-center font-weight-bold">'. $row['Name'] . ' </h5>
                    </div>
                    <div style="background-color:'. $row['Hex'] .';" class="card-body">
                        <p class="card-text font-weight-bold">'. $row['Hex'] . '</p>
                    </div>
                </div>
            </div>';
        }


      mysqli_close($connect);
    ?>
    </div>
    </div>
</body>
</html>