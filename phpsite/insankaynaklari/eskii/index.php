<HTML><HEAD><TITLE></TITLE>
<LINK 
href="styleform.css" 
type=text/css rel=stylesheet>
<SCRIPT language=javascript>
	//Text alanlar�n� limitlemek i�in
	function textareaLimiter(field, countfield, maxlimit) {
		if (field.value.length > maxlimit) field.value = field.value.substring(0, maxlimit);
		else countfield.value = maxlimit - field.value.length;
	}
</SCRIPT>
</HEAD>
<BODY class=back text=#000000 vLink=#012d9a aLink=#012d9a link=#012d9a 
bgColor=#e7e7e8>
 <TABLE cellSpacing=0 cellPadding=0 width=590 border=0>
                    <TBODY>
                    <TR>
                      <TD class=arial>�nsan Kaynaklar� Ba�vuru Formu</TD></TR></TBODY></TABLE>
                  <HR align=left width=590 color=#d8d8d8 noShade SIZE=1>

                  <script type="text/javascript">
						function checkIKForm(){
							if(IKForm.bolum.value==""){alert("Ba�vurmak istedi�iniz b�l�m� se�iniz.");IKForm.bolum.focus();}
							else if(IKForm.pozisyon.value==""){alert("Ba�vurmak istedi�iniz pozisyonu giriniz.");IKForm.pozisyon.focus();}
							else if(IKForm.ad.value==""){alert("Ad�n�z� giriniz.");IKForm.ad.focus();}
							else if(IKForm.soyad.value==""){alert("Soyad�n�z� giriniz.");IKForm.soyad.focus();}
							else if(IKForm.dogumyeri.value==""){alert("Do�um yerinizi giriniz");IKForm.dogumyeri.focus();}
							else if(IKForm.gun.value=="" || IKForm.ay.value=="" || IKForm.yil.value==""){alert("Do�um tarihinizi giriniz.");IKForm.gun.focus();}
							else if(IKForm.adres.value==""){alert("Adresinizi giriniz.");IKForm.adres.focus();}
							else if(IKForm.tel1.value=="" && IKForm.tel2.value=="" && IKForm.email.value==""){alert("Size ula�abilmemiz i�in telefon,cep telefonu ve mail adresi bilgilerinden en az birini giriniz.");IKForm.tel1.focus();}
							else if(IKForm.bedenselozur0.value=="" && IKForm.bedenselozur1.value=="" && IKForm.bedenselozur2.value=="" && IKForm.bedenselozur3.value=="" && IKForm.bedenselozur4.value=="" && IKForm.bedenselozur5.value==""){alert("L�tfen bedensel �z�r ile ilgili soruyu yan�tlay�n�z.");IKForm.bedenselozur0.focus();}
							
							else if((IKForm.tahsil.value=="1" || IKForm.tahsil.value=="2" || IKForm.tahsil.value=="3" || IKForm.tahsil.value=="4") && IKForm.ilkogretim.value==""){alert("�lk��retim e�itiminizi ald���n�z kurumun ad�n� ve adresini belirtiniz.");IKForm.ilkogretim.focus();}
							else if((IKForm.tahsil.value=="1" || IKForm.tahsil.value=="2" || IKForm.tahsil.value=="3" || IKForm.tahsil.value=="4") && IKForm.ilkogretimgiris.value=="-1"){alert("�lk��retim e�itiminize ba�lad���n�z y�l� belirtiniz.");IKForm.ilkogretimgiris.focus();}
							else if((IKForm.tahsil.value=="1" || IKForm.tahsil.value=="2" || IKForm.tahsil.value=="3" || IKForm.tahsil.value=="4") && IKForm.ilkogretimmezuniyet.value=="-1"){alert("�lk��retim e�itiminizi tamamlad���n�z y�l� belirtiniz.");IKForm.ilkogretimmezuniyet.focus();}

							else if((IKForm.tahsil.value=="2" || IKForm.tahsil.value=="3" || IKForm.tahsil.value=="4") && IKForm.lise.value==""){alert("Lise e�itiminizi ald���n�z kurumun ad�n� ve adresini belirtiniz.");IKForm.lise.focus();}
							else if((IKForm.tahsil.value=="2" || IKForm.tahsil.value=="3" || IKForm.tahsil.value=="4") && IKForm.lisegiris.value=="-1"){alert("Lise e�itiminize ba�lad���n�z y�l� belirtiniz.");IKForm.lisegiris.focus();}
							else if((IKForm.tahsil.value=="2" || IKForm.tahsil.value=="3" || IKForm.tahsil.value=="4") && IKForm.lisemezuniyet.value=="-1"){alert("Lise e�itiminizi tamamlad���n�z y�l� belirtiniz.");IKForm.lisemezuniyet.focus();}

							else if((IKForm.tahsil.value=="3" || IKForm.tahsil.value=="4") && IKForm.universite.value==""){alert("�niversite e�itiminizi ald���n�z kurumun ad�n� ve adresini belirtiniz.");IKForm.universite.focus();}
							else if((IKForm.tahsil.value=="3" || IKForm.tahsil.value=="4") && IKForm.universitegiris.value=="-1"){alert("�niversite e�itiminize ba�lad���n�z y�l� belirtiniz.");IKForm.universitegiris.focus();}
							else if((IKForm.tahsil.value=="3" || IKForm.tahsil.value=="4") && IKForm.universitemezuniyet.value=="-1"){alert("�niversite e�itiminizi tamamlad���n�z y�l� belirtiniz.");IKForm.universitemezuniyet.focus();}

							else if(IKForm.tahsil.value=="4" && IKForm.doktora.value==""){alert("Y�ksek Lisans/Doktora e�itiminizi ald���n�z kurumun ad�n� ve adresini belirtiniz.");IKForm.doktora.focus();}
							else if(IKForm.tahsil.value=="4" && IKForm.doktoragiris.value=="-1"){alert("Y�ksek Lisans/Doktora e�itiminize ba�lad���n�z y�l� belirtiniz.");IKForm.doktoragiris.focus();}
							else if(IKForm.tahsil.value=="4" && IKForm.doktoramezuniyet.value=="-1"){alert("Y�ksek Lisans/Doktora e�itiminizi tamamlad���n�z y�l� belirtiniz.");IKForm.doktoramezuniyet.focus();}
					
							else return true;
							return false;
						}
					</script>

                  <TABLE cellSpacing=0 cellPadding=0 width=590 border=0>
                    <FORM name=IKForm onsubmit="return checkIKForm()" 
                    action=gonder.php method=post>
                    <TBODY>
                    <TR>
                      <TD align=middle>
                        <TABLE cellSpacing=0 cellPadding=0 width=590 border=0>
                          <TBODY>
                          
                          <TR>
                            <TD class=arial height=15></TD>
                            <TD class=arial></TD></TR>
                          <TR>
                            <TD class=arial bgColor=#4d81ba height=20><B><FONT 
                              color=#ffffff>&nbsp;&nbsp;K���SEL 
                              B�LG�LER</FONT></B></TD>
                            <TD class=arial bgColor=#4d81ba>&nbsp;</TD></TR>
                          <TR>
                            <TD class=arial height=25><B>Ad:</B></TD>
                            <TD class=arial><INPUT class=input2 maxLength=20 
                              size=40 name=ad> </TD></TR>
                          <TR>
                            <TD class=arial height=25><B>Soyad:</B></TD>
                            <TD class=arial><INPUT class=input2 maxLength=20 
                              size=40 name=soyad> </TD></TR>
                          <TR>
                            <TD class=arial height=25><B>Do�um Yeri:</B></TD>
                            <TD class=arial><INPUT class=input2 maxLength=30 
                              size=40 name=dogumyeri> </TD></TR>
                          <TR>
                            <TD class=arial height=25><B>Do�um Tarihi:</B></TD>
                            <TD class=arial><FONT color=#cc0000><SELECT 
                              class=input2 name=gun> <OPTION 
                                selected>G�n<OPTION value=1>1<OPTION 
                                value=2>2<OPTION value=3>3<OPTION 
                                value=4>4<OPTION value=5>5<OPTION 
                                value=6>6<OPTION value=7>7<OPTION 
                                value=8>8<OPTION value=9>9<OPTION 
                                value=10>10<OPTION value=11>11<OPTION 
                                value=12>12<OPTION value=13>13<OPTION 
                                value=14>14<OPTION value=15>15<OPTION 
                                value=16>16<OPTION value=17>17<OPTION 
                                value=18>18<OPTION value=19>19<OPTION 
                                value=20>20<OPTION value=21>21<OPTION 
                                value=22>22<OPTION value=23>23<OPTION 
                                value=24>24<OPTION value=25>25<OPTION 
                                value=26>26<OPTION value=27>27<OPTION 
                                value=28>28<OPTION value=29>29<OPTION 
                                value=30>30<OPTION value=31>31</OPTION></SELECT> 
                              <SELECT class=input2 name=ay> <OPTION 
                                selected>Ay<OPTION value=1>Ocak<OPTION 
                                value=2>�ubat<OPTION value=3>Mart<OPTION 
                                value=4>Nisan<OPTION value=5>May�s<OPTION 
                                value=6>Haziran<OPTION value=7>Temmuz<OPTION 
                                value=8>A�ustos<OPTION value=9>Eyl�l<OPTION 
                                value=10>Ekim<OPTION value=11>Kas�m<OPTION 
                                value=12>Aral�k</OPTION></SELECT> <SELECT 
                              class=input2 name=yil> <OPTION 
                                selected>Y�l<OPTION value=1992>1992<OPTION 
                                value=1991>1991<OPTION value=1990>1990<OPTION 
                                value=1989>1989<OPTION value=1988>1988<OPTION 
                                value=1987>1987<OPTION value=1986>1986<OPTION 
                                value=1985>1985<OPTION value=1984>1984<OPTION 
                                value=1983>1983<OPTION value=1982>1982<OPTION 
                                value=1981>1981<OPTION value=1980>1980<OPTION 
                                value=1979>1979<OPTION value=1978>1978<OPTION 
                                value=1977>1977<OPTION value=1976>1976<OPTION 
                                value=1975>1975<OPTION value=1974>1974<OPTION 
                                value=1973>1973<OPTION value=1972>1972<OPTION 
                                value=1971>1971<OPTION value=1970>1970<OPTION 
                                value=1969>1969<OPTION value=1968>1968<OPTION 
                                value=1967>1967<OPTION value=1966>1966<OPTION 
                                value=1965>1965<OPTION value=1964>1964<OPTION 
                                value=1963>1963<OPTION value=1962>1962<OPTION 
                                value=1961>1961<OPTION 
                              value=1960>1960</OPTION></SELECT> </FONT></TD></TR>
                          <TR>
                            <TD class=arial height=25><B>Cinsiyet:</B></TD>
                            <TD class=arial>
                              <TABLE cellSpacing=0 cellPadding=0 border=0>
                                <TBODY>
                                <TR>
                                <TD class=arial width=10><INPUT type=radio 
                                value=Erkek name=cinsiyet> </TD>
                                <TD class=arial>Erkek</TD>
                                <TD class=arial width=10><INPUT type=radio 
                                value=Kad�n name=cinsiyet> </TD>
                                <TD 
                          class=arial>Kad�n</TD></TR></TBODY></TABLE></TD></TR>
                          <TR>
                            <TD class=arial height=25><B>Medeni Durum:</B></TD>
                            <TD class=arial><INPUT class=input2 maxLength=19 
                              size=40 name=medenidurum> </TD></TR>
                          <TR>
                            <TD class=arial height=25><B>S�rekli Adres:</B></TD>
                            <TD class=arial><TEXTAREA class=input2 onkeydown=textareaLimiter(this.form.adres,this.form.remLen,255); onkeyup=textareaLimiter(this.form.adres,this.form.remLen,255); name=adres rows=3 wrap=VIRTUAL cols=40></TEXTAREA> 
                              <INPUT class=input3 readOnly maxLength=3 size=4 
                              value=255 name=remLen> </TD></TR>
                          <TR>
                            <TD class=arial height=25><B>Telefon:</B></TD>
                            <TD class=arial><INPUT class=input2 maxLength=4 
                              size=4 name=kod1> <INPUT class=input2 maxLength=7 
                              size=8 name=tel1> </TD></TR>
                          <TR>
                            <TD class=arial height=25><B>Cep Telefonu:</B></TD>
                            <TD class=arial><INPUT class=input2 maxLength=4 
                              size=4 name=kod2> <INPUT class=input2 maxLength=7 
                              size=8 name=tel2> </TD></TR>
                          <TR>
                            <TD class=arial height=25><B>E-mail:</B></TD>
                            <TD class=arial><INPUT class=input2 maxLength=70 
                              size=40 name=email> </TD></TR>
                          <TR>
                            <TD class=arial height=25><B>SSK No:</B></TD>
                            <TD class=arial><INPUT class=input2 maxLength=20 
                              size=40 name=sskno> </TD></TR>
                          <TR>
                            <TD class=arial height=25><B>T.C. Kimlik 
