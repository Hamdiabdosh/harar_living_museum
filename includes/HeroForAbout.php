<!-- Hero Section with Carousel -->
<section class="hero-section position-relative text-white">
    <div id="aboutHeroCarousel" class="carousel slide" data-bs-ride="carousel">
        <!-- Carousel Indicators -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#aboutHeroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#aboutHeroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#aboutHeroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <!-- Carousel Items -->
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="carousel-image" style="background: url('../assets/images/banner/modern Dukber.jpg') center/100% no-repeat;">
                    <div class="container">
                        <div class="row min-vh-50 align-items-center">
                            <div class="col-lg-8">
                                <h1 class="display-4 fw-bold mb-4 text-white text-shadow">Welcome to Harar</h1>
                                <p class="lead text-white text-shadow">A UNESCO World Heritage Site and Ethiopia's Jewel of Islamic Culture</p>
                                <div class="mt-4">
                                    <a href="../pages/explore.php" class="btn btn-primary me-2">Explore Harar</a>
                                    <a href="#culture" class="btn btn-outline-light">Discover Culture</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <div class="carousel-image" style="background: url('../assets/images/banner/harar-mosque.jpg') center/100% no-repeat;">
                    <div class="container">
                        <div class="row min-vh-50 align-items-center">
                            <div class="col-lg-8">
                                <h1 class="display-4 fw-bold mb-4 text-white text-shadow">Islamic Heritage</h1>
                                <p class="lead text-white text-shadow">Home to 82 mosques and 102 shrines, a center of Islamic learning and spirituality</p>
                                <div class="mt-4">
                                    <a href="#religious" class="btn btn-primary me-2">Religious Sites</a>
                                    <a href="#architecture" class="btn btn-outline-light">Architecture</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item">
                <div class="carousel-image" style="background: url('../assets/images/banner/arc.jpg') center/100% no-repeat;">
                    <div class="container">
                        <div class="row min-vh-50 align-items-center">
                            <div class="col-lg-8">
                                <h1 class="display-4 fw-bold mb-4 text-white text-shadow">Unique Architecture</h1>
                                <p class="lead text-white text-shadow">Discover the distinctive Harari houses and traditional architectural wonders</p>
                                <div class="mt-4">
                                    <a href="#architecture" class="btn btn-primary me-2">Explore Buildings</a>
                                    <a href="#design" class="btn btn-outline-light">Traditional Design</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Carousel Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#aboutHeroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#aboutHeroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<style>
.hero-section {
    position: relative;
    overflow: hidden;
}

.carousel-item {
    height: 80vh;
    min-height: 500px;
}

.carousel-image {
    height: 100%;
    width: 100%;
    display: flex;
    align-items: center;
}

.carousel-control-prev,
.carousel-control-next {
    width: 5%;
}

.carousel-indicators {
    margin-bottom: 2rem;
}

.carousel-indicators button {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    margin: 0 5px;
}

.text-shadow {
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
}

.display-4 {
    font-family: 'Playfair Display', serif;
    letter-spacing: 0.5px;
}

.lead {
    font-family: 'Roboto', sans-serif;
    font-weight: 300;
    letter-spacing: 0.3px;
}

@media (max-width: 768px) {
    .carousel-item {
        height: 60vh;
    }
}
</style>
