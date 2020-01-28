<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="img/favicon.ico" >
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/jquery-3.1.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-migrate-3.1.0.js" integrity="sha256-oA/lsZCgEPkbv/byAkeXSTEZTsGOPZCrtbyFBHmcGKM=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>  
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <title>Контакты</title>
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
            <div class="container">
              <div class="row contacts">
                <div class="col-xl-6  col-lg-6 col-md-12 col-sm-12 col-12">
                  <h1>Мои контакты:</h1>
                  <p>Мой номер телефона: +7-XXX-XXX-XXXX</p>
                  <h6>Если же Вы не можете со мной связаться по данным контактам напишите мне здесь:</h6>
                  <div class="form-inner">
                    <form action="phpmailer/send.php" method="POST">
                      <input type="text" name="user_name" placeholder="Введите Ваше имя">
                      <input type="text" name="user_contacts" placeholder="Введите Ваши контакты">
                      <textarea name="user_text" id="" cols="10" rows="4" placeholder="Пару строчек вашего сообщения"></textarea>
                      <input type="submit" value="Отправить..." data-toggle="modal" data-target="#staticBackdrop">
                    </form>
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                  <div class="map">
                    <h2>Я нахожусь вот здесь:</h2>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1613.675420325074!2d59.7101452225908!3d55.11184301682037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sru!4v1579396793038!5m2!1sru!2sru" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                 </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Модальное окно от bootstrap -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <!-- Само модальное окно -->
    <div class="modal-dialog" role="document">
    <!-- Содержимое модального окна -->
    <div class="modal-content">
      <!-- Шапка модального окна -->
      <div class="modal-header">
        <!-- Кнопка "закрыть" -->
        <h5 class="modal-title" id="staticBackdropLabel">Спасибо!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- Тело модального окна -->
      <div class="modal-body">
        Ваша форма отправлена!
      </div>
      <!-- Подвал модального окна -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
      </div>
    </div>
    </div>
   </div>
  </main>
  <!-- Скрипт отправки формы -->
  <script>
    $(function(){
     ‘use strict’;
    $(‘#form’).on(‘submit’, function(e){
     e.preventDefault();
     var fd = new FormData( this );
     $.ajax({
     url: ‘send.php’,
     type: ‘POST’,
     contentType: false, 
     processData: false, 
     data: fd,
     success: function(msg){
    if(msg == ‘ok’) {
     alert('Отправлено');
    } else {
     alert('Ошибка')
    }
     }
     });
     });
    });
  </script>
</body>
</html>