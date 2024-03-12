<x-admin-layout>
  <x-admin.header heading="Category" sub_heading="List Category" url="admin.category.list"/>
  
   @if(session('status'))
      <div class="alert alert-success">
        {{session('status')}}
      </div> 
   @endif

  <form action="{{route('admin.category.add')}} " method="POST"> @csrf
    <div class="form-group">
      <x-admin.input-label for="sub_category" >Sub-Category Name</x-admin.input-label>
      <x-admin.input-field 
            
            type="text"
            name="sub_category"
            placeholder="Enter sub-category" 
      />
      
    </div>
    <div class="form-group mt-3" >
      <x-admin.input-label for="category" >Parent Category</x-admin.input-label>
      <x-admin.select  name="category">
             

          @foreach ($category as $item)
             <option value="{{$item->id}}">{{$item->name}} </option>  
          @endforeach

      </x-admin.select>
    </div>
    <br/>
    <x-admin.primary-button> CREATE </x-admin.primary-button>
  </form>
</x-admin-layout>