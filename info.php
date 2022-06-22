<?php 
require_once __DIR__ . "/database.php";
require_once __DIR__ . "/class.php";  

//statement
$stmt = $conn->prepare("SELECT * FROM `departments`WHERE `id` =?");
$stmt->bind_param("d", $id);
$id = $_GET["id"];

//esecuzione
$stmt->execute();
$result = $stmt->get_result();

$department = [];

if($result && $result->num_rows > 0){
    while ($row = $result->fetch_assoc()) {
        $info = new Department($row['id'], $row['name']);
        $info->getInfo($row['email'], $row['phone'], $row['address'], $row['website']);
        $department[] = $info;
    }
} elseif ($result){
    echo 'error info';
} else {
    echo 'error';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($department as $item){?>
        <h1><?php echo $item->name;?>:</h1>
        <h2>info:</h2>
        <ul>
            <li><?php echo $item->email; ?></li>
            <li><?php echo $item->phone; ?></li>
            <li><?php echo $item->website; ?></li>
            <li><?php echo $item->address; ?></li>
        </ul>
    <?php } ?>
</body>
</html>