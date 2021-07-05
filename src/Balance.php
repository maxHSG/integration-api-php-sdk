<?php

namespace TamoJuno;

/**
 * Class Balance
 *
 * @package TamoJuno
 */
class Balance extends Resource
{

    /**
     * @return string
     */
    public function endpoint(): string
    {
        return 'balance';
    }

    /**
     * @return mixed
     */
    public function retrieveBalance()
    {
        return $this->all();
    }
}
