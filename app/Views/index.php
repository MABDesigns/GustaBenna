<!doctype html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Gusta Benna</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="assets/css/slick.css">

    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="assets/css/LineIcons.css">

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
          class="lg:flex flex-grow items-center bg-white lg:bg-transparent lg:shadow-none hidden"
          id="example-collapse-navbar"
        >
          <ul class="flex flex-col lg:flex-row pl-8 list-none mr-auto">
            <li class="flex items-center">
              <a
                class="lg:text-white border-b-2  lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-md uppercase font-bold"
                href="<?= base_url() ?>"
                >
                Acceuil</a
              >
            </li>
            <li class="flex items-center">
              <a
                class="lg:text-white border-b-2 lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-md uppercase font-bold"
                href="#apropos"
                >
                A PROPOS</a
              >
            </li>
            <li class="flex items-center">
              <a
                class="lg:text-white border-b-2 lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-md uppercase font-bold"
                href="#services"
                >
                SERVICES</a
              >
            </li>
            <li class="flex items-center">
              <a
                class="lg:text-white border-b-2 lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-md uppercase font-bold"
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
    <main>
      <div
        class="relative pt-16 pb-32 flex content-center items-center justify-center"
        style="min-height: 75vh;"
      >
        <div
          class="absolute top-0 w-full h-full bg-center bg-cover"
          style='background-image: url("assets/images/header.webp");'
        >
          <span
            id="blackOverlay"
            class="w-full h-full absolute opacity-75 bg-black"
          ></span>
        </div>
        <div class="container relative mx-auto">
          <div class="items-center flex flex-wrap">
            <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
              <div class="pr-12">
                <h1 class="text-white font-semibold text-6xl">
                Salut, nous sommes <span style="color: green;">Gusta</span>&nbsp;<span style="color: red;">Benna</span>.
                </h1>
                <p class="mt-4 text-2xl text-gray-300">
                Arrêtez de perdre du temps et de l’argent à concevoir des services qui ne donne pas de résultats. Bonheur garanti !
                </p>
              </div>
            </div>
          </div>
        </div>
        <div
          class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden"
          style="height: 70px;"
        >
          <svg
            class="absolute bottom-0 overflow-hidden"
            xmlns="http://www.w3.org/2000/svg"
            preserveAspectRatio="none"
            version="1.1"
            viewBox="0 0 2560 100"
            x="0"
            y="0"
          >
            <polygon
              class="text-gray-300 fill-current"
              points="2560 0 2560 100 0 100"
            ></polygon>
          </svg>
        </div>
      </div>
      <section class="pb-20 bg-gray-300 -mt-24">
        <div class="container mx-auto px-4">
          <div class="flex flex-wrap" id="services">
            <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
              <div 
                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
              >
                <div class="px-4 py-5 flex-auto">
                  <div
                    class="text-white p-3  text-center text-4xl inline-flex items-center justify-center w-16 h-16 mb-5 shadow-lg rounded-full bg-red-400"
                  >
                  🍏
                                  </div><br>

                  
    <script src ="https://form.jotform.com/static/feedback2.js" type="text/javascript"></script>
    <script type="text/javascript">
        var JFL_241204651200034 = new JotformFeedback({
          formId: '241204651200034',
          base: 'https://form.jotform.com/',
          windowTitle: 'Consultation de nutritionnistes en ligne ',
          backgroundColor: '#7ed321',
          fontColor: '#FFFFFF',
          type: 'false',
          height: 900,
          width: 1280,
          openOnLoad: false
        });
    </script>
    <script src='https://cdn.jotfor.ms/s/umd/latest/for-form-embed-handler.js'></script>
    <script>window.jotformEmbedHandler("iframe[id='241204651200034']", "https://form.jotform.com/")</script>
      <a class="btn lightbox-241204651200034 font-bold rounded-lg shadow-lg" 
      style="
      margin-top: 16px;
      text-transform: uppercase;
      font-size: 16px;
      text-decoration: none;
      cursor: pointer;
      display: inline-block;
      padding: 10px;
      font-family: inherit;
      text-shadow: none;
      user-select: none;
      transition: all,.1s,ease-in;
      background-color: #7ed321;
      border: 1px solid #7ed321;
      color: #FFFFFF;
      ">
        Consultation de nutritionnistes en ligne 
      </a>
                  <p class="mt-2 mb-4 text-gray-600">
                   <br>
                  </p>
                </div>
              </div>
            </div>
            <div class="w-full md:w-4/12 px-4 text-center">
              <div
                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
              >
                <div class="px-4 py-5 flex-auto">
                  <div
                    class="text-white p-3 text-center inline-flex text-4xl items-center justify-center w-16 h-16 mb-5 shadow-lg rounded-full bg-blue-400"
                  >
                  🧠
                </div><br>
               
    <script src ="https://form.jotform.com/static/feedback2.js" type="text/javascript"></script>
    <script type="text/javascript">
        var JFL_241205358340549 = new JotformFeedback({
          formId: '241205358340549',
          base: 'https://form.jotform.com/',
          windowTitle: 'Consultation de nutritionnistes en ligne ',
          backgroundColor: '#7ed321',
          fontColor: '#FFFFFF',
          type: '0',
          height: 900,
          width: 1280,
          openOnLoad: false
        });
    </script>
    <script src='https://cdn.jotfor.ms/s/umd/latest/for-form-embed-handler.js'></script>
    <script>window.jotformEmbedHandler("iframe[id='241205358340549']", "https://form.jotform.com/")</script>
      <a class="btn lightbox-241205358340549 font-bold rounded-lg shadow-lg" 
      style="
      margin-top: 16px;
      text-transform: uppercase;
      font-size: 14px;
      text-decoration: none;
      cursor: pointer;
      display: inline-block;
      padding: 10px;
      font-family: inherit;
      text-shadow: none;
      user-select: none;
      transition: all,.1s,ease-in;
      background-color: #7ed321;
      border: 1px solid #7ed321;
      color: #FFFFFF;
      ">
        Consultation de psychologue en ligne 
      </a>
                  <p class="mt-2 mb-4 text-gray-600">
                   <br>
                  </p>
                </div>
              </div>
            </div>
            <div class="pt-6 w-full md:w-4/12 px-4 text-center">
              <div
                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
              >
                <div class="px-4 py-5 flex-auto">
                  <div
                    class="text-white p-3 text-center inline-flex text-4xl items-center justify-center w-16 h-16 mb-5 shadow-lg rounded-full bg-green-400"
                  >
                  🗒️
                                  </div>
                  <h6 class="text-xl font-semibold">Plan personnalisé</h6>
                  <p class="mt-2 mb-4 text-gray-600">
                   <br>
                  </p>
                </div>
              </div>
            </div>
          </div>

            <!--nos produits -->
            <div id="nosproduits"class="relative container flex min-h-screen flex-col justify-center overflow-hidden rounded-2xl shadow-2xl bg-gray-400 py-6 sm:py-12">
  <div class="w-full items-center mx-auto max-w-screen-lg">
    <div class="group grid w-full grid-cols-2">
      <div class="pl-16 relative flex items-end flex-col before:block before:absolute before:h-1/6 before:w-4 before:bg-green-500 before:bottom-0 before:left-0 before:rounded-lg  before:transition-all group-hover:before:bg-green-400 overflow-hidden">
        <div class="absolute top-0 left-0 bg-green-500 w-4/6 px-12 py-14 flex flex-col justify-center rounded-xl group-hover:bg-red-600 transition-all ">
          <span class="block mb-10 font-bold group-hover:text-green-400">ET VOILà</span>
          <h2 class="text-white font-bold text-5xl">
          NOS PRODUITS <br> <br><br></h2>
        </div>
        <a class="font-bold text-sm flex mt-2 mb-8 items-center gap-2" href="#nosproduits">
          <span></span>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
          </svg>
        </a>
        <div class="rounded-xl overflow-hidden">
          <img src="https://picsum.photos/id/292/800" alt="">
        </div>
      </div>
      <div>
        <div class="pl-12">
          <p class="peer text-3xl mb-4 text-justify text-black">
          Nous proposons des repas sains 🍲, équilibrés et délicieux, préparés par des scientifiques 👨‍🔬, des experts en nutrition et diététiciens selon les normes européennes dans notre propre laboratoire 🔬 .avec une variété de gouts et de saveurs pour répondre aux besoins de tous nos clients, avec service de livraison pratique et ponctuel à domicile.          </p>

        </div>
      </div>
    </div>
  </div>
