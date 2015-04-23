<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My album</title>

	<!-- Bootstrap CSS -->
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<a href="http://localhost/myalbum/index.php/pics/show"><h1 class="text-center">Big IMG</h1></a>
	<a href="http://localhost/myalbum/index.php/auth/logout"> Logout </a>
	<div class="container">
		<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
			<div id="main">
				<?php
				if($this->uri->segment(3)!= null){
					if($this->uri->segment(4) != 999)
					{
						echo '<a href=""><img src="http://localhost/myalbum/album/'.$pics[$this->uri->segment(4)-1]->name.'.jpg" width="700px" height="500px" alt=""></a>';
					}
					else {
						echo "Yolo, Live one, Live Forever";	
					}

				}
				else{
					echo 'Welcome to my album';
				}
				?>
			</div>
			<br>
			<div id="thumb">
				<form class="form-inline" role="form">
					<div class="form-group">
						<?php 
						if($this->uri->segment(3)!= null){
								$i=0;
								foreach ($pics as $p) {
									if($p->aID == $this->uri->segment(3)){
										echo '<a href="http://localhost/myalbum/index.php/pics/show/'.$p->aID.'/'.$p->id.'">
										<img src="http://localhost/myalbum/album/'.$p->name.'.jpg" alt="" width="100px">
									</a>';
								}
							}
						}
						else{
							echo '<center><img src="http://localhost/myalbum/album/smile.jpg" alt=""><center>';
						}
						?>
				</div>
			</form>
		</div>

	</div>

	<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
		<?php 
		if($this->uri->segment(3)!= null){
			$albums = [];
			foreach ($pics as $p) {
				$obj['aID'] =  $p->aID;
				$obj['album'] =  $p->album;
				// neu nhu ko co trong album
				if(!in_array($obj, $albums)){
					$albums[] = $obj;
					echo '<p><a href="http://localhost/myalbum/index.php/pics/show/'.$p->aID.'/999">'.$obj['album'].'</a></p>';
				}
			}
		}
		else{
			echo  '<a href="http://localhost/myalbum/index.php/pics/show/1/999">Show album</a>';
		}
		?>

	</div>

</div>
<!-- jQuery -->
<script src="//code.jquery.com/jquery.js"></script>
<!-- Bootstrap JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>
</html>