<!DOCTYPE html>
<html>
<head>

</head>
<body>

<form name="myForm" action = "work.php"
onsubmit="return formValidate.validateField('myForm');" method="post">
Name: <input type="text" name="fname" required/><br/>
Pass: <input type="password" name="pass"/><br/>
Number: <input type="number" name="num"/><br/>
check: <input type="checkbox" name="chk1" value="1"/><br/>
check1: <input type="checkbox" name="chk1" value="2"/><br/>
check2: <input type="checkbox" name="chk1" value="3"/><br/>
radio: <input type="radio" name="rad" value=""/><br/>
email: <input type="email" name="mail"/><br/>
date: <input type="date" name="dt"/><br/>
<input type="submit" value="Submit"/>
</form>

<script type="text/javascript" <source src="js/formValidate.js" type="mimetype">>

</script>
</body>
</html>
