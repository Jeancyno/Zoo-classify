<?php include './../includes/header.php'; ?>

<?php
// if (isset($_GET['class']) && isset($_GET['certainty'])) {
//     $class = strtolower(str_replace(' ', '_', $_GET['class']));
//     $certainty = $_GET['certainty'];

//    $images = glob("images/$class/*.jpg");
//    $image_path = $images ? $images[array_rand($images)] : "images/default.jpg";
// } else {
//     echo "Aucune donnée reçue.";
//     exit;
// }
?>

<!-- <h1 class="text-2xl font-bold">Résultat de la classification</h1>
<p class="text-lg">Classe de l'animal : <strong><?php echo htmlspecialchars($_GET['class']); ?></strong></p>
<p class="text-lg">Certitude : <strong><?php echo htmlspecialchars($certainty); ?>%</strong></p>

<h2 class="text-xl mt-4">Image de l'animal :</h2>
<img src="<?php echo $image_path; ?>" alt="Image de l'animal" class="w-64 h-64 object-cover mt-2"> -->

<!-- <a href="index.php" class="mt-4 bg-blue-500 text-white p-2 rounded">Faire un autre test</a> -->

<div>

    <h1 class="border-l-6 border-green-700 px-2 text-4xl font-bold mb-4">Résultat <span class="text-green-700">la classification</span></h1>
    
    <p class="text-lg">Classe de l'animal : <strong>TEST</strong></p>
    <p class="text-lg">Certitude : <strong>test</strong></p>

    <h2 class="text-xl mt-4">Image de l'animal :</h2>
    <img src="./../assets/images/default.jpg" alt="Image de l'animal" class="w-64 h-64 object-cover my-4">

    <a href="index.php" class="px-6 py-2 border border-gray-800 bg-gray-800 text-white font-semibold shadow-lg rounded-full hover:bg-gray-600 duration-300 cursor-pointer w-full block text-center">Faire un autre test</a>
   

</div>

<?php include './../includes/footer.php'; ?>