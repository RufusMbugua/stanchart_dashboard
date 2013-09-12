
<h3 class='chart-title'><i class="icon-bar-chart"></i><?php echo $chartTitle; ?>

<div class="btn-group chart-type">
	<button type="button" class="btn btn-default" value="line">
		Line
	</button>
	<button type="button" class="btn btn-default" value="bar">
		Bar
	</button>
	<button type="button" class="btn btn-default" value="stacked_bar">
		Stacked-Bar
	</button>
	<button type="button" class="btn btn-default" value="column">
		Column
	</button>
	<button type="button" class="btn btn-default" value="stacked_column">
		Stacked-Column
	</button>
</div>
<button type="button" class="btn btn-primary compare" value="compare">
	<i class="icon-asterisk"></i>Compare
</button></h3>
<?php

$this -> load -> view($contentView);


?>

