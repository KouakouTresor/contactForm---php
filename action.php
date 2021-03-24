<?php include 'config.php';
session_start();

$nom = "";
$prenom = "";
$email = "";
$telephone = "";
$message = "";


if (isset($_POST['submitBtn'])) {  
     
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $telephone = $_POST["telephone"];
    $message = $_POST["message"];

    $sql = "INSERT INTO form(nom, prenom, email, telephone, info) VALUES (?,?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $nom, $prenom, $email, $telephone, $message);
    $stmt->execute();
    header('location:index.php');

    $_SESSION['response'] = "Message envoyé avec succès";
    $_SESSION['res_type'] = "success";
    
}
