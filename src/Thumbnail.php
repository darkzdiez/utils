<?php
namespace Hard\Utils;

use Illuminate\Support\Facades\File;

Class Thumbnail {
	
	public static function generate ($_path, $_file, $div_width, $div_height, $forceEXT=NULL) {
		$image_path = $_path . $_file;
		$ext = '';
		if($forceEXT != NULL){
			$ext = '.' . $forceEXT;
		}
		$thumbnailpath = $_path . 'thumbnails/'. $div_width . 'x' . $div_height . $_file . $ext;
		if(file_exists($thumbnailpath)){
			return $thumbnailpath;
		}
		File::makeDirectory($_path . 'thumbnails/' , $mode = 0777, true, true);
		$img = self::readImage($image_path);
		if (!$img) {
			return false;
		}
		// Abre la imagen thumbnail
		// Valores Maximos
		$xMax=$div_width;
		$yMax=$div_height;
		// Valores Reales
		$xVal=imageSX($img);
		$yVal=imageSY($img);
		// Calcular Porcentaje
		$xPercent=(($xVal*100)/$xMax)/100;
		$yPercent=(($yVal*100)/$yMax)/100;
		if ($xPercent==$yPercent) {
			$divPercent=$xPercent;
		} elseif ($xPercent>$yPercent) {
			$divPercent=$yPercent;
		} elseif ($xPercent<$yPercent) {
			$divPercent=$xPercent;
		}
		//if ($xPercent<=1 && $yPercent<=1) {
		//	exit('no se pasa '.$xPercent.' '.$yPercent);
		//} else {
		$xCapa=$xVal/$divPercent;
		$yCapa=$yVal/$divPercent;
		$left=($xCapa-$xMax)/2;
		$top=($yCapa-$yMax)/2;
		if($left<0){
			$left=0;
		}
		if($top<0){
			$top=0;
		}
			//print 'se pasa tama&ntilde;o x:'.$xVal.', y:'.$yVal.'<br>';
			//print 'porcentage x:'.$xPercent.', y:'.$yPercent.'<br>';
			//print 'Capa x:'.$xCapa.', y:'.$yCapa.'<br>';
			//print 'Lienzo x:'.$xMax.', y:'.$yMax.'<br>';
			//print 'Margen x:'.$left.', y:'.$top.'<br>';*/
		//}

		$thumb_img = imagecreatetruecolor ($xMax, $yMax);

		imagecopyresized($thumb_img, $img, 0-$left, 0-$top, 0, 0, $xCapa, $yCapa, $xVal, $yVal);
		$result = self::saveImage($thumbnailpath, $thumb_img, 100,$forceEXT);
		imagedestroy($thumb_img);

		if($result) {
			return $thumbnailpath;
		} else {
			return false;
		}


	}

	private static function saveImage($imagepath, $image, $quality,$forceEXT=NULL) {
		$ext = strtolower(pathinfo($imagepath, PATHINFO_EXTENSION));
		if($forceEXT != NULL){
			$ext=$forceEXT;
		}
		switch ($ext) {
			case 'jpg': case 'jpeg':
				return imagejpeg($image, $imagepath, $quality);
			case 'gif':
				return imagegif($image, $imagepath);
			case 'png':
				return imagepng($image, $imagepath, 9);
			default:
				return false;
		}
	}

	private static function readImage ($imagepath) {
		$ext = strtolower(pathinfo($imagepath, PATHINFO_EXTENSION));
		switch ($ext) {
			case 'jpg': case 'jpeg':
			return @imagecreatefromjpeg($imagepath);
			case 'gif':
			return @imagecreatefromgif($imagepath);
			case 'png':
			return @imagecreatefrompng($imagepath);
			default:
			return false;
		}
	}
}
?>