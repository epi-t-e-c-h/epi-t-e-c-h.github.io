// import react from "react"

setInterval(()=>{
    if(document.getElementById('slides').style.marginLeft=="-100%"){
        document.getElementById('slides').style.marginLeft="0"
    }else{
        document.getElementById('slides').style.marginLeft="-100%"
    }
    document.getElementById('slides').style.transition="0.3s"

},5000)
function toggleMenu(){
    
}