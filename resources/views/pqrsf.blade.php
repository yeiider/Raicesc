@include('thema.head')

<style>
	body{
		background-color: background: -moz-linear-gradient(45deg, rgba(232,255,56,1) 0%, rgba(232,255,56,1) 22%, rgba(232,255,56,1) 25%, rgba(232,255,56,1) 30%, rgba(2,122,28,1) 61%, rgba(2,5,3,1) 85%, rgba(2,5,3,1) 100%); /* ff3.6+ */
		background: -webkit-gradient(linear, left bottom, right top, color-stop(0%, rgba(232,255,56,1)), color-stop(22%, rgba(232,255,56,1)), color-stop(25%, rgba(232,255,56,1)), color-stop(30%, rgba(232,255,56,1)), color-stop(61%, rgba(2,122,28,1)), color-stop(85%, rgba(2,5,3,1)), color-stop(100%, rgba(2,5,3,1))); /* safari4+,chrome */
		background: -webkit-linear-gradient(45deg, rgba(232,255,56,1) 0%, rgba(232,255,56,1) 22%, rgba(232,255,56,1) 25%, rgba(232,255,56,1) 30%, rgba(2,122,28,1) 61%, rgba(2,5,3,1) 85%, rgba(2,5,3,1) 100%); /* safari5.1+,chrome10+ */
		background: -o-linear-gradient(45deg, rgba(232,255,56,1) 0%, rgba(232,255,56,1) 22%, rgba(232,255,56,1) 25%, rgba(232,255,56,1) 30%, rgba(2,122,28,1) 61%, rgba(2,5,3,1) 85%, rgba(2,5,3,1) 100%); /* opera 11.10+ */
		background: -ms-linear-gradient(45deg, rgba(232,255,56,1) 0%, rgba(232,255,56,1) 22%, rgba(232,255,56,1) 25%, rgba(232,255,56,1) 30%, rgba(2,122,28,1) 61%, rgba(2,5,3,1) 85%, rgba(2,5,3,1) 100%); /* ie10+ */
		background: linear-gradient(45deg, rgba(232,255,56,1) 0%, rgba(232,255,56,1) 22%, rgba(232,255,56,1) 25%, rgba(232,255,56,1) 30%, rgba(2,122,28,1) 61%, rgba(2,5,3,1) 85%, rgba(2,5,3,1) 100%); /* w3c */
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#020503', endColorstr='#E8FF38',GradientType=1 ); /* ie6-9 */
	}
