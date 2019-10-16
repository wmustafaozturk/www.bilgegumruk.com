<HTML><HEAD><TITLE></TITLE>
<LINK 
href="styleform.css" 
type=text/css rel=stylesheet>
<SCRIPT language=javascript>
	//Text alanlarýný limitlemek için
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
                      <TD class=arial>Ýnsan Kaynaklarý Baþvuru Formu</TD></TR></TBODY></TABLE>
                  <HR align=left width=590 color=#d8d8d8 noShade SIZE=1>

                  <script type="text/javascript">
						function checkIKForm(){
							if(IKForm.bolum.value==""){alert("Baþvurmak istediðiniz bölümü seçiniz.");IKForm.bolum.focus();}
							else if(IKForm.pozisyon.value==""){alert("Baþvurmak istediðiniz pozisyonu giriniz.");IKForm.pozisyon.focus();}
							else if(IKForm.ad.value==""){alert("Adýnýzý giriniz.");IKForm.ad.focus();}
							else if(IKForm.soyad.value==""){alert("Soyadýnýzý giriniz.");IKForm.soyad.focus();}
							else if(IKForm.dogumyeri.value==""){alert("Doðum yerinizi giriniz");IKForm.dogumyeri.focus();}
							else if(IKForm.gun.value=="" || IKForm.ay.value=="" || IKForm.yil.value==""){alert("Doðum tarihinizi giriniz.");IKForm.gun.focus();}
							else if(IKForm.adres.value==""){alert("Adresinizi giriniz.");IKForm.adres.focus();}
							else if(IKForm.tel1.value=="" && IKForm.tel2.value=="" && IKForm.email.value==""){alert("Size ulaþabilmemiz için telefon,cep telefonu ve mail adresi bilgilerinden en az birini giriniz.");IKForm.tel1.focus();}
							else if(IKForm.bedenselozur0.value=="" && IKForm.bedenselozur1.value=="" && IKForm.bedenselozur2.value=="" && IKForm.bedenselozur3.value=="" && IKForm.bedenselozur4.value=="" && IKForm.bedenselozur5.value==""){alert("Lütfen bedensel özür ile ilgili soruyu yanýtlayýnýz.");IKForm.bedenselozur0.focus();}
							
							else if((IKForm.tahsil.value=="1" || IKForm.tahsil.value=="2" || IKForm.tahsil.value=="3" || IKForm.tahsil.value=="4") && IKForm.ilkogretim.value==""){alert("Ýlköðretim eðitiminizi aldýðýnýz kurumun adýný ve adresini belirtiniz.");IKForm.ilkogretim.focus();}
							else if((IKForm.tahsil.value=="1" || IKForm.tahsil.value=="2" || IKForm.tahsil.value=="3" || IKForm.tahsil.value=="4") && IKForm.ilkogretimgiris.value=="-1"){alert("Ýlköðretim eðitiminize baþladýðýnýz yýlý belirtiniz.");IKForm.ilkogretimgiris.focus();}
							else if((IKForm.tahsil.value=="1" || IKForm.tahsil.value=="2" || IKForm.tahsil.value=="3" || IKForm.tahsil.value=="4") && IKForm.ilkogretimmezuniyet.value=="-1"){alert("Ýlköðretim eðitiminizi tamamladýðýnýz yýlý belirtiniz.");IKForm.ilkogretimmezuniyet.focus();}

							else if((IKForm.tahsil.value=="2" || IKForm.tahsil.value=="3" || IKForm.tahsil.value=="4") && IKForm.lise.value==""){alert("Lise eðitiminizi aldýðýnýz kurumun adýný ve adresini belirtiniz.");IKForm.lise.focus();}
							else if((IKForm.tahsil.value=="2" || IKForm.tahsil.value=="3" || IKForm.tahsil.value=="4") && IKForm.lisegiris.value=="-1"){alert("Lise eðitiminize baþladýðýnýz yýlý belirtiniz.");IKForm.lisegiris.focus();}
							else if((IKForm.tahsil.value=="2" || IKForm.tahsil.value=="3" || IKForm.tahsil.value=="4") && IKForm.lisemezuniyet.value=="-1"){alert("Lise eðitiminizi tamamladýðýnýz yýlý belirtiniz.");IKForm.lisemezuniyet.focus();}

							else if((IKForm.tahsil.value=="3" || IKForm.tahsil.value=="4") && IKForm.universite.value==""){alert("Üniversite eðitiminizi aldýðýnýz kurumun adýný ve adresini belirtiniz.");IKForm.universite.focus();}
							else if((IKForm.tahsil.value=="3" || IKForm.tahsil.value=="4") && IKForm.universitegiris.value=="-1"){alert("Üniversite eðitiminize baþladýðýnýz yýlý belirtiniz.");IKForm.universitegiris.focus();}
							else if((IKForm.tahsil.value=="3" || IKForm.tahsil.value=="4") && IKForm.universitemezuniyet.value=="-1"){alert("Üniversite eðitiminizi tamamladýðýnýz yýlý belirtiniz.");IKForm.universitemezuniyet.focus();}

							else if(IKForm.tahsil.value=="4" && IKForm.doktora.value==""){alert("Yüksek Lisans/Doktora eðitiminizi aldýðýnýz kurumun adýný ve adresini belirtiniz.");IKForm.doktora.focus();}
							else if(IKForm.tahsil.value=="4" && IKForm.doktoragiris.value=="-1"){alert("Yüksek Lisans/Doktora eðitiminize baþladýðýnýz yýlý belirtiniz.");IKForm.doktoragiris.focus();}
							else if(IKForm.tahsil.value=="4" && IKForm.doktoramezuniyet.value=="-1"){alert("Yüksek Lisans/Doktora eðitiminizi tamamladýðýnýz yýlý belirtiniz.");IKForm.doktoramezuniyet.focus();}
					
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
                              color=#ffffff>&nbsp;&nbsp;KÝÞÝSEL 
                              BÝLGÝLER</FONT></B></TD>
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
                            <TD class=arial height=25><B>Doðum Yeri:</B></TD>
                            <TD class=arial><INPUT class=input2 maxLength=30 
                              size=40 name=dogumyeri> </TD></TR>
                          <TR>
                            <TD class=arial height=25><B>Doðum Tarihi:</B></TD>
                            <TD class=arial><FONT color=#cc0000><SELECT 
                              class=input2 name=gun> <OPTION 
                                selected>Gün<OPTION value=1>1<OPTION 
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
                                value=2>Þubat<OPTION value=3>Mart<OPTION 
                                value=4>Nisan<OPTION value=5>Mayýs<OPTION 
                                value=6>Haziran<OPTION value=7>Temmuz<OPTION 
                                value=8>Aðustos<OPTION value=9>Eylül<OPTION 
                                value=10>Ekim<OPTION value=11>Kasým<OPTION 
                                value=12>Aralýk</OPTION></SELECT> <SELECT 
                              class=input2 name=yil> <OPTION 
                                selected>Yýl<OPTION value=1992>1992<OPTION 
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
                                value=Kadýn name=cinsiyet> </TD>
                                <TD 
                          class=arial>Kadýn</TD></TR></TBODY></TABLE></TD></TR>
                          <TR>
                            <TD class=arial height=25><B>Medeni Durum:</B></TD>
                            <TD class=arial><INPUT class=input2 maxLength=19 
                              size=40 name=medenidurum> </TD></TR>
                          <TR>
                            <TD class=arial height=25><B>Sürekli Adres:</B></TD>
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
                            <TD class=arial height=25><B>Askerliðinizi 
                              Yapmadýysanýz <BR>Nedenini Yazýnýz: </B></TD>
                            <TD class=arial><INPUT class=input2 maxLength=40 
                              size=40 name=askerlikyapmamasebebi> 
                        </TD></TR></TBODY></TABLE>
                        <HR align=left width=590 color=#d8d8d8 noShade SIZE=1>

                        <TABLE cellSpacing=0 cellPadding=0 width=590 border=0>
                          <TBODY>
                          <TR>
                            <TD class=arial><B>Aile Durumu</B></TD>
                            <TD class=arial>Adý Soyadý:</TD>
                            <TD class=arial>Doðum Yeri &amp; Yýlý:</TD>
                            <TD class=arial>Öðrenim Durumu:</TD>
                            <TD class=arial>Mesleði, Ýþyeri:</TD>
                            <TD class=arial>Bakmakla Yükümlü 
                            <BR>Olduklarýnýz:</TD></TR>
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
                            <TD class=arial><B>Babanýzýn </B></TD>
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
                            <TD class=arial><B>Eþinizin </B></TD>
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
                            <TD class=arial><B>Çocuðunuzun </B></TD>
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
                            <TD class=arial><B>Çocuðunuzun </B></TD>
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
                            <TD class=arial><B>Çocuðunuzun </B></TD>
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
                              color=#ffffff>&nbsp;&nbsp;FÝZÝKSEL 
                              BÝLGÝLER</FONT></B></TD>
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
                            <TD class=arial height=25><B>Geçirmiþ olduðunuz, 
                              süregelen önemli <BR>rahatsýzlýklar ve týbbi 
                              operasyonlar var mý?</B></TD>
                            <TD class=arial><INPUT class=input2 maxLength=30 
                              size=40 name=gecmisoperasyon> </TD></TR>
                          <TR>
                            <TD class=arial height=25><B>Herhangi bir bedensel 
                              özürünüz var mý?</B></TD>
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
                                value=Konuþma name=bedenselozur4> </TD>
                                <TD class=arial>Konuþma</TD>
                                <TD class=arial width=10><INPUT type=checkbox 
                                value=Diðer name=bedenselozur5> </TD>
                                <TD 
                          class=arial>Diðer</TD></TR></TBODY></TABLE></TD></TR>
                          <TR>
                            <TD class=arial height=25><B>Acil durumlarda 
                              baþvurulacak kiþinin <BR>Adý Soyadý, Telefonu, 
                              Adresi:</B></TD>
                            <TD class=arial><INPUT class=input2 maxLength=100 
                              size=40 name=acilteladres> 
</TD></TR></TBODY></TABLE><BR>
                        <TABLE cellSpacing=0 cellPadding=0 width=590 border=0>
                          <TBODY>
                          <TR bgColor=#4d81ba>
                            <TD class=arial width=215 height=20><B><FONT 
                              color=#ffffff>&nbsp;&nbsp;EÐÝTÝM 
                              BÝLGÝLERÝ</FONT></B></TD>
                            <TD class=arial width=195>&nbsp;</TD>
                            <TD class=arial width=80>&nbsp;</TD>
                            <TD class=arial width=100>&nbsp;</TD></TR>
                          <TR>
                            <TD class=arial height=30><B>En Son Bitirdiðiniz 
                              Okul: </B></TD>
                            <TD class=arial height=30><SELECT name=tahsil> 
                                <OPTION value=Ýlköðretim selected>Ýlköðretim</OPTION> 
                                <OPTION value=Lise>Lise</OPTION> <OPTION 
                                value=Üniversite>Üniversite</OPTION> <OPTION 
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
                            <TD class=arial><B>Okul / Bölüm:</B></TD>
                            <TD class=arial><B>Giriþ Tarihi:</B></TD>
                            <TD class=arial><B>Mezuniyet Tarihi:</B></TD></TR>
                          <TR>
                            <TD class=arial height=25><B>Ýlköðretim:</B></TD>
                            <TD class=arial><INPUT class=input2 id=ilkogretim 
                              maxLength=50 size=30 name=ilkogretim></TD>
                            <TD class=arial><FONT color=#cc0000><SELECT 
                              class=input2 id=ilkogretimgiris 
                              name=ilkogretimgiris> <OPTION value=-1 
                                selected>Yýl</OPTION> <OPTION 
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
                                selected>Yýl</OPTION> <OPTION 
                                value=-2>Terk</OPTION> <OPTION 
                                value=-3>Öðrenci</OPTION> <OPTION 
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
                                <OPTION value=-1 selected>Yýl</OPTION> <OPTION 
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
                                <OPTION value=-1 selected>Yýl</OPTION> <OPTION 
                                value=-2>Terk</OPTION> <OPTION 
                                value=-3>Öðrenci</OPTION> <OPTION 
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
                            <TD class=arial height=25><B>Üniversite:</B></TD>
                            <TD class=arial><INPUT class=input2 id=universite 
                              maxLength=50 size=30 name=universite> </TD>
                            <TD class=arial><FONT color=#cc0000><SELECT 
                              class=input2 id=universitegiris 
                              name=universitegiris> <OPTION value=-1 
                                selected>Yýl</OPTION> <OPTION 
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
                                selected>Yýl</OPTION> <OPTION 
                                value=-2>Terk</OPTION> <OPTION 
                                value=-3>Öðrenci</OPTION> <OPTION 
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
                            <TD class=arial height=25><B>Yüksek Lisans / 
                              Doktora / Uzmanlýk:</B></TD>
                            <TD class=arial><INPUT class=input2 id=doktora 
                              maxLength=50 size=30 name=doktora> </TD>
                            <TD class=arial><FONT color=#cc0000><SELECT 
                              class=input2 id=doktoragiris name=doktoragiris> 
                                <OPTION value=-1 selected>Yýl</OPTION> <OPTION 
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
                                selected>Yýl</OPTION> <OPTION 
                                value=-2>Terk</OPTION> <OPTION 
                                value=-3>Öðrenci</OPTION> <OPTION 
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
                            <TD class=arial height=25><B>Yabancý Dil:</B></TD>
                            <TD class=arial width=240><B>Konuþma</B></TD>
                            <TD class=arial width=230><B>Yazma</B></TD></TR>
                          <TR>
                            <TD class=arial height=25><B>Ýngilizce:</B></TD>
                            <TD class=arial>
                              <TABLE cellSpacing=0 cellPadding=0 width=230 
                              border=0>
                                <TBODY>
                                <TR>
                                <TD class=arial width=10><INPUT type=radio 
                                value=Çok Ýyi name=ingkonusma> </TD>
                                <TD class=arial>Çok Ýyi</TD>
                                <TD class=arial width=10><INPUT type=radio 
                                value=Ýyi name=ingkonusma> </TD>
                                <TD class=arial>Ýyi</TD>
                                <TD class=arial width=10><INPUT type=radio 
                                value=Orta name=ingkonusma> </TD>
                                <TD class=arial>Orta</TD>
                                <TD class=arial width=10><INPUT type=radio 
                                value=Zayýf name=ingkonusma> </TD>
                                <TD class=arial>Zayýf</TD></TR></TBODY></TABLE></TD>
                            <TD class=arial>
                              <TABLE cellSpacing=0 cellPadding=0 width=230 
                              border=0>
                                <TBODY>
                                <TR>
                                <TD class=arial width=10><INPUT type=radio 
                                value=Çok Ýyi name=ingyazma> </TD>
                                <TD class=arial>Çok Ýyi</TD>
                                <TD class=arial width=10><INPUT type=radio 
                                value=Ýyi name=ingyazma> </TD>
                                <TD class=arial>Ýyi</TD>
                                <TD class=arial width=10><INPUT type=radio 
                                value=Orta name=ingyazma> </TD>
                                <TD class=arial>Orta</TD>
                                <TD class=arial width=10><INPUT type=radio 
                                value=Zayýf name=ingyazma> </TD>
                                <TD 
                          class=arial>Zayýf</TD></TR></TBODY></TABLE></TD></TR>
                          <TR>
                            <TD class=arial height=25><B>Almanca:</B></TD>
                            <TD class=arial>
                              <TABLE cellSpacing=0 cellPadding=0 width=230 
                              border=0>
                                <TBODY>
                                <TR>
                                <TD class=arial width=10><INPUT type=radio 
                                value=Çok iyi name=almkonusma> </TD>
                                <TD class=arial>Çok Ýyi</TD>
                                <TD class=arial width=10><INPUT type=radio 
                                value=Ýyi name=almkonusma> </TD>
                                <TD class=arial>Ýyi</TD>
                                <TD class=arial width=10><INPUT type=radio 
                                value=Orta name=almkonusma> </TD>
                                <TD class=arial>Orta</TD>
                                <TD class=arial width=10><INPUT type=radio 
                                value=Zayýf name=almkonusma> </TD>
                                <TD class=arial>Zayýf</TD></TR></TBODY></TABLE></TD>
                            <TD class=arial>
                              <TABLE cellSpacing=0 cellPadding=0 width=230 
                              border=0>
                                <TBODY>
                                <TR>
                                <TD class=arial width=10><INPUT type=radio 
                                value=Çok Ýyi name=almyazma> </TD>
                                <TD class=arial>Çok Ýyi</TD>
                                <TD class=arial width=10><INPUT type=radio 
                                value=Ýyi name=almyazma> </TD>
                                <TD class=arial>Ýyi</TD>
                                <TD class=arial width=10><INPUT type=radio 
                                value=Orta name=almyazma> </TD>
                                <TD class=arial>Orta</TD>
                                <TD class=arial width=10><INPUT type=radio 
                                value=Zayýf name=almyazma> </TD>
                                <TD 
                          class=arial>Zayýf</TD></TR></TBODY></TABLE></TD></TR>
                          <TR>
                            <TD class=arial height=25><B>Fransýzca:</B></TD>
                            <TD class=arial>
                              <TABLE cellSpacing=0 cellPadding=0 width=230 
                              border=0>
                                <TBODY>
                                <TR>
                                <TD class=arial width=10><INPUT type=radio 
                                value=Çok iyi name=frakonusma> </TD>
                                <TD class=arial>Çok Ýyi</TD>
                                <TD class=arial width=10><INPUT type=radio 
                                value=Ýyi name=frakonusma> </TD>
                                <TD class=arial>Ýyi</TD>
                                <TD class=arial width=10><INPUT type=radio 
                                value=Orta name=frakonusma> </TD>
                                <TD class=arial>Orta</TD>
                                <TD class=arial width=10><INPUT type=radio 
                                value=Zayýf name=frakonusma> </TD>
                                <TD class=arial>Zayýf</TD></TR></TBODY></TABLE></TD>
                            <TD class=arial>
                              <TABLE cellSpacing=0 cellPadding=0 width=230 
                              border=0>
                                <TBODY>
                                <TR>
                                <TD class=arial width=10><INPUT type=radio 
                                value=Çok Ýyi name=frayazma> </TD>
                                <TD class=arial>Çok Ýyi</TD>
                                <TD class=arial width=10><INPUT type=radio 
                                value=Ýyi name=frayazma> </TD>
                                <TD class=arial>Ýyi</TD>
                                <TD class=arial width=10><INPUT type=radio 
                                value=Orta name=frayazma> </TD>
                                <TD class=arial>Orta</TD>
                                <TD class=arial width=10><INPUT type=radio 
                                value=Zayýf name=frayazma> </TD>
                                <TD 
                          class=arial>Zayýf</TD></TR></TBODY></TABLE></TD></TR>
                          <TR>
                            <TD class=arial height=25><B>Diðer: <INPUT 
                              class=input2 maxLength=15 size=10 name=digerdil> 
                              </B></TD>
                            <TD class=arial>
                              <TABLE cellSpacing=0 cellPadding=0 width=230 
                              border=0>
                                <TBODY>
                                <TR>
                                <TD class=arial width=10><INPUT type=radio 
                                value=3 name=digerkonusma> </TD>
                                <TD class=arial>Çok Ýyi</TD>
                                <TD class=arial width=10><INPUT type=radio 
                                value=2 name=digerkonusma> </TD>
                                <TD class=arial>Ýyi</TD>
                                <TD class=arial width=10><INPUT type=radio 
                                value=1 name=digerkonusma> </TD>
                                <TD class=arial>Orta</TD>
                                <TD class=arial width=10><INPUT type=radio 
                                value=0 name=digerkonusma> </TD>
                                <TD class=arial>Zayýf</TD></TR></TBODY></TABLE></TD>
                            <TD class=arial>
                              <TABLE cellSpacing=0 cellPadding=0 width=230 
                              border=0>
                                <TBODY>
                                <TR>
                                <TD class=arial width=10><INPUT type=radio 
                                value=3 name=digeryazma> </TD>
                                <TD class=arial>Çok Ýyi</TD>
                                <TD class=arial width=10><INPUT type=radio 
                                value=2 name=digeryazma> </TD>
                                <TD class=arial>Ýyi</TD>
                                <TD class=arial width=10><INPUT type=radio 
                                value=1 name=digeryazma> </TD>
                                <TD class=arial>Orta</TD>
                                <TD class=arial width=10><INPUT type=radio 
                                value=0 name=digeryazma> </TD>
                                <TD 
                          class=arial>Zayýf</TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE>
                        <HR align=left width=590 color=#d8d8d8 noShade SIZE=1>

                        <TABLE cellSpacing=0 cellPadding=0 width=590 border=0>
                          <TBODY>
                          <TR>
                            <TD class=arial height=25><B>Katýldýðýnýz kurs, 
                              seminer, <BR>sertifika programlarý:</B></TD>
                            <TD class=arial><TEXTAREA class=input2 onkeydown=textareaLimiter(this.form.kursseminer,this.form.remLen2,200); onkeyup=textareaLimiter(this.form.kursseminer,this.form.remLen2,200); name=kursseminer rows=3 wrap=VIRTUAL cols=40></TEXTAREA> 
                              <INPUT class=input3 readOnly maxLength=3 size=4 
                              value=200 name=remLen2> </TD></TR>
                          <TR>
                            <TD class=arial height=25><B>Bilgisayar kullanýyor 
                              musunuz?</B></TD>
                            <TD class=arial>
                              <TABLE cellSpacing=0 cellPadding=0 border=0>
                                <TBODY>
                                <TR>
                                <TD class=arial width=10><INPUT type=radio 
                                value=Evet name=bilgisayar> </TD>
                                <TD class=arial>Evet</TD>
                                <TD class=arial width=10><INPUT type=radio 
                                value=Hayýr name=bilgisayar> </TD>
                                <TD 
                          class=arial>Hayýr</TD></TR></TBODY></TABLE></TD></TR>
                          <TR>
                            <TD class=arial height=25><B>Evet ise 
                              kullandýðýnýz programlar:</B></TD>
                            <TD class=arial><TEXTAREA class=input2 onkeydown=textareaLimiter(this.form.program,this.form.remLen3,200); onkeyup=textareaLimiter(this.form.program,this.form.remLen3,200); name=program rows=3 wrap=VIRTUAL cols=40></TEXTAREA> 
                              <INPUT class=input3 readOnly maxLength=3 size=4 
                              value=200 name=remLen3> </TD></TR></TBODY></TABLE><BR>
                        <TABLE cellSpacing=0 cellPadding=0 width=590 border=0>
                          <TBODY>
                          <TR bgColor=#4d81ba>
                            <TD class=arial height=20><B><FONT 
                              color=#ffffff>&nbsp;&nbsp;ÝÞ TECRÜBESÝ 
                            </FONT></B></TD>
                            <TD class=arial align=right><FONT 
                              color=#ffffff>Lütfen son iþ tecrübesi baþta olmak 
                              üzere 
                        belirtiniz.&nbsp;&nbsp;</FONT></TD></TR></TBODY></TABLE>
                        <TABLE cellSpacing=0 cellPadding=0 width=590 border=0>
                          <TBODY>
                          <TR>
                            <TD class=arial height=25><B>Kuruluþ Ýsmi, 
                              Adresi:</B></TD>
                            <TD class=arial><B>Giriþ Tarihi:</B></TD>
                            <TD class=arial><B>Ayrýlýþ Tarihi:</B></TD>
                            <TD class=arial><B>Pozisyon:</B></TD>
                            <TD class=arial><B>Ayrýlýþ Nedeni:</B></TD></TR>
                          <TR>
                            <TD class=arial height=25><INPUT class=input2 
                              maxLength=75 size=30 name=kurulus1> </TD>
                            <TD class=arial><FONT color=#cc0000><SELECT 
                              class=input2 name=kurulus1giris> <OPTION 
                                value=-1 selected>Yýl<OPTION 
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
                                value=-1 selected>Yýl<OPTION 
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
                                value=-1 selected>Yýl<OPTION 
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
                                value=-1 selected>Yýl<OPTION 
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
                                value=-1 selected>Yýl<OPTION 
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
                                value=-1 selected>Yýl<OPTION 
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
                              color=#ffffff>&nbsp;&nbsp;DÝÐER BÝLGÝLER 
                              </FONT></B></TD>
                            <TD class=arial bgColor=#4d81ba 
                          height=20>&nbsp;</TD></TR>
                          <TR>
                            <TD class=arial height=25><B>Bizi nereden duydunuz?</B></TD>
                            <TD class=arial height=20><INPUT class=input2 
                              maxLength=50 size=30 name=asmnerdenduydun> </TD></TR>
                          <TR>
                            <TD class=arial height=25><B>Bizde 
                              çalýþan akraba ya da <BR>tanýdýðýnýz var 
mý?</B></TD>
                            <TD class=arial height=20>
                              <TABLE cellSpacing=0 cellPadding=0 border=0>
                                <TBODY>
                                <TR>
                                <TD class=arial width=10><INPUT type=radio 
                                value=Evet name=anadoluakraba> </TD>
                                <TD class=arial>Evet</TD>
                                <TD class=arial width=10><INPUT type=radio 
                                value=Hayýr name=anadoluakraba> </TD>
                                <TD 
                          class=arial>Hayýr</TD></TR></TBODY></TABLE></TD></TR>
                          <TR>
                            <TD class=arial height=25><B>Varsa Adý 
                            Soyadý:</B></TD>
                            <TD class=arial height=20><INPUT class=input2 
                              maxLength=30 size=30 name=varsaad> </TD></TR>
                          <TR>
                            <TD class=arial height=25><B>Ýþ yerimizden talep 
                              ettiðiniz ücret:</B> </TD>
                            <TD class=arial height=20><INPUT class=input2 
                              maxLength=20 size=30 name=ucret> </TD></TR>
                          <TR>
                            <TD class=arial height=25><B>Sigara kullanýyor 
                              musunuz?</B></TD>
                            <TD class=arial height=20>
                              <TABLE cellSpacing=0 cellPadding=0 border=0>
                                <TBODY>
                                <TR>
                                <TD class=arial width=10><INPUT type=radio 
                                value=Evet name=sigara> </TD>
                                <TD class=arial>Evet</TD>
                                <TD class=arial width=10><INPUT type=radio 
                                value=Hayýr name=sigara> </TD>
                                <TD 
                          class=arial>Hayýr</TD></TR></TBODY></TABLE></TD></TR>
                          <TR>
                            <TD class=arial height=25><B>Seyahat etmeye engel 
                              bir durumunuz var mý?</B></TD>
                            <TD class=arial height=20>
                              <TABLE cellSpacing=0 cellPadding=0 border=0>
                                <TBODY>
                                <TR>
                                <TD class=arial width=10><INPUT type=radio 
                                value=Evet name=seyahatengeli> </TD>
                                <TD class=arial>Evet</TD>
                                <TD class=arial width=10><INPUT type=radio 
                                value=Hayýr name=seyahatengeli></TD>
                                <TD 
                          class=arial>Hayýr</TD></TR></TBODY></TABLE></TD></TR>
                          <TR>
                            <TD class=arial height=25><B>Mesai saatleri 
                              dýþýnda çalýþabilir misiniz?</B> </TD>
                            <TD class=arial height=20>
                              <TABLE cellSpacing=0 cellPadding=0 border=0>
                                <TBODY>
                                <TR>
                                <TD class=arial width=10><INPUT type=radio 
                                value=Evet name=mesaidisi> </TD>
                                <TD class=arial>Evet</TD>
                                <TD class=arial width=10><INPUT type=radio 
                                value=Hayýr name=mesaidisi> </TD>
                                <TD 
                          class=arial>Hayýr</TD></TR></TBODY></TABLE></TD></TR>
                          <TR>
                            <TD class=arial height=25><B>Vardiyalý çalýþabilir 
                              misiniz?</B></TD>
                            <TD class=arial height=20>
                              <TABLE cellSpacing=0 cellPadding=0 border=0>
                                <TBODY>
                                <TR>
                                <TD class=arial width=10><INPUT type=radio 
                                value=Evet name=vardiya> </TD>
                                <TD class=arial>Evet</TD>
                                <TD class=arial width=10><INPUT type=radio 
                                value=Hayýr name=vardiya> </TD>
                                <TD 
                          class=arial>Hayýr</TD></TR></TBODY></TABLE></TD></TR>
                          <TR>
                            <TD class=arial height=25><B>Sürücü ehliyetiniz 
                              varsa sýnýfý:</B> </TD>
                            <TD class=arial height=20><INPUT class=input2 
                              maxLength=20 size=30 name=ehliyetsinifi> 
                          </TD></TR></TBODY></TABLE><BR>
                        <TABLE cellSpacing=0 cellPadding=0 width=590 border=0>
                          <TBODY>
                          <TR bgColor=#4d81ba>
                            <TD class=arial height=20><B><FONT 
                              color=#ffffff>&nbsp;&nbsp;ÜYESÝ OLDUÐUNUZ 
                              KURULUÞLAR</FONT></B></TD>
                            <TD class=arial align=right><FONT 
                              color=#ffffff>Dernek, meslek odalarý, 
                              kulüpler...&nbsp;&nbsp;</FONT></TD></TR></TBODY></TABLE>
                        <TABLE cellSpacing=0 cellPadding=0 width=590 border=0>
                          <TBODY>
                          <TR>
                            <TD class=arial height=25><B>Kuruluþ Ýsmi, 
                              Adresi:</B></TD>
                            <TD class=arial><B>Üyelik:</B></TD>
                            <TD class=arial><B>Tarih:</B></TD></TR>
                          <TR>
                            <TD class=arial height=25><INPUT class=input2 
                              maxLength=75 size=40 name=uyekurulus1> </TD>
                            <TD class=arial><INPUT class=input2 maxLength=50 
                              size=30 name=uyekurulus1uyelik> </TD>
                            <TD class=arial><FONT color=#cc0000><SELECT 
                              class=input2 name=uyekurulus1tarih> <OPTION 
                                value=-1 selected>Yýl<OPTION 
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
                                value=-1 selected>Yýl<OPTION 
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
                                value=-1 selected>Yýl<OPTION 
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
                              color=#ffffff>&nbsp;&nbsp;HAKKINIZDA BÝLGÝ 
                              ALINABÝLECEK KÝÞÝLER</FONT></B></TD></TR>
                          <TR>
                            <TD class=arial height=55><B>Referanslar:</B> Ýlk 
                              bölüme çalýþtýðýnýz veya çalýþmakta olduðunuz 
                              kurumdan yönetici/amriniz, ikinci bölüme eðitim 
                              süreciniz sýrasýnda hakkýnýzda bilgi sahibi olan 
                              kiþi, son bölüme ise sizin tercih ettiðiniz, 
                              hakkýnýzda tüm bilgileri alabileceðimiz kiþinin 
                              isim, adres ve telefon numaralarýný 
                          yazýnýz.</TD></TR></TBODY></TABLE>
                        <HR align=left width=590 color=#d8d8d8 noShade SIZE=1>

                        <TABLE cellSpacing=0 cellPadding=0 width=590 border=0>
                          <TBODY>
                          <TR>
                            <TD class=arial height=25>&nbsp;</TD>
                            <TD class=arial height=25><B>Amiriniz / 
                              Yöneticiniz</B></TD>
                            <TD class=arial><B>Eðitmen / Akademisyen</B></TD>
                            <TD class=arial><B>Sizin Seçtiðiniz Kiþi</B></TD></TR>
                          <TR>
                            <TD class=arial height=25><B>Adý Soyadý:</B></TD>
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
tutulacaktýr.</B></TD></TR></TBODY></TABLE>
                        <HR align=left width=590 color=#d8d8d8 noShade SIZE=1>
                        <INPUT type=image height=19 width=56 
                        src="images/gonder.gif" 
                        value=1 border=0 name=Save> 
                  </TD></TR></FORM></TBODY></TABLE><BR></TD></TR></TBODY></TABLE></BODY></HTML>