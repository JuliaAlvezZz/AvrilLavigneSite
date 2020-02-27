function signUp(login, sign){
	var d1=document.getElementById(login);
	var d2=document.getElementById(sign);

	d1.style.opacity='0';
	d2.style.opacity='0.7';
	d2.style.zIndex='9999';
	d1.style.zIndex='0';
}

function logIn(login, sign){
	var d1=document.getElementById(login);
	var d2=document.getElementById(sign);

	d1.style.opacity='0.7';
	d2.style.opacity='0';
	d2.style.zIndex='0';
	d1.style.zIndex='9999';
}