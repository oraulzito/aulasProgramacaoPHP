<?php


class Pessoa
{
    private string $nome;
    private string $dataNascimento;
    private string $endereco;
    private array $telefones;

    /**
     * 1) Crie um arquivo PHP contendo uma classe "Pessoa", que deve guardar dados pessoais como nome, data de nascimento,
     * endereço completo e telefones.
     */
    public function __construct()
    {
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function getDataNascimento(): string
    {
        return $this->dataNascimento;
    }


    public function setDataNascimento(string $dataNascimento): void
    {
        $this->dataNascimento = $dataNascimento;
    }

    public function getEndereco(): string
    {
        return $this->endereco;
    }

    public function setEndereco(string $endereco): void
    {
        $this->endereco = $endereco;
    }

    public function getTelefones(): array
    {
        return $this->telefones;
    }

    public function setTelefones(array $telefones): void
    {
        $this->telefones = $telefones;
    }

    /**
     * * Ela deverá ter um método "idade" que retorna a idade da pessoa calculada a partir da data de nascimento.
     * Dica: pode dar um explode na data quebrando por '/' e fazer a lógica para o ano, mês e dia.
     * Ou pode usar isso: http://stackoverflow.com/a/3776741/834518
     */
    public function idade()
    {
        $dataNasc = DateTime::createFromFormat('d/m/Y', $this->getDataNascimento());
        $dataAtual = new DateTime();
        $diferenca = $dataAtual->diff($dataNasc);
        // retorna diferença em anos
        return $diferenca->y;
    }

}