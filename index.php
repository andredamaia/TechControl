<?php include('config.php'); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1" />
        
        <base href="techcontrol" />
        
        <title><?php echo $title; ?></title>
        
        <meta name="description" content="<?php echo $description; ?>" />
        
        <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png" />
        <link rel="icon" type="image/png" sizes="60x60" href="images/favicon.png" />
        <link rel="manifest" href="site.webmanifest" />
        <link rel="mask-icon" href="safari-pinned-tab.svg" color="#0038b8" />
        
        <meta name="msapplication-TileColor" content="#eaeced" />
        <meta name="theme-color" content="#eaecedf" />
        
        <link href="styles/styles.css" rel="stylesheet" />
        
        <meta property="og:type" content="website" />
        <meta property="og:title" content="<?php echo $title; ?>" />
        <meta property="og:description" content="<?php echo $description; ?>" />
        <meta property="og:image" content="images/3bce12a0-f901-4de4-8b20-ff9c798137f5.jpg" />

        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="<?php echo $title; ?>" />
        <meta name="twitter:description" content="<?php echo $description; ?>" />
        <meta name="twitter:image" content="images/3bce12a0-f901-4de4-8b20-ff9c798137f5.jpg" />
    </head>

    <body id="<?php echo $page; ?>">
        <div class="webapp">
            <?php include('components/preload.php'); ?>
            
            <?php include('components/header.php'); ?>
        
            <?php
                if($page != NULL){
                    include('pages/'.$page.'.php');
                }
            ?>
        
            <?php include('components/footer.php'); ?>
        </div>
    </body>
</html>

<script src="scripts/wow.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
<script src="scripts/base.js" type="module"></script>