<?php include("init.php"); ?>

<html>
<head>
<title>Fournisseur de service France-Connect</title>
</head>

<body>
<h1>WS France Connect</h1>
<div style='text-align: center'>

<?php if (isset($_SESSION['user_info'])) : ?>

Identifier en tant que <b><?php echo $_SESSION['user_info']['given_name']." ".$_SESSION['user_info']['family_name'] ?></b>
&nbsp;-&nbsp;<a href='logout.php'>Déconnexion</a>

<h2>Données issues de la connexion France Connect</h2>
<table>
	<?php foreach($_SESSION['user_info'] as $key=>$value): ?>
		<tr>
			<th><?php echo $key ?></th>
			<td><?php echo $value ?></td>
		</tr>
	<?php endforeach;?>
</table>
<h2>Données issues des fournisseurs de données </h2>

<table>
	<tr>
		<th>Fournisseur de données</th>
		<th>Type de données</th>
		<th>Valeur</th>
	</tr>
		<?php foreach($_SESSION['fd_user_info'] as $fd => $info): ?>
			<?php foreach($info as $key => $value): ?>
				<tr>
					<td><?php echo $fd ?></td>
					<td><?php echo $key ?></td>
					<td><?php echo $value ?></td>
				</tr>
			<?php endforeach;?>
		<?php endforeach;?>
	
</table>
<?php else :?>
<form action='authentication.php' method='post'>

	<input type='submit' value='Authentification France Connect'/>

</form>
<?php endif;?>
</div>
</body>
</html>