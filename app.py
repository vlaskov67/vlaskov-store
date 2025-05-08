from flask import Flask, render_template, request, redirect, url_for

app = Flask(__name__)

# Mock product data
products = [
    {'id': 1, 'name': 'Phone Charger', 'price': 29.00, 'image': '/static/images/product1.jpg', 'stock': True, 'model': 'ChargerX', 'colors': ['#FF0000', '#00FF00', '#0000FF']},
    {'id': 2, 'name': 'Laptop Stand', 'price': 49.00, 'image': '/static/images/product2.jpg', 'stock': False, 'model': 'StandPro', 'colors': ['#000000', '#FFFFFF']},
    {'id': 3, 'name': 'Wireless Earbuds', 'price': 79.00, 'image': '/static/images/product3.jpg', 'stock': True, 'model': 'EarbudsZ', 'colors': ['#FFFF00', '#FF00FF', '#00FFFF']}
]

# Mock cart data (in-memory for now)
cart = []

@app.route('/')
def index():
    return render_template('index.html', products=products)

@app.route('/catalog')
def catalog():
    return render_template('catalog.html', products=products)

@app.route('/cart')
def cart():
    return render_template('cart.html', cart=cart)

@app.route('/add_to_cart/<int:product_id>', methods=['POST'])
def add_to_cart(product_id):
    product = next((p for p in products if p['id'] == product_id), None)
    if product:
        cart_item = next((item for item in cart if item['id'] == product_id), None)
        if cart_item:
            cart_item['quantity'] += 1
        else:
            cart.append({'id': product_id, 'name': product['name'], 'price': product['price'], 'quantity': 1})
    return redirect(url_for('cart'))

@app.route('/remove_from_cart/<int:product_id>', methods=['POST'])
def remove_from_cart(product_id):
    global cart
    cart = [item for item in cart if item['id'] != product_id]
    return redirect(url_for('cart'))

@app.route('/checkout', methods=['GET', 'POST'])
def checkout():
    if request.method == 'POST':
        # Mock checkout processing
        return render_template('checkout.html', cart=cart, order_confirmed=True)
    return render_template('checkout.html', cart=cart, order_confirmed=False)

if __name__ == '__main__':
    app.run(debug=True)