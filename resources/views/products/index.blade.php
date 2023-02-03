<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Courses') }}
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">


                    <div class="row" style="margin-top: 20px;">
                        <div class="col-lg-12 margin-tb">
                            <div style="text-align: center;">
                                <h4>Learning Management System </h4>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-success" href="{{ route('products.create') }}">
                                    Add New
                                </a>
                            </div>
                        </div>
                    </div>

                    <br>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <table class="table table-bordered" style="margin-top: 20px;">
                        <tr>
                            <th>No</th>
                            <th>Course Name</th>
                            <th>Details</th>
                            <th>Image</th>
                            <th width="280px">Action</th>
                        </tr>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->detail }}</td>
                                <td><img src="/images/{{ $product->image }}" width="100px"></td>
                                <td>
                                    <form action="{{ route('products.destroy', $product->id) }}" method="POST">

                                        <a class="btn btn-info"
                                            href="{{ route('products.show', $product->id) }}">Show</a>

                                        <a class="btn btn-primary"
                                            href="{{ route('products.edit', $product->id) }}">Edit</a>

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>

                    {!! $products->links() !!}



                </div>
            </div>
        </div>
    </div>
</x-app-layout>
