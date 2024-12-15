@extends('layouts.template')

@section('container')

<div class="container py-5 mt-5">
    <div class="row align-items-center">
        <!-- Gambar dengan efek animasi -->
        <div class="col-md-6 position-relative animate-left">
            <img src="{{ asset('images/aboutus.jpg') }}" alt="Tentang Kami" class="img-fluid rounded shadow-lg zoom-effect">
           
        </div>

        <!-- Teks dengan efek animasi -->
        <div class="col-md-6 animate-right ">
        <h3 class="display-5 fw-bold position-relative" style=" color: #001a7d; font-family: 'Libre Baskerville Static', serif;">
        <div class="text-center mb-4">
            <p class="pt-1 text-bold"><h2>ABOUT US</h2></p>
          <div class="yellow-line-contact "></div>
        </div>
            </h3>
            <p class="text-muted mt-4" style="line-height: 1.8; font-size: 1.1rem;">
            Muffin Fun's adalah toko kue spesial yang menawarkan berbagai muffin lezat dengan kualitas terbaik. Kami percaya bahwa setiap momen dalam hidup layak dirayakan, dan muffin kami adalah cara sempurna untuk membuat hari Anda lebih istimewa. Dengan berbagai pilihan rasa, dari klasik hingga kreasi inovatif, setiap muffin kami dibuat dengan bahan premium dan penuh cinta. Jadikan Muffin Fun's bagian dari perayaan Anda—apakah itu ulang tahun, momen keluarga, atau sekadar me-time. Karena bagi kami, muffin adalah simbol manisnya kehidupan yang patut dirayakan.
            </p>
            <a href="/home" class="product-button">Jelajahi Sekarang</a>
        </div>
    </div>
</div>



<div class="container py-5">
    <div class="container mt-5">
    <h2 class="text-center mb-5 text-bold" style="color: #001a7d;font-family: 'Libre Baskerville Static', serif;">Keunggulan Kami</h2>
    <div class="row">
        <!-- Card 1 -->
        <div class="col-md-4">
            <div class="card shadow-sm border-0 p-3 card-hover">
                <div class="text-center mb-3">
                    <i class="bi bi-emoji-smile fs-1 text-primary"></i>
                </div>
                <h5 class="text-center">Acara Apapun</h5>
                <p class="text-center text-muted">Muffin Fun's cocok untuk di berbagai acara atau sekadar me-time. Karena bagi kami, muffin adalah simbol manisnya kehidupan yang patut dirayakan. Nikmati kelezatannya kapan saja! 🎉.</p>
            </div>
        </div>
        <!-- Card 2 -->
        <div class="col-md-4">
            <div class="card shadow-sm border-0 p-3 card-hover">
                <div class="text-center mb-3">
                    <i class="bi bi-heart fs-1 text-primary"></i>
                </div>
                <h5 class="text-center">Banyak Varian</h5>
                <p class="text-center text-muted">Muffin Fun hadir dengan berbagai banyak pilihan rasa yang lezat, dari cokelat klasik hingga red velvet unik dan banyak rasa lainnya yang cocok untuk semua selera. Nikmati kelezatannya disetiap gigitan! 🌟.</p>
            </div>
        </div>
        <!-- Card 3 -->
        <div class="col-md-4">
            <div class="card shadow-sm border-0 p-3 card-hover">
                <div class="text-center mb-3">
                    <i class="bi bi-currency-dollar fs-1 text-primary"></i>
                </div>
                <h5 class="text-center">Harga Terjangkau </h5>
                <p class="text-center text-muted">Muffin Fun's menghadirkan muffin lezat dengan bahan premium namun tetap ramah di kantong. Dengan banyak varian, kami siap memanjakan Anda dengan kelezatan berkualitas tanpa khawatir soal harga.</p>
            </div>
        </div>
    </div>
</div>
</div>

<div class="container text-center mt-5">
    <h2 class="f"  style="color: #4a4a4a; color: #5a4a42; font-family: 'Libre Baskerville Static', serif;">Looking to Make a Lasting Impression?</h2>
    <p class="mt-3 mb-3">Cake to celebrate your sweet life!</p>
    <p class="fst-italic ">
    Tambah suasana acara dengan sentuhan yang berkesan istimewa. Muffin Fun's adalah toko kue spesial yang menawarkan berbagai muffin lezat dengan kualitas terbaik. Kami percaya bahwa setiap momen dalam hidup layak dirayakan, dan muffin kami adalah cara sempurna untuk membuat hari Anda lebih istimewa. Dengan berbagai pilihan rasa, dari klasik hingga kreasi inovatif, setiap muffin kami dibuat dengan bahan premium dan penuh cinta. Jadikan Muffin Fun's bagian dari berbagai perayaan Anda atau sekadar me-time. Karena bagi kami, muffin adalah simbol manisnya kehidupan yang patut dirayakan. Jangan lupa bahagia guyss!!
    </p>
</div>
<br>
<br>



@endsection

