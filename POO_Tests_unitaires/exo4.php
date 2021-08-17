				<?php
				require "connexiondb.php";
				$db=connexionBase();

				$requete=$db->query("SELECT `emp_id`, `emp_nom`, `emp_prenom`, `emp_dateembauche`, `emp_fonction`, `emp_salaire`, `emp_service` FROM `employe`");

//						while($perso=$requete->fetch(PDO::FETCH_ASSOC))
//						{
//								echo $perso['emp_nom'];
//						}

						class Employe
						{
								protected $id;
								protected  $nom;
								protected  $prenom;
								protected   $dateembauche;
								protected  $fonction;
								protected  $salaireAn;
								protected  $service;
								public $now;

								public $pdo;

							 public function __construct()
							 {
									 $this->pdo = connexionBase();
									$this->_dateEmbauche=$dateEmbauche;
									$this->now = new DateTime();

							 }

							 public function setId($id)
							 {
									 return $thisid = $id;
							 }
							public function setNom($nom)
							{
									return $this->nom = $nom ;
							}
							public function setPrenom($prenom)
							{
									return $this->prenom = $prenom;
							}
							public function setDateembauche($dateembauche)
							{
									return $this->dateembauche = $dateembauche;
							}
							public function setFonction($fonction)
							{
									return $this->fonction = $fonction;
							}
							public function setSalaireAn($salaireAn)
							{
									return $this->salaireAn = $salaireAn;
							}
							public function setService($service)
							{
									return $this->service = $service;
							}
							
						

									public function Listing()
											{
										$result = $this->pdo->query("SELECT count(`emp_id`) FROM `employe`");
                                            while (list($id) = $result->fetch(PDO::FETCH_NUM)) 
											  {
												 echo "L'entreprise compte ".$id." employés.<br>";
											  }
											}			
						
						public function ranger()
						{
						 $result = $this->pdo->query("SELECT  emp_nom, emp_prenom FROM employe ORDER BY emp_nom ASC");
						while (list( $nom, $prenom ) = $result->fetch(PDO::FETCH_NUM))		
		                  {
			
												echo  "<br>".$nom." ".$prenom;										
						}
						}
						
						public function classer()
						{
						 $result = $this->pdo->query("SELECT  emp_service,emp_nom, emp_prenom FROM employe ORDER BY emp_service ASC");
						  while (list( $service,$nom, $prenom ) = $result->fetch(PDO::FETCH_NUM))		
		                   {	
						     echo"<br><br>".$service." ".$nom." ".$prenom."<br>";										
						   }
						}
						
						
						}
						$employe = new Employe();
						$employe->Listing(); 
						$employe->ranger();
						$employe->classer();
						$employe->anciennete();