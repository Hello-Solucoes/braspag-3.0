<?php

namespace Braspag;

class Config
{
    CONST BASE_URI_HOMOLOG = "https://apisandbox.braspag.com.br";

    CONST BASE_URI_HOMOLOG_CONSULT = 'https://apiquerysandbox.braspag.com.br/';

    CONST BASE_URI_PROD = "https://api.braspag.com.br/";

    CONST BASE_URI_PROD_CONSULT = 'https://apiquery.braspag.com.br/';

    /**
     * @var $production
     */
    private $production;

    /**
     * @param $production
     */
    function __construct($production)
    {
    	$this->production = $production;

    }

    /**
     * @return string
     */
    private function testTransaction()
    {
    	return self::BASE_URI_HOMOLOG;
    }

    /**
     * @return string
     */
    private function testConsult()
    {
    	return self::BASE_URI_HOMOLOG_CONSULT;
    }

    /**
     * @return string
     */
   	private function prodTransaction()
    {
    	return self::BASE_URI_HOMOLOG;
    }

    /**
     * @return string
     */
    private function prodConsult()
    {
    	return self::BASE_URI_PROD_CONSULT;
    }

    /**
     * @return string|void
     */
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