<?php
$to = "jhandley47@gmail.com, jeff.handley@optiv.com, jeffhandley@yahoo.com";
$subject = "HTML email";
$details = "Details of the event";

$str = <<<EOD
Example of string
spanning multiple lines
using heredoc syntax.
EOD;

/* More complex example, with variables. */
class foo
{
    var $foo;
    var $bar;

    function __construct()
    {
        $this->foo = 'Foo';
        $this->bar = array('Bar1', 'Bar2', 'Bar3');
    }
}

$foo = new foo();
$name = 'MyName';

$msg = <<<EOT
"<html>
<head>
<title>HTML email</title>
</head>

<body bgcolor='#E6E6FA'>
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
<table>
<tr style='mso-yfti-irow:1'>
  <td width=608 valign=top style='width:6.25in;padding:.75pt .75pt .75pt .75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  text-autospace:none'><b><span style='font-family:'Verdana',sans-serif;  color:#4C6EB6'>What's happening:</span></b><b><span style='font-family:'Times New Roman',serif;color:#4C6EB6'><o:p></o:p></span></b></p>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  text-autospace:none'><span style='font-family:'Verdana',sans-serif'>.$details;.<span style='color:black'><o:p></o:p></span></span></p>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  text-autospace:none'><b><span style='font-family:'Verdana',sans-serif;
  color:#4C6EB6'>When:<o:p></o:p></span></b></p>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  text-autospace:none'><span style='font-family:'Verdana',sans-serif color:#4C6EB6'>Start
  Time: <?php echo $time; ?> <o:p></o:p></span></p>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  text-autospace:none'><b><span style='font-family:'Verdana',sans-serif;  color:#4C6EB6'>Scope/Impact:<o:p></o:p></span></b></p>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  text-autospace:none'><span style='font-family:'Verdana',sans-serif;'><?php echo $scope; ?><o:p></o:p></span></p>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  text-autospace:none'><b><span style='font-family:'Verdana',sans-serif; color:#4C6EB6'>Point of Contact Information: <o:p></o:p></span></b></p>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  text-autospace:none'><span style='font-family:'Verdana',sans-serif;'>If you have any questions or need assistance, please contact the
  Optiv Service Desk at <a href='mailto:servicedesk@optiv.com'><span
  style='color:#4C6EB6'>servicedesk@optiv.com</span></a>, <a
  href='https://servicedesk.optiv.com'>https://servicedesk.optiv.com</a> or
  844-OptivIT (844-678-4848).</span><span style='font-size:9.0pt;font-family:'Verdana',sans-serif;'><o:p></o:p></span></p>
  </td>
 </tr>
 </table>
 </body>
</html>
 "
EOT;

/*
$message = "
<html>
<head>
<title>HTML email</title>
</head>

<body bgcolor='#E6E6FA'>
<table>
<tr style='mso-yfti-irow:1'>
  <td width=608 valign=top style='width:6.25in;padding:.75pt .75pt .75pt .75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  text-autospace:none'><b><span style='font-family:'Verdana',sans-serif;  color:#4C6EB6'>What's happening:</span></b><b><span style='font-family:'Times New Roman',serif;color:#4C6EB6'><o:p></o:p></span></b></p>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  text-autospace:none'><span style='font-family:'Verdana',sans-serif'>.$details;.<span style='color:black'><o:p></o:p></span></span></p>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  text-autospace:none'><b><span style='font-family:'Verdana',sans-serif;
  color:#4C6EB6'>When:<o:p></o:p></span></b></p>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  text-autospace:none'><span style='font-family:'Verdana',sans-serif color:#4C6EB6'>Start
  Time: <?php echo $time; ?> <o:p></o:p></span></p>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  text-autospace:none'><b><span style='font-family:'Verdana',sans-serif;  color:#4C6EB6'>Scope/Impact:<o:p></o:p></span></b></p>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  text-autospace:none'><span style='font-family:'Verdana',sans-serif;'><?php echo $scope; ?><o:p></o:p></span></p>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  text-autospace:none'><b><span style='font-family:'Verdana',sans-serif; color:#4C6EB6'>Point of Contact Information: <o:p></o:p></span></b></p>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  text-autospace:none'><span style='font-family:'Verdana',sans-serif;'>If you have any questions or need assistance, please contact the
  Optiv Service Desk at <a href='mailto:servicedesk@optiv.com'><span
  style='color:#4C6EB6'>servicedesk@optiv.com</span></a>, <a
  href='https://servicedesk.optiv.com'>https://servicedesk.optiv.com</a> or
  844-OptivIT (844-678-4848).</span><span style='font-size:9.0pt;font-family:'Verdana',sans-serif;'><o:p></o:p></span></p>
  </td>
 </tr>
 </table>
<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>
<tr>
<td bgcolor='blue'>John</td>
<td>Doe</td>
</tr>
</table>
</body>
</html>
";
*/


// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <jeff@cyrin.com>' . "\r\n";


//mail($to,$subject,$msg,$headers);

echo $msg;
//echo "Test batman";
?>