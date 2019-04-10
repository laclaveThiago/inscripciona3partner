<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
		
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
		<script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.13/js/messages/messages.es-es.js" type="text/javascript"></script>
		<!-- Bootstrap Form Helpers -->
		<link href="dist/css/bootstrap-formhelpers.min.css" rel="stylesheet" media="screen">
		<!-- Bootstrap Form Helpers -->
		<script src="dist/js/bootstrap-formhelpers.min.js"></script>
	</head>
	<body>
		<div class="container">
			<form class="needs-validation" novalidate>
				<div class="">
					<!-- Nombre y Apellidos -->
					<div class="form-group col-md-12">
						<label for="validationCustom01">Nombre y Apellidos</label>
						<input type="text" class="form-control" id="validationCustom01" placeholder="Nombre y Apellidos" value="" required>
						<div class="invalid-feedback">
							El nombre y apellidos es obligatorio
						</div>
					</div>	
					
					<!-- Fecha de nacimiento -->
					<div class="form-group col-md-12">
						<label>Fecha de nacimiento</label>
						<input type="text" id="fechacumpleanos" class="form-control" placeholder="Fecha de nacimiento" value="" required>
						<div class="invalid-feedback">
							La fecha de nacimiento es obligatoria
						</div>
					</div>
					
					<!-- DNI -->
					<div class="form-group col-md-12">
						<label>DNI</label>
						<input type="text" id="validationCustom02" class="form-control" placeholder="DNI" value="" required>
						<div class="invalid-feedback">
							El DNI es obligatorio
						</div>
					</div>
					
					<!-- DNI Fecha de validez -->
					<div class="form-group col-md-12">
						<label>DNI fecha validez hasta</label>
						<input type="text" id="dnivalidez" class="form-control" placeholder="DNI fecha validez hasta" value="" required>
						<div class="invalid-feedback">
							La fecha de validez del DNI es obligatoria
						</div>
					</div>
					
					<!-- Telefono -->
					<div class="form-group col-md-12">
						<label>Teléfono</label>
						<input type="text" id="validationCustom03" class="form-control bfh-phone custom-control" data-format="ddd-dd-dd-dd" placeholder="Teléfono" value="" required>
						<div class="invalid-feedback">
							El teléfono es obligatorio
						</div>
					</div>
					
					<!-- Email -->
					<div class="form-group col-md-12">
						<label>Email</label>
						<input type="email" id="validationCustom04" class="form-control" placeholder="Email" value="" required>
						<div class="invalid-feedback">
							El email es obligatorio
						</div>
					</div>
					
					<h2> Datos del viaje </h2>
					<h3> Llegada: </h3>
					
					<!-- Vendrás en -->
					<h3> Vendrás en: </h3>
					<div class="custom-control custom-radio">
						<input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked" required>
						<label class="custom-control-label" for="customControlValidation2">Tren*</label>
					</div>
					<div class="custom-control custom-radio">
						<input type="radio" class="custom-control-input" id="customControlValidation3" name="radio-stacked" required>
						<label class="custom-control-label" for="customControlValidation3">Avión*</label>
					</div>
					<div class="custom-control custom-radio mb-3">
						<input type="radio" class="custom-control-input" id="customControlValidation4" name="radio-stacked" required>
						<label class="custom-control-label" for="customControlValidation4">Coche</label>
						<div class="invalid-feedback">Debes seleccionar una de las opciones</div>
					</div>
					*Una persona de la organización os recibirá y acompañará en un transfer hacia el hotel
					
					<!-- Llegarás el día -->
					<div class="form-group col-md-12">
						<label>Llegarás el día</label>
						<input type="text" id="llegarasdia" class="form-control" placeholder="Llegarás el día" value="" required>
						<div class="invalid-feedback">
							La fecha de llegada es obligatoria
						</div>
					</div>
					
					<!-- Hora de llegada -->
					<div class="bfh-timepicker">
						<label>Hora de llegada</label>
						<div class="input-group bfh-timepicker-toggle" data-toggle="bfh-timepicker">
							<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
							<input type="text" name="" class="form-control" placeholder="Hora de llegada" readonly="" required>
						</div>
						<div class="invalid-feedback">
							La hora de llegada es obligatoria
						</div>
					</div>
					
					<h3> Salida: </h3>
					
					<!-- Te irás en -->
					<h3> Te irás en: </h3>
					<div class="custom-control custom-radio">
						<input type="radio" class="custom-control-input" id="customControlValidation5" name="radio-stacked" required>
						<label class="custom-control-label" for="customControlValidation5">Tren*</label>
					</div>
					<div class="custom-control custom-radio">
						<input type="radio" class="custom-control-input" id="customControlValidation6" name="radio-stacked" required>
						<label class="custom-control-label" for="customControlValidation6">Avión*</label>
					</div>
					<div class="custom-control custom-radio mb-3">
						<input type="radio" class="custom-control-input" id="customControlValidation7" name="radio-stacked" required>
						<label class="custom-control-label" for="customControlValidation7">Coche</label>
						<div class="invalid-feedback">Debes seleccionar una de las opciones</div>
					</div>
					
					<!-- Te irás el día -->
					<div class="form-group col-md-12">
						<label>Te irás el día</label>
						<input type="text" id="teirasdia" class="form-control" placeholder="Día de salida" value="" required>
						<div class="invalid-feedback">
							La fecha de salida es obligatoria
						</div>
					</div>
					
					<!-- Hora de salida -->
					<div class="bfh-timepicker">
						<label>Hora de salida</label>
						<div class="input-group bfh-timepicker-toggle" data-toggle="bfh-timepicker">
							<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
							<input type="text" name="" class="form-control" placeholder="Hora de salida" readonly="" required>
						</div>
						<div class="invalid-feedback">
							La hora de salida es obligatoria
						</div>
					</div>
					
					<h3> Elige a que sesiones asistirás</h3>
					<!-- Sesión estratégica -->
					<div class="form-group">
						<label>Sesión estratégica:*</label>
						<select class="custom-select" required>
							<option value="">Selecciona</option>
							<option value="Estrategia de Producto y Negocio Despachos Profesionales">Estrategia de Producto y Negocio Despachos Profesionales</option>
							<option value="Estrategia de Producto y Negocio Pymes">Estrategia de Producto y Negocio Pymes</option>
						</select>
						<div class="invalid-feedback">Debes seleccionar una de las opciones</div>
					</div>
					
					<!-- ¿Asistirás al almuerzo del viernes 5 de octubre? -->
					¿Asistirás al almuerzo del viernes 5 de octubre?*
					<div class="custom-control custom-radio">
						<input type="radio" class="custom-control-input" id="customControlValidation21" name="radio-stacked" required>
						<label class="custom-control-label" for="customControlValidation21">Si</label>
					</div>
					<div class="custom-control custom-radio">
						<input type="radio" class="custom-control-input" id="customControlValidation31" name="radio-stacked" required>
						<label class="custom-control-label" for="customControlValidation31">No</label>
					</div>
					
					<h3>Sesiones paralelas de Marketing y Comunicación (miércoles 3 de Octubre)</h3>
					<p>
						Antes de elegir tus sesiones y actividades te invitamos a consultar la agenda de las Jornadas para ampliar la información de las sesiones y seleccionar a cuales vas a asistir (puedes seleccionar hasta 4, una en cada bloque horario).
					</p>
					
					<div class="form-group">
						<label>Sesión 1: de 17:30h a 17:55h*</label>
						<select class="custom-select" required>
							<option value="">Selecciona una</option>
							<option value="Desayuno Wolters Kluwer">Desayuno Wolters Kluwer</option>
							<option value="Amplifica tu marca con Wolters Kluwer">Amplifica tu marca con Wolters Kluwer</option>
							<option value="Gestión de talento y comunicación interna">Gestión de talento y comunicación interna</option>
							<option value="ninguna">ninguna</option></select>
						</select>
						<div class="invalid-feedback">Debes seleccionar una de las opciones</div>
					</div>
					
					<div class="form-group">
						<label>Sesión 2: de 17:55h a 18:25h*</label>
						<select class="custom-select" required>
							<option value="">Selecciona una</option>
							<option value="Desayuno Wolters Kluwer">Desayuno Wolters Kluwer</option>
							<option value="Amplifica tu marca con Wolters Kluwer">Amplifica tu marca con Wolters Kluwer</option>
							<option value="Gestión de talento y comunicación interna">Gestión de talento y comunicación interna</option>
							<option value="ninguna">ninguna</option></select>
						</select>
						<div class="invalid-feedback">Debes seleccionar una de las opciones</div>
					</div>
					
					<div class="form-group">
						<label>Sesión 3: de 18:30h a 18:55h*</label>
						<select class="custom-select" required>
							<option value="">Selecciona una</option>
							<option value="Smart web, Smart content, Smart User…Status y road map">Smart web, Smart content, Smart User…Status y road map</option>
							<option value="Rentabiliza y maximiza tu Marketing y Comunicación  con un modelo de trazabilidad">Rentabiliza y maximiza tu Marketing y Comunicación  con un modelo de trazabilidad</option>
							<option value="Explota tu Marketing de Proximidad adaptado a tu negocio">Explota tu Marketing de Proximidad adaptado a tu negocio</option>
							<option value="ninguna">ninguna</option></select>
						</select>
						<div class="invalid-feedback">Debes seleccionar una de las opciones</div>
					</div>
					
					<div class="form-group">
						<label>Sesión 4: de 18:55h a 19:25h</label>
						<select class="custom-select" required>
							<option value="">Selecciona una</option>
							<option value="Smart web, Smart content, Smart User…Status y road map">Smart web, Smart content, Smart User…Status y road map</option>
							<option value="Rentabiliza y maximiza tu Marketing y Comunicación  con un modelo de trazabilidad">Rentabiliza y maximiza tu Marketing y Comunicación  con un modelo de trazabilidad</option>
							<option value="Explota tu Marketing de Proximidad adaptado a tu negocio">Explota tu Marketing de Proximidad adaptado a tu negocio</option>
							<option value="ninguna">ninguna</option></select>
						</select>
						<div class="invalid-feedback">Debes seleccionar una de las opciones</div>
					</div>
				</div>
			  <button class="btn btn-primary" type="submit">Enviar</button>
			</form>
		</div>
	</body>
	<footer>
	</footer>
	<script>
		(function() {
		  'use strict';
		  window.addEventListener('load', function() {
			// Fetch all the forms we want to apply custom Bootstrap validation styles to
			var forms = document.getElementsByClassName('needs-validation');
			// Loop over them and prevent submission
			var validation = Array.prototype.filter.call(forms, function(form) {
			  form.addEventListener('submit', function(event) {
				if (form.checkValidity() === false) {
				  event.preventDefault();
				  event.stopPropagation();
				}
				form.classList.add('was-validated');
			  }, false);
			});
		  }, false);
		})();
		
		$('#fechacumpleanos').datepicker({
            uiLibrary: 'bootstrap4',
			locale: 'es-es'
        });
		
		$('#dnivalidez').datepicker({
            uiLibrary: 'bootstrap4',
			locale: 'es-es'
        });
		
		$('#llegarasdia').datepicker({
            uiLibrary: 'bootstrap4',
			locale: 'es-es'
        });
		
		$('#teirasdia').datepicker({
            uiLibrary: 'bootstrap4',
			locale: 'es-es'
        });
		
		/*
		var nowTemp = new Date();
		var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);
		console.log(now);
		
		var checkin = $('#dnivalidez').datepicker({
			onRender: function(date) {
				return date.valueOf() < now.valueOf() ? 'disabled' : '';
			}
		}).on('changeDate', function(ev) {
			if (ev.date.valueOf() > checkout.date.valueOf()) {
				var newDate = new Date(ev.date)
				newDate.setDate(newDate.getDate() + 1);
				checkout.setValue(newDate);
			}
			checkin.hide();
		}).data('datepicker');
		*/
		
		
	</script>
</html>