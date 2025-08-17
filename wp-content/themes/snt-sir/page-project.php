<?php
/*
Template Name: Project Page
*/
get_header();
?>
<main class="main">


    <!-- Starter Section Section -->
    <section id="starter-section" class="starter-section section position-relative">
        <!-- Section Title -->
        <div class="container section-title aos-init aos-animate" data-aos="fade-up">
            <span>Project</span>
            <h2>Project</h2>
        </div><!-- End Section Title -->

        <!-- Page Title -->
        <div class="page-title position-absolute bottom-0 w-100">
            <div class="container d-lg-flex justify-content-between align-items-center">
                <h1 class="mb-2 mb-lg-0">Project Page</h1>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li class="current">Project Page</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <?php
    function get_projects_by_type($type = 'supervised')
    {
        $projects = [
            'supervised' => [
                [
                    'title' => 'Personalised Treatment Planning in Healthcare',
                    'description' => 'Personalised treatment planning in healthcare refers to the development of medical strategies that are specifically tailored to an individual’s unique characteristics, including their genetic profile, lifestyle, environment, and medical history. This patient-centric approach aims to enhance the effectiveness of treatments while reducing the risk of adverse effects. By promoting proactive prevention, active patient engagement, and collaborative decision-making between healthcare providers and patients, personalised treatment planning contributes significantly to improved clinical outcomes and overall well-being.',
                    'author' => 'Dr. S. N. Tripathy',
                    'image' => '',
                ],
                [
                    'title' => 'Algorithmic Fairness in Hiring and Lending',
                    'description' => 'Algorithmic fairness plays a crucial role in ensuring unbiased and objective decision-making, particularly in domains such as human resources and financial services. In hiring processes, algorithms can be designed to identify and evaluate relevant skills and qualifications that align with job requirements, thereby promoting merit-based selection and reducing human bias. Similarly, in lending scenarios, fair algorithms support equitable loan approval decisions by assessing applicants based on consistent, transparent criteria. Applications of such fairness-focused algorithms extend to areas like employee recruitment, credit risk assessment, and even player selection in competitive environments.',
                    'author' => 'Dr. S. N. Tripathy',
                    'image' => '',
                ],
                [
                    'title' => 'Healthcare Treatment Efficacy and Patient Outcomes',
                    'description' => 'Improving patient outcomes is a critical objective, involving a comprehensive approach that includes enhancing overall health, promoting recovery, and preventing adverse events. Achieving these outcomes requires effective hospital administration, data-driven decision-making, and active patient engagement, all of which play vital roles in optimizing healthcare delivery and ensuring better patient care.',
                    'author' => 'Dr. S. N. Tripathy',
                    'image' => '',
                ],
                [
                    'title' => 'Legal Liability and Accident Analysis',
                    'description' => 'Legal liability in the context of accidents refers to the determination of responsibility for compensating victims for harm resulting from an accident. It involves assessing when an individual or entity is legally obligated to provide compensation based on the circumstances of the incident. Accident analysis, on the other hand, focuses on investigating the causes and contributing factors of accidents to identify their root causes. This analysis is essential for implementing preventive measures and ensuring compliance with relevant legal and regulatory requirements. Legal liability is typically established through various legal doctrines, such as negligence, strict liability, and product liability, each applicable depending on the specifics of the accident and its context.',
                    'author' => 'Dr. S. N. Tripathy',
                    'image' => '',
                ],
                [
                    'title' => 'Computational Advertising and Marketing Lift',
                    'description' => 'Computational advertising utilizes advanced algorithms to automate and optimize the delivery of advertisements, ensuring targeted and efficient outreach. Marketing lift analysis, on the other hand, evaluates the specific impact of marketing initiatives on key performance indicators such as conversions or revenue. This analysis determines whether a campaign or action has a measurable effect on customer behavior by comparing a test group exposed to the campaign with a control group. Causal effect estimators predict the sales outcomes had the ads not been shown, providing a precise assessment of the return on investment (ROI) for digital advertising campaigns.',
                    'author' => 'Dr. S. N. Tripathy',
                    'image' => '',
                ],
                [
                    'title' => 'Cognitive Behavioural Therapy (CBT)',
                    'description' => 'Cognitive Behavioral Therapy (CBT) effectively mitigates regret by offering strategies to address and manage unhealthy thought patterns and emotions, fostering more positive outcomes. This therapeutic approach involves identifying and modifying negative thought processes related to past events and actions, ultimately reducing the intensity and emotional impact of regret. Additionally, other therapeutic modalities, such as Acceptance and Commitment Therapy (ACT), can also play a significant role in managing and coping with regret.',
                    'author' => 'Dr. S. N. Tripathy',
                    'image' => '',
                ],
                [
                    'title' => 'Supply-Chain Risk Management',
                    'description' => 'Supply Chain Risk Management (SCRM) focuses on identifying, assessing, and mitigating risks across the entire supply chain, from raw material sourcing to the delivery of finished products. This includes evaluating risks related to suppliers, logistics, and distribution networks. The primary objective of SCRM is to ensure business continuity, safeguard profitability, and protect against potential disruptions. By analyzing factors such as supplier delays or port closures, SCRM helps identify key risks that could lead to order disruptions, enabling the implementation of proactive mitigation strategies to minimize impact.',
                    'author' => 'Dr. S. N. Tripathy',
                    'image' => '',
                ],
                [
                    'title' => 'Network Optimisation in Humanitarian Logistics',
                    'description' => 'This approach aims to enhance the efficiency and effectiveness of aid delivery by optimizing the placement and movement of resources. It involves determining the most strategic locations for warehouses, distribution centers, and other facilities, as well as optimizing the allocation of resources and transportation routes to maximize the impact of relief efforts. The focus is on minimizing costs associated with facility setup, while providing clear justifications for decisions related to facility locations and operations within humanitarian relief efforts.',
                    'author' => 'Dr. S. N. Tripathy',
                    'image' => '',
                ],
                [
                    'title' => 'Educational Policy Evaluation',
                    'description' => 'Educational policy evaluation involves the systematic collection and analysis of data to assess whether a policy is meeting its intended objectives, identifying any unintended consequences, and guiding future policy decisions. This process can be carried out throughout the entire policy cycle, from the initial design phase to implementation and subsequent stages. Counterfactual models are used to estimate how student performance would change under different curricula, providing valuable insights for adaptive learning and resource allocation in educational institutions. By determining which instructional methods and resources have a causal impact on student performance, these evaluations contribute to the optimization of adaptive learning systems.',
                    'author' => 'Dr. S. N. Tripathy',
                    'image' => '',
                ],
                [
                    'title' => 'Public Health Program Evaluation',
                    'description' => 'Public Health Program Evaluation is a structured process aimed at assessing the effectiveness, efficiency, and impact of public health interventions. This process involves the systematic collection, analysis, and interpretation of data to determine the success of interventions, identify areas for improvement, and ensure that program objectives are being met. The primary goal is to enhance program quality and outcomes, while also providing accountability and justifying the allocation of continued funding.',
                    'author' => 'Dr. S. N. Tripathy',
                    'image' => '',
                ],
                [
                    'title' => 'Finance: Credit Assessment and Risk Management',
                    'description' => 'Credit assessment and risk management are fundamental processes in finance aimed at evaluating a borrower\'s ability to repay debt and minimizing potential financial losses. These processes involve comprehensive analysis of a borrower\'s creditworthiness, continuous performance monitoring, and strategic management of credit risk through various methodologies. Credit Assessment entails the thorough evaluation of a borrower\'s financial history, credit scores, income levels, and overall capacity to meet repayment obligations. This assessment is critical for determining the borrower’s reliability and suitability for receiving credit. Risk Management focuses on developing and applying models and techniques that assess and mitigate credit risk. This includes setting appropriate loan terms, interest rates, and other conditions based on the assessed risk level. Risk management strategies also involve understanding the factors contributing to loan defaults and market fluctuations, with the aim of enhancing credit scoring models and improving risk mitigation practices. Together, these processes ensure sound lending decisions and effective management of financial risk.',
                    'author' => 'Dr. S. N. Tripathy',
                    'image' => '',
                ],
                [
                    'title' => 'Marketing: Promotion Lift Analysis',
                    'description' => 'Promotion Lift Analysis is a marketing technique used to assess the incremental impact of a marketing campaign or promotional activity on key metrics such as sales, conversions, or brand awareness. This approach compares the performance of a control group (which is not exposed to the campaign) with a treatment group (which is exposed to the campaign) to measure the actual lift, or increase, in the target metric. The goal is to accurately estimate the causal impact of advertising campaigns and promotions on sales, distinguishing genuine lift from trends that may be correlated but not directly attributable to the campaign.',
                    'author' => 'Dr. S. N. Tripathy',
                    'image' => '',
                ],
                [
                    'title' => 'Manufacturing: Fault Detection and Root Cause Analysis',
                    'description' => 'Effective fault detection and root cause analysis are essential for ensuring quality, optimizing efficiency, and minimizing costly downtime in manufacturing operations. Root cause analysis plays a pivotal role in identifying the underlying factors contributing to defects or failures, enabling the implementation of targeted solutions that not only resolve the issue but also prevent its recurrence, thereby enhancing overall production performance. Utilizing fault tree analysis allows for the precise identification of component failures that drive system breakdowns, ultimately reducing both downtime and maintenance costs. Here is a generalized, step-by-step procedure for implementing manufacturing fault detection and root-cause analysis using Explainable AI (XAI) with counterfactual explanations in a Federated Learning (FL) framework, underpinned by causal Directed Acyclic Graphs (DAGs): By first constructing a causal DAG to represent the interdependencies among process variables, one can leverage a federated learning setup to train local models on decentralized data while preserving privacy. These models are then aggregated into a global model whose predictions are explained via counterfactual reasoning. Counterfactual explanations pinpoint minimal changes in inputs that would alter a fault prediction, and tracing these changes back through the causal DAG reveals underlying root causes. Iterating this loop refines both the model and the causal graph, driving continuous improvement in fault detection accuracy and prevention.',
                    'author' => 'Dr. S. N. Tripathy',
                    'image' => '',
                ],
                [
                    'title' => 'Cybersecurity: Breach Attribution',
                    'description' => 'Breach attribution is essential for pinpointing both the perpetrators and their motivations, which in turn fosters accountability, strengthens deterrence, and informs more robust security strategies. By accurately identifying threat actors, organizations can pursue legal and diplomatic channels to hold them responsible, while the awareness that attacks are traceable discourages adversaries from targeting the enterprise. Moreover, detailed analysis of attackers’ tactics, techniques, and procedures (TTPs) empowers security teams to anticipate and defend against future threats of a similar nature.',
                    'author' => 'Dr. S. N. Tripathy',
                    'image' => '',
                ],
                [
                    'title' => 'Retail: Demand Forecasting and Inventory Management',
                    'description' => 'Effective demand forecasting and inventory management are critical components of successful retail operations. By anticipating customer demand and aligning inventory accordingly, retailers can enhance efficiency, reduce costs, and improve customer satisfaction. Demand Forecasting in Retail Demand forecasting involves predicting future customer demand using historical sales data, market trends, seasonal patterns, and promotional activities. Accurate forecasts enable retailers to make informed decisions about procurement, production, and distribution, ensuring that the right products are available at the right time. Inventory Management Inventory management is the process of overseeing and controlling the ordering, storage, and use of products to meet customer demand efficiently. It aims to maintain optimal inventory levels, minimize holding costs, and prevent stockouts or overstock situations. Integration of Demand Forecasting and Inventory Management Integrating demand forecasting with inventory management allows retailers to: Optimise Inventory Levels: Aligning inventory with accurate demand forecasts reduces excess stock and minimises the risk of stockouts. Reduce Carrying Costs: Maintaining optimal stock levels lowers storage, insurance, and depreciation expenses. Enhance Customer Satisfaction: Ensuring product availability when customers need it improves service levels and fosters loyalty. Improve Cash Flow: Efficient inventory management frees up capital tied in unsold stock, enhancing liquidity. Support Strategic Planning: Accurate forecasts inform decisions on product launches, pricing strategies, and market expansion. By leveraging demand forecasting and robust inventory management practices, retailers can create a responsive supply chain that adapts to market dynamics, reduces operational costs, and delivers superior customer experiences.',
                    'author' => 'Dr. S. N. Tripathy',
                    'image' => '',
                ],
                [
                    'title' => 'Agriculture: Crop Management',
                    'description' => 'Crop management is a systematic discipline aimed at maximizing crop yields and farm profitability while conserving soil, water and nutrient resources. By carefully planning and integrating each phase—from nutrient supply and water delivery to weed, pest and disease control—farmers can achieve optimal productivity with minimal environmental impact. Key Components of Crop Management Fertiliser & Manure Application Precisely calibrating the type, rate and timing of fertilisers and organic manures ensures crops receive the right balance of macro- and micronutrients throughout their growth cycle, improves soil health and reduces nutrient losses. Irrigation Scheduling Developing irrigation plans based on crop water requirements, soil moisture monitoring and weather forecasts allows for efficient water use, preventing both water stress and wastage. Weed Control Employing an integrated weed management strategy—combining cultural, mechanical and chemical measures—suppresses weed competition, safeguards crop yields and curbs herbicide resistance. Pest & Disease Management Implementing preventative and responsive tactics such as crop rotation, resistant varieties, biological controls and targeted agrochemicals minimizes crop damage while promoting ecological balance. Harvesting Timing harvest operations to coincide with peak maturity and employing proper post-harvest handling techniques preserves grain quality, reduces losses and enhances market value.',
                    'author' => 'Dr. S. N. Tripathy',
                    'image' => '',
                ],
                [
                    'title' => 'Disaster management',
                    'description' => 'This concise statement underscores how disaster management systematically unites prevention, preparedness, response, and recovery to lessen impacts on communities and infrastructure. It emphasises proactive risk reduction, meticulous planning and training, swift operational response, and coordinated recovery—all aimed at safeguarding lives, preserving critical assets, and strengthening societal resilience against future hazards. Disaster management integrates prevention, preparedness, response, and recovery efforts to mitigate the effects of natural and man-made emergencies on communities and infrastructure. Through proactive risk reduction, robust planning and training, rapid response operations, and coordinated recovery strategies, it seeks to safeguard lives, preserve critical assets, and enhance societal resilience against future hazards.',
                    'author' => 'Dr. S. N. Tripathy',
                    'image' => '',
                ],
                [
                    'title' => 'Climate Science: Human Impact Analysis',
                    'description' => 'This analysis examines the principal ways in which human activities—most notably the combustion of fossil fuels, large-scale deforestation, and intensive industrial operations—elevate atmospheric concentrations of greenhouse gases, thereby enhancing the natural heat-trapping effect and driving a rise in global temperatures alongside a suite of related climatic disturbances. By rigorously quantifying the direct contribution of anthropogenic emissions to key climate indicators—such as mean surface warming and the frequency or intensity of extreme weather events—this work provides an empirical foundation to guide and optimize evidence-based policy interventions.',
                    'author' => 'Dr. S. N. Tripathy',
                    'image' => '',
                ],
                [
                    'title' => 'Smart Urban Planning: Sustainability Analytics',
                    'description' => 'Smart Urban Planning leverages advanced sustainability analytics—powered by big data and GIS—to design resilient, environmentally conscious, and socially equitable cities. By uncovering causal relationships between urban policies (for example, zoning reforms or public-transit investments) and measurable outcomes such as emissions reductions and eased traffic congestion, this data-driven approach optimizes urban functions, enhances resource efficiency, and elevates overall quality of life while minimizing negative environmental impacts.',
                    'author' => 'Dr. S. N. Tripathy',
                    'image' => '',
                ],
                [
                    'title' => 'Fraud Detection: Transaction Analysis',
                    'description' => 'Transaction analysis in fraud detection encompasses the systematic examination of both historical and real-time transactional datasets to identify irregularities and anomalous patterns indicative of fraudulent behavior. By leveraging a combination of rule-based systems, statistical anomaly-detection models, and advanced machine-learning algorithms, organizations can continuously monitor transaction streams, compute dynamic risk scores, and generate real-time alerts for suspicious activities. Furthermore, uncovering causal relationships within these data enables practitioners to more accurately differentiate between legitimate and fraudulent transactions—thereby improving detection precision and reducing false-positive rates across credit-card processing, online payments, point-of-sale systems, and mobile-payment platforms.',
                    'author' => 'Dr. S. N. Tripathy',
                    'image' => '',
                ],
                [
                    'title' => 'Customer Retention: Churn Prediction',
                    'description' => 'Effectively retaining customers begins with anticipating which individuals are most likely to discontinue their subscriptions or abandon a service. By leveraging predictive analytics to identify at-risk customers before they depart, businesses can intervene with personalised offers, targeted communications, or service improvements—measures that are both more cost-efficient and more impactful than acquiring new customers. Beyond simply forecasting attrition, advanced churn-prediction models also reveal the underlying drivers of customer dissatisfaction—whether it be pricing concerns, service quality issues, or unmet expectations—enabling organizations to address root causes and craft retention strategies that enhance customer lifetime value and strengthen long-term loyalty.',
                    'author' => 'Dr. S. N. Tripathy',
                    'image' => '',
                ],
                [
                    'title' => 'Public Policy Analysis: Program Evaluation',
                    'description' => 'Public policy analysis involves the systematic evaluation of policy options and their potential impacts to address societal issues effectively. It focuses on formulating, adopting, and implementing policies that aim to improve economic, social, or other public concerns. Program evaluation, a critical component of policy analysis, assesses the effectiveness and efficiency of existing programs. It systematically collects and analyzes information to determine whether programs are achieving their intended outcomes and to inform decisions on program improvement or continuation. Effective program evaluation helps policymakers understand what works, for whom, and under what circumstances, ensuring efficient resource allocation and reliable processes. By determining the causal impact of social programs or regulatory changes on economic and social outcomes, program evaluation guides evidence-based policymaking. Incorporating rigorous evaluation methods, such as randomized controlled trials, enhances the reliability of findings and supports the development of policies that are both effective and equitable. Such evaluations are essential for democratic accountability, effective government spending, and addressing the needs of the most vulnerable populations.',
                    'author' => 'Dr. S. N. Tripathy',
                    'image' => '',
                ],
                [
                    'title' => 'Reduce Tobacco Consumption',
                    'description' => 'To effectively reduce tobacco consumption, a comprehensive approach involving both governmental policy measures and individual support strategies is essential. Here\'s an overview of how these efforts can synergistically contribute to tobacco control: Government Strategies Increase Tobacco Taxes: Raising prices through taxation has been shown to reduce tobacco use, particularly among youth and low-income groups. Ban Advertising and Promotions: Implementing comprehensive bans on tobacco advertising, sponsorships, and promotions decreases the appeal of tobacco products. Enforce Smoke-Free Policies: Establishing smoke-free environments in public places protects non-smokers and encourages smokers to quit. Launch Public Education Campaigns: High-impact media campaigns raise awareness about the dangers of tobacco use and promote cessation resources. Provide Cessation Support: Offering accessible cessation programs, including quitlines and counseling, assists individuals in quitting tobacco. Individual Actions Avoid Triggers: Identify and steer clear of situations or environments that prompt the urge to smoke. Seek Support Services: Utilize support groups, counseling services, or helplines for motivation and coping strategies. Employ Behavioral Therapies: Techniques like cognitive-behavioral therapy (CBT) help manage cravings and prevent relapse. Use Pharmacological Aids: Nicotine replacement therapies (NRTs) and prescription medications can double or triple quit rates when used appropriately. By integrating these policy measures and personal strategies, a substantial reduction in tobacco consumption can be achieved, leading to improved public health outcomes.',
                    'author' => 'Dr. S. N. Tripathy',
                    'image' => '',
                ],
                [
                    'title' => 'Effective performance and right wage utilisation',
                    'description' => 'Optimizing employee performance and aligning compensation with productivity are crucial for enhancing organizational efficiency and profitability. By effectively utilizing employee time and implementing performance-based incentives, companies can achieve sustainable growth and a motivated workforce. Employee utilization rate is a key metric that reflects the proportion of an employee\'s time spent on productive, revenue-generating tasks. An optimal utilization rate is approximately 80%, balancing productivity with employee well-being and reducing risks of burnout . Monitoring and improving utilization rates can lead to increased revenue, enhanced operational efficiency, and improved employee engagement. Implementing performance-based incentives aligns employee objectives with company goals, fostering a results-driven environment. Studies indicate that organizations with effective recognition programs experience increased productivity and profitability . Effective incentive strategies include monetary rewards, professional development opportunities, and recognition programs that boost morale and reinforce desired behaviors. Aligning compensation with performance ensures that wage expenditures yield maximum returns. The efficiency wage theory suggests that paying above-market wages can enhance productivity and reduce turnover . Key considerations for effective compensation management include regular performance evaluations, transparent communication, and balanced workload distribution. By integrating these strategies, organizations can enhance employee productivity, ensure effective wage utilization, and drive sustained profitability.',
                    'author' => 'Dr. S. N. Tripathy',
                    'image' => '',
                ],
            ],

            'sponsored' => [
                // Parkinson project from Health projects
                [
                    'title' => 'Monitoring Parkinson\'s Disease using Federated Learning and Explainable Artificial Intelligence (XAI)',
                    'description' => 'The research project titled "Monitoring Parkinson\'s Disease using Federated Learning and Explainable Artificial Intelligence (XAI)" is funded by the MRIP scheme of the Odisha State Higher Education Council, Government of Odisha. A total grant of ₹6,72,000 (Rupees Six Lakh Seventy-Two Thousand only) has been sanctioned for the project, which is scheduled to be carried out over a duration of two years from 17-03-2025 to 16-03-2027. The project is currently ongoing.',
                    'author' => 'Sponsored by GreenTech Inc.',
                    'image' => ''
                ],
                [
                    'title' => 'Smart Agriculture System',
                    'description' => 'A sponsored project developing IoT-enabled devices for real-time crop monitoring, soil quality detection, and precision irrigation systems.',
                    'author' => 'Sponsored by AgriFund',
                    'image' => ''
                ],
                [
                    'title' => 'Blockchain for Supply Chain',
                    'description' => 'Sponsored research on leveraging blockchain technology for transparent, secure, and efficient global supply chains.',
                    'author' => 'Sponsored by LogisticsX',
                    'image' => ''
                ],
            ],

            'health' => [
                [
                    'title' => 'Personalised Treatment Planning in Healthcare',
                    'description' => 'Tailored medical strategies based on genetics, lifestyle, and history. Enhances effectiveness, reduces risks, and improves patient engagement.',
                    'author' => '',
                    'image' => ''
                ],
                [
                    'title' => 'Algorithmic Fairness in Hiring and Lending',
                    'description' => 'Ensuring unbiased decision-making in HR and financial services. Promotes merit-based hiring and equitable loan approvals.',
                    'author' => '',
                    'image' => ''
                ],
                [
                    'title' => 'Healthcare Treatment Efficacy and Patient Outcomes',
                    'description' => 'Focuses on improving patient recovery and reducing adverse events through effective administration and patient engagement.',
                    'author' => '',
                    'image' => ''
                ],
            ],
            'consultancy' => [
                // Blank
                [
                    'title' => 'Personalised Treatment Planning in Healthcare',
                    'description' => 'Tailored medical strategies based on genetics, lifestyle, and history. Enhances effectiveness, reduces risks, and improves patient engagement.',
                    'author' => '',
                    'image' => ''
                ],
                [
                    'title' => 'Algorithmic Fairness in Hiring and Lending',
                    'description' => 'Ensuring unbiased decision-making in HR and financial services. Promotes merit-based hiring and equitable loan approvals.',
                    'author' => '',
                    'image' => ''
                ],
                [
                    'title' => 'Healthcare Treatment Efficacy and Patient Outcomes',
                    'description' => 'Focuses on improving patient recovery and reducing adverse events through effective administration and patient engagement.',
                    'author' => '',
                    'image' => ''
                ],
            ],
        ];

        return $projects[$type] ?? $projects['sponsored'];
    }

    // detect type from GET param
    $type = isset($_GET['type']) ? $_GET['type'] : 'sponsored';

    $projects = get_projects_by_type($type);
    $totalProjects = count($projects);
    $perPage = 10; // show 5 projects per page
    $totalPages = ceil($totalProjects / $perPage);

    $currentPage = isset($_GET['pg']) ? (int)$_GET['pg'] : 1;
    $currentPage = max(1, min($totalPages, $currentPage));

    $offset = ($currentPage - 1) * $perPage;
    $currentProjects = array_slice($projects, $offset, $perPage);
    ?>

    <ul class="nav nav-tabs justify-content-center my-5">
        <li class="nav-item">
            <a class="nav-link <?= $type == 'sponsored' ? 'active' : '' ?>" href="?type=sponsored">Sponsored Projects</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?= $type == 'health' ? 'active' : '' ?>" href="?type=health">Health Projects</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?= $type == 'supervised' ? 'active' : '' ?>" href="?type=supervised">Projects Supervised</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?= $type == 'consultancy' ? 'active' : '' ?>" href="?type=consultancy">Consultancy Services</a>
        </li>
    </ul>

    <div class="container">
        <?php foreach ($currentProjects as $index => $project): ?>
            <div class="row mb-5 align-items-center">
                <?php if ($index % 2 == 0): ?>
                    <div class="col-md-6">
                        <img src="<?= empty($project['image']) ? "https://canada1.discourse-cdn.com/shopifyforum/optimized/3X/9/b/9b329173d9467d42600c28acbc08b1787275f47c_2_558x500.jpeg" : get_template_directory_uri() . "/assets/img/project/" . $project['image'] ?>" class="img-fluid rounded shadow" alt="<?= $project['title'] ?>">
                    </div>
                    <div class="col-md-6">
                        <h3><?= $project['title'] ?></h3>
                        <p><?= $project['description'] ?></p>
                        <?php if (!empty($project['author'])): ?>
                            <p class="fw-bold"><?= $project['author'] ?></p>
                        <?php endif; ?>
                    </div>
                <?php else: ?>
                    <div class="col-md-6 order-md-2">
                        <img src="<?= empty($project['image']) ? "https://canada1.discourse-cdn.com/shopifyforum/optimized/3X/9/b/9b329173d9467d42600c28acbc08b1787275f47c_2_558x500.jpeg" : get_template_directory_uri() . "/assets/img/project/" . $project['image'] ?>" class="img-fluid rounded shadow" alt="<?= $project['title'] ?>">
                    </div>
                    <div class="col-md-6 order-md-1">
                        <h3><?= $project['title'] ?></h3>
                        <p><?= $project['description'] ?></p>
                        <?php if (!empty($project['author'])): ?>
                            <p class="fw-bold"><?= $project['author'] ?></p>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>

        <!-- Pagination -->
        <nav>
            <ul class="pagination justify-content-center">
                <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                    <li class="page-item <?= $i == $currentPage ? 'active' : '' ?>">
                        <a class="page-link" href="?type=<?= $type ?>&pg=<?= $i ?>"><?= $i ?></a>
                    </li>
                <?php endfor; ?>
            </ul>
            <p class="text-center mt-3">Total Projects: <?= $totalProjects ?></p>
        </nav>
    </div>

</main>
<?php get_footer(); ?>