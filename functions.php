<?php

include 'db.php';

$name = $_POST['name'] ?? "";
$number = $_POST['number'] ?? NULL;
$type = $_POST['type'] ?? "";
$exp_date = $_POST['exp_date'] ?? NULL;
$get_id = $_GET['id'] ?? "";



//Create

if (isset($_POST['add'])) {

    $sql = ('INSERT INTO medicines (med_name, med_number, med_type, exp_date) VALUES (?, ?, ?, ?)');
    $query = $pdo->prepare($sql);
    $query->execute([$name, $number, $type, $exp_date]);
    
    if ($query) {
        header('Location: '.$_SERVER['HTTP_REFERER']);
    }

}

//Read

$sql = $pdo->prepare("SELECT * FROM medicines");
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_OBJ);