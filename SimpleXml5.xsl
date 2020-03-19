<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html>
<body>
<h2>Story Books </h2>

<table border="10">
<tr bgcolor="light blue">
<th>BookID</th>
<th>BookName</th>
<th>Price</th>
<th>UnitsLeft</th>
</tr>


<xsl:for-each select="Books/Book-Details">
<xsl:if test="UnitsLeft &gt; 0">


<tr bgcolor="pink">
<td><xsl:value-of select="BookID"/></td>
<td><xsl:value-of select="BookName"/></td>
<td><xsl:value-of select="Price"/></td>
<td><xsl:value-of select="UnitsLeft"/></td>
</tr>
</xsl:if>
</xsl:for-each>
</table>
</body>
</html>
</xsl:template>
</xsl:stylesheet>