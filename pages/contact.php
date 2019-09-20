<style>

	.row input {
		background-color: rgba(0, 0, 0, 0);
		border: none;
		outline: none;
		font-weight: bold;
		font-size: 11px;
	}

</style>

<?php
	if(isset($_POST["send"]))
	{
		if(isset($_POST["contact_email"]) && $_POST["contact_email"] != "" && isset($_POST["contact_subject"]) && $_POST["contact_subject"] != "" && isset($_POST["contact_text"]) && $_POST["contact_text"] != "")
		{
			$headers = "From: ".$_POST["contact_email"];
			mail("info@arturasn.com", $_POST["contact_subject"], $_POST["contact_text"], $headers, "-f " . $_POST["contact_email"]);
			echo "
			<div class = 'container-fluid'>
				<div class = 'row'>
				 	<div class = 'col-xs-12'>
						<span style = 'font-size:11px;font-weight:bold'>Email sent</span>
					</div>
				</div>
			</div>
			";
		}
	}
?>

<body>
	<div id = "home">
		<div class = "container-fluid">
			<div class = "row">
				<form action = "" method = "post" enctype = "multipart/form-data">
					<div class = "col-xs-12">
						<span style = "font-weight: bold;font-size: 11px;">Email address </span><input type = "text" name = "contact_email" size = "48" style=""/>
					</div>
					<div class = "col-xs-12 col-sm-4" style = "margin-top:-17px;z-index:-1">
						<hr style="height:1px" color = "#000">
					</div>
					<div class = "col-xs-12">
						<span style = "font-weight: bold;font-size: 11px;">Subject </span><input type = "text" name = "contact_subject" size = "48" style=""/>
					</div>
					<div class = "col-xs-12 col-sm-4" style = "margin-top:-17px;z-index:-1">
						<hr style="height:1px" color = "#000">
					</div>
					<div class = "col-xs-12 col-sm-12">
						<textarea name = "contact_text"></textarea>
					</div>
					<div class = "col-xs-12 col-sm-4" style = "text-align:right;">
						<span style = "font-weight: bold;font-size: 11px;"><input type = "submit" name = "send" value = "Send"/></span>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
