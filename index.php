<?php

session_start();

if(!isset($_SESSION['usuario'])){
	echo "

	<script>
	alert('Debes iniciar sesion');
	</script>
	";
	header("location: login-registro/login-registro.php");
	session_destroy();
	die();
}

?>

<!DOCTYPE html>
<html>
<head>

	<title>Menu</title>
	<script src="https://kit.fontawesome.com/64a66c3659.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="archivo.css">
	<link rel="icon" href="multimedia/logoborrador4.png">
</head>
<body>
	<header>
		<div class="header--superior">
			<div class="logo">
				<img src="multimedia/logoborrador4.png" alt="">

		</div>
					<div class="search">
 <div>

    <span onclick="calificar(this)" style="cursor: pointer;" id="1estrella">★</span>

    <span onclick="calificar(this)" style="cursor: pointer;" id="2estrella">★</span>

    <span onclick="calificar(this)" style="cursor: pointer;" id="3estrella">★</span>

    <span onclick="calificar(this)" style="cursor: pointer;" id="4estrella">★</span>

    <span onclick="calificar(this)" style="cursor: pointer;" id="5estrella">★</span>
    <br><br>
<button onclick="Mensaje()">Calificar</button>
 <script>
      var contadorR;
      function calificar(item){
        console.log(item);
        contadorR=item.id[0];
        let nombre = item.id.substring(1);

 for(let i=0;i<5;i++){

          if(i<contadorR){

            document.getElementById((i+1)+nombre).style.color="orange";

          }else{
            document.getElementById((i+1)+nombre).style.color="black";
          }
        }
      }
      function Mensaje(){
        alert("Gracias por calificar nuestra pagina web con " +contadorR+ " estrellas");
      }
  </script>

       </div>
			</div>
		</div>
		<!-- Este Es el Codigo del reloj !-->
			<div class="wrap">
		<div class="widget">
				<p id="diaSemana"></p>
				<p id="dia"></p>
				<p>de</p>
				<p id="mes"></p>
				<p>del</p>
				<p id="year"></p>

				<p id="horas"></p><p>:</p><p id="minutos"></p>
					<p id="ampm"></p>
					<p id="segundos" class="segundos"></p>
					<p id="horasC"></p> <p id="minutosC"></p> <p id="segundosC"></p>

			</div>
		</div>
		<!-- Aqui Termina el Codigo html del reloj!-->
	</div>
		<div class="container--menu">
			
			<div class="menu">
				<input type="checkbox" id="check--menu">
				<label id="label--check" for="check--menu">
					<i class="fa-solid fa-bars icon--menu"></i>
				</label>
				<nav>
					<ul>
						<li><a href="index.php" id="selected"></a></li>
						
						<li><a href="#">Escolares</a>
							<ul>
							<li><a href="?acoso2">Prepa pide no usar falda ni shorts</a></li>
							<li><a href="?acoso3">Exhiben bullying en escuela primaria</a></li>
							<li><a href="?escolares1">AMLO llama a enviar a los niños y niñas que faltan a clases presenciales</a></li>

						</ul></li>

						<li><a href="#">Deportes</a>
							<ul>
							<li><a href="?deportes1" >Chivas tiene en la mira a Quiñones y Furch</a></li>
							<li><a href="?deportes2" >Manchester City anuncia acuerdo con Dortmund por Haaland</a></li>
							<li><a href="?deportes3" >La FIFA abre expediente por el caso Byron</a></li>
						
							</ul></li>

						<li><a href="#">Politica</a>
							<ul>
							<li><a href="?politica1">Informe de empresa DNV sobre L12</a></li>
							<li><a href="?politica2">huelga en Telmex</a></li>
							<li><a href="?politica3">Contratación de médicos cubanos es oscura, política y poco ética</a></li>

							</ul></li>

						<li><a href="#">Acoso</a>
							<ul>
							<li><a href="?acoso1">Detienen a hombre por múltiples casos de abuso infantil</a></li>
							<li><a href="?acoso4">Protestan alumnos del Cecyte Florido</a></li>
							<li><a href="?acoso5">Azafata acusa a Elon Musk de acoso sexual</a></li>

							</ul></li>

						<li><a href="#">Economia</a>
							<ul>	
							<li><a href="?economia1">Economía de México regresa al crecimiento</a></li>
							<li><a href="?economia2">Los dos años negros del comercio textil</a></li>
							<li><a href="?economia3">Estamos volviendo a ser una economía envidiable</a></li>

						</ul></li>

						<li>  <a href="login-registro/cerrar-sesion.php" class="Cerrarsesion">Cerrar Sesion</a>  </li>

					</ul>
				</nav>
				
		</div>
	</header>


</body>
</html>


<script> 
//script de js de el reloj
(function(){

	var actualizarHora = function(){
		var fecha = new Date(),
		horas = fecha.getHours(),
		ampm,
		minutos = fecha.getMinutes(),
		segundos = fecha.getSeconds(),
		diaSemana = fecha.getDay(),
		dia = fecha.getDate(),
		mes = fecha.getMonth(),
		year = fecha.getFullYear();

		var pHoras = document.getElementById('horas'),
		 pAMPM = document.getElementById('ampm'),
		 pMinutos = document.getElementById('minutos'),
		 pSegundos = document.getElementById('segundos'),
		 pDiaSemana = document.getElementById('diaSemana'),
		 pDia = document.getElementById('dia'),
		 pMes = document.getElementById('mes'),
		 pYear = document.getElementById('year');

		var semana = ['Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado'];
		pDiaSemana.textContent = semana[diaSemana];

		pDia.textContent = dia;

		var meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
		pMes.textContent = meses[mes];

		pYear.textContent = year;

		if (horas >= 13){
			horas = horas -12;
			ampm = 'AM';
		} else {
			ampm ='PM';
		}

		if (horas == 0){
			horas==12;
		}
		pHoras.textContent = horas;
		pAMPM.textContent = ampm;

		if (minutos < 10){ 
			minutos = "0" + minutos
		}
		if (segundos < 10) {
			segundos = "0" + segundos
		}

		pMinutos.textContent = minutos;
		pSegundos.textContent = segundos;
	};


	actualizarHora();
	var intervalo = setInterval(actualizarHora, 1000);
}())
</script>

