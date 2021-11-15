var border = {};
var background = {};

window.onload = () => {
    border = {
        red: document.getElementById("border-red-value"),
        green: document.getElementById("border-green-value"),
        blue: document.getElementById("border-blue-value"),
        width: document.getElementById("border-width"),
    }

    background = {
        red: document.getElementById("background-red-value"),
        green: document.getElementById("background-green-value"),
        blue: document.getElementById("background-blue-value")
    }
}

function submit() {
    let toChange = document.getElementById("text");
    toChange.style.borderColor = `rgb(${border.red.value}, ${border.green.value}, ${border.blue.value})`;
    toChange.style.borderWidth = border.width.value;
    toChange.style.backgroundColor = `rgb(${background.red.value}, ${background.green.value}, ${background.blue.value})`;
}
