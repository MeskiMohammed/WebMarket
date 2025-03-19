<nav class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all shadow-none duration-250 ease-soft-in rounded-2xl lg:flex-nowrap lg:justify-start"
    navbar-main navbar-scroll="true">
    <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
        <nav class="flex items-center gap-6">
            <a href="javascript:;" class="block p-0 transition-all ease-nav-brand text-sm text-slate-500 xl:hidden"
                sidenav-trigger>
                <div class="w-4.5 overflow-hidden">
                    <i
                        class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                    <i
                        class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                    <i class="ease-soft relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                </div>
            </a>
            <h6 class="mb-0 font-bold capitalize">
                @yield('mini title')
            </h6>
        </nav>

        <!-- <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
            <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">

            </ul>
        </div> -->
    </div>
</nav>