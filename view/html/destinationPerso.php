<?php 
include('header.php');
if($_SESSION['nom'] == null)
{
	header('Location: index.php');
}

include('footer.php');
require_once dirname(__DIR__, 2).DIRECTORY_SEPARATOR.'controller'.DIRECTORY_SEPARATOR.'loginController.php';

// modifier aussi le header automatiquement 
$header = new header('Destinations', '../Css/style2.css');
$header -> nav();
?>

<section class="banner">
    <div class="sectionBg">
        <img src="../medias/Stokksnes_shutterstock_455260282-1024x507.jpg" class="sectionBgImg" alt="">
    </div>

    <!-- ICI TEXTE DE BIENVENUE, INTEGRER LE NOM DE LA VILLE ASSOCIE -->
    <div class="textWelcome">
        <h2 class="welcome">Bienvenue En RDC</h2>
        <a href="" class="btnAutochtone">
            Decouvrez les autochtones
        </a>
    </div>
</section>
<div class="generale">

<section class="navDestinationPerso">
    <div class="navDestinationPerso2">
   
    <div class="navDestPersoContainer">
        <div class="navDestPersoContent">
            <a href="">Autochtones</a>
        </div>

        <div class="navDestPersoContent">
            <a href="">Images</a>
        </div>

        <div class="navDestPersoContent">
            <a href="">Informations</a>
        </div>
    </div>

    </div>
</section>

<section class="activity">  
    <p class="activityTitle">Destinations</p>
    <!-- ici tu vas ramener les données entrée par l'utlisateur, texte, photos, petite déscription -->
    <div class="activityDescriptionContainer">
    <div class="activityDescription" style="transition-duration:1ms;"> 
            
            
            
            <!-- ici mettre le nom de la ville et la description fournie par l'user -->
            <div class="textDestination" id="togg1" style="width:359px; opacity:1;transform:translate3d(0px, 0px,0px);transition-duration:0ms;">
                <!-- ici mettre le nom de la ville et la description fournie par l'user -->
                <h3 class="nomVille">NomVille <br> <br></h3>
                   <p class="activityTitle"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui eligendi dolorum beatae? Excepturi modi, molestias quibusdam, dolor hic animi itaque totam accusamus voluptatem at nesciunt natus voluptate cumque fugiat nihil!
                   </p>
                   <!-- ici mettre le nom de lautochtone -->
                   <p class="nomAutochtone">Par Jonathan K</p>

            </div>

             <!-- ici mettre le nom de la ville et la description fournie par l'user -->
             <div class="textDestination" style="width:359px; opacity:0;transform:translate3d(-359px, 0px,0px);transition-duration:0ms;">
                <!-- ici mettre le nom de la ville et la description fournie par l'user -->
                <h3 class="nomVille">NomVille <br> <br></h3>
                   <p class="activityTitle"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui eligendi dolorum beatae? Excepturi modi, molestias quibusdam, dolor hic animi itaque totam accusamus voluptatem at nesciunt natus voluptate cumque fugiat nihil!
                   </p>
                   <!-- ici mettre le nom de lautochtone -->
                   <p class="nomAutochtone">Par Jonathan K</p>

            </div>

             <!-- ici mettre le nom de la ville et la description fournie par l'user -->
             <div class="textDestination" style="width:359px; opacity:0;transform:translate3d(-718px, 0px,0px);transition-duration:0ms;">
                <!-- ici mettre le nom de la ville et la description fournie par l'user -->
                <h3 class="nomVille">NomVille <br> <br></h3>
                   <p class="activityTitle"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui eligendi dolorum beatae? Excepturi modi, molestias quibusdam, dolor hic animi itaque totam accusamus voluptatem at nesciunt natus voluptate cumque fugiat nihil!
                   </p>
                   <!-- ici mettre le nom de lautochtone -->
                   <p class="nomAutochtone">Par Jonathan K</p>

            </div>

              <!-- ici mettre le nom de la ville et la description fournie par l'user -->
              <div class="textDestination" style="width:359px; opacity:0;transform:translate3d(-1077px, 0px,0px);transition-duration:0ms;">
                <!-- ici mettre le nom de la ville et la description fournie par l'user -->
                <h3 class="nomVille">NomVille <br> <br></h3>
                   <p class="activityTitle"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui eligendi dolorum beatae? Excepturi modi, molestias quibusdam, dolor hic animi itaque totam accusamus voluptatem at nesciunt natus voluptate cumque fugiat nihil!
                   </p>
                   <!-- ici mettre le nom de lautochtone
                        et possiblement le lien qui mene a sa page que je dois creer -->
                   <a href=""> class="nomAutochtone">Par Jonathan K</a>

            </div>


            



    </div>

    <div class="activityImageContainer">
        <div class="activityImage">
            <!-- Bouton pour passer d'uyn switch a un autre -->
            <div class="swipperPagination">
                <span class="swipperBullet"></span>
                <span class="swipperBullet"></span>
                <span class="swipperBullet"></span>
                <span class="swipperBullet"></span>
                <span class="swipperBullet"></span>
                <span class="swipperBullet"></span>
                <span class="swipperBullet"></span>
            </div>

            <div class="activitySlide" style="transition-duration: 1ms;">
                <div class="activitySlideSwipper" style="width:578px;opacity: 1; transform:translate3d(0px,0px,0px); transition-duration:1ms;" >
                    <img src="../medias/Langjokull-tunnel-1024x975.jpg" width="578px" alt="">
                </div>

                <div class="activitySlideSwipper" style="width:578px;opacity: 0; transform:translate3d(-578px,0px,0px); transition-duration:1ms;" >
                    <img src="../medias/Langjokull-tunnel-1024x975.jpg" alt="">
                </div>

                <div class="activitySlideSwipper" style="width:578px;opacity: 0; transform:translate3d(-1156px,0px,0px); transition-duration:1ms;" >
                    <img src="../medias/Langjokull-tunnel-1024x975.jpg" alt="">
                </div>

                <div class="activitySlideSwipper" style="width:578px;opacity:0;transform:translate3d(-1734px, 0px,0px); transition-duration:1ms;">
                     <img src="../medias/Langjokull-tunnel-1024x975.jpg" alt="">
                </div>
        </div>

        <!-- les miniatures des images que l'user aura entré... tu voi que j'ai mis 
                la largeur a 80px si tu peux encore mieux geré de ton coté -->
        <div class="miniatureDestination">
            <div class="miniatureImage" id="togg1">
                <img src="../medias/Langjokull-tunnel-1024x975.jpg" width="80px" alt="">
            </div>

            <div class="miniatureImage" id="togg2">
                <img src="../medias/Langjokull-tunnel-1024x975.jpg" width="80px" alt="">
            </div>

            <div class="miniatureImage" id="togg3">
                <img src="../medias/Langjokull-tunnel-1024x975.jpg" width="80px" alt="">
            </div>

            <div class="miniatureImage" id="togg4">
                <img src="../medias/Langjokull-tunnel-1024x975.jpg" width="80px" alt="">
            </div>

            <div class="miniatureImage" id="togg5">
                <img src="../medias/Langjokull-tunnel-1024x975.jpg" width="80px" alt="">
            </div>

            <!-- ici la possibilité d'ajouter un contenu 
                
                -->
            <div class="miniatureImage">
                <div class="AjouterImage">
                <i class="fa-solid fa-plus" ></i>
                </div>
            </div>
        </div>

        </div>
    </div>
    </div>
