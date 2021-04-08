<h1> {{ $modo }} Libro </h1> 

@if(count($errors)>0)

    <div class="alert alert-danger" role="alert">
    <ul>
        @foreach($errors->all() as $error)
        <li>    {{  $error }}   </li>
    @endforeach
    </ul>
    </div>
   
@endif

<!--Metodo del formulario mas vistoso-->
<div class="form-group">
<label for="Nombre"> Nombre </label>
<input type="text"  class="form-control" name="Nombre" value=" {{ isset($pasar->Nombre)?$pasar->Nombre:old('Nombre') }}" id="Nombre">

</div>
<!--Fin del formulario mas vistoso-->


<!--Metodo del formulario mas vistoso-->
<div class="form-group">
<label for="Autor"> Autor </label>
<input type="text"  class="form-control" name="Autor" value=" {{ isset($pasar->Autor)?$pasar->Autor:old('Autor') }}"    id="Autor">

</div>
<!--Fin del formulario mas vistoso-->

<!--Metodo del formulario mas vistoso-->

<div class="form-group">

<label for="DescripcionC"> Descripcion Corta</label>
<input  type="text" class="form-control" name="DescripcionC" value=" {{ isset($pasar->DescripcionC)?$pasar->DescripcionC:old('DescripcionC') }}"  id="Descripcion">


   <!--  Metodo donde tu pones el espacio bro
 <textarea  rows="3" class="form-control"  name="DescripcionL" value=" {{ isset($pasar->DescripcionC)?$pasar->DescripcionC:old('DescripcionC') }}"  id="Descripcion"></textarea> -->

</div>

<!--Fin del formulario mas vistoso-->

<!--Metodo del formulario mas vistoso-->
<div class="form-group">
<label for="Portada"> Portada </label>

@if(isset($pasar->Portada))
<img src=" {{ asset('storage').'/'.$pasar->Portada }} "  widt="100" height="100" alt="">
@endif
<input type="file" class="form-control" name="Portada" value=""  id="Portada">

</div>
<!--Fin del formulario mas vistoso-->



<!--Metodo del formulario mas vistoso-->
<div class="form-group">
<label for="description"> Descripcion </label>
<textarea  rows="8" class="form-control"  name="description" value=" {{ isset($pasar->description)?$pasar->description:old('description') }}"  id="description"></textarea>

</div> 
<!--Fin del formulario mas vistoso-->

<!--Metodo del formulario mas vistoso-->
<div class="form-group">
<label for="Editorial">Editorial </label>
<input type="text"  class="form-control" name="Editorial" value=" {{ isset($pasar->Editorial)?$pasar->Editorial:old('Editorial') }}" id="Editorial">

</div>


<!--Metodo del formulario mas vistoso-->
<div class="form-group">
<label for="ISBN">ISBN </label>
<input type="text"  class="form-control" name="ISBN" value=" {{ isset($pasar->ISBN)?$pasar->ISBN:old('ISBN') }}" id="ISBN">

</div>
<!--Fin del formulario mas vistoso-->

<!--Metodo del formulario mas vistoso-->
<div class="form-group">
<label for="Npaginas">Numero De Paginas </label>
<input type="text"  class="form-control" name="Npaginas" value=" {{ isset($pasar->Npaginas)?$pasar->Npaginas:old('Npaginas') }}" id="Npaginas">

</div>
<!--Fin del formulario mas vistoso-->

<!--Metodo del formulario mas vistoso-->
<div class="form-group">
<label for="Edicion">Edicion </label>
<input type="text"  class="form-control" name="Edicion" value=" {{ isset($pasar->Edicion)?$pasar->Edicion:old('Edicion') }}" id="Edicion">

</div>
<!--Fin del formulario mas vistoso-->

<!--Metodo del formulario mas vistoso-->
<div class="form-group">
<label for="Pais">Pais </label>
<input type="text"  class="form-control" name="Pais" value=" {{ isset($pasar->Pais)?$pasar->Pais:old('Pais') }}" id="Pais">

</div>
<!--Fin del formulario mas vistoso-->

<!--Metodo del formulario mas vistoso-->
<div class="form-group">
<label for="Anio">Año </label>
<input type="text"  class="form-control" name="Anio" value=" {{ isset($pasar->Anio)?$pasar->Anio:old('Anio') }}" id="Anio">

</div>
<!--Fin del formulario mas vistoso-->


<input class="btn btn-success" type="submit" value=" {{ $modo }} Agregado"> 

<a class="btn btn-primary" href="{{ url('libro/') }} ">Regresar </a>