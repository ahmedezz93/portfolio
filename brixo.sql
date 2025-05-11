-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2025 at 11:18 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brixo`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `image` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, '{\"ar\":\"شريكك الموثوق في التميز في البناء\",\"en\":\"YOUR TRUSTED PARTNER IN CONSTRUCTION EXCELLENCE\"}', '{\"ar\":\"<p>نحن متخصصون في مجموعة واسعة من خدمات البناء ، بما في ذلك المشاريع السكنية والتجارية والصناعية. من التصميم الأولي إلى التفتيش النهائي ،</p>\\r\\n\\r\\n<p>نعمل عن كثب مع عملائنا لفهم احتياجاتهم الفريدة ورؤيتهم.</p>\\r\\n\\r\\n<p>خبرة لا مثيل لها مع عقود من الخبرة الالتزام بجودة ودقة ممارسات بناء مستدامة ومسؤولة</p>\",\"en\":\"<p>We specialize in a wide range of construction services, including residential, commercial, and industrial projects. From initial design to final inspection, we work closely with our clients to understand their unique needs and vision.</p>\\r\\n\\r\\n<ul>\\r\\n\\t<li>Unmatched Expertise with Decades of Experience</li>\\r\\n\\t<li>Commitment to Quality and Precision</li>\\r\\n\\t<li>Sustainable and Responsible Building Practices</li>\\r\\n</ul>\"}', '2d3d2551bc252bc51c9a5ef2a7a7d6e50b9a811b92fe32606aa56d5988bd2530.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` longtext NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `image`, `title`, `description`, `created_at`, `updated_at`) VALUES
(10, '19526714916ecff07ae45a3ee8f8103df147f5d3c741592d273ae1e4fd0d0ffd.jpg', '{\"ar\":\"نصائح أساسية لابتسامة صحية\",\"en\":\"Essential tips for a Healthy Smile\"}', '{\"ar\":\"<p>يعد اختيار الباني المناسب أمرًا بالغ الأهمية لنجاح مشروع البناء الخاص بك. يقدم هذا الدليل عشر نصائح أساسية لمساعدتك في اختيار الباني المؤهل والموثوق به. من التحقق من المؤهلات ومراجعة الأعمال السابقة إلى تقييم مهارات الاتصال.</p>\\r\\n\\r\\n<p>يعد اختيار الباني المناسب خطوة محورية في ضمان نجاح مشروع البناء الخاص بك، سواء كنت تبني منزلًا جديدًا أو تجدد مبنى قائمًا أو تشرع في تطوير تجاري. لا يعمل الباني المناسب على تحسين جودة البناء فحسب، بل يجعل العملية بأكملها أكثر سلاسة ومتعة. فيما يلي العديد من النصائح الأساسية لتوجيهك في اختيار الباني المناسب لاحتياجاتك:</p>\\r\\n\\r\\n<p>يعد اختيار الباني المناسب أمرًا بالغ الأهمية. ركز على المؤهلات والمراجعات والاتصال والعروض التفصيلية لضمان مشروع بناء ناجح يتماشى مع رؤيتك وتوقعاتك.</p>\\r\\n\\r\\n<p>ابدأ بالتحقق من بيانات اعتماد الباني. تأكد من حصولهم على التراخيص والشهادات اللازمة للعمل في منطقتك. ابحث عن بناة يتمتعون بسجل حافل وخبرة في مشاريع مماثلة لمشروعك. سيكون البناؤون ذوو الخبرة على دراية بقوانين البناء المحلية ولوائح تقسيم المناطق والتحديات المحتملة لنوع المشروع المحدد الخاص بك.</p>\\r\\n\\r\\n<p>مستقبل ممارسات البناء المستدامة<br />\\r\\nهناك العديد من الاختلافات في مقاطع Lorem Ipsum المتاحة، ولكن الغالبية تعرضت للتغيير في شكل ما، عن طريق إدخال الفكاهة أو الكلمات العشوائية التي لا تبدو معقولة حتى قليلاً. إذا كنت ستستخدم مقطعًا.</p>\\r\\n\\r\\n<p>تركيب وإصلاح شامل للأسقف<br />\\r\\nتجديدات المباني وتوسيعها وإعادة تشكيلها<br />\\r\\nالتنظيف بعد البناء والتفتيش النهائي<br />\\r\\nخدمات بناء المساكن السكنية المخصصة</p>\",\"en\":\"<p>Choosing the right builder is crucial for the success of your construction project. This guide offers ten essential tips to help you select a qualified and reliable builder. From checking qualifications and reviewing past work to evaluating communication skills.</p>\\r\\n\\r\\n<p>Selecting the right builder is a pivotal step in ensuring the success of your construction project, whether you&#39;re building a new home, renovating an existing structure, or embarking on a commercial development. The right builder not only enhances the quality of the construction but also makes the entire process smoother and more enjoyable. Here are several essential tips to guide you in choosing the right builder for your needs:</p>\\r\\n\\r\\n<p>Choosing the right builder is crucial. Focus on qualifications, reviews, communication, and detailed quotes to ensure a successful construction project that aligns with your vision and expectations.</p>\\r\\n\\r\\n<p>Start by verifying the builder&#39;s credentials. Ensure they have the necessary licenses and certifications to operate in your area. Look for builders with a solid track record and experience in projects similar to yours. Experienced builders will be familiar with local building codes, zoning regulations, and the potential challenges of your specific project type.</p>\\r\\n\\r\\n<h2>&nbsp;</h2>\\r\\n\\r\\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage.</p>\\r\\n\\r\\n<ul>\\r\\n\\t<li>Comprehensive Roofing Installation and Repair</li>\\r\\n\\t<li>Building Renovations, Extensions, and Remodeling</li>\\r\\n\\t<li>Post-Construction Cleanup and Final Inspection</li>\\r\\n\\t<li>Custom Residential Home Building Services</li>\\r\\n</ul>\"}', '2025-03-09 08:19:24', '2025-03-10 19:12:18'),
(11, '5753e0aded91b86236944596056eedff405345e18038c36295aa00f1021f4e86.jpg', '{\"ar\":\"مستقبل ممارسات البناء المستدامة\",\"en\":\"The Future of Sustainable Building Practices\"}', '{\"ar\":\"<p>يعد اختيار الباني المناسب أمرًا بالغ الأهمية لنجاح مشروع البناء الخاص بك. يقدم هذا الدليل عشر نصائح أساسية لمساعدتك في اختيار الباني المؤهل والموثوق به. من التحقق من المؤهلات ومراجعة الأعمال السابقة إلى تقييم مهارات الاتصال.</p>\\r\\n\\r\\n<p>يعد اختيار الباني المناسب خطوة محورية في ضمان نجاح مشروع البناء الخاص بك، سواء كنت تبني منزلًا جديدًا أو تجدد مبنى قائمًا أو تشرع في تطوير تجاري. لا يعمل الباني المناسب على تحسين جودة البناء فحسب، بل يجعل العملية بأكملها أكثر سلاسة ومتعة. فيما يلي العديد من النصائح الأساسية لتوجيهك في اختيار الباني المناسب لاحتياجاتك:</p>\\r\\n\\r\\n<p>يعد اختيار الباني المناسب أمرًا بالغ الأهمية. ركز على المؤهلات والمراجعات والاتصال والعروض التفصيلية لضمان مشروع بناء ناجح يتماشى مع رؤيتك وتوقعاتك.</p>\\r\\n\\r\\n<p>ابدأ بالتحقق من بيانات اعتماد الباني. تأكد من حصولهم على التراخيص والشهادات اللازمة للعمل في منطقتك. ابحث عن بناة يتمتعون بسجل حافل وخبرة في مشاريع مماثلة لمشروعك. سيكون البناؤون ذوو الخبرة على دراية بقوانين البناء المحلية ولوائح تقسيم المناطق والتحديات المحتملة لنوع المشروع المحدد الخاص بك.</p>\\r\\n\\r\\n<p>مستقبل ممارسات البناء المستدامة<br />\\r\\nهناك العديد من الاختلافات في مقاطع Lorem Ipsum المتاحة، ولكن الغالبية تعرضت للتغيير في شكل ما، عن طريق إدخال الفكاهة أو الكلمات العشوائية التي لا تبدو معقولة حتى قليلاً. إذا كنت ستستخدم مقطعًا.</p>\\r\\n\\r\\n<p>تركيب وإصلاح شامل للأسقف<br />\\r\\nتجديدات المباني وتوسيعها وإعادة تشكيلها<br />\\r\\nالتنظيف بعد البناء والتفتيش النهائي<br />\\r\\nخدمات بناء المساكن السكنية المخصصة</p>\",\"en\":\"<p>Choosing the right builder is crucial for the success of your construction project. This guide offers ten essential tips to help you select a qualified and reliable builder. From checking qualifications and reviewing past work to evaluating communication skills.</p>\\r\\n\\r\\n<p>Selecting the right builder is a pivotal step in ensuring the success of your construction project, whether you&#39;re building a new home, renovating an existing structure, or embarking on a commercial development. The right builder not only enhances the quality of the construction but also makes the entire process smoother and more enjoyable. Here are several essential tips to guide you in choosing the right builder for your needs:</p>\\r\\n\\r\\n<p>Choosing the right builder is crucial. Focus on qualifications, reviews, communication, and detailed quotes to ensure a successful construction project that aligns with your vision and expectations.</p>\\r\\n\\r\\n<p>Start by verifying the builder&#39;s credentials. Ensure they have the necessary licenses and certifications to operate in your area. Look for builders with a solid track record and experience in projects similar to yours. Experienced builders will be familiar with local building codes, zoning regulations, and the potential challenges of your specific project type.</p>\\r\\n\\r\\n<p>The future of sustainable building practice<br />\\r\\nThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage.</p>\\r\\n\\r\\n<p>Comprehensive Roofing Installation and Repair<br />\\r\\nBuilding Renovations, Extensions, and Remodeling<br />\\r\\nPost-Construction Cleanup and Final Inspection<br />\\r\\nCustom Residential Home Building Services</p>\"}', '2025-03-09 08:21:01', '2025-03-10 19:12:38'),
(12, '0908100a580b75ef76a3caed1a065c8dd93471c2727735bd6570b6a48e17021e.jpg', '{\"ar\":\"بناء المرونة ضد تغير المناخ\",\"en\":\"Building Resilience Against Climate Change\"}', '{\"ar\":\"<p>يعد اختيار الباني المناسب أمرًا بالغ الأهمية لنجاح مشروع البناء الخاص بك. يقدم هذا الدليل عشر نصائح أساسية لمساعدتك في اختيار الباني المؤهل والموثوق به. من التحقق من المؤهلات ومراجعة الأعمال السابقة إلى تقييم مهارات الاتصال.</p>\\r\\n\\r\\n<p>يعد اختيار الباني المناسب خطوة محورية في ضمان نجاح مشروع البناء الخاص بك، سواء كنت تبني منزلًا جديدًا أو تجدد مبنى قائمًا أو تشرع في تطوير تجاري. لا يعمل الباني المناسب على تحسين جودة البناء فحسب، بل يجعل العملية بأكملها أكثر سلاسة ومتعة. فيما يلي العديد من النصائح الأساسية لتوجيهك في اختيار الباني المناسب لاحتياجاتك:</p>\\r\\n\\r\\n<p>يعد اختيار الباني المناسب أمرًا بالغ الأهمية. ركز على المؤهلات والمراجعات والاتصال والعروض التفصيلية لضمان مشروع بناء ناجح يتماشى مع رؤيتك وتوقعاتك.</p>\\r\\n\\r\\n<p>ابدأ بالتحقق من بيانات اعتماد الباني. تأكد من حصولهم على التراخيص والشهادات اللازمة للعمل في منطقتك. ابحث عن بناة يتمتعون بسجل حافل وخبرة في مشاريع مماثلة لمشروعك. سيكون البناؤون ذوو الخبرة على دراية بقوانين البناء المحلية ولوائح تقسيم المناطق والتحديات المحتملة لنوع المشروع المحدد الخاص بك.</p>\\r\\n\\r\\n<p>مستقبل ممارسات البناء المستدامة<br />\\r\\nهناك العديد من الاختلافات في مقاطع Lorem Ipsum المتاحة، ولكن الغالبية تعرضت للتغيير في شكل ما، عن طريق إدخال الفكاهة أو الكلمات العشوائية التي لا تبدو معقولة حتى قليلاً. إذا كنت ستستخدم مقطعًا.</p>\\r\\n\\r\\n<p>تركيب وإصلاح شامل للأسقف<br />\\r\\nتجديدات المباني وتوسيعها وإعادة تشكيلها<br />\\r\\nالتنظيف بعد البناء والتفتيش النهائي<br />\\r\\nخدمات بناء المساكن السكنية المخصصة</p>\",\"en\":\"<p>Choosing the right builder is crucial for the success of your construction project. This guide offers ten essential tips to help you select a qualified and reliable builder. From checking qualifications and reviewing past work to evaluating communication skills.</p>\\r\\n\\r\\n<p>Selecting the right builder is a pivotal step in ensuring the success of your construction project, whether you&#39;re building a new home, renovating an existing structure, or embarking on a commercial development. The right builder not only enhances the quality of the construction but also makes the entire process smoother and more enjoyable. Here are several essential tips to guide you in choosing the right builder for your needs:</p>\\r\\n\\r\\n<p>Choosing the right builder is crucial. Focus on qualifications, reviews, communication, and detailed quotes to ensure a successful construction project that aligns with your vision and expectations.</p>\\r\\n\\r\\n<p>Start by verifying the builder&#39;s credentials. Ensure they have the necessary licenses and certifications to operate in your area. Look for builders with a solid track record and experience in projects similar to yours. Experienced builders will be familiar with local building codes, zoning regulations, and the potential challenges of your specific project type.</p>\\r\\n\\r\\n<p>The future of sustainable building practice<br />\\r\\nThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage.</p>\\r\\n\\r\\n<p>Comprehensive Roofing Installation and Repair<br />\\r\\nBuilding Renovations, Extensions, and Remodeling<br />\\r\\nPost-Construction Cleanup and Final Inspection<br />\\r\\nCustom Residential Home Building Services</p>\"}', '2025-03-09 08:22:14', '2025-03-10 19:13:02'),
(13, 'd6c2892442a54432d1f6dd08a076cd1f993a7cd75c969cfbbc7aca29ddb76de8.jpg', '{\"ar\":\"مواد مبتكرة في البناء\",\"en\":\"Innovative Materials in Construction\"}', '{\"ar\":\"<p>يعد اختيار الباني المناسب أمرًا بالغ الأهمية لنجاح مشروع البناء الخاص بك. يقدم هذا الدليل عشر نصائح أساسية لمساعدتك في اختيار الباني المؤهل والموثوق به. من التحقق من المؤهلات ومراجعة الأعمال السابقة إلى تقييم مهارات الاتصال.</p>\\r\\n\\r\\n<p>يعد اختيار الباني المناسب خطوة محورية في ضمان نجاح مشروع البناء الخاص بك، سواء كنت تبني منزلًا جديدًا أو تجدد مبنى قائمًا أو تشرع في تطوير تجاري. لا يعمل الباني المناسب على تحسين جودة البناء فحسب، بل يجعل العملية بأكملها أكثر سلاسة ومتعة. فيما يلي العديد من النصائح الأساسية لتوجيهك في اختيار الباني المناسب لاحتياجاتك:</p>\\r\\n\\r\\n<p>يعد اختيار الباني المناسب أمرًا بالغ الأهمية. ركز على المؤهلات والمراجعات والاتصال والعروض التفصيلية لضمان مشروع بناء ناجح يتماشى مع رؤيتك وتوقعاتك.</p>\\r\\n\\r\\n<p>ابدأ بالتحقق من بيانات اعتماد الباني. تأكد من حصولهم على التراخيص والشهادات اللازمة للعمل في منطقتك. ابحث عن بناة يتمتعون بسجل حافل وخبرة في مشاريع مماثلة لمشروعك. سيكون البناؤون ذوو الخبرة على دراية بقوانين البناء المحلية ولوائح تقسيم المناطق والتحديات المحتملة لنوع المشروع المحدد الخاص بك.</p>\\r\\n\\r\\n<p>مستقبل ممارسات البناء المستدامة<br />\\r\\nهناك العديد من الاختلافات في مقاطع Lorem Ipsum المتاحة، ولكن الغالبية تعرضت للتغيير في شكل ما، عن طريق إدخال الفكاهة أو الكلمات العشوائية التي لا تبدو معقولة حتى قليلاً. إذا كنت ستستخدم مقطعًا.</p>\\r\\n\\r\\n<p>تركيب وإصلاح شامل للأسقف<br />\\r\\nتجديدات المباني وتوسيعها وإعادة تشكيلها<br />\\r\\nالتنظيف بعد البناء والتفتيش النهائي<br />\\r\\nخدمات بناء المساكن السكنية المخصصة</p>\",\"en\":\"<p>Choosing the right builder is crucial for the success of your construction project. This guide offers ten essential tips to help you select a qualified and reliable builder. From checking qualifications and reviewing past work to evaluating communication skills.</p>\\r\\n\\r\\n<p>Selecting the right builder is a pivotal step in ensuring the success of your construction project, whether you&#39;re building a new home, renovating an existing structure, or embarking on a commercial development. The right builder not only enhances the quality of the construction but also makes the entire process smoother and more enjoyable. Here are several essential tips to guide you in choosing the right builder for your needs:</p>\\r\\n\\r\\n<p>Choosing the right builder is crucial. Focus on qualifications, reviews, communication, and detailed quotes to ensure a successful construction project that aligns with your vision and expectations.</p>\\r\\n\\r\\n<p>Start by verifying the builder&#39;s credentials. Ensure they have the necessary licenses and certifications to operate in your area. Look for builders with a solid track record and experience in projects similar to yours. Experienced builders will be familiar with local building codes, zoning regulations, and the potential challenges of your specific project type.</p>\\r\\n\\r\\n<p>The future of sustainable building practice<br />\\r\\nThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage.</p>\\r\\n\\r\\n<p>Comprehensive Roofing Installation and Repair<br />\\r\\nBuilding Renovations, Extensions, and Remodeling<br />\\r\\nPost-Construction Cleanup and Final Inspection<br />\\r\\nCustom Residential Home Building Services</p>\"}', '2025-03-09 08:23:19', '2025-03-10 19:13:26'),
(14, 'b0f451ce931ff124922367a0d4f6cad2e2fff8f6e21a8eff795390443512b94b.jpg', '{\"ar\":\"الروبوتات إحداث ثورة في البناء\",\"en\":\"Robotics Revolutionizing Construction\"}', '{\"ar\":\"<p>يعد اختيار الباني المناسب أمرًا بالغ الأهمية لنجاح مشروع البناء الخاص بك. يقدم هذا الدليل عشر نصائح أساسية لمساعدتك في اختيار الباني المؤهل والموثوق به. من التحقق من المؤهلات ومراجعة الأعمال السابقة إلى تقييم مهارات الاتصال.</p>\\r\\n\\r\\n<p>يعد اختيار الباني المناسب خطوة محورية في ضمان نجاح مشروع البناء الخاص بك، سواء كنت تبني منزلًا جديدًا أو تجدد مبنى قائمًا أو تشرع في تطوير تجاري. لا يعمل الباني المناسب على تحسين جودة البناء فحسب، بل يجعل العملية بأكملها أكثر سلاسة ومتعة. فيما يلي العديد من النصائح الأساسية لتوجيهك في اختيار الباني المناسب لاحتياجاتك:</p>\\r\\n\\r\\n<p>يعد اختيار الباني المناسب أمرًا بالغ الأهمية. ركز على المؤهلات والمراجعات والاتصال والعروض التفصيلية لضمان مشروع بناء ناجح يتماشى مع رؤيتك وتوقعاتك.</p>\\r\\n\\r\\n<p>ابدأ بالتحقق من بيانات اعتماد الباني. تأكد من حصولهم على التراخيص والشهادات اللازمة للعمل في منطقتك. ابحث عن بناة يتمتعون بسجل حافل وخبرة في مشاريع مماثلة لمشروعك. سيكون البناؤون ذوو الخبرة على دراية بقوانين البناء المحلية ولوائح تقسيم المناطق والتحديات المحتملة لنوع المشروع المحدد الخاص بك.</p>\\r\\n\\r\\n<p>مستقبل ممارسات البناء المستدامة<br />\\r\\nهناك العديد من الاختلافات في مقاطع Lorem Ipsum المتاحة، ولكن الغالبية تعرضت للتغيير في شكل ما، عن طريق إدخال الفكاهة أو الكلمات العشوائية التي لا تبدو معقولة حتى قليلاً. إذا كنت ستستخدم مقطعًا.</p>\\r\\n\\r\\n<p>تركيب وإصلاح شامل للأسقف<br />\\r\\nتجديدات المباني وتوسيعها وإعادة تشكيلها<br />\\r\\nالتنظيف بعد البناء والتفتيش النهائي<br />\\r\\nخدمات بناء المساكن السكنية المخصصة</p>\",\"en\":\"<p>Choosing the right builder is crucial for the success of your construction project. This guide offers ten essential tips to help you select a qualified and reliable builder. From checking qualifications and reviewing past work to evaluating communication skills.</p>\\r\\n\\r\\n<p>Selecting the right builder is a pivotal step in ensuring the success of your construction project, whether you&#39;re building a new home, renovating an existing structure, or embarking on a commercial development. The right builder not only enhances the quality of the construction but also makes the entire process smoother and more enjoyable. Here are several essential tips to guide you in choosing the right builder for your needs:</p>\\r\\n\\r\\n<p>Choosing the right builder is crucial. Focus on qualifications, reviews, communication, and detailed quotes to ensure a successful construction project that aligns with your vision and expectations.</p>\\r\\n\\r\\n<p>Start by verifying the builder&#39;s credentials. Ensure they have the necessary licenses and certifications to operate in your area. Look for builders with a solid track record and experience in projects similar to yours. Experienced builders will be familiar with local building codes, zoning regulations, and the potential challenges of your specific project type.</p>\\r\\n\\r\\n<p>The future of sustainable building practice<br />\\r\\nThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage.</p>\\r\\n\\r\\n<p>Comprehensive Roofing Installation and Repair<br />\\r\\nBuilding Renovations, Extensions, and Remodeling<br />\\r\\nPost-Construction Cleanup and Final Inspection<br />\\r\\nCustom Residential Home Building Services</p>\"}', '2025-03-09 08:24:11', '2025-03-10 19:13:42'),
(15, '2f70a338c5d5dedd01f92203d930198fc62aef68faa433da3a07ce4f6c5f1df7.jpg', '{\"ar\":\"إدارة المخاطر في البناء: أفضل الممارسات لعام 2024\",\"en\":\"Managing Risk in Construction: Best Practices for 2024\"}', '{\"ar\":\"<p>يعد اختيار الباني المناسب أمرًا بالغ الأهمية لنجاح مشروع البناء الخاص بك. يقدم هذا الدليل عشر نصائح أساسية لمساعدتك في اختيار الباني المؤهل والموثوق به. من التحقق من المؤهلات ومراجعة الأعمال السابقة إلى تقييم مهارات الاتصال.</p>\\r\\n\\r\\n<p>يعد اختيار الباني المناسب خطوة محورية في ضمان نجاح مشروع البناء الخاص بك، سواء كنت تبني منزلًا جديدًا أو تجدد مبنى قائمًا أو تشرع في تطوير تجاري. لا يعمل الباني المناسب على تحسين جودة البناء فحسب، بل يجعل العملية بأكملها أكثر سلاسة ومتعة. فيما يلي العديد من النصائح الأساسية لتوجيهك في اختيار الباني المناسب لاحتياجاتك:</p>\\r\\n\\r\\n<p>يعد اختيار الباني المناسب أمرًا بالغ الأهمية. ركز على المؤهلات والمراجعات والاتصال والعروض التفصيلية لضمان مشروع بناء ناجح يتماشى مع رؤيتك وتوقعاتك.</p>\\r\\n\\r\\n<p>ابدأ بالتحقق من بيانات اعتماد الباني. تأكد من حصولهم على التراخيص والشهادات اللازمة للعمل في منطقتك. ابحث عن بناة يتمتعون بسجل حافل وخبرة في مشاريع مماثلة لمشروعك. سيكون البناؤون ذوو الخبرة على دراية بقوانين البناء المحلية ولوائح تقسيم المناطق والتحديات المحتملة لنوع المشروع المحدد الخاص بك.</p>\\r\\n\\r\\n<p>مستقبل ممارسات البناء المستدامة<br />\\r\\nهناك العديد من الاختلافات في مقاطع Lorem Ipsum المتاحة، ولكن الغالبية تعرضت للتغيير في شكل ما، عن طريق إدخال الفكاهة أو الكلمات العشوائية التي لا تبدو معقولة حتى قليلاً. إذا كنت ستستخدم مقطعًا.</p>\\r\\n\\r\\n<p>تركيب وإصلاح شامل للأسقف<br />\\r\\nتجديدات المباني وتوسيعها وإعادة تشكيلها<br />\\r\\nالتنظيف بعد البناء والتفتيش النهائي<br />\\r\\nخدمات بناء المساكن السكنية المخصصة</p>\",\"en\":\"<p>Choosing the right builder is crucial for the success of your construction project. This guide offers ten essential tips to help you select a qualified and reliable builder. From checking qualifications and reviewing past work to evaluating communication skills.</p>\\r\\n\\r\\n<p>Selecting the right builder is a pivotal step in ensuring the success of your construction project, whether you&#39;re building a new home, renovating an existing structure, or embarking on a commercial development. The right builder not only enhances the quality of the construction but also makes the entire process smoother and more enjoyable. Here are several essential tips to guide you in choosing the right builder for your needs:</p>\\r\\n\\r\\n<p>Choosing the right builder is crucial. Focus on qualifications, reviews, communication, and detailed quotes to ensure a successful construction project that aligns with your vision and expectations.</p>\\r\\n\\r\\n<p>Start by verifying the builder&#39;s credentials. Ensure they have the necessary licenses and certifications to operate in your area. Look for builders with a solid track record and experience in projects similar to yours. Experienced builders will be familiar with local building codes, zoning regulations, and the potential challenges of your specific project type.</p>\\r\\n\\r\\n<p>The future of sustainable building practice<br />\\r\\nThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage.</p>\\r\\n\\r\\n<p>Comprehensive Roofing Installation and Repair<br />\\r\\nBuilding Renovations, Extensions, and Remodeling<br />\\r\\nPost-Construction Cleanup and Final Inspection<br />\\r\\nCustom Residential Home Building Services</p>\"}', '2025-03-09 08:25:03', '2025-03-10 19:15:23');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `second_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `phone` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `first_name`, `second_name`, `email`, `message`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'Ila', 'Hunter', 'racadotam@mailinator.com', 'Cupidatat sit quo au', '+1 (197) 265-4604', '2024-12-04 18:31:14', '2024-12-04 18:31:14'),
(2, 'Drake', 'Mueller', 'vowesymi@mailinator.com', 'Nemo incididunt laud', '+1 (949) 425-8212', '2024-12-04 19:01:15', '2024-12-04 19:01:15');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` longtext NOT NULL,
  `section_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `section_id`, `created_at`, `updated_at`) VALUES
(20, '{\"en\":\"What types of projects do you specialize in?\",\"ar\":\"ما هي أنواع المشاريع التي تتخصص فيها؟\"}', '{\"en\":\"Our post-construction services gives you peace of mind knowing that we are still here for you even after.\",\"ar\":\"تمنحك خدمات ما بعد البناء لدينا راحة البال مع العلم أننا ما زلنا هنا من أجلك حتى بعد ذلك.\"}', 10, '2025-03-09 10:06:54', '2025-03-09 10:06:54'),
(21, '{\"en\":\"How do I start a project with your company\",\"ar\":\"كيف أبدأ مشروع مع شركتكم\"}', '{\"en\":\"Our post-construction services gives you peace of mind knowing that we are still here for you even after.\",\"ar\":\"تمنحك خدمات ما بعد البناء لدينا راحة البال مع العلم أننا ما زلنا هنا من أجلك حتى بعد ذلك.\"}', 10, '2025-03-09 10:07:46', '2025-03-09 10:07:46'),
(22, '{\"en\":\"Do you offer a free, no obligation quotation\",\"ar\":\"هل تقدم عرض أسعار مجاني وغير ملزم؟\"}', '{\"en\":\"Our post-construction services gives you peace of mind knowing that we are still here for you even after.\",\"ar\":\"تمنحك خدمات ما بعد البناء لدينا راحة البال مع العلم أننا ما زلنا هنا من أجلك حتى بعد ذلك.\"}', 10, '2025-03-09 10:13:44', '2025-03-09 10:13:44'),
(23, '{\"en\":\"?What services do you offer\",\"ar\":\"ما هي الخدمات التي تقدمها؟\"}', '{\"en\":\"Our post-construction services gives you peace of mind knowing that we are still here for you even after.\",\"ar\":\"تمنحك خدمات ما بعد البناء لدينا راحة البال مع العلم أننا ما زلنا هنا من أجلك حتى بعد ذلك.\"}', 10, '2025-03-09 10:15:04', '2025-03-09 10:15:04'),
(24, '{\"en\":\"What factors affect the project timeline?\",\"ar\":\"ما هي العوامل التي تؤثر على الجدول الزمني للمشروع؟\"}', '{\"en\":\"Our post-construction services gives you peace of mind knowing that we are still here for you even after.\",\"ar\":\"تمنحك خدمات ما بعد البناء لدينا راحة البال مع العلم أننا ما زلنا هنا من أجلك حتى بعد ذلك.\"}', 11, '2025-03-09 10:16:18', '2025-03-09 10:16:18'),
(25, '{\"en\":\"What are the key milestones in a construction project\",\"ar\":\"ما هي المعالم الرئيسية في مشروع البناء؟\"}', '{\"en\":\"Our post-construction services gives you peace of mind knowing that we are still here for you even after.\",\"ar\":\"تمنحك خدمات ما بعد البناء لدينا راحة البال مع العلم أننا ما زلنا هنا من أجلك حتى بعد ذلك.\"}', 11, '2025-03-09 10:17:37', '2025-03-09 10:17:37'),
(26, '{\"en\":\"What happens if there are delays in the project\",\"ar\":\"ماذا يحدث إذا كان هناك تأخير في المشروع\"}', '{\"en\":\"Our post-construction services gives you peace of mind knowing that we are still here for you even after.\",\"ar\":\"تمنحك خدمات ما بعد البناء لدينا راحة البال مع العلم أننا ما زلنا هنا من أجلك حتى بعد ذلك.\"}', 11, '2025-03-09 10:18:16', '2025-03-09 10:18:16'),
(27, '{\"en\":\"What are the main phases of the construction process\",\"ar\":\"ما هي المراحل الرئيسية لعملية البناء\"}', '{\"en\":\"Our post-construction services gives you peace of mind knowing that we are still here for you even after.\",\"ar\":\"تمنحك خدمات ما بعد البناء لدينا راحة البال مع العلم أننا ما زلنا هنا من أجلك حتى بعد ذلك.\"}', 13, '2025-03-09 10:20:30', '2025-03-09 10:20:30'),
(28, '{\"en\":\"What permits are required for construction\",\"ar\":\"ما هي التصاريح المطلوبة للبناء\"}', '{\"en\":\"Our post-construction services gives you peace of mind knowing that we are still here for you even after.\",\"ar\":\"تمنحك خدمات ما بعد البناء لدينا راحة البال مع العلم أننا ما زلنا هنا من أجلك حتى بعد ذلك.\"}', 13, '2025-03-09 10:21:15', '2025-03-09 10:21:15'),
(29, '{\"en\":\"What materials are commonly used in sustainable construction\",\"ar\":\"ما هي المواد المستخدمة عادة في البناء المستدام\"}', '{\"en\":\"Our post-construction services gives you peace of mind knowing that we are still here for you even after.\",\"ar\":\"تمنحك خدمات ما بعد البناء لدينا راحة البال مع العلم أننا ما زلنا هنا من أجلك حتى بعد ذلك.\"}', 15, '2025-03-09 10:27:21', '2025-03-09 10:28:43'),
(30, '{\"en\":\"What types of projects do you specialize in?\",\"ar\":\"ما هي أنواع المشاريع التي تتخصص فيها؟\"}', '{\"en\":\"Our post-construction services gives you peace of mind knowing that we are still here for you even after.\",\"ar\":\"تمنحك خدمات ما بعد البناء لدينا راحة البال مع العلم أننا ما زلنا هنا من أجلك حتى بعد ذلك.\"}', 15, '2025-03-09 10:27:49', '2025-03-09 10:27:49'),
(31, '{\"en\":\"Do you offer a free, no obligation quotation\",\"ar\":\"ما هي أنواع المشاريع التي تتخصص فيها؟\"}', '{\"en\":\"Our post-construction services gives you peace of mind knowing that we are still here for you even after.\",\"ar\":\"تمنحك خدمات ما بعد البناء لدينا راحة البال مع العلم أننا ما زلنا هنا من أجلك حتى بعد ذلك.\"}', 15, '2025-03-09 10:27:59', '2025-03-09 10:27:59');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_zone_image` varchar(255) DEFAULT NULL,
  `first_zone_title` varchar(255) DEFAULT NULL,
  `first_zone_description` varchar(1000) DEFAULT NULL,
  `second_zone_image` varchar(255) DEFAULT NULL,
  `second_zone_title` varchar(255) DEFAULT NULL,
  `second_zone_mini_description` varchar(1000) DEFAULT NULL,
  `second_zone_item_1_description` varchar(1000) DEFAULT NULL,
  `second_zone_item_2_description` varchar(1000) DEFAULT NULL,
  `second_zone_item_3_description` varchar(1000) DEFAULT NULL,
  `third_zone_title_item_one` varchar(255) DEFAULT NULL,
  `third_zone_mini_description_item_one` varchar(1000) DEFAULT NULL,
  `third_zone_title_item_two` varchar(255) DEFAULT NULL,
  `third_zone_mini_description_item_two` varchar(1000) DEFAULT NULL,
  `third_zone_title_item_three` varchar(255) DEFAULT NULL,
  `third_zone_mini_description_item_three` varchar(1000) DEFAULT NULL,
  `third_zone_title_item_four` varchar(255) DEFAULT NULL,
  `third_zone_mini_description_item_four` varchar(1000) DEFAULT NULL,
  `fourth_zone_image` varchar(255) DEFAULT NULL,
  `fourth_zone_title` varchar(255) DEFAULT NULL,
  `fourth_zone_description` varchar(1000) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `first_zone_image`, `first_zone_title`, `first_zone_description`, `second_zone_image`, `second_zone_title`, `second_zone_mini_description`, `second_zone_item_1_description`, `second_zone_item_2_description`, `second_zone_item_3_description`, `third_zone_title_item_one`, `third_zone_mini_description_item_one`, `third_zone_title_item_two`, `third_zone_mini_description_item_two`, `third_zone_title_item_three`, `third_zone_mini_description_item_three`, `third_zone_title_item_four`, `third_zone_mini_description_item_four`, `fourth_zone_image`, `fourth_zone_title`, `fourth_zone_description`, `created_at`, `updated_at`) VALUES
