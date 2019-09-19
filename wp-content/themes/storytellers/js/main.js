// Media control variables //
const overlay = document.getElementsByClassName( "intro-overlay" );
const video = document.getElementsByClassName( "profile-video" );
const mediaControl = document.getElementsByClassName( "profile-play-button" );
const burger = document.getElementsByClassName("burger-menu");
// Event listeners for media controls //
burger[0].addEventListener("click", burgerNav);

if( overlay[0] != undefined ) {
  overlay[0].addEventListener("click", playVideo);
}

for (var i = 0; i < video.length; i++) {
    video[i].addEventListener('ended', videoEnded);
		video[i].addEventListener('click', mediaController);
		mediaControl[i].addEventListener('click', mediaController);
}

// Functions to execute media handeling //
function playVideo() {
	overlay[0].classList.add( "opacity" );
	var video = document.getElementsByClassName( "intro-video" );

	if( video[0].paused ) {
		video[0].play();
	} else {
		video[0].pause();
	}
}

function mediaController(event) {
	var self 			= event.target;
	var overlay 	= self.parentElement.parentElement.parentElement.parentElement;
	var container = overlay.parentElement;
	overlay.classList.add("overlay-after-play");
	overlay.classList.remove("overlay-height");

  if(self.tagName == "VIDEO") {
    var video =  self;
  } else {
    var video =  overlay.previousElementSibling;
  }

	if( video.paused ) {
		video.play();
	} else {
		video.pause();
	}
}

function videoEnded(event) {
	var overlay = event.target.nextSibling;
	overlay.classList.remove("overlay-after-play");
	overlay.classList.add("overlay-height");
}

function burgerNav() {
  var navList = document.getElementsByClassName("menu-main-menu-container");

  if (navList[0].style.display === "block") {
    navList[0].style.display = "none";
  } else {
    navList[0].style.display = "block";
  }
}


window.addEventListener("resize", function(){
  var navList = document.getElementsByClassName("menu-main-menu-container");

   if(window.innerWidth < 769){
    navList[0].style.display = "none";
   }
   else{
     navList[0].style.display = "block";
   }
});
