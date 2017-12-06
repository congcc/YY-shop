@extends('homes.layout.userbuy')


@section('head')

<link href="/homes/AmazeUI-2.4.2/assets/css/admin.css" rel="stylesheet" type="text/css">
		<link href="/homes/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css">

		<link href="/homes/css/personal.css" rel="stylesheet" type="text/css">
		<link href="/homes/css/cmstyle.css" rel="stylesheet" type="text/css">

		<script src="/homes/AmazeUI-2.4.2/assets/js/jquery.min.js"></script>
		<script src="/homes/AmazeUI-2.4.2/assets/js/amazeui.js"></script>
		
		
		<link href="/homes/css/bostyle.css" rel="stylesheet" type="text/css">

		<meta charset="utf-8">

@endsection

@section('title','发送')

			

 
@section('content')
<script type="text/javascript">
		 setInterval(function(){

 					$.post("{{url('/home/seller/interval)}}",{'_token':'{{ csrf_token() }}',content:content,oid:oid,gid:gid},function(data){
                       
 						console.log(data);

    
                });                        

		},60000)


		
	</script>		
@endsection