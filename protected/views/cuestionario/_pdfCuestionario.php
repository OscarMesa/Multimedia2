<style>
@page {
	header: html_myHTMLHeader;
	footer: _blank;
	resetpagenum: 1;
	background-gradient: linear #1e5799 #7db9e8 0 0.5 1 0.5; 
}
</style>
<?php 
/* @var $formulario1 Formulario1 */

?>

<div style="position:fixed; left: 0; right: 0; bottom: 0; top: 0;">
    <h1 style="text-align: center">Resultado de la encuesta</h1><br/><br/>
    
    <h2>Reconociendo mi vida</h2><br/>
<?php $i=1; foreach ($formulario1->getAttributes() as $key => $value) {
   if($key=='foto' || $key =='fotoFamiliar')continue;
   ?>
<h4><?php echo $i++; ?>.&nbsp; <?php echo $formulario1->getAttributeLabel($key,true); ?></h4> 
<blockquote>
    <?php echo $formulario1->$key;?>
</blockquote><br/>
<?php
} ?><br>

 <h2>Mi proyecto</h2><br/>
<?php $i=1; foreach ($formulario2->getAttributes() as $key => $value) {
   //if($key=='foto' || $key =='fotoFamiliar')continue;
   ?>
<h4><?php echo $i++; ?>.&nbsp; <?php echo $formulario2->getAttributeLabel($key); ?></h4> 
<blockquote>
    <?php echo $formulario2->$key;?>
</blockquote><br/>
<?php
} ?><br/> 
</div>
<pagebreak />   
 <h2>Mi misión es</h2><br/>
<?php $i=1; foreach ($formulario3->getAttributes() as $key => $value) {
   //if($key=='foto' || $key =='fotoFamiliar')continue;
   ?>
<h4><?php echo $i++; ?>.&nbsp; <?php echo $formulario3->getAttributeLabel($key); ?></h4> 
<blockquote>
    <?php echo $formulario3->$key;?>
</blockquote><br/>
<?php
} ?><br/> 
</div>