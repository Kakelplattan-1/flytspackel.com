<?php
include "constants.php";
@extract($_POST);
$typ = stripslashes($typ);
$namn = stripslashes($namn);
$adress = stripslashes($adress);
$postnr = stripslashes($postnr);
$postort = stripslashes($postort);
$telefon = stripslashes($telefon);
$email = stripslashes($email);
$hojd = stripslashes($hojd);
$bredd_golv = stripslashes($bredd_golv);
$langd_golv = stripslashes($langd_golv);
$handfat = stripslashes($handfat);
$golvbrunn = stripslashes($golvbrunn);
$dorrar = stripslashes($dorrar);
$dorrar_bredd = stripslashes($dorrar_bredd);
$dorrar_hojd = stripslashes($dorrar_hojd);
$fonster = stripslashes($fonster);
$fonster_bredd = stripslashes($fonster_bredd);
$fonster_hojd = stripslashes($fonster_hojd);
$rorgenomforing = stripslashes($rorgenomforing);
$toaletter = stripslashes($toaletter);
$vaggplattor = stripslashes($vaggplattor);
$golvplattor = stripslashes($golvplattor);
$golvvarme = stripslashes($golvvarme);
$golvbetong = stripslashes($golvbetong);
$vaggbetong = stripslashes($vaggbetong);
$ytterhorn = stripslashes($ytterhorn);
$innerhorn = stripslashes($innerhorn);
$vattengolvvarme = stripslashes($vattengolvvarme);
$text = stripslashes($text);
//$subject = stripslashes($subject);
$site = stripslashes($site);
//$ipnumber = stripslashes($ipnumber);
// skapa en strang med adressen
$kontakt = ' '.$namn.' 
'.$adress.' 
'.$postnr.' '.$postort.' 
Telefon: '.$telefon.' 
E-post: '.$email.'
IP-nummer: '.$ipnumber.' anvandes 
Web-sida: '.$_SERVER['HTTP_REFERER'].' kom han ifran';
$email_context = 'Arende: Offert från www.kakelplattan.se 
';
$email_context .= 'Detta gäller en förfrågan gällande '.$typ.'.
';
$email_context .= 'Hojd: '.$hojd.' cm Bredd(golvyta): '.$bredd_golv.'  cm Langd(golvyta): '.$langd_golv.' cm
';
$email_context .= 'Antal golvbrunnar: '.$golvbrunn.' st
';
$email_context .= 'Antal dorrar: '.$dorrar.' Bredd(dorrar): '.$dorrar_bredd.'  cm Hojd(dorrar): '.$dorrar_hojd.' cm
';
$email_context .= 'Antal fonster: '.$fonster.' Bredd(fonster): '.$fonster_bredd.' cm Hojd(fonster): '.$fonster_hojd.' cm
';
$email_context .= 'Antal rorgenomforingar: '.$rorgenomforing. ' st
';
$email_context .= 'Antal innerhorn: '.$innerhorn.' st
';
$email_context .= 'Antal ytterhorn: '.$ytterhorn.' st
';
$email_context .= 'Antal toaletter: '.$toaletter.' st
';
$email_context .= 'Antal handfat: '.$handfat.' st
';
$email_context .= 'Storlek pa vaggplattor: '.$vaggplattor.' stycken
';
$email_context .= 'Storlek pa golvplattor: '.$golvplattor.' stycken
';
$email_context .= 'El-golvvarme: '.$golvvarme.'
';
$email_context .= 'Vattenburen golvvarme: '.$vattengolvvarme.'
';
$email_context .= 'Golv av betong: '.$golvbetong.'
';
$email_context .= 'Vagg av betong: '.$vaggbetong.'
';
$email_context .= 'ovrig text: '.$text.'
';
$email_context .= 'Fran: '.$kontakt .'
';
$email_context .= 'Fran vilken websida: '.$_SERVER['HTTP_REFERER'] .'
';



//echo $email_context ;
echo $site;
// vi bor kolla om det viktigaste ar ifyllt
//if(empty($name) || empty($email) ||empty($subject)||empty($text))
if(empty($email))
{
// ordna sa redirect blir korrekt
header("location: ../".$site."?menu=offert&sent=0");
echo "<script>window.location.href='../".$site."?menu=offert&sent=0';</script>";
die();
}
else
{
// vi kanske vill "tagga" subject for att alltid fa mail oavsett spam?
$presubject = "Offert från www.kakelplattan.se";
mail(WEBMAIL,$presubject,$email_context,"From: info@kakelplattan.se");
mail("anders@hargefors.com",$presubject,$email_context,"From: info@kakelplattan.se");  // kopia
header("location: ../".$site."?menu=offert&sent=1");
echo "<script>window.location.href='../".$site."?menu=offert&sent=1';</script>";
die();
}
?>