from flask import Flask, render_template, request, redirect, url_for

app = Flask(__name__)

# Data menu makanan
menu_items = [
    {'id': 1, 'name': 'Rendang', 'price': 25000},
    {'id': 2, 'name': 'Ayam Penyet', 'price': 20000},
    {'id': 3, 'name': 'Gulai Ikan', 'price': 30000},
    {'id': 4, 'name': 'Sate Padang', 'price': 22000},
]

@app.route('/')
def index():
    return render_template('index.html')

@app.route('/menu')
def menu():
    return render_template('menu.html', menu_items=menu_items)

@app.route('/order', methods=['POST'])
def order():
    selected_items = request.form.getlist('menu_item')
    total_price = sum(int(item) for item in selected_items)
    return render_template('order.html', total_price=total_price)

if __name__ == '__main__':
    app.run(debug=True)
