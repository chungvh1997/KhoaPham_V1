<?php 


// Hàm xu?t chu?i or s? ng?u nhiên

// function chuoingaunhien($sokytu,$kieu=3){ 
//     if($kieu==1){$chuoi="ABCDEFGHIJKLMNOPQRSTUVWXYZWabcdefghijklmnopqrstuvwxyzw";}
//     elseif($kieu==2){$chuoi="0123456789";}
//     elseif($kieu==3){$chuoi="ABCDEFGHIJKLMNOPQRSTUVWXYZWabcdefghijklmnopqrstuvwxyzw0123456789";}
//     for ($i=0; $i < $sokytu; $i++){
//         $vitri = mt_rand(0,strlen($chuoi));
//         $giatri= $giatri.substr($chuoi,$vitri,1 );
//     }
//     return $giatri;
// }

// END Hàm xu?t chu?i or s? ng?u nhiên

// C?t chu?i tùy bi?n ...

// function thunho($noidung,$num){
//     $limit = $num - 1 ;
//     $str_tmp = '';
//     $arrstr = explode(" ", $noidung);
//     if ( count($arrstr) <= $num ) { return $noidung; }
//     if (!empty($arrstr)) {
//     for ( $j=0; $j< count($arrstr) ; $j++) {
//     $str_tmp .= " " . $arrstr[$j];
//     if ($j == $limit)
//     { break; }
//     }
//     }
//     return $str_tmp.'...';
//     } 

// END c?t chu?i tùy bi?n

//Hàm c?t d?u 

// function stripunicode($str){ 
//     if(!$str) return false;
//     $unicode = array('a'=>'á|à|?|ã|?|?|?|?|?|?|?|â|?|?|?|?|?',
//                      'A'=>'Á|À|?|Ã|?|?|?|?|?|?|?|Â|?|?|?|?|?',
//                      'd'=>'?','D'=>'?',
//                      'e'=>'é|è|?|?|?|ê|?|?|?|?|?',
//                      'E'=>'É|È|?|?|?|Ê|?|?|?|?|?',
//                      'i'=>'í|ì|?|?|?',
//                      'I'=>'Í|Ì|?|?|?',
//                      'o'=>'ó|ò|?|õ|?|ô|?|?|?|?|?|?|?|?|?|?|?',
//                      'O'=>'Ó|Ò|?|Õ|?|Ô|?|?|?|?|?|?|?|?|?|?|?',
//                      'u'=>'ú|ù|?|?|?|?|?|?|?|?|?',
//                      'U'=>'Ú|Ù|?|?|?|?|?|?|?|?|?',
//                      'y'=>'ı|?|?|?|?','Y'=>'İ|?|?|?|?');
//     foreach($unicode as $khongdau=>$codau) {
//         $arr=explode("|",$codau);$str = str_replace($arr,$khongdau,$str);
//     }
// return $str;
// }

//END Hàm c?t d?u


//Hàm c?t b? kí t? ??c bi?t thay vào ?ó là d?u -

// function stripSpecial($str){
//     $arr=array(",","$","!","?","&",'"',"'","+","%","^");
//     $str=str_replace($arr,"",$str);
//     $str=trim($str);
//     while (strpos($str,"  ")>0) $str = str_replace("  "," ",$str);
//     $str = str_replace(" ","-",$str);
//     return $str;
// }
// echo stripSpecial("$ chung % &Hàm c?t b? kí t? ??c bi?t thay vào ?ó là d?u");

//END Hàm c?t b? kí t? ??c bi?t thay vào ?ó là d?u -

//TITLE Hàm c?t b? d?u ti?ng vi?t , lo?i b? d?u ti?ng vi?t ++ k?t h?p v?i hàm stripSpecial($str) bên trên

// function changTitle($str){
//     $str= stripSpecial($str);
//     $str=stripunicode($str);
//     $str = mb_convert_case($str , MB_CASE_LOWER , 'utf-8');
//     return $str;
// }
// $str = "ITLE Hàm c?t b? AWDAWDJWDAWJ      awdawd d?u ti?ng vi?t^&^ , lo?i b? d?u%^&%^&( ti?ng vi?t ++ k?t h?p v?i hàm stripSpecial bên trên";
// echo changTitle($str);

//End Hàm c?t b? d?u ti?ng vi?t , lo?i b? d?u ti?ng vi?t 



// C1 Hàm chuy?n ngày tháng , Day sang  Ti?ng vi?t


// function rebuild_date( $format, $time = 0 )
// {
//     if ( ! $time ) $time = time();

// 	$lang = array();
// 	$lang['sun'] = 'CN';
// 	$lang['mon'] = 'T2';
// 	$lang['tue'] = 'T3';
// 	$lang['wed'] = 'T4';
// 	$lang['thu'] = 'T5';
// 	$lang['fri'] = 'T6';
// 	$lang['sat'] = 'T7';
// 	$lang['sunday'] = 'Ch? nh?t';
// 	$lang['monday'] = 'Th? hai';
// 	$lang['tuesday'] = 'Th? ba';
// 	$lang['wednesday'] = 'Th? t?';
// 	$lang['thursday'] = 'Th? n?m';
// 	$lang['friday'] = 'Th? sáu';
// 	$lang['saturday'] = 'Th? b?y';
// 	$lang['january'] = 'Tháng M?t';
// 	$lang['february'] = 'Tháng Hai';
// 	$lang['march'] = 'Tháng Ba';
// 	$lang['april'] = 'Tháng T?';
// 	$lang['may'] = 'Tháng N?m';
// 	$lang['june'] = 'Tháng Sáu';
// 	$lang['july'] = 'Tháng B?y';
// 	$lang['august'] = 'Tháng Tám';
// 	$lang['september'] = 'Tháng Chín';
// 	$lang['october'] = 'Tháng M??i';
// 	$lang['november'] = 'Tháng M. m?t';
// 	$lang['december'] = 'Tháng M. hai';
// 	$lang['jan'] = 'T01';
// 	$lang['feb'] = 'T02';
// 	$lang['mar'] = 'T03';
// 	$lang['apr'] = 'T04';
// 	$lang['may2'] = 'T05';
// 	$lang['jun'] = 'T06';
// 	$lang['jul'] = 'T07';
// 	$lang['aug'] = 'T08';
// 	$lang['sep'] = 'T09';
// 	$lang['oct'] = 'T10';
// 	$lang['nov'] = 'T11';
// 	$lang['dec'] = 'T12';

