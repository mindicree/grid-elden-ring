<!DOCTYPE html>
<html>

<head>
  <title>Hello Grid 2!</title>
  <?php include_once 'cmp/head.cmp.php'; ?>
</head>

<body>
  <style>
    .img_home_carousel {
      width: 100%;
      height: 300px;
      background-position: center center;
      background-repeat: no-repeat;
    }

    .carousel-caption * {
      -webkit-text-stroke-width: 1px;
      -webkit-text-stroke-color: black;
      text-shadow: 4px 4px 5px #111, 4px 4px 5px #111, 4px 4px 5px #111;
    }

    @media only screen and (min-width: 600px) {
      .img_home_carousel {
        height: 450px;
      }
    }

    @media only screen and (min-width: 1024px) {
      .img_home_carousel {
        height: 600px;
      }
    }
  </style>
  <?php include_once 'cmp/nav.cmp.php'; ?>
  <div class="content-container">
    <div id="carousel_container" style="width: 100%; max-width: 1024px; margin: auto;">
      <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-touch="false">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="3500">
            <img src="img/home_banner/banner_1.jpg" class="img_home_carousel" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1>WELCOME TO THE GRID</h5>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="3500">
            <img src="img/home_banner/banner_2.jpg" class="img_home_carousel" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1>WELCOME TO THE GRID</h5>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="3500">
            <img src="img/home_banner/banner_3.jpg" class="img_home_carousel" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1>WELCOME TO THE GRID</h5>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="3500">
            <img src="img/home_banner/banner_4.jpg" class="img_home_carousel" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1>WELCOME TO THE GRID</h5>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="3500">
            <img src="img/home_banner/banner_5.jpg" class="img_home_carousel" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1>WELCOME TO THE GRID</h5>
            </div>
          </div>
        </div>
      </div>
      <div style="display: grid; grid-template-columns: 1fr 1fr; width: 100%; max-width: 250px; padding-top: 20px; margin: auto;">
        <p style="margin: auto;">Print location: </p>
        <select name="print_location" id="select_print_location">
          <option value="GOC">GOC</option>
          <option value="Remote">Remote</option>
        </select>
        <script>
          let print_location_selector = document.querySelector('#select_print_location')
          print_location_selector.value = getCurrentPrintLocation()
          print_location_selector.addEventListener('change', function() {
            window.localStorage.setItem('print_location', print_location_selector.value)
          })
        </script>
      </div>
    </div>
  </div>
</body>

</html>