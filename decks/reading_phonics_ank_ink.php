<? # vim: noai:ts=2:sw=2

$x = array('bank','dank','lank','rank','tank','yank','blank','chank','crank','drank','flank','frank','prank','spank','thank','shrank','ink','link','mink','rink','sink','wink','blink','brink','clink','drink','slink','stink','think','shrink');

foreach ($x as $i) {
	printf("<section class='random'><h1>%s</h1></section>\n", $i);
}
