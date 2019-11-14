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
		case '/enlace':
		$responseEnlace = "El enlace de referido disponible es el siguiente: 

		https://referidos.consciencia.red/invite/XWvoyX6k7l4M";
		sendMessage($chatId, $responseEnlace);
		break;
		case '/enlace@Sofiabot_bot':
		$responseEnlace = "El enlace de referido disponible es el siguiente: 
		
		https://referidos.consciencia.red/invite/q4PbL9ALwA5v";
		sendMessage($chatId, $responseEnlace);
		break;
		case '/setenlace':
		$responseSetEnlace = "El enlace de referido disponible es el siguiente: ".$arr[2];
		sendMessage($chatId, $responseSetEnlace);
		break;
		case '/setenlace@Sofiabot_bot':
		$responseSetEnlace = "El enlace de referido disponible es el siguiente: ".$arr[2];
		sendMessage($chatId, $responseSetEnlace);
		break;
		case '/ayuda':
		$responseHelp = '🙋🏻‍♂️🎉LISTA DE COMANDOS🧐

/enlace Solicitas tu link de referido de referidos.consciencia.red';
		sendMessage($chatId, $responseHelp);
		break;
		case '/ayuda@Sofiabot_bot':
		$responseHelp = '🙋🏻‍♂️🎉LISTA DE COMANDOS🧐

/enlace Solicitas tu link de referido de referidos.consciencia.red';
		sendMessage($chatId, $responseHelp);
		break;
		case '/referidos':
		$responseRefer = 'Solicitaste link de referido';
		sendMessage($chatId, $responseRefer);
		break;
		case '/referidos@Sofiabot_bot':
		$responseRefer = 'Solicitaste link de referido';
		sendMessage($chatId, $responseRefer);
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
			sendMessage($chatId, $responseCode);
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
			sendMessage($chatId, $responseCode);
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