No:</B></TD>
                            <TD class=arial><INPUT class=input2 maxLength=20 
                              size=40 name=tckimlikno> </TD></TR>
                          <TR>
                            <TD class=arial height=25><B>Uyruk:</B></TD>
                            <TD class=arial><INPUT class=input2 maxLength=20 
                              size=40 name=uyruk> </TD></TR>
                          <TR>
                            <TD class=arial height=25><B>Askerlik 
                            Durumu:</B></TD>
                            <TD class=arial><INPUT class=input2 maxLength=10 
                              size=40 name=askerlikdurumu> </TD></TR>
                          <TR>
                            <TD class=arial height=25><B>Askerli�inizi 
                              Yapmad�ysan�z <BR>Nedenini Yaz�n�z: </B></TD>
                            <TD class=arial><INPUT class=input2 maxLength=40 
                              size=40 name=askerlikyapmamasebebi> 
                        </TD></TR></TBODY></TABLE>
                        <HR align=left width=590 color=#d8d8d8 noShade SIZE=1>

                        <TABLE cellSpacing=0 cellPadding=0 width=590 border=0>
                          <TBODY>
                          <TR>
                            <TD class=arial><B>Aile Durumu</B></TD>
                            <TD class=arial>Ad� Soyad�:</TD>
                            <TD class=arial>Do�um Yeri &amp; Y�l�:</TD>
                            <TD class=arial>��renim Durumu:</TD>
                            <TD class=arial>Mesle�i, ��yeri:</TD>
                            <TD class=arial>Bakmakla Y�k�ml� 
                            <BR>Olduklar�n�z:</TD></TR>
                          <TR>
                            <TD class=arial><B>Annenizin</B></TD>
                            <TD class=arial><INPUT class=input2 maxLength=30 
                              size=10 name=annead> </TD>
                            <TD class=arial><INPUT class=input2 maxLength=50 
                              size=10 name=annedogum> </TD>
                            <TD class=arial><INPUT class=input2 maxLength=20 
                              size=10 name=anneogrenim> </TD>
                            <TD class=arial><INPUT class=input2 maxLength=20 
                              size=10 name=annemeslek> </TD>
                            <TD class=arial><INPUT class=input3 type=checkbox 
                              size=10 value=Evet name=anneyukumlu> </TD></TR>
                          <TR>
                            <TD class=arial><B>Baban�z�n </B></TD>
                            <TD class=arial><B><INPUT class=input2 
                              maxLength=30 size=10 name=babaad> </B></TD>
                            <TD class=arial><B><INPUT class=input2 
                              maxLength=50 size=10 name=babadogum> </B></TD>
                            <TD class=arial><B><INPUT class=input2 
                              maxLength=20 size=10 name=babaogrenim> </B></TD>
                            <TD class=arial><B><INPUT class=input2 
                              maxLength=20 size=10 name=babameslek> </B></TD>
                            <TD class=arial><B><INPUT class=input3 
                              type=checkbox size=10 value=Evet name=babayukumlu> 
                              </B></TD></TR>
                          <TR>
                            <TD class=arial><B>E�inizin </B></TD>
                            <TD class=arial><B><INPUT class=input2 
                              maxLength=30 size=10 name=esad> </B></TD>
                            <TD class=arial><B><INPUT class=input2 
                              maxLength=50 size=10 name=esdogum> </B></TD>
                            <TD class=arial><B><INPUT class=input2 
                              maxLength=20 size=10 name=esogrenim> </B></TD>
                            <TD class=arial><B><INPUT class=input2 
                              maxLength=20 size=10 name=esmeslek> </B></TD>
                            <TD class=arial><B><INPUT class=input3 
                              type=checkbox size=10 value=Evet name=esyukumlu> 
                            </B></TD></TR>
                          <TR>
                            <TD class=arial><B>�ocu�unuzun </B></TD>
                            <TD class=arial><B><INPUT class=input2 
                              maxLength=30 size=10 name=cocuk1ad> </B></TD>
                            <TD class=arial><B><INPUT class=input2 
                              maxLength=50 size=10 name=cocuk1dogum> </B></TD>
                            <TD class=arial><B><INPUT class=input2 
                              maxLength=20 size=10 name=cocuk1ogrenim> </B></TD>
                            <TD class=arial><B><INPUT class=input2 
                              maxLength=20 size=10 name=cocuk1meslek> </B></TD>
                            <TD class=arial><B><INPUT class=input3 
                              type=checkbox size=10 value=Evet name=cocuk1yukumlu> 
                              </B></TD></TR>
                          <TR>
                            <TD class=arial><B>�ocu�unuzun </B></TD>
                            <TD class=arial><B><INPUT class=input2 
                              maxLength=30 size=10 name=cocuk2ad> </B></TD>
                            <TD class=arial><B><INPUT class=input2 
                              maxLength=50 size=10 name=cocuk2dogum> </B></TD>
                            <TD class=arial><B><INPUT class=input2 
                              maxLength=20 size=10 name=cocuk2ogrenim> </B></TD>
                            <TD class=arial><B><INPUT class=input2 
                              maxLength=20 size=10 name=cocuk2meslek> </B></TD>
                            <TD class=arial><B><INPUT class=input3 
                              type=checkbox size=10 value=Evet name=cocuk2yukumlu> 
                              </B></TD></TR>
                          <TR>
                            <TD class=arial><B>�ocu�unuzun </B></TD>
                            <TD class=arial><B><INPUT class=input2 
                              maxLength=30 size=10 name=cocuk3ad> </B></TD>
                            <TD class=arial><B><INPUT class=input2 
                              maxLength=50 size=10 name=cocuk3dogum> </B></TD>
                            <TD class=arial><B><INPUT class=input2 
                              maxLength=20 size=10 name=cocuk3ogrenim> </B></TD>
                            <TD class=arial><B><INPUT class=input2 
                              maxLength=20 size=10 name=cocuk3meslek> </B></TD>
                            <TD class=arial><B><INPUT class=input3 
                              type=checkbox size=10 value=Evet name=cocuk3yukumlu> 
                              </B></TD></TR></TBODY></TABLE><BR>
                        <TABLE cellSpacing=0 cellPadding=0 width=590 border=0>
                          <TBODY>
                          <TR bgColor=#4d81ba>
                            <TD class=arial width=260 height=20><B><FONT 
                              color=#ffffff>&nbsp;&nbsp;F�Z�KSEL 
                              B�LG�LER</FONT></B></TD>
                            <TD class=arial>&nbsp;</TD></TR>
                          <TR>
                            <TD class=arial height=25><B>Boyunuz:</B></TD>
                            <TD class=arial><INPUT class=input2 maxLength=10 
                              size=40 name=boy> </TD></TR>
                          <TR>
                            <TD class=arial height=25><B>Kilonuz:</B></TD>
                            <TD class=arial><INPUT class=input2 maxLength=10 
                              size=40 name=kilo> </TD></TR>
                          <TR>
                            <TD class=arial height=25><B>Ge�irmi� oldu�unuz, 
                              s�regelen �nemli <BR>rahats�zl�klar ve t�bbi 
                              operasyonlar var m�?</B></TD>
                            <TD class=arial><INPUT class=input2 maxLength=30 
                              size=40 name=gecmisoperasyon> </TD></TR>
                          <TR>
                            <TD class=arial height=25><B>Herhangi bir bedensel 
                              �z�r�n�z var m�?</B></TD>
                            <TD class=arial>
                              <TABLE cellSpacing=0 cellPadding=0 width="100%" 
                              border=0>
                                <TBODY>
                                <TR>
                                <TD class=arial width=10><INPUT type=checkbox 
                                value=Yok name=bedenselozur0> </TD>
                                <TD class=arial>Yok</TD>
                                <TD class=arial width=10><INPUT type=checkbox 
                                value=Ayak name=bedenselozur1> </TD>
                                <TD class=arial>Ayak</TD>
                                <TD class=arial width=10><INPUT type=checkbox 
                                value=Eller name=bedenselozur2> </TD>
                                <TD class=arial>Eller</TD>
                                <TD class=arial width=10><INPUT type=checkbox 
                                value=Duyma name=bedenselozur3> </TD>
                                <TD class=arial>Duyma</TD>
                                <TD class=arial width=10><INPUT type=checkbox 
                                value=Konu�ma name=bedenselozur4> </TD>
                                <TD class=arial>Konu�ma</TD>
                                <TD class=arial width=10><INPUT type=checkbox 
                                value=Di�er name=bedenselozur5> </TD>
                                <TD 
                          class=arial>Di�er</TD></TR></TBODY></TABLE></TD></TR>
                          <TR>
                            <TD class=arial height=25><B>Acil durumlarda 
                              ba�vurulacak ki�inin <BR>Ad� Soyad�, Telefonu, 
                              Adresi:</B></TD>
                            <TD class=arial><INPUT class=input2 maxLength=100 
                              size=40 name=acilteladres> 
