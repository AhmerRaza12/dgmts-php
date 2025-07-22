<?php require_once('header.php'); ?>


<style>
.service-list>h5 {
    color: #2795d0;
    font-size: 20px;
    font-weight: 800;
    line-height: 60px;
}

/* Margin for all sides */
.m-1 {
    margin: 0.25rem;
}

.m-2 {
    margin: 0.5rem;
}

.m-3 {
    margin: 1rem;
}

.m-4 {
    margin: 1.5rem;
}

.m-5 {
    margin: 3rem;
}

/* Margin for top */
.mt-1 {
    margin-top: 0.25rem;
}

.mt-2 {
    margin-top: 0.5rem;
}

.mt-3 {
    margin-top: 1rem;
}

.mt-4 {
    margin-top: 1.5rem;
}

.mt-5 {
    margin-top: 3rem;
}

/* Margin for right */
.mr-1 {
    margin-right: 0.25rem;
}

.mr-2 {
    margin-right: 0.5rem;
}

.mr-3 {
    margin-right: 1rem;
}

.mr-4 {
    margin-right: 1.5rem;
}

.mr-5 {
    margin-right: 3rem;
}

/* Margin for bottom */
.mb-1 {
    margin-bottom: 0.25rem;
}

.mb-2 {
    margin-bottom: 0.5rem;
}

.mb-3 {
    margin-bottom: 1rem;
}

.mb-4 {
    margin-bottom: 1.5rem;
}

.mb-5 {
    margin-bottom: 3rem;
}

/* Margin for left */
.ml-1 {
    margin-left: 0.25rem;
}

.ml-2 {
    margin-left: 0.5rem;
}

.ml-3 {
    margin-left: 1rem;
}

.ml-4 {
    margin-left: 1.5rem;
}

.ml-5 {
    margin-left: 3rem;
}



.d-none {
    display: none;
}
.scrollable-col {
      height: 380px; /* Adjust the height as needed */
      overflow-y: auto; /* Enables vertical scrolling */
    }
