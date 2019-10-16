<?PHP
error_reporting(E_ERROR | E_WARNING | E_PARSE);
ini_set('track_errors', true);

function DoStripSlashes($FieldValue) 
{ 
 if ( get_magic_quotes_gpc() ) { 
  if (is_array($FieldValue) ) { 
   return array_map('DoStripSlashes', $FieldValue); 
  } else { 
   return stripslashes($FieldValue); 
  } 
 } else { 
  return $FieldValue; 
 } 
}

#----------
# FilterCChars:

function FilterCChars($TheString)
{
 return preg_replace('/[\x00-\x1F]/', '', $TheString);
}


if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
 $ClientIP = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
 $ClientIP = $_SERVER['REMOTE_ADDR'];
}

$FTGad = DoStripSlashes( $_REQUEST['ad'] );
$FTGsoyad = DoStripSlashes( $_REQUEST['soyad'] );
$FTGdogumyeri = DoStripSlashes( $_REQUEST['dogumyeri'] );
$FTGgun = DoStripSlashes( $_REQUEST['gun'] );
$FTGay = DoStripSlashes( $_REQUEST['ay'] );
$FTGyil = DoStripSlashes( $_REQUEST['yil'] );
$FTGcinsiyet = DoStripSlashes( $_REQUEST['cinsiyet'] );
$FTGmedenidurum = DoStripSlashes( $_REQUEST['medenidurum'] );
$FTGadres = DoStripSlashes( $_REQUEST['adres'] );
$FTGremLen = DoStripSlashes( $_REQUEST['remLen'] );
$FTGkod1 = DoStripSlashes( $_REQUEST['kod1'] );
$FTGtel1 = DoStripSlashes( $_REQUEST['tel1'] );
$FTGkod2 = DoStripSlashes( $_REQUEST['kod2'] );
$FTGtel2 = DoStripSlashes( $_REQUEST['tel2'] );
$FTGemail = DoStripSlashes( $_REQUEST['email'] );
$FTGsskno = DoStripSlashes( $_REQUEST['sskno'] );
$FTGtckimlikno = DoStripSlashes( $_REQUEST['tckimlikno'] );
$FTGuyruk = DoStripSlashes( $_REQUEST['uyruk'] );
$FTGaskerlikdurumu = DoStripSlashes( $_REQUEST['askerlikdurumu'] );
$FTGaskerlikyapmamasebebi = DoStripSlashes( $_REQUEST['askerlikyapmamasebebi'] );
$FTGannead = DoStripSlashes( $_REQUEST['annead'] );
$FTGannedogum = DoStripSlashes( $_REQUEST['annedogum'] );
$FTGanneogrenim = DoStripSlashes( $_REQUEST['anneogrenim'] );
$FTGannemeslek = DoStripSlashes( $_REQUEST['annemeslek'] );
$FTGanneyukumlu = DoStripSlashes( $_REQUEST['anneyukumlu'] );
$FTGbabaad = DoStripSlashes( $_REQUEST['babaad'] );
$FTGbabadogum = DoStripSlashes( $_REQUEST['babadogum'] );
$FTGbabaogrenim = DoStripSlashes( $_REQUEST['babaogrenim'] );
$FTGbabameslek = DoStripSlashes( $_REQUEST['babameslek'] );
$FTGbabayukumlu = DoStripSlashes( $_REQUEST['babayukumlu'] );
$FTGesad = DoStripSlashes( $_REQUEST['esad'] );
$FTGesdogum = DoStripSlashes( $_REQUEST['esdogum'] );
$FTGesogrenim = DoStripSlashes( $_REQUEST['esogrenim'] );
$FTGesmeslek = DoStripSlashes( $_REQUEST['esmeslek'] );
$FTGesyukumlu = DoStripSlashes( $_REQUEST['esyukumlu'] );
$FTGcocuk1ad = DoStripSlashes( $_REQUEST['cocuk1ad'] );
$FTGcocuk1dogum = DoStripSlashes( $_REQUEST['cocuk1dogum'] );
$FTGcocuk1ogrenim = DoStripSlashes( $_REQUEST['cocuk1ogrenim'] );
$FTGcocuk1meslek = DoStripSlashes( $_REQUEST['cocuk1meslek'] );
$FTGcocuk1yukumlu = DoStripSlashes( $_REQUEST['cocuk1yukumlu'] );
$FTGcocuk2ad = DoStripSlashes( $_REQUEST['cocuk2ad'] );
$FTGcocuk2dogum = DoStripSlashes( $_REQUEST['cocuk2dogum'] );
$FTGcocuk2ogrenim = DoStripSlashes( $_REQUEST['cocuk2ogrenim'] );
$FTGcocuk2meslek = DoStripSlashes( $_REQUEST['cocuk2meslek'] );
$FTGcocuk2yukumlu = DoStripSlashes( $_REQUEST['cocuk2yukumlu'] );
$FTGcocuk3ad = DoStripSlashes( $_REQUEST['cocuk3ad'] );
$FTGcocuk3dogum = DoStripSlashes( $_REQUEST['cocuk3dogum'] );
$FTGcocuk3ogrenim = DoStripSlashes( $_REQUEST['cocuk3ogrenim'] );
$FTGcocuk3meslek = DoStripSlashes( $_REQUEST['cocuk3meslek'] );
$FTGcocuk3yukumlu = DoStripSlashes( $_REQUEST['cocuk3yukumlu'] );
$FTGboy = DoStripSlashes( $_REQUEST['boy'] );
$FTGkilo = DoStripSlashes( $_REQUEST['kilo'] );
$FTGgecmisoperasyon = DoStripSlashes( $_REQUEST['gecmisoperasyon'] );
$FTGbedenselozur0 = DoStripSlashes( $_REQUEST['bedenselozur0'] );
$FTGbedenselozur1 = DoStripSlashes( $_REQUEST['bedenselozur1'] );
$FTGbedenselozur2 = DoStripSlashes( $_REQUEST['bedenselozur2'] );
$FTGbedenselozur3 = DoStripSlashes( $_REQUEST['bedenselozur3'] );
$FTGbedenselozur4 = DoStripSlashes( $_REQUEST['bedenselozur4'] );
$FTGbedenselozur5 = DoStripSlashes( $_REQUEST['bedenselozur5'] );
$FTGacilteladres = DoStripSlashes( $_REQUEST['acilteladres'] );
$FTGtahsil = DoStripSlashes( $_REQUEST['tahsil'] );
$FTGilkogretim = DoStripSlashes( $_REQUEST['ilkogretim'] );
$FTGilkogretimgiris = DoStripSlashes( $_REQUEST['ilkogretimgiris'] );
$FTGilkogretimmezuniyet = DoStripSlashes( $_REQUEST['ilkogretimmezuniyet'] );
$FTGlise = DoStripSlashes( $_REQUEST['lise'] );
$FTGlisegiris = DoStripSlashes( $_REQUEST['lisegiris'] );
$FTGlisemezuniyet = DoStripSlashes( $_REQUEST['lisemezuniyet'] );
$FTGuniversite = DoStripSlashes( $_REQUEST['universite'] );
$FTGuniversitegiris = DoStripSlashes( $_REQUEST['universitegiris'] );
$FTGuniversitemezuniyet = DoStripSlashes( $_REQUEST['universitemezuniyet'] );
$FTGdoktora = DoStripSlashes( $_REQUEST['doktora'] );
$FTGdoktoragiris = DoStripSlashes( $_REQUEST['doktoragiris'] );
$FTGdoktoramezuniyet = DoStripSlashes( $_REQUEST['doktoramezuniyet'] );
$FTGingkonusma = DoStripSlashes( $_REQUEST['ingkonusma'] );
$FTGingyazma = DoStripSlashes( $_REQUEST['ingyazma'] );
$FTGalmkonusma = DoStripSlashes( $_REQUEST['almkonusma'] );
$FTGalmyazma = DoStripSlashes( $_REQUEST['almyazma'] );
$FTGfrakonusma = DoStripSlashes( $_REQUEST['frakonusma'] );
$FTGfrayazma = DoStripSlashes( $_REQUEST['frayazma'] );
$FTGdigerdil = DoStripSlashes( $_REQUEST['digerdil'] );
$FTGdigerkonusma = DoStripSlashes( $_REQUEST['digerkonusma'] );
$FTGdigeryazma = DoStripSlashes( $_REQUEST['digeryazma'] );
$FTGkursseminer = DoStripSlashes( $_REQUEST['kursseminer'] );
$FTGremLen2 = DoStripSlashes( $_REQUEST['remLen2'] );
$FTGbilgisayar = DoStripSlashes( $_REQUEST['bilgisayar'] );
$FTGprogram = DoStripSlashes( $_REQUEST['program'] );
$FTGremLen3 = DoStripSlashes( $_REQUEST['remLen3'] );
$FTGkurulus1 = DoStripSlashes( $_REQUEST['kurulus1'] );
$FTGkurulus1giris = DoStripSlashes( $_REQUEST['kurulus1giris'] );
$FTGkurulus1ayrilis = DoStripSlashes( $_REQUEST['kurulus1ayrilis'] );
$FTGkurulus1pozisyon = DoStripSlashes( $_REQUEST['kurulus1pozisyon'] );
$FTGkurulus1ayrilissebep = DoStripSlashes( $_REQUEST['kurulus1ayrilissebep'] );
$FTGkurulus2 = DoStripSlashes( $_REQUEST['kurulus2'] );
$FTGkurulus2giris = DoStripSlashes( $_REQUEST['kurulus2giris'] );
$FTGkurulus2ayrilis = DoStripSlashes( $_REQUEST['kurulus2ayrilis'] );
$FTGkurulus2pozisyon = DoStripSlashes( $_REQUEST['kurulus2pozisyon'] );
$FTGkurulus2ayrilissebep = DoStripSlashes( $_REQUEST['kurulus2ayrilissebep'] );
$FTGkurulus3 = DoStripSlashes( $_REQUEST['kurulus3'] );
$FTGkurulus3giris = DoStripSlashes( $_REQUEST['kurulus3giris'] );
$FTGkurulus3ayrilis = DoStripSlashes( $_REQUEST['kurulus3ayrilis'] );
$FTGkurulus3pozisyon = DoStripSlashes( $_REQUEST['kurulus3pozisyon'] );
$FTGkurulus3ayrilissebep = DoStripSlashes( $_REQUEST['kurulus3ayrilissebep'] );
$FTGasmnerdenduydun = DoStripSlashes( $_REQUEST['asmnerdenduydun'] );
$FTGanadoluakraba = DoStripSlashes( $_REQUEST['anadoluakraba'] );
$FTGvarsaad = DoStripSlashes( $_REQUEST['varsaad'] );
$FTGucret = DoStripSlashes( $_REQUEST['ucret'] );
$FTGsigara = DoStripSlashes( $_REQUEST['sigara'] );
$FTGseyahatengeli = DoStripSlashes( $_REQUEST['seyahatengeli'] );
$FTGmesaidisi = DoStripSlashes( $_REQUEST['mesaidisi'] );
$FTGvardiya = DoStripSlashes( $_REQUEST['vardiya'] );
$FTGehliyetsinifi = DoStripSlashes( $_REQUEST['ehliyetsinifi'] );
$FTGuyekurulus1 = DoStripSlashes( $_REQUEST['uyekurulus1'] );
$FTGuyekurulus1uyelik = DoStripSlashes( $_REQUEST['uyekurulus1uyelik'] );
$FTGuyekurulus1tarih = DoStripSlashes( $_REQUEST['uyekurulus1tarih'] );
$FTGuyekurulus2 = DoStripSlashes( $_REQUEST['uyekurulus2'] );
$FTGuyekurulus2uyelik = DoStripSlashes( $_REQUEST['uyekurulus2uyelik'] );
$FTGuyekurulus2tarih = DoStripSlashes( $_REQUEST['uyekurulus2tarih'] );
$FTGuyekurulus3 = DoStripSlashes( $_REQUEST['uyekurulus3'] );
$FTGuyekurulus3uyelik = DoStripSlashes( $_REQUEST['uyekurulus3uyelik'] );
$FTGuyekurulus3tarih = DoStripSlashes( $_REQUEST['uyekurulus3tarih'] );
$FTGamirad = DoStripSlashes( $_REQUEST['amirad'] );
$FTGegitmenad = DoStripSlashes( $_REQUEST['egitmenad'] );
$FTGsectiginizad = DoStripSlashes( $_REQUEST['sectiginizad'] );
$FTGamiradres = DoStripSlashes( $_REQUEST['amiradres'] );
$FTGegitmenadres = DoStripSlashes( $_REQUEST['egitmenadres'] );
$FTGsectiginizadres = DoStripSlashes( $_REQUEST['sectiginizadres'] );
$FTGamirtelefon = DoStripSlashes( $_REQUEST['amirtelefon'] );
$FTGegitmentelefon = DoStripSlashes( $_REQUEST['egitmentelefon'] );
$FTGsectiginiztelefon = DoStripSlashes( $_REQUEST['sectiginiztelefon'] );
$FTGSave = DoStripSlashes( $_REQUEST['Save'] );



