<? # vim: noai:ts=2:sw=2
$s = 800;
$m = $s/2;
$n_sides = array(3, 4, 5, 6, 8);
$colors = array('red', 'lime', 'blue', 'yellow', '#F87217', 'purple');

foreach($n_sides as $n) {
	$points = array();
	$ca = (pi()*2)/$n;
	$sa = $n%2 ? pi()/2 : pi()/2 - $ca/2;

	for($i=0; $i<$n ; $i++) {
		$a = $sa + ($i * $ca);
		$x = round($m + $m * cos($a));
		$y = round($m - $m * sin($a)); 
		$points[] = sprintf('%d,%d', $x, $y);
	}

	foreach ($colors as $c) {
?>
<section class='random'>
	<svg height="<?=$s?>" width="<?=$s?>">
  	<polygon points="<?=implode(' ', $points)?>" style="fill:<?=$c?>; stroke: black; stroke-width: 10" />
	</svg>
</section>
<?
	}
}
