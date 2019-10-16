<?
/*
Hazirlayan: Gurur POLAT
versiyon: 1.2

*/
$eposta=$_POST['eposta'];
$ad=$_POST['ad'];
$dogumyeri=$_POST['dogumyeri'];
$dogumtarihi==$_POST['dogumtarihi'];
$nufuskayit==$_POST['nufuskayit'];
$adres=$_POST['adres'];
$evtel=$_POST['evtel'];
$ceptel=$_POST['ceptel'];
$mezun=$_POST['mezun'];
$medeni=$_POST['medeni'];
$sabika=$_POST['sabika'];
$askerlik=$_POST['askerlik'];
$dahaonce=$_POST['dahaonce'];
$nerde=$_POST['nerde'];
$sure=$_POST['sure'];
$bolum=$_POST['bolum'];
$sonfirma=$_POST['sonfirma'];
$giristar=$_POST['giristar'];
$cikistar=$_POST['cikistar'];
$cikisneden=$_POST['cikisneden'];
$ref1=$_POST['ref1'];
$ref2=$_POST['ref2'];
$bilgisayar=$_POST['bilgisayar'];
$program=$_POST['program'];
$aylik=$_POST['aylik'];


$alici = "simplex@fotohobi.net"; //lütfen buraya e-posta adresinizi yazin(yazmazsaniz script çalismaz) 
$konu = "is basvurusu "; //buraya size gönderilecek olan epostanin konusunu yaziniz
$mesaj = "Gerekli bilgiler asagida bulunmaktadir 

-----------------BiLGiLER-------------------

Adi: $ad

E-Posta Adresi: $eposta

Dogum Yeri: $dogumyeri

Dogum Tarihi: $dogumtarihi

Nüfus'a Kayitli Oldugu Yer: $nufuskayit

ikametgah Adresi: $adres

Ev Telefonu: $evtel

Cep Telefonu: $ceptel

ögrenim Durumu: $mezun

Medeni Hali: $medeni

Sabika kaydi: $sabika

Askerlik Durumu: $askerlik

Daha once calismismi: $dahaonce

Daha once calistigi yer: $nerde

Calistigi sure: $sure

Calismak istedigi bolum: $bolum

En son calistigi firma: $sonfirma

Giris Tarihi: $giristar

Cikis Tarihi: $cikistar

isten Ayrilma Nedeni: $cikisneden

REFERANS VEREBILECEK KISILER: 

1. Kisi: $ref1

2. Kisi: $ref2

Bilgisayar kullanimi: $bilgisayar

Kullanabildigi Programlar: $program

Talep ettigi aylik ucret: $aylik

-------FORM BURADA SONA ERMiStiR!----------

"; // size gönderilecek olan postanin içerik bölümü
mail($alici, $konu, $mesaj, "From: $ad <$eposta>\nX-Mailer: PHP/" . phpversion());
header( "Content-Type: text/html; charset=iso-8859-9\n" ); 
header("Location: gonderildi.php");
?> 
