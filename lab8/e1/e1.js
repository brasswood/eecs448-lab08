function validate()
{
    let match = document.forms["form"]["password"].value == document.forms["form"]["verify"].value
    if (document.forms["form"]["password"].value.length < 8)
    {
	alert("Password must be at least 8 characters long.");
    }
    else if (!match)
    {
	alert("Passwords don't match");
    }
    else
    {
        alert("Okay");
    }

}
