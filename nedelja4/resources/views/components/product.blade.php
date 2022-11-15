{{--<div>--}}
{{--    <h1>Custom komponenta</h1>--}}

{{--    <h1>{{ $name }}</h1>--}}
{{--    <h1>Slika: {{ $image }}</h1>--}}

{{--    {{ $slot }}--}}
{{--</div>--}}

<div class="col-md-3 w3ls_w3l_banner_left">
    <div class="hover14 column">
        <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
            <div class="agile_top_brand_left_grid_pos">
                <img src="{{ $image }}" alt=" " class="img-responsive" />
            </div>
            <div class="agile_top_brand_left_grid1">
                <figure>
                    <div class="snipcart-item block">
                        <div class="snipcart-thumb">
                            <a href="single.html"></a>
                            <p>{{ $name }}</p>
                            <h4>${{ $price }}</h4>
                        </div>
                        <div class="snipcart-details">
                            <span>{{ $description }}</span>
                            <form action="#" method="post">
                                <fieldset>
                                   <input type="submit" name="submit" value="Add to cart" class="button" />
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </figure>
            </div>
        </div>
    </div>
</div>
