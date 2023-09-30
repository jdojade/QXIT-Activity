<div>
    <label for="{{ $name }}">{{ $label }}</label>
    <input type="{{ $type }}" name="{{ $name }}" class="form-control" value="{{ $value ?? '' }}">
    @error($name)
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