Síguenos en nuestro twitter oficial @conscienciared:
http://bit.ly/2Ng5Mxx';
					}
					if ($chatId === -1001348007259) // NETWORKING EMPRENDEDORES
					{
						$response = '🚀 Bienvenido a '.$update["message"]["chat"]["title"].'! 🎉
'.$newParticipant["first_name"].' '.$newParticipant["last_name"].'

Un gusto que te hayas sumado a la red! Aquí intercambiamos contactos, eventos / novedades / cursos / talleres e información de utilidad para potenciar nuestros emprendimientos. 
Puedes consultar y también registrarte en la planilla para conocer y darte a conocer en el grupo! 
Aquí te registras: 
Planilla registro emprendedores ✍️
https://bit.ly/2kAwp4J

Y aquí tienes la vista de los registros de emprendedores
https://goo.gl/4m4qJL
Contamos con una amplia biblioteca virtual con libros temáticos para emprendedores 
📚 Libros para emprendedores
📖 biblioteca virtual📖
https://bit.ly/2ZtbLXs

Si tienes la app Slack Sumate a los distintos verticales para intercambiar información específica de tu negocio. 

Slack con canales de discusión:👇
https://bit.ly/2QyL7EE

Si tienes una idea o proyecto puedes sumarte a Startup 💡 ideas. Aquí puedes desarrollarla y también conseguir fondos con inversores. 
https://t.me/joinchat/JC6o5hPYuKn99ZS-SFW7PQ

Comparte este enlace al grupo así la comUnidad sigue creciendo Conra aporte de todos ! 
Enlace a este grupo en Telegram: 👇
https://bit.ly/2knGIZK

Te deseamos que hagas muchos contactos y sobre todo amigos! 

Que tengas una excelente jornada.

Síguenos en nuestro twitter oficial @conscienciared:
http://bit.ly/2Ng5Mxx';
					}
					if ($chatId === -1001244990068) //STARTUPIDEAS
					{
						$response = '💥 Bienvenido a '.$update['message']['chat']['title'].' '.$newParticipant['first_name'].' '.$newParticipant['last_name'].'


Un gusto que te hayas sumado a startups ideas de la comunidad emprendedora! 

Si tienes una idea de emprendimiento, una startup o un proyecto en marcha que deseas desarrollar o potenciar, este es el lugar! 
Aquí dos formularios para completar para organizarnos con los próximos pasos para llevarla a la luz

Formulario 1
https://bit.ly/2Mo0r6z

Formulario 2
https://bit.ly/346dyzg


Puedes consultar y también registrarte en la planilla para conocer y darte a conocer en el grupo! 

Contamos con una amplia biblioteca virtual con libros temáticos: 

📚 Libros para emprendedores:
https://bit.ly/2ZtbLXs

Si tienes la app Slack Sumate a los distintos verticales para intercambiar información específica de tu negocio. 

Slack con canales de información de tu negocio / rubro👇

https://bit.ly/2QyL7EE

Únete también a nuestro grupo de Networking de emprendedores 
Aquí el enlace:
https://bit.ly/2knGIZK

Comparte este enlace al grupo si tienes socio o amigo que necesite potenciar sus ideas, así la comUnidad sigue creciendo Conra aporte de todos ! 

Enlace a networking en Telegram: 👇

https://t.me/joinchat/JC6o5hPYuKn99ZS-SFW7PQ

Que tengas una excelente jornada.

Síguenos en nuestro twitter oficial 
@conscienciared:

http://bit.ly/2Ng5Mxx

Instagram 
@Consciencia.red';
					}
					if ($chatId === -1001349050525 )//RED CONSCIENCIA PLENA
					{
						$response ='Bienvenido/a '.$newParticipant["first_name"].' '.$newParticipant["last_name"].'

Soy Sofía un “bot”  que colaboro en el grupo. 

Un gusto que nos conectemos aquí. 

Te invito a sumarte a la Red de Consciencia de esta Plataforma con estos grupos y canal:    

Canal Consciencia:    
👉 https://t.me/consciencia        

Red Consciencia:   
👉 t.me/redconsciencia     

Afirmaciones diarias:
👉 https://t.me/afirmacionesdiarias

Espiritualidad:
👉 https://t.me/joinchat/JC6o5hRLmZjLsHBFW60hgA

Códigos sagrados:
👉 https://t.me/joinchat/JC6o5g2RixINpuLL3V1kZw

GlobalWork   
👉 t.me/globalmeetwork

Networking Emorendedores 
👉 t.me/networkingemprendedores

Startup 💡 idea
👉 https://t.me/joinchat/JC6o5hPYuKn99ZS-SFW7PQ

Futuros diamantes:
👉 t.me/futurodiamante

Tao Te King:  
👉 https://t.me/joinchat/JC6o5kjzXKVQUOOo_y1PRw  

Meditacion masiva: 
👉 https://t.me/meditacionmasiva 

Fractales y mandalas 
Economía solidaria:
👉 https://t.me/joinchat/JC6o5gubh2hz_Ttv2EOeYA

Que tengas una excelente jornada!


Síguenos en nuestro twitter oficial aquí:

👉 http://bit.ly/2Ng5Mxx

Instagram:
👉 @Consciencia.red';
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

Si deseas obtener tu carta ingresa al grupo Astrologia en nuestra comUnidad y consulta con los administradores! Puedes obtenerla! 
www.consciencia.red 

Si deseas obtener tu carta ingresa al grupo Astrologia en nuestra comUnidad y consulta con los administradores! Puedes obtenerla! 

Comparte este enlace e ingresa a un amigo a este grupo para la evolución según los astros en Telegram
https://bit.ly/2mLNNnC

Síguenos en nuestro twitter oficial @conscienciared:
http://bit.ly/2Ng5Mxx';
					}
					if ($chatId === -1001107790440 ) //FUTUROS DIAMANTES
					{
						$response = 'Bienvenido al grupo de '.$update['message']['chat']['title'].' 

'.$newParticipant['first_name'].' '.$newParticipant['last_name'].'

En este grupo organizaremos la red de comunicación entre líderes comunicadores globales. 

Solicita tu enlace maestro para establecer tu red de referidos. 
Escribiendo la palabra /enlace

Capitaliza tus contactos. Configura tu red para recibir bonificaciones y compensación económica por las compras / inversiones / servicios en multinivel. 

 “Capitaliza tu poder influencia”.

Convoca con tu enlace y suma referidos a tu red. 
Asciende al máximo nivel de ganancias en la red

t.me/futurodiamante

Síguenos en nuestro twitter oficial @conscienciared:
http://bit.ly/2Ng5Mxx';
					}
					if ($chatId === -1001223908517) //TAO
					{
						$response = '¡Bienvenid@ '.$newParticipant['first_name'].' '.$newParticipant['last_name'].' a '.$update['message']['chat']['title'].'! 
“El camino del silencio interior”
Para muchos el libro más profundo que se ha escrito. 

Meditación estudio del TAO TE KING.

Recibe diariamente estrofas de los sucesivos capítulos en canal TAO :
https://bit.ly/2WFfY5N

Comparte este enlace con familiares y amigos para que reciban los mensajes de sabiduría del Tao. 

Ayúdanos a activar con nosotros la red aquí:
t.me/redconsciencia 

Únete a la comunidad consciencia en:
www.consciencia.red

Síguenos en nuestro twitter oficial @conscienciared:
http://bit.ly/2Ng5Mxx';
					}
					if ($chatId === -1001179313572) //ESPIRITUALIDAD
					{
						$response = '¡Bienvenid@ '.$newParticipant['first_name'].' '.$newParticipant['last_name'].' al grupo '.$update['message']['chat']['title'].'! 

“El camino del conocimiento interior”

Comparte tus reflexiones en este grupo y ayúdanos a activar el cambio hacia una #NuevaHumanidad 


Comparte este enlace con familiares y amigos 

https://t.me/joinchat/JC6o5hRLmZjLsHBFW60hgA

Ayúdanos a activar con nosotros la red de consciencia aquí:
t.me/redconsciencia 

Únete a la comunidad consciencia en:
www.consciencia.red

Síguenos en nuestro twitter oficial @conscienciared:
http://bit.ly/2Ng5Mxx';
					}
					if ($chatId === -1001318169578)
					{
						$response = 'Bienvenido/a '.$newParticipant["first_name"].' '. $newParticipant["last_name"].' a '.$update["message"]["chat"]["title"].'!          

Soy Pablo Gargiulo y cómo estás en mi agenda de contactos Telegram me avisa que te has registrado 👏👏💪          

Un gusto que te hayas sumado a esta red súper potente !           

Te invito a sumarte a la Red de Consciencia de esta Plataforma con estos grupos y canal:        

Canal Consciencia:      
👉 https://t.me/consciencia            

Red Consciencia:     
👉 t.me/redconsciencia         

Taller abundancia: 
👉 https://t.me/tallerdeabundancia  

Taller Codigos sagrados: 👉 https://t.me/joinchat/JC6o5g2RixINpuLL3V1kZw  

GlobalWork     
👉 t.me/globalmeetwork          

Startup 💡 idea  
👉 https://t.me/joinchat/JC6o5hPYuKn99ZS-SFW7PQ    

Tao Te King:    
👉 https://t.me/joinchat/JC6o5kjzXKVQUOOo_y1PRw      

👉 Meditacion masiva:  https://t.me/meditacionmasiva     

👉 Libros 📚 red consciencia:
https://t.me/joinchat/JC6o5k6Rq-pF0rTZhr-Z1A';
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