</div>






<section class="relative pt-16 bg-blueGray-50">
<div class="container mx-auto">
  <div class="flex flex-wrap items-center">
  <div class="w-full md:w-4/12 px-4 mr-auto ml-auto" id="apropos">
              <div 
                class="relative flex flex-col  min-w-0 break-words  w-full mb-6 shadow-2xl rounded-lg bg-orange-600"
              >
                <img
                  alt="..."
                  src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1051&amp;q=80"
                  class="w-full align-middle rounded-t-lg"
                />
                <blockquote class="relative p-8 mb-4">
                  <svg
                    preserveAspectRatio="none"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 583 95"
                    class="absolute left-0 w-full block"
                    style="height: 95px; top: -94px;"
                  >
                    <polygon
                      points="-30,95 583,95 583,65"
                      class="text-orange-600 fill-current"
                    ></polygon>
                  </svg>
                  <h4  class="text-xl font-bold text-white">
                  A PROPOS DE NOUS 

                  </h4>
                  <p class="text-md font-light mt-2 text-white text-justify">
                  Salut, nous sommes <span style="color:green;" class="font-bold">Gusta</span> <span style="color:red;"class="font-bold">Benna</span>.
                  Notre start-up de santé numérique, axée sur le consommateur, est dédiée à aider les individus à mener une vie plus saine et plus épanouie. <br>

                    <span class="text-pink-200 font-bold">« Un esprit sain dans un corps sain »</span> <br> 

                    <span class="text-pink-200 font-bold">« La psychologie est la clé d’un changement durable » </span><br>

                    Gusta Benna utilise les dernières avancées en sciences comportementales et Nutrition pour permettre aux personnes de prendre définitivement le contrôle de leur santé. <br>

                    Grâce à une combinaison de connaissances en Nutrition,  Psychologie et Technologie 

                    notre plateforme vise à accompagner les utilisateurs dans la réalisation de leurs objectifs personnels en matière de santé et de bien-être.<br>

                    N’attendez plus ,renouez avec le bien-être, nous sommes là pour vous .
                  </p>
                </blockquote>
              </div>
            </div>

    <div class="w-full md:w-6/12 px-4">
      <div class="flex flex-wrap">
        <div class="w-full md:w-6/12 px-4">
          <div class="relative flex flex-col mt-4">
            <div class="px-4 py-5 flex-auto">
              <div class="text-blueGray-500 p-3 text-4xl text-center inline-flex items-center justify-center w-16 h-16 mb-5 shadow-2xl rounded-full bg-white">
              🥗
            </div>
              <h6 class="text-xl mb-1 font-semibold">Nutrition :</h6>
              <p class="mb-4 text-blueGray-500 text-justify">
              Nous proposons des repas délicieux et sains, conçus par des experts en nutrition, équilibrés pour s’adapter aux objectifs  de chaque client.

