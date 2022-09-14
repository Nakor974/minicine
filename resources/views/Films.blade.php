
@extends('layout.app')

@section('main')



  <div class="relative px-4 py-12 sm:px-6 lg:py-16 lg:px-8">
    <div class="relative mx-auto max-w-7xl">
      <div class="grid max-w-lg gap-5 mx-auto lg:grid-cols-3 lg:max-w-none">
        <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
          <div class="flex-shrink-0">
            <a href="Films" class="block mt-2">
            <img class="object-cover w-full h-full" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSvgVKykeMLittNLZJuzm0l2iVsX_SkpupquQ&usqp=CAU" alt="">
          </div>
          <div class="flex flex-col justify-between flex-1 p-6 bg-white">
            <div class="flex-1">
                <p class="text-xl font-bold text-neutral-600">THE NORTHMAN</p>
            </a>
                <p class="mt-3 text-base text-gray-500">Le prince Amleth est sur le point de devenir un homme lorsque son père est brutalement assassiné par son oncle, qui kidnappe la mère du garçon. Deux décennies plus tard, Amleth est maintenant un Viking qui attaque les villages slaves.</p>
            </div>
          </div>
        </div>
        
        <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
          <div class="flex-shrink-0">
            <a href="Films" class="block mt-2">
                    <img class="object-cover w-full h-full" src="https://imgsrc.cineserie.com/2021/10/dr-strange-2-multiverse-of-mardness.jpg?ver=1" alt="">
                </div>
                <div class="flex flex-col justify-between flex-1 p-6 bg-white">
                    <div class="flex-1">
                        <p class="text-xl font-semibold text-neutral-600">Dr Strange in the Mutliverse of Madness</p>
            </a>
                <p class="mt-3 text-base text-gray-500">Le Docteur Stephen Strange continue ses recherches sur la Pierre du Temps. Cependant, un vieil ami devenu ennemi tente de détruire tous les sorciers de la Terre, ce qui perturbe le plan de Strange.</p>
            </div>
            
          </div>
        </div>
        <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
          <div class="flex-shrink-0">
            <a href="Films" class="block mt-2">
            <img class="object-cover w-full h-full" src="https://www.avionslegendaires.net/wp-content/uploads/2020/04/Top-Gun-Maverick-couverture_IMDB.jpg" alt="">
          </div>
          <div class="flex flex-col justify-between flex-1 p-6 bg-white">
            <div class="flex-1">
                <p class="text-xl font-semibold text-neutral-600">Top Gun Maverick</p>
            </a>
                <p class="mt-3 text-base text-gray-500"> Après plus de 30 ans de service en tant que l'un des meilleurs aviateurs de la Marine, Pete Maverick Mitchell est à sa place, repoussant les limites en tant que pilote d'essai courageux et esquivant l'avancement de grade qui le mettrait à terre.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection