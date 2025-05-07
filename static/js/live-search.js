document.getElementById('search').addEventListener('input', function(e) {
    const query = e.target.value;
    console.log('Search query:', query);
    // Mock search results (to be implemented with real data later)
    const results = ['Product 1', 'Product 2', 'Product 3'].filter(item => item.toLowerCase().includes(query.toLowerCase()));
    console.log('Results:', results);
});