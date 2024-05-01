$(document).ready(function() {
    var selectedGender;
    var currentWeight;
    var TargetWeight;
    var Objective;
    // Capture gender and transition to objective card
    $('.gender-btn').click(function() {
        selectedGender = $(this).text(); // Capture gender
        $('#card1').hide();
        $('#card2').show();
    });

    // Handle objective selection and transition to height input
    $('.objective-btn').click(function() {
        Objective = $(this).text();
        $('#card2').hide();
        $('#card3').show();
    });

    // Proceed from height to weight input
    $('.continue-btn1').click(function() {
        $('#card3').hide();
        $('#card4').show();
        

    });

    // Calculate BMI and show results
    $('.submit-btn').click(function() {
        var height = parseFloat($('.height-input').val()) / 100; // Convert cm to meters
        var weight = parseFloat($('.weight-input').val());
        var bmi = weight / (height * height);
        displayBMIResults(bmi);
        $('#card4').hide();
        $('#card5').show();
    });

    // Handle BMI results continuation or restart
    $('.restart-btn').click(function() {
        $('input[type="number"]').val(''); // Reset inputs
        $('#card5').hide();
        $('#card1').show();
    });

    $('.continue-to-target-btn').click(function() {
        $('#card5').hide();
        $('#card6').show();
       

    });

    // Submit desired weight and request age
    $('.submit-target-weight-btn').click(function() {
        $('#card6').hide();
        $('#card7').show();
    });

    // Calculate IMG and display results
    $('.submit-age-btn').click(function() {
        var age = parseInt($('.age-input').val());
        var height = parseFloat($('.height-input').val()) / 100;
        var weight = parseFloat($('.weight-input').val());
        var bmi = weight / (height * height);
        var img = calculateIMG(bmi, age, selectedGender);
        displayIMGResults(img, selectedGender);
        $('#card7').hide();
        $('#card8').show();
    });

    $('.continue-btn2').click(function() {
        $('#card8').hide();
        $('#object-weight-display').text(Objective);
        var currentWeight = $('#current-weight').val(); // Get value from current weight input
        var targetWeight = $('#target-weight').val(); // Get value from target weight input
        $('#current-weight-display').text(currentWeight);
        $('#target-weight-display').text(targetWeight);
        $('#card9').show(); 
        
    });
    $('.continue-btn3').click(function(){
            $('#card9').hide();
            $('#card10').show();
    });
    $('.submit-medical-btn').click(function() {
        var selectedConditions = [];
        $('input[name="medicalCondition"]:checked').each(function() {
            selectedConditions.push($(this).val());
        });

        console.log("Selected medical conditions:", selectedConditions);
        // Logic to handle the medical conditions
        // You might want to store these in a global variable or use them to adjust recommendations

        $('#card10').hide();
        $('#card11').show(); // Assuming you have a next step. Adjust accordingly.
    });

   
        $('.submit-stomach-issue-btn').click(function() {
            var selectedIssue = $('input[name="stomachIssue"]:checked').val();
    
            console.log("Selected stomach issue response:", selectedIssue);
            // Logic to handle the response
            // You might want to store this response or use it to conditionally show other cards
    
            $('#card11').hide();
            $('#card12').show(); // Assuming there is a next step. Adjust accordingly.
        });

        $('.submit-daily-activity-btn').click(function() {
            var selectedActivity = $('input[name="dailyActivity"]:checked').val();
    
            console.log("Selected daily activity:", selectedActivity);
            // Logic to handle the response
            // You might store this response or use it to guide further interactions
    
            $('#card12').hide();
            $('#card13').show(); // Assuming there is a next step. Adjust accordingly.
        });


        $('.submit-activity-level-btn').click(function() {
            var activityLevel = $('input[name="activityLevel"]:checked').val();
    
            console.log("Selected activity level:", activityLevel);
            // Logic to handle the response
            // Could be used to tailor exercise recommendations or further profile questions
    
            $('#card13').hide();
            $('#card14').show(); // Assuming there is a next step. Adjust accordingly.
        });

        $('.submit-fatigue-level-btn').click(function() {
            var fatigueLevel = $('input[name="fatigueLevel"]:checked').val();
    
            console.log("Selected fatigue level:", fatigueLevel);
            // Handle the response - maybe adjust lifestyle or health advice based on the fatigue level
    
            $('#card14').hide();
            $('#card15').show(); // Assuming there is a next step. Adjust accordingly.
        });
        $('.submit-stomach-discomfort-btn').click(function() {
            var stomachDiscomfort = $('input[name="stomachDiscomfort"]:checked').val();
    
            console.log("Selected stomach discomfort response:", stomachDiscomfort);
            // Here you can add logic based on the response
            // For example, provide recommendations or adjust user's dietary plan
    
            $('#card15').hide();
            $('#card16').show(); // Assuming there is a next step. Adjust accordingly.
        });
        $('.submit-meal-frequency-btn').click(function() {
            var mealFrequency = $('input[name="mealFrequency"]:checked').val();
    
            console.log("Selected meal frequency:", mealFrequency);
            // Handle the response - you might adjust user's meal plan based on this preference
            // Or use this data to personalize their diet recommendations
    
            $('#card16').hide();
            $('#card17').show(); // Assuming there is a next step. Adjust accordingly.
        });
        $('.submit-dietary-habits-btn').click(function() {
            var selectedHabits = [];
            $('input[name="dietaryHabits"]:checked').each(function() {
                selectedHabits.push($(this).val());
            });
    
            console.log("Selected dietary habits:", selectedHabits);
            // Here you can process these habits, such as offering tailored dietary advice or planning
    
            $('#card17').hide();
            $('#card18').show(); // Assuming there is a next step. Adjust accordingly.
        });
        $('.submit-eating-out-frequency-btn').click(function() {
            var eatingOutFrequency = $('input[name="eatingOutFrequency"]:checked').val();
    
            console.log("Selected eating out frequency:", eatingOutFrequency);
            // Handle the response - this could be used to tailor dietary advice or understand lifestyle patterns
    
            $('#card18').hide();
            $('#card19').show(); // Assuming there is a next step. Adjust accordingly.
        });
        $('.submit-meal-prep-time-btn').click(function() {
            var mealPrepTime = $('input[name="mealPrepTime"]:checked').val();
    
            console.log("Selected meal prep time:", mealPrepTime);
            // Handle the response - this could be used to recommend recipes and meal plans that fit the user's available time
    
            $('#card19').hide();
            $('#card20').show(); // Assuming there is a next step. Adjust accordingly.
        });
        $('.submit-dietary-vices-btn').click(function() {
            var selectedVices = [];
            $('input[name="dietaryVices"]:checked').each(function() {
                selectedVices.push($(this).val());
            });
    
            console.log("Selected dietary vices:", selectedVices);
            // Here you can handle the user's selections for further analysis or to offer targeted dietary advice
    
            $('#card20').hide();
            $('#card21').show(); // Assuming there is a next step. Adjust accordingly.
        });
        $('.submit-junk-food-frequency-btn').click(function() {
            var junkFoodFrequency = $('input[name="junkFoodFrequency"]:checked').val();
    
            console.log("Selected frequency of junk food and soda consumption:", junkFoodFrequency);
            // This information can be used to advise on dietary adjustments or to understand the user's health risks
    
            $('#card21').hide();
            $('#card22').show(); // Assuming there is a next step. Adjust accordingly.
        });
        $('.submit-weight-satisfaction-btn').click(function() {
            var weightSatisfaction = $('input[name="weightSatisfaction"]:checked').val();
    
            console.log("Selected time of last weight satisfaction:", weightSatisfaction);
            // Use this response to guide further questions, tailor advice, or adjust goals in the user's health plan
    
            $('#card22').hide();
            $('#card23').show(); // Assuming there is a next step. Adjust accordingly.
        });
        $('.submit-water-consumption-btn').click(function() {
            var waterConsumption = $('input[name="waterConsumption"]:checked').val();
    
            console.log("Selected daily water consumption:", waterConsumption);
            // Use this response to provide health advice related to hydration or to adjust dietary plans
    
            $('#card23').hide();
            $('#card24').show(); // Assuming there is a next step. Adjust accordingly.
        });
        $('.submit-liquid-consumption-btn').click(function() {
            var selectedLiquids = [];
            $('input[name="liquidConsumption"]:checked').each(function() {
                selectedLiquids.push($(this).val());
            });
    
            console.log("Selected liquids for hydration:", selectedLiquids);
            // Here you can handle the response, perhaps suggesting healthier hydration options if needed
    
            $('#card24').hide();
            $('#card25').show(); // Assuming there is a next step. Adjust accordingly.
        });
        $('.next-btn').click(function() {
            $('#card25').hide();
            $('#card26').show(); // Assuming there is a next step or this could lead to a summary or conclusion.
        });
        $('.submit-sleep-duration-btn').click(function() {
            var sleepDuration = $('input[name="sleepDuration"]:checked').val();
    
            console.log("Selected sleep duration:", sleepDuration);
            // This response can be used to advise on healthy sleep habits or to understand the user's lifestyle better
    
            $('#card26').hide();
            $('#card27').show(); // Assuming there is a next step. Adjust accordingly.
        });


});

    

