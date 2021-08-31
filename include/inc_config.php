<?php
session_start();
const APP_NAME="Base stagiaires";
const APP_SLOGAN="Gestion de la base stagiaires";
$_SESSION["debug"]=false;

//connexion à la base de données
$link = mysqli_connect("localhost","root","","stagiaires");

require "inc_fonction.php";
