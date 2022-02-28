<!DOCTYPE html>
<head>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Language" content="en" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="keywords" content="online exif data viewer, exif data viewer, exif viewer, exif reader">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Online Exif viewer</title>
<link type="text/css" rel="stylesheet" href="css/main.css" />
</head>
<body>

<a href="./">Free Online Tools</a>

<h2>Exif data viewer to read digital image properties</h2>

<form action="" method="POST" enctype="multipart/form-data">
    Local Image File:
    <input type = "file" name = "image" />
    <input type="submit" value="View Image From File" name="submit">
</form>

<?php
$allowed = array('image/pjpeg'=>"jpg",'image/jpeg'=>"jpg",'image/jpg'=>"jpg",'image/png'=>"png",'image/x-png'=>"png",'image/gif'=>"gif",'image/bmp'=>"bmp",'image/x-windows-bmp'=>"bmp",'image/tiff'=>"tiff",'image/x-tiff'=>"tiff");
$allowed_image_ext = array_unique($allowed);
$img = $_FILES['image']['tmp_name'];
foreach ($allowed_image_ext as $mime_type => $ext) {
    $image_ext.= strtoupper($ext)." ";
}

if(file_exists($img))
{
    $data=exif_read_data($img);

    foreach ($data as $key=>$val)
    {       
        echo $key.' = '.$val.'<br />';

        //if $val is array. 
        //E.g. computed array has width, height
        if(is_array($val))
        {  
            //Print the key and the value
            foreach($val as $key2=>$val2)
            { 
                echo htmlentities ($key2.' = '.$val2.'<br />'); 
            }
        }
    }
}
else
{
    echo 'Only: JPG, JPEG, TIFF, TIF<br />'; 
}
?>

<br>
<small><i>Info:</i><br />
EXIF data (acronym for EXchangeable Image File) is the information about an image which is stored by almost all digital cameras. EXIF data contains all the details about the image, camera settings and the conditions the image was taken. EXIF is an important feature of the modern day digital cameras. Amateur photographers might not be aware of the EXIF data feature, but this feature is often used by professional photographers. Most of us know that digital cameras can store the picture name, data and time at which the photo was taken. But using EXIF data, photographers can get the detailed setting parameters of the camera while the image was being taken. Using this, the images can be studied for any correction and then can be corrected in the next shot.<br />

Technical jargons of digital photography such as ISO, shutter speed, aperture can be stored in EXIF data. Nowadays, the place where the image was taken, is also stored in EXIF data in the form of latitude and longitude (GPS co-ordinates). You might know, Google Image search can find similar images like the uploaded ones using the GPS features of the EXIF data stored for the images. E.g. if you upload an image of the Statue of Liberty, Google can extract the latitude-longitude (Geo co-ordinates) of the image and can return similar images that were taken near to that place matching the co-ordinates.<br />

Privacy and security: Since the Exif tag contains metadata about the photo, it can pose a privacy problem. For example, a photo taken with a GPS-enabled camera can reveal the exact location and time it was taken, and the unique ID number of the device - this is all done by default - often without the user's knowledge. Many users may be unaware that their photos are tagged by default in this manner, or that specialist software may be required to remove the Exif tag before publishing. For example, a whistleblower, journalist or political dissident relying on the protection of anonymity to allow them to report malfeasance by a corporate entity, criminal, or government may therefore find their safety compromised by this default data collection. The privacy problem of Exif data can be avoided by removing the Exif data using a metadata removal tool.</small><br />

<?php
include 'footer.php';
?>
