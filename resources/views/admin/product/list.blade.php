<x-admin-layout>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Books</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active"><a href="{{route('admin.product.add')}} ">New Book </a></li>
        </ol>

        @if(session('status'))
            <div class="alert alert-success">
              {{session('status')}}
            </div>
        @endif        

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                List Books
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Book Code</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Author</th>
                            <th>Publisher</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Book Code</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Author</th>
                            <th>Publisher</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </tfoot> 
                    <tbody>
                        @foreach($books as $book)
                           
                            <tr>    
                            <td>{{++$i}}</td>
                            <td>{{$book->product_code}}</td> 
                            <td>{{$book->name}}</td>  
                            <td>{{$book->description}}</td>
                            <td>{{$book->author}}</td> 
                            <td>{{$book->publisher}}</td> 
                           
                            <td>{{$book->created_at}}</td>
                            <td>
                                <a href="{{route('admin.product.edit', $book->id)}} "><button  class="btn btn-primary btn-sm">Edit</button></a>
                               
                                <form  method="POST" class="d-inline">
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