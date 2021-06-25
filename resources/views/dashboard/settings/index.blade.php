@extends('layouts.dashboard')

@push('scripts')
    <script>
      $(document).ready(function($) {
        $('#whatsapp_number').mask('(000) 00000-0000', {
          placeholder: '(___) _____-____',
        })
      })
    </script>
@endpush

@section('page_name')
    Configurações
@endsection

@section('content')
    <div>
        <form action="{{ route('dashboard.settings') }}" method="POST" enctype="multipart/form-data" id="form">
            @csrf
            <div class="md:grid md:grid-cols-3 md:gap-6">

                <div class="md:col-span-1 px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Informações</h3>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                            <div class="grid grid-cols-3 gap-6">
                                <div class="col-span-3 sm:col-span-2">
                                    <label class="block text-gray-800 text-sm font-medium mb-1">
                                        Nome
                                    </label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                        <input type="text" name="name"
                                               value="{{ old('name') ?? auth()->user()->store->name }}"
                                               class="form-input w-full text-gray-800 px-3 py-2 pr-12 rounded border-gray-300 focus:ring-blue-500 focus:ring-opacity-50 @error('name') border-red-500 @enderror">
                                    </div>
                                    @error('name')
                                    <span class="text-red-600 text-sm">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-3 gap-6">
                                <div class="col-span-3 sm:col-span-2">
                                    <label class="block text-gray-800 text-sm font-medium mb-1">
                                        URL
                                    </label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                        <input type="text" disabled value="{{ auth()->user()->store->url }}"
                                               class="form-input w-full text-gray-400 px-3 py-2 pr-12 rounded border-gray-300 focus:ring-blue-500 focus:ring-opacity-50">
                                        <span class="inline-flex items-center px-3 rounded-r-md border border-l-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                            .sualoja.app
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="grid grid-cols-3 gap-6">
                                <div class="col-span-3 sm:col-span-2">
                                    <label class="block text-gray-800 text-sm font-medium mb-1">
                                        Descrição
                                    </label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                        <textarea name="description"
                                                  rows='6' maxlength='255'
                                                  class="form-input w-full text-gray-800 px-3 py-2 pr-12 rounded border-gray-300 focus:ring-blue-500 focus:ring-opacity-50"
                                        >{{ old('description') ?? auth()->user()->store->description }}</textarea>
                                    </div>
                                    @error('description')
                                    <span class="text-red-600 text-sm">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-3 gap-6">
                                <div class="col-span-3 sm:col-span-2">
                                    <label class="block text-gray-800 text-sm font-medium mb-1">
                                        Banner
                                    </label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                        <input name="banner" type="file"
                                               class="form-input w-full text-gray-800 px-3 py-2 pr-12 rounded border-gray-300
                                           focus:ring-blue-500 focus:ring-opacity-50 @error('banner') border-red-500 @enderror">
                                    </div>

                                    @error('banner')
                                    <span class="text-red-600 text-sm">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            @if(auth()->user()->store->banner_path)
                                <div class="grid grid-cols-3 gap-6">
                                    <div class="col-span-3 sm:col-span-2">
                                        <div class='flex flex-col space-y-2 my-2'>
                                            <span class="block text-gray-800 text-sm font-medium mb-1">
                                                Banner atual
                                            </span>
                                            <img src='{{ asset(auth()->user()->store->banner_path) }}'
                                                 class='object-fit rounded'>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="hidden sm:block col-span-full" aria-hidden="true">
                    <div class="py-5">
                        <div class="border-t border-gray-200"></div>
                    </div>
                </div>

                <div class="md:col-span-1 px-4 mt-4 sm:mt-0 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Contato</h3>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">

                            <div class="grid grid-cols-3 gap-6">
                                <div class="col-span-3 sm:col-span-2">
                                    <label class="block text-sm font-medium text-gray-700">
                                        Whatsapp
                                    </label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                        <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500"
                                                 viewBox="0 0 24 24" stroke="currentColor">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M18.403,5.633C16.708,3.936,14.454,3.001,12.053,3 c-4.948,0-8.976,4.027-8.978,8.977c0,1.582,0.413,3.126,1.198,4.488L3,21.116l4.759-1.249c1.312,0.715,2.788,1.092,4.29,1.093h0.004 l0,0c4.947,0,8.975-4.027,8.977-8.977C21.03,9.585,20.098,7.33,18.403,5.633 M12.053,19.445H12.05 c-1.339-0.001-2.652-0.36-3.798-1.041l-0.272-0.162l-2.824,0.741l0.753-2.753l-0.177-0.282c-0.747-1.188-1.141-2.561-1.141-3.971 c0.002-4.114,3.349-7.461,7.465-7.461c1.993,0.001,3.866,0.778,5.275,2.188c1.408,1.411,2.184,3.285,2.183,5.279 C19.512,16.097,16.165,19.445,12.053,19.445 M16.146,13.856c-0.225-0.113-1.327-0.655-1.533-0.73 c-0.205-0.075-0.354-0.112-0.504,0.112s-0.58,0.729-0.711,0.879s-0.262,0.168-0.486,0.056s-0.947-0.349-1.804-1.113 c-0.667-0.595-1.117-1.329-1.248-1.554s-0.014-0.346,0.099-0.458c0.101-0.1,0.224-0.262,0.336-0.393 c0.112-0.131,0.149-0.224,0.224-0.374s0.038-0.281-0.019-0.393c-0.056-0.113-0.505-1.217-0.692-1.666 C9.627,7.787,9.442,7.845,9.304,7.839c-0.13-0.006-0.28-0.008-0.429-0.008c-0.15,0-0.393,0.056-0.599,0.28 C8.07,8.336,7.491,8.878,7.491,9.982c0,1.104,0.804,2.171,0.916,2.321c0.112,0.15,1.582,2.415,3.832,3.387 c0.536,0.231,0.954,0.369,1.279,0.473c0.537,0.171,1.026,0.146,1.413,0.089c0.431-0.064,1.327-0.542,1.514-1.066 c0.187-0.524,0.187-0.973,0.131-1.067C16.52,14.025,16.369,13.968,16.146,13.856">
                                                </path>
                                            </svg>
                                        </span>
                                        <input type="text" name='whatsapp_number' id='whatsapp_number'
                                               value="{{ old('whatsapp_number') ?? auth()->user()->store->whatsapp_number }}"
                                               class="focus:ring-blue-500 focus:border-blue-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                                    </div>

                                    @error('whatsapp_number')
                                    <span class="text-red-600 text-sm">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-3 gap-6">
                                <div class="col-span-3 sm:col-span-2">
                                    <label class="block text-sm font-medium text-gray-700">
                                        URL do Facebook
                                    </label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                        <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500"
                                                 viewBox="0 0 24 24" stroke="currentColor">
                                                <path d="M13.397,20.997v-8.196h2.765l0.411-3.209h-3.176V7.548c0-0.926,0.258-1.56,1.587-1.56h1.684V3.127 C15.849,3.039,15.025,2.997,14.201,3c-2.444,0-4.122,1.492-4.122,4.231v2.355H7.332v3.209h2.753v8.202H13.397z"></path>
                                            </svg>
                                        </span>
                                        <input type="text" name='facebook_url'
                                               value="{{ old('facebook_url') ?? auth()->user()->store->facebook_url }}"
                                               class="focus:ring-blue-500 focus:border-blue-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                                    </div>
                                </div>
                            </div>

                            <div class="grid grid-cols-3 gap-6">
                                <div class="col-span-3 sm:col-span-2">
                                    <label class="block text-sm font-medium text-gray-700">
                                        @ do Instagram
                                    </label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                        <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500"
                                                 viewBox="0 0 24 24" stroke="currentColor">
                                                <path d="M11.999,7.377c-2.554,0-4.623,2.07-4.623,4.623c0,2.554,2.069,4.624,4.623,4.624c2.552,0,4.623-2.07,4.623-4.624 C16.622,9.447,14.551,7.377,11.999,7.377L11.999,7.377z M11.999,15.004c-1.659,0-3.004-1.345-3.004-3.003 c0-1.659,1.345-3.003,3.004-3.003s3.002,1.344,3.002,3.003C15.001,13.659,13.658,15.004,11.999,15.004L11.999,15.004z"></path><circle
                                                        cx="16.806" cy="7.207" r="1.078"></circle><path
                                                        d="M20.533,6.111c-0.469-1.209-1.424-2.165-2.633-2.632c-0.699-0.263-1.438-0.404-2.186-0.42 c-0.963-0.042-1.268-0.054-3.71-0.054s-2.755,0-3.71,0.054C7.548,3.074,6.809,3.215,6.11,3.479C4.9,3.946,3.945,4.902,3.477,6.111 c-0.263,0.7-0.404,1.438-0.419,2.186c-0.043,0.962-0.056,1.267-0.056,3.71c0,2.442,0,2.753,0.056,3.71 c0.015,0.748,0.156,1.486,0.419,2.187c0.469,1.208,1.424,2.164,2.634,2.632c0.696,0.272,1.435,0.426,2.185,0.45 c0.963,0.042,1.268,0.055,3.71,0.055s2.755,0,3.71-0.055c0.747-0.015,1.486-0.157,2.186-0.419c1.209-0.469,2.164-1.424,2.633-2.633 c0.263-0.7,0.404-1.438,0.419-2.186c0.043-0.962,0.056-1.267,0.056-3.71s0-2.753-0.056-3.71C20.941,7.57,20.801,6.819,20.533,6.111z M19.315,15.643c-0.007,0.576-0.111,1.147-0.311,1.688c-0.305,0.787-0.926,1.409-1.712,1.711c-0.535,0.199-1.099,0.303-1.67,0.311 c-0.95,0.044-1.218,0.055-3.654,0.055c-2.438,0-2.687,0-3.655-0.055c-0.569-0.007-1.135-0.112-1.669-0.311 c-0.789-0.301-1.414-0.923-1.719-1.711c-0.196-0.534-0.302-1.099-0.311-1.669c-0.043-0.95-0.053-1.218-0.053-3.654 c0-2.437,0-2.686,0.053-3.655c0.007-0.576,0.111-1.146,0.311-1.687c0.305-0.789,0.93-1.41,1.719-1.712 c0.534-0.198,1.1-0.303,1.669-0.311c0.951-0.043,1.218-0.055,3.655-0.055c2.437,0,2.687,0,3.654,0.055 c0.571,0.007,1.135,0.112,1.67,0.311c0.786,0.303,1.407,0.925,1.712,1.712c0.196,0.534,0.302,1.099,0.311,1.669 c0.043,0.951,0.054,1.218,0.054,3.655c0,2.436,0,2.698-0.043,3.654H19.315z"></path>
                                            </svg>
                                        </span>
                                        <input type="text" name='instagram_url'
                                               value="{{ old('instagram_url') ?? auth()->user()->store->instagram_url }}"
                                               class="focus:ring-blue-500 focus:border-blue-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                                    </div>
                                </div>
                            </div>

                            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                <button type="submit" class="btn-sm bg-green-500 text-white hover:bg-green-600">
                                    Salvar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
