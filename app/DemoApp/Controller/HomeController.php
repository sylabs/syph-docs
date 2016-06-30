<?php
/**
 * Created by PhpStorm.
 * User: Bruno
 * Date: 12/08/2015
 * Time: 14:48
 */
namespace DemoApp\Controller;


use Syph\Controller\BaseController;
use Syph\View\View;

class HomeController extends BaseController
{

    public function index(){
        
        return View::render($this->createView('DemoApp:frontend/index.html.twig'),array());
    }

    public function documentation(){

        return View::render($this->createView('DemoApp:docs/docs.html.twig'),array());
    }

    public function download(){

        return View::render($this->createView('DemoApp:docs/download.html.twig'),array());
    }



}