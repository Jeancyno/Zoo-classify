<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $locomotion = $_POST['locomotion'];
    $ossature = $_POST['ossature'];
    $respiration = $_POST['respiration'];
    $temperature = $_POST['temperature'];

    // je vais juste Simuler une réponse du moteur d'inférence pour tester mes codes  (à remplacer par l'appel réel)
    $response = [
        "class" => "Mammifères",  
        "certainty" => 95         
    ];

    // Encoder en JSON et rediriger vers resulta.php
    $queryString = http_build_query($response);
    header("Location: resultat.php?$queryString");
    exit;
} else {
    echo "Méthode non autorisée.";
}
?>
