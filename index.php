
<!DOCTYPE html>
<html>
<head>
	<title>Ajax Chat</title>
	<script src="jquery.js"></script>
</head>
<style >
.con{
	height:500px;
	border: 1px solid gray;
	width: 300px;
}


</style>
<body>
<script>
var id;
setInterval("id_function();",1000);
    function id_function(){
     $.ajax({
  url: "id.php",

  method: "POST",
  dataType : "JSON",
  success: function(data){
 id = data.id;

  },cache:false});

    }

setInterval("my_function();",1000);
    function my_function(){
     $.ajax({
  url: "dis.php?lid=" + id,

  method: "POST",
  success: function(data){
console.log(id);
$('#ch').append(data);
  },cache:false});

    }
</script>

	<div class="con" id='ch'></div>
	<form method="POST" id='mform'>
     <input type="text" id='msg' style="width:250px;height:30px">
     <input type="submit" id='submit'>
	</form>
</body>
<script>
$('#mform').submit(function(e){
e.preventDefault();
var msg = $('#msg').val();
$.post('post.php',{msg:msg}).success(function(){
$('#msg').val('');
});

});

</script>
</html>
