<?php
$id_user = 1;

// CONEXÃO CORRIGIDA - BANCO CERTO
try {
    $pdo = new PDO("mysql:host=localhost;dbname=filmes25;charset=utf8", "root", "knlima");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro ao conectar: " . $e->getMessage());
}

// BUSCAR FILMES DO CATÁLOGO - QUERY CORRIGIDA
try {
    $query = $pdo->prepare("SELECT id_filme, nome_filme, genero, classificacao, duracao, poster FROM tb_catalogo_filmes");
    $query->execute();
    $filmes = $query->fetchAll(PDO::FETCH_OBJ);
} catch (PDOException $e) {
    $filmes = [];
    echo "<!-- Aviso: " . $e->getMessage() . " -->";
}
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="background: linear-gradient(135deg, #0f0f23 0%, #1a1a2e 50%, #16213e 100%); min-height: 100vh; position: relative; overflow: hidden;">
    
    <!-- Efeitos de fundo -->
    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: 
        radial-gradient(circle at 10% 20%, rgba(120, 119, 198, 0.1) 0%, transparent 50%),
        radial-gradient(circle at 90% 80%, rgba(255, 119, 198, 0.08) 0%, transparent 50%),
        radial-gradient(circle at 50% 50%, rgba(100, 210, 255, 0.05) 0%, transparent 70%); 
        z-index: 0;"></div>

    <!-- Content Header (Page header) -->
    <section class="content-header" style="padding: 30px 0; position: relative; z-index: 1;">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 text-center">
            <h1 style="color: #ffffff; font-weight: 800; font-size: 2.5rem; margin-bottom: 10px; background: linear-gradient(135deg, #ffffff 0%, #a5b4fc 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; text-shadow: 0 4px 20px rgba(165, 180, 252, 0.3);">
              Cadastro de Filmes
            </h1>
            <p style="color: #c7d2fe; font-size: 1.1rem; font-weight: 500; letter-spacing: 0.5px;">
              Gerencie seus filmes de forma organizada e elegante
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content" style="position: relative; z-index: 1;">
      <div class="container-fluid">
        <div class="row">
          
          <!-- Formulário de Cadastro -->
          <div class="col-md-4">
            <div class="card" style="border-radius: 24px; border: 1px solid rgba(255, 255, 255, 0.1); background: rgba(30, 41, 59, 0.7); backdrop-filter: blur(20px); box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5), 0 0 0 1px rgba(255, 255, 255, 0.05); overflow: hidden;">
              
              <!-- Header do Card -->
              <div class="card-header" style="background: linear-gradient(135deg, rgba(79, 70, 229, 0.2) 0%, rgba(99, 102, 241, 0.1) 100%); border-bottom: 1px solid rgba(255, 255, 255, 0.1); padding: 30px 25px; position: relative;">
                <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(135deg, rgba(139, 92, 246, 0.1) 0%, transparent 50%);"></div>
                <h3 class="card-title" style="color: #ffffff; font-weight: 700; margin: 0; text-align: center; font-size: 1.4rem;">
                  <i class="fas fa-film mr-2" style="background: linear-gradient(135deg, #a78bfa 0%, #c4b5fd 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"></i>
                  Cadastrar Filme
                </h3>
              </div>

              <!-- Formulário -->
              <form role="form" action="" method="post">
                <div class="card-body" style="padding: 35px 30px;">
                  
                  <!-- Campo Gênero do Filme -->
                  <div class="form-group" style="margin-bottom: 25px;">
                    <label for="genero" style="color: #e2e8f0; font-weight: 600; margin-bottom: 10px; display: flex; align-items: center;">
                      <i class="fas fa-theater-masks mr-2" style="color: #a78bfa; font-size: 1.1rem;"></i>
                      Gênero do Filme
                    </label>
                    <div class="input-group">
                      <select class="form-control" name="genero" id="genero" required 
                             style="border-radius: 14px; border: 1px solid rgba(255, 255, 255, 0.1); background: rgba(15, 23, 42, 0.8); color: #ffffff; padding: 16px 20px; font-size: 1rem; transition: all 0.3s ease;">
                        <option value="">Selecione o gênero</option>
                        <option value="Ação">Ação</option>
                        <option value="Aventura">Aventura</option>
                        <option value="Comédia">Comédia</option>
                        <option value="Drama">Drama</option>
                        <option value="Ficção Científica">Ficção Científica</option>
                        <option value="Terror">Terror</option>
                        <option value="Romance">Romance</option>
                        <option value="Animação">Animação</option>
                      </select>
                      <div class="input-group-append">
                        <span class="input-group-text" style="border-radius: 0 14px 14px 0; border: 1px solid rgba(255, 255, 255, 0.1); background: rgba(15, 23, 42, 0.8); color: #a78bfa;">
                          <i class="fas fa-list"></i>
                        </span>
                      </div>
                    </div>
                  </div>

                  <!-- Campo Classificação -->
                  <div class="form-group" style="margin-bottom: 25px;">
                    <label for="classificacao" style="color: #e2e8f0; font-weight: 600; margin-bottom: 10px; display: flex; align-items: center;">
                      <i class="fas fa-star mr-2" style="color: #fbbf24; font-size: 1.1rem;"></i>
                      Classificação
                    </label>
                    <div class="input-group">
                      <select class="form-control" name="classificacao" id="classificacao" required 
                             style="border-radius: 14px; border: 1px solid rgba(255, 255, 255, 0.1); background: rgba(15, 23, 42, 0.8); color: #ffffff; padding: 16px 20px; font-size: 1rem; transition: all 0.3s ease;">
                        <option value="">Selecione a classificação</option>
                        <option value="Livre">Livre</option>
                        <option value="10 anos">10 anos</option>
                        <option value="12 anos">12 anos</option>
                        <option value="14 anos">14 anos</option>
                        <option value="16 anos">16 anos</option>
                        <option value="18 anos">18 anos</option>
                      </select>
                      <div class="input-group-append">
                        <span class="input-group-text" style="border-radius: 0 14px 14px 0; border: 1px solid rgba(255, 255, 255, 0.1); background: rgba(15, 23, 42, 0.8); color: #fbbf24;">
                          <i class="fas fa-star-half-alt"></i>
                        </span>
                      </div>
                    </div>
                  </div>

                  <!-- Campo Filme Escolhido -->
                  <div class="form-group" style="margin-bottom: 25px;">
                    <label for="filme" style="color: #e2e8f0; font-weight: 600; margin-bottom: 10px; display: flex; align-items: center;">
                      <i class="fas fa-ticket-alt mr-2" style="color: #60a5fa; font-size: 1.1rem;"></i>
                      Filme Escolhido
                    </label>
                    <div class="input-group">
                      <select class="form-control" name="filme" id="filme" required 
                             style="border-radius: 14px; border: 1px solid rgba(255, 255, 255, 0.1); background: rgba(15, 23, 42, 0.8); color: #ffffff; padding: 16px 20px; font-size: 1rem; transition: all 0.3s ease;">
                        <option value="">Selecione um filme</option>
                        <option value="THUNDERBOLTS">THUNDERBOLTS</option>
                        <option value="BAILARINA">BAILARINA</option>
                        <option value="AINDA ESTOU AQUI">AINDA ESTOU AQUI</option>
                        <option value="ANORA">ANORA</option>
                        <option value="COMO TREINAR O SEU DRAGÃO">COMO TREINAR O SEU DRAGÃO</option>
                        <option value="PECADORES">PECADORES</option>
                        <option value="O BRUTALISTA">O BRUTALISTA</option>
                        <option value="F1">F1</option> <!-- FILME F1 ADICIONADO -->
                      </select>
                      <div class="input-group-append">
                        <span class="input-group-text" style="border-radius: 0 14px 14px 0; border: 1px solid rgba(255, 255, 255, 0.1); background: rgba(15, 23, 42, 0.8); color: #60a5fa;">
                          <i class="fas fa-film"></i>
                        </span>
                      </div>
                    </div>
                  </div>

                  <!-- Campo Horário da Sessão -->
                  <div class="form-group" style="margin-bottom: 25px;">
                    <label for="horario" style="color: #e2e8f0; font-weight: 600; margin-bottom: 10px; display: flex; align-items: center;">
                      <i class="fas fa-clock mr-2" style="color: #f472b6; font-size: 1.1rem;"></i>
                      Horário da Sessão
                    </label>
                    <div class="input-group">
                      <input type="time" class="form-control" name="horario" id="horario" required 
                             style="border-radius: 14px; border: 1px solid rgba(255, 255, 255, 0.1); background: rgba(15, 23, 42, 0.8); color: #ffffff; padding: 16px 20px; font-size: 1rem; transition: all 0.3s ease;">
                      <div class="input-group-append">
                        <span class="input-group-text" style="border-radius: 0 14px 14px 0; border: 1px solid rgba(255, 255, 255, 0.1); background: rgba(15, 23, 42, 0.8); color: #f472b6;">
                          <i class="fas fa-history"></i>
                        </span>
                      </div>
                    </div>
                  </div>

                  <!-- Campo Duração -->
                  <div class="form-group" style="margin-bottom: 25px;">
                    <label for="duracao" style="color: #e2e8f0; font-weight: 600; margin-bottom: 10px; display: flex; align-items: center;">
                      <i class="fas fa-hourglass-half mr-2" style="color: #34d399; font-size: 1.1rem;"></i>
                      Duração (minutos)
                    </label>
                    <div class="input-group">
                      <input type="number" class="form-control" name="duracao" id="duracao" required placeholder="Ex: 120" 
                             style="border-radius: 14px; border: 1px solid rgba(255, 255, 255, 0.1); background: rgba(15, 23, 42, 0.8); color: #ffffff; padding: 16px 20px; font-size: 1rem; transition: all 0.3s ease;">
                      <div class="input-group-append">
                        <span class="input-group-text" style="border-radius: 0 14px 14px 0; border: 1px solid rgba(255, 255, 255, 0.1); background: rgba(15, 23, 42, 0.8); color: #34d399;">
                          <i class="fas fa-stopwatch"></i>
                        </span>
                      </div>
                    </div>
                  </div>

                  <!-- Campo Local/Cinema -->
                  <div class="form-group" style="margin-bottom: 25px;">
                    <label for="cinema" style="color: #e2e8f0; font-weight: 600; margin-bottom: 10px; display: flex; align-items: center;">
                      <i class="fas fa-building mr-2" style="color: #f59e0b; font-size: 1.1rem;"></i>
                      Local/Cinema
                    </label>
                    <div class="input-group">
                      <select class="form-control" name="cinema" id="cinema" required 
                             style="border-radius: 14px; border: 1px solid rgba(255, 255, 255, 0.1); background: rgba(15, 23, 42, 0.8); color: #ffffff; padding: 16px 20px; font-size: 1rem; transition: all 0.3s ease;">
                        <option value="">Selecione o cinema</option>
                        <option value="Cinema Shopping Center">Cinema Shopping Center</option>
                        <option value="Cineplex Park">Cineplex Park</option>
                        <option value="MovieMax Downtown">MovieMax Downtown</option>
                        <option value="Arte & Cinema">Arte & Cinema</option>
                      </select>
                      <div class="input-group-append">
                        <span class="input-group-text" style="border-radius: 0 14px 14px 0; border: 1px solid rgba(255, 255, 255, 0.1); background: rgba(15, 23, 42, 0.8); color: #f59e0b;">
                          <i class="fas fa-map-marker-alt"></i>
                        </span>
                      </div>
                    </div>
                  </div>

                  <!-- Campo Seu Nome -->
                  <div class="form-group" style="margin-bottom: 25px;">
                    <label for="nome" style="color: #e2e8f0; font-weight: 600; margin-bottom: 10px; display: flex; align-items: center;">
                      <i class="fas fa-user mr-2" style="color: #ec4899; font-size: 1.1rem;"></i>
                      Seu Nome
                    </label>
                    <div class="input-group">
                      <input type="text" class="form-control" name="nome" id="nome" required placeholder="Digite seu nome completo" 
                             style="border-radius: 14px; border: 1px solid rgba(255, 255, 255, 0.1); background: rgba(15, 23, 42, 0.8); color: #ffffff; padding: 16px 20px; font-size: 1rem; transition: all 0.3s ease;">
                      <div class="input-group-append">
                        <span class="input-group-text" style="border-radius: 0 14px 14px 0; border: 1px solid rgba(255, 255, 255, 0.1); background: rgba(15, 23, 42, 0.8); color: #ec4899;">
                          <i class="fas fa-signature"></i>
                        </span>
                      </div>
                    </div>
                  </div>

                  <!-- Checkbox -->
                  <div class="form-check" style="margin-top: 30px; padding: 15px; background: rgba(15, 23, 42, 0.5); border-radius: 12px; border: 1px solid rgba(255, 255, 255, 0.1);">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" required 
                           style="border-radius: 4px; border: 1px solid rgba(255, 255, 255, 0.3); background: rgba(15, 23, 42, 0.8); margin-right: 10px;">
                    <label class="form-check-label" for="exampleCheck1" style="color: #e2e8f0; font-weight: 500;">
                      <i class="fas fa-shield-check mr-1" style="color: #60a5fa;"></i>
                      Confirmo que as informações estão corretas
                    </label>
                  </div>

                  <input type="hidden" name="id_user" id="id_user" value="<?php echo $id_user ?>">
                </div>

                <!-- Botão de Submit -->
                <div class="card-footer" style="background: transparent; border-top: 1px solid rgba(255, 255, 255, 0.1); padding: 30px;">
                  <button type="submit" name="botao" class="btn" 
                          style="background: linear-gradient(135deg, #8b5cf6 0%, #a78bfa 50%, #c4b5fd 100%); border: none; border-radius: 14px; padding: 18px; font-weight: 700; transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); box-shadow: 0 8px 25px rgba(139, 92, 246, 0.4); width: 100%; color: white; font-size: 1.1rem; position: relative; overflow: hidden;">
                    <i class="fas fa-plus-circle mr-2"></i>
                    Cadastrar Filme
                    <div style="position: absolute; top: 0; left: -100%; width: 100%; height: 100%; background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent); transition: left 0.6s;"></div>
                  </button>
                </div>
              </form>

              <!-- PHP para processamento -->
              <?php 
              // Conexão para o INSERT - MESMO BANCO!
              try {
                  $conect = new PDO("mysql:host=localhost;dbname=filmes25;charset=utf8", "root", "knlima");
                  $conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              } catch (PDOException $e) {
                  die("Erro ao conectar: " . $e->getMessage());
              }

              if (isset($_POST['botao'])) {
                  // Receber dados do formulário
                  $genero = $_POST['genero'];
                  $classificacao = $_POST['classificacao'];
                  $filme = $_POST['filme'];
                  $horario = $_POST['horario'];
                  $duracao = $_POST['duracao'];
                  $cinema = $_POST['cinema'];
                  $nome = $_POST['nome'];
                  $id_user = $_POST['id_user'];

                  // DEFINIR IMAGEM BASEADA NO FILME - AGORA COM TODOS OS FILMES
                  $poster_filmes = "Bailarina.jpeg";
                  
                  if ($filme == "THUNDERBOLTS") {
                      $poster_filmes = "Thunderbolts.jpg";
                  } elseif ($filme == "BAILARINA") {
                      $poster_filmes = "Bailarina.jpeg";
                  } elseif ($filme == "AINDA ESTOU AQUI") {
                      $poster_filmes = "AindaEstouAqui.jpg";
                  } elseif ($filme == "ANORA") {
                      $poster_filmes = "Anora.jpg";
                  } elseif ($filme == "COMO TREINAR O SEU DRAGÃO") {
                      $poster_filmes = "ComoTreinaroSeuDragao.jpg";
                  } elseif ($filme == "PECADORES") {
                      $poster_filmes = "Pecadores.jpg";
                  } elseif ($filme == "O BRUTALISTA") {
                      $poster_filmes = "OBrutalista.jpeg";
                 } elseif ($filme == "F1") {
    $poster_filmes = "f1.jpeg"; // CORRIGIDO: "f1.jpeg" em minúsculo
}

                  // INSERIR NA TABELA CORRETA - tb_catalogo_filmes
                  $insert = "INSERT INTO tb_catalogo_filmes 
                            (nome_filme, genero, classificacao, duracao, poster) 
                            VALUES 
                            (:filme, :genero, :classificacao, :duracao, :poster)";

                  try {
                      $result = $conect->prepare($insert);
                      $result->bindParam(':filme', $filme, PDO::PARAM_STR);
                      $result->bindParam(':genero', $genero, PDO::PARAM_STR);
                      $result->bindParam(':classificacao', $classificacao, PDO::PARAM_STR);
                      $result->bindParam(':duracao', $duracao, PDO::PARAM_INT);
                      $result->bindParam(':poster', $poster_filmes, PDO::PARAM_STR);
                      
                      if($result->execute()) {
                          echo '<script>alert("🎉 Filme cadastrado com sucesso!");</script>';
                          echo '<script>setTimeout(() => { location.href = "home.php"; }, 1000);</script>';
                      } else {
                          echo '<script>alert("❌ Erro ao cadastrar filme!");</script>';
                      }
                  } catch(PDOException $e) {
                      echo '<script>alert("❌ Erro no banco: ' . $e->getMessage() . '");</script>';
                  }
              } 
              ?>
            </div>
          </div>

          <!-- Lista de Filmes Recentes -->
          <div class="col-md-8">
            <div class="card" style="border-radius: 24px; border: 1px solid rgba(255, 255, 255, 0.1); background: rgba(30, 41, 59, 0.7); backdrop-filter: blur(20px); box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5), 0 0 0 1px rgba(255, 255, 255, 0.05); overflow: hidden;">
              
              <!-- Header da Lista -->
              <div class="card-header" style="background: linear-gradient(135deg, rgba(99, 102, 241, 0.2) 0%, rgba(79, 70, 229, 0.1) 100%); border-bottom: 1px solid rgba(255, 255, 255, 0.1); padding: 30px 25px; position: relative;">
                <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(135deg, rgba(59, 130, 246, 0.1) 0%, transparent 50%);"></div>
                <h3 class="card-title" style="color: #ffffff; font-weight: 700; margin: 0; font-size: 1.4rem;">
                  <i class="fas fa-film mr-2" style="background: linear-gradient(135deg, #60a5fa 0%, #93c5fd 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"></i>
                  Filmes em cartaz
                </h3>
              </div>

              <!-- Cards de Filmes -->
              <div class="card-body">
                <div class="row">
                  <?php
                  // CONSULTA CORRIGIDA - usando apenas colunas existentes
                  $select = "SELECT id_filme, nome_filme, genero, classificacao, duracao, poster FROM tb_catalogo_filmes ORDER BY id_filme DESC LIMIT 6";
                  try {
                      $result = $pdo->prepare($select); 
                      $result->execute();
                      $contar = $result->rowCount();
                      
                      if ($contar > 0) {
                          while ($show = $result->fetch(PDO::FETCH_OBJ)) {
                  ?>  
                  <div class="col-md-6 col-lg-4 mb-4">
                    <div class="movie-card" style="border-radius: 16px; border: 1px solid rgba(255, 255, 255, 0.1); background: rgba(30, 41, 59, 0.8); overflow: hidden; transition: all 0.3s ease;">
                     <!-- IMAGEM DO FILME - AGORA VAI! -->
<div style="height: 300px; overflow: hidden; position: relative;">
    <?php
    $caminho_web = "http://localhost/index/clonefilmes/clonefilmes/filmes/" . $show->poster;
    echo '<img src="' . $caminho_web . '" 
          style="width: 100%; height: 100%; object-fit: cover;" 
          alt="' . $show->nome_filme . '">';
    ?>
    <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); padding: 20px 15px 15px 15px;">
        <h5 style="color: #ffffff; font-weight: 700; margin: 0; font-size: 1.2rem;"><?php echo $show->nome_filme; ?></h5>
    </div>
</div>

                      <!-- INFORMAÇÕES DO FILME - ESTILO CENTERPLEX -->
                      <div style="padding: 15px; background: rgba(15, 23, 42, 0.8);">
                        <div style="color: #e2e8f0; font-size: 0.9rem;">
                          <!-- DURAÇÃO E GÊNERO LADO A LADO -->
                          <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 8px;">
                            <span style="display: flex; align-items: center;">
                              <span style="color: #a78bfa; margin-right: 5px;">⏱️</span>
                              <?php echo $show->duracao; ?> min
                            </span>
                            <span style="display: flex; align-items: center;">
                              <span style="color: #fbbf24; margin-right: 5px;">🎭</span>
                              <?php echo $show->genero; ?>
                            </span>
                          </div>
                          
                          <!-- CLASSIFICAÇÃO E STATUS LADO A LADO -->
                          <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span style="display: flex; align-items: center;">
                              <span style="color: #f59e0b; margin-right: 5px;">⭐</span>
                              <?php echo $show->classificacao; ?>
                            </span>
                            <span style="display: flex; align-items: center;">
                              <span style="color: #34d399; margin-right: 5px;">✅</span>
                              Disponível
                            </span>
                          </div>
                        </div>
                      </div>

                      <!-- BOTÃO DE AÇÃO -->
                      <div style="padding: 15px; background: rgba(15, 23, 42, 0.8); border-top: 1px solid rgba(255,255,255,0.1); text-align: center;">
                        <a href="#" class="btn w-100" 
                           style="background: linear-gradient(135deg, #8b5cf6 0%, #a78bfa 100%); border: none; border-radius: 8px; padding: 10px; color: white; transition: all 0.3s ease;">
                          <i class="fas fa-ticket-alt mr-2"></i>Agendar Este Filme
                        </a>
                      </div>
                    </div>
                  </div>
                  <?php
                          }
                      } else {
                  ?>
                  <div class="col-12 text-center py-5">
                    <i class="fas fa-film" style="font-size: 4rem; color: #94a3b8; margin-bottom: 20px;"></i>
                    <h4 style="color: #e2e8f0; margin-bottom: 10px;">Nenhum filme encontrado</h4>
                    <p style="color: #94a3b8;">Adicione filmes usando o formulário ao lado</p>
                  </div>
                  <?php
                      }
                  } catch (PDOException $e) {
                      echo '<div class="col-12 text-center py-4" style="color: #ef4444;">Erro ao carregar filmes: ' . $e->getMessage() . '</div>';
                  }
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>  
      </div>
    </section>
