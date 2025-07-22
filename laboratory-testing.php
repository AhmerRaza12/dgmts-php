<style>
    .m {
        list-style-type: lower-latin;
    }

    .n {
        list-style-type: lower-roman;
    }

    .lab-pics {
        display: flex;
        justify-content: center;
    }
    /* .bx-wrappper img{
        display: flex;
        justify-content: center;
        align-items: center;
    } */

    .slider ul li{
        display: flex;
        align-items: center;
    }
    .lab-pics img {
        width: 55%;
        aspect-ratio: 1 / 0.75;
        margin-bottom: 5px;
    }

    .d-none {
        display: none;
    }
.bxslider li{
object-fit: contain;
}
.slider li{
    display: flex;
    justify-content: center;
}
.d-flex p{
    display: flex;
    justify-content: center;
}

    /* .text-success{
        color: #3c792f !important;
    } */
</style>


<div class="container text-justify" style="margin-top: 15px;">

    <section class="content">
        <div class="row">
            <div class="col-md-6 text-justif">
                <p><strong class="text-primary" style="font-size: 18px;">Dulles Geotechnical and Material Testing Services (DGMTS): </strong>offers a wide range of laboratory testing services for concrete, soil, asphalt and water analysis. DGMTS provides independent construction materials testing at our two in-house testing laboratory facilities in Chantilly and Hampton, ensuring efficiency and cost savings for our clients. We are a member of Washington Area Council of Engineering Laboratories, Inc. (WACEL).</p>
                <p><strong class="text-primary" style="font-size: 18px;">Accreditation: </strong>Our laboratories are accredited by the American Association of State Highway and Transportation Officials (AASHTO) and we are members of the Washington Area Council of Engineering Laboratories, Inc. (WACEL). Our Accreditation conforms to the requirements of ASTM D3740, ASTM E329, and AASHTO R-18. We participate in both the AASHTO re:source and CCRL proficiency sample programs for soil and concrete.</p>
                <p><strong class="text-primary" style="font-size: 18px;">Laboratory Management and Staff: </strong>In response to the fast paced nature of today's projects, we strive to keep operations running smoothly and efficiently through electronic report transmittals and a unique laboratory database management system. Our certified field and laboratory technicians have extensive experience across various sectors, including retail, commercial, hospitality, healthcare, energy, and transportation projects such as highways, bridges, and aviation. They are proficient in sampling and testing protocols for a wide range of materials.</p>
                <p>We have the flexibility to hire additional staff as needed to meet project demands and ensure timely completion of all testing services.</p>
                <p><strong class="text-primary" style="font-size: 18px;">Laboratory Equipment: </strong>DGMTS laboratories are fully equipped with all necessary equipment to perform several tests on disturbed and undisturbed soil samples, aggregate, concrete, asphalt, and water analysis. We are well equipped to perform several tests at a time as we have seven proctor and CBR equipment, three consolidation test equipment, three compression machines, as well as direct shear tests.</p>
                <p>The most used in-situ tests are:</p>
                <ul>
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
            <!-- <section class="main-slider"> -->
            <div class="slider col-md-6">
                <ul class="bxslider">

                    <?php
                    // $statement = $pdo->prepare("SELECT * FROM tbl_slider WHERE status=? ORDER BY id DESC");
                    // $statement->execute(array('Active'));
                    // $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                    // foreach ($result as $row) 
                    // {
                    //     if($row['position']=='Left') {$align='tal';}
                    //     if($row['position']=='Center') {$align='tac';}
                    //     if($row['position']=='Right') {$align='tar';}
                    //     
                    ?>
                    <li>

                        <img src="<?php echo BASE_URL; ?>assets/laboratory_testing_images/img1.jpg" alt="Lab pic 1" style="">
                    </li>
                    <li>

                        <img src="<?php echo BASE_URL; ?>assets/laboratory_testing_images/img2.jpg" alt="Lab pic 2" style="">
                    </li>
                    <li>

                        <img src="<?php echo BASE_URL; ?>assets/laboratory_testing_images/img3.jpg" alt="Lab pic 2" style="">
                    </li>
                    <li>

                        <img src="<?php echo BASE_URL; ?>assets/laboratory_testing_images/img4.jpg" alt="Lab pic 2" style="">
                    </li>
                    <li>

                        <img src="<?php echo BASE_URL; ?>assets/laboratory_testing_images/img5.jpg" alt="Lab pic 2" style="">
                    </li>
                    <li>

                        <img src="<?php echo BASE_URL; ?>assets/laboratory_testing_images/img6.jpg" alt="Lab pic 2" style="">
                    </li>
                    <li>

                        <img src="<?php echo BASE_URL; ?>assets/laboratory_testing_images/img7.jpg" alt="Lab pic 1" style="">
                    </li>
                    <li>

                        <img src="<?php echo BASE_URL; ?>assets/laboratory_testing_images/img8.jpg" alt="Lab pic 2" style="">
                    </li>
                    <li>

                        <img src="<?php echo BASE_URL; ?>assets/laboratory_testing_images/img9.jpg" alt="Lab pic 2" style="">
                    </li>
                    <li>

                        <img src="<?php echo BASE_URL; ?>assets/laboratory_testing_images/img10.jpg" alt="Lab pic 2" style="">
                    </li>
                    <li>

                        <img src="<?php echo BASE_URL; ?>assets/laboratory_testing_images/img11.jpg" alt="Lab pic 2" style="">
                    </li>
                    <li>

                        <img src="<?php echo BASE_URL; ?>assets/laboratory_testing_images/img12.jpg" alt="Lab pic 2" style="">
                    </li>
                    <li>
                        
                        <img src="<?php echo BASE_URL; ?>assets/laboratory_testing_images/img13.jpg" alt="Lab pic 2" style="">
                    </li>
                    <li>
                        
                        <img src="<?php echo BASE_URL; ?>assets/laboratory_testing_images/img14.jpg" alt="Lab pic 2" style="">
                    </li>
                    <?php
                    // }
                    ?>
                </ul>
            </div>
            
        </div>
        <hr>
        <div class="row">
            <p style="padding-left: 15px;">Our comprehensive range of laboratory testing services includes:</p>
            <div class="col-md-5">
                <p><strong style="font-size: 18px; cursor: pointer;" id="soil-button" style="" onclick="content_display('soil', this);" class="text-primary">SOIL</strong></p>
                <p><strong style="font-size: 18px; cursor: pointer;" id="aggregate-button" style="" onclick="content_display('aggregate', this);" class="text-primary">AGGREGATE</strong></p>
                <p><strong style="font-size: 18px; cursor: pointer;" id="concrete_and_masonary-button" style="" onclick="content_display('concrete_and_masonary', this);" class="text-primary">CONCRETE AND MASONARY</strong></p>
                <p><strong style="font-size: 18px; cursor: pointer;" id="asphalt_coring-button" style="" onclick="" class="text-primary">CONCRETE/ASPHALT CORING</strong></p>
                <p><strong style="font-size: 18px; cursor: pointer;" id="asphalt-button" style="" onclick="content_display('asphalt', this);" class="text-primary">ASPHALT</strong></p>
                <p><strong style="font-size: 18px; cursor: pointer;" id="rocks-button" style="" onclick="content_display('rocks', this);" class="text-primary">ROCKS</strong></p>
                <p><strong style="font-size: 18px; cursor: pointer;" id="water-button" style="" onclick="content_display('water', this);" class="text-primary">WATER ANALYSIS</strong></p>
            </div>
            <div id="soil" class="col-md-7 d-none">
                <p class="text-primary"><strong style="font-size: 18px;">SOIL</strong></p>
                <ul style="padding-left:0px;">
                    <li>Moisture Contents (ASTM D2216, AASHTO T265)</li>
                    <li>Liquid and Plastic Limits and Plasticity Index (ASTM D3418, AASHTO T89, T90)</li>
                    <li>Particle Size Distribution (ASTM D422, D1140, ASTM D6913, AASHTO T27)</li>
                    <li>Hydrometer Analysis (ASTM D7928, AASHTO T88)</li>
                    <li>Specific Gravity (AASHTO T100, ASTM D854)</li>
                    <li>Compaction Test, Standard Proctor (ASTM 698, AASHTO T99, VTM-1)</li>
                    <li>Compaction Test, Modified Proctor (ASTM D1557 or AASHTO T180)</li>
                    <li>California Bearing Ratio (ASTM D1883, AASHTO T193 or VTM-8)</li>
                    <li>Consolidation Test (ASTM D2435)</li>
                    <li>Unconfined Compression Test (ASTM D2166, AASHTO T208)</li>
                    <li>Direct Shear Test (ASTM D3080)</li>
                    <li>Residual Direct Shear Test (EM-1110-2-1906)</li>
                    <li>Organic Matter of Soil (ASTM D2974)</li>
                    <li>Soil Corrosion Test - Sulfate, Chloride, pH and Soil Resistivity (AASHTO T290, AASHTO T291, AASHTO T289 / ASTM D4972, AASHTO T288)</li>
                    <li>Determination of Unconfined Compressive Strength of Cohesive Soil to Estimate Resilient Modulus (VTM-140)</li>
                    <li>Swell Index (ASTM D4546)</li>
                    <li>Oil Expansion Potential (ASTM D-4829)</li>
                </ul>
            </div>
            <div id="aggregate" class="col-md-7 d-none">
                <p class="text-primary"><strong style="font-size: 18px;">AGGREGATE</strong></p>
                <ul style="padding-left:0px;">
                    <li>Material finer than No. 200 Sieve in mineral aggregates by washing (ASTM C117, AASHTO T11)</li>
                    <li>Sieve analysis of fine and coarse aggregates (ASTM C136, AASHTO T27)</li>
                    <li>Relative Density (Specific Gravity) and absorption of coarse and fine aggregate (ASTM C127, C128; AASHTO T84, T85)</li>
                </ul>
            </div>
            <div id="concrete_and_masonary" class="col-md-7 d-none">
                <p class="text-primary"><strong style="font-size: 18px;">CONCRETE AND MASONARY</strong></p>
                <ul style="padding-left:0px;">
                    <li>Compressive strength of cylindrical concrete specimens (ASTM C39)</li>
                    <li>Compressive Strength of 2" square mortar or grout cubes (ASTM C109)</li>
                    <li>Compressive Strength of Masonry Prisms (ASTM C1314)</li>
                    <li>Compressive Strength of Grout Prism (ASTM C1019)</li>
                    <li>Concrete Permeability for Chloride Ion (ASTM C1202, AASHTO T277)</li>
                    <li>Windsor Probe Mobilization/Demobilization</li>
                    <li>Windsor Probe Testing (ASTM C-803)</li>
                </ul>
            </div>
            <div id="asphalt" class="col-md-7 d-none">
                <p class="text-primary"><strong style="font-size: 18px;">ASPHALT</strong></p>
                <ul style="padding-left:0px;">
                    <li>Bulk Density (Cores) (ASTM D2726, AASHTO T166)</li>
                    <li>Maximum Specific Gravity of Hot Mix Asphalt Paving Mixtures (ASTM D2041, AASHTO T209)</li>
                    <li>Moisture Content of HMA by Oven (ASHTO T329)</li>
                    <li>Bulk Specific Gravity using Vacuum Sealing Method (ASTM D6752, AASHTO T331)</li>
                    <li>Thickness or Height of Compacted Specimens (ASTM D3549)</li>
                    <li>Asphalt Extraction & Gradation (ASTM D2172, D5444 / AASHTO T164, T30)</li>
                </ul>
            </div>
            <div id="rocks" class="col-md-7 d-none">
                <p class="text-primary"><strong style="font-size: 18px;">ROCKS</strong></p>
                <ul style="padding-left:0px;">
                    <li>Unconfined Compression Test for Rock (ASTM D7012)</li>
                    <li>Slake Durability of Shales and Other Similar Weak Rocks (ASTM D4644)</li>
                </ul>
            </div>
            <div id="water" class="col-md-7 d-none">
                <p class="text-primary"><strong style="font-size: 18px;">WATER</strong></p>
                <ul style="padding-left:0px;">
                    <li>Sulfate content in water (ASTM D516)</li>
                    <li>Chloride content in water (ASTM D512)</li>
                    <li>pH of water (ASTM 1293)</li>
                    <li>Electrical conductivity and resistivity of water (ASTM D1125)</li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="row">
            <div id="corrosion_testing" class="col-md-12 ">
                <p class="text-primary"><strong style="font-size: 18px;">CORROSION TESTING</strong></p>
                <p>Dulles Geotechnical and Material Testing Services, Inc. (DGMTS) proudly announces our expanded laboratory testing capabilities to provide Corrosion Test, which is used to predict the likelihood of corrosion or degradation of a material in the sample environment.</p>
                <p>Our Corrosion Testing services include the following tests:</p>
                <p><strong>Sulfate Ion Content in the Soil (AASHTO T290) and Water (AASHTO D516) –</strong> Tested by Spectrophotometer. Soils and water high in sulfates can produce sulfate attack in some types of concrete which deteriorates the mechanical properties of the concrete.</p>
                <p><strong>Chloride Ion Content in Soil (AASHTO T291) and Water (ASTM D512) –</strong> Tested by pH/MV meter using Chloride Ion Selective Electrode. Chloride ions can enhance the corrosion of metals. Chloride ions are also a major cause for corrosion of steel reinforcement in concrete.</p>
                <p><strong>pH of Soil (AASHTO T289 / ASTM D4972) and Water (ASTM D1293) –</strong> Tested by pH meter. An acidic soil or water can indicate a higher risk for corrosion of metals and concrete.</p>
                <p><strong>Resistivity of Soil (AASHTO T288) and Water (ASTM-D1125) -</strong> Tested by Resistivity Meter. The values obtained from this method are relatable to the corrosion potential that a soil or water may exhibit.</p>
                <p>Our Laboratory is accredited by American Association of State Highway and Transportation Officials (AASHTO), which in addition to corrosion test offers a wide range of testing services including direct shear testing, residual direct shear testing, consolidation testing, permeability testing, soil index testing, moisture/density testing as well as many other tests performed under the supervision of Professional Engineers and Laboratory Manager, who direct a staff of technicians with certifications by ACI, VDOT and WACEL.</p>
                <p>For more information about our testing services, please contact Mohammad Ali Hussaini, Director of Laboratories, at 703.488.9953 or <span><a href="mailto:mhussaini@dullesgeotechnical.com">mhussaini@dullesgeotechnical.com</a></span></p>
            </div>
        </div>

    </section>
</div>


<p class="MsoListParagraph" style="margin-top:6.0pt;mso-add-space:auto"><b><span style="font-size:14.0pt;line-height:115%;font-family:">&nbsp;</span></b></p>

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

    content_display('soil', document.querySelector('#soil-button'));
</script>