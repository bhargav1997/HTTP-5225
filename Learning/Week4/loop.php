<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Loop</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
        <div class="p-3 mb-2 bg-primary text-white">
            <h2 class="text-center">Company Users</h2>
        </div>
        <div class="row">
            <?php
                function getUsers(){
                    $url = "users.json";
                    $data = file_get_contents($url);
                    // echo gettype($data);
                    return json_decode($data, true);
                }

                $users = getUsers();

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
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">'. $user['phone'] . '</li>
                                        <li class="list-group-item">'. $user['website'] . '</li>
                                        <li class="list-group-item"> Company: '. $user['company']['name'] . '</li>
                                    </ul>
                                </div>
                            </div>
                        </div>';
                    }
                    // for($i = 0; $i < count($users); $i++) {
                    //     echo '<div class="col-md-4 p-3">
                    //         <div class="card my-3" style="">
                    //             <div class="card-body">
                    //                 <h5 class="card-title">'. $users[$i]['name'] . ' </h5>
                    //                 <p class="card-text">'. $users[$i]['email'] . '</p>
                    //                 <ul class="list-group list-group-flush">
                    //                     <div class="card-header">
                    //                         Other Details
                    //                     </div>
                    //                     <li class="list-group-item">'. $users[$i]['phone'] . '</li>
                    //                     <li class="list-group-item">'. $users[$i]['website'] . '</li>
                    //                     <li class="list-group-item"> Company: '. $users[$i]['company']['name'] . '</li>
                    //                 </ul>
                    //             </div>
                    //         </div>
                    //     </div>';
                    // }
                }
            ?>
            </div>
        </div>
</body>
</html>