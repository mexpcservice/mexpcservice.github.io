<!DOCTYPE html>
<html>
<head>
<script>
function formSubmit()
{
document.getElementById("frm1").submit();
}
</script>
</head>
<body>

<p>Enter some text in the fields below, then press the "Submit form" button to submit the form.</p>

<form id="frm1" action="form_action.asp">
First name: <input type="text" name="fname"><br>
Last name: <input type="text" name="lname"><br><br>
<input type="button" onclick="formSubmit()" value="Submit form">
</form>

</body>
</html>