(1, '10ff67e21a7df83c2c82a1a9cce6a56300366f6f19b4e6cc207d05f91fc589b4.jpg', '{\"ar\":\"عنوان الجزء الأول (عربي)\",\"en\":\"First Zone Title (English)\"}', '{\"ar\":\"وصف الجزء الأول (عربي)\",\"en\":\"First Zone Description (English)\"}', 'a1a55317b800a58f587c7f059c527f5c84fc9f411f094080edba3dbb6e40d5e1.jpg', '{\"ar\":\"عنوان الجزء الثاني (عربي)\",\"en\":\"Second Zone Title (English)\"}', '{\"ar\":\"وصف صغير الجزء الثاني (عربي)\",\"en\":\"Second Zone Mini Description (English)\"}', '{\"ar\":\"وصف العنصر الأول الجزء الثاني (عربي)\",\"en\":\"Second Zone Item 1 Description (English)\"}', '{\"ar\":\"وصف العنصر الثاني الجزء الثاني (عربي)\",\"en\":\"Second Zone Item 2 Description (English)\"}', '{\"ar\":\"وصف العنصر الثالث الجزء الثاني (عربي)\",\"en\":\"Second Zone Item 3 Description (English)\"}', '100', '{\"ar\":\"الوصف المختصر للعنصر الأول (بالعربية)\",\"en\":\"Item One Short Description (English)\"}', '100', '{\"ar\":\"الوصف المختصر للعنصر الثانى(بالعربية)\",\"en\":\"Item Two Short Description (English)\"}', '+46', '{\"ar\":\"الوصف المختصر للعنصر الثالث(بالعربية)\",\"en\":\"Item Three Short Description (English)\"}', '+532', '{\"ar\":\"الوصف المختصر للعنصر الرابع (بالعربية)\",\"en\":\"Item Four Short Description (English)\"}', 'e00f52453e4dcdcf56cdb656764ac7cd9954a0ae051aab07c0c4b04738ccebbf.png', '{\"ar\":\"عنوان القسم الرابع (عربي)\",\"en\":\"Fourth Zone Title (English)\"}', '{\"ar\":\"<p>&nbsp;</p>\\r\\n\\r\\n<p><strong>وصف القسم الرابع (عربي)</strong></p>\\r\\n\\r\\n<p>&nbsp;</p>\",\"en\":\"<p>&nbsp;</p>\\r\\n\\r\\n<p>&nbsp;</p>\\r\\n\\r\\n<p><strong>Fourth Zone Description (English)</strong></p>\\r\\n\\r\\n<p>&nbsp;</p>\"}', '2025-03-10 06:00:18', '2025-03-22 10:13:31');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_11_03_191201_create_services_table', 1),
(6, '2024_11_03_191306_create_projects_table', 1),
(8, '2024_11_03_211025_create_services_details_table', 1),
(9, '2024_11_05_105538_create_sections_faqs_table', 1),
(10, '2024_11_05_231749_create_articles_table', 1),
(11, '2024_11_06_124512_create_faqs_table', 1),
(12, '2024_11_06_140144_create_teams_table', 1),
(13, '2024_11_07_103133_create_contact_us_table', 1),
(15, '2024_11_07_130125_create_points_abouts_table', 1),
(16, '2024_11_19_092839_create_about_images_table', 1),
(17, '2024_11_20_093723_create_partners_table', 1),
(18, '2024_12_02_224516_create_service_images_table', 2),
(19, '2025_03_04_213812_create_home_table', 3),
(20, '2024_11_03_192503_create_settings_table', 4),
(21, '2025_03_05_124745_create_abouts_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `points_abouts`
--

CREATE TABLE `points_abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `about_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `description` longtext DEFAULT NULL,
  `client` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `image`, `description`, `client`, `category`, `date`, `location`, `created_at`, `updated_at`) VALUES
