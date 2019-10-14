<?php

namespace Wall\Model;

use \Wall\DB\Sql;
use \Wall\Model;
use \Wall\Mailer;

class User extends Model{

    const SESSION = "User";	

	public function save()
	{

		$sql = new Sql();

		$results = $sql->select("CALL sp_dataform_save(:desfirstname, :deslastname, :dessex, :desdate, :nrphone, :desemail, :deszipcode, :desaddress, :desnumber, :descomplement, :desdistrict, :descity, :desstate, :descountry)", 
		array(

			":desfirstname"=>$this->getdesfirstname(),
			":deslastname"=>$this->getdeslastname(),
			":dessex"=>$this->getdessex(),
			":desdate"=>$this->getdesdate(),
			":nrphone"=>$this->getnrphone(),
			":desemail"=>$this->getdesemail(),
			":deszipcode"=>$this->getdeszipcode(),
			":desaddress"=>$this->getdesaddress(),
			":desnumber"=>$this->getdesnumber(),
			":descomplement"=>$this->getdescomplement(),
			":desdistrict"=>$this->getdesdistrict(),
			":descity"=>$this->getdescity(),
			":desstate"=>$this->getdesstate(),
			":descountry"=>$this->getdescountry()
			
		));

		$this->setData($results[0]);

	}



	

    
}

?>