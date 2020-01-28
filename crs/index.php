<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/favicon.ico" >
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    
    <!-- jQuery 1.8 or later, 33 KB -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<!-- Fotorama from CDNJS, 19 KB -->
<link  href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
    <title>Мой сайт</title>
</head>
<body>
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
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-6 aboutme col-lg-6 col-md-12 col-sm-12 col-12">
                                    <h1>Обо мне</h1>
                                    <ul>
                                        <li><p>Здравствуй, дорогой друг! Меня зовут Юрий Кузмичев. Мне 28 лет и Я хотел бы научиться работать в команде Frontend-разработчиком.</p></li>
                                        <li><p>Мне нравится изучать статьи по разным технологиям в сферах технической инженерии, психологии человека, современной философии и спорта. Основное хобби это лёгкая атлетика.</p></li>
                                        <li><p>На данный момент изучаю Bootstrap, JQuery, Английский язык.</p></li>
                                        <li><p>Я изучаю программирование, чтобы в дальнейшем помочь в улучшении искусственного интеллекта.</p></li>
                                    </ul>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <!-- Add images to <div class="fotorama"></div> -->
                                    <div class="fotorama myphoto"  data-width="900"
                                        data-maxwidth="100%"
                                        data-ratio="16/9"
                                        data-allowfullscreen="true"
                                        data-nav="thumbs">
                                            <img src="img/forme.jpg">
                                            <img src="img/forme2.jpg">
                                            <img src="img/forme3.jpg">
                                            <img src="img/forme4.jpg">
                                            <img src="img/forme5.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

<script src="js/swup.min.js"></script>
<script>
    const swup = new Swup();
</script>
</body>
</html>