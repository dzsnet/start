function dosearch() {
    var sf = document.searchform;
    var dropdown = document.getElementById('engine-dropdown');
    var searchterms = sf.searchterms.value;
    
    if (!searchterms) {
        alert('Please enter search terms!');
        sf.searchterms.focus();
        return false;
    }
    
    var str = searchterms;
    str = str.replace('&', '%26');
    str = str.replace('?', '%3F');
    var submitto = dropdown.value + str;
    
    window.location.href = submitto;
    return false;
}

function clearSearch() {
    var searchInput = document.searchform.searchterms;
    searchInput.value = '';
    searchInput.focus();
}
