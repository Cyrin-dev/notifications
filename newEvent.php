  <style>
	body {
	background-color:#818C97;
	color: white;
	font-family:Verdana, Geneva, sans-serif;
	}
		body {
	color: #E6E8EA;
	}
	.button {
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
	width: 100%;
}
.button:hover{
	background-color:#2C483F;
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
<body>
<table align=center width=80%>
<form action="textAlert.php" method="post">
<tr>
<td>
<h3>
Create New Outage Event
</h>
</td>
</tr>
<tr>
<td>
<h4>
Welcome to the Cyrin outage notification system. To get started, first enter the name of the system that is experiencing the outage. <p>
</h>
</td>
</tr>
<tr>
<td>
<input type="text" name = "outageName" size = "50" maxlength = "50" placeholder="System that is experiencing the outage">
</td>
</tr>
</table>
<p>
<p>
<table align=center width=80% border =0>
<tr>
<td>
<h4>
Next, enter a brief text message to be sent to the CIO and management team. The form will only let
you to enter the maximum allowed 113 characters. The bridge number and conference code will be added to the text message automatically.
</td>
</tr>
<tr>
<td>
<input type="text" name = "textAlert" size = "113" maxlength = "113" placeholder="Enter text message to be sent to CIO and management team. Limit: 113 characters" autofocus="autofocus">
</td>
</tr>
<tr>
<td align=center>
<!--  <input type="submit" value="Send"> -->
<button class="submit" type="submit">Send</button>
</form>

</body>