<?php
function getlistings(): array
{
    return  [
        ["title" => "Iphone 16 pro max", "price" => 930, "image" => "iphone 16 pro max.jpg", "description" => "Iphone 16 pro max 256 Go en très bon état et sous garantie Apple"],
        ["title" => "Ordinateur portable ", "price" => 345, "image" => "lenovo.jpg", "description" => "KIA Picanto lx  année 2007 , Diesel et en bon état général"],
        ["title" => "Frigo", "price" => 560, "image" => "frigo.jpg", "description" => "Frigo en parfait état de marche"],

    ];
}


function getListingById(int $id): array
{
    $listings = getlistings();
    return $listings[$id];
}
