<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
<title>Add Disaster</title>
</head>
<body>
<form action="" method="post">
    <label>
        Date:  <input type="date" name="date">
    </label>
    <label >
        Place: <input type="text" name="place">
    </label>
    <label>
        Category: <input type="text" name="category">
    </label>
    <label>
        Wind Speed: <input type="text" name="wspeed"/>
    </label>
    <label >
        Pressure: <input type="text" name="pressure">
    </label>
<button type="submit" value="Submit">Submit</button>
</form>
<div style="">
<?php
    include 'connect.php';
    $date = $_POST['date'];
    $place = $_POST['place'];
    $wspeed = $_POST['wspeed'];
    $pressure = $_POST['pressure'];
    $category = $_POST['category'];

    try {
        $conn = new PDO("mysql:host=$hostrname;dbname=$database", $username, $password);
        $D=time();// set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql1="INSERT INTO disaster (Disaster_ID) VALUES ('$D')";
        $sql = "INSERT INTO cyclone (Disaster_ID,Date,Category,Place,Wind_speed,Pressure)
VALUES ('$D','$date','$category' ,'$place','$wspeed','$pressure')";
        // use exec() because no results are returned
        $conn->exec($sql);

    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

?>
</body>

</html>