</TD></TR></TBODY></TABLE><BR>
                        <TABLE cellSpacing=0 cellPadding=0 width=590 border=0>
                          <TBODY>
                          <TR bgColor=#4d81ba>
                            <TD class=arial width=215 height=20><B><FONT 
                              color=#ffffff>&nbsp;&nbsp;E��T�M 
                              B�LG�LER�</FONT></B></TD>
                            <TD class=arial width=195>&nbsp;</TD>
                            <TD class=arial width=80>&nbsp;</TD>
                            <TD class=arial width=100>&nbsp;</TD></TR>
                          <TR>
                            <TD class=arial height=30><B>En Son Bitirdi�iniz 
                              Okul: </B></TD>
                            <TD class=arial height=30><SELECT name=tahsil> 
                                <OPTION value=�lk��retim selected>�lk��retim</OPTION> 
                                <OPTION value=Lise>Lise</OPTION> <OPTION 
                                value=�niversite>�niversite</OPTION> <OPTION 
                                value=Lisans/Doktora>Y.Lisans/Doktora</OPTION></SELECT> </TD>
                            <TD class=arial height=30>&nbsp;</TD>
                            <TD class=arial height=30>&nbsp;</TD></TR>
                          <TR>
                            <TD class=arial colSpan=4>
                              <HR align=left width=590 color=#d8d8d8 noShade 
                              SIZE=1>
                            </TD></TR>
                          <TR>
                            <TD class=arial height=25>&nbsp;</TD>
                            <TD class=arial><B>Okul / B�l�m:</B></TD>
                            <TD class=arial><B>Giri� Tarihi:</B></TD>
                            <TD class=arial><B>Mezuniyet Tarihi:</B></TD></TR>
                          <TR>
                            <TD class=arial height=25><B>�lk��retim:</B></TD>
                            <TD class=arial><INPUT class=input2 id=ilkogretim 
                              maxLength=50 size=30 name=ilkogretim></TD>
                            <TD class=arial><FONT color=#cc0000><SELECT 
                              class=input2 id=ilkogretimgiris 
                              name=ilkogretimgiris> <OPTION value=-1 
                                selected>Y�l</OPTION> <OPTION 
                                value=1950>1950</OPTION> <OPTION 
                                value=1951>1951</OPTION> <OPTION 
                                value=1952>1952</OPTION> <OPTION 
                                value=1953>1953</OPTION> <OPTION 
                                value=1954>1954</OPTION> <OPTION 
                                value=1955>1955</OPTION> <OPTION 
                                value=1956>1956</OPTION> <OPTION 
                                value=1957>1957</OPTION> <OPTION 
                                value=1958>1958</OPTION> <OPTION 
                                value=1959>1959</OPTION> <OPTION 
                                value=1960>1960</OPTION> <OPTION 
                                value=1961>1961</OPTION> <OPTION 
                                value=1962>1962</OPTION> <OPTION 
                                value=1963>1963</OPTION> <OPTION 
                                value=1964>1964</OPTION> <OPTION 
                                value=1965>1965</OPTION> <OPTION 
                                value=1966>1966</OPTION> <OPTION 
                                value=1967>1967</OPTION> <OPTION 
                                value=1968>1968</OPTION> <OPTION 
                                value=1969>1969</OPTION> <OPTION 
                                value=1970>1970</OPTION> <OPTION 
                                value=1971>1971</OPTION> <OPTION 
                                value=1972>1972</OPTION> <OPTION 
                                value=1973>1973</OPTION> <OPTION 
                                value=1974>1974</OPTION> <OPTION 
                                value=1975>1975</OPTION> <OPTION 
                                value=1976>1976</OPTION> <OPTION 
                                value=1977>1977</OPTION> <OPTION 
                                value=1978>1978</OPTION> <OPTION 
                                value=1979>1979</OPTION> <OPTION 
                                value=1980>1980</OPTION> <OPTION 
                                value=1981>1981</OPTION> <OPTION 
                                value=1982>1982</OPTION> <OPTION 
                                value=1983>1983</OPTION> <OPTION 
                                value=1984>1984</OPTION> <OPTION 
                                value=1985>1985</OPTION> <OPTION 
                                value=1986>1986</OPTION> <OPTION 
                                value=1987>1987</OPTION> <OPTION 
                                value=1988>1988</OPTION> <OPTION 
                                value=1989>1989</OPTION> <OPTION 
                                value=1990>1990</OPTION> <OPTION 
                                value=1991>1991</OPTION> <OPTION 
                                value=1992>1992</OPTION> <OPTION 
                                value=1993>1993</OPTION> <OPTION 
                                value=1994>1994</OPTION> <OPTION 
                                value=1995>1995</OPTION> <OPTION 
                                value=1996>1996</OPTION> <OPTION 
                                value=1997>1997</OPTION> <OPTION 
                                value=1998>1998</OPTION> <OPTION 
                                value=1999>1999</OPTION> <OPTION 
                                value=2000>2000</OPTION> <OPTION 
                                value=2001>2001</OPTION> <OPTION 
                                value=2002>2002</OPTION> <OPTION 
                                value=2003>2003</OPTION> <OPTION 
                                value=2004>2004</OPTION> <OPTION 
                                value=2005>2005</OPTION></SELECT> </FONT></TD>
                            <TD class=arial><FONT color=#cc0000><SELECT 
                              class=input2 id=ilkogretimmezuniyet 
                              name=ilkogretimmezuniyet> <OPTION value=-1 
                                selected>Y�l</OPTION> <OPTION 
                                value=-2>Terk</OPTION> <OPTION 
                                value=-3>��renci</OPTION> <OPTION 
                                value=1950>1950</OPTION> <OPTION 
                                value=1951>1951</OPTION> <OPTION 
                                value=1952>1952</OPTION> <OPTION 
                                value=1953>1953</OPTION> <OPTION 
                                value=1954>1954</OPTION> <OPTION 
                                value=1955>1955</OPTION> <OPTION 
                                value=1956>1956</OPTION> <OPTION 
                                value=1957>1957</OPTION> <OPTION 
                                value=1958>1958</OPTION> <OPTION 
                                value=1959>1959</OPTION> <OPTION 
                                value=1960>1960</OPTION> <OPTION 
                                value=1961>1961</OPTION> <OPTION 
                                value=1962>1962</OPTION> <OPTION 
                                value=1963>1963</OPTION> <OPTION 
                                value=1964>1964</OPTION> <OPTION 
                                value=1965>1965</OPTION> <OPTION 
                                value=1966>1966</OPTION> <OPTION 
                                value=1967>1967</OPTION> <OPTION 
                                value=1968>1968</OPTION> <OPTION 
                                value=1969>1969</OPTION> <OPTION 
                                value=1970>1970</OPTION> <OPTION 
                                value=1971>1971</OPTION> <OPTION 
                                value=1972>1972</OPTION> <OPTION 
                                value=1973>1973</OPTION> <OPTION 
                                value=1974>1974</OPTION> <OPTION 
                                value=1975>1975</OPTION> <OPTION 
                                value=1976>1976</OPTION> <OPTION 
                                value=1977>1977</OPTION> <OPTION 
                                value=1978>1978</OPTION> <OPTION 
                                value=1979>1979</OPTION> <OPTION 
                                value=1980>1980</OPTION> <OPTION 
                                value=1981>1981</OPTION> <OPTION 
                                value=1982>1982</OPTION> <OPTION 
                                value=1983>1983</OPTION> <OPTION 
                                value=1984>1984</OPTION> <OPTION 
                                value=1985>1985</OPTION> <OPTION 
                                value=1986>1986</OPTION> <OPTION 
                                value=1987>1987</OPTION> <OPTION 
                                value=1988>1988</OPTION> <OPTION 
                                value=1989>1989</OPTION> <OPTION 
                                value=1990>1990</OPTION> <OPTION 
                                value=1991>1991</OPTION> <OPTION 
                                value=1992>1992</OPTION> <OPTION 
                                value=1993>1993</OPTION> <OPTION 
                                value=1994>1994</OPTION> <OPTION 
                                value=1995>1995</OPTION> <OPTION 
                                value=1996>1996</OPTION> <OPTION 
                                value=1997>1997</OPTION> <OPTION 
                                value=1998>1998</OPTION> <OPTION 
                                value=1999>1999</OPTION> <OPTION 
                                value=2000>2000</OPTION> <OPTION 
                                value=2001>2001</OPTION> <OPTION 
                                value=2002>2002</OPTION> <OPTION 
                                value=2003>2003</OPTION> <OPTION 
                                value=2004>2004</OPTION> <OPTION 
                                value=2005>2005</OPTION></SELECT> </FONT></TD></TR>
                          <TR>
                            <TD class=arial height=25><B>Lise:</B></TD>
                            <TD class=arial><INPUT class=input2 id=lise 
                              maxLength=50 size=30 name=lise> </TD>
                            <TD class=arial><FONT color=#cc0000><SELECT 
                              class=input2 id=lisegiris name=lisegiris> 
                                <OPTION value=-1 selected>Y�l</OPTION> <OPTION 
                                value=1950>1950</OPTION> <OPTION 
                                value=1951>1951</OPTION> <OPTION 
                                value=1952>1952</OPTION> <OPTION 
                                value=1953>1953</OPTION> <OPTION 
                                value=1954>1954</OPTION> <OPTION 
                                value=1955>1955</OPTION> <OPTION 
                                value=1956>1956</OPTION> <OPTION 
                                value=1957>1957</OPTION> <OPTION 
                                value=1958>1958</OPTION> <OPTION 
                                value=1959>1959</OPTION> <OPTION 
                                value=1960>1960</OPTION> <OPTION 
                                value=1961>1961</OPTION> <OPTION 
                                value=1962>1962</OPTION> <OPTION 
                                value=1963>1963</OPTION> <OPTION 
                                value=1964>1964</OPTION> <OPTION 
                                value=1965>1965</OPTION> <OPTION 
                                value=1966>1966</OPTION> <OPTION 
                                value=1967>1967</OPTION> <OPTION 
                                value=1968>1968</OPTION> <OPTION 
                                value=1969>1969</OPTION> <OPTION 
                                value=1970>1970</OPTION> <OPTION 
                                value=1971>1971</OPTION> <OPTION 
                                value=1972>1972</OPTION> <OPTION 
                                value=1973>1973</OPTION> <OPTION 
                                value=1974>1974</OPTION> <OPTION 
                                value=1975>1975</OPTION> <OPTION 
                                value=1976>1976</OPTION> <OPTION 
                                value=1977>1977</OPTION> <OPTION 
                                value=1978>1978</OPTION> <OPTION 
                                value=1979>1979</OPTION> <OPTION 
                                value=1980>1980</OPTION> <OPTION 
                                value=1981>1981</OPTION> <OPTION 
                                value=1982>1982</OPTION> <OPTION 
                                value=1983>1983</OPTION> <OPTION 
                                value=1984>1984</OPTION> <OPTION 
                                value=1985>1985</OPTION> <OPTION 
                                value=1986>1986</OPTION> <OPTION 
                                value=1987>1987</OPTION> <OPTION 
                                value=1988>1988</OPTION> <OPTION 
                                value=1989>1989</OPTION> <OPTION 
                                value=1990>1990</OPTION> <OPTION 
                                value=1991>1991</OPTION> <OPTION 
                                value=1992>1992</OPTION> <OPTION 
                                value=1993>1993</OPTION> <OPTION 
                                value=1994>1994</OPTION> <OPTION 
                                value=1995>1995</OPTION> <OPTION 
                                value=1996>1996</OPTION> <OPTION 
                                value=1997>1997</OPTION> <OPTION 
                                value=1998>1998</OPTION> <OPTION 
                                value=1999>1999</OPTION> <OPTION 
                                value=2000>2000</OPTION> <OPTION 
                                value=2001>2001</OPTION> <OPTION 
                                value=2002>2002</OPTION> <OPTION 
                                value=2003>2003</OPTION> <OPTION 
                                value=2004>2004</OPTION> <OPTION 
                                value=2005>2005</OPTION></SELECT> </FONT></TD>
                            <TD class=arial><FONT color=#cc0000><SELECT 
                              class=input2 id=lisemezuniyet name=lisemezuniyet> 
                                <OPTION value=-1 selected>Y�l</OPTION> <OPTION 
                                value=-2>Terk</OPTION> <OPTION 
                                value=-3>��renci</OPTION> <OPTION 
                                value=1950>1950</OPTION> <OPTION 
                                value=1951>1951</OPTION> <OPTION 
                                value=1952>1952</OPTION> <OPTION 
                                value=1953>1953</OPTION> <OPTION 
                                value=1954>1954</OPTION> <OPTION 
                                value=1955>1955</OPTION> <OPTION 
                                value=1956>1956</OPTION> <OPTION 
                                value=1957>1957</OPTION> <OPTION 
                                value=1958>1958</OPTION> <OPTION 
                                value=1959>1959</OPTION> <OPTION 
                                value=1960>1960</OPTION> <OPTION 
                                value=1961>1961</OPTION> <OPTION 
                                value=1962>1962</OPTION> <OPTION 
                                value=1963>1963</OPTION> <OPTION 
                                value=1964>1964</OPTION> <OPTION 
                                value=1965>1965</OPTION> <OPTION 
                                value=1966>1966</OPTION> <OPTION 
                                value=1967>1967</OPTION> <OPTION 
                                value=1968>1968</OPTION> <OPTION 
                                value=1969>1969</OPTION> <OPTION 
                                value=1970>1970</OPTION> <OPTION 
                                value=1971>1971</OPTION> <OPTION 
                                value=1972>1972</OPTION> <OPTION 
                                value=1973>1973</OPTION> <OPTION 
                                value=1974>1974</OPTION> <OPTION 
                                value=1975>1975</OPTION> <OPTION 
                                value=1976>1976</OPTION> <OPTION 
                                value=1977>1977</OPTION> <OPTION 
                                value=1978>1978</OPTION> <OPTION 
                                value=1979>1979</OPTION> <OPTION 
                                value=1980>1980</OPTION> <OPTION 
                                value=1981>1981</OPTION> <OPTION 
                                value=1982>1982</OPTION> <OPTION 
                                value=1983>1983</OPTION> <OPTION 
                                value=1984>1984</OPTION> <OPTION 
                                value=1985>1985</OPTION> <OPTION 
                                value=1986>1986</OPTION> <OPTION 
                                value=1987>1987</OPTION> <OPTION 
                                value=1988>1988</OPTION> <OPTION 
                                value=1989>1989</OPTION> <OPTION 
                                value=1990>1990</OPTION> <OPTION 
                                value=1991>1991</OPTION> <OPTION 
                                value=1992>1992</OPTION> <OPTION 
                                value=1993>1993</OPTION> <OPTION 
                                value=1994>1994</OPTION> <OPTION 
                                value=1995>1995</OPTION> <OPTION 
                                value=1996>1996</OPTION> <OPTION 
                                value=1997>1997</OPTION> <OPTION 
                                value=1998>1998</OPTION> <OPTION 
                                value=1999>1999</OPTION> <OPTION 
                                value=2000>2000</OPTION> <OPTION 
                                value=2001>2001</OPTION> <OPTION 
                                value=2002>2002</OPTION> <OPTION 
                                value=2003>2003</OPTION> <OPTION 
                                value=2004>2004</OPTION> <OPTION 
                                value=2005>2005</OPTION></SELECT> </FONT></TD></TR>
                          <TR>
                            <TD class=arial height=25><B>�niversite:</B></TD>
                            <TD class=arial><INPUT class=input2 id=universite 
                              maxLength=50 size=30 name=universite> </TD>
                            <TD class=arial><FONT color=#cc0000><SELECT 
                              class=input2 id=universitegiris 
                              name=universitegiris> <OPTION value=-1 
                                selected>Y�l</OPTION> <OPTION 
                                value=1950>1950</OPTION> <OPTION 
                                value=1951>1951</OPTION> <OPTION 
                                value=1952>1952</OPTION> <OPTION 
                                value=1953>1953</OPTION> <OPTION 
                                value=1954>1954</OPTION> <OPTION 
                                value=1955>1955</OPTION> <OPTION 
                                value=1956>1956</OPTION> <OPTION 
                                value=1957>1957</OPTION> <OPTION 
                                value=1958>1958</OPTION> <OPTION 
                                value=1959>1959</OPTION> <OPTION 
                                value=1960>1960</OPTION> <OPTION 
                                value=1961>1961</OPTION> <OPTION 
                                value=1962>1962</OPTION> <OPTION 
                                value=1963>1963</OPTION> <OPTION 
                                value=1964>1964</OPTION> <OPTION 
                                value=1965>1965</OPTION> <OPTION 
                                value=1966>1966</OPTION> <OPTION 
                                value=1967>1967</OPTION> <OPTION 
                                value=1968>1968</OPTION> <OPTION 
                                value=1969>1969</OPTION> <OPTION 
                                value=1970>1970</OPTION> <OPTION 
                                value=1971>1971</OPTION> <OPTION 
                                value=1972>1972</OPTION> <OPTION 
                                value=1973>1973</OPTION> <OPTION 
                                value=1974>1974</OPTION> <OPTION 
                                value=1975>1975</OPTION> <OPTION 
                                value=1976>1976</OPTION> <OPTION 
                                value=1977>1977</OPTION> <OPTION 
                                value=1978>1978</OPTION> <OPTION 
                                value=1979>1979</OPTION> <OPTION 
                                value=1980>1980</OPTION> <OPTION 
                                value=1981>1981</OPTION> <OPTION 
                                value=1982>1982</OPTION> <OPTION 
                                value=1983>1983</OPTION> <OPTION 
                                value=1984>1984</OPTION> <OPTION 
                                value=1985>1985</OPTION> <OPTION 
                                value=1986>1986</OPTION> <OPTION 
                                value=1987>1987</OPTION> <OPTION 
                                value=1988>1988</OPTION> <OPTION 
                                value=1989>1989</OPTION> <OPTION 
                                value=1990>1990</OPTION> <OPTION 
                                value=1991>1991</OPTION> <OPTION 
                                value=1992>1992</OPTION> <OPTION 
                                value=1993>1993</OPTION> <OPTION 
                                value=1994>1994</OPTION> <OPTION 
                                value=1995>1995</OPTION> <OPTION 
                                value=1996>1996</OPTION> <OPTION 
                                value=1997>1997</OPTION> <OPTION 
                                value=1998>1998</OPTION> <OPTION 
                                value=1999>1999</OPTION> <OPTION 
                                value=2000>2000</OPTION> <OPTION 
                                value=2001>2001</OPTION> <OPTION 
                                value=2002>2002</OPTION> <OPTION 
                                value=2003>2003</OPTION> <OPTION 
                                value=2004>2004</OPTION> <OPTION 
                                value=2005>2005</OPTION></SELECT> </FONT></TD>
                            <TD class=arial><FONT color=#cc0000><SELECT 
                              class=input2 id=universitemezuniyet 
                              name=universitemezuniyet> <OPTION value=-1 
                                selected>Y�l</OPTION> <OPTION 
                                value=-2>Terk</OPTION> <OPTION 
                                value=-3>��renci</OPTION> <OPTION 
                                value=1950>1950</OPTION> <OPTION 
                                value=1951>1951</OPTION> <OPTION 
                                value=1952>1952</OPTION> <OPTION 
                                value=1953>1953</OPTION> <OPTION 
                                value=1954>1954</OPTION> <OPTION 
                                value=1955>1955</OPTION> <OPTION 
                                value=1956>1956</OPTION> <OPTION 
                                value=1957>1957</OPTION> <OPTION 
                                value=1958>1958</OPTION> <OPTION 
                                value=1959>1959</OPTION> <OPTION 
                                value=1960>1960</OPTION> <OPTION 
                                value=1961>1961</OPTION> <OPTION 
                                value=1962>1962</OPTION> <OPTION 
                                value=1963>1963</OPTION> <OPTION 
                                value=1964>1964</OPTION> <OPTION 
                                value=1965>1965</OPTION> <OPTION 
                                value=1966>1966</OPTION> <OPTION 
                                value=1967>1967</OPTION> <OPTION 
                                value=1968>1968</OPTION> <OPTION 
                                value=1969>1969</OPTION> <OPTION 
                                value=1970>1970</OPTION> <OPTION 
                                value=1971>1971</OPTION> <OPTION 
                                value=1972>1972</OPTION> <OPTION 
                                value=1973>1973</OPTION> <OPTION 
                                value=1974>1974</OPTION> <OPTION 
                                value=1975>1975</OPTION> <OPTION 
                                value=1976>1976</OPTION> <OPTION 
                                value=1977>1977</OPTION> <OPTION 
                                value=1978>1978</OPTION> <OPTION 
                                value=1979>1979</OPTION> <OPTION 
                                value=1980>1980</OPTION> <OPTION 
                                value=1981>1981</OPTION> <OPTION 
                                value=1982>1982</OPTION> <OPTION 
                                value=1983>1983</OPTION> <OPTION 
                                value=1984>1984</OPTION> <OPTION 
                                value=1985>1985</OPTION> <OPTION 
                                value=1986>1986</OPTION> <OPTION 
                                value=1987>1987</OPTION> <OPTION 
                                value=1988>1988</OPTION> <OPTION 
                                value=1989>1989</OPTION> <OPTION 
                                value=1990>1990</OPTION> <OPTION 
                                value=1991>1991</OPTION> <OPTION 
                                value=1992>1992</OPTION> <OPTION 
                                value=1993>1993</OPTION> <OPTION 
                                value=1994>1994</OPTION> <OPTION 
                                value=1995>1995</OPTION> <OPTION 
                                value=1996>1996</OPTION> <OPTION 
                                value=1997>1997</OPTION> <OPTION 
                                value=1998>1998</OPTION> <OPTION 
                                value=1999>1999</OPTION> <OPTION 
                                value=2000>2000</OPTION> <OPTION 
                                value=2001>2001</OPTION> <OPTION 
                                value=2002>2002</OPTION> <OPTION 
                                value=2003>2003</OPTION> <OPTION 
                                value=2004>2004</OPTION> <OPTION 
                                value=2005>2005</OPTION></SELECT> </FONT></TD></TR>
                          <TR>
                            <TD class=arial height=25><B>Y�ksek Lisans / 
                              Doktora / Uzmanl�k:</B></TD>
                            <TD class=arial><INPUT class=input2 id=doktora 
                              maxLength=50 size=30 name=doktora> </TD>
                            <TD class=arial><FONT color=#cc0000><SELECT 
                              class=input2 id=doktoragiris name=doktoragiris> 
                                <OPTION value=-1 selected>Y�l</OPTION> <OPTION 
                                value=1950>1950</OPTION> <OPTION 
                                value=1951>1951</OPTION> <OPTION 
                                value=1952>1952</OPTION> <OPTION 
                                value=1953>1953</OPTION> <OPTION 
                                value=1954>1954</OPTION> <OPTION 
                                value=1955>1955</OPTION> <OPTION 
                                value=1956>1956</OPTION> <OPTION 
                                value=1957>1957</OPTION> <OPTION 
                                value=1958>1958</OPTION> <OPTION 
                                value=1959>1959</OPTION> <OPTION 
                                value=1960>1960</OPTION> <OPTION 
                                value=1961>1961</OPTION> <OPTION 
                                value=1962>1962</OPTION> <OPTION 
                                value=1963>1963</OPTION> <OPTION 
                                value=1964>1964</OPTION> <OPTION 
                                value=1965>1965</OPTION> <OPTION 
                                value=1966>1966</OPTION> <OPTION 
                                value=1967>1967</OPTION> <OPTION 
                                value=1968>1968</OPTION> <OPTION 
                                value=1969>1969</OPTION> <OPTION 
                                value=1970>1970</OPTION> <OPTION 
                                value=1971>1971</OPTION> <OPTION 
                                value=1972>1972</OPTION> <OPTION 
                                value=1973>1973</OPTION> <OPTION 
                                value=1974>1974</OPTION> <OPTION 
                                value=1975>1975</OPTION> <OPTION 
                                value=1976>1976</OPTION> <OPTION 
                                value=1977>1977</OPTION> <OPTION 
                                value=1978>1978</OPTION> <OPTION 
                                value=1979>1979</OPTION> <OPTION 
                                value=1980>1980</OPTION> <OPTION 
                                value=1981>1981</OPTION> <OPTION 
                                value=1982>1982</OPTION> <OPTION 
                                value=1983>1983</OPTION> <OPTION 
                                value=1984>1984</OPTION> <OPTION 
                                value=1985>1985</OPTION> <OPTION 
                                value=1986>1986</OPTION> <OPTION 
                                value=1987>1987</OPTION> <OPTION 
                                value=1988>1988</OPTION> <OPTION 
                                value=1989>1989</OPTION> <OPTION 
                                value=1990>1990</OPTION> <OPTION 
                                value=1991>1991</OPTION> <OPTION 
                                value=1992>1992</OPTION> <OPTION 
                                value=1993>1993</OPTION> <OPTION 
                                value=1994>1994</OPTION> <OPTION 
                                value=1995>1995</OPTION> <OPTION 
                                value=1996>1996</OPTION> <OPTION 
                                value=1997>1997</OPTION> <OPTION 
                                value=1998>1998</OPTION> <OPTION 
                                value=1999>1999</OPTION> <OPTION 
                                value=2000>2000</OPTION> <OPTION 
                                value=2001>2001</OPTION> <OPTION 
                                value=2002>2002</OPTION> <OPTION 
                                value=2003>2003</OPTION> <OPTION 
                                value=2004>2004</OPTION> <OPTION 
                                value=2005>2005</OPTION></SELECT> </FONT></TD>
                            <TD class=arial><FONT color=#cc0000><SELECT 
                              class=input2 id=doktoramezuniyet 
                              name=doktoramezuniyet> <OPTION value=-1 
                                selected>Y�l</OPTION> <OPTION 
                                value=-2>Terk</OPTION> <OPTION 
                                value=-3>��renci</OPTION> <OPTION 
                                value=1950>1950</OPTION> <OPTION 
                                value=1951>1951</OPTION> <OPTION 
                                value=1952>1952</OPTION> <OPTION 
                                value=1953>1953</OPTION> <OPTION 
                                value=1954>1954</OPTION> <OPTION 
                                value=1955>1955</OPTION> <OPTION 
                                value=1956>1956</OPTION> <OPTION 
                                value=1957>1957</OPTION> <OPTION 
                                value=1958>1958</OPTION> <OPTION 
                                value=1959>1959</OPTION> <OPTION 
                                value=1960>1960</OPTION> <OPTION 
                                value=1961>1961</OPTION> <OPTION 
                                value=1962>1962</OPTION> <OPTION 
                                value=1963>1963</OPTION> <OPTION 
                                value=1964>1964</OPTION> <OPTION 
                                value=1965>1965</OPTION> <OPTION 
                                value=1966>1966</OPTION> <OPTION 
                                value=1967>1967</OPTION> <OPTION 
                                value=1968>1968</OPTION> <OPTION 
                                value=1969>1969</OPTION> <OPTION 
                                value=1970>1970</OPTION> <OPTION 
                                value=1971>1971</OPTION> <OPTION 
                                value=1972>1972</OPTION> <OPTION 
                                value=1973>1973</OPTION> <OPTION 
                                value=1974>1974</OPTION> <OPTION 
                                value=1975>1975</OPTION> <OPTION 
                                value=1976>1976</OPTION> <OPTION 
                                value=1977>1977</OPTION> <OPTION 
                                value=1978>1978</OPTION> <OPTION 
                                value=1979>1979</OPTION> <OPTION 
                                value=1980>1980</OPTION> <OPTION 
                                value=1981>1981</OPTION> <OPTION 
                                value=1982>1982</OPTION> <OPTION 
                                value=1983>1983</OPTION> <OPTION 
                                value=1984>1984</OPTION> <OPTION 
                                value=1985>1985</OPTION> <OPTION 
                                value=1986>1986</OPTION> <OPTION 
                                value=1987>1987</OPTION> <OPTION 
                                value=1988>1988</OPTION> <OPTION 
                                value=1989>1989</OPTION> <OPTION 
                                value=1990>1990</OPTION> <OPTION 
                                value=1991>1991</OPTION> <OPTION 
                                value=1992>1992</OPTION> <OPTION 
                                value=1993>1993</OPTION> <OPTION 
                                value=1994>1994</OPTION> <OPTION 
                                value=1995>1995</OPTION> <OPTION 
                                value=1996>1996</OPTION> <OPTION 
                                value=1997>1997</OPTION> <OPTION 
                                value=1998>1998</OPTION> <OPTION 
                                value=1999>1999</OPTION> <OPTION 
                                value=2000>2000</OPTION> <OPTION 
                                value=2001>2001</OPTION> <OPTION 
                                value=2002>2002</OPTION> <OPTION 
                                value=2003>2003</OPTION> <OPTION 
                                value=2004>2004</OPTION> <OPTION 
                                value=2005>2005</OPTION></SELECT> 
                          </FONT></TD></TR></TBODY></TABLE>
                        <HR align=left width=590 color=#d8d8d8 noShade SIZE=1>

                        <TABLE cellSpacing=0 cellPadding=0 width=590 border=0>
                          <TBODY>
                          <TR>
                            <TD class=arial height=25><B>Yabanc� Dil:</B></TD>
                            <TD class=arial width=240><B>Konu�ma</B></TD>
                            <TD class=arial width=230><B>Yazma</B></TD></TR>
                          <TR>
                            <TD class=arial height=25><B>�ngilizce:</B></TD>
                            <TD class=arial>
                              <TABLE cellSpacing=0 cellPadding=0 width=230 
                              border=0>
                                <TBODY>
                                <TR>
                                <TD class=arial width=10><INPUT type=radio 
                                value=�ok �yi name=ingkonusma> </TD>
                                <TD class=arial>�ok �yi</TD>
                                <TD class=arial width=10><INPUT type=radio 
                                value=�yi name=ingkonusma> </TD>
                                <TD class=arial>�yi</TD>
                                <TD class=arial width=10><INPUT type=radio 
                                value=Orta name=ingkonusma> </TD>
                                <TD class=arial>Orta</TD>
                                <TD class=arial width=10><INPUT type=radio 
                                value=Zay�f name=ingkonusma> </TD>
                                <TD class=arial>Zay�f</TD></TR></TBODY></TABLE></TD>
                            <TD class=arial>
                              <TABLE cellSpacing=0 cellPadding=0 width=230 
                              border=0>
                                <TBODY>
                                <TR>
                                <TD class=arial width=10><INPUT type=radio 
                                value=�ok �yi name=ingyazma> </TD>
                                <TD class=arial>�ok �yi</TD>
                                <TD class=arial width=10><INPUT type=radio 
                                value=�yi name=ingyazma> </TD>
                                <TD class=arial>�yi</TD>
                                <TD class=arial width=10><INPUT type=radio 
                                value=Orta name=ingyazma> </TD>
                                <TD class=arial>Orta</TD>
                                <TD class=arial width=10><INPUT type=radio 
                                value=Zay�f name=ingyazma> </TD>
                                <TD 
                          class=arial>Zay�f</TD></TR></TBODY></TABLE></TD></TR>
                          <TR>
                            <TD class=arial height=25><B>Almanca:</B></TD>
                            <TD class=arial>
                              <TABLE cellSpacing=0 cellPadding=0 width=230 
                              border=0>
                                <TBODY>
                                <TR>
                                <TD class=arial width=10><INPUT type=radio 
                                value=�ok iyi name=almkonusma> </TD>
                                <TD class=arial>�ok �yi</TD>
                                <TD class=arial width=10><INPUT type=radio 
                                value=�yi name=almkonusma> </TD>
                                <TD class=arial>�yi</TD>
                                <TD class=arial width=10><INPUT type=radio 
                                value=Orta name=almkonusma> </TD>
                                <TD class=arial>Orta</TD>
                                <TD class=arial width=10><INPUT type=radio 
                                value=Zay�f name=almkonusma> </TD>
                                <TD class=arial>Zay�f</TD></TR></TBODY></TABLE></TD>
                            <TD class=arial>
                              <TABLE cellSpacing=0 cellPadding=0 width=230 
                              border=0>
                                <TBODY>
                                <TR>
                                <TD class=arial width=10><INPUT type=radio 
                                value=�ok �yi name=almyazma> </TD>
                                <TD class=arial>�ok �yi</TD>
                                <TD class=arial width=10><INPUT type=radio 
                                value=�yi name=almyazma> </TD>
                                <TD class=arial>�yi</TD>
                                <TD class=arial width=10><INPUT type=radio 
                                value=Orta name=almyazma> </TD>
                                <TD class=arial>Orta</TD>
                                <TD class=arial width=10><INPUT type=radio 
                                value=Zay�f name=almyazma> </TD>
                                <TD 
                          class=arial>Zay�f</TD></TR></TBODY></TABLE></TD></TR>
                          <TR>
                            <TD class=arial height=25><B>Frans�zca:</B></TD>
                            <TD class=arial>
                              <TABLE cellSpacing=0 cellPadding=0 width=230 
                              border=0>
                                <TBODY>
                                <TR>
                                <TD class=arial width=10><INPUT type=radio 
                                value=�ok iyi name=frakonusma> </TD>
                                <TD class=arial>�ok �yi</TD>
                                <TD class=arial width=10><INPUT type=radio 
                                value=�yi name=frakonusma> </TD>
                                <TD class=arial>�yi</TD>
                                <TD class=arial width=10><INPUT type=radio 
                                value=Orta name=frakonusma> </TD>
                                <TD class=arial>Orta</TD>
                                <TD class=arial width=10><INPUT type=radio 
                                value=Zay�f name=frakonusma> </TD>
                                <TD class=arial>Zay�f</TD></TR></TBODY></TABLE></TD>
                            <TD class=arial>
                              <TABLE cellSpacing=0 cellPadding=0 width=230 
                              border=0>
                                <TBODY>
                                <TR>
                                <TD class=arial width=10><INPUT type=radio 
                                value=�ok �yi name=frayazma> </TD>
                                <TD class=arial>�ok �yi</TD>
                                <TD class=arial width=10><INPUT type=radio 
                                value=�yi name=frayazma> </TD>
                                <TD class=arial>�yi</TD>
                                <TD class=arial width=10><INPUT type=radio 
                                value=Orta name=frayazma> </TD>
                                <TD class=arial>Orta</TD>
                                <TD class=arial width=10><INPUT type=radio 
                                value=Zay�f name=frayazma> </TD>
                                <TD 
                          class=arial>Zay�f</TD></TR></TBODY></TABLE></TD></TR>
                          <TR>
                            <TD class=arial height=25><B>Di�er: <INPUT 
                              class=input2 maxLength=15 size=10 name=digerdil> 
                              </B></TD>
                            <TD class=arial>
                              <TABLE cellSpacing=0 cellPadding=0 width=230 
                              border=0>
                                <TBODY>
                                <TR>
                                <TD class=arial width=10><INPUT type=radio 
                                value=3 name=digerkonusma> </TD>
                                <TD class=arial>�ok �yi</TD>
                                <TD class=arial width=10><INPUT type=radio 
                                value=2 name=digerkonusma> </TD>
                                <TD class=arial>�yi</TD>
                                <TD class=arial width=10><INPUT type=radio 
                                value=1 name=digerkonusma> </TD>
                                <TD class=arial>Orta</TD>
                                <TD class=arial width=10><INPUT type=radio 
                                value=0 name=digerkonusma> </TD>
                                <TD class=arial>Zay�f</TD></TR></TBODY></TABLE></TD>
                            <TD class=arial>
                              <TABLE cellSpacing=0 cellPadding=0 width=230 
                              border=0>
                                <TBODY>
                                <TR>
                                <TD class=arial width=10><INPUT type=radio 
                                value=3 name=digeryazma> </TD>
                                <TD class=arial>�ok �yi</TD>
                                <TD class=arial width=10><INPUT type=radio 
                                value=2 name=digeryazma> </TD>
                                <TD class=arial>�yi</TD>
                                <TD class=arial width=10><INPUT type=radio 
                                value=1 name=digeryazma> </TD>
                                <TD class=arial>Orta</TD>
                                <TD class=arial width=10><INPUT type=radio 
                                value=0 name=digeryazma> </TD>
                                <TD 
                          class=arial>Zay�f</TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE>
                        <HR align=left width=590 color=#d8d8d8 noShade SIZE=1>

                        <TABLE cellSpacing=0 cellPadding=0 width=590 border=0>
                          <TBODY>
                          <TR>
                            <TD class=arial height=25><B>Kat�ld���n�z kurs, 
                              seminer, <BR>sertifika programlar�:</B></TD>
                            <TD class=arial><TEXTAREA class=input2 onkeydown=textareaLimiter(this.form.kursseminer,this.form.remLen2,200); onkeyup=textareaLimiter(this.form.kursseminer,this.form.remLen2,200); name=kursseminer rows=3 wrap=VIRTUAL cols=40></TEXTAREA> 
                              <INPUT class=input3 readOnly maxLength=3 size=4 
                              value=200 name=remLen2> </TD></TR>
                          <TR>
                            <TD class=arial height=25><B>Bilgisayar kullan�yor 
                              musunuz?</B></TD>
                            <TD class=arial>
                              <TABLE cellSpacing=0 cellPadding=0 border=0>
                                <TBODY>
                                <TR>
                                <TD class=arial width=10><INPUT type=radio 
                                value=Evet name=bilgisayar> </TD>
                                <TD class=arial>Evet</TD>
                                <TD class=arial width=10><INPUT type=radio 
                                value=Hay�r name=bilgisayar> </TD>
                                <TD 
                          class=arial>Hay�r</TD></TR></TBODY></TABLE></TD></TR>
                          <TR>
                            <TD class=arial height=25><B>Evet ise 
                              kulland���n�z programlar:</B></TD>
                            <TD class=arial><TEXTAREA class=input2 onkeydown=textareaLimiter(this.form.program,this.form.remLen3,200); onkeyup=textareaLimiter(this.form.program,this.form.remLen3,200); name=program rows=3 wrap=VIRTUAL cols=40></TEXTAREA> 
                              <INPUT class=input3 readOnly maxLength=3 size=4 
                              value=200 name=remLen3> </TD></TR></TBODY></TABLE><BR>
                        <TABLE cellSpacing=0 cellPadding=0 width=590 border=0>
                          <TBODY>
                          <TR bgColor=#4d81ba>
                            <TD class=arial height=20><B><FONT 
                              color=#ffffff>&nbsp;&nbsp;�� TECR�BES� 
                            </FONT></B></TD>
                            <TD class=arial align=right><FONT 
                              color=#ffffff>L�tfen son i� tecr�besi ba�ta olmak 
                              �zere 
                        belirtiniz.&nbsp;&nbsp;</FONT></TD></TR></TBODY></TABLE>
                        <TABLE cellSpacing=0 cellPadding=0 width=590 border=0>
                          <TBODY>
                          <TR>
                            <TD class=arial height=25><B>Kurulu� �smi, 
                              Adresi:</B></TD>
                            <TD class=arial><B>Giri� Tarihi:</B></TD>
                            <TD class=arial><B>Ayr�l�� Tarihi:</B></TD>
                            <TD class=arial><B>Pozisyon:</B></TD>
                            <TD class=arial><B>Ayr�l�� Nedeni:</B></TD></TR>
                          <TR>
                            <TD class=arial height=25><INPUT class=input2 
                              maxLength=75 size=30 name=kurulus1> </TD>
                            <TD class=arial><FONT color=#cc0000><SELECT 
                              class=input2 name=kurulus1giris> <OPTION 
                                value=-1 selected>Y�l<OPTION 
                                value=1920>1920</OPTION> <OPTION 
                                value=1921>1921</OPTION> <OPTION 
                                value=1922>1922</OPTION> <OPTION 
                                value=1923>1923</OPTION> <OPTION 
                                value=1924>1924</OPTION> <OPTION 
                                value=1925>1925</OPTION> <OPTION 
                                value=1926>1926</OPTION> <OPTION 
                                value=1927>1927</OPTION> <OPTION 
                                value=1928>1928</OPTION> <OPTION 
                                value=1929>1929</OPTION> <OPTION 
                                value=1930>1930</OPTION> <OPTION 
                                value=1931>1931</OPTION> <OPTION 
                                value=1932>1932</OPTION> <OPTION 
                                value=1933>1933</OPTION> <OPTION 
                                value=1934>1934</OPTION> <OPTION 
                                value=1935>1935</OPTION> <OPTION 
                                value=1936>1936</OPTION> <OPTION 
                                value=1937>1937</OPTION> <OPTION 
                                value=1938>1938</OPTION> <OPTION 
                                value=1939>1939</OPTION> <OPTION 
                                value=1940>1940</OPTION> <OPTION 
                                value=1941>1941</OPTION> <OPTION 
                                value=1942>1942</OPTION> <OPTION 
                                value=1943>1943</OPTION> <OPTION 
                                value=1944>1944</OPTION> <OPTION 
                                value=1945>1945</OPTION> <OPTION 
                                value=1946>1946</OPTION> <OPTION 
                                value=1947>1947</OPTION> <OPTION 
                                value=1948>1948</OPTION> <OPTION 
                                value=1949>1949</OPTION> <OPTION 
                                value=1950>1950</OPTION> <OPTION 
                                value=1951>1951</OPTION> <OPTION 
                                value=1952>1952</OPTION> <OPTION 
                                value=1953>1953</OPTION> <OPTION 
                                value=1954>1954</OPTION> <OPTION 
                                value=1955>1955</OPTION> <OPTION 
                                value=1956>1956</OPTION> <OPTION 
                                value=1957>1957</OPTION> <OPTION 
                                value=1958>1958</OPTION> <OPTION 
                                value=1959>1959</OPTION> <OPTION 
                                value=1960>1960</OPTION> <OPTION 
                                value=1961>1961</OPTION> <OPTION 
                                value=1962>1962</OPTION> <OPTION 
                                value=1963>1963</OPTION> <OPTION 
                                value=1964>1964</OPTION> <OPTION 
                                value=1965>1965</OPTION> <OPTION 
                                value=1966>1966</OPTION> <OPTION 
                                value=1967>1967</OPTION> <OPTION 
                                value=1968>1968</OPTION> <OPTION 
                                value=1969>1969</OPTION> <OPTION 
                                value=1970>1970</OPTION> <OPTION 
                                value=1971>1971</OPTION> <OPTION 
                                value=1972>1972</OPTION> <OPTION 
                                value=1973>1973</OPTION> <OPTION 
                                value=1974>1974</OPTION> <OPTION 
                                value=1975>1975</OPTION> <OPTION 
                                value=1976>1976</OPTION> <OPTION 
                                value=1977>1977</OPTION> <OPTION 
                                value=1978>1978</OPTION> <OPTION 
                                value=1979>1979</OPTION> <OPTION 
                                value=1980>1980</OPTION> <OPTION 
                                value=1981>1981</OPTION> <OPTION 
                                value=1982>1982</OPTION> <OPTION 
                                value=1983>1983</OPTION> <OPTION 
                                value=1984>1984</OPTION> <OPTION 
                                value=1985>1985</OPTION> <OPTION 
                                value=1986>1986</OPTION> <OPTION 
                                value=1987>1987</OPTION> <OPTION 
                                value=1988>1988</OPTION> <OPTION 
                                value=1989>1989</OPTION> <OPTION 
                                value=1990>1990</OPTION> <OPTION 
                                value=1991>1991</OPTION> <OPTION 
                                value=1992>1992</OPTION> <OPTION 
                                value=1993>1993</OPTION> <OPTION 
                                value=1994>1994</OPTION> <OPTION 
                                value=1995>1995</OPTION> <OPTION 
                                value=1996>1996</OPTION> <OPTION 
                                value=1997>1997</OPTION> <OPTION 
                                value=1998>1998</OPTION> <OPTION 
                                value=1999>1999</OPTION> <OPTION 
                                value=2000>2000</OPTION> <OPTION 
                                value=2001>2001</OPTION> <OPTION 
                                value=2002>2002</OPTION> <OPTION 
                                value=2003>2003</OPTION> <OPTION 
                                value=2004>2004</OPTION> <OPTION 
                                value=2005>2005</OPTION></SELECT> </FONT></TD>
                            <TD class=arial><FONT color=#cc0000><SELECT 
                              class=input2 name=kurulus1ayrilis> <OPTION 
                                value=-1 selected>Y�l<OPTION 
                                value=1920>1920</OPTION> <OPTION 
                                value=1921>1921</OPTION> <OPTION 
                                value=1922>1922</OPTION> <OPTION 
                                value=1923>1923</OPTION> <OPTION 
                                value=1924>1924</OPTION> <OPTION 
                                value=1925>1925</OPTION> <OPTION 
                                value=1926>1926</OPTION> <OPTION 
                                value=1927>1927</OPTION> <OPTION 
                                value=1928>1928</OPTION> <OPTION 
                                value=1929>1929</OPTION> <OPTION 
                                value=1930>1930</OPTION> <OPTION 
                                value=1931>1931</OPTION> <OPTION 
                                value=1932>1932</OPTION> <OPTION 
                                value=1933>1933</OPTION> <OPTION 
                                value=1934>1934</OPTION> <OPTION 
                                value=1935>1935</OPTION> <OPTION 
                                value=1936>1936</OPTION> <OPTION 
                                value=1937>1937</OPTION> <OPTION 
                                value=1938>1938</OPTION> <OPTION 
                                value=1939>1939</OPTION> <OPTION 
                                value=1940>1940</OPTION> <OPTION 
                                value=1941>1941</OPTION> <OPTION 
                                value=1942>1942</OPTION> <OPTION 
                                value=1943>1943</OPTION> <OPTION 
                                value=1944>1944</OPTION> <OPTION 
                                value=1945>1945</OPTION> <OPTION 
                                value=1946>1946</OPTION> <OPTION 
                                value=1947>1947</OPTION> <OPTION 
                                value=1948>1948</OPTION> <OPTION 
                                value=1949>1949</OPTION> <OPTION 
                                value=1950>1950</OPTION> <OPTION 
                                value=1951>1951</OPTION> <OPTION 
                                value=1952>1952</OPTION> <OPTION 
                                value=1953>1953</OPTION> <OPTION 
                                value=1954>1954</OPTION> <OPTION 
                                value=1955>1955</OPTION> <OPTION 
                                value=1956>1956</OPTION> <OPTION 
                                value=1957>1957</OPTION> <OPTION 
                                value=1958>1958</OPTION> <OPTION 
                                value=1959>1959</OPTION> <OPTION 
                                value=1960>1960</OPTION> <OPTION 
                                value=1961>1961</OPTION> <OPTION 
                                value=1962>1962</OPTION> <OPTION 
                                value=1963>1963</OPTION> <OPTION 
                                value=1964>1964</OPTION> <OPTION 
                                value=1965>1965</OPTION> <OPTION 
                                value=1966>1966</OPTION> <OPTION 
                                value=1967>1967</OPTION> <OPTION 
                                value=1968>1968</OPTION> <OPTION 
                                value=1969>1969</OPTION> <OPTION 
                                value=1970>1970</OPTION> <OPTION 
                                value=1971>1971</OPTION> <OPTION 
                                value=1972>1972</OPTION> <OPTION 
                                value=1973>1973</OPTION> <OPTION 
                                value=1974>1974</OPTION> <OPTION 
                                value=1975>1975</OPTION> <OPTION 
                                value=1976>1976</OPTION> <OPTION 
                                value=1977>1977</OPTION> <OPTION 
                                value=1978>1978</OPTION> <OPTION 
                                value=1979>1979</OPTION> <OPTION 
                                value=1980>1980</OPTION> <OPTION 
                                value=1981>1981</OPTION> <OPTION 
                                value=1982>1982</OPTION> <OPTION 
                                value=1983>1983</OPTION> <OPTION 
                                value=1984>1984</OPTION> <OPTION 
                                value=1985>1985</OPTION> <OPTION 
                                value=1986>1986</OPTION> <OPTION 
                                value=1987>1987</OPTION> <OPTION 
                                value=1988>1988</OPTION> <OPTION 
                                value=1989>1989</OPTION> <OPTION 
                                value=1990>1990</OPTION> <OPTION 
                                value=1991>1991</OPTION> <OPTION 
                                value=1992>1992</OPTION> <OPTION 
                                value=1993>1993</OPTION> <OPTION 
                                value=1994>1994</OPTION> <OPTION 
                                value=1995>1995</OPTION> <OPTION 
                                value=1996>1996</OPTION> <OPTION 
                                value=1997>1997</OPTION> <OPTION 
                                value=1998>1998</OPTION> <OPTION 
                                value=1999>1999</OPTION> <OPTION 
                                value=2000>2000</OPTION> <OPTION 
                                value=2001>2001</OPTION> <OPTION 
                                value=2002>2002</OPTION> <OPTION 
                                value=2003>2003</OPTION> <OPTION 
                                value=2004>2004</OPTION> <OPTION 
                                value=2005>2005</OPTION></SELECT> </FONT></TD>
                            <TD class=arial><B><INPUT class=input2 
                              maxLength=40 size=15 name=kurulus1pozisyon> 
