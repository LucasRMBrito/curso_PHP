<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercicio PHP</title>
</head>
<body>

    <section id="resultado">
        <h2>Conta em Banco</h2>
        <pre>
        <?php 
            class ContaBanco {
                public $numConta;
                protected $tipo;
                private $dono;
                private $saldo;
                private $status;

                public function __construct(){
                    $this->setSaldo(0);
                    $this->setStatus(false);
                    echo "Conta criada com sucesso!";
                }
                
                public function getnumConta(){
                    return $this->numConta;
                }

                public function setnumConta($num_conta){
                    $this->numConta = $num_conta;
                }

                public function getTipo(){
                    return $this->tipo;
                }

                public function setTipo($tipo){
                    $this->tipo = $tipo;
                }

                public function getDono(){
                    return $this->dono;
                }

                public function setDono($dono){
                    $this->dono = $dono;
                }

                public function getSaldo(){
                    return $this->saldo;
                }

                public function setSaldo($saldo){
                    $this->saldo = $saldo;
                }

                public function verSaldo(){
                    if ($this->getStatus()){
                        echo "<p>O saldo atual de ". $this->getDono() . " é: R$". number_format($this->saldo, 2, ",", ".") ."</p>";
                    } else {
                        echo "<p>Conta não encontrada!</p>";
                    }
                }

                public function getStatus(){
                    return $this->status;
                }

                public function setStatus($status){
                    $this->status = $status;
                }

                public function abrirConta($t){
                    $this->setTipo($t);
                    $this->setStatus(true);
                    if ($t == "CC"){
                        $this->setSaldo(50);
                    }elseif ($t == "CP"){
                        $this->saldo = 150;
                    }
                }

                public function fecharConta(){
                    if ($this->getSaldo() > 0){
                        echo "<p>Conta ainda tem dinheiro, não posso fechar</p>";
                    } elseif ($this->getSaldo() < 0){
                        echo "<p>Conta está em débito. Impossível encerrar!</p>";
                    } else {
                        $this->setStatus(false);
                        $this->setnumConta('');
                        $this->setDono('');
                        $this->setTipo('');
                        $this->setSaldo('');
                        echo "Conta de ". $this->getDono() ." fechada com sucesso!";
                    }
                }

                public function depositar($v){
                    if ($this->getStatus()){
                        $this->setSaldo($this->getSaldo() + $v);
                        // $this->saldo = $this->saldo + $v;
                        echo "<p>Deposito de R$". number_format($v, 2, ",",".") ." na conta de " . $this->getDono() . " !</p>";
                    } else {
                        echo "<p>Conta fechada. Não consigo depositar.</p>";
                    }
                }

                public function sacar($v){
                    if ($this->getStatus()){
                        if ($this->getSaldo() >= $v) {
                            // $this->saldo = $this->saldo - $v;
                            $this->setSaldo($this->getSaldo() - $v);
                            echo "<p>Saque no valor de R$". number_format($v, 2, ",",".") ." autorizado na conta de ". $this->getDono() ."!</p>";
                        } else {
                            echo "<p>Saldo insuficiente para saque</p>";
                        }
                    } else {
                        echo "<p>Não posso sacar de uma conta fechada.</p>";
                    }
                }

                public function pagarMensal(){
                    if ($this->getTipo() == "CC"){
                        $v = 12;
                    } else if ($this->getTipo() == "CP"){
                        $v = 20;
                    }
                    if ($this->getStatus()){
                        $this->setSaldo($this->getSaldo() - $v);
                        echo "<p>Mensalidade de R$". number_format($v, 2, ",",".") . " debitada na conta de ". $this->getDono() ." !</p>";
                    } else {
                        echo "<p>Problemas com a conta. Não posso cobrar.</p>";
                    }
                }
            }

            echo "<br>";
            $p1 = new ContaBanco(); //Jubileu
            echo "<br>";
            $p2 = new ContaBanco(); // Creuza
            echo "<br>";
            echo "<br>";

            $p1->abrirConta("CC");
            $p1->setDono("Jubileu");
            $p1->setnumConta(111);
            $p1->depositar(300);
            $p1->pagarMensal();
            $p1->sacar(338);
            $p1->fecharConta();
            $p1->verSaldo();
            
            echo "<br><br><br>";

            $p2->abrirConta("CP");
            $p2->setDono("Creuza");
            $p2->setnumConta(222);
            $p2->depositar(500);
            $p2->sacar(100);
            $p2->pagarMensal();
            $p2->sacar(530);
            $p2->fecharConta();
            $p2->verSaldo();

            echo "<br><br><br>";

            print_r($p1);
            print_r($p2);

            
        ?>
    </pre>
    </section>
    
</body>
</html>