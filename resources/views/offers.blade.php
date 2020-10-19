@extends('layouts.app')
@section('title', 'Offers')

@section('content')
    <div>
        <label>Sort By</label>
            <select onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
            <option value=""> </option>
            <option value = "?order_by=name">Name</option>
            <option value = "?order_by=cash_back">Cash Back</option>
            </select>
    </div>

    <div class="offers">
        <ul class="list-group">
            @each('offer', $offers, 'offer')
        </ul>
    </div>
@endsection

