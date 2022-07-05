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
            height: min(40vh, 600px);
        }
    </style>
    <?php include_once 'cmp/nav.php'; ?>
    <div class='center-container'>
        <div id='login-form-container' style='padding-top: 5vh;'>
            <h3 style='margin: auto;'>Login</h3>
            <form action="inc/login.inc.php" method='POST' style='margin: auto; width: 100%;'>
                <div class='label-input'>
                    <p>Username: </p>
                    <input type="text" name="username" value="<?php if (isset($_GET['uid'])) { echo $_GET['uid']; } ?>"></input>
                </div>
                <div class='label-input'>
                    <p>Password: </p>
                    <input type="password" name="password">
                </div>
                <div class='center-container' style='height: 50px;'>
                    <p style='margin: auto; color: red; font-size: 10px;'>
                        <?php 
                            if (isset($_GET['error'])) {
                                if ($_GET['error'] == 'invalid') {
                                    echo 'Credentials not found or invalid. Please try again.';
                                }
                                if ($_GET['error'] == 'uidnotfound') {
                                    echo 'Could not find user. Please try again.';
                                }
                                if ($_GET['error'] == 'key') {
                                    echo 'There is something wrong with the server (error code 11-5-25). Please contact support.';
                                }
                                if ($_GET['error'] == 'where') {
                                    echo 'Could not validate source of request. Please contact support.';
                                }
                            }
                        ?>
                    </p>
                </div>
                <div class='center-container'>
                    <button class='btn btn-success' type='submit' name='submit'>Login</button>
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>