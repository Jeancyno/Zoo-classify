const steps = document.querySelectorAll(".step");
const prevBtn = document.getElementById("prevBtn");
const nextBtn = document.getElementById("nextBtn");
const submitBtn = document.getElementById("submitBtn");

let currentStep = 0;

function showStep(stepIndex) {
    steps.forEach((step, index) => {
        step.classList.toggle("hidden", index !== stepIndex);
    });

    // Affichage des boutons
    prevBtn.classList.toggle("hidden", stepIndex === 0);
    nextBtn.classList.toggle("hidden", stepIndex === steps.length - 1);
    submitBtn.classList.toggle("hidden", stepIndex !== steps.length - 1);
    
    // Désactiver le bouton "Suivant" tant qu'aucune option n'est sélectionnée
    checkSelection();
}

function checkSelection() {
    const selectedOption = steps[currentStep].querySelector('input[type="radio"]:checked');
    const selectedOptions = [...document.querySelectorAll('.step')].every(step => 
        step.querySelector('input[type="radio"]:checked')
    );
    
    nextBtn.disabled = !selectedOption;
    nextBtn.classList.toggle("opacity-50", !selectedOption);
    submitBtn.disabled = !selectedOptions;
    submitBtn.classList.toggle("opacity-50", !selectedOptions);
}

nextBtn.addEventListener("click", () => {
    if (currentStep < steps.length - 1) {
        currentStep++;
        showStep(currentStep);
    }
});

prevBtn.addEventListener("click", () => {
    if (currentStep > 0) {
        currentStep--;
        showStep(currentStep);
    }
});

// Vérifier si une option est sélectionnée à chaque changement
steps.forEach(step => {
    step.addEventListener("change", checkSelection);
});


showStep(currentStep);