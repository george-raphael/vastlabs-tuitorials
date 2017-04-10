<?php include 'header.php'; ?>
	<form action="script.php" method="post">
		<label>Name:</label>
		<input type="text" name="name" value="France" placeholder="Write your username..." required>
			<br>
			<br>
			<br>
		<label>Email:</label>
		<input type="text" name="email" placeholder="Wrtie your email" required>
			<br>
			<br>
			<br>
			<input type="hidden" name="id" value="20">
		<input type="submit" value="Tell us ur Details">

	</form>
<?php include 'footer.php'; ?>

	