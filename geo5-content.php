<?php
$distributor_url = '#authorized-distributor'; // Ensures smooth in-page scroll
$slides = [
    "https://data.fine.cz/feature-carousel-image/intuitive-friendly-1.png",
    "https://data.fine.cz/feature-carousel-image/survey-to-design.png",
    "https://data.fine.cz/feature-carousel-image/analytic-fem-1.png",
    "https://data.fine.cz/feature-carousel-image/geo5-geological-data-collector-app-stratigraphy-site-investigation-mobile.png",
    "https://data.fine.cz/feature-carousel-image/bim.png",
    "https://data.fine.cz/feature-carousel-image/normy.png",
    "https://data.fine.cz/feature-carousel-image/reports.png",
    "https://data.fine.cz/feature-carousel-image/linked-together-1.png",
    "https://data.fine.cz/feature-carousel-image/geo5_23_languages_feature.png",
    "https://data.fine.cz/feature-carousel-image/training-materials.png",
    "https://data.fine.cz/feature-carousel-image/geo5_catalogs-of-manufacturers-concrete-retaining-blocks-steel-sheeting-profiles-geotechnical-software-2.png"
];
?>

<style>
html {
    scroll-behavior: smooth;
}
.geo5-wrap {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
    /* background: #f2f2f2; */
    padding: 40px 15px;
    gap: 20px;
    scroll-margin-top: 80px;
}
.geo5-left {
    flex: 1 1 300px;
}
.geo5-link {
    color: #007BFF;
    font-weight: bold;
    font-size: 24px;
    text-decoration: none;
    line-height: 1.4;
    display: inline-block;
}
.geo5-link:hover {
    text-decoration: underline;
}
.geo5-left img {
    margin-top: 15px;
    max-width: 310px;
    height: 100px;
}
.geo5-right {
    flex: 1 1 400px;
    position: relative;
    overflow: hidden;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    min-height: 280px;
    background: #fff;
}
.geo5-slider-container {
    width: 100%;
    height: 100%;
    overflow: hidden;
}
.geo5-slides-track {
    display: flex;
    height: 100%;
    transition: transform 0.5s ease-in-out;
}
.geo5-slide {
    min-width: 100%;
    height: 100%;
    object-fit: contain;
    flex-shrink: 0;
}
.geo5-controls {
    position: absolute;
    top: 50%;
    width: 100%;
    display: flex;
    justify-content: space-between;
    transform: translateY(-50%);
    z-index: 2;
    pointer-events: none;
}
.geo5-controls button {
    background: rgba(0, 0, 0, 0.5);
    color: white;
    border: none;
    font-size: 20px;
    padding: 8px 12px;
    cursor: pointer;
    border-radius: 4px;
    pointer-events: auto;
    margin: 0 10px;
}
.geo5-dots {
    position: absolute;
    bottom: 10px;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    gap: 6px;
    z-index: 2;
}
.geo5-dots span {
    width: 10px;
    height: 10px;
    background: #ccc;
    border-radius: 50%;
    cursor: pointer;
}
.geo5-dots .active-dot {
    background: #007BFF;
}
@media (max-width: 600px) {
    .geo5-wrap {
        flex-direction: column;
    }
    .geo5-link {
        font-size: 20px;
    }
    .geo5-right {
        width: 100%;
    }
}

/* Authorized Distributor Section */
#authorized-distributor {
    /* background: #f2f2f2; */
    padding: 80px 20px;
    margin-top: 80px;
    font-family: Arial, sans-serif;
}
#authorized-distributor .geo5-subheading {
    color: #007BFF;
    font-weight: bold;
    font-size: 18px;
    margin-bottom: 10px;
}
#authorized-distributor .geo5-header {
    display: flex;
    align-items: center;
    gap: 20px;
    margin-bottom: 20px;
}
#authorized-distributor .geo5-logo img {
    width: 80px;
}
#authorized-distributor .geo5-title h2 {
    margin: 0;
    font-size: 28px;
    color: #2b2b2b;
}
#authorized-distributor .geo5-content p {
    font-size: 16px;
    line-height: 1.7;
    color: #444;
}
#authorized-distributor .geo5-buttons {
    margin-top: 30px;
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
}
#authorized-distributor .geo5-buttons a {
    text-decoration: none;
    background: #0b5ed7;
    color: white;
    padding: 10px 25px;
    border-radius: 5px;
    font-weight: bold;
}
#authorized-distributor .geo5-buttons a:hover {
    background: #093e94;
}
#authorized-distributor .geo5-cards {
    margin-top: 25px;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 15px;
}
#authorized-distributor .geo5-card {
    background: #008033;
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 12px 18px;
    text-align: center;
    font-size: 14px;
    font-weight: 600;
    color: #ffffff;
    flex: 1 1 200px;
    max-width: 200px;
}
#authorized-distributor .geo5-card:hover {
    background: #07632b;
    transition: all 0.2s ease-out;
   
}
</style>

