function slidePost()
{
	moveAside();
	var pf = document.getElementById('pf');
	var pa = document.getElementById('pa');
	
	pf.style.left = 200 + "px";
	pa.style.left = 550 + "px";
}

function slideAnnounce()
{
	moveAside();
	var ann = document.getElementById('ann');
	ann.style.left = 400 + "px";
}

function moveAside2()
{
	var pf = document.getElementById('pf');
	var pa = document.getElementById('pa');
	var ann = document.getElementById('ann');
    var prof = document.getElementById('up2');
	prof.style.left = -720 + "px";
	pf.style.left = -910 + "px";
	pa.style.left = -610 + "px";
	ann.style.left = -910 + "px";
}

function slideAnnounce2()
{
	moveAside2();
	var ann = document.getElementById('ann');
	ann.style.left = 230 + "px";
}

function slidePost2()
{
	moveAside2();
	var pf = document.getElementById('pf');
	var pa = document.getElementById('pa');
	
	pf.style.left = 200 + "px";
	pa.style.left = 550 + "px";
}

function slideNew()
{
    moveAside2();
    var prof = document.getElementById('up2');
	prof.style.left = 320 + "px";
}

function view()
{
	moveAside();
	var prof = document.getElementById('prof');
	prof.style.left = 280 + "px";
}

function moveAside()
{
	var pf = document.getElementById('pf');
	var pa = document.getElementById('pa');
	var ann = document.getElementById('ann');
	var prof = document.getElementById('prof');
	prof.style.left = -910 + "px";
	pf.style.left = -910 + "px";
	pa.style.left = -610 + "px";
	ann.style.left = -910 + "px";
}