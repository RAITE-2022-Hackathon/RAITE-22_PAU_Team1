<?php



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hackathon";
 $lastna = '';
 $firstna = '';
// Connection
$con = new mysqli($servername,$username, $password,$dbname);
 
// For checking if connection is
// successful or not
if ($con->connect_error) {
  die("Connection failed: "
      . $con->connect_error);
}

$token = $_SESSION['access-token'];
$get_post = "SELECT users.lastname,users.firstname,post.id,post.post_by, post.post_content, post.post_id, date(post.date_Time) as dates,time(post.date_time) as timess FROM post,users where post.post_by = users.email order by post.date_time asc";
$run_get_post = mysqli_query($con,$get_post);
$check_data = mysqli_num_rows($run_get_post);
if ($check_data > 0) {
	while ($row = mysqli_fetch_assoc($run_get_post)) {
	$lastna = $row['lastname'];
	$firstna = $row['firstname'];



			?>
				<a href="profile.php?id=<?= $row['id']?>">
				 <div class="card">
                    <div class="card-body">
                    <h3><?php echo $row['lastname'].$row['firstname'] ?></h3>
                        <p class="card-text"><?php echo $row['post_content']?></p>
                        <button class="card-link" href="#">LIKE</button>
                        <button class="card-link" href="#">Comment</button>
                    </div>
                </div>
            </a>
                <br>
               
			<?php
		}	
}
