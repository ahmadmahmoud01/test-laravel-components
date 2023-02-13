<x-layout-app>

@section('title', 'Products Page')


@section('content')
    @php
        $my_message = 'this is new message';

    @endphp

    <x-alert message='hello everyone' type='danger'></x-alert>
    <x-alert message='hi everybody' type='primary'></x-alert>
    <x-alert message='$my_message' type='info'></x-alert>

@endsection

</x-layout-app>
