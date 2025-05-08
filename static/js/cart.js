// Toggle Cart Modal
document.getElementById('cart-toggle').addEventListener('click', function() {
    document.getElementById('cart-modal').classList.remove('hidden');
});

document.getElementById('cart-close').addEventListener('click', function() {
    document.getElementById('cart-modal').classList.add('hidden');
});

// Apply Promo Code (Mock)
document.getElementById('apply-promo').addEventListener('click', function() {
    const promoCode = document.getElementById('promo-code').value;
    console.log('Promo code applied:', promoCode);
    // Mock promo code logic
    alert('Promo code applied! (Mock)');
});

// Show Toast (Mock for Add to Cart)
document.querySelectorAll('button[data-action="add-to-cart"]').forEach(button => {
    button.addEventListener('click', function() {
        const toast = document.getElementById('toast');
        toast.classList.remove('hidden');
        setTimeout(() => {
            toast.classList.add('hidden');
        }, 1000);
    });
});