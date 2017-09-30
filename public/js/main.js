
const carouselEl = document.getElementById("carousel");
const carouselImages = carouselEl.querySelectorAll("div.slide");
const homeCarousel = new Carousel(carouselEl, carouselImages);
var player;
const mq = window.matchMedia("(max-width: 600px)");

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



function onYouTubeIframeAPIReady() {
    const playerHeight = mq.matches ? '400px' : '800px';

    player = new YT.Player('player', {
        height: playerHeight,
        width: '100%',
        videoId: 'hHM3np-GKXc',
        events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
        }
    });

    mq.addEventListener("change", function(){
        const newPlayerHeight = mq.matches ? 400 : 800;
        player.getIframe().height = newPlayerHeight;
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




