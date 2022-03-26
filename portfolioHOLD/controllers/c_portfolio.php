<?php
 


 if(!isset($_REQUEST['action']))
 $action = 'accueil';
else
$action = $_REQUEST['action'];

switch($action)
{
   case 'accueil':
   {
      include("vues/v_acceuil.php");
      break;
   }

   case 'valider':
      {
        // var_dump($_REQUEST['nom']);
           $nom = $_REQUEST['nom'];
           $email = $_REQUEST['mail'];
           $sujet = $_REQUEST['sujet'];
           $message = $_REQUEST['message'];
          $contact = $pdo->setContact($nom,$email,$sujet,$message);
          $contact = $pdo->getContact($nom,$email,$sujet,$message);
         include("vues/v_acceuil.php");
          break;
      }





}