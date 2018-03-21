<?php include("header.php");?>
    
  <?php 
foreach ($_REQUEST as $___opt => $___val) {
  $$___opt = $___val;
}
if(empty($infonews)) {
include("nav/home.php");
}
elseif(substr($infonews, 0, 4)=='http' or substr($infonews, 
0, 1)=="/" or substr($infonews, 0, 1)==".") 
{
echo '<br><font face=arial size=11px><br><b>A página não existe.</b><br>Por favor selecione uma página a partir do Menu Principal.</font>'; 
}
else {
include("$infonews.php");
}
?>
  
<?php include("footer.php");?>