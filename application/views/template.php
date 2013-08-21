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
			$this -> load -> view('chartLoader');
			?>
			</div>
		</div>
<script type="text/javascript">
	$(document).ready(function(){
		var link;
		var selected;
		selected=$('.active').attr('value');
		$('.right_content').load("<?php  echo base_url();?>c_dashboard/getChart/"+encodeURIComponent(selected)+"/bar");
		$("a.list-group-item").click(function(){
			$("a.list-group-item").removeClass("active");
			$(this).addClass("active");
			selected=$(this).attr('value');
			$('.right_content').load("<?php  echo base_url();?>c_dashboard/getChart/"+encodeURIComponent(selected)+"/column");
			
		});
	
	$(".btn").click(function(){
		alert(' ');
	});
	});
</script>
	</body>
	
</html>