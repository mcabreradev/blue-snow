<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>Blue-Snow</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="description" />
<meta content="" name="author" />
@include('libs/css')
</head>
<body class="error-body no-top">
<div class="container">
  <div class="lockscreen-wrapper animated  flipInX">
  <div class="row ">
    <div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4 col-xs-8 col-xs-offset-2">
    <p>
      [[ $errors->first('email') ]]
      [[ $errors->first('password') ]]
      [[ $errors->first(0) ]]
    </p>

		<h2>Inicio de Sesión</h2>
		 [[ Form::open(array('url' => 'login', 'id'=>'login-form', 'class'=>'login-form')) ]]
		 <div class="row">
		 <div class="form-group col-md-10">
            <label class="form-label">Usuario</label>
            <div class="controls">
				<div class="input-with-icon">
					<i class=""></i>
					[[Form::text('email', Input::old('email'), array('class' => 'form-control')) ]]
				</div>
            </div>
          </div>
          </div>
		  <div class="row">
          <div class="form-group col-md-10">
            <label class="form-label">Contraseña</label>
            <span class="help"></span>
            <div class="controls">
				<div class="input-with-icon">
					<i class=""></i>
					[[Form::password('password', array('class' => 'form-control'))]]
				</div>
            </div>
          </div>
          </div>
		  <div class="row">
          <div class="control-group  col-md-10">
            <div class="checkbox checkbox check-success"> <a href="#">Problemas?</a>&nbsp;&nbsp;
              <input type="checkbox" id="checkbox1" value="1">
              <label for="checkbox1">Recordar mis datos </label>
            </div>
          </div>
          </div>
          <div class="row">
            <div class="col-md-10">
              <button class="btn btn-primary btn-cons pull-right" type="submit">Entrar</button>
            </div>
          </div>
		  [[ Form::close() ]]
    </div>
   </div>
  </div>
  <div id="push"></div>
</div>
<script src="../plugins/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="../plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="../plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="../js/scripts/login.js" type="text/javascript"></script>
</body>
</html>