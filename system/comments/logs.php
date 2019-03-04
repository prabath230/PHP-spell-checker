<?php

require("../db/db.php");
$result = mysqli_query($con, "SELECT * FROM comments ORDER BY id ASC");
while($row=mysqli_fetch_array($result)){
echo "<div class='comments_content'>";
echo "<h4><a href='delete.php?id=" . $row['id'] . "'> <button>Delete</button></a></h4>";
echo "<h1>" . $row['name'] . "</h1></br>";
echo "<h3>" . $row['comments'] . "</h3></br>";
echo "<h2>" . $row['date_publish'] . "</h2></br>";
echo "</div>";
}
mysqli_close($con);

?>