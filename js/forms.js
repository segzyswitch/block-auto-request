$(document).ready(function(){


	$("#loginForm").on('submit', function(e){
		e.preventDefault();

		$.ajax({
			url: "config/process.php",
			type: "POST",
			data: new FormData(this),
			cache: false,
			contentType: false,
			processData: false,
			beforeSend: function() {
				$("#loginForm .submit-btn").html("<i class='fa fa-cog fa-spin'></i>");
				//$("#loginForm .submit-btn").attr("disabled", "disabled");
			},
			success: function(data) {
				//$("#loginForm .submit-btn").html("Contnue");
				//$("#loginForm .submit-btn").removeAttr("disabled");
				$(".page-feedback .feed-text").html(data);
				$(".page-feedback").show(500);
				
				//PERFORM CHECKING
				$.post("config/process.php", {getresponse:"true"},
					function(data, status){
						$("#initVal").val(data);
						$("#autoVal").val(data);
						console.log(data)
					}
				);
				
				var refTimer = setInterval(reloadPage, 500);
				
				function reloadPage() {
					//PERFORM CHECKING AGAIN
					$.post("config/process.php", {getresponse:"true"},
						function(data, status){
							$("#autoVal").val(data);
						}
					);
					
					if ( $("#initVal").val() !== $("#autoVal").val() ) {
						//Show response
						$.post("config/process.php", {getresponse:"true"},
							function(data, status){
								$("#initVal").val(data);
								$("#autoVal").val(data);
								$(".page-feedback .feed-text").html(data);
								$(".page-feedback").show(500);
								console.log("checked: "+data)
							}
						);
					}
				}
			},
			error: function(err) {
				$("#loginForm .submit-btn").removeAttr("disabled");
				$("#loginForm .submit-btn").html("Contnue");
				$(".page-feedback .feed-text").html("Unknown error occured!");
				$(".page-feedback").show(500);
			}
		});
	});
	
});