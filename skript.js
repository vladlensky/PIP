function proverka() { 
    var isRtrue = false;
    var isXtrue = false;
    var x = document.getElementsByName('x');
    var y = document.getElementById('field_y').value;
    var inp = document.getElementsByName('r');
    for (var i = 0; i < x.length; i++) {
        if (x[i].checked) {
            isXtrue=true;
        }
    }
    if(!isXtrue){
        alert("Вы не ввели значение для x!");
        return false;
    }
    for (var i = 0; i < inp.length; i++) {
        if (inp[i].checked) {
            isRtrue=true;
        }
    }
    if(y===""){
        alert("Вы не ввели значение для y!");
        return false;
    }
    if(y>5 || y <-5){
        alert("Вы ввели неверное значение для y!");
        return false;
    }
    if(!isRtrue){
        alert("Вы не ввели значение для r!");
        return false;
    }
    return true;
} 