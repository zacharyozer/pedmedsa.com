<?php include_once("header.php");
if(isset($_REQUEST["submit"])){
	$fields = array("newflag","patientname","patientmob","patientdob","patientyob","parentname","phone1","phone2","phone3","email","reason","appdate","apptime","provider");
	foreach ($fields as $field) {
		$$field = $_REQUEST["$field"];
		$message .= $field.": ".$_REQUEST["$field"]."\n"; 
	}
$headers = 'From: contact@pedmedsa.com' . "\r\n" .
'Reply-To: contact@pedmedsa.com' . "\r\n" .
'X-Mailer: PHP/' . phpversion();
mail("contact@pedmedsa.com, ".$email, 'Appointment Request', $message, $headers);
?>
<div align="center"><strong>Your request was successfully submitted.</strong></div>
<?php
}
?>
<div class="left_content">
  <p><strong>Request for Appointment</strong></p>
  <p>Please fill out this form in its entirety to request an appointment.</p>
  <p><strong>Note that this does not gaurantee availability.</strong></p>
  <p>A  staff member will contact you to confirm the exact date and time of your appointment within 5 business days. </p>
</div>
<div class="right_content">
<form action="/appointments.php" method="post">
  <table border="0" align="right" width="90%">
  <tr>
    <td>New patient </td>
    <td><select name="newflag" id="newflag">
	  <option selected="selected"></option>
      <option value="Yes">Yes</option>
      <option value="No">No</option>
    </select>    </td>
  </tr>
  <tr>
    <td>Patient's name</td>
    <td><input name="patientname" type="text" /></td>
  </tr>
  <tr>
    <td>Patient's date of birth </td>
    <td><select name="patientmob" id="patientmob">
	<option value="1"  >January</option>
	<option value="2"  >February</option>
	<option value="3"  >March</option>
	<option value="4"  >April</option>
	<option value="5"  >May</option>
	<option value="6"  >June</option>
	<option value="7"  >July</option>
	<option value="8"  >August</option>
	<option value="9"  >September</option>
	<option value="10" >October</option>
	<option value="11" >November</option>
	<option value="12" >December</option>
</select>

<select name="patientdob" id="patientdob">
	<option value="1"  >1</option>
	<option value="2"  >2</option>
	<option value="3"  >3</option>
	<option value="4"  >4</option>
	<option value="5"  >5</option>
	<option value="6"  >6</option>
	<option value="7"  >7</option>
	<option value="8"  >8</option>
	<option value="9"  >9</option>
	<option value="10" >10</option>
	<option value="11" >11</option>
	<option value="12" >12</option>
	<option value="13" >13</option>
	<option value="14" >14</option>
	<option value="15" >15</option>
	<option value="16" >16</option>
	<option value="17" >17</option>
	<option value="18" >18</option>
	<option value="19" >19</option>
	<option value="20" >20</option>
	<option value="21" >21</option>
	<option value="22" >22</option>
	<option value="23" >23</option>
	<option value="24" >24</option>
	<option value="25" >25</option>
	<option value="26" >26</option>
	<option value="27" >27</option>
	<option value="28" >28</option>
	<option value="29" >29</option>
	<option value="30" >30</option>
	<option value="31" >31</option>
</select>
  <select name="patientyob" id="patientyob">
    <?php for($i=date("Y")-30; $i<=date("Y"); $i++)
		  	if($year == $i)
				echo "<option value='$i' selected>$i</option>";
			else
				echo "<option value='$i'>$i</option>";
	?>
  </select></td>
  </tr>
  <tr>
    <td>Parent's name</td>
    <td><input name="parentname" type="text" /></td>
  </tr>
  <tr>
    <td>Phone number </td>
    <td>(<input name="phone1" type="text" size="3"/>) <input name="phone2" type="text" size="3"/>-<input name="phone3" type="text" size="4"/></td>
  </tr>
  <tr>
    <td>E-mail address </td>
    <td><input name="email" type="text" /></td>
  </tr>
  <tr>
    <td>Reason for appointment </td>
    <td><textarea name="reason"></textarea></td>
  </tr>
  <tr>
    <td>Appointment date </td>
    <td><input name="appdate" onfocus="showCalendarControl(this);" type="text" /></td>
  </tr>
  <tr>
    <td>Appointment time </td>
    <td><input name="apptime" type="text" /></td>
  </tr>
  <tr>
    <td>Provider</td>
    <td><select name="provider">
	      <option selected="selected"></option>
      <option value="Michael Ozer">Michael Ozer, MD</option>
      <option value="Rebecca Rocha-Davis">Rebecca Rocha-Davis, MD</option>
      <option value="Karen Gibbons">Karen Gibbons, MD</option>
      <option value="David Ross">David Ross Jr., MD</option>
      <option value="Patty Villarreal">Patty Villarreal, R.N., CPNP</option>
    </select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input name="submit" type="submit" /><input name="" type="reset" /></td>
  </tr>
</table>
</form>
</div>
<?php include_once("footer.php");?>
