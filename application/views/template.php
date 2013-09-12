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
						
						<div id="user-text"><i class="icon-user"></i>Welcome Guest</div>
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

if(isset($compare)){

?>
<div class="compare top-bottom">
</div>
<div class="compare top-bottom">
</div>
<?php

}
else{
	$this -> load -> view('chartLoader');
}
	?>
	
			<?php
			
			$this -> load -> view('chartLoader');
			?>
			</div>
		</div>
<script type="text/javascript">
	$(document).ready(function(){
		var link;
		var selected;
		var btnVal;
		var btnClicked;
		var branches = new Array(1,2);
		
		selected=$('.active').attr('value');
		$('.active').prepend("<i class='icon-bar-chart'>");
		$('.right_content').load("<?php  echo base_url();?>c_dashboard/getChart/"+encodeURIComponent(selected)+"/bar");
			
	
		
		$("a.list-group-item").click(function(){
			$("a.list-group-item").removeClass("active");
			$("a.list-group-item i").remove();
			$(this).addClass("active");
			$(this).prepend("<i class='icon-bar-chart'>");
			selected=$(this).attr('value');
			$('.right_content').load("<?php  echo base_url();?>c_dashboard/getChart/"+encodeURIComponent(selected)+"/bar");
			
		});
	
$(document).on('click', 'button.btn', function(){
    
    btnVal = $(this).attr('value');
    
    if(btnVal=='compare'){
    	$('.right_content').load("<?php  echo base_url();?>c_dashboard/loadBranch/"+encodeURIComponent(selected));}
    else{
    	$('.right_content').load("<?php  echo base_url();?>c_dashboard/getChart/"+encodeURIComponent(selected)+"/"+btnVal,function(){
    		
    	});
    }
    
    	
	//$('button.btn').delay(1000000).removeClass('active');
   // $(this).delay(120000).addClass('active');
});
	
	});
</script>
	</body>
	
</html>