</body>
<?php
function deportes() {
    echo 		"
    <main>
    <article>

           <center> <h3>Clásico Tapatío: Chivas tiene en la mira a Quiñones y Furch</h3></center><br><br>

           <p> Una de las series más recordadas por los aficionados de Chivas ante su odiado rival fue en el Clausura 2015 cuando se enfrentaron en Cuartos de Final. La ida finalizó empatada a cero goles, sin embargo en la vuelta, el Guadalajara fue amo y señor de las acciones, ganando 4-1 con una gran actuación de Marco Fabián con tres golazos y uno más de Omar Bravo. La nota negra en esta ocasión fue el hecho de que los aficionados del Atlas se brincaron a la cancha a “amenazar” a su director técnico Tomás Boy y a sus jugadores, además de buscar “detener la masacre”.

Finalmente, Chivas y Atlas se enfrentaron en los Cuartos de Final del Clausura 2017, siendo el chiverío el equipo que sacó ventaja del reglamento. En el juego de ida, Atlas ganó con un penal marcado por Matías Alustiza quedando 1 a 0. En la vuelta, las Chivas consiguieron su pase a semifinales con gol de Orbelín Pineda al minuto 45, con marcador de 1 a 0, accediendo a Semifinales por mejor posición en la tabla.</p>

       

       
                    <center><img src='multimedia/FUTBOOL.jpg' width='240px' height='400px'></center><br><br>

                                      <center><h3>¿Quién domina el Clásico Tapatío en Liguilla?</h3></center><br><br><br>

                <p> El partido que nadie se quiere perder, mucho menos si es en una Liguilla. El Clásico Tapatío levanta pasiones, tanto en aficionados, como en los propios jugadores, y es que en instancias finales Atlas y Guadalajara se han enfrentado cuatro veces; todas en Cuartos de Final, en donde el Rebaño Sagrado tiene ventaja de tres series a una.

La primera vez que se vieron las caras en la Fiesta Grande fue en el Verano del 2000, siendo el Guadalajara el equipo que pasó a la siguiente ronda al empatar los dos partidos 1-1, dejando el marcador global 2-2 y consiguiendo su pase a Semifinales gracias a su mejor posición en la clasificación general.
Los Zorros tomaron ventaja de la mano de Sergio Bueno, y es que en el Apertura 2004 eliminaron al Rebaño Sagrado con un marcador global abultado y emocionante de 4-3. Incluso en los dos partidos, tanto en la ida, como en la vuelta, el Guadalajara se dio el lujo de fallar tiros penales.
LEE TAMBIÉN: Clásico Tapatío: Chivas tiene en la mira a Quiñones y Furch
Una de las series más recordadas por los aficionados de Chivas ante su odiado rival fue en el Clausura 2015 cuando se enfrentaron en Cuartos de Final. La ida finalizó empatada a cero goles, sin embargo en la vuelta, el Guadalajara fue amo y señor de las acciones, ganando 4-1 con una gran actuación de Marco Fabián con tres golazos y uno más de Omar Bravo. La nota negra en esta ocasión fue el hecho de que los aficionados del Atlas se brincaron a la cancha a “amenazar” a su director técnico Tomás Boy y a sus jugadores, además de buscar “detener la masacre”.
Finalmente, Chivas y Atlas se enfrentaron en los Cuartos de Final del Clausura 2017, siendo el chiverío el equipo que sacó ventaja del reglamento. En el juego de ida, Atlas ganó con un penal marcado por Matías Alustiza quedando 1 a 0. En la vuelta, las Chivas consiguieron su pase a semifinales con gol de Orbelín Pineda al minuto 45, con marcador de 1 a 0, accediendo a Semifinales por mejor posición en la tabla.</p>



       
     <br><br>
     <h3><A HREF=' https://www.mx/deportes/Chivas-vs-Atlas-Quien-domina-el-Clasico-Tapatio-en-Liguilla--20220510-0115.html '>pagina fuente</A> </h3>  
     </main></article>";
}
function deportesD(){
	echo "
	<main>
	<article>

           <center> <h3>Manchester City anuncia acuerdo con Dortmund por Haaland: ¡El fichaje del año!</h3></center><br><br>
         <p>Después de muchas especulaciones, el Manchester City hizo oficial un principio de acuerdo con el Borussia Dortmund para hacerse con los servicios del delantero Erling Haaland, así se informó a través de un comunicado de prensa que fue difundido en las redes sociales del equipo inglés.Dentro de la información, se dice que el acuerdo se cumplirá el próximo 1 de julio, fecha en que se abre el mercado de fichajes para los clubes en Europa, una vez que se termina la actividad en casi todas las ligas del viejo continente.
«El Manchester City puede confirmar que hemos llegado a un principio de acuerdo con el Borussia Dortmund para el traspaso del delantero Erling Haaland al Club el 1 de julio de 2022″, fue lo que se informa en el documento emitido este martes<br><br>

Se dice que el delantero noruego recibiría un salario neto cercano a los 20 millones de euros, una cifra que no ha sido confirmada por el club o el mismo jugador; sin embargo, es la que manejan los medios ingleses.
Por otra parte, la cifra que pagará el Manchester City al Borussia Dortmund por el delantero es una cercana a los 70 millones de euros, misma que equivale a la cláusula de rescisión del futbolista.
Se espera que en los siguientes días, el club inglés de a conocer la llegada oficial del jugador noruego a sus filas, todavía a espera de que se anuncie una fecha para su presentación junto con la conferencia de prensa.
Publicado originalmente en ESTO

</p>
       
                   <center> <img src='multimedia/XDD.jpg' width='330px' height='490px'></center>

                    

     <h3><A HREF='https://www.elsoldemexico.com.mx/deportes/futbol/manchester-city-anuncia-acuerdo-con-dortmund-por-haaland-el-fichaje-del-ano-8260574.html'>pagina fuente</A> </h3>   
    </main>
    </article>";
}
function deportesDE(){
	echo "<main><article>

<center><h3>La FIFA abre expediente por el caso Byron Castillo que puede dejar a Ecuador fuera del Mundial de Qatar y clasificar a Chile</h3></center><br><br>
              <p>l comité disciplinario de la FIFA ha decidido esta tarde abrir expediente en relación con la denuncia presentada la semana pasada por Chile sobre la presunta falsa nacionalidad ecuatoriana del jugador Byron Castillo (23 años) y en la que la federación andina reclama, por alineación indebida, la plaza para el próximo Mundial de Qatar lograda por Ecuador. Castillo disputó ocho partidos valederos para la clasificación de la Copa del Mundo en los que la selección ecuatoriana sumó 14 puntos que, según la demanda interpuesta, deben ser restados, lo que le otorgaría la cuarta plaza a Chile y la clasificación para la próxima cita mundialista.Con el expediente abierto, la FIFA ha concedido diez días a las partes para presentar una primera ronda de alegaciones, que también han sido requeridas al resto de selecciones a las que Ecuador se enfrentó alineando a Byron Castillo, Paraguay y Chile (dos partidos), Argentina, Venezuela, Bolivia y Uruguay. Si no hay una segunda ronda de alegaciones y la FIFA no solicita más pruebas documentales, esta resolverá a finales de mayo o principios de junio. Si el proceso se dilatara, la resolución, que podrá ser recurrida primero ante el Comité de Apelación del organismo mundial y después en el Tribunal de Arbitraje Deportivo (TAS) de Lausana, se podría conocer a partir de la segunda semana de junio.Chile denunció que Byron Castillo nació en Tumaco (Colombia) y falseó documentos para acreditar que es originario de Playas (Ecuador) y así obtener la nacionalidad ecuatoriana, que ha estado en duda desde que integra las selecciones inferiores ecuatorianas. En 2017, la propia federación ecuatoriana eliminó a Castillo de la convocatoria para un Sudamericano Sub 20 por las dudas sobre su nacionalidad. Castillo, actualmente jugador del Barcelona de Guayaquil, se formó en el club Sport Norte América, que en 2018 fue sancionado por falsear documentos de varias decenas de jugadores con el fin de que pudieran jugar con nacionalidad ecuatoriana. También un club ecuatoriano, el Emelec, rechazó su cesión en 2015 al no estar seguro del origen ecuatoriano del futbolista.Chile se apoya, según el abogado de su federación, Eduardo Carlezzo, en una cascada de evidencias documentales que demostrarían que Castillo falseó su nacionalidad ecuatoriana. Contra esto, Ecuador argumenta que hay una sentencia judicial de abril de 2021 que no entraba en el fondo de la cuestión y que permitía a Castillo jugar bajo nacionalidad ecuatoriana. Este es el mayor inconveniente que tendría la FIFA para eliminar a Ecuador del Mundial, puesto que no puede revocar las decisiones de la justicia ordinaria de un país. Solo si las pruebas aportadas por Chile son lo suficientemente sólidas, como asegura Carlezzo, y demuestran la falsificación de documentos, la FIFA podría excluir a Ecuador. E incluso de demostrarse, los órganos disciplinarios deberán decidir si sancionan únicamente al jugador o a la selección. En este sentido, desde Ecuador ya han comenzado a elevarse voces que reclaman que, en el caso de que exista fraude, sea solo el futbolista el que reciba el castigo y no la selección.Sin embargo, si los órganos disciplinarios de la FIFA concluyen que hay pruebas definitivas de que Castillo falseó documentación para poder ser inscrito como ecuatoriano sería complicado que la federación ecuatoriana (FEF), y por ende la selección, quedaran exentas del castigo por la gravedad de los hechos. Esto supone, a la hora de enjuiciar la infracción, que prime la denominada responsabilidad objetiva, por la cual la FEF no podrá argumentar como defensa que desconocía las presuntas tretas empleadas por Castillo
</p><br>

      <center> <img src='multimedia/champions.jpg' width='330' height='490'></center><br><br>
          <h3><A HREF='https://elpais.com/deportes/2022-05-11/la-fifa-abre-expediente-por-el-caso-byron-castillo-que-puede-dejar-a-ecuador-fuera-del-mundial-de-qatar-y-clasificar-a-chile.html'>segunda pagina fuente</A> </h3> 
          </main></article>
	";
}