function displayBMIResults(bmi) {
    var result = bmi.toFixed(2);
    var message = '';
    if (bmi < 16) {
        message = "Votre IMC est: " + result + ", ce qui est considéré Anorexie ou dénutrition.";
    } else if (bmi >= 16 && bmi < 18.5) {
        message = "Votre IMC est: " + result + ", ce qui est considéré Maigreur. Votre poids apparaît insuffisant par rapport à votre taille. Cet IMC faible peut être considéré normal si votre constitution corporelle naturelle est frêle. Mais cela peut également être le symptôme d’une maladie, d’une dénutrition ou de difficultés psychologiques. Pour éviter toute carence, nous vous conseillons de consulter notre spécialiste qui évaluera le degré et la nature de cette insuffisance pondérale.";
    } else if (bmi >= 18.5 && bmi < 25) {
        message = "Votre IMC est: " + result + ", ce qui est considéré comme normal. Vous faites du bon travail en gardant votre poids par rapport à votre taille dans la fourchette normale. Nous vous aiderons à conserver cet équilibre tout au long de votre vie.";
    } else if (bmi >= 25 && bmi < 30) {
        message = "Votre IMC est: " + result + ", ce qui est considéré surpoids. Votre indice de masse corporelle indique un surpoids par rapport à votre taille. À long terme et chez certaines personnes, le surpoids peut nuire à la santé et augmenter le risque de maladies cardiovasculaires, d’hypertension artérielle, de diabète, etc. Nous vous conseillons de consulter notre spécialiste qui vous apportera les conseils adaptés à votre cas particulier.";
    } else if (bmi >= 30 && bmi < 35) {
        message = "Votre IMC est: " + result + ", ce qui est considéré obésité modérée (obésité grade I). Les causes de l’obésité peuvent être multiples: déséquilibre alimentaire, sédentarité, prise de certains traitements médicamenteux, dérèglement hormonaux. À long terme, l’obésité peut nuire à votre santé en augmentant le risque de maladies cardiovasculaires, d’hypertension artérielle, de troubles immunitaires (cancer), de diabète, d’arthrose, etc. Nous vous invitons à consulter notre spécialiste qui vous apportera les conseils adaptés à votre situation.";
    } else if (bmi >= 35 && bmi < 40) {
        message = "Votre IMC est: " + result + ", ce qui est considéré obésité sévère (obésité grade II). Les causes de l’obésité peuvent être multiples: déséquilibre alimentaire, sédentarité, prise de certains traitements médicamenteux, dérèglement hormonaux. À long terme, l’obésité peut nuire à votre santé en augmentant le risque de maladies cardiovasculaires, d’hypertension artérielle, de troubles circulatoires, de troubles immunitaires (cancer), de diabète, d’arthrose, etc. Nous vous invitons à consulter notre spécialiste qui vous apportera les conseils adaptés à votre situation.";
    } else if (bmi >= 40) {
        message = "Votre IMC est: " + result + ", ce qui est considéré obésité massive. Les risques pour votre santé sont significatifs et nécessitent une intervention immédiate. Nous vous conseillons vivement de consulter un spécialiste pour un suivi personnalisé et adapté.";
    }

    $('#bmi-result').text("Votre IMC est: " + result);
    $('#bmi-advice').text(message);
}
function calculateIMG(bmi, age, gender) {
    var img = 0;
    if (gender === 'Homme' && age >= 18 && age <= 64) {
        img = (1.20 * bmi) + (0.23 * age) - (10.8 * 1) - 5.4;
    } else if (gender === 'Femme' && age >= 18 && age <= 54) {
        img = (1.20 * bmi) + (0.23 * age) - (10.8 * 0) - 5.4;
    }
    return img;
}
function displayIMGResults(img, gender) {
    var result = img.toFixed(2);
    var message = '';
    var detailedAdvice = '';

    if (gender === 'Homme') {
        if (img < 15) {
            message = "Trop maigre.";
            detailedAdvice = "Votre IMG (" + result + "%) est assez bas, ce qui peut signaler un manque de réserves de graisse essentielles pour une bonne santé. Il est important de maintenir un équilibre alimentaire qui inclut tous les groupes alimentaires. Si vous avez du mal à prendre du poids ou si vous êtes préoccupé par votre IMG, n'hésitez pas à consulter notre spécialiste en nutrition pour des conseils personnalisés et un programme adapté à vos besoins.";
        } else if (img >= 15 && img <= 20) {
            message = "Pourcentage normal.";
            detailedAdvice = "Félicitations, votre IMG (" + result + "%) se trouve dans la fourchette normale, ce qui est un excellent indicateur de votre équilibre en matière de santé corporelle. Continuez à maintenir une alimentation variée et équilibrée, et n'oubliez pas l'importance de l'exercice régulier. Pour des conseils sur comment maintenir ou optimiser votre condition physique, notre spécialiste est à votre disposition pour vous accompagner.";
        } else {
            message = "Trop de graisse.";
            detailedAdvice = "Votre IMG (" + result + "%) est élevé, essayez de perdre en graisse en évitant les régimes privatifs (néfastes pour la santé). Si vous voulez perdre du poids de manière saine, nous vous conseillons de consulter notre spécialiste en perte de poids pour obtenir des conseils et programme personnalisés.";
        }
    } else if (gender === 'Femme') {
        if (img < 25) {
            message = "Trop maigre.";
            detailedAdvice = "Votre IMG (" + result + "%) est assez bas, ce qui peut signaler un manque de réserves de graisse essentielles pour une bonne santé. Il est important de maintenir un équilibre alimentaire qui inclut tous les groupes alimentaires. Si vous avez du mal à prendre du poids ou si vous êtes préoccupé par votre IMG, n'hésitez pas à consulter notre spécialiste en nutrition pour des conseils personnalisés et un programme adapté à vos besoins.";
        } else if (img >= 25 && img <= 30) {
            message = "Pourcentage normal.";
            detailedAdvice = "Félicitations, votre IMG (" + result + "%) se trouve dans la fourchette normale, ce qui est un excellent indicateur de votre équilibre en matière de santé corporelle. Continuez à maintenir une alimentation variée et équilibrée, et n'oubliez pas l'importance de l'exercice régulier. Pour des conseils sur comment maintenir ou optimiser votre condition physique, notre spécialiste est à votre disposition pour vous accompagner.";
        } else {
            message = "Trop de graisse.";
            detailedAdvice = "Votre IMG (" + result + "%) est élevé, essayez de perdre en graisse en évitant les régimes privatifs (néfastes pour la santé). Si vous voulez perdre du poids de manière saine, nous vous conseillons de consulter notre spécialiste en perte de poids pour obtenir des conseils et programme personnalisés.";
        }
    }

    $('#img-result').text("Votre IMG est " + result + "%");
    $('#img-advice').text("L'interprétation de votre résultat est la suivante: " + message + " " + detailedAdvice);
}
