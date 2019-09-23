function closePopup(id){
    var popup = document.getElementById(id);
    popup.classList.remove("show");
}


function loginClick(open,close){
    closePopup(close);
    var popup = document.getElementById(open);
    popup.classList.add("show");
}

function openNewPage(){

}


function getRndInteger(min, max) {
    return Math.floor(Math.random() * (max - min)) + min;
}


function getRndInteger(min, max) {
    return Math.floor(Math.random() * (max - min)) + min;
}
