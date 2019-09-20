<header>
		<div id = "header">
			<div class = "container-fluid">
				<div class = "row">
					<div class = "col-xs-12 col-sm-4">
						<div class = "logotype">
							<a href = "index.php?page=1"><img src = "style/images/logotype.png"/></a>
						</div>
					</div>
					<div class = "col-xs-12 col-sm-4">
						<div class = "navigation">
							<?php 
								echo "<a href = 'index.php?page=1'>".(is_numeric($_GET["page"]) ? ("<s>Work</s>") : ("Work"))."</a>  +  <a href = 'index.php?page=bio'>".($_GET["page"] == "bio" ? ("<s>Bio</s>") : ("Bio"))."</a>  +  <a href = 'index.php?page=contact'>".($_GET["page"] == "contact" ? ("<s>Contact</s>") : ("Contact"))."</a>";
							?>
						</div>
					</div>
					<div class = "col-xs-12 col-sm-4">
						<div class = "socials">
							<a href = "https://www.facebook.com/profile.php?id=100000055571777" target = "_blank"><img src = "style/images/facebook.png" width = "20px;"/></a>
							<a href = "http://www.twitter.com/ArturasNauseda" target = "_blank"><img src = "style/images/twitter.png" width = "20px;"/></a>
							<a href = "http://www.instagram.com/arturastss" target = "_blank"><img src = "style/images/instagram.png" width = "20px;"/></a>
							<a href = "mailto:info@arturasn.com" target = "_blank"><img src = "style/images/mail.png" width = "26px;"/></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>