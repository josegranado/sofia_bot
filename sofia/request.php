<?php
	include('../config/conexion.php');
	include('../config/api_telegram.php');
	include('../config/admins_telegram.php');
	$idBot = 806808072;
	$date = date('Y-m-d H:i:s');
	$request = file_get_contents("php://input");
	$update = json_decode($request, TRUE);
	$content = "$date\n$request\n\n";
	file_put_contents("webhook.log", $content, FILE_APPEND);
	$chatId = $update["message"]["chat"]["id"] ?? false;
	$chatTitle = $update["message"]["chat"]["title"] ?? false;
	$chatType = $update["message"]["chat"]["type"] ?? false;
	$newParticipants = $update["message"]["new_chat_members"] ?? false;
	$message = $update["message"]["text"] ?? false;
	$arr = explode(' ',trim($message));
	$command = $arr[0];
	$message = substr(strstr($message," "), 1);
	switch($command)
	{
		case '/registrostartup':
		$responseSU = 'Aquí dos formularios para completar para organizarnos con los próximos pasos para llevarla a la luz

Formulario 1
https://bit.ly/2Mo0r6z

Formulario 2
https://bit.ly/346dyzg';
		if(($update["message"]["chat"]["type"] == "private")|| ($chatId == -1001359045883))

		{
			sendMessage($chatId, $responseSU);	
		}	
		break;
		case '/registrostartup@Sofiabot_bot':
		$responseSU = 'Aquí dos formularios para completar para organizarnos con los próximos pasos para llevarla a la luz

Formulario 1
https://bit.ly/2Mo0r6z

Formulario 2
https://bit.ly/346dyzg';
		if(($update["message"]["chat"]["type"] == "private")|| ($chatId == -1001359045883))

		{
			sendMessage($chatId, $responseSU);	
		}
		break;
		case '/slackemprendedores':
		$responseSE = 'Si tienes la app Slack Sumate a los distintos verticales para intercambiar información específica de tu negocio:

https://bit.ly/37jkmfJ';
		if(($update["message"]["chat"]["type"] == "private")|| ($chatId == -1001359045883))
{
		sendMessage($chatId, $responseSE);
		}
		break;
		case '/slackemprendedores@Sofiabot_bot':
		$responseSE = 'Si tienes la app Slack Sumate a los distintos verticales para intercambiar información específica de tu negocio:

https://bit.ly/37jkmfJ';
		if(($update["message"]["chat"]["type"] == "private")|| ($chatId == -1001359045883))
{
		sendMessage($chatId, $responseSE);
	}
		break;
		case '/planillaemprendedores':
		$responsePE = 'Planilla registro emprendedores ✍️
https://bit.ly/2kAwp4J

Y aquí tienes la vista de los registros de emprendedores
https://goo.gl/4m4qJL';
		if(($update["message"]["chat"]["type"] == "private")|| ($chatId == -1001359045883))

		{
		sendMessage($chatId, $responsePE);
	}
		break;
		case '/planillaemprendedores@Sofiabot_bot':
		$responsePE = 'Planilla registro emprendedores ✍️
https://bit.ly/2kAwp4J

Y aquí tienes la vista de los registros de emprendedores
https://goo.gl/4m4qJL';
		if(($update["message"]["chat"]["type"] == "private")|| ($chatId == -1001359045883))

		{
			sendMessage($chatId, $responsePE);
		}
		break;
		case '/grupos':
		$responseGrupos = '🤓 Red de lectores  Biblioteca📚
👉 https://bit.ly/2NO8GcV

🧘‍♀️ Canal Meditación masiva
https://t.me/meditacionmasiva

🧘🏻‍♂️ Meditación masiva grupo
https://bit.ly/2r4drGc

🙏 Espiritualidad
👉 https://bit.ly/2KrSTyn

🌏 Astrología
👉 https://bit.ly/2OikZ06

👁‍🗨 Red consciencia plena
👉 t.me/redconsciencia

🌸 Canal Consciencia:
👉 https://t.me/consciencia

🧡Talleres Consciencia 
👉 t.me/tallerconsciencia

☯️ Tao Te King (silencio)
👉 https://bit.ly/37cIHU7

☯️ Tao Te King (chat)
👉 https://bit.ly/2Oh6ppO

🔯 Academia Consciencia
👉 https://bit.ly/354UqCn

🍀 Red Saludable
👉 t.me/redsalud

🙏 Afirmaciones
👉 https://t.me/afirmacionesdiarias

🌸 Taller abundancia (canal)
👉 https://t.me/tallerdeabundancia

🌼 Taller abundancia (grupo)
👉 t.me/tallerabundancia

🚀 Misión Planeta 🌏
👉 https://bit.ly/2rOMPtp

🐬 Mision Delfínica
👉 https://bit.ly/2qiYPCT

🈂️ Codigos Sagrados
👉 https://bit.ly/33PVPfP

⏰ design⚡️sprint 
👉 https://bit.ly/2OjC3mp

👩‍👧‍👦 Empleos en línea
👉 https://bit.ly/33RiOqT

🖥 Trabaja en internet
👉 t.me/globalmeetwork

⚙️ Emprendimientos online
👉 https://bit.ly/2Kr3JEM

🤝 Red de negocios
📝 Regístrate al ingresar
👉 t.me/rednegocios

🔮 Tarot
👉 https://bit.ly/2rGJlcf

🌏 Astrologia
👉 https://bit.ly/2OikZ06

♓️ Tantra Espíritu Sexo
👉 t.me/sexotantrico

🚀 Networking
👉 t.me/networkingemprendedores

💡 Startup idea
👉 https://bit.ly/2NP3uWk

📡 Plataforma GlobalWork
👉 t.me/globalmeetwork

♻️ Red sustentable
👉 t.me/redsustentable';
		if(($update["message"]["chat"]["type"] == "private")|| ($chatId == -1001359045883))
		{
		sendMessage($chatId, $responseGrupos);
	}
		break;
		case '/grupos@Sofiabot_bot':
$responseGrupos = '🤓 Red de lectores  Biblioteca📚
👉 https://bit.ly/2NO8GcV

🧘‍♀️ Canal Meditación masiva
https://t.me/meditacionmasiva

🧘🏻‍♂️ Meditación masiva grupo
https://bit.ly/2r4drGc

🙏 Espiritualidad
👉 https://bit.ly/2KrSTyn

🌏 Astrología
👉 https://bit.ly/2OikZ06

👁‍🗨 Red consciencia plena
👉 t.me/redconsciencia

🌸 Canal Consciencia:
👉 https://t.me/consciencia

🧡Talleres Consciencia 
👉 t.me/tallerconsciencia

☯️ Tao Te King (silencio)
👉 https://bit.ly/37cIHU7

☯️ Tao Te King (chat)
👉 https://bit.ly/2Oh6ppO

🔯 Academia Consciencia
👉 https://bit.ly/354UqCn

🍀 Red Saludable
👉 t.me/redsalud

🙏 Afirmaciones
👉 https://t.me/afirmacionesdiarias

🌸 Taller abundancia (canal)
👉 https://t.me/tallerdeabundancia

🌼 Taller abundancia (grupo)
👉 t.me/tallerabundancia

🚀 Misión Planeta 🌏
👉 https://bit.ly/2rOMPtp

🐬 Mision Delfínica
👉 https://bit.ly/2qiYPCT

🈂️ Codigos Sagrados
👉 https://bit.ly/33PVPfP

⏰ design⚡️sprint 
👉 https://bit.ly/2OjC3mp

👩‍👧‍👦 Empleos en línea
👉 https://bit.ly/33RiOqT

🖥 Trabaja en internet
👉 t.me/globalmeetwork

⚙️ Emprendimientos online
👉 https://bit.ly/2Kr3JEM

🤝 Red de negocios
📝 Regístrate al ingresar
👉 t.me/rednegocios

🔮 Tarot
👉 https://bit.ly/2rGJlcf

🌏 Astrologia
👉 https://bit.ly/2OikZ06

♓️ Tantra Espíritu Sexo
👉 t.me/sexotantrico

🚀 Networking
👉 t.me/networkingemprendedores

💡 Startup idea
👉 https://bit.ly/2NP3uWk

📡 Plataforma GlobalWork
👉 t.me/globalmeetwork

♻️ Red sustentable
👉 t.me/redsustentable';	
		if(($update["message"]["chat"]["type"] == "private")|| ($chatId == -1001359045883))

		{
			sendMessage($chatId, $responseGrupos);	
		}
		break;
		case '/redessociales':
		$responseRS = 'Página web oficial:
http://bit.ly/33WArWq

Twitter oficial:
http://bit.ly/2Ng5Mxx

Instagram oficial:
http://bit.ly/357C0kz
		';
		if(($update["message"]["chat"]["type"] == "private")|| ($chatId == -1001359045883))

		{
			sendMessage($chatId, $responseRS);
		}
		break;
		case '/redessociales@Sofiabot_bot':
		$responseRS = 'Página web oficial:
http://bit.ly/33WArWq
		
Twitter oficial:
http://bit.ly/2Ng5Mxx

Instagram oficial:
http://bit.ly/357C0kz
		';
		if(($update["message"]["chat"]["type"] == "private")|| ($chatId == -1001359045883))
{
		sendMessage($chatId, $responseRS);
		}
		break;
		case '/enlace':
		$responseEnlace = "El enlace de referido disponible es el siguiente: 

		https://referidos.consciencia.red/invite/XWvoyX6k7l4M";
		if($update["message"]["chat"]["type"] == "private"){
		sendMessage($chatId, $responseEnlace);
	}
		break;
		case '/enlace@Sofiabot_bot':
		$responseEnlace = "El enlace de referido disponible es el siguiente: 
		
		https://referidos.consciencia.red/invite/q4PbL9ALwA5v";
		if(($update["message"]["chat"]["type"] == "private")|| ($chatId == -1001359045883))
		{sendMessage($chatId, $responseEnlace);}
		break;
		case '/ayuda':
		$responseHelp = '
¡HOLA! puedes consultarme por privado y te ayudaré! 😃

🙋🏻‍♂️🎉LISTA DE COMANDOS🧐

/enlace Solicitas tu link de referido de referidos.consciencia.red
/redesociales Solicitas las redes sociales del proyecto
/solicitarcodigo Solicitas tu codigo de acceso para GlobalWork
/grupos Solicitas todos los links de los grupos del proyecto
/slackemprendedores - Solicitas el slack del grupo Networking Emprendedores
/planillaemprendedores - Solicitas la planilla de inscripción del grupo Networking Emprendedores
/registrostartup - Solicitas los formularios de inscripción para el grupo Startup Ideas
';
		sendMessage($chatId, $responseHelp);
		break;
		case '/ayuda@Sofiabot_bot':
		$responseHelp2 = '
¡HOLA! puedes consultarme por privado y te ayudaré! 😃

🙋🏻‍♂️🎉LISTA DE COMANDOS🧐

/enlace Solicitas tu link de referido de referidos.consciencia.red
/redesociales Solicitas las redes sociales del proyecto
/solicitarcodigo Solicitas tu codigo de acceso para GlobalWork
/grupos Solicitas todos los links de los grupos del proyecto
/slackemprendedores - Solicitas el slack del grupo Networking Emprendedores
/planillaemprendedores - Solicitas la planilla de inscripción del grupo Networking Emprendedores
/registrostartup - Solicitas los formularios de inscripción para el grupo Startup Ideas';
		sendMessage($chatId, $responseHelp2);
		break;
		case '/solicitarcodigo':
		$sCode = solicitarCodigo($chatId, $update["message"]["from"]["id"]);
		if ($sCode)
		{
			$responseCode = 'Tu código de acceso de GlobalWork es: '.$sCode;
			sendMessage($chatId, $responseCode);
		}
		else
		{
			$newCode = generateCode($update["message"]["from"]["first_name"], $update["message"]["from"]["last_name"]);
			$responseCode = '¡Aquí tienes tu código de acceso de GlobalWork!. Tu nuevo código es '.$newCode;
			if($update["message"]["chat"]["type"] == "private"){
			sendMessage($chatId, $responseCode);
			}
			$queryChatIdBd = "SELECT * FROM chat WHERE telegram_id = ".$chatId."";
			$result = $conex->query($queryChatIdBd);
			$chatBd = $result->fetch_assoc();
			$insertCode = "INSERT INTO accesscodes (code, user_telegram_id, chat_telegram_id, chat_id) VALUES ('".$newCode."', '".$update['message']['from']['id']."', '".$chatId."', '".$chatBd["id"]."')";
			$conex->query($insertCode);
		}
		break;
		case '/solicitarcodigo@Sofiabot_bot':
		$sCode = solicitarCodigo($chatId, $update["message"]["from"]["id"]);
		if ($sCode)
		{
			$responseCode = 'Tu código de acceso de GlobalWork es: '.$sCode;
			sendMessage($chatId, $responseCode);
		}
		else
		{
			$newCode = generateCode($update["message"]["from"]["first_name"], $update["message"]["from"]["last_name"]);
			$responseCode = '¡Aquí tienes tu código de acceso de GlobalWork!. Tu nuevo código es '.$newCode;
			if($update["message"]["chat"]["type"] == "private"){
			sendMessage($chatId, $responseCode);
		}
			$queryChatIdBd = "SELECT * FROM chat WHERE telegram_id = ".$chatId."";
			$result = $conex->query($queryChatIdBd);
			$chatBd = $result->fetch_assoc();
			$insertCode = "INSERT INTO accesscodes (code, user_telegram_id, chat_telegram_id, chat_id) VALUES ('".$newCode."', '".$update['message']['from']['id']."', '".$chatId."', '".$chatBd["id"]."')";
			$conex->query($insertCode);
		}
		break;
		
	}
	newParticipant();
	
	function newParticipant()
	{
		global $update, $newParticipants, $chatId, $conex, $chatTitle, $chatType, $idBot;
		if($newParticipants)
		{
			foreach($newParticipants as $newParticipant)
			{
				if ($newParticipant["id"] === $idBot)
				{
					$insertChat = "INSERT INTO chat (telegram_id) VALUES ('".$chatId."')";
					$conex->query($insertChat);
				}
				if($newParticipant["is_bot"] === false)
				{
					$queryCode = "SELECT * FROM accesscodes WHERE user_telegram_id = '".$newParticipant['id']."' AND chat_telegram_id = '".$chatId."'";
					$result = $conex->query($queryCode);
					$codeBd = $result->fetch_assoc();
					if($codeBd)
					{
						$code = $codeBd['code'];
					}
					else
					{
						$code = generateCode($newParticipant["first_name"],$newParticipant["last_name"]);
						$queryChatIdBd = "SELECT * FROM chat WHERE telegram_id = ".$chatId."";
						$result = $conex->query($queryChatIdBd);
						$chatBd = $result->fetch_assoc();
						$insertCode = "INSERT INTO accesscodes (code, user_telegram_id, chat_telegram_id, chat_id) VALUES ('".$code."', '".$newParticipant["id"]."', '".$chatId."', '".$chatBd["id"]."')";
						$conex->query($insertCode);

					}
					if($chatId  === -1001325440549)//GLOBALWORK
					{
						$response = '¡Bienvenido/a a '.$update["message"]["chat"]["title"].' '.$newParticipant["first_name"].' '.$newParticipant["last_name"].'.'.' Tu código de acceso es: '.$code.'.  

Con este código puedes registrarte en nuestra comUnidad. Comparto el enlace: 

 https://consciencia.red/registro/ 

(colocar el código de acceso como nombre de usuario), luego de eso puedes  unirte al grupo GlobalWork, este es el link:

https://consciencia.red/grupos/global-work/

Una vez completado los pasos ¡FELICIDADES FORMAS PARTE DE ESTA GRAN COMUNIDAD! 
👏👏🙋🏻‍♂️🎉

Si necesitas ayuda no dudes en consultarme:
Solo escribe "/ayuda" y yo te ayudaré.
';
					}
					if ($chatId === -1001348007259) // NETWORKING EMPRENDEDORES
					{
						$response = '🚀 Bienvenido a '.$update["message"]["chat"]["title"].'! 🎉
'.$newParticipant["first_name"].' '.$newParticipant["last_name"].'

Un gusto que te hayas sumado a la red! Aquí intercambiamos contactos, eventos / novedades / cursos / talleres e información de utilidad para potenciar nuestros emprendimientos. 

Si necesitas ayuda no dudes en consultarme:
Solo escribe "/ayuda" y yo te ayudaré.
';
					}
					if ($chatId === -1001244990068) //STARTUPIDEAS
					{
						$response = '💥 Bienvenido a '.$update['message']['chat']['title'].' '.$newParticipant['first_name'].' '.$newParticipant['last_name'].'


Un gusto que te hayas sumado a startups ideas de la comunidad emprendedora! 

Si tienes una idea de emprendimiento, una startup o un proyecto en marcha que deseas desarrollar o potenciar, este es el lugar! 

Si necesitas ayuda no dudes en consultarme:
Solo escribe "/ayuda" y yo te ayudaré.
';
					}
					if ($chatId === -1001349050525 )//RED CONSCIENCIA PLENA
					{
						$response ='Bienvenido/a '.$newParticipant["first_name"].' '.$newParticipant["last_name"].'

Soy Sofía un “bot”  que colaboro en el grupo. 

Si necesitas ayuda no dudes en consultarme:
Solo escribe "/ayuda" y yo te ayudaré.
';
					}
					if ($chatId === -1001229232719 ) //ASTROLOGIA
					{
						$response = '🎉Bienvenid@ a '.$update['message']['chat']['title'].'
'.$newParticipant['first_name'].' '.$newParticipant['last_name'].'

¿Sabias la fecha hora y lugar de nacimiento influyen en el devenir de tu vida?

¿Ya sabes que determinan los astros en tu vida?  ¿Ya cuentas con tu carta astral? 

Transitamos continuamente por nuevos ciclos Solares 🌞, lunares 🌓 y otros Planetas del Sistema Solar 🌈

El Sol hace su entrada en las distintas constelaciones iniciando una nueva rueda zodiacal cada vez, un nuevo proceso creativo que nos invita a dejar florecer ⛲️ la maravillosa aventura de superarnos a nosotros mismos 🤗

El inicio y Cambio forma parte del cosmos. Acompañaremos la energía de los astros y su influencia en nuestro día a día  🌍🌅👁

Si necesitas ayuda no dudes en consultarme:
Solo escribe "/ayuda" y yo te ayudaré.';
					}
					if ($chatId === -1001107790440 ) //FUTUROS DIAMANTES
					{
						$response = 'Bienvenido al grupo de '.$update['message']['chat']['title'].' 

'.$newParticipant['first_name'].' '.$newParticipant['last_name'].'

En este grupo organizaremos la red de comunicación entre líderes comunicadores globales. 
Solicitame ayuda escribiendo lo siguiente:
"/ayuda"
Solicita tu enlace maestro para establecer tu red de referidos. 
Escribiendo la palabra /enlace

Capitaliza tus contactos. Configura tu red para recibir bonificaciones y compensación económica por las compras / inversiones / servicios en multinivel. 

 “Capitaliza tu poder influencia”.

Si necesitas ayuda no dudes en consultarme:
Solo escribe "/ayuda" y yo te ayudaré.
';
					}
					if ($chatId === -1001223908517) //TAO
					{
						$response = '¡Bienvenid@ '.$newParticipant['first_name'].' '.$newParticipant['last_name'].' a '.$update['message']['chat']['title'].'! 
“El camino del silencio interior”
Para muchos el libro más profundo que se ha escrito. 

Meditación estudio del TAO TE KING.

Recibe diariamente estrofas de los sucesivos capítulos en canal TAO :
https://bit.ly/2WFfY5N

Si necesitas ayuda no dudes en consultarme:
Solo escribe "/ayuda" y yo te ayudaré.';
					}
					if ($chatId === -1001179313572) //ESPIRITUALIDAD
					{
						$response = '¡Bienvenid@ '.$newParticipant['first_name'].' '.$newParticipant['last_name'].' al grupo '.$update['message']['chat']['title'].'! 

“El camino del conocimiento interior”

Comparte tus reflexiones en este grupo y ayúdanos a activar el cambio hacia una #NuevaHumanidad 

Si necesitas ayuda no dudes en consultarme:
Solo escribe "/ayuda" y yo te ayudaré.';
					}
					if ($chatId === -1001318169578) //LIBROS
					{
						$response = '🎉 Bienvenido/a '.$newParticipant['first_name'].' '. $newParticipant['last_name'].' a '.$update['message']['chat']['title'].'!          

Aquí compartiremos libros/ pdf audiolibros de todas las temáticas y también podremos comentarlos!     

Si necesitas ayuda no dudes en consultarme:
Solo escribe "/ayuda" y yo te ayudaré.';
					}
					if($chatId === -1001173745292) //RED DE NEGOCIOS
					{
						$response = 'Bienvenido a'.$update['message']['chat']['title'].' '.$newParticipant['first_name'].' '.$newParticipant['last_name'].'

Aquí te enterarás de los negocios y oportunidades de la actualidad. 

Comparte y propuesta de negocios aquí en el grupo


Si lo deseas puedes 
ingresar a la RED del Sistema, completando tu registro,  tus áreas de interés, obtendrás  tu enlace propio para invitar a tu red y comprar/ vender en las plataformas del sistema referidos. 

https://referidos.consciencia.red/invite/q4PbL9ALwA5v


Una vez completado tu registro en Red de Negocios copia y guarda tu enlace personal para convocar e invitar. 

Recibirás información de negocios e inversiones en las áreas de: 

👉 Plataformas de crowfunding 

👉 Criptomonedas 

👉 Inversion en startups innovadoras

👉 Franquicias de mkt y publicidad

👉 Franquicias en sistema de viajes y turismo. 

👉 Plataformas educativas y escuelas de negocios. 

👉 Marketplaces / venta 

🙋🏻‍♂️ Éxitos en tus negocios!
Si necesitas ayuda no dudes en consultarme:
Solo escribe "/ayuda" y yo te ayudaré.
';
					}
					if ($chatId === -1001321670076)//ACADEMIA CONSCIENCIA PLENA
					{
						$response = 'Bienvenido al espacio de la '.$udpate['message']['chat']['title'].'

'.$newParticipant['first_name'].' '.$newParticipant['last_name'].'

🎉 Nos alegramos que estés aquí unido a nuestra comUnidad de la #Redconscienciaplena

Aquí nuestro propósito es la 🌀 evolución de nuestras consciencias y para ello hemos creado la Academia. Aquí podremos estudiar / enseñar / compartir / guiar y ser guiados en todos los caminos posibles que nos llevan hacia la consciencia plena. 

Si deseas brindar capacitaciones puedes hacerlo y la Academia te ayudará a organizar tu curso/ taller / dinámica y también con un sistema de referidos ayudará a la difusión en la red. 

Comparto aquí una guía básica con lo necesario para subir tu curso/taller a nuestra Plataforma. 

https://bit.ly/2OlFAAW


🙋‍♀️ Excelente jornada 🎶
El equipo de la Academia

Si necesitas ayuda no dudes en consultarme:
Solo escribe "/ayuda" y yo te ayudaré.
';
					}
					if ($chatId == -1001324715078) //RED SALUdABLE
					{
						$response = '🍀 Bienvenid@ a '.$update['message']['chat']['title'].'

'.$newParticipant['first_name'].' '.$newParticipant['last_name'].'

🎉 Felicitaciones por la decisión de sumarte al equipo! 

Aquí estamos con el propósito de mejorar nuestra salud, la de nuestros seres más queridos y la del planeta 🌏 

Compartiremos información, recetas, tips, buenas prácticas y todo lo que mejore nuestra salud y la de tod@s para una vida saludable y consciente! 

Contamos con un flamante marketplace con alimentación consciente, productos para el hogar 🏡 vestimenta y regalos 🎁 ecofriendly. 

Contamos contigo para sumarte al equipo de embajadores  saludables ! 

Visita nuestro 🍀 EcoMarket y abre tu cuenta para comenzar ya! 

👉 www.consciencia.red/ecomarket 

Si necesitas ayuda no dudes en consultarme:
Solo escribe "/ayuda" y yo te ayudaré.
';
					}
					if ($chatId === -1001359045883) //NUEVO GRUPO DE CONSCINENCIA
					{
						$response = '🙋🏻‍♂️ Bienvenid@ 😊💜 '.$newParticipant['first_name'].' '.$newParticipant['last_name'].'

¡Una alegría que estés aquí y  felicitaciones 🎉 por este paso en tu camino de 🌀 Evolución en Red de Consciencia !

Este es el portal de ingreso y acceso a los enlaces a los distintos nodos para tu evolución. Ingresa al que desees en el momento que desees y recorre los espacio según lo sientas. 

Cada espacio es un centro evolutivo donde te reencontrarás con nuevos seres de los cuales aprenderás algo . 

Podrás viajar hacia otros nodos cuando quieras y también enterarte de los nuevos espacios que se van creando, solicitando ayuda a Sofía, nuestra ayudante virtual que nos indica lo que necesitemos para guiarnos en nuestro camino. 

Comparto aquí los enlaces, al ingresar si lo deseas puedes presentarte o consultar con ayuda para los próximos pasos. 

Te deseo un feliz viaje 💞

<<<<<<<<>>>>>>>>>

👁‍🗨 Conexión•nodos•
👉 https://bit.ly/2OjkGU4i 

🤓 Red de lectores 
👉 https://bit.ly/2NO8GcV

🏛 Cartel Cultural
👉 https://t.me/carteleracultural

🧘‍♀️ Canal Meditación masiva
https://t.me/meditacionmasiva

🧘🏻‍♂️ Meditación masiva grupo
https://bit.ly/2r4drGc

🙏 Espiritualidad
👉 https://bit.ly/2KrSTynooi

🙏 Líderes espirituales 
https://bit.ly/2XyZWea

💭 Mensajes Osho
👉 t.me/mensajesosho

🌏 Astrología
👉 https://bit.ly/2OikZ06

👁‍🗨 Red consciencia plena
👉 t.me/redconsciencia

🌸 Canal Consciencia:
👉 https://t.me/consciencia

🧡Talleres Consciencia 
👉 t.me/tallerconsciencia

☯️ Tao Te King (silencio)
👉 https://bit.ly/37cIHU7

☯️ Tao Te King (chat)
👉 https://bit.ly/2Oh6ppO

🔯 Academia Consciencia
👉 https://bit.ly/354UqCn

🍀 Red Saludable
👉 t.me/redsalud

🙏 Afirmaciones
👉 https://t.me/afirmacionesdiarias

🌸 Taller abundancia (canal)
👉 https://t.me/tallerdeabundancia

🌼 Taller abundancia (grupo)
👉 t.me/tallerabundancia

🚀 Misión Planeta 🌏
👉 https://bit.ly/2rOMPtp

🐬 Mision Delfínica
👉 https://bit.ly/2qiYPCT

🈂️ Codigos Sagrados
👉 https://bit.ly/33PVPfP

⏰ design⚡️sprint 
👉 https://bit.ly/2OjC3mp

👨‍👩‍👧‍👦 Economía del bien comun 
https://bit.ly/33ZTT4u

🔑 Rondas de Inversion 
👉 https://bit.ly/33YnyLF

👩‍👧‍👦 Empleos en línea
👉 https://bit.ly/33RiOqT

🖥 Trabaja en internet
👉 t.me/globalmeetwork

⚙️ Emprendimientos online
👉 https://bit.ly/2Kr3JEM

🤝 Red de negocios
📝 Regístrate al ingresar
👉 t.me/rednegocios

🔮 Tarot
👉 https://bit.ly/2rGJlcf

🌏 Astrologia
👉 https://bit.ly/2OikZ06

✨ Reiki angelical 
👉 https://bit.ly/2rqTpWD

♓️ Tantra Espíritu Sexo
👉 t.me/sexotantrico

🚀 Networking
👉 t.me/networkingemprendedores

💡 Startup idea
👉 https://bit.ly/2NP3uWk

📡 Plataforma GlobalWork
👉 t.me/globalmeetwork

♻️ Red sustentable
👉 t.me/redsustentable
';
					}
					if ($chatId === -1001441291361)
					{
						$response = '';

					}
					if ($chatId === -100131021443) //FRACTALAS Y MANDALAS
					{
						$response = 'Bienvenida '.$newParticipant['first_name'].' '.$newParticipant['last_name'].' al movimiento 💞 
Aquí damos y recibimos regalos 🎁 evolucionando en tríadas. 

Si ya tienes tu triada te anotamos en la lista 🙋🏻‍♂️';
					}
					sendMessage($chatId, $response);
					}
			}
		}
	}
	function sendMessage($chatId,$response)
	{
		$url = $GLOBALS[website].'/sendMessage?chat_id='.$chatId.'&parse_mode_HTML&text='.urlencode($response);
		file_get_contents($url);
	}
	function generateCode($fName, $lName)
	{
		$cadena1 = $fName;
		$cadena2 = $lName;
		$firstName = '';
		$lastName = '';
		for($i = 0; $i < strlen($cadena1); $i++)
		{
			if ($cadena1[$i] != ' ')
			{
				$firstName = $firstName.$cadena1[$i];
			}
		}
		for($i = 0; $i < strlen($cadena2); $i++)
		{
			if ($cadena2[$i] != ' ')
			{
				$lastName = $lastName.$cadena2[$i];
			}
		}
		$firstName = strtolower($firstName);
		$lastName = strtolower($lastName);
		$code = $firstName.$lastName.rand(5,10000).'gw';
		return $code;
	}
	function solicitarCodigo($chatId, $fromId)
	{
		global $conex;
		$queryCode = "SELECT * FROM accesscodes WHERE user_telegram_id = '".$fromId."' AND chat_telegram_id = '".$chatId."'";
		$resultCode = $conex->query($queryCode);
		$chatDB = $resultCode->fetch_assoc();
		if ($chatDB)
		{
			return $chatDB['code'];
		}
		else
		{
			return false;
		}
	}