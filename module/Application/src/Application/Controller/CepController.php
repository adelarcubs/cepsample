<?php

/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractRestfulController;

class CepController extends AbstractRestfulController {

    public function get($id) {
        $content = array(
            "CEP" => $id,
            "Lagradouro" => null,
            "Bairro" => null,
            "Cidade" => null,
            "Estado" => null
        );
        /**
         * You may centralized this process through controller's event callback handler
         */
        $format = $this->getEvent()->getRouteMatch()->getParam('format');
        $response = $this->getResponse();
        if ($format == 'json') {
            $contentType = 'application/json';
            $adapter = '\Zend\Serializer\Adapter\Json';
        }
        // continue for xml, amf etc.
        $response->setStatusCode(200);
        $response->getHeaders()->addHeaderLine('Content-Type', $contentType);
        $adapter = new $adapter;
        $response->setContent($adapter->serialize($content));

        return $response;
    }

}
