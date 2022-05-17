//Search
$(function () {


$('#search1').bind("change keyup input click", function () {
if (this.value.length >= 1) {
$.ajax({
type: "POST",
url: "search/HideSeek.php",
data: {'search': this.value},
response: 'text',
success: function (data) {
$(".display").html(data).fadeIn();
$(".display li").addClass(function (index, currentClassName) {
if (!currentClassName) {
return 'list-group-item';
}
});
}
})
}
})
})
// import
$(document).ready(function(){
var clear_timer;
$('#importSubmit').click(function(event){
$("#importprogress").on("submit", function(event){
$('#message').html('');
event.preventDefault();
$.ajax({
url:"cab/errorsimport.php",
method:"POST",
data: new FormData(this),
dataType:"json",
contentType:false,
cache:false,
processData:false,
beforeSend:function(){
$('#importSubmit').attr('disabled','disabled');
$('#importSubmit').val('Importing');
},
success:function(data)
{
if(data.success)
{
$('#total_data').text(data.total_line);

start_import();

clear_timer = setInterval(get_import_data, 2000);
// $('#message').html('<div class="alert alert-success">CSV File Uploaded</div>');
}
if(data.error)
{
$('#message').html('<div class="alert alert-danger">'+data.error+'</div>');
$('#importSubmit').attr('disabled',false);
$('#importSubmit').val('Tuonti');
}
}
})
});
function start_import()
{
$("#process").css('display', 'block');
$.ajax({
url:"updatebd/import.php",
success:function()
{

}
})
}
function get_import_data()
{
$.ajax({
url:"cab/processbar.php",
success:function(data)
{
var total_data = $('#total_data').text();
var width = Math.round((data/total_data)*100);
$('#process_data').text(data);
$('.progress-bar').css('width', width + '%');
if(width >= 100)
{
clearInterval(clear_timer);
$('#process').css('display', 'none');
$('#file').val('');
$('#message').html('<div class="alert alert-success">Data Successfully Imported</div>');
$('#importSubmit').attr('disabled',false);
$('#importSubmit').val('Tuonti');
}
}
})
}
});
});
//update
$(document).ready(function(){
var clear_timer;
$('#importUpdateSubmit').click(function(event){
$("#importprogress").on("submit", function(event){
$('#message').html('');
event.preventDefault();
$.ajax({
url:"cab/errorsimport.php",
method:"POST",
data: new FormData(this),
dataType:"json",
contentType:false,
cache:false,
processData:false,
beforeSend:function(){
$('#importUpdateSubmit').attr('disabled','disabled');
$('#importUpdateSubmit').val('Update');
},
success:function(data)
{
if(data.success)
{
$('#total_data').text(data.total_line);

start_import2();

clear_timer = setInterval(get_import_data2, 2000);
// $('#message').html('<div class="alert alert-success">CSV File Uploaded</div>');
}
if(data.error)
{
$('#message').html('<div class="alert alert-danger">'+data.error+'</div>');
$('#importUpdateSubmit').attr('disabled',false);
$('#importUpdateSubmit').val('päivittää');
}
}
})
});
function start_import2()
{
$("#process").css('display', 'block');
$.ajax({
url:"updatebd/update.php",
success:function()
{

}
})
}
function get_import_data2()
{
$.ajax({

url:"cab/processbar.php",
success:function(data)
{
var total_data = $('#total_data').text();
var width = Math.round((data/total_data)*100);
$('#process_data').text(data);
$('.progress-bar').css('width', width + '%');
if(width >= 100)
{
clearInterval(clear_timer);
$('#process').css('display', 'none');
$('#file').val('');
$('#message').html('<div class="alert alert-success">Data Successfully Imported</div>');
$('#importUpdateSubmit').attr('disabled',false);
$('#importUpdateSubmit').val('päivittää');
}
}
})
}
});
});






$(document).ready(function(){
$(".vkl").click(function(){
$(".closeinfo").removeClass("closeinfo").addClass("openifo");
$(".vkl").removeClass("vkl").addClass("closeinfo");
});
});

