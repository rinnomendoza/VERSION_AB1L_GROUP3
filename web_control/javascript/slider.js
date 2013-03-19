var pointer = 1;
var truMin = 1;
var truMax = 6;
function moveSets()
{
	for(var i=0; i<11; i+=1)
	{
		ids = document.getElementById("s"+i);
		ids.style.right = 600 + "px";
	}
}

function movePics()
{
	for(var j=1; j<67; j+=1)
	{
		jds = document.getElementById("i"+j);
		jds.style.left = 600 + "px";
	}
}

function move2(id, min, max)
{
	moveSets();
	item = document.getElementById("s"+id);
	item.style.right = 0 + "px";
	truMin = min;
	truMax = max;
	pointer = min;
	next();
}

function next2(){
	movePics();
	
	pic = document.getElementById("i"+pointer);
	pic.style.left = 600+"px";
	pointer+=1;
	if(pointer>truMax)pointer = truMin;
	pic = document.getElementById("i"+pointer);
	pic.style.left = 0+"px";
}

function prev2(){
	movePics();
	
	pic = document.getElementById("i"+pointer);
	pic.style.left = 600+"px";
	pointer-=1;
	if(pointer<truMin)pointer = truMax;
	pic = document.getElementById("i"+pointer);
	pic.style.left = 0+"px";
}