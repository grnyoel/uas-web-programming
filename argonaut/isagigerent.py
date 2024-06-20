from flask import Flask, render_template, request, url_for, redirect, flash
from flask_mysqldb import MySQL

app = Flask(__name__)
app.secret_key = 'isagi11_gerent'
app.config ['MYSQL_HOST'] = '127.0.0.1'
app.config ['MYSQL_USER'] = 'root'
app.config ['MYSQL_PASSWORD'] = ''
app.config ['MYSQL_DB'] = 'bluelock'
mysql = MySQL(app)

@app.route("/")
def main():
 return render_template('index.html')

@app.route("/masterbarang")
def masterbarang():
    cur = mysql.connection.cursor()
    cur.execute("SELECT * FROM masterbarang")
    barang = cur.fetchall()
    cur.close()
    return render_template('masterbarang.html', menu='master', submenu='barang', data = barang)

@app.route("/formmasterbarang")
def formmasterbarang():
    return render_template('formmasterbarang.html')

@app.route("/simpanformmasterbarang", methods = ["GET", "POST"])
def simpanformmasterbarang():
    if request.method == "GET":
      return render_template('formmasterbarang.html')
    else:
      nama = request.form['nama']
      harga = request.form['harga']
      satuan = request.form['satuan']
      cur = mysql.connection.cursor()
      cur.execute("INSERT INTO masterbarang (nama,harga,satuan) VALUE (%s,%s,%s)", (nama, harga, satuan))
      mysql.connection.commit()
      cur.close()
      return redirect(url_for('masterbarang'))

@app.route("/edit/formmasterbarang/<int:id>", methods = ["GET", "POST"])
def editformmasterbarang():
    if request.method == "GET":
       cur = mysql.connection.cursor()
       cur.execute("SELECT * FROM masterbarang WHERE id=%s", (id))
       barang = cur.fetchone()
       cur.close()
       return render_template('formeditmasterbarang.html', data = barang)
    else:
       nama = request.form['nama']
       harga = request.form['harga']
       satuan = request.form['satuan']
       cur = mysql.connection.cursor()
       cur.execute("UPDATE masterbarang SET nama = %s, harga = %s, satuan = %s WHERE id = %s;", (nama, harga, satuan, id))
       mysql.connection.commit()
       cur.close()
       return redirect(url_for('masterbarang'))
    
@app.route('/delete/masterbarang/<int:id>', methods=["GET"])
def deletemasterbarang(id):
    if request.method == 'GET':
      cur = mysql.connection.cursor()
      cur.execute("DELETE FROM masterbarang where id = %s", (id,))
      mysql.connection.commit()
      cur.close()
      return redirect(url_for('masterbarang'))


@app.route("/masterpelanggan")
def masterpelanggan():
    cur = mysql.connection.cursor()
    cur.execute("SELECT * FROM masterpelanggan")
    pelanggan = cur.fetchall()
    cur.close()
    return render_template('masterpelanggan.html', menu='master', submenu='pelanggan', data = pelanggan)

@app.route("/formmasterpelanggan")
def formmasterpelanggan():
    return render_template('formmasterpelanggan.html')

@app.route("/simpanformmasterpelanggan", methods = ["GET", "POST"])
def simpanformmasterpelanggan():
    if request.method == "GET":
      return render_template('formmasterpelanggan.html')
    else:
      nama = request.form['nama']
      alamat = request.form['alamat']
      kota = request.form['kota']
      cur = mysql.connection.cursor()
      cur.execute("INSERT INTO masterpelanggan (nama,alamat,kota) VALUE (%s,%s,%s)", (nama, alamat, kota))
      mysql.connection.commit()
      cur.close()
      return redirect(url_for('masterpelanggan'))
   
