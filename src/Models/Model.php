<?php

namespace App\Models;

use App\DB;

abstract class Model {
    public static $table;

    public static function all(){
        $db = new DB();
        return $db->all(static::$table, static::class);
    }

    public function save() {
        $fields = get_object_vars($this);
        unset($fields['id']);
        $db = new DB();
        $db->insert(static::$table, $fields);
    }
}