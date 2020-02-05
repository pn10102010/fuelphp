<?php

/**
 * Class Controller_Listproduct
 *
 * @package app
 * @extends Controller
 */
use \Fuel\Core\Controller;
class Controller_Listproduct extends Controller
{
    /**
     * list sample product
     *
     * @return mixed
     */
    public function action_index()
    {
        return Response::forge(\Fuel\Core\View::forge('product/list'));
    }
}
