@extends('layouts.app')
@section('content')
<div id="bgdark">
    <div class="container">
        <div class="tc">
            <div class="font-xs font-light" style="font-size: 62px;">
                SOBAT COVID
            </div>
            <div class="text-secondary">
                Realtime Data Covid-19 Indonesia
            </div>
        </div>

            {{-- CARD DATA COVID --}}
            <div class="flex items-center">
                <div class="max-w-7xl w-full mx-auto py-6 sm:px-6 lg:px-8">
                    <div class="flex flex-col lg:flex-row w-full lg:space-x-2 space-y-2 lg:space-y-0 mb-2 lg:mb-4">
                        
                    @foreach ($dataIndonesia as $dataCorona)

                        <div class="w-full lg:w-1/4 shadow">
                            <div class="widget w-full p-4 rounded-lg bg-red-500 border border-gray-100 dark:bg-red-900 dark:border-gray-800">
                                <div class="flex flex-row items-center justify-between">
                                    <div class="flex flex-col">
                                        <div class="text-xs font-medium uppercase font-light text-white">
                                        Total Positif
                                        </div>
                                        <div class="text-xl font-bold text-white">
                                            {{ $dataCorona['positif'] }}
                                        </div>
                                        <div class="text-xs font-medium uppercase font-light text-white">
                                            Orang
                                        </div>
                                    </div>
                                    <svg class="stroke-current text-white" fill="none" height="24" stroke="currentColor" 
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
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

                        <div class="w-full lg:w-1/4 shadow">
                            <div class="widget -w-full p-4 rounded-lg bg-blue-500 border border-gray-100 dark:bg-blue-900 dark:border-gray-800">
                                <div class="flex flex-row items-center justify-between">
                                    <div class="flex flex-col">
                                        <div class="text-xs font-medium uppercase font-light text-white">
                                        Total Sembuh
                                        </div>
                                        <div class="text-xl font-bold text-white">
                                            {{ $dataCorona['sembuh'] }}
                                        </div>
                                        <div class="text-xs uppercase font-medium font-light text-white">
                                            Orang
                                        </div>
                                    </div>
                                    <svg class="stroke-current text-white" fill="none" height="24" stroke="currentColor" 
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
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

                        <div class="w-full lg:w-1/4 shadow">
                            <div class="widget -w-full p-4 rounded-lg bg-dark border border-gray-100 dark:bg-grey-900 dark:border-gray-800">
                                <div class="flex flex-row items-center justify-between">
                                    <div class="flex flex-col">
                                        <div class="text-xs font-medium uppercase font-light text-white">
                                        Total Meninggal
                                        </div>
                                        <div class="text-xl font-bold text-white">
                                            {{ $dataCorona['meninggal'] }}
                                        </div>
                                        <div class="text-xs font-medium uppercase font-light text-white">
                                            Orang
                                        </div>
                                    </div>
                                    <svg class="stroke-current text-white" fill="none" height="24" stroke="currentColor" 
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
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

                        @endforeach

                        @isset($worldata)

                        <div class="w-full lg:w-1/4 shadow">
                            <div class="widget -w-full p-4 rounded-lg bg-indigo-900 border border-gray-100 dark:bg-grey-900 dark:border-gray-800">
                                <div class="flex flex-row items-center justify-between">
                                    <div class="flex flex-col">
                                        <div class="text-xs font-medium uppercase font-light text-white">
                                        Total Positif di dunia
                                        </div>
                                        <div class="text-xl font-bold text-white">
                                            {{ $worldata['value'] }}
                                        </div>
                                        <div class="text-xs font-medium uppercase font-light text-white">
                                            Orang
                                        </div>
                                    </div>
                                    <svg class="stroke-current text-white" fill="none" height="24" stroke="currentColor" 
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
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
                        @endisset

                    </div>
                </div>
            </div>

            {{-- STATISTIK --}}
            <div class="container card shadow">
                <div class="font-xl font-medium font-light mt-2">
                    Statistik Data Covid-19 Di Indonesia
                </div>
                <hr>

                <div class="card-body">
                    <canvas id="myChart" width="250" height="100"></canvas>
                    <div class="text-secondary font-light text-sm tc">Data grafik ini berasal dari berita yang ada di indonesia</div>
                </div>
            </div>


            {{-- CARD COVID PROVINSI --}}
            <div class="row row-cards">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xl 12">
                    <div class="container card shadow-sm mt-3">
                        <div class="font-xl font-medium font-light mt-2">
                            Statistik Data Covid-19 Di Indonesia Berdasarkan Provinsi
                        </div>
                        <hr>
                    
                       <div class="p-4">
                        <div class="table-responsive" style="overflow-y: auto; height: 500px;flex-grow: 1;">
                            <table class="table table-dark table-hover">
                                <thead>
                                  <tr class="tc" style="z-index: 9999;">
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
                                    @foreach ($provinsi as $prov)
                    
                                        @php
                                            $no++;
                                        @endphp
                          
                                    <tr>
                                        <th class="tc" scope="row">{{ $no }}</th>
                                        <td class="tc">{{ $prov['attributes']['Provinsi'] }}</td>
                                        <td class="tc">{{ $prov['attributes']['Kasus_Posi'] }}</td>
                                        <td class="tc">{{ $prov['attributes']['Kasus_Semb'] }}</td>
                                        <td class="tc">{{ $prov['attributes']['Kasus_Meni'] }}</td>
                                    </tr>
                                    </tbody>
                    
                                @endforeach
                              </table>
                        </div>
                       </div>

                        </div>
                    </div>
                </div>
            </div>

            {{-- CARD COVID GLOBAL --}}
            <div class="container">
                <div class="row row-cards">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xl-12 ">
                        <div class="container card shadow-sm mt-3">
                            <div class="font-xl font-medium font-light mt-2">
                                Data Covid-19 Di Seluruh Negara
                            </div>
                            <hr>
                            
                            <div class="p-4">
                                <div class="table-responsive" style="overflow-y: auto; height: 500px;flex-grow: 1;">
                                    <table class="table table-dark table-hover">
                                        <thead>
                                          <tr class="tc" style="z-index: 9999;">
                                            <th scope="col">No</th>
                                            <th scope="col">Negara</th>
                                            <th scope="col">Positif</th>
                                            <th scope="col">Sembuh</th>
                                            <th scope="col">Meninggal</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = 0;
                                            @endphp
                                            @foreach ($global as $region)
                            
                                                @php
                                                    $no++;
                                                @endphp
                                  
                                            <tr class="tc">
                                                <td>{{ $no }}</td>
                                                <td>{{ $region['attributes']['Country_Region'] }}</td>
                                                <td>{{ $region['attributes']['Confirmed'] }}</td>
                                                <td>{{ $region['attributes']['Recovered'] }}</td>
                                                <td>{{ $region['attributes']['Deaths'] }}</td>
                                            </tr>
                                            </tbody>
                            
                                        @endforeach
                                      </table>
                                </div>
                               </div>
    
                        </div>
                    </div>
                </div>
            </div>

            {{-- CARD INFO --}}
            <div class="container mx-12 pt-8">
                <div class="grid gap-6 mb-8 md:grid-cols-2">

                    <a href="https://www.unicef.org/indonesia/id/coronavirus" style="text-decoration: none">
                        <div class="min-w-0 p-1 bg-yellow-400 rounded-lg shadow-xs tc">
                            <h4 class="mb-4 font-light text-white">
                                Novel CoronaVirus(Covid-19)
                            </h4>
                            <p class="text-white">
                                Unicef
                            </p>
                        </div>
                    </a>

                   <a href="https://covid19.go.id/masyarakat-umum/cara-ampuh-lawan-covid-19-3m-3t-vaksin" style="text-decoration: none">
                    <div class="min-w-0 p-1 text-white bg-purple-700 rounded-lg shadow-xs tc">
                        <h5 class="mb-4 font-light">
                            Cara Ampuh Lawan COVID-19: 3M, 3T, Vaksin
                        </h5>
                        <p>
                            Covid19.go.id
                        </p>
                    </div>
                   </a>

                   <a href="https://www.kompas.com/tren/read/2020/08/25/170500765/bantuan-saat-pandemi-corona-yang-bisa-didapatkan-umkm?page=all" style="text-decoration: none">
                    <div class="min-w-0 p-1 text-white bg-blue-500 rounded-lg shadow-xs tc">
                        <h5 class="mb-4 font-light">
                            Bantuan Saat Pandemi Corona yang Bisa Didapatkan UMKM
                        </h5>
                        <p>
                            Kompas.com
                        </p>
                    </div>
                   </a>

                   <a href="https://www.alodokter.com/covid-19" style="text-decoration: none">
                    <div class="min-w-0 p-1 text-white bg-green-500 rounded-lg shadow-xs tc">
                        <h4 class="mb-4 font-light">
                            COVID-19 - Gejala, penyebab dan mengobati
                        </h4>
                        <p>
                            Alodokter
                        </p>
                    </div>
                   </a>

                </div>
            </div>

        </div>
    </div>
<script>
        const body = document.querySelector('body');
    body.style.backgroundColor = 'rgb(230, 230, 230)';
</script>

@endsection