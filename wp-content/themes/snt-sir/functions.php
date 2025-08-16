<?php
function mytheme_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'mytheme_setup');

function mytheme_enqueue_assets()
{
    wp_enqueue_style('main-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_assets');

// ========= Start: POST function to store the data in Post of WP-ADMIN =========
function register_contact_message_cpt()
{
    register_post_type('contact_message', [
        'labels' => [
            'name' => 'Contact Messages',
            'singular_name' => 'Contact Message'
        ],
        'public' => false,
        'show_ui' => true, // ✅ important to make it visible in admin
        'menu_icon' => 'dashicons-email',
        'supports' => ['title', 'editor'],
    ]);
}
add_action('init', 'register_contact_message_cpt');

// ========= End: POST function to store the data in Post of WP-ADMIN =========

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', [], null, true);
    wp_localize_script('main-js', 'myAjax', [
        'url' => admin_url('admin-ajax.php')
    ]);
});

// 
function add_custom_rewrite_rules()
{
    add_rewrite_rule(
        '^product/page/([0-9]+)/?',
        'index.php?pagename=product&paged=$matches[1]',
        'top'
    );
}
add_action('init', 'add_custom_rewrite_rules');

function add_paged_query_var($vars)
{
    $vars[] = 'paged';
    return $vars;
}
add_filter('query_vars', 'add_paged_query_var');

wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array(), null, true);


// ================== FRONT PAGE SLIDER CONTENT ==================
function get_slider_data()
{
    return [
        // slider 1
        [
            'image' => get_template_directory_uri() . '/assets/img/carousel/carousel_1.png',
            'title' => 'Engaging, Sharing, and Growing Together',
            'description' => 'Whether it\'s speaking at conferences, developing e-learning content, or being part of academic committees — I believe in contributing beyond teaching and research. I’m always eager to learn, share, and grow with the academic community.',
            'button_name' => 'Explore My Activities',
            'button_link' => '#'
        ],
        // slider 2
        [
            'image' => get_template_directory_uri() . '/assets/img/carousel/carousel_2.png',
            'title' => 'Passionate About Teaching and Shaping Future Minds',
            'description' => 'With years of experience in Computer Science education, I’ve had the privilege of guiding students through both foundational concepts and emerging technologies. My work includes curriculum design, academic mentoring, and contributing to institutional growth.',
            'button_name' => 'View My Teaching Journey',
            'button_link' => '#'
        ],
        // slider 3
        [
            'image' => get_template_directory_uri() . '/assets/img/carousel/carousel_3.png',
            'title' => 'Exploring Ideas, Solving Problems, Sharing Knowledge',
            'description' => 'Research is a core part of my academic life. I’ve published in journals, contributed to books, led research projects, and supervised student researchers. My work reflects a commitment to pushing boundaries and staying curious.',
            'button_name' => 'See My Research Work',
            'button_link' => '#'
        ],
        // slider 4
        [
            'image' => get_template_directory_uri() . '/assets/img/carousel/carousel_4.png',
            'title' => 'Engaging, Sharing, and Growing Together',
            'description' => 'Whether it\'s speaking at conferences, developing e-learning content, or being part of academic committees — I believe in contributing beyond teaching and research. I’m always eager to learn, share, and grow with the academic community.',
            'button_name' => 'Explore My Activities',
            'button_link' => '#'
        ],
        // slider 5
        [
            'image' => get_template_directory_uri() . '/assets/img/carousel/carousel_5.png',
            'title' => 'Passionate About Teaching and Shaping Future Minds',
            'description' => 'With years of experience in Computer Science education, I’ve had the privilege of guiding students through both foundational concepts and emerging technologies. My work includes curriculum design, academic mentoring, and contributing to institutional growth.',
            'button_name' => 'View My Teaching Journey',
            'button_link' => '#'
        ],
        // slider 6
        [
            'image' => get_template_directory_uri() . '/assets/img/carousel/carousel_6.png',
            'title' => 'Exploring Ideas, Solving Problems, Sharing Knowledge',
            'description' => 'Research is a core part of my academic life. I’ve published in journals, contributed to books, led research projects, and supervised student researchers. My work reflects a commitment to pushing boundaries and staying curious.',
            'button_name' => 'See My Research Work',
            'button_link' => '#'
        ],
        // slider 7
        [
            'image' => get_template_directory_uri() . '/assets/img/carousel/carousel_7.png',
            'title' => 'Engaging, Sharing, and Growing Together',
            'description' => 'Whether it\'s speaking at conferences, developing e-learning content, or being part of academic committees — I believe in contributing beyond teaching and research. I’m always eager to learn, share, and grow with the academic community.',
            'button_name' => 'Explore My Activities',
            'button_link' => '#'
        ],
        // slider 8
        [
            'image' => get_template_directory_uri() . '/assets/img/carousel/carousel_8.png',
            'title' => 'Passionate About Teaching and Shaping Future Minds',
            'description' => 'With years of experience in Computer Science education, I’ve had the privilege of guiding students through both foundational concepts and emerging technologies. My work includes curriculum design, academic mentoring, and contributing to institutional growth.',
            'button_name' => 'View My Teaching Journey',
            'button_link' => '#'
        ],
        // slider 9
        [
            'image' => get_template_directory_uri() . '/assets/img/carousel/carousel_9.png',
            'title' => 'Exploring Ideas, Solving Problems, Sharing Knowledge',
            'description' => 'Research is a core part of my academic life. I’ve published in journals, contributed to books, led research projects, and supervised student researchers. My work reflects a commitment to pushing boundaries and staying curious.',
            'button_name' => 'See My Research Work',
            'button_link' => '#'
        ],
        // slider 10
        [
            'image' => get_template_directory_uri() . '/assets/img/carousel/carousel_10.png',
            'title' => 'Innovative Approaches to Education',
            'description' => 'As a forward-thinking educator, I strive to incorporate new teaching methods and technology to enhance student learning experiences.',
            'button_name' => 'Learn More',
            'button_link' => '#'
        ]
    ];
}

