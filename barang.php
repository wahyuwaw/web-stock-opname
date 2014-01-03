<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 3.0 License

Name       : FullyCharge 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20120604

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php include('menu1.php'); ?>


<!-- end #header -->
<div id="wrapper">
	<div id="page" >
		<div id="box1" style="background-image:url(alcona.jpg); background-repeat:no-repeat; background-position:top;">
			<LEFT>
<table border="1" width="750"><!--DWLayoutTable-->
<em style="color:#99FF66">
<?php 
	if(isset($_REQUEST['x'])){
		if($_REQUEST['x']=="1"){
			echo "Berhasil disimpan";
		}
	}
?>
</em>
<form id="BARANG" name="BARANG" method="post" action="simpanbarang.php">
  <label>
</label>
  <p>&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p align="center"><span class="style1">FORM INPUT BARANG </span></p>
  <table width="600" height="158" border="0" align="center" bgcolor="#FFFFFF">
    <!--DWLayoutTable-->
    <tr>
      <td height="18" colspan="4" bgcolor="#FFFFFF"><div align="center" class="style5"></div></td>
    </tr>

    <tr>
      <td height="24" valign="middle"><span class="style4">DEPT</span></td>
      <td valign="top"><div align="center" class="style2 style6"><strong>:</strong></div></td>
      <td valign="top"><input name="txtdept" type="text" id="txtdept" size="7" maxlength="3" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="24" valign="middle"><span class="style4">SECTION</span></td>
      <td valign="top"><div align="center" class="style6 style2"><strong>:</strong></div></td>
      <td valign="top"><input name="txtsection" type="text" id="txtsection" size="10" maxlength="6" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="24" valign="middle"><span class="style4">NAMA BARANG </span></td>
      <td valign="top"><div align="center" class="style2 style6"><strong>:</strong></div></td>
      <td valign="top"><input name="txtnmbrg" type="text" id="txtnmbrg" size="50" maxlength="50" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="24" valign="middle"><span class="style4">SUPPLIER</span></td>
      <td valign="top"><div align="center" class="style6 style2"><strong>:</strong></div></td>
      <td valign="top"><input name="txtsupplier" type="text" id="txtsupplier" size="25" maxlength="25" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="24" valign="middle"><span class="style4">MERK</span></td>
      <td valign="top"><div align="center" class="style6 style2"><strong>:</strong></div></td>
      <td valign="top"><input name="txtmerk" type="text" id="txtmerk" size="11" maxlength="11" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="24" valign="middle"><span class="style4">WARNA</span></td>
      <td valign="top"><div align="center" class="style6 style2"><strong>:</strong></div></td>
      <td valign="top"><input name="txtwarna" type="text" id="txtwarna" size="15" maxlength="10" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="24" valign="middle"><span class="style4">PANJANG</span></td>
      <td valign="top"><div align="center" class="style3 style6"><strong>:</strong></div></td>
      <td valign="top"><input name="txtpjg" type="text" id="txtpjg" size="6" maxlength="3" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="24" valign="middle"><span class="style2"><strong>JUMLAH</strong></span></td>
      <td valign="top"><div align="center" class="style6"><strong>:</strong></div></td>
      <td valign="top"><input name="txtjml" type="text" id="txtjml" size="6" maxlength="4" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="77" colspan="3" align="right" valign="bottom"><p>&nbsp;
        </p>
        <p>
          <input type="submit" name="Submit" value="Simpan" />
          <input type="reset" name="Submit2" value="Reset" />
        </p>      </td>
      <td></td>
    </tr>
    <tr>
      <td height="1"></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </table>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
</form>
</body>
</html>
