<?php


namespace App\Http\Repositories;


interface RepoInterface
{
    function getAll();
    function storeOrUpdate($obj);
    function delete($obj);
    function findById($id);
}
