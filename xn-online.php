<?php 
include_once('head.php');
echo getMenu(2, $lenguage);
?>
<link rel="stylesheet" type="text/css" href="librerias/HoverEffect/css/set1.css" />
<div class="w3layouts-banner-slider-1"></div>	

<div class="welcome">
	<div class="container">
		<div class="agileits-title wow fadeInUp animated">
			<h3 class="agileits-title w3title1">XN ON – LINE</h3>
			<p class="top-p">
				La empresa desarrolló una versión de su solución SIRIS/SITAR para Internet denominado  XN On – Line 
				Este nuevo servicio es una alternativa para realizar pagos, desde la página de gestión de deuda de nuestros clientes Entes Públicos o privados.
			</p>
		</div> 
		<div class="w3ls-row wow slideInRight animated">
			<div class="col-md-6 ">
				<img src="images/about.jpg" class="img-responsive" alt=""/>
			</div>
			<div class="col-md-6 ">
				<div class="welcome-agiletext" style="padding: 0em 3em; ">
					<h4> Descripción del Servicio </h4>
					<p style="font-size: 15px;">
					X  N  realiza  los  desarrollos  para  integrar  su  solución  XN  On  Line    a  las 
					páginas de gestión u oficinas virtuales de nuestros clientes, tomando la deuda 
					generada  un  botón  de  pagos,  de  donde  se  genera  la  solicitud  de  autorización  
					contra  las  administradoras  de  tarjetas  de  crédito  y  realiza  la  emisión  de 
					comprobantes homologados.
					A su vez, X Nativa diariamente realizará el procesamiento y consolidación de la 
					información. 
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
						del cruce de información provista capturada por XN Online y la suministrada 
						por las entidades administradoras de tarjetas de débito/crédito (liquidaciones). 
						Este proceso permitirá el seguimiento de cada operación desde su inicio (pago 
						con tarjeta en línea de cajas) hasta su finalización con acreditación de fondos 
						en cuenta bancaria.
						En el caso de que alguna operación no pueda ser conciliada, el sistema 
						generará alarmas automáticas que permitan hacer el reclamo correspondiente 
					</p>
				
				</div>
			</div>
			<div class="col-md-6 wow slideInRight animated">
				<div class="welcome-agiletext" style="padding: 1em 3em;">
					<h4> Principales prestaciones </h4>
					<p>
						La solución propuesta ofrecerá las siguientes prestaciones:
						<ul>
							<li>Integración con web de gestión u oficina virtual con el botón de pago de XN.</li> 
							<li>Gestión autorización con el medio de pago.</li>
							<li>Que ante la autorización se emita un comprobante con importe abonado.</li>
							<li>Que el nodo central de XN, reciba y consolide toda la información de los pagos realizados, la procese y genere listados de totales por cada medio de pago utilizado.</li> 
							<li>Que el nodo central de XN realice proceso de conciliación de manera automática.</li>
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
	<a href="pdf/XNETONLINE01PresentacionGeneral.pdf" data-toggle="modal" class="more"><?php echo $lenguage['descargar']?></a>
</center>
<br>

<?php
include_once('footer.php');
?>
