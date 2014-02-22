<? # vim: noai:ts=2:sw=2

$x = array('back','hack','jack','lack','pack','rack','sack','black','crack','flack','knack','quack','shack','slack','snack','stack','track','whack','band','hand','land','sand','bland','brand','gland','grand','stand','demand','expand','strand','bash','cash','dash','gash','hash','lash','mash','rash','sash','brash','clash','crash','flash','gnash','slash','smash','spash','stash','trash');

foreach ($x as $i) {
	printf("<section class='random'><h1>%s</h1></section>\n", $i);
}