Vous n’avez plus à vous inquiéter de la façon dont vous maintiendrez votre alimentation de de vos choix alimentaires. <br>

Gusta Benna s’occupe de tout.<br>

Pour soutenir nos utilisateurs, nous avons élaboré des programmes alimentaires pour perte, prendre de poids et rester en forme, des recettes faciles à préparer, des conseils personnalisés par e-mail pour surveiller le programme et garantir que vous sur la bonne voie . Ainsi que des consultations avec nos nutritionnistes via la technologie.

Etes-vous prêt à rejoindre une aventure avec nous ?
              </p>
            </div>
          </div>
          <div class="relative flex flex-col min-w-0">
            <div class="px-4 py-5">
              <div class="text-blueGray-500 text-4xl p-4 text-center inline-flex items-center justify-center w-16 h-16 mb-5 shadow-2xl rounded-full bg-white">
              🧠
              </div>
              <h6 class="text-xl mb-1 font-semibold">
              Psychologie : 
                          </h6>
              <p class="mb-4 text-blueGray-500 text-justify">
              Nos produit sont développés en utilisant des approches fondées sur des preuves et des principes scientifiquement prouvés, tels que la Thérapie Cognitivo-comportementale (TCC) pour aider le gens à adopter des habitudes durables qui durent toute une vie.


              </p>
            </div>
          </div>
        </div>
        <div class="w-full md:w-6/12 px-4">
          <div class="relative flex flex-col min-w-0 mt-4">
            <div class="px-4 py-5 flex-auto">
              <div class="text-blueGray-500 p-4 text-4xl text-center inline-flex items-center justify-center w-16 h-16 mb-5 shadow-2xl rounded-full bg-white">
              ⚛
              </div>
              <h6 class="text-xl mb-1 font-semibold">Technologie :</h6>
              <p class="mb-4 text-blueGray-500 text-justify">
              Nous innovons et perfectionnons constamment nos produits afin d’assurer à nos utilisateurs un accès aux outils de santé les plus performants du marché.<br>

