<script>
	$("#username").keyup(function() {
		var username = document.getElementById("username");
		if (!username.value == null || !username.value == "") {
			$("#usaz").addClass('FATdn');
		}

		if (username.value == null || username.value == "") {

			$("#usaz").removeClass('FATdn');
		}
	});



	$("#password").keyup(function() {
		var password = document.getElementById("password");
		if (!password.value == null || !password.value == "") {
			$("#usazz").addClass('FATdn');
		}

		if (password.value == null || password.value == "") {

			$("#usazz").removeClass('FATdn');
		}
	});

	// var ipv4_address = $("#ipv4");
	// ipv4_address.inputmask({
	// 	alias: "ip",
	// 	greedy: false, //The initial mask shown will be "" instead of "-____".
	// });
</script>