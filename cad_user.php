<!DOCTYPE html>
<html lang="pt_br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>FilmCatalog | Cadastro</title>
  <!-- Tell the browser to be responsive to screen width -->
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
    
    .custom-file-label {
      border-radius: 12px;
      overflow: hidden;
      background: var(--dark-blue);
      border: 1px solid var(--border);
      color: var(--gray-light);
    }
    
    .custom-file-input:focus ~ .custom-file-label {
      border-color: var(--accent-blue);
      box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.2);
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
    
    .back-link {
      color: var(--gray-light);
      font-weight: 500;
      transition: all 0.3s ease;
      display: block;
      text-align: center;
      margin-top: 25px;
      text-decoration: none;
      font-size: 14px;
    }
    
    .back-link:hover {
      color: var(--accent-blue);
      text-decoration: none;
      transform: translateX(-2px);
    }
    
    .form-group label {
      font-weight: 600;
      color: var(--gray-light);
      margin-bottom: 10px;
      font-size: 14px;
      letter-spacing: 0.5px;
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
    
    
    @keyframes float {
      0%, 100% { transform: translateY(0px) rotate(0deg); }
      50% { transform: translateY(-20px) rotate(180deg); }
    }
    
    .alert {
      border-radius: 12px;
      border: none;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
    }
    
    .alert-success {
      background: linear-gradient(135deg, #10b981 0%, #059669 100%);
      color: white;
    }
    
    .alert-danger {
      background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
      color: white;
    }
    
    .custom-file-input:focus ~ .custom-file-label {
      border-color: var(--accent-blue);
      box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.2);
    }

    /* CORREÇÃO DO CORTE E SCROLL */
    body {
        padding: 20px;
        overflow-y: auto;
    }

    .login-box {
        margin: 20px auto;
    }

    .container {
        max-width: 100%;
        padding: 0 15px;
    }
  </style>
</head>
<body>

<div class="login-box">
  <div class="login-logo">
    <a href="cad_user.php">Filmes Catálogo</a>
  </div>

  <div class="card modern-card">
    <div class="card-header">
      <i class="fas fa-film logo-icon"></i>
      <h3>Criar Conta</h3>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Cadastre-se para acessar nosso catálogo exclusivo de filmes</p>

      <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="foto">Foto do Perfil</label>
          <div class="input-group">
            <div class="custom-file">
              <input type="file" class="custom-file-input" name="foto" id="foto">
              <label class="custom-file-label" for="foto">
                <i class="fas fa-cloud-upload-alt mr-2"></i>Selecionar imagem
              </label>
            </div>
          </div>
        </div>
        
        <div class="input-group mb-3">
          <input type="text" name="nome" class="form-control" placeholder="Nome completo" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        
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
          <div class="col-12" style="margin-bottom: 25px">
            <button type="submit" name="botao" class="btn btn-primary btn-block">
              <i class="fas fa-user-plus mr-2"></i>Criar Minha Conta
            </button>
          </div>
        </div>
      </form>

      <?php
include_once('config/conexao.php');

if (isset($_POST['botao'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    if (!empty($_FILES['foto']['name'])) {
        $formatosPermitidos = array("png", "jpg", "jpeg", "gif");
        $extensao = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);

        if (in_array(strtolower($extensao), $formatosPermitidos)) {
            $pasta = "img/user/";
            $temporario = $_FILES['foto']['tmp_name'];
            $novoNome = uniqid() . ".$extensao";

            if (move_uploaded_file($temporario, $pasta . $novoNome)) {
            } else {
                echo '<div class="container">
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5><i class="icon fas fa-exclamation-triangle"></i> Erro!</h5>
                            Não foi possível fazer o upload do arquivo.
                        </div>
                    </div>';
                exit();
            }
        } else {
            echo '<div class="container">
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-exclamation-triangle"></i> Formato Inválido!</h5>
                        Formato de arquivo não permitido.
                    </div>
                </div>';
            exit();
        }
    } else {
        $novoNome = 'avatar-padrao.png';
    }

    $cadastro = "INSERT INTO tb_user (foto_user, nome_user, email_user, senha_user) VALUES (:foto, :nome, :email, :senha)";

    try {
        $result = $conect->prepare($cadastro);
        $result->bindParam(':nome', $nome, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':senha', $senha, PDO::PARAM_STR);
        $result->bindParam(':foto', $novoNome, PDO::PARAM_STR);
        $result->execute();
        $contar = $result->rowCount();

        if ($contar > 0) {
    echo '<div class="container">
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i> Sucesso!</h5>
                Cadastro realizado! Redirecionando para login...
            </div>
        </div>';
    echo '<script>
        setTimeout(function() {
            window.location.href = "index.php";
        }, 2000);
    </script>';
} else {
            echo '<div class="container">
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-exclamation-triangle"></i> Erro!</h5>
                        Não foi possível realizar o cadastro.
                    </div>
                </div>';
        }
    } catch (PDOException $e) {
        error_log("ERRO DE PDO: " . $e->getMessage());
        echo '<div class="container">
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-exclamation-triangle"></i> Erro!</h5>
                    Ocorreu um erro ao tentar realizar o cadastro.
                </div>
            </div>';
    }
}
?>
     
      <p style="text-align: center;">
        <a href="index.php" class="back-link">
          <i class="fas fa-arrow-left mr-1"></i>Voltar para o Login
        </a>
      </p>
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
  document.querySelector('.custom-file-input').addEventListener('change', function(e) {
    var fileName = document.getElementById("foto").files[0].name;
    var nextSibling = e.target.nextElementSibling;
    nextSibling.innerHTML = '<i class="fas fa-check-circle mr-2"></i>' + fileName;
  });

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
</script>

</body>
</html>