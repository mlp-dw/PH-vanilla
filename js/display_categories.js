fetch('./process/process_see_category.php')
    .then(function (response){  
         return response.json();
        })       

    .then(function(value) {
        let languagesMenu = document.querySelector("#language");
        languagesMenu.innerHTML = "";
        
        value.forEach(language => {
            let listItem = document.createElement("li");
            listItem.innerHTML =`<a class="dropdown-item" name="groupByLanguage" value="${language.id}" onclick="groupByLanguage(${language.id})">${language.name}</a>`;
            languagesMenu.appendChild(listItem);
        });

                   
    })
    .catch(function(err) {
        console.log("err");
    });


function filterDislikes(dislikes){
    return dislikes.filter((dislike) => {
        return dislike.dislike !== ""; //1 tableau 2 le champs
    });
}

function groupByLanguage(id){
    let data = new FormData();
    data.append("groupByLanguage",id);
    
    fetch('./process/process_groupByLanguage.php', {
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
                  
            let group = document.createElement('div');
            let likes = info.likes;
            let dislikes = info.dislikes;
                
            // on affiche les likes existants
            let likesFilter = filtreLikes(likes);
            // on affiche les dislikes existants
            let dislikesFilter = filterDislikes(dislikes);
            // on affiche le nombre de like / dislike grace au .length
            countLike = likesFilter.length;
            countDislike = dislikesFilter.length;
            
            group.innerHTML = divAPI(info, countLike, countDislike)
                divAPP.appendChild(group);
    
    
                    // ===================================MODALE DIV========================================
                
                    group.addEventListener("click", function(){
                        var myModal = new bootstrap.Modal(document.getElementById('myModal'), options)
                    })
    
                    // =======================================================================================
        
        })//.foreach end 
    })// .then end
    .catch(function(err) {
        console.log(err);
    });
}
        
       

