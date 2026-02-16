@csrf

<div class="mb-3">
    <label>Title</label>
    <input type="text" name="title" class="form-control"
        value="{{ old('title', $program->title ?? '') }}">
</div>

<div class="mb-3">
    <label>Description</label>
    <textarea name="description" class="form-control">{{ old('description', $program->description ?? '') }}</textarea>
</div>

<div class="mb-3">
    <label>Type</label>
    <select name="type" class="form-control">
        <option value="weight_loss">Weight Loss</option>
        <option value="weight_gain">Weight Gain</option>
    </select>
</div>

<div class="mb-3">
    <label>Price</label>
    <input type="number" name="price" class="form-control"
        value="{{ old('price', $program->price ?? '') }}">
</div>

<div class="mb-3">
    <label>Duration</label>
    <input type="text" name="duration" class="form-control"
        value="{{ old('duration', $program->duration ?? '') }}">
</div>

<div class="mb-3">
    <label>Image</label>
    <input type="file" name="image" class="form-control">
</div>

<button class="btn btn-success">Save</button>
