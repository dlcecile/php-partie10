<?php
//Ne soumet pas mon formulaire sans l'envoi
$isSubmitted=false;
//Initialisation des variables à vide.
$firstname = $lastname = $years = $society = '';
//Regex 
$regexName = "/^[A-Za-zéÉ][A-Za-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ]+((-| )[A-Za-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ]+)?$/"; //Pour le nom et le prénom
//Tableau des erreurs
$errors = [];

//contrôle du formulaire après envoi
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $isSubmitted = true;
//Controle du nom
$firstname = trim(filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING));
if (empty($firstname)) {
    $errors['firstname'] = 'Le champ est vide, veuillez saisir votre nom';
} elseif (!preg_match($regexName, $firstname)) {
    $errors['firstname'] = 'Votre nom contient des caractères non autorisés !';
}
//Contôle du prénom
$lastname = trim(filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING));
if (empty($lastname)) {
    $errors['lastname'] = 'Veuillez renseigner le nom';
} elseif (!preg_match($regexName, $lastname)) {
    $errors['lastname'] = 'Votre nom contient des caractères non autorisés !';
}
//Contrôle de l'âge
$years = trim(filter_input_array(INPUT_POST, 'years', FILTER_SANITIZE_NUMBER_INT));
if (empty($years)) {
    $errors['years'] = 'Veuillez renseigner un âge valide ';
}
//Contrôle de la société
$society = trim(filter_input_array(INPUT_POST, 'society', FILTER_SANITIZE_STRING));
if (empty($society)) {
    $errors['society'] = 'Veuillez renseigner le nom de la société ';
}
}
?>