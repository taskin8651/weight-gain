@csrf

<div class="mb-3">
    <label>Title</label>
    <input type="text" name="title" class="form-control"
        value="{{ old('title', $diet_plan->title ?? '') }}">
</div>

<div class="mb-3">
    <label>Description</label>
    <textarea name="description" class="form-control">
        {{ old('description', $diet_plan->description ?? '') }}
    </textarea>
</div>

<div class="mb-3">
    <label>Goal</label>
    <select name="goal" class="form-control">
        <option value="weight_loss">Weight Loss</option>
        <option value="weight_gain">Weight Gain</option>
    </select>
</div>

<div class="mb-3">
    <label>Program</label>
    <select name="program_id" class="form-control">
        @foreach($programs as $program)
            <option value="{{ $program->id }}"
                {{ (isset($diet_plan) && $diet_plan->program_id == $program->id) ? 'selected' : '' }}>
                {{ $program->title }}
            </option>
        @endforeach
    </select>
</div>

<button class="btn btn-success">Save</button>
