@csrf

<div class="mb-3">
    <label>Name</label>
    <input type="text" name="name"
        value="{{ old('name', $contact->name ?? '') }}"
        class="form-control">
</div>

<div class="mb-3">
    <label>Email</label>
    <input type="email" name="email"
        value="{{ old('email', $contact->email ?? '') }}"
        class="form-control">
</div>

<div class="mb-3">
    <label>Phone</label>
    <input type="text" name="phone"
        value="{{ old('phone', $contact->phone ?? '') }}"
        class="form-control">
</div>

<div class="mb-3">
    <label>Message</label>
    <textarea name="message" class="form-control">
        {{ old('message', $contact->message ?? '') }}
    </textarea>
</div>

<button class="btn btn-success">Save</button>
