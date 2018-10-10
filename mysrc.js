function passMatch()
{
	var pass = document.getElementById("password").value;
	var retype = document.getElementById("retypepassword").value;
	var message = "";
	var noMatch = document.getElementById("nomatch");
	if(pass != retype)
		message = "Passwords don't match!";
	else
		message = "";
	document.getElementById("nomatch").innerHTML = message;
}
function start()
{
document.getElementById("retypepassword").addEventListener("keyup",passMatch,false);
}
window.addEventListener("load",start,false);