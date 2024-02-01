resultsContainer = document.getElementById("body");
// const previousData = resultsContainer.innerHTML;
let previousData = '';
function searchUser(){
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
                        if (!previousData) {
                            previousData = resultsContainer.innerHTML;
                        } else {
                            resultsContainer.innerHTML = ''; // Clear previous data
                        }
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
                        resultsContainer.innerHTML = previousData;
                    });
}

function searchByCategory(){
    var term = document.getElementById("search").value;
    const endpoint ='/carlistingcat/'+term;
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
                        if (!previousData) {
                            previousData = resultsContainer.innerHTML;
                        } else {
                            resultsContainer.innerHTML = ''; // Clear previous data
                        }
                        data.forEach(car => {
                            var tableRow = document.createElement("tr");

                            var tableData1 = document.createElement("td");
                            // tableData1.innerHTML = users.id;
                            var tableData2 = document.createElement("td");
                            tableData2.innerHTML = car.category;
                            var tableData3 = document.createElement("td");
                            tableData3.innerHTML = car.make;
                            var tableData4 = document.createElement("td");
                            tableData4.innerHTML = car.model;
                            var tableData5 = document.createElement("td");
                            tableData5.innerHTML = car.year;
                            var tableData6 = document.createElement("td");
                            tableData6.innerHTML = car.color;
                            var tableData7 = document.createElement("td");
                            tableData7.innerHTML = car.transmission;
                            var tableData8 = document.createElement("td");
                            tableData8.innerHTML = car.rentalprice;
                            var tableData9 = document.createElement("td");
                            var tableData10 = document.createElement("td");
                            var tableData11 = document.createElement("td");

                            var image = document.createElement("img");
                            image.src = "/car_images/" + car.image;
                            image.height = "50px";
                            image.width = "50px";

                            var link1 = document.createElement("a");
                            link1.href = "carDetail" + car.id;
                            link1.className = "badge badge-outline-primary";
                            link1.innerText = "View";

                            var link2 = document.createElement("a");
                            link2.href = "";
                            link2.className = "badge badge-outline-success";
                            link2.innerText = "Edit";

                            var link3 = document.createElement("a");
                            link3.href = "";
                            link3.className = "badge badge-outline-danger";
                            link3.innerText = "Delete";

                            // link.className = "badge-outline-primary";
                            // date = new Date(users.created_at);
                            // month = date.getMonth();
                            // year = date.getFullYear();
                            // day = date.getDate();
                            
                            // console.log(new Date(users.created_at));

                            tableData1.appendChild(image);
                            tableRow.appendChild(tableData1);
                            
                            tableRow.appendChild(tableData2);
                            tableRow.appendChild(tableData3);
                            tableRow.appendChild(tableData4);
                            tableRow.appendChild(tableData5);
                            tableRow.appendChild(tableData6);
                            tableRow.appendChild(tableData7);
                            tableRow.appendChild(tableData8);
                            tableData9.appendChild(link1);
                            tableData10.appendChild(link2);
                            tableData11.appendChild(link3);
                            tableRow.appendChild(tableData9);
                            tableRow.appendChild(tableData10);
                            tableRow.appendChild(tableData11);
                            
                            resultsContainer.appendChild(tableRow);
                        });
                    })
                    .catch(error => {
                        console.error('Error: ', error );
                        resultsContainer.innerHTML = previousData;
                    });
}
function searchByMake(){
    var term = document.getElementById("searchmake").value;
    const endpoint ='/carlistingmake/'+term;
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
                        if (!previousData) {
                            previousData = resultsContainer.innerHTML;
                        } else {
                            resultsContainer.innerHTML = ''; // Clear previous data
                        }
                        data.forEach(car => {
                            var tableRow = document.createElement("tr");

                            var tableData1 = document.createElement("td");
                            // tableData1.innerHTML = users.id;
                            var tableData2 = document.createElement("td");
                            tableData2.innerHTML = car.category;
                            var tableData3 = document.createElement("td");
                            tableData3.innerHTML = car.make;
                            var tableData4 = document.createElement("td");
                            tableData4.innerHTML = car.model;
                            var tableData5 = document.createElement("td");
                            tableData5.innerHTML = car.year;
                            var tableData6 = document.createElement("td");
                            tableData6.innerHTML = car.color;
                            var tableData7 = document.createElement("td");
                            tableData7.innerHTML = car.transmission;
                            var tableData8 = document.createElement("td");
                            tableData8.innerHTML = car.rentalprice;
                            var tableData9 = document.createElement("td");
                            var tableData10 = document.createElement("td");
                            var tableData11 = document.createElement("td");

                            var image = document.createElement("img");
                            image.src = "/car_images/" + car.image;
                            image.height = "50px";
                            image.width = "50px";

                            var link1 = document.createElement("a");
                            link1.href = "carDetail" + car.id;
                            link1.className = "badge badge-outline-primary";
                            link1.innerText = "View";

                            var link2 = document.createElement("a");
                            link2.href = "";
                            link2.className = "badge badge-outline-success";
                            link2.innerText = "Edit";

                            var link3 = document.createElement("a");
                            link3.href = "";
                            link3.className = "badge badge-outline-danger";
                            link3.innerText = "Delete";

                            // link.className = "badge-outline-primary";
                            // date = new Date(users.created_at);
                            // month = date.getMonth();
                            // year = date.getFullYear();
                            // day = date.getDate();
                            
                            // console.log(new Date(users.created_at));

                            tableData1.appendChild(image);
                            tableRow.appendChild(tableData1);
                            
                            tableRow.appendChild(tableData2);
                            tableRow.appendChild(tableData3);
                            tableRow.appendChild(tableData4);
                            tableRow.appendChild(tableData5);
                            tableRow.appendChild(tableData6);
                            tableRow.appendChild(tableData7);
                            tableRow.appendChild(tableData8);
                            tableData9.appendChild(link1);
                            tableData10.appendChild(link2);
                            tableData11.appendChild(link3);
                            tableRow.appendChild(tableData9);
                            tableRow.appendChild(tableData10);
                            tableRow.appendChild(tableData11);
                            
                            resultsContainer.appendChild(tableRow);
                        });
                    })
                    .catch(error => {
                        console.error('Error: ', error );
                        resultsContainer.innerHTML = previousData;
                    });
}
function searchByModel(){
    var term = document.getElementById("searchmodel").value;
    const endpoint ='/carlistingmodel/'+term;
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
                        if (!previousData) {
                            previousData = resultsContainer.innerHTML;
                        } else {
                            resultsContainer.innerHTML = ''; // Clear previous data
                        }
                        data.forEach(car => {
                            var tableRow = document.createElement("tr");

                            var tableData1 = document.createElement("td");
                            // tableData1.innerHTML = users.id;
                            var tableData2 = document.createElement("td");
                            tableData2.innerHTML = car.category;
                            var tableData3 = document.createElement("td");
                            tableData3.innerHTML = car.make;
                            var tableData4 = document.createElement("td");
                            tableData4.innerHTML = car.model;
                            var tableData5 = document.createElement("td");
                            tableData5.innerHTML = car.year;
                            var tableData6 = document.createElement("td");
                            tableData6.innerHTML = car.color;
                            var tableData7 = document.createElement("td");
                            tableData7.innerHTML = car.transmission;
                            var tableData8 = document.createElement("td");
                            tableData8.innerHTML = car.rentalprice;
                            var tableData9 = document.createElement("td");
                            var tableData10 = document.createElement("td");
                            var tableData11 = document.createElement("td");

                            var image = document.createElement("img");
                            image.src = "/car_images/" + car.image;
                            image.height = "50px";
                            image.width = "50px";

                            var link1 = document.createElement("a");
                            link1.href = "carDetail" + car.id;
                            link1.className = "badge badge-outline-primary";
                            link1.innerText = "View";

                            var link2 = document.createElement("a");
                            link2.href = "";
                            link2.className = "badge badge-outline-success";
                            link2.innerText = "Edit";

                            var link3 = document.createElement("a");
                            link3.href = "";
                            link3.className = "badge badge-outline-danger";
                            link3.innerText = "Delete";

                            // link.className = "badge-outline-primary";
                            // date = new Date(users.created_at);
                            // month = date.getMonth();
                            // year = date.getFullYear();
                            // day = date.getDate();
                            
                            // console.log(new Date(users.created_at));

                            tableData1.appendChild(image);
                            tableRow.appendChild(tableData1);
                            
                            tableRow.appendChild(tableData2);
                            tableRow.appendChild(tableData3);
                            tableRow.appendChild(tableData4);
                            tableRow.appendChild(tableData5);
                            tableRow.appendChild(tableData6);
                            tableRow.appendChild(tableData7);
                            tableRow.appendChild(tableData8);
                            tableData9.appendChild(link1);
                            tableData10.appendChild(link2);
                            tableData11.appendChild(link3);
                            tableRow.appendChild(tableData9);
                            tableRow.appendChild(tableData10);
                            tableRow.appendChild(tableData11);
                            
                            resultsContainer.appendChild(tableRow);
                        });
                    })
                    .catch(error => {
                        console.error('Error: ', error );
                        resultsContainer.innerHTML = previousData;
                    });
}
function searchByTransmission(){
    var term = document.getElementById("searchtrans").value;
    const endpoint ='/carlistingtrans/'+term;
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
                        if (!previousData) {
                            previousData = resultsContainer.innerHTML;
                        } else {
                            resultsContainer.innerHTML = ''; // Clear previous data
                        }
                        data.forEach(car => {
                            var tableRow = document.createElement("tr");

                            var tableData1 = document.createElement("td");
                            // tableData1.innerHTML = users.id;
                            var tableData2 = document.createElement("td");
                            tableData2.innerHTML = car.category;
                            var tableData3 = document.createElement("td");
                            tableData3.innerHTML = car.make;
                            var tableData4 = document.createElement("td");
                            tableData4.innerHTML = car.model;
                            var tableData5 = document.createElement("td");
                            tableData5.innerHTML = car.year;
                            var tableData6 = document.createElement("td");
                            tableData6.innerHTML = car.color;
                            var tableData7 = document.createElement("td");
                            tableData7.innerHTML = car.transmission;
                            var tableData8 = document.createElement("td");
                            tableData8.innerHTML = car.rentalprice;
                            var tableData9 = document.createElement("td");
                            var tableData10 = document.createElement("td");
                            var tableData11 = document.createElement("td");

                            var image = document.createElement("img");
                            image.src = "/car_images/" + car.image;
                            image.height = "50px";
                            image.width = "50px";

                            var link1 = document.createElement("a");
                            link1.href = "carDetail" + car.id;
                            link1.className = "badge badge-outline-primary";
                            link1.innerText = "View";

                            var link2 = document.createElement("a");
                            link2.href = "";
                            link2.className = "badge badge-outline-success";
                            link2.innerText = "Edit";

                            var link3 = document.createElement("a");
                            link3.href = "";
                            link3.className = "badge badge-outline-danger";
                            link3.innerText = "Delete";

                            // link.className = "badge-outline-primary";
                            // date = new Date(users.created_at);
                            // month = date.getMonth();
                            // year = date.getFullYear();
                            // day = date.getDate();
                            
                            // console.log(new Date(users.created_at));

                            tableData1.appendChild(image);
                            tableRow.appendChild(tableData1);
                            
                            tableRow.appendChild(tableData2);
                            tableRow.appendChild(tableData3);
                            tableRow.appendChild(tableData4);
                            tableRow.appendChild(tableData5);
                            tableRow.appendChild(tableData6);
                            tableRow.appendChild(tableData7);
                            tableRow.appendChild(tableData8);
                            tableData9.appendChild(link1);
                            tableData10.appendChild(link2);
                            tableData11.appendChild(link3);
                            tableRow.appendChild(tableData9);
                            tableRow.appendChild(tableData10);
                            tableRow.appendChild(tableData11);
                            
                            resultsContainer.appendChild(tableRow);
                        });
                    })
                    .catch(error => {
                        console.error('Error: ', error );
                        resultsContainer.innerHTML = previousData;
                    });
}
function searchByYearup(){
    var term = document.getElementById("searchyearup").value;
    const endpoint ='/carlistingyearup/'+term;
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
                        if (!previousData) {
                            previousData = resultsContainer.innerHTML;
                        } else {
                            resultsContainer.innerHTML = ''; // Clear previous data
                        }
                        data.forEach(car => {
                            var tableRow = document.createElement("tr");

                            var tableData1 = document.createElement("td");
                            // tableData1.innerHTML = users.id;
                            var tableData2 = document.createElement("td");
                            tableData2.innerHTML = car.category;
                            var tableData3 = document.createElement("td");
                            tableData3.innerHTML = car.make;
                            var tableData4 = document.createElement("td");
                            tableData4.innerHTML = car.model;
                            var tableData5 = document.createElement("td");
                            tableData5.innerHTML = car.year;
                            var tableData6 = document.createElement("td");
                            tableData6.innerHTML = car.color;
                            var tableData7 = document.createElement("td");
                            tableData7.innerHTML = car.transmission;
                            var tableData8 = document.createElement("td");
                            tableData8.innerHTML = car.rentalprice;
                            var tableData9 = document.createElement("td");
                            var tableData10 = document.createElement("td");
                            var tableData11 = document.createElement("td");

                            var image = document.createElement("img");
                            image.src = "/car_images/" + car.image;
                            image.height = "50px";
                            image.width = "50px";

                            var link1 = document.createElement("a");
                            link1.href = "carDetail" + car.id;
                            link1.className = "badge badge-outline-primary";
                            link1.innerText = "View";

                            var link2 = document.createElement("a");
                            link2.href = "";
                            link2.className = "badge badge-outline-success";
                            link2.innerText = "Edit";

                            var link3 = document.createElement("a");
                            link3.href = "";
                            link3.className = "badge badge-outline-danger";
                            link3.innerText = "Delete";

                            // link.className = "badge-outline-primary";
                            // date = new Date(users.created_at);
                            // month = date.getMonth();
                            // year = date.getFullYear();
                            // day = date.getDate();
                            
                            // console.log(new Date(users.created_at));

                            tableData1.appendChild(image);
                            tableRow.appendChild(tableData1);
                            
                            tableRow.appendChild(tableData2);
                            tableRow.appendChild(tableData3);
                            tableRow.appendChild(tableData4);
                            tableRow.appendChild(tableData5);
                            tableRow.appendChild(tableData6);
                            tableRow.appendChild(tableData7);
                            tableRow.appendChild(tableData8);
                            tableData9.appendChild(link1);
                            tableData10.appendChild(link2);
                            tableData11.appendChild(link3);
                            tableRow.appendChild(tableData9);
                            tableRow.appendChild(tableData10);
                            tableRow.appendChild(tableData11);
                            
                            resultsContainer.appendChild(tableRow);
                        });
                    })
                    .catch(error => {
                        console.error('Error: ', error );
                        resultsContainer.innerHTML = previousData;
                    });
}

