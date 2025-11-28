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
              <form role="form" action="" method="post" enctype="multipart/form-data">
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
                        <option value="acao">Ação</option>
                        <option value="aventura">Aventura</option>
                        <option value="comedia">Comédia</option>
                        <option value="drama">Drama</option>
                        <option value="ficcao">Ficção Científica</option>
                        <option value="terror">Terror</option>
                        <option value="romance">Romance</option>
                        <option value="animacao">Animação</option>
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
                        <option value="livre">Livre</option>
                        <option value="10">10 anos</option>
                        <option value="12">12 anos</option>
                        <option value="14">14 anos</option>
                        <option value="16">16 anos</option>
                        <option value="18">18 anos</option>
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
                      <input type="text" class="form-control" name="filme" id="filme" required placeholder="Selecione um filme" 
                             style="border-radius: 14px; border: 1px solid rgba(255, 255, 255, 0.1); background: rgba(15, 23, 42, 0.8); color: #ffffff; padding: 16px 20px; font-size: 1rem; transition: all 0.3s ease;">
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
                        <option value="cinema-shopping">Cinema Shopping Center</option>
                        <option value="cineplex-park">Cineplex Park</option>
                        <option value="moviemax">MovieMax Downtown</option>
                        <option value="arte-cinema">Arte & Cinema</option>
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

                  <!-- Upload de Poster -->
                  <div class="form-group" style="margin-bottom: 25px;">
                    <label for="poster" style="color: #e2e8f0; font-weight: 600; margin-bottom: 10px; display: flex; align-items: center;">
                      <i class="fas fa-camera mr-2" style="color: #8b5cf6; font-size: 1.1rem;"></i>
                      Poster do Filme
                    </label>
                    <div class="custom-file-upload" style="border: 2px dashed rgba(255, 255, 255, 0.2); border-radius: 14px; padding: 25px; text-align: center; background: rgba(15, 23, 42, 0.5); transition: all 0.3s ease; cursor: pointer;">
                      <input type="file" class="custom-file-input" name="poster" id="poster" style="display: none;">
                      <label for="poster" style="cursor: pointer; margin: 0;">
                        <i class="fas fa-cloud-upload-alt" style="font-size: 2rem; color: #8b5cf6; margin-bottom: 10px; display: block;"></i>
                        <span style="color: #c7d2fe; font-weight: 500; display: block; margin-bottom: 5px;">Clique para selecionar uma imagem</span>
                        <span style="color: #94a3b8; font-size: 0.9rem;">PNG, JPG, JPEG até 5MB</span>
                      </label>
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
              <?php include('../config/conexao.php');
              if (isset($_POST['botao'])) {
                  // ... (código PHP para processar o formulário de filmes)
                  // Mantenha o mesmo código PHP adaptado para filmes
              } ?>
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
                  Filmes Recentes
                </h3>
         
              </div>

              <!-- Tabela de Filmes -->
              <div class="card-body p-0">
                <div class="table-container" style="border-radius: 0 0 24px 24px; overflow: hidden;">
                  <table class="table" style="margin: 0; background: transparent;">
                    <thead style="background: linear-gradient(135deg, rgba(15, 23, 42, 0.9) 0%, rgba(30, 41, 59, 0.7) 100%);">
                      <tr>
                        <th style="color: #a5b4fc; font-weight: 700; border: none; padding: 25px 20px; text-align: center; width: 60px;">#</th>
                        <th style="color: #a5b4fc; font-weight: 700; border: none; padding: 25px 20px; text-align: center; width: 80px;">Poster</th>
                        <th style="color: #a5b4fc; font-weight: 700; border: none; padding: 25px 20px;">Nome</th>
                        <th style="color: #a5b4fc; font-weight: 700; border: none; padding: 25px 20px;">Gênero</th>
                        <th style="color: #a5b4fc; font-weight: 700; border: none; padding: 25px 20px;">Classificação</th>
                        <th style="color: #a5b4fc; font-weight: 700; border: none; padding: 25px 20px;">Cinema</th>
                        <th style="color: #a5b4fc; font-weight: 700; border: none; padding: 25px 20px; text-align: center; width: 120px;">Ações</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $select = "SELECT * FROM tb_filmes WHERE id_user = :id_user ORDER BY id_filmes DESC LIMIT 6";
                      try {
                          $result = $conect->prepare($select);
                          $cont = 1; 
                          $result->bindParam(':id_user', $id_user, PDO::PARAM_INT);
                          $result->execute();
                          $contar = $result->rowCount();
                          
                          if ($contar > 0) {
                              while ($show = $result->FETCH(PDO::FETCH_OBJ)) {
                      ?>  
                      <tr style="border-bottom: 1px solid rgba(255, 255, 255, 0.05); transition: all 0.3s ease;">
                        <td style="color: #c7d2fe; border: none; padding: 20px; text-align: center; vertical-align: middle; font-weight: 600;"><?php echo $cont++; ?></td>
                        <td style="border: none; padding: 20px; text-align: center; vertical-align: middle;">
                          <div style="width: 50px; height: 70px; border-radius: 8px; overflow: hidden; border: 2px solid #8b5cf6; margin: 0 auto;">
                            <img src="../img/filmes/<?php echo $show->poster_filmes; ?>" alt="Poster" style="width: 100%; height: 100%; object-fit: cover;">
                          </div>
                        </td>
                        <td style="color: #ffffff; font-weight: 600; border: none; padding: 20px; vertical-align: middle;"><?php echo $show->nome_filmes; ?></td>
                        <td style="color: #c7d2fe; border: none; padding: 20px; vertical-align: middle;">
                          <i class="fas fa-theater-masks mr-2" style="color: #a78bfa;"></i><?php echo $show->genero_filmes; ?>
                        </td>
                        <td style="color: #c7d2fe; border: none; padding: 20px; vertical-align: middle;">
                          <i class="fas fa-star mr-2" style="color: #fbbf24;"></i><?php echo $show->classificacao_filmes; ?>
                        </td>
                        <td style="color: #c7d2fe; border: none; padding: 20px; vertical-align: middle;">
                          <i class="fas fa-building mr-2" style="color: #f59e0b;"></i><?php echo $show->cinema_filmes; ?>
                        </td>
                        <td style="border: none; padding: 20px; vertical-align: middle; text-align: center;">
                          <div class="btn-group">
                            <a href="home.php?acao=editar&id=<?php echo $show->id_filmes; ?>" class="btn" title="Editar" style="border-radius: 10px; border: none; background: linear-gradient(135deg, #34d399 0%, #10b981 100%); padding: 10px 14px; margin-right: 8px; color: white; transition: all 0.3s ease;">
                              <i class="fas fa-edit"></i>
                            </a>
                            <a href="conteudo/del-filme.php?idDel=<?php echo $show->id_filmes; ?>" onclick="return confirm('Deseja remover o filme?')" class="btn" title="Excluir" style="border-radius: 10px; border: none; background: linear-gradient(135deg, #f87171 0%, #ef4444 100%); padding: 10px 14px; color: white; transition: all 0.3s ease;">
                              <i class="fas fa-trash"></i>
                            </a>
                          </div>
                        </td>
                      </tr>
                      <?php
                              }
                          } else {
                      ?>
                      <tr>
                        <td colspan="7" style="text-align: center; padding: 60px 20px; border: none;">
                          <div style="color: #94a3b8; text-align: center;">
                            <i class="fas fa-film" style="font-size: 4rem; margin-bottom: 20px; display: block; background: linear-gradient(135deg, #94a3b8 0%, #64748b 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"></i>
                            <h4 style="color: #e2e8f0; margin-bottom: 10px; font-weight: 600;">Nenhum filme encontrado</h4>
                            <p style="color: #94a3b8; font-size: 1rem; margin-bottom: 0;">
                              Adicione seu primeiro filme usando o formulário ao lado
                            </p>
                          </div>
                        </td>
                      </tr>
                      <?php
                          }
                      } catch (PDOException $e) {
                          echo '<tr><td colspan="7" style="text-align: center; padding: 20px; color: #ef4444;">Erro ao carregar filmes</td></tr>';
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
</div>

<!-- Estilos Adicionais -->
<style>
  .form-control:focus {
    border-color: #8b5cf6 !important;
    box-shadow: 0 0 0 3px rgba(139, 92, 246, 0.2) !important;
    background: rgba(15, 23, 42, 0.9) !important;
    color: #ffffff !important;
    transform: translateY(-2px);
  }
  
  .custom-file-upload:hover {
    border-color: #8b5cf6 !important;
    background: rgba(15, 23, 42, 0.7) !important;
    transform: translateY(-2px);
  }
  
  button:hover {
    transform: translateY(-3px) !important;
    box-shadow: 0 12px 30px rgba(139, 92, 246, 0.5) !important;
  }
  
  .btn-group .btn:hover {
    transform: translateY(-2px) !important;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3) !important;
  }
  
  tr:hover {
    background: rgba(255, 255, 255, 0.05) !important;
  }
  
  .input-group-text {
    transition: all 0.3s ease;
  }
  
  .input-group:focus-within .input-group-text {
    color: #8b5cf6 !important;
    border-color: #8b5cf6 !important;
  }
</style>

<script>
  // Efeitos interativos
  document.addEventListener('DOMContentLoaded', function() {
    // Upload de arquivo
    const fileInput = document.getElementById('poster');
    const fileUpload = document.querySelector('.custom-file-upload');
    
    fileInput.addEventListener('change', function(e) {
      const fileName = this.files[0]?.name || "Nenhum arquivo selecionado";
      fileUpload.innerHTML = `
        <i class="fas fa-check-circle" style="font-size: 2rem; color: #34d399; margin-bottom: 10px; display: block;"></i>
        <span style="color: #34d399; font-weight: 500; display: block; margin-bottom: 5px;">Arquivo selecionado</span>
        <span style="color: #c7d2fe; font-size: 0.9rem;">${fileName}</span>
      `;
    });

    // Efeito de brilho no botão principal
    const mainButton = document.querySelector('button[type="submit"]');
    mainButton.addEventListener('mouseenter', function() {
      this.querySelector('div').style.left = '100%';
    });
    
    mainButton.addEventListener('mouseleave', function() {
      this.querySelector('div').style.left = '-100%';
    });
  });
</script>