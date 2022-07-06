const indicatorParent = document.querySelector('.control ul'); 
const indicators = document.querySelectorAll('.control li');
index = 0;

indicators.forEach((indicator, i) => {
    indicator.addEventListener('click', () => {
        document.querySelector('.control .selected').classList.remove('selected');
        indicator.classList.add('selected'); 
        index = i;

    });
});

g.addEventListener('click', function() {
index = (index > 0) ? index -1 : 0;
document.querySelector('.control .selected').classList.remove('selected');
indicatorParent.children[index].classList.add('selected');

});

d.addEventListener('click', function() {
index = (index < 5 - 1) ? index+1 : 4;
document.querySelector('.control .selected').classList.remove('selected');
indicatorParent.children[index].classList.add('selected');

});


document.body.onload=function(){
    nbr=5;
    p=0;
    container=document.getElementById("container");
    g=document.getElementById("g");
    d=document.getElementById("d");
    container.style.width=(1000 * nbr)+"px";
    for(i=1;i<=nbr;i++){
    div=document.createElement("div");
    div.className="photo";
    div.style.backgroundImage="url('images/im"+i+".jpg')";
    container.appendChild(div);
    
    }
    
};



g.onclick=function(){
if(p>-nbr+1)
p--;
container.style.transform="translate("+p*1000+"px)";
 container.style.transition="all 0.5s ease";

};

d.onclick=function(){
if (p<0) 
p++;
container.style.transform="translate("+p*1000+"px)";
container.style.transition="all 0.5s ease";
};