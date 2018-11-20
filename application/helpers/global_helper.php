<?php


function czyAdmin()
{
    if(isset($_SESSION['typ']) && $_SESSION['typ'] === 'Admin')
    {
        return true;
    }

    return false;
}



function czyKlient()
{
    if(isset($_SESSION['typ']) && $_SESSION['typ'] === 'Klient')
    {
        return true;
    }

    return false;
}



