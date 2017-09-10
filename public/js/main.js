
const carouselEl = document.getElementById("carousel");
const carouselImages = carouselEl.querySelectorAll("div.slide");
const homeCarousel = new Carousel(carouselEl, carouselImages);

homeCarousel.play();

carouselEl.querySelector(".previous-btn").addEventListener("click", () => {
    homeCarousel.previous();
});

carouselEl.querySelector(".next-btn").addEventListener("click", () => {
    homeCarousel.next();
});

//YOUTUBE PLAYER
var tag = document.createElement('script');

tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);


var player;
function onYouTubeIframeAPIReady() {
    player = new YT.Player('player', {
        height: '800',
        width: '100%',
        videoId: 'hHM3np-GKXc',
        events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
        }
    });
}


function onPlayerReady(event) {
    //event.target.playVideo();
}


var done = false;
function onPlayerStateChange(event) {
    if (event.data == YT.PlayerState.PLAYING && !done) {
        setTimeout(stopVideo, 6000);
        done = true;
    }
}
function stopVideo() {
    player.stopVideo();
}

