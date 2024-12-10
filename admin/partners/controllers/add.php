<?php
require "../../../config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $image = $_FILES['image'];

    // check if email exists
    $chk = $conn->prepare("SELECT * FROM partners WHERE email = :email LIMIT 1");
    $chk->bindParam(':email', $email);
    $status = $chk->execute();

    if ($status) {
        if ($chk->rowCount() > 0) {
            $_SESSION["error"] = "Email Already Exists";
            header('Location:../../layouts/menus.php?page=partners.new');
            exit();
        }
    }

    if ($image) {
        $filename = $image["name"];
        $tmp_name = $image["tmp_name"];
        $folder = "../../../uploads/";

        if (move_uploaded_file($tmp_name, $folder . $filename)) {
            $date = date('Y-m-d H:i:s');

            try {
                $query = $conn->prepare("INSERT INTO partners (name, email, image, created_at, updated_at)
                                        VALUES(:name, :email, :filename, :created_at, :updated_at)");

                $query->bindParam(':name', $name);
                $query->bindParam(':email', $email);
                $query->bindParam(':filename', $filename);
                $query->bindParam(':created_at', $date);
                $query->bindParam(':updated_at', $date);

                $stmt = $query->execute();

                if ($stmt) {
                    $_SESSION["success"] = "Partner Created Succcessfully";
                    header('Location:../../layouts/menus.php?page=partners');
                    exit();
                }
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        } else {
            $_SESSION["error"] = "File Error";
            header('Location:../../layouts/menus.php?page=partners.new');
            exit();
        }
    }
}
