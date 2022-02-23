<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('Encodage pour création du bordereau d\'enlèvement') }} 
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                        <div class="grid grid-cols-1 md:grid-cols-2">

                             <!-- Opérateurs -->
                             <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                                <div class="flex items-center">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path></svg>
                                    <div class="ml-4 text-lg leading-7 font-semibold">Opérateur: Opérateur connecté</div>
                                    <form id="frmUsers" action="{{ route('bordereau.store') }}" method="post">
                                        @csrf
                                        @method('POST')
                                        <select name="operateurs" id="" hidden>
                                            @foreach ($user as $item)
                                                <option name="operateur" value="{{$item->id}}"></option>                                      
                                            @endforeach
                                        </select>
                                    </form>
                                </div>
                    
                                <div class="ml-12">
                                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">

                                        @foreach ($user as $item)
                                            <p>Code opérateur: <span id="idOperateur">{{$item->id}}</span></p>
                                            <p>Nom opérateur: <span id="nomOperateur">{{$item->name}}</span></p>
                                            <p>Email opérateur: <span id="emailOperateur">{{$item->email}}</span></p>                                        
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                           
                            <!-- Quantité -->
                            <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                                <form id="frmQuantite" action="{{ route('bordereau.store') }}" method="post">
                                    <div class="flex items-center">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                                        <div class="ml-4 text-lg leading-7 font-semibold">Quantité à enlèver:</div>
                                            <input type="number" name="quantite" placeholder="Saisissez la quantité" id="quantite" value="0">
                                    </div>
                        
                                    <div class="ml-12">
                                        <div class="mt-2 text-green-600 dark:text-gray-400 text-sm" id="divQuantite">
                                            <p style="margin-top: 30px; font-size: 30px; color: green"><b>Nombre d'articles: <span id="nombreTotal" name="nombreTotal">0 pièce(s)</span></b></p>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <!-- Fournisseur -->
                            <div class="p-6">
                                <div class="flex items-center">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                    <div class="ml-4 text-lg leading-7 font-semibold">Fournisseurs:</div>
                                    <form id="frmFournisseurs" action="{{ route('bordereau.store') }}" method="post">
                                        <select name="fournisseurs" id="fournisseur">                                            
                                            <option value="">Sélectionner un fournisseur</option>
                                            @foreach ($fournisseurs as $fournisseur)                                        
                                                <option value="{{$fournisseur->code_pays}}{{$fournisseur->id}}">{{$fournisseur->nom_fournisseur}}</option>                                        
                                            @endforeach 
                                        </select>
                                    </form>
                                </div>
                    
                                <div class="ml-12">
                                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                        <p>Code fournisseur: <span id="codeFournisseur"></span></p> 
                                        <p>Nom fournisseur: <span id="nomFournisseur"></span></p>                                      
                                        <p>Adresse fournisseur: <span id="adresseFournisseur"></span></p>
                                    </div>
                                </div>
                            </div>  
                            
                             <!-- Poids -->
                             <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                                <div class="flex items-center">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path></svg>
                                    <div class="ml-4 text-lg leading-7 font-semibold">Poids de l'article:</div>
                                    <form id="frmPoids" action="{{ route('bordereau.store') }}" method="post">
                                        <input type="number" id="inputPoids" name="poids" placeholder="Saisissez le poids" value="0">
                                    </form>
                                </div>
                    
                                <div class="ml-12">
                                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                        <p style="margin-top: 30px; font-size: 30px; color: green"><b>Poids total: <span id="poidsTotal" name="poidsTotal">0.00 T</span></b></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Materiels -->
                            <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                                <div class="flex items-center">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                    <div class="ml-4 text-lg leading-7 font-semibold">Materiels:</div>
                                    <form id="frmMateriels" action="{{ route('bordereau.store') }}" method="post">
                                        <select name="materiels" id="materiel">                                            
                                            <option value="">Sélectionner un materiel</option>
                                             @foreach ($materiels as $materiel)
                                                <option value="{{$materiel->nom_materiel}}">{{$materiel->nom_materiel}}</option>                                        
                                             @endforeach 
                                        </select>
                                    </form>
                                </div>
                    
                                <div class="ml-12">
                                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                        <p>Code materiel: <span id="codeMateriel"></span></p>
                                        <p>Nom materiel: <span id="nomMateriel"></span></p>
                                    </div>
                                </div>
                            </div>

                            <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                                <div class="flex items-center">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M17 16v2a2 2 0 01-2 2H5a2 2 0 01-2-2v-7a2 2 0 012-2h2m3-4H9a2 2 0 00-2 2v7a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-1m-1 4l-3 3m0 0l-3-3m3 3V3"></path></svg>
                                    <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Enregistrement & Visualisation</div>
                                </div>
                                
                                <!-- Les boutons -->
                                <div class="ml-12">
                                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                        <button id="btnEnregistrer" type="button" class="text-black bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-base px-6 py-3.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" style="cursor: pointer">Enregistrer</button>

                                        <a href="{{ route('bordereau.store')}}"><button id="btnVisualiser" type="button" class="text-black bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-base px-6 py-3.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" style="cursor: pointer">Visualiser</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <h2 id="message" class="font-semibold text-xl text-gray-800 leading-tight text-center"></h2>
        
        <script>
            
            let fournisseur = document.getElementById('fournisseur');
            fournisseur.addEventListener('change', function () {
                codeFournisseur.innerHTML = this.value;

                if(this.value == 'BE1'){
                    nomFournisseur.innerHTML = "SPF Justice";
                    adresseFournisseur.innerHTML = "115 Bld Waterloo 1000 Bruxelles";
                }else if(this.value == 'BE2'){
                    nomFournisseur.innerHTML = "SPF Finance";
                    adresseFournisseur.innerHTML = "Nord Galaxy";
                }else if(this.value == 'BE3'){
                    nomFournisseur.innerHTML = "Lexmark Belgium";
                    adresseFournisseur.innerHTML = "474 Leuvensesteenweg 1930 Zaventem";
                }else if(this.value == 'FR4'){
                    nomFournisseur.innerHTML = "Capgemini";
                    adresseFournisseur.innerHTML = "15 Avenue Charles De Gaule 7500 Paris";
                }else if(this.value == 'LU5'){
                    nomFournisseur.innerHTML = "KBC Banque Luxembourg";
                    adresseFournisseur.innerHTML = "89b Parc d\'Activités Capellen 8308 Mamer";
                }else if(this.value == 'DE6'){
                    nomFournisseur.innerHTML = "RICOH Allemagne";
                    adresseFournisseur.innerHTML = "Vahrenwalder Strasse 315, 30179 Hanovre";
                }
            })

            let materiel = document.getElementById('materiel');
            materiel.addEventListener('change', function () {
                nomMateriel.innerHTML = this.value;

                if(this.value == 'Laptop'){
                    codeMateriel.innerHTML = "L";
                }else if(this.value == 'Câbles'){
                    codeMateriel.innerHTML = "C";
                }else if(this.value == 'Ordinateurs'){
                    codeMateriel.innerHTML = "O";
                }else if(this.value == 'Projecteurs'){
                    codeMateriel.innerHTML = "Pr";
                }else if(this.value == 'Imprimantes'){
                    codeMateriel.innerHTML = "I";
                }                 
            })

            let inputPoids = document.getElementById('inputPoids');
            inputPoids.addEventListener('change', function () {
                poidsTotal.innerHTML = (inputPoids.value) + ' T';
                quantite.style.display = 'none';
            })

            let quantite = document.getElementById('quantite');
            quantite.addEventListener('change', function () {
                nombreTotal.innerHTML = (quantite.value) + ' pièce(s)';
                inputPoids.style.display = 'none';
            })
            // Enregistrement
            let codeTracking = '';
            btnVisualiser.style.display = 'none';
            const qtKilo = document.querySelector('#divQuantite > [value="Kilogramme"]');  
            const qtTonne = document.querySelector('#divQuantite > [valeur="Tonne"]');
            const qtM3 = document.querySelector('#divQuantite > [valeur="Mèttre cube"]');

            btnEnregistrer.onclick = function(){

                if(((frmFournisseurs.fournisseurs.value == '') || (frmMateriels.materiels.value == '') || (frmUsers.operateurs.value == '')) || (frmQuantite.quantite.value == '0') && (frmPoids.poids.value == '0')){
                    message.style.color = "red";
                    message.innerHTML = "Erreur d'encodage, veuillez fournir toutes les données !!!";
                }else{
                    message.style.color = "green";
                    message.innerHTML = "Données enregistrées. Vous pouvez visualiser le bordereau d'enlèvement";
                    btnEnregistrer.style.display = 'none';
                    btnVisualiser.style.display = 'block';
                }
            }
        </script>
</x-app-layout>
