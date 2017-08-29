<!DOCTYPE html>
<html>
<head>
<?php include 'SOU.html'; ?>
 <style>
	body {
	background-color:#818C97;
	color: white;
	font-family:Verdana, Geneva, sans-serif;
	}
	td {
	padding-top:3px;
	padding-bottom:3px;
	padding-right:5px;
	padding-left:5px;
	}
	a:link {
		color:#4C6EB6;
	}
	.submit {
	background-color: #44665B;
    border: none;
	border-radius:16px;
    color: white;
    padding: 5px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
    margin: 10px 2px;
    cursor: pointer;
	
	}
	.submit:hover {
	background-color:#2C483F;	
	}
  </style>
  <?php
  $details = $_POST['details'];
  $scope = $_POST['scope'];
  $time = $_POST['time'];
  ?>
  
</head>
<div class=WordSection1>

<p class=MsoNormal style='margin-left:40%;text-indent:-120.0pt;tab-stops:120.0pt;mso-layout-grid-align:none;text-autospace:none'><b><span
style='mso-bidi-font-family:Calibri;color:black'>From: <span style='mso-tab-count:1'></span></span></b><span
style='mso-bidi-font-family:Calibri;color:black'>Optiv - Service Desk<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:40%;text-indent:-120.0pt;tab-stops:
120.0pt;mso-layout-grid-align:none;text-autospace:none'><b><span
style='mso-bidi-font-family:Calibri;color:black'>Cc: <span style='mso-tab-count:1'></span></span></b><span
style='mso-bidi-font-family:Calibri;color:black'>Optiv - Operations - IT; Optiv- Executive Leadership Team; Paul Lehman; Service Desk Management; Scott Robison<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:40%;text-indent:-120.0pt;tab-stops:
120.0pt;mso-layout-grid-align:none;text-autospace:none'><b><span
style='mso-bidi-font-family:Calibri;color:black'>Subject: <span style='mso-tab-count:1'></span></span></b><span
style='mso-bidi-font-family:Calibri;color:black'>System Outage Update: <o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:40%;text-indent:-120.0pt;tab-stops:120.0pt;mso-layout-grid-align:none;text-autospace:none'><span style='mso-bidi-font-family:
Calibri;color:black'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='margin-left:40%;text-indent:-120.0pt;tab-stops:
120.0pt;mso-layout-grid-align:none;text-autospace:none'><b><span
style='mso-bidi-font-family:Calibri;color:black'>Importance: <span style='mso-tab-count:1'></span></span></b><span
style='mso-bidi-font-family:Calibri;color:black'>High<o:p></o:p></span></p>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

<div align=center>

<table class=MsoNormalTable border=0 cellspacing=3 cellpadding=0 width=0
 style='width:6.25in;mso-cellspacing:2.2pt;mso-yfti-tbllook:1184;mso-padding-alt:
 0in 0in 0in 0in'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:107.25pt'>
  <td width=608 style='width:6.25in;padding:.75pt .75pt .75pt .75pt;height:
  107.25pt'>
  <p class=MsoNormal><span style='mso-fareast-font-family:"Times New Roman";
  color:black;mso-no-proof:yes'><img width=600 height=142 id="_x0000_i1026"
  src="http://images.intouch.optiv.com/EloquaImages/clients/OptivSecurity/%7b540b829a-e912-4f5e-a8da-a53b2e68eab3%7d_systemOutageUpdate.jpg"
  alt="http://images.intouch.optiv.com/EloquaImages/clients/OptivSecurity/%7B540b829a-e912-4f5e-a8da-a53b2e68eab3%7D_systemOutageUpdate.jpg"></span><span
  style='font-size:12.0pt'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1'>
  <td width=608 valign=top style='width:6.25in;padding:.75pt .75pt .75pt .75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  text-autospace:none'><b><span style='font-family:"Verdana",sans-serif;  color:#4C6EB6'>What's happening:</span></b><b><span style='font-family:"Times New Roman",serif;color:#4C6EB6'><o:p></o:p></span></b></p>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  text-autospace:none'><span style='font-family:"Verdana",sans-serif'><?php echo $details; ?><span style='color:black'><o:p></o:p></span></span></p>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  text-autospace:none'><b><span style='font-family:"Verdana",sans-serif;
  color:#4C6EB6'>When:<o:p></o:p></span></b></p>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  text-autospace:none'><span style='font-family:"Verdana",sans-serif color:#4C6EB6'>Start
  Time: <?php echo $time; ?> <o:p></o:p></span></p>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  text-autospace:none'><b><span style='font-family:"Verdana",sans-serif;  color:#4C6EB6'>Scope/Impact:<o:p></o:p></span></b></p>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  text-autospace:none'><span style='font-family:"Verdana",sans-serif;'><?php echo $scope; ?><o:p></o:p></span></p>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  text-autospace:none'><b><span style='font-family:"Verdana",sans-serif; color:#4C6EB6'>Point of Contact Information: <o:p></o:p></span></b></p>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  text-autospace:none'><span style='font-family:"Verdana",sans-serif;'>If you have any questions or need assistance, please contact the
  Optiv Service Desk at <a href="mailto:servicedesk@optiv.com"><span
  style='color:#4C6EB6'>servicedesk@optiv.com</span></a>, <a
  href="https://servicedesk.optiv.com">https://servicedesk.optiv.com</a> or
  844-OptivIT (844-678-4848).</span><span style='font-size:9.0pt;font-family:"Verdana",sans-serif;'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;mso-yfti-lastrow:yes;height:54.75pt'>
  <td width=608 style='width:6.25in;padding:.75pt .75pt .75pt .75pt;height:
  54.75pt'>
  <p class=MsoNormal><span style='mso-fareast-font-family:"Times New Roman";
  mso-no-proof:yes'><img border=0 width=600 height=74 id="_x0000_i1025"
  src="http://images.intouch.optiv.com/EloquaImages/clients/OptivSecurity/%7bb9766c12-c692-4d66-ba2d-364159d31d6d%7d_footer_2017_01.jpg"
  alt="http://images.intouch.optiv.com/EloquaImages/clients/OptivSecurity/%7Bb9766c12-c692-4d66-ba2d-364159d31d6d%7D_footer_2017_01.jpg"></span><span
  style='font-size:12.0pt'><o:p></o:p></span></p>
  </td>
 </tr>
</table>

</div>

<p class=MsoNormal><span style='font-size:10.0pt;font-family:"Trebuchet MS",sans-serif;
mso-bidi-font-family:"Times New Roman";mso-bidi-theme-font:minor-bidi;
color:#404040;mso-themecolor:text1;mso-themetint:191'><o:p>&nbsp;</o:p></span></p>

</div>
<br>
<br>
<table align=center border="0" width="40%">
<tr>
<td align=left>
<form action="emailConfirm.php" method="post">
<button class="submit" type="submit">Send for Approval</button>
</form>
</td>
<td align=right>
<form action="emailConfirm.php" method="post">
<button class="submit" type="submit">Approved, send to enterprise</button>
</form>
</td>
</tr>
</table>

