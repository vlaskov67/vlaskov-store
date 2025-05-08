// Filter by model (mock autocomplete)
document.getElementById('model').addEventListener('input', function(e) {
    const query = e.target.value.toLowerCase();
    console.log('Model filter:', query);
    // Mock filtering (to be implemented with real data later)
    const products = document.querySelectorAll('#catalog > div');
    products.forEach(product => {
        const model = product.querySelector('h3').textContent.toLowerCase();
        product.style.display = model.includes(query) ? 'block' : 'none';
    });
});

// Price filter
document.getElementById('price').addEventListener('input', function(e) {
    const maxPrice = e.target.value;
    document.getElementById('price-value').textContent = `0 - ${maxPrice} CHF`;
    console.log('Price filter:', maxPrice);
    // Mock filtering
    const products = document.querySelectorAll('#catalog > div');
    products.forEach(product => {
        const price = parseFloat(product.querySelector('p').textContent.replace('CHF ', ''));
        product.style.display = price <= maxPrice ? 'block' : 'none';
    });
});

// In stock filter
document.getElementById('in-stock').addEventListener('change', function(e) {
    const inStock = e.target.checked;
    console.log('In stock filter:', inStock);
    // Mock filtering (to be implemented with real data later)
    const products = document.querySelectorAll('#catalog > div');
    products.forEach(product => {
        product.style.display = inStock ? 'block' : 'block'; // Mock, update later with real stock data
    });
});

// Infinite scroll (mock)
let page = 1;
window.addEventListener('scroll', function() {
    if (window.innerHeight + window.scrollY >= document.body.offsetHeight - 100) {
        console.log('Load more products, page:', page);
        page++;
        // Mock adding products (to be implemented with real data later)
    }
});