// ================== RESEARCH PAGE CONTENT ==================
function get_researches(): array
{
    return [
        'international_journal' => (object)[
            'title' => 'International Journal Publications',
            'description' => 'Below is a collection of peer-reviewed research articles published in international journals, encompassing advanced topics such as IoT-driven health monitoring, Android malware detection, quantum computing applications, and data mining for cybersecurity — demonstrating significant contributions to global scientific research.',
            'data' => [
                (object)[
                    'title' => 'IoT Driven Smart Health Monitoring for Heart Disease Prediction Using Quantum Kernel Enhanced Sardine Diffusion and CNN',
                    'authors' => 'Dibas Kumar Hembram, Satya Narayan Tripathy, CH Narsimha Reddy, Debabrata Dansana, Quadri Noorulhasan Naveed, Shafat Khan, Mohammed Kareemullah, and Addisu Frinjo Emma',
                    'journal' => 'Scientific Reports',
                    'details' => 'ISSN: 2045-2322, Volume 15, Article number: 17306, 2025',
                    'doi' => '10.1038/s41598-025-99990-x',
                    'doi_link' => 'https://doi.org/10.1038/s41598-025-99990-x',
                    'indexing' => 'SCI'
                ],
                (object)[
                    'title' => 'PSO-Optimized Deep Learning Framework for Android Malware Classification',
                    'authors' => 'Diptimayee Sahu, Satya Narayan Tripathy',
                    'journal' => 'International Journal on Information Technologies and Security, Journal of The Institution of Engineers (India): Series B (IEIB)',
                    'details' => '2025'
                ],
                (object)[
                    'title' => 'Strengthening Android Malware Detection: from Machine Learning to Deep Learning',
                    'authors' => 'Diptimayee Sahu, Satya Narayan Tripathy, and Sisira Kumar Kapat',
                    'journal' => 'International Journal of Computing and Digital Systems',
                    'details' => 'e-ISSN: 2210-142X, Volume 17, No. 1, pp. 1-11, 2025',
                    'doi' => '10.12785/ijcds/1571000835',
                    'doi_link' => 'http://dx.doi.org/10.12785/ijcds/1571000835',
                    'indexing' => 'Scopus'
                ],
                (object)[
                    'title' => 'A Comprehensive Exploration and Interpretability of Android Malware with Explainable Deep Learning Techniques',
                    'authors' => 'Diptimayee Sahu and Satya Narayan Tripathy',
                    'journal' => 'International Journal on Information Technologies and Security',
                    'details' => 'ISSN-No: 1313-8251, No. 4 (Volume 16), 2024, pp. 117–128',
                    'doi' => '10.59035/DOVZ3535',
                    'doi_link' => 'https://doi.org/10.59035/DOVZ3535',
                    'indexing' => 'ESCI'
                ],
                (object)[
                    'title' => 'An Opcode based Malware Detection Model using Supervised Learning algorithms',
                    'authors' => 'Om Prakash Samantray, Satya Narayan Tripathy',
                    'journal' => 'International Journal of Information Security and Privacy (IJISP), IGI Global',
                    'details' => 'ISSN: 1930-1650, EISSN: 1930-1669, Volume 15, Issue 4, 2021',
                    'doi' => '10.4018/IJISP.2021100102',
                    'doi_link' => 'https://www.igi-global.com/gateway/article/289818',
                    'indexing' => 'Scopus & ESCI'
                ],
                (object)[
                    'title' => 'Detection of Anomalous In-Memory Process based on DLL Sequence',
                    'authors' => 'Binayak Panda, Satya Narayan Tripathy',
                    'journal' => 'International Journal of Advanced Computer Science and Applications (IJACSA)',
                    'details' => 'Volume 11 Issue 10, 2020; Print ISSN: 2158-107X; Online ISSN: 2156-5570; pp. 185–194',
                    'doi' => '10.14569/IJACSA.2020.0111025',
                    'doi_link' => 'http://dx.doi.org/10.14569/IJACSA.2020.0111025',
                    'indexing' => 'Web of Science, ESCI, Scopus'
                ],
                (object)[
                    'title' => 'Analysis of Statements of Software Based on the Prioritization Strategy of Test Cases',
                    'authors' => 'Sasmita Padhy, Satya Narayan Tripathy, Sisira Kumar Kapat, Susanta Kumar Das',
                    'journal' => 'International Journal of Innovative Technology and Exploring Engineering (IJITEE)',
                    'details' => 'ISSN: 2278-3075, Volume-9, Issue-5, pp 618-621, March 2020',
                    'doi' => '10.35940/ijitee.E2479.039520',
                    'indexing' => 'Scopus'
                ],
                (object)[
                    'title' => 'An Optimal Receive Antenna Selection Algorithm using GA in MIMO Communication System',
                    'authors' => 'Sasmita Padhy, Satya Narayan Tripathy, Sisira Kumar Kapat, Susanta Kumar Das',
                    'journal' => 'International Journal of Innovative Technology and Exploring Engineering (IJITEE)',
                    'details' => 'ISSN: 2278-3075, Volume-9, Issue-5, pp 630-633, March 2020',
                    'doi' => '10.35940/ijitee.E2502.039520',
                    'indexing' => 'Scopus'
                ],
                (object)[
                    'title' => 'Classification of Spyware Affected files using Data Mining Techniques',
                    'authors' => 'D Anil Kumar, Sisira Kumar Kapat, Susanta Kumar Das, Satya Narayan Tripathy',
                    'journal' => 'International Journal of Recent Technology and Engineering (IJRTE)',
                    'details' => 'ISSN: 2277-3878, Volume-8 Issue-2S6, July 2019, pp 462-466',
                    'indexing' => 'Scopus'
                ],
                (object)[
                    'title' => 'A Data Mining Based Malware Detection Model using Distinct API Call Sequences',
                    'authors' => 'Om Prakash Samantray, Satya Narayana Tripathy, Susant Kumar Das',
                    'journal' => 'International Journal of Innovative Technology and Exploring Engineering (IJITEE)',
                    'details' => 'ISSN: 2278-3075, Volume-8 Issue-7, May 2019, pp. 896-902',
                    'doi_link' => 'https://www.ijitee.org/wp-content/uploads/papers/v8i7/F3533048619.pdf',
                    'indexing' => 'Scopus'
                ],
                (object)[
                    'title' => 'A study to Understand Malware Behavior through Malware Analysis',
                    'authors' => 'Om Prakash Samantray, Satya Narayana Tripathy, Susant Kumar Das',
                    'journal' => 'IEEE International Conference on System, Computation, Automation and Networking (ICSCAN)-2019',
                    'details' => 'Electronic ISBN: 978-1-7281-1525-2, PoD ISBN: 978-1-7281-1526-9, pp. 1-5',
                    'doi' => '10.1109/ICSCAN.2019.8878680',
                    'doi_link' => 'https://ieeexplore.ieee.org/document/8878680',
                    'indexing' => 'Scopus'
                ],
                (object)[
                    'title' => 'A Theoretical Feature-wise Study of Malware Detection Techniques',
                    'authors' => 'Om Prakash Samantray, Satya Narayana Tripathy, Susant Kumar Das',
                    'journal' => 'International Journal of Computer Sciences and Engineering (Open Access)',
                    'details' => 'E-ISSN: 2347-2693, Vol.-6, Issue-12, Dec 2018, pp. 879-887'
                ],
                (object)[
                    'title' => 'Morphological Malware Detection: An API Sequence Mining With LCS Based Voting Algorithm',
                    'authors' => 'Binayak Panda, Satya Narayan Tripathy',
                    'journal' => 'Journal of Advance Research in Dynamical & Control Systems',
                    'details' => 'Vol. 10, Special Issue. 06, pp. 625-633, 2018, ISSN: 1943-023X',
                    'indexing' => 'Scopus'
                ],
                (object)[
                    'title' => 'Malware Architectural View with Performance Analysis in Network at its Activation State',
                    'authors' => 'Sisira Kumar Kapat, Satya Narayan Tripathy',
                    'journal' => 'International Conference on Cognitive Informatics & Soft Computing (CISC-2017)',
                    'details' => 'eBook ISBN 978-981-13-0617-4, Series ISSN 2194-5357',
                    'indexing' => 'Scopus'
                ],
                (object)[
                    'title' => 'A Comprehensive Study of Malware Propagation using Geometric Progression',
                    'authors' => 'Satya Narayan Tripathy, Sisira Kumar Kapat, Raghunath Patro, Susanta Kumar Das',
                    'journal' => 'International Conference on Computational Intelligence and Networks',
                    'details' => 'ISBN:978-1-5386-2529-3, ISSN: 2375-5822, Pages: 73-77, 2017',
                    'doi' => '10.1109/CINE.2017.31',
                    'indexing' => 'Scopus, Web of Science'
                ],
                (object)[
                    'title' => 'Static Malware Analysis : A Case Study',
                    'authors' => 'Satya Narayan Tripathy, Sisira Kumar Kapat, M. Soujanya, Susanta Kumar Das',
                    'journal' => 'International Journal of Scientific Research in Computer Science, Engineering and Information Technology (IJSRCSEIT)',
                    'details' => 'ISSN : 2456-3307, Volume 2, Issue 7, pp.135-141, September-2017'
                ],
                (object)[
                    'title' => 'A Spyware Detection System with a Comparative Study of Spywares using Classification Rule Mining',
                    'authors' => 'Satya Narayan Tripathy, Sisira Kumar Kapat, Susanta Kumar Das, Binayak Panda',
                    'journal' => 'International Journal of Scientific & Engineering Research',
                    'details' => 'ISSN 2229-5518, Volume 7, Issue 3, March-2016, pp. 179-184',
                    'indexing' => 'UGC Approved'
                ],
                (object)[
                    'title' => 'A Comparative Study on Serial and Parallel Web Content Mining',
                    'authors' => 'Binayak Panda, Dr. Satya Narayan Tripathy, Dr. Nilambar Sethi, Om Prakash Samantray',
                    'journal' => 'International Journal of Advanced Networking and Applications',
                    'details' => 'ISSN: 0975-0282, Volume 7, Issue 5, 2016, pp. 2882-2886',
                    'indexing' => 'UGC Approved'
                ],
                (object)[
                    'title' => 'CAM: A Combined Analytical Model for Efficient Malware Classification',
                    'authors' => 'Om Prakash Samantray, Satya Narayan Tripathy, Susant Kumar Das, Binayak Panda',
                    'journal' => 'International Journal of Advanced Research in Computer and Communication Engineering',
                    'details' => 'ISSN: 2278-1021, Vol. 5, Issue 1, Jan 2016, pp. 286-290',
                    'doi' => '10.17148/IJARCCE.2016.5171'
                ],
                (object)[
                    'title' => 'A Study on Malware Taxonomy and Malware Detection Techniques',
                    'authors' => 'Satya Narayan Tripathy, Susanta Kumar Das, Brojo Kishore Mishra, Om Prakash Samantray',
                    'journal' => 'International Journal of Engineering Research & Technology (IJERT), TITCON-2015 Conference Proceedings',
                    'details' => 'ISSN: 2278-0181, 2015, pp. 266 – 273'
                ],
                (object)[
                    'title' => 'A Review on Vulnerability Management in Wireless Communication System',
                    'authors' => 'S. N. Tripathy, T. Mohan Rao',
                    'journal' => 'International Journal of Advanced Computer Research',
                    'details' => 'ISSN: 2249-7277, March 2013, pp. 71-75'
                ],
                (object)[
                    'title' => 'A Survey on Vulnerability Management for Web Security',
                    'authors' => 'Debendra Dhinda, S. N. Tripathy, Nikunja Kishore Sabat',
                    'journal' => 'International Journal of Advanced Computer Research',
                    'details' => 'ISSN: 2249-7277, March 2013, pp. 92-94'
                ],
                (object)[
                    'title' => 'Policy based Network Administration and Management',
                    'authors' => 'Susanta Kumar Das, Jagadish Panda, Satya Narayan Tripathy',
                    'journal' => 'IJCSNS International Journal of Computer Science and Network Security',
                    'details' => 'Vol.9 No.10, November 2012, pp. 121-130'
                ],
                (object)[
                    'title' => 'Designing A Trust Model for an Ad Hoc Social Network using Communication Data Value',
                    'authors' => 'S. N. Tripathy, S. K. Tripathy, S. K. Das',
                    'journal' => 'International Journal of Computer Science & Management Systems',
                    'details' => 'ISSN: 0975-5349, Vol.1(2), December 2009, pp. 85-89'
                ]
            ]
        ],

        'international_conference' => (object)[
            'title' => 'International Conference Proceedings',
            'description' => 'Below is a curated list of research publications presented at prominent international conferences and symposiums. These contributions span deep learning, cybersecurity, healthcare informatics, Android malware detection, and explainable AI...',
            'data' => [
                (object)[
                    'title' => 'Lung Cancer Prognosis using Deep Learning',
                    'authors' => 'Pragnya Das, Satya Narayan Tripathy',
                    'journal' => 'World Congress on Smart Computing (WCSC2024)',
                    'details' => 'April 2025, pp.147–155',
                    'doi' => '10.1007/978-981-97-9006-7_13'
                ],
                (object)[
                    'title' => 'Advancing Android Malware Detection: CNN-Based Image Analysis Framework',
                    'authors' => 'Diptimayee Sahu, Satya Narayan Tripathy',
                    'journal' => 'Proceedings of International Conference on Innovations in Data Analytics (ICIDA 2024), Lecture Notes in Networks and Systems, Volume 1408',
                    'details' => '2024, ISBN: 978-981-96-6296-8'
                ],
                (object)[
                    'title' => 'Class-Balanced Ensembled Framework for Android Malware Detection',
                    'authors' => 'Diptimayee Sahu, Satya Narayan Tripathy, Soujanya Morty',
                    'journal' => 'Smart Innovation, Systems and Technologies, Springer Book Series',
                    'details' => '2024'
                ],
                (object)[
                    'title' => 'Enhancing Transparency in Android Malware Detection Using Explainable SHAP-LIME Deep Learning Technique',
                    'authors' => 'Diptimayee Sahu, Satya Narayan Tripathy, Soujanya Morty',
                    'journal' => 'Studies in Smart Technologies, Springer Book Series',
                    'details' => '2024'
                ],
                (object)[
                    'title' => 'A Deep Learning Approach for Android Malware Detection over large Feature-set',
                    'authors' => 'Diptimayee Sahu, Satya Narayan Tripathy, Sisira Kumar Kapat, Soujanya Morty',
                    'journal' => 'IEEE World Conference on Applied Intelligence and Computing (AIC 2023)',
                    'details' => '2023'
                ],
                (object)[
                    'title' => 'A Comparative Analysis of Android Malware Detection Using Deep Learning',
                    'authors' => 'Diptimayee Sahu, Satya Narayan Tripathy, Sisira Kumar Kapat',
                    'journal' => 'Artificial Intelligence of Things. ICAIoT 2023. Communications in Computer and Information Science, vol 1929. Springer, Cham',
                    'details' => '2024',
                    'doi' => '10.1007/978-3-031-48774-3_7',
                    'doi_link' => 'https://doi.org/10.1007/978-3-031-48774-3_7'
                ],
                (object)[
                    'title' => 'A Deep Learning-Based Framework for Android Malware Family Classification',
                    'authors' => 'Diptimayee Sahu, Satya Narayan Tripathy, Sisira Kumar Kapat',
                    'journal' => 'Data Science and Applications. ICDSA 2023. Lecture Notes in Networks and Systems, vol 821. Springer, Singapore',
                    'details' => '2024',
                    'doi' => '10.1007/978-981-99-7814-4_27',
                    'doi_link' => 'https://doi.org/10.1007/978-981-99-7814-4_27'
                ],
                (object)[
                    'title' => 'Antral gastritis preliminary diagnosis by endoscopic image analysis using Deep learning approach',
                    'authors' => 'Lalit Kumar Behera, Satya Narayan Tripathy',
                    'journal' => 'International conference on cutting edge technology in computing, communication, and technology (ICCTCCI-2024)',
                    'details' => 'ISBN: 978-81-966964-1-2',
                    'indexing' => 'Scopus, Taylor & Francis'
                ],
                (object)[
                    'title' => 'Explainable Artificial Intelligence in designing a sustainable e-healthcare system',
                    'authors' => 'Lalit Kumar Behera, Satya Narayan Tripathy',
                    'journal' => 'International Conference on Artificial Intelligence of Things for Sustainability (AIoT4S-2024)',
                    'details' => 'ISBN: 978-93-6013-262-0, 2024'
                ],
                (object)[
                    'title' => 'Host Specific Outlier Detection Using Process Relation Semantics with Graph Mining',
                    'authors' => 'Binayak Panda, Satya Narayan Tripathy',
                    'journal' => 'International Conference on Data Science and Management- II (ICDSM-2021), Lecture Notes on Data Engineering and Communication Technologies, LNDECT Volume 86',
                    'details' => 'pp. 449–462, Feb 2022',
                    'doi' => '10.1007/978-981-16-5685-9_44',
                    'doi_link' => 'https://doi.org/10.1007/978-981-16-5685-9_44',
                    'indexing' => 'Scopus'
                ],
                (object)[
                    'title' => 'A study to Understand Malware Behavior through Malware Analysis',
                    'authors' => 'Om Prakash Samantray, Satya Narayana Tripathy, Susant Kumar Das',
                    'journal' => 'Proceedings of International Conference on Systems Computation Automation and Networking (ICSCAN-2019), IEEE',
                    'details' => 'ISBN: 978-1-7281-1524-5, 2019'
                ],
                (object)[
                    'title' => 'A survey on Malware Detection Approaches using EULA Analysis with Text Mining',
                    'authors' => 'Satya Narayan Tripathy, Sisira Kumar Kapat, D Anil Kumar, Mamata Nayak, Susanta Kumar Das',
                    'journal' => '2nd International Conference on Data Science and Business Analytics (ICDSBA 2018), IEEE',
                    'details' => 'ISBN:978-1-5386-8431-3, Pages: 517–522',
                    'doi' => '10.1109/ICDSBA.2018.00102',
                    'indexing' => 'Scopus, Web of Science'
                ]
            ]
        ],

        'national_journal' => (object)[
            'title' => 'National Journal Publications',
            'description' => 'Listed below are peer-reviewed research publications featured in reputed national journals...',
            'data' => [
                (object)[
                    'title' => 'A Survey on Enhancing Antral Gastritis Diagnosis Using Explainable Artificial Intelligence',
                    'authors' => 'Lalit Kumar Behera, Satya Narayan Tripathy',
                    'journal' => 'Research Journal of Berhampur University (RJBU)',
                    'details' => 'ISSN: 2250-1681, Volume-VIII, Dec 2024, pp. 21–25'
                ],
                (object)[
                    'title' => 'Comprehensive Literature Review for Developing a Hybrid Deep Learning Framework with Explainable AI for Cardiovascular Disease Prediction',
                    'authors' => 'Dibas Kumar Hembram, Satya Narayan Tripathy',
                    'journal' => 'Research Journal of Berhampur University (RJBU)',
                    'details' => 'ISSN: 2250-1681, Volume-VIII, Dec 2024, pp. 16–20'
                ],
                (object)[
                    'title' => 'Biomedical Signal Processing for ECG Classification to Detect Heart Disease using Deep Learning',
                    'authors' => 'Lalit Kumar Behera, Satya Narayan Tripathy',
                    'journal' => 'Research Journal of Berhampur University (RJBU)',
                    'details' => 'ISSN: 2250-1681, Volume-VIII, Dec 2024, pp. 26–29'
                ],
                (object)[
                    'title' => 'Enhancing Android Malware Detection and Interpretability Through Explainable Deep Learning Models',
                    'authors' => 'Diptimayee Sahu, Satya Narayan Tripathy, Sisira Kumar Kapat, M. Soujanya',
                    'journal' => 'Research Journal of Berhampur University (RJBU)',
                    'details' => 'ISSN: 2250-1681, Volume-VII, April 2024, pp. 14–22'
                ],
                (object)[
                    'title' => 'A Survey on Lung Cancer Forecasting using Deep Learning Techniques',
                    'authors' => 'Pragnya Das, Satya Narayan Tripathy',
                    'journal' => 'Research Journal of Berhampur University (RJBU)',
                    'details' => 'ISSN: 2250-1681, Volume-VII, April 2024, pp. 35–38'
                ],
                (object)[
                    'title' => 'Trust Evolution Mechanism in Ad Hoc Social Network using Intrusion Detection',
                    'authors' => 'S. N. Tripathy, B. K. Tripathy, G. N. Pradhan',
                    'journal' => 'SIDDHANT: A Journal of Decision Making',
                    'details' => 'Vol. 8(2&3), April–Sept 2008, pp. 67–72'
                ],
                (object)[
                    'title' => 'Possible Terrorization in Ad Hoc Social Networks',
                    'authors' => 'S. N. Tripathy, B. K. Tripathy, G. N. Pradhan',
                    'journal' => 'SIDDHANT: A Journal of Decision Making',
                    'details' => 'ISSN:0091/2002-TC, Vol. 7(2), April–June 2007, pp. 48–54'
                ],
            ],
        ],

        'national_conference' => (object)[
            'title' => 'National Conference Proceedings',
            'description' => 'This section showcases research papers presented at various esteemed national conferences and seminars...',
            'data' => [
                (object)[
                    'title' => 'Two Phase Malware Detection using API and Static System Event Properties',
                    'authors' => 'Sisira Kumar Kapat, Satya Narayan Tripathy, Susanta Kumar Das',
                    'journal' => 'NSIAIT-2019, Berhampur University, Odisha, India',
                    'details' => '15th–16th March 2019'
                ],
                (object)[
                    'title' => 'A System-centric Malware Detection Framework based on System’s Behavior',
                    'authors' => 'Om Prakash Samantray, Satya Narayan Tripathy, Susanta Kumar Das, Sisira Kumar Kapat',
                    'journal' => 'NSIAIT-2019, Berhampur University, Odisha, India',
                    'details' => '15th–16th March 2019'
                ],
                (object)[
                    'title' => 'Trust Evaluation Mechanism in Ad Hoc Social Network using Communication Data Value',
                    'authors' => 'S. N. Tripathy, B. K. Tripathy, S. K. Nahak, M. Pattnayak',
                    'journal' => 'National Seminar on IT – Vision 2020',
                    'details' => '21st February 2008, pp. 42–48'
                ],
                (object)[
                    'title' => 'Designing A Trust Model for the Human Interaction in an Ad Hoc Social Network using Weighted Statistical Data',
                    'authors' => 'S. N. Tripathy',
                    'journal' => 'BITCON’07, National Conference on Secure Transaction',
                    'details' => '16–17 March 2007, pp. 42–48'
                ],
                (object)[
                    'title' => 'Trust Evaluation Mechanism in Ad Hoc Social Network',
                    'authors' => 'S. N. Tripathy, B. K. Tripathy, S. K. Dash',
                    'journal' => 'NCIS’07, National Conference on Intelligence Systems',
                    'details' => '17–18 February 2007, pp. 65–71'
                ],
                (object)[
                    'title' => 'A Study of Some Threats and Attacks of Ad Hoc Social Networks',
                    'authors' => 'S. N. Tripathy',
                    'journal' => 'MPCCET',
                    'details' => '2–3 March 2007, Electronic-format publication'
                ],
                (object)[
                    'title' => 'Networks Security Model: An Incremental Approach to Network Security',
                    'authors' => 'S. N. Tripathy',
                    'journal' => 'National Seminar on Wireless Application Protocol (NSWAP), GIET Gunupur, Odisha',
                    'details' => '30 Sept – 1 Oct 2001'
                ],
                (object)[
                    'title' => 'Multilingual: The Next Generation Challenge',
                    'authors' => 'S. N. Tripathy',
                    'journal' => 'Relation ’97, All India MCA Meet, University of Hyderabad',
                    'details' => '7–9 March 1997'
                ],
            ]
        ],

    ];
}

