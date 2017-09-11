function proverka() { 
    var b = 0;
    var c = 0;
    var x = document.getElementsByName('x');
    var y = document.getElementById('field_y').value;
    var inp = document.getElementsByName('r');
    for (var i = 0; i < x.length; i++) {
        if (x[i].checked) {
            c++;
        }
    }
    if(c===0){
        alert("Вы не ввели значение для x!");
        return false;
    }
    for (var i = 0; i < inp.length; i++) {
        if (inp[i].checked) {
            b++;
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
    if(b===0){
        alert("Вы не ввели значение для r!");
        return false;
    }
    return true;
} 