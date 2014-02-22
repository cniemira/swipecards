<? # vim: noai:ts=2:sw=2

$x = range('a','z');

foreach ($x as $i) {
	printf("<section class='random'><h1>%s</h1></section>\n", $i);
}
