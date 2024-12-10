<?php
require "../../../config.php";
// var_dump('qwertyu');
// die;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $position = $_POST['position'];
    $email = $_POST['email'];
    $image = $_FILES['image'];

    // check if email exists
    $chk = $conn->prepare("SELECT * FROM team WHERE email = :email AND id != :id LIMIT 1");
    $chk->bindParam(':email', $email);
    $chk->bindParam(':id', $id);
    $status = $chk->execute();

    if ($status) {
        if ($chk->rowCount() > 0) {
            $_SESSION["error"] = "Email Already Exists";
            header('Location:../../layouts/menus.php?page=team.edit');
            exit();
        }
    }

    $filename = $image["name"];
    $tmp_name = $image["tmp_name"];
    $folder = "../../../uploads/";

    if (move_uploaded_file($tmp_name, $folder . $filename)) {
        $date = date('Y-m-d H:i:s');

        try {
            $query = $conn->prepare("UPDATE team SET name=:name, position=:position, contact=:contact, email=:email, image=:filename, updated_at=:updated_at WHERE id = $id");

            $query->bindParam(':name', $name);
            $query->bindParam(':position', $position);
            $query->bindParam(':contact', $contact);
            $query->bindParam(':email', $email);
            $query->bindParam(':filename', $filename);
            $query->bindParam(':updated_at', $date);

            $stmt = $query->execute();

            if ($stmt) {
                $_SESSION["success"] = "Team Member Updated Succcessfully";
                header('Location:../../layouts/menus.php?page=team');
                exit();
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    } else {
        $_SESSION["error"] = "File Error";
        header('Location:../views/edit.php?id=' . $id);
        exit();
    }
}
