@extends('layout.app')

@section('main')


<!-- component -->
<div class="h-screen bg-red-500 flex justify-center items-center">
	<div class="lg:w-2/5 md:w-1/2 w-2/3">
		<form class="bg-gray-800 p-10 rounded-lg shadow-lg min-w-full">
			<h1 class="text-center text-2xl mb-6 text-white font-bold font-sans">Formulaire d'ajout d'un film</h1>
      {{-- ajout ligne titre --}}
		<div>
				<label class="text-white font-semibold block my-3 text-md" for="username">Titre du Film</label>
				<input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="titre" id="titre_film" placeholder="titre_film" />
        </div>

              {{-- ajout ligne affiche du film --}}
      <div>
            <label class="block text-sm font-medium text-black">affiche</label>
          <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
            <div class="space-y-1 text-center">
              <svg class="mx-auto h-12 w-12 text-white" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              <div class="flex text-sm text-white">
                <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                  <span class="">Upload a file</span>
                  <input id="file-upload" name="file-upload" type="file" class="sr-only">
                </label>
                <p class="pl-1 text-white">or drag and drop</p>
              </div>
              <p class="text-xs text-white">
                PNG, JPG, GIF up to 10MB
              </p>
            </div>
          </div>
    </div>

          {{-- ajout ligne résumé du film --}}
		<div>
					<label class="text-white font-semibold block my-3 text-md" for="email">Résumé</label>
					<input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="résumé" id="résumé" placeholder="résumé" />
        </div>

              {{-- ajout ligne durée du film --}}
		<div>
						<label class="text-white font-semibold block my-3 text-md" for="password">durée</label>
						<input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="time" name="durée" id="durée" placeholder="durée" />
      </div>

              {{-- ajout ligne date de sortie du film --}}
              <div>
                <label class="text-white font-semibold block my-3 text-md" for="password">dispo</label>
                <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="date" name="dispo_film" id="durée" placeholder="dispo_film" />
          </div>
    





		      {{-- ajout ligne réalisateur du film --}}
        <div>
							<label class="text-white font-semibold block my-3 text-md" for="confirm">Réalisateur</label>
							<input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="Réalisateur" id="Réalisateur" placeholder="Réalisateur" />
        </div>

							<button type="submit" class="w-full mt-6 bg-gray-600 rounded-lg px-4 py-2 text-lg text-white tracking-wide font-semibold font-sans">Ajouter un film</button>
		</form>
	</div>
</div>
@endsection