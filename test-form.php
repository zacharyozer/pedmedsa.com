<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?
require_once "HTML/QuickForm.php";

$form = new HTML_QuickForm('contact_form', 'post');

$form->addElement('text',     'name',          'Name');
$form->addElement('textarea', 'address',       'Mailing Address');
$form->addElement('text',     'email_address', 'Email Address');
$form->addElement('text',     'home_phone',    'Home Phone');
$form->addElement('text',     'cell_phone',    'Cell Phone');
$form->addElement('text',     'subject',       'Subject');
$form->addElement('textarea', 'message',       'Message');   
$form->addElement('submit',   'submit',        'Submit');

$form->applyFilter('__ALL__', 'trim');

$form->addRule('name', 
               'Please enter your name.', 
               'required');
$form->addRule('email_address', 
               'Please enter your email address.', 
               'required');
$form->addRule('home_phone', 
               'Please enter your home phone number.', 
               'required');
                
if ($form->validate()) {
  $form->freeze();
  $form->process("process_data", false);
}
else {
  $form->display();
}

function process_data ($values) {
  require_once "emailHelper.php";
  emailValues($values);
}
?>
</body>
</html>
