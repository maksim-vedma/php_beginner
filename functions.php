<?php

/**
 * Récupère la liste des images pour le carousel
 * de la page d'accueil
 */
function getCarouselImages(): array
{
    return array_slice(scandir('./assets/images/slides'), 2);
}

function addition(float $a, float $b): float
{
    return $a + $b;
}
