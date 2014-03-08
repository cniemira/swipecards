<? # vim: noai:ts=2:sw=2

$x = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');

foreach ($x as $i) {
	printf("<section class='random'><h1>%s</h1></section>\n", $i);
}