Nous appliquions l’expérience de nutritionnistes, psychologues  professionnels et étudions les commentaires de tous les utilisateurs pour améliorer les fonctionnalités de la plateforme.
              </p>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</div>
<footer class="relative bg-blueGray-50 pt-8 pb-6 mt-2">
  <div class="container mx-auto px-4">
    <div class="flex flex-wrap items-center md:justify-between justify-center">
      <div class="w-full md:w-6/12 px-4 mx-auto text-center">
       
      </div>
    </div>
  </div>
</footer>
</section>




         
          </div>
        </div>
      </section>
      <section class="relative py-20">
        <div
          class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
          style="height: 80px;"
        >
          <svg
            class="absolute bottom-0 overflow-hidden"
            xmlns="http://www.w3.org/2000/svg"
            preserveAspectRatio="none"
            version="1.1"
            viewBox="0 0 2560 100"
            x="0"
            y="0"
          >
            <polygon
              class="text-white fill-current"
              points="2560 0 2560 100 0 100"
            ></polygon>
          </svg>
        </div>
       
      </section>
      <section class="pt-20 pb-48">
        <div class="container mx-auto px-4">
          <div class="flex flex-wrap justify-center text-center mb-24">
            <div class="w-full lg:w-6/12 px-4">
              <h2 class="text-4xl font-semibold">Notre Equipe</h2>
              <p class="text-lg leading-relaxed m-4 text-gray-600">
              It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here,
              </p>
            </div>
          </div>
          <div class="flex flex-wrap">
            <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
              <div class="px-6">
                <img
                  alt="..."
                  src="./assets/img/team-1-800x800.jpg"
                  class="shadow-lg rounded-full max-w-full mx-auto"
                  style="max-width: 120px;"
                />
                <div class="pt-6 text-center">
                  <h5 class="text-xl font-bold">Ryan Tompson</h5>
                  <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                    Web Developer
                  </p>
                  <div class="mt-6">
                    <button
                      class="bg-blue-400 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                      type="button"
                    >
                      <i class="fab fa-twitter"></i></button
                    ><button
                      class="bg-blue-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                      type="button"
                    >
                      <i class="fab fa-facebook-f"></i></button
                    ><button
                      class="bg-pink-500 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                      type="button"
                    >
                      <i class="fab fa-dribbble"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
              <div class="px-6">
                <img
                  alt="..."
                  src="./assets/img/team-2-800x800.jpg"
                  class="shadow-lg rounded-full max-w-full mx-auto"
                  style="max-width: 120px;"
                />
                <div class="pt-6 text-center">
                  <h5 class="text-xl font-bold">Romina Hadid</h5>
                  <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                    Marketing Specialist
                  </p>
                  <div class="mt-6">
                    <button
                      class="bg-red-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                      type="button"
                    >
                      <i class="fab fa-google"></i></button
                    ><button
                      class="bg-blue-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                      type="button"
                    >
                      <i class="fab fa-facebook-f"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
              <div class="px-6">
                <img
                  alt="..."
                  src="./assets/img/team-3-800x800.jpg"
                  class="shadow-lg rounded-full max-w-full mx-auto"
                  style="max-width: 120px;"
                />
                <div class="pt-6 text-center">
                  <h5 class="text-xl font-bold">Alexa Smith</h5>
                  <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                    UI/UX Designer
                  </p>
                  <div class="mt-6">
                    <button
                      class="bg-red-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                      type="button"
                    >
                      <i class="fab fa-google"></i></button
                    ><button
                      class="bg-blue-400 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                      type="button"
                    >
                      <i class="fab fa-twitter"></i></button
                    ><button
                      class="bg-gray-800 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                      type="button"
                    >
                      <i class="fab fa-instagram"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
              <div class="px-6">
                <img
                  alt="..."
                  src="./assets/img/team-4-470x470.png"
                  class="shadow-lg rounded-full max-w-full mx-auto"
                  style="max-width: 120px;"
                />
                <div class="pt-6 text-center">
                  <h5 class="text-xl font-bold">Jenna Kardi</h5>
                  <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                    Founder and CEO
                  </p>
                  <div class="mt-6">
                    <button
                      class="bg-pink-500 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                      type="button"
                    >
                      <i class="fab fa-dribbble"></i></button
                    ><button
                      class="bg-red-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                      type="button"
                    >
                      <i class="fab fa-google"></i></button
                    ><button
                      class="bg-blue-400 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                      type="button"
                    >
                      <i class="fab fa-twitter"></i></button
                    ><button
                      class="bg-gray-800 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                      type="button"
                    >
                      <i class="fab fa-instagram"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="pb-20 relative block bg-gray-900">
        <div
          class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
          style="height: 80px;"
        >
          <svg
            class="absolute bottom-0 overflow-hidden"
            xmlns="http://www.w3.org/2000/svg"
            preserveAspectRatio="none"
            version="1.1"
            viewBox="0 0 2560 100"
            x="0"
            y="0"
          >
            <polygon
              class="text-gray-900 fill-current"
              points="2560 0 2560 100 0 100"
            ></polygon>
          </svg>
        </div>
        <div class="container mx-auto px-4 lg:pt-24 lg:pb-64">
          <div class="flex flex-wrap text-center justify-center">
            <div class="w-full lg:w-6/12 px-4">
              <h2 class="text-4xl font-semibold text-white">Tentez Votre Chance</h2>
              <p class="text-lg leading-relaxed mt-4 mb-4 text-gray-500">
                Put the potentially record low maximum sea ice extent tihs year
                down to low ice. According to the National Oceanic and
                Atmospheric Administration, Ted, Scambos.
              </p>
            </div>
          </div>
          <div class="flex flex-wrap mt-12 justify-center">
           
    <script src ="https://form.jotform.com/static/feedback2.js" type="text/javascript"></script>
    <script type="text/javascript">
        var JFL_241197065908564 = new JotformFeedback({
          formId: '241197065908564',
          base: 'https://form.jotform.com/',
          windowTitle: 'Rejoignez notre équipe',
          backgroundColor: '#05b35e',
          fontColor: '#FFFFFF',
          type: 'false',
          height: 600,
          width: 950,
          openOnLoad: false
        });
    </script>
    <script src='https://cdn.jotfor.ms/s/umd/latest/for-form-embed-handler.js'></script>
    <script>window.jotformEmbedHandler("iframe[id='241197065908564']", "https://form.jotform.com/")</script>
      <a class="btn lightbox-241197065908564 text-center align-middle font-bold" 
      style="
      margin-top: 16px;
      text-transform: uppercase;
      font-size: 22px;
      text-decoration: none;
      cursor: pointer;
      display: inline-block;
      padding: 10px;
      width: 500px;
      height: 50px;
      font-family: Roboto;
      text-shadow: none;
      user-select: none;
      transition: all,.1s,ease-in;
      background-color: #05b35e;
      border: 1px solid #05b35e;
      color: #FFFFFF;
      ">
        Rejoignez notre équipe
      </a>
         
          
          </div>
        </div>
      </section>
      <section class="relative block py-24 lg:pt-0 bg-gray-900">
        <div class="container mx-auto px-4">
          <div class="flex flex-wrap justify-center lg:-mt-64 -mt-48">
          
          </div>
        </div>
      </section>
    </main>

    
  <script src="https://form.jotform.com/static/feedback2.js"></script>
  <script>
    var componentID = new JotformFeedback({
      
  type: false,
  width: 700,
  height: 500,
  fontColor: "#FFFFFF",
  background: "#355E3B",
  isCardForm: false,
  formId: "241197718884067"
  ,
      buttonText: "Nous Contactez",
      buttonSide: "left",
      buttonAlign: "center",
      base: "https://form.jotform.com/",
    }).componentID;
  </script>
  <script src='https://cdn.jotfor.ms/s/umd/latest/for-form-embed-handler.js'></script>
  <script>window.jotformEmbedHandler("iframe[id='" + componentID + "_iframe']", "https://form.jotform.com/")</script>
    <footer class="relative bg-gray-300 pt-8 pb-6">
      <div
        class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
        style="height: 80px;"
      >
        <svg
          class="absolute bottom-0 overflow-hidden"
          xmlns="http://www.w3.org/2000/svg"
          preserveAspectRatio="none"
          version="1.1"
          viewBox="0 0 2560 100"
          x="0"
          y="0"
        >
          <polygon
            class="text-gray-300 fill-current"
            points="2560 0 2560 100 0 100"
          ></polygon>
        </svg>
      </div>
      <div class="container mx-auto px-4">
        <div class="flex flex-wrap">
          <div class="w-full lg:w-6/12 px-4">
           
            <h5 class="text-lg mt-0 mb-2 text-gray-700">
            Cité Ibn Rochd Souk-Ahras ,Algérie.<br>
            +213655368592<br>
            +213552701997<br>
