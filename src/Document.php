<?php

namespace TamoJuno;

use GuzzleHttp\Exception\GuzzleException;

/**
 * Class Document
 *
 * @package TamoJuno
 */
class Document extends Resource
{
    /**
     * @return string
     */
    public function endpoint(): string
    {
        return 'documents';
    }

    /**
     * @return object
     * @throws GuzzleException
     */
    public function getDocuments()
    {
        return $this->all();
    }

    /**
     * @param $id
     *
     * @return object
     * @throws GuzzleException
     */
    public function getDocument($id)
    {
        return $this->retrieve($id);
    }

    /**
     * @param $id
     * @param array $form_params
     *
     * @return object
     * @throws GuzzleException
     */
    public function uploadDocuments($id = null, array $form_params = [])
    {
        return $this->post($id, 'files', $form_params, 'multipart');
    }
}
