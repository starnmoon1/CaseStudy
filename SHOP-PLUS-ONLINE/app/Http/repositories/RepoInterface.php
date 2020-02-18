<?php


namespace App\Http\repositories;


interface RepoInterface
{
    function getAll();
    function storeOrUpdate($obj);
    function delete($obj);
    function findById($id);
}
