<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 2</title>
</head>
<body>
    <?php echo "<h1>Welcome to Http 5225</h1>" ?>
    <?php echo "<p>Will Learn Php and MySql</p>" ?>
    <?php echo '<ul>
        <li>PHP</li>
        <li>MYSQL</li>
        <li>LARAVEL</li>
    </ul>'; ?>

    <?php echo '<h2>Image</h2>'; ?>
    <?php echo '<img src="https://fakeimg.pl/600x400?text=Image" alt="Placeholder Image">'; ?>

    <?php 
        $fname = "Bhargav";
        $lname = "Suthar";
        // $name['fname'] = $fname;

        $name = array('fname' => $fname, 'lname' => $lname);
        $roles = array("Developer", "Tester", "Manager");

    ?>

    <?php 
        echo "<br>";
        echo 'Hello ' . $name['fname'] . ' ' . $name['lname']; 

        echo '<br>My role is ' . $roles[2];
    ?>
</body>
</html>
