<?php
/**
 * Created by PhpStorm.
 * User: academy
 * Date: 21/11/2018
 * Time: 13:24
 */

namespace Classes\Models;


class TodoModel
{
    private $db;
    public function __construct($db)
    {
        $this->db = $db;
    }

}