<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastro') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">    
                    <form action="/cadastrar" method="post">
                        @csrf
                        <!-- Nome -->
                        <div>
                            <x-input-label for="nome" :value="__('Nome')" />
                            <x-text-input id="nome" class="block mt-1 w-full" type="text" name="nome" :value="old('nome')" required autofocus autocomplete="nome" />
                            <x-input-error :messages="$errors->get('nome')" class="mt-2" />
                        </div>

                        <!-- Calorias -->
                        <div class="mt-4">
                            <x-input-label for="calorias" :value="__('Calorias')" />
                            <x-text-input id="calorias" class="block mt-1 w-full" type="number" name="calorias" :value="old('calorias')" required autocomplete="calorias" step="0.1" />
                            <x-input-error :messages="$errors->get('calorias')" class="mt-2" />
                        </div>

                        <!-- Carboidratos -->
                        <div class="mt-4">
                            <x-input-label for="carboidratos" :value="__('Carboidratos')" />
                            <x-text-input id="carboidratos" class="block mt-1 w-full" type="number" name="carboidratos" :value="old('carboidratos')" required autocomplete="carboidratos" step="0.1" />
                            <x-input-error :messages="$errors->get('carboidratos')" class="mt-2" />
                        </div>

                        <!-- Gorduras -->
                        <div class="mt-4">
                            <x-input-label for="gorduras" :value="__('Gorduras')" />
                            <x-text-input id="gorduras" class="block mt-1 w-full" type="number" name="gorduras" :value="old('gorduras')" required autocomplete="gorduras" step="0.1" />
                            <x-input-error :messages="$errors->get('gorduras')" class="mt-2" />
                        </div>

                        <!-- Proteínas -->
                        <div class="mt-4">
                            <x-input-label for="proteinas" :value="__('Proteínas')" />
                            <x-text-input id="proteinas" class="block mt-1 w-full" type="number" name="proteinas" :value="old('proteinas')" required autocomplete="proteinas" step="0.1" />
                            <x-input-error :messages="$errors->get('proteinas')" class="mt-2" />
                        </div>


                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ms-4">
                                {{ __('Cadastrar') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
