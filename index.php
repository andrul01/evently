<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--swiper js-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css">
    <!--LINK FONT AWESOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.3.7/css/swiper.min.css">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="icon" href="./images/favicon.png" type="image/x-icon">
    <!--link style css-->
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="./images/favicon.svg" type="image/svg+xml">
    <title>Evently - Home</title>
</head>

<body>

    <!-- Database connection -->
    <?php include './partials/config.php';  ?>

    <!-- Header  -->
    <?php include "./partials/header.php"; ?>

    <!--home section start-->
    <section class="home" Id="home">
        <div class="content">
            <h1>Not Just Events, We Create Experiences</h1>
            <p>Whether you're planning a wedding, a corporate gala, or a birthday bash, we know how to turn detours into the main event. Evently brings your vision to life with style, strategy, and a sprinkle of magic.</p>
            <a href="./gallery.php" class="btn">Book now</a>
        </div>
    </section>

    <!--about us section start-->
    <section class="about" id="about">
        <h1 class="heading"><span>about</span> us</h1>
        <div class="row">
            <div class="img">
                <img src="./images/about.jpg" alt="About Us Image">
            </div>
            <div class="content">
                <h3>Crafting Unforgettable Celebrations, Just for You</h3>
                <p>At Evently, we specialize in turning your most cherished moments into lifelong memories. Whether it's a birthday, wedding, corporate event, or a unique celebration, our team is dedicated to delivering exceptional experiences tailored to your vision.</p>
                <p>With a passion for creativity and a commitment to quality, we go above and beyond to ensure every detail is perfect — from décor to planning and execution. Let us bring your dream event to life with elegance, innovation, and a touch of magic.</p>
                <a href="#contact" class="btn">Contact Us</a>
            </div>
        </div>
    </section>

    <!--service section start-->
    <section class="services" id="services">
        <h1 class="heading">Our <span>Services</span></h1>
        <div class="boxContainer">
            <div class="box">
                <i class="fas fa-map-marker-alt"></i>
                <h3>Banquet Halls</h3>
                <p>Spacious, elegant indoor venues ideal for weddings, receptions, and formal celebrations with premium facilities.</p>
            </div>
            <div class="box">
                <i class="fas fa-tree"></i>
                <h3>Garden Venues</h3>
                <p>Beautiful open-air garden spaces perfect for outdoor events, day functions, and nature-themed celebrations.</p>
            </div>
            <div class="box">
                <i class="fas fa-umbrella-beach"></i>
                <h3>Beachside Venues</h3>
                <p>Enjoy your events with a view of the waves — great for sunset ceremonies and beach parties.</p>
            </div>
            <div class="box">
                <i class="fas fa-building"></i>
                <h3>Corporate Event Spaces</h3>
                <p>Fully equipped venues for meetings, seminars, and office parties with modern infrastructure and AV support.</p>
            </div>
            <div class="box">
                <i class="fas fa-city"></i>
                <h3>Rooftop Venues</h3>
                <p>Chic city-view rooftops designed for evening parties, engagements, or small gatherings with a vibrant vibe.</p>
            </div>
            <div class="box">
                <i class="fas fa-hotel"></i>
                <h3>Luxury Resorts</h3>
                <p>Premium destinations with stay and celebration facilities — perfect for destination weddings or weekend events.</p>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div id="serviceModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <img id="modalImage" src="" alt="Venue Image" class="modal-image">
            <h2 id="modalTitle"></h2>
            <p id="modalDesc"></p>
            <div id="modalRating" class="rating"></div>
        </div>
    </div>

    <script>
        // Service Modal
        const modalData = [{
                title: "Banquet Halls",
                desc: "Spacious, elegant indoor venues ideal for weddings, receptions, and formal celebrations with premium facilities.",
                image: "images/bouquet.jpg",
                rating: 5
            },
            {
                title: "Garden Venues",
                desc: "Beautiful open-air garden spaces perfect for outdoor events, day functions, and nature-themed celebrations.",
                image: "images/garden.jpg",
                rating: 4
            },
            {
                title: "Beachside Venues",
                desc: "Enjoy your events with a view of the waves — great for sunset ceremonies and beach parties.",
                image: "images/beachside.jpg",
                rating: 4.5
            },
            {
                title: "Corporate Event Spaces",
                desc: "Fully equipped venues for meetings, seminars, and office parties with modern infrastructure and AV support.",
                image: "images/corporate.jpg",
                rating: 4
            },
            {
                title: "Rooftop Venues",
                desc: "Chic city-view rooftops designed for evening parties, engagements, or small gatherings with a vibrant vibe.",
                image: "images/rooftop.jpg",
                rating: 4.2
            },
            {
                title: "Luxury Resorts",
                desc: "Premium destinations with stay and celebration facilities — perfect for destination weddings or weekend events.",
                image: "images/luxary.jpg",
                rating: 5
            }
        ];

        document.querySelectorAll(".services .box").forEach((box, index) => {
            box.addEventListener("click", () => {
                const data = modalData[index];
                document.getElementById("modalTitle").innerText = data.title;
                document.getElementById("modalDesc").innerText = data.desc;
                document.getElementById("modalImage").src = data.image;
                document.getElementById("modalRating").innerHTML = getStars(data.rating);
                document.getElementById("serviceModal").style.display = "block";
            });
        });

        document.querySelector(".modal .close").addEventListener("click", () => {
            document.getElementById("serviceModal").style.display = "none";
        });

        window.addEventListener("click", (event) => {
            if (event.target == document.getElementById("serviceModal")) {
                document.getElementById("serviceModal").style.display = "none";
            }
        });

        function getStars(rating) {
            let fullStars = Math.floor(rating);
            let halfStar = rating % 1 >= 0.5;
            let stars = "★".repeat(fullStars);
            if (halfStar) stars += "½";
            return stars + "☆".repeat(5 - fullStars - (halfStar ? 1 : 0));
        }
    </script>

    <!-- gallery section start -->
    <section id="gallery" class="gallery">
        <h1 class="heading">Our <span>Gallery</span></h1>
        <div class="boxContainer">
            <div class="box">
                <img src="./images/g1.jpg" alt="">
                <h3 class="title">Birthday Event</h3>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="box">
                <img src="./images/g2.jpg" alt="">
                <h3 class="title">Wedding Event</h3>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="box">
                <img src="./images/g3.jpg" alt="">
                <h3 class="title">Cultural Event</h3>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="box">
                <img src="./images/g4.jpg" alt="">
                <h3 class="title">Party Celebration</h3>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="box">
                <img src="./images/g5.jpg" alt="">
                <h3 class="title">Entertainment Events</h3>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="box">
                <img src="./images/g6.jpg" alt="">
                <h3 class="title">Bachelors Party</h3>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="box">
                <img src="./images/g7.jpg" alt="">
                <h3 class="title">Enogration Ceremoney</h3>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Review Section Starts -->
    <section class="review" id="review">
        <h1 class="heading">Client's <span>Review</span></h1>
        <!-- Swiper Wrapper -->
        <div class="swiper ReviewSlide">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide box">
                    <i class="fas fa-quote-right"></i>
                    <div class="img">
                        <img src="./images/review1.jpeg" alt="Client 1">
                        <div class="imgInfo">
                            <h3>Ritika Sharma</h3>
                            <span>Wedding Client</span>
                        </div>
                    </div>
                    <p>The team made our dream wedding come true! Every detail was handled beautifully and professionally.</p>
                </div>
                <!-- Slide 2 -->
                <div class="swiper-slide box">
                    <i class="fas fa-quote-right"></i>
                    <div class="img">
                        <img src="./images/review4.jpeg" alt="Client 2">
                        <div class="imgInfo">
                            <h3>Arjun Mehta</h3>
                            <span>Birthday Event</span>
                        </div>
                    </div>
                    <p>My son's birthday party was full of joy and vibrant energy. Everything was planned to perfection.</p>
                </div>
                <!-- Slide 3 -->
                <div class="swiper-slide box">
                    <i class="fas fa-quote-right"></i>
                    <div class="img">
                        <img src="./images/review2.jpeg" alt="Client 3">
                        <div class="imgInfo">
                            <h3>Priya Nair</h3>
                            <span>Corporate Client</span>
                        </div>
                    </div>
                    <p>We held our annual seminar with their help and were impressed by their professionalism and setup.</p>
                </div>
                <!-- Slide 4 -->
                <div class="swiper-slide box">
                    <i class="fas fa-quote-right"></i>
                    <div class="img">
                        <img src="./images/review3.jpeg" alt="Client 4">
                        <div class="imgInfo">
                            <h3>Riya Joshi</h3>
                            <span>Engagement Party</span>
                        </div>
                    </div>
                    <p>Our engagement was a dream event thanks to their creative touch and seamless execution.</p>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var swiper = new Swiper(".ReviewSlide", {
                slidesPerView: 1,
                grabCursor: true,
                loop: true,
                spaceBetween: 10,
                breakpoints: {
                    0: {
                        slidesPerView: 1,
                    },
                    700: {
                        slidesPerView: 2,
                    },
                    1050: {
                        slidesPerView: 3,
                    },
                },
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: false,
                },
            });
        });
    </script>

    <?php include "./contact.php"; ?>

    <!--Footer-->
    <?php include './partials/footer.php'; ?>

    <script>
        // Toggle signup button 
        const signupBtn = document.querySelector('.signup-btn');
        const signupModal = document.getElementById('signupModal');
        const closeBtn = document.getElementById('closeSignup');

        signupBtn.addEventListener('click', (e) => {
            e.preventDefault();
            signupModal.style.display = 'block';
        });
        closeBtn.addEventListener('click', () => {
            signupModal.style.display = 'none';
        });
        window.addEventListener('click', (e) => {
            if (e.target === signupModal) {
                signupModal.style.display = 'none';
            }
        });

        // Login Modal Toggle
        const loginBtn = document.querySelector('.login-btn');
        const loginModal = document.getElementById('loginModal');
        const closeLogin = document.getElementById('closeLogin');

        loginBtn.addEventListener('click', (e) => {
            e.preventDefault();
            loginModal.style.display = 'block';
        });

        closeLogin.addEventListener('click', () => {
            loginModal.style.display = 'none';
        });

        window.addEventListener('click', (e) => {
            if (e.target === loginModal) {
                loginModal.style.display = 'none';
            }
        });


        // for review
        document.addEventListener('DOMContentLoaded', function() {
            var swiper = new Swiper(".ReviewSlide", {
                slidesPerView: 1,
                grabCursor: true,
                loop: true,
                spaceBetween: 10,
                breakpoints: {
                    0: {
                        slidesPerView: 1,
                    },
                    700: {
                        slidesPerView: 2,
                    },
                    1050: {
                        slidesPerView: 3,
                    },
                },
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: false,
                },
            });
        });
    </script>

    <!--custom js-->
    <script src="./script.js"></script>

    <!--Swipe JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.3.7/js/swiper.min.js"></script>

    <!--swipter JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js"></script>

</body>

</html>