</B></TD>
                            <TD class=arial><B><INPUT class=input2 
                              maxLength=50 size=15 name=kurulus1ayrilissebep> 
                              </B></TD></TR>
                          <TR>
                            <TD class=arial height=25><INPUT class=input2 
                              maxLength=75 size=30 name=kurulus2> </TD>
                            <TD class=arial><FONT color=#cc0000><SELECT 
                              class=input2 name=kurulus2giris> <OPTION 
                                value=-1 selected>Y�l<OPTION 
                                value=1920>1920</OPTION> <OPTION 
                                value=1921>1921</OPTION> <OPTION 
                                value=1922>1922</OPTION> <OPTION 
                                value=1923>1923</OPTION> <OPTION 
                                value=1924>1924</OPTION> <OPTION 
                                value=1925>1925</OPTION> <OPTION 
                                value=1926>1926</OPTION> <OPTION 
                                value=1927>1927</OPTION> <OPTION 
                                value=1928>1928</OPTION> <OPTION 
                                value=1929>1929</OPTION> <OPTION 
                                value=1930>1930</OPTION> <OPTION 
                                value=1931>1931</OPTION> <OPTION 
                                value=1932>1932</OPTION> <OPTION 
                                value=1933>1933</OPTION> <OPTION 
                                value=1934>1934</OPTION> <OPTION 
                                value=1935>1935</OPTION> <OPTION 
                                value=1936>1936</OPTION> <OPTION 
                                value=1937>1937</OPTION> <OPTION 
                                value=1938>1938</OPTION> <OPTION 
                                value=1939>1939</OPTION> <OPTION 
                                value=1940>1940</OPTION> <OPTION 
                                value=1941>1941</OPTION> <OPTION 
                                value=1942>1942</OPTION> <OPTION 
                                value=1943>1943</OPTION> <OPTION 
                                value=1944>1944</OPTION> <OPTION 
                                value=1945>1945</OPTION> <OPTION 
                                value=1946>1946</OPTION> <OPTION 
                                value=1947>1947</OPTION> <OPTION 
                                value=1948>1948</OPTION> <OPTION 
                                value=1949>1949</OPTION> <OPTION 
                                value=1950>1950</OPTION> <OPTION 
                                value=1951>1951</OPTION> <OPTION 
                                value=1952>1952</OPTION> <OPTION 
                                value=1953>1953</OPTION> <OPTION 
                                value=1954>1954</OPTION> <OPTION 
                                value=1955>1955</OPTION> <OPTION 
                                value=1956>1956</OPTION> <OPTION 
                                value=1957>1957</OPTION> <OPTION 
                                value=1958>1958</OPTION> <OPTION 
                                value=1959>1959</OPTION> <OPTION 
                                value=1960>1960</OPTION> <OPTION 
                                value=1961>1961</OPTION> <OPTION 
                                value=1962>1962</OPTION> <OPTION 
                                value=1963>1963</OPTION> <OPTION 
                                value=1964>1964</OPTION> <OPTION 
                                value=1965>1965</OPTION> <OPTION 
                                value=1966>1966</OPTION> <OPTION 
                                value=1967>1967</OPTION> <OPTION 
                                value=1968>1968</OPTION> <OPTION 
                                value=1969>1969</OPTION> <OPTION 
                                value=1970>1970</OPTION> <OPTION 
                                value=1971>1971</OPTION> <OPTION 
                                value=1972>1972</OPTION> <OPTION 
                                value=1973>1973</OPTION> <OPTION 
                                value=1974>1974</OPTION> <OPTION 
                                value=1975>1975</OPTION> <OPTION 
                                value=1976>1976</OPTION> <OPTION 
                                value=1977>1977</OPTION> <OPTION 
                                value=1978>1978</OPTION> <OPTION 
                                value=1979>1979</OPTION> <OPTION 
                                value=1980>1980</OPTION> <OPTION 
                                value=1981>1981</OPTION> <OPTION 
                                value=1982>1982</OPTION> <OPTION 
                                value=1983>1983</OPTION> <OPTION 
                                value=1984>1984</OPTION> <OPTION 
                                value=1985>1985</OPTION> <OPTION 
                                value=1986>1986</OPTION> <OPTION 
                                value=1987>1987</OPTION> <OPTION 
                                value=1988>1988</OPTION> <OPTION 
                                value=1989>1989</OPTION> <OPTION 
                                value=1990>1990</OPTION> <OPTION 
                                value=1991>1991</OPTION> <OPTION 
                                value=1992>1992</OPTION> <OPTION 
                                value=1993>1993</OPTION> <OPTION 
                                value=1994>1994</OPTION> <OPTION 
                                value=1995>1995</OPTION> <OPTION 
                                value=1996>1996</OPTION> <OPTION 
                                value=1997>1997</OPTION> <OPTION 
                                value=1998>1998</OPTION> <OPTION 
                                value=1999>1999</OPTION> <OPTION 
                                value=2000>2000</OPTION> <OPTION 
                                value=2001>2001</OPTION> <OPTION 
                                value=2002>2002</OPTION> <OPTION 
                                value=2003>2003</OPTION> <OPTION 
                                value=2004>2004</OPTION> <OPTION 
                                value=2005>2005</OPTION></SELECT> </FONT></TD>
                            <TD class=arial><FONT color=#cc0000><SELECT 
                              class=input2 name=kurulus2ayrilis> <OPTION 
                                value=-1 selected>Y�l<OPTION 
                                value=1920>1920</OPTION> <OPTION 
                                value=1921>1921</OPTION> <OPTION 
                                value=1922>1922</OPTION> <OPTION 
                                value=1923>1923</OPTION> <OPTION 
                                value=1924>1924</OPTION> <OPTION 
                                value=1925>1925</OPTION> <OPTION 
                                value=1926>1926</OPTION> <OPTION 
                                value=1927>1927</OPTION> <OPTION 
                                value=1928>1928</OPTION> <OPTION 
                                value=1929>1929</OPTION> <OPTION 
                                value=1930>1930</OPTION> <OPTION 
                                value=1931>1931</OPTION> <OPTION 
                                value=1932>1932</OPTION> <OPTION 
                                value=1933>1933</OPTION> <OPTION 
                                value=1934>1934</OPTION> <OPTION 
                                value=1935>1935</OPTION> <OPTION 
                                value=1936>1936</OPTION> <OPTION 
                                value=1937>1937</OPTION> <OPTION 
                                value=1938>1938</OPTION> <OPTION 
                                value=1939>1939</OPTION> <OPTION 
                                value=1940>1940</OPTION> <OPTION 
                                value=1941>1941</OPTION> <OPTION 
                                value=1942>1942</OPTION> <OPTION 
                                value=1943>1943</OPTION> <OPTION 
                                value=1944>1944</OPTION> <OPTION 
                                value=1945>1945</OPTION> <OPTION 
                                value=1946>1946</OPTION> <OPTION 
                                value=1947>1947</OPTION> <OPTION 
                                value=1948>1948</OPTION> <OPTION 
                                value=1949>1949</OPTION> <OPTION 
                                value=1950>1950</OPTION> <OPTION 
                                value=1951>1951</OPTION> <OPTION 
                                value=1952>1952</OPTION> <OPTION 
                                value=1953>1953</OPTION> <OPTION 
                                value=1954>1954</OPTION> <OPTION 
                                value=1955>1955</OPTION> <OPTION 
                                value=1956>1956</OPTION> <OPTION 
                                value=1957>1957</OPTION> <OPTION 
                                value=1958>1958</OPTION> <OPTION 
                                value=1959>1959</OPTION> <OPTION 
                                value=1960>1960</OPTION> <OPTION 
                                value=1961>1961</OPTION> <OPTION 
                                value=1962>1962</OPTION> <OPTION 
                                value=1963>1963</OPTION> <OPTION 
                                value=1964>1964</OPTION> <OPTION 
                                value=1965>1965</OPTION> <OPTION 
                                value=1966>1966</OPTION> <OPTION 
                                value=1967>1967</OPTION> <OPTION 
                                value=1968>1968</OPTION> <OPTION 
                                value=1969>1969</OPTION> <OPTION 
                                value=1970>1970</OPTION> <OPTION 
                                value=1971>1971</OPTION> <OPTION 
                                value=1972>1972</OPTION> <OPTION 
                                value=1973>1973</OPTION> <OPTION 
                                value=1974>1974</OPTION> <OPTION 
                                value=1975>1975</OPTION> <OPTION 
                                value=1976>1976</OPTION> <OPTION 
                                value=1977>1977</OPTION> <OPTION 
                                value=1978>1978</OPTION> <OPTION 
                                value=1979>1979</OPTION> <OPTION 
                                value=1980>1980</OPTION> <OPTION 
                                value=1981>1981</OPTION> <OPTION 
                                value=1982>1982</OPTION> <OPTION 
                                value=1983>1983</OPTION> <OPTION 
                                value=1984>1984</OPTION> <OPTION 
                                value=1985>1985</OPTION> <OPTION 
                                value=1986>1986</OPTION> <OPTION 
                                value=1987>1987</OPTION> <OPTION 
                                value=1988>1988</OPTION> <OPTION 
                                value=1989>1989</OPTION> <OPTION 
                                value=1990>1990</OPTION> <OPTION 
                                value=1991>1991</OPTION> <OPTION 
                                value=1992>1992</OPTION> <OPTION 
                                value=1993>1993</OPTION> <OPTION 
                                value=1994>1994</OPTION> <OPTION 
                                value=1995>1995</OPTION> <OPTION 
                                value=1996>1996</OPTION> <OPTION 
                                value=1997>1997</OPTION> <OPTION 
                                value=1998>1998</OPTION> <OPTION 
                                value=1999>1999</OPTION> <OPTION 
                                value=2000>2000</OPTION> <OPTION 
                                value=2001>2001</OPTION> <OPTION 
                                value=2002>2002</OPTION> <OPTION 
                                value=2003>2003</OPTION> <OPTION 
                                value=2004>2004</OPTION> <OPTION 
                                value=2005>2005</OPTION></SELECT> </FONT></TD>
                            <TD class=arial><B><INPUT class=input2 
                              maxLength=40 size=15 name=kurulus2pozisyon> 
