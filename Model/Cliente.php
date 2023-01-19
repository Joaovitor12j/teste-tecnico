<?php 
/**
* 
*/
class Cliente
{
	private $id;
	private $nome;
	private $endereco;
    private $complemento;
    private $numero;
    private $bairro;
    private $cep;
    private $cidade;
    private $estado;
	
	function __construct($id, $nome, $endereco, $complemento, $numero, $bairro, $cep, $cidade, $estado)
	{
		$this->setId($id);
		$this->setNome($nome);
		$this->setEndereco($endereco);
        $this->setComplemento($complemento);	
		$this->setNumero($numero);	
		$this->setBairro($bairro);
        $this->setCep($cep);
		$this->setCidade($cidade);
        $this->setEstado($estado);
	}

	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getEndereco(){
		return $this->endereco;
	}

	public function setEndereco($endereco){
		$this->endereco = $endereco;
	}

    public function getComplemento(){
		return $this->complemento;
	}

	public function setComplemento($complemento){
		$this->complemento = $complemento;
	}

    public function getNumero(){
		return $this->numero;
	}

	public function setNumero($numero){
		$this->numero = $numero;
	}

    public function getBairro(){
		return $this->bairro;
	}

	public function setBairro($bairro){
		$this->bairro = $bairro;
	}

    public function getCep(){
		return $this->cep;
	}

	public function setCep($cep){
		$this->cep = $cep;
	}

    public function getCidade(){
		return $this->cidade;
	}

	public function setCidade($cidade){
		$this->cidade = $cidade;
	}

    public function getEstado(){
		return $this->estado;
	}

	public function setEstado($estado){
		$this->estado = $estado;
	}

	public static function save($cliente){
		$db = Db::getConnect();
		
		$insert = $db->prepare('INSERT INTO clientes (nome, endereco, complemento, numero, bairro, cep, cidade, estado) 
        VALUES (
            :nome,
            :endereco,
            :complemento,
            :numero,
            :bairro,
			:cep,
            :cidade,
            :estado
                )'
            );
		$insert->bindValue('nome', $cliente->getNome());
		$insert->bindValue('endereco', $cliente->getEndereco());
        $insert->bindValue('complemento', $cliente->getComplemento());
		$insert->bindValue('numero', $cliente->getNumero());
		$insert->bindValue('bairro', $cliente->getBairro());
        $insert->bindValue('cep', $cliente->getCep());
		$insert->bindValue('cidade', $cliente->getCidade());
		$insert->bindValue('estado', $cliente->getEstado());
		$insert->execute();
	}

	public static function all(){
		$db = Db::getConnect();
		$listaCliente = [];

		$select = $db->query('SELECT * FROM clientes order by id');

		foreach($select->fetchAll() as $cliente){
			$listaCliente[] = new Cliente($cliente['id'], $cliente['nome'], $cliente['endereco'], $cliente['complemento'], $cliente['numero'], $cliente['bairro'],
			$cliente['cep'], $cliente['cidade'], $cliente['estado']);
		}
		return $listaCliente;
	}
}

?>