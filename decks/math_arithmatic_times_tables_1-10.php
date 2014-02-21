<? # vim: noai:ts=2:sw=2
?>
<section>
<p>These times tables are not shuffled.<br/>Use the up/down arrow to scroll through the second number in each set, and the right/left arrow to change sets (the first number).</p>
</section>
<?
$x = array();
foreach (range(1,10) as $i) {
?>
<section>
<?
	foreach (range(1,10) as $j) {
		printf("<section><h1>%d&times;%d</h1></section>\n", $i, $j);
	}
?>
</section>
<?
}
foreach ($x as $z) {
	print $z;
}
