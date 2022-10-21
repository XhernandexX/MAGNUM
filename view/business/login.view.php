<div class="col-mb-5">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center p-4">
  
        <div class="col-md-4">

            <div class="card text-white bg-light mb-3">

            <div class="card-body">
            <h2 class="card-title">Inicio de Sesión</h2>
            <p class="card-text">

            <p class="card-text">Recuerda que para iniciar sesión en el sistema debes estar registrado.
                <p>
                Si no lo estas o haz olvidado tus credenciales solicita por nuestras lineas de atención uno.
                </p>
            </p>
        </div>
    </div>
</div>

<div class="col-md-7 ">

    <form method="POST" enctype="multipart/form-data">

	<form action="?c=Login&a=validarLogin" method="post">
					<div class="email mb-4">
						<label class="sr-only" for="usuario">Usuario:</label>
						<input id="usuario" name="usuario" type="text" class="form-control usuario" placeholder="Usuario" required="required">
					</div>
					<div class="password mb-4">
						<label class="sr-only" for="contrasenia">Contraseña:</label>
						<input id="contrasenia" name="contrasenia" type="password" class="form-control contrasenia" placeholder="Contraseña" required="required">
						<div class="extra mt-3 row justify-content-between">
							<div class="col-6">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="RememberPassword">
									<label class="form-check-label" for="RememberPassword">
										Recuerdame
									</label>
								</div>
							</div>
							<div class="col-6"></div>
						</div>
					</div>
					<div class="text-center">
						<button type="submit" class="btn btn-light">Iniciar Sesión</button>
					</div>
				</form>

    </form>

</div>

</div>