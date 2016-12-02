// almacena la referencia del objeto XMLHttpRequest
var xmlHttp = createXmlHttpRequestObject();

// recupera el objeto XMLHttpRequest
function createXmlHttpRequestObject()
{

	// almacenar� la referencia al objeto  XMLHttpRequest
	var xmlHttp;


	if(window.ActiveXObject)
	{
		try
		{
			xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		catch (e)
		{
			xmlHttp = false;
		}
	}
// si estamos usando Mozilla u otro navegador basado
else
{
	try
	{
		xmlHttp = new XMLHttpRequest();
	}
	catch (e)
	{
		xmlHttp = false;
	}
}

// regresa el objeto generado o despliega un mensaje de error
if (!xmlHttp)
		alert("Error en la creacion del objeto XMLHttpRequest");
	else
		return xmlHttp;
}



//funcion donde sucede el proceso
function process()
{
		// procede solo si el objeto xmlHttp no esta ocupado
		if (xmlHttp.readyState == 4 || xmlHttp.readyState == 0)
		{
			// recupera el nombre introducedo por el usuario en la forma
			name = encodeURIComponent(document.getElementById("miNombre").value);
			// ejecuta la pagina inicio_rapido.php en el servidor
			xmlHttp.open("GET", "procesa.php?name=" + name, true);
			// definimos el metodo para tomar las respuestas del servidor
			xmlHttp.onreadystatechange = handleServerResponse;
			// hacemos la peticion al servidor
			xmlHttp.send(null);
		}
		else
			// Ssi esta ocupado esperamos un segundo
			setTimeout('process()', 1000);
}

function handleServerResponse()
{
	// se mueve al siguiente solo si la transaccion ha sido completada
	if (xmlHttp.readyState == 4)
		{
		// el estatus 200 nos indica que la transaccion fue completada exitosamente
		if (xmlHttp.status == 200)
		{
			// obtiene el XML recuperado del servidor
			xmlResponse = xmlHttp.responseXML;
			// obtiene un elemento del documento (el elemento root) de la estructura XML
			xmlDocumentElement = xmlResponse.documentElement;
			// obtiene el mensaje de texto, que se encuentra en el primer hijo del
			helloMessage = xmlDocumentElement.firstChild.data;
			// actualiza la pantalla del cliente utilizando los datos recibidos del servidor
			document.getElementById("divMensaje").innerHTML = '<i>' + helloMessage + '</i>';

			// reinicializamos la secuencia
			setTimeout('process()', 1000);
		}
		// un estatus diferente a la se�al 200 significa un error
		else
			{
			alert("Error: " + xmlHttp.statusText);
			}
		}
	}
