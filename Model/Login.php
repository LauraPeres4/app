<?php
    namespace AulaThiagotas\Model;

    use AulaThiagotas\DAO\LoginDAO;
    use Exception;

    final class Login extends Model
    {
        public $Id, $Email, $Senha, $Nome;

    public function logar() : ?Login
    {
        return new LoginDAO()->autenticar($this);
    }

    }

?>