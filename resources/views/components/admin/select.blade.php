@props([
  'disabled' => false,
  'name'
])

<select name="{{$name}}" class="form-control">
    {{$slot}}
</select>