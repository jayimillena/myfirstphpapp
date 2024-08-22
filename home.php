<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My First PHP</title>
</head>
<body>
    <?php 
    
        $name = "Jay Millena";
        $age = 93;
        $address = "Albay";
        $isGamer = false;
        $isTeacher = true;
        $isStudent = true;
        $weight = 70.2;
        $grade = 1.5;

        echo "Hello $name <br/>"; 
        echo "I am $age years old <br/>";
        echo "I live in $address <br/>";
        
        echo "Next year I will be ". $age + 1 ." years old <br/>";
        
    ?>
</body>
</html>