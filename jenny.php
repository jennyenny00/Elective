<html>
<head></head>
<body>
<form action="jenny.php" method="GET">
<input type="text" name="in1" id="input1" onkeyup="enny()"><br /></input>
<input type="text" name="in2" id="input2" onkeyup="enny()"><br /></input>
<input type="text" name="in3" id="input3" onkeyup="enny()"><br /></input>
<input type="text" name="in4" id="input4" onkeyup="enny()"><br /></input>
<input type="text" name="in5" id="input5" onkeyup="enny()"><br /></input>
</form>
<script>
function enny(){
var a = document.getElementById("input1");

var b = document.getElementsByTagName("INPUT");
for(var x = 0; x < b.length; x++){
b[x].value = a.value;
}
}
</script>
</body>
</html>