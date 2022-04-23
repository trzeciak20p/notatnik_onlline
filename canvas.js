const p_canvas = document.getElementById("main_canvas")   //canvas 
const s_canvas =  document.getElementById("show_canvas")
let p = p_canvas.getContext("2d")

function Pen(x, y, color){      //klasa do przechowywania pozycji/wartości tego do rysowania
    this.x = x;
    this.y = y;
    this.color = color;
}
p = new Pen(0, 0, "#000")

let current_tool = 0
function toolChange(ae){
    current_tool = ae
}

const tools = document.querySelectorAll("#tools input[type='button']")     //tools

tools[0].addEventListener("click", toolChange(0))

function mousePos(){       
    let e = window.event
    p.x = e.clientX - Math.round(p_canvas.getBoundingClientRect().x)
    p.y = e.clientY - Math.round(p_canvas.getBoundingClientRect().y)
    return;
}

p_canvas.addEventListener("mouseover", showPen)
s_canvas.addEventListener("mousedown", draw)
p_canvas.addEventListener("mouseout", stopPen)
let pen_timeout

function showPen(){

    mousePos()


    pen_timeout = setInterval(showPen, 100)
}
function stopPen(){

    clearInterval(pen_timeout)
}

function draw(){

    switch (current_tool) {
        case 0:
            
            break;
    
        case 1:
        default:
            break;
    }

}


