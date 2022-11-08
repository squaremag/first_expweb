//alert("привет, я JS");

function guess() {
    var number = prompt("Введи число:");
//console.log(number)
    var guessNumber = 10;
    if(number > guessNumber) {
        alert("число слишком большое");
        return guess();
    }
else if (number < guessNumber) {
    alert("число слишком маленькое");
    return guess();
}
    else {
        return alert("вы угадали");
    }
}

//guess();

function reminder() {
    alert("вы здесь слишком долго!");
}

//setTimeout(reminder(), 3000);

function valid() {
    var name = document.getElementById("name").value;
    console.log(name);
    var password = document.getElementById("password").value;
    console.log(password);
    
    var reg_name = /^[a-za-яё]+$/i;
    var reg_password = /^[0-9]{5,100}/i;
    
    if(reg_name.test(name) == false) {
        alert("mark in fio");
    }
        if(reg_password.test(password) == false) {
        alert("mark in passline");
    }
}

document.querySelector(".button").addEventListener("click",valid);