(9, '{\"ar\":\"تشييد المباني\",\"en\":\"building construction\"}', 'dabbd35ca7e4e0da1a651b5e474051a8ae8a0cfc195e0591314d5ee974cef50f.jpg', '{\"ar\":\"<p>يقع Harborview Residences على طول الواجهة البحرية الخلابة، ويوفر مزيجًا فريدًا من الفخامة والراحة في بيئة هادئة. يتميز هذا المجتمع الحصري بمنازل مصممة بشكل جميل تجمع بسلاسة بين الجماليات الحديثة والأناقة الخالدة. يتميز كل مسكن بمخططات أرضية واسعة وتشطيبات راقية ونوافذ واسعة توفر إطلالات خلابة على الميناء والمناظر الطبيعية المحيطة.</p>\\r\\n\\r\\n<p>يستمتع السكان بمجموعة من وسائل الراحة المتميزة، بما في ذلك مركز لياقة بدنية على أحدث طراز ومسبح خارجي متلألئ وحدائق ذات مناظر طبيعية مثالية للاسترخاء. يوفر الموقع سهولة الوصول إلى المطاعم المحلية والتسوق والفرص الترفيهية، مما يضمن نمط حياة نابض بالحياة.</p>\\r\\n\\r\\n<p>تحدي عملائنا<br />\\r\\nتطوير وصيانة برامج التحول في التمويل والخدمات اللوجستية / سلاسل التوريد وتكنولوجيا المعلومات والتدريب والمشتريات للمساعدة في تعزيز فعالية التكلفة والكفاءة دون فقدان القدرة الدفاعية. الاستفادة من الفرص للمساعدة في خفض التكاليف مع الحفاظ على القدرة التشغيلية من خلال الشراكات.</p>\\r\\n\\r\\n<p>مناظر خلابة للواجهة البحرية<br />\\r\\nمخططات أرضية واسعة ومفتوحة<br />\\r\\nشرفات وفناءات خاصة<br />\\r\\nحدائق مجتمعية ذات مناظر طبيعية</p>\",\"en\":\"<p>Nestled along the picturesque waterfront, Harborview Residences offers a unique blend of luxury and comfort in a serene setting. This exclusive community features beautifully designed homes that seamlessly combine modern aesthetics with timeless elegance. Each residence boasts spacious floor plans, high-end finishes, and expansive windows that provide breathtaking views of the harbor and surrounding landscapes.</p>\\r\\n\\r\\n<p>Residents enjoy a host of premium amenities, including a state-of-the-art fitness center, a sparkling outdoor pool, and landscaped gardens perfect for relaxation. The location provides easy access to local dining, shopping, and recreational opportunities, ensuring a vibrant lifestyle.</p>\\r\\n\\r\\n<h2>&nbsp;</h2>\\r\\n\\r\\n<p><strong>Developing and maintaining transformation programs in finance, logistics/supply chains, information technology, training and procurement to help foster cost effectiveness and efficiency without the loss of Defense capability. Taking advantage of opportunities to help reduce costs while maintaining operational capability through partnerships.</strong></p>\\r\\n\\r\\n<ul>\\r\\n\\t<li>breathtaking waterfront views</li>\\r\\n\\t<li>spacious and open floor plans</li>\\r\\n\\t<li>private balconies and patios</li>\\r\\n\\t<li>landscaped community gardens</li>\\r\\n</ul>\"}', '{\"ar\":\"وادي وارين\",\"en\":\"wade warren\"}', '{\"ar\":\"انشاءات\",\"en\":\"constructions\"}', '2025-03-09', '{\"ar\":\"القاهره-مصر\",\"en\":\"Cairo-egypt\"}', '2025-03-09 08:58:58', '2025-03-10 19:09:22'),
(10, '{\"ar\":\"مساكن هاربور فيو\",\"en\":\"harborview residences\"}', 'bba3eb09b54fec61b3a9fbb9c0922b1c95f9ca0eb0028b55601edf89477d79b2.jpg', '{\"ar\":\"<p>يقع Harborview Residences على طول الواجهة البحرية الخلابة، ويوفر مزيجًا فريدًا من الفخامة والراحة في بيئة هادئة. يتميز هذا المجتمع الحصري بمنازل مصممة بشكل جميل تجمع بسلاسة بين الجماليات الحديثة والأناقة الخالدة. يتميز كل مسكن بمخططات أرضية واسعة وتشطيبات راقية ونوافذ واسعة توفر إطلالات خلابة على الميناء والمناظر الطبيعية المحيطة.</p>\\r\\n\\r\\n<p>يستمتع السكان بمجموعة من وسائل الراحة المتميزة، بما في ذلك مركز لياقة بدنية على أحدث طراز ومسبح خارجي متلألئ وحدائق ذات مناظر طبيعية مثالية للاسترخاء. يوفر الموقع سهولة الوصول إلى المطاعم المحلية والتسوق والفرص الترفيهية، مما يضمن نمط حياة نابض بالحياة.</p>\\r\\n\\r\\n<p>تحدي عملائنا<br />\\r\\nتطوير وصيانة برامج التحول في التمويل والخدمات اللوجستية / سلاسل التوريد وتكنولوجيا المعلومات والتدريب والمشتريات للمساعدة في تعزيز فعالية التكلفة والكفاءة دون فقدان القدرة الدفاعية. الاستفادة من الفرص للمساعدة في خفض التكاليف مع الحفاظ على القدرة التشغيلية من خلال الشراكات.</p>\\r\\n\\r\\n<p>مناظر خلابة للواجهة البحرية<br />\\r\\nمخططات أرضية واسعة ومفتوحة<br />\\r\\nشرفات وفناءات خاصة<br />\\r\\nحدائق مجتمعية ذات مناظر طبيعية</p>\",\"en\":\"<p>Nestled along the picturesque waterfront, Harborview Residences offers a unique blend of luxury and comfort in a serene setting. This exclusive community features beautifully designed homes that seamlessly combine modern aesthetics with timeless elegance. Each residence boasts spacious floor plans, high-end finishes, and expansive windows that provide breathtaking views of the harbor and surrounding landscapes.</p>\\r\\n\\r\\n<p>Residents enjoy a host of premium amenities, including a state-of-the-art fitness center, a sparkling outdoor pool, and landscaped gardens perfect for relaxation. The location provides easy access to local dining, shopping, and recreational opportunities, ensuring a vibrant lifestyle.</p>\\r\\n\\r\\n<p>our client&#39;s challenge<br />\\r\\nDeveloping and maintaining transformation programs in finance, logistics/supply chains, information technology, training and procurement to help foster cost effectiveness and efficiency without the loss of Defense capability. Taking advantage of opportunities to help reduce costs while maintaining operational capability through partnerships.</p>\\r\\n\\r\\n<p>breathtaking waterfront views<br />\\r\\nspacious and open floor plans<br />\\r\\nprivate balconies and patios<br />\\r\\nlandscaped community gardens</p>\"}', '{\"ar\":\"وادي وارين\",\"en\":\"wade warren\"}', '{\"ar\":\"انشاءات\",\"en\":\"constructions\"}', '2025-04-01', '{\"ar\":\"القاهره-مصر\",\"en\":\"Cairo-egypt\"}', '2025-03-09 09:00:40', '2025-03-10 19:08:58'),
(11, '{\"ar\":\"urban renewal initiative\",\"en\":\"urban renewal initiative\"}', '8a16f8d4ffbea9ca953b69932c42145d7c8e09e0b7d5eb4c59d23ab4f6b99cbb.jpg', '{\"ar\":\"<p>يقع Harborview Residences على طول الواجهة البحرية الخلابة، ويوفر مزيجًا فريدًا من الفخامة والراحة في بيئة هادئة. يتميز هذا المجتمع الحصري بمنازل مصممة بشكل جميل تجمع بسلاسة بين الجماليات الحديثة والأناقة الخالدة. يتميز كل مسكن بمخططات أرضية واسعة وتشطيبات راقية ونوافذ واسعة توفر إطلالات خلابة على الميناء والمناظر الطبيعية المحيطة.</p>\\r\\n\\r\\n<p>يستمتع السكان بمجموعة من وسائل الراحة المتميزة، بما في ذلك مركز لياقة بدنية على أحدث طراز ومسبح خارجي متلألئ وحدائق ذات مناظر طبيعية مثالية للاسترخاء. يوفر الموقع سهولة الوصول إلى المطاعم المحلية والتسوق والفرص الترفيهية، مما يضمن نمط حياة نابض بالحياة.</p>\\r\\n\\r\\n<p>تحدي عملائنا<br />\\r\\nتطوير وصيانة برامج التحول في التمويل والخدمات اللوجستية / سلاسل التوريد وتكنولوجيا المعلومات والتدريب والمشتريات للمساعدة في تعزيز فعالية التكلفة والكفاءة دون فقدان القدرة الدفاعية. الاستفادة من الفرص للمساعدة في خفض التكاليف مع الحفاظ على القدرة التشغيلية من خلال الشراكات.</p>\\r\\n\\r\\n<p>مناظر خلابة للواجهة البحرية<br />\\r\\nمخططات أرضية واسعة ومفتوحة<br />\\r\\nشرفات وفناءات خاصة<br />\\r\\nحدائق مجتمعية ذات مناظر طبيعية</p>\",\"en\":\"<p>Nestled along the picturesque waterfront, Harborview Residences offers a unique blend of luxury and comfort in a serene setting. This exclusive community features beautifully designed homes that seamlessly combine modern aesthetics with timeless elegance. Each residence boasts spacious floor plans, high-end finishes, and expansive windows that provide breathtaking views of the harbor and surrounding landscapes.</p>\\r\\n\\r\\n<p>Residents enjoy a host of premium amenities, including a state-of-the-art fitness center, a sparkling outdoor pool, and landscaped gardens perfect for relaxation. The location provides easy access to local dining, shopping, and recreational opportunities, ensuring a vibrant lifestyle.</p>\\r\\n\\r\\n<p>our client&#39;s challenge<br />\\r\\nDeveloping and maintaining transformation programs in finance, logistics/supply chains, information technology, training and procurement to help foster cost effectiveness and efficiency without the loss of Defense capability. Taking advantage of opportunities to help reduce costs while maintaining operational capability through partnerships.</p>\\r\\n\\r\\n<p>breathtaking waterfront views<br />\\r\\nspacious and open floor plans<br />\\r\\nprivate balconies and patios<br />\\r\\nlandscaped community gardens</p>\"}', '{\"ar\":\"وادي وارين\",\"en\":\"wade warren\"}', '{\"ar\":\"انشاءات\",\"en\":\"constructions\"}', NULL, '{\"ar\":\"القاهره-مصر\",\"en\":\"Cairo-egypt\"}', '2025-03-09 09:02:05', '2025-03-10 19:08:39'),
(12, '{\"ar\":\"دقة البناء\",\"en\":\"precision builders\"}', 'c3b941ce32b21c5ca8fd77a930afff9200ef27c66d67389b30b506b0fbd1a719.jpg', '{\"ar\":\"<p>يقع Harborview Residences على طول الواجهة البحرية الخلابة، ويوفر مزيجًا فريدًا من الفخامة والراحة في بيئة هادئة. يتميز هذا المجتمع الحصري بمنازل مصممة بشكل جميل تجمع بسلاسة بين الجماليات الحديثة والأناقة الخالدة. يتميز كل مسكن بمخططات أرضية واسعة وتشطيبات راقية ونوافذ واسعة توفر إطلالات خلابة على الميناء والمناظر الطبيعية المحيطة.</p>\\r\\n\\r\\n<p>يستمتع السكان بمجموعة من وسائل الراحة المتميزة، بما في ذلك مركز لياقة بدنية على أحدث طراز ومسبح خارجي متلألئ وحدائق ذات مناظر طبيعية مثالية للاسترخاء. يوفر الموقع سهولة الوصول إلى المطاعم المحلية والتسوق والفرص الترفيهية، مما يضمن نمط حياة نابض بالحياة.</p>\\r\\n\\r\\n<p>تحدي عملائنا<br />\\r\\nتطوير وصيانة برامج التحول في التمويل والخدمات اللوجستية / سلاسل التوريد وتكنولوجيا المعلومات والتدريب والمشتريات للمساعدة في تعزيز فعالية التكلفة والكفاءة دون فقدان القدرة الدفاعية. الاستفادة من الفرص للمساعدة في خفض التكاليف مع الحفاظ على القدرة التشغيلية من خلال الشراكات.</p>\\r\\n\\r\\n<p>مناظر خلابة للواجهة البحرية<br />\\r\\nمخططات أرضية واسعة ومفتوحة<br />\\r\\nشرفات وفناءات خاصة<br />\\r\\nحدائق مجتمعية ذات مناظر طبيعية</p>\",\"en\":\"<p>Nestled along the picturesque waterfront, Harborview Residences offers a unique blend of luxury and comfort in a serene setting. This exclusive community features beautifully designed homes that seamlessly combine modern aesthetics with timeless elegance. Each residence boasts spacious floor plans, high-end finishes, and expansive windows that provide breathtaking views of the harbor and surrounding landscapes.</p>\\r\\n\\r\\n<p>Residents enjoy a host of premium amenities, including a state-of-the-art fitness center, a sparkling outdoor pool, and landscaped gardens perfect for relaxation. The location provides easy access to local dining, shopping, and recreational opportunities, ensuring a vibrant lifestyle.</p>\\r\\n\\r\\n<p>our client&#39;s challenge<br />\\r\\nDeveloping and maintaining transformation programs in finance, logistics/supply chains, information technology, training and procurement to help foster cost effectiveness and efficiency without the loss of Defense capability. Taking advantage of opportunities to help reduce costs while maintaining operational capability through partnerships.</p>\\r\\n\\r\\n<p>breathtaking waterfront views<br />\\r\\nspacious and open floor plans<br />\\r\\nprivate balconies and patios<br />\\r\\nlandscaped community gardens</p>\"}', '{\"ar\":\"وادي وارين\",\"en\":\"wade warren\"}', '{\"ar\":\"انشاءات\",\"en\":\"constructions\"}', '2025-03-31', '{\"ar\":\"القاهره-مصر\",\"en\":\"Cairo-egypt\"}', '2025-03-09 09:04:57', '2025-03-10 19:08:18'),
(13, '{\"ar\":\"منشأة مدرسية جديدة\",\"en\":\"new school facility\"}', 'c543520a031c4cb78ff2ccaf633d0a64f6c14b59370da9e13a42ec8e5709db48.jpg', '{\"ar\":\"<p>يقع Harborview Residences على طول الواجهة البحرية الخلابة، ويوفر مزيجًا فريدًا من الفخامة والراحة في بيئة هادئة. يتميز هذا المجتمع الحصري بمنازل مصممة بشكل جميل تجمع بسلاسة بين الجماليات الحديثة والأناقة الخالدة. يتميز كل مسكن بمخططات أرضية واسعة وتشطيبات راقية ونوافذ واسعة توفر إطلالات خلابة على الميناء والمناظر الطبيعية المحيطة.</p>\\r\\n\\r\\n<p>يستمتع السكان بمجموعة من وسائل الراحة المتميزة، بما في ذلك مركز لياقة بدنية على أحدث طراز ومسبح خارجي متلألئ وحدائق ذات مناظر طبيعية مثالية للاسترخاء. يوفر الموقع سهولة الوصول إلى المطاعم المحلية والتسوق والفرص الترفيهية، مما يضمن نمط حياة نابض بالحياة.</p>\\r\\n\\r\\n<p>تحدي عملائنا<br />\\r\\nتطوير وصيانة برامج التحول في التمويل والخدمات اللوجستية / سلاسل التوريد وتكنولوجيا المعلومات والتدريب والمشتريات للمساعدة في تعزيز فعالية التكلفة والكفاءة دون فقدان القدرة الدفاعية. الاستفادة من الفرص للمساعدة في خفض التكاليف مع الحفاظ على القدرة التشغيلية من خلال الشراكات.</p>\\r\\n\\r\\n<p>مناظر خلابة للواجهة البحرية<br />\\r\\nمخططات أرضية واسعة ومفتوحة<br />\\r\\nشرفات وفناءات خاصة<br />\\r\\nحدائق مجتمعية ذات مناظر طبيعية</p>\",\"en\":\"<p>Nestled along the picturesque waterfront, Harborview Residences offers a unique blend of luxury and comfort in a serene setting. This exclusive community features beautifully designed homes that seamlessly combine modern aesthetics with timeless elegance. Each residence boasts spacious floor plans, high-end finishes, and expansive windows that provide breathtaking views of the harbor and surrounding landscapes.</p>\\r\\n\\r\\n<p>Residents enjoy a host of premium amenities, including a state-of-the-art fitness center, a sparkling outdoor pool, and landscaped gardens perfect for relaxation. The location provides easy access to local dining, shopping, and recreational opportunities, ensuring a vibrant lifestyle.</p>\\r\\n\\r\\n<p>our client&#39;s challenge<br />\\r\\nDeveloping and maintaining transformation programs in finance, logistics/supply chains, information technology, training and procurement to help foster cost effectiveness and efficiency without the loss of Defense capability. Taking advantage of opportunities to help reduce costs while maintaining operational capability through partnerships.</p>\\r\\n\\r\\n<p>breathtaking waterfront views<br />\\r\\nspacious and open floor plans<br />\\r\\nprivate balconies and patios<br />\\r\\nlandscaped community gardens</p>\"}', '{\"ar\":\"وادي وارين\",\"en\":\"wade warren\"}', '{\"ar\":\"انشاءات\",\"en\":\"constructions\"}', '2025-03-19', '{\"ar\":\"القاهره-مصر\",\"en\":\"Cairo-egypt\"}', '2025-03-09 09:06:08', '2025-03-10 19:08:04'),
(14, '{\"ar\":\"مبادرة المنزل الذكي\",\"en\":\"smart home initiative\"}', '3c797af27ddcd6f0af05f2031a1bae21e38674dae69221276af6345c38faa177.jpg', '{\"ar\":\"<p>يقع Harborview Residences على طول الواجهة البحرية الخلابة، ويوفر مزيجًا فريدًا من الفخامة والراحة في بيئة هادئة. يتميز هذا المجتمع الحصري بمنازل مصممة بشكل جميل تجمع بسلاسة بين الجماليات الحديثة والأناقة الخالدة. يتميز كل مسكن بمخططات أرضية واسعة وتشطيبات راقية ونوافذ واسعة توفر إطلالات خلابة على الميناء والمناظر الطبيعية المحيطة.</p>\\r\\n\\r\\n<p>يستمتع السكان بمجموعة من وسائل الراحة المتميزة، بما في ذلك مركز لياقة بدنية على أحدث طراز ومسبح خارجي متلألئ وحدائق ذات مناظر طبيعية مثالية للاسترخاء. يوفر الموقع سهولة الوصول إلى المطاعم المحلية والتسوق والفرص الترفيهية، مما يضمن نمط حياة نابض بالحياة.</p>\\r\\n\\r\\n<p>تحدي عملائنا<br />\\r\\nتطوير وصيانة برامج التحول في التمويل والخدمات اللوجستية / سلاسل التوريد وتكنولوجيا المعلومات والتدريب والمشتريات للمساعدة في تعزيز فعالية التكلفة والكفاءة دون فقدان القدرة الدفاعية. الاستفادة من الفرص للمساعدة في خفض التكاليف مع الحفاظ على القدرة التشغيلية من خلال الشراكات.</p>\\r\\n\\r\\n<p>مناظر خلابة للواجهة البحرية<br />\\r\\nمخططات أرضية واسعة ومفتوحة<br />\\r\\nشرفات وفناءات خاصة<br />\\r\\nحدائق مجتمعية ذات مناظر طبيعية</p>\",\"en\":\"<p>Nestled along the picturesque waterfront, Harborview Residences offers a unique blend of luxury and comfort in a serene setting. This exclusive community features beautifully designed homes that seamlessly combine modern aesthetics with timeless elegance. Each residence boasts spacious floor plans, high-end finishes, and expansive windows that provide breathtaking views of the harbor and surrounding landscapes.</p>\\r\\n\\r\\n<p>Residents enjoy a host of premium amenities, including a state-of-the-art fitness center, a sparkling outdoor pool, and landscaped gardens perfect for relaxation. The location provides easy access to local dining, shopping, and recreational opportunities, ensuring a vibrant lifestyle.</p>\\r\\n\\r\\n<p>our client&#39;s challenge<br />\\r\\nDeveloping and maintaining transformation programs in finance, logistics/supply chains, information technology, training and procurement to help foster cost effectiveness and efficiency without the loss of Defense capability. Taking advantage of opportunities to help reduce costs while maintaining operational capability through partnerships.</p>\\r\\n\\r\\n<p>breathtaking waterfront views<br />\\r\\nspacious and open floor plans<br />\\r\\nprivate balconies and patios<br />\\r\\nlandscaped community gardens</p>\"}', '{\"ar\":\"وادي وارين\",\"en\":\"wade warren\"}', '{\"ar\":\"انشاءات\",\"en\":\"constructions\"}', '2025-03-24', '{\"ar\":\"القاهره-مصر\",\"en\":\"Cairo-egypt\"}', '2025-03-09 09:07:21', '2025-03-10 19:06:51');

