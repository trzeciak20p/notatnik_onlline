const p_canvas = document.getElementById("pen_canvas")   //canvas 
const s_canvas =  document.getElementById("show_canvas")
let p = p_canvas.getContext("2d")

function Pen(x, y, color){      //klasa do przechowywania pozycji/wartości tego do rysowania
    this.x = x;
    this.y = y;
    this.size = 1;
    this.color = color;
}

p = new Pen(0, 0, "#000")
s_p = new Pen(0, 0, "#000")

function sizeUpdate(){
    inpt_size = parseInt(document.getElementById("pen_size").value)
    if( inpt_size > 1){
        p.size = inpt_size
        s_p.zise = inpt_size
    }else{
        p.size = 1
        s_p.size = 1
    }
}

let current_tool = 0
function toolChange(ae){
    current_tool = ae
}

const tools = document.querySelectorAll("#tools input[type='button']")     //tools

tools[0].addEventListener("click", toolChange(0))

p_canvas.addEventListener("mousemove", showPen)
p_canvas.addEventListener("mousemove", mousePos)
p_canvas.addEventListener("mouseenter", sizeUpdate)
s_canvas.addEventListener("mousedown", draw)


function mousePos(){       
    let e = window.event
    p.x = e.clientX - Math.round(p_canvas.getBoundingClientRect().x)
    p.y = e.clientY - Math.round(p_canvas.getBoundingClientRect().y)
    s_p.x = p.x
    s_p.y = p.y
    console.log("mouse: ", p.x, p.y)
    
}

function showPen(){

    console.log("pen size: ", p.size)
    pCanvasTransparent()
    ShowPen()

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

function showPen(){

}

function pCanvasTransparent(coor){
    p.fillstyle = "#0000ffff"
    p.fillRect(0,0,700,400)
}
