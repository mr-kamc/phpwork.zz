<?php

namespace App;


abstract class Model {

    const TABLE = '';

    public function findAll()
    {
        $db = new Db();
        return $db->query(
            'SELECT * FROM ' . static::TABLE,
            static::class
        );

    }

} 