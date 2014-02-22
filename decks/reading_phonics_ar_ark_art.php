<? # vim: noai:ts=2:sw=2

$x = array('bar','car','far','jar','par','tar','char','scar','spar','star','ark','bark','dark','hark','lark','mark','park','shark','spark','stark','art','cart','dart','mart','part','tart','chart','smart','start');

foreach ($x as $i) {
	printf("<section class='random'><h1>%s</h1></section>\n", $i);
}
