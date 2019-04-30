
function makeRequest(url, method, formdata, callback) {

    var headers
    
    if(method == "GET" || !formdata) {
        headers = {
            method: method
        }
    } else {
        headers = {
            method: method,
            body: formdata
        }
    }

    fetch(url, headers).then((data) => {
        return data.json();
    }).then((result) => {
        callback(result);
    }).catch((err) => {
        console.log(err);
    })
}
// Koppling mot databas i .php dokumenten
function getHoroscope() {
    makeRequest("viewHoroscope.php", "GET", undefined, (response) => {
        if(response == '') {
            document.querySelector('.return-feedback').innerHTML = '';
        }else {
            document.querySelector('.return-feedback').innerHTML = JSON.stringify(response[0].horoscopeSign);
        }

    })
}

// Koppling mot databas i .php dokumenten
function addHoroscope() {
    var date = document.querySelector('#date').value;
    
    if(date == '') {
        document.querySelector('.return-feedback').innerHTML = "Lägg till datum!";
        console.log(false);
        return;
    }

    var requestData = new FormData();
    
    var newDate = '';
    
    if(date.slice(5, 7) == 01 && date.slice(8, 10) <= 19) {
        newDate = '2001' + date.slice(4);
    } else {
        newDate = '2000' + date.slice(4);
    }
    
    requestData.append('dateValue', newDate);
    requestData.append('action', 'add');
    
    makeRequest("addHoroscope.php", "POST", requestData, (response) => {
        if(response == 'true') {
            getHoroscope();
        } else if (response == 'false') {
            document.querySelector('.return-feedback').innerHTML = "Spara eller uppdatera innan du försöker med en ny!"
        }
        
        console.log(response);
        
    })
}

// Koppling mot databas i .php dokumenten
function updateHoroscope() {
    var date = document.querySelector('#date').value;
    
    if(date == '') {
        document.querySelector('.return-feedback').innerHTML = "Inget datum valt, välj!";
        console.log(false);
        return;
    }

    var requestData = new FormData();

    var newDate = '';

    if(date.slice(5, 7) == 01 && date.slice(8, 10) <= 19) {
        newDate = '2001' + date.slice(4);
    } else {
        newDate = '2000' + date.slice(4);
    }

    requestData.append('dateValue', newDate);
    requestData.append('action', 'update');


    makeRequest("updateHoroscope.php", "POST", requestData, (response) => {
        if(response == 'true') {
            console.log(response);
            getHoroscope();
        } else if (response == 'false') {
            console.log(response);
        }
    });
}
// Koppling mot databas i .php dokumenten
function deleteHoroscope() {
    makeRequest("deleteHoroscope.php", "DELETE", undefined, (response) => {
        console.log(response);
        if(response == true) {
            document.querySelector('.return-feedback').innerHTML = 'Horoskop borttaget';
        } else {
            document.querySelector('.return-feedback').innerHTML = 'Inget går att ta bort..';
        }

    })
}