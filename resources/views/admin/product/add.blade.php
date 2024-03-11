<x-admin-layout>
    <x-admin.header heading="Books" sub_heading="List Books" url="list-books"/>
    
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">General</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">More Details</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Price and Inventory</button>
      </li>
      
    </ul>
    <form action="{{route('admin.product.add')}}" method="POST" class="row g-3">@csrf
   
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
        
    
        {{-- ----------------------------------------------------------- --}}
        <div class="row">
                <div class="col-md-6">
                  <label for="name" class="form-label">Book Name</label>
                  <input type="text" class="form-control" name="name"  value="{{old('name')}}">
                  @error('name')
                    <div class="alert alert-danger">{{$message}} </div>
                  @enderror
                </div>
            
                <div class="col-md-6">
                  <label for="description" class="form-label">Description</label>
                  <textarea name="description"  class="form-control">
                    {{old('description')}}
                  </textarea>
                  @error('description')
                    <div class="alert alert-danger">{{$message}} </div>
                  @enderror
                </div>
        </div>
        {{-- ----------------------------------------------------------- --}}
        <div class="row">
              <div class="col-md-6">
                <label for="author" class="form-label">Author</label>
                <input type="text" class="form-control" name="author" value="{{old('author')}}">
                @error('author')
                    <div class="alert alert-danger">{{$message}} </div>
                @enderror
              </div>
          
              <div class="col-md-6">
                <label for="publisher" class="form-label">Publisher</label>
                <input type="text" class="form-control" name="publisher" value="{{old('publisher')}}">
                @error('publisher')
                    <div class="alert alert-danger">{{$message}} </div>
                @enderror
              </div>
        </div>
        {{-- ----------------------------------------------------------- --}}
        <div class="row">
                  <div class="col-md-6">
                    <label for="category" class="form-label">Category</label>
                    <select name="category" class="form-control">
                      <option value="11">gjfig</option>
                      <option value="11">gjfig</option>
                    </select> 
                  </div>
              
                  <div class="col-md-6">
                    <label for="stock_status" class="form-label">Stock Status</label>
                    <select name="stock_status" class="form-control">
                      <option value="11">gjfig</option>
                      <option value="11">gjfig</option>
                  </select>
                  </div>  
        </div>
          {{-- ----------------------------------------------------------- --}}
        <div class="row mt-2">
                <div class="col-md-6">
                  <input class="form-check-input" type="checkbox" name="hide" value="1">
                  <br />
                  <label class="form-check-label" for="hide">
                  Hide
                </label>
                </div>
            
                <div class="col-md-6">
                  <label for="release_date" class="form-label">Released Date</label>
                  <input type="date" class="form-control" name="release_date">
                </div>
        </div>
    
      </div> {{-- general--}}
      <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
            {{-- ----------------------------------------------------------- --}}
            <div class="row">
                  <div class="col-md-3">
                    <label for="no_of_pages" class="form-label"> No Of Pages</label>
                    <input type="text" class="form-control" name="no_of_pages">
                  </div>

                  <div class="col-md-3">
                    <label for="width" class="form-label">Width</label>
                    <input type="text" class="form-control" name="width">
                  </div>
                  
                  <div class="col-md-3">
                    <label for="height" class="form-label">Height</label>
                    <input type="text" class="form-control" name="height">
                  </div>

                  <div class="col-md-3">
                    <label for="back_cover" class="form-label">Back Cover</label>
                    <select name="back_cover" class="form-control">
                      <option value="gjfig">gjfig</option>
                      <option value="gjfig">gjfig</option>
                  </select>
                  </div>  
            </div>
      </div>{{-- more details--}}
      <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
          
        <div class="row">
      
                <div class="col-md-3">
                  <label for="mrp" class="form-label">M.R.P</label>
                  <input type="text" class="form-control" name="mrp">
                </div>
              
                <div class="col-md-3">
                  <label for="price" class="form-label">Your Price</label>
                  <input type="text" class="form-control" name="your_price">
                </div>
          
                <div class="col-md-3">
                  <label for="discount" class="form-label">Discount Percentage</label>
                  <input type="text" class="form-control" name="discount">
                </div>
          
                <div class="col-md-3">
                  <input class="form-check-input" type="checkbox" name="disc_active" value="1">
                  <br />
                  <label class="form-check-label" for="disc_active">
                  Active Discount ?
                </label>
                </div>
        </div>

        <div class="row">
              <div class="col-md-3">
                <label for="stock" class="form-label">Stock Quantity</label>
                <input type="text" class="form-control" name="stock">
              </div>
          
              <div class="col-md-3">
                <label for="available" class="form-label">Available Quantity</label>
                <input type="text" class="form-control" name="available">
              </div>
              
              <div class="col-md-3">
                <label for="low_stock" class="form-label">Low Stock Quantity</label>
                <input type="text" class="form-control" name="low_stock">
              </div>
          
              <div class="col-md-3">
                  <input class="form-check-input" type="checkbox" name="stock_active" value="1">
                  <br />
                  <label class="form-check-label" for="stock_active">
                  Active Stock ?
                </label>
              </div>
        </div>
        <br/>
       <x-admin.primary-button> ADD </x-admin.primary-button>
      </div>{{-- price--}}
      
    </div>{{-- myTabContent--}}
    </form>

  </x-admin-layout>