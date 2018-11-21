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
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $this->db = $db;
    }

    /**
     * @return mixed
     */``
    public function pullTodoList()
    {
        $query = $this->db->prepare('SELECT `id`, `title`, `description`, `completed`, `deleted` FROM `todoList`;');
        $query->execute();
        return $query->fetchAll();
    }
}