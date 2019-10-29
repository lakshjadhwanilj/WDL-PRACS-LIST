<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
            <head>
                <style>
                    body{
                        font-family:Arial;
                        font-size:12pt;
                        background-color:pink;
                        color:black;
                    }
                    h2{
                        margin-top:40px;
                        margin-left:630px;
                    }
                    td,th{
                        border: 2px solid black;
                        border-collapse:collapse;
                        padding:15px;
                        background-color:lightgreen;
                        color:black;
                    }
                    table{
                        margin:auto;
                        margin-top:50px;
                    }
                </style>
            </head>
            <body>
                <h2>My CD Collection</h2>
                <table>
                    <tr>
                        <th>TITLE</th>
                        <th>COMPANY</th>
                        <th>PRICE</th>
                        <th>YEAR</th>
                    </tr>
                    <xsl:for-each select="cd_collection/cd">
                    <tr>
                        <td><xsl:value-of select="TITLE"/></td>
                        <td><xsl:value-of select="COMPANY"/></td>
                        <td><xsl:value-of select="PRICE"/></td>
                        <td><xsl:value-of select="YEAR"/></td>
                    </tr>
                    </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>