<!DOCTYPE html>
<html>
<head>

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
</head>
<body>
<form action="emailConfirm.php" method="post">
<table align=center width=90% border=0>
<tr>
<td>
<h3>
New Outage Communication to the Enterprise
</h>
</td>
</tr>
<tr>
<td>
<h4>
Select the distribution lists that you need to notify are being affected by the outage<p>
</h>
</td>
</tr>
<tr>
<td>
<textarea id="emails" name="emails" rows=7 cols=50 placeholder="This will be a LDAP connection to the exchange GAL"></textarea>
</td>
</tr>
</table>
<table align=center width=90% border=0>
<tr>
<td>
<h4>
Please use the form below to describe the outage in layman's terms. This communication will be sent to the business units selected above.<p>
</h>
</td>
</tr>
<tr>
<td>
<textarea id="details" name="details" rows=5 cols=150 placeholder="This is what's happening"></textarea>
</td>
</tr>
<tr>
<td>
<h4>What time did the outage start? <input type=text size=6 name="time" ></h>
</tr>
</td>
<tr>
<td>
<h4>What is the scope and Impact of the outage</h>
</td>
</tr>
<tr>
<td>
<textarea id="scope" name="scope" rows=5 cols=150 placeholder="This is the impact of what's happening"></textarea>
</td>
</tr>
<tr>
<td>
<button class="submit" type="submit">Send</button>
</form>
</td>
</tr>
</table>
