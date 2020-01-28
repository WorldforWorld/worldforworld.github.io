<link rel="stylesheet" href="css/style.css">

<ul id="menu" class="main-menu" >
  <li><a href="index.php">Обо Мне</a></li>
  <li><a href="resume.php">Резюме</a></li>
  <li><a href="portfolio.php">Портфолио</a></li>
  <li><a href="blog.php">Блог</a></li>
  <li><a href="contacts.php">Контакты</a></li>
  <li><a href="chat.php">Чат</a></li>
</ul>
</style>



<!-- Script -->
<script>
window.addEventListener("load",function(){
  var myLinks = document.querySelectorAll("#menu li a");
  for(var i=0; i<myLinks.length; i++) if(location.href==myLinks[i].href) myLinks[i].classList.add("current");
});
</script>