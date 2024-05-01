<!doctype html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Gusta Benna | Rejoinez Nous</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="assets/css/slick.css">

    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="assets/css/LineIcons.css">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3" defer></script>

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

    <!--====== tailwind css ======-->
   <link rel="stylesheet" href="output.css">

</head>
<body class="text-gray-800 antialiased">
    <nav
      class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 "
    >
      <div
        class="container px-4 mx-auto flex flex-wrap items-center justify-between"
      >
        <div
          class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start"
        >
        <img src="assets/images/gusta benna.png" width="92" height="92" alt="Gusta Benna Logo"> 
        
        <button
            class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none"
            type="button"
            onclick="toggleNavbar('example-collapse-navbar')"
          >
            <i class="text-white fas fa-bars"></i>
          </button>
        </div>
        <div
          class="lg:flex flex-grow items-center  lg:bg-transparent lg:shadow-none hidden"
          id="example-collapse-navbar"
        >
          <ul class="flex flex-col lg:flex-row pl-8 list-none mr-auto">
            <li class="flex items-center">
              <a
                class="lg:text-black border-b-2  lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-md uppercase font-bold"
                href="<?= base_url() ?>"
                >
                Acceuil</a
              >
            </li>
            <li class="flex items-center">
              <a
                class="lg:text-black border-b-2 lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-md uppercase font-bold"
                href="#apropos"
                >
                A PROPOS</a
              >
            </li>
            <li class="flex items-center">
              <a
                class="lg:text-black border-b-2 lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-md uppercase font-bold"
                href="#services"
                >
                SERVICES</a
              >
            </li>
            <li class="flex items-center">
              <a
                class="lg:text-black border-b-2 lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-md uppercase font-bold"
                href="#nosproduits"
                >
                NOS PRODUITS</a
              >
            </li>
          </ul>
          
          <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
            <li class="flex items-center">
              <a
                class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                href="#pablo"
                ><i
                  class="lg:text-gray-300 text-gray-500 fab fa-facebook text-lg leading-lg "
                ></i
                ><span class="lg:hidden inline-block ml-2">Share</span></a
              >
            </li>
            <li class="flex items-center">
              <a
                class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                href="#pablo"
                ><i
                  class="lg:text-gray-300 text-gray-500 fab fa-twitter text-lg leading-lg "
                ></i
                ><span class="lg:hidden inline-block ml-2">Tweet</span></a
              >
            </li>
            <li class="flex items-center">
              <a
                class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                href="#pablo"
                ><i
                  class="lg:text-gray-300 text-gray-500 fab fa-github text-lg leading-lg "
                ></i
                ><span class="lg:hidden inline-block ml-2">Star</span></a
              >
            </li>
            <li class="flex items-center">
              <button
                class="bg-white text-gray-800 active:bg-gray-100 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3"
                type="button"
                style="transition: all 0.15s ease 0s;"
              >
                <i class="fas fa-arrow-alt-circle-down"></i> Download
              </button>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <br>

        <br>
        <br>
        <br>
    <main>
      <div
        class="relative pt-16 pb-32 flex content-center items-center justify-center"
        style="min-height: 75vh;"
      >
      <div class="container">
        <!-- Card 1: Gender -->
        <div id="card1" class="card bg-white p-8 m-4 rounded-lg shadow-xl">
            <p>Quel est votre genre?</p>
            <button class="gender-btn mx-2 my-4 px-4 py-2 rounded bg-blue-500 text-white">Homme</button>
            <button class="gender-btn mx-2 my-4 px-4 py-2 rounded bg-pink-500 text-white">Femme</button>
        </div>

        <!-- Card 2: Objective -->
        <div id="card2" class="card bg-white p-8 m-4 rounded-lg shadow-xl hidden">
            <p>Quel est votre objectif principal?</p>
            <button class="objective-btn mx-2 my-4 px-4 py-2 rounded bg-green-500 text-white">Perdre du poids</button>
            <button class="objective-btn mx-2 my-4 px-4 py-2 rounded bg-yellow-500 text-white">Prise du poids</button>
            <button class="objective-btn mx-2 my-4 px-4 py-2 rounded bg-red-500 text-white">Rester en forme et en bonne santé</button>
        </div>

        <!-- Card 3: Height -->
        <div id="card3" class="card bg-white p-8 m-4 rounded-lg shadow-xl hidden">
            <p>Quel est votre taille?</p>
            <input type="number" placeholder="Enter height in cm" class="height-input border-2 border-gray-300 p-2 rounded">
            <p class="text-xs my-2">Calcul de votre indice de masse corporelle l’IMC est largement utilisé comme indicateur de risque pour le développement ou la prévalence de plusieurs problèmes de santé.</p>
            <button class="continue-btn1 my-4 px-4 py-2 rounded bg-blue-500 text-white">Continue</button>
        </div>

        <!-- Card 4: Weight -->
        <div id="card4" class="card bg-white p-8 m-4 rounded-lg shadow-xl hidden">
            <p>Quel est votre poids actuel?</p>
            <input type="number"  id="current-weight" placeholder="Enter weight in kg" class="weight-input border-2 border-gray-300 p-2 rounded">
            <button class="submit-btn my-4 px-4 py-2 rounded bg-purple-500 text-white">Submit</button>
        </div>
        <!-- Card 5: BMI Result -->
        <div id="card5" class="card bg-white p-8 m-4 rounded-lg shadow-xl hidden">
          <p id="bmi-result">Your BMI Result will appear here.</p>
          <p id="bmi-advice">Advice based on your BMI will appear here.</p>
          <button class="restart-btn mx-2 my-4 px-4 py-2 rounded bg-red-500 text-white">Restart</button>
          <button class="continue-to-target-btn mx-2 my-4 px-4 py-2 rounded bg-blue-500 text-white">Continue</button>
        </div>

        <!-- Card 6: Desired Weight -->
        <div id="card6" class="card bg-white p-8 m-4 rounded-lg shadow-xl hidden">
            <p>Quel est votre poids souhaité?</p>
            <input type="number"  id="target-weight" placeholder="Poids ciblé (kg)" class="target-weight-input border-2 border-gray-300 p-2 rounded">
            <button class="submit-target-weight-btn mx-2 my-4 px-4 py-2 rounded bg-purple-500 text-white">Continuer</button>
        </div>

        <!-- Card 7: Age Input -->
          <div id="card7" class="card bg-white p-8 m-4 rounded-lg shadow-xl hidden">
              <p>Quel est votre âge?</p>
              <input type="number" placeholder="Entrez votre âge" class="age-input border-2 border-gray-300 p-2 rounded">
              <p class="text-sm mt-2">Nous demandons votre âge pour créer votre plan personnel. Les personnes âgées ont tendance à avoir plus de graisse corporelle que les personnes plus jeunes avec le même IMC.</p>
              <button class="submit-age-btn my-4 px-4 py-2 rounded bg-blue-500 text-white">Continuer</button>
          </div>

          <!-- Card 8: Body Fat Index Result -->
          <div id="card8" class="card bg-white p-8 m-4 rounded-lg shadow-xl hidden">
              <p id="img-result">Votre IMG est calculé ici.</p>
              <p id="img-advice">Interprétation de votre résultat.</p>
              <button class="continue-btn2 my-4 px-4 py-2 rounded bg-blue-500 text-white">Continuer</button>
          </div>

        <!-- Card 9: Summary and Timeline -->
      <div id="card9" class="card bg-white p-8 m-4 rounded-lg shadow-xl hidden">
          <p>Votre poids actuel: <span id="current-weight-display"></span> kg</p>
          <p>Votre poids ciblé: <span id="target-weight-display"></span> kg</p>
          <p><span id="object-weight-display"></span></p>
          <p>Ceci est une chronologie provisoire basée sur vos réponses.</p>
          <button class="continue-btn3 my-4 px-4 py-2 rounded bg-blue-500 text-white">Continuer</button>
      </div>


      <!-- Card 10: Medical Conditions -->
      <div id="card10" class="card bg-white p-8 m-4 rounded-lg shadow-xl hidden">
          <p>Souffrez-vous de l’un des problèmes médicaux suivants ?</p>
          <form id="medical-form">
              <label><input type="checkbox" name="medicalCondition" value="Diabète de type 01"> Diabète de type 01</label><br>
              <label><input type="checkbox" name="medicalCondition" value="Diabète de type 02"> Diabète de type 02</label><br>
              <label><input type="checkbox" name="medicalCondition" value="Hypertension artérielle"> Hypertension artérielle</label><br>
              <label><input type="checkbox" name="medicalCondition" value="Cancer"> Cancer</label><br>
              <label><input type="checkbox" name="medicalCondition" value="SOPK"> SOPK (Syndrome des Ovaires Polykystiques)</label><br>
              <label><input type="checkbox" name="medicalCondition" value="Trouble de l’alimentation"> Trouble de l’alimentation</label><br>
              <label><input type="checkbox" name="medicalCondition" value="Hépatites virales"> Hépatites virales</label><br>
              <label><input type="checkbox" name="medicalCondition" value="Autre"> Autre maladie ou trouble préexistant</label><br>
              <label><input type="checkbox" name="medicalCondition" value="Aucun"> Aucun de la liste</label><br>
              <button type="button" class="submit-medical-btn my-4 px-4 py-2 rounded bg-blue-500 text-white">Continue</button>
          </form>
      </div>
      <!-- Card 11: Stomach Issues -->
        <div id="card11" class="card bg-white p-8 m-4 rounded-lg shadow-lg hidden">
            <p>Ressentez-vous des maux d’estomac pendant la journée ?</p>
            <p>Certaines personnes peuvent se sentir ballonnées, avoir des crampes d’estomac ou une indigestion après avoir mangé certains aliments ou dans des situations de stress.</p>
            <form id="stomach-issues-form">
                <label><input type="radio" name="stomachIssue" value="Oui"> Oui</label><br>
                <label><input type="radio" name="stomachIssue" value="Non"> Non</label><br>
                <label><input type="radio" name="stomachIssue" value="Je ne suis pas sur"> Je ne suis pas sur</label><br>
                <button type="button" class="submit-stomach-issue-btn my-4 px-4 py-2 rounded bg-blue-500 text-white">Continue</button>
            </form>
        </div>


        <!-- Card 12: Daily Activities -->
      <div id="card12" class="card bg-white p-8 m-4 rounded-lg shadow-lg hidden">
          <p>Comment passez-vous généralement votre journée ?</p>
          <p>Dites ce qui vous prend le plus de temps:</p>
          <form id="daily-activity-form">
              <label><input type="radio" name="dailyActivity" value="Assis toute la journée au travail"> Assis toute la journée au travail</label><br>
              <label><input type="radio" name="dailyActivity" value="Je suis toujours debout"> Je suis toujours debout</label><br>
              <label><input type="radio" name="dailyActivity" value="Je fais beaucoup d’activité physique"> Je fais beaucoup d’activité physique</label><br>
              <label><input type="radio" name="dailyActivity" value="Je reste à la maison"> Je reste à la maison</label><br>
              <button type="button" class="submit-daily-activity-btn my-4 px-4 py-2 rounded bg-blue-500 text-white">Continue</button>
          </form>
      </div>
      <!-- Card 13: Physical Activity Level -->
        <div id="card13" class="card bg-white p-8 m-4 rounded-lg shadow-lg hidden">
            <p>Pratiquez-vous une activité physique ?</p>
            <p>Les entraînements améliorent vos résultats. Nous pouvons vous aider à faire du sport une habitude quotidienne.</p>
            <form id="physical-activity-form">
                <label><input type="radio" name="activityLevel" value="Sédentaire"> Sédentaire - Peu ou pas d’exercice</label><br>
                <label><input type="radio" name="activityLevel" value="Légèrement actif"> Légèrement actif - 1 à 2 fois par semaine</label><br>
                <label><input type="radio" name="activityLevel" value="Activité Modérée"> Activité Modérée - 3 à 5 fois par semaine</label><br>
                <label><input type="radio" name="activityLevel" value="Très actif"> Très actif - 6 à 7 fois par semaine</label><br>
                <label><input type="radio" name="activityLevel" value="Extrêmement actif"> Extrêmement actif - Exercice intensif quotidien / athlète</label><br>
                <button type="button" class="submit-activity-level-btn my-4 px-4 py-2 rounded bg-blue-500 text-white">Continue</button>
            </form>
        </div>
          <!-- Card 14: Daily Fatigue Levels -->
        <div id="card14" class="card bg-white p-8 m-4 rounded-lg shadow-lg hidden">
            <p>A quel point vous sentez-vous fatiguée pendant la journée ?</p>
            <form id="fatigue-level-form">
                <label><input type="radio" name="fatigueLevel" value="Je me sens fatigué toute la journée"> Je me sens fatigué toute la journée</label><br>
                <label><input type="radio" name="fatigueLevel" value="Je me sens fatiguée avant les repas"> Je me sens fatiguée avant les repas</label><br>
                <label><input type="radio" name="fatigueLevel" value="J’ai quelque coups de barre l’après-midi"> J’ai quelque coups de barre l’après-midi</label><br>
                <label><input type="radio" name="fatigueLevel" value="Je suis une boule de feu toute la journée"> Je suis une boule de feu toute la journée</label><br>
                <button type="button" class="submit-fatigue-level-btn my-4 px-4 py-2 rounded bg-blue-500 text-white">Continue</button>
            </form>
        </div>

        <!-- Card 15: Stomach Discomfort -->
        <div id="card15" class="card bg-white p-8 m-4 rounded-lg shadow-lg hidden">
            <p>Ressentez-vous des maux d’estomac pendant la journée ?</p>
            <p>Certaines personnes peuvent se sentir ballonnées, avoir des crampes d’estomac ou une indigestion après avoir mangé certains aliments ou dans des situations de stress.</p>
            <form id="stomach-discomfort-form">
                <label><input type="radio" name="stomachDiscomfort" value="Oui"> Oui</label><br>
                <label><input type="radio" name="stomachDiscomfort" value="Non"> Non</label><br>
                <label><input type="radio" name="stomachDiscomfort" value="Je ne suis pas sur"> Je ne suis pas sûr</label><br>
                <button type="button" class="submit-stomach-discomfort-btn my-4 px-4 py-2 rounded bg-blue-500 text-white">Continue</button>
            </form>
        </div>

        <!-- Card 16: Meal Frequency Preference -->
      <div id="card16" class="card bg-white p-8 m-4 rounded-lg shadow-lg hidden">
          <p>Combien de repas par jour aimeriez-vous avoir ?</p>
          <p>Vous pourrez toujours le modifier ultérieurement dans les paramètres.</p>
          <form id="meal-frequency-form">
              <label><input type="radio" name="mealFrequency" value="Deux"> Deux : Petit-déjeuner, dîner, collations facultatives</label><br>
              <label><input type="radio" name="mealFrequency" value="Trois"> Trois : Petit-déjeuner, déjeuner et dîner</label><br>
              <label><input type="radio" name="mealFrequency" value="Quatre"> Quatre : Petit-déjeuner, collations, déjeuner et dîner</label><br>
              <label><input type="radio" name="mealFrequency" value="Cinq"> Cinq : Petit-déjeuner, déjeuner, dîner et deux collations</label><br>
              <button type="button" class="submit-meal-frequency-btn my-4 px-4 py-2 rounded bg-blue-500 text-white">Continue</button>
          </form>
      </div>
      <!-- Card 17: Dietary Habits -->
      <div id="card17" class="card bg-white p-8 m-4 rounded-lg shadow-lg hidden">
          <p>Vous avez tendance à :</p>
          <form id="dietary-habits-form">
              <label><input type="checkbox" name="dietaryHabits" value="Manger tard le soir"> Manger tard le soir</label><br>
              <label><input type="checkbox" name="dietaryHabits" value="Je ne peux pas m’empêcher de manger des bonbons"> Je ne peux pas m’empêcher de manger des bonbons</label><br>
              <label><input type="checkbox" name="dietaryHabits" value="J’adore les boissons gazeuses"> J’adore les boissons gazeuses</label><br>
              <label><input type="checkbox" name="dietaryHabits" value="J’aime les aliments gras ou salés"> J’aime les aliments gras ou salés</label><br>
              <label><input type="checkbox" name="dietaryHabits" value="Rien de tout cela"> Rien de tout cela</label><br>
              <button type="button" class="submit-dietary-habits-btn my-4 px-4 py-2 rounded bg-blue-500 text-white">Continue</button>
          </form>
      </div>

            <!-- Card 18: Eating Out Frequency -->
      <div id="card18" class="card bg-white p-8 m-4 rounded-lg shadow-lg hidden">
          <p>A quelle fréquence mangez-vous à l’extérieur ?</p>
          <p>Dans les restaurants, prenez des plats à emporter ou faites-vous livrer un repas.</p>
          <form id="eating-out-frequency-form">
              <label><input type="radio" name="eatingOutFrequency" value="1-3 fois par semaine"> 1-3 fois par semaine</label><br>
              <label><input type="radio" name="eatingOutFrequency" value="Plus de 4 fois par semaine"> Plus de 4 fois par semaine</label><br>
              <label><input type="radio" name="eatingOutFrequency" value="1-3 fois par mois"> 1-3 fois par mois</label><br>
              <label><input type="radio" name="eatingOutFrequency" value="Presque jamais"> Presque jamais</label><br>
              <button type="button" class="submit-eating-out-frequency-btn my-4 px-4 py-2 rounded bg-blue-500 text-white">Continue</button>
          </form>
      </div>

      <!-- Card 19: Meal Preparation Time -->
        <div id="card19" class="card bg-white p-8 m-4 rounded-lg shadow-lg hidden">
            <p>Combien de temps pouvez-vous consacrer à la préparation de votre repas ?</p>
            <form id="meal-prep-time-form">
                <label><input type="radio" name="mealPrepTime" value="Je suis toujours occupé"> Je suis toujours occupé - Moins de 30 minutes par repas.</label><br>
                <label><input type="radio" name="mealPrepTime" value="Cela dépend de mon emploi du temps"> Cela dépend de mon emploi du temps - 30-60 minutes par repas.</label><br>
                <label><input type="radio" name="mealPrepTime" value="Je suis un héros de la cuisine"> Je suis un héros de la cuisine - plus de 1 heure par repas.</label><br>
                <button type="button" class="submit-meal-prep-time-btn my-4 px-4 py-2 rounded bg-blue-500 text-white">Continue</button>
            </form>
        </div>

        <!-- Card 20: Dietary Vices -->
        <div id="card20" class="card bg-white p-8 m-4 rounded-lg shadow-lg hidden">
            <p>Certains de ces vices vous retiennent-ils ?</p>
            <form id="dietary-vices-form">
                <label><input type="checkbox" name="dietaryVices" value="Incapable de me reposer suffisamment"> Incapable de me reposer suffisamment</label><br>
                <label><input type="checkbox" name="dietaryVices" value="J’adore le chocolat et les bonbons"> J’adore le chocolat et les bonbons</label><br>
                <label><input type="checkbox" name="dietaryVices" value="Le soda est mon meilleur ami"> Le soda est mon meilleur ami</label><br>
                <label><input type="checkbox" name="dietaryVices" value="Je consomme beaucoup d’aliment salés"> Je consomme beaucoup d’aliments salés</label><br>
                <label><input type="checkbox" name="dietaryVices" value="Je grignote tard le soir"> Je grignote tard le soir</label><br>
                <label><input type="checkbox" name="dietaryVices" value="La malbouffe est mon petit plaisir"> La malbouffe est mon petit plaisir</label><br>
                <label><input type="checkbox" name="dietaryVices" value="Je mange chaque fois que je me sens mal"> Je mange chaque fois que je me sens mal</label><br>
                <label><input type="checkbox" name="dietaryVices" value="J’ai tendance à trop manger"> J’ai tendance à trop manger</label><br>
                <label><input type="checkbox" name="dietaryVices" value="Aucune de ces réponses"> Aucune de ces réponses</label><br>
                <button type="button" class="submit-dietary-vices-btn my-4 px-4 py-2 rounded bg-blue-500 text-white">Continue</button>
            </form>
        </div>

              <!-- Card 21: Frequency of Junk Food and Soda Consumption -->
      <div id="card21" class="card bg-white p-8 m-4 rounded-lg shadow-lg hidden">
          <p>A quelle fréquence consommez-vous de la malbouffe ou des sodas ?</p>
          <form id="junk-food-frequency-form">
              <label><input type="radio" name="junkFoodFrequency" value="Presque chaque jour"> Presque chaque jour</label><br>
              <label><input type="radio" name="junkFoodFrequency" value="Plusieurs fois par semaine"> Plusieurs fois par semaine</label><br>
              <label><input type="radio" name="junkFoodFrequency" value="Une fois chaque semaine ou toutes les deux semaines"> Une fois chaque semaine ou toutes les deux semaines</label><br>
              <label><input type="radio" name="junkFoodFrequency" value="Un fois par mois ou moins sauvent"> Une fois par mois ou moins souvent</label><br>
              <label><input type="radio" name="junkFoodFrequency" value="Aucune de ces réponses"> Aucune de ces réponses</label><br>
              <button type="button" class="submit-junk-food-frequency-btn my-4 px-4 py-2 rounded bg-blue-500 text-white">Continue</button>
          </form>
      </div>

      <!-- Card 22: Last Time Satisfied With Weight -->
      <div id="card22" class="card bg-white p-8 m-4 rounded-lg shadow-lg hidden">
          <p>Quand avez-vous été satisfait de votre poids pour la dernière fois ?</p>
          <form id="weight-satisfaction-form">
              <label><input type="radio" name="weightSatisfaction" value="Il y a 0 à 6 mois"> Il y a 0 à 6 mois</label><br>
              <label><input type="radio" name="weightSatisfaction" value="Il y a 6 à 12 mois"> Il y a 6 à 12 mois</label><br>
              <label><input type="radio" name="weightSatisfaction" value="Il y a 1 à 3 ans"> Il y a 1 à 3 ans</label><br>
              <label><input type="radio" name="weightSatisfaction" value="Il y a plus de 3 ans"> Il y a plus de 3 ans</label><br>
              <label><input type="radio" name="weightSatisfaction" value="Jamais"> Jamais</label><br>
              <button type="button" class="submit-weight-satisfaction-btn my-4 px-4 py-2 rounded bg-blue-500 text-white">Continue</button>
          </form>
      </div>

      <!-- Card 23: Daily Water Consumption -->
      <div id="card23" class="card bg-white p-8 m-4 rounded-lg shadow-lg hidden">
          <p>Quelle est votre consommation d’eau quotidienne ?</p>
          <form id="water-consumption-form">
              <label><input type="radio" name="waterConsumption" value="Environ 2 verres"> Environ 2 verres</label><br>
              <label><input type="radio" name="waterConsumption" value="2 à 6 verres"> 2 à 6 verres</label><br>
              <label><input type="radio" name="waterConsumption" value="Plus de 6 verres"> Plus de 6 verres</label><br>
              <label><input type="radio" name="waterConsumption" value="Je ne bois que du café et du thé"> Je ne bois que du café et du thé</label><br>
              <label><input type="radio" name="waterConsumption" value="Je ne compte pas, ça dépend"> Je ne compte pas, ça dépend</label><br>
              <button type="button" class="submit-water-consumption-btn my-4 px-4 py-2 rounded bg-blue-500 text-white">Continue</button>
          </form>
      </div>

      <!-- Card 24: Liquid Consumption Choices -->
      <div id="card24" class="card bg-white p-8 m-4 rounded-lg shadow-lg hidden">
          <p>Choisissez les liquides que vous consommez pour vous hydrater:</p>
          <form id="liquid-consumption-form">
              <label><input type="checkbox" name="liquidConsumption" value="Eau"> Eau</label><br>
              <label><input type="checkbox" name="liquidConsumption" value="Soda"> Soda</label><br>
              <label><input type="checkbox" name="liquidConsumption" value="Café"> Café</label><br>
              <label><input type="checkbox" name="liquidConsumption" value="Lait"> Lait</label><br>
              <label><input type="checkbox" name="liquidConsumption" value="Thé"> Thé</label><br>
              <label><input type="checkbox" name="liquidConsumption" value="Yaourt"> Yaourt</label><br>
              <label><input type="checkbox" name="liquidConsumption" value="Jus"> Jus</label><br>
              <label><input type="checkbox" name="liquidConsumption" value="Autre"> Autre</label><br>
              <button type="button" class="submit-liquid-consumption-btn my-4 px-4 py-2 rounded bg-blue-500 text-white">Continue</button>
          </form>
      </div>

      <!-- Card 25: Information About Fasting -->
        <div id="card25" class="card bg-white p-8 m-4 rounded-lg shadow-lg hidden">
            <h2>Le jeûne peut vous aider à obtenir les meilleurs résultats de perte de poids.</h2>
            <img src="assets/images/fasting.jpg" alt="Benefits of Fasting" class="shadow-lg rounded-lg items-center" width="400" height="350">
            <ul>
                <li>1- Mangez tout ce que vous voulez</li>
                <li>2- Atteignez votre objectif plus rapidement</li>
                <li>3- Améliorez votre santé</li>
            </ul>
            <p>Taux plus élevé de résultats plus efficaces, le jeûne peut donner des résultats rapides et stimuler considérablement le métabolisme pour une meilleure perte de poids.</p>
            <button type="button" class="next-btn my-4 px-4 py-2 rounded bg-blue-500 text-white">Continue</button>
        </div>
        <!-- Card 26: Sleep Duration -->
      <div id="card26" class="card bg-white p-8 m-4 rounded-lg shadow-lg hidden">
          <p>Combien de temps dormez-vous habituellement ?</p>
          <form id="sleep-duration-form">
              <label><input type="radio" name="sleepDuration" value="Moins de 5 heures"> Moins de 5 heures</label><br>
              <label><input type="radio" name="sleepDuration" value="5-6 heures"> 5-6 heures</label><br>
              <label><input type="radio" name="sleepDuration" value="7-8 heures"> 7-8 heures</label><br>
              <label><input type="radio" name="sleepDuration" value="Plus de 8 heures"> Plus de 8 heures</label><br>
              <button type="button" class="submit-sleep-duration-btn my-4 px-4 py-2 rounded bg-blue-500 text-white">Continue</button>
          </form>
      </div>






















    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="assets/js/script.js"></script>
      
    </div>
    </main>
</body>
</html>