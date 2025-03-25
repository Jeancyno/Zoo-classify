<?php include './../includes/header.php' ?>

<div>
    <h1 class="border-l-6 border-green-700 px-2 text-4xl font-bold mb-4">Classification <span class="text-green-700">d'un animal</span></h1>

    <div>
        <form id="multiStepForm" action="process.php" method="POST">
            <div class="step active">
                <p class="mb-2 text-lg font-semibold">1. Quel est sa Locomotive ?</p>
                <label class="block"><input type="radio" name="locomotive" value="Rouge" class="mr-2"> Rouge</label>
                <label class="block"><input type="radio" name="locomotive" value="Bleu" class="mr-2"> Bleu</label>
                <label class="block"><input type="radio" name="locomotive" value="Vert" class="mr-2"> Vert</label>
            </div>

            <div class="step hidden">
                <p class="mb-2 text-lg font-semibold">2. Quel est son ossature ?</p>
                <label class="block"><input type="radio" name="ossature" value="Chien" class="mr-2"> Chien</label>
                <label class="block"><input type="radio" name="ossature" value="Chat" class="mr-2"> Chat</label>
                <label class="block"><input type="radio" name="ossature" value="Oiseau" class="mr-2"> Oiseau</label>
            </div>

            <div class="step hidden">
                <p class="mb-2 text-lg font-semibold">3. Quel type de respiration ?</p>
                <label class="block"><input type="radio" name="respiration" value="Été" class="mr-2"> Été</label>
                <label class="block"><input type="radio" name="respiration" value="Hiver" class="mr-2"> Hiver</label>
                <label class="block"><input type="radio" name="respiration" value="Printemps" class="mr-2"> Printemps</label>
            </div>

            <div class="step hidden">
                <p class="mb-2 text-lg font-semibold">4. Quel temperature ?</p>
                <label class="block"><input type="radio" name="temperation" value="Café" class="mr-2"> Café</label>
                <label class="block"><input type="radio" name="temperation" value="Thé" class="mr-2"> Thé</label>
                <label class="block"><input type="radio" name="temperation" value="Jus" class="mr-2"> Jus</label>
            </div>


            <!-- Boutons de navigation -->
            <div class="mt-4 flex justify-between">
                <button type="button" id="prevBtn" class="px-6 py-2 border border-gray-800 bg-white text-black font-semibold shadow-lg rounded-full hover:bg-gray-200 duration-300 cursor-pointer hidden">Précédent</button>
                <button type="button" id="nextBtn" class="px-6 py-2 border border-gray-800 bg-gray-800 text-white font-semibold shadow-lg rounded-full hover:bg-gray-600 duration-300 cursor-pointer">Suivant</button>
                <button type="submit" id="submitBtn" class="px-6 py-2 border border-green-500 bg-green-500 text-white font-semibold shadow-lg rounded-full hover:bg-green-800 duration-300 cursor-pointer hidden">Soumettre</button>
            </div>
        </form>
    </div>
    
</div>
<script src="./../assets/js/script.js"></script>
<?php include './../includes/footer.php'; ?>