</style>
<!-- Slider Start -->
<section class="main-slider">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12 service-list">
                        <h5><a class="scrollLink" id="geoEng-button" onclick="content_display('geoEng', this);">Geotechnical Engineering</a></h5>
        
                        <h5><a class="scrollLink" id="conTesting-button" onclick="content_display('conTesting', this);">Construction Inspection and Testing</a></h5>
        
                        <h5><a class="scrollLink" id="drillTesting-button" onclick="content_display('drillTesting', this);">Drilling and In-situ Testing</a></h5>
        
                        <h5><a class="scrollLink" id="labTesting-button" onclick="content_display('labTesting', this);">Laboratory Testing</a></h5>
        
                        <h5><a class="scrollLink" id="instSurveys-button" onclick="content_display('instSurveys', this);">Instrumentation and Condition Surveys</a></h5>
                    </div>
                </div>
                <!-- <hr>
                <div class="row" id="geoEng">
                    <div class="col-md-12">
                    <p><strong class="text-primary" style="font-size: 18px;">Geotechnical Engineering</strong></p>

                    <p class="text-justify"><strong style="font-size: 16px;">DGMTS </strong> offers a comprehensive portfolio of
                        geotechnical engineering services. Our experienced teams of registered professional engineers provide
                        preliminary and design level geotechnical engineering services with accuracy and safety in compliance
                        with the approved plans, according to environmental considerations and client requirements.</p>
                    <p class="text-justify">
                        We develop unique subsurface investigation and laboratory testing programs, according to project type,
                        scope, technical complexity, client needs, governing entities requirements and according to industry
                        standards. Our President, Dr. Tariq Hamid, PhD, PE has 26+ year experience in geotechnical engineering
                        with special emphasis on foundation engineering, retaining wall, support of excavation system design,
                        material analysis & finite element modelling.</p>
                    </div>
                </div>
                <hr>
                <div class="row" id="conTesting">
                    <div class="col-md-12">
                    <p><strong class="text-primary" style="font-size: 18px;">Construction Inspection and Testing</strong></p>
                    <p class="text-justify"><strong style="font-size: 16px;">DGMTS </strong> provides inspections for a wide
                        range of items including single/multi-family dwellings and/or all modifications/renovations for building
                        of any type.
                    </p>
                    <p class="text-justify">
                        Our Third-Party Inspection Program (TPIP) focuses on structural safety and stability, documentation
                        review, mechanical, electrical, plumbing, structural, civil and welding.
                    </p>
                    </div>
                </div>
                <hr>
                <div class="row" id="drillTesting">
                    <div class="col-md-12">
                        <p><strong class="text-primary" style="font-size: 18px;">Drilling and In-situ Testing</strong></p>
                        <p class="text-justify"><strong style="font-size: 16px;">DGMTS </strong> provides services of supervision of
                            drilling, Logger services, drilling for soil investigation, water well drilling and in-site rock and
                            asphalt coring
                        </p>
                        <p class="text-justify"><strong style="font-size: 16px;">DGMTS </strong>
                            owns and operates three drilling rigs and three drilling crews as well as coring equipment. Drill rig
                            equipment is highly maintained and presently consists of one ATV CME 55, one ATV CME 45C and one truck
                            mounted Mobile B56 drill rig. These rigs are capable of drilling up to 200 feet deep holes using hollow
                            stem auger and mud rotary methods. All drill rigs are equipped with onboard water tanks with capacities
                            ranging from 250-to-350-gallon. Additionally, our drill rigs are equipped with drilling fluid pumps for
                            grouting, as well as for mud rotary drilling and/or rock coring. Our drilling department also has
                            concrete and asphalt coring machines. Our support equipment includes service trucks, trailers, light
                            towers, generators and welding equipment.
                        </p>
                        <p class="text-justify"> Each of our drill rigs is outfitted with state-of-the-art Automatic SPT Hammers for
                            sampling the subsurface profile as drilling progresses. Our capabilities also extend to undisturbed
                            sampling in soil and NQ core drilling in rock.</p>
                        <p class="text-justify">Our drilling team members are highly professional, trained and experienced in
                            various environments, ensuring the highest quality of service. </p>
                    </div>
                </div>
                <hr>
                <div class="row" id="labTesting">
                    <div class="col-md-12">
                        <p><strong class="text-primary" style="font-size: 18px;">Laboratory Testing</strong></p>
                        <p><strong class="text-primary" style="font-size: 18px;">Dulles Geotechnical and Materials Testing Services
                                (DGMTS): </strong>offers a wide range of laboratory testing services for concrete, soil, asphalt and
                            water analysis. DGMTS provides independent construction materials testing at our two in-house testing
                            laboratory facilities in Chantilly and Hampton, ensuring efficiency and cost savings for our clients. We
                            are a member of Washington Area Council of Engineering Laboratories, Inc. (WACEL).</p>
                        <p><strong class="text-primary" style="font-size: 18px;">Accreditation: </strong>Our laboratories are
                            accredited by the American Association of State Highway and Transportation Officials (AASHTO) and we are
                            members of the Washington Area Council of Engineering Laboratories, Inc. (WACEL). Our Accreditation
                            conforms to the requirements of ASTM D3740, ASTM E329, and AASHTO R-18. We participate in both the
                            AASHTO re:source and CCRL proficiency sample programs for soil and concrete.</p>
                        <p><strong class="text-primary" style="font-size: 18px;">Laboratory Management and Staff: </strong>In
                            response to the fast paced nature of today's projects, we strive to keep operations running smoothly and
                            efficiently through electronic report transmittals and a unique laboratory database management system.
                            Our certified field and laboratory technicians have extensive experience across various sectors,
                            including retail, commercial, hospitality, healthcare, energy, and transportation projects such as
                            highways, bridges, and aviation. They are proficient in sampling and testing protocols for a wide range
                            of materials.</p>
                        <p>We have the flexibility to hire additional staff as needed to meet project demands and ensure timely
                            completion of all testing services.</p>
                        <p><strong class="text-primary" style="font-size: 18px;">Laboratory Equipment: </strong>DGMTS laboratories
                            are fully equipped with all necessary equipment to perform several tests on disturbed and undisturbed
                            soil samples, aggregate, concrete, asphalt, and water analysis. We are well equipped to perform several
                            tests at a time as we have seven proctor and CBR equipment, three consolidation test equipment, three
                            compression machines, as well as direct shear tests.</p>
                        <p>The most used in-situ tests are:</p>
                        <ul style="margin-left: 16px;">
                            <li>Standard penetration test (SPT)</li>
                            <li>Cone penetration test (CPT)</li>
                            <li>Dilatometer test (DMT)</li>
                            <li>Vane shear test (VST)</li>
                            <li>Borehole shear test (BST)</li>
                            <li>Plate load test (PLT)</li>
                            <li>Rebound hammer test</li>
                            <li>Penetration resistance of hardened concrete, pull out test</li>
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="row" id="instSurveys">
                    <div class="col-md-12">
                        <p><strong class="text-primary" style="font-size: 18px;">Instrumentation and Condition Surveys</strong></p>
                        <p class="text-justify"><strong style="font-size: 16px;">DGMTS </strong>provides inspections for a wide
                            range of items including single/multi-family dwellings and/or all modifications/renovations for building
                            of any type.
                        </p>
                        <p class="text-justify"><strong style="font-size: 16px;">DGMTS </strong>has provided automated systems for
                            monitoring the safety and stability of buildings, excavations,
                            retaining walls, tunnels, railways, and bridges. We have assisted our clients, infrastructure operators
                            and
                            contractors, and construction engineers in detecting and alleviating risk, optimizing designs and
                            methods,
                            and documenting regulatory compliance.</p>
                        <p class="text-justify"><strong style="font-size: 16px;">DGMTS </strong>specializes in implementing
                            innovative solutions for challenging projects. With extensive experience
                            in instrumentation, we harness a wide range of both traditional and advanced sensing technologies. Our
                            instrumentation services encompass PDAs, Piezometers, Inclinometers, Vibration, Noise & Crack
                            Monitoring.</p>
                        <p class="text-justify"><strong style="font-size: 16px;">DGMTS </strong>has resources and necessary
                            expertise that provides indigenous virtual monitoring services with remote
                            access to collect data in real time.</p>
                        <p class="text-justify"><strong style="font-size: 16px;">DGMTS </strong>provides pre- and post-construction
                            condition survey services to review the condition of structures
                            and properties before and after construction activities. Our experienced staff and proprietary
                            professional
                            reporting system ensure thorough and accurate assessments.</p>
                        <p class="text-justify"><strong style="font-size: 16px;">DGMTS </strong>utilizes standardized forms, still
                            photographs, videotaping, visual observations, crack monitoring
                            gauges, and non-destructive testing techniques for pre-construction condition assessments of the
                            structures. </p>


                    </div>
                </div> -->

            </div>
            <div class="col-md-6">
                <div class="slider">
                    <ul class="bxslider">
                  
                        <?php
			$statement = $pdo->prepare("SELECT * FROM tbl_slider WHERE status=? ORDER BY id DESC");
			$statement->execute(array('Active'));
			$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
			foreach ($result as $row) 
			{
				if($row['position']=='Left') {$align='tal';}
				if($row['position']=='Center') {$align='tac';}
				if($row['position']=='Right') {$align='tar';}
				?>
                        <li
                            style="height:380px;background-image:url(<?php echo BASE_URL; ?>assets/uploads/<?php echo $row['photo']; ?>);">
                            <div class="overlay"></div>
                            <div class="content" style="display:none">
                                <div class="inner <?php echo $align; ?>">
                                    <div class="text">

                                        <?php if($row['heading']!=''): ?>
                                        <h2>
                                            <?php echo $row['heading']; ?>
                                        </h2>
                                        <?php endif; ?>

                                        <?php if($row['content']!=''): ?>
                                        <p>
                                            <?php echo nl2br($row['content']); ?>
                                        </p>
                                        <?php endif; ?>

                                        <?php if($row['button_text']!=''): ?>
                                        <p class="button">
                                            <a href="<?php echo $row['button_url']; ?>"
                                                class="btn btn-flat"><?php echo $row['button_text']; ?></a>
                                        </p>
                                        <?php endif; ?>

                                    </div>
                                </div>
                            </div>
                        </li>
                        <?php
			}
			?>
                    
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row mt-5 d-none" id="geoEng">
        <div class="col-md-12 text-justify">
            <p><strong class="text-primary" style="font-size: 18px;">Geotechnical Engineering</strong></p>

            <p class="text-justify"><strong class="text-primary" style="font-size: 16px;">Dulles Geotechnical and Material Testing Services Inc. (DGMTS) </strong> offers a comprehensive portfolio of geotechnical engineering services, including but not limited to site investigation, soil analysis, and foundation recommendations. <strong class="text-primary">DGMTS</strong> is one of the most well-equipped geotechnical firms in the region. Our experienced teams of registered <b>professional engineers, geotechnical engineers,</b> and <b>geologists </b>provide both preliminary and design-level geotechnical services with precision and safety, in compliance with approved plans, environmental considerations, and client requirements.</p>
            <p class="text-justify"><strong class="text-primary" style="font-size: 16px;">DGMTS</strong> develops unique subsurface investigation and laboratory testing programs tailored to the project's type, scope, technical complexity, client needs, and governing entities requirements, while adhering to industry standards. Our president,<b> Dr. Tariq Hamid, PhD, PE, CCM</b> has over 26 years of experience in geotechnical engineering, with special expertise in foundation engineering, retaining walls, support of excavation system design, material analysis, and finite element modeling.</p>
            <p class="text-justify"><strong class="text-primary" style="font-size: 16px;">DGMTS</strong> takes a proactive approach to risk management, integrating it as a core element of our project strategy. Our proven track record demonstrates our proficiency in early risk detection, thorough assessment, and effective mitigation of geotechnical risks during both the design and construction stages. This foresight significantly enhances project safety, avoids potential delays, and helps maintain control over costs.</p>
        </div>

        <!-- <div class="col-md-6">
            <div class="slider" style="padding:0px 0px 0px 15px">
                <ul class="bxslider">
                    <li
                        style="height:300px;background-image:url('<?php echo BASE_URL; ?>assets/laboratory_testing_images/img1.jpg');">
                    </li>
                    <li
                        style="height:300px;background-image:url('<?php echo BASE_URL; ?>assets/laboratory_testing_images/img1.jpg');">
                    </li>

                </ul>
            </div>
        </div> -->
    </div>
    <!-- <hr> -->
    <div class="row mt-5 d-none" id="conTesting">
        <div class="col-md-12 text-justify">
            <p><strong class="text-primary" style="font-size: 18px;">Construction Inspection and Testing</strong></p>
            <p><strong class="text-primary" style="font-size: 16px;">Dulles Geotechnical and Material Testing Services Inc. (DGMTS)</strong> provides <b>quality assurance</b> and <b>quality control</b> inspection and testing services for earthwork, concrete, asphalt, and steel in the construction of roads, airports, buildings, and other civil infrastructure. Our expertise includes testing of <b>concrete, soil & aggregate,</b> and <b>asphalt,</b> along with inspection services for <b>structural masonry, structural steel, sprayed-on fireproofing, </b>exterior <b>insulation</b> and <b>finishing systems (EIFS),</b> and asphalt pavement evaluation.</p>
            <p><strong class="text-primary" style="font-size: 16px;">DGMTS</strong> provides inspections for a wide range of structures including single/multi-family dwellings, as well as modifications/renovations of anybuilding type. Our Third-Party Inspection Program (TPIP) focuses on <b>structural safety</b> and <b>stability, documentation review, mechanical/electrical/plumbing, structural/ civil and welding</b> inspections.</p>
            <p><strong class="text-primary" style="font-size: 16px;">DGMTS</strong> <b>Special Inspection Program </b>(SPI) focuses on monitoring of critical structural materials including steel construction, concrete construction, and fireproofing. Our certified inspectors ensure that <b>footings, waterproofing/foundation drainage</b> and <b>concrete slabs</b> on ground conform to all applicable codes and specifications requirements.</p>
        </div>

        <!-- <div class="col-md-6">
            <div class="slider" style="padding:0px 0px 0px 15px">
                <ul class="bxslider">
                    <li
                        style="height:300px;background-image:url('<?php echo BASE_URL; ?>assets/laboratory_testing_images/img1.jpg');">
                    </li>
                    <li
                        style="height:300px;background-image:url('<?php echo BASE_URL; ?>assets/laboratory_testing_images/img1.jpg');">
                    </li>

                </ul>
            </div>
        </div> -->
    </div>
    <!-- <hr> -->
    <div class="row mt-5 d-none" id="drillTesting">
        <div class="col-md-12 text-justify">
            <p><strong class="text-primary" style="font-size: 18px;">Drilling and In-situ Testing</strong></p>
            <p class="text-justify"><strong class="text-primary" style="font-size: 16px;">Dulles Geotechnical and Material Testing Services Inc. (DGMTS)</strong> provides services of <b>supervision of drilling, Logger services, drilling for soil investigation, water well drilling </b>and in-site<b> rock and asphalt coring</b></p>
            <p class="text-justify"><strong class="text-primary" style="font-size: 16px;">DGMTS </strong>owns and operates three drilling rigs and three drilling crews as well as coring equipment. Drill rig equipment is highly maintained and presently consists of one <b>ATV CME 55, one ATV CME 45C</b> and <b>one truck mounted Mobile B56 drill rig. </b>These rigs are capable of drilling up to 200 feet deep holes using hollow stem auger and mud rotary methods. All drill rigs are equipped with onboard water tanks with capacities ranging from 250-to-350-gallon. Additionally, our drill rigs are equipped with drilling fluid pumps for grouting, as well as for mud rotary drilling and/or rock coring. Our drilling department also has concrete and asphalt coring machines. Our support equipment includes<b> service trucks, trailers, light towers, generators </b>and<b> welding equipment.</b></p>
            <p class="text-justify"> Each of our drill rigs is outfitted with state-of-the-art<b> Automatic SPT Hammers </b>for sampling the subsurface profile as drilling progresses. Our capabilities also extend to<b> undisturbed sampling</b> in soil and<b> NQ core drilling </b>in rock.</p>
            <p class="text-justify">Our drilling team members are highly professional, trained and experienced in various environments, ensuring the highest quality of service. </p>
        </div>

        <?php
            // Define the array of image filenames
            $drillFiles = [
                // 'drill_1.png',
                // 'drill_2.png',
                'drill_3.png',
                'drill_4.png',
                'drill_5.png'
            ];
            ?>
        <!-- <div class="col-md-6">
            <div class="slider" style="padding:0px 0px 0px 15px">
                <ul class="bxslider">
                    <?php foreach ($drillFiles as $imageFile): ?>
                    <li
                        style="height: 300px; background-image: url('<?php echo BASE_URL; ?>assets/images/drill/<?php echo $imageFile; ?>'); background-size: cover;">
                    </li>
                    <?php endforeach; ?>

                </ul>
            </div>
        </div> -->
    </div>
    <!-- <hr> -->
    <div class="row mt-5 d-none" id="labTesting">
        <div class="col-md-12 text-justify">
            <p><strong class="text-primary" style="font-size: 18px;">Laboratory Testing</strong></p>
            <p><strong class="text-primary" style="font-size: 16px;">Dulles Geotechnical and Material Testing Services(DGMTS) </strong>offers a wide range of laboratory testing services for <b>concrete, soil, asphalt </b>and<b> water analysis.</b><strong class="text-primary" > DGMTS</strong> provides independent construction materials testing at our testing laboratory facilities in Chantilly and Hampton, ensuring efficiency and cost savings for our clients.</p>
            <p><strong class="" style="font-size: 16px;">Accreditation: </strong>Our laboratories located in Chantilly and Hampton, Virginia are accredited by the <b>American Association of State Highway and Transportation Officials (AASHTO) </b>and <b>Cement</b> and <b>Concrete Reference Laboratory (CCRL)</b>. We are a member of the <b>Washington Area Council of Engineering Laboratories, Inc. (WACEL).</b> Our Accreditation conforms to the requirements of <b>ASTM D3740, ASTM E329,</b> and <b>AASHTO R-18.</b> We participate in both the <b>AASHTO</b> and <b>CCRL</b> proficiency sample programs for soil and concrete.</p>
            <p><strong class="" style="font-size: 16px;">Laboratory Management and Staff: </strong>In response to the fast paced nature of today's projects, we strive to keep operations running smoothly and efficiently through <b>electronic report transmittals</b> and a unique <b>laboratory database management system.</b> Our certified field and laboratory technicians have extensive experience across various sectors, including retail, commercial, hospitality, healthcare, energy, and transportation projects such as highways, bridges, and aviation. They are proficient in sampling and testing protocols for a wide range of materials.</p>
            <p>We have the flexibility to hire additional staff as needed to meet project demands and ensure timely completion of all testing services.</p>
            <p><strong class="" style="font-size: 16px;">Laboratory Equipment: </strong><strong class="text-primary" style="font-size: 16px;">DGMTS</strong> laboratories are fully equipped with all necessary equipment to perform several tests on disturbed and undisturbed soil samples, aggregate, concrete, asphalt, and water. We are well equipped to perform several tests at a time as we have multiple proctor and <b>CBR, consolidation,</b> and <b>concrete compression</b> testing equipment sets. Our Chantilly laboratory can also <b>perm peak</b> as well as residual <b>direct shear tests.</b></p>
            <!-- <p>The most used in-situ tests are:</p>
            <ul style="margin-left: 16px;">
                <li>Standard penetration test (SPT)</li>
                <li>Cone penetration test (CPT)</li>
                <li>Dilatometer test (DMT)</li>
                <li>Vane shear test (VST)</li>
                <li>Borehole shear test (BST)</li>
                <li>Plate load test (PLT)</li>
                <li>Rebound hammer test</li>
                <li>Penetration resistance of hardened concrete, pull out test</li>
            </ul> -->

        </div>

        <!-- <div class="col-md-6">
            <div class="slider" style="padding:0px 0px 0px 15px">
                <ul class="bxslider">
                    <?php
                    $base_url = BASE_URL . 'assets/laboratory_testing_images/';
                    $total_images = 14; // Total number of images

                    for ($i = 2; $i <= $total_images; $i++) {
                        $img_name = 'img' . $i . '.jpg';
                        $background_image_url = $base_url . $img_name;
                        echo "<li style=\"height:300px;background-image:url('{$background_image_url}'); background-size: cover; background-position: center;\"></li>";
                    }
                    ?>
                </ul>

            </div>
        </div> -->
    </div>
    <!-- <hr> -->
    <div class="row mt-5 d-none" id="instSurveys">
        <div class="col-md-12 text-justify">
            <p><strong class="text-primary" style="font-size: 18px;">Instrumentation and Condition Surveys</strong></p>
            <!-- <p class="text-justify"><strong style="font-size: 16px;">DGMTS </strong>provides inspections for a wide
                range of items including single/multi-family dwellings and/or all modifications/renovations for building
                of any type.
            </p> -->
            <p class="text-justify"><strong class="text-primary" style="font-size: 16px;">Dulles Geotechnical and Material Testing Services (DGMTS) </strong>has provided automated systems for monitoring the safety and stability of <b>buildings, excavations, retaining walls, tunnels, railways, </b>and <b>bridges.</b> We have assisted our clients, infrastructure operators and contractors, and construction engineers in detecting and alleviating risk, optimizing designs and methods, and documenting regulatory compliance.</p>
            <p class="text-justify"><strong class="text-primary" style="font-size: 16px;">DGMTS</strong> specialized in implementing innovative solutions for challenging projects. With extensive experience in instrumentation, we harness a wide range of both traditional and advanced sensing technologies. Our instrumentation services encompass <b>PDAs, Piezometers, Inclinometers, Vibration, Noise & Crack Monitoring</b> and has resources and necessary expertise that provides indigenous <b>virtual monitoring services</b> with remote access to collect data in real time.</p>
            <p class="text-justify"><strong class="text-primary" style="font-size: 16px;">DGMTS</strong> provide <b>pre- and post-construction</b> condition survey services to review the condition of structures and properties before and after construction activities. Our experienced staff and proprietary professional reporting system ensure thorough and accurate assessments.</p>
            <p class="text-justify"><strong class="text-primary" style="font-size: 16px;">DGMTS</strong> utilize standardized forms, stilleutiliz photographs, videotaping,<b> visual observations, crack monitoring gauges,</b> and<b> non-destructive testing </b>techniques for pre-construction condition assessments of the structures.</p>
        </div>

        <?php
            // Define the array of image filenames
            $surveysFiles = [
                // 'survey_1.png',
                'survey_2.png',
                'survey_3.png',
                'survey_4.png',
                'survey_5.png'
            ];
            ?>
        <!-- <div class="col-md-6">
            <div class="slider" style="padding:0px 0px 0px 15px">
                <ul class="bxslider">
                    <?php foreach ($surveysFiles as $imageFile): ?>
                    <li
                        style="height: 300px; background-image: url('<?php echo BASE_URL; ?>assets/images/surveys/<?php echo $imageFile; ?>'); background-size: cover;">
                    </li>
                    <?php endforeach; ?>

                </ul>
            </div>
        </div> -->
    </div>
