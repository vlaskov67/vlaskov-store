from flask import Flask, render_template

app = Flask(__name__)

# Mock product data
products = [
    {'id': 1, 'name': 'Phone Charger', 'price': 29.00, 'image': '/static/images/product1.jpg', 'stock': True, 'model': 'ChargerX', 'colors': ['#FF0000', '#00FF00', '#0000FF']},
    {'id': 2, 'name': 'Laptop Stand', 'price': 49.00, 'image': '/static/images/product2.jpg', 'stock': False, 'model': 'StandPro', 'colors': ['#000000', '#FFFFFF']},
    {'id': 3, 'name': 'Wireless Earbuds', 'price': 79.00, 'image': '/static/images/product3.jpg', 'stock': True, 'model': 'EarbudsZ', 'colors': ['#FFFF00', '#FF00FF', '#00FFFF']}
]

@app.route('/')
def index():
    return render_template('index.html', products=products)

@app.route('/catalog')
def catalog():
    return render_template('catalog.html', products=products)

if __name__ == '__main__':
    app.run(debug=True)