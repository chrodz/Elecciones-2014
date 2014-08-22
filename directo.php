<?php
/**
 * Created by PhpStorm.
 * User: chrod
 * Date: 22/08/14
 * Time: 12:30 PM
 */
$departamentos = array(1=>'AMAZONAS',2=>'ANCASH',3=>'APURIMAC',4=>'AREQUIPA',5=>'AYACUCHO',6=>'CAJAMARCA',7=>'CUSCO',8=>'HUANCAVELICA',9=>'HUANUCO',10=>'ICA',11=>'JUNIN',12=>'LA LIBERTAD',13=>'LAMBAYEQUE',14=>'LIMA',15=>'LORETO',16=>'MADRE DE DIOS',17=>'MOQUEGUA',18=>'PASCO',19=>'PIURA',20=>'PUNO',21=>'SAN MARTIN',22=>'TACNA',23=>'TUMBES');
$provincias = array('');
$distritos = array('');
?>
<form method="get">
  <label>Departamento</label>
  <select name="departamento">
    <?foreach($departamentos as $dpto){?>
      <option><?=$dpto?></option>
    <?}?>
  </select>
  <br>
  <label >Provincia</label>
  <select name="provincia">
    <?foreach($departamentos as $dpto){?>
      <option><?=$dpto?></option>
    <?}?>
  </select>
  <br>
  <label>Distrito</label>
  <select name="distrito">
    <?foreach($departamentos as $dpto){?>
      <option><?=$dpto?></option>
    <?}?>
  </select>
  <input type="submit" value="Enviar">
</form>
<?
//echo file_get_contents('http://consultamiembrodemesa.onpe.gob.pe/pdf/'.$departamento.'/'.$provincia.'/'.$distrito.'/'.$distrito.'.pdf');
//localhost/elecciones2014/directo.php?departamento=LIMA&provincia=LIMA&distrito=LINCE
if(isset($_GET['departamento'])&&isset($_GET['provincia'])&&isset($_GET['distrito'])){
  $departamento = $_GET['departamento'];
  $provincia = $_GET['provincia'];
  $distrito = $_GET['distrito'];
echo '<META HTTP-EQUIV="Refresh" CONTENT="3;URL=http://consultamiembrodemesa.onpe.gob.pe/pdf/'.strtoupper($departamento).'/'.strtoupper($provincia).'/'.strtoupper($distrito).'/'.strtoupper($distrito).'.pdf">';
}
?>