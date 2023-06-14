var btn1 = document.querySelector('#btnHtml');
var div1 = document.querySelector('#div1');

btn1.addEventListener('click', function () {

    if (div1.style.display === 'block') {
        div1.style.display = 'none';
        
    } else {
        div1.style.display = 'block';
        div2.style.display = 'none';
        div3.style.display = 'none';
        div4.style.display = 'none';
        div5.style.display = 'none';
        div6.style.display = 'none';
        div7.style.display = 'none';
    }

});


var btn2 = document.querySelector('#btnJavascript');
var div2 = document.querySelector('#div2');

btn2.addEventListener('click', function () {

    if (div2.style.display === 'block') {
        div2.style.display = 'none';
    } else {
        div2.style.display = 'block';
        div1.style.display = 'none';
        div3.style.display = 'none';
        div4.style.display = 'none';
        div5.style.display = 'none';
        div6.style.display = 'none';
        div7.style.display = 'none';
    }

});


var btn3 = document.querySelector('#btnC');
var div3 = document.querySelector('#div3');

btn3.addEventListener('click', function () {
    if (div3.style.display === 'block') {
        div3.style.display = 'none';
    } else {
        div3.style.display = 'block';
        div1.style.display = 'none';
        div2.style.display = 'none';
        div4.style.display = 'none';
        div5.style.display = 'none';
        div6.style.display = 'none';
        div7.style.display = 'none';
    }
});


var btn4 = document.querySelector('#btnPython');
var div4 = document.querySelector('#div4');

btn4.addEventListener('click', function () {
    if (div4.style.display === 'block') {
        div4.style.display = 'none';
    } else {
        div4.style.display = 'block';
        div1.style.display = 'none';
        div2.style.display = 'none';
        div3.style.display = 'none';
        div5.style.display = 'none';
        div6.style.display = 'none';
        div7.style.display = 'none';
    }
});

var btn5 = document.querySelector('#btnSql');
var div5 = document.querySelector('#div5');

btn5.addEventListener('click', function () {
    if (div5.style.display === 'block') {
        div5.style.display = 'none';
    } else {
        div5.style.display = 'block';
        div1.style.display = 'none';
        div2.style.display = 'none';
        div3.style.display = 'none';
        div4.style.display = 'none';
        div6.style.display = 'none';
        div7.style.display = 'none';
    }
});

var btn6 = document.querySelector('#btnGit');
var div6 = document.querySelector('#div6');

btn6.addEventListener('click', function () {
    if (div6.style.display === 'block') {
        div6.style.display = 'none';
    } else {
        div6.style.display = 'block';
        div1.style.display = 'none';
        div2.style.display = 'none';
        div3.style.display = 'none';
        div4.style.display = 'none';
        div5.style.display = 'none';
        div7.style.display = 'none';
    }
});


var btn7 = document.querySelector('#btnFigma');
var div7 = document.querySelector('#div7');

btn7.addEventListener('click', function () {
    if (div7.style.display === 'block') {
        div7.style.display = 'none';
    } else {
        div7.style.display = 'block';
        div1.style.display = 'none';
        div2.style.display = 'none';
        div3.style.display = 'none';
        div4.style.display = 'none';
        div5.style.display = 'none';
        div6.style.display = 'none';
    }
})