# Redirect user to the error page

if ($ValidationFailed == true) {

 header("Location: error.html");
 exit;

}
# Email to Form Owner

$emailSubject = FilterCChars("PhpAspWeb Teknolojileri - �nsan Kaynaklar� Formu");

$emailBody = chunk_split(base64_encode("<HTML><HEAD><TITLE>PhpAspWeb Teknolojileri �nsan Kaynaklar� Ba�vuru Formu</TITLE>\n"
 . "<LINK \n"
 . "href=\"http://www.bilgegumruk.com/insankaynaklari/styleform.css\" \n"
 . "type=text/css rel=stylesheet>\n"
 . "<SCRIPT language=javascript>\n"
 . "	//Text alanlar�n� limitlemek i�in\n"
 . "	function textareaLimiter(field, countfield, maxlimit) {\n"
 . "		if (field.value.length > maxlimit) field.value = field.value.substring(0, maxlimit);\n"
 . "		else countfield.value = maxlimit - field.value.length;\n"
 . "	}\n"
 . "</SCRIPT>\n"
 . "</HEAD>\n"
 . "<BODY class=back text=#000000 vLink=#012d9a aLink=#012d9a link=#012d9a \n"
 . "bgColor=#e7e7e8>\n"
 . " <TABLE cellSpacing=0 cellPadding=0 width=590 border=0>\n"
 . "                    <TBODY>\n"
 . "                    <TR>\n"
 . "                      <TD class=arial>PhpAspWeb Teknolojileri �nsan Kaynaklar� Ba�vuru Formu</TD></TR></TBODY></TABLE>\n"
 . "                  <HR align=left width=590 color=#d8d8d8 noShade SIZE=1>\n"
 . "\n"
 . "                  <SCRIPT>\n"
 . "						function checkIKForm(){\n"
 . "							if(IKForm.bolum.value==\"\"){alert(\"Ba�vurmak istedi�iniz b�l�m� se�iniz.\");IKForm.bolum.focus();}\n"
 . "							else if(IKForm.pozisyon.value==\"\"){alert(\"Ba�vurmak istedi�iniz pozisyonu giriniz.\");IKForm.pozisyon.focus();}\n"
 . "							else if(IKForm.ad.value==\"\"){alert(\"Ad�n�z� giriniz.\");IKForm.ad.focus();}\n"
 . "							else if(IKForm.soyad.value==\"\"){alert(\"Soyad�n�z� giriniz.\");IKForm.soyad.focus();}\n"
 . "							else if(IKForm.dogumyeri.value==\"\"){alert(\"Do�um yerinizi giriniz\");IKForm.dogumyeri.focus();}\n"
 . "							else if(IKForm.gun.value==\"\" || IKForm.ay.value==\"\" || IKForm.yil.value==\"\"){alert(\"Do�um tarihinizi giriniz.\");IKForm.gun.focus();}\n"
 . "							else if(IKForm.adres.value==\"\"){alert(\"Adresinizi giriniz.\");IKForm.adres.focus();}\n"
 . "							else if(IKForm.tel1.value==\"\" && IKForm.tel2.value==\"\" && IKForm.email.value==\"\"){alert(\"Size ula�abilmemiz i�in telefon,cep telefonu ve mail adresi bilgilerinden en az birini giriniz.\");IKForm.tel1.focus();}\n"
 . "							else if(IKForm.bedenselozur0.value==\"\" && IKForm.bedenselozur1.value==\"\" && IKForm.bedenselozur2.value==\"\" && IKForm.bedenselozur3.value==\"\" && IKForm.bedenselozur4.value==\"\" && IKForm.bedenselozur5.value==\"\"){alert(\"L�tfen bedensel �z�r ile ilgili soruyu yan�tlay�n�z.\");IKForm.bedenselozur0.focus();}\n"
 . "							\n"
 . "							else if((IKForm.tahsil.value==\"1\" || IKForm.tahsil.value==\"2\" || IKForm.tahsil.value==\"3\" || IKForm.tahsil.value==\"4\") && IKForm.ilkogretim.value==\"\"){alert(\"�lk��retim e�itiminizi ald���n�z kurumun ad�n� ve adresini belirtiniz.\");IKForm.ilkogretim.focus();}\n"
 . "							else if((IKForm.tahsil.value==\"1\" || IKForm.tahsil.value==\"2\" || IKForm.tahsil.value==\"3\" || IKForm.tahsil.value==\"4\") && IKForm.ilkogretimgiris.value==\"-1\"){alert(\"�lk��retim e�itiminize ba�lad���n�z y�l� belirtiniz.\");IKForm.ilkogretimgiris.focus();}\n"
 . "							else if((IKForm.tahsil.value==\"1\" || IKForm.tahsil.value==\"2\" || IKForm.tahsil.value==\"3\" || IKForm.tahsil.value==\"4\") && IKForm.ilkogretimmezuniyet.value==\"-1\"){alert(\"�lk��retim e�itiminizi tamamlad���n�z y�l� belirtiniz.\");IKForm.ilkogretimmezuniyet.focus();}\n"
 . "\n"
 . "							else if((IKForm.tahsil.value==\"2\" || IKForm.tahsil.value==\"3\" || IKForm.tahsil.value==\"4\") && IKForm.lise.value==\"\"){alert(\"Lise e�itiminizi ald���n�z kurumun ad�n� ve adresini belirtiniz.\");IKForm.lise.focus();}\n"
 . "							else if((IKForm.tahsil.value==\"2\" || IKForm.tahsil.value==\"3\" || IKForm.tahsil.value==\"4\") && IKForm.lisegiris.value==\"-1\"){alert(\"Lise e�itiminize ba�lad���n�z y�l� belirtiniz.\");IKForm.lisegiris.focus();}\n"
 . "							else if((IKForm.tahsil.value==\"2\" || IKForm.tahsil.value==\"3\" || IKForm.tahsil.value==\"4\") && IKForm.lisemezuniyet.value==\"-1\"){alert(\"Lise e�itiminizi tamamlad���n�z y�l� belirtiniz.\");IKForm.lisemezuniyet.focus();}\n"
 . "\n"
 . "							else if((IKForm.tahsil.value==\"3\" || IKForm.tahsil.value==\"4\") && IKForm.universite.value==\"\"){alert(\"�niversite e�itiminizi ald���n�z kurumun ad�n� ve adresini belirtiniz.\");IKForm.universite.focus();}\n"
 . "							else if((IKForm.tahsil.value==\"3\" || IKForm.tahsil.value==\"4\") && IKForm.universitegiris.value==\"-1\"){alert(\"�niversite e�itiminize ba�lad���n�z y�l� belirtiniz.\");IKForm.universitegiris.focus();}\n"
 . "							else if((IKForm.tahsil.value==\"3\" || IKForm.tahsil.value==\"4\") && IKForm.universitemezuniyet.value==\"-1\"){alert(\"�niversite e�itiminizi tamamlad���n�z y�l� belirtiniz.\");IKForm.universitemezuniyet.focus();}\n"
 . "\n"
 . "							else if(IKForm.tahsil.value==\"4\" && IKForm.doktora.value==\"\"){alert(\"Y�ksek Lisans/Doktora e�itiminizi ald���n�z kurumun ad�n� ve adresini belirtiniz.\");IKForm.doktora.focus();}\n"
 . "							else if(IKForm.tahsil.value==\"4\" && IKForm.doktoragiris.value==\"-1\"){alert(\"Y�ksek Lisans/Doktora e�itiminize ba�lad���n�z y�l� belirtiniz.\");IKForm.doktoragiris.focus();}\n"
 . "							else if(IKForm.tahsil.value==\"4\" && IKForm.doktoramezuniyet.value==\"-1\"){alert(\"Y�ksek Lisans/Doktora e�itiminizi tamamlad���n�z y�l� belirtiniz.\");IKForm.doktoramezuniyet.focus();}\n"
 . "					\n"
 . "							else return true;\n"
 . "							return false;\n"
 . "						}\n"
 . "					</SCRIPT>\n"
 . "\n"
 . "                  <TABLE cellSpacing=0 cellPadding=0 width=590 border=0>\n"
 . "                    <FORM name=IKForm onsubmit=\"return checkIKForm()\" \n"
 . "                    action=gonder.php method=post>\n"
 . "                    <TBODY>\n"
 . "                    <TR>\n"
 . "                      <TD align=middle>\n"
 . "                        <TABLE cellSpacing=0 cellPadding=0 width=590 border=0>\n"
 . "                          <TBODY>\n"
 . "                          \n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=15></TD>\n"
 . "                            <TD class=arial></TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial bgColor=#4d81ba height=20><B><FONT \n"
 . "                              color=#ffffff>&nbsp;&nbsp;K���SEL \n"
 . "                              B�LG�LER</FONT></B></TD>\n"
 . "                            <TD class=arial bgColor=#4d81ba>&nbsp;</TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>Ad:</B></TD>\n"
 . "                            <TD class=arial>$FTGad</TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>Soyad:</B></TD>\n"
 . "                            <TD class=arial>$FTGsoyad</TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>Do�um Yeri:</B></TD>\n"
 . "                            <TD class=arial>$FTGdogumyeri</TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>Do�um Tarihi:</B></TD>\n"
 . "                            <TD class=arial>$FTGgun/$FTGay/$FTGyil</TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>Cinsiyet:</B></TD>\n"
 . "                            <TD class=arial>\n"
 . "                              <TABLE cellSpacing=0 cellPadding=0 border=0>\n"
 . "                                <TBODY>\n"
 . "                                <TR>\n"
 . "                                <TD class=arial width=10></TD>\n"
 . "                                <TD class=arial>$FTGcinsiyet</TD>\n"
 . "                                <TD class=arial width=10></TD>\n"
 . "                                <TD \n"
 . "                          class=arial></TD></TR></TBODY></TABLE></TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>Medeni Durum:</B></TD>\n"
 . "                            <TD class=arial>$FTGmedenidurum</TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>S�rekli Adres:</B></TD>\n"
 . "                            <TD class=arial>$FTGadres</TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>Telefon:</B></TD>\n"
 . "                            <TD class=arial>$FTGkod1 $FTGtel1</TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>Cep Telefonu:</B></TD>\n"
 . "                            <TD class=arial>$FTGkod2 $FTGtel2</TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>E-mail:</B></TD>\n"
 . "                            <TD class=arial>$FTGemail</TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>SSK No:</B></TD>\n"
 . "                            <TD class=arial>$FTGsskno</TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>T.C. Kimlik \n"
 . "No:</B></TD>\n"
 . "                            <TD class=arial>$FTGtckimlikno</TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>Uyruk:</B></TD>\n"
 . "                            <TD class=arial>$FTGuyruk</TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>Askerlik \n"
 . "                            Durumu:</B></TD>\n"
 . "                            <TD class=arial>$FTGaskerlikdurumu</TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>Askerli�inizi \n"
 . "                              Yapmad�ysan�z <BR>Nedenini Yaz�n�z: </B></TD>\n"
 . "                            <TD class=arial>$FTGaskerlikyapmamasebebi \n"
 . "                        </TD></TR></TBODY></TABLE>\n"
 . "                        <HR align=left width=590 color=#d8d8d8 noShade SIZE=1>\n"
 . "\n"
 . "                        <TABLE cellSpacing=0 cellPadding=0 width=590 border=0>\n"
 . "                          <TBODY>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial><B>Aile Durumu</B></TD>\n"
 . "                            <TD class=arial>Ad� Soyad�:</TD>\n"
 . "                            <TD class=arial>Do�um Yeri &amp; Y�l�:</TD>\n"
 . "                            <TD class=arial>��renim Durumu:</TD>\n"
 . "                            <TD class=arial>Mesle�i, ��yeri:</TD>\n"
 . "                            <TD class=arial>Bakmakla Y�k�ml� \n"
 . "                            <BR>Olduklar�n�z:</TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial><B>Annenizin</B></TD>\n"
 . "                            <TD class=arial>$FTGannead</TD>\n"
 . "                            <TD class=arial>$FTGannedogum</TD>\n"
 . "                            <TD class=arial>$FTGanneogrenim</TD>\n"
 . "                            <TD class=arial>$FTGannemeslek</TD>\n"
 . "                            <TD class=arial>$FTGanneyukumlu</TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial><B>Baban�z�n </B></TD>\n"
 . "                            <TD class=arial>$FTGbabaad</TD>\n"
 . "                            <TD class=arial>$FTGbabadogum</TD>\n"
 . "                            <TD class=arial>$FTGbabaogrenim</TD>\n"
 . "                            <TD class=arial>$FTGbabameslek</TD>\n"
 . "                            <TD class=arial>$FTGbabayukumlu</TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial><B>E�inizin </B></TD>\n"
 . "                            <TD class=arial>$FTGesad</TD>\n"
 . "                            <TD class=arial>$FTGesdogum</TD>\n"
 . "                            <TD class=arial>$FTGesogrenim</TD>\n"
 . "                            <TD class=arial>$FTGesmeslek</TD>\n"
 . "                            <TD class=arial>$FTGesyukumlu</TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial><B>�ocu�unuzun </B></TD>\n"
 . "                            <TD class=arial>$FTGcocuk1ad</TD>\n"
 . "                            <TD class=arial>$FTGcocuk1dogum</TD>\n"
 . "                            <TD class=arial>$FTGcocuk1ogrenim</TD>\n"
 . "                            <TD class=arial>$FTGcocuk1meslek</TD>\n"
 . "                            <TD class=arial>$FTGcocuk1yukumlu</TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial><B>�ocu�unuzun </B></TD>\n"
 . "                            <TD class=arial>$FTGcocuk2ad</TD>\n"
 . "                            <TD class=arial>$FTGcocuk2dogum</TD>\n"
 . "                            <TD class=arial>$FTGcocuk2ogrenim</TD>\n"
 . "                            <TD class=arial>$FTGcocuk2meslek</TD>\n"
 . "                            <TD class=arial>$FTGcocuk2yukumlu</TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial><B>�ocu�unuzun </B></TD>\n"
 . "                            <TD class=arial>$FTGcocuk3ad</TD>\n"
 . "                            <TD class=arial>$FTGcocuk3dogum</TD>\n"
 . "                            <TD class=arial>$FTGcocuk3ogrenim</TD>\n"
 . "                            <TD class=arial>$FTGcocuk3meslek</TD>\n"
 . "                            <TD class=arial>$FTGcocuk3yukumlu</TD></TR></TBODY></TABLE><BR>\n"
 . "                        <TABLE cellSpacing=0 cellPadding=0 width=590 border=0>\n"
 . "                          <TBODY>\n"
 . "                          <TR bgColor=#4d81ba>\n"
 . "                            <TD class=arial width=260 height=20><B><FONT \n"
 . "                              color=#ffffff>&nbsp;&nbsp;F�Z�KSEL \n"
 . "                              B�LG�LER</FONT></B></TD>\n"
 . "                            <TD class=arial>&nbsp;</TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>Boyunuz:</B></TD>\n"
 . "                            <TD class=arial>$FTGboy</TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>Kilonuz:</B></TD>\n"
 . "                            <TD class=arial>$FTGkilo</TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>Ge�irmi� oldu�unuz, \n"
 . "                              s�regelen �nemli <BR>rahats�zl�klar ve t�bbi \n"
 . "                              operasyonlar var m�?</B></TD>\n"
 . "                            <TD class=arial>$FTGgecmisoperasyon</TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>Herhangi bir bedensel \n"
 . "                              �z�r�n�z var m�?</B></TD>\n"
 . "                            <TD class=arial>\n"
 . "                              <TABLE cellSpacing=0 cellPadding=0 width=\"100%\" \n"
 . "                              border=0>\n"
 . "                                <TBODY>\n"
 . "                                <TR>\n"
 . "                                <TD class=arial width=10>$FTGbedenselozur0</TD>\n"
 . "                                <TD class=arial>Yok</TD>\n"
 . "                                <TD class=arial width=10>$FTGbedenselozur1</TD>\n"
 . "                                <TD class=arial>Ayak</TD>\n"
 . "                                <TD class=arial width=10>$FTGbedenselozur2</TD>\n"
 . "                                <TD class=arial>Eller</TD>\n"
 . "                                <TD class=arial width=10>$FTGbedenselozur3</TD>\n"
 . "                                <TD class=arial>Duyma</TD>\n"
 . "                                <TD class=arial width=10>$FTGbedenselozur4</TD>\n"
 . "                                <TD class=arial>Konu�ma</TD>\n"
 . "                                <TD class=arial width=10>$FTGbedenselozur5</TD>\n"
 . "                                <TD \n"
 . "                          class=arial>Di�er</TD></TR></TBODY></TABLE></TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>Acil durumlarda \n"
 . "                              ba�vurulacak ki�inin <BR>Ad� Soyad�, Telefonu, \n"
 . "                              Adresi:</B></TD>\n"
 . "                            <TD class=arial>$FTGacilteladres \n"
 . "</TD></TR></TBODY></TABLE><BR>\n"
 . "                        <TABLE cellSpacing=0 cellPadding=0 width=590 border=0>\n"
 . "                          <TBODY>\n"
 . "                          <TR bgColor=#4d81ba>\n"
 . "                            <TD class=arial width=215 height=20><B><FONT \n"
 . "                              color=#ffffff>&nbsp;&nbsp;E��T�M \n"
 . "                              B�LG�LER�</FONT></B></TD>\n"
 . "                            <TD class=arial width=195>&nbsp;</TD>\n"
 . "                            <TD class=arial width=80>&nbsp;</TD>\n"
 . "                            <TD class=arial width=100>&nbsp;</TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=30><B>En Son Bitirdi�iniz \n"
 . "                              Okul: </B></TD>\n"
 . "                            <TD class=arial height=30>$FTGtahsil</TD>\n"
 . "                            <TD class=arial height=30>&nbsp;</TD>\n"
 . "                            <TD class=arial height=30>&nbsp;</TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial colSpan=4>\n"
 . "                              <HR align=left width=590 color=#d8d8d8 noShade \n"
 . "                              SIZE=1>\n"
 . "                            </TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25>&nbsp;</TD>\n"
 . "                            <TD class=arial><B>Okul / B�l�m:</B></TD>\n"
 . "                            <TD class=arial><B>Giri� Tarihi:</B></TD>\n"
 . "                            <TD class=arial><B>Mezuniyet Tarihi:</B></TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>�lk��retim:</B></TD>\n"
 . "                            <TD class=arial>$FTGilkogretim</TD>\n"
 . "                            <TD class=arial>$FTGilkogretimgiris</TD>\n"
 . "                            <TD class=arial>$FTGilkogretimmezuniyet</TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>Lise:</B></TD>\n"
 . "                            <TD class=arial>$FTGlise</TD>\n"
 . "                            <TD class=arial>$FTGlisegiris</TD>\n"
 . "                            <TD class=arial>$FTGlisemezuniyet</TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>�niversite:</B></TD>\n"
 . "                            <TD class=arial>$FTGuniversite</TD>\n"
 . "                            <TD class=arial>$FTGuniversitegiris</TD>\n"
 . "                            <TD class=arial>$FTGuniversitemezuniyet</TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>Y�ksek Lisans / \n"
 . "                              Doktora / Uzmanl�k:</B></TD>\n"
 . "                            <TD class=arial>$FTGdoktora</TD>\n"
 . "                            <TD class=arial>$FTGdoktoragiris</TD>\n"
 . "                            <TD class=arial>$FTGdoktoramezuniyet</TD></TR></TBODY></TABLE>\n"
 . "                        <HR align=left width=590 color=#d8d8d8 noShade SIZE=1>\n"
 . "\n"
 . "                        <TABLE cellSpacing=0 cellPadding=0 width=590 border=0>\n"
 . "                          <TBODY>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>Yabanc� Dil:</B></TD>\n"
 . "                            <TD class=arial width=240><B>Konu�ma</B></TD>\n"
 . "                            <TD class=arial width=230><B>Yazma</B></TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>�ngilizce:</B></TD>\n"
 . "                            <TD class=arial>\n"
 . "                              <TABLE cellSpacing=0 cellPadding=0 width=230 \n"
 . "                              border=0>\n"
 . "                                <TBODY>\n"
 . "                                <TR>\n"
 . "                                <TD class=arial width=10>$FTGingkonusma</TD>\n"
 . "                                <TD class=arial></TD>\n"
 . "                                <TD class=arial width=10></TD>\n"
 . "                                <TD class=arial></TD>\n"
 . "                                <TD class=arial width=10></TD>\n"
 . "                                <TD class=arial></TD>\n"
 . "                                <TD class=arial width=10></TD>\n"
 . "                                <TD class=arial></TD></TR></TBODY></TABLE></TD>\n"
 . "                            <TD class=arial>\n"
 . "                              <TABLE cellSpacing=0 cellPadding=0 width=230 \n"
 . "                              border=0>\n"
 . "                                <TBODY>\n"
 . "                                <TR>\n"
 . "                                <TD class=arial width=10>$FTGingyazma</TD>\n"
 . "                                <TD class=arial></TD>\n"
 . "                                <TD class=arial width=10></TD>\n"
 . "                                <TD class=arial></TD>\n"
 . "                                <TD class=arial width=10></TD>\n"
 . "                                <TD class=arial></TD>\n"
 . "                                <TD class=arial width=10></TD>\n"
 . "                                <TD \n"
 . "                          class=arial>Zay�f</TD></TR></TBODY></TABLE></TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>Almanca:</B></TD>\n"
 . "                            <TD class=arial>\n"
 . "                              <TABLE cellSpacing=0 cellPadding=0 width=230 \n"
 . "                              border=0>\n"
 . "                                <TBODY>\n"
 . "                                <TR>\n"
 . "                                <TD class=arial width=10>$FTGalmkonusma</TD>\n"
 . "                                <TD class=arial></TD>\n"
 . "                                <TD class=arial width=10></TD>\n"
 . "                                <TD class=arial></TD>\n"
 . "                                <TD class=arial width=10></TD>\n"
 . "                                <TD class=arial></TD>\n"
 . "                                <TD class=arial width=10></TD>\n"
 . "                                <TD class=arial></TD></TR></TBODY></TABLE></TD>\n"
 . "                            <TD class=arial>\n"
 . "                              <TABLE cellSpacing=0 cellPadding=0 width=230 \n"
 . "                              border=0>\n"
 . "                                <TBODY>\n"
 . "                                <TR>\n"
 . "                                <TD class=arial width=10>$FTGalmyazma</TD>\n"
 . "                                <TD class=arial></TD>\n"
 . "                                <TD class=arial width=10></TD>\n"
 . "                                <TD class=arial></TD>\n"
 . "                                <TD class=arial width=10></TD>\n"
 . "                                <TD class=arial></TD>\n"
 . "                                <TD class=arial width=10></TD>\n"
 . "                                <TD \n"
 . "                          class=arial>Zay�f</TD></TR></TBODY></TABLE></TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>Frans�zca:</B></TD>\n"
 . "                            <TD class=arial>\n"
 . "                              <TABLE cellSpacing=0 cellPadding=0 width=230 \n"
 . "                              border=0>\n"
 . "                                <TBODY>\n"
 . "                                <TR>\n"
 . "                                <TD class=arial width=10>$FTGfrakonusma</TD>\n"
 . "                                <TD class=arial></TD>\n"
 . "                                <TD class=arial width=10></TD>\n"
 . "                                <TD class=arial></TD>\n"
 . "                                <TD class=arial width=10></TD>\n"
 . "                                <TD class=arial></TD>\n"
 . "                                <TD class=arial width=10></TD>\n"
 . "                                <TD class=arial></TD></TR></TBODY></TABLE></TD>\n"
 . "                            <TD class=arial>\n"
 . "                              <TABLE cellSpacing=0 cellPadding=0 width=230 \n"
 . "                              border=0>\n"
 . "                                <TBODY>\n"
 . "                                <TR>\n"
 . "                                <TD class=arial width=10>$FTGfrayazma</TD>\n"
 . "                                <TD class=arial></TD>\n"
 . "                                <TD class=arial width=10></TD>\n"
 . "                                <TD class=arial></TD>\n"
 . "                                <TD class=arial width=10></TD>\n"
 . "                                <TD class=arial></TD>\n"
 . "                                <TD class=arial width=10></TD>\n"
 . "                                <TD \n"
 . "                          class=arial></TD></TR></TBODY></TABLE></TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>Di�er: $FTGdigerdil \n"
 . "                              </B></TD>\n"
 . "                            <TD class=arial>\n"
 . "                              <TABLE cellSpacing=0 cellPadding=0 width=230 \n"
 . "                              border=0>\n"
 . "                                <TBODY>\n"
 . "                                <TR>\n"
 . "                                <TD class=arial width=10>$FTGdigerkonusma</TD>\n"
 . "                                <TD class=arial></TD>\n"
 . "                                <TD class=arial width=10></TD>\n"
 . "                                <TD class=arial></TD>\n"
 . "                                <TD class=arial width=10></TD>\n"
 . "                                <TD class=arial></TD>\n"
 . "                                <TD class=arial width=10></TD>\n"
 . "                                <TD class=arial></TD></TR></TBODY></TABLE></TD>\n"
 . "                            <TD class=arial>\n"
 . "                              <TABLE cellSpacing=0 cellPadding=0 width=230 \n"
 . "                              border=0>\n"
 . "                                <TBODY>\n"
 . "                                <TR>\n"
 . "                                <TD class=arial width=10>$FTGdigeryazma</TD>\n"
 . "                                <TD class=arial></TD>\n"
 . "                                <TD class=arial width=10></TD>\n"
 . "                                <TD class=arial></TD>\n"
 . "                                <TD class=arial width=10></TD>\n"
 . "                                <TD class=arial></TD>\n"
 . "                                <TD class=arial width=10></TD>\n"
 . "                                <TD \n"
 . "                          class=arial>Zay�f</TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE>\n"
 . "                        <HR align=left width=590 color=#d8d8d8 noShade SIZE=1>\n"
 . "\n"
 . "                        <TABLE cellSpacing=0 cellPadding=0 width=590 border=0>\n"
 . "                          <TBODY>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>Kat�ld���n�z kurs, \n"
 . "                              seminer, <BR>sertifika programlar�:</B></TD>\n"
 . "                            <TD class=arial>$FTGkursseminer</TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>Bilgisayar kullan�yor \n"
 . "                              musunuz?</B></TD>\n"
 . "                            <TD class=arial>\n"
 . "                              <TABLE cellSpacing=0 cellPadding=0 border=0>\n"
 . "                                <TBODY>\n"
 . "                                <TR>\n"
 . "                                <TD class=arial width=10>$FTGbilgisayar</TD>\n"
 . "                                <TD class=arial></TD>\n"
 . "                                <TD class=arial width=10></TD>\n"
 . "                                <TD \n"
 . "                          class=arial></TD></TR></TBODY></TABLE></TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>Evet ise \n"
 . "                              kulland���n�z programlar:</B></TD>\n"
 . "                            <TD class=arial>$FTGprogram</TD></TR></TBODY></TABLE><BR>\n"
 . "                        <TABLE cellSpacing=0 cellPadding=0 width=590 border=0>\n"
 . "                          <TBODY>\n"
 . "                          <TR bgColor=#4d81ba>\n"
 . "                            <TD class=arial height=20><B><FONT \n"
 . "                              color=#ffffff>&nbsp;&nbsp;�� TECR�BES� \n"
 . "                            </FONT></B></TD>\n"
 . "                            <TD class=arial align=right><FONT \n"
 . "                              color=#ffffff>L�tfen son i� tecr�besi ba�ta olmak \n"
 . "                              �zere \n"
 . "                        belirtiniz.&nbsp;&nbsp;</FONT></TD></TR></TBODY></TABLE>\n"
 . "                        <TABLE cellSpacing=0 cellPadding=0 width=590 border=0>\n"
 . "                          <TBODY>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>Kurulu� �smi, \n"
 . "                              Adresi:</B></TD>\n"
 . "                            <TD class=arial><B>Giri� Tarihi:</B></TD>\n"
 . "                            <TD class=arial><B>Ayr�l�� Tarihi:</B></TD>\n"
 . "                            <TD class=arial><B>Pozisyon:</B></TD>\n"
 . "                            <TD class=arial><B>Ayr�l�� Nedeni:</B></TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25>$FTGkurulus1</TD>\n"
 . "                            <TD class=arial>$FTGkurulus1giris</TD>\n"
 . "                            <TD class=arial>$FTGkurulus1ayrilis</TD>\n"
 . "                            <TD class=arial>$FTGkurulus1pozisyon</TD>\n"
 . "                            <TD class=arial>$FTGkurulus1ayrilissebep</TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25>$FTGkurulus2</TD>\n"
 . "                            <TD class=arial>$FTGkurulus2giris</TD>\n"
 . "                            <TD class=arial>$FTGkurulus2ayrilis</TD>\n"
 . "                            <TD class=arial>$FTGkurulus2pozisyon</TD>\n"
 . "                            <TD class=arial>$FTGkurulus2ayrilissebep</TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25>$FTGkurulus3</TD>\n"
 . "                            <TD class=arial>$FTGkurulus3giris</TD>\n"
 . "                            <TD class=arial>$FTGkurulus3ayrilis</TD>\n"
 . "                            <TD class=arial>$FTGkurulus3pozisyon</TD>\n"
 . "                            <TD class=arial>$FTGkurulus3ayrilissebep</TD></TR></TBODY></TABLE><BR>\n"
 . "                        <TABLE cellSpacing=0 cellPadding=0 width=590 border=0>\n"
 . "                          <TBODY>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial bgColor=#4d81ba height=20><B><FONT \n"
 . "                              color=#ffffff>&nbsp;&nbsp;D��ER B�LG�LER \n"
 . "                              </FONT></B></TD>\n"
 . "                            <TD class=arial bgColor=#4d81ba \n"
 . "                          height=20>&nbsp;</TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>PhpAspWeb Teknolojileri 'yi nereden duydunuz?</B></TD>\n"
 . "                            <TD class=arial height=20>$FTGasmnerdenduydun</TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>PhpAspWeb Teknolojileri 'de\n"
 . "                              �al��an akraba ya da <BR>tan�d���n�z var \n"
 . "m�?</B></TD>\n"
 . "                            <TD class=arial height=20>\n"
 . "                              <TABLE cellSpacing=0 cellPadding=0 border=0>\n"
 . "                                <TBODY>\n"
 . "                                <TR>\n"
 . "                                <TD class=arial width=10>$FTGanadoluakraba</TD>\n"
 . "                                <TD class=arial></TD>\n"
 . "                                <TD class=arial width=10></TD>\n"
 . "                                <TD class=arial></TD></TR></TBODY></TABLE></TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>Varsa Ad� \n"
 . "                            Soyad�:</B></TD>\n"
 . "                            <TD class=arial height=20>$FTGvarsaad</TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>�� yerimizden talep \n"
 . "                              etti�iniz �cret:</B> </TD>\n"
 . "                            <TD class=arial height=20>$FTGucret</TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>Sigara kullan�yor \n"
 . "                              musunuz?</B></TD>\n"
 . "                            <TD class=arial height=20>\n"
 . "                              <TABLE cellSpacing=0 cellPadding=0 border=0>\n"
 . "                                <TBODY>\n"
 . "                                <TR>\n"
 . "                                <TD class=arial width=10>$FTGsigara</TD>\n"
 . "                                <TD class=arial></TD>\n"
 . "                                <TD class=arial width=10></TD>\n"
 . "                                <TD class=arial></TD></TR></TBODY></TABLE></TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>Seyahat etmeye engel \n"
 . "                              bir durumunuz var m�?</B></TD>\n"
 . "                            <TD class=arial height=20>\n"
 . "                              <TABLE cellSpacing=0 cellPadding=0 border=0>\n"
 . "                                <TBODY>\n"
 . "                                <TR>\n"
 . "                                <TD class=arial width=10>$FTGseyahatengeli</TD>\n"
 . "                                <TD class=arial></TD>\n"
 . "                                <TD class=arial width=10></TD>\n"
 . "                                <TD class=arial></TD></TR></TBODY></TABLE></TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>Mesai saatleri \n"
 . "                              d���nda �al��abilir misiniz?</B> </TD>\n"
 . "                            <TD class=arial height=20>\n"
 . "                              <TABLE cellSpacing=0 cellPadding=0 border=0>\n"
 . "                                <TBODY>\n"
 . "                                <TR>\n"
 . "                                <TD class=arial width=10>$FTGmesaidisi</TD>\n"
 . "                                <TD class=arial></TD>\n"
 . "                                <TD class=arial width=10></TD>\n"
 . "                                <TD class=arial></TD></TR></TBODY></TABLE></TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>Vardiyal� �al��abilir \n"
 . "                              misiniz?</B></TD>\n"
 . "                            <TD class=arial height=20>\n"
 . "                              <TABLE cellSpacing=0 cellPadding=0 border=0>\n"
 . "                                <TBODY>\n"
 . "                                <TR>\n"
 . "                                <TD class=arial width=10>$FTGvardiya</TD>\n"
 . "                                <TD class=arial></TD>\n"
 . "                                <TD class=arial width=10></TD>\n"
 . "                                <TD class=arial></TD></TR></TBODY></TABLE></TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>S�r�c� ehliyetiniz \n"
 . "                              varsa s�n�f�:</B> </TD>\n"
 . "                            <TD class=arial height=20>$FTGehliyetsinifi</TD></TR></TBODY></TABLE><BR>\n"
 . "                        <TABLE cellSpacing=0 cellPadding=0 width=590 border=0>\n"
 . "                          <TBODY>\n"
 . "                          <TR bgColor=#4d81ba>\n"
 . "                            <TD class=arial height=20><B><FONT \n"
 . "                              color=#ffffff>&nbsp;&nbsp;�YES� OLDU�UNUZ \n"
 . "                              KURULU�LAR</FONT></B></TD>\n"
 . "                            <TD class=arial align=right><FONT \n"
 . "                              color=#ffffff>Dernek, meslek odalar�, \n"
 . "                              kul�pler...&nbsp;&nbsp;</FONT></TD></TR></TBODY></TABLE>\n"
 . "                        <TABLE cellSpacing=0 cellPadding=0 width=590 border=0>\n"
 . "                          <TBODY>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>Kurulu� �smi, \n"
 . "                              Adresi:</B></TD>\n"
 . "                            <TD class=arial><B>�yelik:</B></TD>\n"
 . "                            <TD class=arial><B>Tarih:</B></TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25>$FTGuyekurulus1</TD>\n"
 . "                            <TD class=arial>$FTGuyekurulus1uyelik</TD>\n"
 . "                            <TD class=arial>$FTGuyekurulus1tarih</TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25>$FTGuyekurulus2</TD>\n"
 . "                            <TD class=arial>$FTGuyekurulus2uyelik</TD>\n"
 . "                            <TD class=arial>$FTGuyekurulus2tarih</TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25>$FTGuyekurulus3</TD>\n"
 . "                            <TD class=arial>$FTGuyekurulus3uyelik</TD>\n"
 . "                            <TD class=arial>$FTGuyekurulus3tarih</TD></TR></TBODY></TABLE><BR>\n"
 . "                        <TABLE cellSpacing=0 cellPadding=0 width=590 border=0>\n"
 . "                          <TBODY>\n"
 . "                          <TR bgColor=#4d81ba>\n"
 . "                            <TD class=arial height=20><B><FONT \n"
 . "                              color=#ffffff>&nbsp;&nbsp;HAKKINIZDA B�LG� \n"
 . "                              ALINAB�LECEK K���LER</FONT></B></TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=55><B>Referanslar:</B> �lk \n"
 . "                              b�l�me �al��t���n�z veya �al��makta oldu�unuz \n"
 . "                              kurumdan y�netici/amriniz, ikinci b�l�me e�itim \n"
 . "                              s�reciniz s�ras�nda hakk�n�zda bilgi sahibi olan \n"
 . "                              ki�i, son b�l�me ise sizin tercih etti�iniz, \n"
 . "                              hakk�n�zda t�m bilgileri alabilece�imiz ki�inin \n"
 . "                              isim, adres ve telefon numaralar�n� \n"
 . "                          yaz�n�z.</TD></TR></TBODY></TABLE>\n"
 . "                        <HR align=left width=590 color=#d8d8d8 noShade SIZE=1>\n"
 . "\n"
 . "                        <TABLE cellSpacing=0 cellPadding=0 width=590 border=0>\n"
 . "                          <TBODY>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25>&nbsp;</TD>\n"
 . "                            <TD class=arial height=25><B>Amiriniz / \n"
 . "                              Y�neticiniz</B></TD>\n"
 . "                            <TD class=arial><B>E�itmen / Akademisyen</B></TD>\n"
 . "                            <TD class=arial><B>Sizin Se�ti�iniz Ki�i</B></TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>Ad� Soyad�:</B></TD>\n"
 . "                            <TD class=arial height=25>$FTGamirad</TD>\n"
 . "                            <TD class=arial>$FTGegitmenad</TD>\n"
 . "                            <TD class=arial>$FTGsectiginizad</TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>Adres:</B></TD>\n"
 . "                            <TD class=arial height=25>$FTGamiradres</TD>\n"
 . "                            <TD class=arial>$FTGegitmenadres</TD>\n"
 . "                            <TD class=arial>$FTGsectiginizadres</TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>Telefon:</B></TD>\n"
 . "                            <TD class=arial height=25>$FTGamirtelefon</TD>\n"
 . "                            <TD class=arial>$FTGegitmentelefon</TD>\n"
 . "                            <TD class=arial>$FTGsectiginiztelefon</TD></TR></TBODY></TABLE>\n"
 . "                        <HR align=left width=590 color=#d8d8d8 noShade SIZE=1>\n"
 . "\n"
 . "                       \n"
 . "                        \n"
 . "                  </TD></TR></FORM></TBODY></TABLE><BR></TD></TR></TBODY></TABLE></BODY></HTML>"))
 . "\n";
 $emailTo = "Bilge G�mr�k M��avirlik Hizmetleri Ltd. �ti. <simplexs@hotmail.com>";
  
 $emailFrom = FilterCChars("simplexs@hotmail.com");
  
 $emailHeader = "From: $emailFrom\n"
  . "Cc: Bilge G�mr�k M��avirlik Hizmetleri Ltd. �ti. <simplexs@hotmail.com>" . "\n"
  . "MIME-Version: 1.0\n"
  . "Content-Type: text/html; charset=\"Windows-1254\"\n"
  . "Content-Transfer-Encoding: base64\n"
  . "\n";
  
 mail($emailTo, $emailSubject, $emailBody, $emailHeader);


# Redirect user to success page

header("Location: gonderildi.php");
exit;
?>