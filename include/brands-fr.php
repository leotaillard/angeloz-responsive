<?php 
function removeAccents($str) {
  $a = array('À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Æ', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ð', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'Ø', 'Ù', 'Ú', 'Û', 'Ü', 'Ý', 'ß', 'à', 'á', 'â', 'ã', 'ä', 'å', 'æ', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', 'ø', 'ù', 'ú', 'û', 'ü', 'ý', 'ÿ', 'Ā', 'ā', 'Ă', 'ă', 'Ą', 'ą', 'Ć', 'ć', 'Ĉ', 'ĉ', 'Ċ', 'ċ', 'Č', 'č', 'Ď', 'ď', 'Đ', 'đ', 'Ē', 'ē', 'Ĕ', 'ĕ', 'Ė', 'ė', 'Ę', 'ę', 'Ě', 'ě', 'Ĝ', 'ĝ', 'Ğ', 'ğ', 'Ġ', 'ġ', 'Ģ', 'ģ', 'Ĥ', 'ĥ', 'Ħ', 'ħ', 'Ĩ', 'ĩ', 'Ī', 'ī', 'Ĭ', 'ĭ', 'Į', 'į', 'İ', 'ı', 'Ĳ', 'ĳ', 'Ĵ', 'ĵ', 'Ķ', 'ķ', 'Ĺ', 'ĺ', 'Ļ', 'ļ', 'Ľ', 'ľ', 'Ŀ', 'ŀ', 'Ł', 'ł', 'Ń', 'ń', 'Ņ', 'ņ', 'Ň', 'ň', 'ŉ', 'Ō', 'ō', 'Ŏ', 'ŏ', 'Ő', 'ő', 'Œ', 'œ', 'Ŕ', 'ŕ', 'Ŗ', 'ŗ', 'Ř', 'ř', 'Ś', 'ś', 'Ŝ', 'ŝ', 'Ş', 'ş', 'Š', 'š', 'Ţ', 'ţ', 'Ť', 'ť', 'Ŧ', 'ŧ', 'Ũ', 'ũ', 'Ū', 'ū', 'Ŭ', 'ŭ', 'Ů', 'ů', 'Ű', 'ű', 'Ų', 'ų', 'Ŵ', 'ŵ', 'Ŷ', 'ŷ', 'Ÿ', 'Ź', 'ź', 'Ż', 'ż', 'Ž', 'ž', 'ſ', 'ƒ', 'Ơ', 'ơ', 'Ư', 'ư', 'Ǎ', 'ǎ', 'Ǐ', 'ǐ', 'Ǒ', 'ǒ', 'Ǔ', 'ǔ', 'Ǖ', 'ǖ', 'Ǘ', 'ǘ', 'Ǚ', 'ǚ', 'Ǜ', 'ǜ', 'Ǻ', 'ǻ', 'Ǽ', 'ǽ', 'Ǿ', 'ǿ', 'Ά', 'ά', 'Έ', 'έ', 'Ό', 'ό', 'Ώ', 'ώ', 'Ί', 'ί', 'ϊ', 'ΐ', 'Ύ', 'ύ', 'ϋ', 'ΰ', 'Ή', 'ή');
  $b = array('A', 'A', 'A', 'A', 'A', 'A', 'AE', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'D', 'N', 'O', 'O', 'O', 'O', 'O', 'O', 'U', 'U', 'U', 'U', 'Y', 's', 'a', 'a', 'a', 'a', 'a', 'a', 'ae', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'y', 'y', 'A', 'a', 'A', 'a', 'A', 'a', 'C', 'c', 'C', 'c', 'C', 'c', 'C', 'c', 'D', 'd', 'D', 'd', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'G', 'g', 'G', 'g', 'G', 'g', 'G', 'g', 'H', 'h', 'H', 'h', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'IJ', 'ij', 'J', 'j', 'K', 'k', 'L', 'l', 'L', 'l', 'L', 'l', 'L', 'l', 'l', 'l', 'N', 'n', 'N', 'n', 'N', 'n', 'n', 'O', 'o', 'O', 'o', 'O', 'o', 'OE', 'oe', 'R', 'r', 'R', 'r', 'R', 'r', 'S', 's', 'S', 's', 'S', 's', 'S', 's', 'T', 't', 'T', 't', 'T', 't', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'W', 'w', 'Y', 'y', 'Y', 'Z', 'z', 'Z', 'z', 'Z', 'z', 's', 'f', 'O', 'o', 'U', 'u', 'A', 'a', 'I', 'i', 'O', 'o', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'A', 'a', 'AE', 'ae', 'O', 'o', 'Α', 'α', 'Ε', 'ε', 'Ο', 'ο', 'Ω', 'ω', 'Ι', 'ι', 'ι', 'ι', 'Υ', 'υ', 'υ', 'υ', 'Η', 'η');
  return str_replace($a, $b, $str);
}

