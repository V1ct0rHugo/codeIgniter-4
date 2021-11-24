<?=$this->extend('Layouts/main')?>

<?= $this->section('content')?>
<h1><?=$title?></h1>
<a href="/blog/delete/<?= $post['post_id'] ?>" class="btn btn-danger">Deletar</a>
<a href="/blog/edit/<?= $post['post_id'] ?>" class="btn btn-primary">Update</a>

<?= $this->endSection() ?>