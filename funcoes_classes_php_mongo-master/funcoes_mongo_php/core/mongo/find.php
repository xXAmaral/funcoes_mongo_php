<?php

    function find($filter,$options,$collection){

        require_once __DIR__."/manager.php";

        $db=new \MongoDB\Driver\Query($filter,$option);

        $cursor=$manager->executeQuery($collection,$db);
    }