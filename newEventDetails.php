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
	padding-top:5px;
	padding-bottom:5px;
	padding-right:5px;
	padding-left:5px;
	}
	td.checkbox:hover
	{
		background-color:#696783;
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
$con=mysqli_connect("cyrindev.com","cyrin45d_handley","R}F}F622TrIP","cyrin45d_demo");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
    $id = $_GET['id'];
    $sql = "SELECT * FROM `Events` WHERE `id` = '$id'";
    $query=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($query);
?>
</head>
<body>
<table align=center width=90% border=0>
<tr>
<td>
<h3>
<?php echo $row[name]; ?> Details 
</h>
</td>
</tr>
<tr>
<td>
<h4>
Please use the form below to select the resolution team. This is the team that will be notified of the outage and will be tasked with resolving the problem.<p>
</h>
</td>
</tr>
</table>
<form action="emailAlert.php" method="post">
<table align=center width=90% border=2>
<th colspan=3>Resolution Team</th>
<tr>
<td colspan=3>
Please select any that apply
</td>
</tr>
<tr>
<td class="checkbox">
<label><input id = "Optiv - Operations - IT" type=checkbox value="all" name="dl[]" onclick="handleClick(this);">Optiv - Operations - IT</label>
</td>
<td class="checkbox">
<label><input id = "Optiv - Operations - Enterprise Applications" type=checkbox value="ea" name="dl[]" onclick="handleClick(this);">Optiv - Operations - Enterprise Applications</label>
</td>
<td class="checkbox">
<label><input id="Optiv - Operations - Enterprise Applications - SalesForce" type=checkbox value="sfdc" name="dl[]" onclick='handleClick(this);'>Optiv - Operations - Enterprise Applications - SalesForce</label>
</td>
</tr>
<tr>
<td class="checkbox">
<label><input id="Optiv - Operations - Internal Infrastructure" type=checkbox value="infrastructure" name="dl[]" onclick='handleClick(this);'>Optiv - Operations - Internal Infrastructure</label>
</td>
<td class="checkbox">
<label><input id="Optiv - Operations - Internal Infrastructure - Core" type=checkbox value="core" name="dl[]" onclick='handleClick(this);'>Optiv - Operations - Internal Infrastructure - Core</label>
</td>
<td class="checkbox">
<label><input id="Optiv - Operations - Internal Infrastructure - Endpoint" type=checkbox value="endpoint" name="dl[]" onclick='handleClick(this);'>Optiv - Operations - Internal Infrastructure - Endpoint</label>
</td>
<tr>
<td class="checkbox">
<label><input id="Optiv - Operations - Internal Infrastructure - Network" type=checkbox value="network" name="dl[]" onclick='handleClick(this);'>Optiv - Operations - Internal Infrastructure - Network</label>
</td>
<td class="checkbox">
<label><input id="Optiv - Operations - Internal Infrastructure - Web" type=checkbox value="web" name="dl[]" onclick='handleClick(this);'>Optiv - Operations - Internal Infrastructure - Web</label>
</td>
<td class="checkbox">
<label><input id="Optiv - Operations - Internal Infrastructure - Service Desk" type=checkbox value="servicedesk" name="dl[]" onclick='handleClick(this);'>Optiv - Operations - Internal Infrastructure - Service Desk</label>
</td>
</tr>
<tr>
<td colspan=3>

Enter any e-mail addresses you'd like to add. Use comma to separate e-mail addresses.<p>
<textarea id="other" rows="4" cols="100" name="singleEmail[]"></textarea><p>
<button class="submit" type="button" onclick="handleSubmit()">Add</button>

</td>
</tr>
</table>
<br>
<br>
<table align=center width=90%>
<tr><td>
The following groups and people have been selected to be part of the Resolution team:
<div id="all"> </div>
<div id="ea"> </div>
<div id="sfdc"> </div>
<div id="infrastructure"> </div>
<div id="core"> </div>
<div id="endpoint"> </div>
<div id="network"> </div>
<div id="web"> </div>
<div id="servicedesk"> </div>
<div id="address"> </div>
</td>
</tr>
</table>
<table align=center width=90% border=0>
<tr>
<td>
<h4>
Next, fill out the text box below with details regarding the outage. This will be delivered to the resolution team.<p>
</h>
</td>
</tr>
<tr>
<td>
<textarea id="details" rows=5 cols=150></textarea>
</td>
</tr>
</table>
<table align=center width=90% border=0>
<tr>
<td>
<h4>
When you're satisfied with the details and the resolution team, hit the Send button below to generate and email the alert.<p>
</h>
</td>
</tr>
<tr>
<td>
<button class="submit" type="submit">Send</button>
</td>
</tr>
</table>
<input type="hidden" name="eventID" value=<?php echo $id; ?>>
</form>
  <script src="http://static.jsbin.com/js/render/edit.js?4.0.4"></script>

<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-1656750-34', 'auto');
ga('require', 'linkid', 'linkid.js');
ga('require', 'displayfeatures');
ga('send', 'pageview');

</script>
  <script>
	function handleClick(cb) 
	{
		if (cb.checked == true) 
		{
		  show(cb.id, cb.value);
		}
		if (cb.checked == false) 
		{
		  show("", cb.value);
		}

	}
	function handleSubmit()
	{
		var strID = document.getElementById("other").value;
		var id = strID.replace(",", "<p>");
		var name = "address";
		show(id, name);
	}
	function show(id,name) 
	{
		document.getElementById(name).innerHTML = id + "<p>";
		document.getElementById(id).innerHTML = "<span style='font-weight:bold'>";
		
	}
	
	
</script>
