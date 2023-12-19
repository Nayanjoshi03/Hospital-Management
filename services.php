<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/5971317d29.js" crossorigin="anonymous"></script>
</head>
<style>
    .tab {
        overflow: hidden;
        border: 1px solid #ccc;
        background-color: #f1f1f1;
        margin-top: 2vh;
    }

    /* Style the buttons inside the tab */
    .tab button {
        background-color: inherit;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        transition: 0.3s;
        font-size: 17px;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
        background-color: #ddd;
    }

    /* Create an active/current tablink class */
    .tab button.active {
        background-color: #008565;
    }

    /* Style the tab content */
    .tabcontent {

        display: none;
        padding: 6px 12px;
        /*border: 1px solid #ccc;
        border-top: none;*/
    }

    .footer {
        position: absolute;
        bottom: 0;
        width: 100%;
    }
</style>

<body>
    <?php
    include "nav.php";
    ?>

    <div class="tab">
        <button class="tablinks active" onclick="openCity(event, 'Emergency Care')">Emergency Care</button>
        <button class="tablinks" onclick="openCity(event, 'Cardiology')">Cardiology</button>
        <button class="tablinks" onclick="openCity(event, 'Oncology')">Oncology</button>
        <button class="tablinks" onclick="openCity(event, 'Gastroenterology')">Gastroenterology</button>
        <button class="tablinks" onclick="openCity(event, 'Neuroscience')">Neuroscience</button>
        <button class="tablinks" onclick="openCity(event, 'Orthopedic')">Orthopedic</button>
    </div>

    <div id="Emergency Care" class="tabcontent">
        <h1>Emergency Care</h1>
        <p class="content">It is the ‘Golden Hour‘ and the ‘Platinum Ten Minutes‘ that typify the significance of
            Emergency Medical
            Services. It is a well-accepted fact that a patient who receives basic care from trained professionals and
            is
            transported to the nearest healthcare facility within 15-20 minutes of an emergency has the greatest chance
            of
            survival. Hence, we at Apollo Hospitals leave no stone unturned in providing the best services in the
            shortest
            time possible by trained and experienced medical staff. The Indraprastha Apollo Hospitals Emergency Room has
            the
            reputation for immediate response with our trauma patients being of the highest priority. All laboratory and
            imaging test results are available without delay leading to quick diagnosis and rapid treatment.Apollo
            Hospitals
            Emergency Department provides a systematic approach to treating trauma patients with our dedication to a
            24-hour
            state of readiness. The scope of services includes everything from critical care transport and definitive
            surgical care for trauma victims to comprehensive rehabilitation services.There is never a need for a
            patient towait for surgeons or specialists in order to receive critical care.Apollo Hospitals Emergency
            Department is a
            medical treatment facility specializing in acute care of patients who present without prior appointment,
            either
            by their own means or by ambulance.Due to the unplanned nature of patient attendance, our department
            provides
            initial treatment for a broad spectrum of illnesses and injuries, some of which may be life-threatening and
            require immediate attention.In case of trauma emergency or complicated injuries, our internal alert protocol
            starts preparation in advance, as soon as a trauma call is received. All acute care team members and support
            units are well trained and are activated and ready on site for the quickest response. Additionally, the
            Hospital
            meets the highest international standards for medical, safety and quality as demonstrated by the Joint
            Commission International Accreditation of Hospitals Gold Seal of approval.</p>
    </div>
    <div id="Cardiology" class="tabcontent">
        <h1>Cardiology</h1>
        <p>Co Care is a well-known name in Cardiac & Cardiology hospitals and the Best Heart Hospital in Delhi. The
            scorecard reveals a record-breaking total of more than 2,00,000 heart operations including difficult
            coronary artery bypass procedures, surgery for all forms of valvular heart disease, infant and neonatal
            heart operations – all with success rates that are on line with international norms.Being the best heart
            hospital in Delhi and one of the top 6 cardiac institutes in the world, its supported by well-equipped
            third-generation Cath Labs, Critical Care and Intensive Care Units and Post-Operative Nursing Staff. Our
            cardiologists pioneered use of Coronary Artery Stenting, 3D Mapping, TAVI/TAVR (Trans catheter Aortic Valve
            Implantation/ Replacement) and AAA (Abdominal Aortic Aneurysm).They are skilled in advanced procedures such
            as Percutaneous Transluminal Septal Myocardial Ablation. We are the greatest heart specialist hospital in
            Delhi with compassion and empathy thanks to a committed group of top cardiologists, joyful and capable
            support personnel, and a warm and pleasant environment.</p>
    </div>
    <div id="Oncology" class="tabcontent">
        <h1>Oncology</h1>
        <p>Co Care is the best cancer hospital in Delhi. The Apollo Cancer center is a comprehensive multidisciplinary
            institute, of Indraprastha Apollo Hospitals which brings together the most advanced technology and highly
            qualified healthcare specialists under one roof. The medical staff, nurses, and support workers of Apollo
            Hospitals are all highly skilled and experienced and making us the best cancer hospital in Delhi.Co Care are
            still famous for maintaining their reputation for having one of the best cancer hospitals in Delhi, in
            addition to other areas of medical care. The Apollo Cancer Institute has the distinctive benefit of not only
            being a stand-alone cancer unit but also having the most cutting-edge support from all super specialists and
            diagnostics. Co Care hospitals being best cancer hospital in Delhi, offers facilities such as Image Guided
            Radiotherapy (IGRT), Stereotactic Body Radiotherapy (SBRT), Frameless Stereotactic Radiosurgery (SRS), 3D
            Conformal Radiotherapy, Intensity Modulated Radiotherapy (IMRT), High Dose Rate (HDR) Brachytherapy for
            early detection of cancer with advanced surgical technology known as da Vinci robotical surgical system to
            perform complicated surgeries with ease ensuring best outcome. Patients being the center of care at Apollo
            hospitals there is establishment of tumor and group tumor board along with cancer awareness programs and
            counselling sessions with follow-up management protocols certifying smooth recovery of patients.</p>
    </div>
    <div id="Gastroenterology" class="tabcontent">
        <h1>Gastroenterology</h1>
        <p>The primary aim of our Institutes of Medical and Surgical Gastroenterology is to diagnose, prevent and treat
            disorders of the digestive tract, liver and pancreatico-biliary system in both children and adults. The
            department offers superior care and with modern state-of-art facilities. The Centres offer the latest
            Endoscopic procedures for Gastrointestinal bleed, Gastrointestinal cancers, foreign body removal etc.Our
            Gastrointestinal Surgeons provides minimal access surgery to treat major gastrointestinal surgical problems
            of the intestines, pancreas and hepatobiliary tract , including cancers, and has gained substantial
            recogniton both in India and abroad. Apart from this, our internationally renowned transplant care programme
            performs adult and pediatric Liver Transplants as well as cutting edge Hepatobiliary procedures.</p>
    </div>
    <div id="Neuroscience" class="tabcontent">
        <h1>Neuroscience</h1>
        <p>The Co Care Neuroscience institute in Delhi is amongst our centers of excellence, providing the highest
            levels of professional expertise and leadership through a Galaxy of eminent faculty in the field of
            Neurology, Neurosurgery, Neuro Anesthesia, Neurophysiology, Neuro Psychology, and Interventional Neurology
            along with rehabilitation and is committed to providing a comprehensive 24×7 patient care with “Tender
            Loving Care” – the brand value of Apollo At Co Care Hospitals Delhi, we are aware of the increasing burden
            (10 – 15 % of the population suffer) of Neurological diseases due to Lifestyle, patient ignorance, social
            stigma, and inadequate infrastructure. Apollo Institute of Neurosciences is at the forefront to tackle the
            increasing burden by providing end-to-end services to patients suffering from Neuro ailments.</p>
    </div>
    <div id="Orthopedic" class="tabcontent">
        <h1>Orthopedic</h1>
        <p>The Co Care Institutes of Orthopaedics at Indraprastha Apollo Hospitals is at the forefront in offering the
            latest in orthopaedic treatments and surgical techniques. The center performs surgical procedures which
            include the most current arthroscopic and reconstructive techniques – including major joint replacements
            including the hip resurfacing and shoulder surgeries, arthroscopies, laminectomies, the most delicate hand
            surgeries and much more. The most advanced medical equipment and a team of highly experienced surgeons is
            supported by the most advanced state-of-the-art technology. The Apollo Institutes of Orthopaedics at
            Indraprastha Apollo Hospitals Delhi is at the forefront of current Orthopaedics and offers the latest in
            orthopaedic treatments and surgical techniques. The center perform advanced surgical procedures which
            include the most current arthroscopic and reconstructive techniques – including major joint replacements,
            revision joint replacements, hip resurfacing and shoulder replacement surgeries, knee, shoulder & hip
            arthroscopies, advanced spine surgeries, hand surgeries and much more. Our team of highly experienced
            surgeons are supported by the most advanced medical equipment, computer navigation and imaging equipment.
            Co Care is also one of the first centers for Articular cartilage Implantation (ACI) in
            northern India. It offers all type of cartilage regeneration surgery, including micro-fracturing,
            mosaic-plasty, ACI. It is also one of a few centers having a dedicated pediatric orthopaedics unit offering
            the whole range of pediatric orthopaedics. Orthopaedic surgery & traumatology has seen significant
            developments in the diagnosis & treatment of various diseases of the bones & joints & the treatment of
            fractures & dislocations etc. It now considered to the most sought clinical branch in passing out medical
            students. Most of the injuries can now be managed in such a ways that people can return to their work in
            very short span of time & the fracture healing occurs in good alignment & much faster, with the use of
            modern fracture fixation techniques. Most sports injuries (like ligaments, meniscus, cartilage etc.) can now
            be treated with key-hole (arthroscopic) surgery. Severely damaged joints can now be replaced making the
            person active again. These artificial joints behave almost like normal joints & can last for about 20-25
            years, in most patients. Spinal surgery has seen significant advances with the advent of operative
            microscope, image intensifier etc making it a very safe & reliable surgery.A Pediatric Orthopaedic Surgeon
            deals with various disorders affecting the musculo-skeletal system in a growing child, and hence the age
            spectrum he is associated with ranges from new-borns to adolescents or young adults. The conditions that he
            manages can be classified into Traumatic & Non-Traumatic. The latter can again be classified into ‘solitary’
            and ‘multi-disciplinary’ conditions.</p>
    </div>
    <?php
    include "footer.php";
    ?>

    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }
        openCity(event, 'Emergency Care');
        document.getElementById('Emergency Care').style.display = "block";
        evt.currentTarget.className += " active";
    </script>
</body>

</html>