</div>

<style>
/* CORREÇÃO DO TAMANHO - IGUAL AOS INPUTS */
select.form-control,
#genero, 
#classificacao,
#filme,
#cinema {
    background: rgba(15, 23, 42, 0.8) !important;
    color: #ffffff !important;
    border: 1px solid rgba(255, 255, 255, 0.1) !important;
    border-radius: 14px !important;
    padding: 16px 20px !important;
    font-size: 1rem !important;
    appearance: menulist !important;
    -webkit-appearance: menulist !important;
    height: 54px !important;
    line-height: normal !important;
    min-height: 54px !important;
    max-height: 54px !important;
}

/* Garantir que os inputs também tenham altura consistente */
input.form-control {
    height: 54px !important;
    min-height: 54px !important;
    max-height: 54px !important;
}

select.form-control option,
#genero option,
#classificacao option, 
#filme option,
#cinema option {
    background: #1e293b !important;
    color: #ffffff !important;
    padding: 12px 20px !important;
    font-size: 1rem !important;
}

select.form-control:focus,
#genero:focus, 
#classificacao:focus,
#filme:focus,
#cinema:focus {
    border-color: #8b5cf6 !important;
    box-shadow: 0 0 0 3px rgba(139, 92, 246, 0.2) !important;
    background: rgba(15, 23, 42, 0.9) !important;
}

/* Efeitos para os cards de filmes */
.movie-card:hover,
.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(139, 92, 246, 0.3);
    border-color: rgba(139, 92, 246, 0.3);
}
</style>

<script>
  // Efeito de brilho no botão principal
  document.addEventListener('DOMContentLoaded', function() {
    const mainButton = document.querySelector('button[type="submit"]');
    mainButton.addEventListener('mouseenter', function() {
      this.querySelector('div').style.left = '100%';
    });
    
    mainButton.addEventListener('mouseleave', function() {
      this.querySelector('div').style.left = '-100%';
    });
  });
</script>