function dosearch() {
    var sf = document.searchform;
    var dropdown = document.getElementById('engine-dropdown');
    var searchterms = sf.searchterms.value;
    
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
    hideSuggestions();
}

// Autocomplete functionality
let currentSuggestions = [];
let selectedSuggestionIndex = -1;
let suggestionsTimeout;

function handleInput() {
    const input = document.searchform.searchterms;
    const query = input.value.trim();
    
    // Clear previous timeout
    if (suggestionsTimeout) {
        clearTimeout(suggestionsTimeout);
    }
    
    if (query.length < 2) {
        hideSuggestions();
        return;
    }
    
    // Debounce the suggestions request
    suggestionsTimeout = setTimeout(() => {
        getSuggestions(query);
    }, 300);
}

function getSuggestions(query) {
    // Use Google suggestions API
    const apiUrl = `https://suggestqueries.google.com/complete/search?client=firefox&q=${encodeURIComponent(query)}`;
    
    // Create JSONP request
    const script = document.createElement('script');
    const callbackName = 'suggestions_' + Date.now();
    
    window[callbackName] = function(data) {
        try {
            const suggestions = data[1] || [];
            displaySuggestions(suggestions);
        } catch (e) {
            console.log('Suggestions error:', e);
            hideSuggestions();
        }
        
        // Cleanup
        if (document.head.contains(script)) {
            document.head.removeChild(script);
        }
        delete window[callbackName];
    };
    
    script.onerror = function() {
        hideSuggestions();
        if (document.head.contains(script)) {
            document.head.removeChild(script);
        }
        delete window[callbackName];
    };
    
    script.src = apiUrl + '&callback=' + callbackName;
    document.head.appendChild(script);
    
    // Fallback timeout
    setTimeout(() => {
        if (window[callbackName]) {
            hideSuggestions();
            if (document.head.contains(script)) {
                document.head.removeChild(script);
            }
            delete window[callbackName];
        }
    }, 5000);
}

function displaySuggestions(suggestions) {
    const container = document.getElementById('suggestions');
    
    // Clean up suggestions - remove numbers and unwanted characters
    const cleanSuggestions = suggestions
        .filter(item => typeof item === 'string' && item.trim().length > 0)
        .map(item => {
            // Remove trailing numbers, commas, and other unwanted characters
            return item.replace(/[,\d\[\]()]+$/, '').trim();
        })
        .filter(item => item.length > 0 && !item.match(/^\d+$/)) // Remove purely numeric suggestions
        .filter((item, index, arr) => arr.indexOf(item) === index) // Remove duplicates
        .slice(0, 8); // Limit to 8 suggestions
    
    currentSuggestions = cleanSuggestions;
    selectedSuggestionIndex = -1;
    
    if (currentSuggestions.length === 0) {
        hideSuggestions();
        return;
    }
    
    container.innerHTML = '';
    
    currentSuggestions.forEach((suggestion, index) => {
        const item = document.createElement('div');
        item.className = 'suggestion-item';
        item.innerHTML = `
            <span class="suggestion-icon">🔍</span>
            <span class="suggestion-text">${escapeHtml(suggestion)}</span>
        `;
        
        item.addEventListener('click', () => {
            selectSuggestion(suggestion);
        });
        
        container.appendChild(item);
    });
    
    container.style.display = 'block';
}

function hideSuggestions() {
    const container = document.getElementById('suggestions');
    if (container) {
        container.style.display = 'none';
    }
    currentSuggestions = [];
    selectedSuggestionIndex = -1;
}

function selectSuggestion(suggestion) {
    const input = document.searchform.searchterms;
    input.value = suggestion;
    hideSuggestions();
    input.focus();
}

function handleKeyDown(event) {
    if (currentSuggestions.length === 0) return;
    
    switch (event.key) {
        case 'ArrowDown':
            event.preventDefault();
            selectedSuggestionIndex = Math.min(selectedSuggestionIndex + 1, currentSuggestions.length - 1);
            updateSelectedSuggestion();
            break;
            
        case 'ArrowUp':
            event.preventDefault();
            selectedSuggestionIndex = Math.max(selectedSuggestionIndex - 1, -1);
            updateSelectedSuggestion();
            break;
            
        case 'Enter':
            if (selectedSuggestionIndex >= 0) {
                event.preventDefault();
                selectSuggestion(currentSuggestions[selectedSuggestionIndex]);
                return false;
            }
            break;
            
        case 'Escape':
            hideSuggestions();
            break;
    }
}

function updateSelectedSuggestion() {
    const items = document.querySelectorAll('.suggestion-item');
    items.forEach((item, index) => {
        item.classList.toggle('selected', index === selectedSuggestionIndex);
    });
    
    // Update input value with selected suggestion
    const input = document.searchform.searchterms;
    if (selectedSuggestionIndex >= 0) {
        input.value = currentSuggestions[selectedSuggestionIndex];
    }
}

function escapeHtml(text) {
    const div = document.createElement('div');
    div.textContent = text;
    return div.innerHTML;
}

// Hide suggestions when clicking outside
document.addEventListener('click', function(event) {
    const container = document.getElementById('suggestions');
    const input = document.searchform.searchterms;
    
    if (container && !container.contains(event.target) && event.target !== input) {
        hideSuggestions();
    }
});
