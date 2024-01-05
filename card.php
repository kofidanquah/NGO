<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        input,
        label {
            width: 70%;
            padding: 8px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        form {
            background-size: cover;
            padding: 20px;
            margin: auto;
            border-radius: 5px;
            height: 75vh;
            border: 1px solid black;
            width: 450px;
        }

        h4 {
            text-align: center;
            justify-content: center;
            padding: 20px;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <header class="header">
        <?php echo include "include/header.php" ?>
    </header>
    <h4>Card</h4>
    <form method="post" action="">
        <i class="fa fa-cc-mastercard fa-3x"></i>
        <i class="fa fa-cc-visa fa-3x"></i>
        <i class="fa fa-cc-amex fa-3x"></i><br><br>
        Card holder's Name<br><input type="text" name="name" autocomplete="off" required><br>
        Card Number<br><input type="number" name="card" autocomplete="off" maxlength="16" required><br>
        CVV<br><input type="number" name="cvv" autocomplete="off" placeholder="***" maxlength="3" required><br>
        Expire<br><input type="number" name="amount" autocomplete="off" placeholder="eg. 01/2030" required><br>
        Enter Amount<br><input type="number" name="amount" autocomplete="off" required><br><br>
        <input type="submit" value="Proceed" class="btn btn-success"><br>
    </form>

</body>

</html>