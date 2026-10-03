<?php 
if session_status() === PHP_SESSION_NONE) {
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
        'nl' => 'Een website op maat voor een advocaat, gebouwd met PHP en gericht op duidelijke informatie en een professionele uitstraling.'
    ],
    'contact_text' => [
        'en' => 'INTERESTED? GET IN TOUCH',
        'nl' => 'INTERESSE? NEEM CONTACT OP'
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
        'nl' => 'TALEN'
    ],
    'spoken_languages' => [
        'en' => 'Dutch, English',
        'nl' => 'Nederlands, Engels'
    ]
];

function t(string $key): string
{
    global $translations, $lang;

    $text = $translations[$key][$lang]
        ?? $translations[$key]['en']
        ?? $key;

    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}