</section>
<!-- Slider End -->



<!-- Service Start -->
<!-- <section class="service-v1">
    <div class="container">
        <?php
			$statement = $pdo->prepare("SELECT * FROM tbl_service ORDER BY id ASC");
			$statement->execute();
			$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
			foreach ($result as $key => $row) {
                $counter =  $key+1;
                if($counter==1 || $counter%4==0){
                    echo '<div class="row">';
                }
				?>
        <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="item">
                <div class="photo"
                    style="background-image:url(<?php echo BASE_URL; ?>assets/uploads/<?php echo $row['photo']; ?>);">
                </div>
                <div class="text">
                    <h3><a href="<?php echo BASE_URL.URL_SERVICE.$row['slug']; ?>"><?php echo $row['name']; ?></a></h3>
                    <p>
                        <?php echo $row['short_description']; ?>
                    </p>
                </div>
            </div>
        </div>
        <?php
                  if($counter%4==0 && $counter!=4 && $counter!=1 ){
                    echo '</div>';
                }
			}
			?>

    </div>
</section> -->
<!-- Service End -->

<script>
var content;
    var prevbutton;

    function content_display(idname, element) {
        if (content) {

            content.classList.add("d-none");
            prevbutton.classList.remove("text-success");
            prevbutton.classList.add("text-primary");
        }
        prevbutton = element;
        content = document.getElementById(idname);
        content.classList.remove("d-none");
        prevbutton.classList.remove("text-primary");
        prevbutton.classList.add("text-success");
    }
    content_display('geoEng', document.querySelector('#geoEng-button'));
