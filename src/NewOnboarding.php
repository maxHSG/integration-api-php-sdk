<?php

namespace TamoJuno;

use GuzzleHttp\Exception\GuzzleException;

/**
 * Class NewOnboarding
 *
 * @package TamoJuno
 */
class NewOnboarding extends Resource
{

    /**
     * @return string
     */
    public function endpoint(): string
    {
        return 'onboarding/link-request';
    }

    /**
     * @param array $form_params
     *
     * @return object
     * @throws GuzzleException
     */
    public function createOnboardingWhiteLabel(array $form_params = [])
    {
        return $this->create($form_params);
    }
}
