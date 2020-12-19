<?php 
	header("location:.")// thư mục hiện tại
	header("location:..")// lên thu mục cha
	header("location:./ad") //xuống thu mục ad
	
	/**
	 * summary
	 */
	class DongVat
	{
	    var $name ='i';
	    var $age='love';
	    var $weight='you';

	    function sing()
	    {
	        echo "em thich hat, em la $this->name";
	    }
	}
	$jerry = new DongVat();
	//var_dump($jerry);
	echo $jerry->name.' '.$jerry->age.' '.$jerry->weight;' '.$jerry->weight='no';

 ?>