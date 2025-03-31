<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<pre>";
    $data = [];
    foreach ($_POST['properties'] as $id) {
        $data[] = show_property($id);
    }
    // exec(' cd C:\Users\DELL\Documents\GitHub\inference_engine\bin\Debug && inference_engine.exe external ' . json_encode($data), $response);
    $d=json_encode($data);

    $c=addcslashes($d," \"");
    $cmd="cd C:\Users\DELL\Documents\GitHub\inference_engine\bin\Debug && inference_engine.exe external \" $c \"";
    exec($cmd, $response);
    
    $_SESSION['result']['class'] = is_array($response)?implode("\n",$response):$response[0];
    $_SESSION['result']['certainty']="";
    // $_SESSION['result'] = json_decode("{
    //     \"class\": \"ERROR - Fichier : " . str_replace('\\', '\\\\', __FILE__) . " - Decommente les ligne 8 et 9, et supprime les lignes 9 à 13\",
    //     \"certainty\": 0
    // }", true);

    header("Location: " . url('resultat'));
    exit;
} else {
    echo "Méthode non autorisée.";
}
?>
