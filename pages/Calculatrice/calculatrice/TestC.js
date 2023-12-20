var resulted="false";
function getNumber(val){
    if (resulted === "true"){
        document.getElementById("borderscreen").innerText="";
        resulted="false";
    }
    document.getElementById("borderscreen").innerText+=val;
}

function result(){
    if (document.getElementById("borderscreen").innerText === ""){
        document.getElementById("borderscreen").innerText = ""
    }else{
        var a = eval(document.getElementById("borderscreen").innerText);
        document.getElementById("borderscreen").innerText=a;
        resulted ="true";
    }
}

function Aclear(){
    document.getElementById("borderscreen").innerText="";
}

function sClear(){
    var a = document.getElementById("borderscreen").innerText;
    document.getElementById("borderscreen").innerText=a.slice(0, -1);
}
document.onkeydown = function(k){
    console.log(k.code);
    switch(k.code){
    case "Enter":
        result();
        break;
    case"NumpadEnter":
        result();
        break;
    case "Numpad0":
        getNumber(0);
        break;
    case "Numpad1":
        getNumber(1);
        break;
    case "Numpad2":
        getNumber(2);
        break;
    case "Numpad3":
        getNumber(3);
        break;
    case "Numpad4":
        getNumber(4);
        break;
    case "Numpad5":
        getNumber(5);
        break;
    case "Numpad6":
        getNumber(6);
        break;
    case "Numpad7":
        getNumber(7);
        break;
    case "Numpad8":
        getNumber(8);
        break;
    case "Numpad9":
        getNumber(9);
        break;
    case "NumpadDecimal":
        getNumber(".");
        break;
    case "NumpadAdd":
        getNumber("+");
        break;
    case "NumpadSubtract":
        getNumber("-");
        break;
    case "NumpadMultiply":
        getNumber("*");
        break;
    case "NumpadDivide":
        getNumber("/");
        break;
    case "Backspace":
        sClear();
        break;
   }
}
window.onerror = function(e){
    document.getElementById("borderscreen").innerHTML="Error";
    resulted="true";
}