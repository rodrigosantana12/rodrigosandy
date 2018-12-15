<?php
  
  require('DadosAlunos.php'); 


?>
  <body>
  <?php require('navigation.php'); ?>

    <!-- Page Content -->
   
      <div class="row my-3">
        <div class="col-lg-12 text-center">
          <table class="table">
            <thead class="thead-light">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nome do Aluno</th>
                 <th scope="col">SobreNome</th>
                   <th scope="col">Sexo</th>
                  <th scope="col">Data de Nascimento</th>
                   <th scope="col">CPF</th>
                <th scope="col">Matricula</th>
              
              </tr>
            </thead>
            <tbody>
              <?php for($i = 1; $i <= 5; $i++) : ?>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <?php endfor; ?>
            </tbody>
          </table>
        </div>
      </div>      
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>