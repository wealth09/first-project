<!--
for loop
foreach loop
forelse loop
while loop
-->

<!--for loop -->
@for ($i = 0; $i <= 10; $i++)
    <h2>The number is {{ $i }}</h2>
@endfor

<!-- foreach loop -->
@foreach ($names as $name)
    <h2>The name is {{ $name }}</h2>
@endforeach

<!-- forelse loop
this has a built code that will do a check for an empty input
-->
@forelse ($names as $name)
    <h2>The name is {{ $name }}</h2>
@empty
    <h2>There are no names!</h2>
@endforelse

<!-- while loop -->
{{ $i = 0 }}
@while ($i < 10)
    <h2>{{ $i }}</h2>
    {{ $i++ }}
@endwhile
