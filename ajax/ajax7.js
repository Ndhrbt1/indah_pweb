function createXMLHttpObjectx () {
var xmlhttp = false;
try {
xmlhttp = new ActiveXObject ("Msxml2.XMLHTTP"); 
} catch (e) {
try {
xmlhttp = new ActiveXObject ("Microsoft.XMLHTTP"); 
} catch (E) {
xmlhttp = false;
}
}
if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
  xmlhttp = new XMLHttpRequest();
}
if (!xmlhttp) {
  alert("Terjadi kesalahan saat pembuatan XMLHttpRequest object!");
}
return xmlhttp;
}

function requestContent () {
reqObj = createXMLHttpObjectx();
reqObj.open("GET", "http://127.0.0.1:8080/ajax/contactList.xml", true);
reqObj.onreadystatechange = function () {
if (reqObj.readyState == 4 && reqObj.status == 200) { 
dataXML = reqObj.responseXML;
contact = dataXML.getElementsByTagName ("contact") [0];
nama = contact.getElementsByTagName ("name") [0].firstChild.data; 
alamat = contact.getElementsByTagName ("address") [0].firstChild.data; 
phone_1 = contact.getElementsByTagName ("phone") [0].firstChild.data;
phone_2 = contact.getElementsByTagName ("phone") [1].firstChild.data; 
phone_3 = contact.getElementsByTagName ("phone") [2].firstChild.data; 
email = contact.getElementsByTagName ("email")[0].firstChild.data; 
document.getElementById("txtName").innerHTML = nama; 
document.getElementById("txtAddress").innerHTML = alamat; 
document.getElementById("txtMobilePhone").innerHTML = phone_1;
document.getElementById("txtHomePhone").innerHTML = phone_2; 
document.getElementById("txtOfficePhone").innerHTML = phone_3; 
document.getElementById("txtEmail").innerHTML = email; 
document.getElementById("divContent").innerHTML = "";
} else {
  document.getElementById("divContent").innerHTML = "loading..";
}
}
reqObj.send(null);
}