function filterDislikes(dislikes){
    return dislikes.filter((dislike) => {
        return dislike.dislike !== ""; //1 tableau 2 le champs
    });
}

function filterDislikes(dislikes){
    return dislikes.filter((dislike) => {
        return dislike.dislike !== ""; //1 tableau 2 le champs
    });
}

function searchProduct(){
    let data = new FormData();
    data.append('search', document.querySelector('#searchBar').value);

    fetch('/process/process_search.php', {
        method: 'POST',
        body: data
    })
    .then(function (response){
        return response.json();             
    })
    .then(function(value) {
        let divAPP = document.getElementById("app");
        divAPP.innerHTML = "";

        value.forEach(info => {
            
            let searching = document.createElement('div');
            let likes = info.likes;
            let dislikes = info.dislikes;
                    
            // on affiche les likes existants
            let likesFilter = filtreLikes(likes);
            // on affiche les dislikes existants
            let dislikesFilter = filterDislikes(dislikes);
            // on affiche le nombre de like / dislike grace au .length

            countLike = likesFilter.length;
            countDislike = dislikesFilter.length;
    
            searching.innerHTML = divAPI(info, countLike, countDislike);
                divAPP.appendChild(searching);
    
    
                    // ===================================MODALE DIV========================================
                
                    searching.addEventListener("click", function(){
                        var myModal = new bootstrap.Modal(document.getElementById('myModal'), options)
                    })
    
                    // =======================================================================================

        })//.foreach end 
        //showProduct(value);
            
    })// .then
    .catch(function(err) {
        console.log(err);
    });
}