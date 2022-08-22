<?php
class header
{
    public function __construct($titre, $style)
    {?>
        
        <!DOCTYPE html>
        <html lang="en" dir="ltr">

        <head>
        <meta charset="utf-8">
        <title><?= $titre?></title>
        <link rel="stylesheet" href="<?= $style?>">
        <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>
        </head>

    <?php 
    }
}
