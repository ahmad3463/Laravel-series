<x-layout>
    <x-slot:heading>
        Jobs
    </x-slot:heading>
    @foreach ($jobs as $job)

        <ul>
            <li>
                <a href="/jobs/{{ $job['id'] }}">
                    <b> {{ $job['title'] }} </b>: Pays {{ $job['salary'] }} per year.
                </a>
            </li>
        </ul>

    @endforeach
</x-layout>