<?php
/**
 * Created by PhpStorm.
 * User: Kevin
 * Date: 2/20/2019
 * Time: 10:26 PM
 */

namespace App\Model;
class Course
{
    protected $database;
    public function __construct(\PDO $database)
    {
        $this->database = $database;
    }
    public function getCourses()
    {
        $statement = $this->database->prepare(
            'SELECT * FROM courses ORDER BY id'
        );
        $statement->execute();
        return $statement->fetchAll();
    }
}