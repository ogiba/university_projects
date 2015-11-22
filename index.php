<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <script src="scripts/jquery-2.1.4.min.js"></script>
        <script type="text/javascript" src="scripts/justScript.js"></script>
    </head>
    <body>
        <form action="submit.php" method="get">
            <b>slave 1</b>
            <table>
                <tr>
                    <td></td>
                    <td>Wyjscia:</td>
                    <td>Wejscia:</td>		
                </tr>
                <tr>
                    <td>Cyfrowe</td>
                    <td>
                        Q1 <input type="checkbox" name="Q11"><br>
                        Q2 <input type="checkbox" name="Q12">
                    </td>	
                    <td >
                        I1 <div style="display: inline" id="slave_i1"></div> <br>
                        I2 <div style="display: inline" id="slave_i2"></div>
                    </td>
                </tr>
                <tr>
                    <td>Analogowe (0-4095)</td>
                    <td>
                        AO1 <input type="number" name="AO11"><br>
                        AO2 <input type="number" name="AO12">
                    </td>	
                    <td >
                        AI1 <div style="display: inline" id="slave_ai1"></div><br>
                        AI2 <div style="display: inline" id="slave_ai2"></div>
                </tr>
                ​
            </table>
            ​
            <br><br>
            <br><br>
            <b>slave 2</b>
            <table>
                <tr>
                    <td></td>
                    <td>Wyjscia:</td>
                    <td>Wejscia:</td>		
                </tr>
                <tr>
                    <td>Cyfrowe</td>
                    <td>
                        Q1 <input type="checkbox" name="Q21"><br>
                        Q2 <input type="checkbox" name="Q22">
                    </td>	
                    <td>
                        I1 <div style="display: inline" id="slave2_i1"></div> <br>
                        I2 <div style="display: inline" id="slave2_i2"></div>
                    </td>
                </tr>
                <tr>
                    <td>Analogowe (0-4095)</td>
                    <td>
                        AO1 <input type="number" name="AO21"><br>
                        AO2 <input type="number" name="AO22">
                    </td>	
                    <td>
                        AI1 <div style="display: inline" id="slave2_ai1"></div> <br>
                        AI2 <div style="display: inline" id="slave2_ai2"></div>
                    </td>
                </tr>
                ​
            </table>
            ​
            <input type="submit">
            ​
        </form>
        ​
    </body>
</html>
