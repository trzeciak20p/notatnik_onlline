const p_canvas = document.getElementById("pen_canvas")   //canvas 
const s_canvas = document.getElementById("show_canvas")
const m_p = p_canvas.getContext("2d")
const s_p = s_canvas.getContext("2d")

function Pen(x, y, color){      //klasa do przechowywania pozycji/wartości tego do rysowania
    this.x = x;
    this.y = y;
    this.size = 1;
    this.color = color;
}

p = new Pen(0, 0, "#000")

function penUpdate(){
    const inpt_size = parseInt(document.getElementById("pen_size").value)
    if( inpt_size > 1){
        p.size = inpt_size
        s_p.zise = inpt_size
    }else{
        p.size = 1
        s_p.size = 1
    }
    const inpt_color = document.getElementById("pen_color")
    try{
        if(inpt_color.value[0] == "#"){         //sprawdzanie czy # jest na początku i ułatwianie ludziom życia
            p.color = inpt_color.value;
        }else{
            p.color = "#" + inpt_color.value;
        }
    }catch{
        p.color = "#fff";
    }
}

let current_tool = 0
function toolChange(ae){
    current_tool = ae
}

const tools = document.querySelectorAll("#tools input[type='button']")     //tools
tools[0].addEventListener("click", ()=>{toolChange(0)})
tools[1].addEventListener("click", ()=>{toolChange(1)})

p_canvas.addEventListener("mousemove", showPen)
p_canvas.addEventListener("mousedown", draw)
p_canvas.addEventListener("mouseup", stopDraw)
p_canvas.addEventListener("mouseleave", clearCanvas)        //czyszczenie kursora po wyjechaniu

function mousePos(){       
    let e = window.event
    p.x = e.clientX - Math.round(p_canvas.getBoundingClientRect().x)
    p.y = e.clientY - Math.round(p_canvas.getBoundingClientRect().y)
    s_p.x = p.x
    s_p.y = p.y
    // console.log("mouse: ", p.x, p.y)
}

function showPen(){
    penUpdate()
    mousePos()
    drawPen()

}

let draw_timeout
function draw(){

    s_p.fillStyle = p.color     //zmiana koloru
    s_p.strokeStyle = p.color
    switch (current_tool) {     //kształt
        case 0:
            s_p.fillRect( p.x - p.size/2 + 1, p.y - p.size/2 + 1, p.size , p.size)        
            break;

        case 1:   
            s_p.beginPath()
            s_p.arc(p.x, p.y, p.size/2, 0, 2 * Math.PI);
            s_p.stroke()
            s_p.closePath()
            s_p.fill()
            
            break;

        default:
            break;
    }

    draw_timeout = setTimeout(draw, 10)
}
function stopDraw(){
    clearTimeout(draw_timeout)
}

function drawPen(){
    m_p.clearRect(0, 0, 750, 400)       //czyszczenie poprzedniego kursora
    m_p.fillStyle = p.color     //zmiana koloru
    m_p.strokeStyle = p.color
    switch (current_tool) {     //kształt
        case 0:
            m_p.fillRect( p.x - p.size/2 + 1, p.y - p.size/2 + 1, p.size , p.size)        
            break;

        case 1:   
            m_p.beginPath()
            m_p.arc(p.x, p.y, p.size/2, 0, 2 * Math.PI);
            m_p.stroke()
            m_p.closePath()
            m_p.fill()
            
            break;

        default:
            break;
    }
}

function clearCanvas(){
    m_p.clearRect(0, 0, 750, 400)
}
