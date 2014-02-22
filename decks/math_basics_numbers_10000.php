<script>
var max = 10000;
var min = 1000;
var num = 20;
var arr = [];

while (arr.length < num) {
	rnd = Math.floor(Math.random() * (max - min + 1)) + min;
	if (!(rnd in arr)) {
		arr.push(rnd);
	}
}

$(arr).each(function(i){
	$('#deck').append("<section><h1>"+arr[i]+"</h1></section>");
});
</script>
