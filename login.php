<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <?php include_once 'cmp/head.php'; ?>
</head>
<body>
    <style>
        .center-container {
            width: 100%;
            margin: auto;
            display: grid;
            grid-template-columns: 1fr;
        }

        .label-input {
            display: grid;
            grid-template-columns: 30% auto;
            padding: 10px 0px;
        }

        .label-input * {
            margin: auto;
        }

        #login-form-container {
            margin: auto;
            width: min(80%, 500px);
            display: grid;
            grid-template-columns: 1fr;
            height: 30vh;
        }
    </style>
    <?php include_once 'cmp/nav.php'; ?>
    <div class='center-container'>
        <div id='login-form-container'>
            <h3 style='margin: auto;'>Login</h3>
            <form action="inc/login.inc.php" method='POST' style='margin: auto; width: 100%;'>
                <div class='label-input'>
                    <p>Username: </p>
                    <input type="text" name="username">
                </div>
                <div class='label-input'>
                    <p>Password: </p>
                    <input type="password" name="password">
                </div>
                <div class='center-container' style='padding-top: 30px;'>
                    <button class='btn btn-success' type='submit' name='valid_submit' style='width: 100px; margin: auto;'>Login</button>
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>