// ================== BOOKS AND BOOK CHAPTER PAGE CONTENT ==================
function get_academic_data(): array
{
    return [

        // ✅ Books Chapter
        'books_chapter' => (object)[
            'title' => 'Book Chapters',
            'description' => 'The following book chapters reflect significant research contributions in the fields of
            Artificial Intelligence, Cybersecurity, IoT, Digital Health, and Sustainable Technologies. These
            chapters have been published by reputed publishers such as CRC Press, Springer, IGI Global, and
            Scrivener Publishing.',
            'image' => 'https://sample-files.com/downloads/images/jpg/landscape_hires_4000x2667_6.83mb.jpg',
            'data' => [
                (object)[
                    'authors' => 'Pragnya Das, Satya Narayan Tripathy, and Kali Prasad Rath',
                    'title'   => 'Artificial Intelligence-Based Medical Imaging for Cancer',
                    'journal' => 'ICORSVB-2025',
                    'details' => 'ISBN: 978-81-984602-3-3, pp. 71, Feb. 2025'
                ],
                (object)[
                    'authors' => 'Lalit Kumar Behera, Satya Narayan Tripathy, and Tumbanath Samantara',
                    'title'   => 'Integrating Deep Learning into Decision-Making Systems by Medical Image Analysis for Advanced Disease Diagnosis',
                    'journal' => 'ICORSVB-2025',
                    'details' => 'ISBN: 978-81-984602-3-3, pp. 61, Feb. 2025'
                ],
                (object)[
                    'authors' => 'Pragnya Das, Satya Narayan Tripathy',
                    'title'   => 'Analysis of CT Scan Lung Cancer Image for Early Prediction',
                    'journal' => 'SMSI-2024, CRC Press',
                    'details' => 'ISBN: 9781032980409, DOI: 10.1201/9781003596776-24, pp. 115-119'
                ],
                (object)[
                    'authors' => 'Lalit Kumar Behera, Satya Narayan Tripathy',
                    'title'   => 'e-healthcare system for skin care',
                    'journal' => 'SMSI-2024, CRC Press',
                    'details' => 'DOI: 10.1201/9781003596776-44, pp. 215-219'
                ],
                (object)[
                    'authors' => 'Diptimayee Sahu, Satya Narayan Tripathy, Sisira Kumar Kapat, Soujanya Morty',
                    'title'   => 'A DNN Approach to Design a Smart Security System for Android Platform',
                    'journal' => 'Sustainable Science and Intelligent Technologies for Societal Development, IGI Global',
                    'details' => 'ISBN13: 9798369311868, DOI: 10.4018/979-8-3693-1186-8.ch001, Pages: 21, 2023'
                ],
                (object)[
                    'authors' => 'Om Prakash Samantray, Satya Narayan Tripathy',
                    'title'   => 'An Efficient Hybrid Approach for Malware Detection using Frequent Opcodes and API Call Sequences',
                    'journal' => 'Lecture Notes in Electrical Engineering (LNEE, vol. 968), Springer',
                    'details' => 'DOI: 10.1007/978-981-19-7346-8_63, pp. 727–735, Feb. 2023'
                ],
                (object)[
                    'authors' => 'Om Prakash Samantray, Satya Narayana Tripathy',
                    'title'   => 'IoT-Malware Classification Model Using Byte Sequences and Supervised Learning Techniques',
                    'journal' => 'Lecture Notes in Networks and Systems, Springer',
                    'details' => 'DOI: 10.1007/978-981-16-0666-3_6, Vol. 201, pp. 51–60, June 2021'
                ],
                (object)[
                    'authors' => 'Satya Narayan Tripathy, Sisira Kumar Kapat, Susanta Kumar Das',
                    'title'   => 'Security Threats and Vulnerabilities in E-business',
                    'journal' => 'Cyber Security in Parallel and Distributed Computing, Scrivener Publishing',
                    'details' => 'Print ISBN: 9781119488057, Online ISBN: 9781119488330, pp. 51–59, 2019'
                ],
                (object)[
                    'authors' => 'Satya Narayan Tripathy, Sisira Kumar Kapat',
                    'title'   => 'UGC Regulations, 2016: A Step in the Right Direction for Qualitative Improvement of Research Scholars in India',
                    'journal' => 'Multidisciplinary eBook, B.R. International Publication House',
                    'details' => 'ISBN: 978-81-932419-8-1, pp. 144–148'
                ],
            ]
        ],

        // ✅ Books
        'books' => (object)[
            'title' => 'Books',
            'image' => 'https://www.sample-videos.com/img/Sample-jpg-image-10mb.jpg',
            'data' => [
                (object)[
                    'authors' => 'Satya Narayan Tripathy',
                    'title'   => 'Edge Computing',
                    'publisher' => 'Amazon Kindle Direct Publishing',
                    'details' => 'ISBN-13: 979-8292717096, ASIN: B0FJ28XG45, 319 pages'
                ],
                (object)[
                    'authors' => 'Satya Narayan Tripathy',
                    'title'   => 'Big Data Analytics',
                    'publisher' => 'Amazon Kindle Direct Publishing',
                    'details' => 'ISBN-13: 979-8292717096, ASIN: B0FJ28XG45, 319 pages'
                ],
                (object)[
                    'authors' => 'Satya Narayan Tripathy',
                    'title'   => 'Business Analytics and Data Science',
                    'publisher' => 'Amazon Kindle Direct Publishing',
                    'details' => 'ISBN-13: 979-8292717096, ASIN: B0FJ28XG45, 319 pages'
                ],
                (object)[
                    'authors' => 'Satya Narayan Tripathy',
                    'title'   => 'Cloud Computing',
                    'publisher' => 'Amazon Kindle Direct Publishing',
                    'details' => 'ISBN-13: 979-8292717096, ASIN: B0FJ28XG45, 319 pages'
                ],
                (object)[
                    'authors' => 'Satya Narayan Tripathy',
                    'title'   => 'Data Governance',
                    'publisher' => 'Amazon Kindle Direct Publishing',
                    'details' => 'ISBN-13: 979-8292717096, ASIN: B0FJ28XG45, 319 pages'
                ],
                (object)[
                    'authors' => 'Satya Narayan Tripathy',
                    'title'   => 'Explainable Artificial Intelligence (XAI)',
                    'publisher' => 'Amazon Kindle Direct Publishing',
                    'details' => 'ISBN-13: 979-8292717096, ASIN: B0FJ28XG45, 319 pages'
                ],
                (object)[
                    'authors' => 'Satya Narayan Tripathy',
                    'title'   => 'Fog Computing',
                    'publisher' => 'Amazon Kindle Direct Publishing',
                    'details' => 'ISBN-13: 979-8292717096, ASIN: B0FJ28XG45, 319 pages'
                ],
                (object)[
                    'authors' => 'Satya Narayan Tripathy',
                    'title'   => 'Internet of Behaviour',
                    'publisher' => 'Amazon Kindle Direct Publishing',
                    'details' => 'ISBN-13: 979-8292717096, ASIN: B0FJ28XG45, 319 pages'
                ],
                (object)[
                    'authors' => 'Satya Narayan Tripathy',
                    'title'   => 'Wearable Technology',
                    'publisher' => 'Amazon Kindle Direct Publishing',
                    'details' => 'ISBN-13: 979-8292717096, ASIN: B0FJ28XG45, 319 pages'
                ],
                (object)[
                    'authors' => 'Satya Narayan Tripathy',
                    'title'   => 'Digital Twins Technology',
                    'publisher' => 'Amazon Kindle Direct Publishing',
                    'details' => 'ISBN-13: 979-8292717096, ASIN: B0FJ28XG45, 319 pages'
                ],
                (object)[
                    'authors' => 'Satya Narayan Tripathy',
                    'title'   => 'Federated Learning',
                    'publisher' => 'Amazon Kindle Direct Publishing',
                    'details' => 'ISBN-13: 979-8292717096, ASIN: B0FJ28XG45, 319 pages'
                ],
            ]
        ],

        // // ✅ Research Guidance
        // 'research_guidance' => (object)[
        //     'title' => 'Research Guidance',
        //     'sections' => [

        //         // Doctoral
        //         (object)[
        //             'title' => 'Doctoral Research Guidance',
        //             'subsections' => [
        //                 (object)[
        //                     'title' => 'Awarded Research Work',
        //                     'data' => [
        //                         (object)[
        //                             'name' => 'Sisira Kumar Kapat',
        //                             'topic' => 'An Intelligent Spyware Detection System based on Association Mining',
        //                             'details' => 'Reg. No: 21/2016-17 | Notification No: 3530/EC-II (M.Phil./Ph.D.)/2022 dated 30/09/2022'
        //                         ],
        //                         (object)[
        //                             'name' => 'Binayak Panda',
        //                             'topic' => 'Designing an Optimizing Strategy for Malware Analysis using Innovative Techniques from Data Mining',
        //                             'details' => 'Reg. No: 65/2015-16 | Notification No: 2994/EC-II (M.Phil./Ph.D.)/2022 dated 30/08/2022'
        //                         ],
        //                         (object)[
        //                             'name' => 'Om Prakash Samantray',
        //                             'topic' => 'A Study to Develop a Knowledge Domain Analyzer using Data Mining Concepts for Malware Analysis',
        //                             'details' => 'Reg. No: 67/2015-16 | Notification No: 1669/EC-II (M.Phil./Ph.D.)/2022 dated 31/05/2022'
        //                         ],
        //                     ]
        //                 ],
        //                 (object)[
        //                     'title' => 'Ongoing Research Work',
        //                     'data' => [
        //                         (object)[
        //                             'name' => 'Diptimayee Sahu',
        //                             'topic' => 'Android Malware Detection using Deep Learning Approach',
        //                             'details' => 'Reg. No: 11/U-2019'
        //                         ],
        //                         (object)[
        //                             'name' => 'Dibas Kumar Hembram',
        //                             'topic' => 'Stages of Heart Disease Prediction Applying Explainable Artificial Intelligence Techniques',
        //                             'details' => 'Reg. No: 41/U-2020'
        //                         ],
        //                         (object)[
        //                             'name' => 'Pragnya Das',
        //                             'topic' => 'Hybrid Ensemble Deep Learning Approach for Detection of Cancer',
        //                             'details' => 'Reg. No: 43/U-2020'
        //                         ],
        //                         (object)[
        //                             'name' => 'Lalit Kumar Behera',
        //                             'topic' => 'Enhancing Diagnostic Accuracy and Explainability in Medical Imaging with Deep Learning and XAI',
        //                             'details' => 'Reg. No: 20/U-2020'
        //                         ],
        //                     ]
        //                 ],
        //             ]
        //         ],

        //         // Masters
        //         (object)[
        //             'title' => 'Master Degree Research Guidance',
        //             'data' => [
        //                 (object)[
        //                     'name' => 'Laxminarayan Dash',
        //                     'topic' => 'Sensor-Based Data Acquisition for CVD System',
        //                     'details' => 'Reg. No: 01479/2019 | Roll No: 23COMP010'
        //                 ],
        //                 (object)[
        //                     'name' => 'Chinmaya Kumar Panda',
        //                     'topic' => 'Designing Interface for Body Composition Analysis',
        //                     'details' => 'Reg. No: 20277/2023 | Roll No: 23COMP006'
        //                 ],
        //                 (object)[
        //                     'name' => 'Beadprakasha Pattnaik',
        //                     'topic' => 'Explainable AI and Counterfactuals in CVD System',
        //                     'details' => 'Reg. No: 14651/2020 | Roll No: 23COMP002'
        //                 ],
        //                 (object)[
        //                     'name' => 'Mandakini Parida',
        //                     'topic' => 'Model Development and Evaluation for CVD Prediction',
        //                     'details' => 'Reg. No: 20282/2023 | Roll No: 23COMP006'
        //                 ],
        //             ]
        //         ]
        //     ]
        // ],
    ];
}

