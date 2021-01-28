<?php

class Database {
    private $host = DB['HOST'];
    private $user = DB['USUARIO'];
    private $pass = DB['SENHA'];
    private $db = DB['BANCO'];
    private $port = DB['PORTA'];
    private $dbh;
    private $stmt;

    public function __construct() {
        $dsn = 'mysql:host='.$this->host.';port='.$this->port.';dbname='.$this->db;
        $opcoes = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        try {
            $this->dbh = new PDO( $dsn, $this->user, $this->pass, $opcoes );
        } catch ( PDOException $e ) {
            print 'Erro! :'.$e->getMessage().'<br>';
            die();
        }
    }

    public function query( $sql ) {
        $this->stmt = $this->dbh->prepare( $sql );
    }

    public function bind($parametro, $valor, $tipo = null) {
        if(is_null($tipo)) {
            switch(true) {
                case is_int($valor):
                    $tipo = PDO::PARAM_INT;
                break;

                case is_bool($valor):
                    $tipo = PDO::PARAM_BOOL;
                break;

                case is_null($valor):
                    $tipo = PDO::PARAM_NULL;
                break;

                default:
                    $tipo = PDO::PARAM_STR;
            }
        }

        $this->stmt->bindValue($parametro, $valor, $tipo);
    }

    public function executar() {
        return $this->stmt->execute();
    }

    public function resultado() {
        $this->stmt->execute();
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }

    public function resultados() {
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function totalResults() {
        return $this->stmt->rowCount();
    }

    public function ultimoIdInserido() {
        return $this->dbh->lastInsertId();
    }
}