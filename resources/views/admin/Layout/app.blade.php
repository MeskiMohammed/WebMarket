<!DOCTYPE html>
<html lang="en">
<!-- head -->
@include('admin.Layout.head')
<!-- end head -->

<body>
    <!-- sidebar -->
    @include('admin.Layout.sidebar')
    <!-- end sidebar -->

    <main class="ease-soft-in-out xl:ml-62.5 relative h-screen rounded-xl transition-all duration-200">
        <!-- navbar -->
        @include('admin.Layout.navbar')
        <!-- end navbar -->

        <div class="w-full px-6 py-6 mx-auto h-[calc(100%-calc(0.25rem*12))]">

            <div class="flex flex-wrap mt-6  h-[calc(100%-85px)] lg:h-[calc(100%-48px)]">
                @yield('adminContent')
            </div>

            <!-- footer -->
            @include('admin.Layout.footer')
            <!-- end footer -->

        </div>
    </main>
</body>
<!-- scripts -->
@include('admin.Layout.scripts')
<!-- end scripts -->

</html>