<?php
include('koneksi.php');
?>
<div align="center">//$data= $_GET ['INDEX']; //get the no which will updated\
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

	<?php 	include('menu1.php'); ?>

  <!-- end #header -->
    <style type="text/css">
<!--
.style1 {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 24px;
}
.style2 {font-size: 36px}
-->
    </style>
  <!-- end #header -->
  <div id="wrapper">
	<div id="page" >
		<div id="box1" style="background-image:url(alcona.jpg); background-repeat:no-repeat; background-position:top;">
</div>
<LEFT>
<table border="1" width="750">

  <p>
    <?php
$query = "SELECT * FROM `barang` WHERE `INDEX`='".$_REQUEST['index']."'"; //get the data that will be updated
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
?>
</p>
  <form method="post" action="prosesupdate.php">

    
    <div align="left">
      <table width="500" border="0" cellpadding="2" cellspacing="2" bgcolor="#00FFFF">
        <tr bgcolor="orange">
          <td height="21" colspan="3" nowrap="nowrap" bgcolor="#FF0000"><div align="center"><strong>EDIT BARANG </strong></div></td>
      <tr>
        <td width="30%"> No </td>
        <td width="2%">:</td>
        <td width="75%"> <input type="text" name="no" disabled='disable' value="<?php echo $data['INDEX']; ?>"> </td>
        </tr>
          
        <tr>
          <td>NAMA BARANG</td>
          <td>:</td>
          <td> <input type="text" name="nama" value="<?php echo $data['NAMA']; ?>"> </td>
        </tr>
          
        <tr>
          <td>DEPT</td>
          <td>:</td>
          <td> <input type="text" name="dept" value="<?php echo $data['DEPT']; ?>"> </td>
        </tr>
          
        <tr>
          <td>SECTION</td>
          <td>:</td>
          <td> <input type="text" name="section" value="<?php echo $data['SECTION']; ?>"> </td>
        </tr>
          
        <tr>
          <td>SUPPLIER</td>
          <td>:</td>
          <td> <input type="text" name="supplier" value="<?php echo $data['SUPPLIER']; ?>"> </td>
        </tr>
        <tr>
          <td>MERK</td>
          <td>:</td>
          <td> <input type="text" name="merk" value="<?php echo $data['MERK']; ?>"> </td>
        </tr>
        <tr>
          <td>WARNA</td>
          <td>:</td>
          <td> <input type="text" name="warna" value="<?php echo $data['WARNA']; ?>"> </td>
        </tr> <tr>
          <td>PANJANG</td>
          <td>:</td>
          <td> <input type="text" name="panjang" value="<?php echo $data['PANJANG']; ?>"> </td>
        </tr> <tr>
          <td>JUMLAH</td>
          <td>:</td>
          <td> <input type="text" name="jumlah" value="<?php echo $data['JUMLAH']; ?>"> </td>
        </tr>
        <tr>
          <td></td> <td></td> <td> <input type="hidden" name="index" value="<?php echo $data['INDEX']; ?>">
            <input type="SUBMIT" name="SUBMIT" value="Save"></td>
        </tr>
        </table>
    </div>
  </form>
