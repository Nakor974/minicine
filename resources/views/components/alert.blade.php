<div 

{{ $attributes->merge(['class' => 'font-bold'])}}>
    <h1> coucou {{$name}} tu est sur le crud du film: {{$titre}}  </h1>

    {{ $slot }} 

    <br>

    @foreach ($tags as $tag)
    {{$tag}}
    @endforeach

    <br>
    {{ $slot }} 

   
</div>