<div class="basket__box">
    <p class="basket__title">Корзина<span class="close"></span></p>
    @php
        $total = 0;
    @endphp
    @if(count($tours) == 0)
        <div class="goods">
            <img src="{{ asset('/assets/add-to-cart_1.png') }}">
            <p>Корзина пуста</p>
        </div>
    @else
        @foreach($tours as $key=>$tour)
            <form action="{{ route('tour.remove') }}" method="post">
                @csrf
                <div class="goods">
                    <span>{{ $tour['city'] }}</span>
                    <p>Цена: {{ $tour['price'] }}$</p>
                    <input type="hidden" name="remove_id" value="{{ $key }}">
                    <button class="delete" type="submit">Удалить</button>
                </div>
            </form>
            @php
                $total+= $tour['price'];
            @endphp
        @endforeach
        <div class="basket__sum">
            <div class="sum__item">{{ $total }}$</div>
            <button class="payment__button">Оплатить</button>
        </div>
    @endif
</div>