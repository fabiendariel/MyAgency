@php
    $type ??= 'text';
    $class ??= null;
    $name ??= '';
    $value ??= '';
    $label ??= ucfirst($name);    
@endphp
<div @class(["form-check form-switch", $class])>
    <input type="hidden" value="0" name="{{ $name }}">   
    <input class="form-check-input @error($name) is-invalid @enderror" type="checkbox" name="{{ $name }}" role="switch"
    id="{{ $name }}" value="1" @checked(old($name, $value ?? false))>
    <label class="form-check-label" for="{{ $name }}">{{ $label }}</label>
  
    @error($name)
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>