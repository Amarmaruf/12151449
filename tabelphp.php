<html>
<head></head>
<title>Table</title>
<body>
<center>
<h2> INI TABEL YANG SAYA BUAT </h2>
</center>
<table border='1' cellpadding="0" cellspacing="0" bordercolor="#0099CC" style='colappse:0;' align='center' width='605 height="400" '>
<tr>
<td height="34" colspan="4" bgcolor="#0099CC">
<center>
<font face="Verdana, Arial, Helvetica, sans-serif">
<font color="#FFFFFF" colspan=3></div>
</font>
</font>
</center>
<center>
<font face="Verdana, Arial, Helvetica, sans-serif">
<font color="#FFFFFF">
<div align="center"></div>
</font></font>
<table width="602" border="0" align="left" cellpadding="0" cellspacing="0">
<tr>
<td width="51">
<font face="Verdana, Eras Demi ITC, Helvetica, sans-serif">
<font color="#FFFFFF"><b>rank</b></font></font></td>
<td width="249">
<font face="Verdana, Arial, Helvetica, sans-serif">
<font color="#FFFFFF"><b>Aplikasi</b></font></font></td>
<td width="173"><font face="Verdana, Arial, Helvetica, sans-serif">
<font color="#FFFFFF"><b>Mengunduh</b></font></font></td>
<td width="129"><font face="Verdana, Arial, Helvetica, sans-serif">
<font color="#FFFFFF"><b>Dolar</b></font></font></td>
</tr>
</table>
</center>
</td>
</tr>
<?php
for ($i=1; $i<=10; $i++)
{
if ($i%2==1)
{
$warna="#DBE5F0";
echo"
<tr bgcolor='$warna'>
<td height=34><center>$i</td>
<td height=34 colspan=3>&nbsp
Edit foto
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
&nbsp
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
8,210,000
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
&nbsp &nbsp &nbsp$828,125,456
</td>
</tr>";
$i++;
}
else{
$warna="white";
}
echo "
<tr bgcolor='white'>
<td height=34 width=43><center>$i
</td>
<td height=34 width=210> &nbspAnti firus android
</td>
<td height=34 width=180><center>7,000,000</td>
<td height=34><center>$5,567,000
</td>
</tr>";
}
?>
<tr>
<td height=25 colspan="4" bgcolor="#0099CC"><b><font color="#FFFFFF"> AMAR MARUF.com</font></b></td></tr>
<tr>
</tr>
</table>
</body>
</html>
