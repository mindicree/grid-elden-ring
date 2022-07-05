<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <!--Home-->
        <a class="navbar-brand" href="/">The Grid</a>
        <!--Mobile Bar-->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <!--Items List-->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <!--Items-->
                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ url_for('game_prices') }}">Game Prices</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ url_for('prices') }}">General Prices</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ url_for('work_orders') }}">Work Orders</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Production
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="syslogs">System Log</a></li>
                    <li><a class="dropdown-item" href="gcomm">System GCOMM</a></li>
                    <li><a class="dropdown-item" href="consolelogs">Console Log GCOMM</a></li>
                    <li><a class="dropdown-item" href="console-gcomm">Console GCOMM</a></li>
                    <li><a class="dropdown-item" href="work-orders">Work Orders</a></li>
                    <li><a class="dropdown-item" href="labels">Label Maker</a></li>
                    <li><a class="dropdown-item" href="techs">Techs and Reports</a></li>
                </ul>
                </li>
            </ul>
            
        </div>
        <?php 
            if (isset($_SESSION['user_key'])) {
                echo '<div class="btn-group">
                <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    '.$_SESSION["fname"].'
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="#">Dashboard</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="inc/logout.inc.php">Logout</a></li>
                </ul>
                </div>';
            } else {
                echo '<a href="login.php"><button type="button" class="btn btn-outline-success">Login</button></a>';
            }
        ?>
    </div>
</nav>