//     $format = str_replace( "r", "D, d M Y H:i:s O", $format );
//     $format = str_replace( array( "D", "M" ), array( "[D]", "[M]" ), $format );
//     $return = date( $format, $time );

//     $replaces = array(
//         '/\[Sun\](\W|$)/' => $lang['sun'] . "$1",
//         '/\[Mon\](\W|$)/' => $lang['mon'] . "$1",
//         '/\[Tue\](\W|$)/' => $lang['tue'] . "$1",
//         '/\[Wed\](\W|$)/' => $lang['wed'] . "$1",
//         '/\[Thu\](\W|$)/' => $lang['thu'] . "$1",
//         '/\[Fri\](\W|$)/' => $lang['fri'] . "$1",
//         '/\[Sat\](\W|$)/' => $lang['sat'] . "$1",
//         '/\[Jan\](\W|$)/' => $lang['jan'] . "$1",
//         '/\[Feb\](\W|$)/' => $lang['feb'] . "$1",
//         '/\[Mar\](\W|$)/' => $lang['mar'] . "$1",
//         '/\[Apr\](\W|$)/' => $lang['apr'] . "$1",
//         '/\[May\](\W|$)/' => $lang['may2'] . "$1",
//         '/\[Jun\](\W|$)/' => $lang['jun'] . "$1",
//         '/\[Jul\](\W|$)/' => $lang['jul'] . "$1",
//         '/\[Aug\](\W|$)/' => $lang['aug'] . "$1",
//         '/\[Sep\](\W|$)/' => $lang['sep'] . "$1",
//         '/\[Oct\](\W|$)/' => $lang['oct'] . "$1",
//         '/\[Nov\](\W|$)/' => $lang['nov'] . "$1",
//         '/\[Dec\](\W|$)/' => $lang['dec'] . "$1",
//         '/Sunday(\W|$)/' => $lang['sunday'] . "$1",
//         '/Monday(\W|$)/' => $lang['monday'] . "$1",
//         '/Tuesday(\W|$)/' => $lang['tuesday'] . "$1",
//         '/Wednesday(\W|$)/' => $lang['wednesday'] . "$1",
//         '/Thursday(\W|$)/' => $lang['thursday'] . "$1",
//         '/Friday(\W|$)/' => $lang['friday'] . "$1",
//         '/Saturday(\W|$)/' => $lang['saturday'] . "$1",
//         '/January(\W|$)/' => $lang['january'] . "$1",
//         '/February(\W|$)/' => $lang['february'] . "$1",
//         '/March(\W|$)/' => $lang['march'] . "$1",
//         '/April(\W|$)/' => $lang['april'] . "$1",
//         '/May(\W|$)/' => $lang['may'] . "$1",
//         '/June(\W|$)/' => $lang['june'] . "$1",
//         '/July(\W|$)/' => $lang['july'] . "$1",
//         '/August(\W|$)/' => $lang['august'] . "$1",
//         '/September(\W|$)/' => $lang['september'] . "$1",
//         '/October(\W|$)/' => $lang['october'] . "$1",
//         '/November(\W|$)/' => $lang['november'] . "$1",
//         '/December(\W|$)/' => $lang['december'] . "$1" );

//     return preg_replace( array_keys( $replaces ), array_values( $replaces ), $return );
// }

// $contents .= 'Th?i gian hi?n t?i: ' . rebuild_date('H:i d/m/Y' ) . '<br />';
// $contents .= 'Th? hi?n t?i: ' . rebuild_date('l' ) . '<br />';
// $contents .= 'Tháng hi?n t?i: ' . rebuild_date('F' ) . '<br />';

// $time = 1444954852;
// $contents .= '<br /><br />Timestamp: ' . $time . '<br />';
// $contents .= 'Th?i gian: ' . rebuild_date('H:i d/m/Y', $time ) . '<br />';
// $contents .= 'Th?: ' . rebuild_date('l', $time ) . '<br />';
// $contents .= 'Tháng: ' . rebuild_date('F', $time ) . '<br />';

// echo $contents;
// End  C1 Hàm chuy?n ngày tháng , Day sang  Ti?ng vi?t
// C2 Hàm chuy?n ngày tháng , Day sang  Ti?ng vi?t
// //L?i
// function timenow(){
//     $anh =array("Mon","Tue","Wed","Thu","Fri","Sat","Sun","am","pm",":");
//     $viet=array("Th? 2","Th? 3","Th? 4","Th? 5","Th? 6","Th? 7","Ch? Nh?t"," phút, sáng"," phút, chi?u"," gi? ");
//     $timenow1 = gmdate("D, d/m/Y - g:i a.", time() + 7*3600);
//     $t= str_replace($anh,$viet,$timenow1);
// }
// $str = timenow();
// print_r($str);
// C2 Hàm chuy?n ngày tháng , Day sang  Ti?ng vi?t
?>