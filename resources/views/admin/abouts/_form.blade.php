@csrf

<div class="mb-3">
    <label>Title</label>
    <input type="text" name="title"
        value="{{ old('title', $about->title ?? '') }}"
        class="form-control">
</div>

<div class="mb-3">
    <label>Description</label>
    <textarea name="description" class="form-control">
        {{ old('description', $about->description ?? '') }}
    </textarea>
</div>

<div class="mb-3">
    <label>Image</label>
    <input type="file" name="image" class="form-control">
</div>

<button class="btn btn-success">Save</button>
