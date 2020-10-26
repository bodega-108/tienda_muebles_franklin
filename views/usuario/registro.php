<div class="container mt-5">
<form action="<?=base_url?>/usuario/saveUsuario" method="POST">
<div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input type="text" name="nombre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"required/>
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Apellido</label>
    <input type="text" name="apellido" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"required/>
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"required/>
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password"class="form-control" id="exampleInputPassword1" required/>
  </div>

  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
<br>
</div>