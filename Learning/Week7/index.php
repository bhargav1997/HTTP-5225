<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 7</title>
</head>
<body>
  
    <?php 
        include('./reusable/con.php'); 

        $query = 'SELECT * FROM users;';  
        $users = mysqli_query($connect, $query);
    ?>

    <?php 
        if(!empty($users)) {
            foreach ($users as $user) {
                echo '<div class="col-md-4 p-3">
                    <div class="card my-3" style="">
                    <img class="card-img-top" src="https://via.placeholder.com/150" alt="Card image cap">

                        <div class="card-header">
                         <h5 class="card-title">'. $user['name'] . ' </h5>
                        </div>
                        <div class="card-body"
                            <p class="card-text">'. $user['email'] . '</p>
                        </div> 
                    </div>
                </div>';
            }
        }    
    ?>
</body>
</html>