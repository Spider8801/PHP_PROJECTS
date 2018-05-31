<!DOCTYPE html>
<title>
project_1
</title>
<head>
</head>
<form name="call" method="post" action="project1.php" >
Text1:<input type="text" name="t1" ><br><br>
Text2:<input type="text" name="t2"><br><br>
Text3:<input type="text" name="t3"><br><br>
<fieldset><?php
echo "Select Operation : ";
?>
<select name="opt">
<option value="plus">Select Operation</option>
<option value="plus">plus</option>
<option value="minus">minus</option>
<option value="average">average</option>
<option value="multiplication">multiplication</option>
<option value="custom1">custom1</option>
<option value="custom2">custom2</option>
<option value="custom3">custom3</option>
</select><br><br>
</fieldset>
<input type="submit" value="Calculate" name="submit">
<input type="reset">
</form>
</html>
