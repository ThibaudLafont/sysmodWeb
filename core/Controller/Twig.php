<?php
/**
 * Created by PhpStorm.
 * User: thib
 * Date: 01/10/17
 * Time: 19:04
 */

namespace Core\Controller;


abstract class Twig extends \Core\Controller\Controller
{

    private $twig;

    public function __construct(\Twig_Environment $twig){
        $this->twig = $twig;
    }

    public function render($view, $variables){
        $view .= '.twig';
        echo $this->twig->render($view, $variables);
    }

}