@extends('includes.header')




@section('content')
<div class="container cart-container">
   <div class="row">
       <div class="col-2 cart-breadcrumb">
           <div class="mt-2">
               <a href="{{route('main')}}">Home</a> / <span> YOUR CART | JIMMY JAZZ</span>

               <h2 class="mt-2">YOUR CART | JIMMYJAZZ</h2>
           </div>
       </div>
       <div class="col-6 mt-4">
           <a class="btn cart-btn mb-3" href="{{route('main')}}">< Continue Shopping</a>

           <p>{{session()->has('success_message') ? session('success_message') : ''}}
           </p>

           <table class="cart-table mt-3">
               <thead>
                 <tr>
                   <th class="py-0"></th>
                   <th class="py-0">Details</th>
                   <th class="py-0">Quantity</th>
                   <th class="py-0">Price</th>
                 </tr>
               </thead>
               <tbody>
               @foreach(Cart::content() as $item)
                 <tr class="text-uppercase">
                   <td class="pb-2"><img  style="width: 93px; height: 118px;" src="{{asset('img/products')}}/{{$item->model->image}}" alt=""></td>
                   <td><div>{{$item->model->brand->brand}} {{$item->name}}</div>
                       <div class="mt-2">Item#: <span class="font-weight-normal">{{$item->id}}</span> <span class="pl-5" style="color: #999999;"><a href="{{route('shop.remove', $item->rowId)}}">REMOVE</a></span></div>
                       <div>COLOR: <span class="font-weight-normal">{{$item->model->color}}</span></div>
                       <div>Size: <span class="font-weight-normal">{{$item->model->size->size}}</span></div>
                       <div class="mt-3">UNIT PRICE: <span class="font-weight-normal">${{$item->price}}</span></div>
                   </td>
                   <td>
                       <form action="{{route('shop.update')}}" method="post">
                           @csrf

                           <input  class="d-inline quantity" type="text" value="{{$item->qty}}" name="quantity">
                           <input type="hidden" name="rowId" value="{{$item->rowId}}">
                           <input class="update-quantity" type="submit" value="Update">
                       </form></td>
                   <td class="pr-2">${{$item->subtotal}}</td>
                 </tr>
                   @endforeach
               </tbody>
             </table>
           <div class="text-uppercase text-center cart-subtotal mt-3 mb-4">
               <p>SubTotal: <span class="float-right pr-2">${{Cart::subtotal()}}</span></p>
               <form action="" class="mt-5 pb-2">
                   <div class="text-right">
                   <input type="hidden">
                   
                   <button type="submit" class="btn cart-btn">Checkout Now ></button>
                   </div>
               </form>
           </div>
       </div>
   </div>
</div>

    @stop