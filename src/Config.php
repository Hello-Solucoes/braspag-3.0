<?php

namespace Braspag;

class Config
{
    CONST BASE_URI_HOMOLOG = "https://apisandbox.braspag.com.br";

    CONST BASE_URI_HOMOLOG_CONSULT = 'https://apiquerysandbox.braspag.com.br/';

    CONST BASE_URI_PROD = "https://api.braspag.com.br/";

    CONST BASE_URI_PROD_CONSULT = 'https://apiquery.braspag.com.br/';

    private $production;

    function __construct($production)
    {
    	$this->production = $production;

    }

    //
    private function testTransaction()
    {
    	return self::BASE_URI_HOMOLOG;
    }

    private function testConsult()
    {
    	return self::BASE_URI_HOMOLOG_CONSULT;
    }


   	private function prodTransaction()
    {
    	return self::BASE_URI_HOMOLOG;
    }

    private function prodConsult()
    {
    	return self::BASE_URI_PROD_CONSULT;
    }

    public function currentEnv()
    {

    	if($this->production['production'] == true && $this->production['consult'] == true )
    		return $this->prodConsult();

        if($this->production['production'] == true && $this->production['consult'] == false )
            return $this->prodTransaction();

        if($this->production['production'] == false && $this->production['consult'] == true )
            return $this->testConsult();

        if($this->production['production'] == false && $this->production['consult'] == false )
            return $this->testTransaction();

    }


}