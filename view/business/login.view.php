	<div class="col-12 col-md-12 col-lg-12 auth-main-col text-center p-5">
		<div class="d-flex flex-column align-content-center">
			<div class="app-auth-body mx-auto">
				<div class="auth-form-container text-start">
					<form action="?c=Login&a=validarLogin" method="post">
						<div class="email mb-3">
							<label class="sr-only" for="usuario">Usuario</label>
							<input id="usuario" name="usuario" type="text" class="form-control usuario" placeholder="Usuario" required="required">
						</div>
						<div class="password mb-3">
							<label class="sr-only" for="contrasenia">Contraseña</label>
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
								<div class="col-6">
								</div>
							</div>
						</div>
						<div class="text-center">
							<button type="submit" class="btn btn-light">Iniciar Sesión</button>
						</div>
					</form>
				</div>					
			</div>
		</div>
	</div>