$brands = array(
  array("marque"=>"7 for all Mankind","woman"=>true,"man"=>true,"fribourg"=>true,"avry"=>false,"bulle"=>false),
  array("marque"=>"Aglini","woman"=>true,"man"=>false,"fribourg"=>true,"avry"=>false,"bulle"=>false),
  array("marque"=>"Alberto","woman"=>false,"man"=>true,"fribourg"=>true,"avry"=>true,"bulle"=>false),
  array("marque"=>"Allude","woman"=>true,"man"=>false,"fribourg"=>true,"avry"=>false,"bulle"=>false),
  array("marque"=>"Antonio Maurizi","woman"=>false,"man"=>true,"fribourg"=>true,"avry"=>false,"bulle"=>false),
  array("marque"=>"Atelier Torino","woman"=>false,"man"=>true,"fribourg"=>true,"avry"=>false,"bulle"=>false),
  // array("marque"=>"Aunts&Uncles","woman"=>true,"man"=>true,"fribourg"=>true,"avry"=>true,"bulle"=>false),
  array("marque"=>"Basler","woman"=>true,"man"=>false,"fribourg"=>true,"avry"=>false,"bulle"=>false),
  // array("marque"=>"Beck Sondergaard","woman"=>true,"man"=>false,"fribourg"=>false,"avry"=>true,"bulle"=>false),
  array("marque"=>"Better Rich","woman"=>true,"man"=>false,"fribourg"=>true,"avry"=>true,"bulle"=>false),
  array("marque"=>"Brax","woman"=>false,"man"=>true,"fribourg"=>true,"avry"=>true,"bulle"=>false),
  // array("marque"=>"Bugatti","woman"=>false,"man"=>true,"fribourg"=>true,"avry"=>true,"bulle"=>false),
  array("marque"=>"Burberry","woman"=>true,"man"=>false,"fribourg"=>true,"avry"=>false,"bulle"=>false),
  array("marque"=>"Cambio","woman"=>true,"man"=>false,"fribourg"=>true,"avry"=>true,"bulle"=>true),
  // array("marque"=>"Chloé","woman"=>true,"man"=>false,"fribourg"=>true,"avry"=>false,"bulle"=>false),
  // array("marque"=>"Cinque","woman"=>false,"man"=>true,"fribourg"=>true,"avry"=>true,"bulle"=>false),
  array("marque"=>"Closed","woman"=>true,"man"=>false,"fribourg"=>true,"avry"=>false,"bulle"=>false),
  array("marque"=>"Codello","woman"=>true,"man"=>true,"fribourg"=>true,"avry"=>true,"bulle"=>true),
  array("marque"=>"Comma","woman"=>true,"man"=>false,"fribourg"=>false,"avry"=>true,"bulle"=>true),
  // array("marque"=>"Custommade","woman"=>true,"man"=>false,"fribourg"=>true,"avry"=>false,"bulle"=>false),
  array("marque"=>"Diadora","woman"=>false,"man"=>true,"fribourg"=>true,"avry"=>false,"bulle"=>false),
  array("marque"=>"Diesel","woman"=>true,"man"=>true,"fribourg"=>false,"avry"=>true,"bulle"=>false),
  array("marque"=>"DKNY","woman"=>true,"man"=>false,"fribourg"=>true,"avry"=>false,"bulle"=>false),
  array("marque"=>"Drykorn","woman"=>true,"man"=>true,"fribourg"=>true,"avry"=>false,"bulle"=>false),
  // array("marque"=>"Dstrezzed","woman"=>false,"man"=>true,"fribourg"=>false,"avry"=>false,"bulle"=>false),
  array("marque"=>"Duvetica","woman"=>true,"man"=>true,"fribourg"=>true,"avry"=>false,"bulle"=>false),
  array("marque"=>"Floris Van Bommel","woman"=>false,"man"=>true,"fribourg"=>true,"avry"=>false,"bulle"=>false),
  array("marque"=>"Fuchs & Schmitt","woman"=>true,"man"=>false,"fribourg"=>true,"avry"=>false,"bulle"=>false),
  array("marque"=>"Gant","woman"=>true,"man"=>true,"fribourg"=>true,"avry"=>true,"bulle"=>true),
  array("marque"=>"Gerry Weber","woman"=>true,"man"=>false,"fribourg"=>true,"avry"=>true,"bulle"=>true),
  array("marque"=>"Grace","woman"=>true,"man"=>false,"fribourg"=>false,"avry"=>true,"bulle"=>false),
  array("marque"=>"Hackett","woman"=>false,"man"=>true,"fribourg"=>true,"avry"=>false,"bulle"=>false),
  array("marque"=>"Herno","woman"=>false,"man"=>true,"fribourg"=>true,"avry"=>false,"bulle"=>false),
  // array("marque"=>"Hex","woman"=>false,"man"=>true,"fribourg"=>true,"avry"=>false,"bulle"=>false),
  array("marque"=>"Hudson","woman"=>false,"man"=>true,"fribourg"=>true,"avry"=>false,"bulle"=>false),
  array("marque"=>"Hugo","woman"=>true,"man"=>true,"fribourg"=>true,"avry"=>false,"bulle"=>false),
  // array("marque"=>"Hugo Boss Black","woman"=>true,"man"=>true,"fribourg"=>true,"avry"=>false,"bulle"=>false),
  // array("marque"=>"Hugo Boss Green","woman"=>false,"man"=>true,"fribourg"=>true,"avry"=>false,"bulle"=>false),
  // array("marque"=>"Hugo Boss Orange","woman"=>true,"man"=>true,"fribourg"=>true,"avry"=>true,"bulle"=>false),
  array("marque"=>"Hunter","woman"=>true,"man"=>false,"fribourg"=>false,"avry"=>true,"bulle"=>false),
  array("marque"=>"Jacob Cohen","woman"=>true,"man"=>true,"fribourg"=>true,"avry"=>false,"bulle"=>false),
  array("marque"=>"Jacques Britt","woman"=>false,"man"=>true,"fribourg"=>true,"avry"=>false,"bulle"=>false),
  array("marque"=>"Kennel&Schmenger","woman"=>true,"man"=>false,"fribourg"=>true,"avry"=>true,"bulle"=>false),
  array("marque"=>"Luisa Cerano","woman"=>true,"man"=>false,"fribourg"=>true,"avry"=>false,"bulle"=>false),
  array("marque"=>"Liebeskind","woman"=>true,"man"=>false,"fribourg"=>false,"avry"=>true,"bulle"=>false),
  array("marque"=>"Maison Scotch","woman"=>true,"man"=>false,"fribourg"=>false,"avry"=>true,"bulle"=>false),
  array("marque"=>"Marc Cain","woman"=>true,"man"=>false,"fribourg"=>true,"avry"=>true,"bulle"=>false),
  array("marque"=>"Marc O'Polo","woman"=>true,"man"=>true,"fribourg"=>true,"avry"=>true,"bulle"=>true),
  array("marque"=>"Max Mara Weekend","woman"=>true,"man"=>false,"fribourg"=>true,"avry"=>false,"bulle"=>false),
  array("marque"=>"Max Mara","woman"=>true,"man"=>false,"fribourg"=>true,"avry"=>false,"bulle"=>false),
  array("marque"=>"Michèle","woman"=>true,"man"=>false,"fribourg"=>true,"avry"=>false,"bulle"=>false),
  array("marque"=>"Moschino Cheap & Chic","woman"=>true,"man"=>false,"fribourg"=>true,"avry"=>false,"bulle"=>false),
  array("marque"=>"Nice Connection","woman"=>true,"man"=>false,"fribourg"=>true,"avry"=>false,"bulle"=>false),
  array("marque"=>"Olymp","woman"=>false,"man"=>true,"fribourg"=>true,"avry"=>true,"bulle"=>false),
  array("marque"=>"Paoloni","woman"=>false,"man"=>true,"fribourg"=>true,"avry"=>false,"bulle"=>false),
  array("marque"=>"Parajumpers","woman"=>true,"man"=>true,"fribourg"=>true,"avry"=>true,"bulle"=>false),
  array("marque"=>"Paul & Shark","woman"=>false,"man"=>true,"fribourg"=>true,"avry"=>false,"bulle"=>false),
  array("marque"=>"Paul Smith Jeans","woman"=>false,"man"=>true,"fribourg"=>true,"avry"=>false,"bulle"=>false),
  array("marque"=>"Paul Smith London","woman"=>false,"man"=>true,"fribourg"=>true,"avry"=>false,"bulle"=>false),
  array("marque"=>"Pepe Jeans","woman"=>true,"man"=>true,"fribourg"=>false,"avry"=>true,"bulle"=>false),
  array("marque"=>"Polo Ralph Lauren","woman"=>false,"man"=>true,"fribourg"=>true,"avry"=>false,"bulle"=>false),
  // array("marque"=>"Princess","woman"=>true,"man"=>false,"fribourg"=>true,"avry"=>true,"bulle"=>false),
  array("marque"=>"Ralph Lauren","woman"=>true,"man"=>true,"fribourg"=>true,"avry"=>false,"bulle"=>false),
  array("marque"=>"Repeat","woman"=>true,"man"=>false,"fribourg"=>true,"avry"=>true,"bulle"=>false),
  array("marque"=>"René Lézard","woman"=>true,"man"=>false,"fribourg"=>true,"avry"=>false,"bulle"=>false),
  array("marque"=>"Riani","woman"=>true,"man"=>false,"fribourg"=>true,"avry"=>false,"bulle"=>false),
  // array("marque"=>"Rivieras","woman"=>false,"man"=>true,"fribourg"=>true,"avry"=>true,"bulle"=>false),
  array("marque"=>"Rosemunde","woman"=>true,"man"=>false,"fribourg"=>true,"avry"=>true,"bulle"=>true),
  array("marque"=>"Schumacher","woman"=>true,"man"=>false,"fribourg"=>true,"avry"=>false,"bulle"=>false),
  array("marque"=>"Scotch&Soda","woman"=>false,"man"=>true,"fribourg"=>false,"avry"=>true,"bulle"=>false),
  array("marque"=>"See by Chloé","woman"=>true,"man"=>false,"fribourg"=>true,"avry"=>false,"bulle"=>false),
  array("marque"=>"Set","woman"=>true,"man"=>false,"fribourg"=>true,"avry"=>true,"bulle"=>false),
  // array("marque"=>"Smarty","woman"=>false,"man"=>true,"fribourg"=>true,"avry"=>true,"bulle"=>false),
  // array("marque"=>"S'Max Mara","woman"=>true,"man"=>false,"fribourg"=>true,"avry"=>false,"bulle"=>false),
  array("marque"=>"St-Emile","woman"=>true,"man"=>false,"fribourg"=>true,"avry"=>false,"bulle"=>false),
  // array("marque"=>"Stetson","woman"=>false,"man"=>true,"fribourg"=>true,"avry"=>false,"bulle"=>false),
  // array("marque"=>"Stone Island","woman"=>false,"man"=>true,"fribourg"=>true,"avry"=>false,"bulle"=>false),
  array("marque"=>"Tommy Hilfiger","woman"=>true,"man"=>true,"fribourg"=>true,"avry"=>true,"bulle"=>false),
  array("marque"=>"Tommy Tailored","woman"=>false,"man"=>true,"fribourg"=>true,"avry"=>true,"bulle"=>false),
  // array("marque"=>"Tosca Blu","woman"=>true,"man"=>false,"fribourg"=>true,"avry"=>true,"bulle"=>false),
  // array("marque"=>"Van Gils","woman"=>false,"man"=>true,"fribourg"=>true,"avry"=>false,"bulle"=>false),
  array("marque"=>"Van Laack","woman"=>true,"man"=>false,"fribourg"=>true,"avry"=>false,"bulle"=>false),
  array("marque"=>"Vera Mont","woman"=>true,"man"=>false,"fribourg"=>true,"avry"=>false,"bulle"=>false),
  array("marque"=>"Woolrich","woman"=>true,"man"=>true,"fribourg"=>true,"avry"=>false,"bulle"=>false),
  array("marque"=>"Zzegna","woman"=>false,"man"=>true,"fribourg"=>true,"avry"=>false,"bulle"=>false)
);

?>




<?php

foreach ($brands as $key => $value) {
?>
<div id="<?php echo $value['marque']; ?>" class='mix three columns
<?php 
	if ($value['woman']) {
		echo "woman ";
	}
	if ($value['man']) {
		echo "man ";
	}
	if ($value['fribourg']) {
		echo "fribourg ";
	}
	if ($value['avry']) {
		echo "avry ";
	}
  if ($value['bulle']) {
    echo "bulle";
  }
?>'>

<?php $imgName = str_replace(' ', '-',$value['marque']); ?>
<?php $imgName = removeAccents($imgName); ?>
<?php $imgName = strtoupper($imgName); ?>

  <img src="img/brands/<?php echo $imgName; ?>.svgz" alt="<?php echo $value['marque']; ?>">
 	<h3><?php echo $value['marque']; ?></h3>
</div>
<?php
}
?>
