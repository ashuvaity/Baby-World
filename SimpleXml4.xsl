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

<tr bgcolor="pink">
<td><xsl:value-of select="Books/Book-Details/BookID"/></td>
<td><xsl:value-of select="Books/Book-Details/BookName"/></td>
<td><xsl:value-of select="Books/Book-Details/Price"/></td>
<td><xsl:value-of select="Book/Book-Details/UnitsLeft"/></td>
</tr>

</table>
</body>
</html>
</xsl:template>
</xsl:stylesheet>