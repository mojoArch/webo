<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$selectedLanguage = $_GET['lang'] ?? null;

if (in_array($selectedLanguage, ['en', 'nl'], true)) {
    $_SESSION['language'] = $selectedLanguage;
}

$lang = $_SESSION['language'] ?? 'en';

$translations = [
    'home' => [
        'en' => 'Home',
        'nl' => 'Home'
    ],
    'about' => [
        'en' => 'About',
        'nl' => 'Over mij'
    ],
    'projects' => [
        'en' => 'Projects',
        'nl' => 'Projecten'
    ],
    'contact' => [
        'en' => 'Contact',
        'nl' => 'Contact'
    ],
    'cv' => [
        'en' => 'CV',
        'nl' => 'CV'
    ],
    'about_title' => [
        'en' => 'ABOUT ME',
        'nl' => 'OVER MIJ'
    ],
    'about_statement' => [
        'en' => 'From first idea to final build.',
        'nl' => 'Van eerste idee tot eindresultaat.'
    ],
    'projects_title' => [
        'en' => 'PROJECTS',
        'nl' => 'PROJECTEN'
    ],
    'project_details' => [
        'en' => 'Project details',
        'nl' => 'Projectbeschrijving'
    ],
    'all_projects' => [
        'en' => 'VIEW ALL PROJECTS',
        'nl' => 'BEKIJK ALLE PROJECTEN'
    ],
 'photography_description' => [
    'en' => 'A Laravel portfolio website I built for photographer Jamie Vis. The dark, minimal design gives the photographs room to stand out. A grid brings portraits, landscapes and everyday moments together, inviting visitors to explore his work.',
    'nl' => 'Een portfoliowebsite die ik met Laravel heb gebouwd voor fotograaf Jamie Vis. Het donkere, minimalistische ontwerp geeft de foto’s alle ruimte. Een raster brengt portretten, landschappen en alledaagse momenten samen en nodigt bezoekers uit om zijn werk te ontdekken.'
],
'lawyer_description' => [
    'en' => 'I built this website from scratch with PHP for NevaNexis, a legal adviser. The aim was to clearly present their services and make it easy for visitors to get in touch. This project gave me the chance to put what I have learned into practice for a real client.',
    'nl' => 'Deze website heb ik helemaal zelf gebouwd met PHP voor jurist NevaNexis. Het doel was om de diensten duidelijk te presenteren en het bezoekers makkelijk te maken om contact op te nemen. Met dit project kon ik wat ik heb geleerd in de praktijk toepassen voor een echte klant.'
],
    'contact_text' => [
        'en' => 'INTERESTED? GET IN TOUCH',
        'nl' => 'INTERESSE? NEEM CONTACT MET MIJ OP'
    ],
    'education' => [
        'en' => 'EDUCATION',
        'nl' => 'OPLEIDING'
    ],
    'currently_learning' => [
        'en' => 'CURRENTLY LEARNING',
        'nl' => 'DIT BEN IK AAN HET LEREN'
    ],
    'languages' => [
        'en' => 'LANGUAGES',
        'nl' => 'TALEN DIE IK BEHEERS'
    ],
    'spoken_languages' => [
        'en' => 'Dutch, English',
        'nl' => 'Nederlands, Engels'
    ]
    ,
'about_description' => [
    'en' => "I'm a software developer focused on creative applications, backend development, databases and hardware.",
    'nl' => 'Ik ben een softwareontwikkelaar met interesse in creatieve applicaties, backendontwikkeling, databases en hardware.'
],
'about_cv_text' => [
    'en' => 'You can take a look at my CV to learn more about my experience.',
    'nl' => 'Bekijk mijn cv om meer te weten te komen over mij'
],
'cv_intro' => [
    'en' => "Hiiii, my name is Nazli Eroglu.",
    'nl' => 'Hoiii, mijn naam is Nazli Eroglu.'
],
'cv_student' => [
    'en' => "I'm a 19-year-old Software Development student at Mediacollege Amsterdam.",
    'nl' => 'Ik ben 19 jaar en studeer Software Development aan het Mediacollege Amsterdam.'
],
'cv_interests' => [
    'en' => 'I enjoy working with software engineering, databases, backend development and hardware.',
    'nl' => 'Ik werk graag met softwareontwikkeling, databases, backendontwikkeling en hardware.'
],
'cv_subject' => [
    'en' => 'Subject',
    'nl' => 'Onderdeel'
],
'cv_skills_basic' => [
    'en' => 'Skills — Basic Knowledge',
    'nl' => 'Vaardigheden — Basiskennis'
],
'cv_web_tools' => [
    'en' => 'Web & Tools',
    'nl' => 'Web & Tools'
],
'cv_interactive_systems' => [
    'en' => 'Interactive Systems Design',
    'nl' => 'Ontwerp van interactieve systemen'
],
'cv_electronics' => [
    'en' => 'Electronics Prototyping',
    'nl' => 'Elektronica Prototyping'
],
'cv_data_network' => [
    'en' => 'Data & Network Software',
    'nl' => 'Data & Netwerk Software'
],
'cv_github' => [
    'en' => 'CHECK MY GITHUB',
    'nl' => 'BEKIJK MIJN GITHUB'
],
'cv_photo_alt' => [
    'en' => 'Portrait of Nazli Eroglu',
    'nl' => 'Portret van Nazli Eroglu'
],
'cv_course' => [
    'en' => 'Software Developer',
    'nl' => 'Softwareontwikkelaar'
], 
'cv_education' => [
    'en' => 'EDUCATION',
    'nl' => 'OPLEIDING'
],
'cv_currently_learning' => [
    'en' => 'CURRENTLY LEARNING',
    'nl' => 'DIT BEN IK AAN HET LEREN'
],
'cv_languages' => [
    'en' => 'LANGUAGES',
    'nl' => 'Talen die ik beheers'
],

'signalshark_description' => [
    'en' => 'SignalShark is a wireless scanner I’m building with an ESP32-S3 and C++. It scans nearby Wi-Fi networks and displays their names, channels, and signal strengths, rated as strong, moderate, or weak. An interactive serial menu lets me start scans and view help from my computer. Through this project, I’m learning embedded programming, serial communication, and how to work with wireless signals.',
    'nl' => 'SignalShark is een draadloze scanner die ik bouw met een ESP32-S3 en C++. Het apparaat scant wifi-netwerken in de omgeving en toont hun naam, kanaal en signaalsterkte, met een beoordeling van sterk, gemiddeld of zwak. Via een interactief menu op de computer kan ik scans starten en hulp bekijken. Tijdens dit project leer ik embedded programmeren, seriële communicatie en werken met draadloze signalen.'
],
]
;

function t(string $key): string
{
    global $translations, $lang;

    $text = $translations[$key][$lang]
        ?? $translations[$key]['en']
        ?? $key;

    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}
