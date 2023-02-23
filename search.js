function dosearch() {
var sf=document.searchform;
for (i=sf.sengines.length-1; i > -1; i--) {
if (sf.sengines[i].checked) {
var str = sf.searchterms.value;
str = str.replace('&', '%26');
str = str.replace('?', '%3F');
var submitto = sf.sengines[i].value + str;
}
}
window.location.href = submitto;
return false;
}
