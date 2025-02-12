<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <title>Company Profile IMP</title>
    <link rel="icon" href="{{ asset('impvicon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('/css/contact_us.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
    <!-- Navbar Start -->
    <div class="nav-section">
        <nav class="navbar">
            <a href="/homepage"><img src="{{ asset('/img/implogo.png') }}" alt="IMP Logo"></a>
            <div class="pagination">
                <a href="/homepage">Home</a>
                <a href="/about-us">About Us</a>
                <a href="/portofolio">Portofolio</a>
            </div>
            <a href="/contact-us" class="contact-us">Contact Us <img src="{{ asset('/img/arrowup.png') }}"
                    alt="" class="arrow-up"></a>
        </nav>
    </div>
    <!-- Navbar End -->

    <!-- Contact Us Start -->
    <div class="contact-us-section">
        <div class="contact-us-dec">Contact Us</div>
        <h1>We're Here To Help</h1>
        <p>Our team is ready to support you with expert advice & solutions.</p>
        <img src="{{ asset('/img/deal-img') }}.png" alt="">
        {{-- <form id='contact-form' action="{{ route('contact_us.store')}}" method="POST">
            @csrf
            <div class="form-contact-us">
                <div class="name">
                    <label for="name">Name</label>
                    <input type="text" id="name" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Masukkan Nama" required @required(true)>
                </div>
                <div class="email">
                    <label for="email">Email</label>
                    <input type="text" id="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Masukkan Email" required @required(true)>
                </div>
                <div class="company-name">
                    <label for="company_name">Company Name</label>
                    <input type="text" id="company_name" class="@error('company_name') is-invalid @enderror" name="company_name" value="{{ old('company_name') }}" placeholder="Ex. PT. IMP Studio" required @required(true)>
                </div>
                <div class="service">
                    <label for="service">Service</label>
                    <select name="service" id="service">
                        @forelse ($services as $service)
                            <option value="{{ $service->id }}">{{ $service->title }}</option>
                        @empty
                            <option value="">Belum ada informasi</option>
                        @endforelse
                    </select>
                </div>
                <div class="project-theme">
                    <label for="project_theme">Project Theme</label>
                    <select name="project_theme" id="project_theme">
                        @forelse ($project_themes as $project_theme)
                            <option value="{{ $project_theme->id }}">{{ $project_theme->name }}</option>
                        @empty
                            <option value="0">Belum ada informasi</option>
                        @endforelse
                    </select>
                </div>
                <div class="project-details">
                    <label for="project_details">Project Details</label>
                    {{-- <textarea id="project_details" class="@error('project_details') is-invalid @enderror" name="project_details" value="{{ old('project_details') }}" required @required(true)></textarea> --}}
                    {{-- <input type="text" id="project_details" class="@error('project_details') is-invalid @enderror" name="project_details" value="{{ old('project_details') }}" required @required(true)></input> --}}
                    {{-- <input type="text" aria-rowcount="12" name="" id="" placeholder="Tell Us More About Your Project">
                </div>
                <div class="last-row">
                    <button type="submit" class="submit">Submit <img src="{{ asset('/img/arrowup.png') }}"
                            alt="" class="arrow-up"></button>
                    <p>We Will contact you within 24 business hours.</p>
                </div>
            </div>
        </form> --}}
        <form id="contact-form" action="{{ route('contact_us.store') }}" method="POST">
            @csrf
            <div class="form-contact-us">
                <div class="name">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Masukkan Nama" required>
                </div>
                <div class="email">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" value="{{ old('email') }}" placeholder="Masukkan Email" required>
                </div>
                <div class="company-name">
                    <label for="company_name">Company Name</label>
                    <input type="text" id="company_name" name="company_name" value="{{ old('company_name') }}" placeholder="Ex. PT. IMP Studio" required>
                </div>
                <div class="service">
                    <label for="service">Service</label>
                    <select name="service" id="service">
                        @forelse ($services as $service)
                            <option value="{{ $service->id }}">{{ $service->title }}</option>
                        @empty
                            <option value="">Belum ada informasi</option>
                        @endforelse
                    </select>
                </div>
                <div class="project-theme">
                    <label for="project_theme">Project Theme</label>
                    <select name="project_theme" id="project_theme">
                        @forelse ($project_themes as $project_theme)
                            <option value="{{ $project_theme->id }}">{{ $project_theme->name }}</option>
                        @empty
                            <option value="0">Belum ada informasi</option>
                        @endforelse
                    </select>
                </div>
                <div class="project-details">
                    <label for="project_details">Project Details</label>
                    <input type="text" id="project_details" name="project_details" value="{{ old('project_details') }}" required>
                </div>
                <div class="last-row">
                    <button type="submit" class="submit">Submit <img src="{{ asset('/img/arrowup.png') }}" alt="" class="arrow-up"></button>
                </div>
            </div>
        </form>
        <div class="achivement">
            <div>
                <h4>150+</h4>
                <p>Impactful Project List</p>
            </div>
            <div class="divider"></div>
            <div>
                <h4>30+</h4>
                <p>Respected Costumer</p>
            </div>
            <div class="divider"></div>
            <div>
                <h4>7+</h4>
                <p>Year Dedicated Company</p>
            </div>
        </div>
    </div>
    <!-- Contact Us End -->

    <!-- FAQ Start -->
    <div class="faq-section">
        <div class="faq-dec">Need To Know</div>
        <h5>Frequently Asked Questions</h5>
        <div class="faq-list">
            {{-- <div class="faq">
                <div class="question">
                    <p>Mengapa Bebek kakiknya dua?</p>
                    <p>v</p>
                </div>
            </div> --}}
            @forelse ($faqs as $faq)
                <div class="faq">
                    <div class="question">
                        <p>{{ $faq->question }}</p>
                        <img
                            loading="lazy"
                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/ff274f990d28a14b5cc8942e4393a964293ad1024bedef694b1542ae5f8442e7?placeholderIfAbsent=true&apiKey=cee2b761989b4cd4b33e212a2290fbe6"
                            class="open-close-icon"
                            alt=""
                        />
                    </div>
                    <div class="answer">
                        {{ $faq->answer }}
                    </div>
                </div>
            @empty
                <h1>Tidak ada informasi</h1>
            @endforelse
            {{-- <div class="faq">
                <div class="question">
                    <p>Mengapa Bebek kakiknya dua?</p>
                    <p>v</p>
                </div>
            </div> --}}
        </div>
    </div>
    <!-- FAQ End -->

    <!-- sub-footer Start -->
    <div class="sub-footer">
        <img src="{{ asset('/img/implogo.png') }}" alt="">
        <h2>Let’s Turn Your <span>Dream Into Reality</span></h2>
        <p>Our team provides 24-hour support to help your business outperform competitors with precise and
            cost-effective solutions</p>
        <a href="/contact-us" class="contact-us">Contact Us
            <img src="{{ asset('/img/arrowright.png') }}" alt="" class="arrow-right">
        </a>
    </div>
    <!-- sub-footer End -->

    <!-- footer -->
    <div class="footer">
        <div class="sub-nav">
            <a href="/homepage">Home</a>
            <a href="/about-us">About Us</a>
            <a href="/portofolio">Portofolio</a>
        </div>
        <img loading="lazy"
            src="https://cdn.builder.io/api/v1/image/assets/TEMP/3f9bf6ed40772688cfee412de084ec65498877b8c29c34be09050bd039b631d5?placeholderIfAbsent=true&apiKey=51d67b9452d14157a8d4e7f70c371917"
            class="imp-logo" alt="Company Logo" />
        <p class="company-info-detail">
            IMP Studio is a partner in planning, analysis, and information
        </p>
        technology development for your business. Managed by a proficient team
        with over 10 years of experience.

        <div class="details">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-geo-alt" viewBox="0 0 16 16">
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
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-geo-alt" viewBox="0 0 16 16">
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
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-envelope" viewBox="0 0 16 16">
                <path
                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z" />
            </svg>
            <p>admin@impstudio.id</p>
        </div>

        <div class="info">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-telephone" viewBox="0 0 16 16">
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
            <a href="https://www.instagram.com/impstudio.id?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                target="_parent">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                    class="bi bi-instagram" viewBox="0 0 16 16">
                    <path
                        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                </svg>
            </a>
            <!-- YouTube -->
            <a href="https://www.youtube.com/@IMPStudioID" target="_parent">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                    class="bi bi-youtube" viewBox="0 0 16 16">
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
<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.getElementById("contact-form").addEventListener("submit", function (event) {
        event.preventDefault(); // Prevent default form submission
        
        let formData = new FormData(this); // Get form data

        fetch(this.action, {
            method: "POST",
            body: formData,
            headers: {
                "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value,
            },
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                Swal.fire({
                    title: "Success!",
                    text: "Data Berhasil Disimpan!",
                    icon: "success",
                    confirmButtonText: "OK"
                }).then(() => {
                    document.getElementById("contact-form").reset(); // Reset form after success
                });
            } else {
                Swal.fire({
                    title: "Something Wrong!",
                    text: "Please check your inputs.",
                    icon: "error",
                    confirmButtonText: "OK"
                });
            }
        })
        .catch(error => {
            Swal.fire({
                title: "Something Wrong!",
                text: "An unexpected error occurred.",
                icon: "error",
                confirmButtonText: "OK"
            });
        });
    });
    document.querySelectorAll(".faq").forEach(card => {
        card.addEventListener("click", function () {
            event.preventDefault();
            let img = this.querySelector(".open-close-icon");

            // Toggle the "active" class
            this.classList.toggle("active");

            // Change image source based on active state
            if (this.classList.contains("active")) {
                img.src="https://cdn.builder.io/api/v1/image/assets/TEMP/8bceb6f8f4bfc3b29b89aa503e960f447eb5b97fe0963ee3178cc1f991abddc7?placeholderIfAbsent=true&apiKey=cee2b761989b4cd4b33e212a2290fbe6"; // Change to opened image
            } else {
                img.src = "https://cdn.builder.io/api/v1/image/assets/TEMP/ff274f990d28a14b5cc8942e4393a964293ad1024bedef694b1542ae5f8442e7?placeholderIfAbsent=true&apiKey=cee2b761989b4cd4b33e212a2290fbe6"; // Revert back
            }
            });
        });
    });
</script>
</html>