</B></TD>
                            <TD class=arial><B><INPUT class=input2 
                              maxLength=50 size=15 name=kurulus2ayrilissebep> 
                              </B></TD></TR>
                          <TR>
                            <TD class=arial height=25><INPUT class=input2 
                              maxLength=75 size=30 name=kurulus3> </TD>
                            <TD class=arial><FONT color=#cc0000><SELECT 
                              class=input2 name=kurulus3giris> <OPTION 
                                value=-1 selected>Y�l<OPTION 
                                value=1920>1920</OPTION> <OPTION 
                                value=1921>1921</OPTION> <OPTION 
                                value=1922>1922</OPTION> <OPTION 
                                value=1923>1923</OPTION> <OPTION 
                                value=1924>1924</OPTION> <OPTION 
                                value=1925>1925</OPTION> <OPTION 
                                value=1926>1926</OPTION> <OPTION 
                                value=1927>1927</OPTION> <OPTION 
                                value=1928>1928</OPTION> <OPTION 
                                value=1929>1929</OPTION> <OPTION 
                                value=1930>1930</OPTION> <OPTION 
                                value=1931>1931</OPTION> <OPTION 
                                value=1932>1932</OPTION> <OPTION 
                                value=1933>1933</OPTION> <OPTION 
                                value=1934>1934</OPTION> <OPTION 
                                value=1935>1935</OPTION> <OPTION 
                                value=1936>1936</OPTION> <OPTION 
                                value=1937>1937</OPTION> <OPTION 
                                value=1938>1938</OPTION> <OPTION 
                                value=1939>1939</OPTION> <OPTION 
                                value=1940>1940</OPTION> <OPTION 
                                value=1941>1941</OPTION> <OPTION 
                                value=1942>1942</OPTION> <OPTION 
                                value=1943>1943</OPTION> <OPTION 
                                value=1944>1944</OPTION> <OPTION 
                                value=1945>1945</OPTION> <OPTION 
                                value=1946>1946</OPTION> <OPTION 
                                value=1947>1947</OPTION> <OPTION 
                                value=1948>1948</OPTION> <OPTION 
                                value=1949>1949</OPTION> <OPTION 
                                value=1950>1950</OPTION> <OPTION 
                                value=1951>1951</OPTION> <OPTION 
                                value=1952>1952</OPTION> <OPTION 
                                value=1953>1953</OPTION> <OPTION 
                                value=1954>1954</OPTION> <OPTION 
                                value=1955>1955</OPTION> <OPTION 
                                value=1956>1956</OPTION> <OPTION 
                                value=1957>1957</OPTION> <OPTION 
                                value=1958>1958</OPTION> <OPTION 
                                value=1959>1959</OPTION> <OPTION 
                                value=1960>1960</OPTION> <OPTION 
                                value=1961>1961</OPTION> <OPTION 
                                value=1962>1962</OPTION> <OPTION 
                                value=1963>1963</OPTION> <OPTION 
                                value=1964>1964</OPTION> <OPTION 
                                value=1965>1965</OPTION> <OPTION 
                                value=1966>1966</OPTION> <OPTION 
                                value=1967>1967</OPTION> <OPTION 
                                value=1968>1968</OPTION> <OPTION 
                                value=1969>1969</OPTION> <OPTION 
                                value=1970>1970</OPTION> <OPTION 
                                value=1971>1971</OPTION> <OPTION 
                                value=1972>1972</OPTION> <OPTION 
                                value=1973>1973</OPTION> <OPTION 
                                value=1974>1974</OPTION> <OPTION 
                                value=1975>1975</OPTION> <OPTION 
                                value=1976>1976</OPTION> <OPTION 
                                value=1977>1977</OPTION> <OPTION 
                                value=1978>1978</OPTION> <OPTION 
                                value=1979>1979</OPTION> <OPTION 
                                value=1980>1980</OPTION> <OPTION 
                                value=1981>1981</OPTION> <OPTION 
                                value=1982>1982</OPTION> <OPTION 
                                value=1983>1983</OPTION> <OPTION 
                                value=1984>1984</OPTION> <OPTION 
                                value=1985>1985</OPTION> <OPTION 
                                value=1986>1986</OPTION> <OPTION 
                                value=1987>1987</OPTION> <OPTION 
                                value=1988>1988</OPTION> <OPTION 
                                value=1989>1989</OPTION> <OPTION 
                                value=1990>1990</OPTION> <OPTION 
                                value=1991>1991</OPTION> <OPTION 
                                value=1992>1992</OPTION> <OPTION 
                                value=1993>1993</OPTION> <OPTION 
                                value=1994>1994</OPTION> <OPTION 
                                value=1995>1995</OPTION> <OPTION 
                                value=1996>1996</OPTION> <OPTION 
                                value=1997>1997</OPTION> <OPTION 
                                value=1998>1998</OPTION> <OPTION 
                                value=1999>1999</OPTION> <OPTION 
                                value=2000>2000</OPTION> <OPTION 
                                value=2001>2001</OPTION> <OPTION 
                                value=2002>2002</OPTION> <OPTION 
                                value=2003>2003</OPTION> <OPTION 
                                value=2004>2004</OPTION> <OPTION 
                                value=2005>2005</OPTION></SELECT> </FONT></TD>
                            <TD class=arial><FONT color=#cc0000><SELECT 
                              class=input2 name=kurulus3ayrilis> <OPTION 
                                value=-1 selected>Y�l<OPTION 
                                value=1920>1920</OPTION> <OPTION 
                                value=1921>1921</OPTION> <OPTION 
                                value=1922>1922</OPTION> <OPTION 
                                value=1923>1923</OPTION> <OPTION 
                                value=1924>1924</OPTION> <OPTION 
                                value=1925>1925</OPTION> <OPTION 
                                value=1926>1926</OPTION> <OPTION 
                                value=1927>1927</OPTION> <OPTION 
                                value=1928>1928</OPTION> <OPTION 
                                value=1929>1929</OPTION> <OPTION 
                                value=1930>1930</OPTION> <OPTION 
                                value=1931>1931</OPTION> <OPTION 
                                value=1932>1932</OPTION> <OPTION 
                                value=1933>1933</OPTION> <OPTION 
                                value=1934>1934</OPTION> <OPTION 
                                value=1935>1935</OPTION> <OPTION 
                                value=1936>1936</OPTION> <OPTION 
                                value=1937>1937</OPTION> <OPTION 
                                value=1938>1938</OPTION> <OPTION 
                                value=1939>1939</OPTION> <OPTION 
                                value=1940>1940</OPTION> <OPTION 
                                value=1941>1941</OPTION> <OPTION 
                                value=1942>1942</OPTION> <OPTION 
                                value=1943>1943</OPTION> <OPTION 
                                value=1944>1944</OPTION> <OPTION 
                                value=1945>1945</OPTION> <OPTION 
                                value=1946>1946</OPTION> <OPTION 
                                value=1947>1947</OPTION> <OPTION 
                                value=1948>1948</OPTION> <OPTION 
                                value=1949>1949</OPTION> <OPTION 
                                value=1950>1950</OPTION> <OPTION 
                                value=1951>1951</OPTION> <OPTION 
                                value=1952>1952</OPTION> <OPTION 
                                value=1953>1953</OPTION> <OPTION 
                                value=1954>1954</OPTION> <OPTION 
                                value=1955>1955</OPTION> <OPTION 
                                value=1956>1956</OPTION> <OPTION 
                                value=1957>1957</OPTION> <OPTION 
                                value=1958>1958</OPTION> <OPTION 
                                value=1959>1959</OPTION> <OPTION 
                                value=1960>1960</OPTION> <OPTION 
                                value=1961>1961</OPTION> <OPTION 
                                value=1962>1962</OPTION> <OPTION 
                                value=1963>1963</OPTION> <OPTION 
                                value=1964>1964</OPTION> <OPTION 
                                value=1965>1965</OPTION> <OPTION 
                                value=1966>1966</OPTION> <OPTION 
                                value=1967>1967</OPTION> <OPTION 
                                value=1968>1968</OPTION> <OPTION 
                                value=1969>1969</OPTION> <OPTION 
                                value=1970>1970</OPTION> <OPTION 
                                value=1971>1971</OPTION> <OPTION 
                                value=1972>1972</OPTION> <OPTION 
                                value=1973>1973</OPTION> <OPTION 
                                value=1974>1974</OPTION> <OPTION 
                                value=1975>1975</OPTION> <OPTION 
                                value=1976>1976</OPTION> <OPTION 
                                value=1977>1977</OPTION> <OPTION 
                                value=1978>1978</OPTION> <OPTION 
                                value=1979>1979</OPTION> <OPTION 
                                value=1980>1980</OPTION> <OPTION 
                                value=1981>1981</OPTION> <OPTION 
                                value=1982>1982</OPTION> <OPTION 
                                value=1983>1983</OPTION> <OPTION 
                                value=1984>1984</OPTION> <OPTION 
                                value=1985>1985</OPTION> <OPTION 
                                value=1986>1986</OPTION> <OPTION 
                                value=1987>1987</OPTION> <OPTION 
                                value=1988>1988</OPTION> <OPTION 
                                value=1989>1989</OPTION> <OPTION 
                                value=1990>1990</OPTION> <OPTION 
                                value=1991>1991</OPTION> <OPTION 
                                value=1992>1992</OPTION> <OPTION 
                                value=1993>1993</OPTION> <OPTION 
                                value=1994>1994</OPTION> <OPTION 
                                value=1995>1995</OPTION> <OPTION 
                                value=1996>1996</OPTION> <OPTION 
                                value=1997>1997</OPTION> <OPTION 
                                value=1998>1998</OPTION> <OPTION 
                                value=1999>1999</OPTION> <OPTION 
                                value=2000>2000</OPTION> <OPTION 
                                value=2001>2001</OPTION> <OPTION 
                                value=2002>2002</OPTION> <OPTION 
                                value=2003>2003</OPTION> <OPTION 
                                value=2004>2004</OPTION> <OPTION 
                                value=2005>2005</OPTION></SELECT> </FONT></TD>
                            <TD class=arial><B><INPUT class=input2 
                              maxLength=40 size=15 name=kurulus3pozisyon> 
