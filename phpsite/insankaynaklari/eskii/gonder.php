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

$emailSubject = FilterCChars("PhpAspWeb Teknolojileri - Ýnsan Kaynaklarý Formu");

$emailBody = chunk_split(base64_encode("<HTML><HEAD><TITLE>PhpAspWeb Teknolojileri Ýnsan Kaynaklarý Baþvuru Formu</TITLE>\n"
 . "<LINK \n"
 . "href=\"http://www.bilgegumruk.com/insankaynaklari/styleform.css\" \n"
 . "type=text/css rel=stylesheet>\n"
 . "<SCRIPT language=javascript>\n"
 . "	//Text alanlarýný limitlemek için\n"
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
 . "                      <TD class=arial>PhpAspWeb Teknolojileri Ýnsan Kaynaklarý Baþvuru Formu</TD></TR></TBODY></TABLE>\n"
 . "                  <HR align=left width=590 color=#d8d8d8 noShade SIZE=1>\n"
 . "\n"
 . "                  <SCRIPT>\n"
 . "						function checkIKForm(){\n"
 . "							if(IKForm.bolum.value==\"\"){alert(\"Baþvurmak istediðiniz bölümü seçiniz.\");IKForm.bolum.focus();}\n"
 . "							else if(IKForm.pozisyon.value==\"\"){alert(\"Baþvurmak istediðiniz pozisyonu giriniz.\");IKForm.pozisyon.focus();}\n"
 . "							else if(IKForm.ad.value==\"\"){alert(\"Adýnýzý giriniz.\");IKForm.ad.focus();}\n"
 . "							else if(IKForm.soyad.value==\"\"){alert(\"Soyadýnýzý giriniz.\");IKForm.soyad.focus();}\n"
 . "							else if(IKForm.dogumyeri.value==\"\"){alert(\"Doðum yerinizi giriniz\");IKForm.dogumyeri.focus();}\n"
 . "							else if(IKForm.gun.value==\"\" || IKForm.ay.value==\"\" || IKForm.yil.value==\"\"){alert(\"Doðum tarihinizi giriniz.\");IKForm.gun.focus();}\n"
 . "							else if(IKForm.adres.value==\"\"){alert(\"Adresinizi giriniz.\");IKForm.adres.focus();}\n"
 . "							else if(IKForm.tel1.value==\"\" && IKForm.tel2.value==\"\" && IKForm.email.value==\"\"){alert(\"Size ulaþabilmemiz için telefon,cep telefonu ve mail adresi bilgilerinden en az birini giriniz.\");IKForm.tel1.focus();}\n"
 . "							else if(IKForm.bedenselozur0.value==\"\" && IKForm.bedenselozur1.value==\"\" && IKForm.bedenselozur2.value==\"\" && IKForm.bedenselozur3.value==\"\" && IKForm.bedenselozur4.value==\"\" && IKForm.bedenselozur5.value==\"\"){alert(\"Lütfen bedensel özür ile ilgili soruyu yanýtlayýnýz.\");IKForm.bedenselozur0.focus();}\n"
 . "							\n"
 . "							else if((IKForm.tahsil.value==\"1\" || IKForm.tahsil.value==\"2\" || IKForm.tahsil.value==\"3\" || IKForm.tahsil.value==\"4\") && IKForm.ilkogretim.value==\"\"){alert(\"Ýlköðretim eðitiminizi aldýðýnýz kurumun adýný ve adresini belirtiniz.\");IKForm.ilkogretim.focus();}\n"
 . "							else if((IKForm.tahsil.value==\"1\" || IKForm.tahsil.value==\"2\" || IKForm.tahsil.value==\"3\" || IKForm.tahsil.value==\"4\") && IKForm.ilkogretimgiris.value==\"-1\"){alert(\"Ýlköðretim eðitiminize baþladýðýnýz yýlý belirtiniz.\");IKForm.ilkogretimgiris.focus();}\n"
 . "							else if((IKForm.tahsil.value==\"1\" || IKForm.tahsil.value==\"2\" || IKForm.tahsil.value==\"3\" || IKForm.tahsil.value==\"4\") && IKForm.ilkogretimmezuniyet.value==\"-1\"){alert(\"Ýlköðretim eðitiminizi tamamladýðýnýz yýlý belirtiniz.\");IKForm.ilkogretimmezuniyet.focus();}\n"
 . "\n"
 . "							else if((IKForm.tahsil.value==\"2\" || IKForm.tahsil.value==\"3\" || IKForm.tahsil.value==\"4\") && IKForm.lise.value==\"\"){alert(\"Lise eðitiminizi aldýðýnýz kurumun adýný ve adresini belirtiniz.\");IKForm.lise.focus();}\n"
 . "							else if((IKForm.tahsil.value==\"2\" || IKForm.tahsil.value==\"3\" || IKForm.tahsil.value==\"4\") && IKForm.lisegiris.value==\"-1\"){alert(\"Lise eðitiminize baþladýðýnýz yýlý belirtiniz.\");IKForm.lisegiris.focus();}\n"
 . "							else if((IKForm.tahsil.value==\"2\" || IKForm.tahsil.value==\"3\" || IKForm.tahsil.value==\"4\") && IKForm.lisemezuniyet.value==\"-1\"){alert(\"Lise eðitiminizi tamamladýðýnýz yýlý belirtiniz.\");IKForm.lisemezuniyet.focus();}\n"
 . "\n"
 . "							else if((IKForm.tahsil.value==\"3\" || IKForm.tahsil.value==\"4\") && IKForm.universite.value==\"\"){alert(\"Üniversite eðitiminizi aldýðýnýz kurumun adýný ve adresini belirtiniz.\");IKForm.universite.focus();}\n"
 . "							else if((IKForm.tahsil.value==\"3\" || IKForm.tahsil.value==\"4\") && IKForm.universitegiris.value==\"-1\"){alert(\"Üniversite eðitiminize baþladýðýnýz yýlý belirtiniz.\");IKForm.universitegiris.focus();}\n"
 . "							else if((IKForm.tahsil.value==\"3\" || IKForm.tahsil.value==\"4\") && IKForm.universitemezuniyet.value==\"-1\"){alert(\"Üniversite eðitiminizi tamamladýðýnýz yýlý belirtiniz.\");IKForm.universitemezuniyet.focus();}\n"
 . "\n"
 . "							else if(IKForm.tahsil.value==\"4\" && IKForm.doktora.value==\"\"){alert(\"Yüksek Lisans/Doktora eðitiminizi aldýðýnýz kurumun adýný ve adresini belirtiniz.\");IKForm.doktora.focus();}\n"
 . "							else if(IKForm.tahsil.value==\"4\" && IKForm.doktoragiris.value==\"-1\"){alert(\"Yüksek Lisans/Doktora eðitiminize baþladýðýnýz yýlý belirtiniz.\");IKForm.doktoragiris.focus();}\n"
 . "							else if(IKForm.tahsil.value==\"4\" && IKForm.doktoramezuniyet.value==\"-1\"){alert(\"Yüksek Lisans/Doktora eðitiminizi tamamladýðýnýz yýlý belirtiniz.\");IKForm.doktoramezuniyet.focus();}\n"
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
 . "                              color=#ffffff>&nbsp;&nbsp;KÝÞÝSEL \n"
 . "                              BÝLGÝLER</FONT></B></TD>\n"
 . "                            <TD class=arial bgColor=#4d81ba>&nbsp;</TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>Ad:</B></TD>\n"
 . "                            <TD class=arial>$FTGad</TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>Soyad:</B></TD>\n"
 . "                            <TD class=arial>$FTGsoyad</TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>Doðum Yeri:</B></TD>\n"
 . "                            <TD class=arial>$FTGdogumyeri</TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>Doðum Tarihi:</B></TD>\n"
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
 . "                            <TD class=arial height=25><B>Sürekli Adres:</B></TD>\n"
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
 . "                            <TD class=arial height=25><B>Askerliðinizi \n"
 . "                              Yapmadýysanýz <BR>Nedenini Yazýnýz: </B></TD>\n"
 . "                            <TD class=arial>$FTGaskerlikyapmamasebebi \n"
 . "                        </TD></TR></TBODY></TABLE>\n"
 . "                        <HR align=left width=590 color=#d8d8d8 noShade SIZE=1>\n"
 . "\n"
 . "                        <TABLE cellSpacing=0 cellPadding=0 width=590 border=0>\n"
 . "                          <TBODY>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial><B>Aile Durumu</B></TD>\n"
 . "                            <TD class=arial>Adý Soyadý:</TD>\n"
 . "                            <TD class=arial>Doðum Yeri &amp; Yýlý:</TD>\n"
 . "                            <TD class=arial>Öðrenim Durumu:</TD>\n"
 . "                            <TD class=arial>Mesleði, Ýþyeri:</TD>\n"
 . "                            <TD class=arial>Bakmakla Yükümlü \n"
 . "                            <BR>Olduklarýnýz:</TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial><B>Annenizin</B></TD>\n"
 . "                            <TD class=arial>$FTGannead</TD>\n"
 . "                            <TD class=arial>$FTGannedogum</TD>\n"
 . "                            <TD class=arial>$FTGanneogrenim</TD>\n"
 . "                            <TD class=arial>$FTGannemeslek</TD>\n"
 . "                            <TD class=arial>$FTGanneyukumlu</TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial><B>Babanýzýn </B></TD>\n"
 . "                            <TD class=arial>$FTGbabaad</TD>\n"
 . "                            <TD class=arial>$FTGbabadogum</TD>\n"
 . "                            <TD class=arial>$FTGbabaogrenim</TD>\n"
 . "                            <TD class=arial>$FTGbabameslek</TD>\n"
 . "                            <TD class=arial>$FTGbabayukumlu</TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial><B>Eþinizin </B></TD>\n"
 . "                            <TD class=arial>$FTGesad</TD>\n"
 . "                            <TD class=arial>$FTGesdogum</TD>\n"
 . "                            <TD class=arial>$FTGesogrenim</TD>\n"
 . "                            <TD class=arial>$FTGesmeslek</TD>\n"
 . "                            <TD class=arial>$FTGesyukumlu</TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial><B>Çocuðunuzun </B></TD>\n"
 . "                            <TD class=arial>$FTGcocuk1ad</TD>\n"
 . "                            <TD class=arial>$FTGcocuk1dogum</TD>\n"
 . "                            <TD class=arial>$FTGcocuk1ogrenim</TD>\n"
 . "                            <TD class=arial>$FTGcocuk1meslek</TD>\n"
 . "                            <TD class=arial>$FTGcocuk1yukumlu</TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial><B>Çocuðunuzun </B></TD>\n"
 . "                            <TD class=arial>$FTGcocuk2ad</TD>\n"
 . "                            <TD class=arial>$FTGcocuk2dogum</TD>\n"
 . "                            <TD class=arial>$FTGcocuk2ogrenim</TD>\n"
 . "                            <TD class=arial>$FTGcocuk2meslek</TD>\n"
 . "                            <TD class=arial>$FTGcocuk2yukumlu</TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial><B>Çocuðunuzun </B></TD>\n"
 . "                            <TD class=arial>$FTGcocuk3ad</TD>\n"
 . "                            <TD class=arial>$FTGcocuk3dogum</TD>\n"
 . "                            <TD class=arial>$FTGcocuk3ogrenim</TD>\n"
 . "                            <TD class=arial>$FTGcocuk3meslek</TD>\n"
 . "                            <TD class=arial>$FTGcocuk3yukumlu</TD></TR></TBODY></TABLE><BR>\n"
 . "                        <TABLE cellSpacing=0 cellPadding=0 width=590 border=0>\n"
 . "                          <TBODY>\n"
 . "                          <TR bgColor=#4d81ba>\n"
 . "                            <TD class=arial width=260 height=20><B><FONT \n"
 . "                              color=#ffffff>&nbsp;&nbsp;FÝZÝKSEL \n"
 . "                              BÝLGÝLER</FONT></B></TD>\n"
 . "                            <TD class=arial>&nbsp;</TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>Boyunuz:</B></TD>\n"
 . "                            <TD class=arial>$FTGboy</TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>Kilonuz:</B></TD>\n"
 . "                            <TD class=arial>$FTGkilo</TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>Geçirmiþ olduðunuz, \n"
 . "                              süregelen önemli <BR>rahatsýzlýklar ve týbbi \n"
 . "                              operasyonlar var mý?</B></TD>\n"
 . "                            <TD class=arial>$FTGgecmisoperasyon</TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>Herhangi bir bedensel \n"
 . "                              özürünüz var mý?</B></TD>\n"
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
 . "                                <TD class=arial>Konuþma</TD>\n"
 . "                                <TD class=arial width=10>$FTGbedenselozur5</TD>\n"
 . "                                <TD \n"
 . "                          class=arial>Diðer</TD></TR></TBODY></TABLE></TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>Acil durumlarda \n"
 . "                              baþvurulacak kiþinin <BR>Adý Soyadý, Telefonu, \n"
 . "                              Adresi:</B></TD>\n"
 . "                            <TD class=arial>$FTGacilteladres \n"
 . "</TD></TR></TBODY></TABLE><BR>\n"
 . "                        <TABLE cellSpacing=0 cellPadding=0 width=590 border=0>\n"
 . "                          <TBODY>\n"
 . "                          <TR bgColor=#4d81ba>\n"
 . "                            <TD class=arial width=215 height=20><B><FONT \n"
 . "                              color=#ffffff>&nbsp;&nbsp;EÐÝTÝM \n"
 . "                              BÝLGÝLERÝ</FONT></B></TD>\n"
 . "                            <TD class=arial width=195>&nbsp;</TD>\n"
 . "                            <TD class=arial width=80>&nbsp;</TD>\n"
 . "                            <TD class=arial width=100>&nbsp;</TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=30><B>En Son Bitirdiðiniz \n"
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
 . "                            <TD class=arial><B>Okul / Bölüm:</B></TD>\n"
 . "                            <TD class=arial><B>Giriþ Tarihi:</B></TD>\n"
 . "                            <TD class=arial><B>Mezuniyet Tarihi:</B></TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>Ýlköðretim:</B></TD>\n"
 . "                            <TD class=arial>$FTGilkogretim</TD>\n"
 . "                            <TD class=arial>$FTGilkogretimgiris</TD>\n"
 . "                            <TD class=arial>$FTGilkogretimmezuniyet</TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>Lise:</B></TD>\n"
 . "                            <TD class=arial>$FTGlise</TD>\n"
 . "                            <TD class=arial>$FTGlisegiris</TD>\n"
 . "                            <TD class=arial>$FTGlisemezuniyet</TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>Üniversite:</B></TD>\n"
 . "                            <TD class=arial>$FTGuniversite</TD>\n"
 . "                            <TD class=arial>$FTGuniversitegiris</TD>\n"
 . "                            <TD class=arial>$FTGuniversitemezuniyet</TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>Yüksek Lisans / \n"
 . "                              Doktora / Uzmanlýk:</B></TD>\n"
 . "                            <TD class=arial>$FTGdoktora</TD>\n"
 . "                            <TD class=arial>$FTGdoktoragiris</TD>\n"
 . "                            <TD class=arial>$FTGdoktoramezuniyet</TD></TR></TBODY></TABLE>\n"
 . "                        <HR align=left width=590 color=#d8d8d8 noShade SIZE=1>\n"
 . "\n"
 . "                        <TABLE cellSpacing=0 cellPadding=0 width=590 border=0>\n"
 . "                          <TBODY>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>Yabancý Dil:</B></TD>\n"
 . "                            <TD class=arial width=240><B>Konuþma</B></TD>\n"
 . "                            <TD class=arial width=230><B>Yazma</B></TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>Ýngilizce:</B></TD>\n"
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
 . "                          class=arial>Zayýf</TD></TR></TBODY></TABLE></TD></TR>\n"
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
 . "                          class=arial>Zayýf</TD></TR></TBODY></TABLE></TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>Fransýzca:</B></TD>\n"
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
 . "                            <TD class=arial height=25><B>Diðer: $FTGdigerdil \n"
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
 . "                          class=arial>Zayýf</TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE>\n"
 . "                        <HR align=left width=590 color=#d8d8d8 noShade SIZE=1>\n"
 . "\n"
 . "                        <TABLE cellSpacing=0 cellPadding=0 width=590 border=0>\n"
 . "                          <TBODY>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>Katýldýðýnýz kurs, \n"
 . "                              seminer, <BR>sertifika programlarý:</B></TD>\n"
 . "                            <TD class=arial>$FTGkursseminer</TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>Bilgisayar kullanýyor \n"
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
 . "                              kullandýðýnýz programlar:</B></TD>\n"
 . "                            <TD class=arial>$FTGprogram</TD></TR></TBODY></TABLE><BR>\n"
 . "                        <TABLE cellSpacing=0 cellPadding=0 width=590 border=0>\n"
 . "                          <TBODY>\n"
 . "                          <TR bgColor=#4d81ba>\n"
 . "                            <TD class=arial height=20><B><FONT \n"
 . "                              color=#ffffff>&nbsp;&nbsp;ÝÞ TECRÜBESÝ \n"
 . "                            </FONT></B></TD>\n"
 . "                            <TD class=arial align=right><FONT \n"
 . "                              color=#ffffff>Lütfen son iþ tecrübesi baþta olmak \n"
 . "                              üzere \n"
 . "                        belirtiniz.&nbsp;&nbsp;</FONT></TD></TR></TBODY></TABLE>\n"
 . "                        <TABLE cellSpacing=0 cellPadding=0 width=590 border=0>\n"
 . "                          <TBODY>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>Kuruluþ Ýsmi, \n"
 . "                              Adresi:</B></TD>\n"
 . "                            <TD class=arial><B>Giriþ Tarihi:</B></TD>\n"
 . "                            <TD class=arial><B>Ayrýlýþ Tarihi:</B></TD>\n"
 . "                            <TD class=arial><B>Pozisyon:</B></TD>\n"
 . "                            <TD class=arial><B>Ayrýlýþ Nedeni:</B></TD></TR>\n"
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
 . "                              color=#ffffff>&nbsp;&nbsp;DÝÐER BÝLGÝLER \n"
 . "                              </FONT></B></TD>\n"
 . "                            <TD class=arial bgColor=#4d81ba \n"
 . "                          height=20>&nbsp;</TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>PhpAspWeb Teknolojileri 'yi nereden duydunuz?</B></TD>\n"
 . "                            <TD class=arial height=20>$FTGasmnerdenduydun</TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>PhpAspWeb Teknolojileri 'de\n"
 . "                              çalýþan akraba ya da <BR>tanýdýðýnýz var \n"
 . "mý?</B></TD>\n"
 . "                            <TD class=arial height=20>\n"
 . "                              <TABLE cellSpacing=0 cellPadding=0 border=0>\n"
 . "                                <TBODY>\n"
 . "                                <TR>\n"
 . "                                <TD class=arial width=10>$FTGanadoluakraba</TD>\n"
 . "                                <TD class=arial></TD>\n"
 . "                                <TD class=arial width=10></TD>\n"
 . "                                <TD class=arial></TD></TR></TBODY></TABLE></TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>Varsa Adý \n"
 . "                            Soyadý:</B></TD>\n"
 . "                            <TD class=arial height=20>$FTGvarsaad</TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>Ýþ yerimizden talep \n"
 . "                              ettiðiniz ücret:</B> </TD>\n"
 . "                            <TD class=arial height=20>$FTGucret</TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>Sigara kullanýyor \n"
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
 . "                              bir durumunuz var mý?</B></TD>\n"
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
 . "                              dýþýnda çalýþabilir misiniz?</B> </TD>\n"
 . "                            <TD class=arial height=20>\n"
 . "                              <TABLE cellSpacing=0 cellPadding=0 border=0>\n"
 . "                                <TBODY>\n"
 . "                                <TR>\n"
 . "                                <TD class=arial width=10>$FTGmesaidisi</TD>\n"
 . "                                <TD class=arial></TD>\n"
 . "                                <TD class=arial width=10></TD>\n"
 . "                                <TD class=arial></TD></TR></TBODY></TABLE></TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>Vardiyalý çalýþabilir \n"
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
 . "                            <TD class=arial height=25><B>Sürücü ehliyetiniz \n"
 . "                              varsa sýnýfý:</B> </TD>\n"
 . "                            <TD class=arial height=20>$FTGehliyetsinifi</TD></TR></TBODY></TABLE><BR>\n"
 . "                        <TABLE cellSpacing=0 cellPadding=0 width=590 border=0>\n"
 . "                          <TBODY>\n"
 . "                          <TR bgColor=#4d81ba>\n"
 . "                            <TD class=arial height=20><B><FONT \n"
 . "                              color=#ffffff>&nbsp;&nbsp;ÜYESÝ OLDUÐUNUZ \n"
 . "                              KURULUÞLAR</FONT></B></TD>\n"
 . "                            <TD class=arial align=right><FONT \n"
 . "                              color=#ffffff>Dernek, meslek odalarý, \n"
 . "                              kulüpler...&nbsp;&nbsp;</FONT></TD></TR></TBODY></TABLE>\n"
 . "                        <TABLE cellSpacing=0 cellPadding=0 width=590 border=0>\n"
 . "                          <TBODY>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>Kuruluþ Ýsmi, \n"
 . "                              Adresi:</B></TD>\n"
 . "                            <TD class=arial><B>Üyelik:</B></TD>\n"
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
 . "                              color=#ffffff>&nbsp;&nbsp;HAKKINIZDA BÝLGÝ \n"
 . "                              ALINABÝLECEK KÝÞÝLER</FONT></B></TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=55><B>Referanslar:</B> Ýlk \n"
 . "                              bölüme çalýþtýðýnýz veya çalýþmakta olduðunuz \n"
 . "                              kurumdan yönetici/amriniz, ikinci bölüme eðitim \n"
 . "                              süreciniz sýrasýnda hakkýnýzda bilgi sahibi olan \n"
 . "                              kiþi, son bölüme ise sizin tercih ettiðiniz, \n"
 . "                              hakkýnýzda tüm bilgileri alabileceðimiz kiþinin \n"
 . "                              isim, adres ve telefon numaralarýný \n"
 . "                          yazýnýz.</TD></TR></TBODY></TABLE>\n"
 . "                        <HR align=left width=590 color=#d8d8d8 noShade SIZE=1>\n"
 . "\n"
 . "                        <TABLE cellSpacing=0 cellPadding=0 width=590 border=0>\n"
 . "                          <TBODY>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25>&nbsp;</TD>\n"
 . "                            <TD class=arial height=25><B>Amiriniz / \n"
 . "                              Yöneticiniz</B></TD>\n"
 . "                            <TD class=arial><B>Eðitmen / Akademisyen</B></TD>\n"
 . "                            <TD class=arial><B>Sizin Seçtiðiniz Kiþi</B></TD></TR>\n"
 . "                          <TR>\n"
 . "                            <TD class=arial height=25><B>Adý Soyadý:</B></TD>\n"
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
 $emailTo = "Bilge Gümrük Müþavirlik Hizmetleri Ltd. Þti. <simplexs@hotmail.com>";
  
 $emailFrom = FilterCChars("simplexs@hotmail.com");
  
 $emailHeader = "From: $emailFrom\n"
  . "Cc: Bilge Gümrük Müþavirlik Hizmetleri Ltd. Þti. <simplexs@hotmail.com>" . "\n"
  . "MIME-Version: 1.0\n"
  . "Content-Type: text/html; charset=\"Windows-1254\"\n"
  . "Content-Transfer-Encoding: base64\n"
  . "\n";
  
 mail($emailTo, $emailSubject, $emailBody, $emailHeader);


# Redirect user to success page

header("Location: gonderildi.php");
exit;
?>