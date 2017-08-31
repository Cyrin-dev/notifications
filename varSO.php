<?php
$to = "jhandley47@gmail.com, jeff.handley@optiv.com, jeffhandley@yahoo.com";
$subject = "HTML email";
$details = "The world has frozen over";

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

<head>

</head>

<body lang=EN-US link="#0563C1" vlink="#954F72" style='tab-interval:.5in'>

<div class=WordSection1>

<p class=MsoNormal style='margin-left:120.0pt;text-indent:-120.0pt;tab-stops:
120.0pt;mso-layout-grid-align:none;text-autospace:none'><b><span
style='mso-ascii-font-family:Calibri;mso-hansi-font-family:Calibri;mso-bidi-font-family:
Calibri;color:black'>From:<span style='mso-tab-count:1'></span></span></b>
<span style='mso-ascii-font-family:Calibri;mso-hansi-font-family:Calibri;mso-bidi-font-family:
Calibri;color:black'>Optiv - Service Desk<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:120.0pt;text-indent:-120.0pt;tab-stops:
120.0pt;mso-layout-grid-align:none;text-autospace:none'><b><span
style='mso-ascii-font-family:Calibri;mso-hansi-font-family:Calibri;mso-bidi-font-family:
Calibri;color:black'>Cc:<span style='mso-tab-count:1'></span></span></b>
<span style='mso-ascii-font-family:Calibri;mso-hansi-font-family:Calibri;mso-bidi-font-family:
Calibri;color:black'>Paul Lehman; Service Desk Management; Optiv - Operations -
IT; Optiv - Executive Leadership Team; Scott Robison<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:120.0pt;text-indent:-120.0pt;tab-stops:
120.0pt;mso-layout-grid-align:none;text-autospace:none'><b><span style='mso-ascii-font-family:Calibri;mso-hansi-font-family:Calibri;mso-bidi-font-family:
Calibri;color:black'>Subject:<span style='mso-tab-count:1'></span></span></b>
<span style='mso-ascii-font-family:Calibri;mso-hansi-font-family:Calibri;mso-bidi-font-family:
Calibri;color:black'>System Outage:<o:p></o:p></span></p>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

<div align=center>

<table class=MsoNormalTable border=0 cellpadding=0 width=0 style='width:6.25in;
 mso-cellspacing:1.5pt;mso-yfti-tbllook:1184;mso-padding-alt:0in 5.4pt 0in 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:107.25pt'>
  <td width=606 style='width:6.25in;padding:.75pt .75pt .75pt .75pt;height:
  107.25pt'>
  <p class=MsoNormal><span style='mso-fareast-font-family:"Times New Roman";
  color:black;mso-no-proof:yes'><img width=600 height=142 id="_x0000_i1026"
  src="images/systemOutageHeader.jpg"
  </span><span
  style='font-size:12.0pt;mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1'>
  <td width=606 valign=top style='width:6.25in;padding:.75pt .75pt .75pt .75pt'>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  text-autospace:none'><b><span style='mso-bidi-font-size:9.0pt;font-family:
  "Verdana",sans-serif;color:#4C6EB6'>What's happening:<o:p></o:p></span></b></p>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  text-autospace:none'><span style='font-family:"Verdana",sans-serif;
  color:black'>$details<o:p></o:p></span></p>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  text-autospace:none'><b><span style='mso-bidi-font-size:9.0pt;font-family:
  "Verdana",sans-serif;color:#4C6EB6'>When:<o:p></o:p></span></b></p>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  text-autospace:none'><span style='mso-bidi-font-size:9.0pt;font-family:"Verdana",sans-serif;
  color:black'>Start Time: <o:p></o:p></span></p>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  text-autospace:none'><b><span style='mso-bidi-font-size:9.0pt;font-family:
  "Verdana",sans-serif;color:#4C6EB6'>Scope/Impact:<o:p></o:p></span></b></p>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  text-autospace:none'><span style='font-family:"Verdana",sans-serif;
  color:black'>-scope</span><b><span style='mso-bidi-font-size:9.0pt;
  font-family:"Verdana",sans-serif;color:#4C6EB6'><o:p></o:p></span></b></p>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  text-autospace:none'><b><span style='mso-bidi-font-size:9.0pt;font-family:
  "Verdana",sans-serif;color:#4C6EB6'>Point of Contact Information: <o:p></o:p></span></b></p>
  <p class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  text-autospace:none'><span style='mso-bidi-font-size:9.0pt;font-family:"Verdana",sans-serif;
  color:black'>If you have any questions or need assistance, please contact the
  Optiv Service Desk at <a href="mailto:servicedesk@optiv.com"><span
  style='color:#0000E9'>servicedesk@optiv.com</span></a>, </span><span
  class=MsoHyperlink><span style='font-family:"Verdana",sans-serif;color:#0000E9'><a
  href="https://servicedesk.optiv.com/"><span style='mso-bidi-font-size:9.0pt;
  color:#0000E9'>https://servicedesk.optiv.com</span></a></span></span><span
  style='mso-bidi-font-size:9.0pt;font-family:"Verdana",sans-serif;color:black'>
  or 844-OptivIT (844-678-4848).<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;mso-yfti-lastrow:yes;height:54.75pt'>
  <td width=606 style='width:6.25in;padding:.75pt .75pt .75pt .75pt;height:
  54.75pt'>
  <p class=MsoNormal><span style='mso-fareast-font-family:"Times New Roman";
  mso-no-proof:yes'><img border=0 width=600 height=74 id="_x0000_i1025"
  src="images/systemOutageFooter.jpg"
 </span><span
  style='font-size:12.0pt;mso-fareast-font-family:"Times New Roman"'><o:p></o:p></span></p>
  </td>
 </tr>
</table>

</div>

<p class=MsoNormal><span style='font-size:10.0pt;font-family:"Trebuchet MS",sans-serif;
color:#404040;mso-themecolor:text1;mso-themetint:191'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

</div>

</body>

</html>
 
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