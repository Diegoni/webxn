<?php 
include_once('head.php');
echo getMenu(2, $lenguage);
?>
<link rel="stylesheet" type="text/css" href="librerias/HoverEffect/css/set1.css" />
<div class="w3layouts-banner-slider-1"></div>	

<div class="welcome">
	<div class="container">
		<div class="agileits-title wow fadeInUp animated">
			<h3 class="agileits-title w3title1">Servicio de Pagos – SiTar</h3>
			<p class="top-p">
				La empresa desarrolló una versión de su solución 
				SIRIS para terminales de caja denominado SiTar powered by SIRIS.
				Este nuevo servicio es una alternativa para realizar todo tipo de pagos, 
				incluyendo las tarjetas de débito y crédito.
			</p>
		</div> 
		<div class="w3ls-row wow slideInRight animated">
			<div class="col-md-6 ">
				<img src="images/about.jpg" class="img-responsive" alt=""/>
			</div>
			<div class="col-md-6 ">
				<div class="welcome-agiletext" style="padding: 0em 3em; ">
					<h4> Descripción del Servicio </h4>
					<p>
					La solución SiTar debidamente programada en los puestos de cajas de 
					nuestros clientes realiza la captura de recaudaciones a ritmo de trabajo. Para 
					ello requiere la autorización contra los medios de pagos (Administradoras de 
					tarjetas de crédito) y luego realiza la emisión de comprobantes de pagos 
					homologados.
					A su vez, X Nativa recibe y controla las transmisiones de las terminales, y 
					también realizará el procesamiento y consolidación de la información. 
					La prestación se completará diariamente con la entrega de información 
					consolidada (liquidación de comisiones, cálculo de netos a depositar por 
					administradoras y generación de remitos) a quien corresponda mediante el 
					procedimiento de transmisión de datos que se acuerde.
					</p>
				
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>


<div class="welcome">
	<div class="container">
		<div class="w3ls-row ">
			<div class="col-md-6 wow slideInLeft animated">
				<div class="welcome-agiletext" style="padding: 1em 3em;">
					<h4> Proceso de conciliación </h4>
					<p style="font-size: 15px;">
						XN realizará la conciliación electrónica de comprobantes diariamente a través 
						del cruce de información provista por la Solución SIRIS (netos a depositar) y la 
						suministrada por las entidades administradoras de tarjetas de débito/crédito 
						(liquidaciones). 
						Este proceso permitirá el seguimiento de cada operación desde su inicio (pago 
						con tarjeta en línea de cajas) hasta su finalización con acreditación de fondos 
						en cuenta bancaria.
						En el caso de que alguna operación no pueda ser conciliada, el sistema 
						generará alarmas automáticas que permitan hacer el reclamo correspondiente 
						a las administradoras.
					</p>
				
				</div>
			</div>
			<div class="col-md-6 wow slideInRight animated">
				<div class="welcome-agiletext" style="padding: 1em 3em;">
					<h4> Principales prestaciones </h4>
					<p>
						La solución propuesta ofrecerá las siguientes prestaciones:
						<ul>
							<li>Que el cajero realice la lectura del comprobante con código de barras </li>
							<li>Que el cajero pase la tarjeta entregada por el cliente por el lector de banda magnética y que la solución SiTar gestione la autorización con el medio de pago  </li>
							<li>Que ante la autorización se emita un ticket con importe abonado, como comprobantes de pago y se le entregue al cliente  </li>
							<li>Que el nodo central de XN, reciba y consolide toda la información transmitida por las terminales de caja, la procese y genere listados de totales por cada comitente de recaudación (discriminando por sucursal y caja)</li>  
							<li>Que el nodo central de XN realice proceso de conciliación de manera automática </li>
							<li>Que los reportes homologados y acordados se encuentren disponibles para las comitentes y el recaudador en el horario a establecer el mismo día de realizada la recaudación, independientemente de la ubicación geográfica donde las sucursales recaudadoras se encuentren </li>
							<li>Que toda la información esté disponible a través de la transmisión electrónica de tipo off-line. </li>
						</ul>
					</p>
				
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>


<center>
	<h5><?php echo $lenguage['descargar_enlase']?></h5>
	<a href="pdf/XNETSiTar.pdf" data-toggle="modal" class="more"><?php echo $lenguage['descargar']?></a>
</center>
<br>

<?php
include_once('footer.php');
?>
