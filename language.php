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
        'en' => 'A photography portfolio built with Laravel, with a clean layout that puts the photos first.',
        'nl' => 'Een fotografieportfolio gebouwd met Laravel, met een rustige indeling waarin de foto’s centraal staan.'
    ],
    'lawyer_description' => [
        'en' => 'A custom website built with PHP for a lawyer, focused on clear information and a professional look.',
        'nl' => 'Een website op maat voor een jurist, gebouwd met PHP en gericht op duidelijke informatie en een professionele uitstraling.'
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
]
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
