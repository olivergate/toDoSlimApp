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

    /**
     * pullTodoList() pulls the todo list information
     * @return mixed
     */
    public function pullTodoList() : array
    {
        $query = $this->db->prepare('SELECT `id`, `title`, `description`, `completed`, `deleted` FROM `todoList`;');
        $query->execute();
        return $query->fetchAll();
    }

    public function assignCompleted($id) : int
    {
        $query  = $this->db->prepare("UPDATE `todoList` SET `completed` = 1 WHERE `id` = '$id';");
//        $query->bindParams(':id', $id);
        return $query->execute();
    }

    public function assignDeleted()
    {
        
    }
}