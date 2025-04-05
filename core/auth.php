<?php

use Eventify\core\Session;

header('Content-Type: application/json');

$users = [
    "user@example.com" => password_hash("password123", PASSWORD_DEFAULT)
];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $action = $_POST["action"] ?? '';

    if ($action === "login") {
        $email = $_POST["email"] ?? '';
        $password = $_POST["password"] ?? '';
        if (isset($users[$email]) && password_verify($password, $users[$email])) {
            Session::set("user_id", $email);
            echo json_encode(["success" => true, "message" => "Connexion réussie !"]);
        } else {
            echo json_encode(["success" => false, "message" => "Identifiants incorrects."]);
        }
    }

    if ($action === "register") {
        $email = $_POST["email"] ?? '';
        $password = $_POST["password"] ?? '';

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo json_encode(["success" => false, "message" => "Email invalide"]);
            exit;
        }

        if (strlen($password) < 6) {
            echo json_encode(["success" => false, "message" => "Mot de passe trop court (6 caractères min)."]);
            exit;
        }

        echo json_encode(["success" => true, "message" => "Inscription réussie ! Vous pouvez vous connecter."]);
    }
}

?>