function searchByYeardown(){
    var term = document.getElementById("searchyeardown").value;
    const endpoint ='/carlistingyeardown/'+term;
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
                        if (!previousData) {
                            previousData = resultsContainer.innerHTML;
                        } else {
                            resultsContainer.innerHTML = ''; // Clear previous data
                        }
                        data.forEach(car => {
                            var tableRow = document.createElement("tr");

                            var tableData1 = document.createElement("td");
                            // tableData1.innerHTML = users.id;
                            var tableData2 = document.createElement("td");
                            tableData2.innerHTML = car.category;
                            var tableData3 = document.createElement("td");
                            tableData3.innerHTML = car.make;
                            var tableData4 = document.createElement("td");
                            tableData4.innerHTML = car.model;
                            var tableData5 = document.createElement("td");
                            tableData5.innerHTML = car.year;
                            var tableData6 = document.createElement("td");
                            tableData6.innerHTML = car.color;
                            var tableData7 = document.createElement("td");
                            tableData7.innerHTML = car.transmission;
                            var tableData8 = document.createElement("td");
                            tableData8.innerHTML = car.rentalprice;
                            var tableData9 = document.createElement("td");
                            var tableData10 = document.createElement("td");
                            var tableData11 = document.createElement("td");

                            var image = document.createElement("img");
                            image.src = "/car_images/" + car.image;
                            image.height = "50px";
                            image.width = "50px";

                            var link1 = document.createElement("a");
                            link1.href = "carDetail" + car.id;
                            link1.className = "badge badge-outline-primary";
                            link1.innerText = "View";

                            var link2 = document.createElement("a");
                            link2.href = "";
                            link2.className = "badge badge-outline-success";
                            link2.innerText = "Edit";

                            var link3 = document.createElement("a");
                            link3.href = "";
                            link3.className = "badge badge-outline-danger";
                            link3.innerText = "Delete";

                            // link.className = "badge-outline-primary";
                            // date = new Date(users.created_at);
                            // month = date.getMonth();
                            // year = date.getFullYear();
                            // day = date.getDate();
                            
                            // console.log(new Date(users.created_at));

                            tableData1.appendChild(image);
                            tableRow.appendChild(tableData1);
                            
                            tableRow.appendChild(tableData2);
                            tableRow.appendChild(tableData3);
                            tableRow.appendChild(tableData4);
                            tableRow.appendChild(tableData5);
                            tableRow.appendChild(tableData6);
                            tableRow.appendChild(tableData7);
                            tableRow.appendChild(tableData8);
                            tableData9.appendChild(link1);
                            tableData10.appendChild(link2);
                            tableData11.appendChild(link3);
                            tableRow.appendChild(tableData9);
                            tableRow.appendChild(tableData10);
                            tableRow.appendChild(tableData11);
                            
                            resultsContainer.appendChild(tableRow);
                        });
                    })
                    .catch(error => {
                        console.error('Error: ', error );
                        resultsContainer.innerHTML = previousData;
                    });
}
function searchByRentalPriceup(){
    var term = document.getElementById("searchrentalpriceup").value;
    const endpoint ='/carlistingrentalpriceup/'+term;
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
                        if (!previousData) {
                            previousData = resultsContainer.innerHTML;
                        } else {
                            resultsContainer.innerHTML = ''; // Clear previous data
                        }
                        data.forEach(car => {
                            var tableRow = document.createElement("tr");

                            var tableData1 = document.createElement("td");
                            // tableData1.innerHTML = users.id;
                            var tableData2 = document.createElement("td");
                            tableData2.innerHTML = car.category;
                            var tableData3 = document.createElement("td");
                            tableData3.innerHTML = car.make;
                            var tableData4 = document.createElement("td");
                            tableData4.innerHTML = car.model;
                            var tableData5 = document.createElement("td");
                            tableData5.innerHTML = car.year;
                            var tableData6 = document.createElement("td");
                            tableData6.innerHTML = car.color;
                            var tableData7 = document.createElement("td");
                            tableData7.innerHTML = car.transmission;
                            var tableData8 = document.createElement("td");
                            tableData8.innerHTML = car.rentalprice;
                            var tableData9 = document.createElement("td");
                            var tableData10 = document.createElement("td");
                            var tableData11 = document.createElement("td");

                            var image = document.createElement("img");
                            image.src = "/car_images/" + car.image;
                            image.height = "50px";
                            image.width = "50px";

                            var link1 = document.createElement("a");
                            link1.href = "carDetail" + car.id;
                            link1.className = "badge badge-outline-primary";
                            link1.innerText = "View";

                            var link2 = document.createElement("a");
                            link2.href = "";
                            link2.className = "badge badge-outline-success";
                            link2.innerText = "Edit";

                            var link3 = document.createElement("a");
                            link3.href = "";
                            link3.className = "badge badge-outline-danger";
                            link3.innerText = "Delete";

                            // link.className = "badge-outline-primary";
                            // date = new Date(users.created_at);
                            // month = date.getMonth();
                            // year = date.getFullYear();
                            // day = date.getDate();
                            
                            // console.log(new Date(users.created_at));

                            tableData1.appendChild(image);
                            tableRow.appendChild(tableData1);
                            
                            tableRow.appendChild(tableData2);
                            tableRow.appendChild(tableData3);
                            tableRow.appendChild(tableData4);
                            tableRow.appendChild(tableData5);
                            tableRow.appendChild(tableData6);
                            tableRow.appendChild(tableData7);
                            tableRow.appendChild(tableData8);
                            tableData9.appendChild(link1);
                            tableData10.appendChild(link2);
                            tableData11.appendChild(link3);
                            tableRow.appendChild(tableData9);
                            tableRow.appendChild(tableData10);
                            tableRow.appendChild(tableData11);
                            
                            resultsContainer.appendChild(tableRow);
                        });
                    })
                    .catch(error => {
                        console.error('Error: ', error );
                        resultsContainer.innerHTML = previousData;
                    });
}

