@extends('layouts.app')

@section('content')

            <div class="pizza-details">
                <h1>Order for {{$pizza->name}}</h1>
                <p>Type -{{$pizza->type}} </p>
                <p>Base -{{$pizza->base}} </p>
                <p class="toppings">Extra toppings</p>
                <ul>
                    @foreach ($pizza->toppings as $topping )
                        <li>{{$topping}}</li>
                    @endforeach
                </ul>
                <form action="/pizzas/{{$pizza->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button>Complete Order</button>
                <a href="/pizzas" class="back">back to all pizzas</a>
                </form>
            </div>


        </div>
@endsection

