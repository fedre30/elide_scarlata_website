let modal = document.getElementById('myModal');
let images = document.querySelectorAll('.photos img');
console.log(images);
let modalImg = document.getElementById("img01");

for (let i = 0; i < images.length; ++i) {
    const image = images[i];
    image.onclick = function () {
        console.log(modal);
        console.log(image);
        modal.style.display = "block";
        modalImg.src = this.src;
    };
}

let span = document.getElementsByClassName("closeButton") [0];

span.onclick = function() {
    modal.style.display= "none";
};