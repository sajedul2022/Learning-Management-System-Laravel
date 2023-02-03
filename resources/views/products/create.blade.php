<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Course ') }}
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class="row" style="margin-top: 20px;">
                        <div class="col-lg-12 margin-tb">
                            <div style="text-align: center;">
                                <h4>Add New Course</h4>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
                            </div>
                        </div>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data"
                        style="margin-top: 20px;">
                        @csrf

                        <div class="row">
                            <div class="col-md-2"></div>

                            <div class="col-md-8">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Course Name:</strong>
                                        <input type="text" name="name" class="form-control" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Detail:</strong>
                                        <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail"></textarea>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Image:</strong>
                                        <input type="file" name="image" class="form-control" placeholder="image">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top: 20px;">
                                    <button type="submit" class="btn">Submit</button>
                                </div>
                            </div>

                        </div>

                    </form>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
