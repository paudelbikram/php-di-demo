<?php

namespace SuperBlog\Controller;

use SuperBlog\Model\HouseRepository;
use Twig\Environment;

// This is different from other Controller because it only loads up needed container
class HouseController
{
    /**
     * @var HouseRepository
     */
    private $repository;

    /**
     * @var Twig_Environment
     */
    private $twig;

    public function __construct(HouseRepository $repository, Environment $twig)
    {
        $this->repository = $repository;
        $this->twig = $twig;
    }

    /**
     * Example of an invokable class, i.e. a class that has an __invoke() method.
     *
     * @see http://php.net/manual/en/language.oop5.magic.php#object.invoke
     */
    public function __invoke()
    {
        echo $this->twig->render('house.twig', [
            'houses' => $this->repository->getHouses(),
        ]);
    }
}
