var views=1
function counntView(){
    var ui
if(window.screen.width<920)
ui = "mobile"
else
ui = "destop"
views++
console.log(views)

var xhttp = new XMLHttpRequest();
xhttp.open("GET", "connections/database.txt", true);
xhttp.send();
xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     var DataSet=this.responseText;
    //  DataSet=JSON.parse(DataSet)
    //  nfile="connections/database.txt"
    //  nfile.writeIn('hgfjngfjkfdkj')
    // write("hdsjfdbhjfsd")
    const fs= new Request('fs')
   write(this,"jfdjigfhjdfij")
        }
    }
  }
  counntView();