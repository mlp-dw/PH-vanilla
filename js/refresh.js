// RAFRAICHIR LA PAGE

// function refreshMessages() {
    
    fetch('./process/process_see_files.php') // Ce code permet d'envoyer une requête HTTP de type GET au service web
    .then(function (response){
        console.log(response);
         // pour récupérer le résultat de la requête au format json
            return response.json(); //en ayant vérifié au préalable que la requête s’était bien passée avec response.ok.
    })
    .then(function(value) {
        console.log(value);
        let divAPP = document.getElementById("app");
        divAPP.innerHTML = ""; // permet de garder la div parent sans boucler a l'infini les messages (remise a zero de la div avant de réafficher le contenue)
            
        
        value.forEach(info => {
                let iSeeYou = document.createElement('div');
                iSeeYou.innerHTML =`
                    
                <div class="row">

                    <div class="col-12 col-sm-6 col-md-3 my-auto" >
                        <img src="${info.images}" class="img-fluid rounded-start" alt="...">
                    </div>
        
                    
                    <div class="col-12 col-sm-6 col-md-6 card-body">
                        <h5 class="card-title">${info.name} <span class="text-muted">${info.category}</span></h5>
                        <p class="card-text">${info.description}</p>
                    </div>

                    <div class="col-12 col-sm-6 col-md-3 my-auto d-flex-column">
                        <span class="btn btn-outline-dark m-2">${info.up}</span>
                        <span class="btn btn-outline-dark m-2">${info.comment}</span>
                    </div>

                </div>
                `;
                divAPP.appendChild(iSeeYou);
                                       
            })
        
        

           
      })
      .catch(function(err) {
        // Une erreur est survenue
      });
    //}


// //TOUTE LES SECONDES
//     setInterval(() => {
//     refreshMessages ('../process/process_see_files.php')
//     }, 1000);

    

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    

