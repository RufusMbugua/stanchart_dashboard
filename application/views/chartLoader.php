<h3 class='chart-title'><?php echo $chartTitle; ?>

<div class="btn-group chart-type">
	<button type="button" class="btn btn-default"><img src='<?php echo base_url(); ?>assets/images/chart_ico/line.png' value='line'/>
	</button>
	<button type="button" class="btn btn-default"><img src='<?php echo base_url(); ?>assets/images/chart_ico/bar.png' value='bar'/>
	</button>
	<button type="button" class="btn btn-default"><img src='<?php echo base_url(); ?>assets/images/chart_ico/column.png' value='column'/>
	</button>
	<button type="button" class="btn btn-default"><img src='<?php echo base_url(); ?>assets/images/chart_ico/stacked-bar.png' value='stacked-bar'/>
	</button>
	<button type="button" class="btn btn-default"><img src='<?php echo base_url(); ?>assets/images/chart_ico/stacked-column.png' value='stacked-column'/>
	</button>
</div></h3>
<?php

$this -> load -> view($contentView);
?>