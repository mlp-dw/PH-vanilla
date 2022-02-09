function search_post() {
    let input = document.getElementById('myInput').value
    let x = document.getElementsByClassName('post');
      
    for (i = 0; i < x.length; i++) { 
        if (!x[i].innerHTML.includes(input)) {
            x[i].style.display="none";
        }
        else {
            x[i].style.display="list-item";                 
        }
    }
}