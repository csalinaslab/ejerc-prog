<?php $title = 'Ejercicios Programación II'; include("plantilla/top.php");?>

                <div class="mdl-grid">
                  <div class="mdl-cell mdl-cell--12-col">
                    <h5>Ingresar 5 nros y ordenarlos de forma ascendente.</h5>
                  </div>
                  <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">

                    <form id="form1" name="form1" method="post" action="logica.php">

                      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" name="n1" type="text" id="n1" onkeypress="return soloNumeros(event)">
                        <label class="mdl-textfield__label" for="">Ingrese Número 1 </label>
                      </div>

                      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" name="n2" type="text" id="n2" onkeypress="return soloNumeros(event)">
                        <label class="mdl-textfield__label" for="">Ingrese Número 2 </label>
                      </div>

                      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" name="n3" type="text" id="n3" onkeypress="return soloNumeros(event)">
                        <label class="mdl-textfield__label" for="">Ingrese Número 3 </label>
                      </div>

                      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" name="n4" type="text" id="n3" onkeypress="return soloNumeros(event)">
                        <label class="mdl-textfield__label" for="">Ingrese Número 4 </label>
                      </div>

                      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" name="n5" type="text" id="n3" onkeypress="return soloNumeros(event)">
                        <label class="mdl-textfield__label" for="">Ingrese Número 5 </label>
                      </div>

                        <input hidden class="mdl-textfield__input" name="funcion" type="text" id="funcion" value="orden5Numasc">
                        <div class="mdl-layout-spacer"></div>
                        <button onclick="enviar()" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
                          Enviar
                        </button>
                    </form>
                  </div>
                </div>


<script type="text/javascript" charset="utf-8">
  
    
</script>

<?php include("plantilla/bottom.php");?>