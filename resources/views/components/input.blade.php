<div>
    <label for="{{ $name }}">{{ $label }}</label>
    <input type="{{ $type }}" name="{{ $name }}">
    @error($name)
        <span class="text-red-500">{{ $message }}</span>
    @enderror
</div>
