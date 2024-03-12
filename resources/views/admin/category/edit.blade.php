<x-admin-layout>
  <x-admin.header heading="Category" sub_heading="List Category" url="admin.category.list"/>

  @if(session('status'))
      <div class="alert alert-success">
        {{session('status')}}
      </div>
  @endif
  <form action="{{route('admin.category.edit', $subcategory->id)}} " method="POST"> @csrf
      @method('PUT')
    <div class="form-group">
      <x-admin.input-label for="sub_category" >Sub-Category Name</x-admin.input-label>
      <input type="text" name="sub_category" id="name" class="form-control" value="{{ $subcategory->name }}">
       @error('sub_category')
         <span class="text-danger"> {{$message}} </span>  
       @enderror
    </div>
    <div class="form-group mt-3" >
      <x-admin.input-label for="category" >Parent Category</x-admin.input-label>
      <select name="category" id="category_id" class="form-control">
        @foreach ($categories as $category)
        <option value="{{ $category->id }}" @if ($subcategory->category_id == $category->id) ?? selected  @endif>{{ $category->name }}</option>
      @endforeach
    </select>
    @error('category')
         <span class="text-danger"> {{$message}} </span>  
       @enderror
    </div>
    <br/>
    <x-admin.primary-button> UPDATE </x-admin.primary-button>
  </form>
</x-admin-layout>