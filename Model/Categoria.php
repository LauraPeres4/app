<?php

namespace App\Model;

use App\DAO\CategoriaDAO;
use Exception;

final class Categoria extends Model
{
    public ?int $Id = null;

    public ?string $Nome
    {
        set 
        {
            if(strlen($value) < 3)
                throw new Exception("Nome deve ter no mínimo 3 caracteres.");

                $this->Nome = $value;
        }

        get => $this->Nome ?? null;
    }

    public ?string $Descricao
    {
        set
        {
            if(empty($value))
                throw new Exception("Insira a descrição:");

                $this->Descricao = $value;
        }

        get => $this->Descricao ?? null;
    }


    function save() : Categoria
    {
        return new CategoriaDAO()->save($this);

    }

    function getById(int $id) : ?Categoria
    {
        return new CategoriaDAO()->selectById($id);
    }

    function getAllRows() : array
    {
        $this->rows = new CategoriaDAO()->select();

        return $this->rows;
    }

    function delete(int $id) : bool
    {
        return new CategoriaDAO()->delete($id);
    }
    

}