var imgNum = 0;

function changeImage(num)
{
    imgNum = (5 + imgNum + num) % 5;
    console.log(imgNum);
    document.getElementById("image").src = `img/${imgNum}.jpg`;
}

let previous = () => changeImage(-1);
let next = () => changeImage(1);
