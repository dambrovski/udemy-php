<?php if(!class_exists('Rain\Tpl')){exit;}?><h1>Hello <?php echo htmlspecialchars( $name, ENT_COMPAT, 'UTF-8', FALSE ); ?></h1>
<p>World!</p>
<p>Versão do PHP: <?php echo htmlspecialchars( $version, ENT_COMPAT, 'UTF-8', FALSE ); ?></p>



<p><?php echo htmlspecialchars( $week["1"], ENT_COMPAT, 'UTF-8', FALSE ); ?></p><br>

<p><?php echo htmlspecialchars( $week, ENT_COMPAT, 'UTF-8', FALSE ); ?></p><br>

{foreach $week as $item}
<p><?php echo htmlspecialchars( $item, ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
{/foreach}