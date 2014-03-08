<? # vim: noai:ts=2:sw=2

$x = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');

foreach ($x as $i) {
	printf("<section class='random'><h1>%s</h1></section>\n", $i);
}