-- --------------------------------------------------------

--
-- Table structure for table `sections_faqs`
--

CREATE TABLE `sections_faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sections_faqs`
--

INSERT INTO `sections_faqs` (`id`, `name`, `created_at`, `updated_at`) VALUES
(10, '{\"ar\":\"أسئلة عامة\",\"en\":\"General questions\"}', '2025-03-09 10:01:48', '2025-03-09 10:01:48'),
(11, '{\"ar\":\"مشروع الجدول الزمني\",\"en\":\"Project timeline\"}', '2025-03-09 10:02:27', '2025-03-09 10:02:27'),
(13, '{\"ar\":\"عملية البناء\",\"en\":\"Construction process\"}', '2025-03-09 10:03:12', '2025-03-09 10:03:12'),
(15, '{\"ar\":\"المواد والاستدامة\",\"en\":\"materials and sustainability\"}', '2025-03-09 10:23:07', '2025-03-09 10:26:37');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` longtext DEFAULT NULL,
  `mini_description` longtext DEFAULT NULL,
  `image` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `description`, `mini_description`, `image`, `created_at`, `updated_at`) VALUES
(23, '{\"ar\":\"تشييد المباني\",\"en\":\"building construction\"}', '{\"ar\":\"<p>نحن نقدم خدمات بناء كاملة النطاق، متخصصة في المشاريع السكنية والتجارية والصناعية. من أعمال الأساس إلى التشطيبات النهائية، يدير فريق الخبراء لدينا كل خطوة، مما يضمن جودة عالية في الصنعة والتسليم في الوقت المناسب والحلول الفعالة من حيث التكلفة. سواء كنت تبني منزلًا مخصصًا أو توسع مساحة تجارية أو تطور منشأة واسعة النطاق، فإننا نجمع بين التصميم المبتكر والممارسات المستدامة والتكنولوجيا المتطورة لإضفاء الحياة على رؤيتك.</p>\\r\\n\\r\\n<p>من التصميم إلى الإنجاز، يضمن فريقنا جودة الصنعة والتسليم في الوقت المناسب والممارسات المستدامة، مما يخلق هياكل متينة وجذابة جماليًا ومصممة خصيصًا لتلبية احتياجاتك.</p>\\r\\n\\r\\n<p>مستقبل ممارسات البناء المستدامة<br />\\r\\nهناك العديد من الاختلافات في مقاطع Lorem Ipsum المتاحة، ولكن الغالبية عانت من التغيير في شكل ما، عن طريق إدخال الفكاهة أو الكلمات العشوائية التي لا تبدو حتى معقولة قليلاً. إذا كنت ستستخدم مقطعًا.</p>\",\"en\":\"<p>we provide full-scale building construction services, specializing in residential, commercial, and industrial projects. From foundation work to final finishes, our expert team manages every step, ensuring high-quality craftsmanship, timely delivery, and cost-effective solutions. Whether you&#39;re building a custom home, expanding a commercial space, or developing a large-scale facility, we combine innovative design, sustainable practices, and cutting-edge technology to bring your vision to life.</p>\\r\\n\\r\\n<p>From design to completion, our team ensures quality craftsmanship, timely delivery, and sustainable practices, creating durable and aesthetically appealing structures tailored to your needs.</p>\\r\\n\\r\\n<p><strong>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage.</strong></p>\"}', '{\"ar\":\"نحن نقدم خدمات بناء عالية الجودة مع حلول مبتكرة، وضمان الانتهاء في الوقت المناسب والهياكل الوظيفية والجمالية.\",\"en\":\"We offer quality building construction services with innovative solutions, ensuring timely completion and functional, aesthetically pleasing structures.\"}', '66548ae160449d8f57b64a51c22f9477326227cdeb3ab58f81a5f95f201dd39c.svg', '2025-03-09 07:38:30', '2025-03-10 19:22:04'),
(24, '{\"ar\":\"مقاولات عامة\",\"en\":\"general contracting\"}', '{\"ar\":\"<p>نحن نقدم خدمات بناء كاملة النطاق، متخصصة في المشاريع السكنية والتجارية والصناعية. من أعمال الأساس إلى التشطيبات النهائية، يدير فريق الخبراء لدينا كل خطوة، مما يضمن جودة عالية في الصنعة والتسليم في الوقت المناسب والحلول الفعالة من حيث التكلفة. سواء كنت تبني منزلًا مخصصًا أو توسع مساحة تجارية أو تطور منشأة واسعة النطاق، فإننا نجمع بين التصميم المبتكر والممارسات المستدامة والتكنولوجيا المتطورة لإضفاء الحياة على رؤيتك.</p>\\r\\n\\r\\n<p>من التصميم إلى الإنجاز، يضمن فريقنا جودة الصنعة والتسليم في الوقت المناسب والممارسات المستدامة، مما يخلق هياكل متينة وجذابة جماليًا ومصممة خصيصًا لتلبية احتياجاتك.</p>\\r\\n\\r\\n<p>هناك العديد من الاختلافات في مقاطع Lorem Ipsum المتاحة، لكن الغالبية عانت من التغيير في شكل ما، عن طريق إدخال الفكاهة أو الكلمات العشوائية التي لا تبدو معقولة حتى قليلاً. إذا كنت ستستخدم مقطعًا.</p>\",\"en\":\"<p>we provide full-scale building construction services, specializing in residential, commercial, and industrial projects. From foundation work to final finishes, our expert team manages every step, ensuring high-quality craftsmanship, timely delivery, and cost-effective solutions. Whether you&#39;re building a custom home, expanding a commercial space, or developing a large-scale facility, we combine innovative design, sustainable practices, and cutting-edge technology to bring your vision to life.</p>\\r\\n\\r\\n<p><strong>From design to completion, our team ensures quality craftsmanship, timely delivery, and sustainable practices, creating durable and aesthetically appealing structures tailored to your needs.</strong></p>\\r\\n\\r\\n<p>&nbsp;</p>\\r\\n\\r\\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage.</p>\"}', '{\"ar\":\"نحن نقدم خدمات بناء عالية الجودة مع حلول مبتكرة، وضمان الانتهاء في الوقت المناسب والهياكل الوظيفية والجمالية.\",\"en\":\"We offer quality building construction services with innovative solutions, ensuring timely completion and functional, aesthetically pleasing structures.\"}', 'b89ee933e1fce1af320a6a9393e8bf49e1733b0744c47cd79a69fe28dde0c816.svg', '2025-03-09 07:55:27', '2025-03-10 19:22:20'),
(25, '{\"ar\":\"بناء منزل جديد\",\"en\":\"new home construction\"}', '{\"ar\":\"<p>نحن نقدم خدمات بناء كاملة النطاق، متخصصة في المشاريع السكنية والتجارية والصناعية. من أعمال الأساس إلى التشطيبات النهائية، يدير فريق الخبراء لدينا كل خطوة، مما يضمن جودة عالية في الصنعة والتسليم في الوقت المناسب والحلول الفعالة من حيث التكلفة. سواء كنت تبني منزلًا مخصصًا أو توسع مساحة تجارية أو تطور منشأة واسعة النطاق، فإننا نجمع بين التصميم المبتكر والممارسات المستدامة والتكنولوجيا المتطورة لإضفاء الحياة على رؤيتك.</p>\\r\\n\\r\\n<p>من التصميم إلى الإنجاز، يضمن فريقنا جودة الصنعة والتسليم في الوقت المناسب والممارسات المستدامة، مما يخلق هياكل متينة وجذابة جماليًا ومصممة خصيصًا لتلبية احتياجاتك.</p>\\r\\n\\r\\n<p>هناك العديد من الاختلافات في مقاطع Lorem Ipsum المتاحة، لكن الغالبية عانت من التغيير في شكل ما، عن طريق إدخال الفكاهة أو الكلمات العشوائية التي لا تبدو معقولة حتى قليلاً. إذا كنت ستستخدم مقطعًا.</p>\",\"en\":\"<p>we provide full-scale building construction services, specializing in residential, commercial, and industrial projects. From foundation work to final finishes, our expert team manages every step, ensuring high-quality craftsmanship, timely delivery, and cost-effective solutions. Whether you&#39;re building a custom home, expanding a commercial space, or developing a large-scale facility, we combine innovative design, sustainable practices, and cutting-edge technology to bring your vision to life.</p>\\r\\n\\r\\n<p>From design to completion, our team ensures quality craftsmanship, timely delivery, and sustainable practices, creating durable and aesthetically appealing structures tailored to your needs.</p>\\r\\n\\r\\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage.</p>\"}', '{\"ar\":\"نحن نقدم خدمات بناء بناء الجودة مع حلول مبتكرة ، وضمان الانتهاء في الوقت المناسب والهياكل الوظيفية والجمالية.\",\"en\":\"We offer quality building construction services with innovative solutions, ensuring timely completion and functional, aesthetically pleasing structures.\"}', '4e795050c58ac9eabe547e5987fca19102d8b296ac552b3266c8be7c164fb255.svg', '2025-03-09 07:57:50', '2025-03-10 19:22:32'),
(26, '{\"en\":\"construction cleanup\",\"ar\":\"تجميل المباني\"}', '{\"ar\":\"<p>نحن نقدم خدمات بناء كاملة النطاق، متخصصة في المشاريع السكنية والتجارية والصناعية. من أعمال الأساس إلى التشطيبات النهائية، يدير فريق الخبراء لدينا كل خطوة، مما يضمن جودة عالية في الصنعة والتسليم في الوقت المناسب والحلول الفعالة من حيث التكلفة. سواء كنت تبني منزلًا مخصصًا أو توسع مساحة تجارية أو تطور منشأة واسعة النطاق، فإننا نجمع بين التصميم المبتكر والممارسات المستدامة والتكنولوجيا المتطورة لإضفاء الحياة على رؤيتك.</p>\\r\\n\\r\\n<p>من التصميم إلى الإنجاز، يضمن فريقنا جودة الصنعة والتسليم في الوقت المناسب والممارسات المستدامة، مما يخلق هياكل متينة وجذابة جماليًا ومصممة خصيصًا لتلبية احتياجاتك.</p>\\r\\n\\r\\n<p>هناك العديد من الاختلافات في مقاطع Lorem Ipsum المتاحة، لكن الغالبية عانت من التغيير في شكل ما، عن طريق إدخال الفكاهة أو الكلمات العشوائية التي لا تبدو معقولة حتى قليلاً. إذا كنت ستستخدم مقطعًا.</p>\",\"en\":\"<p>we provide full-scale building construction services, specializing in residential, commercial, and industrial projects. From foundation work to final finishes, our expert team manages every step, ensuring high-quality craftsmanship, timely delivery, and cost-effective solutions. Whether you&#39;re building a custom home, expanding a commercial space, or developing a large-scale facility, we combine innovative design, sustainable practices, and cutting-edge technology to bring your vision to life.</p>\\r\\n\\r\\n<p>From design to completion, our team ensures quality craftsmanship, timely delivery, and sustainable practices, creating durable and aesthetically appealing structures tailored to your needs.</p>\\r\\n\\r\\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage.</p>\"}', '{\"ar\":\"نحن نقدم خدمات بناء بناء الجودة مع حلول مبتكرة ، وضمان الانتهاء في الوقت المناسب والهياكل الوظيفية والجمالية.\",\"en\":\"We offer quality building construction services with innovative solutions, ensuring timely completion and functional, aesthetically pleasing structures.\"}', '2426d31b927d211c9bea7f242d5af53e7bd51934160774c22c4283b477c548db.svg', '2025-03-09 07:59:26', '2025-03-10 19:22:43'),
(27, '{\"ar\":\"حلول تصميم التصميم\",\"en\":\"design-build solutions\"}', '{\"ar\":\"<p>نحن نقدم خدمات بناء كاملة النطاق، متخصصة في المشاريع السكنية والتجارية والصناعية. من أعمال الأساس إلى التشطيبات النهائية، يدير فريق الخبراء لدينا كل خطوة، مما يضمن جودة عالية في الصنعة والتسليم في الوقت المناسب والحلول الفعالة من حيث التكلفة. سواء كنت تبني منزلًا مخصصًا أو توسع مساحة تجارية أو تطور منشأة واسعة النطاق، فإننا نجمع بين التصميم المبتكر والممارسات المستدامة والتكنولوجيا المتطورة لإضفاء الحياة على رؤيتك.</p>\\r\\n\\r\\n<p>من التصميم إلى الإنجاز، يضمن فريقنا جودة الصنعة والتسليم في الوقت المناسب والممارسات المستدامة، مما يخلق هياكل متينة وجذابة جماليًا ومصممة خصيصًا لتلبية احتياجاتك.</p>\\r\\n\\r\\n<p>هناك العديد من الاختلافات في مقاطع Lorem Ipsum المتاحة، لكن الغالبية عانت من التغيير في شكل ما، عن طريق إدخال الفكاهة أو الكلمات العشوائية التي لا تبدو معقولة حتى قليلاً. إذا كنت ستستخدم مقطعًا.</p>\",\"en\":\"<p>we provide full-scale building construction services, specializing in residential, commercial, and industrial projects. From foundation work to final finishes, our expert team manages every step, ensuring high-quality craftsmanship, timely delivery, and cost-effective solutions. Whether you&#39;re building a custom home, expanding a commercial space, or developing a large-scale facility, we combine innovative design, sustainable practices, and cutting-edge technology to bring your vision to life.</p>\\r\\n\\r\\n<p>From design to completion, our team ensures quality craftsmanship, timely delivery, and sustainable practices, creating durable and aesthetically appealing structures tailored to your needs.</p>\\r\\n\\r\\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage.</p>\"}', '{\"ar\":\"نحن نقدم خدمات بناء بناء الجودة مع حلول مبتكرة ، وضمان الانتهاء في الوقت المناسب والهياكل الوظيفية والجمالية.\",\"en\":\"We offer quality building construction services with innovative solutions, ensuring timely completion and functional, aesthetically pleasing structures.\"}', '6aec7fc539bb31d30107cb1d10aac6ae9bcf9c8d9ec7f10b7d1b2afc8c805f21.svg', '2025-03-09 08:01:56', '2025-03-10 19:23:04'),
(28, '{\"ar\":\"المنشات المعدنيه والخرسانيه\",\"en\":\"plumbing, and HVAC\"}', '{\"ar\":\"<p>نحن نقدم خدمات بناء كاملة النطاق، متخصصة في المشاريع السكنية والتجارية والصناعية. من أعمال الأساس إلى التشطيبات النهائية، يدير فريق الخبراء لدينا كل خطوة، مما يضمن جودة عالية في الصنعة والتسليم في الوقت المناسب والحلول الفعالة من حيث التكلفة. سواء كنت تبني منزلًا مخصصًا أو توسع مساحة تجارية أو تطور منشأة واسعة النطاق، فإننا نجمع بين التصميم المبتكر والممارسات المستدامة والتكنولوجيا المتطورة لإضفاء الحياة على رؤيتك.</p>\\r\\n\\r\\n<p>من التصميم إلى الإنجاز، يضمن فريقنا جودة الصنعة والتسليم في الوقت المناسب والممارسات المستدامة، مما يخلق هياكل متينة وجذابة جماليًا ومصممة خصيصًا لتلبية احتياجاتك.</p>\\r\\n\\r\\n<p>هناك العديد من الاختلافات في مقاطع Lorem Ipsum المتاحة، لكن الغالبية عانت من التغيير في شكل ما، عن طريق إدخال الفكاهة أو الكلمات العشوائية التي لا تبدو معقولة حتى قليلاً. إذا كنت ستستخدم مقطعًا.</p>\",\"en\":\"<p>we provide full-scale building construction services, specializing in residential, commercial, and industrial projects. From foundation work to final finishes, our expert team manages every step, ensuring high-quality craftsmanship, timely delivery, and cost-effective solutions. Whether you&#39;re building a custom home, expanding a commercial space, or developing a large-scale facility, we combine innovative design, sustainable practices, and cutting-edge technology to bring your vision to life.</p>\\r\\n\\r\\n<p>From design to completion, our team ensures quality craftsmanship, timely delivery, and sustainable practices, creating durable and aesthetically appealing structures tailored to your needs.</p>\\r\\n\\r\\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage.</p>\"}', '{\"ar\":\"نحن نقدم خدمات بناء بناء الجودة مع حلول مبتكرة ، وضمان الانتهاء في الوقت المناسب والهياكل الوظيفية والجمالية.\",\"en\":\"We offer quality building construction services with innovative solutions, ensuring timely completion and functional, aesthetically pleasing structures.\"}', 'e368c7a21a42b870ff890564cb33bd7f680f0f67e4ec2090ec4b5a12baea6806.svg', '2025-03-09 08:03:38', '2025-03-10 19:21:02');

-- --------------------------------------------------------

--
-- Table structure for table `service_details`
--

CREATE TABLE `service_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` longtext DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service_images`
--