function politica(){
	echo "
<main>
<article>

            <center><h3>Gobierno de CdMx publicará mañana tercer informe de empresa DNV sobre L12</h3></center><br>
<p>La jefa de Gobierno de la Ciudad de México, Claudia Sheinbaum, informó que mañana se hará público el tercer y último
reporte que realizó la empresa noruega DNV, sobre la causa raíz del desplome en el tramo elevado de la Línea 12 del Metro capitalino. “Ya mañana vamos a informar con detalle”, respondió ante los cuestionamientos sobre el informe en conferencia de prensa. Te recomendamos: Reporte identifica cuatro factores del colapso en la L12 De acuerdo con el último informe de la empresa DNV,  el colapso de la estructura fue ocasionado por fallas en las inspecciones, diseño, construcción y mantenimiento, así como falta de certificaciones y supervisión de las obras de ingeniería civil. El informe al que MILENIO tuvo acceso, fechado en diciembre de 2021, señala cuatro barreras o factores que de haber sido atendidos efectivamente habrían evitado el colapso del puente elevado, ocurrido el 3 de mayo de 2021, con un saldo de 26 personas fallecidas y al menos un centenar de heridos. “Algunas de las debilidades en las barreras comúnmente identificadas se relacionaron con una falta de vigilancia efectiva en varias etapas del proyecto (diseño, construcción y mantenimiento). DNV concluye que la mitigación de la amenaza de la pérdida de la estructura compuesta (falla por esfuerzos cortantes) en el caso del accidente de la L12, no se habría logrado atendiendo sólo una barrera”, expuso el informe. El documento identifica las barreras como las causas de raíz técnicas que fallaron o que faltaron. La primera barrera: fallo en el diseño, ya que no cumplió con lo que estipulan las especificaciones estadounidenses para la construcción de puentes, un estándar de referencia internacional</p>
<p>Los puentes se diseñan con base en estándares reconocidos por la industria con el fin de asegurar que se incorporen al diseño análisis de ingeniería aceptables y márgenes de seguridad que minimicen el riesgo de la falla. Con base en la revisión de documentos y en los análisis realizados como parte de esta investigación, se encontró que no se cumplieron los siguientes requerimientos AASHTO”, refirió. Segunda barrera: faltó la certificación de la obra por parte de un tercero independiente. Además de que DNV acusó que no se le proporcionó documentación relacionada con la debida supervisión en ingeniería del proyecto por parte de entidades supervisoras. “No se realizó la certificación de las obras de ingeniería civil, como se suele realizar conforme a las mejores prácticas de la industria”, indicó. La tercera barrera señala una falla en la instalación de pernos, conforme a los planos del diseño. “Los pernos unen las vigas con la plataforma de concreto para crear una estructura compuesta. La instalación inadecuada de los pernos comprometió la integridad de esta estructura compuesta”, asentó. La cuarta barrera, indica fallas en la inspección regular y el mantenimiento de la Línea 12. “El manual de mantenimiento de la Línea 12 especifica las inspecciones de rutina (trimestrales, semestrales y anuales, según el año de servicio) e inspecciones posteriores al sismo para los componentes estructurales.</p><br>


<img src='multimedia/HOLAGUAPA.jpeg'width='460' height='560'><br>

     
    <h3><A HREF='https://www.milenio.com/politica/comunidad/linea-12-metro-cdmx-publicara-manana-reporte-empresa-dnv'>pagina fuente</A><br><br></h3>
    </center>
  </article>
</main>
	";
}
function politicaP(){
	echo "
	<main> <article>

<center><h3>Secretaría del Trabajo realiza último intento para evitar huelga en Telmex</h3></center><br>
<p>La Secretaría del Trabajo y Previsión Social (STPS) realizará hoy el último esfuerzo para evitar la huelga en Telmex, prevista para mañana. La titular de la dependencia, Luisa María Alcalde, citó al Sindicato de Telefonistas de la República Mexicana (STRM) y a la representación patronal al mediodía para tener un encuentro virtual en el que se puedan negociar las condiciones laborales. Te recomendamos: Telefonistas buscan negociar con Telmex para evitar huelga Hasta el momento, la empresa ha ofrecido un aumento de cuatro por ciento en el salario y de uno por ciento en prestaciones a trabajadores activos, pero un aumento diferido menor a los jubilados. Esta propuesta ha sido rechazado en varias ocasiones por la Asamblea Nacional del STRM, por lo que fijaron el 11 de mayo para iniciar en huelga. El líder de los telefonistas ha asegurado que no darán paso atrás en su demanda para que los jubilados reciban el mismo beneficio de aumento, pero la empresa tampoco ha accedido a dicha demanda. Telmex no ha ido a huelga desde 1985. “No vamos a apagar nada, no vamos a bajar el switch, sólo vamos a salir de las instalaciones, colocaremos las banderas rojinegras, los trámites se suspenderían de inmediato, pero el servicio telefónico como tal no se suspendería”, ha insistido Hernández Juarez.</p><br>
<img src='multimedia/HOLAGUAPO.jpg'width='340' height='510'><br>
    <h3><A HREF='https://www.milenio.com/politica/stps-realiza-ultimo-intento-para-evitar-huelga-en-telmex'>pagina fuente</A></h3>
    </center><br><br>
    </main></article>
	";
}
function politicaPO(){
	echo "<main>
    <article>


<center> <h3>Contratación de médicos cubanos es oscura, política y poco ética: CEESP</h3></center><br><br>

<p>El Centro de Estudios Económicos del Sector Privado (CEESP) aseguró que la contratación de 500 médicos cubanos por parte del presidente de la República, Andrés Manuel López Obrador, fue oscura, política y poco ética en momentos donde el sector salud enfrenta una serie de problemas.</p>

<p>Hoy parecen sumarse nuevos problemas con los embates oficiales a la profesión médica y a la UNAM: En vez de hacer un diagnóstico de por qué la situación laboral de la profesión (aparentemente) tiene problemas y tomar las acciones conducentes para resolverlos, como una estrategia permanente, el gobierno opta por contratar médicos cubanos con el gobierno de ese país”, reprochó el organismo dedicado a elaborar análisis e investigación de la coyuntura económica</p>

<p>Según el órgano asesor en materia económica del Consejo Coordinador Empresarial (CCE) y de empresas de primer nivel en México, las pertinencia y circunstancias de dicha contratación “son por demás oscuras y generan todo tipo de cuestionamientos”.</p>

<p>El gobierno de López Obrador utiliza la provisión de salud en México, incluyendo las vacunas contra el Covid-19, “con fines políticos, puede ser eficaz, pero no es ético”, expresa el centro de investigación a cargo de Carlos Hurtado López.</p>

<p>La obligación del gobierno, por la cual pagan los contribuyentes, es la oferta de cobertura y servicios de salud de forma eficiente a la población, especialmente a los grupos más vulnerables, y a toda la población en general, expresa.</p>

<p>El pasado 9 de mayo, López Obrador informó de la contratación de 500 médicos especialistas de Cuba para cubrir vacantes en sitios donde doctores mexicanos no han querido ir; además, notificó un acuerdo para la compra de la vacuna cubana contra Covid-19, Abdala, para aplicarla a niños del país.</p>

    
                    <center><img src='multimedia/uuu.jpg' width='480' height='500'></center><br>

     <br><br>
     <h1><A HREF='https://www.elfinanciero.com.mx/bloomberg/2022/04/29/economia-de-mexico-regresa-al-crecimiento-sube-09-en-primer-trimestre/'>pagina fuente</A> </h1>  

         </main></article>";
}

