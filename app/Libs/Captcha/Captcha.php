<?php

namespace App\Libs\Captcha;
class Captcha {
    public static function dumpCaptcha()
    {
        // put the captcha code here but make
        // changes to the last part as given below
        //Tell the browser what kind of file is come in
        ob_start();
        $md5_hash = md5(rand(0,999)); 
    //We don't need a 32 character long string so we trim it down to 5 
    $security_code = substr($md5_hash, 15, 5); 

    //Set the session to store the security code


    //Set the image width and height
    $width = 100;
    $height = 20; 

    //Create the image resource 
    $image = ImageCreate($width, $height);  

    //We are making three colors, white, black and gray
    $white = ImageColorAllocate($image, 255, 255, 255);
    $black = ImageColorAllocate($image, 0, 0, 0);
    $grey = ImageColorAllocate($image, 204, 204, 204);

    //Make the background black 
    ImageFill($image, 0, 0, $black); 

    //Add randomly generated string in white to the image
    ImageString($image, 3, 30, 3, $security_code, $white); 
    
    //Throw in some lines to make it a little bit harder for any bots to break 
    ImageRectangle($image,0,0,$width-1,$height-1,$grey); 
    imageline($image, 0, $height/2, $width, $height/2, $grey); 
    imageline($image, $width/2, 0, $width/2, $height, $grey); 
        header("Content-Type: image/jpeg"); 
        ImageJpeg($image);
        $img = ob_get_clean();
        ImageDestroy($image);
        return base64_encode($img);
    }
}