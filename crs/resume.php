<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="img/favicon.ico" >
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Резюме</title>
</head>
<body >
  <main class="main">
    <div class="header">
      <div class="row">
        <div class="indent col-xl-3 col-lg-3">
          <div class="me">
            <h1>Юрий Кузмичев</h1>
            <p>Web Developer</p>
            <img src="img/forme3.jpg" alt="YuriKuzmichev">
          </div>
        </div>
        <div class="indent col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
          <div class="informations" id="swup" class="transition-fade">
            <!-- Menu navigations -->
            <?php include('php/nav.php');
            ?>
            <!-- Mobile menu navigations -->
            <?php include('php/mobilnav.php');
            ?>
            <div class="resume">
              <h1>Резюме</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>
</html>