<?php
function fToC($input)
{
	$celsius=5/9*($input-32);
	return $celsius ;
}
function fToKelvin($input)
{
	$kelvin=fToC($input) + 273.15;
	return $kelvin ;
}
function cToF($input)
{
	$fahrenheit=$input*9/5+32;
	return $fahrenheit ;
}
function cToK($input)
{
	$kelvin=$input+273.15;
	return $kelvin ;
}
function KToF($input)
{
	$fahrenheit=9/5*($input-273.15)+32;
	return $fahrenheit ;
}
function KToC($input)
{
	$celsius=$input-273.15;
	return $celsius ;
}
?>



<html>

<head>
  <title>Convertitore Temperature</title>
</head>

<body>
  <form action="" method="post">
    <table>

      <tr>
        <td>
          <select name="Tipoinput">
            <option value="fahrenheit">Fahrenheit</option>
            <option value="celsius">Celsius</option>
            <option value="kelvin"> Kelvin</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>
          <input type="text" name="input">
        </td>
      </tr>
      <tr>
        <td>
          <select name="Tipooutput">
            <option value="fahrenheit">Fahrenheit</option>
            <option value="celsius">Celsius</option>
            <option value="kelvin">Kelvin</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>
          <input type="submit" name="btn" value="Convert">
        </td>
      </tr>
      <tr>
        <td>

          <?php
if(isset($_POST['btn']))

{
    
    $Tipoinput=$_POST['Tipoinput'];
    $Tipooutput=$_POST['Tipooutput'];
    $input=$_POST['input'];
    
    if ($Tipoinput=='fahrenheit') 
    {
        if ($Tipooutput=='celsius') 
        {
            $celsius=fToC($input);
            echo "$input Fahrenheit = $celsius Celsius";
        }  elseif ($Tipooutput=='kelvin') 
        {
            $kelvin=fToKelvin($input);
            echo "$input Fahrenheit = $kelvin Kelvin";
        }  else 
        {
            echo "$input Fahrenheit";
        }
    }
    if ($Tipoinput=='celsius') 
    {
        if ($Tipooutput=='fahrenheit') 
        {
            $fahrenheit=cToF($input);
	        echo "$input Celsius  = $fahrenheit Fahrenheit";
        }  elseif ($Tipooutput=='kelvin') 
        {
            $kelvin=cToK($input);
            echo "$input Celsius   = $kelvin Kelvin";
        }  else 
        {
            echo "$input Celsius";
        }
    }
    if ($Tipoinput=='kelvin') 
    {
        if ($Tipooutput=='fahrenheit') 
        {
            $fahrenheit=KToF($input);
            echo "$input Kelvin  = $fahrenheit Fahrenheit";
        }  elseif ($Tipooutput=='celsius') 
        {
            $celsius=KToC($input);
            echo "$input Kelvin  = $celsius Celsius";
        }  else 
        {
            echo "$input Kelvin";
        }
    } 
}

				?>
        </td>
      </tr>
    </table>
  </form>
</body>

</html>
