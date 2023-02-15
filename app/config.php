<?php

use function DI\create;
use function DI\get;
use SuperBlog\Model\ArticleRepository;
use SuperBlog\Persistence\InMemoryArticleRepository;
use SuperBlog\Model\HouseRepository;
use SuperBlog\Persistence\InMemoryHouseRepository;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;
use SuperBlog\Persistence\HouseCache;

return [

    HouseCache::class => function(){
        return new HouseCache();
    },
    // Bind an interface to an implementation
    ArticleRepository::class => create(InMemoryArticleRepository::class),
    HouseRepository::class => create(InMemoryHouseRepository::class)
                        ->constructor(get(HouseCache::class)),


    // Configure Twig
    Environment::class => function () {
        $loader = new FilesystemLoader(__DIR__ . '/../src/SuperBlog/Views');
        return new Environment($loader);
    },

    
];
