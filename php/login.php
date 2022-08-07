<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        <?php include "../css/login.css" ?>
    </style>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <form class="form" id="login" method="post" action="validate_acc.php">
            <h1 class="form--title">Login</h1>
            <?php if (isset($_GET['error'])) { ?>
                <p class="form--message form_message-error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <div class="form_input-group">
                <input name="uname" type="text" class="form--input" autofocus placeholder="Username or email">
            </div>
            <div class="form_input-group">
                <input name="password" type="password" class="form--input form_input-error" autofocus placeholder="Password">
                <div class="form_input-error-message"></div>
            </div>
            <button class="form--button" type="submit">Continue</button>
        </form>
    </div>
    <script src="./js/login.js"></script>
</body>

</html>