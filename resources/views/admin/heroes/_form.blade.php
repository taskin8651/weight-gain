@csrf

<div class="mb-3">
    <label>Title</label>
    <input type="text" name="title"
        value="{{ old('title', $hero_section->title ?? '') }}"
        class="form-control">
</div>

<div class="mb-3">
    <label>Subtitle</label>
    <input type="text" name="subtitle"
        value="{{ old('subtitle', $hero_section->subtitle ?? '') }}"
        class="form-control">
</div>

<div class="mb-3">
    <label>Description</label>
    <textarea name="description" class="form-control">
        {{ old('description', $hero_section->description ?? '') }}
    </textarea>
</div>

<div class="mb-3">
    <label>Button Text</label>
    <input type="text" name="button_text"
        value="{{ old('button_text', $hero_section->button_text ?? '') }}"
        class="form-control">
</div>

<div class="mb-3">
    <label>Button Link</label>
    <input type="text" name="button_link"
        value="{{ old('button_link', $hero_section->button_link ?? '') }}"
        class="form-control">
</div>

<div class="mb-3">
    <label>Background Image</label>
    <input type="file" name="background_image" class="form-control">
</div>

<button class="btn btn-success">Save</button>
