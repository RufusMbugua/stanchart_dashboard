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
					<a class="brand" href="#">Standard Chartered Dashboard</a>
					<div id="user">
						
					</div>
				</div>
				
			</div>
		</header>
		<div class="content">
			<?php

			$this -> load -> view($contentView);
			?>
		</div>

	</body>
</html>