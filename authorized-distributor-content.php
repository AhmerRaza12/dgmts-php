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
	// <div class="geo5-subheading">Authorized Distributor for US</div>

	<div class="geo5-header">
		<div class="geo5-logo">
	        <img src="<?php echo BASE_URL; ?>assets/images/geo5-n-finec/geo-5.png" alt="GEO5 Logo">
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
		<div class="geo5-card">Stability Analysis</div>
		<div class="geo5-card">Excavation Design</div>
		<div class="geo5-card">Retaining Wall Design</div>
		<div class="geo5-card">Shallow Foundations</div>
		<div class="geo5-card">Pile Foundations</div>
		<div class="geo5-card">Settlement Calculations</div>
		<div class="geo5-card">Tunnels and Shafts</div>
		<div class="geo5-card">Geological Modelling</div>
		<div class="geo5-card">Geological Survey</div>
	</div>

	<div class="geo5-buttons">
		<a href="https://www.finesoftware.eu/geotechnical-software/solutions/" target="_blank">More Information</a>
		<a href="<?php echo $contact_slug; ?>">Contact Us</a>
	</div>
</section>
