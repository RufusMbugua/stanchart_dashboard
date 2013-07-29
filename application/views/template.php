<html>
	<head>
		<?php
		$this -> load -> view('sections/head');
		?>
	</head>
	<body>
		<header>
			
			<div class="navbar">
				
				<div class="navbar-inner">
					
					<a class="navbar-brand" href="#"><img src='<?php echo base_url();?>assets/images/Stan.png' />Standard Chartered Dashboard</a>
					<div id="user">
						
					</div>
				</div>
				
			</div>
		</header>
		<div class="content">
			<div class="chartOption" class="list-group">
	
		<?php
		$x = 0;
		 foreach($table_list as $table){
		 	if($x==0){
		 	echo "<a class='list-group-item active' value='$table'>".strtoupper(trim(str_replace('_',' '  , $table)))."</a>";
					}
			else{
				echo "<a class='list-group-item' value='$table'>".strtoupper(trim(str_replace('_',' '  , $table)))."</a>";
			}
			$x++;
		 }
		?>
</div>
<div class="right_content">
			<?php

			$this -> load -> view($contentView);
			?>
			</div>
		</div>

	</body>
	
</html>