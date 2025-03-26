<?php include includes_path('header'); ?>

<?php
$result = $_SESSION['result'] ?? [];
if (isset($result['class']) && isset($result['certainty'])) {
    $class = strtolower(str_replace(' ', '_', $result['class']));
    $certainty = $result['certainty'];
     
   $images = array_map(fn($f) => assets('images/' . pathinfo($f)['basename']), glob(assets_path("images/*.jpg")));
//    $image_path = $images ? $images[array_rand($images)] : assets_path("images" . DIRECTORY_SEPARATOR . "default.jpg");
   $image_path = assets('images/default.jpg');
} else {?>
<div class="flex flex-col space-y-8">
    <div class="text-2xl">Aucune donnée reçue.</div>
    <a href="<?= url() ?>" class="px-6 py-2 border border-gray-800 bg-gray-800 text-white font-semibold shadow-lg rounded-full hover:bg-gray-600 duration-300 cursor-pointer w-full block text-center">Faire un autre test</a>
</div>
<?php
    exit;
}
?>


<div>

    <h1 class="border-l-6 border-green-700 px-2 text-4xl font-bold mb-4">Résultat de <span class="text-green-700">la classification</span></h1>
    
    <p class="text-lg">Classe de l'animal : <strong><?php echo htmlspecialchars($result['class']); ?></strong></p>
    <p class="text-lg">Certitude : <strong><?php echo htmlspecialchars($certainty); ?>%</strong></p>

    <br/><br/>
    <!-- <h2 class="text-xl mt-4">Image de l'animal :</h2>
    <img src="<?php echo $image_path; ?>" alt="Image de l'animal" class="w-64 h-64 object-cover my-4"> -->

    <a href="<?= url() ?>" class="px-6 py-2 border border-gray-800 bg-gray-800 text-white font-semibold shadow-lg rounded-full hover:bg-gray-600 duration-300 cursor-pointer w-full block text-center">Faire un autre test</a>
   

</div>

<?php include includes_path('footer'); session_destroy(); ?>