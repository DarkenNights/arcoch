@extends('nimda.layout.layout')

@section('content')
    <div class="container-fluid" style="margin-bottom: 40px">
        <div class="wrap" id="index-block">
            @include('nimda.layout.header')
            <div id="myGroup">
                <div class="row myGroups" style="margin-bottom: 15px">
                    @foreach($providers as $provider)
                        <div class="col">
                            <a class="col-lg-12 btn btn-primary" style="background-color: {{ $provider->color }}; border-color: {{ $provider->color }}; box-shadow: 0 0 0 0.2rem {{ $provider->color }}b5" data-toggle="collapse" href="#{{ $provider->short_name }}" role="button" aria-expanded="@if($provider->id == 1)true@else false @endif" aria-controls="{{ $provider->short_name }}">
                                {{ $provider->name }}
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-lg-12" id="alertMsg"></div>
                </div>
                <div class="row">
                    <div class="col-12">
                        @foreach($providers as $provider)
                            <div class="collapse multi-collapse @if($provider->id == 1) show @endif" id="{{ $provider->short_name }}">
                                <div class="accordion" id="accordionExample">
                                    @foreach($provider->orders as $order)
                                        <div class="card" style="background-color: {{ $provider->color }}; border-color: {{ $provider->color }}; box-shadow: 0 0 0 0.2rem {{ $provider->color }}b5">
                                            <div class="card-header" id="heading{{ $order->orderNumber }}">
                                                <h2 class="mb-0">
                                                    <button style="color: #FFFFFF" class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse{{ $order->orderNumber }}" aria-expanded="true" aria-controls="collapse{{ $order->orderNumber }}">
                                                        Collapsible Group Item #1
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapse{{ $order->orderNumber }}" class="collapse show" aria-labelledby="heading{{ $order->orderNumber }}" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascripts')
    <script type="text/javascript">
        const $myGroup = $('#myGroup .myGroups');
        $myGroup.on('show.bs.collapse','.collapse', function() {
            $myGroup.find('.collapse.show').collapse('hide');
        });
    </script>
@endsection
