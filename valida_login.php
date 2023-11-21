// conexão com o banco de dados

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

// consulta para validar as credenciais
$sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND senha='$senha'";

// executa a consulta e verifica se retornou algum registro
if($resultado->num_rows > 0) {
  // credenciais válidas
  header("Location: pagina_inicial.php"); 
} else {
  // credenciais inválidas
  echo "Usuário ou senha inválidos";
}