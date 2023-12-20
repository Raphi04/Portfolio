window.onscroll = function(e){
    let header = document.getElementsByTagName('header')[0];
    let accueil = document.getElementById("accueilHead");
    let aPropos = document.getElementById("aProposHead");
    let compétences = document.getElementById("compétencesHead");
    let portfolio = document.getElementById("portfolioHead");
    let contact = document.getElementById("contactHead");
    console.log(window.scrollY);
    if (window.scrollY<"655.5375"){
        aPropos.classList.remove("here");
        accueil.classList.add("here");
        header.style.backgroundColor="rgba(0,0,0,0.300)"
    }else if (window.scrollY<"1585"){
        compétences.classList.remove("here");
        accueil.classList.remove("here");
        aPropos.classList.add("here");
        header.style.backgroundColor="#CC6464";
    }else if ("1585"<=window.scrollY && window.scrollY<"2174"){
        portfolio.classList.remove("here");
        aPropos.classList.remove("here");
        compétences.classList.add("here");
        header.style.backgroundColor="#CC6464";
    }else if (toutClick==1){
        if("2174"<=window.scrollY && window.scrollY<"3737"){
            contact.classList.remove("here");
            compétences.classList.remove("here");
            portfolio.classList.add("here");
            header.style.backgroundColor="#CC6464";
        }else{
            portfolio.classList.remove("here");
            contact.classList.add("here");
            header.style.backgroundColor="#CC6464";
        }
    }else if (devClick==1){
        if("2174"<=window.scrollY && window.scrollY<"3160"){
            contact.classList.remove("here");
            compétences.classList.remove("here");
            portfolio.classList.add("here");
            header.style.backgroundColor="#CC6464";
        }else{
            portfolio.classList.remove("here");
            contact.classList.add("here");
            header.style.backgroundColor="#CC6464";
        }
    }else if (graphClick==1){
        if("2174"<=window.scrollY && window.scrollY<"3160"){
            console.log("caca");
            contact.classList.remove("here");
            compétences.classList.remove("here");
            portfolio.classList.add("here");
            header.style.backgroundColor="#CC6464";
        }else{
            portfolio.classList.remove("here");
            contact.classList.add("here");
            header.style.backgroundColor="#CC6464";
        }
    }else if (redacClick==1){
        if("2174"<=window.scrollY && window.scrollY<"2860"){
            console.log("caca");
            contact.classList.remove("here");
            compétences.classList.remove("here");
            portfolio.classList.add("here");
            header.style.backgroundColor="#CC6464";
        }else{
            portfolio.classList.remove("here");
            contact.classList.add("here");
            header.style.backgroundColor="#CC6464";
        }

    }
}


function scrollDown(cat){
    document.getElementById(cat).scrollIntoView({behavior: "smooth"});
}


function scrollDownFleche(){
    document.getElementById("aPropos").scrollIntoView({behavior: "smooth", block: "start"});
}


function laFleche(){
    document.getElementById("laFleche").classList.toggle("getDown");
}

var graphisme = document.getElementsByClassName("graphisme");
var developpement = document.getElementsByClassName("developpement");
var redaction = document.getElementsByClassName("redaction");
var button = document.getElementsByClassName("portfolioButton");
var devClick = 0;
var graphClick = 0;
var redacClick = 0;
var toutClick = 1;

function onlyGraphisme() {
    for (let i = 0; i < button.length; i++){
        button[i].classList.remove("here2");
    }
    document.getElementById("portfolioGraphisme").classList.add("here2");
    for (let i = 0; i < developpement.length; i++){
        developpement[i].classList.add("invisible");
    }
    for (let i = 0; i < redaction.length; i++) {
        redaction[i].classList.add("invisible");
    }
    for (let i = 0; i < graphisme.length; i++) {
        graphisme[i].classList.remove("invisible");
    }
    devClick = 0;
    redacClick = 0;
    toutClick= 0 ;
    graphClick = 1;
}


function onlyDeveloppement() {
    for (let i = 0; i < button.length; i++){
        button[i].classList.remove("here2");
    }
    document.getElementById("portfolioDeveloppement").classList.add("here2");
    for (let i = 0; i < graphisme.length; i++){
        graphisme[i].classList.add("invisible");
    }
    for (let i = 0; i < redaction.length; i++) {
        redaction[i].classList.add("invisible");
    }
    for (let i = 0; i < developpement.length; i++) {
        developpement[i].classList.remove("invisible");
    }
    devClick = 1;
    redacClick = 0;
    toutClick= 0 ;
    graphClick = 0;
}


function onlyRedaction() {
    for (let i = 0; i < button.length; i++){
        button[i].classList.remove("here2");
    }
    document.getElementById("portfolioRedaction").classList.add("here2");
    for (let i = 0; i < developpement.length; i++){
        developpement[i].classList.add("invisible");
    }
    for (let i = 0; i < graphisme.length; i++) {
        graphisme[i].classList.add("invisible");
    }
    for (let i = 0; i < redaction.length; i++) {
        redaction[i].classList.remove("invisible");
    }
    devClick = 0;
    redacClick = 1;
    toutClick= 0;  
    graphClick = 0;
}


function allDisplay() {
    for (let i = 0; i < button.length; i++){
        button[i].classList.remove("here2");
    }
    document.getElementById("portfolioTout").classList.add("here2");
    for (let i = 0; i < graphisme.length; i++){
        graphisme[i].classList.remove("invisible");
    }
    for (let i = 0; i < redaction.length; i++) {
        redaction[i].classList.remove("invisible");
    }
    for (let i = 0; i < developpement.length; i++) {
        developpement[i].classList.remove("invisible");
    }
    devClick = 0;
    redacClick = 0;
    toutClick= 1;
    graphClick = 0;
}
setInterval(laFleche, 700);