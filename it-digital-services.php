<?php
// Fetch contact page slug
$contact_slug = '#';
$statement = $pdo->prepare("SELECT page_slug FROM tbl_page WHERE page_name = 'Contact' OR page_slug = 'contact' LIMIT 1");
$statement->execute();
$result = $statement->fetch(PDO::FETCH_ASSOC);
if ($result && isset($result['page_slug'])) {
	$contact_slug = BASE_URL . URL_PAGE . $result['page_slug'];
}
?>

<style>
.geo5-section {
	background: #f2f2f2;
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
        your brand’s online presence and provide seamless user experiences
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

    <div class="geo5-buttons">
		<a href="<?php echo $contact_slug; ?>">Contact Us</a>
	</div>

	

	
</section>
