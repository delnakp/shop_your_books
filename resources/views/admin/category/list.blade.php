<x-admin-layout>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Category</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active"><a href="{{url('add-category')}} ">New Category </a></li>
        </ol>

        @if(session('status'))
            <div class="alert alert-success">
              {{session('status')}}
            </div>
        @endif        

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                List Category
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Sub Categories</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Sub Categories</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </tfoot> 
                    <tbody>
                        @foreach($categories as $category)
                           
                            <tr>    
                            <td>{{++$i}}</td> 
                            <td>{{$category->name}}</td>  
                            <td>
                            @if ($category->subCategories->count())
                                  
                                    <ul>
                                        @foreach ($category->subCategories as $subcategory)
                                            <li>{{ $subcategory->name }} 
                                                <a href="{{url('category/'.$subcategory->id.'/edit') }}" >
                                                   edit
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                    
                            @endif
                            </td>
                            <td>{{$category->created_at}}</td>
                            <td>
                                <form action="{{route('category.delete', $category->id)}}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                            </tr>    
                            @endforeach
   
                    </tbody>
                </table>
            </div>
        </div>

</x-admin-layout>