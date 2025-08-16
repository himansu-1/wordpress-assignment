<?php
/*
Template Name: Research Page
*/
get_header();
?>
<main class="main">


    <!-- Starter Section Section -->
    <section id="starter-section" class="starter-section section position-relative">
        <!-- Section Title -->
        <div class="container section-title aos-init aos-animate" data-aos="fade-up">
            <span>Research Section</span>
            <h2>Research Section</h2>
        </div><!-- End Section Title -->

        <!-- Page Title -->
        <div class="page-title position-absolute bottom-0 w-100">
            <div class="container d-lg-flex justify-content-between align-items-center">
                <h1 class="mb-2 mb-lg-0">Research Page</h1>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li class="current">Research Page</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->
    </section><!-- /Starter Section Section -->

    <!-- Body Content Section -->
    <!-- Section - 1 / Research Publication -->
    <section id="about" class="about section">
        <div class="container my-5">
            <div class="row gy-4">
                <div class="col-lg-8 position-relative align-self-start aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                    <img src="https://camo.githubusercontent.com/c2fd2f94aa55544327fc8ed8901aedb2eec8e3535243452b43646eb8086efe1a/68747470733a2f2f796176757a63656c696b65722e6769746875622e696f2f73616d706c652d696d616765732f696d6167652d34342e6a7067" class="w-100 rounded-4" style="height: 360px" alt="">
                </div>
                <div class="col-lg-4 content aos-init aos-animate align-content-center" data-aos="fade-up" data-aos-delay="200">
                    <h3>Research Publication</h3>
                    <p class="fst-italic text-justify">
                        The research journey reflects a commitment to innovation, discovery, and academic excellence. Below is a categorized list of peer-reviewed publications, highlighting contributions to international journals, national journals, and other scholarly works. Click on each section to explore the detailed list of publications.
                    </p>
                </div>
            </div>
        </div>
        <section id="service-details" class="service-details section">
            <div class="container">
                <div class="row gy-5">
                    <div class="col-lg-3 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-box">
                            <h4>Research List</h4>
                            <div class="services-list">
                                <div class="nav flex-column nav-pills mb-3" id="pubTab" role="tablist" aria-orientation="vertical">
                                    <button class="nav-link text-start text-decoration-none py-4 active" id="int-journal-tab" data-bs-toggle="pill" data-bs-target="#int-journal" type="button" role="tab" aria-controls="int-journal" aria-selected="true">
                                        <i class="bi bi-chevron-right"></i>International Journal
                                    </button>
                                    <hr class="my-2 text-muted">
                                    <button class="nav-link text-start text-decoration-none py-4" id="int-conf-tab" data-bs-toggle="pill" data-bs-target="#int-conf" type="button" role="tab" aria-controls="int-conf" aria-selected="false">
                                        <i class="bi bi-chevron-right"></i>International Conference Proceeding
                                    </button>
                                    <hr class="my-2 text-muted">
                                    <button class="nav-link text-start text-decoration-none py-4" id="nat-conf-proceed-tab" data-bs-toggle="pill" data-bs-target="#nat-conf-proceed" type="button" role="tab" aria-controls="nat-conf-proceed" aria-selected="false">
                                        <i class="bi bi-chevron-right"></i>National Conference Proceeding
                                    </button>
                                    <hr class="my-2 text-muted">
                                    <button class="nav-link text-start text-decoration-none py-4" id="nat-journal-tab" data-bs-toggle="pill" data-bs-target="#nat-journal" type="button" role="tab" aria-controls="nat-journal" aria-selected="false">
                                        <i class="bi bi-chevron-right"></i>National Journal
                                    </button>
                                </div>

                            </div>
                        </div><!-- End Services List -->
                    </div>

                    <div class="col-lg-9 ps-lg-5 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                        <div class="tab-content" id="pubTabContent">
                            <!-- International Journal Tab -->
                            <div class="tab-pane fade show active" id="int-journal" role="tabpanel" aria-labelledby="int-journal-tab">
                                <div class="mb-4">
                                    <h4 class="fw-bold">International Journal Publications</h4>
                                    <p class="text-muted">
                                        Below is a collection of peer-reviewed research articles published in international journals, encompassing advanced topics such as IoT-driven health monitoring, Android malware detection, quantum computing applications, and data mining for cybersecurity — demonstrating significant contributions to global scientific research.
                                    </p>
                                </div>

                                <div class="accordion" id="intJournalAccordion">

                                    <!-- Publication 1 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="intHeading1">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#intCollapse1">
                                                IoT Driven Smart Health Monitoring for Heart Disease Prediction Using Quantum Kernel Enhanced Sardine Diffusion and CNN
                                            </button>
                                        </h2>
                                        <div id="intCollapse1" class="accordion-collapse collapse show" data-bs-parent="#intJournalAccordion">
                                            <div class="accordion-body">
                                                Dibas Kumar Hembram, Satya Narayan Tripathy, CH Narsimha Reddy, Debabrata Dansana, Quadri Noorulhasan Naveed, Shafat Khan, Mohammed Kareemullah, and Addisu Frinjo Emma<br>
                                                <em>Scientific Reports</em>, ISSN: 2045-2322, Volume 15, Article number: 17306, 2025; DOI: <a href="https://doi.org/10.1038/s41598-025-99990-x" target="_blank" rel="noopener noreferrer">10.1038/s41598-025-99990-x</a>. (SCI)
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Publication 2 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="intHeading2">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#intCollapse2">
                                                PSO-Optimized Deep Learning Framework for Android Malware Classification
                                            </button>
                                        </h2>
                                        <div id="intCollapse2" class="accordion-collapse collapse" data-bs-parent="#intJournalAccordion">
                                            <div class="accordion-body">
                                                Diptimayee Sahu, Satya Narayan Tripathy<br>
                                                <em>International Journal on Information Technologies and Security, Journal of The Institution of Engineers (India): Series B (IEIB)</em>, 2025.
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Publication 3 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="intHeading3">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#intCollapse3">
                                                Strengthening Android Malware Detection: from Machine Learning to Deep Learning
                                            </button>
                                        </h2>
                                        <div id="intCollapse3" class="accordion-collapse collapse" data-bs-parent="#intJournalAccordion">
                                            <div class="accordion-body">
                                                Diptimayee Sahu, Satya Narayan Tripathy, and Sisira Kumar Kapat<br>
                                                <em>International Journal of Computing and Digital Systems</em>, e-ISSN: 2210-142X, Volume 17, No. 1, pp. 1-11, 2025; DOI: <a href="http://dx.doi.org/10.12785/ijcds/1571000835" target="_blank" rel="noopener noreferrer">10.12785/ijcds/1571000835</a>. (Scopus)
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Publication 4 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="intHeading4">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#intCollapse4">
                                                A Comprehensive Exploration and Interpretability of Android Malware with Explainable Deep Learning Techniques
                                            </button>
                                        </h2>
                                        <div id="intCollapse4" class="accordion-collapse collapse" data-bs-parent="#intJournalAccordion">
                                            <div class="accordion-body">
                                                Diptimayee Sahu and Satya Narayan Tripathy<br>
                                                <em>International Journal on Information Technologies and Security</em>, ISSN-No: 1313-8251, No. 4 (Volume 16), 2024, pp. 117–128; DOI: <a href="https://doi.org/10.59035/DOVZ3535" target="_blank" rel="noopener noreferrer">10.59035/DOVZ3535</a>. (ESCI)
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Publication 5 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="intHeading5">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#intCollapse5">
                                                An Opcode based Malware Detection Model using Supervised Learning algorithms
                                            </button>
                                        </h2>
                                        <div id="intCollapse5" class="accordion-collapse collapse" data-bs-parent="#intJournalAccordion">
                                            <div class="accordion-body">
                                                Om Prakash Samantray, Satya Narayan Tripathy<br>
                                                <em>International Journal of Information Security and Privacy (IJISP), IGI Global</em>, ISSN: 1930-1650, Volume 15, Issue 4, 2021; DOI: <a href="https://doi.org/10.4018/IJISP.2021100102" target="_blank" rel="noopener noreferrer">10.4018/IJISP.2021100102</a>. (Scopus & ESCI)
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Publication 6 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="intHeading6">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#intCollapse6">
                                                Detection of Anomalous In-Memory Process based on DLL Sequence
                                            </button>
                                        </h2>
                                        <div id="intCollapse6" class="accordion-collapse collapse" data-bs-parent="#intJournalAccordion">
                                            <div class="accordion-body">
                                                Binayak Panda, Satya Narayan Tripathy<br>
                                                <em>International Journal of Advanced Computer Science and Applications (IJACSA)</em>, Volume 11 Issue 10, 2020; ISSN: 2158-107X (Print), 2156-5570 (Online), pp. 185–194. (Web of Science, ESCI, SCOPUS)<br>
                                                <a href="http://dx.doi.org/10.14569/IJACSA.2020.0111025" target="_blank" rel="noopener noreferrer">Paper Link</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Publication 7 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="intHeading7">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#intCollapse7">
                                                A Knowledge-Domain Analyser for Malware Classification
                                            </button>
                                        </h2>
                                        <div id="intCollapse7" class="accordion-collapse collapse" data-bs-parent="#intJournalAccordion">
                                            <div class="accordion-body">
                                                Om Prakash Samantray, Satya Narayan Tripathy<br>
                                                IEEE International Conference on Computer Science, Engineering and Applications (ICCSEA)-2020, ISBN: 978-1-7281-5830-3, pp. 1-7; DOI: 10.1109/ICCSEA49143.2020.9132916 (Scopus)<br>
                                                <a href="https://ieeexplore.ieee.org/document/9132916/figures#figures" target="_blank" rel="noopener noreferrer">Paper Link</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Publication 8 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="intHeading8">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#intCollapse8">
                                                Analysis of Statements of Software Based on the Prioritization Strategy of Test Cases
                                            </button>
                                        </h2>
                                        <div id="intCollapse8" class="accordion-collapse collapse" data-bs-parent="#intJournalAccordion">
                                            <div class="accordion-body">
                                                Sasmita Padhy, Satya Narayan Tripathy, Sisira Kumar Kapat, Susanta Kumar Das<br>
                                                <em>International Journal of Innovative Technology and Exploring Engineering (IJITEE)</em>, ISSN: 2278-3075, Volume 9, Issue 5, March 2020, pp. 618-621; DOI: 10.35940/ijitee.E2479.039520 (Scopus)
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Publication 9 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="intHeading9">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#intCollapse9">
                                                An Optimal Receive Antenna Selection Algorithm using GA in MIMO Communication System
                                            </button>
                                        </h2>
                                        <div id="intCollapse9" class="accordion-collapse collapse" data-bs-parent="#intJournalAccordion">
                                            <div class="accordion-body">
                                                Sasmita Padhy, Satya Narayan Tripathy, Sisira Kumar Kapat, Susanta Kumar Das<br>
                                                <em>International Journal of Innovative Technology and Exploring Engineering (IJITEE)</em>, ISSN: 2278-3075, Volume 9, Issue 5, March 2020, pp. 630-633; DOI: 10.35940/ijitee.E2502.039520 (Scopus)
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Publication 10 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="intHeading10">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#intCollapse10">
                                                Classification of Spyware Affected files using Data Mining Techniques
                                            </button>
                                        </h2>
                                        <div id="intCollapse10" class="accordion-collapse collapse" data-bs-parent="#intJournalAccordion">
                                            <div class="accordion-body">
                                                D Anil Kumar, Sisira Kumar Kapat, Susanta Kumar Das, Satya Narayan Tripathy<br>
                                                <em>International Journal of Recent Technology and Engineering (IJRTE)</em>, ISSN: 2277-3878, Volume 8 Issue 2S6, July 2019, pp. 462-466 (Scopus)
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Publication 11 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="intHeading11">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#intCollapse11">
                                                A Data Mining Based Malware Detection Model using Distinct API Call Sequences
                                            </button>
                                        </h2>
                                        <div id="intCollapse11" class="accordion-collapse collapse" data-bs-parent="#intJournalAccordion">
                                            <div class="accordion-body">
                                                Om Prakash Samantray, Satya Narayana Tripathy, Susant Kumar Das<br>
                                                <em>International Journal of Innovative Technology and Exploring Engineering (IJITEE)</em>, ISSN: 2278-3075, Volume 8 Issue 7, May 2019, pp. 896-902 (Scopus)<br>
                                                <a href="https://www.ijitee.org/wp-content/uploads/papers/v8i7/F3533048619.pdf" target="_blank" rel="noopener noreferrer">Paper Link</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Publication 12 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="intHeading12">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#intCollapse12">
                                                A study to Understand Malware Behavior through Malware Analysis
                                            </button>
                                        </h2>
                                        <div id="intCollapse12" class="accordion-collapse collapse" data-bs-parent="#intJournalAccordion">
                                            <div class="accordion-body">
                                                Om Prakash Samantray, Satya Narayana Tripathy, Susant Kumar Das<br>
                                                IEEE International Conference on System, Computation, Automation and Networking (ICSCAN), Pondicherry, India - 2019, pp. 1-5; DOI: 10.1109/ICSCAN.2019.8878680 (Scopus)<br>
                                                <a href="https://ieeexplore.ieee.org/document/8878680" target="_blank" rel="noopener noreferrer">Paper Link</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Publication 13 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="intHeading13">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#intCollapse13">
                                                A Theoretical Feature-wise Study of Malware Detection Techniques
                                            </button>
                                        </h2>
                                        <div id="intCollapse13" class="accordion-collapse collapse" data-bs-parent="#intJournalAccordion">
                                            <div class="accordion-body">
                                                Om Prakash Samantray, Satya Narayana Tripathy, Susant Kumar Das<br>
                                                <em>International Journal of Computer Sciences and Engineering (Open Access)</em>, E-ISSN: 2347-2693, Vol.-6, Issue-12, Dec 2018; pp. 879-887.
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Publication 14 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="intHeading14">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#intCollapse14">
                                                Morphological Malware Detection: An API Sequence Mining With LCS Based Voting Algorithm
                                            </button>
                                        </h2>
                                        <div id="intCollapse14" class="accordion-collapse collapse" data-bs-parent="#intJournalAccordion">
                                            <div class="accordion-body">
                                                Binayak Panda, Satya Narayan Tripathy<br>
                                                <em>Journal of Advance Research in Dynamical & Control Systems</em>, Vol. 10, Special Issue. 06, pp. 625-633, 2018, ISSN: 1943-023X, (SCOPUS, UGC Approved Journal Sl. No. 26301).
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Publication 15 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="intHeading15">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#intCollapse15">
                                                Malware Architectural View with Performance Analysis in Network at its Activation State
                                            </button>
                                        </h2>
                                        <div id="intCollapse15" class="accordion-collapse collapse" data-bs-parent="#intJournalAccordion">
                                            <div class="accordion-body">
                                                Sisira Kumar Kapat, Satya Narayan Tripathy<br>
                                                <em>International Conference on Cognitive Informatics & Soft Computing (CISC-2017)</em>, eBook ISBN 978-981-13-0617-4, Series ISSN 2194-5357. Scopus.
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Publication 16 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="intHeading16">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#intCollapse16">
                                                A Comprehensive Study of Malware Propagation using Geometric Progression
                                            </button>
                                        </h2>
                                        <div id="intCollapse16" class="accordion-collapse collapse" data-bs-parent="#intJournalAccordion">
                                            <div class="accordion-body">
                                                Satya Narayan Tripathy, Sisira Kumar Kapat, Raghunath Patro, Susanta Kumar Das<br>
                                                <em>International Conference on Computational Intelligence and Networks</em>, Accession Number: WOS:000428641100014, ISBN:978-1-5386-2529-3, DOI 10.1109/CINE.2017.31, Pages: 73-77, IEEE. Scopus, Web of Science.
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Publication 17 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="intHeading17">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#intCollapse17">
                                                Static Malware Analysis: A Case Study
                                            </button>
                                        </h2>
                                        <div id="intCollapse17" class="accordion-collapse collapse" data-bs-parent="#intJournalAccordion">
                                            <div class="accordion-body">
                                                Satya Narayan Tripathy, Sisira Kumar Kapat, M. Soujanya, Susanta Kumar Das<br>
                                                <em>International Journal of Scientific Research in Computer Science, Engineering and Information Technology (IJSRCSEIT)</em>, ISSN : 2456-3307, Volume 2, Issue 7, UGC Journal no:64718, pp.135-141, September 2017.
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Publication 18 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="intHeading18">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#intCollapse18">
                                                A Spyware Detection System with a Comparative Study of Spywares using Classification Rule Mining
                                            </button>
                                        </h2>
                                        <div id="intCollapse18" class="accordion-collapse collapse" data-bs-parent="#intJournalAccordion">
                                            <div class="accordion-body">
                                                Satya Narayan Tripathy, Sisira Kumar Kapat, Susanta Kumar Das, Binayak Panda<br>
                                                <em>International Journal of Scientific & Engineering Research</em>, ISSN 2229-5518, Volume 7, Issue 3, March 2016; pp. 179-184; (UGC Approved Journal Sl. No. 44919).
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Publication 19 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="intHeading19">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#intCollapse19">
                                                A Comparative Study on Serial and Parallel Web Content Mining
                                            </button>
                                        </h2>
                                        <div id="intCollapse19" class="accordion-collapse collapse" data-bs-parent="#intJournalAccordion">
                                            <div class="accordion-body">
                                                Binayak Panda, Dr. Satya Narayan Tripathy, Dr. Nilambar Sethi, Om Prakash Samantray<br>
                                                <em>International Journal of Advanced Networking and Applications</em>, ISSN: 0975-0282, EISSN: 0975-0290, Volume 7, Issue 5, 2016; pp. 2882-2886; (UGC Approved Journal Sl. No. 62587).
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Publication 20 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="intHeading20">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#intCollapse20">
                                                CAM: A Combined Analytical Model for Efficient Malware Classification
                                            </button>
                                        </h2>
                                        <div id="intCollapse20" class="accordion-collapse collapse" data-bs-parent="#intJournalAccordion">
                                            <div class="accordion-body">
                                                Om Prakash Samantray, Satya Narayan Tripathy, Susant Kumar Das, Binayak Panda<br>
                                                <em>International Journal of Advanced Research in Computer and Communication Engineering</em>, ISSN (Online) 2278-1021, ISSN (Print) 2319-5940, Vol. 5, Issue 1, January 2016; pp. 286-290; DOI 10.17148/IJARCCE.2016.5171.
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Publication 21 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="intHeading21">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#intCollapse21">
                                                A Study on Malware Taxonomy and Malware Detection Techniques
                                            </button>
                                        </h2>
                                        <div id="intCollapse21" class="accordion-collapse collapse" data-bs-parent="#intJournalAccordion">
                                            <div class="accordion-body">
                                                Satya Narayan Tripathy, Susanta Kumar Das, Brojo Kishore Mishra, Om Prakash Samantray<br>
                                                <em>International Journal of Engineering Research & Technology</em>, ISSN (print): 2278-0181, TITCON-2015 Conference Proceedings; pp. 266 – 273.
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Publication 22 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="intHeading22">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#intCollapse22">
                                                A Review on Vulnerability Management in Wireless Communication System
                                            </button>
                                        </h2>
                                        <div id="intCollapse22" class="accordion-collapse collapse" data-bs-parent="#intJournalAccordion">
                                            <div class="accordion-body">
                                                S. N. Tripathy, T. Mohan Rao<br>
                                                <em>International Journal of Advanced Computer Research</em>, ISSN (print): 2249-7277, March 2013, pp. 71-75.
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Publication 23 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="intHeading23">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#intCollapse23">
                                                A Survey on Vulnerability Management for Web Security
                                            </button>
                                        </h2>
                                        <div id="intCollapse23" class="accordion-collapse collapse" data-bs-parent="#intJournalAccordion">
                                            <div class="accordion-body">
                                                Debendra Dhinda, S. N. Tripathy, Nikunja Kishore Sabat<br>
                                                <em>International Journal of Advanced Computer Research</em>, ISSN (print): 2249-7277, March 2013, pp. 92-94.
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Publication 24 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="intHeading24">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#intCollapse24">
                                                Policy based Network Administration and Management
                                            </button>
                                        </h2>
                                        <div id="intCollapse24" class="accordion-collapse collapse" data-bs-parent="#intJournalAccordion">
                                            <div class="accordion-body">
                                                Susanta Kumar Das, Jagadish Panda, Satya Narayan Tripathy<br>
                                                <em>IJCSNS International Journal of Computer Science and Network Security</em>, Vol.9 No.10, November 2012, pp. 121-130.
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Publication 25 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="intHeading25">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#intCollapse25">
                                                Designing A Trust Model for an Ad Hoc Social Network using Communication Data Value
                                            </button>
                                        </h2>
                                        <div id="intCollapse25" class="accordion-collapse collapse" data-bs-parent="#intJournalAccordion">
                                            <div class="accordion-body">
                                                S. N. Tripathy, S. K. Tripathy, S. K. Das<br>
                                                <em>International Journal of Computer Science & Management Systems</em>, ISSN: 0975-5349, Vol.1(2), December 2009, pp. 85-89.
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </div>

                            <!-- International Conference Tab -->
                            <div class="tab-pane fade" id="int-conf" role="tabpanel" aria-labelledby="int-conf-tab">
                                <div class="mb-4">
                                    <h4 class="fw-bold">International Conference Proceedings</h4>
                                    <p class="text-muted">
                                        Below is a curated list of research publications presented at prominent international conferences and symposiums. These contributions span deep learning, cybersecurity, healthcare informatics, Android malware detection, and explainable AI, published in reputed proceedings like Springer, IEEE, and Taylor & Francis.
                                    </p>
                                </div>
                                <div class="accordion" id="intConfAccordion">

                                    <!-- Publication 1 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="confHeading1">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#confCollapse1">
                                                Lung Cancer Prognosis using Deep Learning
                                            </button>
                                        </h2>
                                        <div id="confCollapse1" class="accordion-collapse collapse show" data-bs-parent="#intConfAccordion">
                                            <div class="accordion-body">
                                                Pragnya Das, Satya Narayan Tripathy<br>
                                                <em>World Congress on Smart Computing (WCSC2024)</em>, April 2025, pp.147–155.<br>
                                                DOI: 10.1007/978-981-97-9006-7_13
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Publication 2 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="confHeading2">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#confCollapse2">
                                                Advancing Android Malware Detection: CNN-Based Image Analysis Framework
                                            </button>
                                        </h2>
                                        <div id="confCollapse2" class="accordion-collapse collapse" data-bs-parent="#intConfAccordion">
                                            <div class="accordion-body">
                                                Diptimayee Sahu, Satya Narayan Tripathy<br>
                                                <em>ICIDA 2024</em>, Lecture Notes in Networks and Systems, Volume 1408, 2024. ISBN: 978-981-96-6296-8
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Publication 3 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="confHeading3">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#confCollapse3">
                                                Class-Balanced Ensembled Framework for Android Malware Detection
                                            </button>
                                        </h2>
                                        <div id="confCollapse3" class="accordion-collapse collapse" data-bs-parent="#intConfAccordion">
                                            <div class="accordion-body">
                                                Diptimayee Sahu, Satya Narayan Tripathy, Soujanya Morty<br>
                                                <em>Smart Innovation, Systems and Technologies</em>, Springer Book Series, 2024.
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Publication 4 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="confHeading4">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#confCollapse4">
                                                Enhancing Transparency in Android Malware Detection Using Explainable SHAP-LIME Deep Learning Technique
                                            </button>
                                        </h2>
                                        <div id="confCollapse4" class="accordion-collapse collapse" data-bs-parent="#intConfAccordion">
                                            <div class="accordion-body">
                                                Diptimayee Sahu, Satya Narayan Tripathy, Soujanya Morty<br>
                                                <em>Studies in Smart Technologies</em>, Springer Book Series, 2024.
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Publication 5 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="confHeading5">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#confCollapse5">
                                                A Deep Learning Approach for Android Malware Detection over Large Feature-set
                                            </button>
                                        </h2>
                                        <div id="confCollapse5" class="accordion-collapse collapse" data-bs-parent="#intConfAccordion">
                                            <div class="accordion-body">
                                                Diptimayee Sahu, Satya Narayan Tripathy, Sisira Kumar Kapat, Soujanya Morty<br>
                                                <em>IEEE AIC 2023 - World Conference on Applied Intelligence and Computing</em>.
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Publication 6 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="confHeading6">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#confCollapse6">
                                                A Comparative Analysis of Android Malware Detection Using Deep Learning
                                            </button>
                                        </h2>
                                        <div id="confCollapse6" class="accordion-collapse collapse" data-bs-parent="#intConfAccordion">
                                            <div class="accordion-body">
                                                Sahu, D., Tripathy, S.N., Kapat, S.K.<br>
                                                <em>ICAIoT 2023 – Communications in Computer and Information Science, vol 1929</em>, Springer, Cham.<br>
                                                <a href="https://doi.org/10.1007/978-3-031-48774-3_7" target="_blank">Read Paper</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Publication 7 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="confHeading7">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#confCollapse7">
                                                A Deep Learning-Based Framework for Android Malware Family Classification
                                            </button>
                                        </h2>
                                        <div id="confCollapse7" class="accordion-collapse collapse" data-bs-parent="#intConfAccordion">
                                            <div class="accordion-body">
                                                Sahu, D., Tripathy, S.N., Kapat, S.K.<br>
                                                <em>ICDSA 2023 – Lecture Notes in Networks and Systems, vol 821</em>, Springer, Singapore.<br>
                                                <a href="https://doi.org/10.1007/978-981-99-7814-4_27" target="_blank">Read Paper</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Publication 8 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="confHeading8">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#confCollapse8">
                                                Antral Gastritis Preliminary Diagnosis by Endoscopic Image Analysis using Deep Learning Approach
                                            </button>
                                        </h2>
                                        <div id="confCollapse8" class="accordion-collapse collapse" data-bs-parent="#intConfAccordion">
                                            <div class="accordion-body">
                                                Lalit Kumar Behera, Satya Narayan Tripathy<br>
                                                <em>ICCTCCI-2024</em>, ISBN: 978-81-966964-1-2 (Scopus, Taylor & Francis)
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Publication 9 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="confHeading9">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#confCollapse9">
                                                Explainable Artificial Intelligence in Designing a Sustainable E-healthcare System
                                            </button>
                                        </h2>
                                        <div id="confCollapse9" class="accordion-collapse collapse" data-bs-parent="#intConfAccordion">
                                            <div class="accordion-body">
                                                Lalit Kumar Behera, Satya Narayan Tripathy<br>
                                                <em>AIoT4S-2024</em>, ISBN: 978-93-6013-262-0
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Publication 10 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="confHeading10">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#confCollapse10">
                                                Host Specific Outlier Detection Using Process Relation Semantics with Graph Mining
                                            </button>
                                        </h2>
                                        <div id="confCollapse10" class="accordion-collapse collapse" data-bs-parent="#intConfAccordion">
                                            <div class="accordion-body">
                                                Binayak Panda, Satya Narayan Tripathy<br>
                                                <em>ICDSM-2021 – LNDECT, Volume 86</em>, Springer, Feb 2022.<br>
                                                DOI: 10.1007/978-981-16-5685-9_44<br>
                                                <a href="https://doi.org/10.1007/978-981-16-5685-9_44" target="_blank">Read Paper</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Publication 11 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="confHeading11">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#confCollapse11">
                                                A Study to Understand Malware Behavior through Malware Analysis
                                            </button>
                                        </h2>
                                        <div id="confCollapse11" class="accordion-collapse collapse" data-bs-parent="#intConfAccordion">
                                            <div class="accordion-body">
                                                Om Prakash Samantray, Satya Narayana Tripathy, Susant Kumar Das<br>
                                                <em>International Conference on Systems Computation Automation and Networking</em>, IEEE, 2019.<br>
                                                ISBN: 978-1-7281-1524-5
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Publication 12 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="confHeading12">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#confCollapse12">
                                                A Survey on Malware Detection Approaches Using EULA Analysis with Text Mining
                                            </button>
                                        </h2>
                                        <div id="confCollapse12" class="accordion-collapse collapse" data-bs-parent="#intConfAccordion">
                                            <div class="accordion-body">
                                                Satya Narayan Tripathy, Sisira Kumar Kapat, D Anil Kumar, Mamata Nayak, Susanta Kumar Das<br>
                                                <em>ICDSBA 2018</em>, DOI: 10.1109/ICDSBA.2018.00102<br>
                                                Accession Number: WOS: 000468955000095<br>
                                                ISBN: 978-1-5386-8431-3, Pages: 517–522
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <!-- National Conference Proceeding Tab -->
                            <div class="tab-pane fade" id="nat-conf-proceed" role="tabpanel" aria-labelledby="nat-conf-proceed-tab">
                                <div class="mb-4">
                                    <h4 class="fw-bold">National Conference Proceedings</h4>
                                    <p class="text-muted">
                                        This section showcases research papers presented at various esteemed national conferences and seminars. These contributions reflect innovations in cybersecurity, malware detection, trust models in social networks, and advancements in IT for national development.
                                    </p>
                                </div>

                                <div class="accordion" id="natConfAccordion">

                                    <!-- Entry 1 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="confHeading1">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#confCollapse1">
                                                Two Phase Malware Detection using API and Static System Event Properties
                                            </button>
                                        </h2>
                                        <div id="confCollapse1" class="accordion-collapse collapse show" data-bs-parent="#natConfAccordion">
                                            <div class="accordion-body">
                                                Sisira Kumar Kapat, Satya Narayan Tripathy, Susanta Kumar Das<br>
                                                In <em>NSIAIT-2019</em>, Berhampur University, Odisha, India<br>
                                                15th–16th March 2019
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Entry 2 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="confHeading2">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#confCollapse2">
                                                A System-centric Malware Detection Framework based on System’s Behavior
                                            </button>
                                        </h2>
                                        <div id="confCollapse2" class="accordion-collapse collapse" data-bs-parent="#natConfAccordion">
                                            <div class="accordion-body">
                                                Om Prakash Samantray, Satya Narayan Tripathy, Susanta Kumar Das, Sisira Kumar Kapat<br>
                                                In <em>NSIAIT-2019</em>, Berhampur University, Odisha, India<br>
                                                15th–16th March 2019
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Entry 3 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="confHeading3">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#confCollapse3">
                                                Trust Evaluation Mechanism in Ad Hoc Social Network using Communication Data Value
                                            </button>
                                        </h2>
                                        <div id="confCollapse3" class="accordion-collapse collapse" data-bs-parent="#natConfAccordion">
                                            <div class="accordion-body">
                                                S. N. Tripathy, B. K. Tripathy, S. K. Nahak, M. Pattnayak<br>
                                                In <em>National Seminar on IT – Vision 2020</em>, 21st February 2008, pp. 42–48
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Entry 4 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="confHeading4">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#confCollapse4">
                                                Designing A Trust Model for Human Interaction in Ad Hoc Social Network
                                            </button>
                                        </h2>
                                        <div id="confCollapse4" class="accordion-collapse collapse" data-bs-parent="#natConfAccordion">
                                            <div class="accordion-body">
                                                S. N. Tripathy<br>
                                                In <em>BITCON’07</em>, National Conference on Secure Transaction, 16–17 March 2007, pp. 42–48
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Entry 5 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="confHeading5">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#confCollapse5">
                                                Trust Evaluation Mechanism in Ad Hoc Social Network
                                            </button>
                                        </h2>
                                        <div id="confCollapse5" class="accordion-collapse collapse" data-bs-parent="#natConfAccordion">
                                            <div class="accordion-body">
                                                S. N. Tripathy, B. K. Tripathy & S. K. Dash<br>
                                                In <em>NCIS’07</em>, National Conference on Intelligence Systems, 17–18 February 2007, pp. 65–71
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Entry 6 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="confHeading6">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#confCollapse6">
                                                A Study of Some Threats and Attacks of Ad Hoc Social Networks
                                            </button>
                                        </h2>
                                        <div id="confCollapse6" class="accordion-collapse collapse" data-bs-parent="#natConfAccordion">
                                            <div class="accordion-body">
                                                S. N. Tripathy<br>
                                                Presented at <em>MPCCET</em>, 2–3 March 2007 (Electronic-format publications)
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Entry 7 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="confHeading7">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#confCollapse7">
                                                Networks Security Model: An Incremental Approach to Network Security
                                            </button>
                                        </h2>
                                        <div id="confCollapse7" class="accordion-collapse collapse" data-bs-parent="#natConfAccordion">
                                            <div class="accordion-body">
                                                S. N. Tripathy<br>
                                                In <em>NSWAP</em>, Gandhi Institute of Engineering & Technology (GIET), Odisha<br>
                                                30 Sep – 01 Oct 2001
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Entry 8 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="confHeading8">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#confCollapse8">
                                                Multilingual: The Next Generation Challenge
                                            </button>
                                        </h2>
                                        <div id="confCollapse8" class="accordion-collapse collapse" data-bs-parent="#natConfAccordion">
                                            <div class="accordion-body">
                                                S. N. Tripathy<br>
                                                In <em>Relation '97</em>, All India MCA Meet, University of Hyderabad, 7–9 March 1997
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- National Journal Tab -->
                            <div class="tab-pane fade" id="nat-journal" role="tabpanel" aria-labelledby="nat-journal-tab">
                                <div class="mb-4">
                                    <h4 class="fw-bold">National Journal Publications</h4>
                                    <p class="text-muted">
                                        Listed below are peer-reviewed research publications featured in reputed national journals. These works span various domains including biomedical signal processing, Android malware detection, cardiovascular disease prediction, and more — highlighting the depth and impact of national-level scholarly research.
                                    </p>
                                </div>

                                <div class="accordion" id="natJournalAccordion">

                                    <!-- Publication 1 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="natHeading1">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#natCollapse1">
                                                A Survey on Enhancing Antral Gastritis Diagnosis Using Explainable Artificial Intelligence
                                            </button>
                                        </h2>
                                        <div id="natCollapse1" class="accordion-collapse collapse show" data-bs-parent="#natJournalAccordion">
                                            <div class="accordion-body">
                                                Lalit Kumar Behera, and Satya Narayan Tripathy<br>
                                                <em>Research Journal of Berhampur University (RJBU)</em>, ISSN: 2250-1681, Volume-VIII, Dec 2024, pp. 21-25.
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Publication 2 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="natHeading2">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#natCollapse2">
                                                Comprehensive Literature Review for Developing a Hybrid Deep Learning Framework with Explainable AI
                                            </button>
                                        </h2>
                                        <div id="natCollapse2" class="accordion-collapse collapse" data-bs-parent="#natJournalAccordion">
                                            <div class="accordion-body">
                                                Dibas Kumar Hembram, and Satya Narayan Tripathy<br>
                                                <em>RJBU</em>, Volume-VIII, Dec 2024, pp. 16–20.
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Publication 3 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="natHeading3">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#natCollapse3">
                                                Biomedical Signal Processing for ECG Classification to detect Heart disease using Deep Learning
                                            </button>
                                        </h2>
                                        <div id="natCollapse3" class="accordion-collapse collapse" data-bs-parent="#natJournalAccordion">
                                            <div class="accordion-body">
                                                Lalit Kumar Behera, and Satya Narayan Tripathy<br>
                                                <em>RJBU</em>, Volume-VIII, Dec 2024, pp. 26–29.
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Publication 4 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="natHeading4">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#natCollapse4">
                                                Enhancing Android Malware Detection and Interpretability Through Explainable Deep Learning Models
                                            </button>
                                        </h2>
                                        <div id="natCollapse4" class="accordion-collapse collapse" data-bs-parent="#natJournalAccordion">
                                            <div class="accordion-body">
                                                Diptimayee Sahu, Satya Narayan Tripathy, Sisira Kumar Kapat, M Soujanya<br>
                                                <em>RJBU</em>, Volume-VII, April 2024, pp. 14–22.
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Publication 5 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="natHeading5">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#natCollapse5">
                                                A Survey on Lung Cancer Forecasting using Deep Learning Techniques
                                            </button>
                                        </h2>
                                        <div id="natCollapse5" class="accordion-collapse collapse" data-bs-parent="#natJournalAccordion">
                                            <div class="accordion-body">
                                                Pragnya Das, and Satya Narayan Tripathy<br>
                                                <em>RJBU</em>, Volume-VII, April 2024, pp. 35–38.
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Publication 6 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="natHeading6">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#natCollapse6">
                                                Trust Evolution Mechanism in Ad Hoc Social Network using Intrusion Detection
                                            </button>
                                        </h2>
                                        <div id="natCollapse6" class="accordion-collapse collapse" data-bs-parent="#natJournalAccordion">
                                            <div class="accordion-body">
                                                S. N. Tripathy, B. K. Tripathy, G. N. Pradhan<br>
                                                <em>SIDDHANT: A Journal of Decision Making</em>, Vol. 8(2&3), Apr–Sep 2008, pp. 67–72.
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Publication 7 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="natHeading7">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#natCollapse7">
                                                Possible Terrorization in Ad Hoc Social Networks
                                            </button>
                                        </h2>
                                        <div id="natCollapse7" class="accordion-collapse collapse" data-bs-parent="#natJournalAccordion">
                                            <div class="accordion-body">
                                                S. N. Tripathy, B. K. Tripathy, G. N. Pradhan<br>
                                                <em>SIDDHANT</em>, ISSN:0091/2002-TC, Vol. 7(2), Apr–Jun 2007, pp. 48–54.
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </section>
    </section>

    <ul class="nav nav-tabs justify-content-center mb-4" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="books-chapter-tab" data-bs-toggle="tab" data-bs-target="#books-chapter" type="button" role="tab">Books Chapter</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="books-tab" data-bs-toggle="tab" data-bs-target="#books" type="button" role="tab">Books</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="research-project-tab" data-bs-toggle="tab" data-bs-target="#research-project" type="button" role="tab">Research Project</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="research-guidance-tab" data-bs-toggle="tab" data-bs-target="#research-guidance" type="button" role="tab">Research Guidance</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="consultancy-tab" data-bs-toggle="tab" data-bs-target="#consultancy" type="button" role="tab">Consultancy</button>
        </li>
    </ul>

    <div class="tab-content" id="myTabContent">
        <!-- Section - 2 / Books Chapter -->
        <div class="tab-pane fade show active" id="books-chapter" role="tabpanel">
            <div class="container my-5">
                <div class="row gy-4">
                    <div class="col-lg-6 content align-content-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                        <h3>Book Chapters</h3>

                        <p class="fst-italic text-justify">
                            The following book chapters reflect significant research contributions in the fields of Artificial Intelligence, Cybersecurity, IoT, Digital Health, and Sustainable Technologies. These chapters have been published by reputed publishers such as CRC Press, Springer, IGI Global, and Scrivener Publishing.
                        </p>
                    </div>
                    <div class="col-lg-6 position-relative aos-init aos-animate text-center" data-aos="fade-up" data-aos-delay="100">
                        <img src="https://sample-files.com/downloads/images/jpg/landscape_hires_4000x2667_6.83mb.jpg" class="img-fluid rounded-4 w-75" alt="">
                    </div>
                    <div class="col-12" style="place-items: center;">

                        <ul class="list-unstyled w-75">
                            <li class="mb-3"><i class="bi bi-check2-all"></i> Pragnya Das, Satya Narayan Tripathy, and Kali Prasad Rath — "Artificial Intelligence-Based Medical Imaging for Cancer", ICORSVB-2025, ISBN: 978-81-984602-3-3, pp. 71, Feb. 2025.</li>
                            <li class="mb-3"><i class="bi bi-check2-all"></i> Lalit Kumar Behera, Satya Narayan Tripathy, and Tumbanath Samantara — "Integrating Deep Learning into Decision-Making Systems by Medical Image Analysis for Advanced Disease Diagnosis", ICORSVB-2025, ISBN: 978-81-984602-3-3, pp. 61, Feb. 2025.</li>
                            <li class="mb-3"><i class="bi bi-check2-all"></i> Pragnya Das, Satya Narayan Tripathy — "Analysis of CT Scan Lung Cancer Image for Early Prediction", SMSI-2024, CRC Press, ISBN: 9781032980409, DOI: 10.1201/9781003596776-24, pp. 115-119.</li>
                            <li class="mb-3"><i class="bi bi-check2-all"></i> Lalit Kumar Behera, Satya Narayan Tripathy — "e-healthcare system for skin care", SMSI-2024, CRC Press, DOI: 10.1201/9781003596776-44, pp. 215-219.</li>
                            <li class="mb-3"><i class="bi bi-check2-all"></i> Diptimayee Sahu, Satya Narayan Tripathy, Sisira Kumar Kapat, Soujanya Morty — "A DNN Approach to Design a Smart Security System for Android Platform", IGI Global, ISBN13: 9798369311868, DOI: 10.4018/979-8-3693-1186-8.ch001.</li>
                            <li class="mb-3"><i class="bi bi-check2-all"></i> Om Prakash Samantray, Satya Narayan Tripathy — "An Efficient Hybrid Approach for Malware Detection using Frequent Opcodes and API Call Sequences", LNEE, Vol. 968, DOI: 10.1007/978-981-19-7346-8_63, Feb. 2023.</li>
                            <li class="mb-3"><i class="bi bi-check2-all"></i> Om Prakash Samantray, Satya Narayana Tripathy — "IoT-Malware Classification Model Using Byte Sequences and Supervised Learning Techniques", LNNS, Vol. 201, DOI: 10.1007/978-981-16-0666-3_6.</li>
                            <li class="mb-3"><i class="bi bi-check2-all"></i> Satya Narayan Tripathy, Sisira Kumar Kapat, Susanta Kumar Das — "Security Threats and Vulnerabilities in E-business", in *Cyber Security in Parallel and Distributed Computing*, Scrivener Publishing, ISBN: 9781119488057, pp. 51-59.</li>
                            <li class="mb-3"><i class="bi bi-check2-all"></i> Satya Narayan Tripathy, Sisira Kumar Kapat — "UGC Regulations, 2016: A Step in the Right Direction...", B.R. International Publication, ISBN: 978-81-932419-8-1, pp. 144–148.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section - 3 / Book -->
        <div class="tab-pane fade" id="books" role="tabpanel">
            <div class="container my-5">
                <div class="row gy-4">
                    <div class="col-lg-6 position-relative text-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                        <img src="https://www.sample-videos.com/img/Sample-jpg-image-10mb.jpg" class="img-fluid rounded-4 w-75" alt="">
                    </div>
                    <div class="col-lg-6 content aos-init aos-animate align-content-center" data-aos="fade-up" data-aos-delay="200">
                        <h3>Books</h3>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check2-all"></i> Satya Narayan Tripathy — “Digital Twin Technology: Concepts, Architecture, Applications, and Insights”, Amazon Kindle Direct Publishing, ISBN-13: 979-8292717096, ASIN: B0FJ28XG45, 319 pages.</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

        <!-- Section - 4 / Research Project -->
        <div class="tab-pane fade" id="research-project" role="tabpanel">
            <div class="container my-5">
                <div class="row gy-4">
                    <div class="col-lg-6 content aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                        <h3>Research Project</h3>
                        <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore
                            magna aliqua.
                        </p>
                        <ul>
                            <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
                            </li>
                            <li><i class="bi bi-check2-all"></i> <span>Duis aute irure dolor in reprehenderit in voluptate
                                    velit.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                                    aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla
                                    pariatur.</span></li>
                        </ul>
                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
                        </p>
                    </div>
                    <div class="col-lg-6 position-relative align-self-start aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                        <img src="https://camo.githubusercontent.com/c2fd2f94aa55544327fc8ed8901aedb2eec8e3535243452b43646eb8086efe1a/68747470733a2f2f796176757a63656c696b65722e6769746875622e696f2f73616d706c652d696d616765732f696d6167652d34342e6a7067" class="img-fluid rounded-4" alt="">
                    </div>
                </div>

            </div>
        </div>

        <!-- Section - 5 / Research Guidance -->
        <div class="tab-pane fade" id="research-guidance" role="tabpanel">
            <div class="container my-5">
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <h3 class="card-title fw-bold mb-3">Research Guidance</h3>

                        <!-- Doctoral Research Guidance -->
                        <div class="mb-4">
                            <h5 class="fw-bold">Doctoral Research Guidance</h5>

                            <!-- Awarded Research Work -->
                            <div class="mt-3">
                                <h6 class="fw-semibold text-primary">Awarded Research Work</h6>
                                <ul class="ps-3">
                                    <li class="mb-2">
                                        <strong>Sisira Kumar Kapat</strong> — “An Intelligent Spyware Detection System based on Association Mining”<br>
                                        <small>Reg. No: 21/2016-17 | Notification No: 3530/EC-II (M.Phil./Ph.D.)/2022 dated 30/09/2022</small>
                                    </li>
                                    <li class="mb-2">
                                        <strong>Binayak Panda</strong> — “Designing an Optimizing Strategy for Malware Analysis using Innovative Techniques from Data Mining”<br>
                                        <small>Reg. No: 65/2015-16 | Notification No: 2994/EC-II (M.Phil./Ph.D.)/2022 dated 30/08/2022</small>
                                    </li>
                                    <li class="mb-2">
                                        <strong>Om Prakash Samantray</strong> — “A Study to Develop a Knowledge Domain Analyzer using Data Mining Concepts for Malware Analysis”<br>
                                        <small>Reg. No: 67/2015-16 | Notification No: 1669/EC-II (M.Phil./Ph.D.)/2022 dated 31/05/2022</small>
                                    </li>
                                </ul>
                            </div>

                            <!-- Ongoing Research Work -->
                            <div class="mt-4">
                                <h6 class="fw-semibold text-primary">Ongoing Research Work</h6>
                                <ul class="ps-3">
                                    <li class="mb-2">
                                        <strong>Diptimayee Sahu</strong> — "Android Malware Detection using Deep Learning Approach"<br>
                                        <small>Reg. No: 11/U-2019</small>
                                    </li>
                                    <li class="mb-2">
                                        <strong>Dibas Kumar Hembram</strong> — “Stages of Heart Disease Prediction Applying Explainable Artificial Intelligence Techniques”<br>
                                        <small>Reg. No: 41/U-2020</small>
                                    </li>
                                    <li class="mb-2">
                                        <strong>Pragnya Das</strong> — "Hybrid Ensemble Deep Learning Approach for Detection of Cancer"<br>
                                        <small>Reg. No: 43/U-2020</small>
                                    </li>
                                    <li class="mb-2">
                                        <strong>Lalit Kumar Behera</strong> — "Enhancing Diagnostic Accuracy and Explainability in Medical Imaging with Deep Learning and XAI"<br>
                                        <small>Reg. No: 20/U-2020</small>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Master Degree Research Guidance -->
                        <div class="mt-4">
                            <h5 class="fw-bold">Master Degree Research Guidance</h5>
                            <ul class="ps-3">
                                <li class="mb-2">
                                    <strong>Laxminarayan Dash</strong> — “Sensor-Based Data Acquisition for CVD System”<br>
                                    <small>Reg. No: 01479/2019 | Roll No: 23COMP010</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Chinmaya Kumar Panda</strong> — “Designing Interface for Body Composition Analysis”<br>
                                    <small>Reg. No: 20277/2023 | Roll No: 23COMP006</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Beadprakasha Pattnaik</strong> — “Explainable AI and Counterfactuals in CVD System”<br>
                                    <small>Reg. No: 14651/2020 | Roll No: 23COMP002</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Mandakini Parida</strong> — “Model Development and Evaluation for CVD Prediction”<br>
                                    <small>Reg. No: 20282/2023 | Roll No: 23COMP006</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Ranjan Gouda</strong> — “System Design of CVD Risk Prediction System”<br>
                                    <small>Reg. No: 09456/2017 | Roll No: 23COMP019</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Nilanchala Nahak</strong> — “Database and Interface Design for CVD System”<br>
                                    <small>Reg. No: 21186/2023 | Roll No: 23COMP014</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Sritam Pradhan</strong> — “Input Interface Designing of Online Examination System”<br>
                                    <small>Reg. No: 00540/2019 | Roll No: 23COMP025</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Binayak Sethy</strong> — “Doctor Appointment Web APP”<br>
                                    <small>Reg. No: 20181/2020 | Roll No: 23COMP005</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Sudhir Bishoyi</strong> — “Output Interface Designing of Examination System”<br>
                                    <small>Reg. No: 44753/2020 | Roll No: 23COMP027</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Binayak Dash</strong> — “LingOLearn (Language Learning Web APP)”<br>
                                    <small>Reg. No: 06421/2020 | Roll No: 23COMP004</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Nayan Mahapatra</strong> — “XX”<br>
                                    <small>Reg. No: CC | Roll No: MTC116</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Ankita Sabata</strong> — “Android Malware Detection using Association Mining”<br>
                                    <small>Year: 2021</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Dipika Ratha</strong> — “Data mining methods to study malware behavior and their Specifications”<br>
                                    <small>Year: 2019</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Sapana Kumar Padhy</strong> — “Detection of malicious android application using permission Mapping”<br>
                                    <small>Year: 2019</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Sushree Smita Nanda</strong> — “A structural Analysis of android malware and its detection based on data mining approach”<br>
                                    <small>Year: 2019</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Sachin Kumar Patra</strong> — “Fine grained android malware detection using data mining”<br>
                                    <small>Year: 2019</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Mrutyunjaya Satapathy</strong> — “Applying data mining approach for threat analysis in android environment”<br>
                                    <small>Year: 2019</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Sashmita Kumari Panda</strong> — “A Study on Performance Evaluation of Classifiers in Malware Classification”<br>
                                    <small>Reg. No: 52/2016</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Alisha Padhy</strong> — “A Study and Analysis of Malware Security Threats and Risks Anatomy”<br>
                                    <small>Reg. No: 48/2016</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Diptimayee Sahu</strong> — “A Malware Detection model by EULA classification using Text Mining”<br>
                                    <small>Roll No: MTC116</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Manoswini Mohanty</strong> — “An Adware Detection System using Classification Mining”<br>
                                    <small>Reg. No: 30047/2015 | Roll No: MTC316</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Giribala Sahu</strong> — “A Study and Analysis of Trojan Horse using Classification”<br>
                                    <small>Reg. No: 49/2014 | Roll No: MTC1015</small>
                                </li>
                                <li class="mb-2">
                                    <strong>M. Soujanya</strong> — “A Study and Classification of Spyware using Detection Tree Analysis”<br>
                                    <small>Reg. No: 51/2014 | Roll No: MTC215</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Sasmita Kumari Choudhury</strong> — “A Comparative Study on Botnet using Classification Mining”<br>
                                    <small>Reg. No: 70/1995 | Roll No: MTC915</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Debasish Pradhan</strong> — “A Study and Classification of ROOTKITs Using Decision Tree Analysis”<br>
                                    <small>Reg. No: 46/2014 | Roll No: MTC315</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Sisira Kumar Kapat</strong> — “A Spyware Detection System with a Comparative Study of Spywares using Classification Rule Mining”<br>
                                    <small>Reg. No: 47/2013 | Roll No: MTC614</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Shasanka Sekhar Panda</strong> — “A Comparative Study and Performance Analysis of Adware Detection Technique using Classification Rule Mining”<br>
                                    <small>Reg. No: 3552/2006 | Roll No: MTC1214</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Ramakrushna Dash</strong> — “A Comparative Study of Worm Detection Techniques using Classification Rule Mining”<br>
                                    <small>Reg. No: 45/2013 | Roll No: MTC0114</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Mamarani Sahu</strong> — “A Key Logger Detection Architecture with Analysis of some classification algorithms using Key Logger data”<br>
                                    <small>Reg. No: 42/2013 | Roll No: MTC1514</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Chaitanya Patnaik</strong> — “A Study and Analysis on SQL Injection Attacking Process”<br>
                                    <small>Reg. No: 6147/1982</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Aratibala Sahu</strong> — “A Comprehensive Study and Analysis on Browser Hijackers Attacking Process”<br>
                                    <small>Reg. No: 2182/2012</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Sugyani Panigrahi</strong> — “A Study on Browser Hijackers Attacking Process”<br>
                                    <small>Reg. No: 2194/2012</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Jaya Panigrahi</strong> — “A Comprehensive Study and Analysis on Phishing Attacking Process”<br>
                                    <small>Reg. No: 128/2002</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Gayatri Kumari Panda</strong> — “A Study and Analysis on Exploit Attacking Process”<br>
                                    <small>Reg. No: 2185/2012</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Prasanta Kumar Panda</strong> — “A Comprehensive Study and Analysis on Backdoor Attacking Process”<br>
                                    <small>Reg. No: 2190/2012</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Sreemayee Padhi</strong> — “A Study and Analysis on Adware Attacking Process”<br>
                                    <small>Reg. No: 2193/2012</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Deeptimayee Dash</strong> — “A Study on Machine Learning Approaches for Malware Analysis”<br>
                                    <small>Reg. No: 2184/2012</small>
                                </li>
                                <li class="mb-2">
                                    <strong>M. Biswajit</strong> — “A Study on Trojan Attacking Process”<br>
                                    <small>Reg. No: 2186/2012</small>
                                </li>
                                <li class="mb-2">
                                    <strong>M. Venkata Laxmi Srinivas</strong> — “A Study and Analysis on Botnet Attacking Process”<br>
                                    <small>Reg. No: 2187/2012</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Ranjeeta Kumbhar</strong> — “A Study and Analysis on Spyware Attacking Process for Malware Detection”<br>
                                    <small>Reg. No: 2191/2012</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Swagatika Kar</strong> — “A Study on Data Mining Approaches for Malware Analysis”<br>
                                    <small>Reg. No: 2195/2012</small>
                                </li>
                                <li class="mb-2">
                                    <strong>Uma Shankar Mohanty</strong> — “An Exhaustive Study on Keylogger Attacking Process”<br>
                                    <small>Reg. No: 2196/2012</small>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Section - 6 / Consultancy Services -->
        <div class="tab-pane fade" id="consultancy" role="tabpanel">
            <div class="container my-5">
                <div class="row gy-4">
                    <div class="col-lg-6 content aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                        <h3>Consultancy Services</h3>
                        <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore
                            magna aliqua.
                        </p>
                        <ul>
                            <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
                            </li>
                            <li><i class="bi bi-check2-all"></i> <span>Duis aute irure dolor in reprehenderit in voluptate
                                    velit.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                                    aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla
                                    pariatur.</span></li>
                        </ul>
                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
                        </p>
                    </div>
                    <div class="col-lg-6 position-relative align-self-start aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                        <img src="https://www.sample-videos.com/img/Sample-jpg-image-10mb.jpg" class="img-fluid rounded-4" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Section - 7 / Participation in Seminars and Conferences -->
    <section>
        <div class="card container shadow-sm pt-5">
            <div class="row g-0">
                <div class="col-md-5 text-center">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/research_seminar.jpg" class="img-fluid rounded-4 w-75" alt="Seminar/Conference Participation">
                </div>
                <div class="col-md-7 align-content-center">
                    <div class="card-body">
                        <h4 class="card-title fw-bold">Participation in Seminars & Conferences</h4>
                        <p class="card-text text-muted text-justify">
                            Engaged in various international and national conferences, seminars, and workshops on cutting-edge technologies and academic advancements, showcasing active involvement in the global research and academic community.
                        </p>
                        <button class="btn btn-outline-success" type="button" data-bs-toggle="collapse" data-bs-target="#conferenceDetails">
                            View Participation Details
                        </button>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="container p-5">

                        <div class="collapse mt-3" id="conferenceDetails">
                            <h6 class="fw-bold">International</h6>
                            <hr class="mb-2">
                            <ul class="small ps-3 mb-4">
                                <li class="mb-2">Participated in the <strong>5th International Conference on Machine Learning, Internet of Things and Big Data (ICMIB-2025)</strong>, organized by the Department of Computer Science Engineering, Parala Maharaja Engineering College, Berhampur, during 4th–6th April 2025, with publication support from Springer.</li>
                                <li class="mb-2">Participated in the <strong>UGC-sponsored International Conference</strong> on “Cross Cultural Dimensions of Management: Issues and Challenges in the Era of Globalization,” organized by the Department of Business Administration, Berhampur University, Berhampur, Odisha, on 24th–25th November 2016.</li>
                                <li class="mb-2">Participated in the <strong>UGC-sponsored International Conference on Analysis and Applications (ICAA-2012)</strong>, organized by the Department of Mathematics, Berhampur University, Odisha, on 20th–21st July 2012.</li>
                                <li class="mb-2">Participated in the <strong>International Conference on Wireless Technology: Current Issues and Applications</strong>, organized by the Regional College of Management, Bhubaneswar, Odisha, on 14th July 2007.</li>
                            </ul>

                            <h6 class="fw-bold mt-4">National</h6>
                            <hr class="mb-2">
                            <ul class="small mb-3 ps-3">
                                <li class="mb-2">Participated in <strong>DST-Sponsored offline State-Level Workshop (Orientation and Sensitization Programme)</strong> on "Funding Landscapes" organized by Berhampur University, Berhampur, Odisha on 14th and 15th December 2024.</li>
                                <li class="mb-2">Participated and presented a paper in the <strong>National Seminar on “Emerging Applications of Artificial Intelligence and Data Science (NSEAAIDS-2023)”</strong> organized by P.G. Department of Computer Science, Berhampur University, Odisha on 26th–27th September 2023.</li>
                                <li class="mb-2">Participated in <strong>World Bank OHEPEE Project Sponsored Webinar</strong> on “Recent Advances in Emerging Electronics” organized by P.G. Department of Electronic Science & Technology, Berhampur University, Odisha on 22nd–23rd February 2022 (online mode).</li>
                                <li class="mb-2">Participated as a <strong>Session Chair</strong> for the topic “Edge Computing - An Emerging Paradigm of Cloud Computing” in the <strong>National Webinar on "Edge Computing and Emerging Security Technologies"</strong> organized by P.G. Department of Computer Science, Berhampur University, Odisha on 9th October 2021 (Saturday) through online mode.
                                    <br><small class="text-primary">[<a href="https://meet.google.com/zjw-jhxk-csk" target="_blank">Meet Link</a>]</small>
                                </li>
                                <li class="mb-2">Participated in <strong>UGC-sponsored National Seminar on Advances in ICT (NSAICT-2013)</strong> and presented “A Survey on Vulnerability Management for Web Security” at P.G. Department of Computer Science, Berhampur University, Odisha on 8th–9th Feb 2013.</li>
                                <li class="mb-2">Participated in <strong>UGC-sponsored National Seminar on Advances in ICT (NSAICT-2013)</strong> and presented “A Review of Vulnerability in Mobile and Wireless Security” at P.G. Department of Computer Science, Berhampur University, Odisha on 8th–9th Feb 2013.</li>
                                <li class="mb-2">Participated in <strong>National Seminar on Advancement in IT – Its Role for Protection of Environment-Vision 2020</strong> and presented “Trust Evaluation Mechanism in Ad Hoc Social Network using Communication Data Value” at Rajdhani Engineering College, Bhubaneswar, Odisha on 21st February 2008.</li>
                                <li class="mb-2">Participated and presented in <strong>UGC-sponsored National Seminar on “Advances in Information and Communication Technology”</strong> at Berhampur University, Odisha on 8th–9th February 2013.</li>
                                <li class="mb-2">Participated in the <strong>Software Freedom Day’09 Workshop</strong> organized in collaboration with CDAC Kolkata, deeprootlinux Bengaluru, and NRCFOSS at Roland Institute of Technology for Open Source Software from 19th to 21st September 2009.</li>
                                <li class="mb-2">Participated in the <strong>National Conference on “Current Trend of Information and Technology (NCIT-2007)”</strong>, sponsored by AICTE, New Delhi and organized by Krupajal Engineering College, Bhubaneswar on 16th–17th May 2007.</li>
                                <li class="mb-2">Participated in the <strong>Seminar on “Virtual Instrumentation”</strong> jointly organized by Roland Institute of Technology, Berhampur and Trident Techlabs, New Delhi on 3rd August 2007.</li>
                                <li class="mb-2">Participated and presented in <strong>National Conference (BITCON-2007)</strong> on “Innovative Information Technologies and Secure Transactions,” organized by the Department of IT, Bhilai Institute of Technology, Durg on 16th–17th March 2007.</li>
                                <li class="mb-2">Participated in the <strong>National Conference on TECHNOLOGIA-2007</strong>, organized by M.P. Christian College of Engineering and Technology, Bhilai, Chhattisgarh on 2nd–3rd March 2007.</li>
                                <li class="mb-2">Participated in <strong>ISTE-sponsored National Conference on Intelligent Systems (NCIS-07)</strong> organized by the Institute of Advanced Computer and Research, Rayagada, Odisha on 17th–18th February 2007.</li>
                                <li class="mb-2">Participated and presented in <strong>National Conference on “Innovative Computational Intelligence and Security Systems”</strong> organized by the CSE, IT, and MCA departments of Sona College of Technology, Salem, Tamil Nadu on 2nd–3rd February 2007.</li>
                                <li class="mb-2">Participated in panel discussion in <strong>AICTE-sponsored National Seminar on “Recent Advances in Certain Selected Areas of Computer Security (RACSACS)”</strong> at Dr. B.C. Roy Engineering College, Durgapur from 3rd to 5th November 2006.</li>
                                <li class="mb-2">Participated in the <strong>All India MCA Meet, RELATIONS’97</strong>, organized by the Department of Computer and Information Sciences, University of Hyderabad from 7th to 9th March 1997.</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Accademic Profile Section -->
    <section>
        <div class="team-boxed">
            <div class="container">
                <div class="intro">
                    <h2 class="text-center">Academic Identity</h2>
                    <hr class="mb-4">
                </div>
                <div class="row g-3 justify-content-start flex-wrap">

                    <!-- Item - 1: Vidwan-ID -->
                    <div class="col-sm-6 col-md-4 col-lg-2 item mb-3">
                        <a href="https://vidwan.inflibnet.ac.in/profile/161197" target="_blank" class="text-decoration-none">
                            <div class="px-2 py-4 text-white rounded-3 bg-primary text-center">
                                <i class="fa fa-id-card fa-2x mb-2"></i>
                                <h5 class="name text-white mt-2">Vidwan-ID</h5>
                                <small class="title">161197</small>
                            </div>
                        </a>
                    </div>

                    <!-- Item - 2: ORCID ID -->
                    <div class="col-sm-6 col-md-4 col-lg-2 item mb-3">
                        <a href="https://orcid.org/0000-0002-6005-687X" target="_blank" class="text-decoration-none">
                            <div class="px-2 py-4 text-white rounded-3 bg-secondary text-center">
                                <i class="fa fa-user-circle fa-2x mb-2"></i>
                                <h5 class="name text-white mt-2">ORCID ID</h5>
                                <small class="title">0000-0002-6005-687X</small>
                            </div>
                        </a>
                    </div>

                    <!-- Item - 3: SCOPUS ID -->
                    <div class="col-sm-6 col-md-4 col-lg-2 item mb-3">
                        <a href="https://www.scopus.com/authid/detail.uri?authorId=57202509897" target="_blank" class="text-decoration-none">
                            <div class="px-2 py-4 text-white rounded-3 bg-success text-center">
                                <i class="fa fa-database fa-2x mb-2"></i>
                                <h5 class="name text-white mt-2">SCOPUS ID</h5>
                                <small class="title">57202509897</small>
                            </div>
                        </a>
                    </div>

                    <!-- Item - 4: Researcher ID -->
                    <div class="col-sm-6 col-md-4 col-lg-2 item mb-3">
                        <a href="https://www.researchgate.net/profile/Satya-Tripathy" target="_blank" class="text-decoration-none">
                            <div class="px-2 py-4 text-white rounded-3 bg-info text-center">
                                <i class="fa fa-flask fa-2x mb-2"></i>
                                <h5 class="name text-white mt-2">Researcher ID</h5>
                                <small class="title">Satya Tripathy</small>
                            </div>
                        </a>
                    </div>

                    <!-- Item - 5: Google Scholar ID -->
                    <div class="col-sm-6 col-md-4 col-lg-2 item mb-3">
                        <a href="https://scholar.google.com/citations?hl=en&user=KJJrtPEAAAAJ" target="_blank" class="text-decoration-none">
                            <div class="px-2 py-4 text-white rounded-3 bg-danger text-center">
                                <i class="fa fa-graduation-cap fa-2x mb-2"></i>
                                <h5 class="name text-white mt-2">Google Scholar</h5>
                                <small class="title">KJJrtPEAAAAJ</small>
                            </div>
                        </a>
                    </div>

                    <!-- Item - 6: Microsoft Academic -->
                    <div class="col-sm-6 col-md-4 col-lg-2 item mb-3">
                        <a href="https://academic.microsoft.com/author/2790857415/publication/search?q=Satya%20Narayan%20Tripathy&qe=Composite(AA.AuId%253D2790857415)&f=&orderBy=0&paperId=2907151249" target="_blank" class="text-decoration-none">
                            <div class="px-2 py-4 text-white rounded-3 bg-warning text-center">
                                <i class="fa fa-laptop fa-2x mb-2"></i>
                                <h5 class="name text-white mt-2">Microsoft Academic</h5>
                                <small class="title">2790857415</small>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>

</main>
<?php get_footer(); ?>