@extends('layout')
@section('css')
@endsection
@section('container')
<table border="1">
    <tr>
      <th>Column A</th>
      <th>Column B</th>
    </tr>
    <tr>
      <td rowspan="3">Combined Cell</td>
      <td>Row 1, Column B</td>
    </tr>
    <tr>
      <td>Row 2, Column B</td>
    </tr>
    <tr>
      <td>Row 3, Column B</td>
    </tr>
    <tr>
      <td>Not applicable</td>
      <td>Row 4, Column B</td>
    </tr>
  </table>
  @endsection