gustabenna@gmail.com 

            </h5>
            <div class="mt-6">
              <button
                class="bg-white text-blue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                type="button"
              >
                <i class="flex fab fa-twitter"></i></button
              ><button
                class="bg-white text-blue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                type="button"
              >
                <i class="flex fab fa-facebook-square"></i></button
              ><button
                class="bg-white text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                type="button"
              >
                <i class="flex fab fa-dribbble"></i></button
              ><button
                class="bg-white text-gray-900 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                type="button"
              >
                <i class="flex fab fa-github"></i>
              </button>
            </div>
          </div>
          <div class="w-full lg:w-6/12 px-4">
            <div class="flex flex-wrap items-top mb-6">
            
              <div class="w-full lg:w-6/12 px-4">
                <span
                  class="block uppercase text-gray-600 text-sm font-semibold mb-2"
                  >Other Resources</span
                >
                <ul class="list-unstyled">
                  <li>
                    <a
                      class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                      href="https://github.com/creativetimofficial/argon-design-system/blob/master/LICENSE.md"
                      >MIT License</a
                    >
                  </li>
                  <li>
                    <a
                      class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                      href="https://creative-tim.com/terms"
                      >Terms &amp; Conditions</a
                    >
                  </li>
                  <li>
                    <a
                      class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                      href="https://creative-tim.com/privacy"
                      >Privacy Policy</a
                    >
                  </li>
                  
                </ul>
              </div>
            </div>
          </div>
        </div>
        <hr class="my-6 border-gray-400" />
        <div
          class="flex flex-wrap items-center md:justify-between justify-center"
        >
          <div class="w-full md:w-4/12 px-4 mx-auto text-center">
            <div class="text-sm text-gray-600 font-semibold py-1">
              Copyright © 2024
              <a
                href="<?= base_url() ?>"
                class="text-gray-600 hover:text-gray-900"
                >Gusta Benna</a
              >.
            </div>
          </div>
        </div>
      </div>
    </footer>
  </body>
  <script>
    function toggleNavbar(collapseID) {
      document.getElementById(collapseID).classList.toggle("hidden");
      document.getElementById(collapseID).classList.toggle("block");
    }
  </script>

</html>
