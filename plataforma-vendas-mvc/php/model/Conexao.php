<?php

    class Conexao{

        private $host;

        private $usuario;

        private $senha;

        private $nomeBanco;

        //Construtor da classe
        //é um método que utilizamos para inicializar a classe.
        //sempre tem o mesmo nome da classe, e não possui retorno e também não é void.
        //Chamamos um construtor quando instanciamos a classe, através do new

        public function __construct(
            $host = "localhost",
            $usuario = "root",
            $senha = "",
            $nomeBanco = "autopecas_tanaka"
        ) {
            $this->host= $host;
            $this->usuario= $usuario;
            $this->senha= $senha;
            $this->nomeBanco= $nomeBanco;

            $this->connect();
        }
        
        public function connect () {

            try {
                //Criar um novo objeto que conecta no banco de dados
                //Vamos utilizar o PDO para isso, passando as variaveis (construtor) acima como parametro.
                $dsn = "mysql:host={$this->host};dbname={$this->nomeBanco};charset=utf8";
                $this->conn = new PDO($dsn, $this->$usuario, $this->$senha);

                //Define como o PDO vai tratar o erro
                //No caso, vai lançar uma exceção, que posteriormente será tratada no CATCH
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            //conecta no banco
            return $this->conn; 

            }catch(PDOException $e) {
                die("Erro ao conectar com o banco de dados " . $e->getMessage());
            }

           
        } 
    }

?>