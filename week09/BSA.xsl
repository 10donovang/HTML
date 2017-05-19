<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<style>

tr {background-color: blue;}
th {text-align: center;}
td {text-align: center;}
h1 {font-family: verdana}
h2 {font-family: verdana}
table {border: 1px solid green;}
</style>

<html>
<body>
	<h1>Boy Scouts of America</h1>
	<h2><xsl:for-each select="bsa/council">Council:<xsl:value-of select="@name"/>
	<div>         </div>
			</xsl:for-each> </h2>
	<table>
		<tr bgcolor="blue">
			
			<th>Troop</th>
			<th>Unit</th>
			<th>Name</th>
			<th>Rank</th>
			<th>Date Obtained</th>
			<th>Badges</th>
			<th>Date Obtained</th>
			<th>Address</th>
			<th>Phone Number</th> 
</tr>

<xsl:for-each select="bsa/council/troop">
	 <tr>
		<td><xsl:value-of select="@troopnumber"/></td>
		<td><xsl:value-of select="@unit"/></td>
		<td><xsl:value-of select="scout/firstname"/>
                <xsl:value-of select="scout/lastname"/> </td>
		<xsl:for-each select="scout"><td><xsl:value-of select="rank"/>
		</td>
		<td><xsl:value-of select="rank/@date-earned"/></td>
		<td><xsl:value-of select="meritbadge"/></td>
		<td><xsl:value-of select="meritbadge/@date-earned"/></td>
		</xsl:for-each>
		<td><xsl:value-of select="scout/address"/></td>
		<td><xsl:value-of select="scout/phone"/></td>
	</tr>
</xsl:for-each>
</table>
</body>
</html>
</xsl:template>
</xsl:stylesheet>
		
