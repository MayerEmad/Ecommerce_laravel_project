@extends('layouts.app')

@section('content')
<div class="product-big-title-area0">
            
    <div class="product-bit-title0">
        <h2>Shopping History</h2>
    </div>
</div> 


    <table cellspacing="0" class="shop_table0 cart">
        <thead>
            <tr>
                <th class="product-thumbnail0">&nbsp;</th>
                <th class="product-name0">Product</th>
                <th class="product-price0">Price</th>
                <th class="product-quantity0">Quantity</th>
                <th class="product-subtotal0">Total</th>
                <th class="product-history0">history</th>
            </tr>
        </thead>
        <tbody>
            <tr class="cart_item0">
                
                <td class="product-thumbnail0">
                    <a href="/storage/img/product-thumb-2.jpg"><img width="145" height="145" alt="poster_1_up" class="shop_thumbnail0" src="img/product-thumb-2.jpg"></a>
                </td>

                <td class="product-name0">
                    <a href="/storage/img/product-thumb-2.jpg">Ship Your product</a> 
                </td>

                <td class="product-price0">
                    <span class="amount">£15.00</span> 
                </td>

                <td class="product-quantity0">
                    
                    <span class="amount">2</span>   

                </td>

                <td class="product-subtotal0">
                    <span class="amount0">£30.00</span> 
                </td>

                <td class="product-history0">
                    
                    <span class="pro-history">12-4-2020</span>   

                </td>

            </tr>

        </tbody>
    </table>

<div class="cart_totals0 ">
    <h2>Cart Totals</h2>

    <table cellspacing="0">
        <tbody>

            <tr class="order-total0">
                <th>Order Total</th>
                <td><strong><span class="amount0">£30.00</span></strong> </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection