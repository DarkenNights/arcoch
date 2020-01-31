@extends('nimda.layout.layout')

@section('content')
    <div class="container-fluid" style="margin-bottom: 40px">
        <div class="wrap" id="index-block">
            @include('nimda.layout.header')
            <div class="row" id="bookings" style="margin-bottom: 20px">
                @foreach($bookings as $date => $booking)
                    <div class="col">
                        <div class="row">
                            <div class="col-12" style="text-align: center; font-weight: bold">
                                {{ ucfirst(\Carbon\Carbon::parse($date)->locale('fr_FR')->dayName) . ' ' . \Carbon\Carbon::parse($date)->format('d/m/Y') }}
                            </div>
                            <div class="col-12">
                                @foreach($booking as $infos)
                                    <div class="row">
                                        <div class="col-12">
                                            {{ $infos->guestFirstName . ' ' . $infos->guestName }}
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('javascripts')

@endsection
