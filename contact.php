
<?php
include("includes/header.php");
?>


<!-- start header -->

<div id="menu">
	<?php
	include("includes/menu.php");
	?>
</div>

<!-- end header -->


<!-- start content -->

		<div id="content">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="post">
							<h1 class="title">Contact us</h1>
							<div class="entry" >
								<form action="process_contact.php" method="POST" class="well">
									<br>Name :<br>
									<input type='text' name='nm' size=35>
									<br><br>
									E-mail ID:<br>
									<input type='text' name='email' size=35>
									<br><br>
									Query:<br>
									<textarea cols="40" rows="5" name='query' ></textarea>
									<br><br>
									<input  type='submit' name='btn' value='   OK   '  >
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	
	
	<!-- end contain -->
	
	<!-- start footer -->
	<div id="footer">
		<?php
		include("includes/footer.php");
		?>
	</div>

	<!-- end footer -->
