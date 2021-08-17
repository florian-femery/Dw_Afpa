<?php
class Employe
{
	public $_nom;
	public $_prenom;
	public  $_dateembauche;
	public $_fonction;
	// passes ta variable en public 
	public $_salaireAn;
	public $_service;
	public $_now;

	

	
	public function __construct($_nom, $_prenom, $_dateembauche, $_fonction, $_salaireAn, $_service, $_now) // 
		{
				$this->_nom=$_nom;
				$this->_prenom=$_prenom;
				$this->_dateEmbauche=$_dateEmbauche;
				$this->_fonction =$_fonction;
				$this->_salaireAn=$_salaireAn;
				$this->_service = $_service;
				$this->_now = new DateTime();

		}
		
		
	public function getNom()
	{
		return $this->_nom;
	}
	
	public function getPrenom()
	{
		return $this->_prenom;
	}
	
	public function getFonction()
	{
		return $this->_fonction;
	}
	
	public function getSalaireAn()
	{
		return $this->_salaireAn;
	}
	
	public function getService()
	{
		return $this->_service;
	}
	
	public function anciennete()
		{
			
			// Tu n'as plus besoin de déclarer la date du jour puisqu'elle est contenue dans $this->_now
			// calcul de la différence entre les 2 dates
			$nyears = $this->_dateembauche->diff($this->_now);
			return $nyears->y;
		}
		
		public function primeAnnuelle()
		{
			return $this->getSalaireAn()*0.05;
		}
		
		public function primeAnciennete()
		{
			return ($this->getSalaireAn()*0.02)*$this->anciennete();
		}
		
		public function prime()
		{
			return $this->primeAnnuelle()+$this->primeAnciennete();
		}
		
		public function versementPrime()
		{
			$today = date("2020-11-30");
			$date_versement = date("2020-11-30");
			if($today == $date_versement)
			{
				echo "virement xxxxx-32 effectué de €".$this->prime(). "au comptant du compte xxxxxx-ck237 beneficiaire Mr".$this->getNom()." ".$this->getPrenom().".<br>";
				
			}
			else
		    {
				echo "prochain versement le 30/11";
			}
		}
		
   public function Affichage()
   {
	echo  "<i> l'employé est dans l'entreprise depuis ".$this->anciennete(). " ans.</i><br/>";
	echo 'Nom :'.$this->getNom().'.<br>';
	echo 'Prenom :'.$this->getPrenom().'.<br>';
	echo 'Poste :'.$this->getFonction().'.<br>';
	echo 'Salaire :'.$this->getSalaireAn().'.<br>';
	echo 'Service'.$this->getService().'.<br>';
	echo 'prime Annuelle :'.$this->primeAnnuelle().'.<br>';
	echo 'prime Ancienneté :'.$this->primeAnciennete().'.<br>';
	echo 'prime :'.$this->prime().'.<br>';
	echo $this->versementPrime();
	echo "<br><br><br>";

   }
	


}
// Tu dois définir ta variable en publique pour la prime, lui attribuer la valeur comme je l'ai fait
// au dessus avec la date d'embauche 
// Ensuite tu crées ta méthode dans la fonction et tu l'appelles 
