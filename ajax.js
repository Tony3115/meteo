/*ancienne methode:*/
var request = new XMLHttpRequest();
request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
        callback(request.responseText);
    }
};
request.open('GET', url);
request.send();

/*OpenWeatherMap*/
let apikey = 'f1739d80d7f0995ce57277d5861a6566'
const city = 'Londres'
let url = `https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${apikey}`

var xhr = variable = new XMLHttpRequest();

xhr.open("Get", url, true);
xhr.send()

xhr.onload = function () {
    if (xhr.status != 200) {
        console.log(`Error ${xhr.status}: ${xhr.statusText}`);
    } else {
        console.log(xhr.response);
    }
};