function acoso(){
	echo "
	<main>
	<article>


<center><h3>Detienen a hombre por múltiples casos de abuso infantil registrados ¡durante 50 años</h3><br><br></center>

<p>Un total de nueve supuestas víctimas se han presentado ante las autoridades para denunciar actitudes sexuales inapropiadas por parte de Thomas David Lair desde 1972 hasta 2020.La mayoría de las víctimas tenían entre 6 y 9 años de edad en el momento de los incidentes, indicó la Oficina del Alguacil del Condado de Hillsborough este sábado en un comunicado.Lair enfrenta un total de 15 cargos, incluidos 13 cargos de abuso sexual lascivo, un cargo de agresión sexual cuando la víctima era menor de 12 años y él mayor de 18 y otro idéntico pero en este caso se produjo supuestamente cuando Lair era también menor de edad.Acusado abusaba de menores de 12 añosInicialmente los detectives conocieron que Lair supuestamente abusó sexualmente de varias mujeres jóvenes, muchas menores de 12 años, después de hacerse amigo de ellas y sus familias desde 1998 hasta 2020.Pero descubrieron que los casos que involucran al sospechoso, detenido el pasado día 13 de abril, se remontan supuestamente hasta 1972, cuando Lair era un preadolescente.La Policía de Hillsborough ha pedido a cualquier otra víctima potencial del acusado que se presente y testifique contra el acusado.Nuestros detectives están preocupados de que pueda haber otros niños afectados, y le pedimos a cualquier otra persona que pueda ser víctima que no tenga miedo de presentarse y hablar', dijo el alguacil Chad Chronister. 'Es importante que los padres sean cautelosos con cualquier adulto al que confíen el cuidado de sus hijos y que también escuchen a sus hijos si dicen que se sienten incómodos con una persona</p><br>

        <img src='multimedia/ABUSO.15.jpg' width='300' height='370'><br>

    <h3><A HREF='https://www.eluniversal.com.mx/mundo/detienen-hombre-por-multiples-casos-de-abuso-infantil-registrados-durante-50-anos'>pagina fuente</A></h3>
    </main>
    </article>
	";
}
function acosoACO(){
	echo "<main>
    <article>



           <center> <h3>Protestan alumnos del Cecyte Florido por presunto acoso y hostigamiento</h3></center><br><br>

<p>No muy lejos de la prepa, una camioneta blanca estaba a mi paso, de lado mío, a lo que me dio miedo y aceleré el paso. En ese momento un señor con una capucha de militar se bajó de la camioneta y me seguía diciéndome cosas.Casi corriendo dejé de verlo, a él y a la camioneta, me asusté demasiado, a lo que marqué a la prepa porque como ya había dicho no estaba lejos de ella. Cómo pude hablar mientras lloraba y se me iba el aire les dije dónde estaba y lo que pasaba. Me metí a una farmacia que estaba por ahí y me dijeron que no me moviera porque pronto iban a pasar por mí los de dirección.
Querían llevarme a la prepa a que tomara clases, pero sinceramente no quería, a lo que me llevaron con mi mamá. Yo tomo medicamentos controlados de ansiedad, depresión y otras, por lo que ya se pueden imaginar cómo me puse.Ya había pasado sustos así, pero este fue muy diferente, porque me dijeron que lo más seguro era que ya me tuvieran vista porqué ‘tengo el perfil de las que se están llevando’́, y ya se saben mi rutina de calles al ir y regresar de la escuela. Se los comparto como recordatorio de que en todo momento deben estar alertas de ustedes mismas, familiares y amigas, no  les deseo ese tipo de sustos a nadie”, concluye la publicación de la estudiante identificada como Mía.

Sus compañeros como un acto de solidaridad, quisieron exponer lo sucedido en una asamblea llevada a cabo el día jueves, pero les fue negado el uso de micrófono, por lo que comenzaron a manifestarse.Tras la primera manifestación se rumoró que tenían bombas Molotov consigo, por lo que dos elementos de la Policía Municipal de Tijuana entraron al plantel, lo que alertó a la comunidad estudiantil.

Este viernes, volvieron a manifestarse a las 10:00 horas, con pancartas donde decía “Hoy porto el uniforme con vergüenza” y “Ni una más”, expusieron también casos de acoso por parte de docentes, prefectos y un psicólogo en el plantel.</p>
    
                    <center><img src='multimedia/oli.jpg' width='430' height='450'></center><br>

<br><br>
     <h3><A HREF='https://www.elimparcial.com/tijuana/tijuana/Protestan-alumnos-del-Cecyte-Florido-por-presunto-acoso-y-hostigamiento-20220429-0022.html'>pagina fuente</A> </h3>  

         </main></article>";
}
function acosoA(){
	echo "
   <main><article>

   <center><h3>Prepa pide no usar falda ni shorts para evitar acoso; alumnas protestan</h3></center><br>
 <p>Las preparatorianas utilizaron las hojas de sus cuadernos y cartulinas para expresar rechazo al control que pretenden las autoridades académicas sobre su forma de vestir.
Mi falda no es problema para la educación, tu acoso sí”, “¡Nadie quiere tu pinche piropo!”, “¡Nadie me pregunta cómo vestía mi agresor!”, No visto provocadora”, “Tú piensas como acosador”, “Me visto para mí”, expresaron.
Se quejaron de la directora de la preparatoria, que en lugar de proceder en contra de docentes y alumnos que hostigan y acosan les sugirió que usen ropa cómoda para no llamar la atención, por lo mismo de la inseguridad y el acoso sexual. “Yo decido”, dijo una joven.
Varios alumnos usaron falda este martes en solidaridad con sus compañeras, y exigieron a la Policía Municipal reforzar los rondines en el barrio de San Miguel, por la seguridad de la comunidad estudiantil.</p><br><br>

<img src='multimedia/BUENO12.jpg' width='290' height='400'><br><br>
<h3><A HREF='https://www.eluniversal.com.mx/estados/prepa-pide-no-usar-falda-ni-shorts-para-evitar-acoso-alumnas-protestan'>pagina fuente</A></h3>
</main></article>
	";
}
function acosoAC(){
	echo "
<main><article>

           <center> <h3>Exhiben bullying en escuela primaria de Tlaxcala</h3></center><br><br>

         <p> A través de un video subido a las redes sociales, se exhibió bullying escolar en una escuela primaria del municipio de Cuapiaxtla en el estado de Tlaxcala donde los alumnos se burlan de una niña y posteriormente es 'pisada' por dos de sus compañeros al colocarle sus zapatos en la cabeza y hombro en señal de victoria, todo esto ocurrió en el interior del salón de clases.Lo anterior, fue difundido hace algunas horas donde se muestra a niños que corresponden a la escuela primaria 'Fray Julián Garcés' de la colonia Ignacio Allende en el municipio ubicado al oriente de la entidad y colindante con el estado de Puebla.Dicho comunidad fue noticia nacional el pasado mes de marzo, pues en la zona murió un bebe en el Centro de Salud de dicho lugar a falta de equipamiento médico.De acuerdo a la denuncia ciudadana, acusaron a la directora Guadalupe Abigail y al grupo docente de maestros de permitir este tipo de actos entre los alumnos, por lo que se espera que el Secretario de Educación de Tlaxcala, Tomas Munive Osorno, tome cartas en el asunto para deslindar responsabilidades.</p>

                    <center><img src='multimedia/CHORIZO.jpg' width='330px' height='490px'></center><br><br>

                                      <center><h3>Disminuyen casos de bullying denunciados ante la SEJ</h3></center><br><br>

 <p> La Secretaría de Educación Jalisco informa que disminuyeron los casos de bullying en los planteles educativos gracias a los programas implementados para disminuir los casos de violencia escolar, tan sólo de enero al cierre del ciclo escolar se registraron únicamente 20 casos, detalla el secretario de educación Juan Carlos Flores:
“Justo cuando llegamos hace seis - siete meses, detectamos que esta problemática era aguda y utilizamos las mismas estructuras para poder atenderla en un primer inicio, ahora con el proyecto Recrea, estamos no solo perfeccionando el esquema reactivo de atender las denuncias de bullying, sino que estamos fuertemente apostando a la prevención y la prevención se basa en un esquema de cultura de la paz y de convivencia escolar que aplica a todas las escuelas. Tuvimos alrededor de 20 casos en los seis meses pasados”.
El secretario exhorta a los padres de familia a denunciar cualquier tipo de violencia hacia los alumnos.</p><br><br>
     <h3><A HREF='https://wradio.com.mx/radio/2016/07/05/nacional/1467736536_937433.html'>pagina fuente</A></h3>  
   </article></main>
	";
}
function AcosoACOS(){
	echo "<main>
    <article>

<center> <h3>Azafata acusa a Elon Musk de acoso sexual y él alega persecución política</h3></center><br><br>

<p>Una azafata de un jet privado de SpaceX ha acusado al magnate Elon Musk por un caso de acoso sexual dentro de un jet privado de la compañía de la que él es dueño, pero la denuncia no prosperó tras un acuerdo por el que SpaceX le pagó 250.000 dólares a cambio de su silencio, asegura el portal Business Insider (BI), cuya fuente es una amiga de la afectada.
Musk ya ha reaccionado en su cuenta de Twitter negando los hechos, alegando que la persona que dio su testimonio es “una activista de extrema izquierda de Los Ángeles” y que “el único 
Ocasionalmente, puede recibir contenido promocional del San Diego Union-Tribune en Español.Según el artículo, Musk había contratado un jet privado para un viaje a Londres en 2016 y pidió un masaje como parte de los servicios disponibles para altos ejecutivos, y en mitad del masaje le mostró su pene en erección a la masajista -quien inicialmente había sido contratada como azafata- y le tocó sus muslos, diciéndole que si accedía a sus deseos podría “comprarle un caballo”, pero ella se negó.
La azafata, cuyo nombre no se desvela, fue finalmente despedida en represalia por no acceder a los deseos de Musk, y contrató entonces a un abogado, pero en 2018 la compañía SpaceX le propuso un pago de 250.000 dólares para no llevar el caso a los tribunales y nunca más referirse a él, en una reunión de su abogado en la que estuvo presente el mismo Musk, siempre según el artículo</p>
    
                    <center><img src='multimedia/Sitoybien.jpg' width='330px' height='500px'></center><br>

     <br><br>
     <h3><A HREF='https://www.sandiegouniontribune.com/en-espanol/espectaculos/gente/articulo/2022-05-20/azafata-acusa-a-elon-musk-de-acoso-sexual-y-el-alega-persecucion-politica '>pagina fuente</A> </h3>  

    </main></article>";
}
function escolares(){
	echo "<main>
    <article>


<center> <h3>AMLO llama a enviar a los niños y niñas que faltan a clases presenciales</h3></center><br><br>

<p>El presidente Andrés Manuel López Obrador urgió a abrir ya todas las escuelas en el país para que todo el alumnado regrese a clases presenciales porque está demostrado que a la fecha el reingreso escolar no ha disparado las cifras de contagios de Covid-19.
“No hay ningún indicio de rebrote de Covid-19, afortunadamente’’, dijo el primer mandatario.
Durante su habitual conferencia de prensa mañanera desde Palacio Nacional, el mandatario mexicano llamó a padres y madres de familias, maestros, directivos de escuelas y autoridades a “que ya se termine de enviar a todos los estudiantes, niños, adolescentes a las escuelas.’Hay que abrir todas las escuelas, urgió; “ya no debe de haber escuelas cerradas.AMLO recordó que “hubo toda una campaña’’ en el sentido de que, con la apertura de escuelas en agosto pasado, los niños se contagiarían de Covid-19. “Ya está demostrado que esto afortunadamente no sucedió; podemos probarlo.“Es importante subrayarlo porque nos costó trabajo convencer de que se regresara a clases presenciales; había toda una campaña en contra, desinformando. No hemos tenido, afortunadamente, problemas de contagios en escuelas’’.Todavía, dijo, falta abrir escuelas. “Entonces, ya. Es importante la educación presencial’’.No puede ser, explicó que se abran los centros comerciales, con el establecimiento de medidas sanitarias, y no las escuelas.
Para probar que los contagios de Covid-19 no se han disparado, mostró cifras.Informó que del 1 de agosto al 23 de octubre pasado se registraron 55,701 casos de coronavirus en la población de cero a 17 año Explicó que, por grupo de edad, del total de casos el porcentaje registrado fue el siguiente: de cero a cuatro años, 1%; de cinco a 11 años, 3%, y de 12 a 17 años, 6 por ciento.López Obrador insistió en que es muy importante el regreso completo a clases presenciales porque la escuela es el segundo hogar.</p><br><br>
    
                    <center><img src='multimedia/quevidanfea.jpg' width='350' height='370'></center><br>

     <br><br>
     <h3><A HREF='https://www.eleconomista.com.mx/politica/AMLO-llama-a-enviar-a-los-ninos-y-ninas-que-faltan-a-clases-presenciales-20211108-0044.html'>pagina fuente</A> </h3>

  

         </main></article>";
}
function economia(){
	echo "<main>
    <article>


<center> <h3>Economía de México regresa al crecimiento: sube 0.9% en primer trimestre</h3></center><br><br>

<p>La economía de México regresó al crecimiento en los primeros tres meses de 2022 después de estancarse en el último semestre de 2021, expandiéndose levemente menos de lo esperado en medio de una sólida demanda estadounidense de productos manufacturados.El Producto Interno Bruto avanzó 0.9 por ciento en el primer trimestre con respecto al trimestre anterior, de acuerdo con la estimación oportuna publicada este viernes por el Instituto Nacional de Estadística y Geografía (Inegi). La estimación mediana de analistas encuestados por Bloomberg era de 1.1 por ciento.La economía evitó por poco una recesión en el segundo semestre del año pasado.
A tasa anual, la segunda economía más grande de América Latina creció 1.6 por ciento entre enero y marzo, igualando las estimaciones.
Advertisement.El resultado de México se produce después de que la economía de Estados Unidos cayó por primera vez desde 2020 en el mismo período, con un retroceso del PIB a una tasa anualizada de 1.4 por ciento, de acuerdo con datos publicados el jueves.
México logró crecer mientras que EU se contrajo debido en parte a su déficit comercial, dijo Gabriela Siller, directora de análisis económico de Grupo Financiero BASE.
EU “importó más de lo que exportó y, ¿de dónde importa? Una buena parte, de México”, señaló Siller.</p><br><br>
    
                    <center><img src='multimedia/mmmm.png' width='430' height='450'></center><br>

     <br><br>
     <h3><A HREF='https://www.elfinanciero.com.mx/bloomberg/2022/04/29/economia-de-mexico-regresa-al-crecimiento-sube-09-en-primer-trimestre/''>pagina fuente</A> </h3> 

         </main></article>";
}
function economiaE(){
	echo "<main>
    <article>


<center> <h3>Los dos años negros del comercio textil: las ventas caen a la mitad y cierran 17.000 tiendas desde 2020</h3></center><br><br>

<p>El comercio textil no logra superar el coronavirus. Los hogares siguieron gastando menos en ropa el año pasado y las ventas volvieron a caer un 16%, tras el desplome del 41% en 2020, con lo que se cierran dos ejercicios muy complicados en los que la facturación del sector se ha reducido a la mitad, hasta 8.902 millones de euros, según los datos publicados este jueves por la patronal Acotex. La caída se ha reflejado en el cierre de 17.000 tiendas desde el inicio de la pandemia.
Las empresas esperaban que 2021 fuera un año de recuperación. No ha sido así. “Tras la catástrofe que vivimos en 2020, pensábamos que habría una reactivación del consumo, pero ha ido a peor, ha sido tremendamente duro”, ha explicado Eduardo Zamácola, presidente de Acotex desde 2015 y consejero delegado de la empresa familiar de ropa infantil Neck&Neck. El ejercicio empezó mal con la borrasca Filomena, que arruinó las rebajas de invierno, y a lo largo del primer semestre todavía hubo problemas de confinamiento por la pandemia. Después, el consumo no ha acabado de remontar, y finales de año la variante ómicron tampoco allanó la marcha del negocio
La pandemia ha acelerado una tendencia que empezó a tomar forma tras la crisis económica de 2008: los españoles gastan menos en ropa. “Hemos pasado de ser grandes consumidores de textil a ser más cautos”, según el empresario. Y, sobre todo desde 2020, la ropa se renueva menos. “En cuanto hay dudas, inestabilidad, el consumidor gasta menos en moda y más en ocio”. En impacto de la pandemia en las empresas ha sido muy diferente, según Zamácola, que ha señalado que algunas tiendas pequeñas han logrado crecer y otras han cerrado, y lo mismo ha pasado con las grandes cadenas.
Las familias españolas han reducido su gasto anual en ropa en 470 euros respecto a 2019, hasta 786 euros de media, frente a los 1.256 euros de antes de la pandemia, según los datos recopilados por Acotex en su informe anual sobre el sector (El comercio textil en cifras). Como consecuencia, en dos años la facturación ha caído un 54% acumulado: de 18.078 a 8.902 millones. En el último año han cerrado 2.429 tiendas, que han supuesto la pérdida de 8.586 empleos (en sector cuenta ahora con 163.846 trabajadores). El número de establecimientos a cierre de 2021 era de 44.672, frente a los 61.891 abiertos antes de la pandemia.</p><br><br>
    
                    <center><img src='multimedia/oo.jpg' width='480' height='500'></center><br>

     <br><br>
     <h3><A HREF='https://elpais.com/economia/2022-05-19/los-dos-anos-negros-del-comercio-textil-las-ventas-se-desploman-a-la-mitad-y-cierran-17000-tiendas.html'>pagina fuente</A> </h3>  
         </main></article>";
}
function economiaEC(){
	echo "<main>
    <article>


<center> <h3>Arce: ‘Estamos volviendo a ser una economía envidiable’</h3></center><br><br>

<p>El presidente Luis Arce reafirmó ayer que la reactivación económica aplicada desde noviembre de 2020 ya se siente en los bolsillos de las familias bolivianas hasta tal punto que, en su criterio, el país está volviendo a ser una “economía envidiable”.
Durante un acto de entrega de viviendas en el municipio chuquisaqueño de San Lucas, el mandatario recordó que hace un año todavía “no se sentía tanto la reactivación” económica en el país porque —según su versión— se habían vaciado los ahorros del país hasta el extremo del endeudamiento para combatir la pandemia del COVID-19.
“A más de un año de nuestro gobierno, ya podemos decirles con absoluta claridad que (…) las medidas económicas, que hemos tomado desde noviembre de 2020, están dando resultados. La reactivación ya se siente en los bolsillos de las familias poco a poco, la reactivación de la inversión pública y de la economía poco a poco ya se siente, y ¿saben qué?, hasta tal punto, hermanos y hermanas, que estamos volviendo a ser una economía envidiable”, remarcó el Jefe de Estado.
El gobierno de Arce, cuando llegó a la presidencia, creó el Bono Contra el Hambre y se diseñaron políticas para sustituir las importaciones que dieron lugar a la reactivación económica y el crecimiento de la demanda interna.Además de aplicar el Régimen de Reintegro del Impuesto al Valor Agregado (Re-IVA), el Impuesto a la Grandes Fortunas (IGF), entre otras que permitieron la recuperación de la economía.En 2021, el Producto Interno Bruto (PIB) de Bolivia llegó a un 6,11%, siendo el quinto país en crecimiento de América del Sur. Para este año, el Gobierno proyectó una expansión del 5,1%.En ese sentido citó, por ejemplo, una publicación de la BBC de Londres, que destaca el manejo macroeconómico de Bolivia e indica que “mientras la economía mundial vive conmocionada por la ola de inflación global, en Bolivia el Índice de Precios al Consumidor (IPC) se ha mantenido sorprendentemente estable”.
Entonces, “hermanos, de acuerdo a los estudios que hizo la BBC y que han hecho varios institutos extranjeros, Bolivia es el país con la menor inflación en toda la región y volvemos a mostrarnos como esa economía que nos caracterizó antes del golpe de Estado”, señaló Arce.La inflación de Bolivia en 2021 llegó a 0,9% y a abril de este año el acumulado alcanzó 0,41%. Para 2022 se prevé una inflación de 3,3%.</p><br><br>
    
                    <center><img src='multimedia/hospital.avif' width='480' height='500'></center><br>

     <br><br>
     <h1><A HREF='https://www.elfinanciero.com.mx/bloomberg/2022/04/29/economia-de-mexico-regresa-al-crecimiento-sube-09-en-primer-trimestre/'>pagina fuente</A> </h1>  

         </main></article>";
}


 if (isset($_GET['deportes1'])) {
    deportes();
}else if (isset($_GET['deportes2'])) {
	deportesD();
}else if (isset($_GET['deportes3'])) {
	deportesDE();
}else if (isset($_GET['politica1'])){
    politica();
}else if (isset($_GET['politica2'])) {
	politicaP();
}else if (isset($_GET['politica3'])){
	politicaPO();
}else if (isset($_GET['acoso1'])) {
    acoso();
}else if (isset($_GET['acoso2'])) {
	acosoA();
}else if (isset($_GET['acoso3'])) {
	acosoAC();
}else if (isset($_GET['acoso4'])){
	acosoACO();
}else if (isset($_GET['acoso5'])) {
	AcosoACOS();
}else if (isset($_GET['escolares1'])){
	escolares();
}else if (isset($_GET['economia1'])){
	economia();
}else if (isset($_GET['economia2'])) {
	economiaE();
}else if (isset($_GET['economia3'])){
	economiaEC();
}
?>
