<?php

use Cake\ORM\Entity;

class Article extends Entity{

    protected $_accessoble = [
        '*' => true,
        'id' => false,
        'slug' => false
    ];
}


?>