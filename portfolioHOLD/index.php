<?php 

include("vues/v_entete.php") ;
	
if(!isset($_REQUEST['uc']))
     $uc = 'controller';
else
	$uc = $_REQUEST['uc'];

switch($uc)
{
	case 'controller':
		{include("controllers/c_portfolio.php");break;}

	
		

}
include("vues/v_footer.php") ;