</style>
<div class="container mt-5">
	<form action="{{route('pqrsf2')}}" enctype="multipart/form-data" method="post">
		<div class="row">
			<div class="col-8">
				<h1 style="font-family:'proxima_novablack' ,sans-serif; text-transform: uppercase;">REGISTRO DE PQR’S</h1>
				<p>Diligencia tus peticiones, quejas y reclamaciones <br>
					Nombre de la empresa a la que va dirigida la petición, queja o recurso: <br>
					<strong class="text-white">Global Raices Comunicaciones S.A.S.</strong></p>
				</div>
				<div class="col-3">
					<img src="{{asset('assets/img/logo.png')}}" width="250" alt="">

				</div>
			</div>
			  {{ csrf_field() }}


			<div class="form-group">
				<label calss="label-control" for="motivo">Motivo de la solicitud</label>
				<select name="motivo" id="motivo" class="form-control" required="" data-validation-required-message="Por favor es necesario que espesifique el tipo de solicitud" >
					<option value="">Seleccione Una</option>
					<option value="peticion">Peticion</option>
					<option value="queja">Queja</option>
					<option value="recurso">Recurso</option>
				</select>
				<p class="help-block text-danger"></p>
			</div>
			<div class="form-group">
				<label for="municipio">Ciudad o Municipio</label>
				<input type="text" class="form-control" name="municipio" placeholder="Guachene" required="required" id="municipio" data-validation-required-message="Por favor ingrese su Municipio">
				<p class="help-block text-danger"></p>
			</div>
			<div class="form-group">
				<label for="razon">Razón Social</label>
				<input type="text" class="form-control" name="razon" required="required" id="razon" placeholder="Mi Negocio S.A.S. o Nombre" data-validation-required-message="Por favor ingrese su Nombre o Razon Social">
				<p class="help-block text-danger"></p>
			</div>
			<div class="form-group">
				<label for="documento">Numero de documento de identidad</label>
				<input type="text" class="form-control" required="required" id="documento" placeholder="825 365 5475" name="documento" data-validation-required-message="Es necesario que indique su numero de documento">
				<p class="help-block text-danger"></p>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-6">
						<label for="nombre-contacto">Nombre de contácto</label>
						<input type="text" class="form-control" required="required" id="nombre-contacto" placeholder="Carlos Rodriguez" name="nombre" data-validation-required-message="Ingrese Su nombre!">
						<p class="help-block text-danger"></p>
					</div>
					<div class="col-6">
						<label for="direccion">Dirección de notificación</label>
						<input type="text" class="form-control" required="required" id="direccion" placeholder="Avenida 30 de Agosto #6-87" name="direccion" data-validation-required-message="No ha Ingresado su direccion de contacto">
						<p class="help-block text-danger"></p>
					</div>
				</div>

			</div>

			<div class="form-group">
				<div class="row">
					<div class="col-6">
						<label for="telefono">Teléfono fijo <small class="text-info">Opcional</small></label>
						<input type="text" class="form-control"  id="telefono" placeholder="825 9090" name="telefono">
						<p class="help-block text-danger"></p>
					</div>
					<div class="col-6">
						<label for="extension">Extensión</label>
						<input type="text" class="form-control" id="extension" placeholder="001" name="extension">
						<p class="help-block text-danger"></p>
					</div>
				</div>

			</div>

			<div class="form-group">
				<div class="row">
					<div class="col-6">
						<label for="celular">Celular</label>
						<input type="tel" class="form-control"  id="celular" placeholder="311 369 1687" name="celular"
						data-validation-required-message="Ingrese el Numero de Telefono" required="required">
						<p class="help-block text-danger"></p>
					</div>
					<div class="col-6">
						<label for="email">Tú email</label>
						<input type="email" class="form-control" id="email" placeholder="tucorreo@dominio.com" name="email" data-validation-required-message="Ingrese Su Correo Electronico" required="required">
						<p class="help-block text-danger"></p>
					</div>
				</div>

			</div>
			<div class="form-group">
				<label for="message">Hechos en que se fundamenta la Petición, Queja o Recurso</label>
				<textarea class="form-control" id="message" placeholder="Recuerda Saludar!" required="required" name="message" data-validation-required-message="Por favor ingrese su mensaje"></textarea>
				<p class="help-block text-danger"></p>
			</div>
			<div class="form-group">
				<label for="">Si tiene algún documento que soporte los hechos citados por favor adjuntarlos de lo contrario no es necesario hacerlo (Formatos: png, jpg, gif, xls, xlsx, doc, docx, pdf)</label>
			
					<div class="custom-file">
						<input type="file" class="custom-file-input" id="customFile" name="file" >
						<label class="custom-file-label" for="customFile">Choose file</label>

					</div>
			</div>

			<div class="form-group">

				<input type="checkbox" class="mr-3" required="required" data-validation-required-message="Debes Aceptar los terminos y condiciones" id="terminos1"><label for="terminos1">Acepto las Políticas de <a href="#terminos" class="text-danger" data-toggle="modal">privacidad y tratamiento de datos</a></label>
			
                <input type="hidden" name="radicado" value={{rand(000000,999999)}}>
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-success" name="enviar">
				</div>

			</form>
		</div>


		<div class="portfolio-modal modal fade" id="terminos" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="close-modal" data-dismiss="modal">
						<div class="lr">
							<div class="rl"></div>
						</div>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-lg-8 mx-auto">
								<div class="modal-body">
									<!-- Project Details Go Here -->

									<p class="item-intro text-muted">

										<P ALIGN=JUSTIFY STYLE="margin-bottom: 0in; line-height: 100%; widows: 2; orphans: 2">
											<STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="proxima novablack, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">POLÍTICA
											DE TRATAMIENTO DE LA INFORMACIÓN</SPAN></SPAN></FONT></FONT></FONT></SPAN></STRONG><BR><STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="proxima novasemibold, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">LEY
											1581 DE 2012 – DECRETO 1377 DE 2013</SPAN></SPAN></FONT></FONT></FONT></SPAN></STRONG><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">29
											DE JULIO DE 2013</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><BR><STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="proxima novasemibold, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">1.
											PRESENTACIÓN</SPAN></SPAN></FONT></FONT></FONT></SPAN></STRONG><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">Este
												documento incluye las políticas de Tratamiento de la Información
											adoptadas por </SPAN></SPAN></FONT></FONT></FONT></SPAN><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">GLOBAL
											RAICES S.A.S.</SPAN></SPAN></FONT></FONT></FONT></SPAN><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">
												en cumplimiento con lo establecido en la Ley 1581 de 2012 y en el
												Decreto 1377 de 2013, que regula la protección de datos personales y
												en especial la atención de consultas y reclamos relacionados.
												Igualmente, define los principios en materia de Tratamiento y
												garantiza derechos para los Titulares de los datos
											personales.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">RESPONSABLE
											DEL TRATAMIENTO DE DATOS</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">Nombre:
											</SPAN></SPAN></FONT></FONT></FONT></SPAN><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">GLOBAL
											RAICES</SPAN></SPAN></FONT></FONT></FONT></SPAN><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">
											S.A.S</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">Dirección:
											</SPAN></SPAN></FONT></FONT></FONT></SPAN><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">Calle
											8 #6-511</SPAN></SPAN></FONT></FONT></FONT></SPAN><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">-Colombia</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">Página
											</SPAN></SPAN></FONT></FONT></FONT></SPAN><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="text-decoration: none"><SPAN STYLE="font-weight: normal">We</SPAN></SPAN></SPAN></FONT></FONT></FONT></SPAN><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">b:&nbsp;</SPAN></SPAN></FONT></FONT></FONT></SPAN><A HREF="https://www.mc.net.co/index.html" TARGET="_blank"><SPAN STYLE="font-variant: normal"><FONT COLOR="#007aff"><SPAN STYLE="text-decoration: none"><FONT FACE="proxima novasemibold, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal"><SPAN STYLE="background: #ffffff">www.</SPAN></SPAN></SPAN></FONT></FONT></SPAN></FONT></SPAN></A><A HREF="https://www.mc.net.co/index.html" TARGET="_blank"><SPAN STYLE="font-variant: normal"><FONT COLOR="#007aff"><SPAN STYLE="text-decoration: none"><FONT FACE="proxima novasemibold, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN LANG="zxx"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal"><SPAN STYLE="background: #ffffff">raicesc</SPAN></SPAN></SPAN></SPAN></FONT></FONT></SPAN></FONT></SPAN></A><A HREF="https://www.mc.net.co/index.html" TARGET="_blank"><SPAN STYLE="font-variant: normal"><FONT COLOR="#007aff"><SPAN STYLE="text-decoration: none"><FONT FACE="proxima novasemibold, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal"><SPAN STYLE="background: #ffffff">.net</SPAN></SPAN></SPAN></FONT></FONT></SPAN></FONT></SPAN></A><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">Correo
											electrónico: </SPAN></SPAN></FONT></FONT></FONT></SPAN><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">raicesc</SPAN></SPAN></FONT></FONT></FONT></SPAN><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">@</SPAN></SPAN></FONT></FONT></FONT></SPAN><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">raicesc</SPAN></SPAN></FONT></FONT></FONT></SPAN><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">.net</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">Teléfono:
											(6) </SPAN></SPAN></FONT></FONT></FONT></SPAN><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">825
											- 9090</SPAN></SPAN></FONT></FONT></FONT></SPAN><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">
											</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><BR><STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="proxima novasemibold, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">2.
											ANTECEDENTES NORMATIVOS</SPAN></SPAN></FONT></FONT></FONT></SPAN></STRONG><BR><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">2.1
											Artículo 15 de la Constitución Política</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d">“</FONT></SPAN><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">Todas
												las personas tienen derecho a su intimidad personal y familiar y a su
												buen nombre, y el Estado debe respetarlos y hacerlos respetar. De
												igual modo, tienen derecho a conocer, actualizar y rectificar las
												informaciones que se hayan recogido sobre ellas en bancos de datos y
											en archivos de entidades públicas y privadas.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">En
												la recolección, tratamiento y circulación de datos se respetarán
											la libertad y demás garantías consagradas en la Constitución”.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">2.2
											Artículo 20 de la Constitución Política</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d">“</FONT></SPAN><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">Se
												garantiza a toda persona la libertad de expresar y difundir su
												pensamiento y opiniones, la de informar y recibir información veraz
											e imparcial, y la de fundar medios masivos de comunicación.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">Estos
												son libres y tienen responsabilidad social. Se garantiza el derecho a
											la rectificación en condiciones de equidad. No habrá censura”.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><BR><STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="proxima novasemibold, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">3.
											OBJETO</SPAN></SPAN></FONT></FONT></FONT></SPAN></STRONG><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">Dar
												a conocer las Políticas de Tratamiento de la Información y los
												procedimientos del Sistema de Protección de Datos Personales
											implementados por&nbsp;</SPAN></SPAN></FONT></FONT></FONT></SPAN><STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="proxima novasemibold, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">GLOBAL
											RAICESC®</SPAN></SPAN></FONT></FONT></FONT></SPAN></STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d">&nbsp;</FONT></SPAN><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">con
												el fin de garantizar el adecuado cumplimiento de la Ley 1581 de 2012
												y el Decreto 1377 de 2013, los cuales tienen por objeto desarrollar
												el derecho constitucional que tienen todas las personas a conocer,
												actualizar y rectificar las informaciones que se hayan recogido sobre
												ellas en bases de datos o archivos, y los demás derechos, libertades
												y garantías constitucionales a que se refiere el artículo 15 de la
												Constitución Política; así como el derecho a la información
											consagrado en el artículo 20 de la misma.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><BR><STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="proxima novasemibold, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">4.
											ÁMBITO DE APLICACIÓN</SPAN></SPAN></FONT></FONT></FONT></SPAN></STRONG><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">Las
												políticas y procedimientos contenidos en este Documento, serán
												aplicables a los datos de carácter personal, registrados en
												cualquier base de datos que los haga susceptibles de tratamiento por
											parte de&nbsp;</SPAN></SPAN></FONT></FONT></FONT></SPAN><STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="proxima novasemibold, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">GLOBAL
											RAICESC®</SPAN></SPAN></FONT></FONT></FONT></SPAN></STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">.
											Estas políticas son de carácter obligatorio para&nbsp;</SPAN></SPAN></FONT></FONT></FONT></SPAN><STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="proxima novasemibold, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">GLOBAL
											RAICESC®</SPAN></SPAN></FONT></FONT></FONT></SPAN></STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d">&nbsp;</FONT></SPAN><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">en
												calidad de responsable del Tratamiento de datos, así como para los
												encargados que realizan el tratamiento de datos personales por cuenta
											de&nbsp;</SPAN></SPAN></FONT></FONT></FONT></SPAN><STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="proxima novasemibold, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">GLOBAL
											RAICESC®</SPAN></SPAN></FONT></FONT></FONT></SPAN></STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">Tanto
												el responsable como los encargados deben salvaguardar la seguridad de
												las bases de datos que contengan datos personales y guardar la
											confidencialidad respecto del Tratamiento.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><BR><STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="proxima novasemibold, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">5.
											DEFINICIONES</SPAN></SPAN></FONT></FONT></FONT></SPAN></STRONG><BR><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">5.1
											Autorización</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">Consentimiento
												previo, expreso e informado del Titular para llevar a cabo el
											Tratamiento de datos personales.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">5.2
											Base de Datos</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">Conjunto
											organizado de datos personales que sea objeto de Tratamiento.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">5.3
											Dato personal</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">Cualquier
												información vinculada o que pueda asociarse a una o varias personas
											naturales determinadas o determinables.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">5.4
											Encargado del Tratamiento</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">Persona
												natural o jurídica, pública o privada, que por sí misma o en
												asocio con otros, realice el Tratamiento de datos personales por
											cuenta del Responsable del Tratamiento.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">5.5
											Responsable del Tratamiento</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">Persona
												natural o jurídica, pública o privada, que por sí misma o en
												asocio con otros, decida sobre la base de datos y/o el Tratamiento de
											los datos;</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">5.6
											Titular</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">Persona
												natural cuyos datos personales sean objeto de Tratamiento; cualquier
												operación o conjunto de operaciones sobre datos personales, tales
												como la recolección, almacenamiento, uso, circulación o
											supresión.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">5.7
											Tratamiento</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">Cualquier
												operación o conjunto de operaciones sobre datos personales, tales
												como la recolección, almacenamiento, uso, circulación o
											supresión.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">5.8
											Consultas</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">Solicitud
												de la información personal del Titular que repose en cualquier base
											de datos usada por&nbsp;</SPAN></SPAN></FONT></FONT></FONT></SPAN><STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="proxima novasemibold, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">GLOBAL
											RAICESC®</SPAN></SPAN></FONT></FONT></FONT></SPAN></STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">,
												sobre la cual tiene la obligación de suministrar al Titular o sus
												causahabientes, toda la información contenida en el registro
												individual o que esté vinculada con la identificación del
											Titular.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">5.9
											Reclamos</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">Solicitud
												de corrección, actualización o supresión de la información
											contenida en una base de datos usada por&nbsp;</SPAN></SPAN></FONT></FONT></FONT></SPAN><STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="proxima novasemibold, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">GLOBAL
											RAICESC®</SPAN></SPAN></FONT></FONT></FONT></SPAN></STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">,
												o solicitud por presunto incumplimiento de cualquiera de los deberes
												contenidos en la Ley 1581 de 2012, realizada por el Titular o sus
											causahabientes.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">5.10
											Dato público</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">Es
												el dato que no sea semiprivado, privado o sensible. Son considerados
												datos públicos, entre otros, los datos relativos al estado civil de
												las personas, a su profesión u oficio y a su calidad de comerciante
												o de servidor público. Por su naturaleza, los datos públicos pueden
												estar contenidos, entre otros, en registros púbicos, documentos
												públicos, gacetas y boletines oficiales y sentencias judiciales
											debidamente ejecutoriadas que no estén sometidas a reserva.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><BR><STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="proxima novasemibold, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">6.
											PRINCIPIOS</SPAN></SPAN></FONT></FONT></FONT></SPAN></STRONG><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">Los
											siguientes principios serán tenidos en cuenta por&nbsp;</SPAN></SPAN></FONT></FONT></FONT></SPAN><STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="proxima novasemibold, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">GLOBAL
											RAICESC®</SPAN></SPAN></FONT></FONT></FONT></SPAN></STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d">&nbsp;</FONT></SPAN><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">en
											el proceso de administración de datos personales.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">6.1
											Legalidad en materia de Tratamiento de datos</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">El
												Tratamiento a que se refiere la Ley 1581 de 2012, es una actividad
												reglada que debe sujetarse a lo establecido en ella y en las demás
											disposiciones que la desarrollen.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">6.2
											Finalidad y Tratamiento</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">El
												Tratamiento debe obedecer a una finalidad legítima de acuerdo con la
											Constitución y la Ley, la cual debe ser informada al Titular.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">El
												Tratamiento y la finalidad de la información de las bases de datos
											de&nbsp;</SPAN></SPAN></FONT></FONT></FONT></SPAN><STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="proxima novasemibold, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">GLOBAL
											RAICESC®</SPAN></SPAN></FONT></FONT></FONT></SPAN></STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d">&nbsp;</FONT></SPAN><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">se
												encuentran relacionados con la prestación del servicio, relación
											contractual, fines comerciales y/o publicitarios.&nbsp;</SPAN></SPAN></FONT></FONT></FONT></SPAN><STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="proxima novasemibold, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">GLOBAL
											RAICESC®</SPAN></SPAN></FONT></FONT></FONT></SPAN></STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d">&nbsp;</FONT></SPAN><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">podrá
											transmitir la información a terceros proveedores.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">El
												Tratamiento sólo puede ejercerse con el consentimiento, previo,
											expreso e informado del Titular.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">Los
												datos personales no podrán ser obtenidos o divulgados sin previa
												autorización, o en ausencia de mandato legal o judicial que releve
											el consentimiento.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">6.3
											Libertad</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">El
												tratamiento sólo puede ejercerse con el consentimiento, previo,
												expreso e informado del titular. Los datos personales no podrán ser
												obtenidos o divulgados sin previa autorización, o en ausencia de
											mandato legal o judicial que releve el consentimiento.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">6.4
											Veracidad o calidad</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">La
												información sujeta a Tratamiento debe ser veraz, completa, exacta,
												actualizada, comprobable y comprensible. Se prohíbe el Tratamiento
												de datos parciales, incompletos, fraccionados o que induzcan a
											error.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">6.5
											Transparencia</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">En
												el Tratamiento debe garantizarse el derecho del Titular a obtener
											de&nbsp;</SPAN></SPAN></FONT></FONT></FONT></SPAN><STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="proxima novasemibold, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">GLOBAL
											RAICESC®</SPAN></SPAN></FONT></FONT></FONT></SPAN></STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d">&nbsp;</FONT></SPAN><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">o
												del encargado del Tratamiento, en cualquier momento y sin
												restricciones, información acerca de la existencia de datos que le
											conciernan.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">6.6
											Acceso y circulación restringida</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">El
												Tratamiento se sujeta a los límites que se derivan de la naturaleza
												de los datos personales, de las disposiciones de la Ley 1581 de 2012
												y la Constitución. En este sentido, el Tratamiento sólo podrá
												hacerse por personas autorizadas por el Titular y/o por las personas
											previstas en la Ley.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">Los
												datos personales, salvo la información pública, no podrán estar
												disponibles en Internet u otros medios de divulgación o comunicación
												masiva, salvo que el acceso sea técnicamente controlable para
												brindar un conocimiento restringido sólo a los Titulares o terceros
											autorizados conforme a la Ley.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">6.7
											Seguridad</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">La
												información sujeta a Tratamiento por el Responsable del Tratamiento
												o Encargado del Tratamiento, se deberá manejar tomando las medidas
												técnicas, humanas y administrativas que sean razonables para otorgar
												seguridad a los registros procurando evitar su adulteración,
											pérdida, consulta, uso o acceso no autorizado o fraudulento.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">6.8
											Confidencialidad</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">Todas
												las personas que intervengan en el Tratamiento de datos personales
												que no tengan la naturaleza de públicos están obligadas a
												garantizar la reserva de la información, inclusive después de
												finalizada su relación con alguna de las labores que comprende el
												Tratamiento, pudiendo sólo realizar suministro o comunicación de
												datos personales cuando ello corresponda al desarrollo de las
											actividades autorizadas en la Ley y en los términos de la misma.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><BR><STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="proxima novasemibold, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">7.
											DATOS SENSIBLES</SPAN></SPAN></FONT></FONT></FONT></SPAN></STRONG><BR><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">7.1
											Definición</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">Son
												los datos que afectan la intimidad del Titular o cuyo uso indebido
												puede generar su discriminación, tales como aquellos que revelen el
												origen racial o étnico, la orientación política, las convicciones
												religiosas o filosóficas, la pertenencia a sindicatos,
												organizaciones sociales, de derechos humanos o que promueva intereses
												de cualquier partido político o que garanticen los derechos y
												garantías de partidos políticos de oposición así como los datos
											relativos a la salud, a la vida sexual y los datos biométricos.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">7.2
											Tratamiento</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">Se
											prohíbe el Tratamiento de datos sensibles, excepto cuando:</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">a)
												El Titular haya dado su autorización explícita a dicho Tratamiento,
												salvo en los casos que por ley no sea requerido el otorgamiento de
											dicha autorización.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">b)
												El Tratamiento sea necesario para salvaguardar el interés vital del
												Titular y este se encuentre física o jurídicamente incapacitado. En
												estos eventos, los representantes legales deberán otorgar su
											autorización.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">c)
												El Tratamiento sea efectuado en el curso de las actividades legítimas
												y con las debidas garantías por parte de una fundación, ONG,
												asociación o cualquier otro organismo sin ánimo de lucro, cuya
												finalidad sea política, filosófica, religiosa o sindical, siempre
												que se refieran exclusivamente a sus miembros o a las personas que
												mantengan contactos regulares por razón de su finalidad. En estos
												eventos, los datos no se podrán suministrar a terceros sin la
											autorización del Titular.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">d)
												El Tratamiento se refiera a datos que sean necesarios para el
												reconocimiento, ejercicio o defensa de un derecho en un proceso
											judicial.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">e)
												El Tratamiento tenga una finalidad histórica, estadística o
												científica. En este evento deberán adoptarse las medidas
											conducentes a la supresión de identidad de los Titulares.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">En
												el Tratamiento de datos personales sensibles, cuando dicho
												Tratamiento sea posible conforme a las excepciones citadas
												anteriormente contenidas en el artículo 6 de la Ley 1581 de 2012,
											deberán cumplirse las siguientes obligaciones:</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">1.
												Informar al Titular que por tratarse de datos sensibles no está
											obligado a autorizar su Tratamiento.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">2.
												Informar al Titular de forma explícita y previa, además de los
												requisitos generales de la autorización para la recolección de
												cualquier tipo de dato personal, cuáles de los datos que serán
												objeto de Tratamiento son sensibles y la finalidad del Tratamiento,
											así como obtener su consentimiento expreso.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">7.3
											Derechos de los niños, niñas y adolescentes</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">En
												el Tratamiento se asegurará el respeto a los derechos prevalentes de
											los niños, niñas y adolescentes.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">Queda
												proscrito el Tratamiento de datos personales de niños, niñas y
												adolescentes, salvo aquellos datos que sean de naturaleza
											pública.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><BR><STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="proxima novasemibold, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">8.
											Derechos de los titulares</SPAN></SPAN></FONT></FONT></FONT></SPAN></STRONG><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">El
											Titular de los datos personales tendrá los siguientes derechos:</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">a)
											Conocer, actualizar y rectificar sus datos personales frente a&nbsp;</SPAN></SPAN></FONT></FONT></FONT></SPAN><STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="proxima novasemibold, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">GLOBAL
											RAICESC®</SPAN></SPAN></FONT></FONT></FONT></SPAN></STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d">&nbsp;</FONT></SPAN><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">o
												frente al Encargado del Tratamiento designado. Este derecho se podrá
												ejercer, entre otros frente a datos parciales, inexactos,
												incompletos, fraccionados, que induzcan a error, o aquellos cuyo
												Tratamiento esté expresamente prohibido o no haya sido
											autorizado;</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">b)
											Solicitar prueba de la autorización otorgada a&nbsp;</SPAN></SPAN></FONT></FONT></FONT></SPAN><STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="proxima novasemibold, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">GLOBAL
											RAICESC®</SPAN></SPAN></FONT></FONT></FONT></SPAN></STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">,
												salvo cuando expresamente se exceptúe como requisito para el
												Tratamiento, de conformidad con lo previsto en el artículo 10 de la
											Ley 1581 de 2012.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">c)
											Ser informado por parte de&nbsp;</SPAN></SPAN></FONT></FONT></FONT></SPAN><STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="proxima novasemibold, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">GLOBAL
											RAICESC®</SPAN></SPAN></FONT></FONT></FONT></SPAN></STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d">&nbsp;</FONT></SPAN><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">o
												por parte del Encargado del Tratamiento designado, previa solicitud,
											respecto del uso que le ha dado a sus datos personales.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">d)
												Presentar ante la Superintendencia de Industria y Comercio quejas por
												infracciones a lo dispuesto en la Ley 1581 de 2012 y las demás
											normas que la modifiquen, adicionen o complementen.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">e)
												Revocar la autorización y/o solicitar la supresión del dato cuando
												en el Tratamiento no se respeten los principios, derechos y garantías
												constitucionales y legales. La revocatoria y/o supresión procederá
												cuando la Superintendencia de Industria y Comercio haya determinado
											que en el Tratamiento&nbsp;</SPAN></SPAN></FONT></FONT></FONT></SPAN><STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="proxima novasemibold, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">GLOBAL
											RAICESC®</SPAN></SPAN></FONT></FONT></FONT></SPAN></STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d">&nbsp;</FONT></SPAN><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">o
												el Encargado designado, han incurrido en conductas contrarias a Ley
											1581 de 2012 y a la Constitución.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">f)
												Acceder en forma gratuita en las condiciones definidas en este
												documento, a sus datos personales que hayan sido objeto de
											Tratamiento.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><BR><STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="proxima novasemibold, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">9.
											CONDICIONES PARA EL TRATAMIENTO DE DATOS Autorización</SPAN></SPAN></FONT></FONT></FONT></SPAN></STRONG><BR><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">Recolección
											de los datos personales:</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">En
												desarrollo de los principios de finalidad y libertad, la recolección
											de los datos realizada por&nbsp;</SPAN></SPAN></FONT></FONT></FONT></SPAN><STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="proxima novasemibold, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">GLOBAL
											RAICESC®</SPAN></SPAN></FONT></FONT></FONT></SPAN></STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d">&nbsp;</FONT></SPAN><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">deberá
												limitarse a aquellos datos personales que son pertinentes y adecuados
												para la finalidad para la cual son recolectados o requeridos conforme
												a la normativa vigente. Salvo en los casos expresamente previstos en
											la Ley.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">9.1
											Autorización del titular</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">Para
											que&nbsp;</SPAN></SPAN></FONT></FONT></FONT></SPAN><STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="proxima novasemibold, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">GLOBAL
											RAICESC®</SPAN></SPAN></FONT></FONT></FONT></SPAN></STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d">&nbsp;</FONT></SPAN><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">realice
												cualquier acción de Tratamiento de datos personales, se requiere la
												autorización previa e informada del Titular, la cual deberá ser
												obtenida por cualquier medio que pueda ser objeto de consulta
												posterior. Estos mecanismos podrán ser predeterminados a través de
												medios técnicos que faciliten al Titular su manifestación
											automatizada o pueden ser por escrito o de forma oral.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><BR><STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="proxima novasemibold, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">GLOBAL
											RAICESC®</SPAN></SPAN></FONT></FONT></FONT></SPAN></STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d">&nbsp;</FONT></SPAN><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">adoptará
												los procedimientos necesarios para solicitar, a más tardar en el
												momento de recolección de los datos, la autorización del Titular
												para el Tratamiento de los mismos e informará los datos personales
												que serán recolectados así como todas las finalidades específicas
											del Tratamiento para los cuales se obtiene el consentimiento.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">Los
												datos personales que se encuentren en fuentes de acceso público, con
												independencia del medio por el cual se tenga acceso, entiéndase por
												tales aquellos datos o bases de datos que se encuentren a disposición
											del público, podrán ser tratados por&nbsp;</SPAN></SPAN></FONT></FONT></FONT></SPAN><STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="proxima novasemibold, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">GLOBAL
											RAICESC®</SPAN></SPAN></FONT></FONT></FONT></SPAN></STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d">&nbsp;</FONT></SPAN><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">siempre
											y cuando, por su naturaleza, sean datos públicos.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">En
												caso de realizar cambios sustanciales en el contenido de las
												Políticas del Tratamiento, referidos a la identificación del
												Responsable y a la finalidad del Tratamiento de los datos personales,
											los cuales puedan afectar el contenido de la autorización,&nbsp;</SPAN></SPAN></FONT></FONT></FONT></SPAN><STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="proxima novasemibold, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">GLOBAL
											RAICESC®</SPAN></SPAN></FONT></FONT></FONT></SPAN></STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d">&nbsp;</FONT></SPAN><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">comunicará
												estos cambios a los Titulares, antes o más tardar al momento de
												implementar las nuevas políticas, además obtendrá del Titular una
												nueva autorización cuando el cambio se refiera a la finalidad del
												Tratamiento. Para la comunicación de los cambios y la autorización
												se podrán utilizar medios técnicos que faciliten esta
											actividad.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">9.1.1
											Casos en que no es necesaria la autorización</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">a)
												Información requerida por una entidad pública o administrativa en
											ejercicio de sus funciones legales o por orden judicial.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">b)
											Datos de naturaleza pública.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">c)
											Casos de urgencia médica o sanitaria.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">d)
												Tratamiento de información autorizado por la ley para fines
											históricos, estadísticos o científicos.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">e)
											Datos relacionados con el Registro Civil de las Personas</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">9.1.2
											Suministro de la información</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">La
											información solicitada por el Titular será suministrada por&nbsp;</SPAN></SPAN></FONT></FONT></FONT></SPAN><STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="proxima novasemibold, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">GLOBAL
											RAICESC®</SPAN></SPAN></FONT></FONT></FONT></SPAN></STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d">&nbsp;</FONT></SPAN><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">por
												el mismo medio que fue formulada. La información deberá ser de
												fácil lectura, sin barreras técnicas que impidan su acceso y deberá
												corresponder en un todo a aquella que repose en la base de
											datos.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">9.1.3
											Deber de informar al Titular</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="proxima novasemibold, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">GLOBAL
											RAICESC®</SPAN></SPAN></FONT></FONT></FONT></SPAN></STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">,
												al momento de solicitar al Titular la autorización, deberá
											informarle de manera clara y expresa lo siguiente:</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">a)
												El Tratamiento al cual serán sometidos sus datos personales y la
											finalidad del mismo.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">b)
												El carácter facultativo de la respuesta a las preguntas que le sean
												hechas, cuando estas versen sobre datos sensibles o sobre los datos
											de las niñas, niños y adolescentes.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">c)
											Los derechos que le asisten como Titular.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">d)
												La identificación, dirección física o electrónica y teléfono del
											Responsable del Tratamiento.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">9.1.4
											Revocatoria de la autorización y/o supresión del dato:</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">Los
												Titulares podrán en todo momento solicitar a COOTRARIS, la supresión
												de sus datos personales y/o revocar la autorización otorgada para el
												Tratamiento de los mismos, mediante la presentación de un reclamo,
												de acuerdo con lo establecido en el artículo 15 de la Ley 1581 de
											2012.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">La
												solicitud de supresión de la información y la revocatoria de la
												autorización NO PROCEDERÁN CUANDO EL TITULAR TENGA UN DEBER LEGAL O
											CONTRACTUAL DE PERMANECER EN LA BASE DE DATOS DE&nbsp;</SPAN></SPAN></FONT></FONT></FONT></SPAN><STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="proxima novasemibold, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">GLOBAL
											RAICESC®</SPAN></SPAN></FONT></FONT></FONT></SPAN></STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">El
												procedimiento será el establecido en el presente documento para
											presentar reclamos.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">9.1.5
											Personas a quienes se les puede suministrar la información</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">La
												información acerca de los datos personales que hayan sido materia de
											tratamiento por parte de&nbsp;</SPAN></SPAN></FONT></FONT></FONT></SPAN><STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="proxima novasemibold, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">GLOBAL
											RAICESC®</SPAN></SPAN></FONT></FONT></FONT></SPAN></STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d">&nbsp;</FONT></SPAN><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">podrá
											suministrarse a las siguientes personas:</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">a)
											A los Titulares, sus causahabientes o sus representantes legales.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">b)
												A las entidades públicas o administrativas en ejercicio de sus
											funciones legales o por orden judicial.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">c)
											A los terceros autorizados por el Titular o por la ley.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><BR><STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="proxima novasemibold, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">10.
											PROCEDIMIENTOS</SPAN></SPAN></FONT></FONT></FONT></SPAN></STRONG><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">El
											Titular o sus causahabientes tienen derecho a presentar ante&nbsp;</SPAN></SPAN></FONT></FONT></FONT></SPAN><STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="proxima novasemibold, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">GLOBAL
											RAICESC®</SPAN></SPAN></FONT></FONT></FONT></SPAN></STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">,
												consultas y/o reclamos, previa validación de su identidad, a través
												de cualquiera de los siguientes mecanismos, de atención al usuario
											dispuestos por&nbsp;</SPAN></SPAN></FONT></FONT></FONT></SPAN><STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="proxima novasemibold, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">GLOBAL
											RAICESC®</SPAN></SPAN></FONT></FONT></FONT></SPAN></STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d">&nbsp;</FONT></SPAN><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">a
											nivel nacional:</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d">•
											</FONT></SPAN><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">A
											la línea (6) 3401004 marcando la opción 2 y luego la opción 1</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d">•
											</FONT></SPAN><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">Correo
											electrónico: protecciondatos@mc.net.co</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><BR><STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="proxima novasemibold, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">GLOBAL
											RAICESC®</SPAN></SPAN></FONT></FONT></FONT></SPAN></STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">,
												responderá la consulta y/o reclamo por el mismo medio que fue
											formulada.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">10.1
											Consultas</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">Los
												Titulares o sus causahabientes podrán consultar la información
												personal del Titular que repose en la base de datos del
											responsable.&nbsp;</SPAN></SPAN></FONT></FONT></FONT></SPAN><STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="proxima novasemibold, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">GLOBAL
											RAICESC®</SPAN></SPAN></FONT></FONT></FONT></SPAN></STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d">&nbsp;</FONT></SPAN><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">suministrará
												al solicitante toda la información contenida en el registro
												individual o que esté vinculada con la identificación del
											Titular.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">El
											titular podrá consultar de forma gratuita sus datos personales:</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">1.
											Al menos una (1) vez cada mes calendario.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">2.
												Cada vez que existan modificaciones sustanciales de las Políticas de
											Tratamiento de la Información, que motiven nuevas consultas.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">3.
												Para consultas cuya periodicidad sea mayor a una (1) por cada mes
											calendario,&nbsp;</SPAN></SPAN></FONT></FONT></FONT></SPAN><STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="proxima novasemibold, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">GLOBAL
											RAICESC®</SPAN></SPAN></FONT></FONT></FONT></SPAN></STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d">&nbsp;</FONT></SPAN><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">solamente
												cobrará los gastos de envío, reproducción y en su caso,
											certificación de documentos.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">10.2
											Reclamos</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">El
												Titular o sus causahabientes que consideren que la información
												contenida en una base de datos debe ser objeto de corrección,
												actualización o supresión, o cuando adviertan el presunto
												incumplimiento de cualquiera de los deberes contenidos en la Ley 1581
											de 2012, podrán presentar un reclamo ante&nbsp;</SPAN></SPAN></FONT></FONT></FONT></SPAN><STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="proxima novasemibold, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">GLOBAL
											RAICESC®</SPAN></SPAN></FONT></FONT></FONT></SPAN></STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">,
											el cual será tramitado bajo las siguientes reglas:</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">1.
											El reclamo se formulará mediante solicitud dirigida a&nbsp;</SPAN></SPAN></FONT></FONT></FONT></SPAN><STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="proxima novasemibold, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">GLOBAL
											RAICESC®</SPAN></SPAN></FONT></FONT></FONT></SPAN></STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">,
											como mínimo con la siguiente información:</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d">•
											</FONT></SPAN><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">Nombre
												del proveedor responsable del Tratamiento o al encargado del
											Tratamiento</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d">•
											</FONT></SPAN><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">Nombre
											del peticionario</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d">•
											</FONT></SPAN><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">Número
											de identificación del peticionario</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d">•
											</FONT></SPAN><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">Hechos
											en que se fundamenta la solicitud</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d">•
											</FONT></SPAN><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">Objeto
											de la petición</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d">•
											</FONT></SPAN><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">Dirección
											de envío de correspondencia</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d">•
											</FONT></SPAN><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">Aportar
											los documentos que pretenda hacer valer</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">Si
												el reclamo resulta incompleto, se requerirá al interesado dentro de
												los cinco (5) días siguientes a la recepción del reclamo para que
												subsane las fallas. Transcurridos dos (2) meses desde la fecha del
												requerimiento, sin que el solicitante presente la información
											requerida, se entenderá que ha desistido del reclamo.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">En
												caso de que quien reciba el reclamo no sea competente para
												resolverlo, dará traslado a quien corresponda en un término máximo
												de dos (2) días hábiles e informará de la situación al
											interesado.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">2.
												Una vez recibido el reclamo completo, se incluirá en la base de
												datos una leyenda que diga “reclamo en trámite” y el motivo del
												mismo, en un término no mayor a dos (2) días hábiles. Dicha
											leyenda deberá mantenerse hasta que el reclamo sea decidido.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">3.
												El término máximo para atender el reclamo será de quince (15) días
												hábiles contados a partir del día siguiente a la fecha de su
												recibo. Cuando no fuere posible atender el reclamo dentro de dicho
												término, se informará al interesado los motivos de la demora y la
												fecha en que se atenderá su reclamo, la cual en ningún caso podrá
												superar los ocho (8) días hábiles siguientes al vencimiento del
											primer término.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">10.3
											Requisito de procedibilidad</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">El
												Titular o causahabiente sólo podrá elevar queja ante la
												Superintendencia de Industria y Comercio una vez haya agotado el
												trámite de consulta o reclamo ante el Responsable del Tratamiento o
											Encargado del Tratamiento.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><BR><STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="proxima novasemibold, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">11.
											DEBERES DE&nbsp;</SPAN></SPAN></FONT></FONT></FONT></SPAN></STRONG><STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="proxima novasemibold, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><B>GLOBAL
											RAICESC®</B></SPAN></FONT></FONT></FONT></SPAN></STRONG><STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="proxima novasemibold, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">&nbsp;EN
											EL TRATAMIENTO DE DATOS&nbsp;</SPAN></SPAN></FONT></FONT></FONT></SPAN></STRONG><STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="proxima novasemibold, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><B>GLOBAL
											RAICESC®</B></SPAN></FONT></FONT></FONT></SPAN></STRONG><STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="proxima novasemibold, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">,
											cumplirá los siguientes deberes:</SPAN></SPAN></FONT></FONT></FONT></SPAN></STRONG><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">a)
												Garantizar al Titular, en todo tiempo, el pleno y efectivo ejercicio
											del derecho de hábeas data.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">b)
												Solicitar y conservar, en las condiciones previstas en la Ley, copia
											de la respectiva autorización otorgada por el Titular.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">c)
												Informar debidamente al Titular sobre la finalidad de la recolección
												y los derechos que le asisten por virtud de la autorización
											otorgada.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">d)
												Tomar las medidas orientadas a conservar la información bajo las
												condiciones de seguridad para impedir su adulteración, pérdida,
											consulta, uso o acceso no autorizado o fraudulento.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">e)
												Tomar las medidas para que la información que se suministre al
												Encargado del Tratamiento sea veraz, completa, exacta, actualizada,
											comprobable y comprensible.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">f)
												Actualizar la información, comunicando de forma oportuna al
												Encargado del Tratamiento, todas las novedades respecto de los datos
												que previamente le haya suministrado y adoptar las demás medidas
												necesarias para que la información suministrada a este se mantenga
											actualizada.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">g)
												Rectificar la información cuando sea incorrecta y comunicar lo
											pertinente al Encargado del Tratamiento.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">h)
												Suministrar al Encargado del Tratamiento, según el caso, únicamente
												datos cuyo Tratamiento esté previamente autorizado de conformidad
											con lo previsto en la Ley.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">i)
												Exigir al Encargado del Tratamiento en todo momento, el respeto a las
												condiciones de seguridad y privacidad de la información del
											Titular;</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">j)
												Tramitar las consultas y reclamos formulados en los términos
											señalados en la ley;</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">k)
												Adoptar un manual interno de políticas y procedimientos para
												garantizar el adecuado cumplimiento de la presente ley y en especial,
											para la atención de consultas y reclamos;</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">l)
												Informar al Encargado del Tratamiento cuando determinada información
												se encuentra en discusión por parte del Titular, una vez se haya
												presentado la reclamación y no haya finalizado el trámite
											respectivo;</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">m)
											Informar a solicitud del Titular sobre el uso dado a sus datos;</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">n)
												Informar a la autoridad de protección de datos cuando se presenten
												violaciones a los códigos de seguridad y existan riesgos en la
											administración de la información de los Titulares.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">o)
												Cumplir las instrucciones y requerimientos que imparta la
											Superintendencia de Industria y Comercio.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><BR><STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="proxima novasemibold, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">12.
											DEBERES DEL ENCARGADO DEL TRATAMIENTO DE DATOS</SPAN></SPAN></FONT></FONT></FONT></SPAN></STRONG><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">Los
												Encargados del Tratamiento deberán cumplir los siguientes deberes,
												sin perjuicio de las demás disposiciones previstas en la Ley y en
											otras que rijan su actividad:</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">a)
												Garantizar al Titular, en todo tiempo, el pleno y efectivo ejercicio
											del derecho de hábeas data.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">b)
												Tomar las medidas para conservar la información bajo las condiciones
												de seguridad necesarias para impedir su adulteración, pérdida,
											consulta, uso o acceso no autorizado o fraudulento.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">c)
												Realizar oportunamente la actualización, rectificación o supresión
											de los datos en los términos de la presente ley.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">d)
												Actualizar la información reportada por los Responsables del
												Tratamiento dentro de los cinco (5) días hábiles contados a partir
											de su recibo.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">e)
												Tramitar las consultas y los reclamos formulados por los Titulares en
											los términos señalados en la Ley;</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">f)
												Adoptar un manual interno de políticas y procedimientos para
												garantizar el adecuado cumplimiento de la Ley y, en especial, para la
											atención de consultas y reclamos por parte de los Titulares.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">g)
												Registrar en la base de datos las leyenda “reclamo en trámite”
											en la forma en que se regula en la Ley.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">h)
												Insertar en la base de datos la leyenda “información en discusión
												judicial” una vez notificado por parte de la autoridad competente
												sobre procesos judiciales relacionados con la calidad del dato
											personal.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">i)
												Abstenerse de circular información que esté siendo controvertida
												por el Titular y cuyo bloqueo haya sido ordenado por la
											Superintendencia de Industria y Comercio.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">j)
												Permitir el acceso a la información únicamente a las personas que
											pueden tener acceso a ella.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">k)
												Informar a la Superintendencia de Industria y Comercio cuando se
												presenten violaciones a los códigos de seguridad y existan riesgos
											en la administración de la información de los Titulares.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">l)
												Cumplir las instrucciones y requerimientos que imparta la
											Superintendencia de Industria y Comercio.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">m)
												Salvaguardar la seguridad de las bases de datos en los que se
											contengan datos personales.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">n)
												Guardar confidencialidad respecto del Tratamiento de los datos
											personales.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><BR><STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="proxima novasemibold, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">13.
											MEDIDAS DE SEGURIDAD</SPAN></SPAN></FONT></FONT></FONT></SPAN></STRONG><BR><STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="proxima novasemibold, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">GLOBAL
											RAICESC®</SPAN></SPAN></FONT></FONT></FONT></SPAN></STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d">&nbsp;</FONT></SPAN><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">toma
												todas las precauciones razonables y medidas de índole técnico,
												administrativo y organizacional conducentes a garantizar la seguridad
												de los datos de carácter personal de los Titulares, principalmente
												aquellos destinados a impedir su alteración, perdida y tratamiento o
											acceso no autorizado.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">Las
												medidas de seguridad se aplican tanto a los ficheros como a los
											tratamientos.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">La
												aplicación de las medidas de seguridad tiene como fin procurar la
												conservación, confidencialidad, integridad, y disponibilidad de los
											datos.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">13.1
											Políticas de seguridad de la información de&nbsp;</SPAN></SPAN></FONT></FONT></FONT></SPAN><STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="proxima novasemibold, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">GLOBAL
											RAICESC®</SPAN></SPAN></FONT></FONT></FONT></SPAN></STRONG><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">Los
											parámetros de seguridad de&nbsp;</SPAN></SPAN></FONT></FONT></FONT></SPAN><STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="proxima novasemibold, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">GLOBAL
											RAICESC®</SPAN></SPAN></FONT></FONT></FONT></SPAN></STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d">&nbsp;</FONT></SPAN><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">se
												encuentran respaldados por las políticas de seguridad de la
												información, construidas bajo las mejores prácticas y estándares
												de seguridad existentes y dando cumplimiento a las regulaciones
												vigentes. Dichas políticas son de estricto cumplimiento por los
												funcionarios directos o indirectos que desempeñan alguna labor u
											actividad al interior de&nbsp;</SPAN></SPAN></FONT></FONT></FONT></SPAN><STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="proxima novasemibold, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">GLOBAL
											RAICESC®</SPAN></SPAN></FONT></FONT></FONT></SPAN></STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><BR><STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="proxima novasemibold, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">14.
											MODIFICACIONES</SPAN></SPAN></FONT></FONT></FONT></SPAN></STRONG><BR><STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="proxima novasemibold, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">GLOBAL
											RAICESC®</SPAN></SPAN></FONT></FONT></FONT></SPAN></STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d">&nbsp;</FONT></SPAN><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">se
												reserva el derecho de modificar estas Políticas de Tratamiento de la
												Información, en su totalidad o parcialmente. En caso de cambios
												sustanciales en las Políticas del Tratamiento referidos a la
											identificación de&nbsp;</SPAN></SPAN></FONT></FONT></FONT></SPAN><STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="proxima novasemibold, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">GLOBAL
											RAICESC®</SPAN></SPAN></FONT></FONT></FONT></SPAN></STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">E
												y a la finalidad del Tratamiento de los datos personales, los cuales
											puedan afectar el contenido la autorización,&nbsp;</SPAN></SPAN></FONT></FONT></FONT></SPAN><STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="proxima novasemibold, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">GLOBAL
											RAICESC®</SPAN></SPAN></FONT></FONT></FONT></SPAN></STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d">&nbsp;</FONT></SPAN><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">comunicará
												estos cambios al titular a más tardar al momento de implementar las
											nuevas políticas.</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><BR><STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="proxima novasemibold, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">15.
											VIGENCIA</SPAN></SPAN></FONT></FONT></FONT></SPAN></STRONG><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">La
												presente política de tratamiento de la información entrará en
											vigencia a partir del 29 de julio del 2013</SPAN></SPAN></FONT></FONT></FONT></SPAN><BR><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">Las
											bases de datos de&nbsp;</SPAN></SPAN></FONT></FONT></FONT></SPAN><STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="proxima novasemibold, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">GLOBAL
											RAICESC®</SPAN></SPAN></FONT></FONT></FONT></SPAN></STRONG><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d">&nbsp;</FONT></SPAN><SPAN STYLE="font-variant: normal"><FONT COLOR="#2b303d"><FONT FACE="eina03-regular, sans-serif"><FONT SIZE=4 STYLE="font-size: 14pt"><SPAN STYLE="font-style: normal"><SPAN STYLE="font-weight: normal">estarán
												vigentes durante el periodo necesario para cumplir las finalidades
												establecidas en la presente política de tratamiento de la
												información, sin embargo los datos podrán ser eliminados en
												cualquier momento a solicitud de su titular, siempre y cuando no
												tengan un deber legal o contractual de permanecer en las bases de
											datos.</SPAN></SPAN></FONT></FONT></FONT></SPAN></P>

										</p>

										<div class=""></div>

										<button class="btn btn-primary mt-5" data-dismiss="modal" type="button">
											<i class="fas fa-times"></i>
										Cerrar Proyecto</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			@include('thema.foot')