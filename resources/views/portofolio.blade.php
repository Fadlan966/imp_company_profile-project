<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <title>Company Profile IMP</title>
    <link rel="stylesheet" href="{{ asset('/css/portofolio.css') }}">
</head>
<body>
    <!-- Navbar Start -->
    <div class="nav-section">
        <nav class="navbar">
            <img src="{{ asset('/img/implogo.png') }}" alt="IMP Logo">
            <div class="pagination">
                <a href="/homepage">Home</a>
                <a href="#">About Us</a>
                <a href="#" class="active">Portofolio</a>
            </div>
            <a href="/contact-us" class="contact-us">Contact Us <img src="{{ asset('/img/arrowup.png') }}" alt="" class="arrow-up"></a>
        </nav>
    </div>
    <!-- Navbar End -->

    <!-- Portofolio Start -->
    <div class="portofolio-section">
        <div class="portofolio-dec">Portofolio</div>
        <h1>Our Work in Action</h1>
        <p>We're here to bring your vision to life with innovative solutions and expert guidance.</p>
        <div class="container">
            <div class="image"></div>
            <div class="image"></div>
            <div class="image"></div>
            <div class="image"></div>
            <div class="image"></div>
            <div class="image"></div>
            <div class="image"></div>
            <div class="image"></div>
            <div class="image"></div>
        </div>
        <div class="pagination">
            <a href="#">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
        </div>
    </div>
    <!-- Portofolio End -->

    <!-- Product Start -->
    <div class="product-section">
        <div class="product-dec">Our Product</div>
        <h1>Our Work in Action</h1>
        <p>Take a closer look at our products, where quality meets functionality. We’re here to provide solutions that fit seamlessly into your world.</p>

        <div class="container">
            <div class="product">
                <div class="wrapper">
                    <img src="{{ asset('/img/masbro.png') }}" alt="">
                </div>
                <div class="details">
                    <h2>Smart Chat Bot</h2>
                    <p>Chatbot merupakan suatu program kecerdasan buatan (AI) yang dapat menyerupai percakapan manusia dalam bentuk pesan, serta merespon pertanyaan pelanggan dengan cepat dan natural</p>
                </div>
            </div>
        </div>

        <div class="container filled">
            <div class="product-reverse">
                <div class="wrapper">
                    <img src="{{ asset('/img/masbro.png') }}" alt="">
                </div>
                <div class="details">
                    <h2>Smart Chat Bot</h2>
                    <p>Chatbot merupakan suatu program kecerdasan buatan (AI) yang dapat menyerupai percakapan manusia dalam bentuk pesan, serta merespon pertanyaan pelanggan dengan cepat dan natural</p>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="product">
                <div class="wrapper">
                    <img src="{{ asset('/img/masbro.png') }}" alt="">
                </div>
                <div class="details">
                    <h2>Smart Chat Bot</h2>
                    <p>Chatbot merupakan suatu program kecerdasan buatan (AI) yang dapat menyerupai percakapan manusia dalam bentuk pesan, serta merespon pertanyaan pelanggan dengan cepat dan natural</p>
                </div>
            </div>
        </div>

        <div class="container filled">
            <div class="product-reverse">
                <div class="wrapper">
                    <img src="{{ asset('/img/masbro.png') }}" alt="">
                </div>
                <div class="details">
                    <h2>Smart Chat Bot</h2>
                    <p>Chatbot merupakan suatu program kecerdasan buatan (AI) yang dapat menyerupai percakapan manusia dalam bentuk pesan, serta merespon pertanyaan pelanggan dengan cepat dan natural</p>
                </div>
            </div>
        </div>

    </div>
    <!-- Product End -->

    <!-- sub-footer Start -->
    <div class="sub-footer">
        <img src="{{ asset('/img/implogo.png') }}" alt="">
        <h2>Let’s Turn Your <span>Dream Into Reality</span></h2>
        <p>Our team provides 24-hour support to help your business outperform competitors with precise and cost-effective solutions</p>
        <a href="#" class="contact-us">Contact Us
            <img src="{{ asset('/img/arrowright.png') }}" alt="" class="arrow-right">
        </a>
    </div>
    <!-- sub-footer End -->

    <!-- Footer Start -->
    <div class="footer">
        <div class="sub-nav">
            <a href="/homepage">Home</a>
            <a href="#">About Us</a>
            <a href="#">Portofolio</a>
        </div>
        <img class="imp-logo" src="{{ asset('/img/implogo.png') }}" alt="IMP Logo">
        <p class="company-info-detail">IMP Studio is a partner in planning, analysis, and information technology development for your business. Managed by a proficient team with over 10 years of experience.</p>

        <div class="details">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10"/>
                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
            </svg>
            <p>Virtual Office</p>
            <p class="detail-caption">Jl. Manunggal Pratama, Jl. Raya Kalimalang No.8, Cipinang Melayu, Kec. Makasar, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13620</p>
        </div>

        <div class="info">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
            </svg>
            <p>admin@impstudio.id</p>
        </div>

        <div class="logo-list">
            <a href="instagram.com" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                </svg>
            </a>
        </div>

        <p class="copright">Copyright © 2014 - 2024 IMP Studio. All rights reserved</p>
    </div>
    <!-- Footer End -->
</body>
</html>
