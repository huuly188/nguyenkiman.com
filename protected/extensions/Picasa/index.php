<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
ini_set('error_log', 'my_file.log');
ini_set('include_path', './');

define('SITE_URL', 'http://localhost/nina/');
require_once 'Picasa.php';
$username = "huuly.huflit";
?>
<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <title>An An cute</title>
    </head>
    <body>
        <?php
        //Account Page
        //For the account page, the only thing you'll need is the username. I recommend storing the username in a constant variable somewhere where all your code can access. This is so that if your username changes, or you want to give your code to someone else, you only have to change the username in one place. I store mine in a variable called "Cam_Util_PictureUtil::$USERNAME". However, for the sake of readability, I'll just refer to it in the following code as "$username". Here's the code for the account page, which just outputs each album's icon with a link to the album page. I use a URL structure similar to what my site uses, but modified to be closer to the typical setup. And obviously you can change the HTML to suit your needs:
        $pic = new Picasa();
//        Picasa_Logger::getLogger()->setEnabled(true);
        $account = $pic->getAlbumsByUsername($username);
        $albums = $account->getAlbums();
        foreach ($albums as $album)
        {
            print('<a href="http://www.your_web_site.com/album.php?albumid=' . $album->getIdnum() . '"><img src="' . $album->getIcon() . '" />');
            print('<div>' . $album->getTitle() . '</div>');
        }

        
//        Album Page
        //For the album page, you'll not only need the username, but you'll also need the album id. If you use the URL structure used in the previous example, you should be able to get the album id from the $_GET superglobal. I'll include how to do that in the code sample. So the album page just prints each image in the album with a link to the Image Page and the album title displayed below:

//        $albumid = $_GET["albumid"];
//        $pic = new Picasa();
//        $album = $pic->getAlbumById($username, $albumid);
//        $images = $album->getImages();
//        foreach ($images as $image)
//        {
//            print('<a href="' . SITE_URL .'image.php?albumid=' . $albumid . '&imageid=' . $image->getIdnum() . '"><img src="' . $image->getLargeThumb() . '"/>');
//            print('<div>' . $image->getTitle() . '</div>');
//        }
        
        
//        Image Page
    //Lastly for the image page, as you might have guessed, you'll need the username, album id, and image id. Again, using the above example, you get the image id from the $_GET superglobal. The image page prints the image, the image title, and the description of the image:
//        $albumid = $_GET["albumid"];
//        $imageid = $_GET["imageid"];
//        $pic = new Picasa();
//        $image = $pic->getImageById($username, $albumid, $imageid);
//        print ('<img src="'. $image->getLargeThumb(). '"/>');
//        print('<div>'.$image->getTitle());
//        print('<div>'.$image->getDescription().'</div></div>');
        ?>
    </body>
</html>