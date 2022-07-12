<!DOCTYPE html>
<html lang="en">
<head>
    <title>System Log</title>
    <?php include_once 'cmp/head.cmp.php'; ?>
    <?php include_once 'inc/restrict.inc.php'; ?>
    <?php include_once 'inc/mysql.inc.php'; ?>
</head>
<body>
    <?php include_once 'cmp/nav.cmp.php'; ?>
    <div class='content-container'>
        <div class='form-container'>
            <form action="return false">
                <div class='data-entry-container'>
                    <!-- LEFT SIDE -->
                    <div class='data-entry-part'>
                        <!-- Old COA -->
                        <div class="data-entry-label-and-input">
                            <p>Old COA: </p>
                            <input type="text" name="old_coa" required>
                        </div>
                        <!-- New COA -->
                        <div class="data-entry-label-and-input">
                            <p>New COA: </p>
                            <input type="text" name="new_coa" value="" required>
                        </div>
                        <!-- Serial Number -->
                        <div class="data-entry-label-and-input">
                            <p>Serial No.: </p>
                            <input type="text" name="serial_no" value="" required>
                        </div>
                        <!-- Brand Name -->
                        <div class="data-entry-label-and-input">
                            <p>Brand Name: </p>
                            <input type="text" name="brand" value="" required>
                        </div>
                        <!-- Model Name -->
                        <div class="data-entry-label-and-input">
                            <p>Model: </p>
                            <input type="text" name="model" value="" required>
                        </div>
                        <!-- Operating System -->
                        <div class="data-entry-label-and-input">
                            <p>OS: </p>
                            <select name="os" required>
                                <option value="" selected disabled hidden>Select One...</option>
                                <option value="Windows 10 Home">Windows 10 Home</option>
                                <option value="Windows 10 Pro">Windows 10 Pro</option>
                                <option value="Windows 11 Home">Windows 11 Home</option>
                                <option value="Windows 11 Pro">Windows 11 Pro</option>
                                <option value="OSX 10.5 (Leopard)">OSX 10.5 (Leopard)</option>
                                <option value="OSX 10.6 (Snow Leopard)">OSX 10.6 (Snow Leopard)</option>
                                <option value="OSX 10.7 (Lion)">OSX 10.7 (Lion)</option>
                                <option value="OSX 10.8 (Mountain Lion)">OSX 10.8 (Mountain Lion)</option>
                                <option value="OSX 10.9 (Mavericks)">OSX 10.9 (Mavericks)</option>
                                <option value="OSX 10.10 (Yosemite)">OSX 10.10 (Yosemite)</option>
                                <option value="OSX 10.11 (El Capitan)">OSX 10.11 (El Capitan)</option>
                                <option value="OS 10.12 (Sierra)">OS 10.12 (Sierra)</option>
                                <option value="OS 10.13 (High Sierra)">OS 10.13 (High Sierra)</option>
                                <option value="OS 10.14 (Mojave)">OS 10.14 (Mojave)</option>
                                <option value="OS 10.15 (Catalina)">OS 10.15 (Catalina)</option>
                                <option value="OS 11 (Big Sur)">OS 11 (Big Sur)</option>
                                <option value="OS 12 (Monterey)">OS 12 (Monterey)</option>
                            </select>
                        </div>
                        <!-- Computer Type -->
                        <div class="data-entry-label-and-input">
                            <p>Computer: </p>
                            <select name="computer_type" required>
                                <option value="" selected disabled hidden>Select One...</option>
                                <?php
                                    $comp_type_data = get_comp_type_list_active($db_connection);
                                    if(!$comp_type_data) {
                                        echo '<script> alert("Error when retrieving computer type data");</script>';
                                    } else {
                                        foreach($comp_type_data as $data) {
                                            echo '<option value="'.$data['id'].'">'.$data['name'].'</option>';
                                        }
                                    }
                                ?>
                            </select>
                        </div>
                        <!-- Source -->
                        <div class="data-entry-label-and-input">
                            <p>Source: </p>
                            <select name="source" id="" required>
                                <option value="" selected disabled hidden>Select One...</option>
                                <option value="Residential">Residential</option>
                                <option value="Corporate">Corporate</option>
                                <option value="City of Charlotte">City of Charlotte</option>
                            </select>
                        </div>
                    </div>
                    <!-- RIGHT SIDE -->
                    <div class='data-entry-part'>

                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>