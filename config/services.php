<?php
use Zend\ServiceManager\ServiceManager;
use App\Command\MyCommand;

return [
    'factories' => [
        MyCommand::class => function (ServiceManager $serviceManager) {
            return new MyCommand();
        },
    ],
];