@app.route('/edit/formmasterpelanggan/<int:id>', methods=["GET", "POST"])
def editformmasterpelanggan():
    if request.method == "GET":
      cur = mysql.connection.cursor()
      cur.execute("SELECT * FROM masterpelanggan WHERE id=%s", (id))
      pelanggan = cur.fetchone()
      cur.close()
      return render_template('formeditmasterbarang.html', data = pelanggan)
    else:
      nama = request.form['nama']
      alamat = request.form['alamat']
      kota = request.form['kota']
      cur = mysql.connection.cursor()
      cur.execute("UPDATE masterpelanggan SET nama=%s, alamat=%s, kota=%s WHERE id=%s;", (nama, alamat, kota, id))
      mysql.connection.commit()
      cur.close()
      flash('Data update successfully', 'success')
      return redirect(url_for('masterpelanggan'))

@app.route('/delete/masterpelanggan/<int:id>', methods=["GET"])
def deletemasterpelanggan(id):
    if request.method == 'GET':
      cur = mysql.connection.cursor()
      cur.execute("DELETE FROM masterpelanggan where id = %s", (id,))
      mysql.connection.commit()
      cur.close()
      return redirect(url_for('masterpelanggan'))

@app.route("/mastersupplier")
def mastersupplier():
    cur = mysql.connection.cursor()
    cur.execute("SELECT * FROM mastersupplier")
    supplier = cur.fetchall()
    cur.close()
    return render_template('mastersupplier.html', menu='master', submenu='supplier', data = supplier)

@app.route("/formmastersupplier")
def formmastersupplier():
    return render_template('formmastersupplier.html')

@app.route("/simpanformmastersupplier", methods=["GET", "POST"])
def simpanformmastersupplier():
    if request.method == 'GET':
      return render_template('formmastersupplier.html')
    else:
      nama = request.form['nama']
      alamat = request.form['alamat']
      kota = request.form['kota']
      cur = mysql.connection.cursor()
      cur.execute("INSERT INTO mastersupplier (nama,alamat,kota) VALUE (%s,%s,%s)", (nama,alamat,kota))
      mysql.connection.commit()
      cur.close()
      return redirect(url_for('mastersupplier'))
    
@app.route("/edit/formmastersupplier/<int:id>", methods = ["GET", "POST"])
def editformmastersupplier(id):
    if request.method == 'GET':
      cur = mysql.connection.cursor()
      cur.execute("SELECT * FROM mastersupplier WHERE id=%s", (id,
      ))
      supplier = cur.fetchone()
      cur.close()
      return render_template('formeditmastersupplier.html', data=supplier)
    else:
      nama = request.form['nama']
      alamat = request.form['alamat']
      kota = request.form['kota']
      cur = mysql.connection.cursor()
      cur.execute("UPDATE mastersupplier SET nama=%s, alamat=%s, kota=%s WHERE id=%s;" ,(nama,alamat,kota,id))
      mysql.connection.commit()
      cur.close()
      return redirect(url_for('mastersupplier'))

@app.route('/delete/mastersupplier/<int:id>', methods=["GET"])
def deletemastersupplier(id):
    if request.method == 'GET':
      cur = mysql.connection.cursor()
      cur.execute("DELETE FROM mastersupplier where id = %s", (id,))
      mysql.connection.commit()
      cur.close()
      flash('Data delete successfully','success')
      return redirect(url_for('mastersupplier'))

@app.route('/formpembelian')
def formpembelian():
  return render_template('formpembelian.html', menu='pembelian', submenu='formpembelian')

@app.route('/datapembelian')
def datapembelian():
  return render_template('datapembelian.html', menu='pembelian', submenu='datapembelian')

@app.route('/formpenjualan')
def formpenjualan():
  return render_template('formpenjualan.html', menu='penjualan', submenu='formpenjualan')

@app.route('/datapenjualan')
def datapenjualann():
  return render_template('datapenjualan.html', menu='penjualan', submenu='datapenjualan')

if __name__ == '__main__':
 app.run(debug=True)

