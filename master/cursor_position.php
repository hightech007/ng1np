<!DOCTYPE html>
<html>
<head>
<script>
function myFunction(e)
{
x=e.clientX;
y=e.clientY;
coor="Coordinates: (" + x + "," + y + ")";
document.getElementById("demo").innerHTML=coor
}

function clearCoor()
{
document.getElementById("demo").innerHTML="";
}
</script>
</head>
<body style="margin:0px; width: 100%; border: none; color: #17f118; background: #313131;">

<div id="coordiv" style="width:100%;height:299px;border:none; background: black;" onmousemove="myFunction(event)" onmouseout="clearCoor()"></div>

<p>Mouse over the rectangle above, and get the coordinates of your mouse pointer.</p>

<p id="demo"></p>

</body>
</html>
