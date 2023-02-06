var word = "";
var count = 0;

letter1.onclick = function(e){
    word = word + document.getElementById("letter1").textContent;
}

letter2.onclick = function(e){
    word = word + document.getElementById("letter2").textContent;
}

letter3.onclick = function(e){
    word = word + document.getElementById("letter3").textContent;
}

letter4.onclick = function(e){
    word = word + document.getElementById("letter4").textContent;
}

letter5.onclick = function(e){
    word = word + document.getElementById("letter5").textContent;
}

letter6.onclick = function(e){
    word = word + document.getElementById("letter6").textContent;
}

letter7.onclick = function(e){
    word = word + document.getElementById("letter7").textContent;
}

letter8.onclick = function(e){
    word = word + document.getElementById("letter8").textContent;
}

letter9.onclick = function(e){
    word = word + document.getElementById("letter9").textContent;
}

letter10.onclick = function(e){
    word = word + document.getElementById("letter10").textContent;
}

letter11.onclick = function(e){
    word = word + document.getElementById("letter11").textContent;
}

createWord.onclick = function(e){
    alert(word);
    var newlabel = document.createElement("label");
    newlabel.setAttribute("for",count);
    newlabel.innerHTML = word;
    newlabel.style.cssText = "background:#FA9797; padding: 8px; margin:10px; margin-top:20px; align:center;";
    document.body.appendChild(newlabel);
    word = "";
    count = count + 1;
}