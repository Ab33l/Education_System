<?php
include 'header.php';
?>
<h1>Search Page</h1>

<div class="searchresults-container">
	<?php
	if (isset($_POST['submit-search'])) {
		$search = mysqli_real_escape_string($conn, $_POST['search']);
		$sql = "SELECT * FROM school_details WHERE Name LIKE '%$search%' OR Location LIKE '%$search%'";
		$result = mysqli_query($conn, $sql);
		$queryResult = mysqli_num_rows($result);

		if ($queryResult > 0) {
			echo "There are ".$queryResult." results";
			while ($row=mysqli_fetch_assoc($result)) {
				echo "<a href='school.php?name=".$row['Name']."'><div class='search-results-box'>
			      <h3>".$row['Name']."</h3>
			      <p>".$row['Location']."</p>
 			      <p>".$row['School_Level']."</p>
			      <p>".$row['Description']."</p>
			      </div></a>";
			}
		} else {
			echo "No results Found";
		}
	}
	?>
	
</div>