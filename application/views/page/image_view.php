<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Welcome to CodeIgniter</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<!-- Latest compiled and minified JavaScript -->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.50/jquery.form.min.js"></script>
<style type="text/css">
#loader{display: none}
#preview{display: none}
</style>
</head>
<body>
<div class="container">
<blockquote><h2>Codeigniter image gallery using ajax</h2></blockquote>
<div class="row clear-fix">
<div class="col-md-12">
<form class="form-inline" role="form" action="<?php echo base_url()?>index.php/image_ctrl/do_upload" method="POST" enctype="multipart/form-data">
<div class="form-group" style="background: #f5f5f5">
<label for="">Choose image</label>
<input type="file" name="userfile" id="userfile" multiple>
</div>
<div class="form-group">
<input type="submit" class="btn btn-info btn-block" style="width: 200px;" value="Add">
</div>
<div class="form-group">
<img id="loader" src="<?php echo base_url() ?>asset/images/486.GIF" style="height: 30px;">
</div>
<div class="form-group">
<img id="preview" src="#" style="height: 80px;border: 1px solid #DDC; " />
</div>
</form>
</div>
</div>
<div class="row clear-fix">
<div class="col-md-12">
<div id="response">
</div>  
</div>
</div>
<div class="row clear-fix">
<div class="col-md-12">
<div style="margin-top: 1%;">
<blockquote>
<ul class="list-inline"  id="gallery">
</ul>
</blockquote>
</div>  
</div>
</div>
</div>
<script>
$(document).ready(function (){
loadgallery();
function readURL(input) {
$("#preview").show();
if (input.files && input.files[0]) {
var reader = new FileReader();
reader.onload = function (e) {
$('#preview').attr('src', e.target.result);
};
reader.readAsDataURL(input.files[0]);
}
}
$("#userfile").change(function(){
readURL(this);
});
$('form').ajaxForm({
beforeSend: function() {
$("#loader").show();
},
complete: function(xhr) {
$("#response").html(xhr.responseText);
$("#loader").hide();
$('form').resetForm();
loadgallery();
}
}); 
function  loadgallery(){
$.ajax({
url:'http://localhost/cod/index.php/image_ctrl/fillGallery',
type:'GET'
}).done(function (data){
$("#gallery").html(data);
var btnDelete  = $("#gallery").find($(".btn-delete"));
(btnDelete).on('click', function (e){
e.preventDefault();
var id = $(this).attr('id');
$("#"+id+"g").hide();
$.ajax({
url:'http://localhost/cod/index.php/image_ctrl/deleteimg',
data:'id='+id,
type:'POST'
}).done(function (data){
});
});
});
}
});
</script>
</body>
</html>
<!--<script>
(function() {
var bar = $('.bar');
var percent = $('.percent');
var status = $('#status');
$('form').ajaxForm({
beforeSend: function() {
status.empty();
var percentVal = '0%';
bar.width(percentVal)
percent.html(percentVal);
},
uploadProgress: function(event, position, total, percentComplete) {
var percentVal = percentComplete + '%';
bar.width(percentVal)
percent.html(percentVal);
//console.log(percentVal, position, total);
},
success: function() {
var percentVal = '100%';
bar.width(percentVal)
percent.html(percentVal);
},
complete: function(xhr) {
status.html(xhr.responseText);
}
}); 
})();       
</script>-->