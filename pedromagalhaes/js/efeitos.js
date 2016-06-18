//abrir menu responsivo
$("#btn-bars").on("click", function(){

	$("header").toggleClass("open-menu");

});

//Fechar menu responsivo
$("#menu-mobile-mask, .btn-close").on("click",function(){

	$("header").removeClass("open-menu");

});

// efeitos WOW
$(document).ready(function(){
new WOW().init();
});

// iframe adaptavel
function adjustFrame(frame){
var frmTemp;
if (document.all) {
var w = frame.document.body.scrollWidth;
var h = frame.document.body.scrollHeight;

if(frame.document.body.scrollWidth > frame.document.body.offsetWidth) {
document.all[frame.name].height = h + 30;
}
else {
document.all[frame.name].height = h;
}
}
else if (document.getElementById) {

var w = frame.document.width;
var h = frame.document.height;

if(frame.document.body.scrollWidth > frame.document.body.offsetWidth) {
document.getElementById(frame.name).height = h + 30;
}
else {
document.getElementById(frame.name).height = h; 
}
}
return false;
}

