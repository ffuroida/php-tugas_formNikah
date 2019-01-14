<?php
	$fnama				    = ucwords($_POST['fnama']);
    $ttllaki				= ucwords($_POST['ttllaki']);
    $binlaki				= ucwords($_POST['binlaki']);
	$lalamat				= ucwords($_POST['lalamat']);
	$asal_negara			= ucwords($_POST['asal_negara']);
	$agamalaki				= ucwords($_POST['agamalaki']);
	$pkrlaki				= ucwords($_POST['pkrlaki']);
	$statuslaki				= ucwords($_POST['statuslaki']);
	$jmlistri				= ucwords($_POST['jmlistri']);
	$statuslaki			    = ucwords($_POST['statuslaki']);
    $jmlistri			    = ucwords($_POST['jmlistri']);
	$mantan_istri	        = ucwords($_POST['mantan_istri']);
	

//	//WANITA
	$fnamapr				= ucwords($_POST['fnamapr']);
	$tempat_ttlpr			= ucwords($_POST['tempat_ttlpr']);
    $binpr				    = ucwords($_POST['binpr']);
	$lalamatpr			    = ucwords($_POST['lalamatpr']);
	$asal_negarapr			= ucwords($_POST['asal_negarapr']);
	$agamapr				= ucwords($_POST['agamapr']);
	$pkrpr					= ucwords($_POST['pkrpr']);
	$statuspr				= ucwords($_POST['statuspr']);
	$mantan_suami				= ucwords($_POST['mantan_suami']);

	

	// //ORTU PRIA (AYAH)
	 $ortulaki		        = ucwords($_POST['ortulaki']);
	 $tempat_ttlortulaki	    = ucwords($_POST['tempat_ttlortulaki']);
	 $ortulalamatlaki      	= ucwords($_POST['ortulalamatlaki']);
	 $asal_negaraortulaki	= ucwords($_POST['asal_negaraortulaki']);
	 $agamaortulaki			= ucwords($_POST['agamaortulaki']);

	 //ORTU PRIA (IBU)
	 $ortupr		        = ucwords($_POST['ortupr']);
	 $tempat_ttlortupr		= ucwords($_POST['tempat_ttlortupr']);
	 $ortulalamatpr	        = ucwords($_POST['ortulalamatpr']);
	 $asal_negaraortupr     = ucwords($_POST['asal_negaraortupr']);
	 $agamaortupr			= ucwords($_POST['agamaortupr']);
	 $pkrortupr			= ucwords($_POST['pkrortupr']);


	 //ORTU WANITA (AYAH)
	 $ortulaki_pr			= ucwords($_POST['ortulaki_pr']);
	 $tempat_ttlortulaki_pr			= ucwords($_POST['tempat_ttlortulaki_pr']);
	 $ortulalamatlaki_pr		= ucwords($_POST['ortulalamatlaki_pr']);
	 $asal_negaraortulaki_pr	= ucwords($_POST['asal_negaraortulaki_pr']);
	 $agamaortulaki_pr				= ucwords($_POST['agamaortulaki_pr']);
	 $pkrortulaki_pr			= ucwords($_POST['pkrortulaki_pr']);

	 //ORTU WANITA (IBU)
	 $ortupr_pr			= ucwords($_POST['ortupr_pr']);
	 $tempat_ttlortupr_pr		= ucwords($_POST['tempat_ttlortupr_pr']);
	 $ortulalamatpr_pr	= ucwords($_POST['ortulalamatpr_pr']);
	 $asal_negaraortupr_pr	= ucwords($_POST['asal_negaraortupr_pr']);
	 $agamaortupr_pr		= ucwords($_POST['agamaortupr_pr']);
	 $pkrortupr_pr			= ucwords($_POST['pkrortupr_pr']);

//	 //catin istri
//	 $fnama_wistri				= ucwords($_POST['fnama_wistri']);
//	 $bin_wistri			= ucwords($_POST['bin_wistri']);
//	 $ttllaki_wistri		= ucwords($_POST['ttllaki_wistri']);
//	 $lalamat_wistri		= ucwords($_POST['lalamat_wistri']);
//	 $agamalaki_wistri			= ucwords($_POST['agamalaki_wistri']);
//	 $pkrlaki_wistri	= ucwords($_POST['pkrlaki_wistri']);
//     $asal_negara_wistri	= ucwords($_POST['asal_negara_wistri']);

//Detail
    $tanggal				= ucwords($_POST['tanggal']);
    $hariini				= ucwords($_POST['hariini']);
    $jam				    = ucwords($_POST['jam']);
    $maskawin				= ucwords($_POST['maskawin']);
    $dibayar				= ucwords($_POST['dibayar']);
    $tmptnikah				= ucwords($_POST['tmptnikah']);
    $kecamatan			    = ucwords($_POST['kecamatan']);
    $kelurahan				= ucwords($_POST['kelurahan']);
    $kabupaten				= ucwords($_POST['kabupaten']);

	// //SAKSI 2
	// $saksi2_ktp				= ucwords($_POST['saksi2-ktp']);
	// $saksi2_nama			= ucwords($_POST['saksi2-nama']);
	// $saksi2_tmp_lahir		= ucwords($_POST['saksi2-tmp_lahir']);
	// $saksi2_tgl_lahir		= ucwords($_POST['saksi2-tgl_lahir']);
	// $saksi2_agama			= ucwords($_POST['saksi2-agama']);
	// $saksi_tmp_tinggal		= ucwords($_POST['saksi2-tmp_lahir']);