CREATE TABLE `service_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_images`
--

INSERT INTO `service_images` (`id`, `name`, `service_id`, `created_at`, `updated_at`) VALUES
(56, '02a6d1ef2e2bb5c5a2bf8f5d6f2720f6de2eac421db4153bc11068accd4bcc0a.jpg', 23, '2025-03-10 19:25:02', '2025-03-10 19:25:02'),
(57, '4bb34e6acc2513f395ee7bd83e5635f51d883a4d79b99a014f646a44bdf42fb9.jpg', 23, '2025-03-10 19:25:02', '2025-03-10 19:25:02'),
(58, '73d5db31d97df1bd27a5d8b764dfec5141f40736c9899ffca590780a23e7d1ea.jpg', 24, '2025-03-10 19:25:53', '2025-03-10 19:25:53'),
(59, '2e140f51dc0f82610f39a686b4ae11b41c1edeb61a85cb02f31262308e2d76cf.jpg', 24, '2025-03-10 19:25:53', '2025-03-10 19:25:53'),
(60, 'c561033085fd5761a4fb3a43026c7ba27657c5e2350a0953e05b826bf9e8ad13.jpg', 24, '2025-03-10 19:25:53', '2025-03-10 19:25:53'),
(61, 'a6bf646b34e6e12227675bb9293710d28e0da25e323acf6c9a7e58dd365f0a54.jpg', 25, '2025-03-10 19:33:20', '2025-03-10 19:33:20'),
(62, '6d6c584de079bbbfdbe94ab819cba00ceceee96b41047ca111aca1bb4be69a17.jpg', 25, '2025-03-10 19:33:20', '2025-03-10 19:33:20'),
(63, 'a677326006f46202f325d2aa7c14e18dd3bc4b2b3c7382c5f094a3de4fb55c3a.jpg', 26, '2025-03-10 19:33:32', '2025-03-10 19:33:32'),
(64, '44a7bbefba877b5c40b9e633e921d8b75ada67b8b1429999297b34f398d051f8.jpg', 26, '2025-03-10 19:33:32', '2025-03-10 19:33:32'),
(65, '20336e65b7c0a7f2855a0956fc35e9c5d07f036f588f25eb9529d0e6b8113c0c.jpg', 27, '2025-03-10 19:33:50', '2025-03-10 19:33:50'),
(66, '2ae4eb614b435f609d7ef16981f936d6b3d75e02b30f21b7e446139a23d25d47.jpg', 28, '2025-03-10 19:34:02', '2025-03-10 19:34:02'),
(67, '8ae24c59d236ee4cf5401a209ad9143f5bf36dbf14a55e0190d75ebfd627fbc0.jpg', 28, '2025-03-10 19:34:02', '2025-03-10 19:34:02');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `logo` text DEFAULT NULL,
  `header_icon` text DEFAULT NULL,
  `footer_icon` text DEFAULT NULL,
  `video` text DEFAULT NULL,
  `primary_color` varchar(255) DEFAULT NULL,
  `background_color` varchar(255) DEFAULT NULL,
  `secondary_color` varchar(255) DEFAULT NULL,
  `facebook_link` longtext DEFAULT NULL,
  `twitter_link` longtext DEFAULT NULL,
  `telegram_link` longtext DEFAULT NULL,
  `linkedin_link` longtext DEFAULT NULL,
  `youtube_link` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `phone`, `email`, `location`, `logo`, `header_icon`, `footer_icon`, `video`, `primary_color`, `background_color`, `secondary_color`, `facebook_link`, `twitter_link`, `telegram_link`, `linkedin_link`, `youtube_link`, `created_at`, `updated_at`) VALUES
