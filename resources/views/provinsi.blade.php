@extends('layouts.app')
@section('content')
<div id="bgdark">
    <div class="container">
        <div class="fw-600 fc"><b>Data Covid-19 Berdasarkan Provinsi di Indonesia</b></div>
        <hr>

        @foreach ($data as $dataindo)

        <div class="flex items-center">
            <div class="max-w-7xl w-full mx-auto py-6 sm:px-6 lg:px-8">
                <div class="flex flex-col lg:flex-row w-full lg:space-x-3 space-y-2 lg:space-y-0 mb-2 lg:mb-4">
                    <div class="w-full lg:w-1/4">
                        <div class="widget w-full p-4 rounded-lg bg-red-500 border border-yellow-100 dark:bg-white dark:border-grey-800">
                            <div class="flex flex-row items-center justify-between">
                                <div class="flex flex-col">
                                    <div class="text-xs font-bold uppercase font-light text-white">
                                       Positif
                                    </div>
                                    <div class="text-white text-sm">
                                        Jumlah orang yang positif
                                    </div>
                                    <div class="text-xl font-bold text-white">
                                        {{ $dataindo['positif'] }}
                                    </div>
                                </div>
                                <svg class="stroke-current text-white" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2">
                                    </path>
                                    <circle cx="9" cy="7" r="4">
                                    </circle>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87">
                                    </path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="w-full lg:w-1/4">
                        <div class="widget w-full p-4 rounded-lg bg-blue-500 border border-grey-100 dark:bg-blue-500 dark:border-grey-600">
                            <div class="flex flex-row items-center justify-between">
                                <div class="flex flex-col">
                                    <div class="text-xs font-bold uppercase font-light text-white">
                                        Sembuh
                                    </div>
                                    <div class="text-white text-sm">
                                        Jumlah orang yang sembuh
                                    </div>
                                    <div class="text-xl font-bold text-white">
                                        {{ $dataindo['sembuh'] }}
                                    </div>
                                </div>
                                <svg class="stroke-current text-white" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2">
                                    </path>
                                    <circle cx="9" cy="7" r="4">
                                    </circle>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87">
                                    </path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="w-full lg:w-1/4">
                        <div class="widget w-full p-4 rounded-lg bg-dark border border-grey-100 dark:bg-red-400 dark:border-grey-600">
                            <div class="flex flex-row items-center justify-between">
                                <div class="flex flex-col">
                                    <div class="text-xs font-bold uppercase font-light text-white">
                                        Meninggal
                                    </div>
                                    <div class="text-white text-sm">
                                        Jumlah orang yang meninggal
                                    </div>
                                    <div class="font-xl font-bold text-white">
                                        {{ $dataindo['meninggal'] }}
                                    </div>
                                </div>
                                <svg class="stroke-current text-white" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2">
                                    </path>
                                    <circle cx="9" cy="7" r="4">
                                    </circle>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87">
                                    </path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        @endforeach

        <hr>
        
        <table class="table table-dark table-hover">
            <thead>
              <tr class="tc">
                <th scope="col">No</th>
                <th scope="col">Kota</th>
                <th scope="col">Positif</th>
                <th scope="col">Sembuh</th>
                <th scope="col">Meninggal</th>
              </tr>
            </thead>
            <tbody>
                @php
                    $no = 0;
                @endphp
                @foreach ($dataWilayah as $kota)

                    @php
                        $no++;
                    @endphp
      
                <tr>
                    <th class="tc" scope="row">{{ $no }}</th>
                    <td class="tc">{{ $kota['attributes']['Provinsi'] }}</td>
                    <td class="tc">{{ $kota['attributes']['Kasus_Posi'] }}</td>
                    <td class="tc">{{ $kota['attributes']['Kasus_Semb'] }}</td>
                    <td class="tc">{{ $kota['attributes']['Kasus_Meni'] }}</td>
                </tr>
                </tbody>

            @endforeach
          </table>
        </div>
    </div>
<script>
        const body = document.querySelector('body');
    body.style.backgroundColor = 'rgb(222, 222, 222)';
</script>
@endsection