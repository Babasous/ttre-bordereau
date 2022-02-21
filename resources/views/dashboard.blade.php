<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('Tableau de bord ou procedure à suivre') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 text-center" >
                    <b>Maintenant que vous êtes connectés, vous devez suivre la procedure suivante:</b>
                
                    <img src="{{asset('/images/liste.jpg')}}" ; width="30px" alt="liste">Générer un numero de suivi qui identifiera un enlèvement,
                    <img src="{{asset('/images/liste.jpg')}}" ; width="30px" alt="liste">Complété les données avant d'imprimer un bordereau,
                    <img src="{{asset('/images/liste.jpg')}}" ; width="30px" alt="liste">Générer un code Tracking pour chaque materiel valorisé et enfin
                    <img src="{{asset('/images/liste.jpg')}}" ; width="30px" alt="liste">Compléter une fiche pour chaque matériel valorisé.
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