// ================== BOOKS AND BOOK CHAPTER PAGE CONTENT ==================
function get_research_guidance()
{
    return [

        "doctoral_awarded" => [
            [
                "name" => "Sisira Kumar Kapat",
                "title" => "An Intelligent Spyware Detection System based on Association Mining",
                "registration_no" => "21/2016-17",
                "notification" => "3530/EC-II (M.Phil./Ph.D.)/2022 dated 30/09/2022"
            ],
            [
                "name" => "Binayak Panda",
                "title" => "Designing an Optimizing Strategy for Malware Analysis using Innovative Techniques from Data Mining",
                "registration_no" => "65/2015-16",
                "notification" => "2994/EC-II (M.Phil./Ph.D.)/2022 dated 30/08/2022"
            ],
            [
                "name" => "Om Prakash Samantray",
                "title" => "A Study to Develop a Knowledge Domain Analyzer using Data Mining Concepts for Malware Analysis",
                "registration_no" => "67/2015-16",
                "notification" => "1669/EC-II (M.Phil./Ph.D.)/2022 dated 31/05/2022"
            ]
        ],

        "doctoral_ongoing" => [
            [
                "name" => "Diptimayee Sahu",
                "title" => "Android Malware Detection using Deep Learning Approach",
                "registration_no" => "11/U-2019"
            ],
            [
                "name" => "Dibas Kumar Hembram",
                "title" => "Stages of Heart Disease Prediction Applying Explainable Artificial Intelligence Techniques",
                "registration_no" => "41/U-2020"
            ],
            [
                "name" => "Pragnya Das",
                "title" => "Hybrid Ensemble Deep Learning Approach for Detection of Cancer",
                "registration_no" => "43/U-2020"
            ],
            [
                "name" => "Lalit Kumar Behera",
                "title" => "Enhancing Diagnostic Accuracy and Explainability in Medical Imaging with Deep Learning and XAI",
                "registration_no" => "20/U-2020"
            ]
        ],

        "masters" => [
            [
                "title" => "Sensor-Based Data Acquisition for CVD System",
                "name" => "Laxminarayan Dash",
                "registration_no" => "01479/2019",
                "roll_no" => "23COMP010"
            ],
            [
                "title" => "Designing Interface for Body Composition Analysis",
                "name" => "Chinmaya Kumar Panda",
                "registration_no" => "20277/2023",
                "roll_no" => "23COMP006"
            ],
            [
                "title" => "Explainable AI and Counterfactuals in CVD System",
                "name" => "Beadprakasha Pattnaik",
                "registration_no" => "14651/2020",
                "roll_no" => "23COMP002"
            ],
            [
                "title" => "Model Development and Evaluation for CVD Prediction",
                "name" => "Mandakini Parida",
                "registration_no" => "20282/2023",
                "roll_no" => "23COMP006"
            ],
            [
                "title" => "System Design of CVD Risk Prediction System",
                "name" => "Ranjan Gouda",
                "registration_no" => "09456/2017",
                "roll_no" => "23COMP019"
            ],
            [
                "title" => "Database and Interface Design for CVD System",
                "name" => "Nilanchala Nahak",
                "registration_no" => "21186/2023",
                "roll_no" => "23COMP014"
            ],
            [
                "title" => "Input Interface Designing of Online Examination System",
                "name" => "Sritam Pradhan",
                "registration_no" => "00540/2019",
                "roll_no" => "23COMP025"
            ],
            [
                "title" => "Doctor Appointment Web APP",
                "name" => "Binayak Sethy",
                "registration_no" => "20181/2020",
                "roll_no" => "23COMP005"
            ],
            [
                "title" => "Output Interface Designing of Examination System",
                "name" => "Sudhir Bishoyi",
                "registration_no" => "44753/2020",
                "roll_no" => "23COMP027"
            ],
            [
                "title" => "LingOLearn (Language Learning  Web APP)",
                "name" => "Binayak Dash",
                "registration_no" => "06421/2020",
                "roll_no" => "23COMP004"
            ],
            [
                "title" => "XX",
                "name" => "Nayan Mahapatra",
                "registration_no" => "CC",
                "roll_no" => "MTC116"
            ],
            [
                "title" => "Android Malware Detection using Association Mining",
                "name" => "Ankita Sabata",
                "year" => "2021"
            ],
            [
                "title" => "Data mining methods to study malware behavior and their Specifications",
                "name" => "Dipika Ratha",
                "year" => "2019"
            ],
            [
                "title" => "Detection of malicious android application using permission Mapping",
                "name" => "Sapana Kumar Padhy",
                "year" => "2019"
            ],
            [
                "title" => "A structural Analysis of android malware and its detection based on data mining approach",
                "name" => "Sushree Smita Nanda",
                "year" => "2019"
            ],
            [
                "title" => "Fine grained android malware detection using data mining",
                "name" => "Sachin Kumar Patra",
                "year" => "2019"
            ],
            [
                "title" => "Applying data mining approach for threat analysis in android environment",
                "name" => "Mrutyunjaya Satapathy",
                "year" => "2019"
            ],
            [
                "title" => "A Study on Performace Evaluation of Classifiers in Malware Classification",
                "name" => "Sashmita Kumari Panda",
                "registration_no" => "52/2016"
            ],
            [
                "title" => "A Study and Analysis of Malware Security Threats and Risks Anatomy",
                "name" => "Alisha Padhy",
                "registration_no" => "48/2016"
            ],
            [
                "title" => "A Malware Detection model by EULA classification using Text Mining",
                "name" => "Diptimayee Sahu",
                "roll_no" => "MTC116"
            ],
            [
                "title" => "An Adware Detection System using Classification Mining",
                "name" => "Manoswini Mohanty",
                "registration_no" => "30047/2015",
                "roll_no" => "MTC316"
            ],
            [
                "title" => "A Study and Analysis of Trojan Horse using Classification",
                "name" => "Giribala Sahu",
                "registration_no" => "49/2014",
                "roll_no" => "MTC1015"
            ],
            [
                "title" => "A Study and Classification of Spyware using Detection Tree Analysis",
                "name" => "M.Soujanya",
                "registration_no" => "51/2014",
                "roll_no" => "MTC215"
            ],
            [
                "title" => "A Comparative Study on Botnet using Classification Mining",
                "name" => "Sasmita Kumari Choudhury",
                "registration_no" => "70/1995",
                "roll_no" => "MTC915"
            ],
            [
                "title" => "A Study and Classification of ROOTKITs Using Decision Tree Analysis",
                "name" => "Debasish Pradhan",
                "registration_no" => "46/2014",
                "roll_no" => "MTC315"
            ],
            [
                "title" => "A Spyware Detection System with a Comparative Study of Spywares using Classification Rule Mining",
                "name" => "Sisira Kumar Kapat",
                "registration_no" => "47/2013",
                "roll_no" => "MTC614"
            ],
            [
                "title" => "A Comparative Study and Performance Analysis of Adware Detection Technique using Classification Rule Mining",
                "name" => "Shasanka Sekhar Panda",
                "registration_no" => "3552/2006",
                "roll_no" => "MTC1214"
            ],
            [
                "title" => "A Comparative Study of Worm Detection Techniques using Classification Rule Mining",
                "name" => "Ramakrushna Dash",
                "registration_no" => "45/2013",
                "roll_no" => "MTC0114"
            ],
            [
                "title" => "A Key Logger Detection Architecture with Analysis of some classification algorithms using Key Logger data",
                "name" => "Mamarani Sahu",
                "registration_no" => "42/2013",
                "roll_no" => "MTC1514"
            ],
            [
                "title" => "A Study and Analysis on SQL Injection Attacking Process",
                "name" => "Chaitanya Patnaik",
                "registration_no" => "6147/1982"
            ],
            [
                "title" => "A Comprehensive Study and Analysis on Browser Hijackers Attacking Process",
                "name" => "Aratibala Sahu",
                "registration_no" => "2182/2012"
            ],
            [
                "title" => "A Study on Browser Hijackers Attacking Process",
                "name" => "Sugyani Panigrahi",
                "registration_no" => "2194/2012"
            ],
            [
                "title" => "A Comprehensive Study and Analysis on Phishing Attacking Process",
                "name" => "Jaya Panigrahi",
                "registration_no" => "128/2002"
            ],
            [
                "title" => "A Study and Analysis on Exploit Attacking Process",
                "name" => "Gayatri Kumari Panda",
                "registration_no" => "2185/2012"
            ],
            [
                "title" => "A Comprehensive Study and Analysis on Backdoor Attacking Process",
                "name" => "Prasanta Kumar Panda",
                "registration_no" => "2190/2012"
            ],
            [
                "title" => "A Study and Analysis on Adware Attacking Process",
                "name" => "Sreemayee Padhi",
                "registration_no" => "2193/2012"
            ],
            [
                "title" => "A Study on Machine learning approaches for Malware analysis",
                "name" => "Deeptimayee Dash",
                "registration_no" => "2184/2012"
            ],
            [
                "title" => "A Study on Trojan Attacking Process",
                "name" => "M. Biswajit",
                "registration_no" => "2186/2012"
            ],
            [
                "title" => "A Study and Analysis on Botnet Attacking Process",
                "name" => "M. Venkata Laxmi Srinivas",
                "registration_no" => "2187/2012"
            ],
            [
                "title" => "A Study and Analysis on Spyware Attacking Process for Malware Detection",
                "name" => "Ranjeeta Kumbhar",
                "registration_no" => "2191/2012"
            ],
            [
                "title" => "A Study on Data Mining approaches for Malware analysis",
                "name" => "Swagatika Kar",
                "registration_no" => "2195/2012"
            ],
            [
                "title" => "An Exhaustive Study on Keylogger Attacking Process",
                "name" => "Uma Shankar Mohanty",
                "registration_no" => "2196/2012"
            ]
        ]
    ];
}

