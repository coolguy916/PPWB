@extends('layouts.template')
@section('content')


<div class="card" style="width: 30rem; padding: 100px; margin: 100px;">
  <img src="images/blimbing.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Nama Barang</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
<div class="add">
    <button id="subtractButton">-</button>
    <div class="order">
         <span id="number">0</span>
    </div>
    <button id="addButton">+</button>
</div>
<div class="pesan">
    <button id="pesanButton" class="btn">Pesan</button>
</div>
<div class="checkout"><a href="/keranjang">
    <button id="checkoutButton" class="btn"><img src="images/keranjang.png" alt=""> Checkout</button></a>
</div>
<script>
    // Mendapatkan elemen tombol dan elemen angka
    var addButton = document.getElementById('addButton');
    var subtractButton = document.getElementById('subtractButton');
    var numberElement = document.getElementById('number');
    var pesanButton = document.getElementById('pesanButton');

    // Inisialisasi nilai awal
    var number = 0;

    // Tambahkan event listener ke tombol +
    addButton.addEventListener('click', function () {
        // Tambahkan 1 ke angka
        number++;
        
        // Perbarui teks angka pada elemen
        numberElement.textContent = number;
    });

    // Tambahkan event listener ke tombol -
    subtractButton.addEventListener('click', function () {
        // Pastikan angka tidak kurang dari nol
        if (number > 0) {
            // Kurangkan 1 dari angka
            number--;
            
            // Perbarui teks angka pada elemen
            numberElement.textContent = number;
        }
    });

    // Tambahkan event listener ke tombol Pesan
    pesanButton.addEventListener('click', function () {
        alert('Anda telah memesan ' + number + ' barang.');
    });
</script>

    <style>

.order {
    align-items: center;
    text-align: center;
    background-color: #fff;
    padding: 10px;
    font: 20px Arial, sans-serif;
    margin-left: 40px;
    margin-right: 40px; /* Mengatur jarak antara .order dan tombol */
}


      .add {
        position: absolute; /* Menggunakan absolute positioning */
            top: 300px; /* Mengatur jarak dari atas */
            right: 400px; /* Mengatur jarak dari kanan */
            width: 210px;
            display: flex;
            text-align: center;
            line-height: 15px;
            align-items: center;
            border: 2px solid #ccc;
            border-radius: 5px; /* Border-radius untuk sudut-sudut elemen */
            padding: 10px; /* Padding untuk isi elemen */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            
}

/* Mengatur tampilan tombol */
button {
    background-color: #EB0012; 
    color: white; /* Warna teks tombol */
    border: none; /* Menghapus border tombol */
    padding: 5px 5px; /* Ruang di dalam tombol */
    font-size: 15px; /* Ukuran teks tombol */
    cursor: pointer; /* Mengubah cursor saat mengarah ke tombol */
    outline: none; /* Menghilangkan outline saat tombol aktif */
    margin: 10px 10px;
    border-radius: 10px;
}

/* Mengatur tampilan elemen h3 */
h3 {
    margin: 0; /* Menghilangkan margin default */
}

/* Mengatur tampilan angka */
#number {
    font-size: 20px; /* Ukuran teks angka */
    font-weight: bold; /* Menebalkan teks angka */
}

#checkoutButton {
    position: absolute;
    top: 423px; 
    right: 390px; 
    border: 2px solid #ccc;
    border-radius: 5px;
    background-color: #E34800;
    width: 210px;
}
 
#pesanButton {
  position: absolute;
    top: 380px; /* Sesuaikan jarak dari atas */
    right: 390px; /* Sesuaikan jarak dari kanan */
    border: 2px solid #ccc;
    border-radius: 5px;
    background-color: #CC212E;
    width: 210px;
    </style>

@endsection
