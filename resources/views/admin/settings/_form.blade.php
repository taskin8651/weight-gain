@csrf

<div class="mb-3">
    <label>Site Name</label>
    <input type="text" name="site_name"
        value="{{ old('site_name', $setting->site_name ?? '') }}"
        class="form-control">
</div>

<div class="mb-3">
    <label>Email</label>
    <input type="email" name="email"
        value="{{ old('email', $setting->email ?? '') }}"
        class="form-control">
</div>

<div class="mb-3">
    <label>Phone</label>
    <input type="text" name="phone"
        value="{{ old('phone', $setting->phone ?? '') }}"
        class="form-control">
</div>

<div class="mb-3">
    <label>Logo</label>
    <input type="file" name="logo" class="form-control">
</div>

<div class="mb-3">
    <label>Favicon</label>
    <input type="file" name="favicon" class="form-control">
</div>

<button class="btn btn-success">Save</button>
