<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
  <html>
  <body>
    <h2>Perros</h2>
    <table border="1">
      <tr bgcolor="blue">
        <th>ID</th>
        <th>Categoria</th>
        <th>Nombre</th>
      </tr>
      <xsl:for-each select="Perros/perro">
      <tr>
        <td><xsl:value-of select="id"/></td>
        <td><xsl:value-of select="categoria"/></td>
        <td><xsl:value-of select="nombre"/></td>
      </tr>
      </xsl:for-each>
    </table>
  </body>
  </html>
</xsl:template>
</xsl:stylesheet>
