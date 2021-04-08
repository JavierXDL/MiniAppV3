<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    

    <div class="container">

    <img class="card-img-top " style="height: 200px; width:200px" src="{{ asset('storage').'/'.$pasar->Portada }} " alt="Card image cap"> <br>
  <!-- Content here -->
              <!--Metodo del formulario mas vistoso-->
              <div class="form-group">
              <label for="Nombre" style="color: blue;"> Nombre </label>
              <li>{{ $pasar->Nombre }}</li>

              </div>
              <!--Fin del formulario mas vistoso-->

              <!--Metodo del formulario mas vistoso-->
              <div class="form-group">
              <label for="Nombre" style="color: blue;"> Autor </label>
              <li>{{ $pasar->Autor }}</li>
             
              </div>
              <!--Fin del formulario mas vistoso-->

              <!--Metodo del formulario mas vistoso-->
              <div class="form-group">
              <label for="Nombre" style="color: blue;"> Descripcion Corta </label>
              <li>{{ $pasar->DescripcionC }}</li>
              </div>
              <!--Fin del formulario mas vistoso-->
              <!--Metodo del formulario mas vistoso-->
              <div class="form-group">
              <label for="Nombre" style="color: blue;"> Descripcion </label>
              <li>{{ $pasar->description }}</li>
              </div>
              <!--Fin del formulario mas vistoso-->
              <!--Metodo del formulario mas vistoso-->
              <div class="form-group">
              
              <label for="Nombre" style="color: blue;"> ISBN </label>
              <img src="{{ asset('storage/logo1.png') }}" width="100px" height="50px" alt="">
              <li>{{ $pasar->ISBN }}</li>
              </div>
              <!--Fin del formulario mas vistoso-->
              <!--Metodo del formulario mas vistoso-->
              <div class="form-group">
              <label for="Nombre" style="color: blue;"> Editorial </label>
              <li>{{ $pasar->Editorial }}</li>
              </div>
              <!--Fin del formulario mas vistoso-->
              <!--Metodo del formulario mas vistoso-->
              <div class="form-group">
              <label for="Nombre" style="color: blue;"> Numero de paginas </label>
              <li>{{ $pasar->Npaginas }}</li>
              </div>
              <!--Fin del formulario mas vistoso-->
              <!--Metodo del formulario mas vistoso-->
              <div class="form-group">
              <label for="Nombre" style="color: blue;"> Edicion </label>
              <li>{{ $pasar->Edicion }}</li>
              </div>
              <!--Fin del formulario mas vistoso-->
              <!--Metodo del formulario mas vistoso-->
              <div class="form-group">
              <label for="Nombre" style="color: blue;"> Pais </label>
              <li>{{ $pasar->Pais }}</li>
              </div>
              <!--Fin del formulario mas vistoso-->
              <!--Metodo del formulario mas vistoso-->
              <div class="form-group">
              <label for="Nombre" style="color: blue;"> Año </label>
              <li>{{ $pasar->Anio }}</li>
              </div>
              <!--Fin del formulario mas vistoso-->
              <a class="btn btn-primary" href="{{ url('/') }}">Regresar </a>


</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>