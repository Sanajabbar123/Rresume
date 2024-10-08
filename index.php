<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Students</title>
</head>
<body>
    <h1>List of Students</h1>
    <?php
    include "students.php";
    ?>
    <ul>
        <?php
        foreach ($students as $student){
            echo "<li>$student</li>";
        }
        ?>
    </ul>
</body>
</html>