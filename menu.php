<?php
if(isset ($_SESSION['usuario'])){
    echo "<div id='menu'>".
        "<a href='index.php'><button>Home</button></a>".
       "<a href='cadastroMusica.php'><button>Cadastrar músicas</button></a>".
		"<a href='Funcoes/sair.php'><button>Sair</button></a>".
    "</div>";
}else{
    echo "<div id='menu'>".
        "<a href='index.php'><button>Home</button></a>".
        "<a href='entrar.php'><button>Entrar</button></a>".
		"<a href='cadastro.php'><button>Cadastrar</button></a>".
    "</div>";
}

?>
