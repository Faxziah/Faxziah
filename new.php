<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<?php include 'to_mysql.php' ?>
	<meta name="description" content="Блог об урологии">
	<title><?php echo $title ?></title>
	<link rel="stylesheet" type="text/css" href="styles/header.css"/>
	<link rel="stylesheet" type="text/css" href="styles/new.css"/>
	<link rel="stylesheet" type="text/css" href="styles/footer.css"/>
	<link rel="icon" type="image/png" href="/photo/logo.png" />
	
	<!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
       (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
       m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
       (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
    
       ym(86205815, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
       });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/86205815" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-S2DRCKCG08"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-S2DRCKCG08');
</script>

</head>
<body>
	<?php include 'header.html' ?>

	<div class="new">
		
<?php
	echo "<div><h1> $title </h1>"."<img src=$photo alt='$title'>"."<p> $content </p></div>"."<div><h2>Дата публикации: $date </h2></div>";
?>

	</div>

<?php include 'footer.html' ?>

</body>
</html>