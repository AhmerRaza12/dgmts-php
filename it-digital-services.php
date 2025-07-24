<?php
// Fetch contact page slug
$contact_slug = '#';
$statement = $pdo->prepare("SELECT page_slug FROM tbl_page WHERE page_name = 'Contact' OR page_slug = 'contact' LIMIT 1");
$statement->execute();
$result = $statement->fetch(PDO::FETCH_ASSOC);
if ($result && isset($result['page_slug'])) {
	$contact_slug = BASE_URL . URL_PAGE . $result['page_slug'];
}

// IT Services Slider Data
$it_slides = [
    [
        'image' => BASE_URL . "assets/uploads/it-services-tab-1.png",
        'title' => "Custom Software Development",
        'description' => "Tailor-made software solutions designed to optimize your business processes and enhance productivity."
    ],
    [
        'image' => BASE_URL . "assets/uploads/it-services-tab-2.png", 
        'title' => "Web & Mobile Applications",
        'description' => "Responsive websites and mobile apps that boost your brand's online presence and user engagement."
    ],
    [
        'image' => BASE_URL . "assets/uploads/it-services-tab-3.png",
        'title' => "Digital Marketing & SEO",
        'description' => "Data-driven marketing strategies and SEO optimization to increase visibility and attract more customers."
    ]
];
?>

<style>
.geo5-section {
	padding: 40px 20px;
	font-family: Arial, sans-serif;
}
.geo5-subheading {
	color: #007BFF;
	font-weight: bold;
	font-size: 18px;
	margin-bottom: 10px;
}
.geo5-header {
	display: flex;
	align-items: center;
	gap: 20px;
	margin-bottom: 20px;
}
.geo5-logo img {
	width: 80px;
}
.geo5-title h2 {
	margin: 0;
	font-size: 28px;
	color: #2b2b2b;
	line-height: 1.2;
}
.geo5-content p {
	font-size: 16px;
	line-height: 1.7;
	color: #444;
}
.geo5-buttons {
	margin-top: 30px;
	display: flex;
	justify-content: center;
	gap: 20px;
	flex-wrap: wrap;
}
.geo5-buttons a {
	text-decoration: none;
	background: #0b5ed7;
	color: white;
	padding: 10px 25px;
	border-radius: 5px;
	font-weight: bold;
	transition: background 0.3s ease;
}
.geo5-buttons a:hover {
	background: #093e94;
}
.geo5-cards {
	margin-top: 25px;
	display: flex;
	flex-wrap: wrap;
	justify-content: center;
	gap: 15px;
}
.geo5-card {
	background: white;
	border: 1px solid #ccc;
	border-radius: 5px;
	padding: 12px 18px;
	text-align: center;
	font-size: 14px;
	color: #333;
	flex: 1 1 200px;
	max-width: 200px;
	box-sizing: border-box;
}

/* IT Services Slider Styles */
.it-slider-section {
    padding: 40px 15px;
    text-align: center;
    background: #fff;
    margin: 30px 0;
}
.it-slider-container {
    max-width: 900px;
    margin: 0 auto;
    position: relative;
    overflow: hidden;
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.15);
    height: 500px;
    background: linear-gradient(135deg, #2795d0 0%, #1e7bb8 50%, #1565a0 100%);
}
.it-slider-container::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0,0,0,0.1);
    z-index: 1;
}
.it-slides-track {
    display: flex;
    height: 100%;
    transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
}
.it-slide {
    min-width: 100%;
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 40px;
    position: relative;
    z-index: 2;
}
.it-slide img {
    max-width: 100%;
    max-height: 60%;
    object-fit: contain;
    margin-bottom: 25px;
    border-radius: 8px;
    box-shadow: 0 8px 25px rgba(0,0,0,0.2);
    transition: transform 0.3s ease;
}
.it-slide:hover img {
    transform: scale(1.05);
}
.it-slide-content {
    text-align: center;
    color: white;
}
.it-slide-content h3 {
    font-size: 24px;
    font-weight: bold;
    margin: 0 0 15px 0;
    text-shadow: 0 2px 4px rgba(0,0,0,0.3);
}
.it-slide-content p {
    font-size: 16px;
    line-height: 1.6;
    margin: 0;
    color: white;
    opacity: 0.95;
    text-shadow: 0 1px 2px rgba(0,0,0,0.3);
}
.it-controls {
    position: absolute;
    top: 50%;
    width: 100%;
    display: flex;
    justify-content: space-between;
    transform: translateY(-50%);
    z-index: 3;
    pointer-events: none;
    padding: 0 20px;
}
.it-controls button {
    background: rgba(255, 255, 255, 0.9);
    color: #333;
    border: none;
    font-size: 24px;
    width: 50px;
    height: 50px;
    cursor: pointer;
    border-radius: 50%;
    pointer-events: auto;
    transition: all 0.3s ease;
    box-shadow: 0 4px 12px rgba(0,0,0,0.2);
}
.it-controls button:hover {
    background: white;
    transform: scale(1.1);
    box-shadow: 0 6px 20px rgba(0,0,0,0.3);
}
.it-dots {
    position: absolute;
    bottom: 20px;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    gap: 10px;
    z-index: 3;
}
.it-dots span {
    width: 12px;
    height: 12px;
    background: rgba(255, 255, 255, 0.5);
    border-radius: 50%;
    cursor: pointer;
    transition: all 0.3s ease;
}
.it-dots .active-dot {
    background: white;
    transform: scale(1.2);
}
.it-slider-title {
    font-size: 32px;
    font-weight: bold;
    color: #2b2b2b;
    margin-bottom: 10px;
    text-align: center;
}
.it-slider-subtitle {
    font-size: 18px;
    color: #666;
    margin-bottom: 30px;
    text-align: center;
}

