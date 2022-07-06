<!-- 
    THIS IS A TEMPLATE FOR PAGES. PLEASE ADVISE THE FOLLOWING
    1. RENAME TITLE OF PAGE
    2. UNCOMMENT RESTRICT/RESTRICT ADMIN IF NEEDED
    3. MOVE FILE TO CORRECT DIRECTORY
    4. REMOVE THIS COMMENT
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once $_SERVER['DOCUMENT_ROOT'].'/cmp/head.cmp.php'; ?> 
    <?php //include_once $_SERVER['DOCUMENT_ROOT'].'/inc/restrict.inc.php'; ?>
    <?php //include_once $_SERVER['DOCUMENT_ROOT'].'/inc/restrict_admin.inc.php'; ?>
    <title>404 ERROR</title>
</head>
<body>
    <?php include_once $_SERVER['DOCUMENT_ROOT'].'/cmp/nav.cmp.php'; ?>
    <div style='display: grid; grid-template-columns: 1fr; width: 100%; margin: auto; padding-top: 20vh; height: 30vh;'>
        <h1 style='margin: auto;'>404 ERROR</h1>
        <p style='margin: auto;'>Thank you mario, but our princess is in another castle</p>
    </div>
</body>
</html>