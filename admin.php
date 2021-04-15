<!DOCTYPE html>
<html>
<head>
	<title>Event Admin</title>
	<link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<body>
	<div class="menu">
		<div class="wrapper">
			 <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="categories.html">Categories</a>
                    </li>
                    <li>
                        <a href="AllEvents.html">All Events</a>
                    </li>
                    <li>
                        <a href="admin.php">Admin</a>
                    </li>
                </ul>
		</div>
	</div>

	<div class="main-content">
		<div class="wrapper">
			<h1>ADD EVENT</h1>
			
			<br><br>

			<form action="" method="POST" enctype="multipart/form.data">
				
				<table class="tbl.30">
					<tr>
						<td>title:</td>
						<td>
							<input type="text" name="title" placeholder="Event title">
						</td>
					</tr>



					<tr>
						<td>Description</td>
						<td>
							<textarea name="description" cols="30" rows="5" placeholder="Event Description"></textarea>
						</td>

					</tr>

					<tr>
						<td>Price:</td>
							<td>
							<input type="number" name="price">
							</td>
					</tr>

					<tr>
						<td>Select Image:</td>
							<td>
								<input type="file" name="image">
							</td>
					</tr>

					<tr>
						<td>Category:</td>
						<td>
							<select name="Category">
								<option value="1">Adventure</option>
								<option value="2">Music</option>
								<option value="3"> Hackathon</option>
							</select>
						</td>
					</tr>

					<tr>
						<td colspan="2">
							<input type="submit" name="submit" value="Add Event" class="btn-primary">
						</td>
					</tr>
				</table>
			</form>
			
		</div>
		
	</div>
	<br><br>
	<div class="clearfix"></div>

	<div class="footer">
		<div class="wrapper">
			<p class="text-center"> 2021 All rights reserved</p>
		</div>
	</div>

</body>
</html>