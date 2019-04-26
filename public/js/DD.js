$(document).ready(function(){
$("#ex2").change(function(e) {
var tglVal1 = $('#ex1').val();
var tglVal2 = $('#ex2').val();
if (tglVal2 - tglVal1 < 0){
alert("format tanggal salah");
$('#ex1').val("");
$('#ex2').val("");
$("#ex1").focus();
}
});
});