</section>
<!-- ici affichage d'une autre partie des informations entrées par l'user, 
    genre unn petit texte inspirant sur   -->
<section class="info">:
    <div class="lists-block">
    
        <p class="">
        Le saviez-vous ?
        </p>

        <div class="row">
        
        <h1 class="notreDescription">
                    Voyagez et faites des souvenirs uniques à travers le monde
                </h1>

        <div class="infoDestinationContainer">
        <ul class="infoDestination">
        <li class="">
        L’Islande fait partie des 10 meilleures destinations dans le monde pour l’observation des baleines.

    </li>
    <li class="">
        Le nom de famille des Islandais consiste bien souvent au prénom du père suivi par–son (fils) ou –dóttir (fille).

    </li>
    <li class="">
        Les Islandais croient aux elfes et aux nains – certaines routes furent même déplacées pour ne pas les “déranger” dans leur lieu de vie.

    </li>
    <li class="">
        Le parlement islandais fût formé en 930 après JC, ce qui fait de lui le plus vieux parlement au monde.

    </li>
    </ul>
    <!-- pareil qu'avant -->
    <ul class="infoDestination">
    <li class="">
        L’Islande fait partie des 10 meilleures destinations dans le monde pour l’observation des baleines.

    </li>
    <li class="">
        Le nom de famille des Islandais consiste bien souvent au prénom du père suivi par–son (fils) ou –dóttir (fille).

    </li>
    <li class="">
        Les Islandais croient aux elfes et aux nains – certaines routes furent même déplacées pour ne pas les “déranger” dans leur lieu de vie.

    </li>
    <li class="">
        Le parlement islandais fût formé en 930 après JC, ce qui fait de lui le plus vieux parlement au monde.

    </li>
    </ul>
    </div>
    </div>
    </div>
</section>
</div>

</div>

<?php 

new footer();
?>

</body>
</html>
