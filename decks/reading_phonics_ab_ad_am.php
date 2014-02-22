<? # vim: noai:ts=2:sw=2

$x = array('cab', 'dab', 'gab', 'jab', 'lab', 'nab', 'tab', 'blab', 'crab', 'flab', 'grab', 'scab', 'slab', 'stab', 'bad', 'cad', 'dad', 'fad', 'had', 'lad', 'mad', 'pad', 'sad', 'tad', 'clad', 'glad', 'grad', 'am', 'dam', 'ham', 'jam', 'ram', 'yam', 'clam', 'cram', 'exam', 'gram', 'scam', 'sham', 'slam', 'swam', 'tram', 'scram');

foreach ($x as $i) {
	printf("<section class='random'><h1>%s</h1></section>\n", $i);
}
