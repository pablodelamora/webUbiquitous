<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
  xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
  <xsl:output method="xml" indent="yes" />
  <xsl:variable name="discount" select="0.1" />

  <xsl:template match="catalog">
    <xsl:copy>
      <xsl:apply-templates select="item" />
    </xsl:copy>
  </xsl:template>

  <xsl:template match="item">
    <xsl:copy>
      <xsl:attribute name="id"><xsl:value-of select="@id" />
      </xsl:attribute>
      <xsl:copy-of select="maker|description|size|price" />
      <discount>
        <xsl:value-of select="$discount" />
      </discount>
      <discountPrice>
        <xsl:value-of select="price - (price * $discount)" />
      </discountPrice>
      <xsl:copy-of select="currency" />
    </xsl:copy>
  </xsl:template>

</xsl:stylesheet>
