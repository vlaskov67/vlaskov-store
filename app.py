from flask import Flask, render_template

app = Flask(__name__)

# Mock product data
products = [
    {'name': 'Phone Charger', 'price': 29.00, 'image': '/static/images/product1.jpg'},
    {'name': 'Laptop Stand', 'price': 49.00, 'image': '/static/images/product2.jpg'},
    {'name': 'Wireless Earbuds', 'price': 79.00, 'image': '/static/images/product3.jpg'}
]

@app.route('/')
def index():
    return render_template('index.html', products=products)

if __name__ == '__main__':
    app.run(debug=True)