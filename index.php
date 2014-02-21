<? # vim: noai:ts=2:sw=2

define('BASE_PATH', '/var/www/swipecards.co/htdocs');
define('BASE_URL', 'http://swipecards.co');
define('SLIDESHOW', true);

require_once(BASE_PATH . '/decks.inc.php');

header('X-Robots-Tag: noindex');
header('X-Powered-By: Siege (dot) Org');

if (is_array($_GET)
and array_key_exists('preview', $_GET)
and preg_match('/^([\w-]+)$/', $_GET['preview'], $mx)) {
	$deck = array('title' => 'PREVIEW');
	$deck_file = sprintf('%s.php', $_GET['preview']);
 	require_once(BASE_PATH . '/show.php');

} elseif (is_array($_SERVER)
and array_key_exists('PATH_INFO', $_SERVER)
and preg_match('/^\/(\w+)\/(\w+)\/([\w-]+).html$/', $_SERVER['PATH_INFO'], $mx)
and array_key_exists($mx[1], $decks)
and array_key_exists($mx[2], $decks[$mx[1]])
and array_key_exists($mx[3], $decks[$mx[1]][$mx[2]])) {
	$deck = &$decks[$mx[1]][$mx[2]][$mx[3]];
	$deck_file = sprintf('%s_%s_%s.php', $mx[1], $mx[2], $mx[3]);
 	require_once(BASE_PATH . '/show.php');

} else {
  require_once(BASE_PATH . '/list.php');
}

