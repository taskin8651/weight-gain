@csrf

<div class="mb-3">
    <label>Name</label>
    <input type="text" name="name"
        value="{{ old('name', $testimonial->name ?? '') }}"
        class="form-control">
</div>

<div class="mb-3">
    <label>Message</label>
    <textarea name="message" class="form-control">
        {{ old('message', $testimonial->message ?? '') }}
    </textarea>
</div>

<div class="mb-3">
    <label>Rating (1-5)</label>
    <input type="number" name="rating" min="1" max="5"
        value="{{ old('rating', $testimonial->rating ?? 5) }}"
        class="form-control">
</div>

<div class="mb-3">
    <label>Image</label>
    <input type="file" name="image" class="form-control">
</div>

<button class="btn btn-success">Save</button>
