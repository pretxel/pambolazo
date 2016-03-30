<?php

namespace Pambolazo\Utils;

class ImageProcess
{

  public function imageCreateFromAny($filepath) {
    $type = exif_imagetype($filepath);
    switch ($type) {
      case 2 :
      $im = imageCreateFromJpeg($filepath);
      break;
      case 3 :
      $im = imageCreateFromPng($filepath);
      break;
    }
    return $im;
  }

  public function scaleAndSaveImage($filepath, $rsr_org)
  {

    $rsr_scl = imagescale($rsr_org, 200, 200, IMG_BICUBIC_FIXED);
    $type = exif_imagetype($filepath);
    switch ($type) {
      case 2 :
      imagejpeg($rsr_scl, $filepath);
      break;
      case 3 :
      imagepng($rsr_scl, $filepath);
      break;
    }
  }

}
