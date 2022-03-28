function addLike(){
    let data = new FormData();
    data.append("like", document.querySelector('#searchBar').value);

    fetch('./process/process_up.php', {
        method: 'POST',
        body: data
    })
    .then(function (response){  
        return response.json();
    })       

    .then(function(value) {
        let x = document.querySelector("");
        x.innerHTML = "";
            
        value.forEach(language => {
            let listItem = document.createElement("li");
            listItem.innerHTML =`<a class="dropdown-item" name="groupByLanguage" value="${language.id}" onclick="groupByLanguage(${language.id})">${language.name}</a>`;
            x.appendChild(listItem);
        });

                    
    })
    .catch(function(err) {
            console.log(err);
    });
}