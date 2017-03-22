<?php
/**
 * Created by PhpStorm.
 * User: Yoan
 * Date: 22/03/2017
 * Time: 18:11
 */

namespace Marketing\Endpoints;


trait Facebook
{
    protected $response;

    public abstract function getUser();

    public abstract function getFacebook();

    public function campaigns()
    {
        return json_encode(['data' => [['name' => 'Testing Campaign Name'], ['name' => 'Testing Campaign Name']]]);
    }

    public function accounts()
    {
        return json_encode(['data' => $this->getUser()]);
    }
}