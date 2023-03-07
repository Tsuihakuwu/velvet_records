<?php

    if(session_status() !== PHP_SESSION_ACTIVE) session_start();

    if (!isset($_SESSION["login"])) 
    {
        include("header.php");
        include("connexion.php");
        include("footer.php");
    } 
    else 
    {
        include('header.php');
        
        if(!isset($_GET['p']) || isset($_GET['p']) && $_GET['p']==0){
            include('menu.php');
        }
        else {
            switch($_GET['p']){
                case 'artist':
                    include('content/artist/artist_affichage.php');
                    break;
                case 'add_artist':
                    include('content/artist/artist_new.php');
                    break;
                case 'a_detail':
                    include('content/artist/artist_detail.php');
                    break;
                case 'a_mod':
                    include('content/artist/artist_modif.php');
                    break;
                case 'a_cdel':
                    include('content/artist/artist_cdel.php');
                    break;
                case 'disc':
                    include('content/disc/disc_affichage.php');
                    break;
                case 'add_disc':
                    include('content/disc/disc_new.php');
                    break;
                case 'd_detail':
                    include('content/disc/disc_detail.php');
                    break;
                case 'd_mod':
                    include('content/disc/disc_modif.php');
                    break;
                case 'd_cdel':
                    include('content/disc/disc_cdel.php');
                    break;
            }
        }
        
        include('footer.php');

    }
?>