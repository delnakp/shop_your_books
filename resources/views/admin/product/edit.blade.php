<x-admin-layout>
    <x-admin.header heading="Category" sub_heading="List Category" url="list-category"/>
    <form action="{{route('admin.category.edit')}} " method="POST"> @csrf
        @method('PUT')
      <div class="form-group">
        <x-admin.input-label for="sub_category" >Sub-Category Name</x-admin.input-label>
        <input type="text" name="sub_category" id="name" class="form-control" value="{{ $category->name }}">
      
      </div>
      <div class="form-group mt-3" >
        <x-admin.input-label for="category" >Parent </x-admin.input-label>
        <select name="category" id="category_id" class="form-control">
          @foreach ($category as $item)
          <option value="{{$item->id}}">{{$item->name}} </option>  
          @endforeach
      </select>
      </div>
      <br/>
      <x-admin.primary-button> ADD </x-admin.primary-button>
    </form>
  </x-admin-layout>