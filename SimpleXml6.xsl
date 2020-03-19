<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html>
<body>
<h2>Books Database</h2>

<table border="1">
<tr bgcolor="red">
<th>BookID</th>
<th>BookName</th>
<th>Price</th>
<th>UnitsLeft</th>
</tr>


<xsl:for-each select="Books/Book-Details">
<xsl:choose>
<xsl:when test="UnitsLeft=18">


<tr bgcolor="orange">
<td><xsl:value-of select="BookID"/></td>
<td><xsl:value-of select="BookName"/></td>
<td><xsl:value-of select="Price"/></td>
<td><xsl:value-of select="UnitsLeft"/></td>
</tr>
</xsl:when>
<xsl:otherwise>
<tr>
<td><xsl:value-of select="BookID"/></td>
<td><xsl:value-of select="BookName"/></td>
<td><xsl:value-of select="Price"/></td>
<td><xsl:value-of select="UnitsLeft"/></td>
</tr>
</xsl:otherwise>
</xsl:choose>
</xsl:for-each>
</table>
</body>
</html>
</xsl:template>
</xsl:stylesheet>