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
    <td>Repair, Motor Wash, After-sales service and Service training aimed at distributors and dealers 
    </td>
    <td>Motor Repair and Motor Wash </td>
    <td>Change Oil, Motor repair, and Motor Wash</td>
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
    </tr>
    @endsection