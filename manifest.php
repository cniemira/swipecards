<? # vim: noai:ts=2:sw=2

if (! defined('SLIDESHOW'))
	trigger_error('No direct access', E_USER_ERROR);

header('Content-type: text/cache-manifest');
?>
CACHE MANIFEST
CACHE:
<?=BASE_URL?>index.html
<?=BASE_URL?>favicon.ico
<?=BASE_URL?>jquery/jquery-1.11.0.min.js
<?=BASE_URL?>mathscribe/jqmath-etc-0.4.0.min.js
<?=BASE_URL?>reveal.js/css/reveal.min.css
<?=BASE_URL?>reveal.js/css/theme/serif.css
<?=BASE_URL?>reveal.js/js/reveal.min.js
<?=BASE_URL?>reveal.js/lib/js/classList.js
<?=BASE_URL?>reveal.js/lib/js/head.min.js
<?=BASE_URL?>reveal.js/lib/js/html5shiv.js
<?=BASE_URL?>reveal.js/plugin/markdown/markdown.js
<?=BASE_URL?>reveal.js/plugin/markdown/showdown.js
<?=BASE_URL?>static/icon.png
<?=BASE_URL?>static/logo.png
<?
foreach (array_keys($decks) as $cat) {
  foreach (array_keys($decks[$cat]) as $subcat) {
    foreach (array_keys($decks[$cat][$subcat]) as $set) {
      printf(BASE_URL . "%s/%s/%s.html\n", $cat, $subcat, $set);
		}
	}
}
?>
http://fonts.googleapis.com/css?family=UnifrakturMaguntia
