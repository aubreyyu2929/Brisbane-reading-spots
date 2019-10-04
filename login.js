$(document).ready(function(){
	$("#login").click(function(event) {
		var name = $("#username").val();
		var pwd = $("#password").val();
		if(name=="")
		{
		   alert("user name cannot be null！");
		}
		else if(pwd=="")
		{
		   alert("password cannot be null！");
		}
		else if(pwd!="" && pwd.length < 6){
			alert("password cannot be less than 6 digits！");
		}
		else if(name!="" && pwd !="" && pwd.length >= 6)
		{
			if(name == "20190926" && pwd == "123456"){
				alert("welcome, 20190926！");
				window.open("foryou.php","_blank"); 
			}
			else{
				alert("wrong username or password！");
				window.location.href = "index.html";
			}

		}
	});
});