let count1 = 0;
let count2 = 0;
let count3 = 0;
let count4 = 0;
let count5 = 0;

function cats(x) {

    if(x === 1){
        count1 = count1+1;
        console.log(count1)
    }

    if(count1 === 1){
        document.getElementById("cats").style.background = '#FFCB60';
    }
    else if(count1 === 2){
        document.getElementById("cats").style.background = '#FEDAA4';
        count1 = 0;
    }
}

function dogs(x) {

    if(x === 1){
        count2 = count2+1;
        console.log(count2)
    }

    if(count2 === 1){
        document.getElementById("dogs").style.background = '#FFCB60';
    }
    else if(count2 === 2){
        document.getElementById("dogs").style.background = '#FEDAA4';
        count2 = 0;
    }
}

function health1(x) {

    if(x === 1){
        count3 = count3+1;
        console.log(count3)
    }

    if(count3 === 1){
        document.getElementById("health1").style.background = '#FFCB60';
    }
    else if(count3 === 2){
        document.getElementById("health1").style.background = '#FEDAA4';
        count3 = 0;
    }
}

function health2(x) {

    if(x === 1){
        count4 = count4+1;
        console.log(count4)
    }

    if(count4 === 1){
        document.getElementById("health2").style.background = '#FFCB60';
    }
    else if(count4 === 2){
        document.getElementById("health2").style.background = '#FEDAA4';
        count4 = 0;
    }
}

function health3(x) {

    if(x === 1){
        count5 = count5+1;
        console.log(count5)
    }

    if(count5 === 1){
        document.getElementById("health3").style.background = '#FFCB60';
    }
    else if(count5 === 2){
        document.getElementById("health3").style.background = '#FEDAA4';
        count5 = 0;
    }
}

