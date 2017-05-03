function SaveName() {
	var value = document.getElementById('NaamLeerling').value;
	document.cookie = 'cookieNaamLeerling='+value+'; expires=Sun, 2 Jan 2020 20:20:20 UTC; path=/'
}