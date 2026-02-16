@csrf

<div class="mb-3">
    <label>Title</label>
    <input type="text" name="title"
        value="{{ old('title', $service->title ?? '') }}"
        class="form-control">
</div>

<div class="mb-3">
    <label>Short Description</label>
    <input type="text" name="short_description"
        value="{{ old('short_description', $service->short_description ?? '') }}"
        class="form-control">
</div>

<div class="mb-3">
    <label>Description</label>
    <textarea name="description" class="form-control">
        {{ old('description', $service->description ?? '') }}
    </textarea>
</div>

<div class="mb-3">
    <label>Icon (Optional)</label>
    <input type="text" name="icon"
        value="{{ old('icon', $service->icon ?? '') }}"
        class="form-control">
</div>

<div class="mb-3">
    <label>Image One</label>
    <input type="file" name="image_one" class="form-control">
</div>

<div class="mb-3">
    <label>Image Two</label>
    <input type="file" name="image_two" class="form-control">
</div>

<button class="btn btn-success">Save</button>
