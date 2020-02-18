<?php


namespace App\Http\services\Users;


interface ServiceInterface
{
    function getAll();

    function create($request);

    function update($request, $id);

    function destroy($id);

    function findById($id);
}
