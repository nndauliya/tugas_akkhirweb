@extends('layouts.template')

@section('container')

<!-- Section 1: MENU -->
<section class="menu-section d-flex flex-column justify-content-center align-items-center text-center">
    <h1 class="menu-title pt-5" style="color: #001a7d; font-family: 'Libre Baskerville Static', serif;" >New Product</h1>
    <div class="yellow-line"></div>
    <h2 class="menu-step" style="color: #594545; ">CHOOSE YOUR FAVORITE MENU</h2>
    <div class="yellow-line"></div>
</section>


<!-- Step 1: Product Listings with Animations -->

<section class="team__container" id="team">

    <!-- produk ke 1 -->
        <div class="team animate-up">
            <div class="imgBx">
                <img src="images/np1.jpg" alt="Product Promo ke 1">
                <span class="sale-badge">NEW!</span>
                <div class="cart-icon-container">
                    <i class="bi bi-cart-plus cart-icon" 
                        data-bs-toggle="modal" 
                        data-bs-target="#productModal" 
                        onclick="openModal(this)">
                    </i>
                </div>
            </div>
            <div class="team__content">
                <div class="contentBx">
                    <h3>
                    Vegan Oat Flour Banana Choc Chip Muffins 
                        <div class="product-price">
                            <!-- <span class="original-price">Rp150.000</span> -->
                            <span style="color: #001a7d;" class="fw-bold">Rp100.000</span>
                        </div>
                    </h3>
                    <a class="product-button">
                        <i class="bi bi-cart-plus cart-icon" 
                            data-product-name="Chocolate Muffin" 
                            data-product-price="100000" 
                            data-bs-toggle="modal" 
                            data-bs-target="#productModal" 
                            onclick="openModal(this)">
                        </i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Modal untuk menampilkan detail produk ke 1 -->
        <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="productModalLabel">Detail Produk</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Deskripsi singkat produk -->
                        <p><strong id="modalProductName">Vegan Blueberry and Coconut Muffins</strong></p>
                        <p> lembut tanpa produk hewani, diisi blueberry segar dan rasa kelapa manis, cocok untuk camilan sehat. 🫐🥥</p>

                        <!-- Nama produk -->
                        <h4 id="productName"></h4>

                        <!-- Harga produk -->
                        <div class="product-price">
                            <span class="original-price" style="text-decoration: line-through;">Rp150.000</span>
                            <span class="fw-bold" style="color: #001a7d;">Rp100.000</span>
                        </div>

                        <!-- Input untuk jumlah produk -->
                        <div class="mt-3">
                            <label for="productQuantity" class="form-label">Jumlah Produk</label>
                            <div class="input-group">
                                <button class="btn btn-outline-secondary" type="button" id="decrementBtn">-</button>
                                <input type="number" class="form-control text-center" id="productQuantity" value="1" min="1">
                                <button class="btn btn-outline-secondary" type="button" id="incrementBtn">+</button>
                            </div>
                        </div>

                        <!-- Harga yang disesuaikan dengan jumlah -->
                        <p class="mt-2">Total: <span id="totalPrice">Rp100.000</span></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="button" class="btn btn-primary" onclick="addToCartModal()">Tambahkan ke Keranjang</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            // Variabel untuk elemen-elemen DOM
            const decrementBtn = document.getElementById('decrementBtn');
            const incrementBtn = document.getElementById('incrementBtn');
            const productQuantity = document.getElementById('productQuantity');
            const totalPrice = document.getElementById('totalPrice');
            const modalProductName = document.getElementById('modalProductName');
            const modalPrice = document.querySelector('.fw-bold');
            let unitPrice = 100000; // Harga per unit produk, disesuaikan dengan data yang diambil

            // Fungsi untuk memperbarui harga total berdasarkan jumlah produk
            function updateTotalPrice() {
                const quantity = parseInt(productQuantity.value);
                totalPrice.textContent = `Rp${(quantity * unitPrice).toLocaleString('id-ID')}`;
            }

            // Menambahkan event listener untuk mengurangi jumlah produk
            decrementBtn.addEventListener('click', () => {
                if (productQuantity.value > 1) {
                    productQuantity.value--;
                    updateTotalPrice();
                }
            });

            // Menambahkan event listener untuk menambah jumlah produk
            incrementBtn.addEventListener('click', () => {
                productQuantity.value++;
                updateTotalPrice();
            });

            // Update total harga ketika pengguna mengetik jumlah produk
            productQuantity.addEventListener('input', () => {
                if (productQuantity.value < 1) {
                    productQuantity.value = 1;
                }
                updateTotalPrice();
            });

            // Fungsi untuk membuka modal dan menampilkan informasi produk
            function openModal(element) {
                // Mengambil data dari elemen yang diklik
                const productName = element.getAttribute('data-product-name');
                unitPrice = parseInt(element.getAttribute('data-product-price')); // Mengambil harga produk
                
                // Mengupdate nama produk di modal
                modalProductName.innerText = productName;
                // Mengupdate harga produk di modal
                modalPrice.innerText = `Rp${unitPrice.toLocaleString('id-ID')}`;
                
                // Reset jumlah produk dan total harga
                productQuantity.value = 1;
                updateTotalPrice();
            }

            // Fungsi untuk menambahkan produk ke keranjang
            function addToCartModal() {
                const quantity = parseInt(productQuantity.value);
                alert(`Anda telah menambahkan ${quantity} item ${modalProductName.innerText} ke keranjang.`);
                // Disini Anda bisa menambahkan logika untuk menyimpan produk ke keranjang belanja
            }
        </script>

        

    <!-- produk ke 2 -->
            <div class="team animate-up">
                <div class="imgBx">
                    <img src="images/np2.jpg" alt="Product Promo ke 2">
                    <span class="sale-badge">NEW!</span>
                    <div class="cart-icon-container">
                        <i class="bi bi-cart-plus cart-icon" 
                            data-bs-toggle="modal" 
                            data-bs-target="#productModal" 
                            onclick="openModal(this)">
                        </i>
                    </div>
                </div>
                <div class="team__content">
                    <div class="contentBx">
                        <h3>
                        Soft Bakery Style Almond Poppyseed Muffins 
                            <div class="product-price">
                                <!-- <span class="original-price">Rp150.000</span> -->
                                <span style="color: #001a7d;" class="fw-bold">Rp100.000</span>
                            </div>
                        </h3>
                        <a class="product-button">
                            <i class="bi bi-cart-plus cart-icon" 
                                data-product-name="Chocolate Muffin" 
                                data-product-price="100000" 
                                data-bs-toggle="modal" 
                                data-bs-target="#productModal" 
                                onclick="openModal(this)">
                            </i>
                        </a>
                    </div>
                </div>
            </div>

    
            <!-- Modal untuk menampilkan detail produk ke 2 -->
        <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="productModalLabel">Detail Produk</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Deskripsi singkat produk -->
                        <p><strong id="modalProductName">Soft Bakery Style Almond Poppyseed Muffins </strong></p>
                        <p>Muffin  lembut dengan aroma almond yang harum dan taburan poppyseed renyah, sempurna untuk camilan atau sarapan. 🥮</p>

                        <!-- Nama produk -->
                        <h4 id="productName"></h4>

                        <!-- Harga produk -->
                        <div class="product-price">
                            <span class="original-price" style="text-decoration: line-through;">Rp150.000</span>
                            <span class="fw-bold" style="color: #001a7d;">Rp100.000</span>
                        </div>

                        <!-- Input untuk jumlah produk -->
                        <div class="mt-3">
                            <label for="productQuantity" class="form-label">Jumlah Produk</label>
                            <div class="input-group">
                                <button class="btn btn-outline-secondary" type="button" id="decrementBtn">-</button>
                                <input type="number" class="form-control text-center" id="productQuantity" value="1" min="1">
                                <button class="btn btn-outline-secondary" type="button" id="incrementBtn">+</button>
                            </div>
                        </div>

                        <!-- Harga yang disesuaikan dengan jumlah -->
                        <p class="mt-2">Total: <span id="totalPrice">Rp100.000</span></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="button" class="btn btn-primary" onclick="addToCartModal()">Tambahkan ke Keranjang</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            // Variabel untuk elemen-elemen DOM
            const decrementBtn = document.getElementById('decrementBtn');
            const incrementBtn = document.getElementById('incrementBtn');
            const productQuantity = document.getElementById('productQuantity');
            const totalPrice = document.getElementById('totalPrice');
            const modalProductName = document.getElementById('modalProductName');
            const modalPrice = document.querySelector('.fw-bold');
            let unitPrice = 100000; // Harga per unit produk, disesuaikan dengan data yang diambil

            // Fungsi untuk memperbarui harga total berdasarkan jumlah produk
            function updateTotalPrice() {
                const quantity = parseInt(productQuantity.value);
                totalPrice.textContent = `Rp${(quantity * unitPrice).toLocaleString('id-ID')}`;
            }

            // Menambahkan event listener untuk mengurangi jumlah produk
            decrementBtn.addEventListener('click', () => {
                if (productQuantity.value > 1) {
                    productQuantity.value--;
                    updateTotalPrice();
                }
            });

            // Menambahkan event listener untuk menambah jumlah produk
            incrementBtn.addEventListener('click', () => {
                productQuantity.value++;
                updateTotalPrice();
            });

            // Update total harga ketika pengguna mengetik jumlah produk
            productQuantity.addEventListener('input', () => {
                if (productQuantity.value < 1) {
                    productQuantity.value = 1;
                }
                updateTotalPrice();
            });

            // Fungsi untuk membuka modal dan menampilkan informasi produk
            function openModal(element) {
                // Mengambil data dari elemen yang diklik
                const productName = element.getAttribute('data-product-name');
                unitPrice = parseInt(element.getAttribute('data-product-price')); // Mengambil harga produk
                
                // Mengupdate nama produk di modal
                modalProductName.innerText = productName;
                // Mengupdate harga produk di modal
                modalPrice.innerText = `Rp${unitPrice.toLocaleString('id-ID')}`;
                
                // Reset jumlah produk dan total harga
                productQuantity.value = 1;
                updateTotalPrice();
            }

            // Fungsi untuk menambahkan produk ke keranjang
            function addToCartModal() {
                const quantity = parseInt(productQuantity.value);
                alert(`Anda telah menambahkan ${quantity} item ${modalProductName.innerText} ke keranjang.`);
                // Disini Anda bisa menambahkan logika untuk menyimpan produk ke keranjang belanja
            }
        </script>


    <!-- produk ke 3 -->
        <div class="team animate-up">
            <div class="imgBx">
                <img src="images/np3.jpg" alt="Product Promo ke 3">
                <span class="sale-badge">NEW!</span>
                <div class="cart-icon-container">
                    <i class="bi bi-cart-plus cart-icon" 
                        data-bs-toggle="modal" 
                        data-bs-target="#productModal" 
                        onclick="openModal(this)">
                    </i>
                </div>
            </div>
            <div class="team__content">
                <div class="contentBx">
                    <h3>
                    Carrot Cake Muffins
                        <div class="product-price">
                            <!-- <span class="original-price">Rp150.000</span> -->
                            <span style="color: #001a7d;" class="fw-bold">Rp100.000</span>
                        </div>
                    </h3>
                    <a class="product-button">
                        <i class="bi bi-cart-plus cart-icon" 
                            data-product-name="Chocolate Muffin" 
                            data-product-price="100000" 
                            data-bs-toggle="modal" 
                            data-bs-target="#productModal" 
                            onclick="openModal(this)">
                        </i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Modal untuk menampilkan detail produk ke  3-->
        <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="productModalLabel">Detail Produk</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Deskripsi singkat produk -->
                        <p><strong id="modalProductName">Carrot Cake Muffins/strong></p>
                        <p>Muffin lembut dengan rasa manis dari wortel parut, dipadukan dengan rempah-rempah seperti kayu manis, dan terkadang dihiasi dengan kacang atau krim keju. Sebuah camilan kaya rasa dan tekstur.</p>

                        <!-- Nama produk -->
                        <h4 id="productName"></h4>

                        <!-- Harga produk -->
                        <div class="product-price">
                            <span class="original-price" style="text-decoration: line-through;">Rp150.000</span>
                            <span class="fw-bold" style="color: #001a7d;">Rp100.000</span>
                        </div>

                        <!-- Input untuk jumlah produk -->
                        <div class="mt-3">
                            <label for="productQuantity" class="form-label">Jumlah Produk</label>
                            <div class="input-group">
                                <button class="btn btn-outline-secondary" type="button" id="decrementBtn">-</button>
                                <input type="number" class="form-control text-center" id="productQuantity" value="1" min="1">
                                <button class="btn btn-outline-secondary" type="button" id="incrementBtn">+</button>
                            </div>
                        </div>

                        <!-- Harga yang disesuaikan dengan jumlah -->
                        <p class="mt-2">Total: <span id="totalPrice">Rp100.000</span></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="button" class="btn btn-primary" onclick="addToCartModal()">Tambahkan ke Keranjang</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            // Variabel untuk elemen-elemen DOM
            const decrementBtn = document.getElementById('decrementBtn');
            const incrementBtn = document.getElementById('incrementBtn');
            const productQuantity = document.getElementById('productQuantity');
            const totalPrice = document.getElementById('totalPrice');
            const modalProductName = document.getElementById('modalProductName');
            const modalPrice = document.querySelector('.fw-bold');
            let unitPrice = 100000; // Harga per unit produk, disesuaikan dengan data yang diambil

            // Fungsi untuk memperbarui harga total berdasarkan jumlah produk
            function updateTotalPrice() {
                const quantity = parseInt(productQuantity.value);
                totalPrice.textContent = `Rp${(quantity * unitPrice).toLocaleString('id-ID')}`;
            }

            // Menambahkan event listener untuk mengurangi jumlah produk
            decrementBtn.addEventListener('click', () => {
                if (productQuantity.value > 1) {
                    productQuantity.value--;
                    updateTotalPrice();
                }
            });

            // Menambahkan event listener untuk menambah jumlah produk
            incrementBtn.addEventListener('click', () => {
                productQuantity.value++;
                updateTotalPrice();
            });

            // Update total harga ketika pengguna mengetik jumlah produk
            productQuantity.addEventListener('input', () => {
                if (productQuantity.value < 1) {
                    productQuantity.value = 1;
                }
                updateTotalPrice();
            });

            // Fungsi untuk membuka modal dan menampilkan informasi produk
            function openModal(element) {
                // Mengambil data dari elemen yang diklik
                const productName = element.getAttribute('data-product-name');
                unitPrice = parseInt(element.getAttribute('data-product-price')); // Mengambil harga produk
                
                // Mengupdate nama produk di modal
                modalProductName.innerText = productName;
                // Mengupdate harga produk di modal
                modalPrice.innerText = `Rp${unitPrice.toLocaleString('id-ID')}`;
                
                // Reset jumlah produk dan total harga
                productQuantity.value = 1;
                updateTotalPrice();
            }

            // Fungsi untuk menambahkan produk ke keranjang
            function addToCartModal() {
                const quantity = parseInt(productQuantity.value);
                alert(`Anda telah menambahkan ${quantity} item ${modalProductName.innerText} ke keranjang.`);
                // Disini Anda bisa menambahkan logika untuk menyimpan produk ke keranjang belanja
            }
        </script>

    <!-- produk ke 4 -->
        <div class="team animate-up">
            <div class="imgBx">
                <img src="images/np4.jpg" alt="Product Promo ke 4">
                <span class="sale-badge">NEW!</span>
                <div class="cart-icon-container">
                    <i class="bi bi-cart-plus cart-icon" 
                        data-bs-toggle="modal" 
                        data-bs-target="#productModal" 
                        onclick="openModal(this)">
                    </i>
                </div>
            </div>
            <div class="team__content">
                <div class="contentBx">
                    <h3>
                    Quick and Easy Cinnamon Bun Muffins
                        <div class="product-price">
                            <!-- <span class="original-price">Rp150.000</span> -->
                            <span style="color: #001a7d;" class="fw-bold">Rp100.000</span>
                        </div>
                    </h3>
                    <a class="product-button">
                        <i class="bi bi-cart-plus cart-icon" 
                            data-product-name="Chocolate Muffin" 
                            data-product-price="100000" 
                            data-bs-toggle="modal" 
                            data-bs-target="#productModal" 
                            onclick="openModal(this)">
                        </i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Modal untuk menampilkan detail produk ke 4 -->
        <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="productModalLabel">Detail Produk</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Deskripsi singkat produk -->
                        <p><strong id="modalProductName">Quick and Easy Cinnamon Bun Muffins</strong></p>
                        <p>Muffin lembut dengan rasa kayu manis yang kaya, mirip dengan cinnamon bun, tetapi lebih cepat dan mudah dibuat. Setiap gigitan penuh dengan rasa manis dan aroma hangat kayu manis.</p>

                        <!-- Nama produk -->
                        <h4 id="productName"></h4>

                        <!-- Harga produk -->
                        <div class="product-price">
                            <span class="original-price" style="text-decoration: line-through;">Rp150.000</span>
                            <span class="fw-bold" style="color: #001a7d;">Rp100.000</span>
                        </div>

                        <!-- Input untuk jumlah produk -->
                        <div class="mt-3">
                            <label for="productQuantity" class="form-label">Jumlah Produk</label>
                            <div class="input-group">
                                <button class="btn btn-outline-secondary" type="button" id="decrementBtn">-</button>
                                <input type="number" class="form-control text-center" id="productQuantity" value="1" min="1">
                                <button class="btn btn-outline-secondary" type="button" id="incrementBtn">+</button>
                            </div>
                        </div>

                        <!-- Harga yang disesuaikan dengan jumlah -->
                        <p class="mt-2">Total: <span id="totalPrice">Rp100.000</span></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="button" class="btn btn-primary" onclick="addToCartModal()">Tambahkan ke Keranjang</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            // Variabel untuk elemen-elemen DOM
            const decrementBtn = document.getElementById('decrementBtn');
            const incrementBtn = document.getElementById('incrementBtn');
            const productQuantity = document.getElementById('productQuantity');
            const totalPrice = document.getElementById('totalPrice');
            const modalProductName = document.getElementById('modalProductName');
            const modalPrice = document.querySelector('.fw-bold');
            let unitPrice = 100000; // Harga per unit produk, disesuaikan dengan data yang diambil

            // Fungsi untuk memperbarui harga total berdasarkan jumlah produk
            function updateTotalPrice() {
                const quantity = parseInt(productQuantity.value);
                totalPrice.textContent = `Rp${(quantity * unitPrice).toLocaleString('id-ID')}`;
            }

            // Menambahkan event listener untuk mengurangi jumlah produk
            decrementBtn.addEventListener('click', () => {
                if (productQuantity.value > 1) {
                    productQuantity.value--;
                    updateTotalPrice();
                }
            });

            // Menambahkan event listener untuk menambah jumlah produk
            incrementBtn.addEventListener('click', () => {
                productQuantity.value++;
                updateTotalPrice();
            });

            // Update total harga ketika pengguna mengetik jumlah produk
            productQuantity.addEventListener('input', () => {
                if (productQuantity.value < 1) {
                    productQuantity.value = 1;
                }
                updateTotalPrice();
            });

            // Fungsi untuk membuka modal dan menampilkan informasi produk
            function openModal(element) {
                // Mengambil data dari elemen yang diklik
                const productName = element.getAttribute('data-product-name');
                unitPrice = parseInt(element.getAttribute('data-product-price')); // Mengambil harga produk
                
                // Mengupdate nama produk di modal
                modalProductName.innerText = productName;
                // Mengupdate harga produk di modal
                modalPrice.innerText = `Rp${unitPrice.toLocaleString('id-ID')}`;
                
                // Reset jumlah produk dan total harga
                productQuantity.value = 1;
                updateTotalPrice();
            }

            // Fungsi untuk menambahkan produk ke keranjang
            function addToCartModal() {
                const quantity = parseInt(productQuantity.value);
                alert(`Anda telah menambahkan ${quantity} item ${modalProductName.innerText} ke keranjang.`);
                // Disini Anda bisa menambahkan logika untuk menyimpan produk ke keranjang belanja
            }
        </script>


    <!-- produk ke 5 -->
        <div class="team animate-up">
            <div class="imgBx">
                <img src="images/np5.jpg" alt="Product Promo ke 5">
                <span class="sale-badge">NEW!</span>
                <div class="cart-icon-container">
                    <i class="bi bi-cart-plus cart-icon" 
                        data-bs-toggle="modal" 
                        data-bs-target="#productModal" 
                        onclick="openModal(this)">
                    </i>
                </div>
            </div>
            <div class="team__content">
                <div class="contentBx">
                    <h3>
                    Raspberry and White Chocolate Muffins
                        <div class="product-price">
                            <!-- <span class="original-price">Rp150.000</span> -->
                            <span style="color: #001a7d;" class="fw-bold">Rp100.000</span>
                        </div>
                    </h3>
                    <a class="product-button">
                        <i class="bi bi-cart-plus cart-icon" 
                            data-product-name="Chocolate Muffin" 
                            data-product-price="100000" 
                            data-bs-toggle="modal" 
                            data-bs-target="#productModal" 
                            onclick="openModal(this)">
                        </i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Modal untuk menampilkan detail produk ke 5 -->
        <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="productModalLabel">Detail Produk</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Deskripsi singkat produk -->
                        <p><strong id="modalProductName">Raspberry and White Chocolate Muffins</strong></p>
                        <p>Muffin lembut dengan kombinasi asam segar dari raspberry dan manisnya white chocolate, menciptakan rasa yang seimbang dan menggugah selera.</p>

                        <!-- Nama produk -->
                        <h4 id="productName"></h4>

                        <!-- Harga produk -->
                        <div class="product-price">
                            <span class="original-price" style="text-decoration: line-through;">Rp150.000</span>
                            <span class="fw-bold" style="color: #001a7d;">Rp100.000</span>
                        </div>

                        <!-- Input untuk jumlah produk -->
                        <div class="mt-3">
                            <label for="productQuantity" class="form-label">Jumlah Produk</label>
                            <div class="input-group">
                                <button class="btn btn-outline-secondary" type="button" id="decrementBtn">-</button>
                                <input type="number" class="form-control text-center" id="productQuantity" value="1" min="1">
                                <button class="btn btn-outline-secondary" type="button" id="incrementBtn">+</button>
                            </div>
                        </div>

                        <!-- Harga yang disesuaikan dengan jumlah -->
                        <p class="mt-2">Total: <span id="totalPrice">Rp100.000</span></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="button" class="btn btn-primary" onclick="addToCartModal()">Tambahkan ke Keranjang</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            // Variabel untuk elemen-elemen DOM
            const decrementBtn = document.getElementById('decrementBtn');
            const incrementBtn = document.getElementById('incrementBtn');
            const productQuantity = document.getElementById('productQuantity');
            const totalPrice = document.getElementById('totalPrice');
            const modalProductName = document.getElementById('modalProductName');
            const modalPrice = document.querySelector('.fw-bold');
            let unitPrice = 100000; // Harga per unit produk, disesuaikan dengan data yang diambil

            // Fungsi untuk memperbarui harga total berdasarkan jumlah produk
            function updateTotalPrice() {
                const quantity = parseInt(productQuantity.value);
                totalPrice.textContent = `Rp${(quantity * unitPrice).toLocaleString('id-ID')}`;
            }

            // Menambahkan event listener untuk mengurangi jumlah produk
            decrementBtn.addEventListener('click', () => {
                if (productQuantity.value > 1) {
                    productQuantity.value--;
                    updateTotalPrice();
                }
            });

            // Menambahkan event listener untuk menambah jumlah produk
            incrementBtn.addEventListener('click', () => {
                productQuantity.value++;
                updateTotalPrice();
            });

            // Update total harga ketika pengguna mengetik jumlah produk
            productQuantity.addEventListener('input', () => {
                if (productQuantity.value < 1) {
                    productQuantity.value = 1;
                }
                updateTotalPrice();
            });

            // Fungsi untuk membuka modal dan menampilkan informasi produk
            function openModal(element) {
                // Mengambil data dari elemen yang diklik
                const productName = element.getAttribute('data-product-name');
                unitPrice = parseInt(element.getAttribute('data-product-price')); // Mengambil harga produk
                
                // Mengupdate nama produk di modal
                modalProductName.innerText = productName;
                // Mengupdate harga produk di modal
                modalPrice.innerText = `Rp${unitPrice.toLocaleString('id-ID')}`;
                
                // Reset jumlah produk dan total harga
                productQuantity.value = 1;
                updateTotalPrice();
            }

            // Fungsi untuk menambahkan produk ke keranjang
            function addToCartModal() {
                const quantity = parseInt(productQuantity.value);
                alert(`Anda telah menambahkan ${quantity} item ${modalProductName.innerText} ke keranjang.`);
                // Disini Anda bisa menambahkan logika untuk menyimpan produk ke keranjang belanja
            }
        </script>


    <!-- produk ke 6 -->
        <div class="team animate-up">
            <div class="imgBx">
                <img src="images/np6.jpg" alt="Product Promo ke 6">
                <span class="sale-badge">NEW!</span>
                <div class="cart-icon-container">
                    <i class="bi bi-cart-plus cart-icon" 
                        data-bs-toggle="modal" 
                        data-bs-target="#productModal" 
                        onclick="openModal(this)">
                    </i>
                </div>
            </div>
            <div class="team__content">
                <div class="contentBx">
                    <h3>
                        Crème Brûlée Muffin
                        <div class="product-price">
                            <!-- <span class="original-price">Rp150.000</span> -->
                            <span style="color: #001a7d;" class="fw-bold">Rp100.000</span>
                        </div>
                    </h3>
                    <a class="product-button">
                        <i class="bi bi-cart-plus cart-icon" 
                            data-product-name="Chocolate Muffin" 
                            data-product-price="100000" 
                            data-bs-toggle="modal" 
                            data-bs-target="#productModal" 
                            onclick="openModal(this)">
                        </i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Modal untuk menampilkan detail produk ke 6 -->
        <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="productModalLabel">Detail Produk</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Deskripsi singkat produk -->
                        <p><strong id="modalProductName">Crème Brûlée Muffin</strong></p>
                        <p>Muffin dengan tekstur lembut dan rasa kaya vanila, dipadukan dengan lapisan gula karamel yang renyah di atasnya, mirip dengan hidangan crème brûlée klasik.</p>

                        <!-- Nama produk -->
                        <h4 id="productName"></h4>

                        <!-- Harga produk -->
                        <div class="product-price">
                            <span class="original-price" style="text-decoration: line-through;">Rp150.000</span>
                            <span class="fw-bold" style="color: #001a7d;">Rp100.000</span>
                        </div>

                        <!-- Input untuk jumlah produk -->
                        <div class="mt-3">
                            <label for="productQuantity" class="form-label">Jumlah Produk</label>
                            <div class="input-group">
                                <button class="btn btn-outline-secondary" type="button" id="decrementBtn">-</button>
                                <input type="number" class="form-control text-center" id="productQuantity" value="1" min="1">
                                <button class="btn btn-outline-secondary" type="button" id="incrementBtn">+</button>
                            </div>
                        </div>

                        <!-- Harga yang disesuaikan dengan jumlah -->
                        <p class="mt-2">Total: <span id="totalPrice">Rp100.000</span></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="button" class="btn btn-primary" onclick="addToCartModal()">Tambahkan ke Keranjang</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            // Variabel untuk elemen-elemen DOM
            const decrementBtn = document.getElementById('decrementBtn');
            const incrementBtn = document.getElementById('incrementBtn');
            const productQuantity = document.getElementById('productQuantity');
            const totalPrice = document.getElementById('totalPrice');
            const modalProductName = document.getElementById('modalProductName');
            const modalPrice = document.querySelector('.fw-bold');
            let unitPrice = 100000; // Harga per unit produk, disesuaikan dengan data yang diambil

            // Fungsi untuk memperbarui harga total berdasarkan jumlah produk
            function updateTotalPrice() {
                const quantity = parseInt(productQuantity.value);
                totalPrice.textContent = `Rp${(quantity * unitPrice).toLocaleString('id-ID')}`;
            }

            // Menambahkan event listener untuk mengurangi jumlah produk
            decrementBtn.addEventListener('click', () => {
                if (productQuantity.value > 1) {
                    productQuantity.value--;
                    updateTotalPrice();
                }
            });

            // Menambahkan event listener untuk menambah jumlah produk
            incrementBtn.addEventListener('click', () => {
                productQuantity.value++;
                updateTotalPrice();
            });

            // Update total harga ketika pengguna mengetik jumlah produk
            productQuantity.addEventListener('input', () => {
                if (productQuantity.value < 1) {
                    productQuantity.value = 1;
                }
                updateTotalPrice();
            });

            // Fungsi untuk membuka modal dan menampilkan informasi produk
            function openModal(element) {
                // Mengambil data dari elemen yang diklik
                const productName = element.getAttribute('data-product-name');
                unitPrice = parseInt(element.getAttribute('data-product-price')); // Mengambil harga produk
                
                // Mengupdate nama produk di modal
                modalProductName.innerText = productName;
                // Mengupdate harga produk di modal
                modalPrice.innerText = `Rp${unitPrice.toLocaleString('id-ID')}`;
                
                // Reset jumlah produk dan total harga
                productQuantity.value = 1;
                updateTotalPrice();
            }

            // Fungsi untuk menambahkan produk ke keranjang
            function addToCartModal() {
                const quantity = parseInt(productQuantity.value);
                alert(`Anda telah menambahkan ${quantity} item ${modalProductName.innerText} ke keranjang.`);
                // Disini Anda bisa menambahkan logika untuk menyimpan produk ke keranjang belanja
            }
        </script>     


    <!-- produk ke 7 -->
        <div class="team animate-up">
            <div class="imgBx">
                <img src="images/np7.jpg" alt="Product Promo ke 6">
                <span class="sale-badge">NEW!</span>
                <div class="cart-icon-container">
                    <i class="bi bi-cart-plus cart-icon" 
                        data-bs-toggle="modal" 
                        data-bs-target="#productModal" 
                        onclick="openModal(this)">
                    </i>
                </div>
            </div>
            <div class="team__content">
                <div class="contentBx">
                    <h3>
                    Strawberry Streusel Muffins
                        <div class="product-price">
                            <!-- <span class="original-price">Rp150.000</span> -->
                            <span style="color: #001a7d;" class="fw-bold">Rp100.000</span>
                        </div>
                    </h3>
                    <a class="product-button">
                        <i class="bi bi-cart-plus cart-icon" 
                            data-product-name="Chocolate Muffin" 
                            data-product-price="100000" 
                            data-bs-toggle="modal" 
                            data-bs-target="#productModal" 
                            onclick="openModal(this)">
                        </i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Modal untuk menampilkan detail produk ke 7 -->
        <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="productModalLabel">Detail Produk</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Deskripsi singkat produk -->
                        <p><strong id="modalProductName">Strawberry Streusel Muffins</strong></p>
                        <p>Muffin lembut dengan potongan stroberi segar, diperkaya dengan taburan streusel renyah di atasnya, menciptakan kombinasi rasa manis dan asam yang nikmat.</p>

                        <!-- Nama produk -->
                        <h4 id="productName"></h4>

                        <!-- Harga produk -->
                        <div class="product-price">
                            <span class="original-price" style="text-decoration: line-through;">Rp150.000</span>
                            <span class="fw-bold" style="color: #001a7d;">Rp100.000</span>
                        </div>

                        <!-- Input untuk jumlah produk -->
                        <div class="mt-3">
                            <label for="productQuantity" class="form-label">Jumlah Produk</label>
                            <div class="input-group">
                                <button class="btn btn-outline-secondary" type="button" id="decrementBtn">-</button>
                                <input type="number" class="form-control text-center" id="productQuantity" value="1" min="1">
                                <button class="btn btn-outline-secondary" type="button" id="incrementBtn">+</button>
                            </div>
                        </div>

                        <!-- Harga yang disesuaikan dengan jumlah -->
                        <p class="mt-2">Total: <span id="totalPrice">Rp100.000</span></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="button" class="btn btn-primary" onclick="addToCartModal()">Tambahkan ke Keranjang</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            // Variabel untuk elemen-elemen DOM
            const decrementBtn = document.getElementById('decrementBtn');
            const incrementBtn = document.getElementById('incrementBtn');
            const productQuantity = document.getElementById('productQuantity');
            const totalPrice = document.getElementById('totalPrice');
            const modalProductName = document.getElementById('modalProductName');
            const modalPrice = document.querySelector('.fw-bold');
            let unitPrice = 100000; // Harga per unit produk, disesuaikan dengan data yang diambil

            // Fungsi untuk memperbarui harga total berdasarkan jumlah produk
            function updateTotalPrice() {
                const quantity = parseInt(productQuantity.value);
                totalPrice.textContent = `Rp${(quantity * unitPrice).toLocaleString('id-ID')}`;
            }

            // Menambahkan event listener untuk mengurangi jumlah produk
            decrementBtn.addEventListener('click', () => {
                if (productQuantity.value > 1) {
                    productQuantity.value--;
                    updateTotalPrice();
                }
            });

            // Menambahkan event listener untuk menambah jumlah produk
            incrementBtn.addEventListener('click', () => {
                productQuantity.value++;
                updateTotalPrice();
            });

            // Update total harga ketika pengguna mengetik jumlah produk
            productQuantity.addEventListener('input', () => {
                if (productQuantity.value < 1) {
                    productQuantity.value = 1;
                }
                updateTotalPrice();
            });

            // Fungsi untuk membuka modal dan menampilkan informasi produk
            function openModal(element) {
                // Mengambil data dari elemen yang diklik
                const productName = element.getAttribute('data-product-name');
                unitPrice = parseInt(element.getAttribute('data-product-price')); // Mengambil harga produk
                
                // Mengupdate nama produk di modal
                modalProductName.innerText = productName;
                // Mengupdate harga produk di modal
                modalPrice.innerText = `Rp${unitPrice.toLocaleString('id-ID')}`;
                
                // Reset jumlah produk dan total harga
                productQuantity.value = 1;
                updateTotalPrice();
            }

            // Fungsi untuk menambahkan produk ke keranjang
            function addToCartModal() {
                const quantity = parseInt(productQuantity.value);
                alert(`Anda telah menambahkan ${quantity} item ${modalProductName.innerText} ke keranjang.`);
                // Disini Anda bisa menambahkan logika untuk menyimpan produk ke keranjang belanja
            }
        </script>     


    <!-- produk ke 8 -->
        <div class="team animate-up">
            <div class="imgBx">
                <img src="images/np8.jpg" alt="Product Promo ke 6">
                <span class="sale-badge">NEW!</span>
                <div class="cart-icon-container">
                    <i class="bi bi-cart-plus cart-icon" 
                        data-bs-toggle="modal" 
                        data-bs-target="#productModal" 
                        onclick="openModal(this)">
                    </i>
                </div>
            </div>
            <div class="team__content">
                <div class="contentBx">
                    <h3>
                    The Best Espresso Chocolate Chip Muffin 
                        <div class="product-price">
                            <!-- <span class="original-price">Rp150.000</span> -->
                            <span style="color: #001a7d;" class="fw-bold">Rp100.000</span>
                        </div>
                    </h3>
                    <a class="product-button">
                        <i class="bi bi-cart-plus cart-icon" 
                            data-product-name="Chocolate Muffin" 
                            data-product-price="100000" 
                            data-bs-toggle="modal" 
                            data-bs-target="#productModal" 
                            onclick="openModal(this)">
                        </i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Modal untuk menampilkan detail produk ke 8 -->
        <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="productModalLabel">Detail Produk</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Deskripsi singkat produk -->
                        <p><strong id="modalProductName">The Best Espresso Chocolate Chip Muffin </strong></p>
                        <p>Muffin kaya rasa dengan kombinasi kopi espresso yang kuat dan cokelat chip manis, menciptakan perpaduan sempurna antara rasa pahit dan manis dalam setiap gigitan.</p>

                        <!-- Nama produk -->
                        <h4 id="productName"></h4>

                        <!-- Harga produk -->
                        <div class="product-price">
                            <span class="original-price" style="text-decoration: line-through;">Rp150.000</span>
                            <span class="fw-bold" style="color: #001a7d;">Rp100.000</span>
                        </div>

                        <!-- Input untuk jumlah produk -->
                        <div class="mt-3">
                            <label for="productQuantity" class="form-label">Jumlah Produk</label>
                            <div class="input-group">
                                <button class="btn btn-outline-secondary" type="button" id="decrementBtn">-</button>
                                <input type="number" class="form-control text-center" id="productQuantity" value="1" min="1">
                                <button class="btn btn-outline-secondary" type="button" id="incrementBtn">+</button>
                            </div>
                        </div>

                        <!-- Harga yang disesuaikan dengan jumlah -->
                        <p class="mt-2">Total: <span id="totalPrice">Rp100.000</span></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="button" class="btn btn-primary" onclick="addToCartModal()">Tambahkan ke Keranjang</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            // Variabel untuk elemen-elemen DOM
            const decrementBtn = document.getElementById('decrementBtn');
            const incrementBtn = document.getElementById('incrementBtn');
            const productQuantity = document.getElementById('productQuantity');
            const totalPrice = document.getElementById('totalPrice');
            const modalProductName = document.getElementById('modalProductName');
            const modalPrice = document.querySelector('.fw-bold');
            let unitPrice = 100000; // Harga per unit produk, disesuaikan dengan data yang diambil

            // Fungsi untuk memperbarui harga total berdasarkan jumlah produk
            function updateTotalPrice() {
                const quantity = parseInt(productQuantity.value);
                totalPrice.textContent = `Rp${(quantity * unitPrice).toLocaleString('id-ID')}`;
            }

            // Menambahkan event listener untuk mengurangi jumlah produk
            decrementBtn.addEventListener('click', () => {
                if (productQuantity.value > 1) {
                    productQuantity.value--;
                    updateTotalPrice();
                }
            });

            // Menambahkan event listener untuk menambah jumlah produk
            incrementBtn.addEventListener('click', () => {
                productQuantity.value++;
                updateTotalPrice();
            });

            // Update total harga ketika pengguna mengetik jumlah produk
            productQuantity.addEventListener('input', () => {
                if (productQuantity.value < 1) {
                    productQuantity.value = 1;
                }
                updateTotalPrice();
            });

            // Fungsi untuk membuka modal dan menampilkan informasi produk
            function openModal(element) {
                // Mengambil data dari elemen yang diklik
                const productName = element.getAttribute('data-product-name');
                unitPrice = parseInt(element.getAttribute('data-product-price')); // Mengambil harga produk
                
                // Mengupdate nama produk di modal
                modalProductName.innerText = productName;
                // Mengupdate harga produk di modal
                modalPrice.innerText = `Rp${unitPrice.toLocaleString('id-ID')}`;
                
                // Reset jumlah produk dan total harga
                productQuantity.value = 1;
                updateTotalPrice();
            }

            // Fungsi untuk menambahkan produk ke keranjang
            function addToCartModal() {
                const quantity = parseInt(productQuantity.value);
                alert(`Anda telah menambahkan ${quantity} item ${modalProductName.innerText} ke keranjang.`);
                // Disini Anda bisa menambahkan logika untuk menyimpan produk ke keranjang belanja
            }
        </script>     


    <!-- produk ke 9 -->
   
        <div class="team animate-up">
            <div class="imgBx">
                <img src="images/np9.jpg" alt="Product Promo ke 1">
                <span class="sale-badge">NEW!</span>
                <div class="cart-icon-container">
                    <i class="bi bi-cart-plus cart-icon" 
                        data-bs-toggle="modal" 
                        data-bs-target="#productModal" 
                        onclick="openModal(this)">
                    </i>
                </div>
            </div>
            <div class="team__content">
                <div class="contentBx">
                    <h3>
                    Vegan Oat Flour Banana Choc Chip Muffins 
                        <div class="product-price">
                            <!-- <span class="original-price">Rp150.000</span> -->
                            <span style="color: #001a7d;" class="fw-bold">Rp100.000</span>
                        </div>
                    </h3>
                    <a class="product-button">
                        <i class="bi bi-cart-plus cart-icon" 
                            data-product-name="Chocolate Muffin" 
                            data-product-price="100000" 
                            data-bs-toggle="modal" 
                            data-bs-target="#productModal" 
                            onclick="openModal(this)">
                        </i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Modal untuk menampilkan detail produk ke 1 -->
        <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="productModalLabel">Detail Produk</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Deskripsi singkat produk -->
                        <p><strong id="modalProductName">Vegan Blueberry and Coconut Muffins</strong></p>
                        <p> lembut tanpa produk hewani, diisi blueberry segar dan rasa kelapa manis, cocok untuk camilan sehat. 🫐🥥</p>

                        <!-- Nama produk -->
                        <h4 id="productName"></h4>

                        <!-- Harga produk -->
                        <div class="product-price">
                            <span class="original-price" style="text-decoration: line-through;">Rp150.000</span>
                            <span class="fw-bold" style="color: #001a7d;">Rp100.000</span>
                        </div>

                        <!-- Input untuk jumlah produk -->
                        <div class="mt-3">
                            <label for="productQuantity" class="form-label">Jumlah Produk</label>
                            <div class="input-group">
                                <button class="btn btn-outline-secondary" type="button" id="decrementBtn">-</button>
                                <input type="number" class="form-control text-center" id="productQuantity" value="1" min="1">
                                <button class="btn btn-outline-secondary" type="button" id="incrementBtn">+</button>
                            </div>
                        </div>

                        <!-- Harga yang disesuaikan dengan jumlah -->
                        <p class="mt-2">Total: <span id="totalPrice">Rp100.000</span></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="button" class="btn btn-primary" onclick="addToCartModal()">Tambahkan ke Keranjang</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            // Variabel untuk elemen-elemen DOM
            const decrementBtn = document.getElementById('decrementBtn');
            const incrementBtn = document.getElementById('incrementBtn');
            const productQuantity = document.getElementById('productQuantity');
            const totalPrice = document.getElementById('totalPrice');
            const modalProductName = document.getElementById('modalProductName');
            const modalPrice = document.querySelector('.fw-bold');
            let unitPrice = 100000; // Harga per unit produk, disesuaikan dengan data yang diambil

            // Fungsi untuk memperbarui harga total berdasarkan jumlah produk
            function updateTotalPrice() {
                const quantity = parseInt(productQuantity.value);
                totalPrice.textContent = `Rp${(quantity * unitPrice).toLocaleString('id-ID')}`;
            }

            // Menambahkan event listener untuk mengurangi jumlah produk
            decrementBtn.addEventListener('click', () => {
                if (productQuantity.value > 1) {
                    productQuantity.value--;
                    updateTotalPrice();
                }
            });

            // Menambahkan event listener untuk menambah jumlah produk
            incrementBtn.addEventListener('click', () => {
                productQuantity.value++;
                updateTotalPrice();
            });

            // Update total harga ketika pengguna mengetik jumlah produk
            productQuantity.addEventListener('input', () => {
                if (productQuantity.value < 1) {
                    productQuantity.value = 1;
                }
                updateTotalPrice();
            });

            // Fungsi untuk membuka modal dan menampilkan informasi produk
            function openModal(element) {
                // Mengambil data dari elemen yang diklik
                const productName = element.getAttribute('data-product-name');
                unitPrice = parseInt(element.getAttribute('data-product-price')); // Mengambil harga produk
                
                // Mengupdate nama produk di modal
                modalProductName.innerText = productName;
                // Mengupdate harga produk di modal
                modalPrice.innerText = `Rp${unitPrice.toLocaleString('id-ID')}`;
                
                // Reset jumlah produk dan total harga
                productQuantity.value = 1;
                updateTotalPrice();
            }

            // Fungsi untuk menambahkan produk ke keranjang
            function addToCartModal() {
                const quantity = parseInt(productQuantity.value);
                alert(`Anda telah menambahkan ${quantity} item ${modalProductName.innerText} ke keranjang.`);
                // Disini Anda bisa menambahkan logika untuk menyimpan produk ke keranjang belanja
            }
        </script>


</section>




@endsection
