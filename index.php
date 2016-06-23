<!DOCTYPE html>

<html>
	<head>
	<style>
table.groove {
border-style: solid;
border-color: #808080;
}
</style>
</head>
	<h1> Calculator Implementation</h1>
	
	
<br>
<body>
<table class="groove">
<form name="calc">


<tr><td colspan=7>&nbsp;</td><td>&nbsp</td><td>&nbsp</td> <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td></tr>

<tr>
<td colspan=1>&nbsp</td><td colspan=5><input type=text name="display" style="border-color:#87CEEB"></td>
</tr>
<tr><td colspan=7>&nbsp;</td><td>&nbsp</td><td>&nbsp</td> <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td></tr>

<tr>
<td colspan=1>&nbsp</td><td colspan=2 rowspan=1><input type=button value="Clear" onclick="calc.display.value=''"></td>

<td ><input type=button value="=" OnClick="calc.display.value=eval(calc.display.value)"></td>

<td ><input type=button value="+/-" onclick="calc.display.value+='+/-'"></td>

<td ><input type=button value="." onclick="calc.display.value+='.'"></td>&nbsp&nbsp

<tr>
<td colspan=1>&nbsp</td><td colspan=1><input type=button value="*" onclick="calc.display.value+='*'"></td>

<td><input type=button value="/" onclick="calc.display.value+='/'"></td>

<td><input type=button value="+" onclick="calc.display.value+='+'"></td>

<td><input type=button value="-" onclick="calc.display.value+='-'"></td>

</tr>

<tr>
<td colspan=1>&nbsp</td><td><input type=button value="1" onclick="calc.display.value+='1'"></td>

<td><input type=button value="2" onclick="calc.display.value+='2'"></td>

<td><input type=button value="3" onclick="calc.display.value+='3'"></td>

<td><input type=button value="4" onclick="calc.display.value+='4'"></td>

<td><input type=button value="5" onclick="calc.display.value+='5'"></td>
</tr>

<tr>

<td colspan=1>&nbsp</td><td><input type=button value="6" onclick="calc.display.value+='6'"></td>

<td><input type=button value="7" onclick="calc.display.value+='7'"></td>

<td><input type=button value="8" onclick="calc.display.value+='8'"></td>

<td><input type=button value="9" onclick="calc.display.value+='9'"></td>

<td><input type=button value="0" onclick="calc.display.value+='0'"></td>

</tr> 
<tr> <td colspan=7>  &nbsp;</td> <td> &nbsp</td> <td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td></tr>
</form>

</table>

</html>
