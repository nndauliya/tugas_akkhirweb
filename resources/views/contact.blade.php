@extends('layouts.template')

@section('container')

<div class="container my-5">
    <h1 class="menu-title pt-5" style="color: #001a7d; font-family: 'Libre Baskerville Static', serif;">Contact Us</h1>
    <div class="yellow-line-contact"></div>
    <div class="row mt-5">
        <!-- Information Section -->
        <div class="col-md-6 ">
            <div class="card shadow">
                <div class="card-body">
                    <h2 class="card-title">Information</h2>
                    <p>Clairmont makes it easy for you to personalize your business/corporate gifts.</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <span class="bi bi-geo-alt-fill me-3"></span>
                            Gandaria I No. 73, Jakarta Selatan
                        </li>
                        <li class="list-group-item">
                            <span class="bi bi-telephone-fill me-3">
                            (021) 72788855 &nbsp;|&nbsp; 0811 8855 283
                            </span>
                        </li>
                        <li class="list-group-item">
                            <span class="bi bi-envelope-fill me-3"></span>
                            marketing@clairmontcake.co.id
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Contact Form Section -->
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-body">
                    <h2 class="card-title">Contact Us</h2>
                    <form action="/contact-us" method="post">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="name" class="form-label">Name :</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="email" class="form-label">Email :</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="subject" class="form-label">Pesanan :</label>
                            <input type="text" class="form-control" id="subject" name="subject" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="message" class="form-label">Deskripsi Pesanan :</label>
                            <textarea class="form-control" id="message" name="message" rows="5"  required></textarea>
                        </div>
                        <div class="form-group d-grid">
                            <button type="submit" class="btn text-white" style="background-color: #594545; border-radius: 5px; padding: 10px 20px; transition: 0.3s;">
                                <i class="bi bi-cart-fill"></i> Add to Cart
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
