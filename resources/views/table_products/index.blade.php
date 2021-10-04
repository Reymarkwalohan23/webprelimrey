@extends('layouts.app')

@section('content')
<div class="container">
    <table>
    <tr>
        <th>Brand</th>
        <th>Model</th>
        <th>Company</th>
    </tr>
    <tr>
        <td>Yamaha
        <img src="/aerox.jpg" alt="">
        </td>
        <td>Aerox</td>
        <td>Yamaha Corporation</td>
    </tr>
    <tr>
        <td>Kawasaki
        <img src="/kawasaki.jpg" alt="">
        </td>
        <td>1:12 H2R</td>
        <td>Kawasaki Corporation</td>
    </tr>
    <tr>
         <td>Honda
        <img src="/cbr.jpg" alt="">
        </td>
        <td>CBR</td>
        <td>Honda Corporation</td>
</table>
</div>
    </tr>
@endsection
<style>

table, th, td{
    border:70px solid black;
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