<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <title>Company Profile IMP</title>
    <link rel="stylesheet" href="{{ asset('/css/homepage.css') }}" />
</head>

<body>
    <!-- Navbar Start -->
    <div class="nav-section">
        <nav class="navbar">
            <img src="{{ asset('/img/imp.png') }}" alt="IMP Logo" />
            <div class="pagination">
                <a href="#" class="home">Home</a>
                <a href="#">About Us</a>
                <a href="/portofolio">Portofolio</a>
            </div>
            <a href="/contact-us" class="contact-us">Contact Us <img src="assets/arrowup.png" alt="" class="arrow-up" /></a>
        </nav>
    </div>
    <!-- Navbar End -->

    <!-- status available -->
    <div class="status-box">
        <div class="status-text-container">
            <img src="img/blue muda.png" alt="icon" class="status-icon" />
            <div class="status-text">Available Now</div>
        </div>
    </div>

    <!-- hero -->
    <div class="hero-text">
        <h1>
            Proven <br /><span style="color: #bde0fe">Business</span> Associate
        </h1>
        <p>
            Our team provides 24-hour support to help your business outperform
            competitors <br />with precise and cost-effective solutions
        </p>
        <a href="/contact-us" class="contact-us" style="color: white">Contact Us <img src="assets/arrowup.png" alt=""
                class="arrow-up" /></a>
    </div>

    <!-- Our Partner-->
    <div class="partners">
        <h2 class="title-partner">Our Partners</h2>
        <div class="logo-partners">
            <img src="{{ asset('/img/beasiswa_arjuna_img.webp') }}" alt="arjuna" />
            <img src="{{ asset('img/bnn_img.webp') }}" alt="bnn" />
            <img src="{{ asset('img/kehati_img.webp') }}" alt="kehati" />
            <img src="{{ asset('img/kemenag_img.webp') }}" alt="kemenag" />
            <img src="{{ asset('img/kemenkes-img.webp') }}" alt="kemenkes" />
            <img src="{{ asset('img/kemenkeu-img.webp') }}" alt="kemenkeu" />
            <img src="{{ asset('img/madrasah-reform-img.webp') }}" alt="madrasah" />
            <img src="{{ asset('img/mpm_img.webp') }}" alt="npm" />
            <img src="{{ asset('img/pln_img.webp') }}" alt="pln" />
            <img src="{{ asset('img/telkom_img.webp') }}" alt="telkom" />
            <img src="{{ asset('img/travel_clinic_img.webp') }}" alt="travel" />
            <img src="{{ asset('img/ybm_pln_img.webp') }}" alt="ybm" />
        </div>
        <div class="logo-partners">
            <img src="{{ asset('/img/beasiswa_arjuna_img.webp') }}" alt="arjuna" />
            <img src="{{ asset('img/bnn_img.webp') }}" alt="bnn" />
            <img src="{{ asset('img/kehati_img.webp') }}" alt="kehati" />
            <img src="{{ asset('img/kemenag_img.webp') }}" alt="kemenag" />
            <img src="{{ asset('img/kemenkes-img.webp') }}" alt="kemenkes" />
            <img src="{{ asset('img/kemenkeu-img.webp') }}" alt="kemenkeu" />
            <img src="{{ asset('img/madrasah-reform-img.webp') }}" alt="madrasah" />
            <img src="{{ asset('img/mpm_img.webp') }}" alt="npm" />
            <img src="{{ asset('img/pln_img.webp') }}" alt="pln" />
            <img src="{{ asset('img/telkom_img.webp') }}" alt="telkom" />
            <img src="{{ asset('img/travel_clinic_img.webp') }}" alt="travel" />
            <img src="{{ asset('img/ybm_pln_img.webp') }}" alt="ybm" />
        </div>
    </div>

    <!-- why us section -->
    <div class="why-us-section">
        <div class="why-us-box">Why Us</div>
        <h1>
            We Assist In Professionally <br />
            Designing Strategies <br />
            <span style="color: #bde0fe"> With Technology And Development</span>
        </h1>
        <p>
            IMP Studio is a partner in planning, analysis, and information
            technology development for your <br />
            business. Managed by a proficient team with over 10 years of experience
        </p>

        <!-- Baris pertama dengan dua card di atas -->
        <div class="row mb-4">
            <div class="col-md-6 d-flex justify-content-center">
                <div class="custom-card">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex flex-column align-items-start">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                    <h2 class="title text-center">Artificial Intelligence</h2>
                    <!-- Tambahkan text-start -->
                    <div class="image-container"></div>
                </div>
            </div>

            <div class="col-md-6 d-flex justify-content-center">
                <div class="custom-card">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex flex-column align-items-start">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                    <h2 class="title text-center">IT Consultant</h2>
                    <!-- Tambahkan text-start -->
                    <div class="image-container"></div>
                </div>
            </div>
        </div>

        <!-- Baris kedua dengan tiga card berbaris -->
        <div class="row g-4">
            <div class="col-md-4 d-flex justify-content-center">
                <div class="custom-card">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex flex-column align-items-start">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                    <h2 class="title text-center">System Development</h2>
                    <!-- Tambahkan text-start -->
                    <div class="image-container"></div>
                </div>
            </div>

            <div class="col-md-4 d-flex justify-content-center">
                <div class="custom-card">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex flex-column align-items-start">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                    <h2 class="title text-center">Compliant Govtech</h2>
                    <!-- Tambahkan text-start -->
                    <div class="image-container"></div>
                </div>
            </div>

            <div class="col-md-4 d-flex justify-content-center">
                <div class="custom-card">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex flex-column align-items-start">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                    <h2 class="title text-center">Cloud Manage Service</h2>
                    <!-- Tambahkan text-start -->
                    <div class="image-container"></div>
                </div>
            </div>
        </div>
        <!-- Our Mission -->
        <div class="our-mission-section">
            <div class="our-mission-box">Our Mission</div>
            <h1>
                Committed to <span style="color: #bde0fe">quality</span>, talent
                <span style="color: #bde0fe">development</span>, infrastructure
                <span style="color: #bde0fe">growth</span>, world-class
                <span style="color: #bde0fe">services</span>, and employee
                <span style="color: #bde0fe">well-being</span>.
            </h1>
            <p>
                First impressions matter. That's why our mission is to create clean, enduring designs that elevate. First impressions
                <br /> matter. That's why our mission.
            </p>
        </div>
        <!-- Work proud -->
        <div class="work-proud-section">
            <div class="work-proud-box">Work that Make Us Proud</div>
            <h1>
                Recent Works, <span style="color: #bde0fe">Notable Impact</span>
            </h1>

            <div class="container mt-5">
                <div class="careers-container">
                    <div class="roles-section">
                        <div class="designer-role">
                            <h2 class="role-title">UI/UX Designer</h2>
                            <p class="role-description">
                                UI/UX Designers craft visually appealing and user-friendly
                                interfaces. They ensure a seamless and engaging user
                                experience.
                            </p>
                        </div>

                        <div class="engineer-role">
                            <h2 class="engineer-title">Software Engineer</h2>
                            <p class="engineer-description">
                                Software Engineers develop and maintain scalable applications.
                                They solve technical problems and implement new features.
                            </p>
                        </div>

                        <div class="devops-role">
                            <h2 class="devops-title">DevOps Engineer</h2>
                            <p class="devops-description">
                                DevOps Engineers automate and optimize software delivery
                                pipelines. They ensure stable and efficient infrastructure
                                management.
                            </p>
                        </div>
                    </div>

                    <div class="image-box">
                        <img loading="lazy"
                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/c513b005ae73be43fdc66604306cff21836c945f9b51a90199578d8779b311ec"
                            class="team-image" alt="Team collaboration illustration" />
                    </div>
                </div>
            </div>
            <div class="amount-company-project">
                <div class="stats-section py-3">
                    <div class="container">
                        <div class="row justify-content-start text-center text-white">
                            <!-- Impactful Projects Section -->
                            <div class="col-md-4 impactful-projects">
                                <div>
                                    <span class="d-block fs-1 fw-bold">150+</span>
                                    <span class="fs-5">Impactful Project List</span>
                                </div>
                            </div>

                            <!-- Respected Customers Section -->
                            <div class="col-md-4 respected-customers">
                                <div>
                                    <span class="d-block fs-1 fw-bold">30+</span>
                                    <span class="fs-5">Respected Customers</span>
                                </div>
                            </div>

                            <!-- Year Dedicated Company Section -->
                            <div class="col-md-4 d-flex align-items-center px-4">
                                <div>
                                    <span class="d-block fs-1 fw-bold">7+</span>
                                    <span class="fs-5">Year Dedicated Company</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- what our -->
            <div class="what-our-section">
                <div class="what-our-box">What Our Users Say</div>
                <h1>
                    Trusted By <span style="color: #bde0fe">Businesses</span> Like Yours
                </h1>
            </div>
            <div class="ceo-section">
                <div class="testimonial-container">
                    <img loading="lazy"
                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/4cc72f00dca422427fe3591b06eca9c10b94784c9c52f721b075be39dc9ac8ff?placeholderIfAbsent=true&apiKey=51d67b9452d14157a8d4e7f70c371917"
                        class="testimonial-image" alt="Customer testimonial background image" />
                    <div class="content-wrapper">
                        <div class="logo-container">
                            <img loading="lazy"
                                src="https://cdn.builder.io/api/v1/image/assets/TEMP/3f9bf6ed40772688cfee412de084ec65498877b8c29c34be09050bd039b631d5?placeholderIfAbsent=true&apiKey=51d67b9452d14157a8d4e7f70c371917"
                                class="company-logo" alt="Company logo" />
                        </div>
                        <div class="testimonial-content">
                            <div class="quote-text">
                                At IMP Studio, we turn innovative ideas into impactful
                                realities. Every challenge is an opportunity to push
                                boundaries. We create experiences that leave a lasting mark.
                            </div>
                            <div class="author-info">
                                <div class="author-name">Agung Laksono</div>
                                <div class="author-title">Co - Founder & CEO IMP Studio</div>
                            </div>
                            <hr />
                        </div>
                        <div class="container">
                            <div class="row justify-content-between">
                                <div class="col-auto stat-item">
                                    <div class="percentage">73%</div>
                                    <div class="stat-description">
                                        Lorem Ipsum Dolor Sit amet.
                                    </div>
                                </div>
                                <div class="col-auto stat-item">
                                    <div class="percentage">3x</div>
                                    <div class="stat-description">
                                        Lorem Ipsum Dolor Sit amet.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- testimonial -->
            <div class="testimoni-section">
                <div class="container mt-5">
                    <div class="row justify-content-center gy-4 align-items-stretch">
                        <div class="col-md-4 d-flex">
                            <div class="testimonial">
                                <img src="{{ asset('img/telkom_img.webp') }}" class="logo-img" />
                                <div class="stars-container">
                                    <img src="{{ asset('img/star-fill.svg') }}" alt="Star" class="star-icon" />
                                </div>
                                <p class="rating">8/10</p>
                                <p>
                                    “IMP Studio mampu menjawab kebutuhan operasional kami dengan
                                    tepat dan cepat. Kehandalan aplikasi juga terjaga dengan
                                    baik sehingga dapat mengakselerasi proses kerja.”
                                </p>
                                <p class="name">Darmawan</p>
                                <p class="position">Tim Telkom Digireview</p>
                            </div>
                        </div>

                        <div class="col-md-4 d-flex">
                            <div class="testimonial">
                                <img src="{{ asset('img/kemenag_img.webp') }}" class="logo-img" />
                                <div class="stars-container">
                                    <img src="{{ asset('img/star-fill.svg') }}" alt="Star" class="star-icon" />
                                </div>
                                <p class="rating">9/10</p>
                                <p>
                                    “IMP ini perusahaan yang bagus, hasil pekerjaan yang mereka
                                    kerjakan sesuai dengan perencanaan yang kita inginkan;
                                    responsif dalam penyelesaian problem.”
                                </p>
                                <p class="name">Muhtadin</p>
                                <p class="position">
                                    Pusdiklat Tenaga Teknis Pendidikan dan Keagamaan
                                </p>
                            </div>
                        </div>

                        <div class="col-md-4 d-flex">
                            <div class="testimonial">
                                <img src="{{ asset('img/kemenag_img.webp') }}" class="logo-img" />
                                <div class="stars-container">
                                    <img src="{{ asset('img/star-fill.svg') }}" alt="Star" class="star-icon" />
                                </div>
                                <p class="rating">8.9/10</p>
                                <p>“Mantap, Elegan, Good Looking.”</p>
                                <p class="name">Wildan Taufik</p>
                                <p class="position">Ketua Tim Sistem Informasi PD Pontren</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FAQ -->
            <div class="faq-section">
                <div class="faq-box">Need to Know</div>
                <h1>Frequently Asked Questions</h1>
                <div class="faq-componet">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    Accordion Item #1
                                    <img src="{{ asset('img/chevron-down.svg') }}" alt="icon" class="accordion-icon" />
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is
                                    the first item's accordion body.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    Accordion Item #2
                                    <img src="{{ asset('img/chevron-down.svg') }}" alt="icon" class="accordion-icon" />
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is
                                    the second item's accordion body. Let's imagine this being
                                    filled with some actual content.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Accordion Item #3
                                    <img src="{{ asset('img/chevron-down.svg') }}" alt="icon" class="accordion-icon" />
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is
                                    the third item's accordion body.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFour" aria-expanded="false"
                                    aria-controls="flush-collapseFour">
                                    Accordion Item #4
                                    <img src="{{ asset('img/chevron-down.svg') }}" alt="icon" class="accordion-icon" />
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is
                                    the third item's accordion body.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- sub-footer start -->
    <div class="sub-footer">
        <div class="sub-footer">
            <img loading="lazy"
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/3f9bf6ed40772688cfee412de084ec65498877b8c29c34be09050bd039b631d5?placeholderIfAbsent=true&apiKey=51d67b9452d14157a8d4e7f70c371917"
                class="hero-dream__logo-img" alt="Company Logo" />
            <h2>
                Let’s Turn Your <br />
                <span>Dream Into Reality</span>
            </h2>
            <p>
                Our team provides 24-hour support to help your business outperform
                competitors with precise and cost-effective solutions
            </p>
            <a href="#" class="contact-us">Contact Us
                <img src="{{ asset('img/chevron-right.svg') }}" alt="" class="arrow-right" />
            </a>
        </div>
    </div>
    <!-- footer -->
    <div class="footer">
        <div class="sub-nav">
            <a href="#">Home</a>
            <a href="#">About Us</a>
            <a href="#">Portofolio</a>
        </div>
        <img loading="lazy"
            src="https://cdn.builder.io/api/v1/image/assets/TEMP/3f9bf6ed40772688cfee412de084ec65498877b8c29c34be09050bd039b631d5?placeholderIfAbsent=true&apiKey=51d67b9452d14157a8d4e7f70c371917"
            class="imp-logo" alt="Company Logo" />
        <p class="company-info-detail">
            IMP Studio is a partner in planning, analysis, and information
            technology development for your business. Managed by a proficient team
            with over 10 years of experience.
        </p>

        <div class="details">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt"
                viewBox="0 0 16 16">
                <path
                    d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10" />
                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
            </svg>
            <p>Virtual Office</p>
            <p class="detail-caption">
                Jl. Manunggal Pratama, Jl. Raya Kalimalang No.8, Cipinang Melayu, Kec.
                Makasar, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13620
            </p>
        </div>

        <div class="details">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt"
                viewBox="0 0 16 16">
                <path
                    d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10" />
                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
            </svg>
            <p>Operational</p>
            <p class="detail-caption">
                Gang Mekar VII, No.11 RT 12/ RW 9, Cijantung, Kec. Pasar Rebo, Jakarta Timur, Daerah Khusus Ibukota
                Jakarta 13770
            </p>
        </div>

        <div class="info">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope"
                viewBox="0 0 16 16">
                <path
                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z" />
            </svg>
            <p>admin@impstudio.id</p>
        </div>

        <div class="info">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone"
                viewBox="0 0 16 16">
                <path
                    d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
            </svg>
            <p>0822-1020-1446</p>
        </div>

        <div class="logo-list" style="display: flex; gap: 16px;">
            <!-- Facebook -->
            <a href="https://www.facebook.com/impstudio.id" target="_parent">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                    class="bi bi-facebook" viewBox="0 0 16 16">
                    <path
                        d="M8 0C3.58 0 0 3.58 0 8c0 3.905 2.853 7.14 6.579 7.846v-5.55h-1.98v-2.3h1.98v-1.79c0-1.96 1.195-3.03 2.938-3.03.854 0 1.756.157 1.756.157v1.92h-.987c-.975 0-1.27.61-1.27 1.23v1.52h2.15l-.343 2.3h-1.807V16C13.147 15.14 16 11.905 16 8c0-4.42-3.58-8-8-8z" />
                </svg>
            </a>
            <!-- Instagram -->
            <a href="https://www.instagram.com/impstudio.id?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_parent">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                    class="bi bi-instagram" viewBox="0 0 16 16">
                    <path
                        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                </svg>
            </a>
            <!-- YouTube -->
            <a href="https://www.youtube.com/@IMPStudioID" target="_parent">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-youtube"
                    viewBox="0 0 16 16">
                    <path
                        d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z" />
                </svg>
            </a>
            <!-- LinkedIn -->
            <a href="https://www.linkedin.com/company/impstudio/" target="_parent">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                    class="bi bi-linkedin" viewBox="0 0 16 16">
                    <path
                        d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z" />
                </svg>
            </a>
        </div>



        <p class="copright">
            Copyright © 2014 - 2024 IMP Studio. All rights reserved
        </p>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</html>
