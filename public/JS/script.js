function search(){
    var term = document.getElementById("search").value;
    const endpoint ='/userlisting/'+term;
    const userList = document.getElementById('userList');
    userList.innerHTML="";

    console.log(endpoint); 

    //Fetch API
    fetch(endpoint).then(response => {if(!response.ok){throw new Error ('HTTP error! Status: $(response.status)');
                                            }
                                    return response.json();
                                    })
                    .then(data => {
                        resultsContainer = document.getElementById("body");
                        resultsContainer.innerHTML = '';
                        data.forEach(users => {
                            var tableRow = document.createElement("tr");

                            var tableData1 = document.createElement("td");
                            tableData1.innerHTML = users.id;
                            var tableData2 = document.createElement("td");
                            var tableData3 = document.createElement("td");
                            tableData3.innerHTML = users.name;
                            var tableData4 = document.createElement("td");
                            tableData4.innerHTML = users.email;
                            var tableData5 = document.createElement("td");
                            tableData5.innerHTML = users.phone;
                            var tableData6 = document.createElement("td");
                            tableData6.innerHTML = users.address;
                            var tableData7 = document.createElement("td");

                            var image = document.createElement("img");
                            image.src = "" + users.profile_photo_path;
                            image.height = "50px";
                            image.width = "50px";

                            var link = document.createElement("a");
                            link.href = "";
                            link.className = "badge badge-outline-primary";
                            // link.className = "badge-outline-primary";
                            // date = new Date(users.created_at);
                            // month = date.getMonth();
                            // year = date.getFullYear();
                            // day = date.getDate();
                            link.innerText = "View";
                            // console.log(new Date(users.created_at));

                            tableRow.appendChild(tableData1);
                            tableData2.appendChild(image);
                            tableRow.appendChild(tableData2);
                            tableRow.appendChild(tableData3);
                            tableRow.appendChild(tableData4);
                            tableRow.appendChild(tableData5);
                            tableRow.appendChild(tableData6);
                            tableRow.appendChild(tableData7);
                            tableData7.appendChild(link);
                            
                            resultsContainer.appendChild(tableRow);
                        });
                    })
                    .catch(error => {
                        console.error('Error: ', error );
                    });
}

function suggest(){
    var term = document.getElementById("search").value;
    const endpoint ='/userlisting/'+term;
    const userList = document.getElementById('userList');
    userList.innerHTML="";

    console.log(endpoint); 

    //Fetch API
    fetch(endpoint).then(response => {if(!response.ok){throw new Error ('HTTP error! Status: $(response.status)');
                                            }
                                    return response.json();
                                    })
                    .then(data => {
                        data.forEach(users => {
                            const listItem=document.createElement('li');
                            listItem.innerHTML=users.name;
                            userList.appendChild(listItem);
                            console.log(listItem)
                        });
                    })
                    .catch(error => {
                        console.error('Error: ', error );
                    });
}