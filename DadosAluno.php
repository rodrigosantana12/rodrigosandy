<?php
  $pageTitle = 'Aluno';
  require('header.php');
?>

<div class="container">
      <div class="row my-5">
        <div class="col-lg-12">
          <form>
            <div class="form-group">
              <label for="campoNome">Nome do Aluno</label>
              <input type="text" class="form-control" id="campoNome">
            </div>
             <label for="campoSobreNome">Sobrenome</label>
              <input type="text" class="form-control" id="campoSobreNome">
            </div>
            <div class="form-group">
              <label for="campoSexo">sexo</label>
              <input type="text" class="form-control" id="campoSexo">
            </div>
            <div class="form-group">
              <label for="campoData">Data de Nascimento</label>
              <input type="date" class="form-control" id="campoData">
            </div>
             <label for="campoCPF">CPF</label>
              <input type="text" class="texte-center" id="campoCPF">
            </div>
             <label for="campoMatricula">Matricula</label>
              <input type="text" class="form-control" id="campoMatricula">
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
          </form>          
        </div>
      </div>
     