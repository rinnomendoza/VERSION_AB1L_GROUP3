var j=4;
var first=1;
var last=4;
function place()
{
	var i1 = document.getElementById("i1");
	var i2 = document.getElementById("i2");
	var i3 = document.getElementById("i3");
	var i4 = document.getElementById("i4");
	var i5 = document.getElementById("i5");
	var i6 = document.getElementById("i6");
	var i7 = document.getElementById("i7");
	var i8 = document.getElementById("i8");
	var i9 = document.getElementById("i9");

	i1.style.left = -345 + "px";
	i2.style.left = -170 + "px";
	i3.style.left = 5 + "px";
	i4.style.left = 180 + "px";
	i5.style.left = 355 + "px";
	i6.style.left = 530 + "px";
	i7.style.left = 705 + "px";
	i8.style.left = 880 + "px";
	i9.style.left = 1055 + "px";
}

function moveLeft()
{
	var k = document.getElementById("i9").style.left;
	for(j=8; j>0; j--)
	{
		i1 = document.getElementById("i"+(j+1));
		i2 = document.getElementById("i"+j);
		i1.style.left = i2.style.left;
	}
	i1 = document.getElementById("i1");
	i1.style.left = k;
}

function moveRight()
{
	k = document.getElementById("i1").style.left;
	for(j=1; j<9; j++)
	{
		i1 = document.getElementById("i"+(j+1));
		i2 = document.getElementById("i"+j);
		i2.style.left = i1.style.left;
	}
	i1 = document.getElementById("i9");
	i1.style.left = k;
}