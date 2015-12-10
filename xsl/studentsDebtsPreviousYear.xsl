<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:template match="/students">
		<div class="container">
			<h3>Étudiants qui ont des dettes dans les années précédentes</h3>
			<table class="table table-striped">
				<thead>
					<tr>
						<th width="50%">Nom</th>
						<th width="50%">Prénom</th>
					</tr>
				</thead>
				<xsl:for-each select="student">
					<tbody>
						<tr>
							<th><xsl:value-of select="lastName" /></th>
							<td><xsl:value-of select="firstName" /></td>
						</tr>
					</tbody>
				</xsl:for-each>
			</table>
		</div>
	</xsl:template>
</xsl:stylesheet>