		<div class="title_head">
			<div class = "titleSecond">
				<div class = "title_left">
					<img src = "img/robet.png">
				</div>	
	<?php 
		if(isset($_SESSION['user'])){ ?>
					<div class = "title_right">
						<div class= "log">
							<a href="addmovie.php">
								上传
							</a>
						</div>
					</div>	
					<div class = "title_right">
						<div class= "log">
							<a href="user/logout.php">
								注销
							</a>
						</div>
					</div>								
					<div class = "title_right">
						<div class= "log">
							<a href=".php">
								<?php
									echo $_SESSION['user'];
								?>
							</a>
						</div>
					</div>
			</div>
		</div>;
				<?php								
		}else{
			 ?>
					<div class = "title_right">
						<div class= "log">
							<a href="login.php">
								登陆
							</a>
						</div>
					</div>
			</div>
		</div>
	<?php 	} ?>