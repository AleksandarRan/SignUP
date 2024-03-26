<?php

require 'functions.php';



    $KorisnikID = 1;
    $ime = $_POST['firstName'];
    $prezime = $_POST['lastName'];
    $br_tel = $_POST['phoneNumber'];
    $grad = $_POST['city'];
    $adresa = $_POST['address'];
    $pol = $_POST['sex'];
    $KorisnickoIme = $_POST['username'];
    $imejl = $_POST['email'];
    $sifra = $_POST['password'];



    $sql_u = mysqli_query($conn, "SELECT * FROM korisnici WHERE username='$KorisnickoIme'");
    $sql_e = mysqli_query($conn, "SELECT * FROM korisnici WHERE email='$imejl'");

    if (mysqli_num_rows($sql_u) > 0) {
        echo ("Username vec postoji");
    }else if(mysqli_num_rows($sql_e) > 0){
        echo ("Email vec postoji");
    }else{



        mysqli_query($conn, "INSERT INTO korisnici(Ime, Prezime, email, broj_telefona, Grad, ulica, pol, Username)
        VALUES('$ime','$prezime', '$imejl', '$br_tel', '$grad', '$adresa', '$pol', '$KorisnickoIme')") or die(mysqli_error($conn));

    }
?>