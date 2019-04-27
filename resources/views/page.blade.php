@extends('layouts.app')
@section('content')

<?use   App\Maintext;
$obj= new Maintext();
?>
<h2>{!!$obj->name!!}</h2>
<div class="content">{!!$obj->body!!} </div>
@endsection
