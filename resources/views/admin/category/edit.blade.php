<x-admin-layout>
    <div class="container-fluid px-4">
      <h1 class="mt-4">Category</h1>
      <ol class="breadcrumb mb-4">
          <li class="breadcrumb-item active">List Category</li>
      </ol>
  
    <form action="">
      <div class="form-group">
        <label for="email">Category Name</label>
        <input type="text" name="name" class="form-control" placeholder="Enter category name" >
      </div>
      <div class="form-group">
        <label for="pwd">Sub Category</label>
        <input type="text" name="sub_category" class="form-control" placeholder="Enter sub category" >
      </div>
      
      <button type="submit" class="btn btn-primary">Update</button>
    </form>
  </x-admin-layout><x-admin-layout>
    <x-admin.header heading="Category" sub_heading="List Category" url="/"/>
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
      <x-admin.primary-button>Update</x-admin.primary-button>
    </form>
  </x-admin-layout>