// ================== DOCTORAL RESEARCH GUIDANCE CONTENT ==================
function get_doctoral_guidance()
{
    return [
        [
            "name" => "Dr. Sisira Kumar Kapat",
            "image" => "sisir.png",
            "description" => "An Intelligent Spyware Detection System based on Association Mining",
            "designation" => "PhD Awarded",
        ],
        [
            "name" => "Dr. Binayak Panda",
            "image" => "binayak.png",
            "description" => "Designing an Optimizing Strategy for Malware Analysis using Innovative Techniques from Data Mining",
            "designation" => "PhD Awarded",
        ],
        [
            "name" => "Dr. Om Prakash Samantray",
            "image" => "om.png",
            "description" => "A Study to Develop a Knowledge Domain Analyzer using Data Mining Concepts for Malware Analysis",
            "designation" => "PhD Awarded",
        ],
        [
            "name" => "Dibas Kumar Hembram",
            "image" => "dibas.png",
            "description" => "Stages of Heart Disease Prediction Applying Explainable Artificial Intelligence Techniques",
            "designation" => "PhD Research Pursuing",
        ],
        [
            "name" => "Lalit Kumar Behera",
            "image" => "lalit.png",
            "description" => "Enhancing Diagnostic Accuracy and Explainability in Medical Imaging with Deep Learning and XAI",
            "designation" => "PhD Research Pursuing",
        ],
        [
            "name" => "Pragnya Das",
            "image" => "pragnya_das.png",
            "description" => "Hybrid Ensemble Deep Learning Approach for Detection of Cancer",
            "designation" => "PhD Research Pursuing",
        ],
        [
            "name" => "Rashmi Rani Panda",
            "image" => "rashmi.png",
            "description" => "Android Malware Detection using Deep Learning Approach",
            "designation" => "PhD Research Pursuing",
        ],
        [
            "name" => "Diptimayee Sahu",
            "image" => "dipti.png",
            "description" => "Neurodegenerative Disease Prediction using XAI with Counterfactual Explanation",
            "designation" => "PhD Research Pursuing",
        ],
    ];
}

