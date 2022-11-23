<?php 

/**
 * SharedController Controller
 * @category  Controller / Model
 */
class SharedController extends BaseController{
	
	/**
     * getcount_anggota Model Action
     * @return Value
     */
	function getcount_anggota(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM anggota";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_buku Model Action
     * @return Value
     */
	function getcount_buku(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM buku";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_peminjaman Model Action
     * @return Value
     */
	function getcount_peminjaman(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM peminjaman";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_petugas Model Action
     * @return Value
     */
	function getcount_petugas(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM petugas";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

}