</B></TD>
                            <TD class=arial><B><INPUT class=input2 
                              maxLength=50 size=15 name=kurulus3ayrilissebep> 
                              </B></TD></TR></TBODY></TABLE><BR>
                        <TABLE cellSpacing=0 cellPadding=0 width=590 border=0>
                          <TBODY>
                          <TR>
                            <TD class=arial bgColor=#4d81ba height=20><B><FONT 
                              color=#ffffff>&nbsp;&nbsp;D��ER B�LG�LER 
                              </FONT></B></TD>
                            <TD class=arial bgColor=#4d81ba 
                          height=20>&nbsp;</TD></TR>
                          <TR>
                            <TD class=arial height=25><B>Bizi nereden duydunuz?</B></TD>
                            <TD class=arial height=20><INPUT class=input2 
                              maxLength=50 size=30 name=asmnerdenduydun> </TD></TR>
                          <TR>
                            <TD class=arial height=25><B>Bizde 
                              �al��an akraba ya da <BR>tan�d���n�z var 
m�?</B></TD>
                            <TD class=arial height=20>
                              <TABLE cellSpacing=0 cellPadding=0 border=0>
                                <TBODY>
                                <TR>
                                <TD class=arial width=10><INPUT type=radio 
                                value=Evet name=anadoluakraba> </TD>
                                <TD class=arial>Evet</TD>
                                <TD class=arial width=10><INPUT type=radio 
                                value=Hay�r name=anadoluakraba> </TD>
                                <TD 
                          class=arial>Hay�r</TD></TR></TBODY></TABLE></TD></TR>
                          <TR>
                            <TD class=arial height=25><B>Varsa Ad� 
                            Soyad�:</B></TD>
                            <TD class=arial height=20><INPUT class=input2 
                              maxLength=30 size=30 name=varsaad> </TD></TR>
                          <TR>
                            <TD class=arial height=25><B>�� yerimizden talep 
                              etti�iniz �cret:</B> </TD>
                            <TD class=arial height=20><INPUT class=input2 
                              maxLength=20 size=30 name=ucret> </TD></TR>
                          <TR>
                            <TD class=arial height=25><B>Sigara kullan�yor 
                              musunuz?</B></TD>
                            <TD class=arial height=20>
                              <TABLE cellSpacing=0 cellPadding=0 border=0>
                                <TBODY>
                                <TR>
                                <TD class=arial width=10><INPUT type=radio 
                                value=Evet name=sigara> </TD>
                                <TD class=arial>Evet</TD>
                                <TD class=arial width=10><INPUT type=radio 
                                value=Hay�r name=sigara> </TD>
                                <TD 
                          class=arial>Hay�r</TD></TR></TBODY></TABLE></TD></TR>
                          <TR>
                            <TD class=arial height=25><B>Seyahat etmeye engel 
                              bir durumunuz var m�?</B></TD>
                            <TD class=arial height=20>
                              <TABLE cellSpacing=0 cellPadding=0 border=0>
                                <TBODY>
                                <TR>
                                <TD class=arial width=10><INPUT type=radio 
                                value=Evet name=seyahatengeli> </TD>
                                <TD class=arial>Evet</TD>
                                <TD class=arial width=10><INPUT type=radio 
                                value=Hay�r name=seyahatengeli></TD>
                                <TD 
                          class=arial>Hay�r</TD></TR></TBODY></TABLE></TD></TR>
                          <TR>
                            <TD class=arial height=25><B>Mesai saatleri 
                              d���nda �al��abilir misiniz?</B> </TD>
                            <TD class=arial height=20>
                              <TABLE cellSpacing=0 cellPadding=0 border=0>
                                <TBODY>
                                <TR>
                                <TD class=arial width=10><INPUT type=radio 
                                value=Evet name=mesaidisi> </TD>
                                <TD class=arial>Evet</TD>
                                <TD class=arial width=10><INPUT type=radio 
                                value=Hay�r name=mesaidisi> </TD>
                                <TD 
                          class=arial>Hay�r</TD></TR></TBODY></TABLE></TD></TR>
                          <TR>
                            <TD class=arial height=25><B>Vardiyal� �al��abilir 
                              misiniz?</B></TD>
                            <TD class=arial height=20>
                              <TABLE cellSpacing=0 cellPadding=0 border=0>
                                <TBODY>
                                <TR>
                                <TD class=arial width=10><INPUT type=radio 
                                value=Evet name=vardiya> </TD>
                                <TD class=arial>Evet</TD>
                                <TD class=arial width=10><INPUT type=radio 
                                value=Hay�r name=vardiya> </TD>
                                <TD 
                          class=arial>Hay�r</TD></TR></TBODY></TABLE></TD></TR>
                          <TR>
                            <TD class=arial height=25><B>S�r�c� ehliyetiniz 
                              varsa s�n�f�:</B> </TD>
                            <TD class=arial height=20><INPUT class=input2 
                              maxLength=20 size=30 name=ehliyetsinifi> 
                          </TD></TR></TBODY></TABLE><BR>
                        <TABLE cellSpacing=0 cellPadding=0 width=590 border=0>
                          <TBODY>
                          <TR bgColor=#4d81ba>
                            <TD class=arial height=20><B><FONT 
                              color=#ffffff>&nbsp;&nbsp;�YES� OLDU�UNUZ 
                              KURULU�LAR</FONT></B></TD>
                            <TD class=arial align=right><FONT 
                              color=#ffffff>Dernek, meslek odalar�, 
                              kul�pler...&nbsp;&nbsp;</FONT></TD></TR></TBODY></TABLE>
                        <TABLE cellSpacing=0 cellPadding=0 width=590 border=0>
                          <TBODY>
                          <TR>
                            <TD class=arial height=25><B>Kurulu� �smi, 
                              Adresi:</B></TD>
                            <TD class=arial><B>�yelik:</B></TD>
                            <TD class=arial><B>Tarih:</B></TD></TR>
                          <TR>
                            <TD class=arial height=25><INPUT class=input2 
                              maxLength=75 size=40 name=uyekurulus1> </TD>
                            <TD class=arial><INPUT class=input2 maxLength=50 
                              size=30 name=uyekurulus1uyelik> </TD>
                            <TD class=arial><FONT color=#cc0000><SELECT 
                              class=input2 name=uyekurulus1tarih> <OPTION 
                                value=-1 selected>Y�l<OPTION 
                                value=1920>1920</OPTION> <OPTION 
                                value=1921>1921</OPTION> <OPTION 
                                value=1922>1922</OPTION> <OPTION 
                                value=1923>1923</OPTION> <OPTION 
                                value=1924>1924</OPTION> <OPTION 
                                value=1925>1925</OPTION> <OPTION 
                                value=1926>1926</OPTION> <OPTION 
                                value=1927>1927</OPTION> <OPTION 
                                value=1928>1928</OPTION> <OPTION 
                                value=1929>1929</OPTION> <OPTION 
                                value=1930>1930</OPTION> <OPTION 
                                value=1931>1931</OPTION> <OPTION 
                                value=1932>1932</OPTION> <OPTION 
                                value=1933>1933</OPTION> <OPTION 
                                value=1934>1934</OPTION> <OPTION 
                                value=1935>1935</OPTION> <OPTION 
                                value=1936>1936</OPTION> <OPTION 
                                value=1937>1937</OPTION> <OPTION 
                                value=1938>1938</OPTION> <OPTION 
                                value=1939>1939</OPTION> <OPTION 
                                value=1940>1940</OPTION> <OPTION 
                                value=1941>1941</OPTION> <OPTION 
                                value=1942>1942</OPTION> <OPTION 
                                value=1943>1943</OPTION> <OPTION 
                                value=1944>1944</OPTION> <OPTION 
                                value=1945>1945</OPTION> <OPTION 
                                value=1946>1946</OPTION> <OPTION 
                                value=1947>1947</OPTION> <OPTION 
                                value=1948>1948</OPTION> <OPTION 
                                value=1949>1949</OPTION> <OPTION 
                                value=1950>1950</OPTION> <OPTION 
                                value=1951>1951</OPTION> <OPTION 
                                value=1952>1952</OPTION> <OPTION 
                                value=1953>1953</OPTION> <OPTION 
                                value=1954>1954</OPTION> <OPTION 
                                value=1955>1955</OPTION> <OPTION 
                                value=1956>1956</OPTION> <OPTION 
                                value=1957>1957</OPTION> <OPTION 
                                value=1958>1958</OPTION> <OPTION 
                                value=1959>1959</OPTION> <OPTION 
                                value=1960>1960</OPTION> <OPTION 
                                value=1961>1961</OPTION> <OPTION 
                                value=1962>1962</OPTION> <OPTION 
                                value=1963>1963</OPTION> <OPTION 
                                value=1964>1964</OPTION> <OPTION 
                                value=1965>1965</OPTION> <OPTION 
                                value=1966>1966</OPTION> <OPTION 
                                value=1967>1967</OPTION> <OPTION 
                                value=1968>1968</OPTION> <OPTION 
                                value=1969>1969</OPTION> <OPTION 
                                value=1970>1970</OPTION> <OPTION 
                                value=1971>1971</OPTION> <OPTION 
                                value=1972>1972</OPTION> <OPTION 
                                value=1973>1973</OPTION> <OPTION 
                                value=1974>1974</OPTION> <OPTION 
                                value=1975>1975</OPTION> <OPTION 
                                value=1976>1976</OPTION> <OPTION 
                                value=1977>1977</OPTION> <OPTION 
                                value=1978>1978</OPTION> <OPTION 
                                value=1979>1979</OPTION> <OPTION 
                                value=1980>1980</OPTION> <OPTION 
                                value=1981>1981</OPTION> <OPTION 
                                value=1982>1982</OPTION> <OPTION 
                                value=1983>1983</OPTION> <OPTION 
                                value=1984>1984</OPTION> <OPTION 
                                value=1985>1985</OPTION> <OPTION 
                                value=1986>1986</OPTION> <OPTION 
                                value=1987>1987</OPTION> <OPTION 
                                value=1988>1988</OPTION> <OPTION 
                                value=1989>1989</OPTION> <OPTION 
                                value=1990>1990</OPTION> <OPTION 
                                value=1991>1991</OPTION> <OPTION 
                                value=1992>1992</OPTION> <OPTION 
                                value=1993>1993</OPTION> <OPTION 
                                value=1994>1994</OPTION> <OPTION 
                                value=1995>1995</OPTION> <OPTION 
                                value=1996>1996</OPTION> <OPTION 
                                value=1997>1997</OPTION> <OPTION 
                                value=1998>1998</OPTION> <OPTION 
                                value=1999>1999</OPTION> <OPTION 
                                value=2000>2000</OPTION> <OPTION 
                                value=2001>2001</OPTION> <OPTION 
                                value=2002>2002</OPTION> <OPTION 
                                value=2003>2003</OPTION> <OPTION 
                                value=2004>2004</OPTION> <OPTION 
                                value=2005>2005</OPTION></SELECT> </FONT></TD></TR>
                          <TR>
                            <TD class=arial height=25><INPUT class=input2 
                              maxLength=75 size=40 name=uyekurulus2> </TD>
                            <TD class=arial><INPUT class=input2 maxLength=50 
                              size=30 name=uyekurulus2uyelik> </TD>
                            <TD class=arial><FONT color=#cc0000><SELECT 
                              class=input2 name=uyekurulus2tarih> <OPTION 
                                value=-1 selected>Y�l<OPTION 
                                value=1920>1920</OPTION> <OPTION 
                                value=1921>1921</OPTION> <OPTION 
                                value=1922>1922</OPTION> <OPTION 
                                value=1923>1923</OPTION> <OPTION 
                                value=1924>1924</OPTION> <OPTION 
                                value=1925>1925</OPTION> <OPTION 
                                value=1926>1926</OPTION> <OPTION 
                                value=1927>1927</OPTION> <OPTION 
                                value=1928>1928</OPTION> <OPTION 
                                value=1929>1929</OPTION> <OPTION 
                                value=1930>1930</OPTION> <OPTION 
                                value=1931>1931</OPTION> <OPTION 
                                value=1932>1932</OPTION> <OPTION 
                                value=1933>1933</OPTION> <OPTION 
                                value=1934>1934</OPTION> <OPTION 
                                value=1935>1935</OPTION> <OPTION 
                                value=1936>1936</OPTION> <OPTION 
                                value=1937>1937</OPTION> <OPTION 
                                value=1938>1938</OPTION> <OPTION 
                                value=1939>1939</OPTION> <OPTION 
                                value=1940>1940</OPTION> <OPTION 
                                value=1941>1941</OPTION> <OPTION 
                                value=1942>1942</OPTION> <OPTION 
                                value=1943>1943</OPTION> <OPTION 
                                value=1944>1944</OPTION> <OPTION 
                                value=1945>1945</OPTION> <OPTION 
                                value=1946>1946</OPTION> <OPTION 
                                value=1947>1947</OPTION> <OPTION 
                                value=1948>1948</OPTION> <OPTION 
                                value=1949>1949</OPTION> <OPTION 
                                value=1950>1950</OPTION> <OPTION 
                                value=1951>1951</OPTION> <OPTION 
                                value=1952>1952</OPTION> <OPTION 
                                value=1953>1953</OPTION> <OPTION 
                                value=1954>1954</OPTION> <OPTION 
                                value=1955>1955</OPTION> <OPTION 
                                value=1956>1956</OPTION> <OPTION 
                                value=1957>1957</OPTION> <OPTION 
                                value=1958>1958</OPTION> <OPTION 
                                value=1959>1959</OPTION> <OPTION 
                                value=1960>1960</OPTION> <OPTION 
                                value=1961>1961</OPTION> <OPTION 
                                value=1962>1962</OPTION> <OPTION 
                                value=1963>1963</OPTION> <OPTION 
                                value=1964>1964</OPTION> <OPTION 
                                value=1965>1965</OPTION> <OPTION 
                                value=1966>1966</OPTION> <OPTION 
                                value=1967>1967</OPTION> <OPTION 
                                value=1968>1968</OPTION> <OPTION 
                                value=1969>1969</OPTION> <OPTION 
                                value=1970>1970</OPTION> <OPTION 
                                value=1971>1971</OPTION> <OPTION 
                                value=1972>1972</OPTION> <OPTION 
                                value=1973>1973</OPTION> <OPTION 
                                value=1974>1974</OPTION> <OPTION 
                                value=1975>1975</OPTION> <OPTION 
                                value=1976>1976</OPTION> <OPTION 
                                value=1977>1977</OPTION> <OPTION 
                                value=1978>1978</OPTION> <OPTION 
                                value=1979>1979</OPTION> <OPTION 
                                value=1980>1980</OPTION> <OPTION 
                                value=1981>1981</OPTION> <OPTION 
                                value=1982>1982</OPTION> <OPTION 
                                value=1983>1983</OPTION> <OPTION 
                                value=1984>1984</OPTION> <OPTION 
                                value=1985>1985</OPTION> <OPTION 
                                value=1986>1986</OPTION> <OPTION 
                                value=1987>1987</OPTION> <OPTION 
                                value=1988>1988</OPTION> <OPTION 
                                value=1989>1989</OPTION> <OPTION 
                                value=1990>1990</OPTION> <OPTION 
                                value=1991>1991</OPTION> <OPTION 
                                value=1992>1992</OPTION> <OPTION 
                                value=1993>1993</OPTION> <OPTION 
                                value=1994>1994</OPTION> <OPTION 
                                value=1995>1995</OPTION> <OPTION 
                                value=1996>1996</OPTION> <OPTION 
                                value=1997>1997</OPTION> <OPTION 
                                value=1998>1998</OPTION> <OPTION 
                                value=1999>1999</OPTION> <OPTION 
                                value=2000>2000</OPTION> <OPTION 
                                value=2001>2001</OPTION> <OPTION 
                                value=2002>2002</OPTION> <OPTION 
                                value=2003>2003</OPTION> <OPTION 
                                value=2004>2004</OPTION> <OPTION 
                                value=2005>2005</OPTION></SELECT> </FONT></TD></TR>
                          <TR>
                            <TD class=arial height=25><INPUT class=input2 
                              maxLength=75 size=40 name=uyekurulus3> </TD>
                            <TD class=arial><INPUT class=input2 maxLength=50 
                              size=30 name=uyekurulus3uyelik> </TD>
                            <TD class=arial><FONT color=#cc0000><SELECT 
                              class=input2 name=uyekurulus3tarih> <OPTION 
                                value=-1 selected>Y�l<OPTION 
                                value=1920>1920</OPTION> <OPTION 
                                value=1921>1921</OPTION> <OPTION 
                                value=1922>1922</OPTION> <OPTION 
                                value=1923>1923</OPTION> <OPTION 
                                value=1924>1924</OPTION> <OPTION 
                                value=1925>1925</OPTION> <OPTION 
                                value=1926>1926</OPTION> <OPTION 
                                value=1927>1927</OPTION> <OPTION 
                                value=1928>1928</OPTION> <OPTION 
                                value=1929>1929</OPTION> <OPTION 
                                value=1930>1930</OPTION> <OPTION 
                                value=1931>1931</OPTION> <OPTION 
                                value=1932>1932</OPTION> <OPTION 
                                value=1933>1933</OPTION> <OPTION 
                                value=1934>1934</OPTION> <OPTION 
                                value=1935>1935</OPTION> <OPTION 
                                value=1936>1936</OPTION> <OPTION 
                                value=1937>1937</OPTION> <OPTION 
                                value=1938>1938</OPTION> <OPTION 
                                value=1939>1939</OPTION> <OPTION 
                                value=1940>1940</OPTION> <OPTION 
                                value=1941>1941</OPTION> <OPTION 
                                value=1942>1942</OPTION> <OPTION 
                                value=1943>1943</OPTION> <OPTION 
                                value=1944>1944</OPTION> <OPTION 
                                value=1945>1945</OPTION> <OPTION 
                                value=1946>1946</OPTION> <OPTION 
                                value=1947>1947</OPTION> <OPTION 
                                value=1948>1948</OPTION> <OPTION 
                                value=1949>1949</OPTION> <OPTION 
                                value=1950>1950</OPTION> <OPTION 
                                value=1951>1951</OPTION> <OPTION 
                                value=1952>1952</OPTION> <OPTION 
                                value=1953>1953</OPTION> <OPTION 
                                value=1954>1954</OPTION> <OPTION 
                                value=1955>1955</OPTION> <OPTION 
                                value=1956>1956</OPTION> <OPTION 
                                value=1957>1957</OPTION> <OPTION 
                                value=1958>1958</OPTION> <OPTION 
                                value=1959>1959</OPTION> <OPTION 
                                value=1960>1960</OPTION> <OPTION 
                                value=1961>1961</OPTION> <OPTION 
                                value=1962>1962</OPTION> <OPTION 
                                value=1963>1963</OPTION> <OPTION 
                                value=1964>1964</OPTION> <OPTION 
                                value=1965>1965</OPTION> <OPTION 
                                value=1966>1966</OPTION> <OPTION 
                                value=1967>1967</OPTION> <OPTION 
                                value=1968>1968</OPTION> <OPTION 
                                value=1969>1969</OPTION> <OPTION 
                                value=1970>1970</OPTION> <OPTION 
                                value=1971>1971</OPTION> <OPTION 
                                value=1972>1972</OPTION> <OPTION 
                                value=1973>1973</OPTION> <OPTION 
                                value=1974>1974</OPTION> <OPTION 
                                value=1975>1975</OPTION> <OPTION 
                                value=1976>1976</OPTION> <OPTION 
                                value=1977>1977</OPTION> <OPTION 
                                value=1978>1978</OPTION> <OPTION 
                                value=1979>1979</OPTION> <OPTION 
                                value=1980>1980</OPTION> <OPTION 
                                value=1981>1981</OPTION> <OPTION 
                                value=1982>1982</OPTION> <OPTION 
                                value=1983>1983</OPTION> <OPTION 
                                value=1984>1984</OPTION> <OPTION 
                                value=1985>1985</OPTION> <OPTION 
                                value=1986>1986</OPTION> <OPTION 
                                value=1987>1987</OPTION> <OPTION 
                                value=1988>1988</OPTION> <OPTION 
                                value=1989>1989</OPTION> <OPTION 
                                value=1990>1990</OPTION> <OPTION 
                                value=1991>1991</OPTION> <OPTION 
                                value=1992>1992</OPTION> <OPTION 
                                value=1993>1993</OPTION> <OPTION 
                                value=1994>1994</OPTION> <OPTION 
                                value=1995>1995</OPTION> <OPTION 
                                value=1996>1996</OPTION> <OPTION 
                                value=1997>1997</OPTION> <OPTION 
                                value=1998>1998</OPTION> <OPTION 
                                value=1999>1999</OPTION> <OPTION 
                                value=2000>2000</OPTION> <OPTION 
                                value=2001>2001</OPTION> <OPTION 
                                value=2002>2002</OPTION> <OPTION 
                                value=2003>2003</OPTION> <OPTION 
                                value=2004>2004</OPTION> <OPTION 
                                value=2005>2005</OPTION></SELECT> 
                          </FONT></TD></TR></TBODY></TABLE><BR>
                        <TABLE cellSpacing=0 cellPadding=0 width=590 border=0>
                          <TBODY>
                          <TR bgColor=#4d81ba>
                            <TD class=arial height=20><B><FONT 
                              color=#ffffff>&nbsp;&nbsp;HAKKINIZDA B�LG� 
                              ALINAB�LECEK K���LER</FONT></B></TD></TR>
                          <TR>
                            <TD class=arial height=55><B>Referanslar:</B> �lk 
                              b�l�me �al��t���n�z veya �al��makta oldu�unuz 
                              kurumdan y�netici/amriniz, ikinci b�l�me e�itim 
                              s�reciniz s�ras�nda hakk�n�zda bilgi sahibi olan 
                              ki�i, son b�l�me ise sizin tercih etti�iniz, 
                              hakk�n�zda t�m bilgileri alabilece�imiz ki�inin 
                              isim, adres ve telefon numaralar�n� 
                          yaz�n�z.</TD></TR></TBODY></TABLE>
                        <HR align=left width=590 color=#d8d8d8 noShade SIZE=1>

                        <TABLE cellSpacing=0 cellPadding=0 width=590 border=0>
                          <TBODY>
                          <TR>
                            <TD class=arial height=25>&nbsp;</TD>
                            <TD class=arial height=25><B>Amiriniz / 
                              Y�neticiniz</B></TD>
                            <TD class=arial><B>E�itmen / Akademisyen</B></TD>
                            <TD class=arial><B>Sizin Se�ti�iniz Ki�i</B></TD></TR>
                          <TR>
                            <TD class=arial height=25><B>Ad� Soyad�:</B></TD>
                            <TD class=arial height=25><INPUT class=input2 
                              maxLength=30 size=25 name=amirad> </TD>
                            <TD class=arial><INPUT class=input2 maxLength=30 
                              size=25 name=egitmenad> </TD>
                            <TD class=arial><INPUT class=input2 maxLength=30 
                              size=25 name=sectiginizad> </TD></TR>
                          <TR>
                            <TD class=arial height=25><B>Adres:</B></TD>
                            <TD class=arial height=25><INPUT class=input2 
                              maxLength=150 size=25 name=amiradres> </TD>
                            <TD class=arial><INPUT class=input2 maxLength=100 
                              size=25 name=egitmenadres> </TD>
                            <TD class=arial><INPUT class=input2 maxLength=100 
                              size=25 name=sectiginizadres> </TD></TR>
                          <TR>
                            <TD class=arial height=25><B>Telefon:</B></TD>
                            <TD class=arial height=25><INPUT class=input2 
                              maxLength=15 size=25 name=amirtelefon> </TD>
                            <TD class=arial><INPUT class=input2 maxLength=15 
                              size=25 name=egitmentelefon> </TD>
                            <TD class=arial><INPUT class=input2 maxLength=15 
                              size=25 name=sectiginiztelefon> 
                        </TD></TR></TBODY></TABLE>
                        <HR align=left width=590 color=#d8d8d8 noShade SIZE=1>

                        <TABLE cellSpacing=0 cellPadding=0 width=590 border=0>
                          <TBODY>
                          <TR>
                            <TD class=arial><B><BR>Bu formdaki bilgiler 
                              tamamen gizli 
tutulacakt�r.</B></TD></TR></TBODY></TABLE>
                        <HR align=left width=590 color=#d8d8d8 noShade SIZE=1>
                        <INPUT type=image height=19 width=56 
                        src="images/gonder.gif" 
                        value=1 border=0 name=Save> 
                  </TD></TR></FORM></TBODY></TABLE><BR></TD></TR></TBODY></TABLE></BODY></HTML>