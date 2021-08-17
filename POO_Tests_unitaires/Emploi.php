<?php

function chargerClasse($classe)
{
	require $classe . '.class.php'; // On inclut la classe correspondante au paramètre passé.
}

spl_autoload_register('chargerClasse'); // On enregistre la fonction en autoload pour qu'elle soit appelée dès qu'on instanciera une classe non déclarée.

$worker1 = new Employe('Kingue','Claude',' ','createur',5000,'direction',' ');
$worker1->_dateembauche = new DateTime('01-01-2010');
$worker1->anciennete();
$worker1->Affichage();


$worker2 = new Employe('Kingue','Claude',' ','createur',5000,'direction',' ');
$worker2->_dateembauche = new DateTime('01-04-2011');
$worker2->anciennete();
$worker2->Affichage();

$worker3 = new Employe('Kingue','Claude',' ','createur',5000,'direction',' ');
$worker3->_dateembauche = new DateTime('08-07-2011');
$worker3->anciennete();
$worker3->Affichage();


$worker4 = new Employe('Kingue','Claude',' ','createur',5000,'direction',' ');
$worker4->_dateembauche = new DateTime('12-09-2013');
$worker4->anciennete();
$worker4->Affichage();

$worker5 = new Employe('Kingue','Claude',' ','createur',5000,'direction',' ');
$worker5->_dateembauche = new DateTime('14-03-2015');
$worker5->anciennete();
$worker5->Affichage();


