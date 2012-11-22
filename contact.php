<?php include_once("header.php");
if(isset($_REQUEST["submit"])){
	$fields = array("rname","email","reason");
	foreach ($fields as $field) {
		$$field = $_REQUEST["$field"];
		$message .= $field.": ".$_REQUEST["$field"]."\n"; 
	}
$headers = 'From: contact@pedmedsa.com' . "\r\n" .
'Reply-To: contact@pedmedsa.com' . "\r\n" .
'X-Mailer: PHP/' . phpversion();
mail("contact@pedmedsa.com, ".$email, 'Question or Comment', $message, $headers);
?>
<div align="center"><strong>Your question / comment was successfully submitted.</strong></div>
<?php
}
?>
<div class="left_content">
  <p><strong>Questions and Comments </strong></p>
  <p><strong>DO NOT USE THIS FORM IN THE EVENT OF AN EMERGENCY.</strong></p>
  <p>A  staff member will contact you  with a response within 5 business days. </p>
</div>
<div class="right_content">
<form action="/contact.php" method="post">
  <table border="0" align="right" width="90%">
  <tr>
    <td>Name</td>
    <td><input name="rname" type="text" /></td>
  </tr>
  <tr>
    <td>E-mail address </td>
    <td><input name="email" type="text" /></td>
  </tr>
  <tr>
    <td>Question / Comment </td>
    <td><textarea name="reason"></textarea></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input name="submit" type="submit" /><input name="" type="reset" /></td>
  </tr>
</table>
</form>
</div>
<?php include_once("footer.php");?>