function searchByRentalPricedown(){
    var term = document.getElementById("searchrentalpricedown").value;
    const endpoint ='/carlistingrentalpricedown/'+term;
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
                        if (!previousData) {
                            previousData = resultsContainer.innerHTML;
                        } else {
                            resultsContainer.innerHTML = ''; // Clear previous data
                        }
                        data.forEach(car => {
                            var tableRow = document.createElement("tr");

                            var tableData1 = document.createElement("td");
                            // tableData1.innerHTML = users.id;
                            var tableData2 = document.createElement("td");
                            tableData2.innerHTML = car.category;
                            var tableData3 = document.createElement("td");
                            tableData3.innerHTML = car.make;
                            var tableData4 = document.createElement("td");
                            tableData4.innerHTML = car.model;
                            var tableData5 = document.createElement("td");
                            tableData5.innerHTML = car.year;
                            var tableData6 = document.createElement("td");
                            tableData6.innerHTML = car.color;
                            var tableData7 = document.createElement("td");
                            tableData7.innerHTML = car.transmission;
                            var tableData8 = document.createElement("td");
                            tableData8.innerHTML = car.rentalprice;
                            var tableData9 = document.createElement("td");
                            var tableData10 = document.createElement("td");
                            var tableData11 = document.createElement("td");

                            var image = document.createElement("img");
                            image.src = "/car_images/" + car.image;
                            image.height = "50px";
                            image.width = "50px";

                            var link1 = document.createElement("a");
                            link1.href = "carDetail" + car.id;
                            link1.className = "badge badge-outline-primary";
                            link1.innerText = "View";

                            var link2 = document.createElement("a");
                            link2.href = "";
                            link2.className = "badge badge-outline-success";
                            link2.innerText = "Edit";

                            var link3 = document.createElement("a");
                            link3.href = "";
                            link3.className = "badge badge-outline-danger";
                            link3.innerText = "Delete";

                            // link.className = "badge-outline-primary";
                            // date = new Date(users.created_at);
                            // month = date.getMonth();
                            // year = date.getFullYear();
                            // day = date.getDate();
                            
                            // console.log(new Date(users.created_at));

                            tableData1.appendChild(image);
                            tableRow.appendChild(tableData1);
                            
                            tableRow.appendChild(tableData2);
                            tableRow.appendChild(tableData3);
                            tableRow.appendChild(tableData4);
                            tableRow.appendChild(tableData5);
                            tableRow.appendChild(tableData6);
                            tableRow.appendChild(tableData7);
                            tableRow.appendChild(tableData8);
                            tableData9.appendChild(link1);
                            tableData10.appendChild(link2);
                            tableData11.appendChild(link3);
                            tableRow.appendChild(tableData9);
                            tableRow.appendChild(tableData10);
                            tableRow.appendChild(tableData11);
                            
                            resultsContainer.appendChild(tableRow);
                        });
                    })
                    .catch(error => {
                        console.error('Error: ', error );
                        resultsContainer.innerHTML = previousData;
                    });
}

function searchCategory(){
    var term = document.getElementById("search").value;
    const endpoint ='/categorylisting/'+term;
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
                        if (!previousData) {
                            previousData = resultsContainer.innerHTML;
                        } else {
                            resultsContainer.innerHTML = ''; // Clear previous data
                        }
                        data.forEach(cat => {
                            var tableRow = document.createElement("tr");

                            var tableData2 = document.createElement("td");
                            var tableData3 = document.createElement("td");
                            tableData3.innerHTML = cat.name;
                            var tableData4 = document.createElement("td");
                            tableData4.innerHTML = cat.description;
                            var tableData7 = document.createElement("td");

                            var image = document.createElement("img");
                            image.src = "/category_images/" + cat.image;
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

                            tableData2.appendChild(image);
                            tableRow.appendChild(tableData2);
                            tableRow.appendChild(tableData3);
                            tableRow.appendChild(tableData4);
                            tableRow.appendChild(tableData7);
                            tableData7.appendChild(link);
                            
                            resultsContainer.appendChild(tableRow);
                        });
                    })
                    .catch(error => {
                        console.error('Error: ', error );
                        resultsContainer.innerHTML = previousData;
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