(1, '{\"ar\":\"تيست ويب\",\"en\":\"TestWeb\"}', '+123456789', 'testweb@email.com', '{\"ar\":\"القاهره-مصر\",\"en\":\"Cairo-egypt\"}', 'b6423e70d8c987e03d6fad933918dc7ba7241d526dcbc4f06a88f82dccff37d6.svg', '0e31c53cefee13a86ca839af147d13e8f41ff766f4e705e72be4aa9925f8dc0b.svg', 'be4df514b5cd761ca6fe220261fa9ed60705aebb4fa808e57ba10313b1f133e6.svg', NULL, NULL, NULL, NULL, 'Facebook Link', 'Twitter Link', 'telegram link', 'linkdin link', 'youtube link', '2025-03-09 07:09:16', '2025-03-23 08:07:02');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `experience` varchar(255) DEFAULT NULL,
  `details` longtext DEFAULT NULL,
  `job_title` varchar(255) DEFAULT NULL,
  `facebook_link` varchar(255) DEFAULT NULL,
  `twitter_link` varchar(255) DEFAULT NULL,
  `instagram_link` varchar(255) DEFAULT NULL,
  `linkdin_link` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `email`, `phone`, `experience`, `details`, `job_title`, `facebook_link`, `twitter_link`, `instagram_link`, `linkdin_link`, `image`, `created_at`, `updated_at`) VALUES
