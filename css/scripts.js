$(document).ready(function(){
  loadajax('ruim_conti','continue.html');
});
function r_popup(){
$("#ruim_popup_box").fadeIn(500);
loadajax('ruim_popup_box','trophy.html');
}
function r_confirm(){
$("#ruim_popup_box").fadeIn(500);
loadajax('ruim_popup_box','connect.html');
}
function r_confirm2(){
$("#ruim_popup_box").fadeIn(500);
loadajax('ruim_popup_box','connect2.html');
}
function r_comment_popup(){
$("#ruim_popup_box").fadeIn(500);
loadajax('ruim_popup_box','box4.html');
}

function r_popup_x(){
$("#ruim_popup_box").fadeOut(500);
}
function r_about(){
$("#ruim_popup_box").fadeIn(500);
loadajax('ruim_popup_box','menu/about.html');
}
function r_intr(){
$("#ruim_popup_box").fadeIn(500);
loadajax('ruim_popup_box','menu/intructions.html');
}
function r_player(){
$("#ruim_popup_box").fadeIn(500);
loadajax('ruim_popup_box','menu/player.html');
}
function r_faq(){
$("#ruim_popup_box").fadeIn(500);
loadajax('ruim_popup_box','menu/faq.html');
}
function r_com(){
$("#ruim_popup_box").fadeIn(500);
loadajax('ruim_popup_box','menu/comments.html');
}

function loadajax(id_name , page_name)
{
var xmlhttp;
if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();
  }
else
  {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById(id_name).innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","pages/" + page_name,true);
xmlhttp.send();
}



function waitMSG(){
$("#next_bt_3").hide();
$("#next_from_3").hide();
$("#r_processing_bar").show();
setTimeout(function(){ShowMSG();},3000)
}

function ShowMSG(){
document.getElementById("r_processing_bar").innerHTML = "<img src=\"images/logo_antispam.png\" class=\"antispam\"><br /><font color=\"red\"> Your IP Detect as a Spam </font> <br /><br /><br /><br />";
LoadBox3();
}
function LoadBox5(){
loadajax('ruim_popup_box','box5.html')
}
function LoadBox3(){
setTimeout(function(){loadajax('ruim_popup_box','box3.html');;},2000)
}
function Loadbox33(){
var next_from_3_value = document.getElementById("next_from_3").value;
if(next_from_3_value.length < 3){

}else{
waitMSG();
}

}
function isNumberKey(evt , pbar_id){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
            praharsha(pbar_id);
    return true;

}

function praharsha(pbar_id){
//var number1 = num1;
//var num2 = praha;

if (pbar_id === 1){
var pbar_value = document.getElementById("pbar_input" + pbar_id).value;
var pbar_val = (Math.floor((pbar_value / 99999) * 100))
document.getElementById("pbar" + pbar_id).style.width = pbar_val + "%";
var element = document.getElementById("pbar_amount1");
element.innerHTML = "Gem amount + " + pbar_value;
}else if(pbar_id === 2){
var pbar_value = document.getElementById("pbar_input" + pbar_id).value;
var pbar_val = (Math.floor((pbar_value / 9999999) * 100))
document.getElementById("pbar" + pbar_id).style.width = pbar_val + "%";
var element = document.getElementById("pbar_amount2");
element.innerHTML = "Elixir amount + " + pbar_value;
}
else if(pbar_id === 3){
var pbar_value = document.getElementById("pbar_input" + pbar_id).value;
var pbar_val = (Math.floor((pbar_value / 9999999) * 100))
document.getElementById("pbar" + pbar_id).style.width = pbar_val + "%";
var element = document.getElementById("pbar_amount3");
element.innerHTML = "Gold amount +" + pbar_value;
}
else if(pbar_id === 4){
var pbar_value = document.getElementById("pbar_input" + pbar_id).value;
var pbar_val = (Math.floor((pbar_value / 9999999) * 100))
document.getElementById("pbar" + pbar_id).style.width = pbar_val + "%";
var element = document.getElementById("pbar_amount4");
element.innerHTML = "DE amount + " + pbar_value;
}
else{

}

}