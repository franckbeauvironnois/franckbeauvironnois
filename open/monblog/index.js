


var canvas = document.getElementById('canvas');
var ctx = canvas.getContext('2d');

var canvas;
var ctx; 
var v = 5;
var x = 150;
var hado1

canvas.width = 1000;
canvas.height = 350;



var img = new Image();
img.src = "/open/monblog/images/hado.png";


function draw() {
ctx.drawImage(img, x, 100);

}


function anim(){
requestAnimationFrame(anim);
ctx.clearRect(0,0,canvas.width,canvas.height);
draw();


if(x + 200 > canvas.width || x - 10 < 0){
   v =-v;

}

if(v < 0){
  img.src = "/open/monblog/images/hado1.png";
}
else{
  img.src = "/open/monblog/images/hado.png";
}


x += v;


  }

anim(); 

var hado = new Audio();
hado.src = "hadouken.mp3";



