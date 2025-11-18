<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>


        <h3> <b>{{ $job['title'] }} </b> per year.</h3>

        <p>
            This job pays {{ $job['salary'] }}
        </p>
        
</x-layout>