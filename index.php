<?php
   
   $dog_name = "Ruby";           
   $breed = "bull terrier"; 
   $years = 2.2;                 
   $weight = 10;                 
   $purebred = true;       
   
   
 
   define("P0", 101325);           
   define("T0", 273.15);             

   const GN = 9.80665;              
   const RZ = 6400;  





   $a = 5;
   $b = &$a; 
   $a=11;
   echo "Vrijednost varijable b je: " . $b;
?>

<html lang="en">
<head>
    <title>DZ</title>

    <style>
        
        body {
            display: flex;
            justify-content: center;  
            align-items: center;   
            flex-direction:column;   
            height: 100vh;            
            margin: 0;               
            font-family: poppins; 
        }

        td {
            padding: 10px;            
        }

        button {
            padding: 10px 20px;        
            background-color: #4CAF50; 
            color: white;              
            border: none;              
            cursor: pointer;           
        }

        button:hover {
            background-color: #45a049; 
        }
    </style>
</head>
<h1>Ruby Bull Terrier</h1>
<body>
    <form>
        <table style="border: 1px solid black">
            <tr>
                <td style="border: 1px solid black">
                    <label for="dog_name">Ime psa</label>
                </td>
                <td style="border: 1px solid black">
                    <input id="dog_name" name="dog_name" type="text" value="<?php echo $dog_name; ?>">
                </td>
            </tr>
            <tr>
                <td style="border: 1px solid black">
                    <label for="dog_breed">Pasmina</label>
                </td>
                <td style="border: 1px solid black">
                    <input id="dog_breed" name="dog_breed" type="text" value="<?php echo $breed; ?>">
                </td>
            </tr>
            <tr>
                <td style="border: 1px solid black">
                    <label for="dog_age">Godina</label>
                </td>
                <td style="border: 1px solid black">
                    <input id="dog_age" name="dog_age" type="text" value="<?php echo $years; ?>">
                </td>
            </tr>
            <tr>
                <td style="border: 1px solid black">
                    <label for="dog_weight">Težina (kg)</label>
                </td>
                <td style="border: 1px solid black">
                    <input id="dog_weight" name="dog_weight" type="text" value="<?php echo $weight; ?>">
                </td>
            </tr>
            <tr>
                <td style="border: 1px solid black">
                    <label for="is_purebred">Čistokrvni pas?</label>
                </td>
                <td style="border: 1px solid black">
                    <input id="is_purebred" name="is_purebred" type="text" value="<?php echo $purebred ? 'Da' : 'Ne'; ?>">
                </td>
            </tr>
            <tr>
                <td colspan="2" style="border: 1px solid black">
                    <button type="submit">Spremi</button>
                </td>
            </tr>
        </table>
    </form>
    <h1>Konstante</h1>
    <form>
        <table>
            <tr>
                <td style="border: 1px solid black;">Standardni atmosferski tlak (P₀):</td>
                <td style="border: 1px solid black;"><?php echo P0; ?> Pa</td>
            </tr>
            <tr>
                <td style="border: 1px solid black;">Standardna temperatura (T₀):</td>
                <td style="border: 1px solid black;"><?php echo T0; ?> K</td>
            </tr>
            <tr>
                <td style="border: 1px solid black;">Ubrzanje Zemljine sile teže (gₙ):</td>
                <td style="border: 1px solid black;"><?php echo GN; ?> m/s²</td>
            </tr>
            <tr>
                <td style="border: 1px solid black;">Polumjer Zemlje (rᶻ):</td>
                <td style="border: 1px solid black;"><?php echo RZ; ?> km</td>
            </tr>
            <tr>
                <td colspan="2" style="border: 1px solid black">
                    <button type="submit">Spremi</button>
                </td>
            </tr>
        </table>
    </form>

</body>
</html>