@media (max-width: 768px) {
    .it-slider-container {
        height: 400px;
    }
    .it-slide {
        padding: 20px;
    }
    .it-slide-content h3 {
        font-size: 20px;
    }
    .it-slide-content p {
        font-size: 14px;
    }
    .it-controls button {
        width: 40px;
        height: 40px;
        font-size: 18px;
    }
}

@media (max-width: 600px) {
	.geo5-header {
		flex-direction: column;
		align-items: flex-start;
	}
	.geo5-title h2 {
		font-size: 24px;
	}
}
</style>

<section class="geo5-section">
	<div class="geo5-subheading">IT & Digital Services</div>

	<div class="geo5-content">
		<p>Our IT & Digital Services division is dedicated to providing innovative technology solutions that drive business growth,
            enhance digital presence, and streamline operations. With a focus on efficiency, security, and scalability, we offer a
            comprehensive suite of services tailored to meet the demands of modern businesses.
        </p>
		<p><strong>Custom Software & ERP Development</strong>– Develop tailor-made software and ERP systems to optimize business
            processes, improve decision-making, and enhance productivity
        </p>
		<p><strong>Web & Mobile App Development</strong>– Build responsive, high-performance websites and mobile applications that boost
        your brand's online presence and provide seamless user experiences
        </p>
		<p><strong>Cloud & IT Consulting</strong>– Leverage cloud technology for improved efficiency and security with expert consulting on cloud
            migration, IT infrastructure, and cybersecurity strategies.
        </p>
		<p><strong>Digital Marketing & SEO</strong>– Implement data-driven social media marketing and SEO strategies to increase brand
        visibility, attract more customers, and improve online engagement.
        </p>
		<p><strong>Brand Identity & UI/UX Design</strong>– Create compelling brand identities, logos, and user-friendly digital interfaces that leave
        a lasting impression.
        </p>
		<p><strong>Content Creation & Ad Management</strong>– Develop high-quality content and manage digital advertising campaigns to
        maximize audience reach and return on investment
        </p>

     

		<p>We are committed to helping businesses harness the power of technology to stay ahead in a competitive digital
        landscape. Whether you need software solutions, marketing strategies, or IT consulting, our team is ready to transform
        your vision into reality. </p>
	</div>

    <!-- IT Services Slider Section -->
    <section class="it-slider-section">
        <h2 class="it-slider-title">Our Digital Solutions</h2>
        
        <div class="it-slider-container">
            <div class="it-slides-track">
                <?php foreach ($it_slides as $i => $slide): ?>
                    <div class="it-slide">
                        <img src="<?php echo $slide['image']; ?>" alt="<?php echo $slide['title']; ?>">
                        <div class="it-slide-content">
                            <h3><?php echo $slide['title']; ?></h3>
                            <p><?php echo $slide['description']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="it-controls">
                <button onclick="changeITSlide(-1)">&#10094;</button>
                <button onclick="changeITSlide(1)">&#10095;</button>
            </div>
            <div class="it-dots">
                <?php foreach ($it_slides as $i => $slide): ?>
                    <span class="<?php echo $i === 0 ? 'active-dot' : ''; ?>" onclick="goToITSlide(<?php echo $i; ?>)"></span>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <div class="geo5-buttons">
		<a href="<?php echo $contact_slug; ?>">Contact Us</a>
	</div>

	

	
</section>

<!-- IT Services Slider Script -->
<script>
let itSlideTrack = document.querySelector('.it-slides-track');
let itSlides = document.querySelectorAll('.it-slide');
let itDots = document.querySelectorAll('.it-dots span');
let itCurrentIndex = 0;
let itSlideWidth = itSlides[0].clientWidth;
let itInterval = setInterval(nextITSlide, 4000);

function updateITSlidePosition() {
    itSlideTrack.style.transform = `translateX(${-itCurrentIndex * itSlideWidth}px)`;
}

function updateITDots() {
    itDots.forEach((dot, index) => dot.classList.toggle('active-dot', index === itCurrentIndex));
}

function nextITSlide() {
    itCurrentIndex = (itCurrentIndex + 1) % itSlides.length;
    updateITSlidePosition();
    updateITDots();
}

function changeITSlide(direction) {
    clearInterval(itInterval);
    itCurrentIndex = (itCurrentIndex + direction + itSlides.length) % itSlides.length;
    updateITSlidePosition();
    updateITDots();
    itInterval = setInterval(nextITSlide, 4000);
}

function goToITSlide(index) {
    clearInterval(itInterval);
    itCurrentIndex = index;
    updateITSlidePosition();
    updateITDots();
    itInterval = setInterval(nextITSlide, 4000);
}

window.addEventListener('resize', () => {
    itSlideWidth = itSlides[0].clientWidth;
    updateITSlidePosition();
});
</script>
