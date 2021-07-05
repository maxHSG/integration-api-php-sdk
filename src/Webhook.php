<?php

namespace TamoJuno;

/**
 * Class Webhook
 *
 * @package TamoJuno
 */
class Webhook extends Resource
{

    /**
     * @return string
     */
    public function endpoint(): string
    {
        return 'notifications/webhooks';
    }

    /**
     * @param array $form_params
     *
     * @return mixed|object
     */
    public function create(array $form_params = [])
    {
        return $this->create($form_params);
    }
}
