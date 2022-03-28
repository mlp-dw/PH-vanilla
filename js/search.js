function fetchProduct(){
    let data = new FormData();
    data.append('search', document.querySelector('#searchBar').value);

    fetch('./process/process_search.php', {
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
            let comments = info.comments;
                    
            // on affiche les likes existants
            let likesFilter = filtreLikes(likes);
            // on affiche les comments existants
            let commentsFilter = filterComments(comments);
            let showComment = commentsFilter.map(comment => comment["comment"])[0];
            // on affiche le nombre de like / comment grace au .length

            countLike = likesFilter.length;
            countComment = commentsFilter.length;
    
            searching.innerHTML = divAPI(info, showComment);
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


// AFFICHER LA RECHERCHE EN TEMPS REEL

// document.addEventListener("DOMContentLoaded", fetchProduct())
// let searchProduct = document.querySelector("#searchBar")   
// searchProduct.addEventListener("input", e => {
//     let element = e.target.info
//     let newProduct = info.name.filter(product => product.includes(element))
//     showProduct(newProduct)
// })
        
    