(11, '{\"ar\":\"دافيد ميلر\",\"en\":\"david miller\"}', 'davidmiller@gmail.com', '+1 (455) 984-9655', '10', '{\"ar\":\"<p>عنّي<br />\\r\\nإليانور بينا هي محترفة ماهرة ومكرسة ولديها 12 عامًا من الخبرة في صناعة البناء. متخصصة في [مهارة أو دور محدد، على سبيل المثال، إدارة المشاريع، والإشراف على الموقع، والنجارة]، [هو/هي/هم] تضمن إكمال كل مشروع في الوقت المحدد، وفي حدود الميزانية، وبأعلى المعايير. مع شغفها بالحرفية عالية الجودة والتركيز على السلامة والكفاءة، يلعب [اسم العضو] دورًا حيويًا في تقديم مشاريع بناء ناجحة من البداية إلى النهاية.</p>\\r\\n\\r\\n<p>سواء كان ذلك بالإشراف على المباني التجارية واسعة النطاق أو التجديدات السكنية، [هو/هي/هم] يقدم باستمرار حلولاً فعالة وفعّالة من حيث التكلفة مع الحفاظ على أعلى معايير الحرفية والسلامة.</p>\\r\\n\\r\\n<p>المشاركة في الصناعة<br />\\r\\nبالإضافة إلى عملنا المجتمعي، نبقى على اتصال بالتقدم في الصناعة من خلال التعاون مع المنظمات المهنية وحضور المؤتمرات والاستثمار في التعليم المستمر والشهادات. إن التزامنا بالمشاركة المجتمعية والصناعية لا يعزز فريقنا فحسب، بل يسمح لنا أيضًا بالمساهمة في نمو وتحسين مجال البناء، مما يضمن تقديم أعلى مستوى من الخدمة لعملائنا.</p>\\r\\n\\r\\n<p>المشاركة في مشاريع خيرية محلية<br />\\r\\nدعم مبادرات الإسكان الميسور<br />\\r\\nالعضوية النشطة في جمعيات الصناعة<br />\\r\\nالشراكات مع المقاولين والبائعين المحليين</p>\",\"en\":\"<h2><strong>About</strong></h2>\\r\\n\\r\\n<p>Eleanor Pena is a skilled and dedicated professional with 12 years of experience in the construction industry. Specializing in [specific skill or role, e.g., project management, site supervision, carpentry], [he/she/they] ensures every project is completed on time, within budget, and to the highest standards. With a passion for quality craftsmanship and a focus on safety and efficiency, [Member Name] plays a vital role in delivering successful construction projects from start to finish.</p>\\r\\n\\r\\n<p>Whether overseeing large-scale commercial builds or residential renovations, [he/she/they] consistently provides efficient, cost-effective solutions while maintaining the highest standards of craftsmanship and safety.</p>\\r\\n\\r\\n<h2>&nbsp;</h2>\\r\\n\\r\\n<p><em><strong>In addition to our community work, we stay connected to industry advancements by collaborating with professional organizations, attending conferences, and investing in ongoing education and certifications. Our commitment to community and industry involvement not strengthens our team but also allows us to contribute to the growth and improvement of the construction field, ensuring we deliver the highest level of service to our clients.</strong></em></p>\\r\\n\\r\\n<ul>\\r\\n\\t<li>Participation in Local Charity Projects</li>\\r\\n\\t<li>Support for Affordable Housing Initiatives</li>\\r\\n\\t<li>Active Membership in Industry Associations</li>\\r\\n\\t<li>Partnerships with Local Contractors &amp; Vendors</li>\\r\\n</ul>\\r\\n\\r\\n<h2>&nbsp;</h2>\"}', '{\"ar\":\"مدير المشروع\",\"en\":\"Project Manager\"}', 'Facebook Link', 'Twitter Link', 'insta link', 'linkdin link', '8378a45d64ac5a056589b60ac22b6e992083e0b8c2fcebeb8f72cd2a5751f633.jpg', '2025-03-09 09:16:43', '2025-03-10 19:16:47'),
(12, '{\"ar\":\"الينور بيينا\",\"en\":\"eleanor pena\"}', 'xylepu@mailinator.com', '+1 (974) 525-1415', '8', '{\"ar\":\"<p>عنّي<br />\\r\\nإليانور بينا هي محترفة ماهرة ومكرسة ولديها 12 عامًا من الخبرة في صناعة البناء. متخصصة في [مهارة أو دور محدد، على سبيل المثال، إدارة المشاريع، والإشراف على الموقع، والنجارة]، [هو/هي/هم] تضمن إكمال كل مشروع في الوقت المحدد، وفي حدود الميزانية، وبأعلى المعايير. مع شغفها بالحرفية عالية الجودة والتركيز على السلامة والكفاءة، يلعب [اسم العضو] دورًا حيويًا في تقديم مشاريع بناء ناجحة من البداية إلى النهاية.</p>\\r\\n\\r\\n<p>سواء كان ذلك بالإشراف على المباني التجارية واسعة النطاق أو التجديدات السكنية، [هو/هي/هم] يقدم باستمرار حلولاً فعالة وفعّالة من حيث التكلفة مع الحفاظ على أعلى معايير الحرفية والسلامة.</p>\\r\\n\\r\\n<p>المشاركة في الصناعة<br />\\r\\nبالإضافة إلى عملنا المجتمعي، نبقى على اتصال بالتقدم في الصناعة من خلال التعاون مع المنظمات المهنية وحضور المؤتمرات والاستثمار في التعليم المستمر والشهادات. إن التزامنا بالمشاركة المجتمعية والصناعية لا يعزز فريقنا فحسب، بل يسمح لنا أيضًا بالمساهمة في نمو وتحسين مجال البناء، مما يضمن تقديم أعلى مستوى من الخدمة لعملائنا.</p>\\r\\n\\r\\n<p>المشاركة في مشاريع خيرية محلية<br />\\r\\nدعم مبادرات الإسكان الميسور<br />\\r\\nالعضوية النشطة في جمعيات الصناعة<br />\\r\\nالشراكات مع المقاولين والبائعين المحليين</p>\",\"en\":\"<p>about me<br />\\r\\nEleanor Pena is a skilled and dedicated professional with 12 years of experience in the construction industry. Specializing in [specific skill or role, e.g., project management, site supervision, carpentry], [he/she/they] ensures every project is completed on time, within budget, and to the highest standards. With a passion for quality craftsmanship and a focus on safety and efficiency, [Member Name] plays a vital role in delivering successful construction projects from start to finish.</p>\\r\\n\\r\\n<p>Whether overseeing large-scale commercial builds or residential renovations, [he/she/they] consistently provides efficient, cost-effective solutions while maintaining the highest standards of craftsmanship and safety.</p>\\r\\n\\r\\n<p>industry involvement<br />\\r\\nIn addition to our community work, we stay connected to industry advancements by collaborating with professional organizations, attending conferences, and investing in ongoing education and certifications. Our commitment to community and industry involvement not strengthens our team but also allows us to contribute to the growth and improvement of the construction field, ensuring we deliver the highest level of service to our clients.</p>\\r\\n\\r\\n<p>Participation in Local Charity Projects<br />\\r\\nSupport for Affordable Housing Initiatives<br />\\r\\nActive Membership in Industry Associations<br />\\r\\nPartnerships with Local Contractors &amp; Vendors<br />\\r\\n&nbsp;</p>\"}', '{\"ar\":\"مهندس\",\"en\":\"Engineer\"}', 'Facebook Link', 'Twitter Link', 'insta link', 'linkdin link', 'ae3a6805d2faf8d72c7a22034157983f6c4cf1f761a9f6f0d965c613d57d58fc.jpg', '2025-03-09 09:19:21', '2025-03-10 19:17:01'),
(13, '{\"ar\":\"اوس جارد\",\"en\":\"awes guard\"}', 'xuhinu@mailinator.com', '+1 (302) 162-4174', '6', '{\"ar\":\"<p>عنّي<br />\\r\\nإليانور بينا هي محترفة ماهرة ومكرسة ولديها 12 عامًا من الخبرة في صناعة البناء. متخصصة في [مهارة أو دور محدد، على سبيل المثال، إدارة المشاريع، والإشراف على الموقع، والنجارة]، [هو/هي/هم] تضمن إكمال كل مشروع في الوقت المحدد، وفي حدود الميزانية، وبأعلى المعايير. مع شغفها بالحرفية عالية الجودة والتركيز على السلامة والكفاءة، يلعب [اسم العضو] دورًا حيويًا في تقديم مشاريع بناء ناجحة من البداية إلى النهاية.</p>\\r\\n\\r\\n<p>سواء كان ذلك بالإشراف على المباني التجارية واسعة النطاق أو التجديدات السكنية، [هو/هي/هم] يقدم باستمرار حلولاً فعالة وفعّالة من حيث التكلفة مع الحفاظ على أعلى معايير الحرفية والسلامة.</p>\\r\\n\\r\\n<p>المشاركة في الصناعة<br />\\r\\nبالإضافة إلى عملنا المجتمعي، نبقى على اتصال بالتقدم في الصناعة من خلال التعاون مع المنظمات المهنية وحضور المؤتمرات والاستثمار في التعليم المستمر والشهادات. إن التزامنا بالمشاركة المجتمعية والصناعية لا يعزز فريقنا فحسب، بل يسمح لنا أيضًا بالمساهمة في نمو وتحسين مجال البناء، مما يضمن تقديم أعلى مستوى من الخدمة لعملائنا.</p>\\r\\n\\r\\n<p>المشاركة في مشاريع خيرية محلية<br />\\r\\nدعم مبادرات الإسكان الميسور<br />\\r\\nالعضوية النشطة في جمعيات الصناعة<br />\\r\\nالشراكات مع المقاولين والبائعين المحليين</p>\",\"en\":\"<p>about me<br />\\r\\nEleanor Pena is a skilled and dedicated professional with 12 years of experience in the construction industry. Specializing in [specific skill or role, e.g., project management, site supervision, carpentry], [he/she/they] ensures every project is completed on time, within budget, and to the highest standards. With a passion for quality craftsmanship and a focus on safety and efficiency, [Member Name] plays a vital role in delivering successful construction projects from start to finish.</p>\\r\\n\\r\\n<p>Whether overseeing large-scale commercial builds or residential renovations, [he/she/they] consistently provides efficient, cost-effective solutions while maintaining the highest standards of craftsmanship and safety.</p>\\r\\n\\r\\n<p>industry involvement<br />\\r\\nIn addition to our community work, we stay connected to industry advancements by collaborating with professional organizations, attending conferences, and investing in ongoing education and certifications. Our commitment to community and industry involvement not strengthens our team but also allows us to contribute to the growth and improvement of the construction field, ensuring we deliver the highest level of service to our clients.</p>\\r\\n\\r\\n<p>Participation in Local Charity Projects<br />\\r\\nSupport for Affordable Housing Initiatives<br />\\r\\nActive Membership in Industry Associations<br />\\r\\nPartnerships with Local Contractors &amp; Vendors<br />\\r\\n&nbsp;</p>\"}', '{\"ar\":\"مدير المشروع\",\"en\":\"Project Manager\"}', 'Facebook Link', 'Twitter Link', 'insta link', 'linkdin link', '9a100f636634d74b48eb7af2a88294402404215161f5fa6b14da68e39e8a3114.jpg', '2025-03-09 09:22:28', '2025-03-10 19:17:24'),
(14, '{\"ar\":\"هارلان ساندوفال\",\"en\":\"Harlan Sandoval\"}', 'bowyhal@mailinator.com', '+1 (112) 176-6129', '9', '{\"ar\":\"<p>عنّي<br />\\r\\nإليانور بينا هي محترفة ماهرة ومكرسة ولديها 12 عامًا من الخبرة في صناعة البناء. متخصصة في [مهارة أو دور محدد، على سبيل المثال، إدارة المشاريع، والإشراف على الموقع، والنجارة]، [هو/هي/هم] تضمن إكمال كل مشروع في الوقت المحدد، وفي حدود الميزانية، وبأعلى المعايير. مع شغفها بالحرفية عالية الجودة والتركيز على السلامة والكفاءة، يلعب [اسم العضو] دورًا حيويًا في تقديم مشاريع بناء ناجحة من البداية إلى النهاية.</p>\\r\\n\\r\\n<p>سواء كان ذلك بالإشراف على المباني التجارية واسعة النطاق أو التجديدات السكنية، [هو/هي/هم] يقدم باستمرار حلولاً فعالة وفعّالة من حيث التكلفة مع الحفاظ على أعلى معايير الحرفية والسلامة.</p>\\r\\n\\r\\n<p>المشاركة في الصناعة<br />\\r\\nبالإضافة إلى عملنا المجتمعي، نبقى على اتصال بالتقدم في الصناعة من خلال التعاون مع المنظمات المهنية وحضور المؤتمرات والاستثمار في التعليم المستمر والشهادات. إن التزامنا بالمشاركة المجتمعية والصناعية لا يعزز فريقنا فحسب، بل يسمح لنا أيضًا بالمساهمة في نمو وتحسين مجال البناء، مما يضمن تقديم أعلى مستوى من الخدمة لعملائنا.</p>\\r\\n\\r\\n<p>المشاركة في مشاريع خيرية محلية<br />\\r\\nدعم مبادرات الإسكان الميسور<br />\\r\\nالعضوية النشطة في جمعيات الصناعة<br />\\r\\nالشراكات مع المقاولين والبائعين المحليين</p>\",\"en\":\"<p>about me<br />\\r\\nEleanor Pena is a skilled and dedicated professional with 12 years of experience in the construction industry. Specializing in [specific skill or role, e.g., project management, site supervision, carpentry], [he/she/they] ensures every project is completed on time, within budget, and to the highest standards. With a passion for quality craftsmanship and a focus on safety and efficiency, [Member Name] plays a vital role in delivering successful construction projects from start to finish.</p>\\r\\n\\r\\n<p>Whether overseeing large-scale commercial builds or residential renovations, [he/she/they] consistently provides efficient, cost-effective solutions while maintaining the highest standards of craftsmanship and safety.</p>\\r\\n\\r\\n<p>industry involvement<br />\\r\\nIn addition to our community work, we stay connected to industry advancements by collaborating with professional organizations, attending conferences, and investing in ongoing education and certifications. Our commitment to community and industry involvement not strengthens our team but also allows us to contribute to the growth and improvement of the construction field, ensuring we deliver the highest level of service to our clients.</p>\\r\\n\\r\\n<p>Participation in Local Charity Projects<br />\\r\\nSupport for Affordable Housing Initiatives<br />\\r\\nActive Membership in Industry Associations<br />\\r\\nPartnerships with Local Contractors &amp; Vendors<br />\\r\\n&nbsp;</p>\"}', '{\"ar\":\"مهندس\",\"en\":\"Engineer\"}', 'Dolor dicta laborios', 'Dolor non eius harum', 'Alias accusamus inve', NULL, '2757fe7b2b909e8eb71c53c571a2ee054b849d7664a295ddd10f43861b6eea43.jpg', '2025-03-09 09:24:29', '2025-03-10 19:17:53'),
(15, '{\"ar\":\"جون كارياج\",\"en\":\"John Craig\"}', 'qyrofato@mailinator.com', '+1 (685) 241-5491', '7', '{\"ar\":\"<p>عنّي<br />\\r\\nإليانور بينا هي محترفة ماهرة ومكرسة ولديها 12 عامًا من الخبرة في صناعة البناء. متخصصة في [مهارة أو دور محدد، على سبيل المثال، إدارة المشاريع، والإشراف على الموقع، والنجارة]، [هو/هي/هم] تضمن إكمال كل مشروع في الوقت المحدد، وفي حدود الميزانية، وبأعلى المعايير. مع شغفها بالحرفية عالية الجودة والتركيز على السلامة والكفاءة، يلعب [اسم العضو] دورًا حيويًا في تقديم مشاريع بناء ناجحة من البداية إلى النهاية.</p>\\r\\n\\r\\n<p>سواء كان ذلك بالإشراف على المباني التجارية واسعة النطاق أو التجديدات السكنية، [هو/هي/هم] يقدم باستمرار حلولاً فعالة وفعّالة من حيث التكلفة مع الحفاظ على أعلى معايير الحرفية والسلامة.</p>\\r\\n\\r\\n<p>المشاركة في الصناعة<br />\\r\\nبالإضافة إلى عملنا المجتمعي، نبقى على اتصال بالتقدم في الصناعة من خلال التعاون مع المنظمات المهنية وحضور المؤتمرات والاستثمار في التعليم المستمر والشهادات. إن التزامنا بالمشاركة المجتمعية والصناعية لا يعزز فريقنا فحسب، بل يسمح لنا أيضًا بالمساهمة في نمو وتحسين مجال البناء، مما يضمن تقديم أعلى مستوى من الخدمة لعملائنا.</p>\\r\\n\\r\\n<p>المشاركة في مشاريع خيرية محلية<br />\\r\\nدعم مبادرات الإسكان الميسور<br />\\r\\nالعضوية النشطة في جمعيات الصناعة<br />\\r\\nالشراكات مع المقاولين والبائعين المحليين</p>\",\"en\":\"<p>about me<br />\\r\\nEleanor Pena is a skilled and dedicated professional with 12 years of experience in the construction industry. Specializing in [specific skill or role, e.g., project management, site supervision, carpentry], [he/she/they] ensures every project is completed on time, within budget, and to the highest standards. With a passion for quality craftsmanship and a focus on safety and efficiency, [Member Name] plays a vital role in delivering successful construction projects from start to finish.</p>\\r\\n\\r\\n<p>Whether overseeing large-scale commercial builds or residential renovations, [he/she/they] consistently provides efficient, cost-effective solutions while maintaining the highest standards of craftsmanship and safety.</p>\\r\\n\\r\\n<p>industry involvement<br />\\r\\nIn addition to our community work, we stay connected to industry advancements by collaborating with professional organizations, attending conferences, and investing in ongoing education and certifications. Our commitment to community and industry involvement not strengthens our team but also allows us to contribute to the growth and improvement of the construction field, ensuring we deliver the highest level of service to our clients.</p>\\r\\n\\r\\n<p>Participation in Local Charity Projects<br />\\r\\nSupport for Affordable Housing Initiatives<br />\\r\\nActive Membership in Industry Associations<br />\\r\\nPartnerships with Local Contractors &amp; Vendors<br />\\r\\n&nbsp;</p>\"}', '{\"ar\":\"مهندس\",\"en\":\"Engineer\"}', 'Voluptate consequunt', 'Quis eum dolores qui', 'Ea distinctio Non v', 'In quis corrupti di', '2f2a61a6880c6243c4d67dc2b2af7073d26da8d3d8cc0abb9bc6569c8a8bde5a.jpg', '2025-03-09 09:25:55', '2025-03-10 19:18:09'),
(16, '{\"ar\":\"بروك مايلز\",\"en\":\"Brock Miles\"}', 'fucewudu@mailinator.com', '+1 (152) 347-6069', '4', '{\"ar\":\"<p>عنّي<br />\\r\\nإليانور بينا هي محترفة ماهرة ومكرسة ولديها 12 عامًا من الخبرة في صناعة البناء. متخصصة في [مهارة أو دور محدد، على سبيل المثال، إدارة المشاريع، والإشراف على الموقع، والنجارة]، [هو/هي/هم] تضمن إكمال كل مشروع في الوقت المحدد، وفي حدود الميزانية، وبأعلى المعايير. مع شغفها بالحرفية عالية الجودة والتركيز على السلامة والكفاءة، يلعب [اسم العضو] دورًا حيويًا في تقديم مشاريع بناء ناجحة من البداية إلى النهاية.</p>\\r\\n\\r\\n<p>سواء كان ذلك بالإشراف على المباني التجارية واسعة النطاق أو التجديدات السكنية، [هو/هي/هم] يقدم باستمرار حلولاً فعالة وفعّالة من حيث التكلفة مع الحفاظ على أعلى معايير الحرفية والسلامة.</p>\\r\\n\\r\\n<p>المشاركة في الصناعة<br />\\r\\nبالإضافة إلى عملنا المجتمعي، نبقى على اتصال بالتقدم في الصناعة من خلال التعاون مع المنظمات المهنية وحضور المؤتمرات والاستثمار في التعليم المستمر والشهادات. إن التزامنا بالمشاركة المجتمعية والصناعية لا يعزز فريقنا فحسب، بل يسمح لنا أيضًا بالمساهمة في نمو وتحسين مجال البناء، مما يضمن تقديم أعلى مستوى من الخدمة لعملائنا.</p>\\r\\n\\r\\n<p>المشاركة في مشاريع خيرية محلية<br />\\r\\nدعم مبادرات الإسكان الميسور<br />\\r\\nالعضوية النشطة في جمعيات الصناعة<br />\\r\\nالشراكات مع المقاولين والبائعين المحليين</p>\",\"en\":\"<p>about me<br />\\r\\nEleanor Pena is a skilled and dedicated professional with 12 years of experience in the construction industry. Specializing in [specific skill or role, e.g., project management, site supervision, carpentry], [he/she/they] ensures every project is completed on time, within budget, and to the highest standards. With a passion for quality craftsmanship and a focus on safety and efficiency, [Member Name] plays a vital role in delivering successful construction projects from start to finish.</p>\\r\\n\\r\\n<p>Whether overseeing large-scale commercial builds or residential renovations, [he/she/they] consistently provides efficient, cost-effective solutions while maintaining the highest standards of craftsmanship and safety.</p>\\r\\n\\r\\n<p>industry involvement<br />\\r\\nIn addition to our community work, we stay connected to industry advancements by collaborating with professional organizations, attending conferences, and investing in ongoing education and certifications. Our commitment to community and industry involvement not strengthens our team but also allows us to contribute to the growth and improvement of the construction field, ensuring we deliver the highest level of service to our clients.</p>\\r\\n\\r\\n<p>Participation in Local Charity Projects<br />\\r\\nSupport for Affordable Housing Initiatives<br />\\r\\nActive Membership in Industry Associations<br />\\r\\nPartnerships with Local Contractors &amp; Vendors<br />\\r\\n&nbsp;</p>\"}', '{\"ar\":\"مهندس\",\"en\":\"Engineer\"}', 'Non in possimus odi', 'Rerum architecto dol', 'Nobis minima aut qui', 'Reprehenderit culpa', '087be221cbbebfcb0d020e26d1affca0bf4d683c9c07c250bad0053964d4df3b.jpg', '2025-03-09 09:27:18', '2025-03-10 19:18:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` text DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `type` enum('superadmin','admin') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'admin',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `image`, `email_verified_at`, `password`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'superAdmin', 'admin@gmail.com', NULL, NULL, '$2y$10$b5LIB1Q95uS4smMIsRPTF.6qHkOegVIWk879bGb8mJmNZ0hOkPHje', 'superadmin', NULL, '2024-12-04 10:48:37', '2024-12-04 10:48:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `faqs_section_id_foreign` (`section_id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `points_abouts`
--
ALTER TABLE `points_abouts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `points_abouts_about_id_foreign` (`about_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sections_faqs`
--
ALTER TABLE `sections_faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_details`
--
ALTER TABLE `service_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_details_service_id_foreign` (`service_id`);

--
-- Indexes for table `service_images`
--
ALTER TABLE `service_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_images_service_id_foreign` (`service_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teams_email_unique` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `points_abouts`
--
ALTER TABLE `points_abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `sections_faqs`
--
ALTER TABLE `sections_faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `service_details`
--
ALTER TABLE `service_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `service_images`
--
ALTER TABLE `service_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `faqs`
--
ALTER TABLE `faqs`
  ADD CONSTRAINT `faqs_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `sections_faqs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `points_abouts`
--
ALTER TABLE `points_abouts`
  ADD CONSTRAINT `points_abouts_about_id_foreign` FOREIGN KEY (`about_id`) REFERENCES `abouts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `service_details`
--
ALTER TABLE `service_details`
  ADD CONSTRAINT `service_details_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `service_images`
--
ALTER TABLE `service_images`
  ADD CONSTRAINT `service_images_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
