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
        console.log("erreur");
    });

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
                    
            let searching = document.createElement('div');
            let ups = info.likes;
            let comments = info.comments;
                            
               let upsFilter = ups.filter((up) => {
                return up.up !== ""; 
            });
            
            let commentsFilter = comments.filter((comment) => {
                return comment.comment !== ""; //1 tableau 2 le champs
            });
        
               let countUP = upsFilter.length;
            let countComment = commentsFilter.length;
            
            searching.innerHTML = divAPI(info)
                divAPP.appendChild(searching);
    
    
                    // ===================================MODALE DIV========================================
                
                    searching.addEventListener("click", function(){
                        var myModal = new bootstrap.Modal(document.getElementById('myModal'), options)
                    })
    
                    // =======================================================================================
        
        })//.foreach end 
    })// .then end
    .catch(function(err) {
        console.log("erreur");
    });
}
        
       

