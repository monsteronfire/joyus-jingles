<?php include 'header.php';?>

<?php
include('conn.php');

$sql = "update photos set txtname='".$_POST['txtname']."', audioTrack='".$_POST['audioTrack']."' where auto_id='".$_POST['photoID']."'";
mysql_query($sql, $conn) or die(mysql_error());
?>

<div class="upload-wrapper">
	<div class="progress-bar progress-1">
		<div class="step-box is-active">
			<p>Upload Image</p>
			<span class="indicator-circle"></span>
		</div>

		<div class="step-box is-active">
			<p>Choose Your Tune</p>
			<span class="indicator-circle"></span>
		</div>

		<div class="step-box is-active">
			<p>Submit</p>
			<span class="indicator-circle"></span>
		</div>

		<div class="bar-box">
			<div class="indicator-bar bar-active"></div>
			<div class="indicator-bar bar-active"></div>
		</div>
	</div><!--.progress-bar-->

	<div class="intro submit-intro">
		<h3>
			You're done! Now let's go make some noise.<br />Merry Christmas!
		</h3>
	</div><!--.intro-->

	<div class="red-button"><a href="index.php">Make some noise!</a></div>



	<!-- <ul class="upload-option-box">
		<li>
			<a href="index.php">
				<span class="icon icon-back-home"></span>
				<p>Back to Home</p>
			</a>
		</li>

		<li>
			<a href="photo-upload.php">
				<span class="icon icon-tweet-this"></span>
				<p>Tweet This</p>
			</a>
		</li>

		<li>
			<a href="photo-take.php">
				<span class="icon icon-share-fb"></span>
				<p>Share to Facebook</p>
			</a>
		</li>
	</ul> -->
</div><!---->

<?php include 'footer.php';?>