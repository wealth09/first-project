@if(5 > 10)
    <p> 5 is lower than 10</p>
@elseif(5 == 10)
    <p>5 is indeed lower than 10</p>
@else
    <p>All conditions are wrong!</p>
@endif

<!-- unless directive -->
@unless(empty($name))
    <h2>Name isn't empty!</h2>
@endunless

<!-- Empty directive -->
@empty($sname)
    <h2>Name is empty!</h2>
@endempty

<!-- Isset Directive -->
@isset($name)
    <h2>Name has been the set</h2>
@endisset

<!-- Switch statement -->

@switch($name)
    @case('Dary')
        <h2>Name is Dary</h2>
        @break
    @case('David')
        <h2>Name is David</h2>
        @break
    @case('Micheal')
        <h2>Name is Michael</h2>
   @default
        <h2>No match found!</h2>
 
@endswitch


