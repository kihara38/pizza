@extends('layouts.layout')

@section('content')

<div class="create-pizza">
    <h1>Create a New Pizza</h1>
    <form action="/pizzas" method="POST">
        <label for="name">Your name</label>
        <input type="text" name="name" id="name">
        <label for="type"> Choose Pizza Type:</label>
        <select name="type" id="type">
            <option value="margarita">margarita</option>
            <option value="hawaiian">hawaiian</option>
            <option value="veg supreme">veg supreme</option>
            <option value="volcano">volcano</option>
        </select>
        <label for="base"> Choose Pizza Base:</label>
        <select name="base" id="base">
            <option value="cheesy crust">cheesy crust</option>
            <option value="garlic crust">garlic crust</option>
            <option value="thin & cripsy">thin & cripsy</option>
            <option value="thick">thick</option>
        </select>
        <input type="submit" value="Order Pizza">
    </form>
</div>
@endsection
