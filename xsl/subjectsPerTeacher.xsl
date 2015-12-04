<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:template match="/teachers">
		<xsl:for-each select="teacher">
			<div class="container">
				<h3><xsl:value-of select="grade" />&#160;<xsl:value-of select="name" /></h3>
				<table class="table table-striped">
					<thead>
						<tr>
							<th width="50%">Nom</th>
						</tr>
					</thead>
					<tbody>
						<xsl:for-each select="subjects/subject">
							<tr>
								<th><xsl:value-of select="title" /></th>
							</tr>
						</xsl:for-each>
					</tbody>
				</table>
			</div>
		</xsl:for-each>
	</xsl:template>
</xsl:stylesheet>