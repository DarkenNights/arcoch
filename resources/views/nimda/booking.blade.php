@extends('nimda.layout.layout')

@section('content')
    <div class="container-fluid" style="margin-bottom: 40px">
        <div class="wrap" id="index-block" style="background-color: #333">
            @include('nimda.layout.header')
            <div class="row" id="bookings" style="margin-bottom: 20px; background-color: #333">
                @foreach($bookings as $date => $booking)
                    <div class="col" style="border: 2px solid rgb(204, 123, 25)">
                        <div class="row">
                            <div class="col-12" style="text-align: center; font-weight: bold; color: rgb(204, 123, 25); border: solid rgb(204, 123, 25); border-width: 0 0 2px 0">
                                {{ ucfirst(\Carbon\Carbon::parse($date)->locale('fr_FR')->dayName) }}
                                <br>
                                {{ \Carbon\Carbon::parse($date)->format('d/m/Y') }}
                            </div>
                            <div class="col-12">
                                @foreach($booking as $infos)
                                    <div class="row" style="border: solid rgb(204, 123, 25); border-width: 0 0 2px 0">
                                        <div class="col-12">
                                            <div class="row" style="color: #fff">
                                                <div class="col-2" style="text-align: center; padding-left: 0; padding-right: 0; border: solid rgb(204, 123, 25); border-width: 0 2px 2px 0">
                                                    {{ $infos->unitId }}
                                                </div>
                                                <div class="col-10">
                                                    {{ $infos->guestFirstName . ' ' . $infos->guestName }}
                                                </div>
                                                <div class="col-12">
                                                    <span style="color: rgb(204, 123, 25);">Tel:</span> {{ $infos->guestPhone }}
                                                </div>
                                                <div class="col-12">
                                                    <span style="color: rgb(204, 123, 25);">Nombre d'adultes:</span> {{ $infos->numAdult }}
                                                </div>
                                                <div class="col-12">
                                                    <span style="color: rgb(204, 123, 25);">Nombre d'enfants:</span> {{ $infos->numChild }}
                                                </div>
                                                <div class="col-12">
                                                    <span style="color: rgb(204, 123, 25);">Prix:</span> {{ $infos->price }} €
                                                </div>
                                                <div class="col-12">
                                                    <span style="color: rgb(204, 123, 25);">Site:</span> {{ $infos->referer }}
                                                </div>
                                                @if(!empty($infos->message))
                                                    <div class="col-12" style="color: darkred">
                                                        Message: {{ $infos->message }}
                                                    </div>
                                                @endif
                                            </div>

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
