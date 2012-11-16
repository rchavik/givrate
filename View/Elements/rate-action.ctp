<?php
if (empty($modelName)) {
	$modelName = Inflector::singularize($this->name);
}
if (empty($photo)) {
	return;
}

$user_id = $this->Session->read('Auth.User.id');
if ($user_id == $photo['Album']['user_id']) {
	return;
}
$Rating = ClassRegistry::init('Givrate.Rating');
$isRated = $Rating->isRated($photo['Token']['token'], $user_id);
?>

<div class='rating-el'>
<?php
if (!empty($isRated)) {
	echo $this->Html->tag('span', 'Rated', array('class' => 'rated'));
} else {
	echo $this->Givrate->star($photo['Photo']['id'], $photo['Token']['token']);
}
?>
</div>
