<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <?php include_once 'cmp/head.cmp.php'; ?>
</head>
<body>
    <?php include_once 'cmp/nav.cmp.php'; ?>
    <form onsubmit="return renderSubmission()">
        <input type="text" name="initials" value="" id='initialsSubmit' style="display: none"/>
        <!--Data Entry Table-->
        <div class="data-entry-container">
            <!-- LEFT SIDE -->
            <div class="data-entry-part">
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
                        <option value="OSX 10.5">OSX 10.5 (Leopard)</option>
                        <option value="OSX 10.6">OSX 10.6 (Snow Leopard)</option>
                        <option value="OSX 10.7">OSX 10.7 (Lion)</option>
                        <option value="OSX 10.8">OSX 10.8 (Mountain Lion)</option>
                        <option value="OSX 10.9">OSX 10.9 (Mavericks)</option>
                        <option value="OSX 10.10">OSX 10.10 (Yosemite)</option>
                        <option value="OSX 10.11">OSX 10.11 (El Capitan)</option>
                        <option value="OS 10.12">OS 10.12 (Sierra)</option>
                        <option value="OS 10.13">OS 10.13 (High Sierra)</option>
                        <option value="OS 10.14">OS 10.14 (Mojave)</option>
                        <option value="OS 10.15">OS 10.15 (Catalina)</option>
                        <option value="OS 11">OS 11 (Big Sur)</option>
                        <option value="OS 12">OS 10.15 (Monterey)</option>
                    </select>
                </div>
                <!-- Computer Type -->
                <div class="data-entry-label-and-input">
                    <p>Computer: </p>
                    <div class="radio-group">
                        <!-- Desktop -->
                        <div class="radio-group-item">
                            <input type="radio" id="compTypeChoice1" name="computer_type" value="Desktop" required>
                            <label for="contactChoice1">Desktop</label>
                        </div>
                        <!-- Laptop -->
                        <div class="radio-group-item">
                            <input type="radio" id="compTypeChoice2" name="computer_type" value="Laptop" required>
                            <label for="contactChoice2">Laptop</label>
                        </div>
                        <!-- All-In-One -->
                        <div class="radio-group-item">
                            <input type="radio" id="compTypeChoice3" name="computer_type" value="All-In-One" required>
                            <label for="contactChoice3">All-In-One</label>
                        </div>
                        <!-- Maybe Add Chrome and other in the fture?
                        <div class="radio-group-item">
                            <input type="radio" id="compTypeChoice4" name="computer_type" value="Chrome" required>
                            <label for="contactChoice4">Chrome</label>
                        </div>
                        <div class="radio-group-item">
                            <input type="radio" id="compTypeChoice5" name="computer_type" value="Other" required>
                            <label for="contactChoice5">Other</label>
                        </div>
                        -->
                        
                    </div>
                </div>
                <!-- Source -->
                <div class="data-entry-label-and-input">
                    <p>Source: </p>
                    <div class="radio-group">
                        <!-- Corporate -->
                        <div class="radio-group-item">
                            <input type="radio" id="sourceChoice1" name="source" value="Corporate" required>
                            <label for="contactChoice1">Corporate</label>
                        </div>
                        <!-- Charlotte -->
                        <div class="radio-group-item">
                            <input type="radio" id="sourceChoice2" name="source" value="Charlotte" required>
                            <label for="contactChoice1">Charlotte</label>
                        </div>
                        <!-- Residential -->
                        <div class="radio-group-item">
                            <input type="radio" id="sourceChoice3" name="source" value="Residential" required>
                            <label for="contactChoice2">Residential</label>
                        </div>
                    </div>
                </div>
            </div>


            <!--RIGHT SIDE (on desktop)-->
            <div class="data-entry-part">
                <!-- CPU Brand -->
                <div class="data-entry-label-and-input">
                    <p>CPU Brand: </p>
                    <select name="cpu-brand" id="cpu-brand-selector" required>
                        <option value="" selected disabled hidden>Select One...</option>
                        <option value="Intel">Intel</option>
                        <option value="AMD">AMD</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <!-- CPU Type -->
                <div class="data-entry-label-and-input">
                    <p>CPU Type: </p>
                    <select name="cpu-type" id="cpu-type-selector" disabled required>
                        <option value="" selected disabled hidden>Select One...</option>
                    </select>
                </div>
                <!-- CPU Gen (if applicable) and CPU Speed-->
                <div class="data-entry-label-and-input-double">
                    <!-- CPU Gen (if applicable) -->
                    <p>CPU Gen: </p>
                    <select name="cpu-gen" id="cpu-gen-selector" disabled required>
                        <option value="" selected disabled hidden>Select One...</option>
                    </select>
                    <!-- CPU Speed -->
                    <p>CPU Speed: </p>
                    <select name="cpu-speed" id="cpu-speed-selector" required>
                        <option value="" selected disabled hidden>Select One...</option>
                        <option value="1.0">1.0</option>
                        <option value="1.1">1.1</option>
                        <option value="1.2">1.2</option>
                        <option value="1.3">1.3</option>
                        <option value="1.4">1.4</option>
                        <option value="1.5">1.5</option>
                        <option value="1.6">1.6</option>
                        <option value="1.7">1.7</option>
                        <option value="1.8">1.8</option>
                        <option value="1.9">1.9</option>
                        <option value="2.0">2.0</option>
                        <option value="2.1">2.1</option>
                        <option value="2.2">2.2</option>
                        <option value="2.3">2.3</option>
                        <option value="2.4">2.4</option>
                        <option value="2.5">2.5</option>
                        <option value="2.6">2.6</option>
                        <option value="2.7">2.7</option>
                        <option value="2.8">2.8</option>
                        <option value="2.9">2.9</option>
                        <option value="3.0">3.0</option>
                        <option value="3.1">3.1</option>
                        <option value="3.2">3.2</option>
                        <option value="3.3">3.3</option>
                        <option value="3.4">3.4</option>
                        <option value="3.5">3.5</option>
                        <option value="3.6">3.6</option>
                        <option value="3.7">3.7</option>
                        <option value="3.8">3.8</option>
                        <option value="3.9">3.9</option>
                        <option value="4.0">4.0</option>
                        <option value="4.1">4.1</option>
                        <option value="4.2">4.2</option>
                        <option value="4.3">4.3</option>
                        <option value="4.4">4.4</option>
                        <option value="4.5">4.5</option>
                        <option value="4.6">4.6</option>
                        <option value="4.7">4.7</option>
                        <option value="4.8">4.8</option>
                        <option value="4.9">4.9</option>
                        <option value="5.0">5.0</option>
                    </select>
                </div>

                <!-- RAM and HDD -->
                <div class="data-entry-label-and-input-double">
                    <!-- RAM -->
                    <p>RAM: </p>
                    <select name="ram" id="ram-selector" required>
                        <option value="" selected disabled hidden>Select One...</option>
                        <option value="1GB">1GB</option>
                        <option value="2GB">2GB</option>
                        <option value="3GB">3GB</option>
                        <option value="4GB">4GB</option>
                        <option value="6GB">6GB</option>
                        <option value="8GB">8GB</option>
                        <option value="12GB">12GB</option>
                        <option value="16GB">16GB</option>
                        <option value="24GB">24GB</option>
                        <option value="32GB">32GB</option>
                    </select>
                    <!-- HDD -->
                    <p>HDD: </p>
                    <select name="hdd" id="hdd-selector" required>
                        <option value="" selected disabled hidden>Select One...</option>
                        <option value="80GB">80GB</option>
                        <option value="120GB">120GB</option>
                        <option value="160GB">160GB</option>
                        <option value="250GB">250GB</option>
                        <option value="320GB">320GB</option>
                        <option value="500GB">500GB</option>
                        <option value="640GB">640GB</option>
                        <option value="750GB">750GB</option>
                        <option value="1.0TB">1.0TB</option>
                        <option value="1.5TB">1.5TB</option>
                        <option value="2.0TB">2.0TB</option>
                        <option value="3.0TB">3.0TB</option>
                        <option value="4.0TB">4.0TB</option>
                    </select>
                </div>

                <!-- Disk Drive -->
                <div class="data-entry-label-and-input">
                    <p>Disk Drive: </p>
                    <select name="disk-drive" id="disk-type-selector" required>
                        <option value="" selected disabled hidden>Select One...</option>
                        <option value="CD-ROM">CD-ROM</option>
                        <option value="CD-RW">CD-RW</option>
                        <option value="DVD-ROM">DVD-ROM</option>
                        <option value="DVR-RW">DVR-RW</option>
                        <option value="BLU-RAY">BLU-RAY</option>
                        <option value="None">None</option>
                    </select>
                </div>

                <!-- Tags  -->
                <div class="data-entry-label-and-input">
                    <p>Tags:</p>
                    <div class="tags-select-container">
                        <div class="tags-option">
                            <input class="form-check-input" type="checkbox" value="Webcam" id="tag-webcam">
                            <label class="form-check-label" for="flexCheckDefault"> Webcam </label>
                        </div>
                        <div class="tags-option">
                            <input class="form-check-input" type="checkbox" value="HDMI" id="tag-HDMI">
                            <label class="form-check-label" for="flexCheckDefault"> HDMI </label>
                        </div>
                        <div class="tags-option">
                            <input class="form-check-input" type="checkbox" value="Touchscreen" id="tag-touch">
                            <label class="form-check-label" for="flexCheckDefault"> TouchScreen </label>
                        </div>
                        <div class="tags-option">
                            <input class="form-check-input" type="checkbox" value="SSD" id="tag-SSD">
                            <label class="form-check-label" for="flexCheckDefault"> SSD </label>
                        </div>
                        <div class="tags-option-alt">
                            <input class="form-check-input" type="checkbox" value="2nd Drive - " id="tag-second-drive">
                            <label class="form-check-label" for="flexCheckDefault"> 2nd Drive </label>
                            <select name="second-hdd" id="second-hdd-selector" disabled style="float: right; width: 50%;">
                                <option value="" selected disabled hidden>Select One...</option>
                                <option value="80GB">80GB</option>
                                <option value="120GB">120GB</option>
                                <option value="160GB">160GB</option>
                                <option value="250GB">250GB</option>
                                <option value="320GB">320GB</option>
                                <option value="500GB">500GB</option>
                                <option value="640GB">640GB</option>
                                <option value="750GB">750GB</option>
                                <option value="1.0TB">1.0TB</option>
                                <option value="1.5TB">1.5TB</option>
                                <option value="2.0TB">2.0TB</option>
                                <option value="3.0TB">3.0TB</option>
                                <option value="4.0TB">4.0TB</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Second Drive Script: activates/deactivates the second drive options-->
                <script type="text/javascript">
                    let driveToggle = document.querySelector('#tag-second-drive');
                    let secondDriveSelector = document.querySelector('#second-hdd-selector');
                    driveToggle.addEventListener('change', function () {
                    console.log('Second Drive Toggle Changed to ' + driveToggle.checked);
                        if (this.checked) {
                            secondDriveSelector.removeAttribute('disabled');
                            secondDriveSelector.setAttribute('required', true);
                        } else {
                            secondDriveSelector.setAttribute('disabled', true);
                            secondDriveSelector.removeAttribute('required');
                            secondDriveSelector.selectedIndex = 0;
                        }
                    });
                </script>

                <!-- CPU Script: adjusts values for form depending on options chosen for CPU -->
                <script type="text/javascript">
                    // Get elements from DOM
                    let cpuBrandSelector = document.querySelector('#cpu-brand-selector');
                    let cpuTypeSelector = document.querySelector('#cpu-type-selector');
                    let cpuGenSelector = document.querySelector('#cpu-gen-selector');

                    //Add action listeners to appropriate elements
                    cpuBrandSelector.addEventListener("change", function() {
                        console.log("Change CPU Brand to " + cpuBrandSelector.value);
                        setCPUBrandOptions(cpuBrandSelector.selectedIndex);
                        setCPUTypeOptions('');
                    });
                    cpuTypeSelector.addEventListener("change", function() {
                        console.log("Change CPU Type to " + cpuTypeSelector.value);
                        setCPUTypeOptions(cpuTypeSelector.value);
                    });

                    // The functions for the elements
                    function setCPUBrandOptions(i) {
                        switch (i) {
                            case 0:
                                cpuTypeSelector.setAttribute('disabled', true);
                                cpuTypeSelector.innerHTML =
                                "<option value=''>Select One...</option>";
                                break;
                            case 1:
                                cpuTypeSelector.removeAttribute('disabled');
                                cpuTypeSelector.innerHTML =
                                "<option value='' selected disabled hidden>Select One...</option>" +
                                "<option value='Pentium'>Pentium</option>" +
                                "<option value='Celeron'>Celeron</option>" +
                                "<option value='Core Duo'>Core Duo</option>" +
                                "<option value='Core 2 Duo'>Core 2 Duo</option>" +
                                "<option value='Core Quad'>Core Quad</option>" +
                                "<option value='Core 2 Quad'>Core 2 Quad</option>" +
                                "<option value='Core i3'>Core i3</option>" +
                                "<option value='Core i5'>Core i5</option>" +
                                "<option value='Core i7'>Core i7</option>";
                                break;
                            case 2:
                                cpuTypeSelector.removeAttribute('disabled');
                                cpuTypeSelector.innerHTML =
                                "<option value='' selected disabled hidden>Select One...</option>" +
                                "<option value='K10'>K10</option>" +
                                "<option value='Bulldozer'>Bulldozer</option>" +
                                "<option value='Ryzen 3'>Ryzen 3</option>" +
                                "<option value='Ryzen 5'>Ryzen 5</option>" +
                                "<option value='Ryzen 7'>Ryzen 7</option>";
                                break;
                            case 3:
                                //cpuTypeSelector.removeAttribute('disabled');
                                let cpuTypeInput = prompt('Please enter the CPU Brand');
                                if (cpuTypeInput == null || cpuTypeInput == '') {
                                    cpuBrandSelector.selectedIndex = 0;
                                    setCPUBrandOptions(0);
                                    alert('CPU Brand not chosen');
                                } else {
                                    cpuTypeSelector.innerHTML =
                                    "<option value=''>" + cpuTypeInput + "</option>";
                                    break;
                                }
                                break;
                        }
                    }
                    function setCPUTypeOptions(t) {
                        switch (t) {
                            case 'Core i3':
                            case 'Core i5':
                            case 'Core i7':
                                cpuGenSelector.removeAttribute('disabled');
                                cpuGenSelector.innerHTML =
                                "<option value='' selected disabled hidden>Select One...</option>" +
                                "<option value='Gen 1'>Gen 1</option>" +
                                "<option value='Gen 2'>Gen 2</option>" +
                                "<option value='Gen 3'>Gen 3</option>" +
                                "<option value='Gen 4'>Gen 4</option>" +
                                "<option value='Gen 5'>Gen 5</option>" +
                                "<option value='Gen 6'>Gen 6</option>" +
                                "<option value='Gen 7'>Gen 7</option>" +
                                "<option value='Gen 8'>Gen 8</option>" +
                                "<option value='Gen 9'>Gen 9</option>" +
                                "<option value='Gen 10'>Gen 10</option>" +
                                "<option value='Gen 11'>Gen 11</option>" +
                                "<option value='Gen 12'>Gen 12</option>" +
                                "<option value='Gen 13'>Gen 13</option>";
                                break;
                            case 'Ryzen 3':
                            case 'Ryzen 5':
                            case 'Ryzen 7':
                                cpuGenSelector.removeAttribute('disabled');
                                cpuGenSelector.innerHTML =
                                "<option value='' selected disabled hidden>Select One...</option>" +
                                "<option value='1000 Serioes'>1000 Series</option>" +
                                "<option value='2000 Series'>2000 Series</option>" +
                                "<option value='3000 Series'>3000 Series</option>" +
                                "<option value='4000 Series'>4000 Series</option>" +
                                "<option value='5000 Series'>5000 Series</option>" +
                                "<option value='6000 Series'>6000 Series</option>" +
                                "<option value='7000 Series'>7000 Series</option>";
                                break;
                            default:
                                cpuGenSelector.setAttribute('disabled', true);
                                cpuGenSelector.innerHTML =
                                "<option value='' selected disabled hidden>Select One...</option>";
                                break;
                                break;
                        }
                    }
                </script>

            </div>
        </div>

        <!--Submission Section-->
        <div class="data-submission-container">
            <button name="button" class="btn" style="background-color: #aea;" id='submitButton'>Submit</button>
        </div>
        <!-- Submission modal container-->
        <div id='submission-modal-container'> 
            <div class="modal fade" id="submission_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="submission-modal-title"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div id="submission-modal-body" class="modal-body">
                    
                    </div>
                    <div id="submission-modal-footer" class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" id="submission-modal-button" class="btn btn-primary">Submit</button>
                        <img id="loading-gif" src="static/img/loading.gif" style="display: none; width: 32px; height: 32px;"></img>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <!--Submission Script-->
        <script>
            function renderSubmission() {
                console.log('Button Clicked!');
                //get selected computer type
                let computer_type;
                document.getElementsByName('computer_type').forEach((item) => {
                    if (item.checked) {
                        computer_type = item.value;
                    }
                });
                //get selected computer type
                let computer_source;
                document.getElementsByName('source').forEach((item) => {
                    if (item.checked) {
                        computer_source = item.value;
                    }
                });
                //get tags
                let computer_tags = [];
                document.querySelectorAll('.form-check-input').forEach((item) => {
                    //console.log(item)
                    if (item.checked && item.type=="checkbox") {
                        if (item.id == "tag-second-drive") {
                            let drive_value = document.querySelector('#second-hdd-selector').value;
                            computer_tags.push(item.value + drive_value);
                        } else {
                            computer_tags.push(item.value);
                        }
                    }
                });

                try {
                    let submission = {
                        'old_coa': document.getElementsByName('old_coa')[0].value,
                        'new_coa': document.getElementsByName('new_coa')[0].value,
                        'serial_no': document.getElementsByName('serial_no')[0].value,
                        'brand': document.getElementsByName('brand')[0].value,
                        'model': document.getElementsByName('model')[0].value,
                        'os': document.getElementsByName('os')[0].value,
                        //computer_type
                        'computer_type': computer_type,
                        //computer_source
                        'source': computer_source,
                        'cpu_brand': document.getElementsByName('cpu-brand')[0].value,
                        'cpu_model': document.getElementsByName('cpu-type')[0].value,
                        'cpu_gen': document.getElementsByName('cpu-gen')[0].value,
                        'cpu_speed': document.getElementsByName('cpu-speed')[0].value,
                        'ram': document.getElementsByName('ram')[0].value,
                        'hdd': document.getElementsByName('hdd')[0].value,
                        'disk_drive': document.getElementsByName('disk-drive')[0].value,
                        //computer_tags
                        'tags': computer_tags
                    };
                    //console.log('JSON Data Rendered:\n' + JSON.stringify(submission));

                    document.querySelector("#submission-modal-title").innerHTML = submission.brand + ' ' + submission.model + ' - Serial No.#'+submission.serial_no;
                    document.querySelector("#submission-modal-body").innerHTML = submissionStringGenerator(submission);
                    let submissionModalElement = document.getElementById('submission_modal');
                    let submissionModal = new bootstrap.Modal(submissionModalElement);
                    submissionModal.toggle();

                    document.querySelector("#submission-modal-button").addEventListener('click', function() {
                        let techInitials = document.querySelector("#submission-modal-tech-input").value;
                        if (techInitials.length < 2)  {
                            document.querySelector("#tech-confirmer").style = "color: #f00; visibility: visible;";
                        } else {
                            this.style.display = "none";
                            document.querySelector("#loading-gif").style.display = "initial";
                            submission.tech = techInitials;
                            fetch(`${base_url}/api/v1/syslogs`, {method: 'POST', body: JSON.stringify(submission)})
                            .then(response => {
                                if (response.status == 201) {
                                    window.location.assign('syslogs');
                                    return null
                                } else {
                                    return response.json()
                                }
                            })
                            .then(data => {
                                alert(JSON.stringify(data))
                            })
                            .catch (error => {
                                this.style.display = "initial";
                                document.querySelector("#loading-gif").style.display = "none";
                                alert('An error occured.\n\nDetails: ' + error);
                                console.log(error);
                            });
                        }
                    });
                    //return false to cancel default form submission
                    //instead relying on API call from submission modal
                    return false;
                } catch (error) {
                    console.log(error);
                    return false;
                }
                return false;
            }
        
            //string generator for bootstrap modals
            function submissionStringGenerator(entry) {
                return '<p><b>Old COA: </b>' + entry.old_coa + '</p>' +
                '<p><b>New COA: </b>' + entry.new_coa + '</p>' +
                '<p><b>Serial No.: </b>' + entry.serial_no + '</p>' +
                '<p><b>Operating System: </b>' + entry.os + '</p>' +
                '<p><b>Computer Type: </b>' + entry.computer_type + '</p>' +
                '<p><b>Processor: </b>' + entry.cpu_brand + ' ' + entry.cpu_model + (entry.cpu_gen != null ? ' ' + entry.cpu_gen + ' - ' : ' - ') + entry.cpu_speed + 'Ghz' + '</p>' +
                '<p><b>RAM Amount: </b>' + entry.ram + '</p>' +
                '<p><b>Hard Drive: </b>' + entry.hdd + '</p>' +
                '<p><b>Disk Drive: </b>' + entry.disk_drive + '</p>' +
                '<p><b>Other Information: </b>' + entry.tags + '</p>' +
                '<p><b>Tech: </b> <input id="submission-modal-tech-input" type="text" placeholder="Initials here..."><span id="tech-confirmer" style="color: #f00; visibility: hidden;">&emsp;Please enter your initials</span></p>' +
                '';
            }
        </script>
    </form>
</body>
</html>