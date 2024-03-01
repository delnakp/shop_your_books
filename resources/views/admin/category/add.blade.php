<x-admin-layout>
  <x-admin.header heading="Category" sub_heading="List Category" url="list-category"/>
  <form action="">
    <div class="form-group">
      <x-admin.input-label for="category" >Category Name</x-admin.input-label>
      <x-admin.input-field 
            
            type="text"
            name="name"
            placeholder="Enter category" 
      />

    </div>
    <div class="form-group">
      <x-admin.input-label for="sub category" >Sub Category</x-admin.input-label>
      <x-admin.input-field 
            
            type="text"
            name="sub_category"
            placeholder="Enter sub category" 
      />
      
    </div>
    <br/>
    <x-admin.primary-button>ADD</x-admin.primary-button>
  </form>
</x-admin-layout>