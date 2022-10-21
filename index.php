<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>SoCallMedia</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/main.css">

</head>

<header>
  <img id="logoHeader" src="img/logo.png" alt="logo">
  <nav class="navBar">
    <div id="accueil">Accueil</div>
    <div id="nosServices">Nos services</div>
    <div id="contact">Contact</div>
  </nav>
  <div class="btn">CONTACTEZ<br>NOUS</div>
</header>

<body>
<div id="pageAccueil">
  <img id="backgroundHeader" src="img/backgroundHeader.png" alt="backgroundHeader">
  <div id="containerTexteAccueil">
    <h1 id="titreAccueil">Déléguez votre prospéction commercial, on s’occupe de tout !</h1>
    <p id="paragrapheAccueil">Vous souhaitez développer votre clientèle ? Contactez-nous, parlez-nous de votre projet et nous nous occupons de tout.</p>
    <div class="btn">CONTACTEZ<br>NOUS</div>
  </div>
</div>
<div id="pageNosOffres">
  <p id="titreNosOffres">Nos offres</p>
  <p id="paragrapheNosOffres">Découvrez les services que nous proposons </p>
  <div id="containerNosOffres">
    <div id="telemarketing">
      <img id="logoTelemarketing" src="img/logoShare.svg" alt="logoShare">
      <h1 id="titreTelemarketing">Télémarketing et digital</h1>
      <p id="paragrapheTelemarketing">Nos équipes peuvent mettre en place différent moyen digital liée entre eux pour récolter des leads. <br><br> -réseaux sociaux <br><br> -site internet <br><br> -google ads et pub facebook</p>
    </div>
    <div id="prospection">
      <img id="logoProspection" src="img/phone.svg" alt="logoPhone">
      <h1 id="titreProspection">Prospection téléphonique</h1>
      <p id="paragrapheProspection">Nos équipes commerciales s’assurent de trouver des prospects qui vous correspondent à vous et à votre projet. <br><br> -prise de RDV <br><br> -gestion client</p>
    </div>
    <div id="leadsManagement">
      <img id="logoLeadsManagement" src="img/logoLeadsManagement.svg" alt="logoLeadsManagement">
      <h1 id="titreLeadsManagement">Leads management</h1>
      <p id="paragrapheLeadsManagement">Nos équipes commerciales s’assurent de trouver des prospects qui vous correspondent à vous et à votre projet. <br><br> -prise de RDV <br><br> -gestion client</p>
    </div>
  </div>
</div>
<div id="pageContact">
  <p id="titreContact">Contact</p>
  <div id="containerContactForm">
    <div id="containerContact">
      <div id="containerTexteContact">
        <img id="logoQuestion" src="img/logoQuestion.svg" alt="logoQuestion">
        <h1 id="titreQuestion">Parlez nous de votre projet</h1>
        <p id="paragrapheQuestion">Pour en apprendre plus sur vous et votre projet répondez à ce rapide questionnaire, nous vous recontacterons ensuite pour préciser vos demandes.</p>
      </div>
    </div>
    <form method="post" action="php/traitementQuestionnaire.php">
      <div id="containerForm">
        <div id="containerQuestionForm">
          <div id="textePrenom">Nom Prénom</div>
          <input id="nomPrenom" type="text" name="nomPrenom" placeholder="Votre nom et prénom">
          <div id="texteMail">Mail</div>
          <input id="mail" type="text" name="mail" placeholder="Votre mail">
          <div id="texteTelephone">Téléphone</div>
          <input id="telephone" type="text" name="telephone" placeholder="Votre téléphone">
        </div>
        <div id="containerProjet">
          <div id="texteVotreProjet">Votre projet</div>
          <textarea id="votreProjet" name="votreProjet" rows="15" cols="33" minlength="10" maxlength="30" placeholder="Parler de votre projet"></textarea>
          <button class="btn" type="submit">Envoyer</button>
        </div>
      </div>
    </form>
  </div>
</div>
</body>
<footer>
  <img id="logoFooter" src="img/logo.png">
  <div id="containerContactFooter">
    <div id="telephoneFooter"><span>Téléphone:</span> 02 42 15 87 23 </div>
    <div id="localisationFooter"><span>Localisation:</span> LeMans: 19 Bd Marie et Alexandre Oyon </div>
  </div>
</footer>

</html>
<?php
