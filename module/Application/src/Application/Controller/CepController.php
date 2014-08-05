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
        $response = $this->getResponse();
        $response->setStatusCode(200);
        $content = array('a' => 1);

        $response->getHeaders()->addHeaderLine('content-type', 'application/json');
        $response->setContent($content);

       // return $response;
    }

}
