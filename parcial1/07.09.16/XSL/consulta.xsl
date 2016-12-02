<?xml version="1.0" encoding="utf-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:output method="html"/>

 <xsl:template match="/">
   <html>
    <head>
      <title>
      </title>
      <link rel="stylesheet" type="text/css" href="estilo.css"/>
    </head>
    <body>
    <h2>Consulta XML utilizando XSL </h2>
    <br/>
    <table border="1">
     <tr>
       <th>Nombre</th>
       <th>Apellido paterno</th>
     </tr>
     <tr>
       <td>
         <xsl:value-of select="Alumnos/alumno/nombre"/>
       </td>
       <td>
         <xsl:value-of select="Alumnos/alumno/apellidoP"/>
       </td>
     </tr>
    </table>
   </body>
 </html>
</xsl:template>
</xsl:stylesheet>