// ================== MASTERS RESEARCH GUIDANCE CONTENT ==================
function get_master_research_guidance()
{
    return [

        [
            "title" => "Sensor-Based Data Acquisition for CVD System",
            "name" => "Laxminarayan Dash",
            "registration_no" => "01479/2019",
            "roll_no" => "23COMP010",
            "year" => 2019
        ],
        [
            "title" => "Designing Interface for Body Composition Analysis",
            "name" => "Chinmaya Kumar Panda",
            "registration_no" => "20277/2023",
            "roll_no" => "23COMP006",
            "year" => 2023
        ],
        [
            "title" => "Explainable AI and Counterfactuals in CVD System",
            "name" => "Beadprakasha Pattnaik",
            "registration_no" => "14651/2020",
            "roll_no" => "23COMP002",
            "year" => 2020
        ],
        [
            "title" => "Model Development and Evaluation for CVD Prediction",
            "name" => "Mandakini Parida",
            "registration_no" => "20282/2023",
            "roll_no" => "23COMP006",
            "year" => 2023
        ],
        [
            "title" => "System Design of CVD Risk Prediction System",
            "name" => "Ranjan Gouda",
            "registration_no" => "09456/2017",
            "roll_no" => "23COMP019",
            "year" => 2017
        ],
        [
            "title" => "Database and Interface Design for CVD System",
            "name" => "Nilanchala Nahak",
            "registration_no" => "21186/2023",
            "roll_no" => "23COMP014",
            "year" => 2023
        ],
        [
            "title" => "Input Interface Designing of Online Examination System",
            "name" => "Sritam Pradhan",
            "registration_no" => "00540/2019",
            "roll_no" => "23COMP025",
            "year" => 2019
        ],
        [
            "title" => "Doctor Appointment Web APP",
            "name" => "Binayak Sethy",
            "registration_no" => "20181/2020",
            "roll_no" => "23COMP005",
            "year" => 2020
        ],
        [
            "title" => "Output Interface Designing of Examination System",
            "name" => "Sudhir Bishoyi",
            "registration_no" => "44753/2020",
            "roll_no" => "23COMP027",
            "year" => 2020
        ],
        [
            "title" => "LingOLearn (Language Learning Web APP)",
            "name" => "Binayak Dash",
            "registration_no" => "06421/2020",
            "roll_no" => "23COMP004",
            "year" => 2020
        ],
        [
            "title" => "XX",
            "name" => "Nayan Mahapatra",
            "registration_no" => "CC",
            "roll_no" => "MTC116",
            "year" => null
        ],
        [
            "title" => "Android Malware Detection using Association Mining",
            "name" => "Ankita Sabata",
            "registration_no" => null,
            "roll_no" => null,
            "year" => 2021
        ],
        [
            "title" => "Data mining methods to study malware behavior and their Specifications",
            "name" => "Dipika Ratha",
            "registration_no" => null,
            "roll_no" => null,
            "year" => 2019
        ],
        [
            "title" => "Detection of malicious android application using permission Mapping",
            "name" => "Sapana Kumar Padhy",
            "registration_no" => null,
            "roll_no" => null,
            "year" => 2019
        ],
        [
            "title" => "A structural Analysis of android malware and its detection based on data mining approach",
            "name" => "Sushree Smita Nanda",
            "registration_no" => null,
            "roll_no" => null,
            "year" => 2019
        ],
        [
            "title" => "Fine grained android malware detection using data mining",
            "name" => "Sachin Kumar Patra",
            "registration_no" => null,
            "roll_no" => null,
            "year" => 2019
        ],
        [
            "title" => "Applying data mining approach for threat analysis in android environment",
            "name" => "Mrutyunjaya Satapathy",
            "registration_no" => null,
            "roll_no" => null,
            "year" => 2019
        ],
        [
            "title" => "A Study on Performace Evaluation of Classifiers in Malware Classification",
            "name" => "Sashmita Kumari Panda",
            "registration_no" => "52/2016",
            "roll_no" => null,
            "year" => 2016
        ],
        [
            "title" => "A Study and Analysis of Malware Security Threats and Risks Anatomy",
            "name" => "Alisha Padhy",
            "registration_no" => "48/2016",
            "roll_no" => null,
            "year" => 2016
        ],
        [
            "title" => "A Malware Detection model by EULA classification using Text Mining",
            "name" => "Diptimayee Sahu",
            "registration_no" => null,
            "roll_no" => "MTC116",
            "year" => null
        ],
        [
            "title" => "An Adware Detection System using Classification Mining",
            "name" => "Manoswini Mohanty",
            "registration_no" => "30047/2015",
            "roll_no" => "MTC316",
            "year" => 2015
        ],
        [
            "title" => "A Study and Analysis of Trojan Horse using Classification",
            "name" => "Giribala Sahu",
            "registration_no" => "49/2014",
            "roll_no" => "MTC1015",
            "year" => 2014
        ],
        [
            "title" => "A Study and Classification of Spyware using Detection Tree Analysis",
            "name" => "M. Soujanya",
            "registration_no" => "51/2014",
            "roll_no" => "MTC215",
            "year" => 2014
        ],
        [
            "title" => "A Comparative Study on Botnet using Classification Mining",
            "name" => "Sasmita Kumari Choudhury",
            "registration_no" => "70/1995",
            "roll_no" => "MTC915",
            "year" => 1995
        ],
        [
            "title" => "A Study and Classification of ROOTKITs Using Decision Tree Analysis",
            "name" => "Debasish Pradhan",
            "registration_no" => "46/2014",
            "roll_no" => "MTC315",
            "year" => 2014
        ],
        [
            "title" => "A Spyware Detection System with a Comparative Study of Spywares using Classification Rule Mining",
            "name" => "Sisira Kumar Kapat",
            "registration_no" => "47/2013",
            "roll_no" => "MTC614",
            "year" => 2013
        ],
        [
            "title" => "A Comparative Study and Performance Analysis of Adware Detection Technique using Classification Rule Mining",
            "name" => "Shasanka Sekhar Panda",
            "registration_no" => "3552/2006",
            "roll_no" => "MTC1214",
            "year" => 2006
        ],
        [
            "title" => "A Comparative Study of Worm Detection Techniques using Classification Rule Mining",
            "name" => "Ramakrushna Dash",
            "registration_no" => "45/2013",
            "roll_no" => "MTC0114",
            "year" => 2013
        ],
        [
            "title" => "A Key Logger Detection Architecture with Analysis of some classification algorithms using Key Logger data",
            "name" => "Mamarani Sahu",
            "registration_no" => "42/2013",
            "roll_no" => "MTC1514",
            "year" => 2013
        ],
        [
            "title" => "A Study and Classification of Spyware using Detection Tree Analysis",
            "name" => "M. Soujanya",
            "registration_no" => "51/2014",
            "roll_no" => "MTC215",
            "year" => 2014
        ],
        [
            "title" => "A Comparative Study on Botnet using Classification Mining",
            "name" => "Sasmita Kumari Choudhury",
            "registration_no" => "70/1995",
            "roll_no" => "MTC915",
            "year" => 1995
        ],
        [
            "title" => "A Study and Classification of ROOTKITs Using Decision Tree Analysis",
            "name" => "Debasish Pradhan",
            "registration_no" => "46/2014",
            "roll_no" => "MTC315",
            "year" => 2014
        ],
        [
            "title" => "A Study and Analysis on SQL Injection Attacking Process",
            "name" => "Chaitanya Patnaik",
            "registration_no" => "6147/1982",
            "roll_no" => null,
            "year" => 1982
        ],
        [
            "title" => "A Comprehensive Study and Analysis on Browser Hijackers Attacking Process",
            "name" => "Aratibala Sahu",
            "registration_no" => "2182/2012",
            "roll_no" => null,
            "year" => 2012
        ],
        [
            "title" => "A Study on Browser Hijackers Attacking Process",
            "name" => "Sugyani Panigrahi",
            "registration_no" => "2194/2012",
            "roll_no" => null,
            "year" => 2012
        ],
        [
            "title" => "A Comprehensive Study and Analysis on Phishing Attacking Process",
            "name" => "Jaya Panigrahi",
            "registration_no" => "128/2002",
            "roll_no" => null,
            "year" => 2002
        ],
        [
            "title" => "A Study and Analysis on Exploit Attacking Process",
            "name" => "Gayatri Kumari Panda",
            "registration_no" => "2185/2012",
            "roll_no" => null,
            "year" => 2012
        ],
        [
            "title" => "A Comprehensive Study and Analysis on Backdoor Attacking Process",
            "name" => "Prasanta Kumar Panda",
            "registration_no" => "2190/2012",
            "roll_no" => null,
            "year" => 2012
        ],
        [
            "title" => "A Study and Analysis on Adware Attacking Process",
            "name" => "Sreemayee Padhi",
            "registration_no" => "2193/2012",
            "roll_no" => null,
            "year" => 2012
        ],
        [
            "title" => "A Study on Machine learning approaches for Malware analysis",
            "name" => "Deeptimayee Dash",
            "registration_no" => "2184/2012",
            "roll_no" => null,
            "year" => 2012
        ],
        [
            "title" => "A Study on Trojan Attacking Process",
            "name" => "M. Biswajit",
            "registration_no" => "2186/2012",
            "roll_no" => null,
            "year" => 2012
        ],
        [
            "title" => "A Study and Analysis on Botnet Attacking Process",
            "name" => "M. Venkata Laxmi Srinivas",
            "registration_no" => "2187/2012",
            "roll_no" => null,
            "year" => 2012
        ],
        [
            "title" => "A Study and Analysis on Spyware Attacking Process for Malware Detection",
            "name" => "Ranjeeta Kumbhar",
            "registration_no" => "2191/2012",
            "roll_no" => null,
            "year" => 2012
        ],
        [
            "title" => "A Study on Data Mining approaches for Malware analysis",
            "name" => "Swagatika Kar",
            "registration_no" => "2195/2012",
            "roll_no" => null,
            "year" => 2012
        ],
        [
            "title" => "An Exhaustive Study on Keylogger Attacking Process",
            "name" => "Uma Shankar Mohanty",
            "registration_no" => "2196/2012",
            "roll_no" => null,
            "year" => 2012
        ],
    ];
}
