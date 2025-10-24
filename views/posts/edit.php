
<?php include __DIR__ . '/../partials/header.php'; ?>
<main class="container my-2">
    <form action="/posts/edit?id=<?=$post->id?>" method="POST">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input value="<?=$post->title?>" name="title" type="text" class="form-control" id="title" placeholder="Title" require>
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Content</label>
            <textarea 
                name="body"
                class="form-control"
                id="body"
                rows="12"
                placeholder="Write something cool..."><?=$post->body?></textarea>
        </div>
        <button class="btn btn-primary">Update</button>
    </form>
</main>
<?php include __DIR__ . '/../partials/footer.php'; ?>
