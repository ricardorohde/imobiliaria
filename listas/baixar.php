<?php require_once('../Connections/conexao.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
  $updateSQL = sprintf("UPDATE lc_movimento SET tipo=%s, valor=%s, status=%s WHERE id=%s",
                       GetSQLValueString($_POST['tipo'], "int"),
                       GetSQLValueString($_POST['valor'], "double"),
                       GetSQLValueString($_POST['status'], "text"),
                       GetSQLValueString($_POST['id'], "int"));

  mysql_select_db($database_conexao, $conexao);
  $Result1 = mysql_query($updateSQL, $conexao) or die(mysql_error());
}

$colname_baixa = "-1";
if (isset($_GET['id'])) {
  $colname_baixa = $_GET['id'];
}
mysql_select_db($database_conexao, $conexao);
$query_baixa = sprintf("SELECT * FROM lc_movimento WHERE id = %s", GetSQLValueString($colname_baixa, "int"));
$baixa = mysql_query($query_baixa, $conexao) or die(mysql_error());
$row_baixa = mysql_fetch_assoc($baixa);
$totalRows_baixa = mysql_num_rows($baixa);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gerenciador imobiliario</title>
  <link rel="stylesheet" href="../css/paginacao.css" type="text/css" />
            <link rel="stylesheet" href="../css/layout.css" type="text/css" />
        
</head>

<body onUnload="window.opener.location.reload()">
<form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
  <table align="center">
    
       
        
      <tr valign="baseline">
        <td colspan="2" align="right" nowrap="nowrap"><div align="left">
          <input type="hidden" name="tipo" value="0" size="32" />
        Baixar</div></td>
      </tr>
      <tr valign="baseline">
      <td nowrap="nowrap" align="right"> R$</td>
      <td><input type="text" placeholder="R$" name="valor" value="<?php echo htmlentities($row_baixa['valor'], ENT_COMPAT, 'utf-8'); ?>" size="20" /></td>
    </tr>
  
      <input type="hidden" name="status" value="1" size="32" />
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td><input type="submit" class="botao" value="Baixar" /></td>
    </tr>
  </table>
  <input type="hidden" name="MM_update" value="form1" />
  <input type="hidden" name="id" value="<?php echo $row_baixa['id']; ?>" />
</form>
<p>&nbsp;</p>
</body>
</html>
<?php
mysql_free_result($baixa);
?>
