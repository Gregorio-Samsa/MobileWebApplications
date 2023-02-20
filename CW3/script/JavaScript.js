var count = 0;
vid.onclick = function(e){
    document.getElementById("computer").style.display='none';
    document.getElementById("videogames").style.display='flex';
    document.getElementById("books").style.display='none';
    document.getElementById("Textbooks").style.display='none';
    document.getElementById("Men").style.display='none';
    document.getElementById("Women").style.display='none';
}
comp.onclick = function(e){
    document.getElementById("computer").style.display='flex';
    document.getElementById("videogames").style.display='none';
    document.getElementById("books").style.display='none';
    document.getElementById("Textbooks").style.display='none';
    document.getElementById("Men").style.display='none';
    document.getElementById("Women").style.display='none';
}
bks.onclick = function(e){
    document.getElementById("computer").style.display='none';
    document.getElementById("videogames").style.display='none';
    document.getElementById("books").style.display='flex';
    document.getElementById("Textbooks").style.display='none';
    document.getElementById("Men").style.display='none';
    document.getElementById("Women").style.display='none';
}
Tbks.onclick = function(e){
    document.getElementById("computer").style.display='none';
    document.getElementById("videogames").style.display='none';
    document.getElementById("books").style.display='none';
    document.getElementById("Textbooks").style.display='flex';
    document.getElementById("Men").style.display='none';
    document.getElementById("Women").style.display='none';
}
m.onclick = function(e){
    document.getElementById("computer").style.display='none';
    document.getElementById("videogames").style.display='none';
    document.getElementById("books").style.display='none';
    document.getElementById("Textbooks").style.display='none';
    document.getElementById("Men").style.display='flex';
    document.getElementById("Women").style.display='none';
}
w.onclick = function(e){
    document.getElementById("computer").style.display='none';
    document.getElementById("videogames").style.display='none';
    document.getElementById("books").style.display='none';
    document.getElementById("Textbooks").style.display='none';
    document.getElementById("Men").style.display='none';
    document.getElementById("Women").style.display='flex';
}

comp0.onclick = function(e){
    document.getElementById("popContainer0").style.display="block";
}
popContainer0.onclick = function(e){
    document.getElementById("popContainer0").style.display="none";
}
comp1.onclick = function(e){
    document.getElementById("popContainer1").style.display="block";
}
popContainer1.onclick = function(e){
    document.getElementById("popContainer1").style.display="none";
}
comp2.onclick = function(e){
    document.getElementById("popContainer2").style.display="block";
}
popContainer2.onclick = function(e){
    document.getElementById("popContainer2").style.display="none";
}
comp3.onclick = function(e){
    document.getElementById("popContainer3").style.display="block";
}
popContainer3.onclick = function(e){
    document.getElementById("popContainer3").style.display="none";
}
comp4.onclick = function(e){
    document.getElementById("popContainer4").style.display="block";
}
popContainer4.onclick = function(e){
    document.getElementById("popContainer4").style.display="none";
}
comp5.onclick = function(e){
    document.getElementById("popContainer5").style.display="block";
}
popContainer5.onclick = function(e){
    document.getElementById("popContainer5").style.display="none";
}
comp0_it0.onclick = function(e){
    moreItems()
    var node = document.createElement('div');        
    node.innerHTML = '<a id="item' + count + '" name="item' + count + '">' + document.getElementById("comp0").innerText + '</a>';       
    document.getElementById('displayCart').appendChild(node);
}
comp1_it0.onclick = function(e){
    moreItems()
    var node = document.createElement('div');        
    node.innerHTML = '<a id="item' + count + '" name="item' + count + '">' + document.getElementById("comp1").innerText + '</a>';       
    document.getElementById('displayCart').appendChild(node);
}
comp2_it0.onclick = function(e){
    moreItems()
    var node = document.createElement('div');        
    node.innerHTML = '<a id="item' + count + '" name="item' + count + '">' + document.getElementById("comp2").innerText + '</a>';       
    document.getElementById('displayCart').appendChild(node);
}
comp3_it0.onclick = function(e){
    moreItems()
    var node = document.createElement('div');        
    node.innerHTML = '<a id="item' + count + '" name="item' + count + '">' + document.getElementById("comp3").innerText + '</a>';       
    document.getElementById('displayCart').appendChild(node);
}
comp4_it0.onclick = function(e){
    moreItems()
    var node = document.createElement('div');        
    node.innerHTML = '<a id="item' + count + '" name="item' + count + '">' + document.getElementById("comp4").innerText + '</a>';       
    document.getElementById('displayCart').appendChild(node);
}
comp5_it0.onclick = function(e){
    moreItems()
    var node = document.createElement('div');        
    node.innerHTML = '<a id="item' + count + '" name="item' + count + '">' + document.getElementById("comp5").innerText + '</a>';       
    document.getElementById('displayCart').appendChild(node);
}
function moreItems(){
    count = count + 1;
    document.getElementById("numIt").innerHTML = count;
}