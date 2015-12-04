<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:template match="/cursuss">
		<xsl:for-each select="cursus">
			<div class="container">
				<h3>Cursus <xsl:value-of select="@name" /></h3>
				<table class="table table-striped">
					<thead>
						<tr>
							<th width="50%">Nom</th>
							<th width="50%">Prénom</th>
						</tr>
					</thead>
					<tbody>
						<xsl:for-each select="teachers/teacher">
							<tr>
								<th><xsl:value-of select="name" /></th>
								<th><xsl:value-of select="surname" /></th>
							</tr>
						</xsl:for-each>
					</tbody>
				</table>
			</div>
		</xsl:for-each>
	</xsl:template>
</xsl:stylesheet>