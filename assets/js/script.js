const steps = document.querySelectorAll(".step");
const prevBtn = document.getElementById("prevBtn");
const nextBtn = document.getElementById("nextBtn");
const submitBtn = document.getElementById("submitBtn");

let currentStep = 0;

function showStep(stepIndex) {
    for(class_ of ['invisible', 'fixed', 'top-0']){
        steps.forEach((step, index) => {
            step.classList.toggle(class_, index !== stepIndex);
        });
    
        // Affichage des boutons
        prevBtn.classList.toggle(class_, stepIndex === 0);
        nextBtn.classList.toggle(class_, stepIndex === steps.length - 1);
        submitBtn.classList.toggle(class_, stepIndex !== steps.length - 1);
    }
    
    // Désactiver le bouton "Suivant" tant qu'aucune option n'est sélectionnée
    checkSelection();
}

function checkSelection() {
    const selectedOption = steps[currentStep].querySelector('input[type="checkbox"]:checked');
    const selectedOptions = [...document.querySelectorAll('.step')].every((step) => {
        var verif = false;
        for(var v of step.querySelectorAll('input')){
            console.log(step.children[0].innerText, v.checked)
            if(v.checked) {
                verif = true; 
                break;
            }
        }
        return verif
    } 
    );
    
    nextBtn.disabled = !selectedOption;
    nextBtn.classList.toggle("opacity-50", !selectedOption);
    submitBtn.disabled = !selectedOptions;
    submitBtn.classList.toggle("opacity-50", !selectedOptions);
    // console.log(selectedOptions)
}

nextBtn.addEventListener("click", (e) => {
    e.preventDefault();
    if (currentStep < steps.length - 1) {
        currentStep++;
        showStep(currentStep);
    }
});

prevBtn.addEventListener("click", (e) => {
    e.preventDefault();
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