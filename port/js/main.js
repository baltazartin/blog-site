
var portbtn = document.getElementById("port-btn");
var portcont = document.getElementById("port-cont");

if (portbtn) {
    portbtn.addEventListener("click", function() {
var req = new XMLHttpRequest();
req.open('GET', 'http://localhost/portfolio/wp-json/wp/v2/posts');
req.onload = function() {
    if (req.status >= 200 && req.status < 400) {
    var data = JSON.parse(req.responseText);
    createHTML(data);
    portbtn.remove();
    } else {
    console.log("We connected to the server, but it returned an error.");
    }
}  ;

req.onerror = function() {
console.log("Connection error");
};

req.send();
});
}

function createHTML(postsData) {
var ourHTMLString = '';
for (i = 0; i < postsData.length; i++) {
ourHTMLString += '<h2>' + postsData[i].title.rendered + '</h2>';
ourHTMLString += postsData[i].content.rendered;
}
portcont.innerHTML = ourHTMLString;
}