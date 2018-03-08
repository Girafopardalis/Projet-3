<?php $title = 'Billet simple pour l\'Alaska'; ?>

<?php ob_start(); ?>
<h1>Billet simple pour l'Alaska !</h1>
<h2>Derniers chapitres en date :</h2>

<?php
while ($data = $posts->fetch())
{
?>
	<div class="news">
			<h3>
				<?= htmlspecialchars($data['title']); ?>
				<em>le <?= $data['creation_date_fr']; ?></em>
			</h3>

			<p>
				<?= substr(nl2br(htmlspecialchars($data['content'])), 0, 250); ?>...
				<em><a href="index.php?action=post&amp;id=<?= $data['id']; ?>">Voir plus</a></em>
			</p>
	</div>
<?php
}
$posts->closeCursor();
?>
<?php $content = ob_get_clean(); ?>
<?php require ('template.php'); ?>
	
