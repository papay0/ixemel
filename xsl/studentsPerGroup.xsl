<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:template match="/groups">
		<table class="table">
			<caption>Optional table caption.</caption>
			<thead>
				<tr>
					<xsl:for-each select="group">
						<th><xsl:value-of select="@name" /></th>
					</xsl:for-each>
				</tr>
			</thead>
			<!-- <tbody>
				<tr>
					<th scope="row">1</th>
					<td>Mark</td>
					<td>Otto</td>
					<td>@mdo</td>
				</tr>
				<tr>
					<th scope="row">2</th>
					<td>Jacob</td>
					<td>Thornton</td>
					<td>@fat</td>
				</tr>
				<tr>
					<th scope="row">3</th>
					<td>Larry</td>
					<td>the Bird</td>
					<td>@twitter</td>
				</tr>
			</tbody> -->
		</table>
	</xsl:template>
</xsl:stylesheet>