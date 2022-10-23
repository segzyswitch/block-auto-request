<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOCKSP</title>
    <link rel="stylesheet" href="../bootstrap-3/css/bootstrap.min.css">
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container-fluid">
	<div class="row">
		<aside class="col-sm-2">
		
		</aside>
		<div class="col-sm-10">
			<nav class="navbar navbar-default row">
				<div class="navbar-header">
					<a href="index" class="navbar-brand">ADMIN PANEL</a>
				</div>
				<input type="hidden" id="initCounter" onchange="reloadTable()">
				<input type="hidden" id="autoCounter" onchange="updateItem()">
			</nav>
			
			<div class="well" id="base">
				
			</div>
		</div>
	</div>
</div>

<script src="../js/jquery-3.min.js"></script>
<script src="../bootstrap-3/js/bootstrap.min.js"></script>
<script>
$(document).ready(function() {
	// PRELOAD DATA
	$.post("config/process.php", {"row_counter":"true"},
		function(data, status){
			if (status == 'success') {
				$("#initCounter").val(data);
				$("#autoCounter").val(data);
			}else {
				alert(data);							
			}
		}
	);
	//FETCH TABLE
	$.post("config/process.php", {"fetch_table":"true"},
		function(data, status){
			if (status == 'success') {
				$("#base").html(data);
			}else {
				alert(data);							
			}
		}
	);
	
	var myTimer = setInterval(reloadPage, 500);
	
	function reloadPage(){
		$.post("config/process.php", {"row_counter":"true"},
			function(data, status){
				if (status == 'success') {
					$("#autoCounter").val(data);
					if ( $("#autoCounter").val() !== $("#initCounter").val() ) {
						//FETCH TABLE
						$.post("config/process.php", {"fetch_table":"true"},
							function(data, status){
								if (status == 'success') {
									$("#base").html(data);
								}else {
									alert(data);							
								}
							}
						);
						$("#initCounter").val( $("#autoCounter").val() );
					}
				}else {
					alert(data);
				}
			}
		);
	}
	
});
	
function sendAuth(render) {
	var form_id = render.id;
	$.ajax({
		url: "config/process.php",
		type: "POST",
		data: new FormData(render),
		cache: false,
		contentType: false,
		processData: false,
		beforeSend: function() {
			//alert("sending...");
		},
		success: function(data) {
			alert(data);
		},
		error: function() {
			alert("Error!");
		}
	});
}
</script>
</body>
</html>







