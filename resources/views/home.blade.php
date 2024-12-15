@extends('layouts.template')

@section('container')

        <!-- Hero Section -->
    <section class="hero-section" style="background-image: url('{{ asset('images/bghome.jpg') }}');">
        <div class="text-center ">
            <h1 class="display-4" style="color: #FBFBFB; font-family: 'Libre Baskerville Static', serif;">Welcome to Muffin Fun's </h1>
            <p class="lead">Cake to celebrate your sweet life</p>
            <a href="#team" class="btn btn-light">Order Now </a>
        </div>
    </section>

    <!-- about -->
    <div class="container py-5 mt-5">
        <div class="row align-items-center">
            <!-- Gambar dengan efek animasi -->
            <div class="col-md-6 position-relative animate-left">
                <img src="{{ asset('images/abtus.jpg') }}" alt="Tentang Kami" class="img-fluid rounded shadow-lg zoom-effect">
            
            </div>

            <!-- Teks dengan efek animasi -->
            <div class="col-md-6 animate-right ">
            <h3 class="display-5 fw-bold position-relative" style="color: #4a4a4a; color: #5a4a42; font-family: 'Aclonica', sans-serif;">
            <div class="text-center mb-4">
                <p class="pt-1 text-bold"><h2>ABOUT US</h2></p>
            <div class="coklat-line "></div>
            </div>
                </h3>
                <p class="text-muted mt-4" style="line-height: 1.8; font-size: 1.1rem;">
                Muffin Fun's adalah toko kue spesial yang menawarkan berbagai muffin lezat dengan kualitas terbaik. Kami percaya bahwa setiap momen dalam hidup layak dirayakan, dan muffin kami adalah cara sempurna untuk membuat hari Anda lebih istimewa. Dengan berbagai pilihan rasa, dari klasik hingga kreasi inovatif, setiap muffin kami dibuat dengan bahan premium dan penuh cinta. Jadikan Muffin Fun's bagian dari perayaan di hari spesial anda atau sekadar me-time. Karena bagi kami, muffin adalah simbol manisnya kehidupan yang patut dirayakan.
                </p>
                <a href="/home" class="product-button">Tap to Order</a>
            </div>
        </div>
    </div>


    <!-- Best Sellers Section -->
        <h2 class="text-center fw-bold mb-4 mt-5" style="color: #5a4a42; font-family: 'Aclonica', sans-serif; ">Best Sellers</h2> 
        <section class="team__container" id="team">

            <!-- produk ke 1 -->
                <div class="team animate-up">
                    <div class="imgBx">
                        <img src="images/bs1.jpg" alt="Best Seller 1">
                        <span class="sale-badge">FAV!</span>
                        <div class="cart-icon-container">
                            <i class="bi bi-cart-plus cart-icon" data-bs-toggle="modal" data-bs-target="#productModal" onclick="addToCart('Chocolate Muffin', '$10.88')"></i>
                        </div>
                    </div>
                    <div class="team__content">
                        <div class="contentBx">
                            <h3>Vegan Blueberry and Coconut Muffins <div class="product-price">
                                <span style="color: #802222;" class="fw-bold">Rp100.000</span>
                            </div></h3>
                            <a href="/home" class="product-button">
                                <i class="bi bi-cart-plus me-2"></i> Add to Cart
                            </a>
                        </div>
                    </div>
                </div>

            <!-- produk ke2 -->
                <div class="team animate-up">
                    <div class="imgBx">
                        <img src="images/bs2.jpg" alt="Best Seller 2">
                        <span class="sale-badge">FAV!</span>
                        <div class="cart-icon-container">
                            <i class="bi bi-cart-plus cart-icon" data-bs-toggle="modal" data-bs-target="#productModal" onclick="addToCart('Chocolate Muffin', '$10.88')"></i>
                        </div>
                    </div>
                    <div class="team__content">
                        <div class="contentBx">
                            <h3>Healthy Chocolate Chip Muffins <div class="product-price">
                                <span style="color: #802222;" class="fw-bold">Rp100.000</span>
                            </div></h3>
                            <a href="/home" class="product-button">
                                <i class="bi bi-cart-plus me-2"></i> Add to Cart
                            </a>
                        </div>
                    </div>
                </div>

            <!-- produk ke3 -->
            <div class="team animate-up">
                <div class="imgBx">
                    <img src="images/bs3.jpg" alt="Best Seller 3">
                    <span class="sale-badge">FAV!</span>
                    <div class="cart-icon-container">
                        <i class="bi bi-cart-plus cart-icon" data-bs-toggle="modal" data-bs-target="#productModal" onclick="addToCart('Chocolate Muffin', '$10.88')"></i>
                    </div>
                </div>
                <div class="team__content">
                    <div class="contentBx">
                        <h3>Cinnamon Roll Muffins<div class="product-price">
                            <span style="color: #802222;" class="fw-bold">Rp100.000</span>
                        </div></h3>
                        <a href="/home" class="product-button">
                            <i class="bi bi-cart-plus me-2"></i> Add to Cart
                        </a>
                    </div>
                </div>
            </div>

        </section>

    <!-- bagian produk baru -->
    <h2 class="text-center fw-bold mb-4 mt-5 pt-5" style="color: #5a4a42; font-family: 'Aclonica', sans-serif; ">New Product</h2> 
        <section class="team__container" id="team">

            <!-- produk ke 1 -->
                <div class="team animate-up">
                    <div class="imgBx">
                        <img src="images/np1.jpg" alt="New Prodact 1">
                        <span class="sale-badge">NEW!</span>
                        <div class="cart-icon-container">
                            <i class="bi bi-cart-plus cart-icon" data-bs-toggle="modal" data-bs-target="#productModal" onclick="addToCart('Chocolate Muffin', '$10.88')"></i>
                        </div>
                    </div>
                    <div class="team__content">
                        <div class="contentBx">
                            <h3>Vegan Oat Flour Banana Choc Chip Muffins <div class="product-price">
                                <span style="color: #802222;" class="fw-bold">Rp100.000</span>
                            </div></h3>
                            <a href="/home" class="product-button">
                                <i class="bi bi-cart-plus me-2"></i> Add to Cart
                            </a>
                        </div>
                    </div>
                </div>

            <!-- produk ke2 -->
                <div class="team animate-up">
                    <div class="imgBx">
                        <img src="images/np2.jpg" alt="New Prodact 2">
                        <span class="sale-badge">NEW!</span>
                        <div class="cart-icon-container">
                            <i class="bi bi-cart-plus cart-icon" data-bs-toggle="modal" data-bs-target="#productModal" onclick="addToCart('Chocolate Muffin', '$10.88')"></i>
                        </div>
                    </div>
                    <div class="team__content">
                        <div class="contentBx">
                            <h3>Soft Bakery Style Almond Poppyseed Muffins  <div class="product-price">
                                <span style="color: #802222;" class="fw-bold">Rp100.000</span>
                            </div></h3>
                            <a href="/home" class="product-button">
                                <i class="bi bi-cart-plus me-2"></i> Add to Cart
                            </a>
                        </div>
                    </div>
                </div>

            <!-- produk ke3 -->
            <div class="team animate-up">
                <div class="imgBx">
                    <img src="images/np3.jpg" alt="New Prodact 3">
                    <span class="sale-badge">NEW!</span>
                    <div class="cart-icon-container">
                        <i class="bi bi-cart-plus cart-icon" data-bs-toggle="modal" data-bs-target="#productModal" onclick="addToCart('Chocolate Muffin', '$10.88')"></i>
                    </div>
                </div>
                <div class="team__content">
                    <div class="contentBx">
                        <h3>Carrot Cake Muffins <div class="product-price">
                            <span style="color: #802222;" class="fw-bold">Rp100.000</span>
                        </div></h3>
                        <a href="/home" class="product-button">
                            <i class="bi bi-cart-plus me-2"></i> Add to Cart
                        </a>
                    </div>
                </div>
            </div>
    </div>
    </section>

@endsection
