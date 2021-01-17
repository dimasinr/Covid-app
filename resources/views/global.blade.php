@extends('layouts.app')
@section('content')
<div id="bgdark">
    <div class="container">

        <div class="tc">
            <div class="font-xs font-light" style="font-size: 62px;">
                SOBAT COVID
            </div>
            <div class="text-secondary">
                Realtime Data Covid-19 Global
            </div>
        </div>

        <div class="container flex items-center">
            <div class="max-w-7xl w-full mx-auto py-6 sm:px-6 lg:px-8">
                <div class="flex flex-col lg:flex-row w-full lg:space-x-2 space-y-2 lg:space-y-0 mb-2 lg:mb-4">
                    
                    @isset($positif)
                    <div class="w-full lg:w-1/4 shadow">
                        <div class="widget w-full p-4 rounded-lg bg-dark border border-gray-100 dark:bg-red-900 dark:border-gray-800">
                            <div class="flex flex-row items-center justify-between">
                                <div class="flex flex-col">
                                    <div class="text-xs font-medium uppercase font-light text-white">
                                    Total Positif
                                    </div>
                                    <div class="text-xl font-bold text-white">
                                        {{ $positif['value'] }}
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

                    @isset($sembuh)
                    <div class="w-full lg:w-1/4 shadow">
                        <div class="widget w-full p-4 rounded-lg bg-indigo-900 border border-gray-100 dark:bg-red-900 dark:border-gray-800">
                            <div class="flex flex-row items-center justify-between">
                                <div class="flex flex-col">
                                    <div class="text-xs font-medium uppercase font-light text-white">
                                    Total Sembuh
                                    </div>
                                    <div class="text-xl font-bold text-white">
                                        {{ $sembuh['value'] }}
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

                    @isset($meninggal)
                    <div class="w-full lg:w-1/4 shadow">
                        <div class="widget w-full p-4 rounded-lg bg-blue-800 border border-gray-100 dark:bg-red-900 dark:border-gray-800">
                            <div class="flex flex-row items-center justify-between">
                                <div class="flex flex-col">
                                    <div class="text-xs font-medium uppercase font-light text-white">
                                    Total Meninggal
                                    </div>
                                    <div class="text-xl font-bold text-white">
                                        {{ $meninggal['value'] }}
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

       <div class="card shadow-xl">
           <div class="col-md-12 col-lg-12 col-sm-12 col-xl-12">
               <div class="container mt-2">
                   <div class="font-xl font-medium font-light mt-2">
                    <div class="ml-4 fw-700 tc">
                        <blockquote>PANDEMI COVID-19</blockquote>
                    </div>
                    <div class="text-secondary mb-4 ml-4 tc">
                        <p>
                            The COVID-19 pandemi , juga dikenal sebagai pandemi coronavirus , adalah berkelanjutan pandemi dari penyakit coronavirus 2019 (COVID-19)
                        yang disebabkan oleh akut sindrom pernafasan coronavirus 2 (SARS-CoV-2). Ini pertama kali diidentifikasi pada Desember 2019 di Wuhan , Cina . 
                        The World Health Organization menyatakan wabah sebuah Kesehatan Darurat Masyarakat Peduli Internasional pada bulan Januari 2020 dan pandemi Maret 2020. 
                        Pada 9 Januari 2021, lebih dari 88,8  juta kasus telah dikonfirmasi, dengan lebih dari 1,91  juta kematian disebabkan COVID-19 .
                        </p>
                    </div>
                   </div>
               </div>
           </div>
       </div>
       
        <div class="row row-cards">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xl-12">
                <div class="container card shadow-xl mt-2">
                    <div class="font-xl font-medium font-light mt-2">
                        Data Covid-19 Di Berbagai Negara
                    </div>
                    <hr>
                    
                    <div class="p-4">
                        <div class="table-responsive" style="overflow-y: auto; height: 500px; flex-grow: 1;">
                            <table class="table table-dark table-hover table-bordered">
                                <thead>
                                  <tr class="tc" style="z-index: 9999">
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
                                    @foreach ($dataGlobal as $kota)
                    
                                        @php
                                            $no++;
                                        @endphp
                          
                                    <tr class="tc">
                                        <th scope="row">{{ $no }}</th>
                                        <td>{{ $kota['attributes']['Country_Region'] }}</td>
                                        <td>{{ $kota['attributes']['Confirmed'] }}</td>
                                        <td>{{ $kota['attributes']['Recovered'] }}</td>
                                        <td>{{ $kota['attributes']['Deaths'] }}</td>
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
<script>
        const body = document.querySelector('body');
    body.style.backgroundColor = 'rgb(222, 222, 222)';
</script>
@endsection