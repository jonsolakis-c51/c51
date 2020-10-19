<li>
    <div class="list-group-item d-flex justify-content-between align-items-center">
        <div class="image">
            <img src="{{ $offer->image_url }}" alt=""/>
        </div>

        <div class="name">
            <h4> {{ $offer->name }} </h4>
        </div>

        <span class="badge badge-primary badge-pill">
            {{ $offer->cash_back }} <br/>Cashback
        </span>
</li>
