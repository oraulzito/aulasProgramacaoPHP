<?php


class MySQL
{
    private string $endereco;
    private string $login;
    private string $senha;
    private string $database;

    private PDO $con;
    private string $table;
    private string $where;
    private array $data;

    /**
     * MySQL constructor.
     * @param string $endereco
     * @param string $login
     * @param string $senha
     * @param string $database
     */
    public function __construct(string $endereco, string $login, string $senha, string $database)
    {
        $this->endereco = $endereco;
        $this->login = $login;
        $this->senha = $senha;
        $this->database = $database;

        $this->con = $this->conexao();

        $this->data = [];
        $this->table = '';
        $this->where = '';
    }

    /**
     * @return string
     */
    public function getEndereco(): string
    {
        return $this->endereco;
    }

    /**
     * @param string $endereco
     */
    public function setEndereco(string $endereco): void
    {
        $this->endereco = $endereco;
    }

    /**
     * @return string
     */
    public function getLogin(): string
    {
        return $this->login;
    }

    /**
     * @param string $login
     */
    public function setLogin(string $login): void
    {
        $this->login = $login;
    }

    /**
     * @return string
     */
    public function getSenha(): string
    {
        return $this->senha;
    }

    /**
     * @param string $senha
     */
    public function setSenha(string $senha): void
    {
        $this->senha = $senha;
    }

    /**
     * @return string
     */
    public function getDatabase(): string
    {
        return $this->database;
    }

    /**
     * @param string $database
     */
    public function setDatabase(string $database): void
    {
        $this->database = $database;
    }

    public function conexao(): PDO
    {
        return new PDO('mysql:host=' . $this->getEndereco() . ';dbname=' . $this->getDatabase(), $this->getLogin(), $this->getSenha());
    }

    public function findFirst(string $table, string $where)
    {
        $this->table = $table;
        $this->where = $where;

        try {
            if ($where != '') {
                $insert = $this->con->prepare('SELECT * FROM ' . $table . ' WHERE ' . $where . ' LIMIT 1');
            } else {
                $insert = $this->con->prepare('SELECT * FROM ' . $table . ' LIMIT 1');
            }

            if ($insert->execute() == 1) {
                $this->data = $insert->fetch();
                return 1;
            } else {
                throw new PDOException("Erro ao procurar");
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    function __get(string $nome)
    {
        if (array_key_exists($nome, $this->data)) {
            return $this->data[$nome];
        } else {
            return 0;
        }
    }

    function __set(string $name, $value): void
    {
        try {
            $insert = $this->con->prepare('UPDATE ' . $this->table . ' SET ' . $name . ' = \'' . $value . '\' WHERE codpessoa = '. $this->codpessoa);
            if ($insert->execute() == 1) {
                $this->$name = $value;
            } else {
                throw new PDOException("Erro ao procurar");
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}