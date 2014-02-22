<? # vim: noai:ts=2:sw=2

if (! defined('SLIDESHOW'))
	trigger_error('No direct access', E_USER_ERROR);

?>
<!doctype html>
<html lang="en" manifest="<?=BASE_URL?>manifest.txt">
<head>
<meta charset="utf-8">

<title>SwipeCards!</title>
<meta name="author" content="CJ Niemira <siege@siege.org>">
<meta name="description" content="Free, simple flashcards. No ads, no distractions.">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<link rel="apple-touch-icon-precomposed" href="<?=BASE_URL?>static/icon.png" />

<link rel="icon" href="<?=BASE_URL?>favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?=BASE_URL?>favicon.ico" type="image/x-icon">

<style>
@media screen and (max-width: 320px) {
  body, html { margin: 0; padding: 0; }
  dd, dt, div { margin: 0; padding: 0.4em; }
  dd>span { margin: 0; padding: 0; }
  h1, h2 { text-align: center; margin: 0; padding: 0.2em 0; }
  img { display: none !important; }
}
@media screen and (max-width: 800px) {
  img { height: auto; width: 100px; }
  p { display: none !important; }
}
a:hover { text-decoration: none; }
a:visited { color: blue; }
body { min-width: 320px; }
dd { padding-top: 0.2em; padding-bottom: 0.2em; overflow:hidden; text-overflow: ellipsis; white-space: nowrap; } 
dd:nth-of-type(odd) { background-color: #fafafa; } 
dd>label { margin-left: 0.2em; }
dd>span { display: inline-block; width: 320px; }
dt { font-weight: bold; padding-bottom: 0.4em; }
dt:nth-of-type(1n+2) { padding-top: 1em; }
img { float: right; padding: 0.5em 1em; }
ul { list-style: disc outside none; }
</style>

<script src="<?=BASE_URL?>jquery/jquery-2.1.0.min.js"></script>
</head>

<body>
<img src="<?=BASE_URL?>static/logo.png" />
<h1>SwipeCards!</h1>
<div><em>Free, simple flashcards. No ads, no distractions.</em></div>
<p>I wanted a simple web-based, mobile friendly flashcard tool that wasn't cluttered up with ads, dancing animals, and colorful gimicks. It may sound old-fashioned, but when I was a kid flashcards were printed on plain 3"x5" cards. I learned best <em>when a parent helped to quiz me</em>, and I was never rewarded with a distracting jingle or cartoon. When I had kids of my own, I began looking for the latest technology-powered educational advances and was both amazed and disappointed by the number of apps which pretend to be educational tools, but are in reality simple games. While I'm a big fan of games (even educational ones), the fact that I couldn't find any acceptable substitutes for a good old deck of flashcards was disheartening. So rather than get to work on piles of bulky index cards, I decided to chop down a digital tree (better that than a real one) and put together the exact tool that I wanted.</p>
<p>SwipeCards is a collection of ridiculously simple browser-based flashcards. Just use the arrow keys, control pad, or swipe to advance through the deck. Decks are "shuffled" automatically with each reload. They don't keep score, and they don't tell you if you're right or not, because they're not meant as a game. They are meant as a tool for parents and educators to use <em>with</em> a child.</p>
<?
foreach (array_keys($decks) as $cat) {
?>
<h2><?=ucwords($cat)?></h2>
<dl>
<?
	foreach (array_keys($decks[$cat]) as $subcat) {
?>
<dt><?=ucwords($subcat)?></dt>
<?
		foreach (array_keys($decks[$cat][$subcat]) as $set) {
			$deck = sprintf('%s/%s/%s.html', $cat, $subcat, $set);
			$name = $decks[$cat][$subcat][$set]['title'];
			$desc = isset($decks[$cat][$subcat][$set]['desc'])
						? $decks[$cat][$subcat][$set]['desc']
						: null;
?>
<dd><span><a href="<?=$deck?>"><?=$name?></a></span> <label><?=$desc?></label></dd>
<?
		}
	}
?>
</dl>
<?
}
?>
<div>
<small>Powered by <a class="remote" href="http://siege.org" target="_new">Siege (dot) Org</a> using <a class="remote" href="http://revealjs.com" target="_new">reveal.js</a> and <a class="remote" href="http://mathscribe.com/author/jqmath.html" target="_new">jqMath</a></small>
</div>
<script>
$('a:not(.remote)').each(function(){
 $(this).prop("onClick", null);
 $(this).bind("click", function(){ window.location = this.href; return false; });
});
</script>
</body>
</html>
