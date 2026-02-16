@csrf

<div class="mb-3">
    <label>Name</label>
    <input type="text" name="name"
        value="{{ old('name', $brand->name ?? '') }}"
        class="form-control">
</div>

<div class="mb-3">
    <label>Logo</label>
    <input type="file" name="logo" class="form-control">
</div>

<button class="btn btn-success">Save</button>
