
class Carousel{
    constructor (el, slides, delay){
        this.el = el;
        this.slides = slides;
        this.slideIndex = 0;
        this.delay = delay || 7000;
        this.intervalId = 0;

        this.refresh();
    }

    get slideCount(){
        return this.slides.length;
    }

    get currentSlide(){
        return this.slides[this.slideIndex];
    }

    get isPlaying(){
       return this.intervalId != 0;
    }

    next (){
        this.slideIndex++;

        if (this.slideIndex >= this.slideCount){
            this.slideIndex = 0;
        }
        this.refresh();
        this.resetTimer();
    }

    previous(){
        this.slideIndex--;

        if(this.slideIndex < 0){
            this.slideIndex = this.slideCount - 1;
        }
        this.refresh();
        this.resetTimer();
    }

    refresh (){
        this.slides[0].style.marginLeft = `-${100*this.slideIndex}%`;
    }

    play(){
        this.stop();
        const self = this;
        this.intervalId = setInterval( function(){
           self.next();
        }, this.delay)
    }

    playReverse(){
        this.stop();
        const self = this;
        this.intervalId = setInterval( function(){
            self.previous();
        }, this.delay)
    }

    stop(){
        clearInterval(this.intervalId);
        this.intervalId = 0;
    }

    resetTimer(){
        if (this.isPlaying){
            this.play();
        }
    }

}
