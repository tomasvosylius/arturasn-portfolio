<body>
	<div id = "home">
		<div class = "container-fluid">
			<div class = "row">
				<div class = "col-xs-12 col-sm-3">
					<div class = "artwork-name">The Knife</div>
					<div class = "artwork-text">Promotional video</div>
					<div class = "artwork-subtext">Promotional video made to present my final major<br> project - magazine based on electronic music band called - The Knife.</div>
				</div>
				<div class = "col-xs-12 col-sm-9">
					<div class = ""> <!-- bottom-align was here -->
						<div class = "ball-video">
							<?php AddBalls(true); ?>
						</div>
						<div class = "embed-container"> <iframe src = "https://player.vimeo.com/video/182836757?autoplay=1&loop=1&color=ffffff&title=0&byline=0&portrait=0" 
								class = "artwork-width"
								width = "100%"
								height = "190px"
								frameborder = "0"
								webkitallowfullscreen 
								mozallowfullscreen 
								allowfullscreen>
						</iframe></div>

						<?php AddButtons("previous-video","next-video"); ?>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
