const canvas = document.getElementById("main_canvas")   //canvas  
let c = canvas.getContext("2d")

function Pen(x, y, color){      //klasa do przechowywania pozycji/wartości tego do rysowania
    this.x = x;
    this.y = y;
    this.color = color;
}
c_stuff = new Pen(0, 0, "#000")

const tools = document.querySelectorAll("#tools input[type='button']")     //tools



function mousePos(){       
    let e = window.event
    c_stuff.x = e.clientX - Math.round(canvas.getBoundingClientRect().x)
    c_stuff.y = e.clientY - Math.round(canvas.getBoundingClientRect().y)
    return;
}

canvas.addEventListener("mousedown", draw)

function draw(){


}


