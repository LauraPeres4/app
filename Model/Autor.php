<?php

namespace App\Model;

use App\DAO\AutorDAO;
use Exception;

final class Autor extends Model
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

    public ?string $Data_Nascimento
    {
        set
        {
            if(empty($value))
                throw new Exception("Preencha a data de nascimento do autor: ");

                $this->Data_Nascimento = $value;
        }

        get => $this->Data_Nascimento ?? null;
    }

    public ?string $CPF
    {
        set
        {
            if(strlen($value) < 3)
                throw new Exception("Preencha corretamente");

                $this->CPF = $value;
        }

        get => $this->CPF ?? null;
    }

    function save() : Autor
    {
        return new AutorDAO()->save($this);

    }

    function getById(int $id) : ?Autor
    {
        return new AutorDAO()->selectById($id);
    }

    function getAllRows() : array
    {
        $this->rows = new AutorDAO()->select();

        return $this->rows;
    }

    function delete(int $id) : bool
    {
        return new AutorDAO()->delete($id);
    }
    

}