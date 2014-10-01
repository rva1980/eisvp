Estimado <?php echo $user_login ?>,
<br><br>
Tal y como ha solicitado, su contraseña ha sido reseteada.<br>
Sus nuevos detalles son los siguienes:
<br><br>
Nombre de Usuario: <?php echo $user_login; ?><br>
Contraseña: <?php echo $new_password; ?>
<br><br>
Para cambiar su contraseá, por favor visite esta página: <a href="<?php echo $site_url; ?>/users/<?php echo $user_id; ?>" style="color:#333; text-decoration:underline;"><?php echo $site_url; ?>/users/<?php echo $user_id; ?></a>
<br><br>
Reciba un cordial saludo,<br>
<?php echo $site_name; ?>
