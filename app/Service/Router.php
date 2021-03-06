<?php
namespace App\Service;

use Core\Service\DIC;

/**
 * Class Router
 * @package App\Service
 *
 * Spécialisation du router pour injecter une instance de \Core\Service\DIC
 */
class Router extends \Core\Service\Router
{

    /**
     * @var DIC $dic
     */
    private $dic;

    /**
     * Router constructor.
     * @param DIC $dic
     */
    public function __construct(DIC $dic){
        $this->setDIC($dic);
    }


    ////METHODS

    /**
     * En plus de la fonction parent, renvoie vers la page 404 du blog si aucune route ne correspond
     *
     * @param \Core\Service\URL $uri
     * @return mixed
     */
    public function execute($uri)
    {
        try{
            return parent::execute($uri);
        }catch(\Exception $e){
            $controller = $this->getDIC()->get('Controller\Blog');
            $controller->notFound();
        }
    }


    ////SETTERS

    /**
     * @param DIC $dic
     */
    public function setDIC(DIC $dic){
        $this->dic = $dic;
    }


    ////GETTERS

    /**
     * @return DIC
     */
    public function getDIC(){
        return $this->dic;
    }

}
