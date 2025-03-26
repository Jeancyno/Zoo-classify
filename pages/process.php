<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<pre>";
    $data = [];
    foreach ($_POST['properties'] as $id) {
        $data[] = show_property($id);
    }
    // exec('moteur_inference.exe external ' . json_encode($data), $response);
    // $_SESSION['response'] = $response;
    $_SESSION['result'] = json_decode("{
        \"class\": \"ERROR - Fichier : " . str_replace('\\', '\\\\', __FILE__) . " - Decommente les ligne 8 et 9, et supprime les lignes 9 à 13\",
        \"certainty\": 0
    }", true);

    header("Location: " . url('resultat'));
    exit;
} else {
    echo "Méthode non autorisée.";
}
?>
