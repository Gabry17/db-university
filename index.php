<?php
//importo file DB
require_once __DIR__ . "/database.php";
require_once __DIR__ . "/class.php";

//prendo i dati del DB con SQL
$sql = "SELECT `id`, `name` FROM `departments`;";
$result = $conn->query($sql);

$department = [];

//controllo del result
if($result && $result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
        $item_department = new Department($row['id'], $row['name']);
        $department [] = $item_department; 
    }
} elseif($result) {
    echo 'mancate info';
} else {
    echo 'error';
    die();
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
    <h1>Dipartimenti:</h1>
    <?php foreach($department as $item){ ?>
    <h2><?php echo $item->name;?></h2>
    <a href="info.php?id=<?php echo $item->id;?>">INFO</a>
    <?php } ?>
</body>
</html>
