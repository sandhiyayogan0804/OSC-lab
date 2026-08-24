let images = [
    "./asset/gi2.jpg",
    "./asset/gi3.jpg",
    "./asset/gi4.jpg"
];

let index = 0;
let slide = document.getElementById("Slideshow");

let changeImg = () => {
    index++;

    if (index >= images.length) {
        index = 0;
    }

    slide.src = images[index];
};

setInterval(changeImg, 2000);