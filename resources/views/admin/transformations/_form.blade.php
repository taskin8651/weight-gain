@csrf

<div class="mb-3">
    <label>Name</label>
    <input type="text" name="name"
        value="{{ old('name', $transformation->name ?? '') }}"
        class="form-control">
</div>

<div class="mb-3">
    <label>Before Image</label>
    <input type="file" name="before_image" class="form-control">
</div>

<div class="mb-3">
    <label>After Image</label>
    <input type="file" name="after_image" class="form-control">
</div>

<div class="mb-3">
    <label>Result / Description</label>
    <textarea name="result" class="form-control">
        {{ old('result', $transformation->result ?? '') }}
    </textarea>
</div>

<button class="btn btn-success">Save</button>
