var currPage = "home";

var _player = document.getElementById("player");
var currPlay = "./songs/bulletproof.mp3";
var currState = "pause";

var src1 = "./songs/bulletproof.mp3";
var src2 = "./songs/fireflies.mp3";
var src3 = "./songs/pop.mp3";

$(document).ready(function () {
	$('.about').slideUp(0);
	$('.impress').slideUp(0);
	$('.dummy').slideUp(0).delay(500).slideDown(1000);
	$('#home').css("font-weight","bold");
	
	_player.src = currPlay;
});

function playNext() {
	if (currPlay == src1) {
		_player.src = src2;
		_player.play();
		$('#song').text("?OWL CITY - FIREFLIES?");
		$('play').text("PAUSE");
		currPlay = src2;
		currState = "play";
	}
	else if (currPlay == src2) {
		_player.src = src3;
		_player.play();
		$('#song').text("?*NSYNC - POP?");
		$('play').text("PAUSE");
		currPlay = src3;
		currState = "play";
	}
	else if (currPlay == src3) {
		_player.src = src1;
		_player.play();
		$('#song').text("?LA ROUX - BULLTEPROOF?");
		$('play').text("PAUSE");
		currPlay = src1;
		currState = "play";
	}
}

_player.addEventListener("ended", playNext);

$('#play').click(function() {
	if (currState == "play") {
		_player.pause();
		currState = "pause";
		$('play').text("PLAY");
	}
	else if (currState == "pause") {
		_player.play();
		currState = "play";
		$('play').text("PAUSE");
	}
});

$('#forward').click(function() {
	playNext();
});

$('#backward').click(function() {
	if (currPlay == src1) {
		_player.src = src3;
		_player.play();
		$('#song').text("?*NSYNC - POP?");
		$('play').text("PAUSE");
		currPlay = src3;
		currState = "play";
	}
	else if (currPlay == src2) {
		_player.src = src1;
		_player.play();
		$('#song').text("?LA ROUX - BULLETPROOF?");
		$('play').text("PAUSE");
		currPlay = src1;
		currState = "play";
	}
	else if (currPlay == src3) {
		_player.src = src2;
		_player.play();
		$('#song').text("?OWL CITY - FIREFLIES?");
		$('play').text("PAUSE");
		currPlay = src2;
		currState = "play";
	}
});

$('#home').click(function() {
	if (currPage == "about") 
	{ 
		$('.about').slideUp("slow");
		$('#about').css("font-weight","normal");			
	} 
	else if (currPage == "impress") 
	{
		$('.impress').slideUp("slow"); 
		$('#impress').css("font-weight","normal");	
	}
	$('.home').delay(1000).slideDown("slow");
	$('#home').css("font-weight","bold");	
	currPage = "home";
});

$('#about').click(function() {
	if (currPage == "home") 
	{ 
		$('.home').slideUp("slow"); 
		$('#home').css("font-weight","normal");	
	} 
	else if (currPage == "impress") 
	{
		$('.impress').slideUp("slow"); 
		$('#impress').css("font-weight","normal");	
	}
	$('.about').delay(1000).slideDown("slow");
	$('#about').css("font-weight","bold");	
	currPage = "about";
});

$('#impress').click(function() {
	if (currPage == "home") 
	{ 
		$('.home').slideUp("slow"); 
		$('#home').css("font-weight","normal");	
	} 
	else if (currPage == "about") 
	{
		$('.about').slideUp("slow"); 
		$('#about').css("font-weight","normal");	
	}
	$('.impress').delay(1000).slideDown("slow");
	$('#impress').css("font-weight","bold");	
	currPage = "impress";
});

// Stuff for Google's PlusOne-Button
window.___gcfg = {lang: 'en-GB'};
(function() {
	var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
	po.src = 'https://apis.google.com/js/plusone.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
})();