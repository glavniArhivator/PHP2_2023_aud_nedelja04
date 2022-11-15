@extends("layout")

@section("content")

    <x-product image="slika.png" name="Product 1" price="100.55" description="Description 123">
        <button>Dugme 1</button>
    </x-product>

    {!! $title !!}

{{--    @if(count($products) == 0)--}}
{{--        <div class="alert alert-info">--}}
{{--            Ne postoje zapisi za zadati kriterijum.--}}
{{--        </div>--}}
{{--    @else--}}
{{--        @foreach($products as $p)--}}
{{--            <x-product :image="$p->image"--}}
{{--                       :name="$p->name"--}}
{{--                       :price="$p->price"--}}
{{--                       :description="$p->description"/>--}}

{{--        @endforeach--}}
{{--    @endif--}}

    @forelse ($products as $p)
            <x-product :image="$p->image"
                       :name="$p->name"
                       :price="$p->price"
                       :description="$p->description"/>
    @empty
        <div class="alert alert-info">
            Ne postoje zapisi za zadati kriterijum.
        </div>
    @endforelse

{{--        @foreach($products as $p)--}}
{{--            @component("frontend.product", [ "image" => $p->image])--}}
{{--            @endcomponent--}}
{{--        @endforeach--}}







{{--    <table class="table table-bordered table-striped">--}}
{{--        <tr>--}}
{{--            <td>Name</td>--}}
{{--            <td>Price</td>--}}
{{--            <td>Description</td>--}}
{{--            <td>Image</td>--}}
{{--        </tr>--}}

{{--        @foreach($products as $p)--}}
{{--            <tr>--}}
{{--                <td>{{ $p->name }}</td>--}}
{{--                <td>{{ $p->price }}</td>--}}
{{--                <td>{{ $p->description }}</td>--}}
{{--                <td>{{ $p->image }}</td>--}}
{{--            </tr>--}}
{{--        @endforeach--}}

{{--    </table>--}}


@endsection
