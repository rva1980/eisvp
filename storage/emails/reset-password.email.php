Estimado <?php echo $user_login; ?>,
<br><br>
Has solicitado una nueva contraseña en <?php echo $site_name; ?> porque ha olvidado la antigua.
Si usted no ha solicitado esto, por favor ignore este mensaje.
<br><br>
Para resetear su contraseña, por favor, visite la siguiente página:<br>
<a href="<?php echo $site_url; ?>/users/password-reset?hash=<?php echo $new_hash; ?>" style="color:#333; text-decoration:underline;"><?php echo $site_url; ?>/users/password-reset?hash=<?php echo $new_hash; ?></a>
<br><br>
Cuando visite la página, su contraseña será reseteada, y esta será enviada a usted en un nuevo correo.
<br><br>
Su nombre de usuario es: <?php echo $user_login; ?>
<br><br>
Para editar su perfil, visite esta página:<br>
<a href="<?php echo $site_url ?>/users/<?php echo $user_id; ?>" style="color:#333; text-decoration:underline;"><?php echo $site_url ?>/users/<?php echo $user_id; ?></a>
<br><br>
Reciba un cordial saludo,<br>
<?php echo $site_name; ?>
