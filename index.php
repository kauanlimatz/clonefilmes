<?php
session_start(); 

// Verifica se o usuário está autenticado
if (isset($_SESSION['loginUser']) && isset($_SESSION['senhaUser'])) {
    header("Location: paginas/home.php");
    exit;
}

include_once('config/conexao.php');

// Processar o formulário de login ANTES de qualquer HTML
$mensagem = '';
if (isset($_POST['login'])) {
    $login = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_DEFAULT);

    if ($login && $senha) {
        $select = "SELECT * FROM tb_user WHERE email_user = :emailLogin";

        try {
            $resultLogin = $conect->prepare($select);
            $resultLogin->bindParam(':emailLogin', $login, PDO::PARAM_STR);
            $resultLogin->execute();

            $verificar = $resultLogin->rowCount();
            if ($verificar > 0) {
                $user = $resultLogin->fetch(PDO::FETCH_ASSOC);

                // Verifica a senha
                if (password_verify($senha, $user['senha_user'])) {
                    // Criar sessão
                    $_SESSION['loginUser'] = $login;
                    $_SESSION['senhaUser'] = $user['id_user'];

                    // Redirecionar imediatamente sem output
                    header("Location: paginas/home.php?acao=bemvindo");
                    exit;
                } else {
                    $mensagem = '<div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-exclamation-triangle"></i> Erro!</h5>
                        Senha incorreta. Tente novamente.
                    </div>';
                }
            } else {
                $mensagem = '<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-exclamation-triangle"></i> Erro!</h5>
                    E-mail não encontrado. Verifique seu login.
                </div>';
            }
        } catch (PDOException $e) {
            error_log("ERRO DE LOGIN DO PDO: " . $e->getMessage());
            $mensagem = '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-exclamation-triangle"></i> Erro!</h5>
                Ocorreu um erro ao tentar fazer login. Tente novamente mais tarde.
            </div>';
        }
    } else {
        $mensagem = '<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-exclamation-triangle"></i> Erro!</h5>
            Todos os campos são obrigatórios.
        </div>';
    }
}

