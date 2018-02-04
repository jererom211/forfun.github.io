<?php session_start();
include '/parts/connection.php';
include '/functions/functions.php';
include '/parts/auth_cookie.php';

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Главная страница</title>
        
        <link rel="stylesheet" href="css/styles.css" />
     

       
        
		 <style type="text/css">
        body {
	       background-image: url(images/fon.png);
        }
        </style> 
        <script type="text/javascript">
        function slide() {
  if (document.getElementById("block-top-auth").style.display == "block"){
        document.getElementById("block-top-auth").style.display = "none";
    }else{
        document.getElementById("block-top-auth").style.display = "block";
    }
        };
        </script>
    
    
</body>
      <script type="text/javascript" src="http://yandex.st/jquery/2.1.0/jquery.min.js"></script> 
      <script type="text/javascript" src="../js/miracle.js"></script>
 
</head>

<body>






<?php 

include '/parts/header.php';

?>







<div class="advert">
  <img src='images/slide_1.jpg' id="image_1" style="position: absolute;" />
  
</div>




<div id="main"><!-- Основной раздел содержимого -->
<section id="content"><!-- Основной подраздел содержимого -->
<?php
include ('/parts/left.php');
include ('/parts/right.php');
?>
</section>
</div>

<?php
    echo '</ul>';

if ($page != 1){ $pstr_prev = '<li><a class="pstr-prev" href="index.php?page='.($page - 1).'">&lt;</a></li>';}
if ($page != $total) $pstr_next = '<li><a class="pstr-next" href="index.php?page='.($page + 1).'">&gt;</a></li>';


// Формируем ссылки со страницами
if($page - 5 > 0) $page5left = '<li><a href="index.php?page='.($page - 5).'">'.($page - 5).'</a></li>';
if($page - 4 > 0) $page4left = '<li><a href="index.php?page='.($page - 4).'">'.($page - 4).'</a></li>';
if($page - 3 > 0) $page3left = '<li><a href="index.php?page='.($page - 3).'">'.($page - 3).'</a></li>';
if($page - 2 > 0) $page2left = '<li><a href="index.php?page='.($page - 2).'">'.($page - 2).'</a></li>';
if($page - 1 > 0) $page1left = '<li><a href="index.php?page='.($page - 1).'">'.($page - 1).'</a></li>';

if($page + 5 <= $total) $page5right = '<li><a href="index.php?page='.($page + 5).'">'.($page + 5).'</a></li>';
if($page + 4 <= $total) $page4right = '<li><a href="index.php?page='.($page + 4).'">'.($page + 4).'</a></li>';
if($page + 3 <= $total) $page3right = '<li><a href="index.php?page='.($page + 3).'">'.($page + 3).'</a></li>';
if($page + 2 <= $total) $page2right = '<li><a href="index.php?page='.($page + 2).'">'.($page + 2).'</a></li>';
if($page + 1 <= $total) $page1right = '<li><a href="index.php?page='.($page + 1).'">'.($page + 1).'</a></li>';


if ($page+5 < $total)
{
    $strtotal = '<li><p class="nav-point">...</p></li><li><a href="index.php?page='.$total.'">'.$total.'</a></li>';
}else
{
    $strtotal = ""; 
}

if ($total > 1)
{
    echo '
    <div class="pstrnav">
    <ul>
    ';
    echo $pstr_prev.$page5left.$page4left.$page3left.$page2left.$page1left."<li><a class='pstr-active' href='index.php?page=".$page."'>".$page."</a></li>".$page1right.$page2right.$page3right.$page4right.$page5right.$strtotal.$pstr_next;
    echo '
    </ul>
    </div>
    ';
}
?>
<?php
include ('/parts/footer.php');
?>

 
</body>
</html>

