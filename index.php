<?php
	include("include/db_connect.php");
?>
 <!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<link href="reset.css" rel="stylesheet" type="text/css charset=windows-1251" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/j.js"></script>
    <script type="text/javascript" src="js/shop.js"></script>
	<title>hop</title>
</head>

<body>


<div id="block-body">

<?php
include("include/block-header.php"); 
	   
?>  

<div id="block-right">

<?php
include("include/block-category.php"); 
include("include/block-parameter.php"); 	   
include("include/block-news.php");
?> 
</div>



<div id="block-content"> 
<div id="block-sorting">
<p id="nav-breadcrumbs"><a href="index.php">Главная страница\ <span>Все товары </span></a></p>
<ul id="options-list">
<li>Вид:</li>
<li><img id="style-grid" src="image/grid.png" width="25" height="25" />  </li>
<li><img id="style-list" src="image/list.png" width="25" height="25" />  </li>
<li>Сортировка</li>
<li><a id="select-sort">Без сортировки</a>
<ul id="sorting-list"> 
<li><a href="">От дешевых к дорогим</a></li>
<li><a href="">От дорогих к дешевывм</a></li>
<li><a href="">Популярные</a></li>
<li><a href="">Новинки</a></li>
<li><a href="">От А до Я</a></li>


</ul>
</li>
</ul>
</div>

<ul id="block-tovar-grid">
<?php
	$result =mysqli_query($link," SELECT * FROM table_products");
    if (mysqli_num_rows($result)>0 )
    {
     $row=mysqli_fetch_array($result);
     do
     {
        if  ($row["image"] !="" && file_exists("./uploads_image/".$row["image"])) 
        {
         $img_path='./uploads_image/'.$row["image"];
         $max_width=200;
         $max_height=200;
         list($width,$height)=getimagesize($img_path);
         $ratioh=$max_height/$height;
         $ratiow=$max_width/$width;
         $ratio=min($ratioh,$ratiow);
         $width=intval($ratio*$width);
         $height=intval($ratio*$height);
    }else
    {
     $img_path="/image/placeholder.png";
     $width=110;
     $height=200;   
    }
        
        
        echo '
        <li>
        <div class="block-images-grid">
        <img src="'.$img_path.' " width="'.$width.'"height="'.$height.'"/>
        </div>
        <p class="style-tittle-grid"><a href="">'.$row["title"].'</a></p>
        <ul class="reviews-and-counts-grid">
        <li><img src="image/camera32.png"/><p>0</p></li>
        <li><img src="image/comment32.png"/><p>0</p></li>
        </ul>
        <a class="add-card-style-grid"><img src="image/shoppingcart32.png"/></a>
        <p class="style-price-grid"><strong>'.$row["price"].'</strong>руб.</p>
        <div class="mini-features">'.$row["mini_features"].'
        </div>
        
        </li>

        ';
     }
        while ($row=mysqli_fetch_array($result));
         
    }
?>
</ul>
</div>

<?php
include("include/block-footer.php"); 	
   
?>  
 </div>	  

</body>
</html>


