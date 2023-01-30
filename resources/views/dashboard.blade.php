<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard2') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}

                    <livewire:counter />

                </div>
            </div>
        </div>
    </div>
</x-app-layout>


{{-- @push('scripts')

    <!-- Bootstrap core JavaScript-->
    <script src="/assests/backend/vendor/jquery/jquery.min.js"></script>
    <script src="/assests/backend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/assests/backend/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/assests/backend/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="/assests/backend/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="/assests/backend/js/demo/chart-area-demo.js"></script>
    <script src="/assests/backend/js/demo/chart-pie-demo.js"></script>

@endpush --}}

