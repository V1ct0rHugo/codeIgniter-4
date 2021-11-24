<?=$this->extend('Layouts/main')?>

<?= $this->section('content')?>

<h2><?=$title?></h2>

<div class="row">
    <?= $this->include('partials/sidebar')?>
    <div class="col-12 col-sm-9">
        <div class="row">
            <?php foreach($posts as $post) : ?>
                <?= view_cell('\App\Libraries\Blog::postItem',['title'=>$post])?>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?= $this->endSection()?>