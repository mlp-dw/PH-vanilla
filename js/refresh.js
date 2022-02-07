// RAFRAICHIR LA PAGE

function refreshMessages() {
    
    fetch('./process/process_see_files.php') // Ce code permet d'envoyer une requête HTTP de type GET au service web
    .then(function (response){
         // pour récupérer le résultat de la requête au format json
            return response.json(); //en ayant vérifié au préalable que la requête s’était bien passée avec response.ok.
        
    })
    .then(function(value) {
        console.log(value);
        let divMessage = document.getElementById("________")
        divMessage.innerHTML = ""; // permet de garder la div parent sans boucler a l'infini les messages (remise a zero de la div avant de réafficher le contenue)
            
        
        value.forEach(message => {
                let myNewDiv = document.createElement('div');
    
                myNewDiv.innerHTML =`
                    
                        <div class="container d-flex flex-column ">
                            <div class="bg-primary rounded-3 bg-opacity-25 mx-3 mt-3 p-2 w-50">
                                <span class="fw-bold fs-5 ">${message.pseudo}</span>
                                <span>${message.content}</span>
                            </div>
                            <div class=" d-flex justify-content-start align-items-end">
                                <span class="text-muted fst-italic fs-6 date-size">${message.date_time}</span>
                            </div>
                        </div>
                        
                
                `;
                divMessage.appendChild(myNewDiv);
                                       
            })
        
        

           
      })
      .catch(function(err) {
        // Une erreur est survenue
      });
    }


//TOUTE LES SECONDES
    setInterval(() => {
    refreshMessages ('../process/process_see_files.php')
    }, 1000);

    

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    

