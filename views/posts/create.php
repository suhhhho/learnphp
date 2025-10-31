<?php include __DIR__ . '/../partials/header.php'; ?>
<main class="container my-2">
    <form action="/posts" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input name="title" type="text" class="form-control" id="title" placeholder="Title" require>
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Content</label>
            <textarea name="body" class="form-control" id="body" rows="12" placeholder="Write something cool..."></textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input multiple name="image[]" type="file" class="form-control" id="image">
        </div>
        <button class="btn btn-primary">Create</button>
    </form>
</main>
<?php include __DIR__ . '/../partials/footer.php'; ?>