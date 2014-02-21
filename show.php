<? # vim: noai:ts=2:sw=2

if (! defined('SLIDESHOW'))
  trigger_error('No direct access', E_USER_ERROR);

?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">

<title><?=$deck['title']?></title>
<base href="<?=BASE_URL?>" target="_self">

<meta name="author" content="CJ Niemira <siege@siege.org>">
<meta name="description" content="<?=$deck['desc']?>">
<meta name="robots" content="noindex, nofollow" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
<link rel="icon" href="<?=BASE_URL?>/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?=BASE_URL?>/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="<?=BASE_URL?>/reveal.js/css/reveal.min.css">
<link rel="stylesheet" href="<?=BASE_URL?>/reveal.js/css/theme/serif.css" id="theme">
<!--[if lt IE 9]>
<script src="<?=BASE_URL?>/reveal.js/lib/js/html5shiv.js"></script>
<![endif]-->
</head>

<body>
<div class="reveal">
<div class="slides">
<section>
<h2><?=$deck['title']?></h2>
<h4><?=$deck['desc']?></h4>
<p><small>Use arrow keys, the control pad, or swipe to change pages.</small></p>
</section>
<? require_once(BASE_PATH .'/decks/'. $deck_file) ?>
</div>
</div>

<script src="<?=BASE_URL?>/reveal.js/lib/js/head.min.js"></script>
<script src="<?=BASE_URL?>/reveal.js/js/reveal.min.js"></script>

<script>
Reveal.initialize({
	controls: true,
	keyboard: true,
	overview: true,
	progress: true,
	history: false,
	center: true,
	loop: false,

	width: 1024,
	height: 786,
	margin: 0.1,
	minScale: 0.25,
	maxScale: 1.5,

	theme: 'serif',
	transition: 'concave',

	dependencies: [
		{ src: '/reveal.js/lib/js/classList.js', condition: function() { return !document.body.classList; } }
		, { src: '/reveal.js/plugin/markdown/showdown.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } }
		, { src: '/reveal.js/plugin/markdown/markdown.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } }
	]
});
</script>

<div class="share-reveal" style="position: absolute; bottom: 24px; left: 1em; z-index: 20;">
	<a href="<?=BASE_URL?>" target="_self" style="color: #807A71; font-family: Arial; font-weight: bold; text-decoration: none; font-size: 16px;">Home</a>
</div>

</body>
</html>
