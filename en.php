<!DOCTYPE html>
<html>
<head>
  <style>

.bg {
  background-image: url("al.jpg");
  height: 100%; 
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
	<style type="text/css">
    .click_f_en{
       margin-left:50%;
       width: 100px;
       height: 40px;
    }

		.all
		{
        width:400px;
        height:300px;
        background:#CCD1D1;
        margin:0 auto;
		}
		.shop{
			padding-top:20%;
			text-align:center;
          }
	</style>
</head>
<body style="background: #6E6E6E;"> 
  <img src="en1.jpeg" style="display: block;
  margin-left:auto;
  margin-right:auto;
  width:400px;">

    <div class="all" >
    <div class="shop">
    <h3>Enter text Which you want Encrypt it</h3>
  <select id="selc" class="string" value="mbkglm">
		<option value="md5">to md5</option>
		<option value="sha">to sha1</option>
		<option value="password_hash">password_hash</option>
		<option value="crc32">crc32</option>
 </select>
 <input type="text" class="text">
   <br>
   <h5 class="ts">
     Example
   </h5>
   </div>
   <h4 style="text-align: center;" id="addt">
     341be97d9aff90c9978347f66f945b77
   </h4>
   <button type="submit" class="click_f_en">Click to encrypt</button>
   </div>
</body>
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script>
$(document).ready(function()
 {
  $('.string').change(function(){
  	  var srt_m = $(this).children("option:selected").val();
  	    if (srt_m == 'md5') 
  	    {
  	    	$('#addt').html('341be97d9aff90c9978347f66f945b77');
  	    }
  	    if (srt_m == 'sha') 
  	    {
  	    	$("#addt").html('3442496b96dd01591a8cd44b1eec1368ab');
  	    }
  	    if (srt_m == 'password_hash') 
  	    { 
           $('#addt').html('$2y$10$FoN69j9x88tpUbtckKzeku7GUszeKgoPx0Xd');
  	    }
  	    if (srt_m == 'crc32') 
  	    { 
           $('#addt').html('1554949113');
  	    }
  	   $('.ts').html('Example');

   });
});

$(document).on('click','.click_f_en',function(){

  var en =$('#selc option:selected').val();
  var text_to_en=$('.text').val();
  $.ajax({
      url:"fetch_val_en.php",
      type:"post",
      data:{en:en,text_to_en:text_to_en},
      success:function(data)
      {
        $("#addt").html(data);
        $('.ts').html('');
      }
  });
});
</script>
</html>