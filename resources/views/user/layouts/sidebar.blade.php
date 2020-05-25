<div class="card">
    <div class="card-header">
        Menu
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item"><a href={{ route('products', app()->getLocale()) }}>{{ __('Products') }}</a></li>
        <li class="list-group-item"><a href={{ route('basket', app()->getLocale()) }}>{{ __('Basket') }}</a></li>
        <li class="list-group-item"><a href="#">Place holder</a></li>
        <li class="list-group-item"><a href="#">Place holder</a></li>
    </ul>
</div>