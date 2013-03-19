var j=4;
var first=1;
var last=4;
function place(x,y)
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

	i1.style.left = 0 + "px";
	i2.style.left = 170 + "px";
	i3.style.left = 340 + "px";
	i4.style.left = 510 + "px";
	i5.style.left = 680 + "px";
	i6.style.left = 850 + "px";
	i7.style.left = 1020 + "px";
	i8.style.left = 1190 + "px";
	i9.style.left = 1360 + "px";
	
	if(x == 1)log(y);
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

function cl()
{
	m = document.getElementById("MAP");
	m.style.height = 0 + "px";
	s = document.getElementById("in");
	s.style.left = -450 + "px";
	u = document.getElementById("up");
	u.style.left = -600 + "px"; 
    b = document.getElementById("bg");
    b.style.left = -1130 + "px";
}

function map()
{
	cl();
	var m = document.getElementById("MAP");
	m.style.height = 499 + "px";
}

function signIn()
{
	cl();
	s = document.getElementById("in");
	s.style.left = 450 + "px";
    b = document.getElementById("bg");
    b.style.left = 120 + "px";
    
}

var block;
var st;
function reSize(x){
	for(var i=0; i<2; i+=1){
		block = document.getElementById("block" + i);
		if(i == x){
			block.style.height = 266 + "px";
		}
		else block.style.height = 50 + "px";
	}
}

function signUp()
{
	cl();
	u = document.getElementById("up");
	u.style.left = 370 + "px";
    b = document.getElementById("bg");
    b.style.left = 120 + "px";
}

function log(x){
	alert(""+x);
}