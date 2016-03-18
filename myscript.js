function checkForBlank()
{
	if (document.getElementById("name").value == '')
	{
	document.getElementById("nameLab").style.color = "red";
	document.getElementById("nameAsx").style.color = "red";
	window.scrollTo(0,0);
	return false;
	}
	
		if (document.getElementById("email").value == '')
	{
	document.getElementById("emailLab").style.color = "red";
	document.getElementById("emailAsx").style.color = "red";
	window.scrollTo(0,0);
	return false;
	}
}