</script>

<?php //require_once('footer.php'); ?>
<script>
// Select all links with the class 'scrollLink'
// document.querySelectorAll(".scrollLink").forEach(link => {
//     link.addEventListener("click", function(event) {
//         event.preventDefault(); // Prevent the default link behavior

        // Get the target section ID from the href attribute (remove the '#')
//         const targetId = this.getAttribute("href").substring(1);
//         const targetElement = document.getElementById(targetId);

//         // Get the position of the target element relative to the top of the document
//         // const elementPosition = targetElement.getBoundingClientRect().top + window.scrollY;

//         // Scroll to the element with a -200px offset
//         if (targetElement) {
//                 // Scroll the targetElement into view
//                 targetElement.scrollIntoView({
//                     behavior: 'smooth', // Optional: smooth scrolling
//                     block: 'start' // Align to the start of the container
//                 });
//             }
//     });
// });
// document.querySelectorAll(".scrollLink").forEach(link => {
//     link.addEventListener("click", function(event) {
//         event.preventDefault(); // Prevent the default link behavior

//         // Get the target section ID from the href attribute (remove the '#')
//         const targetId = this.getAttribute("href").substring(1);
//         const targetElement = document.getElementById(targetId);

//         // Get the position of the target element relative to the top of the document
//         const elementPosition = targetElement.getBoundingClientRect().top + window.scrollY;

//         // Scroll to the element with a -200px offset
//         window.scrollTo({
//             top: elementPosition - 200, // Scroll to the element with an offset of -200px
//             behavior: 'smooth' // Enable smooth scrolling
//         });
//     });
// });
</script>