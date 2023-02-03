<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Single Course') }}
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class="row" style="margin-top: 20px;">
                        <div class="col-lg-12 margin-tb">
                            <div style="text-align: center;">
                                <h4>Show Course</h4>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="margin-top: 20px;text-align: center;">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Course Name:</strong><br>
                                {{ $product->name }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top: 20px;">
                            <div class="form-group">
                                <strong>Details:</strong><br>
                                {{ $product->detail }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top: 20px;">
                            <div class="form-group">
                                <strong>Image:</strong><br>
                                <img src="/images/{{ $product->image }}" width="200px">
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
