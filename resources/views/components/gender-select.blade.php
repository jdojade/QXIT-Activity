<div>
    <label for="{{ $name }}">{{ $label }}</label>
    <select class="form-select" name="{{ $name }}">
        <option value=""></option>
        <option value="Male" @if($value ?? '' == 'Male') selected @endif>Male</option>
        <option value="Female" @if($value ?? '' == 'Female') selected @endif>Female</option>
    </select>
    @error($name)
        <span class="text-red-500">{{ $message }}</span>
    @enderror
</div>
