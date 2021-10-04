@extends('layouts.app')

@section('content')
<div class="container">
    <table>
    <tr>
        <th>Yamaha</th>
        <th>Kawasaki</th>
        <th>Honda</th>
    </tr>
    <tr>
    <td>Aerox<img src="/aerox.jpg" alt="">
    </td>
    <td>1:12 H2R<img src="/kawasaki.jpg" alt="">
    </td>
    <td>CBR<img src="/cbr.jpg" alt="">
    </td>
    </tr>
    <tr>
        <th>₱102,900.00 to ₱124,900.00</th>
        <th>₱1.39 - ₱1.8 Million</th>
        <th> ₱1.50 Million</th>
    </tr>
   
</table>
</div>
    </tr>
@endsection
<style>

table, th, td{
    border:1px solid black;
    padding:10px;
    background-color: cyan;
    width: 900px;
    height: 150px;
    text-align: center;
    }
   img{
       width: 150px;
       height: 100px;
   }
</style>
