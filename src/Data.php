<?php

namespace TamoJuno;

use GuzzleHttp\Exception\GuzzleException;

/**
 * Class Data
 *
 * @package TamoJuno
 */
class Data extends Resource
{
    /**
     * @return string
     */
    public function endpoint(): string
    {
        return 'data';
    }

    /**
     * @return object
     * @throws GuzzleException
     */
    public function getBanks()
    {
        return $this->get('banks');
    }

    /**
     * @return object
     * @throws GuzzleException
     */
    public function getCompanyTypes()
    {
        return $this->get('company-types');
    }

    /**
     * @return object
     * @throws GuzzleException
     */
    public function getBusinessAreas()
    {
        return $this->get('business-areas');
    }
}
