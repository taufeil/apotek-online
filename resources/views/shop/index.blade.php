@extends('fe.master')
@section('product')
    @include('fe.shop')
@endsection

<div class="container">
    <h2>Keranjang Belanja</h2>
    
    @if(session('cart'))
        <table class="table">
            <thead>
                <tr>
                    <th>Produk</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Subtotal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php $total = 0 @endphp
                @foreach(session('cart') as $id => $details)
                    @php $total += $details['price'] * $details['quantity'] @endphp
                    <tr>
                        <td>{{ $details['name'] }}</td>
                        <td>Rp {{ number_format($details['price']) }}</td>
                        <td>{{ $details['quantity'] }}</td>
                        <td>Rp {{ number_format($details['price'] * $details['quantity']) }}</td>
                        <td>
                            <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}">Hapus</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3" class="text-right"><strong>Total:</strong></td>
                    <td>Rp {{ number_format($total) }}</td>
                    <td></td>
                </tr>
            </tfoot>
        </table>
        
        <div class="text-right">
            <a href="{{ route('checkout') }}" class="btn btn-success">Checkout</a>
        </div>
    @else
        <p>Keranjang Anda kosong.</p>
    @endif
</div>