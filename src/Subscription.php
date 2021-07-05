<?php

namespace TamoJuno;

use GuzzleHttp\Exception\GuzzleException;

/**
 * Class Subscription
 *
 * @package TamoJuno
 */
class Subscription extends Resource
{

    /**
     * @return string
     */
    public function endpoint(): string
    {
        return 'subscriptions';
    }

    /**
     * @param array $form_params
     *
     * @return object
     * @throws GuzzleException
     */
    public function createSubscription(array $form_params = [])
    {
        return $this->create($form_params);
    }

    /**
     * @param $id
     * @param array $form_params
     *
     * @return object
     * @throws GuzzleException
     */
    public function simulation($id, array $form_params = [])
    {
        return $this->post($id, 'simulation', $form_params);
    }

    /**
     * @param $id
     * @param array $form_params
     *
     * @return object
     * @throws GuzzleException
     */
    public function activation($id, array $form_params = [])
    {
        return $this->post($id, 'activation', $form_params);
    }

    /**
     * @param $id
     * @param array $form_params
     *
     * @return object
     * @throws GuzzleException
     */
    public function deactivation($id, array $form_params = [])
    {
        return $this->post($id, 'deactivation', $form_params);
    }

    /**
     * @param $id
     * @param array $form_params
     *
     * @return object
     * @throws GuzzleException
     */
    public function cancelation($id, array $form_params = [])
    {
        return $this->post($id, 'cancelation', $form_params);
    }

    /**
     * @param $id
     * @param array $form_params
     *
     * @return object
     * @throws GuzzleException
     */
    public function completion($id, array $form_params = [])
    {
        return $this->post($id, 'completion', $form_params);
    }

    /**
     * @param $id
     *
     * @return object
     * @throws GuzzleException
     */
    public function getSubscription($id)
    {
        return $this->retrieve($id);
    }

    /**
     * @return mixed
     */
    public function getSubscriptions()
    {
        return $this->retrieveAll();
    }
}