if(isset($fnama) AND strlen($fnama)>1){
		setcookie ("save[fnama]", $fnama, time() + 300);
        setcookie ("save[ttllaki]", $ttllaki, time() + 300);
        setcookie ("save[binlaki]", $binlaki, time() + 300);
		setcookie ("save[lalamat]", $lalamat, time() + 300);
		setcookie ("save[asal_negara]", $asal_negara, time() + 300);
        setcookie ("save[agamalaki]", $agamalaki, time() + 300);
		setcookie ("save[pkrlaki]", $pkrlaki, time() + 300);
		setcookie ("save[statuslaki]", $statuslaki, time() + 300);
		setcookie ("save[jmlistri]", $jmlistri, time() + 300);
        setcookie ("save[mantan_istri]", $mantan_istri, time() + 300);
    
		setcookie ("save[fnamapr]", $fnamapr, time() + 300);
		setcookie ("save[tempat_ttlpr]", $tempat_ttlpr, time() + 300);
        setcookie ("save[binpr]", $binpr, time() + 300);
        setcookie ("save[ttlortulaki_laki]", $ttlortulaki_laki, time() + 300);
		setcookie ("save[lalamatpr]", $lalamatpr, time() + 300);
		setcookie ("save[asal_negarapr]", $asal_negarapr, time() + 300);
        setcookie ("save[agamapr]", $agamapr, time() + 300);
		setcookie ("save[pkrpr]", $pkrpr, time() + 300);
		setcookie ("save[statuspr]", $statuspr, time() + 300);
		setcookie ("save[mantan_suami]", $mantan_suami, time() + 300);
    
        setcookie ("save[ortulaki]", $ortulaki, time() + 300);
        setcookie ("save[tempat_ttlortulaki]", $tempat_ttlortulaki, time() + 300);
		 setcookie ("save[ortulalamatlaki]", $ortulalamatlaki, time() + 300);
		 setcookie ("save[asal_negaraortulaki]", $asal_negaraortulaki, time() + 300);
		 setcookie ("save[agamaortulaki]", $agamaortulaki, time() + 300);
    
		 setcookie ("save[ortupr]", $ortupr, time() + 300);
		 setcookie ("save[tempat_ttlortupr]", $tempat_ttlortupr, time() + 300);
		 setcookie ("save[ortulalamatpr]", $ortulalamatpr, time() + 300);
		 setcookie ("save[asal_negaraortupr]", $asal_negaraortupr, time() + 300);
		 setcookie ("save[agamaortupr]", $agamaortupr, time() + 300);
		 setcookie ("save[pkrortupr]", $pkrortupr, time() + 300);
    
		 setcookie ("save[ortulaki_pr]", $ortulaki_pr, time() + 300);
		 setcookie ("save[tempat_ttlortulaki_pr]", $tempat_ttlortulaki_pr, time() + 300);
		 setcookie ("save[ortulalamatlaki_pr]", $ortulalamatlaki_pr, time() + 300);
		 setcookie ("save[asal_negaraortulaki_pr]", $asal_negaraortulaki_pr, time() + 300);
		 setcookie ("save[agamaortulaki_pr]", $agamaortulaki_pr, time() + 300);
		 setcookie ("save[pkrortulaki_pr]", $pkrortulaki_pr, time() + 300);
		 setcookie ("save[ortupr_pr]", $ortupr_pr, time() + 300);
		 setcookie ("save[tempat_ttlortupr_pr]", $tempat_ttlortupr_pr, time() + 300);
		 setcookie ("save[ortulalamatpr_pr]", $ortulalamatpr_pr, time() + 300);
		 setcookie ("save[asal_negaraortupr_pr]", $asal_negaraortupr_pr, time() + 300);
		 setcookie ("save[agamaortupr_pr]", $agamaortupr_pr, time() + 300);
		 setcookie ("save[pkrortupr_pr]", $pkrortupr_pr, time() + 300);
         setcookie ("save[hariini]", $hariini, time() + 300);
         setcookie ("save[tanggal]", $tanggal, time() + 300);
		 setcookie ("save[jam]", $jam, time() + 300);
		 setcookie ("save[maskawin]", $maskawin, time() + 300);
		 setcookie ("save[dibayar]", $dibayar, time() + 300);
		 setcookie ("save[tmptnikah]", $tmptnikah, time() + 300);
		 setcookie ("save[kecamatan]", $kecamatan, time() + 300);
		 setcookie ("save[kelurahan]", $kelurahan, time() + 300);
		 setcookie ("save[kabupaten]", $kabupaten, time() + 300);
//		 setcookie ("save[fnama_wistri]", $fnama_wistri, time() + 300);
//		 setcookie ("save[bin_wistri]", $bin_wistri, time() + 300);
//		 setcookie ("save[ttllaki_wistri]", $ttllaki_wistri, time() + 300);
//		 setcookie ("save[lalamat_wistri]", $lalamat_wistri, time() + 300);
//		 setcookie ("save[agamalaki_wistri]", $agamalaki_wistri, time() + 300);
//		 setcookie ("save[pkrlaki_wistri]", $pkrlaki_wistri, time() + 300);
//		 setcookie ("save[asal_negara_wistri]", $asal_negara_wistri, time() + 300);
		// setcookie ("save[kecamatan]", $kecamatan, time() + 300);
		// setcookie ("save[deskel]", $deskel, time() + 300);
		// setcookie ("save[mas_kawin]", $mas_kawin, time() + 300);
		// setcookie ("save[bayar_maskawin]", $bayar_maskawin, time() + 300);
		// setcookie ("save[tgl_nikah]", $tgl_nikah, time() + 300);
		// setcookie ("save[jam_nikah]", $jam_nikah, time() + 300);
		// setcookie ("save[waktu_bagian]", $waktu_bagian, time() + 300);
		// setcookie ("save[tmp_nikah]", $tmp_nikah, time() + 300);

	}
	else{
		echo "Error";
	}

	header ("Location: preview.php"); 
