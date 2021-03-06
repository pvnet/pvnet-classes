<body style="font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif;">
<?php
//password auth
require('protect-this.php');

//check for returning actions
if ($_GET['deleted'] == 1) { ?>
<div style="outline: 1px solid green; padding: 5px;
    margin-bottom: 10px;">
	<img style="float: left" src="checkmark.png" />
	<p style="float: left; margin: 0px 5px;">Class deleted.</p><br /><br />
</div>
<?php } 
if (isset($_GET['studentenrolled'])) { ?>
<div style="outline: 1px solid green; padding: 5px;
    margin-bottom: 10px;">
	<img style="float: left" src="checkmark.png" />
	<p style="float: left; margin: 0px 5px;">Student enrolled.</p><a href=classhistory/view.php?id=<?php echo $_GET['studentenrolled'] ?>>View record</a><br /><br />
</div>
<?php } 
if (isset($_GET['edited'])) { ?>
<div style="outline: 1px solid green; padding: 5px;
    margin-bottom: 10px;">
	<img style="float: left" src="checkmark.png" />
	<p style="float: left; margin: 0px 5px;">Class edited.  <a href=classes/editclass.php?id=<?php echo $_GET['edited'] ?>>Edit class</a></p><br /><br />
</div>
<?php } 
if (isset($_GET['inserted'])) { ?>
<div style="outline: 1px solid green; padding: 5px;
    margin-bottom: 10px;">
	<img style="float: left" src="checkmark.png" />
	<p style="float: left; margin: 0px 5px;">Class inserted.  <a href=classes/editclass.php?id=<?php echo $_GET['inserted'] ?>>Edit class</a></p><br /><br />
</div> 
<?php }
if (isset($_GET['duplicated'])) { ?>
<div style="outline: 1px solid green; padding: 5px;
    margin-bottom: 10px;">
	<img style="float: left" src="checkmark.png" />
	<p style="float: left; margin: 0px 5px;">Class duplicated.  <a href=classes/editclass.php?id=<?php echo $_GET['duplicated'] ?>>Edit class</a></p><br /><br />
</div>
<?php } 
if (isset($_GET['custinserted'])) { ?>
<div style="outline: 1px solid green; padding: 5px;
    margin-bottom: 10px;">
	<img style="float: left" src="checkmark.png" />
	<p style="float: left; margin: 0px 5px;">Customer inserted.  <a href=customers/editcustomer.php?id=<?php echo $_GET['custinserted'] ?>>Edit customer</a></p><br /><br />
</div>
<?php }
if (isset($_GET['studentinserted'])) { ?>
<div style="outline: 1px solid green; padding: 5px;
    margin-bottom: 10px;">
	<img style="float: left" src="checkmark.png" />
	<p style="float: left; margin: 0px 5px;">Student inserted.  <a href=students/editstudent.php?id=<?php echo $_GET['studentinserted'] ?>>Edit student</a></p><br /><br />
</div>
<?php } ?>
<h3>CLASS ADMINISTRATION<br />
==============
</h3>
<p>
<a href="classes/selectclasstoedit.php">Manage classes</a><br /><br />
<a href="classes/insertclass.php">Insert a new class</a><br /><br />
<a href="customers/insertcustomer.php">Insert a new customer</a><br /><br />
<a href="customers/selectcustomertoedit.php">Manage customers</a><br /><br />
<a href="students/selectcustomertolink.php">Insert a new student</a><br /><br />
<a href="students/selectstudenttoedit.php">Manage students</a><br /><br />
<a href="students/selectstudenttoenroll.php">Enroll student in a class</a><br /><br />
<a href="classhistory/index.php">View class registration history</a><br /><br />
<a href="transactions/selecttransactiontoedit.php">Manage transactions</a><br /><br />
<a href="spreadsheet/generate_spreadsheet.php">Generate spreadsheet of all class data</a><br /><br />
<a href="documentation.php">Documentation</a>
</p>


</body>