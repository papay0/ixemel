<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:template match="/groups">
		<xsl:for-each select="group">
			<div class="container">
				<h3>Groupe <xsl:value-of select="@name" /></h3>
				<table class="table table-striped">
					<thead>
						<tr>
							<th width="50%">Nom</th>
							<th width="50%">Prénom</th>
						</tr>
					</thead>
					<tbody>
						<xsl:for-each select="students/student">
							<tr>
								<th><xsl:value-of select="lastName" /></th>
								<td><xsl:value-of select="firstName" /></td>
							</tr>
						</xsl:for-each>
					</tbody>
				</table>
			</div>
		</xsl:for-each>
	</xsl:template>
</xsl:stylesheet>