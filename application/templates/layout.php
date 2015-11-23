<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Sparkle -- spark appication skeleton</title>

	<!-- css -->
	<link rel="stylesheet" href="/ui/css/vendor/reset.css">
	<!-- js -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="/ui/js/main.js"></script>

</head>
<body>



<nav>
<ul>
<?php $this->insert('partials/navigation') ?>
</ul>
</nav>

<section>

<h2>h2 title</h2>


<article>

<div>
Hello <?php // include $this->e($name) ; ?>!
</div>



</article>

</section>

<footer>
<?php $this->insert('partials/footer') ?>
</footer>



</body>
</html>