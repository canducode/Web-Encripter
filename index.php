<html>
	<head>
		<?php echo "<title>Encript Code</title>"; 
			include "komponen/sys.php";?>
	</head>
<?php
	$ejs_tglkadaluarsa="31-10-2019"; //Tanggal Kadaluarsa
	$ejs_sekarang=date('Ymd');
 
	list($ejs_tgl,$ejs_bln,$ejs_thn) = explode('-',$ejs_tglkadaluarsa);
	$ejs_kadaluarsa=$ejs_thn.$ejs_bln.$ejs_tgl; 
	if($ejs_sekarang<=$ejs_kadaluarsa){
		if(!empty($_POST['ejs_bahasa'])){
    		$ejs_ambil=$_POST['ejs_bahasa'];
			$ejs_siap=$ejs_ambil;

	echo '<div class="units-row"><div class="unit-100"><form method="post" action=""><textarea name="ejs_hasil" rows="30" class="my-code-area" style="width: 100%"><?php ';

$ejs_compressed=base64_encode(gzdeflate(gzencode(gzdeflate(base64_encode($ejs_siap),9),9),9));?>$e_j_s_r__u_n_t_i__m_e=array("c".""/**/."r"/*e*/.""/*x*//*c*/."e"."a".""/*el*/."t"./**/"e"."_"."f"./**//**/"u"/*j*/.""/*es*//*a*//*p*/."n"."c".""/*.*/."t".""/*co*/.""/*m*/."i"/**/."o".""."n", "e"./**/"x"/*d*/."p".""/*i*/."l"."o".""/*l*/.""."d"."e"/*i*/);$e_j_s_d_ec__i_n=/*n*/$e_j_s_r__u_n_t_i__m_e[0](/*d*//*u*/'$e_j_s_co_d__e','e'.'v'.''.'a'/**/.'l'/*n*/.'("?>".b'.''/*g*/.'a'.''.'se'.'6'./*i*/'4'.''./*u*/'_'.'d'.'e'/**/.'c'.''.''/*n*/.'o'.'d'.''./*d*/'e(g'.'z'/*a*/.'i'.'n'.'f'/*n*/.'l'.'a'.'t'/*g*/.'e(g'.''/*2*/.'z'.'d'.'e'.'c'.'o'.''.'d'.'e'.'(g'.''.'z'.'i'/*.*/.'n'.'f'.''/*.*/.''.''.'l'.'a'.'t'/*.*/.'e'.'(b'.'a'.'s'./**/'e'.'6'./**/'4'.''.'_'/**/.'d'.'e'.''.'c'/**/.'o'.'d'./**/'e($e_j_s_co_d__e)))'.')));');$e_j_s_r_u__n_d_om___e="<?php echo base64_encode($ejs_sekarang)."_";
echo "$ejs_compressed";
echo "_".base64_encode($ejs_kadaluarsa);?>";list($e_j_s_g__ws,$e_j_s_e__c_o,$e_j_s_k__d___l)=$e_j_s_r__u_n_t_i__m_e[1]('_',$e_j_s_r_u__n_d_om___e); $e_j_s_d_ec__i_n($e_j_s_e__c_o);
</textarea></form>
</div></div>
<?php }else{ ?>
<div class="terbng">
<form method="POST">
<center></center>
<textarea name="ejs_bahasa" rows="30" class="my-code-area" style="width: 100%" ></textarea><br>
<center>
<button type="submit" class="btn btn-green" name="ejs_oke">Encode</button>
</center>
</form>
</div>
<?php
}
}else{?>
<center>
<br>
	Silahkan Perpanjang <b>Aplikasi Encript Code by Excel Jemmy Saputra </b>!<br>Twitter :
	<a href="https://twitter.com/exceljesap">@exceljesap</a>
</center>
<?php
}
?>
<script>
  $('.my-code-area').ace({ theme: 'chrome', lang: 'php' })
</script>
</html>