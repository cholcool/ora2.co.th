$( document ).ready(function() {
		
		function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah').attr('src', e.target.result);
			$('#blah').attr('width', 300);
        }

        reader.readAsDataURL(input.files[0]);
    }
}
function readURL2(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah2').attr('src', e.target.result);
			$('#blah2').attr('width', 300);
        }

        reader.readAsDataURL(input.files[0]);
    }
}
function readURL3(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah3').attr('src', e.target.result);
			$('#blah3').attr('width', 300);
        }

        reader.readAsDataURL(input.files[0]);
    }
}
$("#imgInp").change(function(){
var f=this.files[0];
var size =f.size||f.fileSize;

var ext = $('#imgInp').val().split('.').pop().toLowerCase();
if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1) {
    alert('Invalid format: only gif, jpg, jpeg and png files are allowed.');
}

else if(size > 5242880 )
{
alert('Error: uploaded image file size must be less than 5 megabytes.');
}
else 
{
  readURL(this);
 }
});

$("#imgInp2").change(function(){
var f=this.files[0];
var size =f.size||f.fileSize;

var ext = $('#imgInp2').val().split('.').pop().toLowerCase();
if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1) {
    alert('Invalid format: only gif, jpg, jpeg and png files are allowed.');
}
else if(size > 5242880 )
{
alert('Error: uploaded image file size must be less than 5 megabytes.');
}
else
{
    readURL3(this);
}
});

});


$('a[href^="#"]').click(function() {
    $('html, body').animate({
        scrollTop: $('.denie').offset().top
    }, 1000);
});