<!-- Slideshow Section -->
<section class="geo5-wrap">
    <div class="geo5-left">
        <a href="<?php echo $distributor_url; ?>" class="geo5-link">
            Authorized Distributor for US<br>GEO5 Geotechnical Software
        </a>
        <img src="<?php echo BASE_URL; ?>assets/images/geo5-n-finec/finec.png" alt="Fine Software Logo">
    </div>
    <div class="geo5-right">
        <div class="geo5-slider-container">
            <div class="geo5-slides-track">
                <?php foreach ($slides as $i => $src): ?>
                    <img src="<?php echo $src; ?>" alt="GEO5 feature <?php echo $i+1; ?>" class="geo5-slide">
                <?php endforeach; ?>
            </div>
        </div>
        <div class="geo5-controls">
            <button onclick="changeSlide(-1)">&#10094;</button>
            <button onclick="changeSlide(1)">&#10095;</button>
        </div>
        <div class="geo5-dots">
            <?php foreach ($slides as $i => $_): ?>
                <span class="<?php echo $i === 0 ? 'active-dot' : ''; ?>" onclick="goToSlide(<?php echo $i; ?>)"></span>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Authorized Distributor Section -->
<section id="authorized-distributor">
    <div class="geo5-header">
        <div class="geo5-logo">
            <img src="<?php echo BASE_URL; ?>assets/images/geo5-n-finec/geo-5.png" alt="GEO5 Logo" width="200">
        </div>
        <div class="geo5-title">
            <h2>GEO5</h2>
            <h2>Geotechnical Software</h2>
        </div>
    </div>
    <div class="geo5-content">
        <p><strong>DGMTS</strong> is proud to be an authorized distributor in the United States for <strong>GEO5</strong>, a cutting-edge geotechnical engineering software suite developed by <strong>Fine Software</strong>, as part of our technology solutions. <strong>GEO5</strong> is a user-friendly and powerful platform that covers the full scope of geotechnical analysis—from site investigation and soil profiling to the design of foundations, retaining structures, slopes, and underground works. With intuitive modeling tools, robust computational methods, and compliance with international design codes, <strong>GEO5</strong> is ideal for engineers, consultants, and researchers seeking accuracy, efficiency, and reliability.</p>

        <p>As an <strong>authorized U.S. distributor, DGMTS</strong> provides <strong>sales, training, and technical support</strong> for GEO5, empowering engineering professionals to streamline workflows, reduce risk, and improve design quality. Whether you're working on small-scale projects or large infrastructure developments, GEO5 delivers the performance and confidence needed for successful geotechnical engineering outcomes.</p>
    </div>
<div class="geo5-cards">
    <a class="geo5-card" href="https://www.finesoftware.eu/geotechnical-software/solutions/stability-analysis/" target="_blank" rel="noopener noreferrer">Stability Analysis</a>
    <a class="geo5-card" href="https://www.finesoftware.eu/geotechnical-software/solutions/excavation-design/" target="_blank" rel="noopener noreferrer">Excavation Design</a>
    <a class="geo5-card" href="https://www.finesoftware.eu/geotechnical-software/solutions/walls-and-gabions/" target="_blank" rel="noopener noreferrer">Retaining Wall Design</a>
    <a class="geo5-card" href="https://www.finesoftware.eu/geotechnical-software/solutions/shallow-foundations/" target="_blank" rel="noopener noreferrer">Shallow Foundations</a>
    <a class="geo5-card" href="https://www.finesoftware.eu/geotechnical-software/solutions/deep-foundations/" target="_blank" rel="noopener noreferrer">Pile Foundations</a>
    <a class="geo5-card" href="https://www.finesoftware.eu/geotechnical-software/solutions/settlement-analysis/" target="_blank" rel="noopener noreferrer">Settlement Calculations</a>
    <a class="geo5-card" href="https://www.finesoftware.eu/geotechnical-software/solutions/tunnels-and-shafts/" target="_blank" rel="noopener noreferrer">Tunnels and Shafts</a>
    <a class="geo5-card" href="https://www.finesoftware.eu/geotechnical-software/solutions/stratigraphy/" target="_blank" rel="noopener noreferrer">Geological Modelling</a>
    <a class="geo5-card" href="https://www.finesoftware.eu/geotechnical-software/solutions/geological-survey/" target="_blank" rel="noopener noreferrer">Geological Survey</a>
</div>
    <div class="geo5-buttons">
        <a href="https://www.finesoftware.eu/geotechnical-software/solutions/" target="_blank">More Information</a>
        <a href="<?php echo BASE_URL . URL_PAGE . 'contact'; ?>">Contact Us</a>
    </div>
</section>

<!-- Slider Script -->
<script>
let slideTrack = document.querySelector('.geo5-slides-track');
let slides = document.querySelectorAll('.geo5-slide');
let dots = document.querySelectorAll('.geo5-dots span');
let currentIndex = 0;
let slideWidth = slides[0].clientWidth;
let interval = setInterval(nextSlide, 5000);

function updateSlidePosition() {
    slideTrack.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
}
function updateDots() {
    dots.forEach((dot, index) => dot.classList.toggle('active-dot', index === currentIndex));
}
function nextSlide() {
    currentIndex = (currentIndex + 1) % slides.length;
    updateSlidePosition();
    updateDots();
}
function changeSlide(direction) {
    clearInterval(interval);
    currentIndex = (currentIndex + direction + slides.length) % slides.length;
    updateSlidePosition();
    updateDots();
    interval = setInterval(nextSlide, 5000);
}
function goToSlide(index) {
    clearInterval(interval);
    currentIndex = index;
    updateSlidePosition();
    updateDots();
    interval = setInterval(nextSlide, 5000);
}
window.addEventListener('resize', () => {
    slideWidth = slides[0].clientWidth;
    updateSlidePosition();
});
</script>
