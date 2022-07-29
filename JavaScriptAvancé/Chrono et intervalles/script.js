var ds = 0;
var s = 0;
var m = 0;
var dix = document.getElementById("dixieme");
var min = document.getElementById("minute");
var sec = document.getElementById("seconde");
var timer;

function chrono() {
    ds++;
    if (ds>=10) {
        ds = 0;
        s++;
        if (s>=60) {
            s = 0;
            m++;
        }
    }  
}

function add() {
    chrono();
    if (ds<10) {
        dix.innerText = "0" + ds ;
    } else {
        dix.innerText = ds;
    }
    if (s<10) {
        sec.innerText = "0" + s ;
    } else {
        sec.innerText = s;
    }
    if (m<10) {
        min.innerText = "0" + m ;
    } else {
        min.innerText = m;
    }
} 

function reset() {
    clearInterval(timer);
    dix.innerText = "00" ; sec.innerText = "00" ; min.innerText = "00";
    m = 0; s = 0; ds = 0;
}

document.getElementById("start").addEventListener("click", function() {
    clearInterval(timer);
    timer = setInterval(add, 100);
})

document.getElementById("pause").addEventListener("click", function() {
    clearInterval(timer);
})

document.getElementById("clear").addEventListener("click", reset);

