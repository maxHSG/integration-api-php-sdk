<?php

namespace TamoJuno;

use GuzzleHttp\Exception\GuzzleException;

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
     * @return object
     * @throws GuzzleException
     */
    public function createWebhook(array $form_params = [])
    {
        return $this->create($form_params);
    }
}
