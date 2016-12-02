function getScript(url) {
    var scripttag = document.createElement("script");
    scripttag.setAttribute("type","text/javascript");
    scripttag.setAttribute("src",url);
    document.getElementsByTagName("head")[0].appendChild(scripttag);
}
function searchPerro(query) {
    var url = "http://ubiquitous.csf.itesm.mx/~daw-1374530/content/parcial3/16.11.16/json/Perros/servicios.php?";
    url+= "categoria="+escape(query);
    url+= "&format=json";
    //url+= "&opt=select";
    url+= "&callback=parseResponse";
    getScript(url);
}
function parseResponse(data) {
    // vacias el div
    var results = document.getElementById("results");
    while (results.hasChildNodes()) {
        results.removeChild(results.lastChild);
    }
    // ciclo en los resultados de la busqueda
    for (var i=0; i<data.perros.length; i++) {
        var categoria = data.perros[i].perro.categoria;
        var nombre = data.perros[i].perro.nombre;
        // creamos el link en el encabezado
        var header = document.createElement("h2");
        var link = document.createElement("a");
        link.setAttribute("href",url);
        var text = document.createTextNode(nombre);
        link.appendChild(text);
        header.appendChild(link);

    // creamos un pequeño parrafo resumen
        var para = document.createElement("p");
        var paratext = document.createTextNode(categoria);
        para.appendChild(paratext);

    // insertamos las marcas
        results.appendChild(header);
        results.appendChild(para);
    }
}
*/
