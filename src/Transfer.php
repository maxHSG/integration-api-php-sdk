<?php

namespace TamoJuno;

use GuzzleHttp\Exception\GuzzleException;

/**
 * Class Transfer
 *
 * @package TamoJuno
 */
class Transfer extends Resource
{

    /**
     * @return string
     */
    public function endpoint(): string
    {
        return 'transfers';
    }

    /**
     * @param array $form_params
     *
     * @return object
     * @throws GuzzleException
     */
    public function createTransfer(array $form_params = [])
    {
        return $this->create($form_params);
    }
}
