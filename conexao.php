<?PHP
/*
//A função abaixo irá conectar ao banco e deverá ser usada para conetar o banco MYSQLI
function conectarBanco(){
	$servidor ="127.0.0.1t";
	$usuario ="root";
	$senha = "";
	$banco = "escoladb";
	//abaixo iremos finalmente conectar o banco de dasdos
	$conexao = new mysqli($servidor, $usuario, $senha, $banco);
	//verificar se a conexão foi bem sucedida
	###############################################################################
	############  Apagar o if do texto abaixo quando o site for para ar ###########
	###############################################################################
	if($conexao->connect_error){
	  dir("Erro ao conectar o banco de dados: ".$conexao->connect_error); 
	}
	//linha abaixo servirá para setar a linguagem padrão de escrita
	$conexao->set_charset("uft8");
	// Retornando a conexão ( já conectada ao banco)
	return $conexao;
	
}

*/

//Função usando o MYSQL

function conexao($host = 'localhost',$usuario = 'root', $senha = '', $schema = 'escoladb') {
	$conexao = @mysql_connect($host,$usuario,$senha,$schema) or die("Impossivel conectar ao banco!");
	@mysql_select_db($schema,$conexao) or die("Erro ao selecionar Schema!");
	return $conexao;
}


//esta função irá fazer o INSERT na DB	 
//funçõs para gravar dados na tabela
function gravar_precadastro($nome,$rg,$cpf,$endereco,$numero,$bairro,$cep,$cidade,$estado,$contato,$contato2,$email,$login,$senha,$curso){
   $conexao = conexao();
   $sql = "INSERT INTO usuario(idusuario,aluno_idaluno,funcionario_idfuncionario,papel_idpapel,nome,rg,cpf,endereco,numero,bairro,cep, cidade,estado,contato,contato2,email,login,senha,curso)  VALUES('null','null','null','4','$nome','$rg','$cpf','$endereco','$numero','$bairro','$cep','$cidade','$estado','$contato','$contato2','$email','$login','$senha','$curso') ";
   
return @mysql_query($sql,$conexao);
	//header("Location: listar.php");
}

function gravar_usuario(){
   //esta função irá fazer o INSERT na DB	
	
}

//funções para editar dados da tabela
function gravar_alterar_usuario(){
	//esta função irá fazer o UPDATE na DB
	
}

//funções para deletar dados da tabela
function excluir_usuario($id){
	//esta função irá fazer o DELETE na DB
	
}

?>