// Mensagens da URL
if (isset($_GET['acao'])) {
    $acao = $_GET['acao'];
    if ($acao == 'negado') {
        $mensagem = '<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-exclamation-triangle"></i> Erro!</h5>
            Efetue o login para acessar o sistema.
        </div>';
    } elseif ($acao == 'sair') {
        $mensagem = '<div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-info-circle"></i> Logout</h5>
            Você saiu do FilmCatalog com sucesso!
        </div>';
    }
}
?>
<!DOCTYPE html>
<html lang="pt_br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>filmes catágolo | Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  
  <style>
    :root {
      --dark-blue: #0f172a;
      --medium-blue: #1e293b;
      --light-blue: #334155;
      --accent-blue: #3b82f6;
      --gray-dark: #475569;
      --gray-medium: #64748b;
      --gray-light: #94a3b8;
      --white: #f8fafc;
      --border: #334155;
    }
    
    body {
      font-family: 'Inter', sans-serif;
      background: linear-gradient(135deg, var(--dark-blue) 0%, var(--medium-blue) 100%);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
      overflow: hidden;
    }
    
    body::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: 
        radial-gradient(circle at 20% 80%, rgba(59, 130, 246, 0.1) 0%, transparent 50%),
        radial-gradient(circle at 80% 20%, rgba(59, 130, 246, 0.05) 0%, transparent 50%),
        radial-gradient(circle at 40% 40%, rgba(59, 130, 246, 0.07) 0%, transparent 50%);
      z-index: 0;
    }
    
    .login-box {
      width: 420px;
      position: relative;
      z-index: 1;
    }
    
    .card {
      border-radius: 20px;
      box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
      border: 1px solid var(--border);
      overflow: hidden;
      background: var(--medium-blue);
      backdrop-filter: blur(10px);
    }
    
    .card-header {
      background: linear-gradient(135deg, var(--dark-blue) 0%, var(--medium-blue) 100%);
      color: var(--white);
      text-align: center;
      padding: 40px 30px 30px;
      border-bottom: 1px solid var(--border);
      position: relative;
    }
    
    .card-header::after {
      content: "";
      position: absolute;
      bottom: 0;
      left: 50%;
      transform: translateX(-50%);
      width: 60px;
      height: 3px;
      background: var(--accent-blue);
      border-radius: 2px;
    }
    
    .card-header h3 {
      margin: 0;
      font-weight: 700;
      font-size: 26px;
      letter-spacing: -0.5px;
    }
    
    .card-body {
      padding: 40px;
    }
    
    .logo-icon {
      font-size: 48px;
      color: var(--accent-blue);
      margin-bottom: 20px;
      display: inline-block;
      background: linear-gradient(135deg, var(--accent-blue) 0%, #60a5fa 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      filter: drop-shadow(0 4px 8px rgba(59, 130, 246, 0.3));
    }
    
    .btn-primary {
      background: linear-gradient(135deg, var(--accent-blue) 0%, #2563eb 100%);
      border: none;
      border-radius: 12px;
      padding: 14px;
      font-weight: 600;
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
      box-shadow: 0 4px 14px rgba(59, 130, 246, 0.4);
      letter-spacing: 0.5px;
    }
    
    .btn-primary:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 25px rgba(59, 130, 246, 0.5);
      background: linear-gradient(135deg, #2563eb 0%, var(--accent-blue) 100%);
    }
    
    .form-control {
      border-radius: 12px;
      padding: 14px 16px;
      border: 1px solid var(--border);
      background: var(--dark-blue);
      color: var(--white);
      transition: all 0.3s ease;
      font-weight: 400;
    }
    
    .form-control::placeholder {
      color: var(--gray-light);
    }
    
    .form-control:focus {
      border-color: var(--accent-blue);
      box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.2);
      background: var(--dark-blue);
      color: var(--white);
    }
    
    .input-group-text {
      background: var(--dark-blue);
      border-radius: 12px;
      border: 1px solid var(--border);
      color: var(--gray-light);
      transition: all 0.3s ease;
    }
    
    .input-group:focus-within .input-group-text {
      border-color: var(--accent-blue);
      color: var(--accent-blue);
    }
    
    .login-logo a {
      color: var(--white);
      font-weight: 800;
      font-size: 32px;
      letter-spacing: -1px;
      text-decoration: none;
      background: linear-gradient(135deg, var(--white) 0%, var(--gray-light) 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.3));
    }
    
    .login-box-msg {
      color: var(--gray-light);
      margin-bottom: 30px;
      font-size: 15px;
      text-align: center;
      line-height: 1.6;
      font-weight: 400;
    }
    
    .register-link {
      color: var(--gray-light);
      font-weight: 500;
      transition: all 0.3s ease;
      display: inline-block;
      text-align: center;
      margin-top: 25px;
      text-decoration: none;
      font-size: 14px;
      position: relative;
      padding: 8px 0;
    }
    
    .register-link::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 0;
      height: 2px;
      background: linear-gradient(135deg, var(--accent-blue) 0%, #60a5fa 100%);
      transition: width 0.3s ease;
      border-radius: 1px;
    }
    
    .register-link:hover {
      color: var(--accent-blue);
      text-decoration: none;
      transform: translateX(2px);
    }
    
    .register-link:hover::after {
      width: 100%;
    }
    
    .input-group {
      margin-bottom: 24px;
    }
    
    .modern-card {
      position: relative;
      overflow: hidden;
    }
    
    .modern-card::before {
      content: "";
      position: absolute;
      top: -50%;
      left: -50%;
      width: 200%;
      height: 200%;
      background: linear-gradient(45deg, transparent, rgba(59, 130, 246, 0.1), transparent);
      transform: rotate(45deg);
      animation: shimmer 8s infinite linear;
    }
    
    @keyframes shimmer {
      0% { transform: rotate(45deg) translateX(-100%); }
      100% { transform: rotate(45deg) translateX(100%); }
    }
    
    .alert {
      border-radius: 12px;
      border: none;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
      margin-bottom: 25px;
    }
    
    .alert-success {
      background: linear-gradient(135deg, #10b981 0%, #059669 100%);
      color: white;
    }
    
    .alert-danger {
      background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
      color: white;
    }
    
    .alert-warning {
      background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
      color: white;
    }
    
    .register-container {
      text-align: center;
      margin-top: 30px;
      padding-top: 25px;
      border-top: 1px solid rgba(255, 255, 255, 0.1);
    }
  </style>
</head>
<body>

<div class="login-box">
  <div class="login-logo">
    <a href="index.php">Filmes Catálogo</a>
  </div>

  <div class="card modern-card">
    <div class="card-header">
      <i class="fas fa-film logo-icon"></i>
      <h3>Bem-vindo</h3>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Entre com sua conta para acessar nosso catálogo exclusivo</p>

      <!-- Exibir mensagens -->
      <?php echo $mensagem; ?>

      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="E-mail" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        
        <div class="input-group mb-3">
          <input type="password" name="senha" class="form-control" placeholder="Senha" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-12" style="margin-bottom: 10px">
            <button type="submit" name="login" class="btn btn-primary btn-block">
              <i class="fas fa-sign-in-alt mr-2"></i>Entrar no Catálogo
            </button>
          </div>
        </div>
      </form>

      <div class="register-container">
        <a href="cad_user.php" class="register-link">
          <i class="fas fa-user-plus mr-1"></i>Criar Nova Conta
        </a>
      </div>
    </div>
  </div>
</div>

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<script>
  // Efeito de foco suave nos inputs
  document.querySelectorAll('.form-control').forEach(input => {
    input.addEventListener('focus', function() {
      this.parentElement.classList.add('focused');
    });
    
    input.addEventListener('blur', function() {
      if (this.value === '') {
        this.parentElement.classList.remove('focused');
      }
    });
  });

  // Auto-fechar alerts após 5 segundos
  document.addEventListener('DOMContentLoaded', function() {
    setTimeout(function() {
      const alerts = document.querySelectorAll('.alert');
      alerts.forEach(alert => {
        const closeButton = alert.querySelector('.close');
        if (closeButton) {
          closeButton.click();
        }
      });
    }, 5000);
  });
</script>

</body>
</html>