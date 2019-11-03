<?php session_start();
require('includes/config.php');
?>
<?php
include("includes/header.php");
?>


<!-- start menu -->

<div id="menu">
	<?php
	include("includes/menu.php");
	?>
</div>

<!-- end menu -->

<!-- start page -->
<div>
	<ul>
		<li id="search">
			<h2>Search course</h2>
			<form method="GET" action="#">
				<fieldset>
					<input type="text" id="#" name="#" value="" />
					<input type="submit" id="#" value="Search" />
				</fieldset>
			</form>
		</li>
		<li>
			<div class="">
				<h2>course Categories</h2>
				<ul class="mySidebar">
					<li><a href="#">Economics</a></li>
					<li><a href="#">Fiction</a></li>
					<li><a href="#">Forestry & WildLife</a></li>
					<li><a href="#">Health & Physics</a></li>
					<li><a href="#">Historical</a></li>
					<li><a href="#">Social</a></li>
					<li><a href="#">Sports & Physical Education</a></li>
					<li><a href="#">Terrorism</a></li>
					<li><a href="#">Tourism</a></li>
					<li><a href="#">Yoga</a></li>
				</ul>
			</div>
		</li>

	</ul>

</div>

<!-- end page -->

<!-- start footer -->
<div id="footer">
	<?php
	include("includes/footer.php");
	?>
</div>

<!-- end footer -->
</body>
</html>
