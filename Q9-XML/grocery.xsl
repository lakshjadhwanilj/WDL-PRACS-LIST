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
                <h2>My Grocery Information</h2>
                <table>
                    <tr>
                        <th>ITEM</th>
                        <th>QUANTITY</th>
                        <th>PRICE</th>
                        <th>BRAND</th>
                    </tr>
                    <xsl:for-each select="grocery_collection/grocery">
                    <tr>
                        <td><xsl:value-of select="ITEM"/></td>
                        <td><xsl:value-of select="QUANTITY"/></td>
                        <td><xsl:value-of select="PRICE"/></td>
                        <td><xsl:value-of select="BRAND"/></td>
                    </tr>
                    </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>