@extends('layouts.renter')
@section('content')
<div class="search-container">
        <div class="search-wrapper">
            <form action="#">
            <div class="button-search-area">
                <h3>Search Rental Place</h3>
                
                <button type="submit">Search</button>
            </div>
            <div class="search-area">
                <input class="searchInputs" type="text" placeholder="Select Location">
                <ul class="searchResults"></ul>
            </div>
            <div class="type-area">
                <h3>Property Type</h3>
                <br>
                <input type="button" class="type" value="Boarding House">
                <input type="button" class="type" value="Apartment">
                <input type="button" class="type" value="Dormitory">
                <input type="button" class="type" value="Bed Space">
            </div>
            <div class="price-area">
                <h3>Price Range</h3>
                <input type="Number" placeholder="0">
                ->
                <input type="Number" placeholder="0">
            </div>
            <h3>Beds</h3>
            <div class="bed-area">  
                <div class="btn-bed">
                <input type="button" class="beds" value="Any">
                <input type="button" class="beds" value="1">
                <input type="button" class="beds" value="2">
                <input type="button" class="beds" value="3">
                <input type="button" class="beds" value="4">
                <input type="button" class="beds" value="5">
                <input type="button" class="beds" value="6">
                <input type="button" class="beds" value="7">
                <input type="button" class="baths" value="8+">

                </div>
            </div>
            <h3>Bathdroom</h3>
            <div class="bath-area">
                <div class="btn-bath">
                <input type="button" class="baths" value="Any">
                <input type="button" class="baths" value="1">
                <input type="button" class="baths" value="2">
                <input type="button" class="baths" value="3">
                <input type="button" class="baths" value="4">
                <input type="button" class="baths" value="5">
                <input type="button" class="baths" value="6">
                <input type="button" class="baths" value="7">
                <input type="button" class="baths" value="8+">
            </div>
            </div>
        </form>
        </div>
    </div>
    </div>
@endsection