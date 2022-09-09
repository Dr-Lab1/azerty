<?php
include('header.php');
$idUser = isset($_SESSION['nom']) ? $_SESSION['nom'] : null;

require_once dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . 'controller' . DIRECTORY_SEPARATOR . 'indexController.php';

include('./footer.php');

$header  = new header('ACCUEIL', '../Css/style2.css');
$header2=new header('ACCUEIL', '../Css/creation.css');
// $header2->nav();
$header->nav();

$index = new index();
?>
<!-- <section>
    <div class="partie1">
        <div class="imgGauche">
            <img src="../medias/Belfast-City-Hall.jpg" alt="image d'illustration">
        </div>
        <div class="formContent">
            <div class="formHeader">
                <h3>REJOIGNEZ NOUS</h3>
            </div>

            <p>Veuillez entrer vos informations</p>
            <div class="formRow">
								<div class="formHolder">
									<input type="text" placeholder="Prénom" class="formControl">
								</div>
								<div class="formHolder">
									<input type="text" placeholder="Nom" class="formControl">
								</div>
			</div>

            <div class="formRow">
								<div class="formHolder">
									<input type="text" placeholder="email" class="formControl">
								</div>
								<div class="formHolder">
									<input type="text" placeholder="Téléphone" class="formControl">
								</div>
			</div>
        </div>
    </div>
</section>

<section>
    <div class="partie1">
    <div class="imgGauche">
            <img src="../medias/Belfast-City-Hall.jpg" alt="image d'illustration">
        </div>
        
        <div class="formContent">
            <div class="formheader">
                <h3>REJOIGNEZ NOUS</h3>
            </div>
            <div class="formRow">
                <div class="formHolder">
                    <input type="text" placeholder="Nom du site" class="formControl">
                </div>
            </div>

            <div class="formRow">
                <div class="formHolder"> 
                    <input type="text" placeholder="Ville" class="formControl">
                </div>
                <div class="formHolder">
                    <input type="text" placeholder="Pays" class="formControl">
                </div>
            </div>

            <div class="formRow">
                <div class="formHolder">
                    <input type="image"     >
                </div>
            </div>

        </div>
    </div>
</section>

<section>
    <div class="partie1">
        <div class="imgGauche">
            <img src="../medias/Belfast-City-Hall.jpg" alt="">
        </div>

        <div class="formContent">
            <div class="formRow">
                <div class="formHolder">
                <textarea name="" id="" placeholder="Your messagere here!" class="formcontrol" style="height: 99px;"></textarea>
                </div>
            </div>
        </div>
    </div>
</section> -->

<body>
		<div class="wrapper">
            <form action="" id="wizard">
        		<!-- SECTION 1 -->
                <h2></h2>
                <section id="etape1" class="card active">
                    <div class="partie1">
						<div class="imgGauche">
							<img src="../medias/Belfast-City-Hall.jpg" alt="">
						</div>
						<div class="formContent" >
							<div class="formHeader">
								<h3>Rejoignez nous</h3>
							</div>
							<p>Rajoutez des petits details </p>
							<div class="formRow">
								<div class="formHolder">
									<input type="text" placeholder="Prénom" class="formControl">
								</div>
								<div class="formHolder">
									<input type="text" placeholder="Nom" class="formControl">
								</div>
							</div>
							<div class="formRow">
								<div class="formHolder">
									<input type="text" placeholder="Email" class="formControl">
								</div>
								<div class="formHolder">
									<input type="text" placeholder="Téléphone" class="formControl">
								</div>
							</div>
							<div class="formRow">
								<div class="formHolder">
									<input type="text" placeholder="Age" class="formControl">
								</div>
								
							</div>
                            <div class="formRow">
                                <div class="formHolder" >

                                </div>
                                <div class="formHolder">
                                     <button onclick=next1(); id="btn-next1">Suivant</button>
                                </div>
                               
                            </div>
							
						</div>
					</div>
                </section>

				<!-- SECTION 2 -->
                <h2></h2>
                <section id="etape2" class="card">
                    <div class="partie1">
						<div class="imgGauche">
                        <img src="../medias/Belfast-City-Hall.jpg" alt="">
						</div>
						<div class="formContent">
							<div class="formHeader">
								<h3>Rejoignez nous</h3>
							</div>
							<p>Ajoutez des petits détails</p>
							
							<div class="formRow">
								<div class="formHolder">
									<input type="text" placeholder="City" class="formControl">
								</div>

                                <div class="formHolder"> 
                                    <input type="text"placeholder="Pays" class="formControl">
                                </div>
								
							</div>

                            <div class="formRow">
                                <div class="formHolder"> 
                                    <input type="image">
                                </div>
                            </div>

                            <div class="formRow">
                                <div class="formHolder" >
                                    <button onclick=prev1() id="btn-prev1">Precedent</button>
                                </div>
                                <div class="formHolder">
                                     <button onclick=next2() id="btn-next2">Suivant</button>
                                </div>
                               
                            </div>

							
						</div>
					</div>
                </section>

                <!-- SECTION 3 -->
                <h2></h2>
                <section id="etape3" class="card">
                    <div class="partie1">
						<div class="imgGauche">
                        <img src="../medias/Belfast-City-Hall.jpg" alt="">
						</div>
						<div class="formContent">
							<div class="formHeader">
								<h3>Rejoignez nous</h3>
							</div>
							<p>Une description</p>
							<div class="formRow">
								<div class="formHolder w-100">
									<textarea name="" id="" placeholder="description du site" class="formControl" style="height: 99px;"></textarea>
								</div>
							</div>
                            <div class="formRow">
                                <div class="formHolder" >
                                    <button onclick=prev2() id="btn-prev2" >precedent</button>
                                </div>
                                
                                <div class="formHolder">
                                    <a href="./destination.php">
                                        <input type="submit">
                                    </a>
                                     
                                </div>
                               
                            </div>
							
						</div>
                        
					</div>
                    
                </section>
                
                

            </form>
		</div>

		
</body>

<script src="../Js/creationSite.js"></script>