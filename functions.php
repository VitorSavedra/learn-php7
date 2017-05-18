<?php

    // Funções simples.
    function somar($a, $b) {
        return $a + $b;
    }

    function salario() {
        return 946.00;
    }
    echo "José recebeu 3 salários no total de: " . (salario()*3) . "<br><br>";
    
    function ola($texto = "mundo", $periodo = "Bom dia") {
        return "Olá $texto! $periodo. <br>";
    }
    echo ola();
    echo ola("","Boa noite");
    echo ola("Vitor","");
    
    function ola2() {
        $argumentos = func_get_args();
        return $argumentos;
    }
    var_dump(ola("Bom dia", 10));
    echo "<br><br>";


    // Parâmetro por valor. 
    $a = 10;
    function trocaValor($a) {
        $a += 50;
        return $a;
    }
    echo trocaValor($a); //60
    echo "<br>";
    echo $a; //10
    echo "<br>";


    // Parâmetro por referência. 
    function trocaValor_2(&$a) {
        $a += 50;
        return $a;
    }
    echo trocaValor_2($a); //60
    echo "<br>";
    echo $a; //60
    echo "<br>";


    // Declaração de tipos escalares e de retorno - Incluído no PHP7.
    function soma_2(int ...$valores):int {
        return array_sum($valores);
    }
    echo soma_2(2, 2); //4
    echo "<br>";
    echo soma_2(25, 33); //58
    echo "<br>";
    echo soma_2(1.5, 33); //34 - Ignorando casas decimais, por ter definido tipo como inteiro. 
    echo "<br><br>";


    // Funções recursivas. 
    $hierarquia = array(
        array(
            'nome_cargo' => 'CEO',
            'subordinados' => array(
                array(
                    'nome_cargo' => 'Diretor comercial',
                    'subordinados' => array(
                        array(
                            'nome_cargo' => 'Gerente de vendas'
                        )
                    )
                ),

                array(
                    'nome_cargo' => 'Diretor financeiro',
                    'subordinados' => array(
                        array(
                            'nome_cargo' => 'Gerente de contas a pagar',
                            'subordinados' => array(
                                array(
                                    'nome_cargo' => 'Supervisor de pagamentos'
                                )
                            )
                        ),

                        array(
                            'nome_cargo' => 'Gerence de compras',
                            'subordinados' => array(
                                array(
                                    'nome_cargo' => 'Supervisor de suprimentos'
                                )
                            )
                        )
                    )
                ),

                array(
                    'nome_cargo' => 'Diretor de tecnologia',
                    'subordinados' => array(
                        array(
                            'nome_cargo' => 'Gerente de tecnologia',
                            'subordinados' => array(
                                array(
                                    'nome_cargo' => 'Supervisor de tecnologia',
                                    'subordinados' => array(
                                        array(
                                            'nome_cargo' => 'Analista de TI'
                                        )
                                    )
                                )
                            )
                        )
                    )
                ),
            )
        )
    );

    function exibe($cargos) {
        $html = '<ul>';

        foreach ($cargos as $cargo) {
            $html .= '<li>';
            $html .= $cargo['nome_cargo'];

                if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {
                    $html .= exibe($cargo['subordinados']);
                }

            $html .= '</li>';
        }

        $html .= '</ul>';

        return $html;
    }

    echo exibe($hierarquia);


    // Funções anônimas. 
    function anon($callback){
        $callback();
    }
    anon(function() {
        echo "Fim";
    });

    $fn = function($a){
        var_dump($a);
    };
    $fn("Fim");