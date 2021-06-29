<?php
require('Pessoa.php');

class Funcionario extends Pessoa
{
    private string $cargo;
    private string $salario;
    private string $dataAdmissao;

    /**
     * 2) Crie um arquivo PHP contendo uma classe "Funcionario" que deve herdar de "Pessoa"
     * e acrescentar um campo para cargo, um para salário e um para data de admissão.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function getCargo(): string
    {
        return $this->cargo;
    }

    public function setCargo(string $cargo): void
    {
        $this->cargo = $cargo;
    }

    public function getSalario(): string
    {
        return $this->salario;
    }

    public function setSalario(string $salario): void
    {
        $this->salario = $salario;
    }

    public function getDataAdmissao(): string
    {
        return $this->dataAdmissao;
    }

    public function setDataAdmissao(string $dataAdmissao): void
    {
        $this->dataAdmissao = $dataAdmissao;
    }

    /**
     * Ela deverá ter um método "tempo" que retorna o tempo de serviço do funcionário a partir da data de admissão,
     * e um método "imposto" que retorna 27,5% do salário do funcionário.
     */
    public function tempo()
    {
        $dataAdm = DateTime::createFromFormat('d/m/Y', $this->getDataAdmissao());
        $dataAtual = new DateTime();
        $diferenca = $dataAtual->diff($dataAdm);
        // retorna diferença em anos
        return $diferenca->format('%y anos %m meses e %d');
    }

    public function imposto()
    {
        return $this->getSalario() * 0.27;
    }

    public function mostrarDados(): string
    {
        $retorno = "<table class='table'>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Endereço</th>
                        <th>Telefones</th>
                        <th>Idade</th>
                        <th>Cargo</th>
                        <th>Salário</th>
                        <th>Imposto a ser pago</th>
                        <th>Tempo de empresa</th>
                    </tr>
                </thead>
                    <tr>
                        <td>" . $this->getNome() . "</td>
                        <td>" . $this->getEndereco() . "</td>
                        <td>                        ";
        foreach ($this->getTelefones() as $key => $value) {
            $retorno .= $value . ' | ';
        }
        $retorno .= "                              
                        </td>
                        <td>" . $this->idade() . " anos</td>
                        <td>" . $this->getCargo() . "</td>
                        <td>R$" . $this->getSalario() . "</td>
                        <td>R$" . $this->imposto() . "</td>
                        <td>" . $this->tempo() . " dias</td>
                    </tr>
                </table>";
        return $retorno;
    }

}