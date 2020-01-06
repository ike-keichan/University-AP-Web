<!DOCTYPE html> 
<html lang="ja">
    <head>
        <meta charset="UTF-8"> 
        <title>長さの単位変換</title>
    </head> 
    <body>
        <form action="P-13r.php" method="post"> 
            <p>
                長さ:
                <input type="text" name="value" /> 
                <select name="unit1" >
                    <option value= "feet" > フィート </option> 
                    <option value= "inch" > インチ </option> 
                    <option value= "cm" > センチメートル </option> 
                    <option value= "meter" > メートル </option> 
                    <option value= "yard" > ヤード </option> 
                    <option value= "mile" > マイル </option>
                </select>
                を
                <select name="unit2" >
                    <option value= "feet" > フィート </option> 
                    <option value= "inch" > インチ </option> 
                    <option value= "cm" > センチメートル </option> 
                    <option value= "meter" > メートル </option> 
                    <option value= "yard" > ヤード </option> 
                    <option value= "mile" > マイル </option>
                </select>
                に
                <input type="submit" value="単位変換!" /> 
            </p>
        </form>
    </body>
</html>