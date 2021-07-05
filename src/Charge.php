<?php

namespace TamoJuno;

use GuzzleHttp\Exception\GuzzleException;

/**
 * Class Charge
 *
 * @package TamoJuno
 */
class Charge extends Resource
{

    /**
     * @return string
     */
    public function endpoint(): string
    {
        return 'charges';
    }

    /**
     * @param array $form_params
     *
     * @return object
     * @throws GuzzleException
     */
    public function createCharge(array $form_params = [])
    {
        return $this->create($form_params);
    }
}
