<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Home</title>
</head>

<body>
    <h1>Hello World - PHP</h1>

    <?php
    // $name = "Me";
    // if ($name == "mahmoud") {
    //     echo "<p>Yes</p>";
    //     } else {
    //     echo "<p>No</p>";
    //     }

    // switch ($name) {
    //     case "A":
    //         echo "<h2 style='color:green'>Hello Mahmoud</h2>";
    //         break;
    //     case "Ahmed":
    //         echo "<h2 style='color:blue'>Hello Ahmed</h2>";
    //         break;
    //     default:
    //         echo "<h2 style='color:red'>Who?</h2>";
    //         break;
    //     }

    // for ($i = 0; $i < 5; $i++) {
    //     echo "<h2>" . ($i + 1) . ": this is number $i</h2>";
    //     }

    // $count = 10;
    // while ($count < 5) {
    //     echo "<h2 style='color:green'>Hello Mahmoud</h2>";
    //     $count++;
    //     }

    // do {
    //     echo "<h2 style='color:green'>Hello Mahmoud</h2>";
    //     $count++;
    //     } while ($count < 5);

    $arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
    echo $arr[3] . "<br/>";
    echo count($arr);

    ?>



</body>

</html>