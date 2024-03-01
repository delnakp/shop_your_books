<x-admin-layout>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Category</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active"><a href="{{url('add-category')}} ">New Category </a></li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                List Category
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Sub Category</th>
                            <th>Created at</th>
                            <th>Action</th>
                            
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Sub Category</th>
                            <th>Created at</th>
                            <th>Action</th>
                            
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>Fiction</td>
                            <td>fdfle</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>

</x-admin-layout>