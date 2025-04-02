@extends('client.Layout.app')
@section('content')

    <section class="bg-white py-8">
        <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">

            @forelse($products as $product)
                <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                    <a href="#">
                        <img class="hover:grow hover:shadow-lg" src="{{asset($product->image)}}">
                        <div class="pt-3 flex items-center justify-between">
                            <p>{{$product->designation}}</p>
                        </div>
                        <p class="pt-1 text-gray-900">{{$product->prix_ht*(1+$product->tva/100)}}DH</p>
                    </a>
                </div>

            @empty
                <div>No Products found</div>
            @endforelse
        </div>
    </section>
@endsection
