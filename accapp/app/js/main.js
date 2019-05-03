function toggleMenu(){
    var n = document.getElementById('sidebar');
    if(n.classList.contains('snavhide')){
        n.classList.remove("snavhide");
        n.classList.add("snavshow");
    }
    else{
        n.classList.remove("snavshow");
        n.classList.add("snavhide");
    }
}