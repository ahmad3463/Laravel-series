<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>


        <h3>{{ $job['title'] }} per year.</h3>

        <p>
            This job pays {{ $job['salary'] }}
        </p>
        
</x-layout>